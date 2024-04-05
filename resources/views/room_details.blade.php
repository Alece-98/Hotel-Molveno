<!DOCTYPE html>
<html>
<head>
    <title>Kamer Info</title>
</head>
<body>
    <h1>Kamer info: {{ $room->room_number }}</h1>
    <p>Type: {{ $room->room_type }}</p>
    <p>Vieuw: {{ $room->room_view }}</p>
    <p>Max personen: {{ $room->room_capacity }}</p>
    <p>Bedden info: {{ $room->bed_description }}</p>
    <p>Baby Bed: {{ $room->baby_bed }}</p>
    <p>Toegankelijk voor gehandicapten: {{ $room->handicap_accessible }}</p>
    <p>Prijs per Nacht: €{{ $room->price_per_night }}</p>
</body>
</html>
