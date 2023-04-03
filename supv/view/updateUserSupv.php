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
                <div class="row">
                    <div class="col">
                        <p class="bold">Password</p>
                    </div>
                    <div class="col">
                        <p class="bold">First Name</p>
                    </div>
                    <div class="col">
                        <p class="bold">Last Name</p>
                    </div>
                    <div class="col">
                        <p class="bold">Phone</p>
                    </div>
                    <div class="col">
                        <p class="bold">Address</p>
                    </div>
                    <div class="col">
                        <p class="bold">Email</p>
                    </div>
                    <div class="col">
                        <p class="bold">Employee Type</p>
                    </div>
                    <div class="col">
                        <p class="bold">Authority</p>
                    </div>
                </div>


                <div class="row">
                    <div class="col">
                        <p class="bold"><?php echo $userUp['password'] ?></p>
                    </div>
                    <div class="col">
                        <p class="bold"><?php echo $userUp['firstName'] ?></p>
                    </div>
                    <div class="col">
                        <p class="bold"><?php echo $userUp['lastName'] ?></p>
                    </div>
                    <div class="col">
                        <p class="bold"><?php echo $userUp['phoneNumber'] ?></p>
                    </div>
                    <div class="col">
                        <p class="bold"><?php echo $userUp['address'] ?></p>
                    </div>
                    <div class="col">
                        <p class="bold"><?php echo $userUp['email'] ?></p>
                    </div>
                    <div class="col">
                        <p class="bold"><?php echo $userUp['empType'] ?></p>
                    </div>
                    <div class="col">
                        <p class="bold"><?php echo $userUp['authLevel'] ?></p>
                    </div>
                </div>
                <form action="." method="POST">
                    <label for="">Please Enter User ID:</label>
                    <input type="text" name="userID4Update" maxlength="" placeholder="Verify ID" required><br>
                    <br>
                    <h4>All areas must be Entered if information is not changing please enter the information above:</h4>
                    <label for="">Password:</label>
                    <input class="addInputPass" type="text" name="updatePassword" maxlength="50" placeholder="New Password" required><br>
                    <label for="">First Name:</label>
                    <input class="addInputF" type="text" name="updateFName" maxlength="50" placeholder="New First Name" required><br>
                    <label for="">Last Name:</label>
                    <input class="addInputL" type="text" name="updateLName" maxlength="50" placeholder="New Last Name" required><br>
                    <label for="">Phone Number:</label>
                    <input class="addInputP" type="text" name="updatePhone" maxlength="15" placeholder="New Phone Number" required><br>
                    <label for="">Address:</label>
                    <input class="upInputA" type="text" name="updateAddress" maxlength="100" placeholder="New Address" required><br>
                    <label for="">Email:</label>
                    <input class="addInputE" type="text" name="updateEmail" maxlength="50" placeholder="New Email" required><br>
                    <label for="">Employee Type:</label>
                    <input class="addInputT" type="text" name="updateType" maxlength="50" placeholder="FullTime/PartTime" required><br>
                    <label for="">Authority:</label>
                    <input class="addInputAU" type="text" name="updateAuth" maxlength="50" placeholder="Authority" required><br>
                    <br>
                    <button>Update Employee</button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>