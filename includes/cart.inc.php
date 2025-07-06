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
		$crow['hire_days']= 1;
		if($row['is_hire'] == 1){
			$carItem = $car->get_car($row['product_id']);
			if($carItem->num_rows > 0){
				$carRow = $carItem->fetch_assoc();
				$row['hire_days'] = $row['product_price'] / ($carRow['hire_price'] ?? 1);
			}
		}
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