<?php

return [
    'pre-headerContact' => [
        //kreiram prvo dugme tel sa elementima koje cu da povucem u .blade.php file
        'contact_tel' => [
            'text' => '555-333',
            'type' => 'tel',
            'url' => 'tel:555-333',
        ],
        //kreiram drugo dugme mail sa elementima koje cu da povucem u .blade.php file
        'contact_mail' => [
            'text' => 'nekimail@gmai.com',
            'type' => 'mail',
            'url' => 'mailto:nekimail@gmail.com',
        ],
    ],

    'items' => [
        [
            'text' => 'Home',
            'url' => 'https://www.youtube.com/watch?v=4mI33pHBO9g&ab_channel=ChilliLofi',
            'class' => 'home-btn button',
        ],
        [
            'text' => 'About us',
            'url' => 'https://www.youtube.com/watch?v=4mI33pHBO9g&ab_channel=ChilliLofi',
            'class' => 'about-us-btn button',
        ],
        [
            'text' => 'Contact',
            'url' => 'https://www.youtube.com/watch?v=4mI33pHBO9g&ab_channel=ChilliLofi',
            'class' => 'contact-btn button',
        ],
        [
            'text' => 'Locations',
            'url' => '#',
            'class' => 'button locations-button',
        ],
    ],    
];
