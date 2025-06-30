<?php
	include 'includes/autoloader.inc.php';

	$cart = new Cart();
	$carts = $cart->get_cart($_SESSION['id']);
	$car = new Car();
	$cars = $car->get_car();

	$count = 0;
	$total = 0;
	$user_id = $_SESSION['id'];

	$cartItems = [];
	while($row = $carts->fetch_assoc()){
		array_push($cartItems, $row);
		$total += ($row['product_price'] * $row['quantity']);
		$count++;
	}
	$_SESSION['cart'] = count($cartItems);

	if(isset($_POST['cnl-submit'])){
		$cart->delete_cart($_GET['cnl_id']);
		$_SESSION['cart'] -= 1;
		header("Location: cart.php");
	}