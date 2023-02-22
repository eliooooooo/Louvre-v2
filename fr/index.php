<?php
include('../include/twig.php');
$twig = init_twig();

include('../include/fr/data0-base.php');
include('../include/fr/data1-expos.php');
include('../include/fr/data2-salles.php');
include('../include/fr/data3-artistes.php');
include('../include/fr/data5-index.php');


echo $twig->render('index.twig', [
    'titre' => 'Accueil | Musée du Louvre',
    'section' => 'Présentation',
    'titre_inter' => 'Informations pratiques',
    'titre_tarif' => 'Tarifs',
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
