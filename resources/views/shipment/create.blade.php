<x-app-layout>
    <div class="pl-4 flex">
        <!--SideBar-->
        <div class="w-1/6 border-r dc-header-broder-color pt-8">
            @include('layouts.sidebar')
        </div>
        <!--End SideBar-->

        <div class="w-full dashboard-bg">
            <div class="bg-[#100937] padding-l-30 padding-r-26 pt-[27px] pb-40">
                <h4 class="text-white text-2xl font-bold mb-4">Shipments</h4>
                <div class="flex items-center gap-x-4">
                    <a href="{{route('shipment.index')}}" class="text-[#A2A6AA] font-medium text-sm">Shipment</a>
                    <span class="text-white">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                           stroke="currentColor" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                      </svg>
                    </span>
                    <a href="{{ route('shipment.create') }}" class="text-white font-bold text-sm">Add Shipments</a>
                </div>
            </div>
            <!-- Form -->
            <div class=" padding-l-30 pb-[30px] padding-r-26 -mt-28">

            </div>
            <div class="bg-white section-margin p-6 -mt-10">
                <h2 class="text-lg flex gap-2  items-center text-[#1A1C1E] font-bold">Add Shipment <span><img src="{{asset('assets/img/Iconly/Light/info-circle.svg')}}" alt=""></span></h2>
                <livewire:shipment-create />
            </div>
        </div>
    </div>
</x-app-layout>
