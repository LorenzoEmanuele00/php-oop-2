<?php

include_once __DIR__ . '/Models/category.php';
include_once __DIR__ . '/Models/products.php';
include_once __DIR__ . '/Models/food.php';
include_once __DIR__ . '/Models/toy.php';

$cat = new Category();
$cat->setName('Gatto');
$cat->setIcon('cat.png');

$dog = new Category();
$dog->setName('Cane');
$dog->setIcon('dog.png');


$croccantini = new Food($dog);
$croccantini->setProdName('croccantini');
$croccantini->setPrice(7.99);
$croccantini->setExpire('2024-10-12');

$tiragraffi = new Toy($cat);
$tiragraffi->setProdName('Tiragraffi');
$tiragraffi->setPrice(12.5);
$tiragraffi->setMaterial('Legno e Tessuto');


var_dump($cat);
var_dump($dog);
var_dump($croccantini);
var_dump($tiragraffi);