<?php

$config = [
    'db' => [
        'host' => '',
        'port' => null,
        'db' => '',
        'user' => '',
        'pass' => '',
        'charset' => '',
    ]
];

$localDbFile = __DIR__ . '/db.local.php';
//verifier qu'il existe.
if(is_file($localDbFile)) {
    // On override db.php par db.local.php
    $config['db'] = array_replace($config['db'], (require $localDbFile)['db'] ?? []);
}

// on retourne la bonne config.
return $config;

