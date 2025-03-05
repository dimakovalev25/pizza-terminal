<?php

namespace App\Models;

class Order
{
    private AbstractPizza $pizza;
    private int $size;
    private Sauce $sauce;

    public function __construct(AbstractPizza $pizza, int $size, Sauce $sauce)
    {
        $this->pizza = $pizza;
        $this->size = $size;
        $this->sauce = $sauce;
    }

    public function getPizza(): AbstractPizza
    {
        return $this->pizza;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getSauce(): Sauce
    {
        return $this->sauce;
    }


}
