<div class="flex flex-col h-full justify-between">
    <div class="pr-4 pl-2.5">
        <div>
            <h3 class="font-bold mb-3 text-gray-900">Menu</h3>
            <ul class="ml-2">
                <li class="mb-3">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                                :image-url="request()->routeIs('dashboard') ? asset('assets/img/Iconly/active/dashboard.svg') : asset('assets/img/Iconly/Light/dashboard.svg')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </li>
                <li class="mb-3">
                    <x-nav-link :href="route('shipment.index')" :active="request()->routeIs('shipment.index')"
                                :image-url="request()->routeIs('shipment.index') ? asset('assets/img/Iconly/active/more.svg') : asset('assets/img/Iconly/Light/more.svg')">
                        {{ __('Shipment') }}
                    </x-nav-link>
                </li>
                <li class="mb-3">
                    <x-nav-link :href="route('payment.index')" :active="request()->routeIs('payment.index')"
                                :image-url="request()->routeIs('payment.index') ?asset('assets/img/Iconly/active/card.svg') : asset('assets/img/Iconly/Light/card.svg')">
                        {{ __('Payment') }}
                    </x-nav-link>
                </li>
                <li class="mb-3">
                    <x-nav-link :href="route('location.index')" :active="request()->routeIs('location.index')"
                                :image-url="request()->routeIs('location.index') ? asset('assets/img/Iconly/Light/location.svg') : asset('assets/img/Iconly/active/location.svg')">
                        {{ __('Location') }}
                    </x-nav-link>
                </li>
            </ul>
        </div>
        <div>
            <h3 class="font-bold mb-3 text-gray-900">Organisation</h3>
            <ul class="ml-2">
                <li class="mb-3">
                    <x-nav-link :href="route('employee.index')" :active="request()->routeIs('employee.index')"
                                :image-url="request()->routeIs('employee.index') ? asset('assets/img/Iconly/active/user.svg') : asset('assets/img/Iconly/Light/user.svg')">
                        {{ __('Employee') }}
                    </x-nav-link>
                </li>
                <li class="mb-3">
                    <x-nav-link :href="route('vehicle.index')" :active="request()->routeIs('vehicle.index')"
                                :image-url="request()->routeIs('vehicle.index') ? asset('assets/img/Iconly/active/truck.svg') : asset('assets/img/Iconly/Light/truck.svg')">
                        {{ __('Vehicle') }}
                    </x-nav-link>
                </li>
            </ul>
        </div>
    </div>
    <div class="">
        <div class="pr-4 pb-6">
            <a href="#" class="bg-[#F9F9F9] p-4 flex gap-4 mb-2.5">
                <img src="{{ asset('assets/img/Iconly/Light/setting.svg') }}" alt="">
                Settings
            </a>
            <a href="#" class="bg-[#F9F9F9] p-4 flex gap-4">
                <img src="{{ asset('assets/img/Iconly/Light/logout.svg') }}" alt="">
                Log Out
            </a>
        </div>
        <!--Border Bottom-->
        <p class="border-b dc-header-broder-color -ml-4"></p>
        <a href="{{route('profile')}}" class="flex items-center gap-3 py-5">
            <div class="profile-bg w-[50px] h-[50px] bg-center bg-contain bg-no-repeat rounded-full"></div>
            <div>
                <h4 class="text-lg font-medium text-gray-900">Ratul Ahmed</h4>
                <span class="text-lg text-gray-300">Admin</span>
            </div>
        </a>
    </div>
</div>

