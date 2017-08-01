<?php

function pageController() {
	$count = [];
	$count['count'] = (isset($_GET['count'])) ? $_GET['count'] : 0;
	return $count;
}

extract(pageController());

?>

<!DOCTYPE html>

<html>
<head>
    <title>Counter Exercise</title>
   
    
</head>
<body>
	
		<h1>Counter: <?= $count; ?></h1>


		<a href="/counter.php?count=<?= $count +1; ?>">UP</a>
		<a href="/counter.php?count=<?= $count -1; ?>">DOWN</a>

</body>
</html>

	</form>
    
    </body>
</html>