<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            SPP &raquo; Tambah Pembayaran
        </h2>
    </x-slot>

    <x-slot name="script">
        {{-- select2 --}}
        <script script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.select2').select2();
            });
        </script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div>
                {{-- Error Handling --}}
                @if ($errors->any())
                    <div class="mb-5" role="alert">
                        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                            There's something wrong!
                        </div>
                        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            <p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </p>
                        </div>
                    </div>
                @endif

                <form action="{{ route('dashboard.sppincome.store') }}" class="w-full" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    {{-- start hidden --}}
                    <div class="flex-wrap -mx-3 mb-6 hidden">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Petugas
                                <span class="text-red-500">*</span></label>
                            <input value="{{ Auth::user()->name }}" name="officer"
                                class="appearance-none block w-full lg:w-1/2 bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                type="text" placeholder="Nama petugas">
                        </div>
                    </div>
                    {{-- end hidden --}}
                    <div class="flex flex-wrap -mx-3">
                        <div class="w-full px-3 py-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nama <span
                                    class="text-red-500">*</span></label>
                            <select class="select2" data-width="50%" name="name" required>
                                <option value disabled selected>-- pilih nama siswa --</option>
                                @foreach ($studentPayment as $item)
                                    @if ($item->spp_id == '' || $item->spp_id == 0)
                                        tidak ada tagina
                                    @else
                                        <option
                                            value="{{ $item->studentclassroom->student->name }}
                                            -
                                            {{ $item->studentclassroom->classroom->name }}">
                                            {{ $item->studentclassroom->student->name }}
                                            -
                                            {{ $item->studentclassroom->classroom->name }} -
                                            {{ number_format($item->spp->price) }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-3">
                        <div class="w-full px-3 py-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Bulan
                                <span class="text-red-500">*</span></label>
                            <select class="select2" data-width="50%" name="mount" required>
                                <option value disabled selected>-- pilih bulan pembayaran --</option>
                                <option value="JULI">JULI</option>
                                <option value="AGUSTUS">AGUSTUS</option>
                                <option value="SEPTEMBER">SEPTEMBER</option>
                                <option value="OKTOBER">OKTOBER</option>
                                <option value="NOVEMBER">NOVEMBER</option>
                                <option value="DESEMBER">DESEMBER</option>
                                <option value="JANUARI">JANUARI</option>
                                <option value="FEBRUARI">FEBRUARI</option>
                                <option value="MARET">MARET</option>
                                <option value="APRIL">APRIL</option>
                                <option value="MEI">MEI</option>
                                <option value="JUNI">JUNI</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Besarnya
                                <span class="text-red-500">*</span></label>
                            <input value="{{ old('price') }}" name="price"
                                class="appearance-none block w-full lg:w-1/2 bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                type="number" placeholder="Besarnya pembayaran">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Catatan
                                <span class="text-red-500">*</span></label>
                            <input value="{{ old('noted') }}" name="noted"
                                class="appearance-none block w-full lg:w-1/2 bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                type="text" placeholder="Tambahkan catatan pembayaran">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-12">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Status
                                <span class="text-red-500">*</span></label>
                            <select name="status"
                                class="appearance-none block w-full lg:w-1/4 bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option value="0" selected>TITIP</option>
                                <option value="1">LUNAS</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <button type="submit"
                                class="bg-teal-500 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded shadow-lg">Simpan</button>

                            <a href="{{ route('dashboard.sppincome.index') }}"
                                class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 ml-3 rounded shadow-lg">
                                Batal
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
