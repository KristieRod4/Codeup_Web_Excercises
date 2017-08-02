<?php

// Add some HTML that simply says "Authorized" when it is viewed in the browser.
// Add some PHP code to the top of the login page that 
// checks the POST'ed username and password. 
// If the username is equal to "guest" and the password is equal to "password" 
// then redirect to the authorized.php. 
// If the username and password do not match those values, 
// show a login failed message on the login page.
// As you may have noticed, you can access the authorized.php page directly without 
// being logged in. We will be fixing this in the upcoming lesson on Sessions.


// Add a check to the authorized.php page to redirect to the login.php page if 
// a user is not logged in. 
// If they are, display their username after the authorized message.
	session_start();
	var_dump($_SESSION);
 
 	function pageController()
 	{

 		//walk through
 		// if(!isset($_SESSION['logged_in_user'])) {
 		// 	header("Location: login.php");
 		// 	die();
 		// }

 		// $username = isset($_SESSION['logged_in_user']) ? $_SESSION['logged_in_user'] : "";
 		
 		$data = [];

 
 		$message = "";
 		if($_SESSION['logged_in_user'] != 'guest') {
 			header("Location: http://codeup.dev/login.php");
			die();
 		}else{
 			$message = "Welcome " . $_SESSION['logged_in_user'];
 		}
 		


 		$data = [
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
	<title>Authorized!</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" 
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
	crossorigin="anonymous">

</head>
<body>
 
 	<main class="container">
 		<h1>Authorized!</h1>

 	</main>
 	<h1><?= $message; ?></h1>

 	<!-- Add a link to the authorized.php page that goes to logout.php. -->
 	<a class="btn btn-primary" href="/logout.php">Logout</a>

 
 	<!-- minified jQuery -->
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
 
 	<!-- Latest compiled and minified JavaScript -->
 	<script 
 	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
 	integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
 	crossorigin="anonymous"></script>
 
 	<!-- Your custom JS goes here -->
 	<script type="text/javascript"></script>
 
 </body>
 </html>















