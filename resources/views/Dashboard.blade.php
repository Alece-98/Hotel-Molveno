<x-MasterLayout>
    @foreach ($reservations as $reservation)
        <p>{{ $reservation->room_id }}</p>
        <p>{{ $reservation->arrival }}</p>
        <p>{{ $reservation->departure }}</p>
        <br>
    @endforeach
</x-MasterLayout>
