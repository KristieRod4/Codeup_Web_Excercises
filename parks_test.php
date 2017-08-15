<?php

require_once "Park.php";

// $parks = Park::all();

// var_dump($parks);

// $park = new Park();
// $park->name = "Awesome Park";
// $park->location = "here";
// $park->date_established = "1950";
// $park->area_in_acres = 800;
// $park->description = "Most totally awesome and amaing park ever";
// $park->insert();


// $parks = Park::paginate(1, 4);

// var_dump($parks);

// $parks = Park::insert();

// var_dump($parks);

$park = new Park();
     $park->name = 'KPR National Park';
     $park->location = 'Amazon';
     $park->dateEstablished = '1972-12-26';
     $park->areaInAcres = 555555.91;
     $park->description = 'UREKA it passed the test!!';
     $park->insert();



