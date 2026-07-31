<nav x-data="{ open: false }" class="bg-slate-900 border-b border-slate-800 text-slate-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center space-x-2.5 group">
                        <!-- AI Scissors / Spark Icon -->
                        <div class="p-2 rounded-xl bg-gradient-to-tr from-indigo-600 to-purple-600 text-white shadow-lg shadow-indigo-500/30 group-hover:scale-105 transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 0L4 4m5.121 5.121L4 14.121M12 12l2.879-2.879M12 12L9.121 14.121" />
                            </svg>
                        </div>
                        <!-- Logo Text -->
                        <span class="text-xl font-bold bg-gradient-to-r from-white via-slate-200 to-slate-400 bg-clip-text text-transparent tracking-tight">
                            ClearCut <span class="text-indigo-400 font-extrabold">AI</span>
                        </span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-slate-300 hover:text-white focus:text-white">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Credits Pill, PRO Upgrade & Settings Dropdown / Guest Auth Links -->
            <div class="hidden sm:flex sm:items-center sm:ms-6 space-x-4">
                
                <!-- PRO Badge / Upgrade Button (Universal Event Dispatch) -->
                @auth
                    @if(Auth::user()->isProUser())
                        <span class="px-3 py-1.5 text-xs font-extrabold bg-gradient-to-r from-amber-400 via-yellow-400 to-amber-500 text-slate-950 rounded-full shadow-lg shadow-yellow-500/20 flex items-center gap-1.5 uppercase tracking-wider">
                            ★ PRO Member
                        </span>
                    @else
                        <button type="button" onclick="Livewire.dispatch('open-pricing-modal')" class="px-3.5 py-1.5 text-xs font-bold bg-gradient-to-r from-amber-500 to-yellow-500 hover:from-amber-400 hover:to-yellow-400 text-slate-950 rounded-full transition-all duration-200 shadow-md shadow-amber-500/20 flex items-center gap-1.5 cursor-pointer">
    ⚡ Upgrade to PRO
</button>
                    @endif
                @else
                   <button type="button" onclick="Livewire.dispatch('open-pricing-modal')" class="px-3.5 py-1.5 text-xs font-bold bg-gradient-to-r from-amber-500 to-yellow-500 hover:from-amber-400 hover:to-yellow-400 text-slate-950 rounded-full transition-all duration-200 shadow-md shadow-amber-500/20 flex items-center gap-1.5 cursor-pointer">
    ⚡ Upgrade to PRO
</button>
                @endauth

                <!-- Credits Counter -->
                <!-- Credits Counter (Hidden for PRO Members) -->
@unless(Auth::check() && Auth::user()->isProUser())
    <span class="px-3.5 py-1.5 bg-slate-800 border border-indigo-500/30 text-indigo-400 text-sm rounded-full font-bold shadow-inner flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
        {{ Auth::user()?->credits ?? session('guest_credits', 10) }} Credits
    </span>
@endunless

                @auth
                    <!-- Logged-in User Dropdown -->
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-slate-700 text-sm leading-4 font-medium rounded-xl text-slate-200 bg-slate-800 hover:bg-slate-700 hover:text-white focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4 text-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')" class="hover:bg-slate-800 text-slate-600 hover:text-slate-200">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();"
                                        class="hover:bg-slate-800 text-slate-600 hover:text-slate-200">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @else
                    <!-- Guest User Buttons -->
                    <div class="flex items-center gap-3">
                        <a href="{{ route('login') }}" class="text-sm text-slate-300 hover:text-white font-medium px-3 py-2 transition">Log in</a>
                        <a href="{{ route('register') }}" class="text-sm bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 text-white px-4 py-2 rounded-xl font-medium shadow-md transition">Register</a>
                    </div>
                @endauth
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-slate-400 hover:text-slate-200 hover:bg-slate-800 focus:outline-none focus:bg-slate-800 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-slate-900 border-b border-slate-800">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-slate-300">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-3 border-t border-slate-800">
            @auth
                <div class="px-4 mb-3">
                    <div class="font-medium text-base text-slate-100">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-slate-400">{{ Auth::user()->email }}</div>
                </div>

                <div class="space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')" class="text-slate-300">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();"
                                class="text-slate-300">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            @else
                <div class="space-y-2 px-4">
                   <button type="button" onclick="Livewire.dispatch('open-pricing-modal')" class="px-3.5 py-1.5 text-xs font-bold bg-gradient-to-r from-amber-500 to-yellow-500 hover:from-amber-400 hover:to-yellow-400 text-slate-950 rounded-full transition-all duration-200 shadow-md shadow-amber-500/20 flex items-center gap-1.5 cursor-pointer">
    ⚡ Upgrade to PRO
</button>
                    <x-responsive-nav-link :href="route('login')" class="text-slate-300">
                        {{ __('Log in') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('register')" class="text-slate-300">
                        {{ __('Register') }}
                    </x-responsive-nav-link>
                </div>
            @endauth
        </div>
    </div>
</nav>