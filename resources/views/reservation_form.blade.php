<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservering Berekening</title>
</head>
<body>
    <form action="{{ url('/calculate-reservation-cost') }}" method="GET">
        <label for="type">Kamertype:</label>
        <select name="type" id="type">
            <option value="economy">Economy</option>
            <option value="standard">Standaard</option>
            <option value="luxury">Luxe</option>
        </select><br>

        <label for="days">Aantal dagen:</label>
        <input type="number" id="days" name="days" min="1" value="1"><br>

        <label for="needBabyBed">Babybed nodig:</label>
        <input type="checkbox" id="needBabyBed" name="needBabyBed" value="1"><br>

        <label for="adultBreakfast">Aantal volwassenen voor ontbijt:</label>
        <input type="number" id="adultBreakfast" name="adultBreakfast" min="0" value="0"><br>

        <label for="childBreakfast">Aantal kinderen voor ontbijt:</label>
        <input type="number" id="childBreakfast" name="childBreakfast" min="0" value="0"><br>

        <input type="submit" value="Bereken Prijs">
    </form>
</body>
</html>
