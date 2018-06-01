-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 12:52 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ct_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms_evaluation`
--

CREATE TABLE `forms_evaluation` (
  `eval_form_id` int(6) NOT NULL,
  `person_id` int(24) NOT NULL,
  `date_now` date NOT NULL,
  `date_evaluation` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `satisfaction` tinyint(1) NOT NULL,
  `good` varchar(512) NOT NULL,
  `better` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forms_lessonprep`
--

CREATE TABLE `forms_lessonprep` (
  `lprep_from_id` int(6) NOT NULL,
  `person_id` int(6) NOT NULL,
  `date_now` date NOT NULL,
  `date_evaluation` date NOT NULL,
  `subject` varchar(100) NOT NULL,
  `lesson_subject` varchar(100) NOT NULL,
  `objective_pupil` varchar(100) NOT NULL,
  `start_pupil` varchar(100) NOT NULL,
  `objective_student` varchar(100) NOT NULL,
  `start_student` varchar(100) NOT NULL,
  `startup_didactics` varchar(255) NOT NULL,
  `startup_groups` varchar(255) NOT NULL,
  `startup_activity` varchar(255) NOT NULL,
  `startup_focus` varchar(255) NOT NULL,
  `core_didactics` varchar(255) NOT NULL,
  `core_groups` varchar(255) NOT NULL,
  `core_activity` varchar(255) NOT NULL,
  `core_focus` varchar(255) NOT NULL,
  `finish_didactics` varchar(255) NOT NULL,
  `finish_groups` varchar(255) NOT NULL,
  `finish_activity` varchar(255) NOT NULL,
  `finish_focus` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form_invent`
--

CREATE TABLE `form_invent` (
  `invent_form_id` int(6) NOT NULL,
  `person_id` int(24) NOT NULL,
  `date_now` date NOT NULL,
  `date_evaluation` date NOT NULL,
  `permission_asked` tinyint(1) NOT NULL,
  `permission_person` varchar(100) NOT NULL,
  `notes` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `line_details`
--

CREATE TABLE `line_details` (
  `line_id` int(6) NOT NULL,
  `invent_form_id` int(6) NOT NULL,
  `tool` varchar(45) NOT NULL,
  `number` int(6) NOT NULL,
  `version` varchar(45) NOT NULL,
  `operational` tinyint(1) NOT NULL,
  `already_used` tinyint(1) NOT NULL,
  `reservation` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `person_id` int(24) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `prefix` varchar(10) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `salt` varchar(256) NOT NULL,
  `confirmed` tinyint(1) NOT NULL,
  `confirm_code` int(11) NOT NULL,
  `classname` varchar(20) NOT NULL,
  `school_class` tinyint(1) NOT NULL,
  `bpv_name` varchar(100) NOT NULL,
  `bpv_city` varchar(100) NOT NULL,
  `bpv_teacher` varchar(100) NOT NULL,
  `bpv_coach` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forms_evaluation`
--
ALTER TABLE `forms_evaluation`
  ADD PRIMARY KEY (`eval_form_id`),
  ADD KEY `person_id` (`person_id`);

--
-- Indexes for table `forms_lessonprep`
--
ALTER TABLE `forms_lessonprep`
  ADD PRIMARY KEY (`lprep_from_id`),
  ADD KEY `person_id` (`person_id`),
  ADD KEY `person_id_2` (`person_id`);

--
-- Indexes for table `form_invent`
--
ALTER TABLE `form_invent`
  ADD PRIMARY KEY (`invent_form_id`),
  ADD KEY `person_id` (`person_id`);

--
-- Indexes for table `line_details`
--
ALTER TABLE `line_details`
  ADD PRIMARY KEY (`line_id`),
  ADD KEY `invent_form_id` (`invent_form_id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`person_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forms_evaluation`
--
ALTER TABLE `forms_evaluation`
  MODIFY `eval_form_id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forms_lessonprep`
--
ALTER TABLE `forms_lessonprep`
  MODIFY `lprep_from_id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `form_invent`
--
ALTER TABLE `form_invent`
  MODIFY `invent_form_id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `line_details`
--
ALTER TABLE `line_details`
  MODIFY `line_id` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `person_id` int(24) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `forms_evaluation`
--
ALTER TABLE `forms_evaluation`
  ADD CONSTRAINT `forms_evaluation_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `personal_details` (`person_id`) ON DELETE CASCADE;

--
-- Constraints for table `forms_lessonprep`
--
ALTER TABLE `forms_lessonprep`
  ADD CONSTRAINT `forms_lessonprep_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `personal_details` (`person_id`) ON DELETE CASCADE;

--
-- Constraints for table `form_invent`
--
ALTER TABLE `form_invent`
  ADD CONSTRAINT `form_invent_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `personal_details` (`person_id`) ON DELETE CASCADE;

--
-- Constraints for table `line_details`
--
ALTER TABLE `line_details`
  ADD CONSTRAINT `line_details_ibfk_1` FOREIGN KEY (`invent_form_id`) REFERENCES `form_invent` (`invent_form_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
