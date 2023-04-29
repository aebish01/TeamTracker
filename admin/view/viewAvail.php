<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Team Tracker App Users</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css.map">
</head>

<body>

    <main>
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

            <?php
            include_once "../model/Availability.class.php";

            $display = new Availability($viewAvail);
            ?>

            <div class="gridItem availDescription">
                Viewing Employee # <?php echo $viewAvail; ?>'s Availability
            </div>

            <div class="gridItem">
                <div class="updateUser">
                    <p>Day of Week</p>
                    <p>Monday</p>
                    <p>Tuesday</p>
                    <p>Wednesday</p>
                    <p>Thursday</p>
                    <p>Friday</p>
                    <p>Saturday</p>
                    <p>Sunday</p>

                    <?php $display->displayAvail(); ?>
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