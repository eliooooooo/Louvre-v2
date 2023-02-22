<?php
include('../include/twig.php');
$twig = init_twig();

include('../include/fr/data0-base.php');
include('../include/fr/data1-expos.php');
include('../include/fr/data2-salles.php');
include('../include/fr/data3-artistes.php');
include('../include/fr/data4-cgu.php');


echo $twig->render('apropos.twig', [
    'titre' => 'A propos | Musée du Louvre',
    'section' => 'Conditions générales d\'utilisation du site',
    'page' => 'apropos',
    'cgu' => $cgu,
    'expos' => $expositions,
    'salles' => $salles,
    'artistes' => $artistes,
    'nav' => $nav,
    'reseaux' => $reseaux,
    'langue' => $langue
]);
