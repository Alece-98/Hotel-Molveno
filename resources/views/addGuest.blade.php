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
        <button type="submit">Gast toevoegen</button>


        <div class=" {{ $hidden }}">
            <a href="{{"/extraGuest/"}}" >
            <button type="button" class="label label-default pull-xs-right">Add Extra Guest</button></a>
        </div>
    </div>
</form>
</x-MasterLayout>
