@extends('layouts.front')

@section('title', ' Home')

@section('content')

    <!-- top -->
    <div class="hero-bg">
        <!-- hero -->
        <div class="hero">
            <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                <!-- Left Column -->
                <div
                    class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                    <h1 class="text-black-1 lg:leading-normal sm:text-4xl lg:text-5xl text-3xl mb-5 font-semibold lg:mt-20">
                        Mulai Kebiasaan Baru, <br class="lg:block hidden">
                        Tanpa <strong>Banyak Alasan</strong>
                    </h1>
                    <p class="text-lg leading-relaxed text-serv-text font-light tracking-wide mb-10 lg:mb-18 ">
                        #bpSmart
                    </p>
                </div>

                <!-- Right Column -->
                <div class="w-full lg:w-1/2 text-center lg:justify-start justify-center flex pr-0">
                    <img class="bottom-0 lg:block lg:right-24 md:right-16 sm:right-8 right-8 w-75"
                        src="{{ asset('/assets/hero-image.png') }}" alt="" />
                </div>
            </div>
        </div>

        <!-- Tentang Sekolah -->
        <div class="hero">
            <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                <!-- Left Column -->
                <div class="w-full lg:w-1/2 text-center lg:justify-start justify-center flex pr-0">
                    <img class="bottom-0 lg:block lg:right-24 md:right-16 sm:right-8 right-8 w-75"
                        src="{{ asset('/assets/headmaster.png') }}" alt="" />
                </div>

                <!-- Right Column -->
                <div
                    class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                    <h1 class="text-black-1 lg:leading-normal sm:text-4xl lg:text-5xl text-3xl mb-5 font-semibold lg:mt-20">
                        Kenali SMK Bhakti Praja Margasari
                    </h1>
                    <p class="text-lg leading-relaxed font-light tracking-wide mb-10 lg:mb-18 ">
                        SMK Bhakti Praja Margasari memiliki 4 Program Keahlian dengan peluang kerja tanpa batas. Program
                        Keahlian SMK Bhakti Praja Margasari meliputi: Multimedia, Akuntansi dan Keuangan Lembaga,
                        Otomatisasi dan Tata Kelola Perkantoran, dan Bisnis Daring dan Pemasaran.
                    </p>
                </div>
            </div>
        </div>

        <!-- Terus Maju -->
        <div class="hero">
            <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                <!-- Left Column -->
                <div
                    class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                    <h1 class="text-black-1 lg:leading-normal sm:text-4xl lg:text-5xl text-3xl mb-5 font-semibold lg:mt-20">
                        #TerusMaju
                    </h1>
                    <p class="text-lg leading-relaxed font-light tracking-wide mb-10 lg:mb-18 ">
                        Bersiaplah untuk <strong>#TerusMaju</strong> Bersama SMK Bhakti Praja Margasari. Pandemi Belum Usai,
                        Pendidikan Berkualitas Harus Tetap dicapai. Tidak ada lagi batasan mengejar passion, cita – cita
                        harus tetap digapai. Bersiaplah untuk <strong>#TerusMaju</strong>.
                    </p>
                </div>

                <!-- Right Column -->
                <div class="w-full lg:w-1/2 text-center lg:justify-start justify-center flex pr-0">
                    <img class="bottom-0 lg:block lg:right-24 md:right-16 sm:right-8 right-8 w-75"
                        src="{{ asset('/assets/Jump.png') }}" alt="" />
                </div>
            </div>
        </div>

        <!-- bpSmart -->
        <div class="hero">
            <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                <!-- Left Column -->
                <div class="w-full lg:w-1/2 text-center lg:justify-start justify-center flex pr-0">
                    <img class="bottom-0 lg:block lg:right-24 md:right-16 sm:right-8 right-8 w-75"
                        src="{{ asset('/assets/Online-Learning.png') }}" alt="" />
                </div>

                <!-- Right Column -->
                <div
                    class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                    <h1 class="text-black-1 lg:leading-normal sm:text-4xl lg:text-5xl text-3xl mb-5 font-semibold lg:mt-20">
                        #TerusMaju dengan Aplikasi bpSmart
                    </h1>
                    <p class="text-lg leading-relaxed font-light tracking-wide mb-10 lg:mb-18 ">
                        <strong>#TerusMaju</strong> dengan aplikasi bpSmart. bpSmart adalah sebuah Sistem Informasi SMK
                        Bhakti Praja Margasari, berbasis web dan aplikasi mobile yang dapat mengakomodir seluruh aktivitas
                        belajar mengajar. Mulai dari Absensi, Materi, Tugas, Ulangan Harian dan Nilai.
                    </p>
                </div>
            </div>

            <div class="lg:mb-20 mb-10 flex sm:space-x-4 space-x-1">
                <div class="flex-1 flex items-center justify-center py-3 px-6">
                    <img src="{{ asset('/assets/images/brand-logo/aha_id.png') }}" alt="" style="width: 200px">
                </div>
                <div class="flex-1 flex items-center justify-center py-3 px-6">
                    <img src="{{ asset('/assets/images/brand-logo/pos.jpg') }}" alt="" style="width: 200px">
                </div>
                <div class="flex-1 flex items-center justify-center py-3 px-6">
                    <img src="{{ asset('/assets/images/brand-logo/m2art.png') }}" alt="" style="width: 200px">
                </div>
            </div>
        </div>
    </div>

    <!-- content -->
    <div class="content">
        <!-- Program Keahlian -->
        <div class="bg-serv-services-bg overflow-hidden">
            <div class="pt-16 lg:pl-24 md:pl-16 sm:pl-8 pl-8 mx-auto">
                <div class="flex flex-col w-full">
                    <h2 class="sm:text-2xl text-xl tracking-wider font-semibold mb-2 text-medium-black">
                        Program Keahlian
                    </h2>
                </div>
            </div>

            <div class="flex overflow-x-scroll pb-10 hide-scroll-bar dragscroll -mx-3">
                <div class="flex flex-nowrap">
                    <div class="lg:mb-20 mb-10 flex sm:space-x-4 space-x-1">
                        <div class="flex-1 flex items-center justify-center py-3 px-6">
                            <!--Multimedia-->
                            <a href="#" class="inline-block px-3">
                                <div class="w-96 h-auto overflow-hidden md:p-5 p-4 bg-white rounded-2xl inline-block">
                                    <div class="flex items-center space-x-2 mb-6">
                                        <!--Author's profile photo-->
                                        <img class="w-14 h-14 object-cover object-center rounded-full mr-1"
                                            src="{{ asset('/assets/images/logo/mm.png') }}" alt="random user" />
                                        <div>
                                            <!--Author name-->
                                            <p class="text-gray-900 font-semibold text-lg">Multimedia</p>
                                            <p class="text-serv-text font-light text-md">
                                                MM
                                            </p>
                                        </div>
                                    </div>

                                    <!--Banner image-->
                                    <img class="rounded-2xl w-full" src="{{ asset('/assets/images/model/1.png') }}"
                                        alt="placeholder" />
                                </div>
                            </a>

                            <!--Akuntansi-->
                            <a href="#" class="inline-block px-3">
                                <div class="w-96 h-auto overflow-hidden md:p-5 p-4 bg-white rounded-2xl inline-block">
                                    <div class="flex items-center space-x-2 mb-6">
                                        <!--Author's profile photo-->
                                        <img class="w-14 h-14 object-cover object-center rounded-full mr-1"
                                            src="{{ asset('/assets/images/logo/akl.png') }}" alt="random user" />
                                        <div>
                                            <!--Author name-->
                                            <p class="text-gray-900 font-semibold text-lg">Akuntansi dan Keuangan Lembaga
                                            </p>
                                            <p class="text-serv-text font-light text-md">
                                                AKL
                                            </p>
                                        </div>
                                    </div>

                                    <!--Banner image-->
                                    <img class="rounded-2xl w-full" src="{{ asset('/assets/images/model/2.png') }}"
                                        alt="placeholder" />
                                </div>
                            </a>

                            <!--Perkantoran-->
                            <a href="#" class="inline-block px-3">
                                <div class="w-96 h-auto overflow-hidden md:p-5 p-4 bg-white rounded-2xl inline-block">
                                    <div class="flex items-center space-x-2 mb-6">
                                        <!--Author's profile photo-->
                                        <img class="w-14 h-14 object-cover object-center rounded-full mr-1"
                                            src="{{ asset('/assets/images/logo/otkp.png') }}" alt="random user" />
                                        <div>
                                            <!--Author name-->
                                            <p class="text-gray-900 font-semibold text-lg">Otomatisasi dan Tata Kelola
                                                Perkantoran</p>
                                            <p class="text-serv-text font-light text-md">
                                                OTKP
                                            </p>
                                        </div>
                                    </div>

                                    <!--Banner image-->
                                    <img class="rounded-2xl w-full" src="{{ asset('/assets/images/model/3.png') }}"
                                        alt="placeholder" />
                                </div>
                            </a>

                            <!--Pemasaran-->
                            <a href="#" class="inline-block px-3">
                                <div class="w-96 h-auto overflow-hidden md:p-5 p-4 bg-white rounded-2xl inline-block">
                                    <div class="flex items-center space-x-2 mb-6">
                                        <!--Author's profile photo-->
                                        <img class="w-14 h-14 object-cover object-center rounded-full mr-1"
                                            src="{{ asset('/assets/images/logo/bdpm.png') }}" alt="random user" />
                                        <div>
                                            <!--Author name-->
                                            <p class="text-gray-900 font-semibold text-lg">Bisnis Daring dan Pemasaran</p>
                                            <p class="text-serv-text font-light text-md">
                                                BDPM
                                            </p>
                                        </div>
                                    </div>

                                    <!--Banner image-->
                                    <img class="rounded-2xl w-full" src="{{ asset('/assets/images/model/4.png') }}"
                                        alt="placeholder" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
