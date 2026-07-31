<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('ClearCut AI Dashboard') }}
            </h2>
            <!-- Credits Badge -->
            <div class="bg-indigo-100 text-indigo-800 text-sm font-semibold px-4 py-2 rounded-full shadow-sm flex items-center gap-2">
                <span>⚡ Available Credits:</span>
                <span class="text-base font-bold">{{ Auth::user()->credits }}</span>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <!-- Livewire Background Removal Component -->
                @livewire('image-reviser')
            </div>
        </div>
    </div>
</x-app-layout>