<nav x-data="{ openMenu: false }"
     class="bg-white mb-12">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <span class="sr-only">Home</span>
                    <img class="h-8 w-auto sm:h-10" src="{{ url('/images/Mascot-Logo.png') }}" alt="Cougars' Logo">
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">Home</x-nav-link>
                    <x-nav-link href="{{ route('induction') }}" :active="request()->routeIs('induction')">Induction</x-nav-link>
                    <x-nav-link href="{{ route('registration') }}" :active="request()->routeIs('registration')">Registration</x-nav-link>
                    <x-nav-link href="{{ route('volunteering') }}" :active="request()->routeIs('volunteering')">Volunteering</x-nav-link>
                    <x-nav-link href="{{ route('gallery') }}" :active="request()->routeIs('gallery')">Gallery</x-nav-link>
                    <x-nav-link href="{{ route('who-is-who') }}" :active="request()->routeIs('who-is-who')">Who's who</x-nav-link>
                </div>
            </div>

                <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="openMenu = ! openMenu"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <div :class="{'hidden': openMenu, 'inline-flex': ! openMenu }">
                        <x-heroicon-o-menu class="h-6 w-6"/>
                    </div>
                    <div :class="{'hidden': ! openMenu, 'inline-flex': openMenu }">
                        <x-heroicons-o-x class="h-6 w-6"/>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div :class="{'block': openMenu, 'hidden': ! openMenu}" class="hidden sm:hidden">
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="mt-3 space-y-1">
                <x-mobile-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">Home</x-mobile-nav-link>
                <x-mobile-nav-link href="{{ route('induction') }}" :active="request()->routeIs('induction')">Induction</x-mobile-nav-link>
                <x-mobile-nav-link href="{{ route('registration') }}" :active="request()->routeIs('registration')">Registration</x-mobile-nav-link>
                <x-mobile-nav-link href="{{ route('volunteering') }}" :active="request()->routeIs('volunteering')">Volunteering</x-mobile-nav-link>
                <x-mobile-nav-link href="{{ route('gallery') }}" :active="request()->routeIs('gallery')">Gallery</x-mobile-nav-link>
                <x-mobile-nav-link href="{{ route('who-is-who') }}" :active="request()->routeIs('who-is-who')">Who's who</x-mobile-nav-link>
            </div>
        </div>
    </div>
</nav>
