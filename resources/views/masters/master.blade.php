<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}">
        <script src="{{ asset('javascript/menuAnimation.js') }}" defer></script>
        @yield('extraHead')
    </head>
    <body>
        <div id="Navbar" class="navbarSizeAndPosition">
            <table id="NavbarTable" class="navbarTableSize">
                <tr id="NavbarTableTr" class="navbarTableTrSize">
                    @if (Route::has('login'))
                        @auth
                        <td id="NavbarHambuergerTd" class="navbarHambuergerTd">
                            <img src="{{ asset('imgs/HamburgerIcon.png')}}" id="HamburgerIcon" class="hamburgerImg">
                        </td>
                        @else 
                        <td id="NavbarHambuergerTdInvs" class="navbarHambuergerTdInvs"></td>
                        @endauth
                    @endif
                    <td id="NavbarTitle" class="navbarTitle">
                        <a href="/" class="logo">GPAGomez</a>
                    </td>
                    <td id="NavbarUser" class="navbarLoginTd">
                        @if (Route::has('login'))
                            @auth
                            <a href="{{ url('/dashboard') }}"><img src="{{ asset('imgs/LogedUserIcon.png')}}" class="LogedIconClass"/></a>
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
        @if (Route::has('login'))
            @auth
                <div id="LateralBar" class="lateralBar lateralBarUnctived">
                    <table class="LateralBarTable">
                        <tr class="LateralTableTr">
                            <td class="tdTitle">
                                <label class="MenuTitle">Courses</label>
                            </td>
                        </tr>
                    </table>
                </div>
                <div id="theScreen" class="allScreen normalScreen">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice"><defs><linearGradient id="bg"><stop offset="0%" style="stop-color:rgba(128, 0, 202, 0.4)"></stop><stop offset="100%" style="stop-color:rgba(68, 0, 108, 0.4)"></stop></linearGradient><path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0 s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" /></defs><g><use xlink:href='#wave' opacity=".3"><animateTransform attributeName="transform" attributeType="XML" type="translate" dur="10s" calcMode="spline" values="270 230; -334 180; 270 230" keyTimes="0; .5; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" /></use><use xlink:href='#wave' opacity=".6"><animateTransform attributeName="transform" attributeType="XML" type="translate" dur="8s" calcMode="spline" values="-270 230;243 220;-270 230" keyTimes="0; .6; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" /></use><use xlink:href='#wave' opacity=".9"><animateTransform attributeName="transform" attributeType="XML" type="translate" dur="6s" calcMode="spline" values="0 230;-140 200;0 230" keyTimes="0; .4; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" /></use></g></svg>
                    @yield('content')
                </div>
            @else
                <div id="theScreen" class="allScreenBig normalScreen">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice"><defs><linearGradient id="bg"><stop offset="0%" style="stop-color:rgba(128, 0, 202, 0.4)"></stop><stop offset="100%" style="stop-color:rgba(68, 0, 108, 0.4)"></stop></linearGradient><path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0 s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" /></defs><g><use xlink:href='#wave' opacity=".3"><animateTransform attributeName="transform" attributeType="XML" type="translate" dur="10s" calcMode="spline" values="270 230; -334 180; 270 230" keyTimes="0; .5; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" /></use><use xlink:href='#wave' opacity=".6"><animateTransform attributeName="transform" attributeType="XML" type="translate" dur="8s" calcMode="spline" values="-270 230;243 220;-270 230" keyTimes="0; .6; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" /></use><use xlink:href='#wave' opacity=".9"><animateTransform attributeName="transform" attributeType="XML" type="translate" dur="6s" calcMode="spline" values="0 230;-140 200;0 230" keyTimes="0; .4; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" /></use></g></svg>
                    @yield('content')
                </div>
            @endauth
        @endif
    </body>
</html>