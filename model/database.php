<?php
//this class is for database connection and queries
class Database {
    //parameters needed for the class need host,databasename,
    //username, $passwordand pdo class
    private $host = 'localhost'; //will change when changing database
    private $database = 'team_tracker'; // will probably change
    private $username = 'root'; //will update qwhen chaning database
    //private $password = ''; // will need when using online database
    private $pdo;

    //to create new instatnce $db = new Database();

    //construct function
    public function __construct() 
    {
        try {// will need to add passwrod if you have one on localhost
            $this->pdo = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           // echo "connected";
        } catch(PDOException $e) {
            die("Connection failed: " .$e->getMessage());
        }
    }
    /* this is a query all function */
    public function queryAll($table) {
        $query = 'SELECT * FROM ' . $table;
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        $infos = $statement->fetchAll();
        $statement->closeCursor();
        return $infos;
    }

    public function queryAllClock($table, $userID) {
        $query = 'SELECT * FROM ' . $table . ' WHERE userID = ' . $userID . ' ORDER BY date ASC';
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        $infos = $statement->fetchAll();
        $statement->closeCursor();
        return $infos;
    }

    /*this function is a query function that accepts the select query
    and parameters for the select statement  */
    public function query($query, $params = array()) {
        //prepare statement
        $statement = $this->pdo->prepare($query);
        //execute statement
        $statement->execute($params);
        //return the statement
        return $statement;
    }
    
    public function checkAtWork($userID) {
        $query = 'SELECT atWork FROM clock WHERE userID = :userID AND time = (SELECT MAX(time) FROM clock WHERE userID = :userID)';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':userID', $userID);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        // if ($row) {
        //   return $row['atWork'];
        // } else {
        //   return false;
        // }
        return $row;
      }
      
      

    /*example of how to use above function would be:
    $result = $db->query('SELECT * FROM *datatable* WHERE *tableitem* = ?', [info for params]);
    $user = $results-fetch(PDO::FETCH_ASSOC);  */

    /*this function is a INSERT query function which uses implode()
    which use key and a value like name(key) => john(value)
    array_fill to add information  */
    public function insert($table, $data) {
        //set keys
        $keys = implode(',', array_keys($data));
        $values = implode(',', array_fill(0, count($data), '?'));
        //the query
        $query = "INSERT INTO $table ($keys) VALUES ($values)";
        //prepare statement
        $statement = $this->pdo->prepare($query);
        //execute statement
        $statement->execute(array_values($data));
        //return ths last inserted id (I think?)
        return $this->pdo->lastInsertId(); 
    }
    /* to use this function above here is an example:
    $user = $db->insert('users(or tablename)', [
        here we would put everything for the user like username,
        password, firstname, lastname ect.
        'username' => 'abish',
        'password' => 'pa55Word!' and so on......
    ]) */

    /* this function updates useer info similar to insert but
    need a userID */
    public function update($table, $data, $userID) {
        //get in information with implode and array_map
        $set = implode(',', array_map(function($key) {
            return "$key=?";
        }, array_keys($data)));
        //query
        $query = "UPDATE $table SET $set WHERE userId=$userID";
        //prepare statement
        $statement = $this->pdo->prepare($query);
        //execute statement where array values are?
        $statement->execute(array_values($data));

        //return the rows so we can make sure number of rows update
    }
    
    /* to use the above function:
    $updateUser = $db->update('users(or tablename)', ['firstname' => 'andy'],
    'userId = ?' )'
    echo "$updateUser rows updated.";  */

    //last but not least delete user
    public function delete($table, $userID) {
         //query
        $query = "DELETE FROM $table WHERE userId = $userID";
        //prepare statement
        $statement = $this->pdo->prepare($query);
        //execute statement
        $statement->execute();
        //return rowcount
        //return $statement->rowCount();
    }
    /* to use above function:
    $deleteUser = $db->delete('users(or tablename)', 'userId = ?');
    echo "$deleteUser rows deleted"; */
}   
?>