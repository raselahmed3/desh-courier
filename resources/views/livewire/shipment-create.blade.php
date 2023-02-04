<div>
    <form  wire:submit.prevent="search">
        <x-form-field name="search" type="text" label="Search Customer" placeholder="Search using eamil and phone Number" required="required" />
        <x-submit-btn target="search">Search Customer</x-submit-btn>
    </form>
   @if(!empty($customers) && $customers->count() > 0)
        <x-form-field wire:change="setCustomer" class="w-full" name="selected_customer" type="select" label="Select Customer"  required="required">
            @foreach($customers as $customer)
                <option selected>Choose a customer</option>
                <option value="{{$customer->id}}">{{$customer->name}}-{{$customer->email}}</option>
            @endforeach
        </x-form-field>
    @endif
    @if(!empty($selected_customer))
    <form class="mt-6" wire:submit.prevent="formSubmit">
        <x-form-field name="name" type="text" label="Add Customer Name " placeholder="Ratul Ahmed" required="required" />
        <x-form-field class="mt-8" name="email" type="text" label="Customer  Email  Address " placeholder="rahmed357@gmail.com" required="required" />
        <div class="flex gap-x-4 mt-8">
            <x-form-field class="flex-1" name="employeeId" type="text" label="Employee ID" placeholder="248438635" required="required" />
            <x-form-field class="flex-1" name="bookingID" type="text" label="Booking ID" placeholder="126802736" required="required" />
        </div>
        <x-form-field class="mt-8" name="branch" type="select" label="Hub" required="required">
            <option selected>Choose a Hub</option>
            <option value="">Bheramara</option>
            <option value="">Kustia</option>
            <option value="">Pabna</option>
        </x-form-field>
        <div class="flex gap-x-4 mt-8">
            <x-form-field class="flex-1" name="date" type="select" label="Date"  required="required">
                <option selected>Choose a Date</option>
                <option value="">1 February 2023</option>
                <option value="">2 February 2023</option>
                <option value="">3 February 2023</option>
            </x-form-field>

            <x-form-field class="flex-1" name="address" type="text" label="Address" placeholder="Kustia, Bheramara" required="required" />
            <x-form-field class="flex-1" name="status" type="select" label="Status"  required="required">
                <option selected>Choose a Status</option>
                <option value="">Delivered</option>
                <option value="">Canceled</option>
                <option value="">On Process</option>
            </x-form-field>
        </div>
        <!--border-->
        <span class="border-b border-[#EDF1F3] block my-8"></span>

        <div class="flex gap-x-4">
           <x-submit-btn target="formSubmit">Add Shipments</x-submit-btn>
            <a href="{{route('shipment.index')}}" type="button" class="dc-cancel-button">Cancel</a>
        </div>
    </form>
    @endif
</div>
