<?php
    session_start();
    include 'includes/cart.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"  />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/cart.css">
		<title>AVIDHAUL TRUCKERS | product</title>
	</head>
	<body>
		<div class="all">
			<div class="nav">
				<a href="index.php"><i class="fas fa-angle-double-left"></i></a><h1>AVIDHAUL TRUCKERS</h1>
			</div>
			<div class="container">
				<div class="results">
					<h3>My cart <span class="cost"><i class="fas fa-donate"></i> <?php echo $total; ?> </span> <a href="checkout.php?user_id=<?php echo $user_id; ?>" class="checkout"> Checkout </a></h3>
					<div class="product">
                        <?php
                        if($carts->num_rows == 0){
                            echo '<img class="empty-cart" src="/assets/Display_images/empty_cart.png">';
                            echo '<h1 class="empty-h1"> Empty Cart </h1>';
                        }
                        foreach($cartItems as $row){
                            if($row['is_sparepart'] == 0){      
                                $days = ($row['is_hire'] == 1) ? ' <em>  hire for '.$row['hire_days'].' days </em>' : '';                          
                                echo '<div class="item">
                                    <img src="assets/Car_images/'.$row['product_image'].'">
                                    <div class="item-info">
                                        <h2>'.$row['product_name'].' ('.$row['quantity'].') '.$days.'</h2>
                                        <p>'.$row['product_model'].'</p><br>
                                        <p>$'.$row['product_price'].'</p>
                                        <form class="" action="product.php?id='.$row['product_id'].'" method="post">
                   					 	    <button type="submit" class="order-btn"> Review</button>
                   					    </form>
                                        <form action="cart.php?cnl_id='.$row['id'].'" method="post">
                                            <button class="cnl-btn" type="submit" name="cnl-submit">Remove</button>
                                        </form>
                                    </div>
                                </div>';
                            }
                            else{
                                echo '<div class="item">
                                    <img src="assets/Product_images/'.$row['product_image'].'">
                                    <div class="item-info">
                                        <h2>'.$row['product_name'].' ('.$row['quantity'].')</h2>
                                        <p>'.$row['product_model'].'</p>
                                        <p>$'.$row['product_price'].'</p>
                                        <form class="" action="product.php?product_id='.$row['product_id'].'" method="post">
                   					 	    <button type="submit" class="order-btn"> Review</button>
                   					    </form>
                                        <form action="cart.php?cnl_id='.$row['id'].'" method="post">
                                            <button class="cnl-btn" type="submit" name="cnl-submit">Remove</button>
                                        </form>
                                    </div>
                                </div>';
                            }
                        }
                        ?>
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
