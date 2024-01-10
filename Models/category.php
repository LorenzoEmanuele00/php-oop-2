<?php
class Category
{
    protected $name;
    protected $icon;

    public function setName($_name) 
    {
        if (strlen($_name) < 30)
        {
            $this->name = $_name;
        }
    }

    public function getName() 
    {
       return $this->name;
    }

    public function setIcon($_icon) 
    {
        if (strlen($_icon) < 50)
        {
            $this->icon = $_icon;
        }
    }

    public function getIcon() 
    {
       return $this->icon;
    }
}