<?php

class User 
{
    protected $name;
    protected $money;

    public function setUserName($_name) 
    {
        if (strlen($_name) < 30)
        {
            $this->name = $_name;
        }
    }

    public function getUserName() 
    {
       return $this->name;
    }

    public function setMoney($_money) 
    {
        if ($_money > 0)
        {
            $this->money = number_format($_money, 2);
        }
    }

    public function getMoney() 
    {
       return $this->money;
    }

    public function checkMoney($_cart) 
    {
        $total = 0;
        foreach ($_cart as $item) 
        {
            $total += $item->getPrice();
        }

        if ($total <= $this->money)
        {
            // echo 'Pagamento Completato';
        }
        else
        {
            throw new Exception('Fondi non sufficenti');
        }
    }
    
}