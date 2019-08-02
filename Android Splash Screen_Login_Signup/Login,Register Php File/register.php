<?php

       
        define('HOST','localhost');

        define('USER','id10371277_palash');

       	define('PASS','01946630663');

	define('DB','id10371277_palash');


        $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');


        $username = $_GET['username'];
	
	$password = $_GET['password'];
	
	$email = $_GET['email'];

		if($username == '' || $password == '' || $email == '')
		{
	
		echo 'please fill all values';

		}
		else{

		$sql = "SELECT * FROM signup WHERE username='$username' OR email='$email'";

	        $check = mysqli_fetch_array(mysqli_query($con,$sql));

		if(isset($check)){

		echo 'username or email already exist';

		}else{
		$sql = "INSERT INTO signup (username,password,email) VALUES('$username','$password','$email')";

		if(mysqli_query($con,$sql)){

			echo 'successfully registered';
	
	}
		else{
				
			echo 'oops! Please try again!';
		
		}
}
			
	        mysqli_close($con);

		}			
