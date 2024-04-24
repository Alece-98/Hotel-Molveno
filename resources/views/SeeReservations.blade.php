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
                        @foreach ($reservation->guests as $guest)
                    
                        <tr>
                            
                            <td class="guest-name" > {{ $guest->getFirstName () }}  {{ $guest->getLastName() }} </td> 
                            <td class="arrival">{{ $reservation->arrival }} </td> 
                            <td class="departure">{{ $reservation->departure }} </td> 
                            <td class="departure"> 
                            <form action="{{ route('VerwijderReservering.destroy', $reservation->id) }}" method="POST">
                                @csrf    
                                @method('DELETE')
                                <button class="reservationButtons" type="submit">Verwijder {{ $reservation->id }}</button>
                            </form>
                            </td> 
                            <td class="departure"> 
                            <form action="{{ route('CheckIn.post', $reservation->id) }}" method="POST">
                                @csrf    
                                @method('POST')
                                <button class="reservationButtons" type="submit">Check in {{ $reservation->id }}</button>
                            </form>
                            </td> 
                            <td class="departure">{{ $reservation->comment }} </td> 


                        </tr>
                    @endforeach
                    @endforeach
                </tbody>
            </table>
        @endif
    @endforeach
 


    

    
</body>
</html>

</x-MasterLayout> 
