@vite(['resources/css/makeReservation.css'])
<x-MasterLayout>

    <body>
        <div class="m-8">
            <div class="grid grid-cols-5 divide-x h-12 m-4">
                <div>Room Number</div>
                <div>Room Class</div>
                <div>Room View</div>
                <div>Guests</div>
                <div>Beds</div>
            </div>
            <div>
                @foreach ($rooms as $room)
                    <form id="room{{ $room->getRoomID() }}">
                        <div>
                            <a href="" class="grid grid-cols-5 divide-x h-12 m-4">
                                <p>{{ $room->getRoomNumber() }}</p>
                                <p>{{ $room->getRoomType() }}</p>
                                <p>{{ $room->getRoomView() }}</p>
                                <p>{{ $room->getRoomCapacity() }}</p>
                                <p>{{ $room->getBeds() }}</p>
                            </a>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </body>
</x-MasterLayout>
