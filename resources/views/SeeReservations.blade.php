@vite(['resources/css/SeeReservations.css'])

<x-MasterLayout>

    <title>Alle Reserveringen</title>

</head>
<body>

 @foreach ($roomsWithReservations as $room)
        @if (!$room->reservations->isEmpty()) 
            <p>Kamer: {{ $room->number }} - Type: {{ $room->type ?? 'Niet gespecificeerd' }}</p>
            <table>
                
                <tbody>
                    @foreach ($room->reservations as $reservation)
                    @if (is_null($reservation->old))
                        <tr>  

                            <td class="guest-name" > 
                            @foreach ($reservation->guests as $guest)
                            @if($loop->index == count($reservation->guests) - 1)
                            {{ $guest->getFirstName () }}  {{ $guest->getLastName() }}
                            @else
                            {{ $guest->getFirstName () }}  {{ $guest->getLastName() }},
                            @endif
                            @endforeach

                            </td> 
                            <td class="arrival">{{ $reservation->arrival }} </td> 
                            <td class="departure">{{ $reservation->departure }} </td> 
                            <td class="departure"> 
                            <form action="{{ route('VerwijderReservering.post', $reservation->id) }}" method="POST">
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

