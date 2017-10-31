<!DOCTYPE>
<?php
	include("include/db.php");
	session_start();
	if($_SESSION['email']=='admin@gmail.com'){

	}
	else
	{
		header("Location: ./404.php");
	}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>insert</title>
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
                                        <li><a href="shop.php">Products</a></li> 
										<li><a href="cart.php">Cart</a></li> 
										
                                    </ul>
                                </li> 
								<li><a href="contact-us.php">Contact Us ?</a></li>
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

	
	
	<section>
		<div class="container">
			<div class="row">
				
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center"> Add Products</h2>
	                    <form action="insertprod.php" id="main-contact-form" class="contact-form row" name="insertprodform" method="post" enctype="multipart/form-data">
	                        <div class="form-group col-md-3">
	                            <input type="number" name="semesterYear" class="form-control" required placeholder="Semester Year">
	                        </div>
	                        <div class="form-group col-md-3">
	                            <input type="number" name="semesterNumber" class="form-control" required placeholder="Semester number">
	                        </div>
	                        <div class="form-group col-md-3">
	                            <input type="text" name="department" class="form-control" required placeholder="department">
	                        </div>
	                        <div class="form-group col-md-3">
	                            <input type="text" name="university" class="form-control" required placeholder="university">
	                        </div>
	                        <div class="form-group col-md-4">
	                            <input type="text" name="subject" class="form-control" required placeholder="subject">
	                        </div>
	                        <div class="form-group col-md-4">
	                            <input type="text" name="bookname" class="form-control" required placeholder="Name of the book">
	                        </div>
	                        <div class="form-group col-md-4">
	                            <input type="text" name="author" class="form-control" required placeholder="Author">
	                        </div>
	                        <div class="form-group col-md-2">
	                            <input type="number" name="cost" class="form-control" required placeholder="Cost of the book">
	                        </div>
	                        <div class="form-group col-md-4">
	                            <input type="text" name="publisher" class="form-control" required placeholder="publisher">
	                        </div>
	                        <div class="form-group col-md-4">
	                            <input type="file" name="imgurl" class="form-control" required placeholder="image url please">
	                        </div>
	                        <div class="form-group col-md-2">
	                            <input type="text" name="edition" class="form-control" placeholder="edition">
	                        </div>
	                        <div class="form-group col-md-12">
                            <textarea name="description" id="description" class="form-control" rows="8" placeholder="Book description here"></textarea>
                        </div>
	                        <div class="form-group col-md-12">
	                            <input type="submit" name="insertprod" class="btn btn-primary pull-right" value="Insert Product Now ?">
	                        </div>
	                    </form>
	                    <form method="post" action="order.php">
	                        <div class="form-group col-md-12">
	                            <input type="submit" name="ordering" class="btn btn-primary pull-right" value="View Orders ?">
	                        </div>
                    </form>
				</div>
			</div>
		</div>
	</section>
	
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
	
	<script>
		function ordersinadmin(){
			window.Location="order.php";
		}
	</script>
  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>

<?php
	if(isset($_POST['insertprod'])){
		$con = mysqli_connect("localhost","root","","hasstore");
		$semesterYear = $_POST['semesterYear'];
		$semesterNumber = $_POST['semesterNumber'];
		$department = $_POST['department'];
		$university = $_POST['university'];
		$subject = $_POST['subject'];
		$bookname = $_POST['bookname'];
		$author = $_POST['author'];
		$cost = $_POST['cost'];
		$publisher = $_POST['publisher'];
		$imgurl = $_FILES['imgurl']['name'];
		$imgurltemp = $_FILES['imgurl']['tmp_name'];
		$edition = $_POST['edition'];
		$description = $_POST['description'];

		echo $insertpro = "insert into products(year,semester,department,university,subject,name,author,cost,publisher,imgurl,edition,description) values('$semesterYear','$semesterNumber','$department','$university','$subject','$bookname','$author','$cost','$publisher','$imgurl','$edition','$description')";

		$insertproductindb = mysqli_query($con,$insertpro);
		if(insertproductindb){
			echo "<script>alert('Successfully added')</script>";
			echo "<script>window.open('insertprod.php','self')</script>";
		}
	}
?>