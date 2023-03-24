<?php

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
    public function __construct($userID, $userName, $password, $firstName, $lastName, $address, $phoneNum, $email, $employeeType, $authLevel)
    {
        $this->userID = $userID;
        $this->userName = $userName;
        $this->password = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->phoneNum = $phoneNum;
        $this->email = $email;
        $this->employeeType = $employeeType;
        $this->authLevel = $authLevel;
    }
    //getters
    public function getUserID() {
        return $this->userID;
    }
    public function getUserName() {
        return $this->userName;
    }
    public function getPassword() {

    }
    //need to finish
    //setters 
    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

}



?>