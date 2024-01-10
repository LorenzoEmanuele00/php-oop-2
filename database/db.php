<?php

include_once __DIR__ . '/../Models/category.php';
include_once __DIR__ . '/../Models/products.php';
include_once __DIR__ . '/../Models/food.php';
include_once __DIR__ . '/../Models/toy.php';
include_once __DIR__ . '/../Models/user.php';

$cat = new Category();
$cat->setName('Gatto');
$cat->setIcon('fa-solid fa-cat');

$dog = new Category();
$dog->setName('Cane');
$dog->setIcon('fa-solid fa-dog');

$croccantini = new Food($dog);
$croccantini->setProdName('Croccantini');
$croccantini->setPrice(7.99);
$croccantini->setExpire('2024-10-12');

$pesce = new Food($cat);
$pesce->setProdName('Pesce');
$pesce->setPrice(15.99);
$pesce->setExpire('2024-2-9');

$tiragraffi = new Toy($cat);
$tiragraffi->setProdName('Tiragraffi');
$tiragraffi->setPrice(12.5);
$tiragraffi->setMaterial('Legno e Tessuto');

$osso = new Toy($dog);
$osso->setProdName('Osso');
$osso->setPrice(10);
$osso->setMaterial('Legno e Tessuto');

$user1 = new User();
$user1->setUserName('Lorenzo');
$user1->setMoney(5.50);

$catalog = [
    $croccantini,
    $pesce,
    $tiragraffi,
    $osso,
];

$cart = [
    $pesce,
    $tiragraffi,
];

// var_dump($cat);
// var_dump($dog);
// var_dump($croccantini);
// var_dump($tiragraffi);

// var_dump($catalog);