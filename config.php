<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Florian Wartner',
    'description' => 'Website description.',
    'author' => 'Florian Wartner',

    'collections' => [
        'posts' => [
            'path' => 'post/{date|Y-m-d}/{filename}',
        ],
    ],
];
