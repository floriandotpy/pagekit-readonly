<?php

return [
    'name' => 'readonly',

    'type' => 'theme',

    /**
     * Menu postions provided by this theme.
     */
    'menus' => [

        'main' => 'Main'

    ],

    'positions' => [

        'sidebar-top' => 'Sidebar Top',
        'sidebar-bottom' => 'Sidebar Bottom',
        'footer' => 'Footer'

    ],

    'resources' => [
        'readonly:' => '',
        // 'blog:' => 'overrides/blog'
    ],

    /**
     * List of named views provided by this theme.
     */
    'views' => [

        'menu' => 'readonly:views/menu.php',
        'plain' => 'readonly:views/plain.php'

    ]
];