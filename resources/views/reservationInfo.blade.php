@vite(['resources/css/makeReservation.css'])
<x-MasterLayout>
    <form class="flex reservationContainer" method="POST">
        @csrf
        <div class="column width45 flex flexVertical gap20">
            <div class="flex widthFull">
                <label class="width150" for="firstname">
                    <p>First Name:</p>
                </label>
                <p class="flexGrow">{{ $guestInfo->first_name }}</p>
            </div>

            <div class="flex widthFull">
                <label class="width150" for="lastname">
                    <p>Last Name:</p>
                </label>
                <p class="flexGrow">{{ $guestInfo->last_name }}</p>
            </div>

            <div class="flex widthFull">
                <label class="width150" for="phone">
                    <p>Phone Number:</p>
                </label>
                <p class="flexGrow">{{ $guestInfo->phone }}</p>
            </div>

            <div class="flex widthFull">
                <label class="width150" for="email">
                    <p>E-Mail:</p>
                </label>
                <p class="flexGrow">{{ $guestInfo->email }}</p>
            </div>

            <div class="flex widthFull">
                <label class="width150" for="streetname">
                    <p>Adres:</p>
                </label>
                <p class="flexGrow">{{ $guestInfo->street_name }}</p>
            </div>

            <div class="flex widthFull">
                <label class="width150" for="housenumber">
                    <p>House Number:</p>
                </label>
                <p class="flexGrow">{{ $guestInfo->house_number }}</p>
            </div>

            <div class="flex widthFull">
                <label class="width150" for="city">
                    <p>City:</p>
                </label>
                <p class="flexGrow">{{ $guestInfo->city }}</p>
            </div>

            <div class="flex widthFull">
                <label class="width150" for="zipcode">
                    <p>Zip Code:</p>
                </label>
                <p class="flexGrow">{{ $guestInfo->zipcode }}</p>
            </div>

            <div class="flex widthFull">
                <label class="width150" for="country">
                    <p>Country:</p>
                </label>
                <p class="flexGrow">{{ $guestInfo->country }}</p>
            </div>

            <div class="flexGrow"></div>
        </div>

        <div class="column width55 flex flexVertical gap20">
            <div class="gap20 flex widthFull">
                <div class="column withHalf">
                    <label class="width100" for="adults">
                        <p>Adults:</p>
                    </label>
                    <p class="flexGrow">{{ $guestRoomInfo->adults }}</p>
                </div>

                <div class="column withHalf">
                    <label class="width100" for="children">
                        <p>Children: *</p>
                    </label>
                    <p class="flexGrow">{{ $guestRoomInfo->children }}</p>
                </div>
            </div>

            <div class="gap20 flex widthFull">
                <div class="column withHalf">
                    <label class="width100" for="roomtype">
                        <p>Room Type:</p>
                    </label>
                    <p class="flexGrow">{{ $roomInfo->type }}</p>
                </div>

                <div class="column withHalf">
                    <label class="width100" for="roomview">
                        <p>View:</p>
                    </label>
                    <p class="flexGrow">{{ $roomInfo->view }}</p>
                </div>
            </div>

            <div class="gap20 flex widthFull normalHeight">
                <div class="column withHalf checkBox">
                    <label class="width100" for="babybed">
                        <p>Baby Bed:</p>
                    </label>
                    <input disabled name="babybed" id="babybed" type="checkbox"
                        {{ $guestRoomInfo->baby_bed === 1 ? 'checked' : null }}>
                </div>

                <div class="column withHalf checkBox">
                    <label class="width100" for="handicap">
                        <p>Handicap:</p>
                    </label>
                    <input disabled name="handicap" id="handicap" type="checkbox" disabled>
                </div>
            </div>

            <div class="gap20 flex widthFull">
                <div class="column withHalf">
                    <label class="width100" for="arrival">
                        <p>Arrival:</p>
                    </label>
                    <input disabled class="smallInput textboxinput" name="arrival" id="arrival" type="date"
                        value="{{ $arrivalDate }}">
                </div>

                <div class="column withHalf">
                    <label class="width100" for="departure">
                        <p>Departure:</p>
                    </label>
                    <input disabled class="smallInput textboxinput" name="departure" id="departure" type="date"
                        value="{{ $departureDate }}">
                </div>
            </div>

            @if ($guestRoomInfo->comment != null)
                <div class="flex widthFull comment">
                    <label class="width100 paddin8" for="comments">Comments:</label>
                    <textarea class="flexGrow textArea" name="comments" id="comments" cols="30" rows="10" placeholder=""
                        disabled>{{ $guestRoomInfo->comment }}</textarea>
                </div>
            @endif

            <div class="gap20 flex widthFull left">
                <p>Room Number: {{ $roomInfo->number }}</p>
            </div>

            <div class="flexGrow"></div>
        </div>
    </form>
</x-MasterLayout>
