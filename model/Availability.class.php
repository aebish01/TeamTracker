<?php

include_once "database.php";

class Availability extends Database
{
    private $uID;
    private $monday;
    private $monTo;
    private $tuesday;
    private $tuesTo;
    private $wednesday;
    private $wedTo;
    private $thursday;
    private $thuTo;
    private $friday;
    private $friTo;
    private $saturday;
    private $satTo;
    private $sunday;
    private $sunTo;

    public function __construct($uID = null, $monday = null, $monTo = null, $tuesday = null, $tuesTo = null, $wednesday = null, $wedTo = null, $thursday = null, $thuTo = null, $friday = null, $friTo = null, $saturday = null, $satTo = null, $sunday = null, $sunTo = null)
    {
        parent::__construct();
        $this->uID = $uID;
        $this->monday = $monday;
        $this->monTo = $monTo;
        $this->tuesday = $tuesday;
        $this->tuesTo = $tuesTo;
        $this->wednesday = $wednesday;
        $this->wedTo = $wedTo;
        $this->thursday = $thursday;
        $this->thuTo = $thuTo;
        $this->friday = $friday;
        $this->friTo = $friTo;
        $this->saturday = $saturday;
        $this->satTo = $satTo;
        $this->sunday = $sunday;
        $this->sunTo = $sunTo;
    }

    public function createRequest()
    {
        $query = 'INSERT INTO availability (userId, monday, monTo, tuesday, tuesTo, wednesday, wedTo, thursday, thuTo, friday, friTo, saturday, satTo, sunday, sunTo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = $this->query($query, array($this->uID, $this->monday, $this->monTo, $this->tuesday, $this->tuesTo, $this->wednesday, $this->wedTo, $this->thursday, $this->thuTo, $this->friday, $this->friTo, $this->saturday, $this->satTo, $this->sunday, $this->sunTo));
    }

    function displayAvail()
    {
        $query = 'SELECT monday, monTo, tuesday, tuesTo, wednesday, wedTo, thursday, thuTo, friday, friTo, saturday, satTo, sunday, sunTo FROM availability WHERE userId = ?';
        $stmt = $this->query($query, array($this->uID));

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        echo   '<p class="updateInfo">First available</p>
                <p class="updateInfo">' . $result["monday"] . '</p>
                <p class="updateInfo">' . $result["tuesday"] .  '</p>
                <p class="updateInfo">' . $result["wednesday"] .  '</p>
                <p class="updateInfo">' . $result["thursday"] .  '</p>
                <p class="updateInfo">' . $result["friday"] .  '</p>
                <p class="updateInfo">' . $result["saturday"] .  '</p>
                <p class="updateInfo">' . $result["sunday"] .  '</p>

                <p class="updateInfo">Last available</p>
                <p class="updateInfo">' . $result["monTo"] .  '</p>
                <p class="updateInfo">' . $result["tuesTo"] .  '</p>
                <p class="updateInfo">' . $result["wedTo"] .  '</p>
                <p class="updateInfo">' . $result["thuTo"] .  '</p>
                <p class="updateInfo">' . $result["friTo"] .  '</p>
                <p class="updateInfo">' . $result["satTo"] .  '</p>
                <p class="updateInfo">' . $result["sunTo"] . '</p>';

        return;
    }
}
