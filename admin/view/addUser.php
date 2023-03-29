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
					<li><a href="scheduleAdm.php">Schedule</a></li>
					<li><a href="availabilityAdm.php">Availability</a></li>
					<li><a href="timeOffAdm.php">Time Off</a></li>
					<li><a href="profileAdm.php">Profile</a></li>
					<li><a href="user.php">Users</a></li>
				</ul>
			</nav>
        <div class="container">
            <form action="." method="POST">
                <label for="">First Name:</label>
                <input type="text" name="addFName" maxlength="50" placeholder="First Name" required><br>
                <label for="">Last Name:</label>
                <input type="text" name="addLName" maxlength="50" placeholder="Last Name" required><br>
                <label for="">Adress:</label>
                <input type="text" name="addAddress" maxlength="100" placeholder="Address" required><br>
                <label for="">Phone Number:</label>
                <input type="text" name="addPhone" maxlength="15" placeholder="Phone Number" required><br>
                <label for="">Email:</label>
                <input type="text" name="addEmail" maxlength="50" placeholder="Email" required><br>
                <label for="">Employee Type:</label>
                <input type="text" name="addType" maxlength="50" placeholder="FullTime/PartTime" required><br>
                <label for="">Authority:</label>
                <input type="text" name="addAuth" maxlength="50" placeholder="Authority" required><br>
                <br>
                <button>Add Employee</button>
            </form>
        </div>
        