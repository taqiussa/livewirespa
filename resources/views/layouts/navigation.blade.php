<nav x-data="{ open: false }" class="bg-teal-400 border-b-4 border-teal-700 rounded-lg shadow-xl p-3">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a class="flex items-center text-teal-700 no-underline hover:no-underline font-bold text-xl lg:text-42l"
                    href="#">
                    <svg style="width:50px;height:50px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M13,7H15V15A2,2 0 0,1 13,17H11A2,2 0 0,1 9,15V14H11V15H13V7M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M5,5V19H19V5H5Z" />
                    </svg> JBT | Nawangsari
                </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <a wire:click="myroute('dashboard', 'Dashboard')" 
                    class="font-bold text-lg lg:text-42l
                    @if ($pageroute === 'dashboard')
                    inline-flex items-center px-1 pt-1 border-b-2 border-transparent leading-5 text-teal-700 focus:outline-none focus:border-teal-700 transition duration-150 ease-in-out hover:text-teal-200 hover:border-teal-200
                    @else
                    inline-flex items-center px-1 pt-1 border-b-2 border-transparent leading-5 text-teal-200 hover:text-teal-700 hover:border-teal-700 focus:outline-none focus:text-teal-300 focus:border-teal-700 transition duration-150 ease-in-out
                    @endif 
                    ">
                        {{ __('Dashboard') }}
                    </a>
                    <a wire:click="myroute('profile', 'User Profile')" 
                    class="font-bold text-lg lg:text-42l
                    @if ($pageroute === 'profile')
                    inline-flex items-center px-1 pt-1 border-b-2 border-transparent leading-5 text-teal-700 focus:outline-none focus:border-teal-700 transition duration-150 ease-in-out hover:text-teal-200 hover:border-teal-200
                    @else
                    inline-flex items-center px-1 pt-1 border-b-2 border-transparent leading-5 text-teal-200 hover:text-teal-700 hover:border-teal-700 focus:outline-none focus:text-teal-300 focus:border-teal-700 transition duration-150 ease-in-out
                    @endif 
                    ">
                        {{ __('User Profile') }}
                    </a>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-md font-bold text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a wire:click="myroute('dashboard', 'Dashboard')" 
                    class="
                    @if ($pageroute === 'dashboard')
                    block pl-3 pr-4 py-2 border-l-4 border-teal-400 text-base font-medium text-teal-200 bg-teal-500 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out hover:text-teal-700 hover:border-teal-700
                    @else
                    block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-teal-700 hover:text-teal-200 hover:bg-teal-500 hover:border-teal-400 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out
                    @endif 
                    ">
                        {{ __('Dashboard') }}
                    </a>
                    <a wire:click="myroute('profile', 'User Profile')" 
                    class="
                    @if ($pageroute === 'profile')
                    block pl-3 pr-4 py-2 border-l-4 border-teal-400 text-base font-medium text-teal-200 bg-teal-500 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out hover:text-teal-700 hover:border-teal-700
                    @else
                    block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-teal-700 hover:text-teal-200 hover:bg-teal-500 hover:border-teal-400 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out
                    @endif 
                    ">
                        {{ __('User Profile') }}
                    </a>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
