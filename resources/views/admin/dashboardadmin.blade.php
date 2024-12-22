<x-layout>
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

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

</x-layout>
