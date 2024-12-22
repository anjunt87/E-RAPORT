<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin e-Raport</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body class="bg-gray-50 font-sans leading-normal tracking-normal" x-data="{ openSidebar: false, openAccountMenu: false }">
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
        <!-- Navbar -->
        @include('template.navbar')

        <!-- Sidebar -->
        @include('template.sidebar')


        <main class="p-4 md:ml-64 h-auto pt-20">
            {{-- <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
                <div class="border-2 border-dashed border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-64"></div>
                <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"></div>
                <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"></div>
                <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"></div>
            </div>
            <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"></div>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
                <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
                <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
                <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
            </div>
            <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"></div>
            <div class="grid grid-cols-2 gap-4">
                <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
                <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
                <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
                <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
            </div> --}}
            <h1 class="text-2xl font-semibold mb-4">Dashboard</h1>
            <!-- Cards Section -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div
                    class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-all transform hover:scale-105 duration-300 ease-in-out">
                    <p class="text-2xl font-bold text-green-600">111</p>
                    <p class="text-lg">Siswa</p>
                </div>
                <div
                    class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-all transform hover:scale-105 duration-300 ease-in-out">
                    <p class="text-2xl font-bold text-green-600">111</p>
                    <p class="text-lg">Guru</p>
                </div>
                <div
                    class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-all transform hover:scale-105 duration-300 ease-in-out">
                    <p class="text-2xl font-bold text-green-600">111</p>
                    <p class="text-lg">Mapel</p>
                </div>
                <div
                    class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl transition-all transform hover:scale-105 duration-300 ease-in-out">
                    <p class="text-2xl font-bold text-green-600">10</p>
                    <p class="text-lg">Kelas</p>
                </div>
            </div>
            {{-- <div class="grid">
                <div class="bg-white p-4 rounded-lg mt-4">

                </div>
            </div> --}}
            <section>
                @include('element.calender')
            </section>

        </main>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script></script>

</html>
