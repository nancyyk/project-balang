<?php

$page = $_GET['page'] ?? 'landing';

// landing & logout pages (tanpa layout)
$noLayoutPages = ['landing', 'logout'];

if (in_array($page, $noLayoutPages)) {
    include "views/$page.php";
    exit;
}

// auth pages (tanpa layout sidebar)
$authPages = ['login', 'register'];

if (in_array($page, $authPages)) {
    include "views/auth/$page.php";
    exit;
}

// app pages (pakai layout)
$appPages = [
    'home' => 'views/home.php',
    'history' => 'views/history.php',
    'profile' => 'views/profile.php',
    'detail' => 'views/item_detail.php',
    'report' => 'views/report.php',
];

if (isset($appPages[$page])) {
    include $appPages[$page];
} else {
    echo "404";
}