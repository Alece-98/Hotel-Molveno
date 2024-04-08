<x-MasterLayout>

    <title>Alle Reserveringen</title>
    <style>
        table {
            width: 100%;
            
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        
        .guest-name {
            width: 30%; 
        }

        .arrival, .departure {
            width: 20%
        }

        .date {
            margin-left: 20px;
        }
        
    </style>
</head>
<body>
    
@foreach ($roomsWithReservations as $room)
        @if (!$room->reservations->isEmpty()) 
            <p>Kamer: {{ $room->room_number }} - Type: {{ $room->room_type ?? 'Niet gespecificeerd' }}</p>
            <table>
                <thead>
                    <tr>
                         <th class="guest-name">Gast Naam</th>
                         <th class="arrival"></th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($room->reservations as $reservation)
                        <tr>

                            <td>{{ $reservation->guest }}</td> 
                            <td> arrival: <span class="date">{{ $reservation->arrival }} </span></td> 
                            <td> departure: <span class="date">{{ $reservation->departure }} </span></td> 
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @endforeach
</body>
</html>

</x-MasterLayout>