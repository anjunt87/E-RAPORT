<x-layout>
    <h1 class="text-2xl font-semibold mxb-4">Tujuan Pembelajaran</h1>
    <div class="grid gap-6 mt-4">
        <div class="bg-white p-4 rounded-lg shadow-xl">
            <div x-data="{
                activeTab: 'lv1',
                lv1Data: [{ no: 1, tujuan: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' }],
                lv2Data: [{ no: 1, tujuan: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' }],
                lv3Data: [{ no: 1, tujuan: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' }],
                lv4Data: [{ no: 1, tujuan: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' }],
                lv5Data: [{ no: 1, tujuan: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' }],
                lv6Data: [{ no: 1, tujuan: 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' }]
            }" class="p-4">

                <!-- Tabs Navigation -->
                <div class="mb-4 flex space-x-4 border-b">
                    <button @click="activeTab = 'lv1'"
                        :class="activeTab === 'lv1' ? 'border-blue-500 text-blue-500' : 'border-transparent text-gray-500'"
                        class="px-4 py-2 border-b-2 font-medium">Lv 1</button>
                    <button @click="activeTab = 'lv2'"
                        :class="activeTab === 'lv2' ? 'border-blue-500 text-blue-500' : 'border-transparent text-gray-500'"
                        class="px-4 py-2 border-b-2 font-medium">LV 2</button>
                    <button @click="activeTab = 'lv3'"
                        :class="activeTab === 'lv3' ? 'border-blue-500 text-blue-500' : 'border-transparent text-gray-500'"
                        class="px-4 py-2 border-b-2 font-medium">Lv 3</button>
                    <button @click="activeTab = 'lv4'"
                        :class="activeTab === 'lv4' ? 'border-blue-500 text-blue-500' : 'border-transparent text-gray-500'"
                        class="px-4 py-2 border-b-2 font-medium">Lv 4</button>
                    <button @click="activeTab = 'lv5'"
                        :class="activeTab === 'lv5' ? 'border-blue-500 text-blue-500' : 'border-transparent text-gray-500'"
                        class="px-4 py-2 border-b-2 font-medium">Lv 5</button>
                    <button @click="activeTab = 'lv6'"
                        :class="activeTab === 'lv6' ? 'border-blue-500 text-blue-500' : 'border-transparent text-gray-500'"
                        class="px-4 py-2 border-b-2 font-medium">Lv 6</button>
                </div>

                <!-- Tab Content -->
                <div>
                    <!-- Level 1 Content -->
                    <div x-show="activeTab === 'lv1'">
                        <table class="table-auto w-full border-collapse border border-gray-300">
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">No</th>
                                    <th class="border px-4 py-2">Tujuan Pembelajaran</th>
                                    <th class="border px-4 py-2">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template x-for="(item, index) in lv1Data" :key="index">
                                    <tr>
                                        <td class="border px-4 py-2">
                                            <input x-model="item.no" class="w-full border px-2 py-1" />
                                        </td>
                                        <td class="border px-4 py-2">
                                            <textarea x-model="item.tujuan" class="w-full border px-2 py-1" rows="3"></textarea>
                                        </td>
                                        <td class="border px-4 py-2">
                                            <button @click="confirmDelete(index)"
                                                class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                        <button @click="lv1Data.push({no: lv1Data.length + 1, tujuan: ''})"
                            class="mt-4 px-4 py-2 bg-blue-500 text-white">Tambah Baris</button>
                    </div>

                    <!-- Level 2 Content -->
                    <div x-show="activeTab === 'lv2'">
                        <table class="table-auto w-full border-collapse border border-gray-300">
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">No</th>
                                    <th class="border px-4 py-2">Tujuan Pembelajaran</th>
                                    <th class="border px-4 py-2">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template x-for="(item, index) in lv2Data" :key="index">
                                    <tr>
                                        <td class="border px-4 py-2">
                                            <input x-model="item.no" class="w-full border px-2 py-1" readonly />
                                        </td>
                                        <td class="border px-4 py-2">
                                            <textarea x-model="item.tujuan" class="w-full border px-2 py-1" rows="3"></textarea>
                                        </td>
                                        <td class="border px-4 py-2">
                                            <button @click="lv2Data.splice(index, 1)"
                                                class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                        <button @click="lv2Data.push({no: lv2Data.length + 1, tujuan: ''})"
                            class="mt-4 px-4 py-2 bg-blue-500 text-white">Tambah Baris</button>
                    </div>

                    <!-- Level 3 Content -->
                    <div x-show="activeTab === 'lv3'">
                        <table class="table-auto w-full border-collapse border border-gray-300">
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">No</th>
                                    <th class="border px-4 py-2">Tujuan Pembelajaran</th>
                                    <th class="border px-4 py-2">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template x-for="(item, index) in lv3Data" :key="index">
                                    <tr>
                                        <td class="border px-4 py-2">
                                            <input x-model="item.no" class="w-full border px-2 py-1" />
                                        </td>
                                        <td class="border px-4 py-2">
                                            <textarea x-model="item.tujuan" class="w-full border px-2 py-1" rows="3"></textarea>
                                        </td>
                                        <td class="border px-4 py-2">
                                            <button @click="lv3Data.splice(index, 1)"
                                                class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                        <button @click="lv3Data.push({no: lv3Data.length + 1, tujuan: ''})"
                            class="mt-4 px-4 py-2 bg-blue-500 text-white">Tambah Baris</button>
                    </div>

                    <!-- Level 4 Content -->
                    <div x-show="activeTab === 'lv4'">
                        <table class="table-auto w-full border-collapse border border-gray-300">
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">No</th>
                                    <th class="border px-4 py-2">Tujuan Pembelajaran</th>
                                    <th class="border px-4 py-2">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template x-for="(item, index) in lv4Data" :key="index">
                                    <tr>
                                        <td class="border px-4 py-2">
                                            <input x-model="item.no" class="w-full border px-2 py-1" />
                                        </td>
                                        <td class="border px-4 py-2">
                                            <textarea x-model="item.tujuan" class="w-full border px-2 py-1" rows="3"></textarea>
                                        </td>
                                        <td class="border px-4 py-2">
                                            <button @click="lv4Data.splice(index, 1)"
                                                class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                        <button @click="lv4Data.push({no: lv4Data.length + 1, tujuan: ''})"
                            class="mt-4 px-4 py-2 bg-blue-500 text-white">Tambah Baris</button>
                    </div>

                    <!-- Level 5 Content -->
                    <div x-show="activeTab === 'lv5'">
                        <table class="table-auto w-full border-collapse border border-gray-300">
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">No</th>
                                    <th class="border px-4 py-2">Tujuan Pembelajaran</th>
                                    <th class="border px-4 py-2">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template x-for="(item, index) in lv5Data" :key="index">
                                    <tr>
                                        <td class="border px-4 py-2">
                                            <input x-model="item.no" class="w-full border px-2 py-1" />
                                        </td>
                                        <td class="border px-4 py-2">
                                            <textarea x-model="item.tujuan" class="w-full border px-2 py-1" rows="3"></textarea>
                                        </td>
                                        <td class="border px-4 py-2">
                                            <button @click="lv5Data.splice(index, 1)"
                                                class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                        <button @click="lv5Data.push({no: lv5Data.length + 1, tujuan: ''})"
                            class="mt-4 px-4 py-2 bg-blue-500 text-white">Tambah Baris</button>
                    </div>

                    <!-- Level 6 Content -->
                    <div x-show="activeTab === 'lv6'">
                        <table class="table-auto w-full border-collapse border border-gray-300">
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2">No</th>
                                    <th class="border px-4 py-2">Tujuan Pembelajaran</th>
                                    <th class="border px-4 py-2">Hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <template x-for="(item, index) in lv6Data" :key="index">
                                    <tr>
                                        <td class="border px-4 py-2">
                                            <input x-model="item.no" class="w-full border px-2 py-1" />
                                        </td>
                                        <td class="border px-4 py-2">
                                            <textarea x-model="item.tujuan" class="w-full border px-2 py-1" rows="3"></textarea>
                                        </td>
                                        <td class="border px-4 py-2">
                                            <button @click="lv6Data.splice(index, 1)"
                                                class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                                        </td>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                        <button @click="lv6Data.push({no: lv6Data.length + 1, tujuan: ''})"
                            class="mt-4 px-4 py-2 bg-blue-500 text-white">Tambah Baris</button>
                    </div>
                </div>
            </div>



        </div>
    </div>
    <!-- Konfirmasi Hapus dengan SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(index) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Menghapus data dari array
                    this.lv6Data.splice(index, 1);
                    Swal.fire(
                        'Terhapus!',
                        'Data berhasil dihapus.',
                        'success'
                    );
                }
            });
        }
    </script>
</x-layout>
