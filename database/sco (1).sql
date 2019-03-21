-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2019 at 02:14 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sco`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE `academic_year` (
  `academic_code` varchar(50) NOT NULL,
  `acad_year` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_year`
--

INSERT INTO `academic_year` (`academic_code`, `acad_year`, `semester`) VALUES
('bvcbvc', '2018-2019', '2nd semester'),
('werwr', '2018-2019', '1st semester');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_code` char(10) NOT NULL,
  `department_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_code`, `department_name`) VALUES
('BSBA', 'BUSINESS Administration Department'),
('EDUC', 'EDUCATION DEPARTMENT'),
('ENG', 'ENGINEERING department'),
('IT', 'INFORMATION TECHNOLOGY department');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_code` varchar(100) NOT NULL,
  `event_name` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_code`, `event_name`, `date`) VALUES
('CF', 'Cultural Fiest', '2019-02-14'),
('gen ass', 'general assembly', '2019-02-28'),
('ITday', 'Information Technology Day', '2019-03-20'),
('symposium', 'ANTI-DRUGS', '2019-02-14'),
('workshop', 'resume WRITING', '2019-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `fines`
--

CREATE TABLE `fines` (
  `id_number` varchar(50) NOT NULL,
  `event_code` varchar(100) NOT NULL,
  `penalty` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fines`
--

INSERT INTO `fines` (`id_number`, `event_code`, `penalty`) VALUES
('111111', 'symposium', '45.50'),
('99999', 'gen ass', '100.50'),
('111111', 'workshop', '45.50'),
('77777', 'ITday', '100.00'),
('66666', 'CF', '5000.00'),
('77777', 'ITday', '500.00');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `organization_code` varchar(50) NOT NULL,
  `organization_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`organization_code`, `organization_name`) VALUES
('CodEn', 'CODING enthusiast'),
('GCY', 'GREEN Cross Youth'),
('LGDC', 'LIKHANG Galaw Dance Company'),
('RCY', 'Green Cross Youth');

-- --------------------------------------------------------

--
-- Table structure for table `org_member`
--

CREATE TABLE `org_member` (
  `organization_code` varchar(50) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `academic_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `org_member`
--

INSERT INTO `org_member` (`organization_code`, `id_number`, `academic_code`) VALUES
('CodEn', '111111', 'bvcbvc'),
('LGDC', '88888', 'bvcbvc'),
('CodEn', '77777', 'werwr');

-- --------------------------------------------------------

--
-- Table structure for table `org_moderator`
--

CREATE TABLE `org_moderator` (
  `instructor_id` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `organization_code` varchar(50) NOT NULL,
  `academic_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `org_moderator`
--

INSERT INTO `org_moderator` (`instructor_id`, `last_name`, `first_name`, `middle_name`, `organization_code`, `academic_code`) VALUES
('11111', 'Baluyos', 'john michael', 'BALUYOS', 'CodEn', 'bvcbvc'),
('22222', 'TAMAD', 'Juan', 'Tapulan', 'LGDC', 'werwr');

-- --------------------------------------------------------

--
-- Table structure for table `org_officer`
--

CREATE TABLE `org_officer` (
  `id_number` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `organization_code` varchar(50) NOT NULL,
  `academic_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `org_officer`
--

INSERT INTO `org_officer` (`id_number`, `position`, `organization_code`, `academic_code`) VALUES
('111111', 'P.I.O', 'GCY', 'werwr'),
('77777', 'Treasurer', 'RCY', 'bvcbvc'),
('66666', 'v-president', 'LGDC', 'bvcbvc'),
('88888', 'secretary', 'GCY', 'werwr');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id_number` varchar(50) NOT NULL,
  `event_code` varchar(100) NOT NULL,
  `penalty` decimal(10,2) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `status` varchar(50) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `course_code` varchar(10) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `department_code` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`course_code`, `course_name`, `department_code`) VALUES
('BSBA', 'Bachelor of Science in Business Administration BSBA', 'EDUC'),
('Educ', 'Bachelor of Science in SECONDARY EDUCATION ', 'BSBA'),
('ENGR', 'Bachelor of Science in Engineering', 'ENG'),
('IT', 'Bachelor of Science in Information Technology', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `year`) VALUES
('1a', '1st YEAR'),
('1c', '1st YEAR'),
('1d', '1st YEAR'),
('2a', '2nd YEAR'),
('2c', '2nd year'),
('2d', '2nd YEAR'),
('2f', '2nd YEAR'),
('3a', '3rd YEAR'),
('4b', '4th YEAR');

-- --------------------------------------------------------

--
-- Table structure for table `section_officer`
--

CREATE TABLE `section_officer` (
  `id_number` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `academic_code` varchar(50) NOT NULL,
  `section_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_officer`
--

INSERT INTO `section_officer` (`id_number`, `position`, `academic_code`, `section_id`) VALUES
('111111', 'Treasurer', 'werwr', '4b'),
('77777', 'Auditor', 'werwr', '2a');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_number` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `section_id` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_number`, `last_name`, `first_name`, `middle_name`, `course_code`, `section_id`, `status`) VALUES
('10101010', 'de lima', 'Joneelll', 'de upat', 'ENGR', '2c', 'dropped'),
('111111', 'baluyos', 'john michael', '', 'BSBA', '1d', 'currently Enrolled'),
('22222', 'Badiang', 'kelvin', 'P.', 'BSBA', '3a', 'currently enrolled'),
('33333', 'Badiang', 'JD', 'C.', 'BSBA', '3a', 'currently enrolled'),
('66666', 'bolodo', 'steve', 'Etot', 'Educ', '2c', 'currently Enrolled'),
('77777', 'diola', 'rovel', 'Bunsalo', 'BSBA', '2f', 'currently enrolled'),
('88888', 'Cabantac', 'Brian James', 'AsinBEtsin', 'Educ', '1a', 'currently Enrolled'),
('99999', 'Aya-ay', 'Rupert ', 'wangkig', 'ENGR', '2d', 'currently Enrolled');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'ssc', '93ac215fce8eaa8274d5d377132e1e34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_year`
--
ALTER TABLE `academic_year`
  ADD PRIMARY KEY (`academic_code`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_code`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_code`);

--
-- Indexes for table `fines`
--
ALTER TABLE `fines`
  ADD KEY `fines_ibfk_1` (`id_number`),
  ADD KEY `fines_ibfk_2` (`event_code`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`organization_code`);

--
-- Indexes for table `org_member`
--
ALTER TABLE `org_member`
  ADD KEY `org_member_ibfk_1` (`organization_code`),
  ADD KEY `org_member_ibfk_2` (`id_number`),
  ADD KEY `org_member_ibfk_3` (`academic_code`);

--
-- Indexes for table `org_moderator`
--
ALTER TABLE `org_moderator`
  ADD PRIMARY KEY (`instructor_id`),
  ADD KEY `org_moderator_ibfk_1` (`organization_code`),
  ADD KEY `acadamic_code` (`academic_code`);

--
-- Indexes for table `org_officer`
--
ALTER TABLE `org_officer`
  ADD KEY `org_officer_ibfk_1` (`id_number`),
  ADD KEY `org_officer_ibfk_2` (`organization_code`),
  ADD KEY `org_officer_ibfk_3` (`academic_code`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD KEY `payment_ibfk_1` (`id_number`),
  ADD KEY `payment_ibfk_2` (`event_code`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`course_code`),
  ADD KEY `department_code` (`department_code`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `section_officer`
--
ALTER TABLE `section_officer`
  ADD KEY `section_officer_ibfk_1` (`id_number`),
  ADD KEY `section_officer_ibfk_2` (`academic_code`),
  ADD KEY `section_officer_ibfk_3` (`section_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_number`),
  ADD KEY `course_code` (`course_code`),
  ADD KEY `student_ibfk_1` (`section_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fines`
--
ALTER TABLE `fines`
  ADD CONSTRAINT `fines_ibfk_1` FOREIGN KEY (`id_number`) REFERENCES `student` (`id_number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fines_ibfk_2` FOREIGN KEY (`event_code`) REFERENCES `event` (`event_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `org_member`
--
ALTER TABLE `org_member`
  ADD CONSTRAINT `org_member_ibfk_1` FOREIGN KEY (`organization_code`) REFERENCES `organization` (`organization_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `org_member_ibfk_2` FOREIGN KEY (`id_number`) REFERENCES `student` (`id_number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `org_member_ibfk_3` FOREIGN KEY (`academic_code`) REFERENCES `academic_year` (`academic_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `org_moderator`
--
ALTER TABLE `org_moderator`
  ADD CONSTRAINT `org_moderator_ibfk_1` FOREIGN KEY (`organization_code`) REFERENCES `organization` (`organization_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `org_moderator_ibfk_2` FOREIGN KEY (`academic_code`) REFERENCES `academic_year` (`academic_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `org_officer`
--
ALTER TABLE `org_officer`
  ADD CONSTRAINT `org_officer_ibfk_1` FOREIGN KEY (`id_number`) REFERENCES `student` (`id_number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `org_officer_ibfk_2` FOREIGN KEY (`organization_code`) REFERENCES `organization` (`organization_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `org_officer_ibfk_3` FOREIGN KEY (`academic_code`) REFERENCES `academic_year` (`academic_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`id_number`) REFERENCES `student` (`id_number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`event_code`) REFERENCES `event` (`event_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `program_ibfk_1` FOREIGN KEY (`department_code`) REFERENCES `department` (`department_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `section_officer`
--
ALTER TABLE `section_officer`
  ADD CONSTRAINT `section_officer_ibfk_1` FOREIGN KEY (`id_number`) REFERENCES `student` (`id_number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `section_officer_ibfk_2` FOREIGN KEY (`academic_code`) REFERENCES `academic_year` (`academic_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `section_officer_ibfk_3` FOREIGN KEY (`section_id`) REFERENCES `section` (`section_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`course_code`) REFERENCES `program` (`course_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`section_id`) REFERENCES `section` (`section_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
