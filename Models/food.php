<?php 

class Food extends Product 
{
    protected $expire_date;

    public function setExpire($_expire_date)
    {
        if (date('Y-m-d') < $_expire_date)
        {
            $this->expire_date = $_expire_date;
        }
    }

    public function getExpire()
    {
        return $this->expire_date;
    }
}

