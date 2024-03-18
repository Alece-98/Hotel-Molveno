
@vite(['resources/css/makeReservation.css'])
<x-MasterLayout>
    <form class="flex reservationContainer" method="POST">
        @csrf
        <div class="column width45 flex flexVertical gap20">
            <div class="flex widthFull">
                <label class="width150" for="firstname">
                    <p>First Name:</p>
                </label>
                <input class="flexGrow" id="firstname" name="firstname" type="text" placeholder="John">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="lastname">
                    <p>Last Name:</p>
                </label>
                <input class="flexGrow" id="lastname" name="lastname" type="text" placeholder="Doe">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="phone">
                    <p>Phone Number:</p>
                </label>
                <input class="flexGrow" id="phone" name="phone" type="number" placeholder="0612345678" maxlength="10">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="email">
                    <p>E-Mail:</p>
                </label>
                <input class="flexGrow" id="email" name="email" type="text" placeholder="example@hotmail.com">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="streetname">
                    <p>Adres:</p>
                </label>
                <input class="flexGrow" id="streetname" name="streetname" type="text" placeholder="Via Bettega">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="housenumber">
                    <p>House Number:</p>
                </label>
                <input class="flexGrow" id="housenumber" name="housenumber" type="number" placeholder="12">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="city">
                    <p>City:</p>
                </label>
                <input class="flexGrow" id="city" name="city" type="text" placeholder="Molveno">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="zipcode">
                    <p>Zip Code:</p>
                </label>
                <input class="flexGrow" id="zipcode" name="zipcode" type="text" placeholder="38018">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="country">
                    <p>Country:</p>
                </label>
                <input class="flexGrow" id="country" name="country" type="text" placeholder="Italy">
            </div>

            <div class="flexGrow"></div>
        </div>

        <div class="column width55 flex flexVertical gap20">
            <div class="gap20 flex widthFull">
                <div class="column withHalf">
                    <label class="width100" for="adults">
                        <p>Adults:</p>
                    </label>
                    <input class="smallInput" id="adults" name="adults" type="number" placeholder="2">
                </div>

                <div class="column withHalf">
                    <label class="width100" for="children">
                        <p>Children: *</p>
                    </label>
                    <input class="smallInput" id="children" name="children" type="number" placeholder="0">
                </div>
            </div>

            <div class="gap20 flex widthFull">
                <div class="column withHalf">
                    <label class="width100" for="roomtype">
                        <p>Room Type:</p>
                    </label>
                    <select class="smallInput normalizeStyle" name="roomtype" id="roomtype">
                        <option value="Economy">Economy</option>
                        <option value="Standard">Standard</option>
                        <option value="Luxurious">Luxurious</option>
                    </select>
                </div>

                <div class="column withHalf">
                    <label class="width100" for="roomview">
                        <p>View:</p>
                    </label>
                    <select class="smallInput normalizeStyle" name="roomview" id="roomview">
                        <option value="Standard">Standard</option>
                        <option value="Lake">Lake</option>
                        <option value="Mountain">Mountain</option>
                    </select>
                </div>
            </div>

            <div class="gap20 flex widthFull normalHeight">
                <div class="column withHalf checkBox">
                    <label class="width100" for="babybed">
                        <p>Baby Bed:</p>
                    </label>
                    <input id="babybed" name="babybed" type="checkbox">
                </div>

                <div class="column withHalf checkBox">
                    <label class="width100" for="handicap">
                        <p>Handicap:</p>
                    </label>
                    <input id="handicap" name="handicap" type="checkbox">
                </div>
            </div>

            <div class="gap20 flex widthFull">
                <div class="column withHalf">
                    <label class="width100" for="arrival">
                        <p>Arrival:</p>
                    </label>
                    <input class="smallInput" id="arrival" name="arrival" type="date">
                </div>

                <div class="column withHalf">
                    <label class="width100" for="departure">
                        <p>Departure:</p>
                    </label>
                    <input class="smallInput" id="departure" name="departure" type="date">
                </div>
            </div>

            <div class="flex widthFull comment">
                <label class="width100 paddin8" for="comments">Comments:</label>
                <textarea class="flexGrow textArea" name="comments" id="comments" cols="30" rows="10" placeholder="Enter comment here."></textarea>
            </div>

            <div class="flexGrow"></div>

            <div class="flex widthFull spaceBetween">
                <label for="">* Younger than 13 years old</label>
                <button type="submit">Check Availability</button>
            </div>
        </div>
    </form>
</x-MasterLayout>

