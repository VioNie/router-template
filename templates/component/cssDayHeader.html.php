<div class="d-flex flex-row justify-content-between">
    <?php if ($day > 1) : ?>
        <a href="/day/<?= $day - 1 ?>/"><i class="bi bi-caret-left-fill"></i></a>
    <?php else : ?>

        <a href="/"><i class="bi bi-caret-left-fill me-1"> Retour </i></a>
    <?php endif; ?>


    <h4>
        Defi css jour <?=$day?> !
    </h4>


    <?php if ($day < 5) : ?>
        <a href="/day/<?= $day + 1 ?>/"><i class="bi bi-caret-right-fill"></i></a>
    <?php else : ?>
        <a href="/">Retour <i class="ms-1 bi bi-caret-right-fill"></i></a>
    <?php endif; ?>
</div>



<!--  POUR INCLURE LE FICHIER

<?php
$day = 1;
require_once __DIR__.'/../component/cssDayHeader.html.php'?>


-->