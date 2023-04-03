-- /*
-- With this schema, you can store information about users, their roles, and their contact information in the users table. The time_slots table contains 
-- start and end times for each available time slot, and the user_time_slots table assigns users to specific time slots on specific dates. 
-- */

CREATE TABLE `clock` (
  `userID` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `atWork` tinyint(1) NOT NULL
);

CREATE TABLE `company` (
  `companyId` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `departments` int(11) NOT NULL,
  `openHours` int(11) NOT NULL
);

CREATE TABLE `users` (
  `userId` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `userName` varchar(25) NOT NULL,
  `password` varchar(12) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `address` varchar(80) NOT NULL,
  `phoneNumber` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `empType` varchar(20) NOT NULL,
  `authLevel` int(4) NOT NULL,
  role ENUM('admin', 'supervisor', 'manager', 'employee') NOT NULL
);

CREATE TABLE `time_slots` (
  `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `start_time` DATETIME NOT NULL,
  `end_time` DATETIME NOT NULL
);

CREATE TABLE `user_time_slots` (
  `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `user_id` INT(11) UNSIGNED NOT NULL,
  `time_slot_id` INT(11) UNSIGNED NOT NULL,
  `date` DATE NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(userId),
  FOREIGN KEY (time_slot_id) REFERENCES time_slots(id)
);

CREATE TABLE `locations` (
  `id` INT(50) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `locationName` varchar(50) NOT NULL,
  `active` BIT NOT NULL
);

-- /* Populating database */
INSERT INTO users (userName, password, firstName, lastName, address, phoneNumber, email, empType, authLevel, role) 
VALUES ('bLoblaw',  'bLob123', 'Bob', 'Loblaw', '123 Wallaby Way', 1234567890, 'bLoblaw@bobLoblaw@Loblaw.com', 'admin', '1', 'admin');

INSERT INTO users (userName, password, firstName, lastName, address, phoneNumber, email, empType, authLevel, role) 
VALUES ('tParker',  'tParker123', 'Trey', 'Parker', '1020 South Park Road', 1234567891, 'tparker@southparkstudios.cc', 'manager', '2', 'manager');

INSERT INTO users (userName, password, firstName, lastName, address, phoneNumber, email, empType, authLevel, role) 
VALUES ('dVu',  'dVuCSCI', 'Dr.', 'Vu', '1 FHSU Place', 1234567892, 'drvu@fhsu.edu', 'supervisor', '3', 'supervisor');

INSERT INTO locations(locationName, active)
VALUES ('Desk1', 1);

INSERT INTO locations(locationName, active)
VALUES ('Desk2', 1);

INSERT INTO locations(locationName, active)
VALUES ('Desk3', 1);

INSERT INTO locations(locationName, active)
VALUES ('Off Desk', 1);

INSERT INTO locations(locationName, active)
VALUES ('Meeting', 1);

INSERT INTO locations(locationName, active)
VALUES ('Lunch', 1);

INSERT INTO locations(locationName, active)
VALUES ('Nothing', 1);