/*
With this schema, you can store information about users, their roles, and their contact information in the users table. The time_slots table contains 
start and end times for each available time slot, and the user_time_slots table assigns users to specific time slots on specific dates. 
*/


-- --------------------------------------------------------

--
-- Table structure for table clock
--

CREATE TABLE clock (
  user_id int(11) NOT NULL,
  cur_date date NOT NULL,
  cur_time timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  atWork tinyint(1) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table company
--

CREATE TABLE company (
  company_id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  departments int(11) NOT NULL,
  openHours int(11) NOT NULL
);

-- --------------------------------------------------------

--
-- Table structure for table users
--

CREATE TABLE users (
  id int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
  userName varchar(25) NOT NULL,
  password varchar(12) NOT NULL,
  firstName varchar(25) NOT NULL,
  lastName varchar(25) NOT NULL,
  address varchar(80) NOT NULL,
  phoneNumber int(10) NOT NULL,
  email varchar(50) NOT NULL,
  empType varchar(20) NOT NULL,
  authLevel int(11) NOT NULL,
  role ENUM('admin', 'manager', 'employee') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
