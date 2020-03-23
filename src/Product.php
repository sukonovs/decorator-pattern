<?php

use Money\Money;

interface Product
{
    public function getPrice(): Money;
}