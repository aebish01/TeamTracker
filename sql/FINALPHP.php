<?php
// connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// retrieve all time slots for a particular date
$date = "2023-04-01";
$next_date = date('Y-m-d', strtotime($date . ' +1 day')); // Add this line to calculate the next day's date

// Copy the previous day's schedule to the next day if it doesn't exist - Add this block of code
$sql_copy = "INSERT INTO user_time_slots (time_slot_id, user_id, date)
             SELECT time_slot_id, user_id, '$next_date' 
             FROM user_time_slots
             WHERE date = '$date'
             ON DUPLICATE KEY UPDATE time_slot_id = user_time_slots.time_slot_id";

if (mysqli_query($conn, $sql_copy)) {
    echo "Next day's schedule created successfully <br>";
} else {
    echo "Error creating next day's schedule: " . mysqli_error($conn) . "<br>";
}

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
