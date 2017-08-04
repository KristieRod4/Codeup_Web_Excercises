<?php

//If you click HIT, a counter increases and the game continues. If you click MISS, that player missed and the game is over.
//Each page should have a pageController() function that will contain all of our PHP logic.
//This function will need to access the $_GET superglobal variable and check the values stored to it.
//It will also need to increment the counter when the "hit" link was clicked, and reset the counter in the event of a "miss".
//Use extract() function to change the return value of the pageController() into variables for your HTML.

require_once '../Input.php';

function pageController() {
	$count = [];
	$count['count'] = Input::has('count') ? Input::get('count') : 0;
	return $count;
}

extract(pageController());


?>

<!DOCTYPE html>

<html>
<head>
    <title>PING</title>
   
    
</head>
<body>
	
		<h1>Counter: <?= $count; ?></h1>


		<a href="/pong.php?count=<?= $count +1; ?>">HIT</a>
		<a href="/pong.php?count=0">MISS</a>

</body>
</html>
