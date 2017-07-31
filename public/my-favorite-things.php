<?php

$favoriteThings = ['Friends', 'Wine', 'Movies', 'Music', 'Travel'];

?>

<!DOCTYPE html>

<head>
  <title>My Favorite Things</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
  h1{
  	color: orange;
  	background-color: pink;
  	font-weight: bold;
  }
  table {
  	background-color: pink;
  }
  .table-striped{
  	background-color: purple;
  }
</style>

</head>
<body>

	<h1 class = "name">My Favorite Things are: <h1>
  <table class="table table-striped">
  	<?php foreach($favoriteThings as $fav) : ?>

  	<tr>
  		<td><?php echo $fav . ":" ?> one of my favorite things.</td>
  	</tr>


  	<?php endforeach?>
  	

  </table


</body>
</html>