<?php
include('../include/twig.php');
$twig = init_twig();

include('../include/en/data0-base-en.php');
include('../include/en/data1-expos-en.php');
include('../include/en/data2-salles-en.php');
include('../include/en/data3-artistes-en.php');
include('../include/en/data5-index-en.php');


echo $twig->render('index.twig', [
    'titre' => 'Welcome | Louvre Museum',
    'section' => 'Présentation',
    'titre_inter' => 'Useful information',
    'titre_tarif' => 'Prices',
    'page' => 'index',
    'presentation' => $presentation,
    'infos' => $infos,
    'expos' => $expositions,
    'salles' => $salles,
    'artistes' => $artistes,
    'nav' => $nav,
    'reseaux' => $reseaux,
    'tarifs' => $tarifs,
    'langue' => $langue
]);
