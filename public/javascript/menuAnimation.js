var HamburgerButton = document.getElementById('NavbarHambuergerTd')
var LateralBar = document.getElementById('LateralBar')
var AllScreens = document.getElementById('theScreen')

HamburgerButton.addEventListener('click', function() {
    if (LateralBar.classList.contains('lateralBarActived')) {
        LateralBar.classList.remove('lateralBarActived');
        LateralBar.classList.add('lateralBarUnctived');
    } else if (LateralBar.classList.contains('lateralBarUnctived')) {
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
})