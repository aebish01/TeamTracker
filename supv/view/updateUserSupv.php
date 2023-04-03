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
                Enter the Updated User Information
            </div>

            <div class="gridItem">
                <div class="updateUser">
                    <p>Password</p>
                    <p>First Name</p>
                    <p>Last Name</p>
                    <p>Phone</p>
                    <p>Address</p>
                    <p>Email</p>
                    <p>Employee Type</p>
                    <p>Authority</p>

                    <p class="updateInfo"><?php echo $userUp['password'] ?></p>
                    <p class="updateInfo"><?php echo $userUp['firstName'] ?></p>
                    <p class="updateInfo"><?php echo $userUp['lastName'] ?></p>
                    <p class="updateInfo"><?php echo $userUp['phoneNumber'] ?></p>
                    <p class="updateInfo"><?php echo $userUp['address'] ?></p>
                    <p class="updateInfo"><?php echo $userUp['email'] ?></p>
                    <p class="updateInfo"><?php echo $userUp['empType'] ?></p>
                    <p class="updateInfo"><?php echo $userUp['authLevel'] ?></p>
                </div>

                <form action="." method="POST" class="addUser">
                    <label for="">Please Enter User ID:</label>
                    <input type="text" name="userID4Update" maxlength="" placeholder="Verify ID" required>
                    <h4 style="grid-column: span 2">All areas must be Entered if information is not changing please enter the information above:</h4>
                    <label for="">Password:</label>
                    <input type="text" name="updatePassword" maxlength="50" placeholder="New Password" required>
                    <label for="">First Name:</label>
                    <input type="text" name="updateFName" maxlength="50" placeholder="New First Name" required>
                    <label for="">Last Name:</label>
                    <input type="text" name="updateLName" maxlength="50" placeholder="New Last Name" required>
                    <label for="">Phone Number:</label>
                    <input type="text" name="updatePhone" maxlength="15" placeholder="New Phone Number" required>
                    <label for="">Address:</label>
                    <input type="text" name="updateAddress" maxlength="100" placeholder="New Address" required>
                    <label for="">Email:</label>
                    <input type="text" name="updateEmail" maxlength="50" placeholder="New Email" required>
                    <label for="">Employee Type:</label>
                    <input type="text" name="updateType" maxlength="50" placeholder="FullTime/PartTime" required>
                    <label for="">Authority:</label>
                    <input type="text" name="updateAuth" maxlength="50" placeholder="Authority" required>
                    <button style="grid-column: span 2">Update Employee</button>
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
    </main>
</body>

</html>