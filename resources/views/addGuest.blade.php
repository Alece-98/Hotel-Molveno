@vite(['resources/css/makeReservation.css'])
<x-MasterLayout>
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
<form class="flex reservationContainer" method="POST">
    @csrf
    <div class="column width45 flex flexVertical gap20">
        <div class="flex widthFull">
            <label class="width150" for="firstname">
                <p>First Name:</p>
            </label>
            <input class="flexGrow" name="firstname" id="firstname" type="text" placeholder="John" value="{{old('firstname')}}">
        </div>

        <div class="flex widthFull">
            <label class="width150" for="lastname">
                <p>Last Name:</p>
            </label>
            <input class="flexGrow" name="lastname" id="lastname" type="text" placeholder="Doe" value="{{old('lastname')}}">
        </div>

        <div class="flex widthFull">
            <label class="width150" for="phone">
                <p>Phone Number:</p>
            </label>
            <input class="flexGrow" name="phone" id="phone" type="number" placeholder="0612345678" maxlength="10" value="{{old('phone')}}">
        </div>

        <div class="flex widthFull">
            <label class="width150" for="email">
                <p>E-Mail:</p>
            </label>
            <input class="flexGrow" name="email" id="email" type="text" placeholder="example@hotmail.com" value="{{old('phone')}}">
        </div>

        <div class="flex widthFull">
            <label class="width150" for="streetname">
                <p>Adres:</p>
            </label>
            <input class="flexGrow" name="streetname" id="streetname" type="text" placeholder="Via Bettega" value="{{old('phone')}}">
        </div>

        <div class="flex widthFull">
            <label class="width150" for="housenumber">
                <p>House Number:</p>
            </label>
            <input class="flexGrow" name="housenumber" id="housenumber" type="number" placeholder="12" value="{{old('housenumber')}}">
        </div>

        <div class="flex widthFull">
            <label class="width150" for="city">
                <p>City:</p>
            </label>
            <input class="flexGrow" name="city" id="city" type="text" placeholder="Molveno" value="{{old('city')}}">
        </div>

        <div class="flex widthFull">
            <label class="width150" for="zipcode">
                <p>Zip Code:</p>
            </label>
            <input class="flexGrow" name="zipcode" id="zipcode" type="text" placeholder="38018" value="{{old('zipcode')}}">
        </div>

        <div class="flex widthFull">
            <label class="width150" for="country">
                <p>Country:</p>
            </label>
            <input class="flexGrow" name="country" id="country" type="text" placeholder="Italy" value="{{old('country')}}">
        </div>
        <div class="flex widthFull !justify-around">
            <button onclick="window.location.href='/selectReservationRoom'" type="button">Go back</button>
            @if ($reservation->getPeopleLeftToReserve() > 1)
            <button type="submit">Add next guest</button>
            @else
            <button type="submit">Complete Reservation</button>
            @endif
        </div>
        {{-- <button type="submit">Gast toevoegen</button> --}}
    </div>
</form>
</x-MasterLayout>
