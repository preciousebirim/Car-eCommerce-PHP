<?php
	include 'includes/autoloader.inc.php';

	$user = new User();

	$car = new Car();
	$cars = $car->get_cars($_GET['type'] ?? '');
	$carsHire = $car->get_cars($_GET['type'] ?? '', true);

	$cart = new Cart();

	

	$product = new Product();
	$products = $product->get_product();

	$thought = new Thought();
	$thoughts = $thought->get_thought();
	$array = array();
	while($row = $thoughts->fetch_assoc()){
		array_push($array, $row);
	}
	$thoughts = array_reverse($array);

	$gallary = new Gallary();
	$gallaries = $gallary->get_gallary();

	if(isset($_POST['login-submit'])){
		$error = $user->login($_POST);
		if(empty($error)){
			$selected_user = $user->get_user($_POST['email']);
			$row = $selected_user->fetch_assoc();
			$carts = $cart->get_cart($row['id']);
			$cart_num = $carts->num_rows;
			$_SESSION['id'] = $row['id'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['admin'] = $row['admin'];
			$_SESSION['cart'] = $cart_num;
			$_SESSION['email'] = $row['email'];
		}
		header("Location: /client/");
	}
	if(isset($_POST['logout-submit'])){
		session_unset();
		session_destroy();
		header("Location: /");
	}
	if(isset($_POST['signup-submit'])){
		$error = $user->insert_user($_POST['username'], $_POST['email'], $_POST['password'], $_POST['re-password'], $_POST['marketer'] ?? '');
		header("Location: /");
	}
