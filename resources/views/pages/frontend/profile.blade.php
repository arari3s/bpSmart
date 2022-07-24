@extends('layouts.front')

@section('title', ' Home')

@section('content')

    <!-- content -->
        <div class="content">
            <!-- profile -->
            <div class="bg-serv-bg-explore overflow-hidden">
                <div class="pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 mx-auto">
                    <div class="text-center">
                        <h1 class="text-3xl font-semibold mb-1">Profile</h1>
                        <p class="leading-8 text-serv-text mb-10">
                            SMK Bhakti Praja Margasari
                        </p>
                    </div>
                    <div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'visimisi' }" id="tab_wrapper">
                        <nav class="my-8 text-center" aria-label="navigation">
                            <a class="inline-block px-8 py-2 my-2 mr-2 font-medium rounded-xl" :class="{ 'bg-serv-bg text-white': tab === 'visimisi','bg-serv-services-bg text-serv-bg' : tab !== 'visimisi' }" @click.prevent="tab = 'visimisi'; window.location.hash = 'visimisi'" href="#">Visi & Misi</a>

                            <a class="inline-block px-8 py-2 my-2 mr-2 font-medium rounded-xl" :class="{ 'bg-serv-bg text-white': tab === 'prestasi','bg-serv-services-bg text-serv-bg' : tab !== 'prestasi' }" @click.prevent="tab = 'prestasi'; window.location.hash = 'prestasi'" href="#">Prestasi</a>

                            <a class="inline-block px-8 py-2 my-2 mr-2 font-medium rounded-xl" :class="{ 'bg-serv-bg text-white': tab === 'fasilitas','bg-serv-services-bg text-serv-bg' : tab !== 'fasilitas' }" @click.prevent="tab = 'fasilitas'; window.location.hash = 'fasilitas'" href="#">Fasilitas</a>

                            <a class="inline-block px-8 py-2 my-2 mr-2 font-medium rounded-xl" :class="{ 'bg-serv-bg text-white': tab === 'ekstrakurikuler','bg-serv-services-bg text-serv-bg' : tab !== 'ekstrakurikuler' }" @click.prevent="tab = 'ekstrakurikuler'; window.location.hash = 'ekstrakurikuler'" href="#">Ekstrakurikuler</a>
                        </nav>

                        <div class="relative">
                            <section class="px-4 pt-6 pb-20 mx-auto w-auth lg:mx-12">
                                <div class="grid gap-5 md:grid-cols-12">
                                    <main class="p-4 lg:col-span-12 md:col-span-12">

                                        <!-- visi misi -->
                                        <div x-show.transition.duration.500ms="tab === 'visimisi'" class="leading-8 text-md">
                                            <div class="content">
                                                <h2 class="text-xl font-semibold">Visi</h2>
                                                <div class="mt-4 mb-8 content-description">
                                                    <p>
                                                        Terwujudnya SMK sebagai Pusat Pendidikan dan Latihan yang Menghasilkan Sumber Daya Manusia yang Mampu Bersaing di Era Global dengan Dilandasi IMTAQ dan IPTEK yang Handal dan Berwawasan Lingkungan.
                                                    </p>
                                                </div>

                                                <h2 class="text-xl font-semibold">Misi</h2>
                                                <div class="mt-4 mb-8 content-description">
                                                    <p>Meningkatkan Keimanan dan Ketaqwaan Kepada Tuhan Yang Maha Esa.</p>
                                                    <p>Menyelenggarakan Pendidikan yang Efektif, Efisien dan Berkualitas.</p>
                                                    <p>Meningkatkan Kualitas Lulusan yang Fleksibel terhadap Perubahan Teknologi.</p>
                                                    <p>Menghasilkan Tenaga Kerja yang Profesional untuk Memenuhi Tuntutan Dunia Usaha / Dunia Industri (DU/DI).</p>
                                                    <p>Menciptakan Lingkungan Sekolah yang Tertib, Bersih, Indah dan Nyaman.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- prestasi -->
                                        <div x-show.transition.duration.500ms="tab === 'prestasi'" class="leading-8 text-md">
                                            <div class="content">
                                                <h2 class="text-xl font-semibold">2019</h2>
                                                <div class="mt-4 mb-8 content-description">
                                                    <p>Juara II LKS Bisnis Daring dan Pemasaran Tingkat Kab. Tegal</p>
                                                </div>

                                                <h2 class="text-xl font-semibold">2018</h2>
                                                <div class="mt-4 mb-8 content-description">
                                                    <p>Juara II Olimpiade Akuntansi Se Karisidenan Pekalongan STIES PUTRA BANGSA TEGAL</p>
                                                    <p>Juara II LKS Multimedia (Desain Grafis) Tingkat Kab. Tegal</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- fasilitas -->
                                        <div x-show.transition.duration.500ms="tab === 'fasilitas'" class="leading-8 text-md">
                                            <div class="content">
                                                <h2 class="text-xl font-semibold">Fasilitas</h2>
                                                <div class="mt-4 mb-8 content-description">
                                                    <p>Hostpot Area per kelas | <strong>Gedung sekolah berlantai 2 milik sendiri</strong> | Ruang kelas representatif dengan LCD dan AC | <strong>Lab. Komputer ber AC berbasis jaringan LAN dan internet On-line</strong> | Laboratorium Multimeida | <strong>Studio Mini</strong> | Mushola | <strong>Perpustakaan</strong> | Ruang bisnis center | <strong>Sarana kegiatan olahraga</strong> | BKK (Bursa Kerja Khusus) | <strong>Bank Mini</strong> | Mini market | <strong>Ruang praktek siswa</strong> | Kelas industri</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- ekstrakurikuler -->
                                        <div x-show.transition.duration.500ms="tab === 'ekstrakurikuler'" class="leading-8 text-md">
                                            <div class="content">
                                                <h2 class="text-xl font-semibold">Ekstrakurikuler</h2>
                                                <div class="mt-4 mb-8 content-description">
                                                    <p>Pamuka | <strong>Komputer</strong> | PMR | <strong>Bula Voli</strong> | Sepak Bola | <strong>Tata Boga</strong> | Seni Musik | <strong>Seni Tari</strong> | BTQ / Rohis | <strong>Photographi</strong> | E-Sport</p>
                                                </div>
                                            </div>
                                        </div>

                                    </main>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

        </div>

@endsection
