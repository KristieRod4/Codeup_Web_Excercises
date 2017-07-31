<?php

$adjectives = ['Clever', 'Fiesty', 'Warm', 'Futuristic', 'Rebellious', 'Enthusiastic', 'Intense', 'Friendly', 'Brave', 'Loyal'];
$nouns = ['Brood', 'Gaggle', 'Eyeglasses', 'School', 'Car', 'Home', 'Friends', 'Family', 'Sunset', 'Moon'];

// function random($input) 
// 	{
// 	if(is_array($input)) {
// 		$key = array_rand($input);
// 		return $input[$key];
// 	}
// }

function nameGenerator($input) 
{
	$random = array_rand($input);
	$output = $input[$random];
	print_r($output);

}

//Walk Through

// function randomArray($array)
// {

// 	return $array[rand(0, count($array) - 1)];
// }


// function randomServerName($arr1, $arr2)
// {
// 	return randomArray($arr1) . randomArray($arr2);
// }

// print_r(nameGenerator($adjectives)) . (nameGenerator($nouns)) . PHP_EOL;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Server Name Generator</title>
  <meta charset="utf-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<style>
  h1{
  	color: red;
  }
  h2{
  	color: white;
  }
  body{
  	background-color: pink;
  }
</style>

 <h1 class"header">Server Name Generator: <?. PHP_EOL; ?></h1>

  <h2 class"header"> <?php print_r(nameGenerator($adjectives)) . (nameGenerator($nouns)) . PHP_EOL; ?></h2>




</body>
</html>










