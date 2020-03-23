<?php

use Money\Money;
use PHPUnit\Framework\TestCase;

class PatternTest extends TestCase
{
    public function testDefaultPrice()
    {
        $coffee = new Coffee();
        $coffeeWithMilk = new Milk($coffee);

        $this->assertEquals(Money::EUR(200), $coffee->getPrice());
        $this->assertEquals(Money::EUR(250), $coffeeWithMilk->getPrice());
    }

    public function testCustomPrices()
    {
        $coffee = new Coffee(Money::EUR(100));
        $coffeeWithMilk = new Milk($coffee, Money::EUR(200));

        $this->assertEquals(Money::EUR(100), $coffee->getPrice());
        $this->assertEquals(Money::EUR(300), $coffeeWithMilk->getPrice());
    }
}