<?php

return [
    'name' => 'SkopKap',
    'manifest' => [
        'name' => env('APP_NAME', 'skop-pwa'),
        'short_name' => 'PWA',
        'start_url' => '/',
        'offline'=>'/offline',
        'background_color' => '#ffffff',
        'theme_color' => '#000000',
        'display' => 'standalone',
        'orientation'=> 'any',
        'status_bar'=> 'black',
        'icons' => [
            '96x96' => [
                'path' => '/images/icons/icon-96x96.png',
                'purpose' => 'any'
            ],
            
            '192x192' => [
                'path' => '/images/icons/icon-192x192.png',
                'purpose' => 'any'
            ],
            
            '512x512' => [
                'path' => '/images/icons/icon-512x512.png',
                'purpose' => 'any'
            ],
        ],
        'splash' => [
            '640x1136' => '/images/icons/icon-192x192.png',
            '750x1334' => '/images/icons/icon-512x512.png',
            '828x1792' => '/images/icons/icon-512x512.png',
            '1125x2436' => '/images/icons/icon-512x512.png',
            '1242x2208' => '/images/icons/icon-512x512.png',
            '1242x2688' => '/images/icons/icon-512x512.png',
            '1536x2048' => '/images/icons/icon-512x512.png',
            '1668x2224' => '/images/icons/icon-512x512.png',
            '1668x2388' => '/images/icons/icon-512x512.png',
            '2048x2732' => '/images/icons/icon-512x512.png',
        ],
        'shortcuts' => [
            [
                'name' => 'Shortcut Link 1',
                'description' => 'Shortcut Link 1 Description',
                'url' => '/shortcutlink1',
                'icons' => [
                    "src" => "/images/icons/icon-96x96.png",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Shortcut Link 2',
                'description' => 'Shortcut Link 2 Description',
                'url' => '/shortcutlink2'
            ]
        ],
        'custom' => []
    ]
];
