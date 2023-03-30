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
				</ul>
			</nav>
            <!------------clock in and out buttons-------->
        <section>
            <div class="container">
                
                    <!--?php if(isset($check) && is_array($check) && $check['atWork'] == 1) { ? -->
                        <form action="." method="POST">   
                            <input type="text" name="userIDClockIn" placeholder="Enter User ID" maxlength="11">
                            <button type="submit">Clock In</button>&emsp;
                        <!--/form-->
                  <!---php } else { ?>---->
                        <!--form action="." method="POST"--> 
                            <input type="text" name="userIDClockOut" placeholder="Enter User ID" maxlength="11">
                            <button type="submit">Clock Out</button>  
                        </form>
                    <!--?php } ?-->
                
            
                <div class="row">
                    <div class="col">
                        <p class="bold">User ID</p>
                    </div>
                    <div class="col">
                        <p class="bold">Date</p>
                    </div>
                    <div class="col">
                        <p class="bold">Time</p>
                    </div>
                    <div class="col">
                        <p class="bold">In/Out</p>
                    </div>
                </div>

                <?php foreach($clocks as $clock) : ?>
                <div class="row">
                    <div class="col">
                        <p class="bold"><?php echo $clock['userID'] ?></p>
                    </div>
                    <div class="col">
                        <p class="bold"><?php echo $clock['date'] ?></p>
                    </div>
                    <div class="col">
                        <p class="bold"><?php echo $clock['time'] ?></p>
                    </div>
                    <div class="col">
                        <?php if($clock['atWork'] == 1){ ?>
                            <p class="bold">Clocked In</p>
                        <?php } else {?>
                            <p class="bold">Clocked Out</p>
                        <?php } ?>
                    </div>
                </div>
                <?php endforeach ?>
            
            </section>

            
