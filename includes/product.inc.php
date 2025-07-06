<?php
include 'includes/autoloader.inc.php';

$car = new Car();
$cart = new Cart();
$user = new User();
$product = new Product();

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$cars = $car->get_car($id);
	$row = $cars->fetch_assoc();
}
if (isset($_GET['product_id'])) {
	$id = $_GET['product_id'];
	$products = $product->get_product($id);
	$row = $products->fetch_assoc();
}
if (isset($_POST['add-to-cart'])) {
	$isSparePart = isset($_POST['sparepart']) ? 1 : 0;
	$isHire = isset($_POST['is_hire']) ? 1 : 0;
	$days = isset($_POST['days']) ? ((int) $_POST['days'] ): 1;
	$price =$isHire ? $row['price'] * $days : $row['price'];
	
	$cart->add_to_cart($row['id'], $row['manufacturer'], $price, $_SESSION['id'], $_SESSION['username'], $row['model'], $_SESSION['email'], $row['image'], $_POST['quantity'], $isHire, $isSparePart);
	$_SESSION['cart'] = ($cart->get_cart($_SESSION['id']))->num_rows;
	header("Location: index.php");
	exit();
}
