<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/master.css">
        <script src="javascript/menuAnimation.js" defer></script>
        @yield('extraHead')
    </head>
    <body>
        <div id="Navbar" class="navbarSizeAndPosition">
            <table id="NavbarTable" class="navbarTableSize">
                <tr id="NavbarTableTr" class="navbarTableTrSize">
                    <td id="NavbarHambuergerTd" class="navbarHambuergerTd">
                        <img src="imgs/HamburgerIcon.png" id="HamburgerIcon" class="hamburgerImg">
                    </td>
                    <td id="NavbarTitle" class="navbarTitle">
                        GPAGomez
                    </td>
                    <td id="NavbarUser" class="navbarLoginTd">
                        @if (Route::has('login'))
                            @auth
                            <a href="{{ url('/dashboard') }}"><img src="imgs/LogedUserIcon.png" class="LogedIconClass"/></a>
                            @else
                            <a href="{{ route('login') }}"><button class="navbarButtonLogin">Log in</button></a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}"><button class="navbarButtonLogin">Register</button></a>
                            @endif
                            @endauth
                        @endif
                    </td>
                </tr>
            </table>
        </div>
        <div id="LateralBar" class="lateralBar lateralBarUnctived">

        </div>
        <div id="theScreen" class="allScreen normalScreen">
    </body>
</html>