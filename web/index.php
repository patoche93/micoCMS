
<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// enable the debug mode: on active les informations de débogage puis on inclut la définition des routes de l'application (fichierroutes.php).‌
require __DIR__.'/../app/config/dev.php';
require __DIR__.'/../app/app.php';
require __DIR__.'/../app/routes.php';


$app->run();