<!DOCTYPE html>

<head>
</head>

<body>
    @foreach ($rooms as $room)
        <p>{{$room->getRoomNumber()}}</p>
        <p>{{$room->getRoomType()}}</p>
    @endforeach
</body>
