<svg {{ $attributes }} aria-hidden="true"
    class="w-6 h-6 transition duration-75 
    {{ request()->is($attributes) ? 'text-white' : 'text-gray-500' }}group-hover:text-white"
    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
