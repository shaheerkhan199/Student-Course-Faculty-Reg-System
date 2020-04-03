-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2019 at 06:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coursemanagsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(10) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_credit_hour` varchar(1) NOT NULL,
  `course_faculty_name` varchar(100) NOT NULL,
  `course_day_time` varchar(100) NOT NULL,
  `course_location` varchar(8) NOT NULL,
  `course_strength` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_credit_hour`, `course_faculty_name`, `course_day_time`, `course_location`, `course_strength`) VALUES
('1002', 'Compiler Construction', '3', 'Dr hassan Aadil', 'Mon-Tue 8:30-10:00', 'E-201', '50'),
('1003', 'Principles of Accounting', '3', 'Salman Qureshi', 'Wed-Thu  3:00-4:30', 'E-805', '65'),
('1004', 'Artificial Intelligence', '3', 'Dr Aarij Mehmood', 'Sat 6:00-9:00', 'E-205', '110');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(8) NOT NULL,
  `faculty_full_name` varchar(100) NOT NULL,
  `faculty_password` varchar(100) NOT NULL,
  `faculty_cellno` varchar(100) NOT NULL,
  `faculty_des` varchar(100) NOT NULL,
  `faculty_salary` int(8) NOT NULL,
  `faculty_dob` date NOT NULL,
  `faculty_mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_full_name`, `faculty_password`, `faculty_cellno`, `faculty_des`, `faculty_salary`, `faculty_dob`, `faculty_mail`) VALUES
(5, 'Dr hassan Aadil', 'hassan123', '0346-5414586', 'Associate Dean', 150000, '2018-12-19', 'hassan123@gmail.com'),
(6, 'Dr.M.Raza', 'raza123', '0315-8442574', 'Assistant Professor', 45000, '2019-03-05', 'raza.125@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registeredcourses`
--

CREATE TABLE `registeredcourses` (
  `stud_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeredcourses`
--

INSERT INTO `registeredcourses` (`stud_id`, `course_id`) VALUES
(3, 1002),
(1, 1002),
(1, 1003),
(1, 1004);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_id` int(11) NOT NULL,
  `stud_full_name` varchar(100) DEFAULT NULL,
  `stud_email` varchar(100) NOT NULL,
  `stud_password` varchar(10) DEFAULT NULL,
  `stud_dob` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `stud_full_name`, `stud_email`, `stud_password`, `stud_dob`, `status`) VALUES
(1, 'Muhammad Shaheer khan', 'm.shaheerkhan199@gmail.com', 'Ma9fyd3P', '1998-02-04', 'Approved'),
(3, 'Muhammad Areeb khan', 'm.areeb125@gmail.com', 'areeb54321', '2007-06-12', 'Unapproved'),
(4, 'Hashir Majeed', 'hashir@gmail.com', '12345hashi', '2007-06-12', 'Approved'),
(5, 'Fahad javeed', 'fahad1506@gmail.com', 'grass2lear', '1997-02-05', 'Unapproved'),
(6, 'Ravi Shankar', 'ravishankar.malhi1@gmail.com', 'dadamalhi', '1996-05-21', 'Approved'),
(8, 'Abdullah Yasin', 'abdullah786@outlook.com', 'banti54321', '2001-06-13', 'Approved'),
(9, 'Afzal Pasha', 'afzalpasha@outloook.com', 'iqra12345', '2019-01-10', 'Unapproved'),
(22, 'Nasir khan', 'nasirkhan@gmail.com', 'nadi123', '2019-06-13', 'Approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `registeredcourses`
--
ALTER TABLE `registeredcourses`
  ADD KEY `stud_id` (`stud_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_id`),
  ADD UNIQUE KEY `uniqueId` (`stud_id`),
  ADD UNIQUE KEY `stud_email` (`stud_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `registeredcourses`
--
ALTER TABLE `registeredcourses`
  ADD CONSTRAINT `registeredcourses_ibfk_1` FOREIGN KEY (`stud_id`) REFERENCES `student` (`stud_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
