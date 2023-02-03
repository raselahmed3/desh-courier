<x-app-layout>
    <div class="pl-4 flex">
        <!--SideBar-->
        <div class="w-1/6 border-r dc-header-broder-color pt-8">
            @include('layouts.sidebar')
        </div>
        <!--End SideBar-->

        <div class="dashboard-bg section-padding w-full">
            <div class="flex items-center justify-between">
                <div class="min-w-max">
                    <h4 class="text-gray-900 font-size-22 font-bold">Vehicles</h4>
                    <p class="text-gray-600"><span>109 </span>ID Found</p>
                </div>

                <div class="min-w-max">
                    <div class="flex items-center gap-2">
                        <span class="text-gray-400">Sort By:- </span>
                        <div class="flex items-center min-w-max bg-white">
                            <span class="pl-2 pr-1">
                                <img src="{{ asset('assets/img/Iconly/Light/paper.svg') }}" alt="">
                            </span>
                            <select
                                class="border text-gray-600 pl-0 py-1 border-white focus:ring-0 focus:outline-none focus:border-white"
                                name="" id="">
                                <option>All Orders</option>
                                <option value="Dec">Dec</option>
                                <option value="Asc">Asc</option>
                            </select>
                        </div>
                        <div class="flex items-center min-w-max bg-white">
                            <span class="pl-2 pr-1">
                                <img src="{{ asset('assets/img/Iconly/Light/calendar.svg') }}" alt="">
                            </span>
                            <select
                                class="border text-gray-600 pl-0 py-1 border-white focus:ring-0 focus:outline-none focus:border-white"
                                name="" id="">
                                <option value="June">June</option>
                                <option value="Dec">Dec</option>
                            </select>
                        </div>
                        <a href="{{route('vehicle.create')}}" class="bg-blue-600 py-1 px-2 text-white flex gap-2 items-center">Add New
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
                            Vehicles Id
                        </th>
                        <th scope="col" class="px-4 py-3 font-medium">
                            Driver Name
                        </th>
                        <th scope="col" class="px-4 py-3 font-medium">
                            Driver Id
                        </th>
                        <th scope="col" class="px-4 py-3 font-medium">
                            Type
                        </th>
                        <th scope="col" class="px-4 py-3 font-medium">
                            Hub
                        </th>
                        <th scope="col" class="px-4 py-3 font-medium">
                            Status
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white">
                        <td scope="row" class="p-4 text-gray-600">
                            126802736
                        </td>
                        <td class="p-4 text-gray-600">
                            Ratul Ahmed
                        </td>
                        <td class="p-4 text-gray-600">
                            #7325734527
                        </td>
                        <td class="p-4 text-gray-600">
                            Bike
                        </td>
                        <td class="p-4 text-gray-600">
                            Bheramara
                        </td>
                        <td class="p-4 text-gray-600">
                            <div class="flex items-center justify-between">
                                <div
                                    class="inline-block p-1 items-center gap-2 border dc-green-border-color dc-green-color">
                                        <span class="inline-block"><img
                                                src="{{ asset('assets/img/Iconly/Light/tick-square.svg') }}"
                                                alt=""></span>
                                    Active
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
                            659316598
                        </td>
                        <td class="p-4 text-gray-600">
                            Rasel Ahmed
                        </td>
                        <td class="p-4 text-gray-600">
                            #7542365635
                        </td>
                        <td class="p-4 text-gray-600">
                            Truck
                        </td>
                        <td class="p-4 text-gray-600">
                            Sakhipur
                        </td>
                        <td class="p-4 text-gray-600">
                            <div class="flex items-center justify-between">
                                <div
                                    class="inline-block p-1 items-center gap-2 border dc-green-border-color dc-green-color">
                                        <span class="inline-block"><img
                                                src="{{ asset('assets/img/Iconly/Light/tick-square.svg') }}"
                                                alt=""></span>
                                    Active
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
                            659316598
                        </td>
                        <td class="p-4 text-gray-600">
                            Towhozib Ahmed Tomal
                        </td>
                        <td class="p-4 text-gray-600">
                            #6525734527
                        </td>
                        <td class="p-4 text-gray-600">
                            Mini Van
                        </td>
                        <td class="p-4 text-gray-600">
                            Chhagalnaiya
                        </td>
                        <td class="p-4 text-gray-600">
                            <div class="flex items-center justify-between">
                                <div
                                    class="inline-block p-1 items-center gap-2 border dc-red-border-color dc-red-color">
                                        <span class="inline-block"><img
                                                src="{{ asset('assets/img/Iconly/Light/close-square.svg') }}"
                                                alt=""></span>
                                    Inactive
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
                            659316598
                        </td>
                        <td class="p-4 text-gray-600">
                            Sojol Ahmed
                        </td>
                        <td class="p-4 text-gray-600">
                            #3757532757
                        </td>
                        <td class="p-4 text-gray-600">
                            Bicycle
                        </td>
                        <td class="p-4 text-gray-600">
                            Lakshmipur
                        </td>
                        <td class="p-4 text-gray-600">
                            <div class="flex items-center justify-between">
                                <div
                                    class="inline-block p-1 items-center gap-2 border dc-green-border-color dc-green-color">
                                        <span class="inline-block"><img
                                                src="{{ asset('assets/img/Iconly/Light/tick-square.svg') }}"
                                                alt=""></span>
                                    Active
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
                            Sojol Ahmed
                        </td>
                        <td class="p-4 text-gray-600">
                            #9357457354
                        </td>
                        <td class="p-4 text-gray-600">
                            Bike
                        </td>
                        <td class="p-4 text-gray-600">
                            Bheramara
                        </td>
                        <td class="p-4 text-gray-600">
                            <div class="flex items-center justify-between">
                                <div
                                    class="inline-block p-1 items-center gap-2 border dc-green-border-color dc-green-color">
                                        <span class="inline-block"><img
                                                src="{{ asset('assets/img/Iconly/Light/tick-square.svg') }}"
                                                alt=""></span>
                                    Active
                                </div>
                                <div class="relative z-50" x-data="{ open: false }">
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
                            Ratul Ahmed
                        </td>
                        <td class="p-4 text-gray-600">
                            #7325734527
                        </td>
                        <td class="p-4 text-gray-600">
                            Bike
                        </td>
                        <td class="p-4 text-gray-600">
                            Bheramara
                        </td>
                        <td class="p-4 text-gray-600">
                            <div class="flex items-center justify-between">
                                <div
                                    class="inline-block p-1 items-center gap-2 border dc-green-border-color dc-green-color">
                                        <span class="inline-block"><img
                                                src="{{ asset('assets/img/Iconly/Light/tick-square.svg') }}"
                                                alt=""></span>
                                    Active
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
                            659316598
                        </td>
                        <td class="p-4 text-gray-600">
                            Rasel Ahmed
                        </td>
                        <td class="p-4 text-gray-600">
                            #7542365635
                        </td>
                        <td class="p-4 text-gray-600">
                            Truck
                        </td>
                        <td class="p-4 text-gray-600">
                            Sakhipur
                        </td>
                        <td class="p-4 text-gray-600">
                            <div class="flex items-center justify-between">
                                <div
                                    class="inline-block p-1 items-center gap-2 border dc-green-border-color dc-green-color">
                                        <span class="inline-block"><img
                                                src="{{ asset('assets/img/Iconly/Light/tick-square.svg') }}"
                                                alt=""></span>
                                    Active
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
                            659316598
                        </td>
                        <td class="p-4 text-gray-600">
                            Towhozib Ahmed Tomal
                        </td>
                        <td class="p-4 text-gray-600">
                            #6525734527
                        </td>
                        <td class="p-4 text-gray-600">
                            Mini Van
                        </td>
                        <td class="p-4 text-gray-600">
                            Chhagalnaiya
                        </td>
                        <td class="p-4 text-gray-600">
                            <div class="flex items-center justify-between">
                                <div
                                    class="inline-block p-1 items-center gap-2 border dc-red-border-color dc-red-color">
                                        <span class="inline-block"><img
                                                src="{{ asset('assets/img/Iconly/Light/close-square.svg') }}"
                                                alt=""></span>
                                    Inactive
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
                            659316598
                        </td>
                        <td class="p-4 text-gray-600">
                            Sojol Ahmed
                        </td>
                        <td class="p-4 text-gray-600">
                            #3757532757
                        </td>
                        <td class="p-4 text-gray-600">
                            Bicycle
                        </td>
                        <td class="p-4 text-gray-600">
                            Lakshmipur
                        </td>
                        <td class="p-4 text-gray-600">
                            <div class="flex items-center justify-between">
                                <div
                                    class="inline-block p-1 items-center gap-2 border dc-green-border-color dc-green-color">
                                        <span class="inline-block"><img
                                                src="{{ asset('assets/img/Iconly/Light/tick-square.svg') }}"
                                                alt=""></span>
                                    Active
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
                            Ratul Ahmed
                        </td>
                        <td class="p-4 text-gray-600">
                            #9357457354
                        </td>
                        <td class="p-4 text-gray-600">
                            Bike
                        </td>
                        <td class="p-4 text-gray-600">
                            Bheramara
                        </td>
                        <td class="p-4 text-gray-600">
                            <div class="flex items-center justify-between">
                                <div
                                    class="inline-block p-1 items-center gap-2 border dc-green-border-color dc-green-color">
                                        <span class="inline-block"><img
                                                src="{{ asset('assets/img/Iconly/Light/tick-square.svg') }}"
                                                alt=""></span>
                                    Active
                                </div>
                                <div class="relative z-50" x-data="{ open: false }">
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
