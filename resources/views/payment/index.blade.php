<x-app-layout>
    <div class="pl-4 flex">
        <!--SideBar-->
        <div class="w-1/6 border-r dc-header-broder-color pt-8">
            @include('layouts.sidebar')
        </div>
        <!--End SideBar-->
        <div class="dashboard-bg section-padding w-full">

            <!--Payment Charts-->
            <div class="flex gap-x-7">
                <div class="bg-white w-2/3 pt-6 pb-2 pr-6 pl-2 border border-gray-100">
                    <div class="flex items-center justify-between ml-4">
                        <h3 class="text-lg font-bold flex items-center gap-x-2">Total Trends <span><img src="{{asset('assets/img/Iconly/Light/info-circle.svg')}}" alt=""></span></h3>
                        <div class="flex items-center min-w-max bg-white border dc-header-broder-color">
                            <span class="pl-2 pr-1 relative z-10">
                                <img src="{{ asset('assets/img/Iconly/Light/calendar.svg') }}" alt="">
                            </span>
                            <select
                                class="border text-gray-600 py-1 -ml-3 border-white focus:ring-0 focus:outline-none focus:border-white"
                                name="" id="">
                                <option value="June">June</option>
                                <option value="Dec">Dec</option>
                            </select>
                        </div>
                    </div>
                    <div id="chart"></div>
                    <script>
                        const formatter = new Intl.NumberFormat('en-US', {
                            style: 'currency',
                            currency: 'USD',
                        });
                        var options = {
                            series: [{
                                name: 'card',
                                data: [140000, 180000, 200000, 160000, 168000, 170500, 178050],
                                color: "#5a26ff",
                            },
                                {
                                    name: 'cash',
                                    data: [170000, 157000, 157007, 190000, 148800, 190500, 197050],
                                    color: "#ECE7FE"
                                }
                            ],

                            fill: {
                                opacity: 0.01,
                                type: 'solid',
                            },

                            chart: {
                                type: 'area',
                                height: 322,
                                toolbar: {show: false},
                            },
                            dataLabels: {
                                enabled: false
                            },
                            stroke: {
                                curve: 'smooth'
                            },
                            yaxis: {
                                labels: {
                                    style: {
                                        colors: '#B7B5C3'
                                    },
                                    formatter: function (value) {
                                        var val = Math.abs(value)

                                        if (val >= 10 ** 3 && val < 10 ** 6) {
                                            val = (val / 1000).toFixed(0) + 'K'
                                        } else if (val >= 10 ** 6) {
                                            val = (val / 1000000).toFixed(0) + 'M'
                                        }
                                        return val
                                    }
                                },
                                tickAmount: 3,
                            },
                            xaxis: {
                                type: 'datetime',
                                categories: ["2023-01-01", "2023-01-5", "2023-01-10", "2023-01-15", "2023-01-20", "2023-01-25", "2023-01-30"],
                                tickAmount: 6,
                                labels: {
                                    style: {
                                        colors: '#B7B5C3'
                                    }
                                }
                            },
                            legend:{
                                show: false
                            },
                            tooltip: {
                                followCursor:true,
                                custom: function ({series, seriesIndex, dataPointIndex, w}) {
                                    console.log(w.globals.initialSeries);
                                    var data = w.globals.initialSeries[seriesIndex].data[dataPointIndex];
                                    var date = new Date(w.globals.labels[dataPointIndex])

                                    return '<div class="py-2 px-4 bg-white shadow-lg">' +
                                        '<p class="text-[8px] text-gray-400">This month</p>' +
                                        '<h3 class="font-size-22 text-gray-900 font-bold">' + formatter.format(data) + '</h3>' +
                                        '<div class="text-sm text-gray-400 flex justify-between justify-center">' + date.toLocaleString('default', {month: 'long'}) +'<p class="flex items-center gap-x-1"><span style="background-color:'+ w.globals.initialSeries[seriesIndex].color +' " class="w-2 h-2 inline-block rounded-full mt-px"></span><span>'+ w.globals.initialSeries[seriesIndex].name +'</span></p>' +'</div>' +
                                        '</div>';
                                }
                            }
                        };
                        var chart = new ApexCharts(document.querySelector("#chart"), options);
                        chart.render();
                    </script>
                </div>
                <div class="w-1/3 bg-white border border-gray-100 p-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-bold">Profit Sharing</h3>
                        <div class="flex items-center min-w-max bg-white border dc-header-broder-color">
                            <span class="pl-2 pr-1 relative z-10">
                                <img src="{{ asset('assets/img/Iconly/Light/calendar.svg') }}" alt="">
                            </span>
                            <select
                                class="border text-gray-600 py-1 -ml-3 border-white focus:ring-0 focus:outline-none focus:border-white"
                                name="" id="">
                                <option value="June">June</option>
                                <option value="Dec">Dec</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-between h-[150px]">
                        <div class="w-7/12 self-center mt-2">
                            <p class="text-sm text-gray-300">Bkash, Debit & Credit</p>
                            <h3 class="text-[32px] font-bold py-1.5">$1,256</h3>
                            <p class="text-sm text-gray-400 mb-0 pb-0"><span class="text-[#5329FF]">+ 1,0%</span>
                                from
                                last month
                            </p>
                        </div>
                        <div class="w-5/12" id="card"></div>
                    </div>
                    <div class="flex justify-between h-[150px] mt-4">
                        <div class="w-7/12 self-center mt-2">
                            <p class="text-sm text-gray-300">Cash On</p>
                            <h3 class="text-[32px] font-bold py-1.5">$3467</h3>
                            <p class="text-sm text-gray-400"><span class="text-[#5329FF]">+ 10%</span> from last
                                month
                            </p>
                        </div>
                        <div class="w-5/12" id="cash"></div>
                    </div>
                </div>
            </div>
            <script>
                var card = {
                    series: [{
                        name: 'card',
                        data: [{
                            x: '2023/01/10',
                            y: 100
                        }, {
                            x: '2023/01/01',
                            y: 180
                        }, {
                            x: '2023/01/01',
                            y: 430
                        },
                            {
                                x: '2023/01/01',
                                y: 260
                            }
                        ]
                    }],
                    chart: {
                        type: 'bar',
                        toolbar: {show: false},
                        height: 165,
                    },
                    plotOptions: {
                        bar: {
                            borderRadiusApplication: "end",
                            borderRadius: 4,
                            borderRadiusWhenStacked: 'last',
                            columnWidth: '70%',
                            barHeight: '70%',
                        }
                    },
                    fill: {
                        colors: [function ({value, seriesIndex, w}) {
                            if (value >= 400) {
                                return '#5329FF'
                            } else {
                                return '#EEEAFF'
                            }
                        }]
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    grid: {
                        show: false,
                        padding: {
                            top: 0,
                            bottom: 0,
                        },
                    },
                    xaxis: {
                        type: 'category',
                        axisBorder: {
                            show: false
                        },
                        labels: {
                            formatter: function (value) {
                                return '';
                            }
                        },
                        axisTicks: {
                            show: false
                        }
                    },
                    yaxis: {
                        axisBorder: {
                            show: false
                        },
                        axisTicks: {
                            show: false,
                        },
                        labels: {
                            show: false,
                        },

                    },
                };
                var cash = {
                    series: [{
                        name: 'cash',
                        data: [{
                            x: '2023/01/10',
                            y: 100
                        }, {
                            x: '2023/01/01',
                            y: 180
                        }, {
                            x: '2023/01/01',
                            y: 430
                        },
                            {
                                x: '2023/01/01',
                                y: 260
                            }
                        ]
                    }],
                    chart: {
                        height: 165,
                        type: 'bar',
                        toolbar: {show: false},
                    },
                    plotOptions: {
                        bar: {
                            borderRadiusApplication: "end",
                            borderRadius: 4,
                            borderRadiusWhenStacked: 'last',
                            columnWidth: '70%',
                        }
                    },
                    fill: {
                        colors: [function ({value, seriesIndex, w}) {
                            if (value >= 400) {
                                return '#5329FF'
                            } else {
                                return '#EEEAFF'
                            }
                        }]
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    grid: {
                        show: false,
                    },
                    xaxis: {
                        type: 'category',
                        axisBorder: {
                            show: false
                        },
                        labels: {
                            formatter: function (value) {
                                return '';
                            }
                        },
                        axisTicks: {
                            show: false
                        }
                    },
                    yaxis: {
                        axisBorder: {
                            show: false
                        },
                        axisTicks: {
                            show: false,
                        },
                        labels: {
                            show: false,
                        },

                    },
                };

                var chart1 = new ApexCharts(document.querySelector("#card"), card);
                var chart2 = new ApexCharts(document.querySelector("#cash"), cash);
                chart1.render();
                chart2.render();
            </script>
            <!--End Payment Charts-->
            <div class="flex items-center justify-between mt-6">
                <div class="min-w-max">
                    <h4 class="text-gray-900 font-size-22 font-bold">Payment History</h4>
                    <p class="text-gray-600">June - <span>109</span> Payments Found</p>
                </div>
                <div class="min-w-max">
                    <div class="flex items-center gap-2">
                        <span class="text-gray-400">Sort By:- </span>
                        <div class="flex items-center min-w-max bg-white">
                            <span class="pl-2 pr-1 relative z-10">
                                 <img src="{{ asset('assets/img/Iconly/Light/paper.svg') }}" alt="">
                            </span>
                            <select
                                class="border text-gray-600 py-1 -ml-3 border-white focus:ring-0 focus:outline-none focus:border-white"
                                name="" id="">
                                <option>All Orders</option>
                                <option value="June">Dec</option>
                                <option value="Dec">Asc</option>
                            </select>
                        </div>
                        <div class="flex items-center min-w-max bg-white">
                            <span class="pl-2 pr-1 relative z-10">
                                <img src="{{ asset('assets/img/Iconly/Light/calendar.svg') }}" alt="">
                            </span>
                            <select
                                class="border text-gray-600 py-1 -ml-3 border-white focus:ring-0 focus:outline-none focus:border-white"
                                name="" id="">
                                <option value="June">June</option>
                                <option value="Dec">Dec</option>
                            </select>
                        </div>
                        <a href="{{route('payment.create')}}" class="bg-blue-600 py-1 px-2 text-white flex gap-2 items-center">Add New
                            <span><img src="{{ asset('assets/img/Iconly/Light/plus.svg') }}"
                                       alt=""></span></a>
                    </div>
                </div>
            </div>

            <!--Table Content-->

            <div class="relative overflow-x-auto pb-10">
                <table class="w-full font-medium text-left border-separate border-spacing-y-3">
                    <thead class="text-white bg-blue-600">
                    <tr>
                        <th scope="col" class="px-4 py-3 font-medium">
                            Booking Id
                        </th>
                        <th scope="col" class="px-4 py-3 font-medium">
                            Payment Id
                        </th>
                        <th scope="col" class="px-4 py-3 font-medium">
                            Name
                        </th>
                        <th scope="col" class="px-4 py-3 font-medium">
                            Date
                        </th>
                        <th scope="col" class="px-4 py-3 font-medium">
                            Type
                        </th>
                        <th scope="col" class="px-4 py-3 font-medium">
                            Amount
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white">
                        <td scope="row" class="p-4 text-gray-600">
                            126802736
                        </td>
                        <td class="p-4 text-gray-600">
                            #126802736
                        </td>
                        <td class="p-4 text-gray-600">
                            Ratul Ahmed
                        </td>
                        <td class="p-4 text-gray-600">
                            12-11-2023
                        </td>
                        <td class="p-4 text-gray-600">
                            Bkash
                        </td>
                        <td class="p-4 text-gray-600">
                            <div class="flex items-center justify-between">
                                <div
                                    class="inline-block py-1 px-4 items-center gap-2 border dc-green-border-color dc-green-color">
                                    $ 567
                                </div>
                                <div class="relative" x-data="{ open: false }">
                                    <div x-show="open" @click="open = false" class="fixed z-40 inset-0 overflow-y-auto"
                                    ></div>
                                    <span @click="open = true" class="cursor-pointer"><img
                                            src="{{asset('assets/img/Iconly/Light/dots.svg')}}" alt=""></span>
                                    <div
                                        class="absolute -left-28 z-50 top-5 bg-white border border-gray-100 px-6 py-3 shadow"
                                        x-show="open">
                                        <a href="#"
                                           class="flex items-center text-green-500 gap-1 mb-2 text-sm hover:text-green-300">
                                            @include('components.icon.edit')
                                            Edit
                                        </a>
                                        <a href="#"
                                           class="flex items-center text-red-500 gap-1 text-sm hover:text-red-300">
                                            @include('components.icon.delete')
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <td scope="row" class="p-4 text-gray-600">
                            126802736
                        </td>
                        <td class="p-4 text-gray-600">
                            #0839272356
                        </td>
                        <td class="p-4 text-gray-600">
                            Sojol Ahmed
                        </td>
                        <td class="p-4 text-gray-600">
                            12-11-2023
                        </td>
                        <td class="p-4 text-gray-600">
                            Credit
                        </td>
                        <td class="p-4 text-gray-600">
                            <div class="flex items-center justify-between">
                                <div
                                    class="inline-block py-1 px-4 items-center gap-2 border dc-green-border-color dc-green-color">
                                    $ 890
                                </div>
                                <div class="relative" x-data="{ open: false }">
                                    <div x-show="open" @click="open = false" class="fixed z-40 inset-0 overflow-y-auto"
                                    ></div>
                                    <span @click="open = true" class="cursor-pointer"><img
                                            src="{{asset('assets/img/Iconly/Light/dots.svg')}}" alt=""></span>
                                    <div
                                        class="absolute -left-28 z-50 top-5 bg-white border border-gray-100 px-6 py-3 shadow"
                                        x-show="open">
                                        <a href="#"
                                           class="flex items-center text-green-500 gap-1 mb-2 text-sm hover:text-green-300">
                                            @include('components.icon.edit')
                                            Edit
                                        </a>
                                        <a href="#"
                                           class="flex items-center text-red-500 gap-1 text-sm hover:text-red-300">
                                            @include('components.icon.delete')
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <td scope="row" class="p-4 text-gray-600">
                            126802736
                        </td>
                        <td class="p-4 text-gray-600">
                            #4374736474
                        </td>
                        <td class="p-4 text-gray-600">
                            Towhozib Ahmed Tomal
                        </td>
                        <td class="p-4 text-gray-600">
                            12-11-2023
                        </td>
                        <td class="p-4 text-gray-600">
                            Cash On
                        </td>
                        <td class="p-4 text-gray-600">
                            <div class="flex items-center justify-between">
                                <div
                                    class="inline-block py-1 px-4 items-center gap-2 border dc-green-border-color dc-green-color">
                                    $ 64
                                </div>
                                <div class="relative" x-data="{ open: false }">
                                    <div x-show="open" @click="open = false" class="fixed z-40 inset-0 overflow-y-auto"
                                    ></div>
                                    <span @click="open = true" class="cursor-pointer"><img
                                            src="{{asset('assets/img/Iconly/Light/dots.svg')}}" alt=""></span>
                                    <div
                                        class="absolute -left-28 z-50 top-5 bg-white border border-gray-100 px-6 py-3 shadow"
                                        x-show="open">
                                        <a href="#"
                                           class="flex items-center text-green-500 gap-1 mb-2 text-sm hover:text-green-300">
                                            @include('components.icon.edit')
                                            Edit
                                        </a>
                                        <a href="#"
                                           class="flex items-center text-red-500 gap-1 text-sm hover:text-red-300">
                                            @include('components.icon.delete')
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <td scope="row" class="p-4 text-gray-600">
                            126802736
                        </td>
                        <td class="p-4 text-gray-600">
                            #67380273866
                        </td>
                        <td class="p-4 text-gray-600">
                            Ratul Ahmed
                        </td>
                        <td class="p-4 text-gray-600">
                            12-11-2023
                        </td>
                        <td class="p-4 text-gray-600">
                            Bkash
                        </td>
                        <td class="p-4 text-gray-600">
                            <div class="flex items-center justify-between">
                                <div
                                    class="inline-block py-1 px-4 items-center gap-2 border dc-green-border-color dc-green-color">
                                    $ 567
                                </div>
                                <div class="relative" x-data="{ open: false }">
                                    <div x-show="open" @click="open = false" class="fixed z-40 inset-0 overflow-y-auto"
                                    ></div>
                                    <span @click="open = true" class="cursor-pointer"><img
                                            src="{{asset('assets/img/Iconly/Light/dots.svg')}}" alt=""></span>
                                    <div
                                        class="absolute -left-28 z-50 top-5 bg-white border border-gray-100 px-6 py-3 shadow"
                                        x-show="open">
                                        <a href="#"
                                           class="flex items-center text-green-500 gap-1 mb-2 text-sm hover:text-green-300">
                                            @include('components.icon.edit')
                                            Edit
                                        </a>
                                        <a href="#"
                                           class="flex items-center text-red-500 gap-1 text-sm hover:text-red-300">
                                            @include('components.icon.delete')
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <td scope="row" class="p-4 text-gray-600">
                            126802736
                        </td>
                        <td class="p-4 text-gray-600">
                            #3753583563
                        </td>
                        <td class="p-4 text-gray-600">
                            Rasel Ahmed
                        </td>
                        <td class="p-4 text-gray-600">
                            12-11-2023
                        </td>
                        <td class="p-4 text-gray-600">
                            Debit
                        </td>
                        <td class="p-4 text-gray-600">
                            <div class="flex items-center justify-between">
                                <div
                                    class="inline-block py-1 px-4 items-center gap-2 border dc-green-border-color dc-green-color">
                                    $ 1260
                                </div>
                                <div class="relative" x-data="{ open: false }">
                                    <div x-show="open" @click="open = false" class="fixed z-40 inset-0 overflow-y-auto"
                                    ></div>
                                    <span @click="open = true" class="cursor-pointer"><img
                                            src="{{asset('assets/img/Iconly/Light/dots.svg')}}" alt=""></span>
                                    <div
                                        class="absolute -left-28 z-50 top-5 bg-white border border-gray-100 px-6 py-3 shadow"
                                        x-show="open">
                                        <a href="#"
                                           class="flex items-center text-green-500 gap-1 mb-2 text-sm hover:text-green-300">
                                            @include('components.icon.edit')
                                            Edit
                                        </a>
                                        <a href="#"
                                           class="flex items-center text-red-500 gap-1 text-sm hover:text-red-300">
                                            @include('components.icon.delete')
                                            Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!--End Table Content-->

            <!--Pagination-->
            <div class="flex items-center justify-between">
                <p class="min-w-max text-gray-600">
                    Showing Results 10 of 109
                </p>
                <div class="min-w-max flex gap-2 items-center">
                    <button class="w-8 h-8 rotate-180 bg-white flex items-center justify-center"><img
                            src="{{ asset('assets/img/Iconly/Light/arrow-right.svg') }}" alt=""></button>
                    <p
                        class="w-8 h-8 bg-white border border-gray-100 flex items-center justify-center text-blue-600 text-[10px]">
                        10</p>
                    <p class="text-xs text-gray-600">of 128</p>
                    <button class="w-8 h-8 bg-white flex items-center justify-center"><img
                            src="{{ asset('assets/img/Iconly/Light/arrow-right.svg') }}" alt=""></button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
