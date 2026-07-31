<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BackgroundRemovalController extends Controller
{
    public function removeBackground(Request $request)
    {
        // 1. Image Validation
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $user = $request->user();

        // Check if user is logged in & is a PRO member
        // Sirf isProUser() true hoga toh watermark NAHI lagega
        $isPro = $user ? ($user->isProUser() ?? $user->is_pro) : false;

        // 2. Credit/Pro Check
        if ($user && !$isPro && $user->credits <= 0) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Insufficient credits. Upgrade to PRO to access Developer API.'
            ], 403);
        }

        // 3. Send image to Python Flask Microservice
        $imagePath = $request->file('image')->getPathname();

        try {
            $response = Http::attach(
                'file', 
                file_get_contents($imagePath), 
                $request->file('image')->getClientOriginalName()
            )->post('http://127.0.0.1:5000/remove-bg', [
                // Python microservice ko bata rahe hain watermark lagana hai ya nahi
                'apply_watermark' => $isPro ? 'false' : 'true',
            ]);

            if ($response->successful()) {
                // Deduct credit for non-pro users
                if ($user && !$isPro) {
                    $user->decrement('credits');
                }

                return response()->json([
                    'status'            => 'success',
                    'processed_image'   => base64_encode($response->body()),
                    'remaining_credits' => $isPro ? 'unlimited' : ($user ? $user->credits : session('guest_credits', 10))
                ], 200);
            }

            return response()->json([
                'status'  => 'error',
                'message' => 'AI Microservice failed to process the image.'
            ], 500);

        } catch (\Exception $e) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Could not connect to Python AI Engine: ' . $e->getMessage()
            ], 500);
        }
    }
}