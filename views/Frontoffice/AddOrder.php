<?php
	include '../../controllers/order.controller.php';
	include_once '../../models/order.model.php';
    $orderController = new OrderController();
    $orderController->addOrder(10, $_GET['id'], "Pending");
	header('Location:Products.php');
?>