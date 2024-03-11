<!DOCTYPE HTML>

<head>

</head>

<body>
    <table>
        <tr>
            <th>Room number</th>
        </tr>
        @foreach ($rooms as $room)
        <tr>
            <td>{{$room->getRoomNumber()}}</td>
        </tr>
        @endforeach
    </table>
</body>