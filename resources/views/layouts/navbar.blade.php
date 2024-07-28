<div x-data="{ open: false, profileOpen: false }" class="fixed w-full z-10">
    {{-- 1st Navbar --}}
    <div class="bg-pink-400 hidden lg:block">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex justify-end items-center py-1">
            <a href="{{ url('help')}}" class="hover:text-gray-300 flex items-center space-x-1 mr-4">
                <i class="fa fa-question-circle" aria-hidden="true"></i>
                <span>Help</span>
            </a>
            <a href="{{url('notifications')}}" class="hover:text-gray-300 flex items-center space-x-1 mr-4">
                <i class="fa fa-bell" aria-hidden="true"></i>
                <span>Notifications</span>
            </a>
            <a href="{{url('dashboard')}}" class="hover:text-gray-300 flex items-center space-x-1">
                <span>Dashboard</span>
            </a>
        </div>
    </div>
    {{-- 2nd Navbar --}}
    <div class="dark:bg-slate-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center py-6">
                <div class="flex items-center space-x-4">
                    <a href="#">
                        <img src="{{ asset('images/SPAS_logo.png') }}" alt="San Pedro Animal Shelter" class="h-20">
                    </a>
                    <h1 class="text-xl font-bold hidden lg:block">San Pedro Animal Shelter</h1>
                </div>
                <div class="-mr-2 flex items-center md:hidden">
                    <button @click="open = !open" type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <nav class="hidden md:flex space-x-10 items-center">
                    <a href="{{ url('/') }}"
                        class="dark:text-white text-base font-medium text-gray-900 hover:text-pink-300">Home</a>
                    <a href="{{ url('/about') }}"
                        class="dark:text-white text-base font-medium text-gray-900 hover:text-pink-300">About Us</a>
                    <a href="{{ url('/adopt') }}"
                        class="dark:text-white text-base font-medium text-gray-900 hover:text-pink-300">Adopt</a>
                    <a href="{{ url('/donate') }}"
                        class="dark:text-white text-base font-medium text-gray-900 hover:text-pink-300">Donate</a>
                    <a href="{{ url('/volunteer') }}"
                        class="dark:text-white text-base font-medium text-gray-900 hover:text-pink-300">Volunteer</a>
                    <a href="{{ url('/appointment') }}"
                        class="dark:text-white text-base font-medium text-gray-900 hover:text-pink-300">Appointments</a>
                    <a href="{{ url('/contact') }}"
                        class="dark:text-white text-base font-medium text-gray-900 hover:text-pink-300">Contact Us</a>
                    
                    @guest
                        <a href="{{url('login')}}" class="bg-pink-500 text-white text-lg py-2 px-8 rounded">Login</a>
                    @else
                        <!-- User Profile Dropdown -->
                        <div class="relative" x-data="{ profileOpen: false }">
                            <button @click="profileOpen = !profileOpen" type="button" class="flex items-center space-x-2">
                                <img src="{{ asset('images/user-image.svg') }}" alt="User Image" class="h-8 w-8 rounded-full">
                            </button>
                            <div x-show="profileOpen" @click.away="profileOpen = false" x-transition:enter="transition ease-out duration-100"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5">
                                <div class="px-4 py-2 text-sm border-b text-gray-700 dark:text-gray-300 hidden md:block">
                                    <p class="font-bold">{{ Auth::user()->name }}</p>
                                    <p class="text-sm">
                                        @if(Auth::user()->is_admin)
                                            Administrator
                                        @else
                                            User
                                        @endif
                                    </p>
                                </div>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300">Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300">Settings</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300">Inbox</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300">Message</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300">Need help?</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 w-full text-left">Sign out</button>
                                </form>
                            </div>
                        </div>
                    @endguest
                </nav>
            </div>
        </div>
    </div>

    <div :class="{ 'block': open, 'hidden': !open }" class="md:hidden bg-pink-100 dark:bg-slate-950">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="{{ url('/') }}"
                class="block px-3 py-2 rounded-md text-base font-medium dark:text-white text-gray-900 hover:text-pink-300 hover:bg-gray-50">Home</a>
            <a href="{{ url('/about') }}"
                class="block px-3 py-2 rounded-md text-base font-medium dark:text-white text-gray-900 hover:text-pink-300 hover:bg-gray-50">About Us</a>
            <a href="{{ url('/adopt') }}"
                class="block px-3 py-2 rounded-md text-base font-medium dark:text-white text-gray-900 hover:text-pink-300 hover:bg-gray-50">Adopt</a>
            <a href="{{ url('/donate') }}"
                class="block px-3 py-2 rounded-md text-base font-medium dark:text-white text-gray-900 hover:text-pink-300 hover:bg-gray-50">Donate</a>
            <a href="{{ url('/volunteer') }}"
                class="block px-3 py-2 rounded-md text-base font-medium dark:text-white text-gray-900 hover:text-pink-300 hover:bg-gray-50">Volunteer</a>
            <a href="{{ url('/appointment') }}"
                class="block px-3 py-2 rounded-md text-base font-medium dark:text-white text-gray-900 hover:text-pink-300 hover:bg-gray-50">Appointments</a>
            <a href="{{ url('/contact') }}"
                class="block px-3 py-2 rounded-md text-base font-medium dark:text-white text-gray-900 hover:text-pink-300 hover:bg-gray-50">Contact Us</a>
            <a href="{{ url('/help') }}"
                class="block px-3 py-2 rounded-md text-base font-medium dark:text-white text-gray-900 hover:text-pink-300 hover:bg-gray-50">Help</a>
            <a href="{{ url('/notifications') }}"
                class="block px-3 py-2 rounded-md text-base font-medium dark:text-white text-gray-900 hover:text-pink-300 hover:bg-gray-50">Notifications</a>
            <a href="{{ url('/dashboard') }}"
                class="block px-3 py-2 rounded-md text-base font-medium dark:text-white text-gray-900 hover:text-pink-300 hover:bg-gray-50">Dashboard</a>
        </div>
    </div>
</div>
