<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Siswa &raquo; {{ $studentPayment->studentclassroom->student->name }} &raquo; Pembayaran &raquo; Edit
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

                <form action="{{ route('dashboard.student-payment.update', $studentPayment->id) }}" class="w-full"
                    method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 w-full">
                            <div class="w-full px-3 py-3 hidden">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Student
                                    Classroom</label>
                                <input
                                    value="{{ old('student_classrooms_id') ?? $studentPayment->student_classrooms_id }}"
                                    name="student_classrooms_id"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="text">
                            </div>
                            <div class="w-full px-3 py-3">
                                <label
                                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">SPP</label>
                                <select class="select2" data-width="100%" name="spp_id">
                                    @if ($studentPayment->spp_id != null)
                                        <option value="{{ $studentPayment->spp_id }}" selected>
                                            {{ $studentPayment->spp->name }} -
                                            {{ number_format($studentPayment->spp->price) }}
                                        </option>
                                    @else
                                        <option value disabled selected>-- tidak ada tagihan --</option>
                                    @endif
                                    <option value disabled>-- pilih pembayaran --</option>
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
                                    @if ($studentPayment->sarana_id != null)
                                        <option value="{{ $studentPayment->sarana_id }}" selected>
                                            {{ $studentPayment->sarana->name }} -
                                            {{ number_format($studentPayment->sarana->price) }}
                                        </option>
                                    @else
                                        <option value disabled selected>-- tidak ada tagihan --</option>
                                    @endif
                                    <option value disabled>-- pilih pembayaran --</option>
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
                                    @if ($studentPayment->pts1_id != null)
                                        <option value="{{ $studentPayment->pts1_id }}" selected>
                                            {{ $studentPayment->pts1->name }} -
                                            {{ number_format($studentPayment->pts1->price) }}
                                        </option>
                                    @else
                                        <option value disabled selected>-- tidak ada tagihan --</option>
                                    @endif
                                    <option value disabled>-- pilih pembayaran --</option>
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
                                    @if ($studentPayment->pts2_id != null)
                                        <option value="{{ $studentPayment->pts2_id }}" selected>
                                            {{ $studentPayment->pts2->name }} -
                                            {{ number_format($studentPayment->pts2->price) }}
                                        </option>
                                    @else
                                        <option value disabled selected>-- tidak ada tagihan --</option>
                                    @endif
                                    <option value disabled>-- pilih pembayaran --</option>
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
                                    @if ($studentPayment->pas_id != null)
                                        <option value="{{ $studentPayment->pas_id }}" selected>
                                            {{ $studentPayment->pas->name }} -
                                            {{ number_format($studentPayment->pas->price) }}
                                        </option>
                                    @else
                                        <option value disabled selected>-- tidak ada tagihan --</option>
                                    @endif
                                    <option value disabled>-- pilih pembayaran --</option>
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
                                    @if ($studentPayment->pat_id != null)
                                        <option value="{{ $studentPayment->pat_id }}" selected>
                                            {{ $studentPayment->pat->name }} -
                                            {{ number_format($studentPayment->pat->price) }}
                                        </option>
                                    @else
                                        <option value disabled selected>-- tidak ada tagihan --</option>
                                    @endif
                                    <option value disabled>-- pilih pembayaran --</option>
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
                                    @if ($studentPayment->infaq_id != null)
                                        <option value="{{ $studentPayment->infaq_id }}" selected>
                                            {{ $studentPayment->infaq->name }} -
                                            {{ number_format($studentPayment->infaq->price) }}
                                        </option>
                                    @else
                                        <option value disabled selected>-- tidak ada tagihan --</option>
                                    @endif
                                    <option value disabled>-- pilih pembayaran --</option>
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
                                    @if ($studentPayment->pkl_id != null)
                                        <option value="{{ $studentPayment->pkl_id }}" selected>
                                            {{ $studentPayment->pkl->name }} -
                                            {{ number_format($studentPayment->pkl->price) }}
                                        </option>
                                    @else
                                        <option value disabled selected>-- tidak ada tagihan --</option>
                                    @endif
                                    <option value disabled>-- pilih pembayaran --</option>
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
                                    @if ($studentPayment->ki_id != null)
                                        <option value="{{ $studentPayment->ki_id }}" selected>
                                            {{ $studentPayment->ki->name }} -
                                            {{ number_format($studentPayment->pat->price) }}
                                        </option>
                                    @else
                                        <option value disabled selected>-- tidak ada tagihan --</option>
                                    @endif
                                    <option value disabled>-- pilih pembayaran --</option>
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
                                    @if ($studentPayment->du_id != null)
                                        <option value="{{ $studentPayment->du_id }}" selected>
                                            {{ $studentPayment->du->name }} -
                                            {{ number_format($studentPayment->du->price) }}
                                        </option>
                                    @else
                                        <option value disabled selected>-- tidak ada tagihan --</option>
                                    @endif
                                    <option value disabled>-- pilih pembayaran --</option>
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
                                    @if ($studentPayment->tabungan_id != null)
                                        <option value="{{ $studentPayment->tabungan_id }}" selected>
                                            {{ $studentPayment->tabungan->name }} -
                                            {{ number_format($studentPayment->tabungan->price) }}
                                        </option>
                                    @else
                                        <option value disabled selected>-- tidak ada tagihan --</option>
                                    @endif
                                    <option value disabled>-- pilih pembayaran --</option>
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
                                class="bg-teal-500 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded shadow-lg">Perbaharui</button>

                            <a href="{{ url()->previous() }}"
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
