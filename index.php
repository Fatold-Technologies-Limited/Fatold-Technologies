<?php 
require 'helpers.php';

$routes = [
    '/'=> 'home.php',
    '/about-us'=> 'about-us.php',
    '/contact-us'=> 'contact-us.php',
    '/project'=> 'project.php',
    '/services'=> 'services.php'
];

$uri = $_SERVER['REQUEST_URI'];

if (array_key_exists($uri, $routes)) {
    require (basePath($routes[$uri]));
}