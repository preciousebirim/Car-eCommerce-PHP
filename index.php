<?php
session_start();
include 'includes/index.inc.php';
include 'includes/search.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/index.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<title> AVIDHAUL TRUCKERS | home</title>
</head>

<body>
	<section class="head">
		<header>
			<?php
			if (isset($_SESSION['username'])) {
				echo '<div class="profile">';
				echo '<a href="cart.php"><i class="fas fa-shopping-cart"></i><p class="cart">';
				echo $_SESSION['cart'];
				echo '</p></a>
                              </div>';
			}
			?>
			<h1>AVIDHAUL TRUCKERS</h1>
			<nav>
				<ul>
					<li class="to-home">HOME</li>
					<li class="to-buy">BUY</li>
					<li class="to-rent">HIRE</li>
					<li class="to-spare">SPARE PARTS</li>
					<li class="to-login">LOGIN</li>
				</ul>
			</nav>
		</header>
	</section>


	<section id="to-buy" class="cars">
		<h1> TRUCKS </h1>
		<div style="position: relative; width: max-content; margin: auto; max-width: 100%;overflow-x: auto;">
			<div style="display: flex; gap: 1rem; width: max-content;">
				<form action='/'>
					<button
						style=' color: #000; font-size: 1.1rem; font-weight: 700; padding: 10px; background: transparent; border: 2px solid #000;'>All</button>
				</form>
				<?php

				$types = $car->get_car_type();
				while ($row = $types->fetch_object()) {
					$t = $row->car_type;
					echo "
					<form action=''>
					<input type='hidden' name='type' value='$t'>
					<button style=' color: #000; font-size: 1.1rem; font-weight: 700; padding: 10px; background: transparent; border: 2px solid #000;'>$t</button>
					</form>";
				}
				?>

			</div>
		</div>
		<div class="search-car" style="top: 20px;">
			<form class="search-regular-car-form" action="more.php" method="post" onsubmit="add()">
				<input class="search" type="text" name="regular-search" placeholder="Search">
				<button type="submit" name="regular-search-submit"><i class="fas fa-search"></i></button>
				<button class="voice-regular-search" type="button"><i class="fas fa-microphone"></i></button>
			</form>
		</div>
		<div class="cars-container1">
			<div class="cars-container" style="margin-top: 30px;">
				<?php
				$i = 0;
				while ($row = $cars->fetch_assoc()) {
					if ($i <= 8) {
						echo '<div class="box" data-aos="slide-up">
            					 <div class="box-image" style="background-image: url(/assets/Car_images/' . $row['image'] . ');
            							 background-size: cover;
            							 background-position:center;">.

            					 </div>
            					 <p>' . $row['manufacturer'] . '</p>
                                 <p>' . $row['model'] . '</p>
              				     <p>$' . $row['price'] . '</p>
            					 <form class="" action="product.php?id=' . $row['id'] . '" method="post">
            					 	<button type="submit" name="add-to-cart-index"> Add to Cart</button>
            					 </form>
            				</div>';
						$i++;
					} else {
						break;
					}
				}
				?>
			</div>
			<div class="more">
				<a class="more-btn" href="more.php?type=<?php echo urlencode($_GET['type'] ?? '') ?>"><i
						class="fas fa-angle-double-right"><span>More</span>
					</i></a>
			</div>
		</div>

	</section>

	<section id="to-rent" class="to-rent">

	</section>

	<div class="products-heading">
		<h1>SPARE PARTS</h1>
	</div>
	<section id="to-spare" class="products">
		<div class="product-container">
			<?php
			while ($row = $products->fetch_assoc()) {
				echo '<div class="item"  data-aos="slide-up">
                            <img src="/assets/Product_images/' . $row['image'] . '">
                            <p>' . $row['manufacturer'] . '</p>
                            <p>' . $row['model'] . '</p>
                            <p>$' . $row['price'] . '</p>
                            <form class="" action="product.php?product_id=' . $row['id'] . '" method="post">
                               <button type="submit" name="add-to-cart-index"> Add to Cart</button>
                            </form>
                        </div>';
			}
			?>
		</div>
	</section>
	<div class="product-controls">
		<i id="pre-product" class="fas fa-chevron-circle-left"></i>
		<i id="next-product" class="fas fa-chevron-circle-right"></i>
	</div>


	<section id="to-login" style="position: relative; padding: 30px 0; height: max-content; max-height: 800px; "
		class="showcase">
		<div class="showcase-text" data-aos="slide-up">
			<p class="error">
				<?php
				if (isset($_SESSION['log_message'])) {
					echo '<span style="background-color: rgba(200, 0, 0, 0.4);
                        padding: 10px;
                        font-size: 12px;"
                        >' . $_SESSION['log_message'] . '</span>';
				} else if (isset($_SESSION['sign_message'])) {
					if ($_SESSION['sign_message'] == "Account created successfully") {
						echo '<span style="background-color: rgba(0, 200, 0, 0.4);
                            padding: 10px;
                            font-size: 12px;
                            border-radius: 3px;
                            margin-bottom: 10px;"
                            >' . $_SESSION['sign_message'] . '</span>';
					} else {
						echo '<span style="background-color: rgba(200, 0, 0, 0.4);
                            padding: 10px;
                            font-size: 12px;"
                            >' . $_SESSION['sign_message'] . '</span>';
					}
				}
				?>
			</p>
			<div class="login-signup">
				<h4 class="login active-form">Login</h4>
				<h4 class="signup">Signup</h4>
			</div>
			<div class="forms">
				<form class="login-form" action="index.php" method="post">
					<input type="email" name="email" placeholder="Email"> <br>
					<input type="password" name="password" placeholder="Password"> <br>
					<button type="submit" name="login-submit"> Log in </button>
				</form>
				<form class="signup-form" action="index.php" method="post">
					<input type="text" name="username" placeholder="Username"> <br>
					<input type="email" name="email" placeholder="Email"> <br>
					<input type="password" name="password" placeholder="Password"> <br>
					<input type="password" name="re-password" placeholder="Retype password"> <br>
					<input type="hidden" name="marketer" value="<?php echo $_GET['marketer'] ?? ''; ?>"> <br>

					<button type="submit" name="signup-submit"> Sign up </button>
				</form>
			</div>
			<h1> DRIVE THE BEASTS</h1>
			<p>Etiam iaculis quam at libero euismod euismod. Nullam ornare est ut nisi mollis.</p>
		</div>
		<div class="slideshow-container">
			<div class="mySlides fade" style="background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url('/assets/Display_images/showcase1.jpg');
												  background-position: bottom;
												  background-size: cover;">
			</div>

			<div class="mySlides fade" style="background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url('/assets/Display_images/showcase2.jpg');
													  background-position: bottom;
													background-size: cover;">
			</div>

			<div class="mySlides fade" style="background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url('/assets/Display_images/showcase3.jpg');
													  background-position: bottom;
													background-size: cover;">
			</div>
		</div>
	</section>



	<section class="my-thoughts">
		<div class="my-thoughts-container">
			<h1>BLOG</h1>
			<?php
			$i = 0;
			foreach ($thoughts as $row) {
				if ($i > 4)
					break;
				echo '<div class="post" data-aos="slide-up">
                					<div class="post-mini1" style="background-image:url(/assets/Thought_images/' . $row['image'] . ');
                							background-size: cover;
                							background-position:center;">

                					</div>
                					<div class="post-mini2">
                						<h2><a href="post.php?id=' . $row['id'] . '">' . $row['title'] . '</a></h2>
                						<i class="far fa-user"> <p style="display: inline;"> Mahdi Hasan Tarunno</p></i>
                						<p style="display: inline; padding:0px 5px 0px 5px;"> | </p>
                						<i class="far fa-calendar-alt"> <p style="display:inline;"> ' . $row['create_time'] . '</p></i>
                						<p style="display: inline; padding:0px 5px 0px 5px;"> | </p>
                						<i class="fas fa-paperclip" style="display:inline;"></i> <p style="display:inline;"> ' . $row['tag'] . '  </p></i>
                						<br><br>
                						<p>' . substr($row['body'], 0, min(strlen($row['body']), 260)) . '</p>
                						<br>
                					</div>
                				</div>';
				$i++;
			}
			?>
			<div class="more" style="text-align: center;">
				<a class="more-btn" href="more.php?post=all_post"><i class="fas fa-angle-double-right"><span>More</span>
					</i></a>
			</div>
		</div>
	</section>

	<section class="gallary">
		<h1>OUR GALLARY</h1>
		<div class="gallary-img">
			<?php
			$row = $gallaries->fetch_assoc();
			echo '<div class="row">
    				  <div class="column">
    					  <div class="overlay">
    						  <h4>Click for fullscreen</h4>
    					  	<img src="/assets/Gallary_images/' . $row['image1'] . '" style="width:100%; height:200px;">
    					  </div>
    					  <div class="overlay">
    						  <h4>Click for fullscreen</h4>
    					    <img src="/assets/Gallary_images/' . $row['image2'] . '" style="width:100%; height:200px;">
    					 </div>
    				  </div>
    				  <div class="column">
    					  <div class="overlay-port">
    						  <h4>Click for fullscreen</h4>
    					   <img src="/assets/Gallary_images/' . $row['image3'] . '" style="width:100%; height:407px;">
    					 </div>
    				  </div>
    				  <div class="column">
    					  <div class="overlay">
    						  <h4>Click for fullscreen</h4>
    					   <img src="/assets/Gallary_images/' . $row['image4'] . '" style="width:100%; height:200px;">
    					 </div>
    					 <div class="overlay">
    						 <h4>Click for fullscreen</h4>
    					   <img src="/assets/Gallary_images/' . $row['image5'] . '" style="width:100%; height:200px;">
    					 </div>
    				  </div>
    				  <div class="column">
    					  <div class="overlay">
    						  <h4>Click for fullscreen</h4>
    					   <img src="/assets/Gallary_images/' . $row['image6'] . '" style="width:100%;height:200px;">
    					 </div>
    					 <div class="overlay">
    						 <h4>Click for fullscreen</h4>
    					   <img src="/assets/Gallary_images/' . $row['image7'] . '" style="width:100%; height:200px;">
    					 </div>
    				  </div>
    				</div>';
			?>
		</div>
	</section>
	<footer>
		<div class="social">
			<h2>FOLLOW US</h2>
			<a href="#"> <i class="fab fa-facebook"> <span></span> </i> </a>
			<a href="#"> <i class="fab fa-instagram"> <span></span> </i> </a>
			<a href="#"> <i class="fab fa-twitter"> <span></span> </i> </a>
			<a href="#"> <i class="fab fa-youtube"> <span></span> </i> </a>
		</div>
		<div class="credit">
			<h1>AVIDHAUL TRUCKERS </h1>
		</div>
	</footer>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script type="text/javascript" src="/javaScript/app.js"></script>
	<script type="text/javascript" src="/javaScript/voice_search.js"></script>
	<script type="text/javascript" src="/javaScript/story.js"></script>
	<?php
	if (isset($_GET['action']) && $_GET['action'] == 'signup') {
		echo "<script>
		document.querySelector('.to-login').click();
			document.querySelector('.signup').click();
			</script>";

	}


	?>
</body>

</html>