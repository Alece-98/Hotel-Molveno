@vite(['resources/css/makeReservation.css'])
<x-MasterLayout>
    <form class="flex reservationContainer justify-center" method="POST">
        @csrf
            @if ($errors->any())
                <script>
                    var errors = "";
                    @foreach ($errors->all() as $error)
                        var error = {!! json_encode($error) !!}; //Escaping is nodig hier, deze errors worden alleen getoond!
                        errors += error + "\n";
                    @endforeach
                    alert(errors);
                </script>
            @endif
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
                <label class="width100 paddin8" for="comment">Comment:</label>
                <textarea class="flexGrow textArea" name="comment" id="comment" cols="30" rows="10" placeholder="Enter comment here."></textarea>
            </div>

            <div class="flexGrow"></div>

            <div class="flex widthFull spaceBetween">
                <label for="">* Younger than 13 years old</label>
                <button type="submit">Check Availability</button>
            </div>
        </div>
    </form>
</x-MasterLayout>