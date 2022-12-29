<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Admin Template</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }
    </style>
</head>
<body class="flex bg-gray-100 font-family-karla">
    <aside class="relative hidden w-64 h-screen shadow-xl bg-sidebar sm:block">
        <div class="p-6">
            <a href="index.html" class="text-3xl font-semibold text-white uppercase hover:text-gray-300">Admin</a>
            <button class="flex items-center justify-center w-full py-2 mt-5 font-semibold bg-white rounded-tr-lg rounded-bl-lg rounded-br-lg shadow-lg cta-btn hover:shadow-xl hover:bg-gray-300">
                <i class="mr-3 fas fa-plus"></i> New Report
            </button>
        </div>
        <nav class="pt-3 text-base font-semibold text-white">
            <h2 class="ml-6 font-serif text-lg font-semibold text-white underline shadow">MENU</h2>
            <div>
                <a href="admin" class="flex items-center py-4 pl-6 text-white nav-item">
                    <i class="mr-3 fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
                <a href="/" class="flex items-center py-4 pl-6 text-white opacity-75 hover:opacity-100 nav-item">
                    <i class="mr-3 fas fa-home"></i>
                    Home
                </a>
            </div>

            <h2 class="mt-6 ml-6 font-serif text-lg font-semibold text-white underline">INPUT DATA</h2>
            <div>
            <a href="/tabledata" class="flex items-center py-4 pl-6 text-white opacity-75 active-nav-link hover:opacity-100 nav-item">
                <i class="mr-3 fas fa-table"></i>
                Table Data
            </a>
            <a href="/formwisata" class="flex items-center py-4 pl-6 text-white opacity-75 hover:opacity-100 nav-item">
                <i class="mr-3 fas fa-table"></i>
                Wisata
            </a>
            <a href="/formtiket" class="flex items-center py-4 pl-6 text-white opacity-75 hover:opacity-100 nav-item">
                <i class="mr-3 fas fa-table"></i>
                Tiket
            </a>
            </div>


            <h2 class="mt-6 ml-6 font-serif text-lg font-semibold text-white underline">OTHERS</h2>
            <div>
            <a href="/calendar" class="flex items-center py-4 pl-6 text-white opacity-75 hover:opacity-100 nav-item">
                <i class="mr-3 fas fa-calendar"></i>
                Calendar
            </a>
            </div>
        </nav>
    </aside>



    <div class="flex flex-col w-full h-screen overflow-y-hidden">
        <!-- Desktop Header -->
        <header class="items-center hidden w-full px-6 py-2 bg-white sm:flex">
            <div class="w-1/2"></div>
            <div x-data="{ isOpen: false }" class="relative flex justify-end w-1/2">
                <button @click="isOpen = !isOpen" class="z-10 w-12 h-12 overflow-hidden border-4 border-gray-400 rounded-full realtive hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                    <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
                </button>
                <button x-show="isOpen" @click="isOpen = false" class="fixed inset-0 w-full h-full cursor-default"></button>
                <div x-show="isOpen" class="absolute w-32 py-2 mt-16 bg-white rounded-lg shadow-lg">
                    <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                        @if (Route::has('login'))
                            <div class="font-bold text-gray-800 transition duration-300 ease-in-out transform">
                                @auth
                                <!-- <button id="navAction" class="px-8 py-4 mx-auto mt-4 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow opacity-75 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105"> -->
                                <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dark:text-bla">LOG IN</a>

                                    @if (Route::has('register'))
                                    <!-- <button id="navAction" class="px-8 py-4 mx-auto mt-4 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow opacity-75 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105"> -->
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline dark:text-gray-500">REGISTER</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                </div>
            </div>
        </header>

        <!-- Mobile Header & Nav -->
        <header x-data="{ isOpen: false }" class="w-full px-6 py-5 bg-sidebar sm:hidden">
            <div class="flex items-center justify-between">
                <a href="index.html" class="text-3xl font-semibold text-white uppercase hover:text-gray-300">Admin</a>
                <button @click="isOpen = !isOpen" class="text-3xl text-white focus:outline-none">
                    <i x-show="!isOpen" class="fas fa-bars"></i>
                    <i x-show="isOpen" class="fas fa-times"></i>
                </button>
            </div>

            <!-- Dropdown Nav -->
            <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                <a href="/admin" class="flex items-center py-2 pl-4 text-white active-nav-link nav-item">
                    <i class="mr-3 fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
                <a href="/" class="flex items-center py-2 pl-4 text-white active-nav-link nav-item">
                    <i class="mr-3 fas fa-home"></i>
                    Home
                </a>
                <a href="/tabledata" class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 nav-item">
                    <i class="mr-3 fas fa-table"></i>
                    Table Data
                </a>
                <a href="/formwisata" class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 nav-item">
                    <i class="mr-3 fas fa-table"></i>
                    Wisata
                </a>
                <a href="/formtiket" class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 nav-item">
                    <i class="mr-3 fas fa-table"></i>
                    Tiket
                </a>
                <a href="/calendar" class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 nav-item">
                    <i class="mr-3 fas fa-calendar"></i>
                    Calendar
                </a>
                <a href="#" class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 nav-item">
                    <i class="mr-3 fas fa-user"></i>
                    My Account
                </a>
                <a href="#" class="flex items-center py-2 pl-4 text-white opacity-75 hover:opacity-100 nav-item">
                    <i class="mr-3 fas fa-sign-out-alt"></i>
                    Sign Out
                </a>
                <button class="flex items-center justify-center w-full py-2 mt-3 font-semibold bg-white rounded-lg shadow-lg cta-btn hover:shadow-xl hover:bg-gray-300">
                    <i class="mr-3 fas fa-arrow-circle-up"></i> Upgrade to Pro!
                </button>
            </nav>
            <!-- <button class="flex items-center justify-center w-full py-2 mt-5 font-semibold bg-white rounded-tr-lg rounded-bl-lg rounded-br-lg shadow-lg cta-btn hover:shadow-xl hover:bg-gray-300">
                <i class="mr-3 fas fa-plus"></i> New Report
            </button> -->
        </header>

        <div class="flex flex-col w-full h-screen overflow-x-hidden border-t">
        <main class="h-full pb-16 overflow-y-auto">
          <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
              INPUT DATA
            </h2>
            <!-- CTA -->

            {{-- start data 1 --}}
            <!-- General elements -->
            <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
              Wisata
            </h4>
            <div class="px-4 py-3 mb-8 rounded-lg shadow-md bg-slate-400 dark:bg-gray-800">
            <div class="w-24 p-2 text-xl text-center text-black border-2 bg-white/50 hover:bg-blue-600 rounded-xl hover:text-white">
                <a href="/formwisata" class="justify-center text-center">Create</a>
            </div>

                {{-- Table Data --}}
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                <thead class="bg-blue-600 border-b">
                                    <tr>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        id
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Transportasi
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Nama Wisata
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Gambar
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Deskripsi
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Lokasi
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Date
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                    </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="transition duration-300 ease-in-out bg-white border-b hover:bg-gray-100">
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">1000</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Bus</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">🌊 Pantai Dreamland</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">/img/Pantai Dreamland.png</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Pantai Dreamland berada di Bukit Ungasan Desa Pecatu, dan masih berada di satu jalur untuk menuju ke</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Bukit Ungasan Desa Pecatu, Bali</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">2022-12-17</td>
                                        <td><button class="text-slate-800 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border-y border-slate-200 font-medium px-4 py-2 inline-flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>                      
                </span>
                <span>View</span>
            </button></td>
                                        <td><button class="text-slate-800 mr-2 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border border-slate-200 rounded-r-lg font-medium px-4 py-2 inline-flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg>
                  </span>
                <span>Delete</span>
            </button></td>
                                    </tr>

                                    <tr class="transition duration-300 ease-in-out bg-white border-b hover:bg-gray-100">
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">1000</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Bus</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">🌊 Pantai Dreamland</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">/img/Pantai Dreamland.png</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Pantai Dreamland berada di Bukit Ungasan Desa Pecatu, dan masih berada di satu jalur untuk menuju ke</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Bukit Ungasan Desa Pecatu, Bali</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">2022-12-17</td>
                                        <td><button class="text-slate-800 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border-y border-slate-200 font-medium px-4 py-2 inline-flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>                      
                </span>
                <span>View</span>
            </button></td>
                                        <td><button class="text-slate-800 mr-2 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border border-slate-200 rounded-r-lg font-medium px-4 py-2 inline-flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg>
                  </span>
                <span>Delete</span>
            </button></td>
                                    </tr>

                                    <tr class="transition duration-300 ease-in-out bg-white border-b hover:bg-gray-100">
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">1000</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Bus</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">🌊 Pantai Dreamland</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">/img/Pantai Dreamland.png</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Pantai Dreamland berada di Bukit Ungasan Desa Pecatu, dan masih berada di satu jalur untuk menuju ke</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Bukit Ungasan Desa Pecatu, Bali</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">2022-12-17</td>
                                        <td><button class="text-slate-800 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border-y border-slate-200 font-medium px-4 py-2 inline-flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>                      
                </span>
                <span>View</span>
            </button></td>
                                        <td><button class="text-slate-800 mr-2 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border border-slate-200 rounded-r-lg font-medium px-4 py-2 inline-flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg>
                  </span>
                <span>Delete</span>
            </button></td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Table Data --}}
            </div>
            {{-- end data 1 --}}

            {{-- start data 2 --}}
            <!-- General elements -->
            <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
              Tiket
            </h4>
            <div class="px-4 py-3 mb-8 rounded-lg shadow-md bg-slate-400 dark:bg-gray-800">
            <div class="w-24 p-2 text-xl text-center text-black border-2 bg-white/50 hover:bg-blue-600 rounded-xl hover:text-white">
                <a href="/formwisata" class="justify-center text-center">Create</a>
            </div>

                {{-- Table Data --}}
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full">
                                <thead class="bg-blue-600 border-b">
                                    <tr>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        id
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Transportasi
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Nama Destinasi
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Tanggal Tiket
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Waktu Perjalanan
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Transit
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                        Makan
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                    </th>
                                    <th scope="col" class="px-6 py-4 text-sm font-medium text-left text-gray-900">
                                    </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="transition duration-300 ease-in-out bg-white border-b hover:bg-gray-100">
                                        <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">10000</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Pesawat</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Bali -> Jakarta</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">2023-01-15</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">01:45:00</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">0x</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">0x</td>
                                        <td><button class="text-slate-800 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border-y border-slate-200 font-medium px-4 py-2 inline-flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>                      
                </span>
                <span>View</span>
            </button></td>
                                        <td><button class="text-slate-800 mr-2 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border border-slate-200 rounded-r-lg font-medium px-4 py-2 inline-flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg>
                  </span>
                <span>Delete</span>
            </button></td>
                                    </tr>

                                    <tr class="transition duration-300 ease-in-out bg-white border-b hover:bg-gray-100">
                                    <td class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">10001</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Pesawat</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">Bali -> Medan</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">2023-01-15</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">01:55:00</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">0x</td>
                                        <td class="px-6 py-4 text-sm font-light text-gray-900 whitespace-nowrap">1x</td>
                                        <td><button class="text-slate-800 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border-y border-slate-200 font-medium px-4 py-2 inline-flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>                      
                </span>
                <span>View</span>
            </button></td>
                                        <td><button class="text-slate-800 mr-2 hover:text-blue-600 text-sm bg-white hover:bg-slate-100 border border-slate-200 rounded-r-lg font-medium px-4 py-2 inline-flex space-x-1 items-center">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg>
                  </span>
                <span>Delete</span>
            </button></td>
                </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Table Data --}}
            </div>
            {{-- end data 1 --}}

          </div>
        </main>

            <footer class="w-full p-4 text-right bg-white">
                Built by <a target="_blank" href="https://davidgrzyb.com" class="underline">David Grzyb</a>.
            </footer>
        </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</body>
</html>
