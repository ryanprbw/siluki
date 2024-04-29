<div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-gray-200 dark:bg-gray-800 pb-8">
    <table id="hasil" class="table-auto min-w-full divide-y divide-gray-200 border border-gray-200 mb-8 dark:border-gray-700">
        <thead class="bg-green-400 dark:bg-gray-700">
            <tr>
                <th class="px-6 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white"
                    rowspan="2">No.</th>
                <th class="px-6 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white" rowspan="2">
                    Dibuat oleh:</th>
                <th class="px-6 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white" rowspan="2">
                    Sasaran Kinerja</th>
                <th class="px-6 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white" rowspan="2">
                    Indikator</th>
                <th class="px-6 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white" rowspan="2">
                    Target</th>
                <th class="px-6 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white" rowspan="2">
                    Satuan</th>
                <th class="px-6 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white" colspan="3">Triwulan 1</th>
                <th class="px-6 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white" colspan="3">Triwulan 2</th>
                <th class="px-6 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white" colspan="3">Triwulan 3</th>
                <th class="px-6 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white" colspan="3">Triwulan 4</th>
            </tr>
            <tr>
                <th class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white">
                    Target</th>
                <th class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white">
                    Realisasi</th>
                <th class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white">
                    %</th>
                <th class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white">
                    Target</th>
                <th class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white">
                    Realisasi</th>
                <th class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white">
                    %</th>
                <th class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white">
                    Target</th>
                <th class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white">
                    Realisasi</th>
                <th class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white">
                    %</th>
                <th class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white">
                    Target</th>
                <th class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white">
                    Realisasi</th>
                <th class="px-2 py-3 text-xs font-bold text-gray-800 uppercase tracking-wider border border-gray-600 dark:text-white">
                    %</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-600 dark:bg-gray-900">
            @foreach ($laporans as $dash)
                <tr class="hover:bg-green-300 dark:hover:bg-gray-800">
                    <td class="px-6 py-4 text-center text-sm text-gray-800  dark:text-white border border-gray-600 dark:border-gray-700">
                        {{ $laporans->count() * ($laporans->currentPage() - 1) + $loop->iteration }}
                    </td>
                    <td class="px-6 py-4 text-center text-sm text-gray-800  dark:text-white border border-gray-600 dark:border-gray-700">
                        {{ $dash->user->name }}</td>
                    <td class="px-6 py-4 text-center text-sm text-gray-800  dark:text-white border border-gray-600 dark:border-gray-700">
                        {{ $dash->sasaran }}</td>
                    <td class="px-6 py-4 text-center text-sm text-gray-800  dark:text-white border border-gray-600 dark:border-gray-700">
                        {{ $dash->indikator }}</td>
                    <td class="px-6 py-4 text-center text-sm text-gray-800  dark:text-white border border-gray-600 dark:border-gray-700">
                        {{ $dash->target }}</td>
                    <td class="px-6 py-4 text-center text-sm text-gray-800  dark:text-white border border-gray-600 dark:border-gray-700">
                        {{ $dash->satuan }}</td>
                    <td class="px-2 py-4 text-center text-sm text-gray-800  dark:text-white border border-gray-600 dark:border-gray-700">
                        {{ $dash->target_t1 }}</td>
                    <td class="px-2 py-4 text-center text-sm text-gray-800  dark:text-white border border-gray-600 dark:border-gray-700">
                        {{ $dash->realisasi_t1 }}</td>
                    <td class="px-2 py-4 text-center text-sm text-gray-800  dark:text-white border border-gray-600 dark:border-gray-700">
                        {{ $dash->persentasi_t1 }}</td>
                    <td class="px-2 py-4 text-center text-sm text-gray-800  dark:text-white border border-gray-600 dark:border-gray-700">
                        {{ $dash->target_t2 }}</td>
                    <td class="px-2 py-4 text-center text-sm text-gray-800  dark:text-white border border-gray-600 dark:border-gray-700">
                        {{ $dash->realisasi_t2 }}</td>
                    <td class="px-2 py-4 text-center text-sm text-gray-800  dark:text-white border border-gray-600 dark:border-gray-700">
                        {{ $dash->persentasi_t2 }}</td>
                    <td class="px-2 py-4 text-center text-sm text-gray-800  dark:text-white border border-gray-600 dark:border-gray-700">
                        {{ $dash->target_t3 }}</td>
                    <td class="px-2 py-4 text-center text-sm text-gray-800  dark:text-white border border-gray-600 dark:border-gray-700">
                        {{ $dash->realisasi_t3 }}</td>
                    <td class="px-2 py-4 text-center text-sm text-gray-800  dark:text-white border border-gray-600 dark:border-gray-700">
                        {{ $dash->persentasi_t3 }}</td>
                    <td class="px-2 py-4 text-center text-sm text-gray-800  dark:text-white border border-gray-600 dark:border-gray-700">
                        {{ $dash->target_t4 }}</td>
                    <td class="px-2 py-4 text-center text-sm text-gray-800  dark:text-white border border-gray-600 dark:border-gray-700">
                        {{ $dash->realisasi_t4 }}</td>
                    <td class="px-2 py-4 text-center text-sm text-gray-800  dark:text-white border border-gray-600 dark:border-gray-700">
                        {{ $dash->persentasi_t4 }}</td>
                </tr>
                <!-- Tambahkan baris tambahan sesuai kebutuhan -->
            @endforeach
        </tbody>
    </table>
    {{ $laporans->links('pagination.index') }}
</div>
