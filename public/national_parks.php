<?php
require_once __DIR__ . '/../db_connect.php';
require_once __DIR__ . '/../parks_logins.php';
require_once __DIR__ . '/../Input.php';

function getCount($connection)
{
	$countRequest = "SELECT COUNT(*) FROM parks";
	$stmt =$connection->query($countRequest);
	$count = (int) $stmt->fetchColumn();

	return $count;
}

function returnAllParks($connection, $limit = 2, $offset = 0)
{
	$selectParks = "SELECT * FROM parks LIMIT $limit OFFSET $offset";
	$stmt = $connection->query($selectParks);
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $rows;
}

function pageController($connection) 
{
	$data = [];


 		$page = Input::escape(Input::get('page', 1));

		$limitPerPage = Input::escape(INPUT::get('limit PerPage', 4));

 
		$query = returnAllParks($connection, $limitPerPage, (($page -1) * $limitPerPage));


		$data['page'] = $page;

		$data['parks'] = $parks;

		$data['limitPerPage'] = $limitPerPage;

		$data[] = 

		

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

	 		<section class="container col-md-5">
 				<form method="GET" action="national_parks.php">
 					<label for="search">Search By Park Name</label>
 					<input type="text" name="search" input="search" placeholder="please input park name here" 
 						autofocus>
 					<button type="submit">Search</button>
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
		    <section class="container col-md-5"> 
		    	<?php if ($page > 1) : ?>
					<a class="btn btn-default" href="/national_parks.php?page=<?= $page -1?>&limitPerPage=<?=$limitPerPage?>">PREV</a>
 					<a class="btn btn-default" href="/national_parks.php?page=<?= $page + 1?>&limitPerPage=<?=$limitPerPage?>">NEXT</a>

 					<a href="?page=<?=$page?>&limitPerPage=4" class="btn btn-info">4 parks per page</a>
 					<a href="?page=<?=$page?>&limitPerPage=12" class="btn btn-info">12 parks per page</a>
 					<a href="?page=<?=$page?>&limitPerPage=50" class="btn btn-info">50 parks per page</a>
 			</section> 


	 </main>
     
     <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
 
     
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
     integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
     crossorigin="anonymous"></script>
 
 
 </body>
 </html>
 