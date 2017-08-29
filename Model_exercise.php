<?php

// In this new file, create a Model class with:
// An attributes property (array) that is not visible outside of the class
// A magic setter to create key/value pairs in the attributes array.
// A magic getter to retrieve values from the attributes array based on the key name, 
// provided the key exists.

class Model
{

	protected static $table = "";
	//Array to store our key/value data
	private $dataArray = [];
	//Magic setter to populate $data array
	public function __set($name, $value) 
	{
		//Set the $name key to hold $value in $data
		$this->data[$name] = $value;
	}
	//Magic getter to retrieve values from $data
	public function __get($name) 
	{
		//Check for existence of array key $name
		if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
	}
		return null;
}

	public function __getTableName() 
	{
		return static::$table;
	}

}
