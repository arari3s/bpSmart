<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            User &raquo; {{ $user->name }} &raquo; Edit
        </h2>
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

                <form action="{{ route('dashboard.user.update', $user->id) }}" class="w-full" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Roles
                                <span class="text-red-500">*</span></label>
                            <select name="roles"
                                class="appearance-none block w-full lg:w-1/2 bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option selected value="{{ $user->roles }}">{{ $user->roles }}</option>
                                <option disabled>--- Pilih Roles ---</option>
                                <option value="BENDAHARA_SPP">BENDAHARA SPP</option>
                                <option value="BENDAHARA_DU">BENDAHARA DU</option>
                                <option value="BENDAHARA_KI">BENDAHARA KI</option>
                                <option value="BENDAHARA_SARANA">BENDAHARA SARANA</option>
                                <option value="BENDAHARA_TABUNGAN">BENDAHARA TABUNGAN</option>
                            </select>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <button type="submit"
                                class="bg-teal-500 hover:bg-teal-800 text-white font-bold py-2 px-4 rounded shadow-lg">Perbaharui</button>

                            <a href="{{ route('dashboard.user.index') }}"
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
