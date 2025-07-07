<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Laporan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <form action="{{ route('laporans.update', $laporan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg space-y-6">

                    <!-- Sasaran Input -->
                    <div class="form-group">
                        <label for="sasaran" class="text-sm font-medium text-gray-700 dark:text-white">Sasaran</label>
                        <input id="sasaran" type="text" name="sasaran"
                            value="{{ old('sasaran', $laporan->sasaran) }}"
                            class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                            placeholder="Masukkan Sasaran">
                        @error('sasaran')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Indikator Input -->
                    <div class="form-group">
                        <label for="indikator"
                            class="text-sm font-medium text-gray-700 dark:text-white">Indikator</label>
                        <input id="indikator" type="text" name="indikator"
                            value="{{ old('indikator', $laporan->indikator) }}"
                            class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                            placeholder="Masukkan Indikator">
                        @error('indikator')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Target Input -->
                    <div class="form-group">
                        <label for="target" class="text-sm font-medium text-gray-700 dark:text-white">Target</label>
                        <input id="target" type="text" name="target"
                            value="{{ old('target', $laporan->target) }}"
                            class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                            placeholder="Masukkan Target">
                        @error('target')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Satuan Input -->
                    <div class="form-group">
                        <label for="satuan" class="text-sm font-medium text-gray-700 dark:text-white">Satuan</label>
                        <input id="satuan" type="text" name="satuan"
                            value="{{ old('satuan', $laporan->satuan) }}"
                            class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                            placeholder="Masukkan Satuan">
                        @error('satuan')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Triwulan Section -->
                    <section class="space-y-8">
                        <!-- Triwulan I -->
                        <div class="space-y-6">
                            <h3 class="text-2xl font-bold text-center text-blue-600">Triwulan I</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                                <div class="form-group">
                                    <label for="target_t1"
                                        class="text-sm font-medium text-gray-700 dark:text-white">Target Triwulan
                                        I</label>
                                    <input id="target_t1" type="text" name="target_t1"
                                        value="{{ old('target_t1', $laporan->target_t1) }}"
                                        class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                        placeholder="Masukkan Target Triwulan I">
                                </div>
                                <div class="form-group">
                                    <label for="realisasi_t1"
                                        class="text-sm font-medium text-gray-700 dark:text-white">Realisasi Triwulan
                                        I</label>
                                    <input id="realisasi_t1" type="text" name="realisasi_t1"
                                        value="{{ old('realisasi_t1', $laporan->realisasi_t1) }}"
                                        class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                        placeholder="Masukkan Realisasi Triwulan I">
                                </div>
                                <div class="form-group">
                                    <label for="persentasi_t1"
                                        class="text-sm font-medium text-gray-700 dark:text-white">Satuan</label>
                                    <input id="persentasi_t1" type="text" name="persentasi_t1"
                                        value="{{ old('persentasi_t1', $laporan->persentasi_t1) }}"
                                        class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                        placeholder="Masukkan Persentase">
                                </div>
                            </div>
                        </div>

                        <!-- Catatan Triwulan I -->
                        <div class="form-group">
                            <label for="realisasi_ctt_t1"
                                class="text-sm font-medium text-gray-700 dark:text-white">Catatan Triwulan I</label>
                            <textarea id="realisasi_ctt_t1" name="realisasi_ctt_t1" rows="4"
                                class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                placeholder="Masukkan Catatan Triwulan I">{{ old('realisasi_ctt_t1', $laporan->realisasi_ctt_t1) }}</textarea>
                        </div>

                        <!-- Faktor Pendorong and Penghambat Triwulan I -->
                        <div class="grid gap-6 md:grid-cols-2">
                            <div class="form-group">
                                <label for="faktor_pendorong_t1"
                                    class="text-sm font-medium text-gray-700 dark:text-white">Faktor Pendorong Triwulan
                                    I</label>
                                <textarea id="faktor_pendorong_t1" name="faktor_pendorong_t1" rows="4"
                                    class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                    placeholder="Masukkan Faktor Pendorong Triwulan I">{{ old('faktor_pendorong_t1', $laporan->faktor_pendorong_t1) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="faktor_penghambat_t1"
                                    class="text-sm font-medium text-gray-700 dark:text-white">Faktor Penghambat Triwulan
                                    I</label>
                                <textarea id="faktor_penghambat_t1" name="faktor_penghambat_t1" rows="4"
                                    class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                    placeholder="Masukkan Faktor Penghambat Triwulan I">{{ old('faktor_penghambat_t1', $laporan->faktor_penghambat_t1) }}</textarea>
                            </div>
                        </div>
                    </section>

                    {{-- TW 2 --}}
                    <section class="space-y-8">
                        <!-- Triwulan I -->
                        <div class="space-y-6">
                            <h3 class="text-2xl font-bold text-center text-blue-600">Triwulan II</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                                <div class="form-group">
                                    <label for="target_t2"
                                        class="text-sm font-medium text-gray-700 dark:text-white">Target Triwulan
                                        I</label>
                                    <input id="target_t2" type="text" name="target_t2"
                                        value="{{ old('target_t2', $laporan->target_t2) }}"
                                        class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                        placeholder="Masukkan Target Triwulan II">
                                </div>
                                <div class="form-group">
                                    <label for="realisasi_t2"
                                        class="text-sm font-medium text-gray-700 dark:text-white">Realisasi Triwulan
                                        II</label>
                                    <input id="realisasi_t2" type="text" name="realisasi_t2"
                                        value="{{ old('realisasi_t2', $laporan->realisasi_t2) }}"
                                        class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                        placeholder="Masukkan Realisasi Triwulan II">
                                </div>
                                <div class="form-group">
                                    <label for="persentasi_t2"
                                        class="text-sm font-medium text-gray-700 dark:text-white">Satuan</label>
                                    <input id="persentasi_t2" type="text" name="persentasi_t2"
                                        value="{{ old('persentasi_t2', $laporan->persentasi_t2) }}"
                                        class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                        placeholder="Masukkan Persentase">
                                </div>
                            </div>
                        </div>

                        <!-- Catatan Triwulan II -->
                        <div class="form-group">
                            <label for="realisasi_ctt_t1"
                                class="text-sm font-medium text-gray-700 dark:text-white">Catatan Triwulan II</label>
                            <textarea id="realisasi_ctt_t1" name="realisasi_ctt_t1" rows="4"
                                class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                placeholder="Masukkan Catatan Triwulan II">{{ old('realisasi_ctt_t1', $laporan->realisasi_ctt_t1) }}</textarea>
                        </div>

                        <!-- Faktor Pendorong and Penghambat Triwulan II -->
                        <div class="grid gap-6 md:grid-cols-2">
                            <div class="form-group">
                                <label for="faktor_pendorong_t2"
                                    class="text-sm font-medium text-gray-700 dark:text-white">Faktor Pendorong Triwulan
                                    I</label>
                                <textarea id="faktor_pendorong_t2" name="faktor_pendorong_t2" rows="4"
                                    class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                    placeholder="Masukkan Faktor Pendorong Triwulan II">{{ old('faktor_pendorong_t2', $laporan->faktor_pendorong_t2) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="faktor_penghambat_t2"
                                    class="text-sm font-medium text-gray-700 dark:text-white">Faktor Penghambat
                                    Triwulan
                                    I</label>
                                <textarea id="faktor_penghambat_t2" name="faktor_penghambat_t2" rows="4"
                                    class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                    placeholder="Masukkan Faktor Penghambat Triwulan II">{{ old('faktor_penghambat_t2', $laporan->faktor_penghambat_t2) }}</textarea>
                            </div>
                        </div>
                    </section>

                    <section class="space-y-8">
                        <!-- Triwulan III -->
                        <div class="space-y-6">
                            <h3 class="text-2xl font-bold text-center text-blue-600">Triwulan III</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                                <div class="form-group">
                                    <label for="target_t3"
                                        class="text-sm font-medium text-gray-700 dark:text-white">Target Triwulan
                                        III</label>
                                    <input id="target_t3" type="text" name="target_t3"
                                        value="{{ old('target_t3', $laporan->target_t3) }}"
                                        class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                        placeholder="Masukkan Target Triwulan III">
                                </div>
                                <div class="form-group">
                                    <label for="realisasi_t3"
                                        class="text-sm font-medium text-gray-700 dark:text-white">Realisasi Triwulan
                                        III</label>
                                    <input id="realisasi_t3" type="text" name="realisasi_t3"
                                        value="{{ old('realisasi_t3', $laporan->realisasi_t3) }}"
                                        class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                        placeholder="Masukkan Realisasi Triwulan III">
                                </div>
                                <div class="form-group">
                                    <label for="persentasi_t3"
                                        class="text-sm font-medium text-gray-700 dark:text-white">Persentase</label>
                                    <input id="persentasi_t3" type="text" name="persentasi_t3"
                                        value="{{ old('persentasi_t3', $laporan->persentasi_t3) }}"
                                        class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                        placeholder="Masukkan Persentase">
                                </div>
                            </div>
                        </div>

                        <!-- Catatan Triwulan III -->
                        <div class="form-group">
                            <label for="realisasi_ctt_t3"
                                class="text-sm font-medium text-gray-700 dark:text-white">Catatan Triwulan III</label>
                            <textarea id="realisasi_ctt_t3" name="realisasi_ctt_t3" rows="4"
                                class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                placeholder="Masukkan Catatan Triwulan III">{{ old('realisasi_ctt_t3', $laporan->realisasi_ctt_t3) }}</textarea>
                        </div>

                        <!-- Faktor Pendorong and Penghambat Triwulan III -->
                        <div class="grid gap-6 md:grid-cols-2">
                            <div class="form-group">
                                <label for="faktor_pendorong_t3"
                                    class="text-sm font-medium text-gray-700 dark:text-white">Faktor Pendorong Triwulan
                                    III</label>
                                <textarea id="faktor_pendorong_t3" name="faktor_pendorong_t3" rows="4"
                                    class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                    placeholder="Masukkan Faktor Pendorong Triwulan III">{{ old('faktor_pendorong_t3', $laporan->faktor_pendorong_t3) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="faktor_penghambat_t3"
                                    class="text-sm font-medium text-gray-700 dark:text-white">Faktor Penghambat
                                    Triwulan III</label>
                                <textarea id="faktor_penghambat_t3" name="faktor_penghambat_t3" rows="4"
                                    class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                    placeholder="Masukkan Faktor Penghambat Triwulan III">{{ old('faktor_penghambat_t3', $laporan->faktor_penghambat_t3) }}</textarea>
                            </div>
                        </div>
                    </section>
                    <section class="space-y-8">
                        <!-- Triwulan IV -->
                        <div class="space-y-6">
                            <h3 class="text-2xl font-bold text-center text-blue-600">Triwulan IV</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                                <div class="form-group">
                                    <label for="target_t4"
                                        class="text-sm font-medium text-gray-700 dark:text-white">Target Triwulan
                                        IV</label>
                                    <input id="target_t4" type="text" name="target_t4"
                                        value="{{ old('target_t4', $laporan->target_t4) }}"
                                        class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                        placeholder="Masukkan Target Triwulan IV">
                                </div>
                                <div class="form-group">
                                    <label for="realisasi_t4"
                                        class="text-sm font-medium text-gray-700 dark:text-white">Realisasi Triwulan
                                        IV</label>
                                    <input id="realisasi_t4" type="text" name="realisasi_t4"
                                        value="{{ old('realisasi_t4', $laporan->realisasi_t4) }}"
                                        class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                        placeholder="Masukkan Realisasi Triwulan IV">
                                </div>
                                <div class="form-group">
                                    <label for="persentasi_t4"
                                        class="text-sm font-medium text-gray-700 dark:text-white">Persentase</label>
                                    <input id="persentasi_t4" type="text" name="persentasi_t4"
                                        value="{{ old('persentasi_t4', $laporan->persentasi_t4) }}"
                                        class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                        placeholder="Masukkan Persentase">
                                </div>
                            </div>
                        </div>

                        <!-- Catatan Triwulan IV -->
                        <div class="form-group">
                            <label for="realisasi_ctt_t4"
                                class="text-sm font-medium text-gray-700 dark:text-white">Catatan Triwulan IV</label>
                            <textarea id="realisasi_ctt_t4" name="realisasi_ctt_t4" rows="4"
                                class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                placeholder="Masukkan Catatan Triwulan IV">{{ old('realisasi_ctt_t4', $laporan->realisasi_ctt_t4) }}</textarea>
                        </div>

                        <!-- Faktor Pendorong and Penghambat Triwulan IV -->
                        <div class="grid gap-6 md:grid-cols-2">
                            <div class="form-group">
                                <label for="faktor_pendorong_t4"
                                    class="text-sm font-medium text-gray-700 dark:text-white">Faktor Pendorong Triwulan
                                    IV</label>
                                <textarea id="faktor_pendorong_t4" name="faktor_pendorong_t4" rows="4"
                                    class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                    placeholder="Masukkan Faktor Pendorong Triwulan IV">{{ old('faktor_pendorong_t4', $laporan->faktor_pendorong_t4) }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="faktor_penghambat_t4"
                                    class="text-sm font-medium text-gray-700 dark:text-white">Faktor Penghambat
                                    Triwulan IV</label>
                                <textarea id="faktor_penghambat_t4" name="faktor_penghambat_t4" rows="4"
                                    class="w-full p-3 mt-2 text-sm border rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                                    placeholder="Masukkan Faktor Penghambat Triwulan IV">{{ old('faktor_penghambat_t4', $laporan->faktor_penghambat_t4) }}</textarea>
                            </div>
                        </div>
                    </section>

                    <!-- Repeat for Triwulan II, III, IV similarly -->

                    <!-- Triwulan II, III, IV (Add similar blocks for Triwulan II, III, and IV) -->

                    <!-- Action Buttons -->
                    <div class="mt-8 space-x-4 flex justify-center">
                        <a href="{{ url()->previous() }}"
                            class="btn btn-md bg-gray-500 text-white px-6 py-3 rounded-lg hover:bg-gray-600 focus:ring-2">Kembali</a>
                        <button type="reset"
                            class="btn btn-md bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 focus:ring-2">Reset</button>
                        <button type="submit"
                            class="btn btn-md bg-green-500 text-white px-6 py-3 rounded-lg hover:bg-green-600 focus:ring-2">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
