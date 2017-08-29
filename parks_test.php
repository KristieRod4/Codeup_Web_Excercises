<?php
require_once "Park.php";


// test dbConnect() and Park::$connection

// 	Park::dbConnect();
// 	var_dump(Park::$connection);


// // test Park::count()
	
// 	echo "There are " . Park::count() . " parks in the parks table.";


// test Park::all()

	// var_dump(Park::all());

	// $allParks = Park::all();

	// echo "Park 1 details..." . PHP_EOL;

	// echo $allParks[0]->name . PHP_EOL;
	// echo $allParks[0]->location . PHP_EOL;
	// echo $allParks[0]->dateEstablished . PHP_EOL;
	// echo $allParks[0]->areaInAcres . PHP_EOL;
	// echo $allParks[0]->description . PHP_EOL;



// test Park::paginate()

	// print_r(Park::paginate(1));
	// print_r(Park::paginate(2));
	// print_r(Park::paginate(2, 2));
	// print_r(Park::paginate(1, 8));



// test inserting a new park

// $park = new Park();

// $park->name = "Frio River Park";
// $park->location = "Texas";
// $park->area_in_acres = 700;
// $park->date_established = '1913-02-02';
// $park->description = 'Yadda yadda';
// $park->insert();


/////adding test for park extends model

$parkArray = [
'name'-> 'Glacier National Parl',
'location'-> 'Montana',
'areaInAcres'-> '313131.4'
'dateEstablished'-> '1912-01-01'
'decription'-> 'Ask Justin for pix'

]

$park = new Park($parksArray);

$park-> save();

$anotherPark = Park::find(2);
$anotherPark->description = "Really awesome park is awesome and parky";
$anotherPark->save();


$park = Park::find(3);
$park->delete();



