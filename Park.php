<?php
require "parks_logins.php";
require "Model.php";

/**
 * A Class for interacting with the national_parks database table
 *
 * contains static methods for retrieving records from the database
 * contains an instance method for persisting a record to the database
 *
 * Usage Examples
 *
 * Retrieve a list of parks and display some values for each record
 *
 *      $parks = Park::all();
 *      foreach($parks as $park) {
 *          echo $park->id . PHP_EOL;
 *          echo $park->name . PHP_EOL;
 *          echo $park->description . PHP_EOL;
 *          echo $park->areaInAcres . PHP_EOL;
 *      }
 * 
 * Inserting a new record into the database
 *
 *      $park = new Park();
 *      $park->name = 'Acadia';
 *      $park->location = 'Maine';
 *      $park->areaInAcres = 48995.91;
 *      $park->dateEstablished = '1919-02-26';
 *
 *      $park->insert();
 *
 */
class Park extends Model
{

    ///////////////////////////////////
    // Static Methods and Properties //
    ///////////////////////////////////

    /**
     * our connection to the database
     */
    public static $connection = null;

    public static $table = 'national_parks';

    // *
    //  * establish a database connection if we do not have one
    //  makes a connct with the database and sets a property ie..$connection
        //moved to Model
    // public static function dbConnect() {
    //     require "db_connect.php";
        
    //     if (! is_null(self::$connection)) {
    //         return;
    //     }
    //     self::$connection = $connection;
    // }

    /**
     * returns the number of records in the database
     */
    public static function count() {
        // TODO: call dbConnect to ensure we have a database connection
        self::dbConnect();
        // TODO: use the $dbc static property to query the database for the
        //       number of existing park records
        $countRequest = "SELECT COUNT(*) FROM national_parks";
        $stmt =self::$connection->query($countRequest);
        $count = (int) $stmt->fetchColumn();

    return $count;
    }

    /**
     * returns all the records
     */
    public static function all() {

        // TODO: call dbConnect to ensure we have a database connection
            self::dbConnect(); 
        // TODO: use the $dbc static property to query the database for all the
        //       records in the parks table
            $select = "SELECT * FROM national_parks";
            //use the query method since there is nothing to pass or bind...we just 
            //want all of the contect of our table.
            $stmt = self::$connection->query($select);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // $parks = Park::all();
        // TODO: iterate over the results array and transform each associative
        //       array into a Park object
            
        // TODO: return an array of Park objects
    
                $parks = [];

                foreach($results as $result) {
                    $park = new Park();
                    $park->id = $result['id'];
                    $park->name = $result['name']; 
                    $park->location = $result['location'];
                    $park->dateEstablished = $result['date_established'];
                    $park->areaInAcres = $result['area_in_acres'];
                    $park->description = $result['description'];

                    $parks[] = $park;
            }

            return $parks; 
        }

    /**
     * returns $resultsPerPage number of results for the given page number
     */
    public static function paginate($pageNo, $resultsPerPage = 4) {

        // TODO: call dbConnect to ensure we have a database connection
         self::dbConnect();
        // TODO: calculate the limit and offset needed based on the passed
        //       values
         $limit = $resultsPerPage;
         $offset = ($pageNo * $resultsPerPage) - $resultsPerPage;

        // TODO: use the $dbc static property to query the database with the
        //       calculated limit and offset
         $selectParks = "SELECT * FROM national_parks ORDER BY name LIMIT :limit OFFSET :offset";
         $stmt = self::$connection->prepare($selectParks);

            $stmt->bindValue(':limit', (int) $limit, PDO::PARAM_INT);
            $stmt->bindValue(':offset', (int) $offset, PDO::PARAM_INT);

            $stmt->execute();
            
            $results = $stmt->fetchAll(PDO::FETCH_OBJ);
            
            $output = [];

            foreach($results as $result) {
                $park = new Park();
                $park->id = $result['id'];
                $park->name = $result['name'];
                $park->location = $result['location'];
                $park->dateEstablished = $result['date_established'];
                $park->areaInAcres = $result['area_in_acres'];

                $output[] =$park
            }
            return $rows;

        // TODO: return an array of the found Park objects
    }

    /////////////////////////////////////
    // Instance Methods and Properties //
    /////////////////////////////////////

    /**
     * properties that represent columns from the database
     */
    //there are camel case because they are the public properties and not the
    //colum names in the actual table.
    // public $id;
    // public $name;
    // public $location;
    // public $dateEstablished;
    // public $areaInAcres;
    // public $description;

    /**
     * inserts a record into the database
     */
     // It also contains non static properties..
     //insert method is not static because it contingent on individual park.  
    protected function insert() {
        // TODO: call dbConnect to ensure we have a database connection

        self::dbConnect();
        // TODO: use the $dbc static property to create a perpared statement for
        //       inserting a record into the parks table
    $insert = "INSERT INTO national_parks(name, location, date_established, area_in_acres, description) 
    VALUES(:name, :location, :date_established, :area_in_acres, :description);";

    $stmt = self::$connection->prepare($insert);


        // TODO: use the $this keyword to bind the values from this object to
        //       the prepared statement
        // the bindValues assumes that the values i put here are what i actually want
        //in my database.
       
        $stmt->bindValue(':name', $this->name, PDO::PARAM_STR);
        $stmt->bindValue(':location', $this->location, PDO::PARAM_STR);
        $stmt->bindValue(':date_established', $this->dateEstablished, PDO::PARAM_STR);
        $stmt->bindValue(':area_in_acres', $this->areaInAcres, PDO::PARAM_STR);
        $stmt->bindValue(':description', $this->description, PDO::PARAM_STR);

        // TODO: excute the statement and set the $id property of this object to
        //       the newly created id
        $stmt->execute();

        $this->id = self::$connection->lastInsertId();   
        
    }

    /*$park->update(): update an existing record in the database with new values*/
        protected function update() {
                self::dbConnect();
                $update = "UPDATE " . static::$table . " SET
                
                name = :name,
                location = :location', $this->location, PDO::PARAM_STR);
                date = :date_established', $this->dateEstablished, PDO::PARAM_STR);
                area_in_acres = :area_in_acres', $this->areaInAcres, PDO::PARAM_STR);    
                description = :description', $this->description, PDO::PARAM_STR);    
                WHERE id = :id";

                $stmt = self::$connection->prepare($update);
                $stmt->binValue(":name", $this->name, PDO::PARAM_STR);
                $stmt->binValue(":location", $this->location, PDO::PARAM_STR);
                $stmt->binValue(":date_established", $this->date_establish, PDO::PARAM_STR);
                $stmt->binValue(":area_in_acres", $this->area_in_acres, PDO::PARAM_STR);
                $stmt->binValue(":description", $this->description, PDO::PARAM_STR);
                $stmt->binValue(":id", $this->id, PDO::PARAM_INT);

                $stmt->execute(); 
        }

        public function find($id) {

            self::dbConnect();
            $query = "SELECT * from " . static::$table . "where id = :id"
            $stmt = self::$connection->prepare($query);

            $stmt = bindValue('id', $id, PDO::PARAM_INT)
            $stmt->execute();

            $result = $stmt->fetch(PDO::Fetch_ASSOC);
            $park = new Park($result);
            return($park);
            
        }

        

}
