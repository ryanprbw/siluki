<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan PDF</title>
    <style>
        table {
            width: 10%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            font-size: 11px;
        }

        .table2 {
            width: 10%;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            font-size: 9px;
            
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }

        thead {
            background-color: #4bff75;
        }

        .center {
            text-align: center; 
            font-family: Arial, sans-serif;
            
        }
        .pagebreak {
            text-align: center; 
            font-family: Arial, sans-serif;
            page-break-before: always;
        }
    </style>
</head>

<body>
    <h1 class="center" style="text-center center">Laporan Rekap Sasaran Perangkat Daerah Tahun {{ $tahun }} Kabupaten Tapin</h1>

    <table class="overflow-x-auto">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600 "
                    rowspan="2">No.</th>
                {{-- <th class="px-4 py-2 text-sm font-medium text-gray-500 uppercase tracking-wider border border-gray-600"rowspan="2">Dibuat oleh:</th> --}}
                <th
                    class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600"rowspan="2">
                    Sasaran Kinerja</th>
                <th
                    class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600"rowspan="2">
                    Indikator</th>
                <th
                    class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600"rowspan="2">
                    Target</th>
                <th
                    class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600"rowspan="2">
                    Satuan</th>
                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600"
                    colspan="3">Triwulan 1</th>
                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600"
                    colspan="3">Triwulan 2</th>
                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600"
                    colspan="3">Triwulan 3</th>
                <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600"
                    colspan="3">Triwulan 4</th>
            </tr>
            <tr>

                <th class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                    Target</th>
                <th class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                    Realisasi</th>
                <th class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                    Satuan</th>
                <th class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                    Target</th>
                <th class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                    Realisasi</th>
                <th class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                    Satuan</th>
                <th class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                    Target</th>
                <th class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                    Realisasi</th>
                <th class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                    Satuan</th>
                <th class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                    Target</th>
                <th class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                    Realisasi</th>
                <th class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                    Satuan</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-600">
            @foreach ($laporans as $dash)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-center border border-gray-600">{{ $loop->iteration }}
                    </td>
                    {{-- <td class="px-6 py-4 whitespace-nowrap text-center border border-gray-600">{{ $dash->user->name }}</td> --}}
                    <td class="px-6 py-4 whitespace-nowrap text-center border uppercase font-sans border-gray-600">
                        {{ $dash->sasaran }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center border border-gray-600">{{ $dash->indikator }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-center border border-gray-600">{{ $dash->target }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-center border border-gray-600">{{ $dash->satuan }}</td>
                    <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">{{ $dash->target_t1 }}
                    </td>
                    <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">{{ $dash->realisasi_t1 }}
                    </td>
                    <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">
                        {{ $dash->persentasi_t1 }}</td>
                    <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">{{ $dash->target_t2 }}
                    </td>
                    <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">{{ $dash->realisasi_t2 }}
                    </td>
                    <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">
                        {{ $dash->persentasi_t2 }}</td>
                    <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">{{ $dash->target_t3 }}
                    </td>
                    <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">
                        {{ $dash->realisasi_t3 }}</td>
                    <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">
                        {{ $dash->persentasi_t3 }}</td>
                    <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">{{ $dash->target_t4 }}
                    </td>
                    <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">
                        {{ $dash->realisasi_t4 }}</td>
                    <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">
                        {{ $dash->persentasi_t4 }}</td>
                </tr>
                <!-- Tambahkan baris tambahan sesuai kebutuhan -->
            @endforeach
        </tbody>
    </table>

    <div class="overflow-x-auto">
        <h1 class="center pagebreak " style="text-center center">Laporan Rekap Sasaran Perangkat Daerah Tahun {{ $tahun }} Kabupaten Tapin</h1>
    <table class="overflow-x-auto table2">
        <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600"
                        rowspan="2">No.</th>
                    {{-- <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600"rowspan="2">Dibuat oleh:</th> --}}
                    <th
                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600"rowspan="2">
                        Sasaran Kinerja</th>
                    <th
                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600"rowspan="2">
                        Indikator</th>
                    <th
                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600"rowspan="2">
                        Target</th>
                    <th
                        class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600"rowspan="2">
                        Satuan</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600"
                        colspan="3">Triwulan 1</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600"
                        colspan="3">Triwulan 2</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600"
                        colspan="3">Triwulan 3</th>
                    <th class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600"
                        colspan="3">Triwulan 4</th>
                </tr>
                <tr>

                    <th
                        class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                        Realisasi</th>
                    <th
                        class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                        Faktor Pendorong</th>
                    <th
                        class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                        Faktor Penghambat</th>
                    <th
                        class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                        Realisasi</th>
                    <th
                        class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                        Faktor Pendorong</th>
                    <th
                        class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                        Faktor Penghambat</th>
                    <th
                        class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                        Realisasi</th>
                    <th
                        class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                        Faktor Pendorong</th>
                    <th
                        class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                        Faktor Penghambat</th>
                    <th
                        class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                        Realisasi</th>
                    <th
                        class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                        Faktor Pendorong</th>
                    <th
                        class="px-2 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider border border-gray-600">
                        Faktor Penghambat</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-600">
                @forelse ($laporans as $dash)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-center border border-gray-600">
                            {{ $loop->iteration }}</td>
                        {{-- <td class="px-6 py-4 whitespace-nowrap text-center border border-gray-600">{{ $dash->user->name }}</td> --}}
                        <td class="px-6 py-4 whitespace-nowrap text-center border border-gray-600">{{ $dash->sasaran }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center border border-gray-600">
                            {{ $dash->indikator }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center border border-gray-600">{{ $dash->target }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center border border-gray-600">{{ $dash->satuan }}
                        </td>
                        <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">
                            {{ $dash->realisasi_ctt_t1 }}</td>
                        <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">
                            {{ $dash->faktor_pendorong_t1 }}</td>
                        <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">
                            {{ $dash->faktor_penghambat_t1 }}</td>

                        <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">
                            {{ $dash->realisasi_ctt_t2 }}</td>
                        <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">
                            {{ $dash->faktor_pendorong_t2 }}</td>
                        <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">
                            {{ $dash->faktor_penghambat_t2 }}</td>
                        <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">
                            {{ $dash->realisasi_ctt_t3 }}</td>
                        <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">
                            {{ $dash->faktor_pendorong_t3 }}</td>
                        <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">
                            {{ $dash->faktor_penghambat_t3 }}</td>
                        <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">
                            {{ $dash->realisasi_ctt_t4 }}</td>
                        <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">
                            {{ $dash->faktor_pendorong_t4 }}</td>
                        <td class="px-2 py-4 whitespace-nowrap text-center border border-gray-600">
                            {{ $dash->faktor_penghambat_t4 }}</td>
                    </tr>
                    <!-- Tambahkan baris tambahan sesuai kebutuhan -->
                @empty
                    <div class="bg-gray-100 border border-gray-300 rounded-lg p-8">
                        <p class="text-gray-600 text-lg font-semibold">Data masih Kosong</p>
                    </div>
                @endforelse
            </tbody>
        </table>

    </div>
</body>

</html>
