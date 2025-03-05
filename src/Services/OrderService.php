<?php

namespace App\Services;

use App\Models\Pizza;
use App\Models\Sauce;

class OrderService
{
    public function calculateTotal(Pizza $pizza, Sauce $sauce)
    {
        return $pizza->getPrice() + $sauce->getPrice();
    }
}