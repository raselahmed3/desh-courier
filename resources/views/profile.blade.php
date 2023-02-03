<x-app-layout>
    <div class="pl-4 flex">
        <!--SideBar-->
        <div class="w-1/6 border-r dc-header-broder-color pt-8">
            @include('layouts.sidebar')
        </div>
        <!--End SideBar-->

        <div class="dashboard-bg padding-x-26 py-[23px] w-full">
            <div class="flex gap-x-5">
                <div class="w-5/12 bg-white">
                    <div class="flex items-center pt-9 pb-8 px-10 justify-between">
                        <div class="flex items-center gap-3 py-5">
                            <div class="profile-bg w-[66px] h-[66px] bg-center bg-contain bg-no-repeat rounded-full"></div>
                            <div>
                                <h4 class="text-[22px] font-medium text-gray-900">Ratul Ahmed</h4>
                                <span class="text-gray-300">Admin</span>
                            </div>
                        </div>
                        <div>
                            <a href="" class="bg-blue-600 text-white py-3.5 px-5 text-[13px] font-medium">Edit Profile</a>
                        </div>
                    </div>
                    <p class="border-b dc-header-broder-color"></p>
                    <div class="p-10">
                        <div class="flex items-center gap-x-8 mb-8">
                            <div class="flex-1 pb-2 border-b dc-header-broder-color">
                                <p class="text-gray-600 text-[13px]">First Name</p>
                                <h3 class="text-gray-900 font-medium">Ratul</h3>
                            </div>
                            <div class="flex-1 pb-2.5 border-b dc-header-broder-color">
                                <p class="text-gray-600 text-[13px]">Last Name</p>
                                <h3 class="text-gray-900 font-medium">Ahmed</h3>
                            </div>
                        </div>
                        <div class="flex items-center gap-x-8 mb-8">
                            <div class="flex-1 pb-2 border-b dc-header-broder-color">
                                <p class="text-gray-600 text-[13px]">Date of Birth</p>
                                <h3 class="text-gray-900 font-medium">27/08/2001</h3>
                            </div>
                            <div class="flex-1 pb-2.5 border-b dc-header-broder-color">
                                <p class="text-gray-600 text-[13px]">Date of Joining</p>
                                <h3 class="text-gray-900 font-medium">2/09/2022</h3>
                            </div>
                        </div>
                        <div class="flex items-center gap-x-8 mb-8">
                            <div class="flex-1 pb-2 border-b dc-header-broder-color">
                                <p class="text-gray-600 text-[13px]">Mobile Number</p>
                                <h3 class="text-gray-900 font-medium">017 00 000 000</h3>
                            </div>
                            <div class="flex-1 pb-2.5 border-b dc-header-broder-color">
                                <p class="text-gray-600 text-[13px]">Email Address</p>
                                <h3 class="text-gray-900 font-medium">rahmed357@gmail.com</h3>
                            </div>
                        </div>
                        <div class="flex items-center gap-x-8 mb-8">
                            <div class="flex-1 pb-2 border-b dc-header-broder-color">
                                <p class="text-gray-600 text-[13px]">NID Card Number</p>
                                <h3 class="text-gray-900 font-medium">5118284645637</h3>
                            </div>
                            <div class="flex-1 pb-2.5 border-b dc-header-broder-color">
                                <p class="text-gray-600 text-[13px]">Profile ID Number</p>
                                <h3 class="text-gray-900 font-medium">#924862547</h3>
                            </div>
                        </div>
                        <div class="flex items-center gap-x-8 mb-8">
                            <div class="flex-1 pb-2 border-b dc-header-broder-color">
                                <p class="text-gray-600 text-[13px]">Address</p>
                                <h3 class="text-gray-900 font-medium">Bheramara, Kushtia</h3>
                            </div>
                            <div class="flex-1 pb-2.5 border-b dc-header-broder-color">
                                <p class="text-gray-600 text-[13px]">Hub</p>
                                <h3 class="text-gray-900 font-medium">Bheramara</h3>
                            </div>
                        </div>
                        <a href="" class="block w-full border border-gray-300 text-center uppercase font-medium text-[15px] text-[#5329FF] py-6">See All Details</a>
                    </div>
                </div>
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
                                    height: 300,
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
                                        offsetY: -122
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
                                        offsetY: 60,
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
                    <div class="bg-white border border-gray-100 mt-5">
                        <div class="flex items-center justify-between ml-4 py-5 pr-6 pl-2 border-b border-gray-300">
                            <h3 class="text-lg font-bold">Recent Activity</h3>
                            <div
                                class="flex gap-2 py-3 px-5 items-center min-w-max bg-white border dc-header-broder-color">
                                <span class="text-[10px] font-medium text-gray-900">Last 7 Days</span>
                                <img src="{{asset('assets/img/Iconly/Light/calendar-light.svg')}}" alt="">
                            </div>
                        </div>
                        <div class="px-8 py-6">
                            <div class="flex items-center gap-x-2.5">
                                <span class="flex w-10 h-10 bg-[#E9E5FA] rounded-full justify-center items-center"><img class="w-4 h-4" src="{{asset('assets/img/Iconly/Light/clock.svg')}}" alt=""></span>
                                <p class="text-sm text-gray-900">Order #3256857 Got <span class="font-semibold">Cancelled</span></p>
                            </div>
                            <span class="h-7 w-px block bg-[#E2E4E8] ml-5"></span>
                            <div class="flex items-center gap-x-2.5">
                                <span class="flex w-10 h-10 bg-[#E9E5FA] rounded-full justify-center items-center"><img class="w-4 h-4" src="{{asset('assets/img/Iconly/Light/clock.svg')}}" alt=""></span>
                                <p class="text-sm text-gray-900"><span class="font-semibold">Sojol Ahmed</span> was added as a Delivery Man ID#7641356</span></p>
                            </div>
                            <span class="h-5 w-px block bg-[#E2E4E8] ml-5"></span>
                            <button class="text-[#5329FF] text-[11px] -ml-3 font-medium py-1.5 px-3 rounded bg-[#E8E4F9]">14 more</button>
                            <span class="h-5 w-px block bg-[#E2E4E8] ml-5"></span>
                            <div class="flex items-center gap-x-2.5">
                                <span class="flex w-10 h-10 bg-[#E9E5FA] rounded-full justify-center items-center"><img class="w-4 h-4" src="{{asset('assets/img/Iconly/Light/clock.svg')}}" alt=""></span>
                                <p class="text-sm text-gray-900">Order #3256857 Got <span class="font-semibold">Delivered</span></p>
                            </div>
                            <span class="h-5 w-px block bg-[#E2E4E8] ml-5"></span>
                            <div class="flex items-center gap-x-2.5">
                                <span class="flex w-10 h-10 bg-[#E9E5FA] rounded-full justify-center items-center"><img class="w-4 h-4" src="{{asset('assets/img/Iconly/Light/clock.svg')}}" alt=""></span>
                                <p class="text-sm text-gray-900"><span class="font-semibold">Shakline Mostak</span> was added as a Delivery Man ID#7641356</span></p>
                            </div>

                            <a href="" class="text-[11px] text-white font-bold bg-[#5329FF] py-[7px] px-4 mt-4 inline-block">View All Activity</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
