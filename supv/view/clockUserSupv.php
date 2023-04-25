<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Team Tracker App Clock</title>
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
                <div class="clockSupvList">
                    <p class="clockHeader">Clock ID</p>
                    <p class="clockHeader">User ID</p>
                    <p class="clockHeader">Date</p>
                    <p class="clockHeader">TimeStamp</p>
                    <p class="clockHeader">Clock In/Out</p>
                    <p class="clockHeader">Updated by (if other than User)</p>

                    <?php foreach ($clocks as $clock) : ?>
                        <p><?php echo $clock['ID'] ?></p>
                        <p><?php echo $clock['userID'] ?></p>
                        <p><?php echo $clock['date'] ?></p>
                        <p><?php echo $clock['time'] ?></p>
                        <?php if($clock['atWork'] == 1){ ?>
                            <p>Clocked In</p>
                        <?php } else {?> 
                            <p>Clocked Out</p>
                        <?php } ?>
                        <p><?php echo $clock['editorID'] ?></p>
                    <?php endforeach ?>
                </div>
            </div>

                <form action="." method="POST" class="addUser">
                    <label for="">Enter Clock ID to Delete it:</label>
                    <input type="text" name="delClock" maxlength="11" placeholder="Verify ID" required>
                    <button style="grid-column: span 2">Delete</button>
                </form>
                <form action="." method="POST" class="addUser">
                    <h4 style="grid-column: span 2">To add a clock time please enter the folowing information</h4>
                    <label for="">User ID:</label>
                    <input type="text" name="clockAddUserID" maxlength="11" placeholder="User ID" required>
                    <label for="">Clock Date:</label>
                    <input type="date" id="date" name="clockDate" maxlength="50" required>
                    <label for="">Clock Hour</label>
                    <input type="time" name="clockTime" maxlength="2" placeholder="Hour 0-23" required>
                    <label for="">Clocking in/out</label>
                    <select class="clockinout" name="clockInOut" required>
                        <option value="">-- Clocking In / Out --</option>
                        <option value="1">Clock IN</option>
                        <option value="0">Clock Out</option>
                    </select>                    
                    <button style="grid-column: span 2">Add Clock</button>
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