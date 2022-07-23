<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Siswa &raquo; {{ $studentClassroom->student->name }} &raquo; Pembayaran &raquo; Create
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

                <form action="{{ route('dashboard.student-classroom.student-payment.store', $studentClassroom->id) }}"
                    class="w-full" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 w-full">
                            <div class="w-full px-3 py-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">SPP</label>
                                <select class="select2" data-width="100%" name="spp_id">
                                    <option value="0" disabled selected>-- pilih pembayaran --</option>
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ number_format($item->price) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 py-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">SARANA</label>
                                <select class="select2" data-width="100%" name="sarana_id">
                                    <option value="0" disabled selected>-- pilih pembayaran --</option>
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ number_format($item->price) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 py-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">PTS
                                    GASAL</label>
                                <select class="select2" data-width="100%" name="pts1_id">
                                    <option value disabled selected>-- pilih pembayaran --</option>
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ number_format($item->price) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 py-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">PTS
                                    GENAP</label>
                                <select class="select2" data-width="100%" name="pts2_id">
                                    <option value disabled selected>-- pilih pembayaran --</option>
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ number_format($item->price) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 py-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">PAS</label>
                                <select class="select2" data-width="100%" name="pas_id">
                                    <option value disabled selected>-- pilih pembayaran --</option>
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ number_format($item->price) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 py-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">PAT</label>
                                <select class="select2" data-width="100%" name="pat_id">
                                    <option value disabled selected>-- pilih pembayaran --</option>
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ number_format($item->price) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 py-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">INFAQ</label>
                                <select class="select2" data-width="100%" name="infaq_id">
                                    <option value disabled selected>-- pilih pembayaran --</option>
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ number_format($item->price) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 py-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">PKL</label>
                                <select class="select2" data-width="100%" name="pkl_id">
                                    <option value disabled selected>-- pilih pembayaran --</option>
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ number_format($item->price) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 py-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">KUNJUNGAN
                                    INDUSTRI</label>
                                <select class="select2" data-width="100%" name="ki_id">
                                    <option value disabled selected>-- pilih pembayaran --</option>
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ number_format($item->price) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 py-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">DAFTAR
                                    ULANG</label>
                                <select class="select2" data-width="100%" name="du_id">
                                    <option value disabled selected>-- pilih pembayaran --</option>
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ number_format($item->price) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="w-full px-3 py-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">TABUNGAN
                                    UJIAN</label>
                                <select class="select2" data-width="100%" name="tabungan_id">
                                    <option value disabled selected>-- pilih pembayaran --</option>
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }} -
                                            {{ number_format($item->price) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <button type="submit"
                                class="bg-teal-500 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded shadow-lg">Simpan</button>

                            <a href="{{ route('dashboard.student-classroom.student-payment.index', $studentClassroom->id) }}"
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
