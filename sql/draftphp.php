<?php
// connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// retrieve all time slots for a particular date
$date = "2023-04-01";
$sql = "SELECT time_slots.start_time, time_slots.end_time, users.name
        FROM time_slots
        LEFT JOIN user_time_slots ON time_slots.id = user_time_slots.time_slot_id AND user_time_slots.date = '$date'
        LEFT JOIN users ON user_time_slots.user_id = users.id
        ORDER BY time_slots.start_time";

$result = mysqli_query($conn, $sql);

// output results
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo $row['start_time'] . " - " . $row['end_time'] . " - " . $row['name'] . "<br>";
  }
} else {
  echo "No time slots found for $date";
}

// close the database connection
mysqli_close($conn);
?>



