<?php
//Create a file named login.php in your codeup.dev site.
// Add a form that accepts a username and password and have the form submit to the same page (login.php).

// Open the login.php page. If the correct username and password are sent, assign a session key called logged_in_user to the username of the logged in user.
// Add a check to the login.php page to see if the user is logged in by checking the logged_in_user key. If they are, redirect to the authorized.php page instead of showing the login page.
session_start();

var_dump($_SESSION);

require 'functions.php';

function pageController()
{
	$data = [];

	//check to see if session has a logged_in_user key/value, if so redirect to authorize.php
	if(isset($_SESSION['logged_in_user'])) {
		header("Location authorize.php");
		die();
	}
	
	$message = "";
	$username = inputHas('username') ? escape(inputGet('username')) : "";
	$password = inputHas('password') ? escape(inputGet('password')) : "";

	//event listener that user submitted the form
	if(!empty($_POST)) {
		if($username =="guest" && $password == "password") {
			$_SESSION['logged_in_user'] = $username;
			header("Location: http://codeup.dev/authorize.php");
			die();
			

		}else{
			$message = "Invalid Login!";
		}
	}

	
		$data = [
			"username" => $username,
			"password" => $password,
			"message" => $message

		];
	return $data;

}

	extract(pageController());

?>


<!DOCTYPE html>
 <html lang="en-us">
 <head>
 	<meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
 	
     <meta name="viewport" content="width=device-width, initial-scale=1">
 	
 	<meta name="description" content="">
 	<meta name="Keywords" content="">
     <meta name="author" content="">
 	<title>Login</title>
 
 <!-- Latest compiled and minified CSS -->
 <link 
 rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
 integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
 crossorigin="anonymous">
 
 <!-- Custom CSS -->
 <style></style>
 </head>
 <body>
 	<main class="container">
 		<h1>Login to your site!</h1>
 		<p><?= $message ?></p>
 
 		<form method="POST">
 			<div class="form-group">
 		    	<label for="username">Username</label>
 		    	<input type="text" name="username" class="form-control" id="username" placeholder="username">
 		  	</div>
 		  	<div class="form-group">
     			<label for="password">Password</label>
     			<input type="password" name="password" class="form-control" id="password" placeholder="Password">
   			</div>
   			<button type="submit" class="btn btn-default">Login</button>
 		</form>
 
 	</main>
 	<!-- minified jQuery -->
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
 
 	<!-- Latest compiled and minified JavaScript -->
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
 	integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
 	crossorigin="anonymous"></script>
 
 	<!-- Your custom JS goes here -->
 	<script type="text/javascript"></script>
 </body>
 </html>

<!-- first attempt -->
<!-- <!DOCTYPE html>

<html>
	<head>
    	<title>LOGIN</title>   
	</head>
	<body>

    <h1>Login Page</h1>

    	<form method="POST">

    		<label for="name">NAME</label>
    		<input type="text" name="name" id="name">
    		
    		<label for="password">PASSWORD</label>
    		<input type="text" name="password" id="password">
    		<button type="submit">SUBMIT</button>
	
    	</form>
    </body>
</html>












 -->