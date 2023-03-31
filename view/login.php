<?php
if (isset($_SESSION["error"])) {
	echo '<script type="text/javascript">
			window.onload = function () { alert("Invalid Login Information"); }
		  </script>';
}

// remove all session variables
session_unset();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Team Tracker App Schedule</title>
	<link rel="stylesheet" href="../css/login.css">
</head>

<body>
	<main>
		<div class="logBox">
			<div class="logContent">
				<form action="../model/loginControl.php" method="post">
					<h1>Login</h1>
					<div class="logInput">
						<input type="username" name="userName" required>
						<label for="">Username</label>
					</div>
					<div class="logInput">
						<input type="password" name="password" required>
						<label for="">Password</label>
					</div>
					<button type="submit" name="submit">Sign In</button>
				</form>
			</div>
		</div>
	</main>
</body>

</html>