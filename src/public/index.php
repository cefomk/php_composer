<?php

// var_dump(__DIR__);
// die();

require_once __DIR__.'/../../vendor/autoload.php';

// use Ramsey\Uuid\Uuid;
use App\Models\User;
use Symfony\Component\VarDumper\VarDumper;

// $uuid = Uuid::uuid4();

// echo $uuid->toString();

// printf(
//     "UUID: %s\nVersion: %d\n",
//     $uuid->toString(),
//     $uuid->getFields()->getVersion()
// );

// $user = [
//     'nom' => 'Major',
//     'prenom' => 'Lee',
//     'age' => 34,
//     'isAdmin' => false,
//     'sport' => ['football','ski','bowling'],
//     'uuid' =>$uuid->toString()
// ];

// dump($user);

// $person = new \App\Models\User();
$person = new User();

$person->setId(1);
$person->setName('Mouloud Paris');

// dump($person);
VarDumper::dump(dd($person));

echo 'test';