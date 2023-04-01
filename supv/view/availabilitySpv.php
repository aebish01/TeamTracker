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
                <li><a href=".?action=scheduleSupv">Schedule</a></li>
                <li><a href=".?action=availSupv">Availability</a></li>
                <li><a href=".?action=timeOffSupv">Time Off</a></li>
                <li><a href=".?action=userProfileSupv">Profile</a></li>
                <li><a href="http://localhost/TeamTracker/supv/">Users</a></li>
            </ul>
        </nav>

        <!-- The div elemnent to display the date currently being displayed -->
        <div class="gridItem availDescription">
            Pending Time Off Requests
        </div>

        <div class="requestList">
            <?php
            include_once("../model/database.php");
            include_once("../model/Requests.class.php");
            $requests = new Request();
            $requests->findPending();
            ?>
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