@vite(['resources/css/roomOverview.css'])
<x-MasterLayout>
    <div class="overviewContainer flex flexVertical">

        <div class="listHeader">
            <p class="fixedWidth">Room Number</p>
            <p class="fixedWidth">Room Class</p>
            <p class="fixedWidth">View</p>
            <p class="fixedWidth">Guest Capacity</p>
            <p class="fixedWidth">Beds</p>
        </div>

        <p>{{$availability}}</p>
        <p>{{$reservation}}</p>
        <p>{{$roomByID}}</p>

        @foreach ($rooms as $room)
            <div class="listRow {{$availability}}">
                <a href="" class="listRow">
                    <p class="fixedWidth">{{ $room->room_number }}</p>
                    <p class="fixedWidth">{{ $room->room_type }}</p>
                    <p class="fixedWidth">{{ $room->room_view }}</p>
                    <p class="fixedWidth">{{ $room->room_capacity }}</p>
                    <p class="fixedWidth">{{ $room->bed_description }}</p>
                </a>
            </div>
        @endforeach
    </div>
</x-MasterLayout>