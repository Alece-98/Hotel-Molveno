@vite(['resources/css/makeReservation.css'])
<x-MasterLayout>
    <form class="flex reservationContainer" method="POST">
        @csrf
        <div class="column width45 flex flexVertical gap20">
            <div class="flex widthFull">
                <label class="width150" for="firstname">
                    <p>First Name:</p>
                </label>
                <input class="flexGrow" name="firstname" id="firstname" type="text" placeholder="John">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="lastname">
                    <p>Last Name:</p>
                </label>
                <input class="flexGrow" name="lastname" id="lastname" type="text" placeholder="Doe">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="phone">
                    <p>Phone Number:</p>
                </label>
                <input class="flexGrow" name="phone" id="phone" type="number" placeholder="0612345678" maxlength="10">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="email">
                    <p>E-Mail:</p>
                </label>
                <input class="flexGrow" name="email" id="email" type="text" placeholder="example@hotmail.com">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="streetname">
                    <p>Adres:</p>
                </label>
                <input class="flexGrow" name="streetname" id="streetname" type="text" placeholder="Via Bettega">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="housenumber">
                    <p>House Number:</p>
                </label>
                <input class="flexGrow" name="housenumber" id="housenumber" type="number" placeholder="12">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="city">
                    <p>City:</p>
                </label>
                <input class="flexGrow" name="city" id="city" type="text" placeholder="Molveno">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="zipcode">
                    <p>Zip Code:</p>
                </label>
                <input class="flexGrow" name="zipcode" id="zipcode" type="text" placeholder="38018">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="country">
                    <p>Country:</p>
                </label>
                <input class="flexGrow" name="country" id="country" type="text" placeholder="Italy">
            </div>

            <div class="flexGrow"></div>
        </div>

        <div class="column width55 flex flexVertical gap20">
            <div class="gap20 flex widthFull">
                <div class="column withHalf">
                    <label class="width100" for="adults">
                        <p>Adults:</p>
                    </label>
                    <input class="smallInput" name="adults" id="adults" type="number" placeholder="2">
                </div>

                <div class="column withHalf">
                    <label class="width100" for="children">
                        <p>Children: *</p>
                    </label>
                    <input class="smallInput" name="children" id="children" type="number" placeholder="0">
                </div>
            </div>

            <div class="gap20 flex widthFull">
                <div class="column withHalf">
                    <label class="width100" for="roomtype">
                        <p>Room Type:</p>
                    </label>
                    <select class="smallInput normalizeStyle" name="roomtype" id="roomtype">
                        <option value="Economy" selected>Economy</option>
                        <option value="Standard">Standard</option>
                        <option value="Luxurious">Luxurious</option>
                    </select>
                </div>

                <div class="column withHalf">
                    <label class="width100" for="roomview">
                        <p>View:</p>
                    </label>
                    <select class="smallInput normalizeStyle" name="roomview" id="roomview">
                        <option value="Standard" selected>Standard</option>
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
                    <input name="babybed" id="babybed" type="checkbox">
                </div>

                <div class="column withHalf checkBox">
                    <label class="width100" for="handicap">
                        <p>Handicap:</p>
                    </label>
                    <input name="handicap" id="handicap" type="checkbox">
                </div>
            </div>

            <div class="gap20 flex widthFull">
                <div class="column withHalf">
                    <label class="width100" for="arrival">
                        <p>Arrival:</p>
                    </label>
                    <input class="smallInput" name="arrival" id="arrival" type="date">
                </div>

                <div class="column withHalf">
                    <label class="width100" for="departure">
                        <p>Departure:</p>
                    </label>
                    <input class="smallInput" name="departure" id="departure" type="date">
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