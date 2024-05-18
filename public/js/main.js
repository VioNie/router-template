//=================================================== CSS DAY 2

function d2BurgerOpen() {
    let line1 = this.querySelector('.d2-burger_bar1')
    let line2 = this.querySelector('.d2-burger_bar2')
    let line3 = this.querySelector('.d2-burger_bar3')
    if (line2.style.display == 'none') {
        line1.style.transform = 'rotate(0deg)';
        line3.style.transform = 'rotate(0deg)'; // Modification pour une rotation symétrique claire

        setTimeout(() => {
            line2.style.display = 'block'
            line1.style.top = '0'
            line3.style.top = '100%'
        }, 1000);
    } else {
        line1.style.top = '50%'
        line3.style.top = '50%'
        setTimeout(() => {

            line2.style.display = 'none'
            line1.style.transform = 'rotate(45deg)';
            line3.style.transform = 'rotate(137deg)'; // Modification pour une rotation symétrique claire
        }, 1000);
    }

}

//=================================================== CSS DAY 7
function d7search() {
    let span = document.querySelector('.d7-notificationspan')
    let iconmenu = document.querySelector('.d7-iconMenu')
    let loupe = this
    let searchbar = document.querySelector('.d7-searchbar')
    if (span.style.opacity == '0') {

        searchbar.style.padding = '0px'
        searchbar.style.width = '0px'

        setTimeout(() => {
            span.style.opacity = '1'
            iconmenu.style.opacity = '1'
        }, 1000);

    } else {
        span.style.opacity = '0'
        iconmenu.style.opacity = '0'
        searchbar.style.padding = '3px 9px'
        searchbar.style.width = '237px'
    }

}

function d7menu() {
    let panel = document.querySelector('.center7')
    let menu = document.querySelector('.d7-menu')
    if(   panel.style.left == '86%'){
        panel.style.left = '50%'
        setTimeout(() => {
            menu.style.left = '25%'
        }, 500);
    }else{
        panel.style.left = '86%'
        setTimeout(() => {
            menu.style.left = '11%'
        }, 500);
    }

}
