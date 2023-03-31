<?php

include_once "database.php";

class Login extends Database
{
    protected $username;
    protected $password;

    public function __construct($userName, $password)
    {
        parent::__construct();
        $this->username = $userName;
        $this->password = $password;
    }

    public function loginUser()
    {
        $query = 'SELECT userId, userName, password, authLevel, firstName FROM users WHERE userName = ? AND password = ? LIMIT 1';
        $stmt = $this->query($query, array($this->username, $this->password));

        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            $_SESSION["userID"] = $result["userId"];
            $_SESSION["name"] = $result["firstName"];
            $_SESSION["authlvl"] = $result["authLevel"];

            return;
        } else {
            $_SESSION["error"] = "set";
            return;
        }
    }
}
