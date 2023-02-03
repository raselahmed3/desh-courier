<x-app-layout>
    <div class="pl-4 flex">
        <!--SideBar-->
        <div class="w-1/6 border-r dc-header-broder-color pt-8">
            @include('layouts.sidebar')
        </div>
        <!--End SideBar-->

        <div class="w-full dashboard-bg">
            <div class="bg-[#100937] padding-l-30 padding-r-26 pt-[27px] pb-40">
                <h4 class="text-white text-2xl font-bold mb-4">Vehicles</h4>
                <div class="flex items-center gap-x-4">
                    <a href="{{route('vehicle.index')}}" class="text-[#A2A6AA] font-medium text-sm">Vehicle</a>
                    <span class="text-white">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                           stroke="currentColor" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                      </svg>
                    </span>
                    <a href="{{ route('vehicle.create') }}" class="text-white font-bold text-sm">Add Vehicles</a>
                </div>
            </div>
            <!-- Form -->
            <div class=" padding-l-30 pb-[30px] padding-r-26 -mt-28">

            </div>
            <div class="bg-white section-margin p-6 -mt-10">
                <h2 class="text-lg flex gap-2  items-center text-[#1A1C1E] font-bold">Add Vehicle <span><img src="{{asset('assets/img/Iconly/Light/info-circle.svg')}}" alt=""></span></h2>
                <form class="mt-6" action="">
                    <x-form-field name="name" type="text" label="Add Vehicle Name " placeholder="Ratul Ahmed" required="required" />
                    <x-form-field class="mt-8" name="email" type="text" label="Vehicle  Email  Address " placeholder="rahmed357@gmail.com" required="required" />
                    <div class="flex gap-x-4 mt-8">
                        <x-form-field class="flex-1" name="driverId" type="text" label="Driver ID" placeholder="248438635" required="required" />
                        <x-form-field class="flex-1" name="driverAddress" type="text" label="Driver Address" placeholder="Kustia, Bheramara" required="required" />
                    </div>
                    <div class="flex gap-x-4 mt-8">
                        <x-form-field class="flex-1" name="vehicleId" type="text" label="Vehicle ID" placeholder="248438635" required="required" />
                        <x-form-field class="flex-1" name="address" type="text" label="Address" placeholder="Kustia, Bheramara" required="required" />
                    </div>
                    <div class="flex gap-x-4 mt-8">
                        <x-form-field class="flex-1" name="status" type="select" label="Status"  required="required">
                            <option selected>Choose a status</option>
                            <option value="">Active</option>
                            <option value="">Inactive</option>
                        </x-form-field>
                        <x-form-field class="flex-1" name="hub" type="select" label="Hub" required="required">
                            <option selected>Choose a Hub</option>
                            <option value="">Bheramara</option>
                            <option value="">Kustia</option>
                            <option value="">Pabna</option>
                        </x-form-field>
                    </div>
                    <!--border-->
                    <span class="border-b border-[#EDF1F3] block my-8"></span>

                    <div class="flex gap-x-4">
                        <button type="submit" class="dc-submit-button">Add Vehicles</button>
                        <button type="button" class="dc-cancel-button">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
