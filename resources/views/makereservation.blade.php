<!DOCTYPE html>
<html>
    <head>
    </head>
<body>
    <form method="POST">
        @csrf
        <div>
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" id="firstname" required/>
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" id="lastname" required/>
            <label for="phone">Phone Number:</label>
            <input type="tel" name="phone" id="phone" required/>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required/>
            <label for="streetname">Street Name:</label>
            <input type="text" name="streetname" id="streetname" required/>
            <label for="housenumber">House Number:</label>
            <input type="number" name="housenumber" id="housenumber" min="1" required/>
            <label for="housenumberaddition">Number Addition:</label>
            <input type="text" name="housenumberaddition" id="housenumberaddition"/>
            <label for="city">City:</label>
            <input type="text" name="city" id="city" required/>
            <label for="zipcode">Zipcode:</label>
            <input type="text" name="zipcode" id="zipcode" required/>
            <label for="country">Country</label>
            <input type="text" name="country" id="country" required/>
        </div>
        <div>
            <label for="adults">Adults:</label>
            <input type="number" name="adults" id="adults" required/>
            <label for="children">Children:</label>
            <input type="number" name="children" id="children" required/>
            <label for="roomtype">Room type:</label>
            <select name="roomtype" id="roomtype" required>
                <option value="Economy">Economy</option>
                <option value="Standard" selected>Standard</option>
                <option value="Luxurious">Luxurious</option>
            </select>
            <label for="roomview" >Room view:</label>
            <select name="roomview" id="roomview" required>
                <option value="Standard" selected>Standard</option>
                <option value="Mountain">Mountain</option>
                <option value="Lake">Lake</option>
            </select>
            <label for="babybed">Baby Bed: </label>
            <input type="checkbox" name="babybed" id="babybed"/>
            <label for="handicap">Handicap accessible: </label>
            <input type="checkbox" name="handicap" id="handicap"/>
            <label for="arrival">Arrival</label>
            <input type="date" name="arrival" id="arrival">
            <label for="departure">Departure</label>
            <input type="date" name="departure" id="departure">
            <label for="comments">Comments:</label>
            <textarea></textarea>
            

        </div>


        <input type="submit"></input>
        
</body>

</html>