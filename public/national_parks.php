<?php
require __DIR__ . '/../Park.php';
require_once __DIR__ . '/../db_connect.php';
require_once __DIR__ . '/../parks_logins.php';
require_once __DIR__ . '/../Input.php';


function getPageCount($connection)
{
	$countRequest = "SELECT COUNT(*) FROM national_parks";
	$stmt =$connection->query($countRequest);
	$count = (int) $stmt->fetchColumn();

	return $count;
}

function showAllParks($connection, $limit = 2, $offset = 0)
{
	$selectParks = "SELECT * FROM national_parks LIMIT $limit OFFSET $offset";
	$stmt = $connection->query($selectParks);
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $rows;
}

function addPark($connection)
{
	

	$stmt->bindValue('park_name', $_POST['park_name'], PDO::PARAM_STR);
	$insert = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description) 
  VALUES(:name, :location, :date_established, :area_in_acres, :description)";

  $statement = $connection->prepare($insert);

  $statement-> bindValue(':name', $_POST$park[0], PDO::PARAM_STR);

  $statement-> bindValue(':location', $park[1], PDO::PARAM_STR);
  $statement-> bindValue(':date_established', $park[2], PDO::PARAM_STR);
  $statement-> bindValue(':area_in_acres', $park[3], PDO::PARAM_STR);
  $statement-> bindValue(':description', $park[4], PDO::PARAM_STR);

  $statement->execute();   

	$stmt execute();
}

function pageController($connection) 
{
	$data = [];


 		$page = Input::escape(Input::get('page', 1));
		$limitPerPage = Input::escape(INPUT::get('limitPerPage', 4));
		$parks = showAllParks($connection, $limitPerPage, (($page -1) * $limitPerPage));


		$data['page'] = $page;

		$data['parks'] = $parks;

		$data['limitPerPage'] = $limitPerPage;

		$data['pageCount'] = getPageCount($connection);

		

	return $data;
	
	
}
 
 extract(pageController($connection));

 

 ?>

 <html>
 <head>
 	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
    	rel="stylesheet" 
    	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
    	crossorigin="anonymous">

 	<title>National Parks</title>

 	<style>

 	</style>
 </head>
 <body>
 	<main class="container">
	 	<h1 class='main'>NATIONAL PARKS</h1>

	 		<section class="container col-md-7">
 				<form method="GET" action="$page">
 					<label for="enter">Enter New Park Details Below</label>
 					<br>
 					<input type="text" name="name" input="name" 
 						placeholder="please enter name" autofocus>
 					<input type="text" name="location" input="location" 
 						placeholder="please enter location"autofocus>
 					<br>
 					<input type="date" name="date_established" input="date_established" 
 						placeholder="please enter date" autofocus>
 					<input type="text" name="area_in_acres" input="area_in_acres" 
 						placeholder="please enter area" autofocus>
 					<br>
 					<textarea type="text" name="description" input="description" 
 						placeholder="please enter description"></textarea>
 					<br>
 					<button type="submit">Add Park</button>
 				</form>
 			</section>

			<section class="container col-md-8">
				<?php foreach($parks as $park):?>
					<div class="col-md-4">
						<h3><?=$park['name']?></h3>
							<p><strong>Location: </strong> <?=$park['location'] ?></p>
							<p><strong>Date Established: </strong> <?=$park['date_established'] ?></p>
							<p><strong>Area in acres: </strong> <?=$park['area_in_acres'] ?></p>
							<p><strong>Description: </strong> <?=$park['description'] ?></p>
					</div>
			<?php endforeach; ?>
	    

		    </section>
		    <section class="container col-md-6"> 
		    	<?php if ($page > 1) : ?>
					<a class="btn btn-default" href="?page=<?= $page -1?>&limitPerPage=<?=$limitPerPage?>">PREV</a>
 					<a class="btn btn-default" href="?page=<?= $page + 1?>&limitPerPage=<?=$limitPerPage?>">NEXT</a>

 					<a href="?page=<?=$page?>&limitPerPage=4" class="btn btn-info">4 parks per page</a>
 					<a href="?page=<?=$page?>&limitPerPage=12" class="btn btn-info">12 parks per page</a>
 					<a href="?page=<?=$page?>&limitPerPage=50" class="btn btn-info">50 parks per page</a>
 				<?php endif; ?>
 			</section> 


	 </main>
     
     <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
 
     
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
     integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
     crossorigin="anonymous"></script>
 
 
 </body>
 </html>
 