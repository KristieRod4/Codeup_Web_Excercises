<?php

$adjectives = ['clever', 'fiesty', 'warm', 'futuristic', 'rebellious', 'enthusiastic', 'intense', 'friendly', 'brave', 'loyal'];
$nouns = ['brood', 'gaggle', 'eyeglasses', 'school', 'car', 'home', 'friends', 'family', 'sunset', 'moon'];

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
	return $input[$random];

}

print_r(nameGenerator($adjectives)) . (nameGenerator($nouns)) . PHP_EOL;














?>