var HamburgerButton = document.getElementById('NavbarHambuergerTd')
var LateralBar = document.getElementById('LateralBar')
var AllScreens = document.getElementById('theScreen')

var CourseT = document.getElementById('CoursesT')
var CourseL = document.getElementById('CoursesL')

var PeriodT = document.getElementById('PeriodT')
var PeriodL = document.getElementById('PeriodL')

var L1 = document.getElementById('l1')
var L2 = document.getElementById('l2')

var ProfileBtn = document.getElementById('profileBtn')
var LogoBtn = document.getElementById('logoBtn')

//<a href="{{ url('/dashboard') }}">

const changeLateralUI = () => {
    if (LateralBar.classList.contains('lateralBarActived')) {
        LateralBar.classList.remove('lateralBarActived');
        LateralBar.classList.add('lateralBarUnctived');
        ProfileBtn.classList.remove('profileShow')
        ProfileBtn.classList.add('profileUnShow')

    } else if (LateralBar.classList.contains('lateralBarUnctived')) {
        ProfileBtn.classList.remove('profileShow')
        ProfileBtn.classList.add('profileUnShow')
        LateralBar.classList.remove('lateralBarUnctived');
        LateralBar.classList.add('lateralBarActived');
    }
    if (AllScreens.classList.contains('oscureScreen')) {

        AllScreens.classList.remove('oscureScreen');
        AllScreens.classList.add('normalScreen');

    } else if (AllScreens.classList.contains('normalScreen')) {

        AllScreens.classList.remove('normalScreen');
        AllScreens.classList.add('oscureScreen');

    }

    if (CourseT.classList.contains('TitleUnMovedText')) {

        CourseT.classList.remove('TitleUnMovedText');
        CourseT.classList.add('TitleMovedText');

        CourseL.classList.remove('TitleUnMovedLogo');
        CourseL.classList.add('TitleMovedLogo');

        PeriodT.classList.remove('TitleUnMovedText');
        PeriodT.classList.add('TitleMovedText');

        PeriodL.classList.remove('TitleUnMovedLogo');
        PeriodL.classList.add('TitleMovedLogo');

    } else if (CourseT.classList.contains('TitleMovedText')) {

        CourseT.classList.remove('TitleMovedText');
        CourseT.classList.add('TitleUnMovedText');

        CourseL.classList.remove('TitleMovedLogo');
        CourseL.classList.add('TitleUnMovedLogo');

        PeriodT.classList.remove('TitleMovedText');
        PeriodT.classList.add('TitleUnMovedText');

        PeriodL.classList.remove('TitleMovedLogo');
        PeriodL.classList.add('TitleUnMovedLogo');

    }
    if (L1.classList.contains('inv')) {
        L1.classList.remove('inv');
        L2.classList.remove('inv');
    } else {
        L1.classList.add('inv');
        L2.classList.add('inv');
    }
}
const changeProfileUI = () => {
    if (ProfileBtn.classList.contains('profileShow')) {
        ProfileBtn.classList.remove('profileShow')
        ProfileBtn.classList.add('profileUnShow')
    } else {
        ProfileBtn.classList.add('profileShow')
        ProfileBtn.classList.remove('profileUnShow')

        if (LateralBar.classList.contains('lateralBarActived')) {
            LateralBar.classList.remove('lateralBarActived');
            LateralBar.classList.add('lateralBarUnctived');
            ProfileBtn.classList.remove('profileShow')
            ProfileBtn.classList.add('profileUnShow')
    
        }

        if (AllScreens.classList.contains('oscureScreen')) {

            AllScreens.classList.remove('oscureScreen');
            AllScreens.classList.add('normalScreen');
    
        }

        if (CourseT.classList.contains('TitleMovedText')) {

            CourseT.classList.remove('TitleMovedText');
            CourseT.classList.add('TitleUnMovedText');
    
            CourseL.classList.remove('TitleMovedLogo');
            CourseL.classList.add('TitleUnMovedLogo');
    
            PeriodT.classList.remove('TitleMovedText');
            PeriodT.classList.add('TitleUnMovedText');
    
            PeriodL.classList.remove('TitleMovedLogo');
            PeriodL.classList.add('TitleUnMovedLogo');
    
        }
        if (L1.classList.contains('inv') == false) {
            L1.classList.add('inv');
            L2.classList.add('inv');
        }
    }
}

HamburgerButton.addEventListener('click', function() { changeLateralUI() })
CourseL.addEventListener('click', function() { changeLateralUI() })
PeriodL.addEventListener('click', function() { changeLateralUI() })
LogoBtn.addEventListener('click', function() { changeProfileUI(false) })