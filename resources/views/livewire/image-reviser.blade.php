@section('title', 'ClearCut AI')

@push('head')
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico?v=10') }}">
@endpush
<div class="min-h-screen bg-gradient-to-b from-purple-950 via-slate-950 to-slate-950 text-slate-200 p-4 sm:p-8 relative overflow-hidden">

    <!-- Subtle Background Center Glow -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-fuchsia-900/10 blur-3xl pointer-events-none -z-10"></div>

    <!-- ======================================================== -->
    <!-- DENSE MINI-STARS GALAXY LAYER (DORON PAR ZYADA SARE SMALL DOTS) -->
    <!-- ======================================================== -->
    <div class="absolute inset-0 pointer-events-none z-0 overflow-hidden">

        <!-- Left Side Dense Small Stars (Blinking & Glowing) -->
        <div class="absolute top-6 left-[2%] w-1.5 h-1.5 bg-white rounded-full shadow-[0_0_8px_#ffffff] animate-[ping_0.6s_linear_infinite]"></div>
        <div class="absolute top-12 left-[5%] w-1 h-1 bg-fuchsia-300 rounded-full animate-[pulse_0.4s_ease-in-out_infinite]"></div>
        <div class="absolute top-20 left-[9%] w-2 h-2 bg-pink-300 rounded-full shadow-[0_0_10px_#f472b6] animate-[ping_0.8s_linear_infinite]"></div>
        <div class="absolute top-32 left-[1.5%] w-1.5 h-1.5 bg-purple-200 rounded-full animate-ping"></div>
        <div class="absolute top-44 left-[6%] w-2 h-2 bg-white rounded-full shadow-[0_0_10px_#ffffff] animate-[pulse_0.5s_ease-in-out_infinite]"></div>
        <div class="absolute top-56 left-[3%] w-1 h-1 bg-fuchsia-400 rounded-full animate-ping"></div>
        <div class="absolute top-[38%] left-[7%] w-1.5 h-1.5 bg-pink-200 rounded-full shadow-[0_0_6px_#fbcfe8] animate-[ping_0.7s_linear_infinite]"></div>
        <div class="absolute top-[48%] left-[2%] w-2 h-2 bg-fuchsia-300 rounded-full shadow-[0_0_10px_#e879f9] animate-[pulse_0.6s_ease-in-out_infinite]"></div>
        <div class="absolute top-[58%] left-[8%] w-1 h-1 bg-white rounded-full animate-ping"></div>
        <div class="absolute top-[68%] left-[4%] w-1.5 h-1.5 bg-purple-300 rounded-full animate-[ping_0.9s_linear_infinite]"></div>
        <div class="absolute top-[78%] left-[9%] w-2 h-2 bg-pink-300 rounded-full shadow-[0_0_10px_#f472b6] animate-pulse"></div>
        <div class="absolute top-[88%] left-[3%] w-1.5 h-1.5 bg-white rounded-full animate-[ping_0.5s_linear_infinite]"></div>
        <div class="absolute bottom-6 left-[7%] w-2 h-2 bg-fuchsia-300 rounded-full shadow-[0_0_8px_#e879f9] animate-ping"></div>

        <!-- Right Side Dense Small Stars (Blinking & Glowing) -->
        <div class="absolute top-8 right-[3%] w-2 h-2 bg-white rounded-full shadow-[0_0_10px_#ffffff] animate-[ping_0.7s_linear_infinite]"></div>
        <div class="absolute top-16 right-[7%] w-1 h-1 bg-pink-300 rounded-full animate-pulse"></div>
        <div class="absolute top-28 right-[2%] w-1.5 h-1.5 bg-fuchsia-300 rounded-full shadow-[0_0_8px_#e879f9] animate-[ping_0.5s_linear_infinite]"></div>
        <div class="absolute top-40 right-[8%] w-2 h-2 bg-purple-200 rounded-full shadow-[0_0_10px_#d8b4fe] animate-[pulse_0.6s_ease-in-out_infinite]"></div>
        <div class="absolute top-52 right-[4%] w-1 h-1 bg-white rounded-full animate-ping"></div>
        <div class="absolute top-[35%] right-[9%] w-2 h-2 bg-pink-300 rounded-full shadow-[0_0_8px_#f472b6] animate-[ping_0.8s_linear_infinite]"></div>
        <div class="absolute top-[45%] right-[2%] w-1.5 h-1.5 bg-fuchsia-200 rounded-full animate-pulse"></div>
        <div class="absolute top-[55%] right-[6%] w-2 h-2 bg-white rounded-full shadow-[0_0_10px_#ffffff] animate-[ping_0.6s_linear_infinite]"></div>
        <div class="absolute top-[65%] right-[3%] w-1 h-1 bg-purple-300 rounded-full animate-ping"></div>
        <div class="absolute top-[75%] right-[8%] w-2 h-2 bg-fuchsia-400 rounded-full shadow-[0_0_10px_#e879f9] animate-[pulse_0.4s_ease-in-out_infinite]"></div>
        <div class="absolute top-[85%] right-[4%] w-1.5 h-1.5 bg-pink-200 rounded-full animate-[ping_0.9s_linear_infinite]"></div>
        <div class="absolute bottom-8 right-[9%] w-2 h-2 bg-white rounded-full shadow-[0_0_8px_#ffffff] animate-ping"></div>

        <!-- Small Rotating Sparkles (Edges) -->
        <svg class="absolute top-10 left-[10%] w-4 h-4 text-fuchsia-200 animate-[spin_6s_linear_infinite]" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z"/>
        </svg>
        <svg class="absolute top-[50%] left-[1.5%] w-5 h-5 text-white animate-[spin_8s_linear_infinite]" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z"/>
        </svg>
        <svg class="absolute top-20 right-[10%] w-4 h-4 text-pink-300 animate-[spin_5s_linear_infinite]" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z"/>
        </svg>
        <svg class="absolute top-[60%] right-[1.5%] w-5 h-5 text-fuchsia-300 animate-[spin_7s_linear_infinite]" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 0L14.59 9.41L24 12L14.59 14.59L12 24L9.41 14.59L0 12L9.41 9.41L12 0Z"/>
        </svg>

    </div>

    <!-- ======================================================== -->
    <!-- YOUR DASHBOARD CARD (Restored Original Width) -->
    <!-- ======================================================== -->
    <div class="relative z-10 max-w-6xl mx-auto"><div class="w-full max-w-6xl mx-auto p-6 sm:p-8 bg-slate-900/80 backdrop-blur-xl rounded-3xl shadow-2xl shadow-purple-950/50 mt-6 border border-purple-500/20">
    <!-- Header -->
   <div class="text-center mb-8 space-y-2">
    <h2 class="text-4xl sm:text-5xl font-black text-white tracking-tight drop-shadow-md">
        ClearCut <span class="bg-gradient-to-r from-fuchsia-400 via-pink-500 to-purple-400 bg-clip-text text-transparent italic">AI</span>
    </h2>
    <p class="text-slate-400 text-sm sm:text-base font-medium tracking-wide">
        Remove and replace image backgrounds instantly
    </p>
</div>

@unless(auth()->check() && auth()->user()->isProUser())
<div class="flex items-center gap-2 bg-[#3b0764] border border-fuchsia-500/30 text-white px-4 py-2 rounded-lg text-sm font-medium shadow-md">        <span>⚡ Credits:</span>
        <span class="text-blue-400 font-bold">
            {{ auth()->check() ? auth()->user()->credits : 10 }} / 10
        </span>
    </div>
@endunless
<!-- Top Navigation Bar -->
<div class="flex justify-between items-center bg-slate-950/60 border border-purple-500/20 p-4 rounded-xl shadow-sm mb-6 border border-gray-100">
    <!-- Left: Logo / Branding -->
    <div class="flex items-center  gap-2">
        <span class="text-2xl">⚡</span>
        <h1 class="text-xl font-bold text-white">ClearCut <span class="text-blue-600">AI</span></h1>
    </div>

    <!-- Right: Available Credits & User Auth Buttons -->
 @unless(auth()->check() && auth()->user()->isProUser())
    <div class="bg-slate-900/80 border border-purple-500/30 text-purple-200 px-3 py-1.5 rounded-full text-xs font-semibold flex items-center gap-2 shadow-lg shadow-purple-950/40 backdrop-blur-md">
        <span class="flex items-center gap-1">
            <span class="text-fuchsia-400">⚡</span> Available Credits:
        </span>
        <span class="bg-gradient-to-r from-fuchsia-600 to-purple-600 text-white px-2.5 py-0.5 rounded-full text-[11px] font-bold shadow-xs border border-fuchsia-400/30">
            {{ $this->availableCredits }}
        </span>
    </div>
@endunless
@auth
    <!-- Logged In User Profile -->
    <div class="text-xs font-semibold text-purple-200 border-l pl-4 border-purple-500/20 flex items-center gap-2">
        <span class="p-1 rounded-full bg-purple-950/80 border border-fuchsia-500/30 text-fuchsia-400">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
        </span>
        <span class="bg-slate-900/60 px-2.5 py-1 rounded-lg border border-purple-500/10">
            {{ auth()->user()->name }}
        </span>
    </div>
@else
            <!-- Guest Links -->
            <div class="flex items-center gap-2 border-l pl-4 border-purple-500/20">
    <a href="{{ route('register') }}" class="text-xs font-semibold bg-gradient-to-r from-fuchsia-600 to-purple-600 hover:from-fuchsia-500 hover:to-purple-500 text-white px-4 py-1.5 rounded-xl transition duration-300 shadow-md shadow-fuchsia-500/20 border border-fuchsia-400/30 flex items-center justify-center active:scale-95">
        Get in touch
    </a>
</div>
        @endauth
        
    </div>

    <!-- Navigation Tabs -->
   <!-- Navigation Tabs -->
<div class="flex justify-center mb-8">
    <div class="inline-flex p-1.5 bg-slate-950/80 backdrop-blur-md border border-purple-500/30 rounded-xl shadow-inner shadow-purple-900/20">
        
        <!-- Single Image Tab -->
        <button wire:click="setTab('single')" 
            class="relative px-6 py-2.5 rounded-lg text-sm font-semibold transition-all duration-300 {{ $activeTab === 'single' ? 'bg-gradient-to-r from-fuchsia-600 to-purple-600 text-white shadow-lg
             shadow-fuchsia-500/25 border border-fuchsia-400/30' : 'text-slate-400 hover:text-purple-300 hover:bg-purple-950/40' }}">
            
            <span class="flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                Single Image
            </span>
        </button>

        <!-- Batch Processing Tab -->
        <button wire:click="setTab('batch')" 
            class="relative px-6 py-2.5 rounded-lg text-sm font-semibold transition-all duration-300 {{ $activeTab === 'batch' ? 'bg-gradient-to-r from-fuchsia-600 to-purple-600 text-white shadow-lg shadow-fuchsia-500/25 border border-fuchsia-400/30' : 'text-slate-400 hover:text-purple-300 hover:bg-purple-950/40' }}">
            
            <span class="flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                </svg>
                Batch Processing (Bulk)
            </span>
        </button>

    </div>
</div>
<!-- Out of Guest Credits Banner -->
    @if($this->availableCredits <= 0 && !auth()->check())
        <div class="mb-8 p-5 bg-gradient-to-r from-blue-600 to-indigo-700 text-white rounded-2xl shadow-lg flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="space-y-1 text-center md:text-left">
                <h3 class="text-base font-bold flex items-center justify-center md:justify-start gap-2">
                    🎉 You've used all 10 free guest credits!
                </h3>
                <p class="text-xs text-blue-100">
                    Sign up for a free account now to get instant bonus credits and access to full-resolution downloads without watermarks.
                </p>
            </div>
            <a href="{{ route('register') }}" class="whitespace-nowrap bg-white text-blue-600 hover:bg-blue-50 font-bold px-5 py-2.5 rounded-xl text-xs shadow transition transform hover:scale-105">
                Create Free Account
            </a>
        </div>
    @endif
    <!-- ------------------------------------------------------------- -->
    <!-- TAB 1: SINGLE IMAGE INTERFACE                                 -->
    <!-- ------------------------------------------------------------- -->
   @if($activeTab === 'single')
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        <!-- Left Column -->
        <div class="lg:col-span-5 space-y-6">
           <div class="p-6 bg-slate-950/70 backdrop-blur-md rounded-2xl border border-purple-500/20 shadow-xl shadow-purple-950/50">
    <!-- Section Label -->
    <label class="block text-purple-200 font-semibold text-sm tracking-wide mb-4 flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-fuchsia-400 animate-pulse"></span>
        1. Upload Image
    </label>

    <!-- Upload Dropzone Container -->
    <div class="group relative flex flex-col items-center justify-center min-h-[220px] p-6 border-2 border-dashed border-purple-500/30 hover:border-fuchsia-400/80 bg-slate-900/40 hover:bg-slate-900/80 rounded-xl transition-all duration-300 ease-in-out cursor-pointer overflow-hidden text-center shadow-lg hover:shadow-fuchsia-500/10">

        <!-- File Input Layer -->
        <input type="file" wire:model.live="image" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" accept="image/*" />

        <!-- Background Ambient Glow on Hover -->
        <div class="absolute inset-0 bg-gradient-to-tr from-fuchsia-600/5 via-purple-600/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>

        <!-- Animated Upload Icon -->
        <div class="relative z-0 p-4 mb-3 rounded-full bg-purple-950/60 border border-purple-500/30 group-hover:border-fuchsia-400/50 group-hover:scale-110 group-hover:bg-fuchsia-950/40 transition-all duration-300 shadow-inner">
            <svg class="w-8 h-8 text-fuchsia-400 group-hover:text-fuchsia-300 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
        </div>

        <!-- Action Text -->
        <div class="relative z-0 space-y-1">
            <span class="block text-white font-semibold text-base group-hover:text-fuchsia-300 transition-colors">
                Select an Image
            </span>
            <span class="block text-xs text-slate-400 font-normal">
                or drag and drop file here (PNG, JPG, WEBP)
            </span>
        </div>

        <!-- Livewire Loading State Overlay -->
        <div wire:loading wire:target="image" class="absolute inset-0 bg-slate-950/90 backdrop-blur-sm z-20 flex flex-col items-center justify-center gap-2">
            <svg class="animate-spin h-7 w-7 text-fuchsia-400" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
            </svg>
            <span class="text-xs font-semibold text-fuchsia-300 tracking-wider">Uploading Image...</span>
        </div>

    </div>
</div>

            @if($originalImageUrl)
    <div class="p-6 bg-slate-950/70 backdrop-blur-md rounded-2xl border border-purple-500/20 shadow-xl shadow-purple-950/50 space-y-5">
        
        <!-- Section Header -->
        <label class="block text-purple-200 font-semibold text-sm tracking-wide flex items-center gap-2">
            <span class="w-2 h-2 rounded-full bg-fuchsia-400 animate-pulse"></span>
            2. Background Settings
        </label>

        <!-- Background Color Picker -->
        <div class="space-y-1.5">
            <label class="block text-xs font-medium text-slate-400">Background Color</label>
            <div class="flex items-center gap-3 p-2.5 bg-slate-900/60 rounded-xl border border-purple-500/20">
                <input type="color" wire:model.live="bgColor" id="colorPickerInput" class="w-9 h-9 border-0 rounded-lg cursor-pointer p-0 bg-transparent overflow-hidden" />
                <span class="text-xs text-purple-200 font-mono font-semibold tracking-wider bg-slate-950 px-2.5 py-1 rounded-md border border-purple-500/10">{{ $bgColor }}</span>
                <button type="button" wire:click="$set('bgColor', 'transparent')" class="text-xs text-fuchsia-400 hover:text-fuchsia-300 hover:underline font-medium ml-auto transition-colors">
                    Reset to Transparent
                </button>
            </div>
        </div>

        <!-- Custom Background Image Upload -->
        <div class="space-y-1.5">
            <div class="flex justify-between items-center">
                <label class="block text-xs font-medium text-slate-400">Custom Background Image</label>
                
                @if($bgImage || $bgImageUrl)
                    <button type="button" 
                            wire:click="$set('bgImage', null); $set('bgImageUrl', null);" 
                            class="text-xs text-rose-400 hover:text-rose-300 hover:underline font-semibold transition-colors">
                        Remove Image
                    </button>
                @endif
            </div>
            
            <div class="relative">
                <input type="file" 
                       wire:model.live="bgImage" 
                       class="block w-full text-xs text-slate-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-fuchsia-950/60 file:text-fuchsia-300 hover:file:bg-fuchsia-900/80 file:border file:border-fuchsia-500/30 file:transition-all cursor-pointer bg-slate-900/60 rounded-xl border border-purple-500/20 p-1" 
                       accept="image/*" />
            </div>
                   
            <!-- Livewire Uploading Status Indicator -->
            <div wire:loading wire:target="bgImage" class="flex items-center gap-2 text-xs text-fuchsia-400 mt-1">
                <svg class="animate-spin h-3.5 w-3.5" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                </svg>
                Uploading background image...
            </div>
        </div>

        <!-- Export Format Dropdown -->
        <div class="space-y-1.5">
            <label class="block text-xs font-medium text-slate-400">Export Format</label>
            <select wire:model.live="exportFormat" id="exportFormatSelect" class="w-full bg-slate-900/80 border border-purple-500/30 rounded-xl p-2.5 text-xs text-purple-100 focus:border-fuchsia-400 focus:outline-none transition-colors">
                <option value="png" class="bg-slate-950 text-white">PNG (Transparent Layer Support)</option>
                <option value="jpg" class="bg-slate-950 text-white">JPG (Best for solid/image backdrops)</option>
            </select>
        </div>

        <!-- Process Button with Glowing Gradient -->
        <button 
            type="button" 
            wire:click="removeBackground" 
            wire:loading.attr="disabled"
            class="w-full py-3 px-4 bg-gradient-to-r from-fuchsia-600 to-purple-600 hover:from-fuchsia-500 hover:to-purple-500 text-white font-semibold text-sm rounded-xl transition duration-300 shadow-lg shadow-fuchsia-500/20 border border-fuchsia-400/30 flex items-center justify-center gap-2 disabled:opacity-50 cursor-pointer active:scale-[0.99]">
            
            <span wire:loading.remove wire:target="removeBackground" class="flex items-center gap-2">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                Process Image
            </span>
            
            <span wire:loading wire:target="removeBackground" class="flex items-center gap-2">
                <svg class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Processing...
            </span>
        </button>

    
                </div>
            @endif
        </div>

        <!-- Right Column -->
       <div class="lg:col-span-7">
    <div class="border border-purple-500/20 rounded-2xl p-6 bg-slate-950/70 backdrop-blur-md min-h-[400px] flex flex-col justify-between shadow-xl shadow-purple-950/50">
        <div>
            <!-- Section Title -->
            <h3 class="text-xs font-bold text-fuchsia-400 uppercase tracking-widest mb-4 text-center flex items-center justify-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-fuchsia-400"></span>
                Interactive Comparison
                <span class="w-1.5 h-1.5 rounded-full bg-fuchsia-400"></span>
            </h3>
            
            @if($originalImageUrl)
                <!-- Slider Container -->
                <div class="relative w-full mx-auto aspect-square bg-slate-900 rounded-xl overflow-hidden select-none border border-purple-500/20 shadow-2xl shadow-purple-950/80 group" id="sliderContainer" style="max-height: 400px; max-width: 400px;">
    
    <!-- Underlayer: Original Image -->
    <img src="{{ $originalImageUrl }}" class="absolute inset-0 w-full h-full object-contain pointer-events-none" alt="Original">
    
    <!-- Overlayer: Processed Image -->
    @if(!empty($processedImageUrl))
        <!-- Fixed clip-path formula to show transparent background properly -->
        <div class="absolute inset-0 w-full h-full overflow-hidden pointer-events-none z-10" id="afterImageWrapper" style="clip-path: polygon(50% 0, 100% 0, 100% 100%, 50% 100%);">
            
            <!-- Transparent Checkerboard Pattern Background -->
            <div class="absolute inset-0 w-full h-full" style="background-color: {{ $bgColor }}; @if($bgColor === 'transparent' || empty($bgColor)) background-image: repeating-conic-gradient(#334155 0% 25%, #0f172a 0% 50%); background-size: 16px 16px; @endif @if(!empty($bgImageUrl)) background-image: url('{{ $bgImageUrl }}'); background-size: cover; background-position: center; @endif"></div>
            
            <!-- Processed PNG Cutout Image -->
            <img src="{{ $processedImageUrl }}?v={{ microtime(true) }}" class="absolute inset-0 w-full h-full object-contain pointer-events-none" id="subjectCutoutImage" alt="Processed">
        </div>

        <!-- Slider Handle Bar -->
        <div class="absolute inset-y-0 w-0.5 bg-gradient-to-b from-fuchsia-400 via-purple-300 to-fuchsia-400 cursor-ew-resize z-20 flex items-center justify-center shadow-[0_0_12px_rgba(217,70,239,0.8)]" id="sliderHandle" style="left: 50%;">
            <div class="w-8 h-8 bg-slate-950/90 text-fuchsia-400 rounded-full flex items-center justify-center shadow-lg border border-fuchsia-400/50 backdrop-blur-md select-none pointer-events-none hover:scale-110 transition-transform">
                <svg class="w-4 h-4 drop-shadow-[0_0_4px_rgba(217,70,239,0.6)]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 9l-4 4 4 4m8 0l4-4-4-4"></path>
                </svg>
            </div>
        </div>
    @else
        <!-- Overlay Text (Jab tak removeBackground click na ho) -->
        <button type="button" wire:click="removeBackground" class="absolute inset-0 bg-slate-950/60 backdrop-blur-xs flex items-center justify-center w-full h-full cursor-pointer z-10 border-0 text-left transition-all hover:bg-slate-950/50">
            <span class="bg-gradient-to-r from-fuchsia-600 to-purple-600 hover:from-fuchsia-500 hover:to-purple-500 text-white text-xs px-4 py-2 rounded-full font-semibold transition-all duration-300 pointer-events-none shadow-lg shadow-fuchsia-500/20 border border-fuchsia-400/30 flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                </svg>
                Click "Process Image" or tap here to Remove Background
            </span>
        </button>
    @endif
</div>
            @else
                <!-- Placeholder State -->
                <div class="flex flex-col items-center justify-center border-2 border-dashed border-purple-500/20 rounded-xl aspect-square bg-slate-900/40 mx-auto transition-all" style="max-height: 400px; max-width: 400px;">
                    <div class="p-3 rounded-full bg-purple-950/50 border border-purple-500/30 mb-3">
                        <svg class="w-8 h-8 text-fuchsia-400/70 stroke-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <span class="text-xs font-medium text-slate-400">Upload an image to see preview</span>
                    
                </div>
            @endif
        </div>
    </div>
</div>

                <!-- Download Action -->
               <!-- Download Action -->
@if(!empty($processedImageUrl))
    <div class="mt-4 flex justify-center gap-2 max-w-[400px] mx-auto w-full">
        <a href="{{ $processedImageUrl }}" download="clearcut_processed.{{ $exportFormat ?? 'png' }}" class="w-full py-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold rounded-lg shadow transition flex items-center justify-center gap-1.5 cursor-pointer">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
            Download Image
        </a>
    </div>
@endif
            </div>
        </div>
    </div>
@endif       
    <!-- ------------------------------------------------------------- -->
    <!-- TAB 2: BATCH BULK PROCESSING INTERFACE -->
<!-- ------------------------------------------------------------- -->
@if($activeTab === 'batch')
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <!-- Left Column -->
        <div class="lg:col-span-4 space-y-6">
            
            <!-- Upload Container -->
            <div class="p-6 bg-slate-950/70 backdrop-blur-md rounded-2xl border border-purple-500/20 shadow-xl shadow-purple-950/50">
                <label class="block text-purple-200 font-semibold text-sm tracking-wide mb-4 flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-fuchsia-400 animate-pulse"></span>
                    1. Upload Images (Batch)
                </label>
                
                <div class="group relative flex flex-col items-center justify-center min-h-[170px] p-6 border-2 border-dashed border-purple-500/30 hover:border-fuchsia-400/80 bg-slate-900/40 hover:bg-slate-900/80 rounded-xl transition-all duration-300 cursor-pointer overflow-hidden text-center shadow-lg hover:shadow-fuchsia-500/10">
                    <input type="file" wire:model="images" multiple class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10" accept="image/*" />
                    
                    <div class="p-3 mb-2 rounded-full bg-purple-950/60 border border-purple-500/30 group-hover:border-fuchsia-400/50 group-hover:scale-110 group-hover:bg-fuchsia-950/40 transition-all duration-300">
                        <svg class="w-8 h-8 text-fuchsia-400 group-hover:text-fuchsia-300 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V4a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <span class="text-xs text-purple-200 font-medium group-hover:text-fuchsia-300 transition-colors">
                        Drag & drop or click to upload multiple files
                    </span>
                </div>
            </div>

            @if(count($processedImages) > 0)
                <div class="p-6 bg-slate-950/70 backdrop-blur-md rounded-2xl border border-purple-500/20 shadow-xl shadow-purple-950/50 space-y-5">
                    <label class="block text-purple-200 font-semibold text-sm tracking-wide flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-fuchsia-400 animate-pulse"></span>
                        2. Apply Batch Background
                    </label>

                    <!-- Background Color Picker -->
                    <div class="space-y-1.5">
                        <label class="block text-xs font-medium text-slate-400">Background Color</label>
                        <div class="flex items-center gap-3 p-2.5 bg-slate-900/60 rounded-xl border border-purple-500/20">
                            <input type="color" wire:model.live="bgColor" id="batchColorPicker" class="w-9 h-9 border-0 rounded-lg cursor-pointer p-0 bg-transparent overflow-hidden" />
                            <span class="text-xs text-purple-200 font-mono font-semibold tracking-wider bg-slate-950 px-2.5 py-1 rounded-md border border-purple-500/10">{{ $bgColor }}</span>
                            <button wire:click="$set('bgColor', 'transparent')" class="text-xs text-fuchsia-400 hover:text-fuchsia-300 hover:underline font-medium ml-auto transition-colors">Reset to Transparent</button>
                        </div>
                    </div>

                    <!-- Custom Background Image -->
                    <div class="space-y-1.5">
                        <div class="flex justify-between items-center">
                            <label class="block text-xs font-medium text-slate-400">Custom Background Image</label>
                            @if($bgImageUrl)
                                <button wire:click="$set('bgImage', null); $set('bgImageUrl', null);" class="text-xs text-rose-400 hover:text-rose-300 hover:underline font-semibold transition-colors">Remove Image</button>
                            @endif
                        </div>
                        <input type="file" wire:model="bgImage" class="block w-full text-xs text-slate-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-fuchsia-950/60 file:text-fuchsia-300 hover:file:bg-fuchsia-900/80 file:border file:border-fuchsia-500/30 file:transition-all cursor-pointer bg-slate-900/60 rounded-xl border border-purple-500/20 p-1" accept="image/*" />
                    </div>

                    <!-- Export Format -->
                    <div class="space-y-1.5">
                        <label class="block text-xs font-medium text-slate-400">Export Format</label>
                        <select wire:model="exportFormat" id="exportFormatSelect" class="w-full bg-slate-900/80 border border-purple-500/30 rounded-xl p-2.5 text-xs text-purple-100 focus:border-fuchsia-400 focus:outline-none transition-colors">
                            <option value="png" class="bg-slate-950 text-white">PNG (Transparent Layer Support)</option>
                            <option value="jpg" class="bg-slate-950 text-white">JPG (Best for solid/image backdrops)</option>
                        </select>
                    </div>

                    <!-- Process Batch Button -->
                    <button wire:click="processBatch" class="w-full py-3 px-4 bg-gradient-to-r from-fuchsia-600 to-purple-600 hover:from-fuchsia-500 hover:to-purple-500 text-white font-semibold text-sm rounded-xl transition duration-300 shadow-lg shadow-fuchsia-500/20 border border-fuchsia-400/30 flex items-center justify-center gap-2 cursor-pointer active:scale-[0.99]">
                        @if($isProcessing)
                            <svg class="animate-spin h-5 w-5 text-white" viewBox="0 0 24 24" fill="none">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                            </svg>
                            <span>Processing Batch...</span>
                        @else
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <span>Process All Images</span>
                        @endif
                    </button>
                </div>
            @endif
        </div>

        <!-- Right Column -->
        <div class="lg:col-span-8">
            <div class="border border-purple-500/20 rounded-2xl p-6 bg-slate-950/70 backdrop-blur-md min-h-[400px] shadow-xl shadow-purple-950/50">
                <div class="flex justify-between items-center mb-6 border-b border-purple-500/20 pb-4">
                    <span class="text-xs font-bold text-fuchsia-400 uppercase tracking-wider flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                        </svg>
                        Queue & Results Gallery
                    </span>
                    
                    @if(count($processedImages) > 0)
                        <button onclick="downloadBatchAsZipJS()" class="py-2 px-4 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-500 hover:to-teal-500 text-white text-xs font-semibold rounded-xl shadow-lg shadow-emerald-600/20 border border-emerald-400/30 transition flex items-center gap-1.5 active:scale-95">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                            </svg>
                            Download All as ZIP
                        </button>
                    @endif
                </div>     

                @if(count($processedImages) > 0)
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        @foreach($processedImages as $item)
                            <div class="bg-slate-900/80 p-3 rounded-xl shadow-lg border border-purple-500/20 flex flex-col justify-between relative group hover:border-fuchsia-500/40 transition-all duration-300">
                                
                                <!-- Delete Button -->
                                <button wire:click="removeImageFromBatch('{{ $item['id'] }}')" class="absolute top-2 right-2 bg-rose-500/80 hover:bg-rose-600 text-white rounded-full p-1.5 opacity-0 group-hover:opacity-100 transition-opacity z-30 shadow-md">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>

                                <!-- Image Card Canvas Container -->
                                <div class="relative w-full aspect-square rounded-lg bg-slate-950 overflow-hidden flex items-center justify-center border border-purple-500/10 mb-3" <?php echo 'style="background-color: ' . $bgColor . ';"'; ?>> 
                                    @if($bgImageUrl)
                                        <img src="{{ $bgImageUrl }}" class="absolute inset-0 w-full h-full object-cover z-0 batch-bg-preview" />
                                    @endif

                                    @if($item['status'] === 'completed' && $item['processed'])
                                        <img src="{{ $item['processed'] }}" class="max-h-full max-w-full object-contain relative z-10 batch-subject-img drop-shadow-md" />
                                    @elseif($item['status'] === 'processing')
                                        <div class="absolute inset-0 bg-slate-950/80 backdrop-blur-xs flex flex-col items-center justify-center text-white z-20">
                                            <svg class="animate-spin h-7 w-7 text-fuchsia-400 mb-2" viewBox="0 0 24 24" fill="none">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                                            </svg>
                                            <span class="text-xs font-semibold text-fuchsia-300 tracking-wider">Processing...</span>
                                        </div>
                                    @else
                                        <img src="{{ $item['original'] }}" class="max-h-full max-w-full object-contain opacity-50" />
                                        <span class="absolute bottom-2 left-2 bg-amber-500/90 backdrop-blur-xs text-slate-950 text-[10px] font-bold px-2 py-0.5 rounded-md border border-amber-300/30">Pending</span>
                                    @endif
                                </div>

                                <!-- Card Footer -->
                                <div class="flex items-center justify-between text-xs px-1">
                                    <span class="text-slate-400 font-mono truncate max-w-[100px]">Image #{{ $loop->iteration }}</span>
                                    @if($item['status'] === 'completed')
                                        <button onclick="downloadSingleBatchImage('{{ $item['id'] }}', '{{ $item['processed'] }}')" class="text-fuchsia-400 hover:text-fuchsia-300 font-semibold flex items-center gap-1 transition-colors">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                            </svg>
                                            Download
                                        </button>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <!-- Empty State Container -->
                    <div class="flex flex-col items-center justify-center py-24 text-slate-500">
                        <div class="p-4 rounded-full bg-slate-900/80 border border-purple-500/20 mb-4">
                            <svg class="w-12 h-12 text-purple-400/60 stroke-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <p class="text-base font-semibold text-purple-200">No images uploaded yet</p>
                        <p class="text-xs text-slate-400 mt-1">Upload multiple photos on the left sidebar to start batch processing</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endif
<!-- History Section -->
@auth
    @if(count($historyLog ?? []) > 0)
        <div class="mt-12 p-6 bg-slate-950/70 border border-purple-500/20 rounded-2xl shadow-xl shadow-purple-950/50 backdrop-blur-md">
            <div class="flex justify-between items-center mb-5">
                <h3 class="text-xs font-bold text-fuchsia-400 uppercase tracking-widest flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full bg-fuchsia-400"></span>
                    Your Recent Cutouts
                </h3>
                <button wire:click="clearHistory" class="text-xs text-rose-400 hover:text-rose-300 transition-colors font-medium hover:underline flex items-center gap-1">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                    Clear All History
                </button>
            </div>
            
            <div class="grid grid-cols-2 sm:grid-cols-5 md:grid-cols-10 gap-3">
                @foreach($historyLog as $log)
                    <div class="relative group aspect-square bg-slate-900 border border-purple-500/20 rounded-xl overflow-hidden flex items-center justify-center p-1 shadow-md hover:border-fuchsia-500/50 transition-all duration-300">
                        <img src="{{ $log['url'] }}" class="max-h-full max-w-full object-contain" alt="History Item" />
                        <div class="absolute inset-0 bg-slate-950/70 backdrop-blur-xs opacity-0 group-hover:opacity-100 transition-all duration-200 flex items-center justify-center z-10">
                            <a href="{{ $log['url'] }}" download="history_{{ $log['id'] }}.png" class="p-2 bg-gradient-to-r from-fuchsia-600 to-purple-600 text-white rounded-full hover:scale-110 shadow-lg shadow-fuchsia-500/30 transition-transform duration-200" title="Download">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endauth
<!-- Pricing & Checkout Modal -->
@if($showPricingModal)
<div class="fixed inset-0 z-50 overflow-y-auto bg-slate-950/80 backdrop-blur-md flex items-center justify-center p-4">
    <div class="relative bg-slate-900 border border-slate-800 rounded-3xl max-w-4xl w-full p-6 sm:p-8 shadow-2xl shadow-indigo-500/10">
        
        <!-- Close Button -->
        <button wire:click="closePricingModal" class="absolute top-5 right-5 text-slate-400 hover:text-white bg-slate-800 hover:bg-slate-700 p-2 rounded-full transition">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        @if(!isset($selectedPlan))
            <!-- STEP 1: PLAN SELECTION -->
            <div class="text-center mb-8">
                <span class="px-3 py-1 bg-indigo-500/10 text-indigo-400 border border-indigo-500/20 text-xs font-bold rounded-full uppercase tracking-wider">
                    ClearCut AI Plans
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white mt-3">Choose Your Access Level</h2>
                <p class="text-slate-400 text-sm mt-1">Upgrade to unlock unlimited processing for single and bulk workflows</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- PRO Monthly -->
                <div class="bg-slate-800/50 border border-slate-700/60 rounded-2xl p-6 flex flex-col justify-between hover:border-slate-600 transition">
                    <div>
                        <h3 class="text-lg font-bold text-white">PRO Monthly</h3>
                        <p class="text-xs text-slate-400 mt-1">Full access billed on a monthly basis</p>
                        
                        <div class="my-5">
                            <span class="text-4xl font-extrabold text-white">$9</span>
                            <span class="text-slate-400 text-sm"> / month</span>
                        </div>

                        <ul class="space-y-3 text-xs text-slate-300 mb-6">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                <strong>Unlimited</strong> Image Background Removals
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                <strong>Unlimited</strong> Batch / Bulk Processing
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                Full Resolution HD Exports
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                Priority Fast-Track Processing
                            </li>
                        </ul>
                    </div>

                    <button wire:click="selectPlan('monthly')" class="w-full py-3 bg-slate-700 hover:bg-slate-600 text-white font-bold text-sm rounded-xl transition">
                        Select Monthly Plan
                    </button>
                </div>

                <!-- PRO Yearly -->
                <div class="bg-slate-800/90 border-2 border-indigo-500 rounded-2xl p-6 flex flex-col justify-between relative shadow-lg shadow-indigo-500/10">
                    <span class="absolute -top-3 right-6 bg-indigo-600 text-white text-[10px] font-extrabold uppercase px-3 py-1 rounded-full tracking-wider">
                        Recommended
                    </span>

                    <div>
                        <h3 class="text-lg font-bold text-white">PRO Yearly</h3>
                        <p class="text-xs text-slate-400 mt-1">Billed annually at $78 / year</p>
                        
                        <div class="my-5">
                            <span class="text-4xl font-extrabold text-white">$6.50</span>
                            <span class="text-slate-400 text-sm"> / month</span>
                        </div>

                        <ul class="space-y-3 text-xs text-slate-300 mb-6">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                Everything in Monthly Plan
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                <strong>Unlimited</strong> Single & Bulk Processing
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                Dedicated High-Speed AI Servers
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                24/7 Priority VIP Support
                            </li>
                        </ul>
                    </div>

                    <button wire:click="selectPlan('yearly')" class="w-full py-3 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 text-white font-bold text-sm rounded-xl transition shadow-md shadow-indigo-500/20">
                        Select Yearly Plan
                    </button>
                </div>
            </div>

            <!-- Free Tier Note -->
            <p class="text-center text-xs text-slate-500 mt-6">
                Standard accounts include <strong>10 Free Credits</strong> for initial testing.
            </p>

        @else
            <!-- STEP 2: CREDIT CARD CHECKOUT -->
<!-- STEP 2: CREDIT CARD CHECKOUT -->
<div class="max-w-lg mx-auto">
    <div class="flex items-center justify-between border-b border-slate-800 pb-4 mb-6">
        <div>
            <h2 class="text-xl font-bold text-white">Payment Details</h2>
            <p class="text-xs text-slate-400">Selected Plan: <span class="text-indigo-400 font-bold uppercase">{{ $selectedPlan }}</span></p>
        </div>
        <button type="button" wire:click="$set('selectedPlan', null)" class="text-xs text-slate-400 hover:text-white underline">
            Change Plan
        </button>
    </div>

    <!-- Error/Success Alerts Display -->
    @if (session()->has('error'))
        <div class="mb-4 p-3 rounded-xl bg-red-500/10 border border-red-500/20 text-red-400 text-xs">
            ⚠️ {{ session('error') }}
        </div>
    @endif

    @if (session()->has('message'))
        <div class="mb-4 p-3 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-xs font-semibold">
            {{ session('message') }}
        </div>
    @endif

    <!-- Direct Div to Avoid HTML Form Page Refresh -->
    <div class="space-y-4 text-left">
        <div>
            <label class="block text-xs font-semibold text-slate-300 mb-1">Cardholder Name</label>
            <input type="text" placeholder="John Doe" class="w-full bg-slate-800 border border-slate-700 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-indigo-500">
        </div>

        <div>
            <label class="block text-xs font-semibold text-slate-300 mb-1">Card Number</label>
            <div class="relative">
                <input type="text" maxlength="19" placeholder="4242 •••• •••• 4242" class="w-full bg-slate-800 border border-slate-700 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-indigo-500">
                <div class="absolute right-3 top-2.5 text-xs text-slate-500 font-bold">VISA / MC</div>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-xs font-semibold text-slate-300 mb-1">Expiry Date</label>
                <input type="text" placeholder="MM/YY" maxlength="5" class="w-full bg-slate-800 border border-slate-700 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-indigo-500">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-300 mb-1">CVC / CVC2</label>
                <input type="password" maxlength="4" placeholder="123" class="w-full bg-slate-800 border border-slate-700 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-indigo-500">
            </div>
        </div>

        <div class="pt-4">
            <button type="button" 
                    wire:click="processCheckout('{{ $selectedPlan }}')" 
                    wire:loading.attr="disabled"
                    class="w-full py-3 bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-400 hover:to-teal-500 text-slate-950 font-bold text-sm rounded-xl transition-all shadow-lg disabled:opacity-50">
                <span wire:loading.remove>Pay & Activate PRO</span>
                <span wire:loading>Processing Payment...</span>
            </button>
        </div>

        <p class="text-[11px] text-center text-slate-500 mt-2">
            🔒 Encrypted 256-bit SSL connection. Cancel anytime from your account settings.
        </p>
    </div>
</div>
        @endif

    </div>
    
</div>


@endif
<!-- DEVELOPER API SECTION -->
<div class="mt-8 bg-slate-900 border border-slate-800 rounded-2xl p-6 text-left shadow-xl">
    <div class="flex items-center justify-between mb-4">
        <div>
            <h3 class="text-base font-bold text-white flex items-center gap-2">
                ⚡ Developer API Access
            </h3>
            <p class="text-xs text-slate-400 mt-0.5">
                Integrate ClearCut AI background removal into your own apps via REST API.
            </p>
        </div>
        <button type="button" 
                wire:click="generateApiKey" 
                class="px-4 py-2 bg-indigo-600 hover:bg-indigo-500 text-white text-xs font-semibold rounded-xl transition-all shadow-md cursor-pointer">
            Generate API Key
        </button>
    </div>

    @if (session()->has('message'))
        <div class="p-3 mb-3 bg-emerald-500/10 border border-emerald-500/20 rounded-xl text-emerald-400 text-xs">
            {{ session('message') }}
        </div>
    @endif

    @if ($apiToken)
        <div class="mt-4 p-4 bg-slate-950 border border-indigo-500/30 rounded-xl space-y-2">
            <span class="text-xs text-indigo-400 font-semibold block">Your Secret API Token:</span>
            <div class="flex items-center justify-between bg-slate-900 px-3 py-2 rounded-lg border border-slate-800">
                <code class="text-xs text-emerald-400 font-mono break-all">{{ $apiToken }}</code>
            </div>
            <p class="text-[11px] text-amber-400/80 mt-1">
                ⚠️ Copy this token now. It will authenticate your request via Bearer header.
            </p>
        </div>
    @endif

    <div class="mt-4 bg-slate-950 p-3 rounded-xl border border-slate-800">
        <span class="text-[11px] text-slate-500 font-semibold uppercase block mb-1">cURL Example</span>
        <pre class="text-[11px] text-slate-300 font-mono overflow-x-auto">curl -X POST http://127.0.0.1:8000/api/v1/remove-bg \
  -H "Authorization: Bearer YOUR_API_TOKEN" \
  -F "image=@photo.jpg"</pre>
    </div>
</div>

    <!-- ------------------------------------------------------------- -->
    <!-- JAVASCRIPT: Merging & Downloader                              -->
    <!-- ------------------------------------------------------------- -->
<script>
        // --- 1. SINGLE IMAGE DOWNLOAD ---
   function downloadMergedImage() {
    // Pehle yeh dhoondega slider wrapper ki image, agar nahi to fallback standard ID par jayega
    const subjectImg = document.querySelector('#afterImageWrapper img') || document.getElementById('subjectCutoutImage');
    if (!subjectImg) {
        alert("Processed image not found for download!");
        return;
    }

    const canvas = document.createElement('canvas');
    const ctx = canvas.getContext('2d');

    const img = new Image();
    img.crossOrigin = "anonymous";
    img.src = subjectImg.src;

    img.onload = function () {
        canvas.width = img.naturalWidth;
        canvas.height = img.naturalHeight;

        const activeColor = @js($bgColor);
const activeBgImage = @js($bgImageUrl);

        if (activeColor && activeColor !== 'transparent') {
            ctx.fillStyle = activeColor;
            ctx.fillRect(0, 0, canvas.width, canvas.height);
        }

        if (activeBgImage) {
            const bgImg = new Image();
            bgImg.crossOrigin = "anonymous";
            bgImg.src = activeBgImage;
            
            bgImg.onload = function() {
                let scale = Math.max(canvas.width / bgImg.naturalWidth, canvas.height / bgImg.naturalHeight);
                let x = (canvas.width / 2) - (bgImg.naturalWidth / 2) * scale;
                let y = (canvas.height / 2) - (bgImg.naturalHeight / 2) * scale;
                ctx.drawImage(bgImg, x, y, bgImg.naturalWidth * scale, bgImg.naturalHeight * scale);

                ctx.drawImage(img, 0, 0);
                triggerDownload(canvas);
            };
            return; 
        }

        ctx.drawImage(img, 0, 0);
        triggerDownload(canvas);
    };
}

        // Livewire property bridge
        function getLivewireValue(property) {
            try {
                const component = window.Livewire.find(
                    document.querySelector('[wire\\:id]').getAttribute('wire:id')
                );
                return component ? component.get(property) : null;
            } catch (e) {
                console.warn("Livewire JS Bridge failed for: " + property, e);
                return null;
            }
        }

        // --- 2. BATCH MERGED IMAGE GENERATOR (Promise Based) ---
        function generateSingleMergedImage(processedUrl, bgColor, bgImageUrl) {
            return new Promise((resolve) => {
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');

                const img = new Image();
                img.crossOrigin = "anonymous";
                img.src = processedUrl;

                img.onload = function () {
                    canvas.width = img.naturalWidth;
                    canvas.height = img.naturalHeight;

                    if (bgColor && bgColor !== 'transparent') {
                        ctx.fillStyle = bgColor;
                        ctx.fillRect(0, 0, canvas.width, canvas.height);
                    }

                    if (bgImageUrl) {
                        const bgImg = new Image();
                        bgImg.crossOrigin = "anonymous";
                        bgImg.src = bgImageUrl;
                        
                        bgImg.onload = function() {
                            let scale = Math.max(canvas.width / bgImg.naturalWidth, canvas.height / bgImg.naturalHeight);
                            let x = (canvas.width / 2) - (bgImg.naturalWidth / 2) * scale;
                            let y = (canvas.height / 2) - (bgImg.naturalHeight / 2) * scale;
                            ctx.drawImage(bgImg, x, y, bgImg.naturalWidth * scale, bgImg.naturalHeight * scale);

                            ctx.drawImage(img, 0, 0);
                            resolve(canvas);
                        };
                        bgImg.onerror = function() {
                            ctx.drawImage(img, 0, 0);
                            resolve(canvas);
                        };
                    } else {
                        ctx.drawImage(img, 0, 0);
                        resolve(canvas);
                    }
                };
                img.onerror = function() {
                    resolve(null);
                };
            });
        }

        function downloadSingleBatchImage(id, processedUrl) {
            const activeColor = getLivewireValue('bgColor');
            const activeBgImage = getLivewireValue('bgImageUrl');

            generateSingleMergedImage(processedUrl, activeColor, activeBgImage).then(canvas => {
                if (canvas) {
                    triggerDownload(canvas);
                }
            });
        }

        // --- 3. BATCH ZIP GENERATION (JSZIP integration) ---
        async function downloadBatchAsZipJS() {
            // Hum is gallery mein maujood completed images ke elements nikalte hain
            const batchSubjectElements = document.querySelectorAll('.batch-subject-img');
            if (batchSubjectElements.length === 0) {
                alert('No processed images found to compress.');
                return;
            }

            const activeColor = getLivewireValue('bgColor');
            const activeBgImage = getLivewireValue('bgImageUrl');
            const format = getSelectedFormat();
            const mimeType = format === 'jpg' ? 'image/jpeg' : 'image/png';
            const quality = format === 'jpg' ? 0.9 : undefined;

            const zip = new JSZip();
            let count = 0;

            for (let i = 0; i < batchSubjectElements.length; i++) {
                const imgElement = batchSubjectElements[i];
                const processedUrl = imgElement.src;

                // Har image ko merge background ke sath generate karte hain
                const canvas = await generateSingleMergedImage(processedUrl, activeColor, activeBgImage);
                
                if (canvas) {
                    // Canvas data ko arraybuffer/base64 mein convert kar ke zip file mein add karte hain
                    const dataUrl = canvas.toDataURL(mimeType, quality);
                    const base64Data = dataUrl.split(',')[1];
                    
                    zip.file(`clearcut_image_${i + 1}.${format}`, base64Data, {base64: true});
                    count++;
                }
            }

            if (count > 0) {
                // ZIP file generate karke user ke liye download trigger karna
                zip.generateAsync({type: "blob"}).then(function(content) {
                    const link = document.createElement('a');
                    link.download = `clearcut_batch_${Date.now()}.zip`;
                    link.href = URL.createObjectURL(content);
                    document.body.appendChild(link);
                    link.click();
                    document.body.removeChild(link);
                });
            } else {
                alert('Failed to generate zip file assets.');
            }
        }

        function getSelectedFormat() {
            const formatSelect = document.getElementById('exportFormatSelect');
            return formatSelect ? formatSelect.value : getLivewireValue('exportFormat') || 'png';
        }

        function triggerDownload(canvas) {
            const format = getSelectedFormat();
            const mimeType = format === 'jpg' ? 'image/jpeg' : 'image/png';
            const quality = format === 'jpg' ? 0.9 : undefined;
            
            const link = document.createElement('a');
            link.download = 'clearcut_image_' + Date.now() + '.' + format;
            link.href = canvas.toDataURL(mimeType, quality);
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
        // --- 4. DRAG & DROP HOVER GLOW EFFECTS ---
document.addEventListener("DOMContentLoaded", function () {
    const dropZones = document.querySelectorAll('.border-dashed');

    dropZones.forEach(zone => {
        const fileInput = zone.querySelector('input[type="file"]');
        if (!fileInput) return;

        // Jab file drag karke box ke upar layen
        fileInput.addEventListener('dragenter', () => {
            zone.classList.remove('border-gray-300', 'bg-white');
            zone.classList.add('border-blue-500', 'bg-blue-50/50', 'shadow-lg', 'scale-[1.01]');
        });

        fileInput.addEventListener('dragover', (e) => {
            e.preventDefault();
        });

        // Jab file drag karke box se baahar le jayen ya drop ho jaye
        fileInput.addEventListener('dragleave', () => {
            resetDropZone(zone);
        });

        fileInput.addEventListener('drop', () => {
            resetDropZone(zone);
        });
    });

    function resetDropZone(zone) {
        zone.classList.add('border-gray-300', 'bg-white');
        zone.classList.remove('border-blue-500', 'bg-blue-50/50', 'shadow-lg', 'scale-[1.01]');
    }

    // --- 5. LOCALSTORAGE HISTORY PERSISTENCE ---
    // Jab page pehli baar load ho, browser se history fetch karke Livewire mein push karein
    setTimeout(() => {
        try {
            const savedHistory = localStorage.getItem('clearcut_history');
            if (savedHistory) {
                const parsed = JSON.parse(savedHistory);
                const component = window.Livewire.find(
                    document.querySelector('[wire\\:id]').getAttribute('wire:id')
                );
                if (component) {
                    component.set('historyLog', parsed);
                }
            }
        } catch (e) {
            console.error("Failed to load history from LocalStorage", e);
        }
    }, 1000); // 1 second delay taake Livewire completely initialize ho jaye
});

// Livewire mein jab bhi naye images process hon aur history update ho, to use save karein
window.addEventListener('livewire:initialized', () => {
    Livewire.hook('morph.updated', ({ component }) => {
        const history = component.ephemeral.historyLog || component.snapshot.data.historyLog;
        if (history) {
            localStorage.setItem('clearcut_history', JSON.stringify(history));
        }
    });
});
// --- 6. BEFORE/AFTER COMPARISON SLIDER LOGIC ---
function initComparisonSlider() {
    const container = document.getElementById('sliderContainer');
    const handle = document.getElementById('sliderHandle');
    const wrapper = document.getElementById('afterImageWrapper');

    if (!container || !handle || !wrapper) return;

    let isDragging = false;

    function moveSlider(clientX) {
        const rect = container.getBoundingClientRect();
        let position = clientX - rect.left;
        
        // Boundaries safety bounds (0% se 100% ke darmiyan control)
        if (position < 0) position = 0;
        if (position > rect.width) position = rect.width;

        const percentage = (position / rect.width) * 100;

        // Visual update apply karna
        handle.style.left = `${percentage}%`;
        // Clip path: inset(top right bottom left) -> Right side se display remove/add karega
        wrapper.style.clipPath = `inset(0 0 0 ${percentage}%)`;
    }

    // Mouse events
    container.addEventListener('mousedown', (e) => {
        isDragging = true;
        moveSlider(e.clientX);
    });

    window.addEventListener('mouseup', () => {
        isDragging = false;
    });

    window.addEventListener('mousemove', (e) => {
        if (!isDragging) return;
        moveSlider(e.clientX);
    });

    // Touch support for Mobile screens
    container.addEventListener('touchstart', (e) => {
        isDragging = true;
        moveSlider(e.touches[0].clientX);
    });

    window.addEventListener('touchend', () => {
        isDragging = false;
    });

    window.addEventListener('touchmove', (e) => {
        if (!isDragging) return;
        moveSlider(e.touches[0].clientX);
    });
}

// Livewire dynamic update triggers
document.addEventListener("DOMContentLoaded", () => {
    initComparisonSlider();
});

window.addEventListener('livewire:initialized', () => {
    // Har bar jab livewire component refresh kare, event rebind ho sake
    Livewire.hook('morph.updated', () => {
        setTimeout(initComparisonSlider, 100);
    });
});
    </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
</div>