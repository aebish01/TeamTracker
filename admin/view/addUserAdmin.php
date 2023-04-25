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

            <div class="gridItem availDescription">
                Enter the New User's Information
            </div>

            <div class="gridItem">
                <form action="." method="POST" class="addUser">
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
                    <select class="addInputT" name="addType" required>
                        <option value="">-- Select Employee Type --</option>
                        <option value="Full-Time">Full-Time</option>
                        <option value="Part-Time">Part-Time</option>
                    </select>
                    <label for="">Authority:</label>
                    <select class="addInputAU" name="addAuth" required>
                        <option value="">-- Select Authority --</option>
                        <option value="1">Admin</option>
                        <option value="2">Supervisor</option>
                        <option value="3">Employee</option>
                    </select>
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