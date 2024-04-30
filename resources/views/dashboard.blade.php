<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>




    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-100  dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div
                    class="p-6 hover:animate-pulse mb-4 text-xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-4xl dark:text-white text-center uppercase">
                    {{ __('Capaian Kinerja Disdukcapil Kabupaten Tapin Tahun') }} {{ now()->year }}

                </div>
            </div>

            {{-- diagram --}}

            <div class="max-w-full w-full bg-blue-300 rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                <div id="column-chart">
                </div>

            </div>

        </div>

        @include('back-end.dashboard.partials.table1')




    </div>



    </div>
</x-app-layout>

<script>
    const options = {
        colors: ["#1A56DB", "#FDBA8C"],
        series: [{
                name: "Target",
                color: "#1A56DB",
                data: [],
            },
            {
                name: "Realisasi",
                color: "#008528",
                data: [],
            },
        ],
        chart: {
            type: "bar",
            height: "320px",
            fontFamily: "Inter, sans-serif",
            toolbar: {
                show: false,
            },
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "50%",
                borderRadiusApplication: "end",
                borderRadius: 8,
            },
        },
        tooltip: {
            shared: true,
            intersect: false,
            style: {
                fontFamily: "Inter, sans-serif",
            },
        },
        states: {
            hover: {
                filter: {
                    type: "darken",
                    value: 1,
                },
            },
        },
        stroke: {
            show: true,
            width: 10,
            colors: ["transparent"],
        },
        grid: {
            show: true,
            strokeDashArray: 4,
            padding: {
                left: 2,
                right: 2,
                top: -14
            },
            color: '#fffff' // Ubah warna grid sesuai kebutuhan Anda
        },
        dataLabels: {
            enabled: true,

        },
        legend: {
            show: false,
        },
        xaxis: {
            floating: false,
            labels: {
                show: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                    cssClass: 'text-xs font-normal fill-gray-800 dark:fill-gray-400'
                }
            },
            axisBorder: {
                show: true,
            },
            axisTicks: {
                show: true,
            },
        },
        yaxis: {
            show: true,
        },
        fill: {
            opacity: 1,
        },
    }

    if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
        // Buat grafik menggunakan ApexCharts
        const chart = new ApexCharts(document.getElementById("column-chart"), options);

        // Inisialisasi data
        const targetData = [];
        const realisasiData = [];

        // Loop untuk mengumpulkan data dari variabel PHP
        @foreach ($kinerjaUtamas as $ku)
            @foreach ($ku->indikatorKinerjas as $indikator)
                targetData.push({
                    x: "{{ $indikator->indikator_kinerja }}",
                    y: {{ $indikator->target }}
                });
                realisasiData.push({
                    x: "{{ $indikator->indikator_kinerja }}",
                    y: {{ $indikator->realisasi }}
                });
            @endforeach

            @empty($ku->indikatorKinerjas)
                <
                p class = "text-gray-600 dark:text-gray-400" > Data Perjanjian Kinerja tidak tersedia. < /p>
            @endempty
        @endforeach

        // Mengatur data di dalam options
        options.series[0].data = targetData;
        options.series[1].data = realisasiData;

        // Render grafik
        chart.render();
    }
</script>

{{-- <script>
    const options = {
        // Konfigurasi grafik
    };

    // Periksa apakah elemen HTML yang diperlukan ada dan ApexCharts tersedia
    if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
        // Buat grafik menggunakan ApexCharts
        const chart = new ApexCharts(document.getElementById("column-chart"), options);

        // Inisialisasi data
        const targetData = [];
        const realisasiData = [];

        // Loop untuk mengumpulkan data dari variabel PHP
        @foreach ($kinerjaUtamas as $ku)
            @foreach ($ku->indikatorKinerjas as $indikator)
            targetData.push({ x: "{{ $indikator->target }}", y: {{ $indikator->indikator_kinerja }} });
            realisasiData.push({ x: "{{ $indikator->realisasi }}", y: {{ $indikator->indikator_kinerja }} });
          
            @endforeach
        @endforeach

        // Mengatur data di dalam options
        options.series[0].data = targetData;
        options.series[1].data = realisasiData;

        // Render grafik
        chart.render();
    }
</script> --}}
