<?php


require_once "parks_logins.php";
require_once "db_connect.php";

$connection->exec("TRUNCATE national_parks");
// get the contents of the CSV as a string
$contents = file_get_contents('national_parks.csv');
// get an array of all the rows
$parks = explode("\n", trim($contents));
// pull off the heading
array_shift($parks);
// trim each 
$parks = array_map('trim', $parks);
foreach($parks as $park) {
    $park = explode(",", $park);
    $insert = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description) 
  VALUES(:name, :location, :date_established, :area_in_acres, :description)";

  $statement = $connection->prepare($insert);

  $statement-> bindValue(':name', $park[0], PDO::PARAM_STR);
  $statement-> bindValue(':location', $park[1], PDO::PARAM_STR);
  $statement-> bindValue(':date_established', $park[2], PDO::PARAM_STR);
  $statement-> bindValue(':area_in_acres', $park[3], PDO::PARAM_STR);
  $statement-> bindValue(':description', $park[4], PDO::PARAM_STR);

  $statement->execute();   
    
    
}
