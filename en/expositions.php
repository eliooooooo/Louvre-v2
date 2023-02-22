<?php
include('../include/twig.php');
$twig = init_twig();

include('../include/en/data0-base-en.php');
include('../include/en/data1-expos-en.php');
include('../include/en/data2-salles-en.php');
include('../include/en/data3-artistes-en.php');


echo $twig->render('expositions.twig', [
    'titre' =>  'Expositions | louvre Museum',
    'section' => 'Expositions',
    'page' => 'expositions',
    'expos' => $expositions,
    'salles' => $salles,
    'artistes' => $artistes,
    'nav' => $nav,
    'reseaux' => $reseaux,
    'langue' => $langue
]);
