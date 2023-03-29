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
                <li><a href="../view/login.php">Login</a></li>
            </ul>
        </nav>

        <!-- The div elemnent to display the date currently being displayed -->
        <div class="gridItem availDescription">
            Submit the Details of Your Request
        </div>

        <!-- The div elemnent to display the Time Off Form -->
        <div class="gridItem timeOff">
            <!-- What working form tag would look like:  <form class="TOForm" action="foldername/nameOfYourFile.php" method="post"> -->
            <form class="TOForm">
                <!-- Start Date Select ------------------------------>
                <div class="formItem startDate">
                    <label for="sDay">Start Day:</label>
                    <select name="sDay" id="sDay">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <label for="sMonth">Start Month:</label>
                    <select name="sMonth" id="sMonth">
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                    <label for="sYear">Start Year:</label>
                    <select name="sYear" id="sYear">
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                    </select>
                </div>
                <!-- End Date Select -------------------------------->
                <div class="formItem endDate">
                    <label for="eDay">End Day:</label>
                    <select name="eDay" id="eDay">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <label for="eMonth">End Month:</label>
                    <select name="eMonth" id="eMonth">
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                    <label for="eYear">End Year:</label>
                    <select name="eYear" id="eYear">
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                    </select>
                </div>
                <!-- Type of Request ----------------------------------->
                <div class="formItem type">
                    <label for="timeOff">Type:</label>
                    <select name="TO_Request" id="timeOff">
                        <option value="Off No Pay">Off No Pay</option>
                        <option value="Vacation">Vacation</option>
                        <option value="Sick">Sick</option>
                        <option value="Personal">Personal</option>
                    </select>
                </div>
                <!-- Reason for Request -------------------------------->
                <div class="formItem reason">
                    <p>Reason:</p>
                    <textarea name="message" rows="12" cols="60"></textarea>
                </div>
                <!-- Submit Request ------------------------------------>
                <div class="enter">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>

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