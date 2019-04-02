-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 10:08 AM
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
  `academic_code` int(11) NOT NULL,
  `acad_year` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_year`
--

INSERT INTO `academic_year` (`academic_code`, `acad_year`, `semester`) VALUES
(1, '2018-2019', '1st semester'),
(2, '2018-2019', '2nd semester'),
(3, '2016-2017', '1st semester'),
(4, '2016-2017', '2nd semester'),
(5, '2015-2016', 'Summer');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_code` char(10) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_code`, `department_name`) VALUES
('BSBA', 'BUSINESS ADMINISTRATION DEPARTMENT'),
('ComSci', 'Computer SCIENCE Department'),
('EDUC', 'EDUCATION department'),
('IA', 'Industrial Art department'),
('IT', 'IT DEPARTMENT');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_code` varchar(20) NOT NULL,
  `event_name` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_code`, `event_name`, `date`) VALUES
('CF', 'Cultural Fest', '2019-03-20'),
('gen ass', 'GENERAL assembly', '2019-02-15'),
('ITday', 'Information Technology Day', '2019-03-14'),
('workshop', 'resume WRITING', '2019-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `fines`
--

CREATE TABLE `fines` (
  `id_number` varchar(15) NOT NULL,
  `event_code` varchar(20) NOT NULL,
  `penalty` decimal(10,2) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Unpaid',
  `date_paid` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fines`
--

INSERT INTO `fines` (`id_number`, `event_code`, `penalty`, `status`, `date_paid`) VALUES
('000000', 'gen ass', '500.00', 'Unpaid', NULL),
('111111', 'ITday', '200.00', 'Paid', '2019-04-12'),
('22222', 'ITday', '265.00', 'Unpaid', NULL),
('33333', 'gen ass', '450.00', 'Paid', '2019-04-12'),
('111111', 'workshop', '100.00', 'Paid', '2019-04-11'),
('111111', 'ITday', '500.00', 'Paid', '2019-04-12'),
('111111', 'ITday', '600.00', 'Paid', '2019-04-12'),
('111111', 'ITday', '600.00', 'Paid', '2019-04-12'),
('111111', 'CF', '400.00', 'Paid', '2019-04-11'),
('000000', 'gen ass', '500.00', 'Unpaid', NULL),
('000000', 'workshop', '450.00', 'Unpaid', NULL),
('000000', 'ITday', '200.00', 'Unpaid', NULL),
('22222', 'CF', '230.00', 'Unpaid', NULL),
('22222', 'gen ass', '0.00', 'Paid', '2019-04-04'),
('22222', 'gen ass', '20.00', 'Paid', '2019-04-04'),
('44444', 'CF', '50.00', 'Unpaid', NULL),
('44444', 'gen ass', '50.00', 'Unpaid', NULL),
('44444', 'ITday', '50.00', 'Unpaid', NULL),
('44444', 'workshop', '50.00', 'Paid', '2019-04-01'),
('55555', 'CF', '200.00', 'Unpaid', NULL),
('55555', 'gen ass', '60.00', 'Unpaid', NULL),
('55555', 'ITday', '55.00', 'Unpaid', NULL),
('55555', 'workshop', '90.00', 'Unpaid', NULL),
('88888', 'CF', '100.00', 'Unpaid', NULL),
('88888', 'workshop', '480.00', 'Unpaid', NULL),
('99999', 'CF', '120.00', 'Unpaid', NULL),
('99999', 'gen ass', '90.00', 'Paid', '2019-04-15'),
('99999', 'ITday', '125.00', 'Unpaid', NULL),
('99999', 'workshop', '250.00', 'Unpaid', NULL),
('77777', 'ITday', '400.00', 'Unpaid', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `organization_code` varchar(20) NOT NULL,
  `organization_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`organization_code`, `organization_name`) VALUES
('CodEn', 'CODING ENTHUSIAST'),
('COJ', 'Char char'),
('LGDC', 'LIKHANG Galaw Dance Company'),
('RCY', 'RED Cross YOUTH');

-- --------------------------------------------------------

--
-- Table structure for table `org_member`
--

CREATE TABLE `org_member` (
  `organization_code` varchar(20) NOT NULL,
  `id_number` varchar(15) NOT NULL,
  `academic_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `org_member`
--

INSERT INTO `org_member` (`organization_code`, `id_number`, `academic_code`) VALUES
('CodEn', '000000', 4),
('LGDC', '55555', 2),
('RCY', '33333', 2),
('RCY', '88888', 1),
('CodEn', '88888', 3),
('CodEn', '99999', 2);

-- --------------------------------------------------------

--
-- Table structure for table `org_moderator`
--

CREATE TABLE `org_moderator` (
  `instructor_id` varchar(15) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `organization_code` varchar(20) NOT NULL,
  `academic_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `org_moderator`
--

INSERT INTO `org_moderator` (`instructor_id`, `last_name`, `first_name`, `middle_name`, `organization_code`, `academic_code`) VALUES
('101010', 'Gosling', 'James', 'dsfdsdsfds', 'CodEn', 1),
('11111', 'TAMAD', 'juan', 'tapulan', 'CodEn', 4),
('22222', 'pendoko', 'pedro', 'P.', 'LGDC', 2),
('33333', 'Jooneeeellll', 'Jonel', 'de lima', 'LGDC', 4);

-- --------------------------------------------------------

--
-- Table structure for table `org_officer`
--

CREATE TABLE `org_officer` (
  `id_number` varchar(15) NOT NULL,
  `position` varchar(20) NOT NULL,
  `organization_code` varchar(20) NOT NULL,
  `academic_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `org_officer`
--

INSERT INTO `org_officer` (`id_number`, `position`, `organization_code`, `academic_code`) VALUES
('33333', 'President', 'LGDC', 3),
('44444', 'Treasurer', 'RCY', 1),
('77777', 'Vice_president', 'LGDC', 2),
('88888', 'Vice_president', 'CodEn', 4),
('55555', 'P.I.O', 'LGDC', 2),
('99999', 'Secretary', 'CodEn', 2);

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
('BSBA', 'Bachelor of Science in Business Administration', 'BSBA'),
('BSIT', 'Bachelor of Science in Information Technology', 'BSBA'),
('EDUC', 'Bachelor of Science in SECONDARY EDUCATION ', 'EDUC'),
('IA', 'Industrial Arts', 'IA');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `year`) VALUES
('1a', '1st YEAR'),
('1b', '1st YEAR'),
('1c', '1st YEAR'),
('2a', '2nd year'),
('2b', '2nd year'),
('2c', '2nd year'),
('3a', '3rd year'),
('3b', '3rd year'),
('3c', '3rd year'),
('4a', '4th YEAR'),
('4b', '4th YEAR'),
('4c', '4th YEAR'),
('5a', '5th Year');

-- --------------------------------------------------------

--
-- Table structure for table `section_officer`
--

CREATE TABLE `section_officer` (
  `id_number` varchar(15) NOT NULL,
  `position` varchar(20) NOT NULL,
  `academic_code` int(11) NOT NULL,
  `section_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_officer`
--

INSERT INTO `section_officer` (`id_number`, `position`, `academic_code`, `section_id`) VALUES
('111111', 'P.I.O', 4, '3b'),
('22222', 'Auditor', 3, '4b'),
('66666', 'Treasurer', 3, '1a'),
('99999', 'Treasurer', 4, '2c'),
('55555', 'Auditor', 4, '5a'),
('66666', 'P.I.O', 2, '3b'),
('000000', 'President', 2, '2a'),
('77777', 'President', 1, '5a'),
('44444', 'President', 4, '4a');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_number` varchar(15) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `section_id` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_number`, `last_name`, `first_name`, `middle_name`, `course_code`, `section_id`, `status`) VALUES
('000000', 'Baluyos', 'john michael', '', 'BSIT', '3a', 'Currently Enrolled'),
('111111', 'diola', 'rovel', 'ajias', 'BSBA', '2b', 'Currently Enrolled'),
('22222', 'Aya-ay', 'Rupert ', 'M.', 'EDUC', '1c', 'Currently Enrolled'),
('33333', 'bolodo', 'steve', 'p.', 'BSBA', '3a', 'Currently Enrolled'),
('44444', 'Cabantac', 'Brian James', 'gwapo', 'EDUC', '4a', 'Currently Enrolled'),
('55555', 'egonia', 'fred mark', 'budo', 'BSIT', '1b', 'Currently Enrolled'),
('66666', 'manlawe', 'catlyn ', 'gwapa', 'BSBA', '4b', 'Currently Enrolled'),
('77777', 'banaglorioso', 'ian', 'pader', 'BSBA', '4b', 'Currently Enrolled'),
('88888', 'mocay', 'mae joy', 'MJ', 'BSIT', '3a', 'Currently Enrolled'),
('99999', 'AMOMONPON', 'JOAN', 'brad', 'EDUC', '3b', 'Currently Enrolled');

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
  ADD KEY `event_code` (`event_code`),
  ADD KEY `id_number` (`id_number`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`organization_code`);

--
-- Indexes for table `org_member`
--
ALTER TABLE `org_member`
  ADD KEY `academic_code` (`academic_code`),
  ADD KEY `id_number` (`id_number`),
  ADD KEY `organization_code` (`organization_code`);

--
-- Indexes for table `org_moderator`
--
ALTER TABLE `org_moderator`
  ADD PRIMARY KEY (`instructor_id`),
  ADD KEY `organization_code` (`organization_code`),
  ADD KEY `org_moderator_ibfk_2` (`academic_code`);

--
-- Indexes for table `org_officer`
--
ALTER TABLE `org_officer`
  ADD KEY `id_number` (`id_number`),
  ADD KEY `organization_code` (`organization_code`),
  ADD KEY `academic_code` (`academic_code`);

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
  ADD KEY `id_number` (`id_number`),
  ADD KEY `section_id` (`section_id`),
  ADD KEY `section_officer_ibfk_4` (`academic_code`);

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
-- AUTO_INCREMENT for table `academic_year`
--
ALTER TABLE `academic_year`
  MODIFY `academic_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  ADD CONSTRAINT `fines_ibfk_1` FOREIGN KEY (`event_code`) REFERENCES `event` (`event_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fines_ibfk_2` FOREIGN KEY (`id_number`) REFERENCES `student` (`id_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `org_member`
--
ALTER TABLE `org_member`
  ADD CONSTRAINT `org_member_ibfk_1` FOREIGN KEY (`academic_code`) REFERENCES `academic_year` (`academic_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `org_member_ibfk_2` FOREIGN KEY (`id_number`) REFERENCES `student` (`id_number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `org_member_ibfk_3` FOREIGN KEY (`organization_code`) REFERENCES `organization` (`organization_code`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `program_ibfk_1` FOREIGN KEY (`department_code`) REFERENCES `department` (`department_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `section_officer`
--
ALTER TABLE `section_officer`
  ADD CONSTRAINT `section_officer_ibfk_2` FOREIGN KEY (`id_number`) REFERENCES `student` (`id_number`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `section_officer_ibfk_3` FOREIGN KEY (`section_id`) REFERENCES `section` (`section_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `section_officer_ibfk_4` FOREIGN KEY (`academic_code`) REFERENCES `academic_year` (`academic_code`) ON DELETE CASCADE ON UPDATE CASCADE;

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
