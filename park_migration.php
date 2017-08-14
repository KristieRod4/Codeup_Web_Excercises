<?php

require_once "parks_logins.php";
require_once "db_connect.php";

$connection->exec('DROP TABLE IF EXISTS national_parks'); 

$query = 'CREATE TABLE IF NOT EXISTS national_parks (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR (255) NOT NULL,
	location VARCHAR (255) NOT NULL,
	date_established DATE NOT NULL,
	area_in_acres DOUBLE NOT NULL,
	description VARCHAR (1500)NOT NULL,
    PRIMARY KEY (id)
)';


$connection->exec($query);
echo 'parks table successfully created' . PHP_EOL;