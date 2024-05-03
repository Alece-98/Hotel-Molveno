@vite(['resources/css/SeeReservations.css'])

<x-MasterLayout>

    <title>Alle Reserveringen</title>

    </head>

    <body>

        @foreach ($roomsWithReservations as $room)
            @if (!$room->reservations->isEmpty())
                <p>Kamer: {{ $room->number }} - Type: {{ $room->type ?? 'Niet gespecificeerd' }}</p>
                <table style="width:100%">

                    <tbody style="width:100%">
                        @foreach ($room->reservations as $reservation)
                            @if (is_null($reservation->old))
                                <tr style="width:100%">

                                    <td class="guest-name">
                                        @foreach ($reservation->guests as $guest)
                                            @if ($loop->index == count($reservation->guests) - 1)
                                                <a href="/SingleReservation/{{ $reservation->id }}">{{ $guest->getFirstName() }} {{ $guest->getLastName() }}</a>
                                            @else
                                                <a href="/SingleReservation/{{ $reservation->id }}">{{ $guest->getFirstName() }} {{ $guest->getLastName() }},</a>
                                            @endif
                                        @endforeach

                                    </td>

                                    @foreach ($reservation->guests as $guest)
                                        <td class="arrival"><a href="/SingleReservation/{{ $reservation->id }}">{{ $guest->phone }} </a></td>
                                    @break
                                @endforeach


                                <td class="arrival"><a href="/SingleReservation/{{ $reservation->id }}">{{ $reservation->arrival }} </a></td>
                                <td class="departure"><a href="/SingleReservation/{{ $reservation->id }}">{{ $reservation->departure }} </a></td>
                                <td class="departure">
                                    <form action="{{ route('VerwijderReservering.post', $reservation->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('POST')
                                        <button class="reservationButtons" type="submit">Verwijder</button>
                                    </form>
                                </td>
                                <td class="departure">
                                    <form action="{{ route('CheckIn.post', $reservation->id) }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button class="reservationButtons" type="submit">Check in</button>
                                    </form>
                                </td>
                                <td class="departure">{{ $reservation->check_in }} </td>


                            </tr>
                        @endif
                    @endforeach

                </tbody>
            </table>
        @endif
    @endforeach


</body>

</html>

</x-MasterLayout>
