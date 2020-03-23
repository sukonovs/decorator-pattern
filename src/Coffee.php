<?php

use Money\Money;

class Coffee implements Product
{
    private Money $price;

    public function __construct(Money $price = null)
    {
        $this->price = $price ?? Money::EUR(200);
    }

    public function getPrice(): Money
    {
        return $this->price;
    }
}