https://www.phpmyadmin.net/

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP DATABASE IF EXISTS HireMe;
CREATE DATABASE HireMe;
USE HireMe;


-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(10) UNSIGNED NOT NULL PRIMARY KEY,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `Password_digest` varchar(64) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_joined` timestamp NOT NULL
);


-- Table structure for table `Jobs`
--

CREATE TABLE `Jobs` (
  `id` int(10) UNSIGNED NOT NULL PRIMARY KEY,
  `Job_title` int(10) UNSIGNED NOT NULL,
  `Job_description` int(10) UNSIGNED NOT NULL,
  `category` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `company_location` varchar(200) NOT NULL,
  `date_posted` varchar(60) NOT NULL,
  `date` timestamp NOT NULL
); 



-- Table structure for table `Job Applied for`
--

CREATE TABLE `Jobs Applied for` (
  `id` int(10) UNSIGNED NOT NULL PRIMARY KEY,
  `job_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `date_applied` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);




INSERT INTO `users` (`ID`, `firstname`, `lastname`,`username`,`Password_digest`,`telephone`,`email`) VALUES
(1, "Derrick", "Walcott", "admin", "$2y$10$Pi4ieiYfJotYJPODfgAZn.0gXrIe4tH8IikyQ3qzTkurYjqooV7tO","876-555-5662","admin@hireme.com"),
(2, "Moesha", "Amos","Moesha","123A456b","876-567-8946", "amos_vm2009@yahoo.com" ),
(3, "Glenroy", "Logan", "Glenroy","246cD810", "876-789-0153","glen_loganx@hotmail.com"),
(4, "Sashae", "Laird", "Sashae","369Ef12", "876-583-7831","Sashaelaird@gamil"),
(5, "Kimanie", "Prendegast", "Kimanie", "789Th09","876-908-7861","kimanieprendergast@yahoo.com");

