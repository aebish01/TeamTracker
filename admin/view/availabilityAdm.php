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
                <li><a href=".?action=scheduleAdmin">Schedule</a></li>
                <li><a href=".?action=availAdmin">Requests</a></li>
                <li><a href=".?action=timeOffAdmin">Time Off</a></li>
                <li><a href=".?action=userProfileAdmin">Profile</a></li>
                <li><a href="http://localhost/TeamTracker/admin/">Users</a></li>
                <p></p>
                <h2>Hello, <?php echo $_SESSION["name"]; ?></h2>
                <form class="logout" action="../model/logout.php">
                    <button class="button" type="submit" name="submit">Logout</button>
                </form>
            </ul>
        </nav>

        <!-- The div elemnent to display the date currently being displayed -->
        <div class="gridItem availDescription">
            Pending Time Off Requests
        </div>

        <div class="gridItem" style="justify-self: center">
            <div class="requestList">
                <p class="requestHeader">FirstName</p>
                <p class="requestHeader">LastName</p>
                <p class="requestHeader">Start Date</p>
                <p class="requestHeader">End Date</p>
                <p class="requestHeader">Type</p>
                <p class="requestHeader">Reason</p>
                <p class="requestHeader">Approve</p>
                <p class="requestHeader">Deny</p>
                <?php
                include_once("../model/database.php");
                include_once("../model/Requests.class.php");
                $requests = new Request();
                $requests->findPending();
                ?>
            </div>
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