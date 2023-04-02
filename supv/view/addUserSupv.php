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
                    <li><a href=".?action=scheduleSupv">Schedule</a></li>
                    <li><a href=".?action=availSupv">Requests</a></li>
                    <li><a href=".?action=timeOffSupv">Time Off</a></li>
                    <li><a href=".?action=userProfileSupv">Profile</a></li>
                    <li><a href="http://localhost/TeamTracker/supv/">Users</a></li>
                    <p></p>
                    <h2>Hello, <?php echo $_SESSION["name"]; ?></h2>
                    <form class="logout" action="../model/logout.php">
                        <button class="button" type="submit" name="submit">Logout</button>
                    </form>
                </ul>
            </nav>

            <div class="gridItem availDescription">
                Enter the New User's Information
            </div>

            <div class="gridItem">
                <form action="." method="POST" class="TOForm">
                    <label for="">First Name:</label>
                    <input class="addInputF" type="text" name="addFName" maxlength="50" placeholder="First Name" required>
                    <label for="">Last Name:</label>
                    <input class="addInputL" type="text" name="addLName" maxlength="50" placeholder="Last Name" required>
                    <label for="">Adress:</label>
                    <input class="addInputA" type="text" name="addAddress" maxlength="100" placeholder="Address" required>
                    <label for="">Phone Number:</label>
                    <input class="addInputP" type="text" name="addPhone" maxlength="15" placeholder="Phone Number" required>
                    <label for="">Email:</label>
                    <input class="addInputE" type="text" name="addEmail" maxlength="50" placeholder="Email" required>
                    <label for="">Employee Type:</label>
                    <input class="addInputT" type="text" name="addType" maxlength="50" placeholder="FullTime/PartTime" required>
                    <label for="">Authority:</label>
                    <input class="addInputAU" type="text" name="addAuth" maxlength="50" placeholder="Authority" required>
                    <button style="grid-column: span 2">Add Employee</button>
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