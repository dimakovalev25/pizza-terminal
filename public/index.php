<?php
require __DIR__ . '/../vendor/autoload.php';


use App\Controllers\OrderController;

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $orderController = new OrderController();
    echo $orderController->processOrder($_POST);
}

