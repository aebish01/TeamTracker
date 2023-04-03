<?php
require_once('/xampp/htdocs/TeamTracker/model/database.php');

Class User {
    //Parameters we might need to add some as we go
    private $userID;
    private $userName;
    private $password;
    private $firstName;
    private $lastName;
    private $address;
    private $phoneNum;
    private $email;
    private $employeeType;
    private $authLevel;

    //constructor to add all information from the user after login
    //public function __construct($userID, $userName, $password, $firstName, $lastName, $address, $phoneNum, $email, $employeeType, $authLevel)
    public function __construct()
    {
        // $this->userID = $userID;
        // $this->userName = $userName;
        // $this->password = $password;
        // $this->firstName = $firstName;
        // $this->lastName = $lastName;
        // $this->address = $address;
        // $this->phoneNum = $phoneNum;
        // $this->email = $email;
        // $this->employeeType = $employeeType;
        // $this->authLevel = $authLevel;
    }
    //getters
    public function getUserID() {
        return $this->userID;
    }
    public function getUserName() {
        return $this->userName;
    }
    public function getPassword() {
        return $this->password;
    }
    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getPhoneNum() {
        return $this->phoneNum;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getEmployeeType() {
        return $this->employeeType;
    }

    public function getAuthLevel() {
        return $this->authLevel;
    }

    //setters 
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }
    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }
    public function setUsername($firstName, $lastName) {
        $db = new Database();
        
        // Prepare query to check if username already exists
        $stmt = $db->query('SELECT COUNT(*) FROM users WHERE username = ?', ['username']);
        
        // Generate username based on first initial and last name
        $userName = strtolower(substr($firstName, 0, 1) . $lastName);
        
        // Check if username already exists
        $stmt->execute(array($userName));
        $count = $stmt->fetchColumn();
        
        // If username already exists, append number to end
        if ($count > 0) {
            $i = 1;
            $new_username = $userName;
            while ($count > 0) {
                $new_username = $userName . $i;
                $stmt->execute(array($new_username));
                $count = $stmt->fetchColumn();
                $i++;
            }
            $userName = $new_username;
        }
        $this->userName = $userName;
        return $userName;
    }
    
    public function setPassword($password) {
        $this->password = $password;
    }
    public function setAddress($address) {
        $this->address = $address;
    }

    public function setPhoneNum($phoneNum) {
        $this->phoneNum = $phoneNum;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setEmployeeType($employeeType) {
        $this->employeeType = $employeeType;
    }

    public function setAuthLevel($authLevel) {
        $this->authLevel = $authLevel;
    }
    
}
?>