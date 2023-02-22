<?php
include('../include/twig.php');
$twig = init_twig();

include('../include/en/data0-base-en.php');
include('../include/en/data1-expos-en.php');
include('../include/en/data2-salles-en.php');
include('../include/en/data3-artistes-en.php');
include('../include/en/data6-contact-en.php');


echo $twig->render('contact.twig', [
    'titre' => 'Contact | Louvre Museum',
    'section' => 'Contacts',
    'titre_form' => 'Contact form :',
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
