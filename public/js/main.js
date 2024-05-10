
//=================================================== CSS DAY 2

function d2BurgerOpen(){
    let line1 = this.querySelector('.d2-burger_bar1')
    let line2 = this.querySelector('.d2-burger_bar2')
    let line3 = this.querySelector('.d2-burger_bar3')
    if(line2.style.display =='none'){
        line1.style.transform = 'rotate(0deg)';
        line3.style.transform = 'rotate(0deg)'; // Modification pour une rotation symétrique claire

        setTimeout(() => {
            line2.style.display = 'block'
            line1.style.top = '0'
            line3.style.top = '100%'
        }, 1000);
    }
    else{
        line1.style.top = '50%'
        line3.style.top = '50%'
        setTimeout(() => {

            line2.style.display = 'none'
            line1.style.transform = 'rotate(45deg)';
            line3.style.transform = 'rotate(137deg)'; // Modification pour une rotation symétrique claire
        }, 1000);
    }

}