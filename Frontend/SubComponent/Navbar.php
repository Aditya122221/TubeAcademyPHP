<?php

session_start();

$navbar = "N-navbar";
$logo = "N-logo";
$ham1 = "material-symbols-outlined";
$ham2 = "N-ham";
$menu = "N-menu";
$s = "N-s";
$logoImg = "../Images/Logo.png";

//----------------------------------------path------------------------------------

$HomePage = "home";
$AskAI = 'askai';
$ContactPage = "contact";
$LoginPage = "login";
$ProfilePage = "profile";
$handleMenu = "handleMenu()";

if (!isset($_SESSION["user"])) {
    echo "<div class=" . $navbar . ">
    <a href=" . $HomePage . "><img src=" . $logoImg . " class=" . $logo . " /></a>
    <span onclick=" . $handleMenu . " class=" . $ham1 . " id=" . $ham2 . ">
        menu
    </span>
    <div class=" . $menu . ">
        <a href=" . $HomePage . " class=" . $s . ">Home</a>
        <a href=" . $AskAI . " class=" . $s . ">Ask AI</a>
        <a href=" . $ContactPage . " class=" . $s . ">Contact</a>
        <a href=" . $LoginPage . " class=" . $s . ">Login</a>
    </div>
</div>";
} else {
    echo "<div class=" . $navbar . ">
    <a href=" . $HomePage . "><img src=" . $logoImg . " class=" . $logo . " /></a>
    <span onclick=" . $handleMenu . " class=" . $ham1 . " id=" . $ham2 . ">
        menu
    </span>
    <div class=" . $menu . ">
        <a href=" . $HomePage . " class=" . $s . ">Home</a>
        <a href=" . $AskAI . " class=" . $s . ">Ask AI</a>
        <a href=" . $ContactPage . " class=" . $s . ">Contact</a>
        <a href=" . $ProfilePage . " class=" . $s . ">Profile</a>
    </div>
</div>";
}
