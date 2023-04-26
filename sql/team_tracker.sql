-- /*
-- With this schema, you can store information about users, their roles, and their contact information in the users table. The time_slots table contains 
-- start and end times for each available time slot, and the user_time_slots table assigns users to specific time slots on specific dates. 
-- */

CREATE TABLE `clock` (
  `ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `atWork` tinyint(1) NOT NULL,
  `editorID` int(11) DEFAULT NULL
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
  `timeSlot` varchar(50) NOT NULL PRIMARY KEY,
  `active` INT(11) NOT NULL
);

CREATE TABLE `activities` (
  `activityName` varchar(50) NOT NULL PRIMARY KEY,
  `active` INT(11) NOT NULL
);

CREATE TABLE `assignments` (
  `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `timeSlot` varchar(50) NOT NULL,
  `activityName` varchar(50) NOT NULL,
  `user_id` INT(11) UNSIGNED NOT NULL,
  FOREIGN KEY (`timeSlot`) REFERENCES `time_slots`(timeSlot),
  FOREIGN KEY (`user_id`) REFERENCES `users`(userId),
  FOREIGN KEY (`activityName`) REFERENCES `activities`(activityName)
);

CREATE TABLE `user_time_slots` (
  `id` INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `timeSlot` varchar(50) NOT NULL,
  `user_id` INT(11) UNSIGNED NOT NULL,
  `date` DATE NOT NULL,
  UNIQUE KEY `unique_timeslot_user_date` (`timeSlot`, `user_id`, `date`),
  FOREIGN KEY (`timeSlot`) REFERENCES `time_slots`(timeSlot),
  FOREIGN KEY (`user_id`) REFERENCES `users`(userId)
);

-- /* Populating database */
-- /* INSERT INTO users (userName, password, firstName, lastName, address, phoneNumber, email, empType, authLevel, role) 
-- VALUES ('dVu',  'dVuCSCI', 'Dr.', 'Vu', '1 FHSU Place', 1234567892, 'drvu@fhsu.edu', 'supervisor', '3', 'supervisor'), 
-- ('tParker',  'tParker123', 'Trey', 'Parker', '1020 South Park Road', 1234567891, 'tparker@southparkstudios.cc', 'manager', '2', 'manager'),
-- ('bLoblaw',  'bLob123', 'Bob', 'Loblaw', '123 Wallaby Way', 1234567890, 'bLoblaw@bobLoblaw@Loblaw.com', 'admin', '1', 'admin'); */

INSERT INTO users (userName, password, firstName, lastName, address, phoneNumber, email, empType, authLevel, role) 
VALUES ('admin',  'password', 'Admin', 'None', 'local admin', 0, 'admin', 'admin', '1', 'admin'), 
('manager1',  'password', 'Manny', 'Smith', 'Somewhere', 0, 'Manny', 'manager', '2', 'manager'),
('emp1',  'Emmy', 'password', 'Smith', 'Somewhere', 0, 'something@something.com', 'employee', '3', 'employee'),
('alund',  'Alex', 'password', 'Lund', 'somewhere', 1234567899, 'placeholder@gmail.com', 'employee', '3', 'employee');

INSERT INTO activities(activityName, active)
VALUES ('Desk1', 1), ('Desk2', 1), ('Desk3', 1), ('Off Desk', 1), ('Meeting', 1), ('Lunch', 1), ('Nothing', 1);

INSERT INTO time_slots(timeSlot, active)
VALUES ('8a', 1), ('9a', 1), ('10a', 1), ('11a', 1), ('12a', 1), ('1p', 1), ('2p', 1), ('3p', 1), ('4p', 1), ('5p', 1), ('6p', 1), ('7p', 1), ('8p', 1);

INSERT INTO assignments_April_4(timeSlot, user_id, activityName)
VALUES ('8a', 1, 'Desk1');
