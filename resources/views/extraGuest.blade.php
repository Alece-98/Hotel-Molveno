@vite(['resources/css/makeReservation.css'])
<x-MasterLayout>
    <form class="flex reservationContainer" method="POST" action="{{ route('extraGuest.store') }}" >
        @csrf
        @if(session()->has('success'))
    <p>
        {{ session()->get('success') }}
    </p>
@endif

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
        <div class="column width45 flex flexVertical gap20">
            <div class="flex widthFull">
                <label class="width150" for="extraGuestName">
                    <p>First Name:</p>
                </label>
                <input class="flexGrow" id="extraGuestName" name="extraGuestName" type="text" placeholder="John">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="extraGuestLastName">
                    <p>Last Name:</p>
                </label>
                <input class="flexGrow" id="extraGuestLastName" name="extraGuestLastName" type="text" placeholder="Doe">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="extraGuestPhone">
                    <p>Phone Number:</p>
                </label>
                <input class="flexGrow" id="extraGuestPhone" name="extraGuestPhone" type="number" placeholder="0612345678" maxlength="10">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="extraGuestEmail">
                    <p>E-Mail:</p>
                </label>
                <input class="flexGrow" id="extraGuestEmail" name="extraGuestEmail" type="text" placeholder="example@hotmail.com">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="extraGuestAdress>">
                    <p>Adress:</p>
                </label>
                <input class="flexGrow" id="extraGuestAdress" name="extraGuestAdress" type="text" placeholder="Via Bettega">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="extraGuestHouseNumber">
                    <p>House Number:</p>
                </label>
                <input class="flexGrow" id="extraGuestHouseNumber" name="extraGuestHouseNumber" type="number" placeholder="12">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="extraGuestCity">
                    <p>City:</p>
                </label>
                <input class="flexGrow" id="extraGuestCity" name="extraGuestCity" type="text" placeholder="Molveno">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="extraGuestZipcode">
                    <p>Zip Code:</p>
                </label>
                <input class="flexGrow" id="extraGuestZipcode" name="extraGuestZipcode" type="text" placeholder="38018">
            </div>

            <div class="flex widthFull">
                <label class="width150" for="extraGuestCountry">
                    <p>Country:</p>
                </label>
                <input class="flexGrow" id="extraGuestCountry" name="extraGuestCountry" type="text" placeholder="Italy">
            </div>

            <div class="flexGrow"></div>
        </div>

        <div class="flex widthFull spaceBetween">
            <button type="submit">Add Guest</button>
        </div>
    </form>
</x-MasterLayout>





