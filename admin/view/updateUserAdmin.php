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
                    <select class="updateInputT" name="updateType" required>
                        <option value="">-- Select Employee Type --</option>
                        <option value="Full-Time">Full-Time</option>
                        <option value="Part-Time">Part-Time</option>
                    </select>
                        <label for="">Authority:</label>
                        <select class="updateInputAU" name="updateAuth" required>
                            <option value="">-- Select Authority --</option>
                            <option value="1">Admin</option>
                            <option value="2">Supervisor</option>
                            <option value="3">Employee</option>
                    </select>                    
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