@vite(['resources/css/SeeReservations.css'])

<x-MasterLayout>
    <title>Alle Reserveringen</title>
    <div class="p-10">
        @foreach ($roomsWithReservations as $room)
            @if (!$room->reservations->isEmpty() && $room->reservations->first()->guests->count() > 0)
                <p>Kamer: {{ $room->number }} - Type: {{ $room->type ?? 'Niet gespecificeerd' }}</p>
                <table class="w-full">

                    <tbody>
                        @foreach ($room->reservations as $reservation)
                            @if (is_null($reservation->old))
                                <tr class="grid grid-cols-[2fr_1fr_1fr_1fr_1fr_1fr_1fr] divide-x gap-0 no-border">

                                    <td>
                                        @foreach ($reservation->guests as $guest)
                                            @if ($loop->index == count($reservation->guests) - 1)
                                                <a href="/SingleReservation/{{ $reservation->id }}">{{ $guest->getFirstName() }} {{ $guest->getLastName() }}</a>
                                            @else
                                                <a href="/SingleReservation/{{ $reservation->id }}">{{ $guest->getFirstName() }} {{ $guest->getLastName() }},</a>
                                            @endif
                                        @endforeach

                                    </td>

                                    @foreach ($reservation->guests as $guest)
                                        <td ><a href="/SingleReservation/{{ $reservation->id }}">{{ $guest->phone }} </a></td>
                                    @break
                                @endforeach


                                <td><a href="/SingleReservation/{{ $reservation->id }}">{{ $reservation->getFormattedArrival() }} </a></td>
                                <td><a href="/SingleReservation/{{ $reservation->id }}">{{ $reservation->getFormattedDeparture() }} </a></td>
                                <td>
                                    <form action="{{ route('VerwijderReservering.post', $reservation->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('POST')
                                        <button class="reservationButtons" type="submit">Verwijder</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('CheckIn.post', $reservation->id) }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button class="reservationButtons" type="submit">Check in</button>
                                    </form>
                                </td>
                                <td>{{ $reservation->check_in }} </td>


                            </tr>
                        @endif
                    @endforeach

                </tbody>
            </table>
        @endif
    @endforeach
    </div>
</x-MasterLayout>
