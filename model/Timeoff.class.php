<?php

include_once "database.php";

class Timeoff extends Database
{
    private $uID;
    private $startDate;
    private $endDate;
    private $type;
    private $message;

    public function __construct($uID, $sDay, $sMonth, $sYear, $eDay, $eMonth, $eYear, $type, $message)
    {
        parent::__construct();
        $this->uID = $uID;
        $this->startDate = $sYear . "-" . $sMonth . "-" . $sDay;
        $this->endDate = $eYear . "-" . $eMonth . "-" . $eDay;
        $this->type = $type;
        $this->message = $message;
    }

    public function createRequest()
    {
        $query = 'INSERT INTO timeoff (uID, startDate, endDate, type, message) VALUES (?, ?, ?, ?, ?)';
        $stmt = $this->query($query, array($this->uID, $this->startDate, $this->endDate, $this->type, $this->message));
    }
}
