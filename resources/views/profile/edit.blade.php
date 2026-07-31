<x-app-layout>
    <x-slot name="header">
        <div class="bg-slate-900 border-b border-slate-800 -mx-4 -my-6 px-4 py-6 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="max-w-7xl mx-auto">
                <h2 class="font-semibold text-xl text-white leading-tight">
                    {{ __('Profile') }}
                </h2>
            </div>
        </div>
    </x-slot>

    <div class="py-12 bg-slate-950 min-h-screen text-slate-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Profile Information Card -->
            <div class="p-6 sm:p-8 bg-slate-900/80 backdrop-blur-md shadow-xl sm:rounded-2xl border border-slate-800">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password Card -->
            <div class="p-6 sm:p-8 bg-slate-900/80 backdrop-blur-md shadow-xl sm:rounded-2xl border border-slate-800">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete Account Card -->
            <div class="p-6 sm:p-8 bg-slate-900/80 backdrop-blur-md shadow-xl sm:rounded-2xl border border-slate-800">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>