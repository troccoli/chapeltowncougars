<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="{{ route('home') }}">
                    <span class="sr-only">Home</span>
                    <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                </a>
            </div>
            <nav class="flex space-x-10">
                <a href="{{ route('home') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">Home</a>
                <a href="{{ route('induction') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">Induction</a>
                <a href="{{ route('registration') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">Registration</a>
                <a href="{{ route('volunteering') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">Volunteering</a>
                <a href="{{ route('gallery') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">Gallery</a>
                <a href="{{ route('who-is-who') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">Who's who</a>
            </nav>

        </div>
    </div>
</div>
