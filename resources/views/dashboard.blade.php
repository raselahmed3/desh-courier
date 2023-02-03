<x-app-layout>
    <div class="pl-4 flex">
        <!--SideBar-->
        <div class="w-1/6 border-r dc-header-broder-color pt-8">
            @include('layouts.sidebar')
        </div>
        <!--End SideBar-->

        <div class="w-full">
            <div class="bg-[#100937] padding-l-30 padding-r-26 pt-[27px] pb-10">
                <p class="text-white font-medium">Welcome back, Rainer Yaeger 👏🏻</p>
                <div class="flex items-center gap-x-4 mt-2">
                    <span class="text-[#A2A6AA] font-medium">Dashboard</span>
                    <span class="text-white">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                           stroke="currentColor" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                      </svg>
                    </span>
                    <span class="text-white font-medium">Overview</span>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex items-center mt-8">
                        <button class="py-3 px-6 bg-[#5329FF] text-white font-medium border-b border-[#585373]">
                            Overview
                        </button>
                        <button class="py-3 px-6 text-[#A2A6AA] font-medium border-b border-[#585373]">Transaction
                        </button>
                        <button class="py-3 px-6 text-[#A2A6AA] font-medium border-b border-[#585373]">Statistics
                        </button>
                    </div>
                    <div class="div">
                        <button class="flex gap-2 py-3 px-5 rounded-full text-white bg-[#211A45]">
                            <span><img src="{{asset('assets/img/Iconly/Light/calendar-white.svg')}}" alt=""></span>
                            Oct 22,2022
                        </button>
                    </div>
                </div>
            </div>
            <div class="dashboard-bg py-[30px] padding-l-30 padding-r-26 w-full">
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
                <!--End Payment Chart-->

                <!--Transaction Chart & pie & transaction History-->
                <div class="flex mt-[27px] gap-x-7">
                    <div class="w-7/12">
                        <div class="bg-white pt-6 pb-2 pr-6 pl-2 border border-gray-100">
                            <div class="flex items-center justify-between ml-4">
                                <h3 class="text-lg font-bold">Weekly Transaction <br>Summary</h3>
                                <div
                                    class="flex gap-2 py-3 px-5 items-center min-w-max bg-white border dc-header-broder-color">
                                    <span class="text-[10px] font-medium text-gray-900">Last 12 month</span>
                                    <img src="{{asset('assets/img/Iconly/Light/calendar-light.svg')}}" alt="">
                                </div>
                            </div>
                            <div id="transaction"></div>
                            <script>

                                var options = {
                                    series: [
                                        {
                                            name: "Day 1",
                                            data: [11, 7, 3, 5, 11, 7, 3, 5, 11, 7, 3, 5, 11, 7, 3, 5, 6, 8]
                                        },
                                        {
                                            name: "Day 2",
                                            data: [11, 5, 9, 5, 11, 5, 9, 5, 11, 5, 9, 5, 11, 5, 9, 5, 11, 5,]
                                        },
                                        {
                                            name: "Day 3",
                                            data: [12, 6, 5, 5, 12, 6, 5, 5, 12, 6, 5, 5, 12, 6, 5, 5, 7, 9]
                                        },
                                        {
                                            name: "Day 4",
                                            data: [12, -7, -12, 7, 12, -7, -12, 7, 12, -7, -12, 7, 12, -7, -12, 7, 12, -7, -12]
                                        },
                                        {
                                            name: "Day 5",
                                            data: [-10, -5, -11, 0, -10, -5, -11, 0, -10, -5, -11, 0, -10, -5, -11, 0, -10, -5]
                                        },
                                        {
                                            name: "Day 6",
                                            data: [-13, 0, -8, 0, -13, 0, -8, 0, -13, 0, -8, 0, 0, -8, 0, -13, 0, -8]
                                        },
                                        {
                                            name: "Day 7",
                                            data: [-13, 12, -7, -9, -13, 12, -7, -9, -13, 12, -7, -9, -13, 12, -7, -9, -13, 12, -7]
                                        }
                                    ],
                                    chart: {
                                        type: 'bar',
                                        height: 325,
                                        stacked: true,
                                        toolbar: {
                                            show: false
                                        },

                                    },
                                    toolbar: {
                                        show: false,
                                    },
                                    fill: {
                                        colors: [function ({value, seriesIndex, w}) {
                                            if (value >= 0) {
                                                return '#5329FF'
                                            } else {
                                                return '#61C877'
                                            }
                                        }]
                                    },
                                    plotOptions: {
                                        bar: {
                                            borderRadiusApplication: "end",
                                            horizontal: false,
                                            borderRadius: [6],
                                            borderRadiusWhenStacked: 'last',
                                            barHeight: '80%',
                                            columnWidth: '40%',
                                        },
                                    },
                                    dataLabels: {
                                        enabled: false
                                    },
                                    stroke: {
                                        width: 1,
                                        colors: ["#fff"]
                                    },

                                    grid: {
                                        xaxis: {
                                            lines: {
                                                show: false
                                            }
                                        },
                                        yaxis: {
                                            lines: {
                                                show: false
                                            },
                                        }
                                    },
                                    tooltip: {
                                        shared: false,
                                        x: {
                                            show: false
                                        },
                                        y: {
                                            formatter: function (val) {
                                                return Math.abs(val)
                                            }
                                        }
                                    },
                                    xaxis: {
                                        type: 'datetime',
                                        categories: ["2023-01-01", "2023-01-6", "2023-01-11", "2023-01-16", "2023-01-21", "2023-01-26", "2023-01-31", "2023-02-05", "2023-02-10", "2023-02-15", "2023-02-20", "2023-02-25", "2023-03-02", "2023-03-07", "2023-03-12", "2023-03-17", "2023-03-22", "2023-03-27"],
                                        tickAmount: 17,
                                        axisBorder: {
                                            show: true,
                                            offsetY: -135
                                        },
                                        axisTicks: {
                                            show: false,
                                        },
                                        offsetY: 0,
                                        labels: {
                                            style: {
                                                fontSize: '10px',
                                                fontWeight: 500,
                                                colors: '#B7B5C3'
                                            },
                                            offsetY: 65,
                                            offsetX: 20,

                                        },
                                    },
                                    yaxis: {
                                        labels: {
                                            show: false
                                        },
                                        min: -50,
                                        max: 50,

                                    },
                                    legend: {
                                        show: false
                                    },

                                };

                                var transaction = new ApexCharts(document.querySelector("#transaction"), options);
                                transaction.render();
                            </script>
                        </div>
                        <div class="bg-white pt-6 pb-2 pr-6 pl-2 mt-7 border border-gray-100">
                            <div class="flex items-center justify-between pl-6 pr-4 pt-4">
                                <h3 class="text-lg font-bold flex items-center gap-2 text-gray-900">Expense
                                    Catergory<span><img
                                            src="{{asset('assets/img/Iconly/Light/info-circle.svg')}}" alt=""></span>
                                </h3>
                                <select
                                    class="border text-gray-300 text-sm font-medium -ml-3 border-white focus:ring-0 focus:outline-none focus:border-white"
                                    name="" id="">
                                    <option value="June">Monthly</option>
                                    <option value="Dec">Yearly</option>
                                </select>
                            </div>
                            <div class="flex pl-6 justify-between items-center">
                                <div class="">
                                    <h2 class="font-bold text-gray-900 text-4xl flex items-center gap-x-4">$8,527,224
                                        <span
                                            class="text-[#5329FF] flex items-center gap-x-1 font-bold text-base bg-[#EEEAFF] py-1.5 px-4 rounded">
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="3" stroke="currentColor" class="w-3 h-3">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"/>
                                            </svg>
                                            +3.1%
                                        </span>
                                    </h2>
                                    <p class="text-gray-900 font-medium mt-5">Expense increased by <span
                                            class="text-bold text-[#5329FF]">$2.172 </span>This Month</p>
                                </div>
                                <div class="">
                                    <div id="income"></div>
                                    <script>
                                        var options = {
                                            series: [{
                                                name: 'Income Analysis',
                                                data: [8000, 4000, 9000, 4000, 9000]
                                            }],
                                            chart: {
                                                height: 150,
                                                type: 'bar',
                                                toolbar: {show: false},
                                            },
                                            colors: ['#5329FF'],
                                            dataLabels: {
                                                enabled: false

                                            },

                                            xaxis: {
                                                categories: ["Jan", "Feb", "Mar", "Apr", "May"],
                                                position: 'bottom',
                                                axisBorder: {
                                                    show: false
                                                },
                                                axisTicks: {
                                                    show: false
                                                },
                                                tooltip: {
                                                    enabled: true,
                                                },
                                                labels: {
                                                    style: {
                                                        colors: '#B7B5C3'
                                                    }
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
                                                    show: true,
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
                                        };

                                        var income = new ApexCharts(document.querySelector("#income"), options);
                                        income.render();

                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-5/12">
                        <div class="bg-white h-80">
                            <div class="flex items-center justify-between pl-6 pr-4 pt-4 -mb-4">
                                <h3 class="text-sm font-bold flex items-center gap-2 text-gray-900">Expense
                                    Catergory<span><img
                                            src="{{asset('assets/img/Iconly/Light/info-circle.svg')}}" alt=""></span>
                                </h3>
                                <select
                                    class="border text-gray-300 text-sm font-bold py-1 -ml-3 border-white focus:ring-0 focus:outline-none focus:border-white"
                                    name="" id="">
                                    <option value="June">Monthly</option>
                                    <option value="Dec">Yearly</option>
                                </select>
                            </div>
                            <div id="expense"></div>
                            <script>
                                var options = {
                                    series: [500, 1000, 345, 234.98],
                                    chart: {
                                        type: 'donut',
                                        width: 500,
                                        offsetY: 40
                                    },
                                    tooltip: {
                                        y: {
                                            formatter: function (val) {
                                                return "$" + val.toFixed(2)
                                            }
                                        }
                                    },
                                    colors: ['#61C877', '#FFCE93', '#FF6056', '#5329FF'],
                                    labels: ['Bkash', 'Debit', 'Credit', 'Cash'],
                                    dataLabels: {
                                        enabled: false,
                                    },
                                    plotOptions: {
                                        pie: {
                                            donut: {
                                                size: '70%',
                                                // labels: {
                                                //     show: true,
                                                //     total: {
                                                //         show: true,
                                                //         showAlways: true,
                                                //         label: '100%',
                                                //         fontWeight: 700,
                                                //         fontSize: '16px',
                                                //         formatter: function (w) {
                                                //             return '';
                                                //         }
                                                //     }
                                                // },

                                            },
                                        }
                                    },
                                    legend: {
                                        offsetY: -3,
                                        formatter: function (val, opt) {
                                            var label = val;
                                            var total = 0;
                                            for (var i = 0; i < opt.w.globals.series.length; i++) {
                                                total += opt.w.globals.series[i];
                                            }
                                            var percentage = ((opt.w.globals.series[opt.seriesIndex] / total)) * 100;
                                            return '<div class="inline-block mb-1">' +
                                                '<div class="flex text-sm font-medium text-gray-600 my-2">' + label + "(" + percentage.toFixed(2) + "%)" + '</div>' +
                                                '</div>' + '<span class="text-gray-900 font-bold text-sm ml-10">' + "$" + opt.w.globals.series[opt.seriesIndex].toFixed(2) + '</span>';
                                        },
                                        // position:'middle',
                                    }
                                };

                                var chart = new ApexCharts(document.querySelector("#expense"), options);
                                chart.render();

                            </script>
                        </div>
                        <div class="bg-white mt-7  py-4">
                            <div class="flex items-center justify-between pl-6 pr-4">
                                <h3 class="text-sm font-bold flex items-center gap-2 text-gray-900">Recent Shipment
                                    History<span><img
                                            src="{{asset('assets/img/Iconly/Light/info-circle.svg')}}" alt=""></span>
                                </h3>
                                <select
                                    class="border text-gray-300 text-sm font-bold py-1 -ml-3 border-white focus:ring-0 focus:outline-none focus:border-white"
                                    name="" id="">
                                    <option value="today">Today</option>
                                    <option value="yesterday">Yesterday</option>
                                </select>
                            </div>

                            <div class="relative overflow-x-auto mt-4 pb-6">
                                <table class="w-full text-left text-gray-600">
                                    <thead class="text-gray-600 font-medium border-b border-t">
                                    <tr>
                                        <th scope="col" class="px-6 py-2">
                                            Id
                                        </th>
                                        <th scope="col" class="px-6 py-2">
                                            Hub
                                        </th>
                                        <th scope="col" class="px-6 py-2">
                                            Status
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="bg-white border-b">
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-600 whitespace-nowrap">
                                            126802736
                                        </th>
                                        <td class="px-6 py-3 font-medium text-gray-600">
                                            Bheramara
                                        </td>
                                        <td class="px-6 py-3 font-medium text-gray-600">
                                            <div
                                                class="inline-block p-1 items-center gap-2 border dc-green-border-color dc-green-color">
                                               <span class="inline-block">
                                                   <img
                                                       src="{{ asset('assets/img/Iconly/Light/tick-square.svg') }}"
                                                       alt="">
                                               </span>
                                                Delivered
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-600 whitespace-nowrap">
                                            126802736
                                        </th>
                                        <td class="px-6 py-3 font-medium text-gray-600">
                                            Bheramara
                                        </td>
                                        <td class="px-6 py-3 font-medium text-gray-600">
                                            <div
                                                class="inline-block p-1 items-center gap-2 border dc-yellow-border-color dc-yellow-color">
                                                   <span class="inline-block">
                                                       <img
                                                           src="{{ asset('assets/img/Iconly/Light/table-setting.svg') }}"
                                                           alt="">
                                                   </span>
                                                On Process
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b">
                                        <th scope="row" class="px-6 py-3 font-medium text-gray-600 whitespace-nowrap">
                                            126802736
                                        </th>
                                        <td class="px-6 py-3 font-medium text-gray-600">
                                            Bheramara
                                        </td>
                                        <td class="px-6 py-3 font-medium text-gray-600">
                                            <div
                                                class="inline-block p-1 items-center gap-2 border dc-red-border-color dc-red-color">
                                            <span class="inline-block">
                                            <img
                                                src="{{ asset('assets/img/Iconly/Light/close-square.svg') }}"
                                                alt="">
                                           </span>
                                                Canceled
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="flex justify-between items-center px-6 pb-5">
                                <a href="#" class="text-sm text-[#5329FF]">View All</a>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
