<?php
include('../include/twig.php');
$twig = init_twig();

include('../include/en/data0-base-en.php');
include('../include/en/data1-expos-en.php');
include('../include/en/data2-salles-en.php');
include('../include/en/data3-artistes-en.php');
include('../include/en/data4-cgu-en.php');


echo $twig->render('apropos.twig', [
    'titre' => 'In regards to | Louvre Museum',
    'section' => 'General conditions for the use of the site',
    'page' => 'apropos',
    'cgu' => $cgu,
    'expos' => $expositions,
    'salles' => $salles,
    'artistes' => $artistes,
    'nav' => $nav,
    'reseaux' => $reseaux,
    'langue' => $langue
]);
