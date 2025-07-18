<?php
session_start();
require_once __DIR__.'/../includes/admin.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="utf-8">
<?php require_once __DIR__.'/../includes/meta-tags.php'; ?>
	<title> AVIDHAUL TRUCKERS | home</title>
	<link rel="stylesheet" href="/css/admin.css">
</head>

<body>
	<header>
		<div class="heading">
			<h1><a href="/admin"><i class="fas fa-angle-double-left"></i></a>AVIDHAUL TRUCKERS <span> Admin </span>
			</h1>
		</div>
		<nav>
			<h3>ORDERS</h3>
			<h3>USERS</h3>
			<h3>MARKETERS</h3>
			<h3>MY THOUGHTS</h3>
			<h3>TRUCKS</h3>
			<h3>GALLARY</h3>
			<h3>SPARE PARTS</h3>
			<a href="/client" style="color: #000; text-decoration: none;"><h3><i class="fas fa-door-open"></i> CLIENT PORTAL</h3></a>
		</nav>
	</header>
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
					<h1><?php echo isset($order_user_id) ? 'User' : 'All'; ?> orders</h1>
					<table>
						<thead>
							<th>id</th>
							<th>user id</th>
							<th>Order items</th>
							<th>Delete</th>
						</thead>
						<tbody>
							<?php
							$i = 1;
							$o = isset($order_user_id) ? $order_user_items : $orders;
							while ($row = $o->fetch_assoc()) {
								echo '<tr>
    									<td>' . $i . '</td>
    									<td>' . $row["user_id"] . '</td>
    									<td class="user-btn">
    											<a href="orders.php?order_id=' . $row["id"] . '"><i class="fas fa-address-card"></i>
    									</td>
    									<td class="delete-btn">
    										<form action="admin.php?del_id=' . $row['id'] . '" method="post">
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
	<div id='tab' class="users">
		<div class="container">
			<div class="users-flex-box">
				<div class="users-table">
					<h1>Users</h1>
					<table>
						<thead>
							<th>id</th>
							<th>Name</th>
							<th>Email</th>
							<th>Admin</th>
							<th>Delete</th>
						</thead>
						<tbody>
							<?php
							$i = 1;
							while ($row = $users->fetch_assoc()) {
								echo '<tr>
    									<td>' . $i . '</td>
    									<td>' . $row["username"] . '</td>
    									<td>' . $row["email"] . '</td>';
								if ($row['admin'] == 0) {
									echo '<td style="text-align: center; color: #db3737;"><i class="fas fa-times"></i></td>';
								} else {
									echo '<td style="text-align: center; color: #0ac910;"><i class="fas fa-check"></i></td>';
								}
								echo '<td class="delete-btn">
    										<form action="admin.php?del_user=' . $row['id'] . '" method="post">
                                                <button type="submit" name="delete-submit-user" style="cursor:pointer; border:none; background: transparent; color: #f54c4c; width:100%;"> <i class="fas fa-trash-alt"></i> </button>
    										</form>
    									</td>
                                        <td style="display: none;">' . $row['id'] . '</td>
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
	<div id='tab' class="marketers">
		<div class="container">
			<div class="stories-flex-box">
				<div class="stories-table">
					<h1>Marketers</h1>
					<table>
						<thead>
							<th>id</th>
							<th>name</th>
							<th>email</th>
							<th>View</th>
							<th>Delete</th>
						</thead>
						<tbody>
							<?php
							while ($row = $marketers->fetch_assoc()) {
								echo '<tr>
                                            <td>' . $row['id'] . '</td>
                                            <td>' . $row['name'] . '</td>
                                            <td>' . $row['email'] . '</td>
                                            <td id="show-hide-table">';
								echo '<a href="./marketer.php?id=' . $row['id'] . '">
                                                        <button class="story-btn" type="button" ><i style="text-align: center; color: #0ac910;" class="fas fa-check"></i></button>
                                                    </a>';
								
								echo '</td>
                                            <td>
                                                <form action="admin.php?delete_marketer=' . $row['id'] . '" method="post">
                                                    <button class="story-delete-btn" type="submit" name="story-delete-submit"><i style="text-align: center; color: #db3737;" class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>';
							}
							?>
						</tbody>
					</table>
				</div>
				<div class="edit">
					<h1>Add new</h1>
					<div class="add">
						<form action="admin.php" method="post" enctype="multipart/form-data">
							<p>Name</p>
							<input type="text" name="name">
							<p>Email</p>
							<input type="email" name="email">
							<br><br>
							<input class="add-marketer-submit" type="submit" name="add-marketer-submit" value="Add">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id='tab' class="my-thoughts">
		<div class="container">
			<div class="thoughts-flex-box">
				<div class="thoughts-table">
					<h1>My thoughts</h1>
					<table>
						<thead>
							<th>id</th>
							<th>title</th>
							<th>Time</th>
							<th>Delete</th>
						</thead>
						<tbody>
							<?php
							$i = 1;
							while ($row = $thoughts->fetch_assoc()) {
								echo '<tr>
                                            <td>' . $i . '</td>
                                            <td>' . $row['title'] . '</td>
                                            <td>' . $row['create_time'] . '</td>
                                            <td>
                                                <form action="admin.php?delete_thought=' . $row['id'] . '" method="post">
                                                    <button class="thoughts-delete-btn" type="submit" name="thoughts-delete-submit"><i style="text-align: center; color: #db3737;" class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>';
								$i++;
							}
							?>
						</tbody>
					</table>
				</div>
				<div class="edit-thoughts">
					<h1>Add new</h1>
					<div class="add-thoughts">
						<form action="admin.php" method="post" enctype="multipart/form-data">
							<p>Title</p>
							<input type="text" name="title">
							<p>Tag</p>
							<input type="text" name="tag">
							<p>Body</p>
							<textarea name="body"></textarea>
							<p class="mini">Image</p>
							<input type="file" name="image">
							<input class="add-thoughts-submit" type="submit" name="add-thoughts-submit" value="Add">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div id='tab' class="cars">
		<div class="container">
			<div class="flex-box">
				<div class="cars-table">
					<h1>Now on sell</h1>
					<table>
						<thead>
							<th>id</th>
							<th>Manufacturer</th>
							<th>Model</th>
							<th>Price</th>
							<th>Type</th>
							<th>Edit</th>
							<th>Delete</th>
						</thead>
						<tbody>
							<?php
							$i = 1;
							while ($row = $cars->fetch_assoc()) {
								echo '<tr id=' . $row['id'] . '>
    									<td>' . $i . '</td>
    									<td>' . $row["manufacturer"] . '</td>
    									<td>' . $row["model"] . '</td>
                                        <td style="display:none;">' . $row["condition"] . '</td>
                                        <td style="display:none;">' . $row["phone"] . '</td>
                                        <td style="display:none;">' . $row["email"] . '</td>
    									<td>$' . $row["price"] . '</td>
                                        <td style="display:none;">' . $row["battery"] . '</td>
                                        <td style="display:none;">' . $row["fuel"] . '</td>
                                        <td style="display:none;">' . $row["total_run"] . '</td>
                                        <td style="display:none;">' . $row["gear"] . '</td>
										<td style="display:none;">' . $row["hire_price"] . '</td>
										<td style="display:none;">' . $row["for_sell"] . '</td>
										<td style="display:none;">' . $row["for_hire"] . '</td>
										<td style="display:none;">' . $row["hire_availability"] . '</td>
                                        
										<td>' . $row["car_type"] . ' </td>
    									<td class="edit-btn" onclick="update(' . $row['id'] . ')">
    										<form method="post">
    											<i class="fas fa-edit"></i>
    										</form>
    									</td>
    									<td class="delete-btn">
    										<form action="admin.php?id=' . $row['id'] . '" method="post">
                                                <button type="submit" name="delete-submit" style="cursor:pointer; border:none; background: transparent; color: #f54c4c; width:100%;"> <i class="fas fa-trash-alt"></i> </button>
    										</form>
    									</td>
                                        <td style="display: none;">' . $row['id'] . '</td>
    								</tr>';
								$i++;
							}
							?>
						</tbody>
					</table>
				</div>
				<div class="edit-cars">
					<h1>Add new</h1>
					<div class="add">
						<form action="admin.php" method="post" enctype="multipart/form-data">
							<p>Manufacturer</p>
							<input type="text" name="manufacturer">
							<p>Model</p>
							<input type="text" name="model">
							<p>Condition</p>
							<textarea name="condition"></textarea>
							<input type="hidden" value="" name="phone">
							<input type="hidden" value="" name="email">
							<p>For sell</p>
							<input type="checkbox" name="for_sell" checked>
							<p>For hire</p>
							<input type="checkbox" name="for_hire"  data-panel="hireOpts">

							<div id="hireOpts" style="display: none;">

								<p>Hire price</p>
								<input type="text" name="hire_price">
								<p>Hire Availability</p>
								<input type="checkbox" name="hire_availability" checked>
							</div>

							<div class="add-mini">
								<div class="add-mini-1">
									<p class="mini"> Sale Price</p>
									<input class="mini" type="text" name="price">
									<p class="mini">Speed</p>
									<input class="mini" type="text" name="speed">
									<p class="mini">Mileage</p>
									<input class="mini" type="text" name="mileage">
									<p class="mini">Battery</p>
									<input class="mini" type="text" name="battery">
									<p class="mini">Fuel</p>
									<input class="mini" type="text" name="fuel">
								</div>
								<div class="add-mini-2">
									<p class="mini">Total run</p>
									<input class="mini" type="text" name="total_run">
									<p class="mini">Gear</p>
									<input class="mini" type="text" name="gear">
									<p class="mini">Truck type</p>
									<input class="mini" type="text" name="car_type">
									<p class="mini">Image</p>
									<input type="file" name="image">
									<input class="add-car-submit" type="submit" name="add-car-submit" value="Add">
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="update-cars">
					<h1>Update</h1>
					<div class="add">
						<form action="admin.php" method="post" enctype="multipart/form-data">
							<input class="id_holder" type="hidden" name="id" value="">
							<p>Condition</p>
							<textarea name="condition"></textarea>
							<input type="hidden" name="phone">
							<input type="hidden" name="email">
							<p class="mini">Sale Price</p>
									<input class="mini" type="text" name="price">
									
							<div class="update-mini">
								<div class="update-mini-1">
									
									<p class="mini">Battery</p>
									<input class="mini" type="text" name="battery">
									<p class="mini">Fuel</p>
									<input class="mini" type="text" name="fuel">
									<p class="mini">Total run</p>
									<input class="mini" type="text" name="total_run">
									<p class="mini">Gear</p>
									<input class="mini" type="text" name="gear">
									<p>For sell</p>
									<input type="checkbox" name="for_sell">
									<p>For hire</p>
									<input type="checkbox" name="for_hire" data-panel="hireOpts2">
									<div id="hireOpts2" style="display: none;">

										<p>Hire price</p>
										<input type="text" name="hire_price">
										<p>Hire Availability</p>
										<input type="checkbox" name="hire_availability" checked>
									</div>
									<input class="add-car-submit" type="submit" name="update-car-submit" value="Update">
									<div class="add-car-decline" onclick="decline()"> Decline </div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id='tab' class="gallary">
		<section class="gallary">
			<h1>MY GALLARY</h1>
			<div class="gallary-img">
				<div class="row">
					<div class="column">
						<div class="overlay">
							<form action="admin.php" method="post" enctype="multipart/form-data">
								<input type="file" name="image">
								<button type="submit" name="image1"> Update</button>
							</form>
						</div>
						<div class="overlay">
							<form action="admin.php" method="post" enctype="multipart/form-data">
								<input type="file" name="image">
								<button type="submit" name="image2"> Update</button>
							</form>
						</div>
					</div>
					<div class="column">
						<div class="overlay-port">
							<form action="admin.php" method="post" enctype="multipart/form-data">
								<input type="file" name="image">
								<button type="submit" name="image3"> Update</button>
							</form>
						</div>
					</div>
					<div class="column">
						<div class="overlay">
							<form action="admin.php" method="post" enctype="multipart/form-data">
								<input type="file" name="image">
								<button type="submit" name="image4"> Update</button>
							</form>
						</div>
						<div class="overlay">
							<form action="admin.php" method="post" enctype="multipart/form-data">
								<input type="file" name="image">
								<button type="submit" name="image5"> Update</button>
							</form>
						</div>
					</div>
					<div class="column">
						<div class="overlay">
							<form action="admin.php" method="post" enctype="multipart/form-data">
								<input type="file" name="image">
								<button type="submit" name="image6"> Update</button>
							</form>
						</div>
						<div class="overlay">
							<form action="admin.php" method="post" enctype="multipart/form-data">
								<input type="file" name="image">
								<button type="submit" name="image7"> Update</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div id='tab' class="products">
		<div class="container">
			<div class="flex-box">
				<div class="product-table">
					<h1>Now on sell</h1>
					<table>
						<thead>
							<th>id</th>
							<th>Manufacturer</th>
							<th>Model</th>
							<th>Price</th>
							<th>Type</th>
							<th>Edit</th>
							<th>Delete</th>
						</thead>
						<tbody>
							<?php
							$i = 1;
							while ($row = $products->fetch_assoc()) {
								echo '<tr id=' . $row['id'] . '>
    									<td>' . $i . '</td>
    									<td>' . $row["manufacturer"] . '</td>
    									<td>' . $row["model"] . '</td>
                                        <td style="display:none;">' . $row["condition"] . '</td>
                                        <td style="display:none;">' . $row["phone"] . '</td>
                                        <td style="display:none;">' . $row["email"] . '</td>
    									<td>$' . $row["price"] . '</td>
                                        <td>' . $row["type"] . ' </td>
    									<td class="edit-btn" onclick="update_product(' . $row['id'] . ')">
    										<form method="post">
    											<i class="fas fa-edit"></i>
    										</form>
    									</td>
    									<td class="delete-btn">
    										<form action="admin.php?product_del_id=' . $row['id'] . '" method="post">
                                                <button type="submit" name="delete-submit" style="cursor:pointer; border:none; background: transparent; color: #f54c4c; width:100%;"> <i class="fas fa-trash-alt"></i> </button>
    										</form>
    									</td>
                                        <td style="display: none;">' . $row['id'] . '</td>
    								</tr>';
								$i++;
							}
							?>
						</tbody>
					</table>
				</div>
				<div class="edit-products">
					<h1>Add new</h1>
					<div class="add">
						<form action="admin.php" method="post" enctype="multipart/form-data">
							<p>Manufacturer</p>
							<input type="text" name="manufacturer">
							<p>Model</p>
							<input type="text" name="model">
							<p>Condition</p>
							<textarea name="condition"></textarea>
							<p>Phone</p>
							<input type="text" name="phone">
							<p>Email</p>
							<input type="text" name="email">

							<div class="add-mini">
								<div class="add-mini-1">
									<p class="mini">Price</p>
									<input class="mini" type="text" name="price">
									<p class="mini">Type</p>
									<input class="mini" type="text" name="type">
								</div>
								<div class="add-mini-2">
									<p class="mini">Image</p>
									<input type="file" name="image">
									<input class="add-car-submit" type="submit" name="add-product-submit" value="Add">
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="update-products">
					<h1>Update</h1>
					<div class="add">
						<form action="admin.php" method="post" enctype="multipart/form-data">
							<input class="id_holder" type="hidden" name="id" value="">
							<p>Condition</p>
							<textarea name="condition"></textarea>
							<p>Phone</p>
							<input type="text" name="phone">
							<p>Email</p>
							<input type="text" name="email">

							<div class="update-mini">
								<div class="update-mini-1">
									<p class="mini">Price</p>
									<input class="mini" type="text" name="price">
									<input class="add-car-submit" type="submit" name="update-product-submit"
										value="Upadte">
									<div class="add-car-decline" onclick="decline_product()"> Decline </div>
								</div>
							</div>
						</form>
					</div>
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
	<script type="text/javascript" src="/javaScript/admin.js"></script>
	<script type="text/javascript" src="/javaScript/story.js"></script>
	<?php
	if (isset($_POST['tab'])) {
		echo "<script>
		const tabS = document.querySelectorAll('nav h3');
			tabS[".$_POST['tab']."]?.click();
			</script>";

	}


	?>
</body>

</html>