
<?php
$day = 2;
require_once __DIR__.'/../component/cssDayHeader.html.php'?>
<div class="frame2 frame">
    <div class="center">
        <button class="burger">
            <div class="rectangle topBar"></div>
            <div class="rectangle midBar"></div>
            <div class="rectangle botBar"></div>
        </button>
    </div>
</div>


<script>
    const burger = document.querySelector('.burger');
    burger.addEventListener('click', () => {
        burger.classList.toggle('active'); // Ajoute ou retire la classe 'active' au clic
    });
</script>