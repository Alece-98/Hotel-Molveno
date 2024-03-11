@vite(['resources/css/makeReservation.css'])
<x-MasterLayout>
    <form class="flex reservationContainer">
        <div class="column width45 flex flexVertical gap20">
            <div class="flex widthFull">
                <label class="width150" for="FirstName">
                    <p>First Name:</p>
                </label>
                <input class="flexGrow" id="FirstName" type="text" placeholder="John">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="LastName">
                    <p>Last Name:</p>
                </label>
                <input class="flexGrow" id="LastName" type="text" placeholder="Doe">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="Phone">
                    <p>Phone Number:</p>
                </label>
                <input class="flexGrow" id="Phone" type="number" placeholder="0612345678" maxlength="10">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="Mail">
                    <p>E-Mail:</p>
                </label>
                <input class="flexGrow" id="Mail" type="text" placeholder="example@hotmail.com">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="Adres">
                    <p>Adres:</p>
                </label>
                <input class="flexGrow" id="Adres" type="text" placeholder="Via Bettega">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="HouseNumber">
                    <p>House Number:</p>
                </label>
                <input class="flexGrow" id="HouseNumber" type="number" placeholder="12">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="City">
                    <p>City:</p>
                </label>
                <input class="flexGrow" id="City" type="text" placeholder="Molveno">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="ZipCode">
                    <p>Zip Code:</p>
                </label>
                <input class="flexGrow" id="ZipCode" type="text" placeholder="38018">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="Country">
                    <p>Country:</p>
                </label>
                <input class="flexGrow" id="Country" type="text" placeholder="Italy">
            </div>

            <div class="flexGrow"></div>
        </div>

        <div class="column width55 flex flexVertical gap20">
            <div class="gap20 flex widthFull">
                <div class="column withHalf">
                    <label class="width100" for="adults">
                        <p>Adults:</p>
                    </label>
                    <input class="smallInput" id="adults" type="number" placeholder="2">
                </div>

                <div class="column withHalf">
                    <label class="width100" for="children">
                        <p>Children: *</p>
                    </label>
                    <input class="smallInput" id="children" type="number" placeholder="0">
                </div>
            </div>

            <div class="gap20 flex widthFull">
                <div class="column withHalf">
                    <label class="width100" for="RoomType">
                        <p>Room Type:</p>
                    </label>
                    <select class="smallInput normalizeStyle" name="RoomType" id="RoomType">
                        <option value="Economy">Economy</option>
                        <option value="Standard">Standard</option>
                        <option value="Luxurious">Luxurious</option>
                    </select>
                </div>

                <div class="column withHalf">
                    <label class="width100" for="View">
                        <p>View:</p>
                    </label>
                    <select class="smallInput normalizeStyle" name="View" id="View">
                        <option value="Standard">Standard</option>
                        <option value="Lake">Lake</option>
                        <option value="Mountain">Mountain</option>
                    </select>
                </div>
            </div>

            <div class="gap20 flex widthFull normalHeight">
                <div class="column withHalf checkBox">
                    <label class="width100" for="BabyBed">
                        <p>Baby Bed:</p>
                    </label>
                    <input id="BabyBed" type="checkbox">
                </div>

                <div class="column withHalf checkBox">
                    <label class="width100" for="Handicap">
                        <p>Handicap:</p>
                    </label>
                    <input id="Handicap" type="checkbox">
                </div>
            </div>

            <div class="gap20 flex widthFull">
                <div class="column withHalf">
                    <label class="width100" for="Arrival">
                        <p>Arrival:</p>
                    </label>
                    <input class="smallInput" id="Arrival" type="date">
                </div>

                <div class="column withHalf">
                    <label class="width100" for="Departure">
                        <p>Departure:</p>
                    </label>
                    <input class="smallInput" id="Departure" type="date">
                </div>
            </div>

            <div class="flex widthFull comment">
                <label class="width100 paddin8" for="Comment">Comments:</label>
                <textarea class="flexGrow textArea" name="Comment" id="Comment" cols="30" rows="10" placeholder="Enter comment here."></textarea>
            </div>

            <div class="flexGrow"></div>

            <div class="flex widthFull spaceBetween">
                <label for="">* Younger than 13 years old</label>
                <button type="submit">Check Availability</button>
            </div>
        </div>
    </form>
</x-MasterLayout>
