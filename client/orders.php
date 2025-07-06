<?php
session_start();
require_once __DIR__.'/../includes/client.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<?php require_once __DIR__ . '/../includes/meta-tags.php'; ?>
	<link rel="stylesheet" href="/css/admin.css">
	<title>AVIDHAUL TRUCKERS | orders</title>
</head>

<body>
	<div class="order-all">
		<div class="heading">
			<h1><a href="javascript:history.back();"><i class="fas fa-angle-double-left"></i></a>AVIDHAUL TRUCKERS
				<span> Admin </span>
			</h1>
		</div>
		<div class="user-info">
			<h3>Your details</h3>
			<?php
			echo '
					<h4><i class="fas fa-user"></i> ' . $_SESSION['username'] . '</h4>
					<h4><i class="fas fa-envelope"></i> ' . $_SESSION['email'] . '</h4>
					';
			?>
			<?php
			$user_order = new Order();
			$user_order = $user_order->get_order($order_id);
			$user_order = $user_order->fetch_assoc();
			echo '
					<h4><i class="fas fa-map-marker-alt"></i> ' . $user_order['address'] . ' | ' . $user_order['city'] . '</h4>
					<h4><i class="fas fa-mobile-alt"></i> ' . $user_order['phone'] . '</h4>
					<h4><i class="fas fa-mail-bulk"></i> ' . $user_order['postal_code'] . '</h4>
					';
			?>
		</div>
		<div class="order-container">
			<h3>Order details</h3>
			<?php
			echo '<div class="items">';
			while ($row = $order_items->fetch_assoc()) {
				$product = $row['product_id'];
				$isSpare = $row['is_sparepart'];
				if ($isSpare == 1) {
					$item = new Product();
					$item = $item->get_product($product);
					$item = $item->fetch_assoc();

					echo '
							<div class="item">
								<img src="/assets/Product_images/' . $item['image'] . '">
								<h5 class="item-name">' . $item['model'] . '</h5>
								<h5 class="item-name">' . $item['manufacturer'] . '</h5>
								<h6 class="item-price">$' . $row['product_price'] . '</h6>
								<h6 style="color: #f00000;" class="item-quantity">Quantity: ' . $row['quantity'] . '</h6>
							</div>
							';
				} else {
					$item = new Car();
					$item = $item->get_car($product);
					$item = $item->fetch_assoc();

					if ($item) {
						echo '
							<div class="item">
								<img src="/assets/Car_images/' . $item['image'] . '">
								<h5 class="item-name">' . $item['model'] . '</h5>
								<h5 class="item-name">' . $item['manufacturer'] . '</h5>
								<h6 class="item-price">$' . $row['product_price'] . '</h6>
								<h6 style="color: #f00000;" class="item-quantity">Quantity: ' . $row['quantity'] . '</h6>
							</div>
							';
					}
				}
			}
			echo '</div>'
				?>
		</div>
	</div>
	<footer>
		<div class="social">
			<h2>FLLOW US</h2>
			<a href="#"> <i class="fab fa-facebook"> <span></span> </i> </a>
			<a href="#"> <i class="fab fa-instagram"> <span></span> </i> </a>
			<a href="#"> <i class="fab fa-twitter"> <span></span> </i> </a>
			<a href="#"> <i class="fab fa-youtube"> <span></span> </i> </a>
		</div>
		<div class="credit">
			<h1>AVIDHAUL TRUCKERS </h1>
		</div>
	</footer>
</body>

</html>