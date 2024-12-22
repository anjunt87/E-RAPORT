<x-layout>
    <h1 class="text-2xl font-semibold mxb-4">Tujuan Pembelajaran</h1>
    <div class="grid gap-6 mt-4">
        <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="grid grid-cols-3 gap-6">
                <div class="space-y-6">
                    <a href="/pendidikanagama"
                        class="block bg-white text-center border-2 border-gray-100 p-4 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 cursor-pointer"
                        x-bind:class="{ 'bg-gray-300': selectedSubject === 'Pendidikan Agama dan Budi Pekerti' }"
                        x-on:click="selectedSubject = 'Pendidikan Agama dan Budi Pekerti'">
                        Pendidikan Agama dan Budi Pekerti
                    </a>
                    <a href="/PendidikanPancasila"
                        class="block bg-white text-center border-2 border-gray-100 p-4 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 cursor-pointer"
                        x-bind:class="{ 'bg-gray-300': selectedSubject === 'Pendidikan Pancasila' }"
                        x-on:click="selectedSubject = 'Pendidikan Pancasila'">
                        Pendidikan Pancasila
                    </a>
                    <a href="/BahasaIndonesia"
                        class="block bg-white text-center border-2 border-gray-100 p-4 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 cursor-pointer"
                        x-bind:class="{ 'bg-gray-300': selectedSubject === 'Bahasa Indonesia' }"
                        x-on:click="selectedSubject = 'Bahasa Indonesia'">
                        Bahasa Indonesia
                    </a>
                    <a href="/Matematika"
                        class="block bg-white text-center border-2 border-gray-100 p-4 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 cursor-pointer"
                        x-bind:class="{ 'bg-gray-300': selectedSubject === 'Matematika' }"
                        x-on:click="selectedSubject = 'Matematika'">
                        Matematika
                    </a>
                    <a href="/PendidikanJasmani"
                        class="block bg-white text-center border-2 border-gray-100 p-4 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 cursor-pointer"
                        x-bind:class="{ 'bg-gray-300': selectedSubject === 'Pendidikan Jasmani Olahraga dan Kesehatan' }"
                        x-on:click="selectedSubject = 'Pendidikan Jasmani Olahraga dan Kesehatan'">
                        Pendidikan Jasmani Olahraga dan Kesehatan
                    </a>
                </div>

                <div class="space-y-6">
                    <a href="/SeniBudaya"
                        class="block bg-white text-center border-2 border-gray-100 p-4 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 cursor-pointer"
                        x-bind:class="{ 'bg-gray-300': selectedSubject === 'Seni Budaya dan Prakarya' }"
                        x-on:click="selectedSubject = 'Seni Budaya dan Prakarya'">
                        Seni Budaya dan Prakarya
                    </a>
                    <a href="/BahasaInggris"
                        class="block bg-white text-center border-2 border-gray-100 p-4 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 cursor-pointer"
                        x-bind:class="{ 'bg-gray-300': selectedSubject === 'Bahasa Inggris' }"
                        x-on:click="selectedSubject = 'Bahasa Inggris'">
                        Bahasa Inggris
                    </a>
                    <a href="/BahasaArab"
                        class="block bg-white text-center border-2 border-gray-100 p-4 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 cursor-pointer"
                        x-bind:class="{ 'bg-gray-300': selectedSubject === 'Bahasa Arab' }"
                        x-on:click="selectedSubject = 'Bahasa Arab'">
                        Bahasa Arab
                    </a>
                    <a href="/IPAS"
                        class="block bg-white text-center border-2 border-gray-100 p-4 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 cursor-pointer"
                        x-bind:class="{ 'bg-gray-300': selectedSubject === 'IPAS' }"
                        x-on:click="selectedSubject = 'IPAS'">
                        IPAS
                    </a>
                    <a href="/BahasaSunda"
                        class="block bg-white text-center border-2 border-gray-100 p-4 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 cursor-pointer"
                        x-bind:class="{ 'bg-gray-300': selectedSubject === 'Bahasa Sunda' }"
                        x-on:click="selectedSubject = 'Bahasa Sunda'">
                        Bahasa Sunda
                    </a>
                </div>

                <div class="space-y-6">
                    <a href="/TeknologiInformasi"
                        class="block bg-white text-center border-2 border-gray-100 p-4 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 cursor-pointer"
                        x-bind:class="{ 'bg-gray-300': selectedSubject === 'Teknologi Informasi dan Komunikasi' }"
                        x-on:click="selectedSubject = 'Teknologi Informasi dan Komunikasi'">
                        Teknologi Informasi dan Komunikasi
                    </a>
                    <a href="#"
                        class="block bg-white text-center border-2 border-gray-100 p-4 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 cursor-pointer"
                        x-bind:class="{ 'bg-gray-300': selectedSubject === '-' }"
                        x-on:click="selectedSubject = '-'">
                        -
                    </a>
                    <a href="#"
                        class="block bg-white text-center border-2 border-gray-100 p-4 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 cursor-pointer"
                        x-bind:class="{ 'bg-gray-300': selectedSubject === '-' }"
                        x-on:click="selectedSubject = '-'">
                        -
                    </a>
                    <a href="#"
                        class="block bg-white text-center border-2 border-gray-100 p-4 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 cursor-pointer"
                        x-bind:class="{ 'bg-gray-300': selectedSubject === '-' }"
                        x-on:click="selectedSubject = '-'">
                        -
                    </a>
                    <a href="#"
                        class="block bg-white text-center border-2 border-gray-100 p-4 rounded-lg shadow-lg transition duration-300 ease-in-out transform hover:scale-105 cursor-pointer"
                        x-bind:class="{ 'bg-gray-300': selectedSubject === '-' }"
                        x-on:click="selectedSubject = '-'">
                        -
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-layout>
