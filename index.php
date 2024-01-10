<?php

include_once __DIR__ . '/Models/category.php';
include_once __DIR__ . '/Models/products.php';

$cat = new Category();
$cat->setName('Gatto');
$cat->setIcon('cat.png');

$dog = new Category();
$dog->setName('Cane');
$dog->setIcon('dog.png');

$cuccia = new Product($dog);
$cuccia->setProdName('Cuccia Cane');
$cuccia->setPrice(12.3);


var_dump($cat);
var_dump($dog);
var_dump($cuccia);