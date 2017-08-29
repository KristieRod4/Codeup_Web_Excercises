<?php

require_once 'Model.php';
require_once 'User.php';



// Test your new Model class by adding key/value pairs and retrieving them.


// $data = new Model();

// echo "username is " . $data->username . $data->usersname . PHP_EOL;


// Test your User class by calling User::getTableName(). 
// Did it return the string users? In your parent Model class, 
// did you use self:: or static::? Does switching them change the result?

$data->username = "bobbyTables";
echo "username is " . $data->username . PHP_EOL;
echo "password is " . $data->password . PHP_EOL;
$data->password = "password123";

$user = new User();

$user->username = "JaneDoe";
$user->password = "lololol";

echo "The table that stores users is " . User::getTableName();