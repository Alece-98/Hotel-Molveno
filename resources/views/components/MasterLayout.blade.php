<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Molveno Lake Resort</title>

    <!-- Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
    </style>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/css/StyleGuide.css', 'resources/css/MasterLayout.css'])

</head>

<body class="gridLayoutContainer">
    <div class="backgroundImgContainer">
        <img class="backgroundImg" src="/images/MolvenoLogo.png" alt="">
    </div>

    <header class="header backgroundColor"></header>
    <header class="header flex">

        <div class="width300"></div>

        <ul class="headerLinks flex">
            <li>
                <h1><a href="/">Reception</a></h1>
            </li>
            {{-- <li>
                <h1><a href="">Housekeeping</a></h1>
            </li> --}}
            {{-- <li>
                <h1><a href="">Maintenance</a></h1>
            </li> --}}
        </ul>

        <div class="imgContainer width300 flex">
            <img class="molvenoLogo" src="/images/MolvenoLogo.png" alt="MolvenoLogo">
        </div>

    </header>

    <nav class="sideNav backgroundColor"></nav>
    <nav class="sideNav flex flexVertical">
        <h2><a href="/MakeReservation">Make Reservation</a></h2>

        <h2><a href="/SeeReservations">See Reservations</a></h2>

        <h2><a href="/RoomOverview">Room Overview</a></h2>

        <form action="{{ route('login') }}" method="GET">
                                @csrf    
                                @method('POST')
                                <button class="loginbutton" type="submit">Login </button>
                            </form>

        <form action="{{ route('logout') }}" method="GET">
                                @csrf    
                                @method('POST')
                                <button class="logoutbutton" type="submit">Logout </button>
                            </form>


    </nav>

    <main class="content">
        {{ $slot }}
    </main>

    <footer class="footer backgroundColor"></footer>
    <footer class="footer flex">
        <div class="imgContainer flex">
            <img class="cap-abelLogo" src="/images/Cap-AbelLogo.png" alt="">
        </div>

    </footer>
</body>

</html>
