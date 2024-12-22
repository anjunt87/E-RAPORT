<a {{ $attributes }}
    class="flex items-center p-2 text-base font-medium rounded-lg group 
    {{ request()->is($attributes)
        ? 'bg-blue-700 hover:bg-blue-800 text-white '
        : 'bg-white text-gray-500 hover:bg-blue-500 hover:text-white' }}">
