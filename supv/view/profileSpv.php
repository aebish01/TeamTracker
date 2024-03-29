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
				Personal Profile
			</div>

			<!--The div elemnent to display the schedule-->
			<div class="gridItem usersLayout">

				<div class="usersInfo">
					<div class="uGrid-name">Welcome <?php echo $user['firstName'] ?></div>
					<div class="uGrid-item1">First Name :</div>
					<div class="uGrid-item2"><?php echo $user['firstName'] ?></div>
					<div class="uGrid-item3">Department :</div>
					<div class="uGrid-item4">
						<?php if ($user['authLevel'] == 1) {
							echo "Administration";
						} elseif ($user['authLevel'] == 2) {
							echo "Team Management";
						} else {
							echo "Front End";
						}
						?>
					</div>
					<div class="uGrid-item5">Last Name :</div>
					<div class="uGrid-item6"><?php echo $user['lastName'] ?></div>
					<div class="uGrid-item7">Position :</div>
					<div class="uGrid-item8">
						<?php if ($user['authLevel'] == 1) {
							echo "Administrator";
						} elseif ($user['authLevel'] == 2) {
							echo "Supervisor";
						} else {
							echo "Employee";
						}
						?>
					</div>
					<div class="uGrid-item9">Phone :</div>
					<div class="uGrid-item10">
						<?php
						$phone = $user['phoneNumber'];
						$formattedPhone = sprintf(
							"(%s)%s-%s",
							substr($phone, 0, 3),
							substr($phone, 3, 3),
							substr($phone, 6, 4)
						);
						echo $formattedPhone;
						?>
					</div>
					<div class="uGrid-item11">Pay-Grade :</div>
					<div class="uGrid-item12"><?php echo $user['empType'] ?></div>
					<div class="uGrid-item13">Email :</div>
					<div class="uGrid-item14"><?php echo $user['email'] ?></div>
					<div class="uGrid-item15">User ID :</div>
					<div class="uGrid-item16"><?php echo $user['userId'] ?></div>
				</div>

			</div>

			<div></div>

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