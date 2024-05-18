<?php
$day = 7;
require_once __DIR__ . '/../component/cssDayHeader.html.php' ?>
<div class="frame7 frame">
    <div class="d7-menu">
        <ul>
            <li><i class="bi bi-bar-chart-fill"></i>Dashboard</li>
            <li><i class="bi bi-person-fill"></i>Profile</li>
            <li><i class="bi bi-bell-fill"></i>Notifications</li>
            <li><i class="bi bi-chat-left-fill"></i>Messages</li>
            <li><i class="bi bi-gear-fill"></i>Settings</li>
        </ul>
    </div>
    <div class="center center7">

        <div class="d7-header">
            <div class="d7-iconMenu" onclick="d7menu.call(this)">
                <div class="d7-topbar"></div>
                <div class="d7-bottombar"></div>
            </div>
            <span class="d7-notificationspan">Notifications</span>
            <input class="d7-searchbar" type="search" placeholder="Search ...">
            <i class="bi bi-search" onclick="d7search.call(this)"></i>
        </div>
        <div class="d7-body">
            <div class="d7-line"></div>
            <div class="d7-notif">
                <div class="d7-point"></div>
                <span class="d7-notifHour">9:24 PM</span>
                <p><b>Adrien Agreste</b> a posté une nouvelle image et a liké votre commentaire </p>
            </div>
            <div class="d7-notif">
                <div class="d7-point"></div>
                <span class="d7-notifHour">9:24 PM</span>
                <p><b>Jerome Leblanc</b> a posté un nouveau commentaire sur votre post </p>
            </div>
        </div>
    </div>
</div>