<?php
    session_start();
    include_once 'include/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Recipes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/blog.css">
    <style>
        .link
        {
          font-size: 20px;
          color: white;
        }
        a.link:hover,a.link:visited 
        {
          color: white; 
        }
        .sub
        {
     background:none!important;
     color:inherit;
     border:none; 
     padding:0!important;
     font: inherit;
     border-bottom:1px solid #444; 
     cursor: pointer;
     }
    </style>
</head>
	<body>
	
    	<nav class="navbar navbar-default">
            <div class="container-fluid">

                <!-- Logo -->
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">Yummly</a>
                </div>

                <!-- Menu Items -->
                <div>
                    <ul class="nav navbar-nav">
                    <li class = "active"><a href="ingred.php">SuperCook</a></li>
                    <li><a href="fav.php">Favourites</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="hungry.php">Hungry?</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                  
                  <?php
                      echo '<li><a href="#">Welcome '.$_SESSION['u_first'].'</a></li>';
                      echo '<li><a href="include/logout.php">Log out</a></li>';
                    
                  ?>                  
              </ul>
                </div>
            </div>
        </nav>
        <div class="left">
             <div class="article">
       	        <h2 style="color: white;">Here are some of the dishes you can prepare!</h2>
                 
                <hr>
				<?php
				if (isset($_POST['submit'])) //checking if register button has been pressed
				{
					$array=explode( "\r\n", $_POST['content'] );
					$array=implode("%2C", $array);
					
					$url = "http://food2fork.com/api/search?key=d3ab033003c2e546e131f5b45402e3e9&q=";
					$urlend=".json";
					$url=$url."".$array."".$urlend;
					$data = file_get_contents($url); // put the contents of the file into a variable
        			$characters = json_decode($data,true); // decode the JSON feed    
                    foreach($characters['recipes'] as $details)
        			{
                        echo '<h3><a class="link" target="_blank" href="'.$details['source_url'].'"> '. $details['title'] .'</a><br><br>';
            			echo '<img height="300px" width="400px" src="'.$details['image_url'].'"<br>';
                        
                        $title=$details['title'];
                        $source_url=$details['source_url'];
                        $image_url=$details['image_url'];
                        $u_email=$_SESSION['u_email'];
                     
                        $sql1 = "SELECT * FROM fav WHERE title='$title' AND u_email='$u_email'";
                        $result = mysqli_query($conn, $sql1);
                        $resultCheck = mysqli_num_rows($result);
                        echo '<br><br>';
                          
                        if ($resultCheck > 0) 
                        {
                         echo' <button class="sub" id="'.$details["recipe_id"].'" onclick="toggleText(this.id)">Remove from favourites</button>'; 
                          }
                        else
                        {
                          echo'<button class="sub" id="'.$details["recipe_id"].'" onclick="toggleText(this.id)">Add to favourites</button>';
                        ?>
                          <script type="text/javascript">
                          function toggleText(button_id) 
                          {
                              var el = document.getElementById(button_id);
                              var title,source_url,image_url;
                              var recipes = <?php echo json_encode($characters['recipes'],JSON_PRETTY_PRINT); ?>;
                              for(var i = 0; i < 30; i++) 
                              {
                                  if( recipes[i].recipe_id == button_id ) {
                                    title=recipes[i].title;
                                    source_url=recipes[i].source_url;
                                    image_url=recipes[i].image_url;
                                  }
                              }
                              var u_email = "<?php echo $u_email; ?>";
                              
                             if (el.firstChild.data == "Remove from favourites") 
                             {
                              $.ajax({
                                type: "POST",
                                url: 'include/ajax.php',
                                data : {
                                  action:'remove',
                                  title : title,
                                  source_url : source_url, 
                                  image_url : image_url,
                                  u_email : u_email                                  
                                  },
                                success:function(data) 
                                {
                                  alert("Successfully removed from favourites");
                                }
                              });
                              el.firstChild.data = "Add to favourites";
                             }
                             else 
                             {
                               $.ajax({
                                type: "POST",
                                url: 'include/ajax.php',
                                data : {
                                  action:'add',
                                  title : title,
                                  source_url : source_url, 
                                  image_url : image_url,
                                  u_email : u_email                                  
                                  },
                                success:function(data) 
                                {
                                  alert("Successfully added to favourites");
                                }
                              });
                               el.firstChild.data = "Remove from favourites";
                             }
                          }
                      </script>
                      <?php
                       }
                        echo "<hr>";
                    }
                    exit();
				}
				?>
                
            </div>
        </div>

        <div class="right">
            <div class="topright">
                
            </div>   
        </div>  
    </body>
</html>
© 2017 GitHub, Inc.
Terms
Privacy
Security
Status
Help
Contact GitHub
API
Training
Shop
Blog
