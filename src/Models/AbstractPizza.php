<?php

namespace App\Models;

use App\Contracts\PizzaInterface;

abstract class AbstractPizza implements PizzaInterface
{
    protected string $name;
    protected int $size;
    protected array $basePrice = [];

    public function __construct(string $name, int $size)
    {
        $this->name = $name;
        $this->size = $size;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    abstract public function getPrice(): float;
}
