<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Team Tracker App Schedule Testing</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>

    <div class="gridContainer">

        <!-- The main navigation bar element -->
        <nav>
            <ul>
                <li><a href=".?action=scheduleEmp">Schedule</a></li>
                <li><a href=".?action=availEmp">Availability</a></li>
                <li><a href=".?action=timeOffEmp">Time Off</a></li>
                <li><a href=".?action=userProfileEmp">Profile</a></li>
                <li><a href="http://localhost/TeamTracker/employee/">Clock In/Out</a></li>
                <p></p>
                <h2>Hello, <?php echo $_SESSION["name"]; ?></h2>
                <form class="logout" action="../model/logout.php">
                    <button class="button" type="submit" name="submit">Logout</button>
                </form>
            </ul>
        </nav>

        <!-- The div elemnent to display the date currently being displayed -->
        <div class="gridItem availDescription">
            Select the Times You Will be Available
        </div>

        <!-- The div elemnent to display the availability Form -->
        <div class="gridItem availability">
            <form class="availForm" action="../model/availabilityControl.php" method="post">
                <!-- Monday Availability ------------------------------>
                <div class="formItem availDays">
                    <label for="monday">Monday: </label>
                    <select name="monday" id="monday">
                        <option value="8a">8:00 AM</option>
                        <option value="9a">9:00 AM</option>
                        <option value="10a">10:00 AM</option>
                        <option value="11a">11:00 AM</option>
                        <option value="12p">12:00 PM</option>
                        <option value="1p">1:00 PM</option>
                        <option value="2p">2:00 PM</option>
                        <option value="3p">3:00 PM</option>
                        <option value="4p">4:00 PM</option>
                        <option value="5p">5:00 PM</option>
                        <option value="6p">6:00 PM</option>
                        <option value="7p">7:00 PM</option>
                        <option value="8p">8:00 PM</option>
                    </select>
                    <label for="monTo"> To </label>
                    <select name="monTo" id="monTo">
                        <option value="8a">8:00 AM</option>
                        <option value="9a">9:00 AM</option>
                        <option value="10a">10:00 AM</option>
                        <option value="11a">11:00 AM</option>
                        <option value="12p">12:00 PM</option>
                        <option value="1p">1:00 PM</option>
                        <option value="2p">2:00 PM</option>
                        <option value="3p">3:00 PM</option>
                        <option value="4p">4:00 PM</option>
                        <option value="5p">5:00 PM</option>
                        <option value="6p">6:00 PM</option>
                        <option value="7p">7:00 PM</option>
                        <option value="8p">8:00 PM</option>
                    </select>
                </div>
                <!-- Tuesday Availability -------------------------------->
                <div class="formItem availDays">
                    <label for="tuesday">Tuesday: </label>
                    <select name="tuesday" id="tuesday">
                        <option value="8a">8:00 AM</option>
                        <option value="9a">9:00 AM</option>
                        <option value="10a">10:00 AM</option>
                        <option value="11a">11:00 AM</option>
                        <option value="12p">12:00 PM</option>
                        <option value="1p">1:00 PM</option>
                        <option value="2p">2:00 PM</option>
                        <option value="3p">3:00 PM</option>
                        <option value="4p">4:00 PM</option>
                        <option value="5p">5:00 PM</option>
                        <option value="6p">6:00 PM</option>
                        <option value="7p">7:00 PM</option>
                        <option value="8p">8:00 PM</option>
                    </select>
                    <label for="tuesTo"> To </label>
                    <select name="tuesTo" id="tuesTo">
                        <option value="8a">8:00 AM</option>
                        <option value="9a">9:00 AM</option>
                        <option value="10a">10:00 AM</option>
                        <option value="11a">11:00 AM</option>
                        <option value="12p">12:00 PM</option>
                        <option value="1p">1:00 PM</option>
                        <option value="2p">2:00 PM</option>
                        <option value="3p">3:00 PM</option>
                        <option value="4p">4:00 PM</option>
                        <option value="5p">5:00 PM</option>
                        <option value="6p">6:00 PM</option>
                        <option value="7p">7:00 PM</option>
                        <option value="8p">8:00 PM</option>
                    </select>
                </div>
                <!-- Wednesday Availability ----------------------------------->
                <div class="formItem availDays">
                    <label for="wednesday">Wednesday: </label>
                    <select name="wednesday" id="wednesday">
                        <option value="8a">8:00 AM</option>
                        <option value="9a">9:00 AM</option>
                        <option value="10a">10:00 AM</option>
                        <option value="11a">11:00 AM</option>
                        <option value="12p">12:00 PM</option>
                        <option value="1p">1:00 PM</option>
                        <option value="2p">2:00 PM</option>
                        <option value="3p">3:00 PM</option>
                        <option value="4p">4:00 PM</option>
                        <option value="5p">5:00 PM</option>
                        <option value="6p">6:00 PM</option>
                        <option value="7p">7:00 PM</option>
                        <option value="8p">8:00 PM</option>
                    </select>
                    <label for="wedTo"> To </label>
                    <select name="wedTo" id="wedTo">
                        <option value="8a">8:00 AM</option>
                        <option value="9a">9:00 AM</option>
                        <option value="10a">10:00 AM</option>
                        <option value="11a">11:00 AM</option>
                        <option value="12p">12:00 PM</option>
                        <option value="1p">1:00 PM</option>
                        <option value="2p">2:00 PM</option>
                        <option value="3p">3:00 PM</option>
                        <option value="4p">4:00 PM</option>
                        <option value="5p">5:00 PM</option>
                        <option value="6p">6:00 PM</option>
                        <option value="7p">7:00 PM</option>
                        <option value="8p">8:00 PM</option>
                    </select>
                </div>
                <!-- Thursday Availability -------------------------------->
                <div class="formItem availDays">
                    <label for="thursday">Thursday: </label>
                    <select name="thursday" id="thursday">
                        <option value="8a">8:00 AM</option>
                        <option value="9a">9:00 AM</option>
                        <option value="10a">10:00 AM</option>
                        <option value="11a">11:00 AM</option>
                        <option value="12p">12:00 PM</option>
                        <option value="1p">1:00 PM</option>
                        <option value="2p">2:00 PM</option>
                        <option value="3p">3:00 PM</option>
                        <option value="4p">4:00 PM</option>
                        <option value="5p">5:00 PM</option>
                        <option value="6p">6:00 PM</option>
                        <option value="7p">7:00 PM</option>
                        <option value="8p">8:00 PM</option>
                    </select>
                    <label for="thuTo"> To </label>
                    <select name="thuTo" id="thuTo">
                        <option value="8a">8:00 AM</option>
                        <option value="9a">9:00 AM</option>
                        <option value="10a">10:00 AM</option>
                        <option value="11a">11:00 AM</option>
                        <option value="12p">12:00 PM</option>
                        <option value="1p">1:00 PM</option>
                        <option value="2p">2:00 PM</option>
                        <option value="3p">3:00 PM</option>
                        <option value="4p">4:00 PM</option>
                        <option value="5p">5:00 PM</option>
                        <option value="6p">6:00 PM</option>
                        <option value="7p">7:00 PM</option>
                        <option value="8p">8:00 PM</option>
                    </select>
                </div>
                <!-- Friday Availability -------------------------------->
                <div class="formItem availDays">
                    <label for="friday">friday: </label>
                    <select name="friday" id="friday">
                        <option value="8a">8:00 AM</option>
                        <option value="9a">9:00 AM</option>
                        <option value="10a">10:00 AM</option>
                        <option value="11a">11:00 AM</option>
                        <option value="12p">12:00 PM</option>
                        <option value="1p">1:00 PM</option>
                        <option value="2p">2:00 PM</option>
                        <option value="3p">3:00 PM</option>
                        <option value="4p">4:00 PM</option>
                        <option value="5p">5:00 PM</option>
                        <option value="6p">6:00 PM</option>
                        <option value="7p">7:00 PM</option>
                        <option value="8p">8:00 PM</option>
                    </select>
                    <label for="friTo"> To </label>
                    <select name="friTo" id="friTo">
                        <option value="8a">8:00 AM</option>
                        <option value="9a">9:00 AM</option>
                        <option value="10a">10:00 AM</option>
                        <option value="11a">11:00 AM</option>
                        <option value="12p">12:00 PM</option>
                        <option value="1p">1:00 PM</option>
                        <option value="2p">2:00 PM</option>
                        <option value="3p">3:00 PM</option>
                        <option value="4p">4:00 PM</option>
                        <option value="5p">5:00 PM</option>
                        <option value="6p">6:00 PM</option>
                        <option value="7p">7:00 PM</option>
                        <option value="8p">8:00 PM</option>
                    </select>
                </div>
                <!-- Saturday Availability -------------------------------->
                <div class="formItem availDays">
                    <label for="saturday">Saturday: </label>
                    <select name="saturday" id="saturday">
                        <option value="8a">8:00 AM</option>
                        <option value="9a">9:00 AM</option>
                        <option value="10a">10:00 AM</option>
                        <option value="11a">11:00 AM</option>
                        <option value="12p">12:00 PM</option>
                        <option value="1p">1:00 PM</option>
                        <option value="2p">2:00 PM</option>
                        <option value="3p">3:00 PM</option>
                        <option value="4p">4:00 PM</option>
                        <option value="5p">5:00 PM</option>
                        <option value="6p">6:00 PM</option>
                        <option value="7p">7:00 PM</option>
                        <option value="8p">8:00 PM</option>
                    </select>
                    <label for="satTo"> To </label>
                    <select name="satTo" id="satTo">
                        <option value="8a">8:00 AM</option>
                        <option value="9a">9:00 AM</option>
                        <option value="10a">10:00 AM</option>
                        <option value="11a">11:00 AM</option>
                        <option value="12p">12:00 PM</option>
                        <option value="1p">1:00 PM</option>
                        <option value="2p">2:00 PM</option>
                        <option value="3p">3:00 PM</option>
                        <option value="4p">4:00 PM</option>
                        <option value="5p">5:00 PM</option>
                        <option value="6p">6:00 PM</option>
                        <option value="7p">7:00 PM</option>
                        <option value="8p">8:00 PM</option>
                    </select>
                </div>
                <!-- Sunday Availability -------------------------------->
                <div class="formItem availDays">
                    <label for="sunday">Sunday: </label>
                    <select name="sunday" id="sunday">
                        <option value="8a">8:00 AM</option>
                        <option value="9a">9:00 AM</option>
                        <option value="10a">10:00 AM</option>
                        <option value="11a">11:00 AM</option>
                        <option value="12p">12:00 PM</option>
                        <option value="1p">1:00 PM</option>
                        <option value="2p">2:00 PM</option>
                        <option value="3p">3:00 PM</option>
                        <option value="4p">4:00 PM</option>
                        <option value="5p">5:00 PM</option>
                        <option value="6p">6:00 PM</option>
                        <option value="7p">7:00 PM</option>
                        <option value="8p">8:00 PM</option>
                    </select>
                    <label for="sunTo"> To </label>
                    <select name="sunTo" id="sunTo">
                        <option value="8a">8:00 AM</option>
                        <option value="9a">9:00 AM</option>
                        <option value="10a">10:00 AM</option>
                        <option value="11a">11:00 AM</option>
                        <option value="12p">12:00 PM</option>
                        <option value="1p">1:00 PM</option>
                        <option value="2p">2:00 PM</option>
                        <option value="3p">3:00 PM</option>
                        <option value="4p">4:00 PM</option>
                        <option value="5p">5:00 PM</option>
                        <option value="6p">6:00 PM</option>
                        <option value="7p">7:00 PM</option>
                        <option value="8p">8:00 PM</option>
                    </select>
                </div>
                <!-- Submit Request ------------------------------------>
                <div class="availEnter">
                    <input name="submit" type="submit" value="Submit">
                </div>
            </form>
        </div>

        <div></div>

        <!-- The footer elemnent to display basic team information -->
        <footer>
            <p>
                Author: FHSU CSCI 441 Spring 2023 Team 3 Project<br>
                Team3@fhsu<br><br>
            </p>

        </footer>

    </div>

    <script src="scripts/main.js"></script>

</body>

</html>