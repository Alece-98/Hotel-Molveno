@vite(['resources/css/roomOverview.css'])
<x-MasterLayout>
    <div class="overviewContainer flex flexVertical">
        <div class="listHeader">
            <p class="fixedWidth">Room Number</p>
            <p class="fixedWidth">Room Class</p>
            <p class="fixedWidth">View</p>
            <p class="fixedWidth">Guest Capacity</p>
            <p class="fixedWidth">Beds</p>
        </div>

        <div class="listRow blocked">
            <p class="fixedWidth">1.01</p>
            <p class="fixedWidth">Economy</p>
            <p class="fixedWidth">Standard</p>
            <p class="fixedWidth">2</p>
            <p class="fixedWidth">2 Single</p>
        </div>

        <div class="listRow occupied">
            <p class="fixedWidth">1.02</p>
            <p class="fixedWidth">Economy</p>
            <p class="fixedWidth">Standard</p>
            <p class="fixedWidth">2</p>
            <p class="fixedWidth">2 Single</p>
        </div>

        <div class="listRow available">
            <p class="fixedWidth">1.03</p>
            <p class="fixedWidth">Economy</p>
            <p class="fixedWidth">Standard</p>
            <p class="fixedWidth">2</p>
            <p class="fixedWidth">1 Double</p>
        </div>
    </div>

</x-MasterLayout>
