@vite(['resources/css/roomOverview.css'])
<x-MasterLayout>
    <div class="overviewContainer flex flexVertical">

        <div class="listHeader">
            <p class="fixedWidth15">Room Number</p>
            <p class="fixedWidth15">Room Class</p>
            <p class="fixedWidth15">View</p>
            <p class="fixedWidth15">Guest Capacity</p>
            <p class="fixedWidth20">Beds</p>
            <p class="fixedWidth15">Price per Night</p>

        </div>

        @foreach ($rooms as $room)
            <div class="listRow available">
                <p class="fixedWidth15">{{$room->number}}</p>
                <p class="fixedWidth15">{{$room->type}}</p>
                <p class="fixedWidth15">{{$room->view}}</p>
                <p class="fixedWidth15">{{$room->capacity}}</p>
                <p class="fixedWidth20">{{$room->bed_description}}</p>
                <p class="fixedWidth15">&euro; {{$room->price_per_night}} p/n</p>
            </div>
        @endforeach
    </div>
</x-MasterLayout>