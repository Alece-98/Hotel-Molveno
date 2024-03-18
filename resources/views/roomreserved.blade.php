<!DOCTYPE html>

<head>
</head>

<body>
    @foreach ($room->getReservations() as $reservation)
        <p>{{$reservation->getReservingGuest()->getFirstName()}} {{$reservation->getReservingGuest()->getLastName()}}</p>
        <p>{{$room->getRoomType()}}</p>
    @endforeach
</body>
