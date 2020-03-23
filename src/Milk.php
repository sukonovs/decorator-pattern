<?php

use Money\Money;

class Milk implements Product
{
    private Coffee $coffee;
    private Money $price;

    public function __construct(Coffee $coffee, Money $price = null)
    {
        $this->coffee = $coffee;
        $this->price = $price ?? Money::EUR(50);
    }

    public function getPrice(): Money
    {
       return $this->price->add($this->coffee->getPrice());
    }
}