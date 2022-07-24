@extends('layouts.front')

@section('title', ' Home')

@section('content')

    <!-- content -->
    <div class="content">
        <!-- profile -->
        <div class="bg-serv-bg-explore overflow-hidden">
            <div class="pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 mx-auto">
                <div class="text-center">
                    <h1 class="text-3xl font-semibold mb-1">Berita Terbaru</h1>
                    <p class="leading-8 text-serv-text mb-10">
                        SMK Bhakti Praja Margasari
                    </p>
                </div>

                {{-- <div class="grid grid-cols lg:grid-cols-3 md:grid-cols-2 gap-4">
                    <a href="details.php" class="block">
                        <div class="w-auto h-auto overflow-hidden md:p-5 p-4 bg-white rounded-2xl inline-block">

                            <!--Banner image-->
                            <img class="rounded-2xl w-full"
                                src="{{ url('http://smkbhaktiprajamargasari.sch.id/file/blog/646fc066d9845314449a5e844b040b91.png') }}" alt="placeholder" style="width: 750" />

                            <!--Title-->
                            <h1 class="font-semibold text-gray-900 text-lg mt-1 leading-normal py-4">
                                SOAL PTS GENAP KELAS XII OTKP HUMAS DAN KEPROTOKOLAN
                            </h1>
                            <!--Description-->
                            <div class="max-w-full">
                                Isi berita
                            </div>
                        </div>
                    </a>
                </div> --}}

                <p class="leading-8 text-serv-text mb-10 text-center">
                    Belum ada berita
                </p>

            </div>
        </div>
    </div>

@endsection
