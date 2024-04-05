<x-MasterLayout>
    <p>{{ $dateToday }}</p><br><br>
    
    @foreach ($temp as $item)
        <p>{{$item}}</p>
    @endforeach

    <br><br>

    @foreach ($reservations as $reservation)
        <p>reservationID: {{ $reservation->id }}</p>
        <p>roomID: {{ $reservation->room_id }}</p>
        <p>Arrival: {{ $reservation->arrival }}</p>
        <p>Departure: {{ $reservation->departure }}</p>
        <br>
    @endforeach
</x-MasterLayout>
