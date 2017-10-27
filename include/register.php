<?php



if (isset($_POST['signup'])) //checking if register button has been pressed

{

		

	include_once 'db.php'; //including connection 


	$email = mysqli_real_escape_string($con, $_POST['uemail']);
	$name = mysqli_real_escape_string($con, $_POST['uname']);
	$pwd = mysqli_real_escape_string($con, $_POST['pass']);
	$address = mysqli_real_escape_string($con, $_POST['address']);


	//checking if email id has already been registered

	$sql = "SELECT * FROM users WHERE email='$email'";

	$result = mysqli_query($con, $sql);

	$resultCheck = mysqli_num_rows($result);
	
	

	if ($resultCheck > 0) 

	{

		header("Location: ../index.php?register=usertaken");

		exit();

	}

	else 

	{

		//checking if the 2 passwords match


		

			//Hashing the password

			$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

			//Insert the user into the database

			$sql = "INSERT INTO cust (name,address,email,password) VALUES ('$name', '$address', '$email', '$hashedPwd');";

			mysqli_query($con, $sql);

			header("Location: ../index.php");	//done - change the link to a new page which displays the message that you have been registered and click on this link to log in

			exit();

		

	}

}

else 

{

	header("Location: ../index.php");

exit();

}