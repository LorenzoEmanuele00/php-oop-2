<?php

include_once __DIR__ . '/category.php';

class Product 
{
    protected $name;
    protected $image;
    protected $price;
    public Category $category;

    function __construct(Category $_category) {
        $this->category = $_category;
    }

    public function setPrice($_price) 
    {
        if ($_price > 0)
        {
            $this->price = number_format($_price, 2);
        }
    }

    public function getPrice() 
    {
       return $this->price;
    }

    public function setProdName($_name) 
    {
        if (strlen($_name) < 30)
        {
            $this->name = $_name;
        }
    }

    public function getProdName() 
    {
       return $this->name;
    }

    public function getCategory()
    {
        return $this->category;
    }
}