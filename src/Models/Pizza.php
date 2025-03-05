<?php

namespace App\Models;

class Pizza extends AbstractPizza
{

    protected array $basePrice = [
        'pepperoni' => 300,
        'hawaiian' => 350
    ];

    public function getPrice(): float
    {
        return isset($this->basePrice[$this->name])
            ? $this->basePrice[$this->name] * ($this->size / 21)
            : 0;
    }

}