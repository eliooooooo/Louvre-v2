<?php
include('../include/twig.php');
$twig = init_twig();

include('../include/fr/data0-base.php');
include('../include/fr/data1-expos.php');
include('../include/fr/data2-salles.php');
include('../include/fr/data3-artistes.php');


echo $twig->render('artistes.twig', [
    'titre' => 'Artistes | Musée du Louvre',
    'section' => 'Les artistes',
    'page' => 'artistes',
    'expos' => $expositions,
    'salles' => $salles,
    'artistes' => $artistes,
    'nav' => $nav,
    'reseaux' => $reseaux,
    'langue' => $langue
]);
