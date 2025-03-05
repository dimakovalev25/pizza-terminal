<?php

namespace App\Controllers;

use App\Models\Pizza;
use App\Models\Sauce;
use App\Services\OrderService;

class OrderController
{
    public function processOrder($data)
    {
        header("Content-Type: application/json");
        header("Access-Control-Allow-Origin: *");

        $pizza = new Pizza($data['pizza'], $data['size']);
        $sauce = new Sauce($data['sauce']);
        $orderService = new OrderService();

        $totalPrice = $orderService->calculateTotal($pizza, $sauce);

        echo json_encode([
            'message' => "Вы заказали {$pizza->getName()} ({$pizza->getSize()} см) с соусом {$sauce->getName()}.",
            'total' => "Цена: {$totalPrice} руб."
        ]);

        exit;
    }


}
