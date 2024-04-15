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

        {{-- <p>{{$availability}}</p>
        <p>{{$reservation}}</p>
        <p>{{$roomByID}}</p> --}}

        @foreach ($rooms as $room)
            <div class="listRow available">
                <a href="" class="listRow">
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