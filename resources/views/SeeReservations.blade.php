@vite(['resources/css/SeeReservations.css'])

<x-MasterLayout>

    <title>Alle Reserveringen</title>

    </head>

    <body>

        <div class="padding20">
            @foreach ($roomsWithReservations as $room)
                @if (!$room->reservations->isEmpty())
                    <p>Kamer: {{ $room->number }} - Type: {{ $room->type ?? 'Niet gespecificeerd' }}</p>
                    <table>

                        <tbody>
                            @foreach ($room->reservations as $reservation)
                                @foreach ($reservation->guests as $guest)
                                    <tr>
                                        <td> <a href="SingleReservation/{{$reservation->id}}">{{ $room->number }}</a></td>
                                        <td class="guest-name"><a href="SingleReservation/{{$reservation->id}}"> {{ $guest->getFirstName() }}
                                                {{ $guest->getLastName() }}</a>
                                        </td>
                                        <td class="arrival"> <a href="SingleReservation/{{$reservation->id}}">{{ $reservation->arrival }} </a></td>
                                        <td class="departure"> <a href="SingleReservation/{{$reservation->id}}">{{ $reservation->departure }} </a></td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                @endif
            @endforeach
        </div>







    </body>

    </html>

</x-MasterLayout>
