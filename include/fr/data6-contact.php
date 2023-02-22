<?php

$contact = [
    [
        'texte' => '+33 (0)1 40 20 53 17'
    ], [
        'texte' => 'info@louvre.fr handicap@louvre.fr'
    ], [
        'texte' => 'Musée du Louvre, 75058 Paris CEDEX 01'
    ], [
        'texte' => '<a href="https://www.louvre.fr/OFFRES-D-EMPLOI">louvre.fr/offres-d-emploi</a>'
    ]
];

$form = [
    'titre_form' => 'Formulaire de contact :',
    'legend1' => 'Vous êtes :',
    'fieldset1' => [
        [
            'p' => 'Nom :',
            'id' => 'nom',
            'placeholder' => 'Entrez votre nom'
        ],
        [
            'p' => 'Prénom :',
            'id' => 'prenom',
            'placeholder' => 'Entrez votre prenom'
        ],
        [
            'p' => 'Mot de Passe :',
            'id' => 'mot de passe',
            'placeholder' => 'Entrez votre mot de passe'
        ],
    ],
    'legend2' => 'Le motif de contact :',
    'fieldset2' => [
        'p1' => 'Votre commentaire :',
        'textarea' => 'Expliquez nous clairement la raison de votre contact.',
        'p2' => 'Notez l\'urgence de votre situation :'
    ],
    'legend3' => 'Vous contacter :',
    'fieldset3' => [
        'input' => [
            [
                'p' => 'E-mail :',
                'id' => 'email',
                'placeholder' => 'Entrez votre E-mail'
            ], [
                'p' => 'Téléphone :',
                'id' => 'tel',
                'placeholder' => 'Entrez votre numéro de Téléphone'
            ]
        ],
        'p1' => 'Votre statut :',
        'select' => [
            [
                'option' => 'Etudiant'
            ], [
                'option' => 'Actif',
                'selected' => 'selected'
            ], [
                'option' => 'Retraité'
            ]
        ],
        'p2' => 'Acceptez vous d\'être contacté ?',
        'radio' => [
            [
                'label' => 'oui',
                'id' => 'oui'
            ], [
                'label' => 'non',
                'id' => 'non'
            ]
        ]
    ]
];
