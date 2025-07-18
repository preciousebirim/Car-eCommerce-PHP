<?php
    session_start();
    include 'includes/product.inc.php';
    if(!isset($_SESSION['username'])){
      //  header("Location: index.php");
       // exit();
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/product.css">
		<title>AVIDHAUL TRUCKERS | product</title>
		<link rel="shortcut icon" href="/favicon.png" type="image/png">
	</head>
	<body>
		<div class="container">
			<div class="nav">
				<a href="javascript:history.back();"><i class="fas fa-angle-double-left"></i></a><h1>AVIDHAUL TRUCKERS</h1>
			</div>
			<?php
				if(isset($_SESSION['message'])){
	                echo '<div class="message"><p>' . $_SESSION['message'] . '</p></div>';
	                unset($_SESSION['message']);
				}
			?>
            <?php
                if(isset($_GET['product_id'])){
                    echo '<div class="product">
        				<div class="info">
        					<div class="img">
        						<img src="assets/Product_images/'.$row['image'].'" height="400" width="420" style="display: block;">
        					</div>
        				</div>
        				<div class="image">
        					<div class="pro-info">
        						<h3>'.$row['manufacturer'].' '.$row['model'].'</h3><br>
        						<h5>$'.$row['price'].'</h5>
        						<br>
        						<h3>Condition:</h3>
        						<p>'.$row['condition'].'</p>
        						<form action="product.php?product_id='.$row['id'].'" method="post">
								  <input type="hidden" name="id" value="'.$row['id'].'">
								  <input type="hidden" name="sparepart" value="1">
								  <h6>Quantity</h6>
								   <p><input type="number" name="quantity" value = "1" min= "1"></p>
        						   <button class="add-to-cart" type="submit" name="add-to-cart"> Add to Cart</button>
        						   <button type="button" class="call"><i class="fas fa-phone"></i></button>
        						   <button type="button" class="mail"><i class="fas fa-envelope"></i></button>
        						</form>
        					</div>
        				</div>
        			</div>
        		</div>';
                }
                else{
					$price = $row['price'];
					$forHireInput = '';
					$daysInput = '';
					if($row['hire_price'] > 0 && isset($_GET['hire'])){
						$price = $row['hire_price']. ' each day';
						$forHireInput = '<input type="hidden" name="is_hire" value="">';
						$daysInput = '<h6>Days</h6><p><input type="number" name="days" value = "1" min= "1"></p>';
					}
                    echo '<div class="product">
        				<div class="info">
        					<div class="img">
        						<img src="assets/Car_images/'.$row['image'].'" height="300" width="420" style="display: block;">
        						<i class="fas fa-tachometer-alt"> <p>'.$row['speed'].'km/h</p> </i>
        						<i class="fas fa-gas-pump"> <p>'.$row['mileage'].'km</p> </i>
        						<i class="fas fa-car-battery"> <p>'.$row['battery'].'</p> </i>
        						<i class="fas fa-oil-can"> <p>'.$row['fuel'].'</p> </i>
        						<i class="fas fa-heartbeat"> <p>'.$row['total_run'].'km</p> </i>
        						<i class="fas fa-arrows-alt"> <p>'.$row['gear'].'</p> </i>
        					</div>
        				</div>
        				<div class="image">
        					<div class="pro-info">
        						<h3>'.$row['manufacturer'].' '.$row['model'].'</h3><br>
        						<h5>$'.$price.'</h5>
        						<br>
        						<h3>Condition:</h3>
        						<p>'.$row['condition'].'</p>
        						<form action="product.php?id='.$row['id'].'" method="post">
								  <input type="hidden" name="id" value="'.$row['id'].'">
								  '.$forHireInput.'
								  <h6>Quantity</h6>
								  <p><input type="number" name="quantity" value = "1" min= "1"></p>
								  '.$daysInput.'
        						   <button class="add-to-cart" type="submit" name="add-to-cart"> Add to Cart</button>
        						   <button type="button" class="call"><i class="fas fa-phone"></i></button>
        						   <button type="button" class="mail"><i class="fas fa-envelope"></i></button>
        						</form>
        					</div>
        				</div>
        			</div>
        		</div>';
                }
            ?>

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
