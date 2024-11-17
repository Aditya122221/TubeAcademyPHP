<?php
$request = $_SERVER['REQUEST_URI'];
$router = str_replace("/TubeAcademy/Frontend/Component", '', $request);

if ($router === '/' || $router === '/home') include "home.php";
else if ($router === '/contact') include "contact.php";
else if ($router === '/askai') include "AskAI.php";
else if ($router === '/login') include "login.php";
else if ($router === '/signup') include "signup.php";
else if ($router === '/profile') include "profile.php";
else include "error.php";
