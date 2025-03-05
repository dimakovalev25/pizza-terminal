<?php

namespace App\Contracts;

interface PizzaInterface
{
    public function getName(): string;

    public function getSize(): int;

    public function getPrice(): float;
}
