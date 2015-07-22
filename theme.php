<?php

return [
    'name' => 'readonly',

    'type' => 'theme',

    /**
     * Menu postions provided by this theme.
     */
    'menus' => [

        'primary' => 'Primary'

    ],

    'positions' => [

        'sidebar-top' => 'Sidebar Top',
        'sidebar-bottom' => 'Sidebar Bottom',
        'footer' => 'Footer'

    ],

    /**
     * Overwrite default template files with templates provided by the theme and define stream wrappers for shorter path access.
     */
    'resources' => [

        'theme:' => '',
        'views:' => 'views'

    ]
];