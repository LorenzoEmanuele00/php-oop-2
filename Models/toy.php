<?php 

class Toy extends Product 
{
    protected $material;

    public function setMaterial($_material)
    {
        $this->material = $_material;
    }

    public function getExpire()
    {
        return $this->material;
    }
}
