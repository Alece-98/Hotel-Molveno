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
            <div class="listRow {{$availability[$loop->index]}}">
                <a href="/rooms/{{$room->id}}" class="listRow">
                    <p class="fixedWidth">{{ $room->number }}</p>
                    <p class="fixedWidth">{{ $room->type }}</p>
                    <p class="fixedWidth">{{ $room->view }}</p>
                    <p class="fixedWidth">{{ $room->capacity }}</p>
                    <p class="fixedWidth">{{ $room->bed_description }}</p>
                </a>
            </div>
        @endforeach
    </div>
</x-MasterLayout>