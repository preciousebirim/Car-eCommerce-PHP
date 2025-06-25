<?php
	include 'includes/autoloader.inc.php';

	$car = new Car();
	$cars = $car->get_car();

	if(isset($_POST['add-car-submit'])){
		$file = $_FILES['image'];
		$car->insert_car($_POST, $file);
		$_SESSION['message'] = 'Car added successfully';
		header("Location: admin.php");
	}
	if(isset($_GET['id'])){
		$car->delete_car($_GET['id']);
		header("Location: admin.php");
	}
	if(isset($_POST['update-car-submit'])){
		$car->update_car($_POST);
		header("Location: admin.php");
	}

	$order = new Order();
	$orders = $order->get_order();

	if(isset($_GET['order_id'])){
		$order_items = $order->get_items($_GET['order_id']);
		$order_id = $_GET['order_id'];
	}

	if(isset($_GET['del_id'])){
		$order->delete_order($_GET['del_id']);
		header("Location: admin.php");
	}

	$user = new User();
	$users = $user->get_user();
	if(isset($_GET['del_user'])){
		$user->delete_user($_GET['del_user']);
		header("Location: admin.php");
	}

	$marketer = new Marketer();
	$marketers = $marketer->get_marketer();
	if(isset($_POST['add-marketer-submit'])){
		$marketer->marketer($_POST['name'], $_POST['email'], 1, $_POST['id'] ?? '');
		header("Location: admin.php?tab=marketer");
	}
	if(isset($_GET['marketer_show'])){
		$marketer->marketer_visibality($_GET['marketer_show']);
		header("Location: admin.php");
	}
	if(isset($_GET['delete_marketer'])){
		$marketer->delete_marketer($_GET['delete_story']);
		header("Location: admin.php");
	}

	$product = new Product();
	$products = $product->get_product();
	if(isset($_POST['update-product-submit'])){
		$product->update_product($_POST);
		header("Location: admin.php");
	}
	if(isset($_POST['add-product-submit'])){
		$file = $_FILES['image'];
		$product->insert_product($_POST, $file);
		$_SESSION['message'] = 'Product added successfully';
		header("Location: admin.php");
	}
	if(isset($_GET['product_del_id'])){
		$product->delete_product($_GET['product_del_id']);
		header("Location: admin.php");
	}

	$thought = new Thought();
	$thoughts = $thought->get_thought();
	if(isset($_POST['add-thoughts-submit'])){
		$file = $_FILES['image'];
		$thought->insert_thought($_POST, $file);
		header("Location: admin.php");
	}
	if(isset($_GET['delete_thought'])){
		$thought->delete_thought($_GET['delete_thought']);
		header("Location: admin.php");
	}


	$gallary = new Gallary();
	if(isset($_POST['image1'])){
		$file = $_FILES['image'];
		$coloum = 'image1';
		$gallary->insert_gallary($file,  $coloum);
		header("Location: admin.php");
	}
	if(isset($_POST['image2'])){
		$file = $_FILES['image'];
		$coloum = 'image2';
		$gallary->insert_gallary($file,  $coloum);
		header("Location: admin.php");
	}
	if(isset($_POST['image3'])){
		$file = $_FILES['image'];
		$coloum = 'image3';
		$gallary->insert_gallary($file,  $coloum);
		header("Location: admin.php");
	}
	if(isset($_POST['image4'])){
		$file = $_FILES['image'];
		$coloum = 'image4';
		$gallary->insert_gallary($file,  $coloum);
		header("Location: admin.php");
	}
	if(isset($_POST['image5'])){
		$file = $_FILES['image'];
		$coloum = 'image5';
		$gallary->insert_gallary($file,  $coloum);
		header("Location: admin.php");
	}
	if(isset($_POST['image6'])){
		$file = $_FILES['image'];
		$coloum = 'image6';
		$gallary->insert_gallary($file,  $coloum);
		header("Location: admin.php");
	}
	if(isset($_POST['image7'])){
		$file = $_FILES['image'];
		$coloum = 'image7';
		$gallary->insert_gallary($file,  $coloum);
		header("Location: admin.php");
	}
