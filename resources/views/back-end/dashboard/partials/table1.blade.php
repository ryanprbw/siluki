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
