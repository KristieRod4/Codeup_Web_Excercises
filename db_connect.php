<?php


$username = "vagrant";
$password = "vagrant";
$dbNAME = "codeup_test_db";

$dbc = new PDO("mysql:host=127.0.0.1;dbname=$dbname=$dbNAME", $username, $password);

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) . "\n";