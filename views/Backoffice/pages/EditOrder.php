<?php
	include '../../../controllers/order.controller.php';
    $orderController = new OrderController();
    $orderController->editStatus($_GET["id"]);
	header('Location:Orders.php');
?>