<?php

// Add a logout.php file. Use the clearSession() function from the examples in this 
// lesson to perform a logout when that page is accessed and then redirect the user 
// to the login page.
	

function clearSession()
{
    // clear $_SESSION array
    session_unset();


    // ensure client is sent a new session cookie
    session_regenerate_id();

    // delete session data on the server
    session_destroy();
}
    // start a new session - session_destroy() ended our previous session so
    // if we want to store any new data in $_SESSION we must start a new one
    session_start();
	clearSession();

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
	<title>Logout</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" 
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
	crossorigin="anonymous">

</head>
<body>
 
 	
	<main class="container">
 		<h1>HASTA LA VISTA!!</h1>

 	</main>

 
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















