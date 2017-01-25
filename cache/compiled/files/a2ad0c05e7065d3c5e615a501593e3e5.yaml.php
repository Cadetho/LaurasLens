<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/LaurasLens/user/config/site.yaml',
    'modified' => 1484765327,
    'data' => [
        'title' => 'Laura\'s Lens',
        'author' => [
            'name' => 'Laura Sims',
            'email' => 'john@email.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Land.io is a carefully crafted landing page UI kit and landing page template built on Bootstrap 4, designed by Peter Finlan and developed by Taty Grassini.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'logo' => [
            'icon' => 'logo',
            'text' => 'Land.io',
            'url' => NULL
        ],
        'userlinks' => [
            0 => [
                'text' => 'Sample link',
                'url' => '#'
            ],
            1 => [
                'text' => 'Another Sample link',
                'url' => '#'
            ]
        ],
        'header' => [
            'title' => 'Land.io, blissful innovation.',
            'description' => 'Craft your journey, <em>absolutely free</em>, with <a href="#" class="jumbolink">Admin plugin support.</a>.',
            'buttons' => [
                0 => [
                    'text' => 'Some Button',
                    'url' => 'http://tympanus.net/codrops/?p=19439',
                    'icon' => 'sketch'
                ]
            ]
        ],
        'footer' => [
            'links' => [
                0 => [
                    'text' => 'Terms &amp; Conditions',
                    'url' => '#'
                ],
                1 => [
                    'text' => 'Legals',
                    'url' => '#'
                ]
            ]
        ],
        'socialcount' => [
            'url' => 'http://www.getgrav.org',
            'facebook_url' => '#',
            'twitter_url' => 'http://www.twitter.com/getgrav',
            'linkedin_url' => '#'
        ],
        'copyright' => 'Land.io 2015. <br> Designed by Peter Finlan, developed by Taty Grassini, exclusively for Codrops.'
    ]
];
