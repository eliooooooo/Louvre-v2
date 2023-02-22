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
    'titre_form' => 'Contact form :',
    'legend1' => 'You are :',
    'fieldset1' => [
        [
            'p' => 'Name :',
            'id' => 'nom',
            'placeholder' => 'Enter your name'
        ],
        [
            'p' => 'First name :',
            'id' => 'prenom',
            'placeholder' => 'Enter your first name'
        ],
        [
            'p' => 'Password :',
            'id' => 'mot de passe',
            'placeholder' => 'Enter your password'
        ],
    ],
    'legend2' => 'The reason for contact :',
    'fieldset2' => [
        'p1' => 'Your comment :',
        'textarea' => 'Explain to us clearly the reason for your contact.',
        'p2' => 'Note the urgency of your situation :'
    ],
    'legend3' => 'Contact you :',
    'fieldset3' => [
        'input' => [
            [
                'p' => 'eMail :',
                'id' => 'email',
                'placeholder' => 'Enter your e-mail'
            ], [
                'p' => 'Phone :',
                'id' => 'tel',
                'placeholder' => 'Enter your phone number'
            ]
        ],
        'p1' => 'Your status :',
        'select' => [
            [
                'option' => 'Student'
            ], [
                'option' => 'Asset',
                'selected' => 'selected'
            ], [
                'option' => 'Retreat'
            ]
        ],
        'p2' => 'Do you agree to be contacted?',
        'radio' => [
            [
                'label' => 'yes',
                'id' => 'oui'
            ], [
                'label' => 'no',
                'id' => 'non'
            ]
        ]
    ]
];
