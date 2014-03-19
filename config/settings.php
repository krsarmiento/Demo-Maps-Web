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

$PLACES = array(
    1 => array(
        'id' => 1,
        'name' => 'Hotel Hilton',
        'lat' => 10.393856,
        'long' => -75.559411
    ),
    2 => array(
        'id' => 2,
        'name' => 'Hotel Caribe',
        'lat' => 10.397972,
        'long' => -75.560977
    ),
    3 => array(
        'id' => 3,
        'name' => 'Hotel Capilla del Mar',
        'lat' => 10.404282,
        'long' => -75.555398
    ),
    4 => array(
        'id' => 4,
        'name' => 'Restaurante Danny',
        'lat' => 10.398800,
        'long' => -75.558665
    )
);