<?php
session_start();
require_once __DIR__.'/../includes/autoloader.inc.php';
$marketer = new Marketer();
$marketers = $marketer->get_marketer();

$m = $marketer->get_marketer($_GET['id'] ?? '');
if ($m->num_rows !== 1) {
    header("Location: admin.php?tab=marketer");
}
$row = $m->fetch_assoc();

$m = $marketer->get_marketer_clients($_GET['id'] ?? '');
$clients = $m->fetch_all(MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<?php require_once __DIR__ . '/../includes/meta-tags.php'; ?>
	<link rel="stylesheet" href="/css/admin.css">
	<title>AVIDHAUL TRUCKERS</title>
</head>

<body>
	<div class="order-all">
		<div class="heading">
			<h1><a href="admin.php?tab=marketer"><i class="fas fa-angle-double-left"></i></a>AVIDHAUL TRUCKERS
				<span> marketer </span>
			</h1>
		</div>
		<div class="user-info">
			<h3>Marketer details</h3>
			<?php
			echo '
					<h4><i class="fas fa-user"></i> ' . $row['name'] . '</h4>
					<h4><i class="fas fa-envelope"></i> ' . $row['email'] . '</h4>
					';
			?>
			<?php
			echo '
					<h4><i class="fas fa-users"></i> ' . count($clients) . ' Clients</h4>
					';
			?>
		</div>
		<div id='tab' class="clients">
		<div class="container">
			<div class="stories-flex-box">
				<div class="stories-table">
					<h1>Clients</h1>
					<table>
						<thead>
							<th>id</th>
							<th>name</th>
							<th>email</th>
							<th>View Orders</th>
						</thead>
						<tbody>
							<?php
							foreach($clients as $row) {
								echo '<tr>
                                            <td>' . $row['id'] . '</td>
                                            <td>' . $row['username'] . '</td>
                                            <td>' . $row['email'] . '</td>
                                            <td id="show-hide-table">
                                            <form action="/admin/" method="post">
                                            <input type="hidden" name="tab" value="0">
                                            <input type="hidden" name="order_user_id" value="' . $row['id'] . '">
                                                <button class="story-btn" type="submit"><i class="fas fa-eye"></i></button>
                                            </form>';
								
								echo '</td>
                                           
                                        </tr>';
							}
							?>
						</tbody>
					</table>
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
</body>

</html>