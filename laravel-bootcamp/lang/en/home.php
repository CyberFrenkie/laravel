<?php

return [

    'page' => [
        'class' => 'heading',

        'title' => 'Laravel bootcamp',

        'content' => 'U folderu views svako ima stranicu sa svojim imenom! ',

        'return' => [
            'list' => [ 
                'class' => 'list-item-link',

                'btn' => [
                    
                    [
                        'name' => 'Home page',                   
                        'url' => '/', 
                    ],
                    
                    
                ], 
                
                    
            ],
            
            
        ],
        'persons' => [
            [
                'name' => 'Sofija',
                'url' => '/sofija',
            ],
            [
                'name' => 'Nikola',
                'url' => '/nikola',
            ],
            [
                'name' => 'Petar',
                'url' => '/petar',
            ],
        ],
    ],
];
