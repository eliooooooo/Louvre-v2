<?php
include('../include/twig.php');
$twig = init_twig();

include('../include/fr/data0-base.php');
include('../include/fr/data1-expos.php');
include('../include/fr/data2-salles.php');
include('../include/fr/data3-artistes.php');
include('../include/fr/data6-contact.php');


echo $twig->render('contact.twig', [
    'titre' => 'Contact | Musée du Louvre',
    'section' => 'Contacts',
    'titre_form' => 'Formulaire de contact :',
    'page' => 'contact',
    'expos' => $expositions,
    'salles' => $salles,
    'artistes' => $artistes,
    'nav' => $nav,
    'reseaux' => $reseaux,
    'langue' => $langue,
    'contact' => $contact,
    'form' => $form
]);
