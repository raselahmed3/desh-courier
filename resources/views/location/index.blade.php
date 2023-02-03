<x-app-layout>
    <div class="pl-4 flex">
        <!--SideBar-->
        <div class="w-1/6 border-r dc-header-broder-color pt-8">
            @include('layouts.sidebar')
        </div>
        <!--End SideBar-->

        <div class="dashboard-bg section-padding w-full">
           <h1 class="text-4xl text-gray-600">Padding Design</h1>
        </div>
    </div>
</x-app-layout>
