//=================================================== Chinese dragon
document.addEventListener('DOMContentLoaded', () => {
    $route = window.location.pathname

    if ($route === '/other/chinese-dragon/') {

        let fleurs = document.querySelectorAll('.fleur')
        fleurs.forEach(fleur => {
            fleur.innerHTML += `
          <div class="center centre">
                <div class="petal petal1"></div>
                <div class="petal petal2"></div>
                <div class="petal petal3"></div>

                <div class="petal petal6"></div>
                <div class="petal petal4"></div>
                <div class="petal petal5"></div>
            </div>
            <div class="center centre2"></div>
            <div class="bourgeon bourgeon1"></div>
            <div class="bourgeon bourgeon2"></div>
            <div class="bourgeon bourgeon3"></div>
            <div class="bourgeon bourgeon4"></div>
            <div class="bourgeon bourgeon5"></div>
            <div class="bourgeon bourgeon6"></div>
            <div class="bourgeon bourgeon8"></div>
            </div>
         `
        })
        let lanternes = document.querySelectorAll('.lantern')
        lanternes.forEach(lantern => {
            lantern.innerHTML += `
        <div class="tige"></div>
        <div class="light">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
            <div class="bar bar4"></div>

            <div class="bar bar4-1"></div>
            <div class="bar bar5"></div>
            <div class="bar bar6"></div>
            <div class="bar bar7"></div>
            <div class="bar bar8"></div>
            <div class="boule boule1"></div>
            <div class="boule boule2"></div>
            <div class="boule boule3"></div>
        </div>

         `
        })
        let nuages = document.querySelectorAll('.nuage')
        nuages.forEach(nuage => {
            nuage.innerHTML += `
        <div class="bulle bulle1">


        </div>
        <div class="bulle bulle2">
        </div>
        <div class="bulle bulle3"></div>
        <div class="rond rond1">
            <div class="rond ">
                <div class="rond "></div>
            </div>
            <div class="rond rond1">
                <div class="rond"></div>
            </div>
        </div>
        <div class="rond rond2">
            <div class="rond rond0 ">
                <div class="rond rond0 "></div>
                <div class="rond rond1 ">
                    <div class="rond "></div>
                </div>

            </div>
            <div class="rond rond1"></div>
            <div class="rond rond2"></div>
        </div>
        <div class="rond rond3">
            <div class="rond ">
                <div class="rond ">

                </div>
            </div>
            <div class="rond rond1">
                <div class="rond">
                    <div class="rond"></div>
                </div>
                <div class="rond rond3">
                    <div class="rond"></div>
                </div>
            </div>
            <div class="rond rond2"></div>
        </div>
        <div class="rond rond4">
            <div class="rond ">
                <div class="rond ">

                </div>
            </div>
        </div>

         `
        })
        let corpsParts = document.querySelectorAll('.skin')
        corpsParts.forEach(corpsPart => {
            corpsPart.innerHTML += `
        
           <div class="ecaille ecaille4"></div>
            <div class="ecaille ecaille5"></div>
            <div class="ecaille ecaille6"></div>
            <div class="ecaille ecaille1"></div>
            <div class="ecaille ecaille2"></div>
            <div class="ecaille ecaille3"></div>

            <div class="tache tache5"></div>
            <div class="tache tache6"></div>
         `
        })

    }


    if ($route === '/other/fuji/') {
        let top = document.querySelector('.top')
        let middle = document.querySelector('.middle')
        let bottom = document.querySelector('.bottom')
        top.innerHTML = getCristal(70)
        middle.innerHTML =  getCristal(40)
        bottom.innerHTML =  getCristal(50)
        function getCristal(occurs) {
            let content = ''
            for (let i = 1; i <= occurs; i++) {
                content += `  <div class="cristal${i}"></div>`

            }
            return content

        }
    }
})


//=================================================== Chinese dragon