-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 05:47 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse_cources`
--

-- --------------------------------------------------------

--
-- Table structure for table `cources`
--

CREATE TABLE `cources` (
  `id` int(20) UNSIGNED NOT NULL,
  `code` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL DEFAULT 'Core',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pre_req` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `course_detail`
--

CREATE TABLE `course_detail` (
  `id` int(100) UNSIGNED NOT NULL,
  `syllabus` varchar(1500) NOT NULL DEFAULT 'Click to edit syllabus',
  `m_text` varchar(500) NOT NULL DEFAULT 'Sample#',
  `r_text` varchar(500) NOT NULL DEFAULT 'Sample#',
  `pre_req` varchar(100) NOT NULL DEFAULT 'Sample#',
  `credits` varchar(20) NOT NULL DEFAULT '0#0#0#0#0#',
  `instructors_info` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Table structure for table `instructer_info`
--

CREATE TABLE `instructer_info` (
  `id` int(100) UNSIGNED NOT NULL,
  `course_id` int(100) UNSIGNED NOT NULL,
  `time` varchar(100) NOT NULL,
  `instructor` varchar(200) NOT NULL,
  `c_cordinator` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `cources`
--
ALTER TABLE `cources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_detail`
--
ALTER TABLE `course_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructer_info`
--
ALTER TABLE `instructer_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ins_info_ibfk_1` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cources`
--
ALTER TABLE `cources`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `instructer_info`
--
ALTER TABLE `instructer_info`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_detail`
--
ALTER TABLE `course_detail`
  ADD CONSTRAINT `course_detail_ibfk_1` FOREIGN KEY (`id`) REFERENCES `cources` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `instructer_info`
--
ALTER TABLE `instructer_info`
  ADD CONSTRAINT `ins_info_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `cources` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
