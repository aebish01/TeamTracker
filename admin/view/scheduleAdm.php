<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Team Tracker App Schedule Testing</title>
	<link rel="stylesheet" href="../css/styles.css">
</head>

<body>

	<div class="gridContainer">

		<!-- The main navigation bar element -->
		<nav>
			<ul>
				<li><a href=".?action=scheduleAdmin">Schedule</a></li>
				<li><a href=".?action=availAdmin">Availability</a></li>
				<li><a href=".?action=timeOffAdmin">Time Off</a></li>
				<li><a href=".?action=userProfileAdmin">Profile</a></li>
				<li><a href="http://localhost/TeamTracker/admin/">Users</a></li>
			</ul>
		</nav>

		<!-- The div elemnent to display the date currently being displayed -->
		<div class="gridItem dateSelect">
			<h1>Monday Feb 23, 2023</h1>
		</div>

		<!-- The div elemnent to display the schedule -->
		<div class="gridItem schedule">

			<div class="scheduleItems openHours"></div>
			<div class="scheduleItems openHours">
				<p>8:00 AM</p>
			</div>
			<div class="scheduleItems openHours">
				<p>9:00 AM</p>
			</div>
			<div class="scheduleItems openHours">
				<p>10:00 AM</p>
			</div>
			<div class="scheduleItems openHours">
				<p>11:00 AM</p>
			</div>
			<div class="scheduleItems openHours">
				<p>12:00 PM</p>
			</div>
			<div class="scheduleItems openHours">
				<p>1:00 PM</p>
			</div>
			<div class="scheduleItems openHours">
				<p>2:00 PM</p>
			</div>
			<div class="scheduleItems openHours">
				<p>3:00 PM</p>
			</div>
			<div class="scheduleItems openHours">
				<p>4:00 PM</p>
			</div>
			<div class="scheduleItems openHours">
				<p>5:00 PM</p>
			</div>
			<div class="scheduleItems openHours">
				<p>6:00 PM</p>
			</div>
			<div class="scheduleItems openHours">
				<p>7:00 PM</p>
			</div>
			<div class="scheduleItems openHours">
				<p>8:00 PM</p>
			</div>

			<div class="scheduleItems users">User 1</div>
			<div class="scheduleItems"></div>
			<div class="scheduleItems"></div>
			<div class="scheduleItems"></div>
			<div class="scheduleItems"></div>
			<div class="scheduleItems"></div>
			<div class="scheduleItems"></div>
			<div class="scheduleItems"></div>
			<div class="scheduleItems"></div>
			<div class="scheduleItems"></div>
			<div class="scheduleItems"></div>
			<div class="scheduleItems"></div>
			<div class="scheduleItems"></div>
			<div class="scheduleItems"></div>

		</div>

		<!-- <div class="gridItem userButtons">
			<button class="button" onclick="addUser()">Add User</button>
			<button class="button" onclick="deleteUser()">Delete User</button>
		</div> -->

		<!-- The footer elemnent to display basic team information -->
		<footer>
			<p>
				Author: FHSU CSCI 441 Spring 2023 Team 3 Project<br>
				Team3@fhsu<br><br>
			</p>

		</footer>

		<!-- End of the grid container -->
	</div>

	<!-- <div class="clickMenu">
		<div class="content">
			<ul class="menu">
				<li class="item">
					<button class="itemChange1" onclick="changeItem(1)">Add Desk1</button>
				</li>
				<li class="item">
					<button class="itemChange2" onclick="changeItem(2)">Add Desk2</button>
				</li>
				<li class="item">
					<button class="itemChange3" onclick="changeItem(3)">Add Desk3</button>
				</li>
				<li class="item">
					<button class="itemChange4" onclick="changeItem(4)">Add Off desk</button>
				</li>
				<li class="item">
					<button class="itemChange5" onclick="changeItem(5)">Add Meeting</button>
				</li>
				<li class="item">
					<button class="itemChange6" onclick="changeItem(6)">Add Lunch</button>
				</li>
				<li class="item">
					<button class="itemDelete" onclick="changeItem(7)">Delete Item</button>
				</li>
				<li class="item">
					<button class="nevermind" onclick="changeItem(0)">Nothing</button>
				</li>
			</ul>
		</div>
	</div> -->

	<script src="scripts/main.js"></script>

</body>

</html>

<!--

Login Image: <a href="https://www.freepik.com/free-vector/gradient-dynamic-lines-background_15534129.htm#page=8&query=background&position=39&from_view=keyword&track=sph">
				Image by pikisuperstar</a> on Freepik 

click menu vid: https://www.youtube.com/watch?v=w8xdqfez3qU

-->