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
                User List
            </div>

            <div class="gridItem usersPage">
                <div class="userChanges">
                    <p></p>
                    <label>Add User:</label>
                    <a href=".?action=addUserAdmin">
                        <button class="button">Add User</button>
                    </a>
                    <p></p>
                    <form class="userChanges" action="." method="POST">
                        <label>Update User By ID:</label>
                        <input class="enterID" type="text" name="userIDUpdate" id="userIDUpdate" placeholder="Enter User ID To Update" maxlength="11">
                        <button class="button" type="submit">Update User</button>
                        <input type="hidden" name="action" value="updateUserAdmin">
                    </form>
                    <p></p>
                    <form class="userChanges" action="." method="POST">
                        <label>Delete User By ID:</label>
                        <input class="enterID" type="text" name="deleteUserID" placeholder="Enter User ID To Delete" maxlength="11">
                        <button class="button">Delete User</button>
                    </form>
                </div>

                <div></div>

                <div class="userList">
                    <p class="userHeader">User ID</p>
                    <p class="userHeader">Username</p>
                    <p class="userHeader">First Name</p>
                    <p class="userHeader">Last Name</p>
                    <p class="userHeader">Phone</p>
                    <p class="userHeader">Address</p>
                    <p class="userHeader">Email</p>

                    <?php foreach ($users as $user) : ?>
                        <p><?php echo $user['userId'] ?></p>
                        <p><?php echo $user['userName'] ?></p>
                        <p><?php echo $user['firstName'] ?></p>
                        <p><?php echo $user['lastName'] ?></p>
                        <p><?php echo $user['phoneNumber'] ?></p>
                        <p><?php echo $user['address'] ?></p>
                        <p><?php echo $user['email'] ?></p>
                    <?php endforeach ?>
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