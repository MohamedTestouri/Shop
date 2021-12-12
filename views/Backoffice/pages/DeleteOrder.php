<?php
	include '../../../controllers/order.controller.php';
    $orderController = new OrderController();
    $orderController->removeOrder($_GET["id"], $_GET["idProduct"]);
	header('Location:Orders.php');
?>