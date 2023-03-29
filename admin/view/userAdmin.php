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
					<li><a href=".?action=availAdmin">Availability</a></li>
					<li><a href=".?action=timeOffAdmin">Time Off</a></li>
					<li><a href=".?action=userProfileAdmin">Profile</a></li>
					<li><a href="http://localhost/TeamTracker/admin/">Users</a></li>
				</ul>
			</nav>

            <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="bold">User ID</p>
                    </div>
                    <div class="col">
                        <p class="bold">Username</p>
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
                </div>

                <?php foreach($users as $user) : ?>
                <div class="row">
                    <div class="col">
                        <p class="bold"><?php echo $user['userId'] ?></p>
                    </div>
                    <div class="col">
                        <p class="bold"><?php echo $user['userName'] ?></p>
                    </div>
                    <div class="col">
                        <p class="bold"><?php echo $user['firstName'] ?></p>
                    </div>
                    <div class="col">
                        <p class="bold"><?php echo $user['lastName'] ?></p>
                    </div>
                    <div class="col">
                        <p class="bold"><?php echo $user['phoneNumber'] ?></p>
                    </div>
                    <div class="col">
                        <p class="bold"><?php echo $user['address'] ?></p>
                    </div>
                    <div class="col">
                        <p class="bold"><?php echo $user['email'] ?></p>
                    </div>
                </div>
                <?php endforeach ?>
            
            </section>
            <form action="." method="POST">
                    <label>UserID:</label>
                    <input type="text" name="deleteUserID" placeholder="Enter User ID" maxlength="11">
                    <button>Delete User</button>
                </form>

            <section>
                <a href=".?action=addUserAdmin">Add Employee</a>
                <br>
                <form action="." method="POST">
                    <label for="userIDUpdate">User ID:</label>
                    <input type="text" name="userIDUpdate" id="userIDUpdate" placeholder="Enter User ID" maxlength="11">
                    <button type="submit">Update User</button>
                    <input type="hidden" name="action" value="updateUserAdmin">
                </form>

            </section>
        </div>