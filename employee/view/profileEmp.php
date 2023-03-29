<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Team Tracker App Users</title>
	<link rel="stylesheet" href="../css/styles.css">
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
					<li><a href="../view/login.php">Login</a></li>
				</ul>
			</nav>

			<!--The div elemnent to display the schedule-->
			<div class="gridItem usersLayout">

				<div class="usersInfo">
					<div class="uGrid-name">Welcome <?php echo $user['firstName'] ?></div>
					<div class="uGrid-item1">First Name :</div>
					<div class="uGrid-item2"><?php echo $user['firstName'] ?></div>
					<div class="uGrid-item3">Department :</div>
					<div class="uGrid-item4">Front End</div>
					<div class="uGrid-item5">Last Name :</div>
					<div class="uGrid-item6"><?php echo $user['lastName'] ?></div>
					<div class="uGrid-item7">Position :</div>
					<div class="uGrid-item8"><?php echo $user['authLevel'] ?></div>
					<div class="uGrid-item9">Phone :</div>
					<div class="uGrid-item10"><?php echo $user['phoneNumber'] ?></div>
					<div class="uGrid-item11">Pay-Grade :</div>
					<div class="uGrid-item12"><?php echo $user['empType'] ?></div>
					<div class="uGrid-item13">Email :</div>
					<div class="uGrid-item14"><?php echo $user['email'] ?></div>
					<div class="uGrid-item15">User ID :</div>
					<div class="uGrid-item16"><?php echo $user['userId'] ?></div>
				</div>

			</div>

			<!--The footer elemnent to display basic team information information-->
			<footer>
				<p>
					Author: FHSU CSCI 441 Spring 2023 Team 3 Project<br><br>
					Team3@fhsu
				</p>
			</footer>
		</div>
	</main>

</body>

</html>


<!-- 
	<ul class="usersList">
		<li class="usersLI" style="background-color: #303a99">Supervisor 1</li>
		<li class="usersLI">User 1</li>
		<li class="usersLI">User 2</li>
		<li class="usersLI">User 3</li>
		<li class="usersLI">User 4</li>
		<li class="usersLI">User 5</li>
		<li class="usersLI">User 6</li>
		<li class="usersLI">User 7</li>
		<li class="usersLI">User 8</li>
	</ul> 
-->