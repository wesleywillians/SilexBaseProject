<?php

require_once __DIR__.'bootstrap.php';

use Symfony\Component\HttpFoundation\Response;

$app->register(new Silex\Provider\UrlGeneratorServiceProvider());


$app->get('/',function() use ($app) {
    return $app['twig']->render('editor.twig');
});

$app->run();
