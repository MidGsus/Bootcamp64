<?php

require 'core/bootstrap.php';

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/controllers/index.php';
        break;
    case '' :
        require __DIR__ . '/controllers/index.php';
        break;
    case '/about' :
        require __DIR__ . '/controllers/about.php';
        break;
    case '/about/culture' :
        require __DIR__ . '/controllers/about-culture.php';
        break;
    case '/contact' :
        require __DIR__ . '/controllers/contact.php';
        break;
    default:
        require __DIR__ . '/views/404.view.php';
        break;
}
