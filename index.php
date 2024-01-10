<?php

include_once __DIR__ . '/Models/category.php';

$cat = new Category();
$cat->setName('Gatto');
$cat->setIcon('cat.png');

$dog = new Category();
$dog->setName('Cane');
$dog->setIcon('dog.png');

var_dump($cat);
var_dump($dog);