<?php

$users = [
    [
        'full_name' => 'Michel André',
        'email' => 'michel.andre@exemple.com',
        'age' => 34,
        'password' => 'S3cr3t',
    ],
    [
        'full_name' => 'Mat Veli',
        'email' => 'mat.veli@exemple.com',
        'age' => 34,
        'password' => 'MiamMiam',
    ],
    [
        'full_name' => 'Laurine Shell',
        'email' => 'laurine.shell@exemple.com',
        'age' => 28,
        'password' => 'laCasto28',
    ],
];

$recipes = [
    [
        'title' => 'Salade niçoise',
        'recipe' => '',
        'author' => 'michel.andre@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Aïoli',
        'recipe' => '',
        'author' => 'michel.andre@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '',
        'author' => 'mat.veli@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurine.shell@exemple.com',
        'is_enabled' => false,
    ],
];

if(isset($_GET['limit']) && is_numeric($_GET['limit'])) {
    $limit = (int) $_GET['limit'];
} else {
    $limit = 100;
}