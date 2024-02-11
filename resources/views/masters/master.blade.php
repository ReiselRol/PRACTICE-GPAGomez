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
        @if (Route::has('login'))
            @auth
            <div class="profileInfo profileUnShow" id="profileBtn">
                <div class="profileOption"><a class="profileOptionA" href="/profile">Profile</a></div>
                <div class="profileOption"><a class="profileOptionA" href="/dashboard">Dashboard</a></div>
            </div>
            @endauth
        @endif
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
                            <img src="{{ asset('imgs/LogedUserIcon.png')}}" class="LogedIconClass" id="logoBtn"/>
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
                    <div class="MenuTitle TitleLetter TitleUnMovedText" id="CoursesT">
                        Courses
                    </div>
                    <div class="MenuTitle TitleLogo TitleUnMovedLogo" id="CoursesL">
                        <img src="{{ asset('imgs/Courses.png') }}" class="fullImage"/>
                    </div>

                    <div style="width: 99%; top: 10vh; left: 0; position: absolute; border: white 2px solid" id="l1" class="liner inv"></div>
                    <div class="MenuTitle Subtitle1"> <a href="/course" class="lateralMiniOption">See Courses</a></div>
                    <div class="MenuTitle Subtitle2"> <a href="/course/create" class="lateralMiniOption">Create Course</a></div>

                    <div class="MenuTitle TitleLetter2 TitleUnMovedText" id="PeriodT">
                        Periods
                    </div>
                    <div class="MenuTitle TitleLogo2 TitleUnMovedLogo" id="PeriodL">
                        <img src="{{ asset('imgs/Calendar.png') }}" class="fullImage"/>
                    </div>
                    <div style="width: 99%; top: 34vh; left: 0; position: absolute; border: white 2px solid" id="l2" class="liner inv"></div>
                    <div class="MenuTitle Subtitle3"> <a href="/period" class="lateralMiniOption">See Periods</a></div>
                    <div class="MenuTitle TitleLetter3 TitleUnMovedText" id="HoliT">
                        Holidays
                    </div>
                    <div class="MenuTitle TitleLogo3 TitleUnMovedLogo" id="HoliL">
                        <img src="{{ asset('imgs/Holidays.png') }}" class="fullImage"/>
                    </div>
                    <div style="width: 99%; top: 52vh; left: 0; position: absolute; border: white 2px solid" id="l3" class="liner inv"></div>
                    <div class="MenuTitle Subtitle4"> <a href="/holiday" class="lateralMiniOption">See Holidays</a></div>
                </div>
                <div id="theScreen" class="allScreen normalScreen">
                    <svg id="fondito" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice"><defs><linearGradient id="bg"><stop offset="0%" style="stop-color:rgba(128, 0, 202, 0.4)"></stop><stop offset="100%" style="stop-color:rgba(68, 0, 108, 0.4)"></stop></linearGradient><path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0 s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" /></defs><g><use xlink:href='#wave' opacity=".3"><animateTransform attributeName="transform" attributeType="XML" type="translate" dur="10s" calcMode="spline" values="270 230; -334 180; 270 230" keyTimes="0; .5; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" /></use><use xlink:href='#wave' opacity=".6"><animateTransform attributeName="transform" attributeType="XML" type="translate" dur="8s" calcMode="spline" values="-270 230;243 220;-270 230" keyTimes="0; .6; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" /></use><use xlink:href='#wave' opacity=".9"><animateTransform attributeName="transform" attributeType="XML" type="translate" dur="6s" calcMode="spline" values="0 230;-140 200;0 230" keyTimes="0; .4; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" /></use></g></svg>
                    @yield('content')
                </div>
            @else
                <div id="theScreen" class="allScreenBig normalScreen">
                    <svg id="fondito" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice"><defs><linearGradient id="bg"><stop offset="0%" style="stop-color:rgba(128, 0, 202, 0.4)"></stop><stop offset="100%" style="stop-color:rgba(68, 0, 108, 0.4)"></stop></linearGradient><path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0 s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" /></defs><g><use xlink:href='#wave' opacity=".3"><animateTransform attributeName="transform" attributeType="XML" type="translate" dur="10s" calcMode="spline" values="270 230; -334 180; 270 230" keyTimes="0; .5; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" /></use><use xlink:href='#wave' opacity=".6"><animateTransform attributeName="transform" attributeType="XML" type="translate" dur="8s" calcMode="spline" values="-270 230;243 220;-270 230" keyTimes="0; .6; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" /></use><use xlink:href='#wave' opacity=".9"><animateTransform attributeName="transform" attributeType="XML" type="translate" dur="6s" calcMode="spline" values="0 230;-140 200;0 230" keyTimes="0; .4; 1" keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" /></use></g></svg>
                    @yield('content')
                </div>
            @endauth
        @endif
    </body>
</html>