<?php
	require_once __DIR__.'/../includes/autoloader.inc.php';

	$order = new Order();
	$orders = $order->get_user_orders($_SESSION['id']);
    
    if(isset($_GET['order_id'])){
		$order_items = $order->get_items($_GET['order_id']);
		$order_id = $_GET['order_id'];
	}

	if(isset($_GET['del_id'])){
		$order->delete_order($_GET['del_id']);
		header("Location: /client/");
	}