<?php

// var_dump(__DIR__);
// die();

require_once __DIR__.'/../vendor/autoload.php';

use Ramsey\Uuid\Uuid;

$uuid = Uuid::uuid4();

echo $uuid->toString();

// printf(
//     "UUID: %s\nVersion: %d\n",
//     $uuid->toString(),
//     $uuid->getFields()->getVersion()
// );

$user = [
    'nom' => 'Major',
    'prenom' => 'Lee',
    'age' => 34,
    'isAdmin' => false,
    'sport' => ['football','ski','bowling'],
    'uuid' =>$uuid->toString()
];

dump($user);