<?php
$day = 5;
require_once __DIR__ . '/../component/cssDayHeader.html.php' ?>
<div class=" frame">
    <div class="d5-header">
        <div class="d5-header-left"><h3>Weekly report</h3><span>01 Feb - 07 Feb</span></div>
        <div class="d5-header-right"><span>Revenue</span>
            <h3>3000€</h3></div>
    </div>
    <div class="d5-body">
        <div class="d5-legend">
            <div class="">
                <div class="rect1"></div>
                <span>Views</span>
            </div>
            <div>
                <div class="rect2"></div>
                <span>Purchase</span>
            </div>
        </div>
        <div class="d5-grapheContainer">
            <div class="d5-svg1">
                <svg width="100%" height="80px">
                    <polyline fill="none" stroke="#942494"
                              points="9,46 50,12 90,23 130,11 171,38 211,48 251,19 270,50 300,25 315,10"/>
                </svg>
                    <div class="point point1"></div>
                    <div class="point point2"></div>
                    <div class="point point3"></div>
                    <div class="point point4"></div>
                    <div class="point point5"></div>
                    <div class="point point6"></div>
                    <div class="point point7"></div>
                    <div class="point point8"></div>
                    <div class="point point9"></div>

            </div>
            <div class="d5-svg2">
                <svg width="100%" height="80px">
                    <polyline fill="none" stroke="#245194"
                              points="9,46 50,12 90,23 130,11 171,38 211,48 251,19 270,50 300,25 315,10"/>
                </svg>
                    <div class="point point1"></div>
                    <div class="point point2"></div>
                    <div class="point point3"></div>
                    <div class="point point4"></div>
                    <div class="point point5"></div>
                    <div class="point point6"></div>
                    <div class="point point7"></div>
                    <div class="point point8"></div>
                    <div class="point point9"></div>

            </div>
            <div class="d5-line1"></div>
            <div class="d5-line2"></div>
            <div class="d5-line3"></div>
        </div>

        <div class="d5-axeY">
            <span>Mon</span>
            <span>Tue</span>
            <span>Wed</span>
            <span>Thur</span>
            <span>Fri</span>
            <span>Sat</span>
            <span>Sun</span>
        </div>
    </div>
</div>