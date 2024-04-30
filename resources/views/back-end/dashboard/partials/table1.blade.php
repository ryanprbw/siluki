<div class="relative overflow-x-auto m-8 bg-gray-300 rounded-md">
    <a href="{{ route('cetak.pdf') }}" target="_blank"
        class="bg-blue-500 m-8 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M14 5v3H5v11h14V8h-5"></path>
            <path d="M17 3h4v4"></path>
            <path d="M3 17v4h4"></path>
        </svg>
        <span>Cetak PDF</span>
    </a>

    <div class="relative inline-flex">
        <select id="tahunDropdown" class="block appearance-none bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
            <option>Pilih Tahun</option>
            @foreach($tahun as $t)
                <option value="{{ $t }}" {{ $selectedYear == $t ? 'selected' : '' }}>{{ $t }}</option>
            @endforeach
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M9.293 11.293a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L10 13.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 010-1.414zM7 7a1 1 0 011-1h4a1 1 0 110 2H8a1 1 0 01-1-1z" clip-rule="evenodd" />
            </svg>
        </div>
    </div>
    
   
   

    

    
    <!-- Dropdown menu -->

    
    
<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-sm text-gray-700 uppercase  dark:bg-gray-700 dark:text-gray-400 ">
        <tr class=" bg-blue-400 border-b dark:bg-gray-800 dark:border-gray-700 ">
            <th class="px-6 py-4 font-medium text-center text-gray-900  dark:text-white border border-gray-600"
                rowspan="2">No.</th>
            <th
                class="px-6 py-4 font-medium text-center text-gray-900  dark:text-white border border-gray-600"rowspan="2">
                Dibuat oleh:</th>
            <th
                class="px-6 py-4 font-medium text-center text-gray-900  dark:text-white border border-gray-600"rowspan="2">
                Sasaran Kinerja</th>
            <th
                class="px-6 py-4 font-medium text-center text-gray-900  dark:text-white border border-gray-600"rowspan="2" colspan="4">
                Indikator</th>
            <th
                class="px-6 py-4 font-medium text-center text-gray-900  dark:text-white border border-gray-600"rowspan="2">
                Target</th>
            <th
                class="px-6 py-4 font-medium text-center text-gray-900  dark:text-white border border-gray-600"rowspan="2">
                Satuan</th>
            <th class="px-6 py-4 font-medium text-gray-900  text-center dark:text-white border border-gray-600"
                colspan="3">Triwulan 1</th>
            <th class="px-6 py-4 font-medium text-gray-900  text-center dark:text-white border border-gray-600"
                colspan="3">Triwulan 2</th>
            <th class="px-6 py-4 font-medium text-gray-900  text-center dark:text-white border border-gray-600"
                colspan="3">Triwulan 3</th>
            <th class="px-6 py-4 font-medium text-gray-900  text-center dark:text-white border border-gray-600"
                colspan="3">Triwulan 4</th>
        </tr>
        <tr class="bg-green-400 dark:bg-gray-800 ">

            <th class="px-6 py-4 font-medium text-gray-900  dark:text-white">Target</th>
            <th
                class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600">
                Realisasi</th>
            <th
                class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600">
                %</th>
            <th
                class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600">
                Target</th>
            <th
                class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600">
                Realisasi</th>
            <th
                class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600">
                %</th>
            <th
                class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600">
                Target</th>
            <th
                class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600">
                Realisasi</th>
            <th
                class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600">
                %</th>
            <th
                class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600">
                Target</th>
            <th
                class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600">
                Realisasi</th>
            <th
                class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600">
                %</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-600 ">
        @foreach ($dashboards as $dash)
            @php
                $iterationNumber = $dashboards->count() * ($dashboards->currentPage() - 1) + $loop->iteration;
            @endphp
            <tr class="{{ $iterationNumber % 2 == 0 ? 'bg-blue-300' : 'bg-white' }} dark:bg-gray-800 hover:bg-green-200">
                <td
                    class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600 text-center">
                    {{ $iterationNumber }}</td>
                <td
                    class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600 text-center">
                    {{ $dash->user->name }}</td>
                <td
                    class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600 text-center">
                    {{ $dash->sasaran }}</td>
                <td colspan="4"
                    class="px-6 py-4 font-medium  text-gray-900 whitespace-nowrap  dark:text-white border border-gray-600 text-center">
                    {{ $dash->indikator }}</td>
                <td
                    class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600 text-center">
                    {{ $dash->target }}</td>
                <td
                    class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600 text-center">
                    {{ $dash->satuan }}</td>
                <td
                    class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600 text-center">
                    {{ $dash->target_t1 }}</td>
                <td
                    class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600 text-center">
                    {{ $dash->realisasi_t1 }}</td>
                <td
                    class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600 text-center">
                    {{ $dash->persentasi_t1 }}</td>
                <td
                    class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600 text-center">
                    {{ $dash->target_t2 }}</td>
                <td
                    class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600 text-center">
                    {{ $dash->realisasi_t2 }}</td>
                <td
                    class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600 text-center">
                    {{ $dash->persentasi_t2 }}</td>
                <td
                    class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600 text-center">
                    {{ $dash->target_t3 }}</td>
                <td
                    class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600 text-center">
                    {{ $dash->realisasi_t3 }}</td>
                <td
                    class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600 text-center">
                    {{ $dash->persentasi_t3 }}</td>
                <td
                    class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600 text-center">
                    {{ $dash->target_t4 }}</td>
                <td
                    class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600 text-center">
                    {{ $dash->realisasi_t4 }}</td>
                <td
                    class="px-6 py-4 font-medium text-gray-900  dark:text-white border border-gray-600 text-center">
                    {{ $dash->persentasi_t4 }}</td>
            </tr>
            <!-- Tambahkan baris tambahan sesuai kebutuhan -->
        @endforeach
    </tbody>
    
</table>
{{ $dashboards->links('pagination.index') }}
</div>

<script>
    document.getElementById('tahunDropdown').addEventListener('change', function() {
        var tahun = this.value;
        window.location.href = '{{ route("dashboards.index") }}?tahun=' + tahun;
    });
</script>
