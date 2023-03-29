/*
With this schema, you can store information about users, their roles, and their contact information in the users table. The time_slots table contains 
start and end times for each available time slot, and the user_time_slots table assigns users to specific time slots on specific dates. 
*/
CREATE TABLE users (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  role ENUM('admin', 'manager', 'employee') NOT NULL
);

CREATE TABLE time_slots (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  start_time DATETIME NOT NULL,
  end_time DATETIME NOT NULL
);

CREATE TABLE user_time_slots (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  user_id INT(11) UNSIGNED NOT NULL,
  time_slot_id INT(11) UNSIGNED NOT NULL,
  date DATE NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (time_slot_id) REFERENCES time_slots(id)
);
/*
For updating data, you can use INSERT, UPDATE, and DELETE queries. Here's an example of how you could assign a user to a time slot:
*/
UPDATE schedule SET user_id = 123 WHERE date = '2023-04-01' AND time_slot = '09:00:00';
UPDATE schedule SET user_id = 123 WHERE date = '2023-04-01' AND time_slot = '09:00:00';
DELETE FROM schedule WHERE user_id = 123 AND date = '2023-04-01' AND time_slot = '09:00:00';
