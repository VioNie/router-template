<?php
$day = 13;
require_once __DIR__ . '/../component/cssDayHeader.html.php' ?>
<div class="frame13 frame">
    <div class="line1">
        <div class="d13-hisoka d13-mainImage" data-name="Hisoka">
            <div class="plus " onclick="d13plus.call(this)">+</div>
        </div>
        <div class="d13-killua d13-mainImage" data-name="Killua">
            <div class="plus " onclick="d13plus.call(this)"><span>+</span></div>
        </div>
    </div>
    <div class="line2">
        <div class="d13-gon d13-mainImage" data-name="Gon">
            <div class="plus " onclick="d13plus.call(this)">+</div>
        </div>
        <div class="d13-leolio d13-mainImage" data-name="Leolio">
            <div class="plus " onclick="d13plus.call(this)">+</div>
        </div>
    </div>


    <div class="d13-overlay">
        <div class="top">
            <div class="center d13-imageOverlay"></div>
            <div class="close" onclick="d13Close()">X</div>
        </div>
        <div class="bottom">
            <span class="name"></span>
            <div class="icones">
                <div class="icone"><i class="bi bi-telephone"></i></div>
                <div class="icone"><i class="bi bi-chat"></i></div>
                <div class="icone"><i class="bi bi-heart"></i></div>
            </div>

        </div>
    </div>
</div>