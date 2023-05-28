<x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <div class="p-8">

        <livewire:user.profile.update-profile />
    </div>
    <section class="max-w-8xl p-4 md:px-8 md:pr-10 mx-auto h-auto">


        <div class="p-5 bg-gray-200/50 dark:bg-black  md:py-8 rounded-3xl">
            <div id="chart">

            </div>
        </div>

    </section>

</x-app-layout>

<script>
    var options = {
        series: [{
            name: 'Participants',
            data: [4, 3, 10, 9, 29, 19, 22, 9, 12, 7, 19, 5, 13, 9, 17, 2, 7, 5]
        }],
        chart: {
            height: 450,
            type: 'line',
        },
        forecastDataPoints: {
            count: 9
        },
        stroke: {
            width: 9,
            curve: 'smooth'
        },
        xaxis: {
            type: 'datetime',
            categories: ['1/11/2000', '2/11/2000', '3/11/2000', '4/11/2000', '5/11/2000', '6/11/2000', '7/11/2000',
                '8/11/2000', '9/11/2000', '10/11/2000', '11/11/2000', '12/11/2000', '1/11/2001', '2/11/2001',
                '3/11/2001', '4/11/2001', '5/11/2001', '6/11/2001'
            ],
            tickAmount: 14,
            labels: {
                formatter: function(value, timestamp, opts) {
                    return opts.dateFormatter(new Date(timestamp), 'dd MMM yyyy')
                }
            }
        },
        title: {
            text: 'Up Next',
            align: 'left',
            style: {
                fontSize: "16px",
                color: '#666'
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'dark',
                gradientToColors: ['#FDD835'],
                shadeIntensity: 1,
                type: 'horizontal',
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 100, 100, 100]
            },
        },
        yaxis: {
            min: -10,
            max: 40
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>
