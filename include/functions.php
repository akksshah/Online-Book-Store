<?php 
    function display(){
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
                                        echo '<img height = "300px" src="'.$imgurl.'" alt="" />';
                                        echo '<h2>'.$cost.'</h2>';
                                        echo '<p>'.$name.'</p>';
										echo '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
									echo '</div>';
									echo '<div class="product-overlay">';
										echo '<div class="overlay-content">';
											echo '<p>'.$name.'</p>';
											echo '<h2>Author : '.$author.'</h2>';
											echo '<h2>'.$cost.'</h2>';

										echo '<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>';
									echo	'</div>';
								echo	'</div>';
								echo '</div>';
						echo	'</div>';
						echo '</div>';
          }
                                        
    }
?>