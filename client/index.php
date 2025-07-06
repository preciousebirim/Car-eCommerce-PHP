<?php
session_start();
require_once __DIR__.'/../includes/client.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="utf-8">
<?php require_once __DIR__.'/../includes/meta-tags.php'; ?>
	<title> AVIDHAUL TRUCKERS | Dashboard</title>
	<link rel="stylesheet" href="/css/client.css">
</head>

<body>
	<header>
		<div class="heading">
			<h1><a href="/"><i class="fas fa-angle-double-left"></i></a>AVIDHAUL TRUCKERS <span> Dashboard </span>
			</h1>
		</div>
		<nav>
			<h3>ORDERS</h3>
			<h3>HIRE REQUEST</h3>
            <?php
            if ($_SESSION['admin'] == 1) {
                echo '<a href="/admin" style="color: #000; text-decoration: none;"><h3><i class="fas fa-door-open"></i> ADMIN PORTAL</h3></a>';
            }

?>
		</nav>
	</header> <br>
	<?php
	if (isset($_SESSION['message'])) {
		if ($_SESSION['message'] == "Truck added successfully") {
			echo '<h6 class="success">' . 'Truck added successfully' . '</h6>';
		} else {
			echo '<h6 class="error">' . $_SESSION["message"] . '</h6>';
		}
		unset($_SESSION['message']);
	}
	?>
	<div id='tab' class="orders">
		<div class="container">
			<div class="orders-flex-box">
				<div class="orders-table">
					<h1>My orders</h1>
					<table>
						<thead>
							<th>id</th>
							<th>Date</th>
							<th>Order items</th>
							<th>Delete</th>
						</thead>
						<tbody>
							<?php
							$i = 1;
                            foreach($orders as $row) {
                                echo '<tr>
    									<td>' . $i . '</td>
    									<td>' . date('Y-m-d H:i A', strtotime($row["created_at"])) . '</td>
    									<td class="user-btn">
    											<a href="orders.php?order_id=' . $row["id"] . '"><i class="fas fa-address-card"></i>
    									</td>
    									<td class="delete-btn">
    										<form action="/client/?del_id=' . $row['id'] . '" method="post">
                                                <button type="submit" name="delete-submit-cart" style="cursor:pointer; border:none; background: transparent; color: #f54c4c; width:100%;"> <i class="fas fa-trash-alt"></i> </button>
    										</form>
    									</td>
    								</tr>';
								$i++;
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
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
	<script type="text/javascript" src="/javaScript/client.js"></script>
</body>

</html>