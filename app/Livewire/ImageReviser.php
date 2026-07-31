<?php

namespace App\Livewire;
use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use ZipArchive;
use Livewire\Attributes\On;

class ImageReviser extends Component
{
    use WithFileUploads;

    // Modal Control State
    public bool $showPricingModal = false;

    // Pricing Modal Listeners & Handlers
    #[On('open-pricing-modal')]
    public function openPricingModal()
    {
        $this->showPricingModal = true;
    }

    public function closePricingModal()
    {
        $this->showPricingModal = false;
    }

    // Checkout Processor
  // Checkout Processor with Real Stripe Integration
public function processCheckout($plan = 'yearly')
{
    if (!auth()->check()) {
        session()->flash('error', 'Please log in to purchase a plan.');
        return;
    }

    try {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $charge = Charge::create([
            'amount'      => 7000,
            'currency'    => 'usd',
            'source'      => 'tok_visa',
            'description' => 'ClearCut AI - Pro Subscription (' . ucfirst($plan) . ')',
        ]);

        // 1. User Database update karein (PRO status + Unlimited/Extra Credits)
        auth()->user()->update([
            'is_pro'    => true,
            'credits'   => 9999, // Ya Pro members ke liye credits increase kar dein
            'pro_until' => now()->addYear(),
        ]);

        // 2. Modal ko close karein
        $this->showPricingModal = false;

        // 3. UI ko refresh notify karein
        session()->flash('message', '🎉 Payment Successful! You are now a PRO member.');
        
        return redirect()->to('/dashboard'); // Ya current page par refresh kar dein

    } catch (\Exception $e) {
        session()->flash('error', 'Stripe Error: ' . $e->getMessage());
    }
}
    // Selected plan state track karne ke liye
public ?string $selectedPlan = null;
public $apiToken = null;

// Plan selection handle karne wala method
public function selectPlan(string $plan)
{
    $this->selectedPlan = $plan;
}

    // Tabs control
    public string $activeTab = 'single';

    // ... baaki aapka code

    // Single-image properties
   // Single-image properties
    public $image;
    public ?string $originalImageUrl = null;
    public ?string $processedImageUrl = null;

    // Batch-image properties (Phase 3 Scale)
    public array $images = [];
    public array $processedImages = [];

    // Jub user file choose kare
    public function updatedBgImage()
    {
        if ($this->bgImage) {
            $this->validate([
                'bgImage' => 'image|max:5120',
            ]);

            $this->bgImageUrl = $this->bgImage->temporaryUrl();
            $this->bgColor = 'transparent';
        }
    }

    // Shared background & output properties
    public $bgImage;
    public ?string $bgImageUrl = null;
    public string $bgColor = 'transparent';
    public string $exportFormat = 'png';
    public bool $isProcessing = false;

    // History Log
    public array $historyLog = [];



public function getAvailableCreditsProperty()
{
    if (auth()->check()) {
        return auth()->user()->credits;
    }
    return session('guest_credits', 10);
}
    // Switch Tabs helper
    public function setTab($tab)
    {
        $this->activeTab = $tab;
        $this->resetState();
    }

    private function resetState()
    {
        $this->image = null;
        $this->originalImageUrl = null;
        $this->processedImageUrl = null;
        $this->images = [];
        $this->processedImages = [];
        $this->bgImage = null;
        $this->bgImageUrl = null;
        $this->bgColor = 'transparent';
        $this->exportFormat = 'png';
        $this->isProcessing = false;
    }

    // ----------------- Single Image Hooks -----------------
    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:10240',
        ]);

        $this->originalImageUrl = $this->image->temporaryUrl();
        $this->processedImageUrl = null;
    }

public function removeBackground()
{
    if (!$this->image) {
        session()->flash('error', 'Please upload an image first.');
        return;
    }

    // Fresh authenticated user instance load karein
    $user = auth()->user();
    
    // Logged-in user ke credits check karein
    if ($user && $user->credits < 1) {
        session()->flash('error', 'Insufficient credits! Please buy more credits to process images.');
        return;
    }

    $this->isProcessing = true;

    try {
        $imagePath = $this->image->getRealPath();
        $originalName = $this->image->getClientOriginalName();

        // Watermark tabhi FALSE hoga jab user Logged In ho AND PRO Member ho
        $applyWatermark = ($user && ($user->isProUser() ?? $user->is_pro)) ? 'false' : 'true';

        // Background properties & watermark data prepare karein
        $postData = [
            'watermark' => $applyWatermark,
            'bg_color'  => $this->bgColor ?? 'transparent',
        ];

        // Flask API Request setup
        $request = Http::timeout(60)->attach(
            'image', 
            fopen($imagePath, 'r'), 
            $originalName
        );

        // Agar user ne custom background image upload ki hai toh use bhi attach karein
        if ($this->bgImage) {
            $request->attach(
                'bg_image', 
                fopen($this->bgImage->getRealPath(), 'r'), 
                'bg_image.png'
            );
        }

        // Flask microservice ko POST request bhejein
        $response = $request->post('http://127.0.0.1:5000/remove-bg', $postData);

        if ($response->successful()) {
            $transparentBytes = $response->body();

            // Format extension and filename
            $format = strtolower($this->exportFormat ?? 'png');
            $outputFileName = 'processed_' . time() . '.' . $format;
            
            // Save file into storage/app/public/processed
            Storage::disk('public')->put('processed/' . $outputFileName, $transparentBytes);

            // Set full URL for Livewire frontend
            $this->processedImageUrl = asset('storage/processed/' . $outputFileName);

            // Credit Deduct Karein aur Livewire State Synchronize Karein
            if ($user) {
                // Check karein agar user PRO nahi hai tabhi credit kam karein
                if (!($user->is_pro ?? false)) {
                    $user->decrement('credits');
                    $this->credits = $user->fresh()->credits; // Livewire component ki state update
                }
            } else {
                // Guest User logic
                $guestCredits = session('guest_credits', 10);
                if ($guestCredits > 0) {
                    $newCredits = $guestCredits - 1;
                    session(['guest_credits' => $newCredits]);
                    $this->credits = $newCredits; // Livewire component ki state update
                }
            }

            // Add to History log
            if (method_exists($this, 'addToHistory')) {
                $this->addToHistory($originalName, $this->processedImageUrl);
            }
        } else {
            session()->flash('error', 'Failed to process image from AI service. Status: ' . $response->status());
        }

    } catch (\Exception $e) {
        session()->flash('error', 'Processing Error: ' . $e->getMessage());
    } finally {
        $this->isProcessing = false;
    }
}
//pro k lia 
public function upgradeToPro()
{
    if (!auth()->check()) {
        return redirect()->route('login');
    }

    $user = auth()->user();
    $user->update([
        'is_pro' => true,
        'pro_until' => now()->addMonth(), // 1 Month PRO
    ]);

    session()->flash('message', 'Congratulations! You are now a PRO member.');
}
    // ----------------- Phase 3: Batch Image Logic -----------------
    public function updatedImages()
    {
        $this->validate([
            'images.*' => 'image|max:10240',
        ]);
if ($this->image) {
        $this->originalImageUrl = $this->image->temporaryUrl();
    }
        foreach ($this->images as $imgFile) {
            $this->processedImages[] = [
                'id' => uniqid(),
                'original' => $imgFile->temporaryUrl(),
                'processed' => null,
                'status' => 'pending', // pending, processing, completed, failed
                'file_path' => $imgFile->getRealPath(),
                'original_name' => $imgFile->getClientOriginalName(),
            ];
        }
    }

    public function processBatch()
    {
        if (empty($this->processedImages)) {
            session()->flash('error', 'No images in the queue to process.');
            return;
        }

        $this->isProcessing = true;

        $user = auth()->user();
        $pendingCount = collect($this->processedImages)->where('status', 'pending')->count();

        if ($user && $user->credits < $pendingCount) {
            $this->isProcessing = false;
            session()->flash('error', 'Insufficient credits! You need at least ' . $pendingCount . ' credits.');
            return;
        }

        $applyWatermark = $user ? 'false' : 'true';

        foreach ($this->processedImages as $index => $item) {
            if ($item['status'] === 'pending') {
                $this->processedImages[$index]['status'] = 'processing';

                try {
                    $response = Http::timeout(60)
                        ->attach('image', file_get_contents($item['file_path']), $item['original_name'])
                        ->post('http://127.0.0.1:5000/remove-bg', [
                            'watermark' => $applyWatermark
                        ]);

                    if ($response->successful()) {
                        $transparentBytes = $response->body();

                        $outputFileName = 'processed_' . uniqid() . '_' . time() . '.' . $this->exportFormat;
                        Storage::disk('public')->put('processed/' . $outputFileName, $transparentBytes);

                        $this->processedImages[$index]['processed'] = Storage::url('processed/' . $outputFileName);
                        $this->processedImages[$index]['status'] = 'completed';

                        // Deduct credit per batch image
                        if ($user) {
                            $user->decrement('credits');
                            $user->refresh();
                        }

                        // Add to History Tracker
                        $this->addToHistory($item['original_name'], $this->processedImages[$index]['processed']);
                    } else {
                        $this->processedImages[$index]['status'] = 'failed';
                    }
                } catch (\Exception $e) {
                    $this->processedImages[$index]['status'] = 'failed';
                    \Log::error("Batch Image processing failed (Index: {$index}): " . $e->getMessage());
                }
            }
        }

        $this->isProcessing = false;
    }

    public function removeImageFromBatch(string $id)
    {
        $this->processedImages = array_filter($this->processedImages, function($item) use ($id) {
            return $item['id'] !== $id;
        });
        
        $this->processedImages = array_values($this->processedImages);
    }

    // ----------------- Batch ZIP Generation -----------------
    public function downloadBatchZip()
    {
        $completedImages = array_filter($this->processedImages, function($item) {
            return isset($item['status']) && $item['status'] === 'completed' && isset($item['processed']);
        });

        if (empty($completedImages)) {
            session()->flash('error', 'No completed images in queue to compress.');
            return;
        }

        // Create temporary unique ZIP path
        $zipFileName = 'clearcut_batch_' . time() . '.zip';
        $zipRelativePath = 'downloads/' . $zipFileName;
        $zipRealPath = Storage::disk('public')->path($zipRelativePath);

        if (!Storage::disk('public')->exists('downloads')) {
            Storage::disk('public')->makeDirectory('downloads');
        }

        if (class_exists('ZipArchive')) {
            $zip = new \ZipArchive;
            if ($zip->open($zipRealPath, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) === TRUE) {
                foreach ($completedImages as $index => $item) {
                    $relativeUrl = str_replace(Storage::url(''), '', $item['processed']);
                    $relativeUrl = ltrim($relativeUrl, '/');

                    if (Storage::disk('public')->exists($relativeUrl)) {
                        $fileData = Storage::disk('public')->get($relativeUrl);
                        $extension = pathinfo($relativeUrl, PATHINFO_EXTENSION) ?: 'png';
                        $zip->addFromString('clearcut_image_' . ($index + 1) . '.' . $extension, $fileData);
                    }
                }
                $zip->close();
                return Storage::disk('public')->download($zipRelativePath)->deleteFileAfterSend(true);
            }
        } else {
            session()->flash('error', 'PHP ZIP extension is disabled. Please enable "extension=zip" in your php.ini file and restart your server.');
            return;
        }

        session()->flash('error', 'Could not compile ZIP storage format.');
    }

    // ----------------- History Management -----------------
// 2. History mein add karne ka function
// --- PASTE THIS PORTION BELOW $historyLog ---
    public int $credits = 10;

public function mount()
{
    if (auth()->check()) {
        // Agar user PRO hai toh credits set mat karo (ya null rakho)
        if (auth()->user()->is_pro) {
            $this->credits = 0; 
        } else {
            $this->credits = auth()->user()->credits;
        }
    } else {
        if (!session()->has('guest_credits')) {
            session(['guest_credits' => 10]);
        }
        $this->credits = session('guest_credits');
    }

    $this->loadHistory();
}

// History load karne ka central function
public function loadHistory()
{
    if (auth()->check()) {
        $key = 'history_user_' . auth()->id();
        $this->historyLog = session()->get($key, []);
    } else {
        $this->historyLog = [];
    }
}

// Image process hone ke baad yeh function call hoga
private function addToHistory($filename, $url)
{
    // Agar user logged in hai tabhi history save ho
    if (auth()->check()) {
        $key = 'history_user_' . auth()->id();

        $newItem = [
            'id'        => (string) Str::uuid(),
            'name'      => $filename,
            'url'       => $url,
            'timestamp' => now()->format('h:i A'),
        ];

        $currentHistory = session()->get($key, []);
        array_unshift($currentHistory, $newItem);
        $currentHistory = array_slice($currentHistory, 0, 10);

        session()->put($key, $currentHistory);
        $this->historyLog = $currentHistory;
    } else {
        $this->historyLog = [];
    }
}

public function clearHistory()
{
    if (auth()->check()) {
        session()->forget('history_user_' . auth()->id());
    }
    $this->historyLog = [];
}

public function render()
{
    // Render ke waqt fresh load karein
    $this->loadHistory();

    return view('livewire.image-reviser')
        ->layout('layouts.app');
}
  
}