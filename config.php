<?php

return [
    'production' => false,

    'title' => 'Florian Wartner',
    'description' => 'Website description.',
    'author' => 'Florian Wartner',

    'collections' => [
        'posts' => [
            'path' => 'post/{date|Y-m-d}/{filename}',
        ],
    ],
];
