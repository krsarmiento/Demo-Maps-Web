<?php

require_once __DIR__.'/local_settings.php';

$app['debug'] = $DEBUG;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => $DB_OPTIONS,
));


$app['twig'] = $app->share(
    $app->extend('twig', function($twig, $app) {
        $twig->addGlobal('assets', '/webdemo/assets');
        return $twig;
    }));

$twig = $app['twig'];
$db = $app['db'];