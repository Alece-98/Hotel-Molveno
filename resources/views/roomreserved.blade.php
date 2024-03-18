<!DOCTYPE html>
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
    <div class="grid grid-cols-5 divide-x h-12 m-4">
        <div class=">{{$room->getRoomNumber()}}</div>
        <div>{{$room->getRoomType()}}</div>
        <div>{{$room->getRoomView()}}</div>
        <div>{{$room->getRoomCapacity()}}</div>
        <div>{{$room->getBeds()}}</div>

    </div>
    @endforeach
</body>
</x-MasterLayout>