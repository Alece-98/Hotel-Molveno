<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alle Reserveringen</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        
        
    </style>
</head>
<body>
    <h1>Alle Reserveringen</h1>
    @foreach ($roomsWithReservations as $room)
        <h2>Kamer: {{ $room->room_number }} - Type: {{ $room->room_type ?? 'Niet gespecificeerd' }}</h2>
        @if ($room->reservations->isEmpty())
            <p>Geen reservering voor deze kamer.</p>
        @else
            <table>
                <thead>
                    <tr>
                        
                        <th>Reservering ID</th>
                        <th>Gast Naam</th>
                        <th>Aankomstdatum</th>
                        <th>Vertrekdatum</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($room->reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->id }}</td>
                            <td>{{ $reservation->guest }}</td> 
                            <td>{{ $reservation->arrival }}</td> 
                            <td>{{ $reservation->departure }}</td> 
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @endforeach
</body>
</html>
