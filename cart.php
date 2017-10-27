<?php
	session_start();
?>

<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +1 9699 669 012</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> akks.shah1997@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img height="20px" width="40px;" src="images/final/home/Untitled-35png.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php					
										if (isset($_SESSION['email'])) 
                    						  echo '<li><a href="#"><i class="fa fa-lock"></i>'.$_SESSION['name'].'</a></li>';
                    					else
                    						echo '<li><a href="#"><i class="fa fa-user"></i> Account</a></li>';
                    					?>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
									<?php					
										if (isset($_SESSION['email'])) 
                    						  echo '<li><a href="include/logout.php"><i class="fa fa-lock"></i>Log out</a></li>';
                    					else
                    						echo '<li><a href="login.php"><i class="fa fa-lock"></i>Log in</a></li>';
                    					?>                     
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="#" class="active">Home</a></li>
								<li class="dropdown"><a href="shop.php">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										
                                    </ul>
                                </li> 
								<li><a href="contact-us.html">Contact Us ?</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="shop.php">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image" align="center">Item</td>
							<td class="description"></td>
							<td class="price" align="center">Price</td>
							<td class="quantity" align="center">Quantity</td>
							<td class="total" align="center">Total</td>
							<td align="center">Remove</td>
						</tr>
					</thead>
					<tbody>
						<?php
							include('include/functions.php');
							displayCartItems();

						?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
	<?php
		/*echo '<form method="post" enctype="multipart/form-data">';*/
			
			cartTotalDisplay();
		/*echo '</form>';*/
		
	?>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="404.html">Online Help</a></li>
								<li><a href="404.html">Contact Us</a></li>
								<li><a href="404.html">Order Status</a></li>
								<li><a href="404.html">Change Location</a></li>
								<li><a href="404.html">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="404.html">T-Shirt</a></li>
								<li><a href="404.html">Mens</a></li>
								<li><a href="404.html">Womens</a></li>
								<li><a href="404.html">Gift Cards</a></li>
								<li><a href="404.html">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="404.html">Terms of Use</a></li>
								<li><a href="404.html">Privecy Policy</a></li>
								<li><a href="404.html">Refund Policy</a></li>
								<li><a href="404.html">Billing System</a></li>
								<li><a href="404.html">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="404.html">Company Information</a></li>
								<li><a href="404.html">Careers</a></li>
								<li><a href="404.html">Store Location</a></li>
								<li><a href="404.html">Affillate Program</a></li>
								<li><a href="404.html">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About HAS Shoppe</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2017 Hriti Aakash Shanay. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="https://linkedin.com/in/aakashdshah/">Hriti Aakash Shanay</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
	

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/akks.js"></script>
</body>
</html>
