@vite(['resources/css/makeReservation.css'])
<x-MasterLayout>

<body>
    @csrf
    @if ($rooms->count() == 0)
        <div class="h-12 m-4 blocked flex" id="emptyerror" name="emptyerror">
            <h1>No rooms are available that satisfy the given conditions</h1>
        </div>
    @else
    <div class="m-8">
        <div class="grid grid-cols-6 divide-x h-12 m-4">
            <div>Room Number</div>
            <div>Room Class</div>
            <div>Room View</div>
            <div>Guests</div>
            <div>Beds</div>
            <div>Price</div> 
        </div>
    <div>
    <form method="POST">
    @csrf
    @foreach ($rooms as $room)
        <button type="submit" class="!w-full h-12 m-4" id="room{{$room->getRoomID()}}" name="room" value="{{$room->getRoomID()}}">
            <div class="grid grid-cols-6 divide-x h-12 m-4">
                <div>{{$room->getRoomNumber()}}</div>
                <div>{{$room->getRoomType()}}</div>
                <div>{{$room->getRoomView()}}</div>
                <div>{{$room->getRoomCapacity()}}</div>
                <div>{{$room->getBeds()}}</div>
                <div>{{$room->calculateTotalPrice($reservation)}}</div>
            </div>
        </button>
    @endforeach 
    @endif
    </form>
</body>
</x-MasterLayout>