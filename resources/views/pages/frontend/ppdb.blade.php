@extends('layouts.front')

@section('title', ' Home')

@section('content')

    <!-- content -->
    <div class="content">
        <!-- profile -->
        <div class="bg-serv-bg-explore overflow-hidden">
            <div class="pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 mx-auto">
                <div class="text-center">
                    <h1 class="text-3xl font-semibold mb-1">PPDB Online</h1>
                    <p class="leading-8 text-serv-text mb-10">
                        Yuk! Buruan Gabung menjadi bpSmart Student, Caranya gampang!
                    </p>
                </div>

                <div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'online' }" id="tab_wrapper">

                    <div class="relative">
                        <section class="px-4 pt-6 pb-20 mx-auto w-auth lg:mx-12">
                            <div class="grid gap-5 md:grid-cols-12">
                                <main class="p-4 lg:col-span-12 md:col-span-12">

                                    <section>
                                        <div class="container">
                                            <div class="flex flex-wrap">
                                                <div class="w-full self-center px-4">
                                                    <h1 class="block font-semibold text-2xl mb-3">Langkah-langkah
                                                        Pendaftaran
                                                        Online
                                                        PPDB SMK Bhakti Praja Margasari
                                                    </h1>
                                                    <ul class="list-decimal">
                                                        <li>1. Calon peserta didik baru menyiapkan berkas persyaratan yang
                                                            diperlukan, sebagai berikut:</li>
                                                        <ul class="list-disc mb-3 mt-3">
                                                            <li>&nbsp;&nbsp; - Fotocopy SKHUN/Ijazah SMP/MTs (Jika sudah
                                                                punya)
                                                            </li>
                                                            <li>&nbsp;&nbsp; - Fotocopy Raport Semester Akhir</li>
                                                            <li>&nbsp;&nbsp; - Fotocopy Akte Kelahiran</li>
                                                            <li>&nbsp;&nbsp; - Fotocopy Kartu Keluarga</li>
                                                            <li>&nbsp;&nbsp; - Pas Foto 3x4 (3 lembar)</li>
                                                            <li>&nbsp;&nbsp; - Sertifikat Kejuaraan (Jika punya)</li>
                                                        </ul>
                                                        <li>2. Calon peserta didik baru melakukan pengajuan pendaftaran
                                                            mandiri
                                                            dengan mengisi formulir secara online.</li>
                                                        <li>3. Operator sekolah melakukan verifikasi pendaftaran secara
                                                            online.
                                                        </li>
                                                        <li>4. Calon peserta didik baru melihat hasil seleksi dan pengumuman
                                                            secara online di laman PPDB Online</li>
                                                        <li>5. Calon peserta didik baru mencetak bukti diterima.</li>
                                                        <li>6. Calon peserta didik baru mencetak bukti pendaftaran.</li>
                                                        <li>7. Calon peserta didik baru mencetak biodata diri.</li>
                                                        <li>8. Calon peserta didik baru melakukan daftar ulang di SMK Bhakti
                                                            Praja Margasari dengan membawa bukti pendaftaran, kartu
                                                            peserta, dan berkas pendaftaran yang dimasukkan dalam stopmap.
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <br><br><br>
                                    <!-- daftar sekarang -->
                                    <div class="content text-center">
                                        <h2 class="text-xl font-semibold"></h2>
                                        <div class="mt-4 mb-8 content-description">
                                            {{-- space --}}
                                        </div>

                                        <div class="text-center">
                                            <h1 class="text-3xl font-semibold mb-1">DAFTAR ONLINE SMK BHAKTI PRAJA
                                                MARGASARI
                                            </h1>
                                            <p class="leading-8 text-serv-text mb-10">
                                                Kini, Calon Peserta Didik SMK Bhakti Praja Margasari dapat mendaftar secara
                                                langsung/melalui tempat sekertariat PPDB!
                                            </p>

                                            <a href="{{ url('http://ppdb.smkbhaktiprajamargasari.sch.id/') }}"
                                                target="_blank"
                                                class="bg-serv-button text-white text-lg font-semibold py-4 px-6 my-2 rounded-lg">
                                                Daftar Sekarang
                                            </a>
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
