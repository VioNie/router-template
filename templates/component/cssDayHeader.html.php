<!--la "navbar"-->
<div class="d-flex flex-row justify-content-between">


    <!--fleche de gauche elle permet de revenir en arrière sauf si c'est le day 1 , elle retour à la home page-->
    <?php if ($day > 1) : ?>
        <a href="/day/<?= $day - 1 ?>/"><i class="bi bi-caret-left-fill"></i></a>
    <?php else : ?>
        <a href="/"><i class="bi bi-caret-left-fill me-1"> Retour </i></a>
    <?php endif; ?>


    <h4>
        Defi css jour <?= $day ?> !
    </h4>


    <!--fleche de droite elle permet de revenir d'aller au suivant sauf si c'est le dernier, elle retour à la home page-->
    <!--Pour savoir si cest le dernier php regarde juste si un cssDayX existe-->
    <?php
    $file = __DIR__ . '/../day/cssDay' . ($day + 1) . '.html.php';
    if (file_exists($file)) : ?>
        <a href="/day/<?= $day + 1 ?>/"><i class="bi bi-caret-right-fill"></i></a>
    <?php else: ?>
        <!--Ici tu peux modifier la redirection si cest le dernier css100-->
        <a href="/"></a>
    <?php endif; ?>


</div>


<!--  POUR INCLURE LE FICHIER

<?php
$day = 1; // a remplacer numero du jour
require_once __DIR__ . '/../component/cssDayHeader.html.php' ?>


-->