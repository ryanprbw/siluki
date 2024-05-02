<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <div class="shrink-0 flex items-center">
            <a href="{{ route('dashboards.index') }}">
                <img class="mt-2 w-32 h-auto object-cover rounded-md" src="{{ asset('images/Siluki.png') }}"
                    alt="image">
            </a>
        </div>

        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">

            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboards') }}"
                            class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</nav>




<section class="bg-green-200 dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
        <div
            class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">
            
            <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">Dinas Kependudukan dan
                Catatan Sipil Kabupaten Tapin</h1>


                <div id="gallery" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        @foreach($carousels as $key => $carousel)
                            <div class="{{ $key == 0 ? 'block' : 'hidden' }} duration-700 ease-in-out" data-carousel-item="{{ $key == 0 ? 'active' : '' }}">
                                <img src="{{ asset('storage/carousels/'.$carousel->image) }}"
                                    class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                    alt="">
                            </div>
                        @endforeach
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                

           
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div
                class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                
                <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Data Pegawai ASN Terbaik /
                    Triwulan {{ $pegawaiASN->triwulan }}</h2>
                @if ($pegawaiASN->photo)
                    <img class="h-auto max-w-xs mx-auto transition-all duration-300 rounded-lg cursor-pointer filter hover:grayscale grayscale-0"
                        src="{{ asset('images/' . $pegawaiASN->photo) }}" alt="{{ $pegawaiASN->nama }}">
                @else
                    <div class="w-10 h-10 bg-gray-200 rounded-full mr-4"></div>
                @endif


                @if ($pegawaiASN)
                    <div class=" items-center mb-4">

                        <div>
                            <p class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2 text-center">
                                {{ $pegawaiASN->nama }}</p>
                            <p class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2 text-center">
                                {{ $pegawaiASN->nip }}</p>
                            <p class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2 text-center">Nilai:
                                {{ $pegawaiASN->nilai }}</p>
                            <p class="text-gray-900 dark:text-white text-3xl  mb-2 text-center">Penilaian Triwulan:
                                {{ $pegawaiASN->triwulan }}</p>
                        </div>
                    </div>
                @else
                    <p>Tidak ada data pegawai.</p>
                @endif
                
            </div>
            <div
                class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
               
                <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Data Pegawai non-ASN Terbaik /
                    Triwulan {{ $pegawaiNonASN->triwulan }}</h2>
                @if ($pegawaiNonASN->photo)
                    <img class="h-auto max-w-xs mx-auto transition-all duration-300 rounded-lg cursor-pointer filter hover:grayscale grayscale-0"
                        src="{{ asset('images/' . $pegawaiNonASN->photo) }}" alt="{{ $pegawaiNonASN->nama }}">
                @else
                    <div class="w-10 h-10 bg-gray-200 rounded-full mr-4"></div>
                @endif
                @if ($pegawaiNonASN)
                    <div class=" items-center mb-4">

                        <div>
                            <p class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2 text-center">
                                {{ $pegawaiNonASN->nama }}</p>
                            <p class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2 text-center">
                                non-ASN{{ $pegawaiNonASN->nip }}</p>
                            <p class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2 text-center">Nilai:
                                {{ $pegawaiNonASN->nilai }}</p>
                            <p class="text-gray-900 dark:text-white text-3xl  mb-2 text-center">Penilaian Triwulan:
                                {{ $pegawaiNonASN->triwulan }}</p>
                        </div>
                    </div>
                @else
                    <p>Tidak ada data pegawai.</p>
                @endif
                
            </div>
        </div>
    </div>
</section>



<footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://www.instagram.com/ryanprbw/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <img src="{{asset('images/Siluki.png')}}" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Si-LUKI</span>
            </a>
            
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://instagram.com/ryanprbw" class="hover:underline animate-pulse">19960702 202421 1 003™</a>. RyanPrbw.</span>
    </div>
</footer>







</html>

@include('layouts.javasc')
