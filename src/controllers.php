<?php

$app->get('/', function() use($app, $twig, $PLACES) {
    return $twig -> render('web/index.html.twig', array('places' => $PLACES));
});

$app->get('/map/{id}', function($id) use($app, $twig, $PLACES) {
    $place = $PLACES[$id];
    return $twig -> render('web/map.html.twig', array('place' => $place, 'places' => $PLACES));
});