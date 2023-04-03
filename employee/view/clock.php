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
                    <li><a href=".?action=scheduleEmp">Schedule</a></li>
                    <li><a href=".?action=availEmp">Availability</a></li>
                    <li><a href=".?action=timeOffEmp">Time Off</a></li>
                    <li><a href=".?action=userProfileEmp">Profile</a></li>
                    <li><a href="http://localhost/TeamTracker/employee/">Clock In/Out</a></li>
                    <p></p>
                    <h2>Hello, <?php echo $_SESSION["name"]; ?></h2>
                    <form class="logout" action="../model/logout.php">
                        <button class="button" type="submit" name="submit">Logout</button>
                    </form>
                </ul>
            </nav>

            <div class="gridItem availDescription">
                Time Clock
            </div>

            <!------------clock in and out buttons-------->
            <div class="gridItem">
                <!--?php if(isset($check) && is_array($check) && $check['atWork'] == 1) { ? -->
                <form action="." method="POST" class="addUser">
                    <input type="text" name="userIDClockIn" placeholder="Enter User ID" maxlength="11">
                    <button type="submit">Clock In</button>
                    <!--/form-->
                    <!---php } else { ?>---->
                    <!--form action="." method="POST"-->
                    <input type="text" name="userIDClockOut" placeholder="Enter User ID" maxlength="11">
                    <button type="submit">Clock Out</button>
                </form>
                <!--?php } ?-->

                <div class="clockList">
                    <p class="clockHeader">User ID</p>
                    <p class="clockHeader">Date</p>
                    <p class="clockHeader">Time</p>
                    <p class="clockHeader">In/Out</p>

                    <?php foreach ($clocks as $clock) : ?>
                        <p><?php echo $clock['userID'] ?></p>
                        <p><?php echo $clock['date'] ?></p>
                        <p><?php echo $clock['time'] ?></p>
                        <?php if ($clock['atWork'] == 1) { ?>
                            <p>Clocked In</p>
                        <?php } else { ?>
                            <p>Clocked Out</p>
                    <?php }
                    endforeach ?>
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
    </main>
</body>

</html>