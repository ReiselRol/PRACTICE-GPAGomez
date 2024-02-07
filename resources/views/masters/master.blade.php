<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/master.css">
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
                </tr>
            </table>
        </div>
    </body>
</html>