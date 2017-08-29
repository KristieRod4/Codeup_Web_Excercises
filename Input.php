<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        return isset($_REQUEST[$key]);
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = 0)
    {
            if(self::has($key)) {
                return $_REQUEST[$key];
        } else {
            return $default;
        }
    }
    public static function escape($input)
    {
        return htmlspecialchars(strip_tags($input));
    }

    public static function getNumber($key) {
            $value =self::get($key);
            if(!is_numeric($value)) {
            throw new Exception("ERROR: Value is not a number!")

            } else if (empty($value)) {
            throw new Exception("ERROR: Request does NOT have a key!")
            
        }
            return $value;
    }
    public static function getString($key) {
            $value = self::get($key);
            if(is_numeric($input) || !is_string ($value)) {
            throw new Exception("ERROR: Value is not a string!");

            } else if (empty($value){
                throw new Exception('ERROR:Request does NOT have a key!');

            }
                return $value;

        }

        public static function getDate($key) {
            $value = self::get($key);
            if(!is_numeric(strtotime($value))) {
                throw new Exception("Must be a valid date");

            } else {
                $date = new DateTime();
                $date->setTimestamp(strtotime($value)) {
                $date->setTimezone(new DateTimeZone('America/Chicago'));
                }
                    return $date;
            }
        }
         
        
    

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}


    // Update your Input class with three new methods:
    // public static function getString($key)
    // public static function getNumber($key)
    // Each of these methods should use the get() method internally to retrieve the value 
    // from $_POST or $_GET. If the values does not exist, or match the expected type, 
    // throw an exception.

    // Note: Values coming from forms are (almost) always strings, so you will have to do 
    // something more advanced that just is_string() or is_int(). For getNumber($key), 
    // make sure the returned value is cast to the appropriate data type.


}
