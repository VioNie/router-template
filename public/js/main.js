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
    if (panel.style.left == '86%') {
        panel.style.left = '50%'
        setTimeout(() => {
            menu.style.left = '25%'
        }, 500);
    } else {
        panel.style.left = '86%'
        setTimeout(() => {
            menu.style.left = '11%'
        }, 500);
    }
}

//=================================================== CSS DAY 10
function d10Day() {
    const currentDate = new Date();
    const daysOfWeek = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
    const monthsOfYear = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    const dayOfMonth = currentDate.getDate();
    const dayOfWeek = daysOfWeek[currentDate.getDay()];
    const month = monthsOfYear[currentDate.getMonth()];
    const year = currentDate.getFullYear();
    const hour = currentDate.getHours() % 12;
    const minutes = String(currentDate.getMinutes()).padStart(2, '0');


    function updateClock() {
        const clockText = `${dayOfWeek} ${dayOfMonth} ${month} ${year}`;
        document.querySelector(".d10-dataText").innerText = clockText;

        const time = `${hour}:${minutes}`
        document.querySelector(".d10-dataTime").innerText = time;
    }

    updateClock();
    setInterval(updateClock, 1000);
}


//=================================================== CSS DAY 13

function d13plus() {
    let overlay = document.querySelector('.d13-overlay')
    let top = document.querySelector('.d13-overlay .top')
    let image = document.querySelector('.d13-imageOverlay')
    let name = document.querySelector('.d13-overlay .name')
    let bottom = document.querySelector('.d13-overlay .bottom')
    let parent = this.parentElement
    const computedStyle = window.getComputedStyle(parent, '::after');
    const backgroundImage = computedStyle.getPropertyValue('background-image');

    top.style.top = '0%'
     bottom.style.bottom = '0%'
    image.style.top = '100%'
    name.textContent = parent.getAttribute('data-name')
   image.style.backgroundImage = backgroundImage

}
function d13Close(){
    let overlay = document.querySelector('.d13-overlay')
    let image = document.querySelector('.d13-imageOverlay')
    let top = document.querySelector('.d13-overlay .top')
    let bottom = document.querySelector('.d13-overlay .bottom')
    top.style.top = '-47%'
    bottom.style.bottom = '-57%'
    image.style.top = '50%'
}