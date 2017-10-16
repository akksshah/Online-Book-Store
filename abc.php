<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
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
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
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
								<li><a href="index.html" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>
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
	

			<?php 

			$con = mysqli_connect("localhost","root","","hasstore");
$get_prod = "select * from products";
    $run_prod = mysqli_query($con,$get_prod);
    while($row_prod = mysqli_fetch_array($run_prod)){
        $id = $row_prod['id'];
        $year = $row_prod['year'];
        $semester = $row_prod['semester'];
        $department = $row_prod['department'];
        $university = $row_prod['university'];
        $subject = $row_prod['subject'];
        $name = $row_prod['name'];
        $author = $row_prod['author'];
        $cost = $row_prod['cost'];
        $publisher = $row_prod['publisher'];
        $imgurl = $row_prod['imgurl'];
        $edition = $row_prod['edition'];
        $description = $row_prod['description'];
        $imgurl = "images/final/t/".$imgurl;
        echo '<div class="col-sm-4">';
                           echo' <div class="product-image-wrapper">';
                                echo '<div class="single-products">';
                                    echo '<div class="productinfo text-center">';
                                        echo '<img src="'.$imgurl.'" alt="" />';
                                        echo '<h2>'.$cost.'</h2>';
                                        echo '<p>'.$name.'</p>';
										echo '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
									echo '</div>';
									echo '<div class="product-overlay">';
										echo '<div class="overlay-content">';
											echo '<h2>'.$cost.'</h2>';
											echo '<p>'.$name.'</p>';
										echo '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
									echo	'</div>';
								echo	'</div>';
								echo '</div>';
								echo '<div class="choose">';
									echo '<ul class="nav nav-pills nav-justified">';
										echo '<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>';
									echo	'<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>';
								echo	'</ul>';
							echo	'</div>';
						echo	'</div>';
						echo '</div>';
                                        
    }
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
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>