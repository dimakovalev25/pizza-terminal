<?php

namespace App\Models;

use App\Contracts\SauceInterface;

class Sauce implements SauceInterface
{
    private string $name;

    private $prices = [
        'cheese' => 50,
        'bbq' => 500
    ];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->prices[$this->name] ?? 100;
    }
}
