<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidenav" id="drawer-navigation">
    <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
        <form action="#" method="GET" class="md:hidden mb-2">
            <label for="sidebar-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z">
                        </path>
                    </svg>
                </div>
                <input type="text" name="search" id="sidebar-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                    placeholder="Search" />
            </div>
        </form>
        <ul class="space-y-2">
            <li>
                <x-nav-link href="/"></x-nav-link>
                <x-nav-linkicon></x-nav-linkicon>
                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                </svg>
                <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-medium rounded-lg transition duration-75 group
               {{ request()->is('tujuanpembelajaran') || request()->is('lingkupmateri') || request()->is('asesmenformatif') || request()->is('asesmensumatif') || request()->is('penilaianekstrkulikuler') || request()->is('nilaiakhir') ? 'bg-blue-700 hover:bg-blue-800 text-white' : 'bg-white text-gray-900' }}
               hover:bg-blue-500 hover:text-white"
                    aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 transition duration-75 
                   {{ request()->is('tujuanpembelajaran') || request()->is('lingkupmateri') || request()->is('asesmenformatif') || request()->is('asesmensumatif') || request()->is('penilaianekstrkulikuler') || request()->is('nilaiakhir') ? 'text-white' : 'text-gray-500' }}
                   group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Input</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-pages"
                    class="{{ request()->is('tujuanpembelajaran') || request()->is('lingkupmateri') || request()->is('asesmenformatif') || request()->is('asesmensumatif') || request()->is('penilaianekstrkulikuler') || request()->is('nilaiakhir') ? '' : 'hidden' }} py-2 space-y-2">
                    <li>
                        <a href="/tujuanpembelajaran"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium rounded-lg transition duration-75 group
                       {{ request()->is('tujuanpembelajaran') ? 'bg-blue-500 text-white hover:bg-blue-800' : ' text-gray-900' }}
                       hover:bg-blue-500 hover:text-white">Tujuan
                            Pembelajaran</a>
                    </li>
                    <li>
                        <a href="/lingkupmateri"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium rounded-lg transition duration-75 group
                       {{ request()->is('lingkupmateri') ? 'bg-blue-500 text-white hover:bg-blue-800' : 'text-gray-900' }}
                       hover:bg-blue-500 hover:text-white">Lingkup
                            Materi</a>
                    </li>
                    <li>
                        <a href="/asesmenformatif"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium rounded-lg transition duration-75 group
                       {{ request()->is('asesmenformatif') ? 'bg-blue-500 text-white hover:bg-blue-800' : 'text-gray-900' }}
                       hover:bg-blue-500 hover:text-white">Asesmen
                            Formatif</a>
                    </li>
                    <li>
                        <a href="/asesmensumatif"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium rounded-lg transition duration-75 group
                       {{ request()->is('asesmensumatif') ? 'bg-blue-500 text-white hover:bg-blue-800' : 'text-gray-900' }}
                       hover:bg-blue-500 hover:text-white">Asesmen
                            Sumatif</a>
                    </li>
                    <li>
                        <a href="/penilaianekstrkulikuler"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium rounded-lg transition duration-75 group
                       {{ request()->is('penilaianekstrkulikuler') ? 'bg-blue-500 text-white hover:bg-blue-800' : 'text-gray-900' }}
                       hover:bg-blue-500 hover:text-white">Penilaian
                            Ekstrakulikuler</a>
                    </li>
                    <li>
                        <a href="/nilaiakhir"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium rounded-lg transition duration-75 group
                       {{ request()->is('nilaiakhir') ? 'bg-blue-500 text-white' : 'text-gray-900' }}
                       hover:bg-blue-500 hover:text-white">Nilai
                            Akhir</a>
                    </li>
                </ul>
            </li>

            <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-medium rounded-lg transition duration-75 group
                    {{ request()->is('datasekolah') || request()->is('datakelas') || request()->is('dataguru') || request()->is('datasiswa') || request()->is('mapelintrakulikuler') || request()->is('mapelekstrakulikuler') ? 'bg-blue-700 hover:bg-blue-800 text-white ' : 'hover:bg-blue-500 hover:text-white' }}"
                    aria-controls="dropdown-datamaster" data-collapse-toggle="dropdown-datamaster">
                    <svg aria-hidden="true" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"
                        class="flex-shrink-0 w-6 h-5 transition duration-75 {{ request()->is('datasekolah') || request()->is('datakelas') || request()->is('dataguru') || request()->is('datasiswa') || request()->is('mapelintrakulikuler') || request()->is('mapelekstrakulikuler') ? 'text-white' : 'text-gray-500 group-hover:text-white' }}"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M448 80l0 48c0 44.2-100.3 80-224 80S0 172.2 0 128L0 80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6L448 288c0 44.2-100.3 80-224 80S0 332.2 0 288L0 186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6l0 85.9c0 44.2-100.3 80-224 80S0 476.2 0 432l0-85.9z"
                            clip-rule="evenodd">
                        </path>
                    </svg>

                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Data Master</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

                <ul id="dropdown-datamaster"
                    class="{{ request()->is('datasekolah') || request()->is('datakelas') || request()->is('dataguru') || request()->is('datasiswa') || request()->is('mapelintrakulikuler') || request()->is('mapelintrakulikuler') ? '' : 'hidden' }} py-2 space-y-2">

                    <li>
                        <a href="/datasekolah"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium rounded-lg transition duration-75 group
                       {{ request()->is('datasekolah') ? 'bg-blue-500 text-white hover:bg-blue-800' : 'text-gray-900' }}
                       hover:bg-blue-500 hover:text-white">
                            Data Sekolah</a>
                    </li>
                    <li>
                        <a href="/datakelas"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium rounded-lg transition duration-75 group
                       {{ request()->is('datakelas') ? 'bg-blue-500 text-white hover:bg-blue-800' : 'text-gray-900' }}
                       hover:bg-blue-500 hover:text-white">
                            Data Kelas</a>
                    </li>
                    <li>
                        <a href="/dataguru"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium rounded-lg transition duration-75 group
                       {{ request()->is('dataguru') ? 'bg-blue-500 text-white hover:bg-blue-800' : 'text-gray-900' }}
                       hover:bg-blue-500 hover:text-white">
                            Data Guru</a>
                    </li>
                    <li>
                        <a href="/datasiswa"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium rounded-lg transition duration-75 group
                       {{ request()->is('datasiswa') ? 'bg-blue-500 text-white hover:bg-blue-800' : 'text-gray-900' }}
                       hover:bg-blue-500 hover:text-white">
                            Data Siswa</a>
                    </li>
                    <li>
                        <a href="/mapelintrakulikuler"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium rounded-lg transition duration-75 group
                       {{ request()->is('mapelintrakulikuler') ? 'bg-blue-500 text-white hover:bg-blue-800' : 'text-gray-900' }}
                       hover:bg-blue-500 hover:text-white">
                            Mapel Intrakurikuler</a>
                    </li>
                    <li>
                        <a href="/mapelekstrakulikuler"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium rounded-lg transition duration-75 group
                       {{ request()->is('mapelekstrakulikuler') ? 'bg-blue-500 text-white hover:bg-blue-800' : 'text-gray-900' }}
                       hover:bg-blue-500 hover:text-white">
                            Mapel Ekstrakurikuler</a>
                    </li>
                </ul>
            </li>
            {{-- <li>
                <a href="#"
                    class="flex items-center p-2 text-base font-medium text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                        </path>
                        <path
                            d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                        </path>
                    </svg>
                    <span class="flex-1 ml-3 whitespace-nowrap">Messages</span>
                    <span
                        class="inline-flex justify-center items-center w-5 h-5 text-xs font-semibold rounded-full text-primary-800 bg-primary-100 dark:bg-primary-200 dark:text-primary-800">
                        4
                    </span>
                </a>
            </li> --}}
            {{-- <li>
                <button type="button"
                    class="flex items-center p-2 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-authentication" data-collapse-toggle="dropdown-authentication">

                    <svg aria-hidden="true"
                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Authentication</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul id="dropdown-authentication" class="hidden py-2 space-y-2">
                    <li>
                        <a href="#"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Sign
                            In</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Sign
                            Up</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Forgot
                            Password</a>
                    </li>
                </ul>
            </li> --}}
        </ul>
        <ul class="pt-5 mt-5 space-y-2 border-t border-gray-200 dark:border-gray-700">
            <li>
                <x-nav-link href="docs"></x-nav-link>
                <x-nav-linkicon></x-nav-linkicon>
                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                <path fill-rule="evenodd"
                    d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                    clip-rule="evenodd"></path>
                </svg>
                <span class="ml-3">Docs</span>
                </a>
            </li>
            <li>
                <x-nav-link href="help"></x-nav-link>
                <x-nav-linkicon></x-nav-linkicon>
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z"
                    clip-rule="evenodd"></path>
                </svg>
                <span class="ml-3">Help</span>
                </a>
            </li>
            <li>
                <x-nav-link href="setting"></x-nav-link>
                <x-nav-linkicon></x-nav-linkicon>
                <path fill-rule="evenodd"
                    d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                    clip-rule="evenodd"></path>
                </svg>
                <span class="ml-3">Setting</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
