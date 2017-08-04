<?php
// Open your Log.php in Sublime. Add a new property to the class called $handle.
// Add a constructor to your Log class. Your constructor should:
// Take in a parameter called $prefix. If nothing is passed to the constructor, the $prefix 
// should default to 'log'.
// Set the $filename property of the class to $prefix-YYYY-MM-DD.log.
// Open the $filename for appending and assign the file pointer to the property $handle.
// Add a destructor to close $handle when the class is destroyed.
// Update logMessage(); it should no longer need to open and close its own file handle, instead 
// use the $handle property.
// Update log_test.php; pass the prefix 'cli' to the class and do not manually set the $filename 
// property. Test from the command line.
// For future thought: $handle and $filename are both exposed to anybody using our class. 
// What do you think would happen 
// if somebody closed $handle before we were finished with it? Or assigned an array to $filename?
//  How do you think we will be able to address this in the future?


class Log
{
	public $filename;
	public $handle;

	public function __construct($prefix = 'log')
	{
		$this->filename = $prefix . "-" . date('Y-m-d') . ".log";
		$this->handle = fopen($this->filename, 'a');
	}

	public function logMessage($level, $message)
	{
		$stringToWrite = date('Y-m-d H:i:s') . " [" . $level . "]" . $message . PHP_EOL;
		fwrite($this->handle, $stringToWrite);
	}

	public function info($message)
	{
		$this->logMessage("INFO", $message);

	}

	public function error($message) 
	{
		$this->logMessage("ERROR", $message);
	}

	public function __destruct()
	{
		fclose($this->handle);

	}
}










?>