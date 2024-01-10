<?php 

class Toy extends Product 
{
    protected $material;

    public function setMaterial($_material)
    {
        $this->material = $_material;
    }

    public function getMaterial()
    {
        return $this->material;
    }
}
