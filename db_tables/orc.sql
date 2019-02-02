-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2019 at 08:58 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(225) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `level`, `time`) VALUES
(2, 'Emeto Winner uzoma', 'emetowinner@gmail.com', '$2y$10$YANvCaJIAyGwsc1dND6/V.EBkJD8GHDxQoHiV4D.OpCoNobNHp3Ve', 'SuperAdmin', '2019-01-30 00:03:35'),
(3, 'Onyemenam Ndubuisi', 'prond@gmail.com', '$2y$10$PZ3L4mCOOuaCrag5PZ58EuH5yIoAefsHcjJZwttKNAPOD8njJmc4y', 'NormalAdmin', '2019-01-04 21:47:25'),
(4, 'Amadi Oluchi', 'ladyG@gmail.com', '$2y$10$V3TWdwjVMPm6SqsLDXoOnu3SeGB28lHc51BOsGgdM21KoaXAlEzCq', 'SuperAdmin', '2019-01-04 22:04:41'),
(5, 'Chikere Chidinma', 'chidinma@gmail.com', '$2y$10$7BUxykzIMLxUFcVMey8CPelZaYFJUrISObKrdh.k2UQaxmo2NFzXm', 'NormalAdmin', '2019-01-08 19:33:29'),
(7, 'Atashie Amaka', 'amaka@gmail.com', '$2y$10$iBEjtHm4jZBtpdXVAk2O3uLX0MNAxPx6WjyaYZxhmF8j1pwX4uJga', 'SuperAdmin', '2019-01-31 12:57:44'),
(10, 'Amadi Austin Chukwuemeka', 'rexsteroxy22@gmail.com', '$2y$10$dyKx8mtsaw68DEbltRVc7elVQ1YbewIqurd8ynApWRjrmKYIVzBw6', 'SuperAdmin', '2019-01-29 23:38:37'),
(12, 'Emmanuel', 'nuel@gmail.com', '$2y$10$XQ5.8WXsfCVLKTDOzf2R/O970pbNhDueOpbGI0DDIoUy2OBb8wtOK', 'NormalAdmin', '2019-02-01 16:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `firstone` varchar(225) NOT NULL,
  `secondone` varchar(225) NOT NULL,
  `firsttwo` varchar(225) NOT NULL,
  `secondtwo` varchar(225) NOT NULL,
  `firstthree` varchar(225) NOT NULL,
  `secondthree` varchar(225) NOT NULL,
  `firstfour` varchar(225) NOT NULL,
  `secondfour` varchar(225) NOT NULL,
  `firstfive` varchar(225) NOT NULL,
  `secondfive` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `matnumber`, `firstone`, `secondone`, `firsttwo`, `secondtwo`, `firstthree`, `secondthree`, `firstfour`, `secondfour`, `firstfive`, `secondfive`) VALUES
(5, '16/38170', '3.33', '3.93', '4.00', '2.00', '1.50', '', '', '', '', ''),
(6, '12233', '3.57', '4.00', '', '', '', '', '', '', '', ''),
(7, '16/38171', '', '', '', '', '', '', '3.67', '', '', ''),
(8, '255', '3.00', '', '', '', '', '', '', '', '', ''),
(9, '56789', '', '3.00', '', '', '', '', '', '', '', ''),
(10, '987656y', '', '3.00', '', '', '', '', '', '', '', ''),
(11, '45tyuhj', '3.00', '', '', '', '', '', '', '', '', ''),
(12, '5432', '', '2.00', '', '', '', '', '', '', '', ''),
(13, '4532', '', '4.00', '', '', '', '', '', '', '', ''),
(14, '8778', '', '3.00', '', '', '', '', '', '', '', ''),
(15, '7868', '', '3.00', '', '', '', '', '', '', '', ''),
(16, '6758', '', '2.00', '', '', '', '', '', '', '', ''),
(17, '9875', '', '', '3.00', '', '', '', '', '', '', ''),
(18, '3234', '', '', '4.00', '', '', '', '', '', '', ''),
(19, '6457t', '', '', '2.00', '', '', '', '', '', '', ''),
(20, '6786', '', '', '2.00', '', '', '', '', '', '', ''),
(21, '67878', '', '', '4.00', '', '', '', '', '', '', ''),
(22, '5756', '', '', '5.00', '', '', '', '', '', '', ''),
(23, '5688', '', '', '3.00', '', '', '', '', '', '', ''),
(24, '4455', '', '', '2.00', '', '', '', '', '', '', ''),
(25, '34454', '4.00', '', '', '', '', '', '', '', '', ''),
(26, '6788', '', '', '2.00', '', '', '', '', '', '', ''),
(27, '46t7y8', '2.00', '', '', '', '', '', '', '', '', ''),
(28, 'tyuiuo', '', '', '', '', '2.00', '', '', '', '', ''),
(29, '443rg', '', '', '', '', '2.00', '', '', '', '', ''),
(30, '5rr55', '', '', '', '', '4.00', '', '', '', '', ''),
(31, '5556y', '', '', '', '', '2.00', '', '', '', '', ''),
(32, '44refdca', '', '', '', '', '5.00', '', '', '', '', ''),
(33, '45rfffd', '', '', '', '', '', '', '3.00', '', '', ''),
(34, '567ftgyh', '', '', '', '', '', '', '3.00', '', '', ''),
(35, '7ujh', '', '', '', '', '', '', '3.00', '', '', ''),
(36, '45678', '', '', '', '', '', '', '2.00', '', '', ''),
(37, '7654f', '', '', '', '', '', '', '4.00', '', '', ''),
(38, '5w6rgs', '', '', '', '4.00', '', '', '', '', '', ''),
(39, 'fga56', '', '', '', '5.00', '', '', '', '', '', ''),
(40, '5t5555', '', '', '', '5.00', '', '', '', '', '', ''),
(41, '5556tt', '', '', '', '4.00', '', '', '', '', '', ''),
(42, '678hj', '', '', '', '3.00', '', '', '', '', '', ''),
(43, '56y8uio', '', '', '', '', '', '4.00', '', '', '', ''),
(44, '456879uij', '', '', '', '', '', '4.00', '', '', '', ''),
(45, '567i6yui', '', '', '', '', '', '4.00', '', '', '', ''),
(46, '56578ouhnj', '', '', '', '', '', '2.00', '', '', '', ''),
(47, 'dfgh67', '', '', '', '', '', '5.00', '', '', '', ''),
(48, 'tyiuojbh', '', '', '', '', '', '3.00', '', '', '', ''),
(49, '456rftg', '', '', '', '', '', '', '', '5.00', '', ''),
(50, '56789iuj', '', '', '', '', '', '', '', '3.00', '', ''),
(51, '67gjjd', '', '', '', '', '', '', '', '5.00', '', ''),
(52, '55trtgt', '', '', '', '', '', '', '', '3.00', '', ''),
(53, '4567fghj', '', '', '', '', '', '', '', '5.00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `firstsemester`
--

CREATE TABLE `firstsemester` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `course1` varchar(225) NOT NULL,
  `score1` varchar(225) NOT NULL,
  `unit1` varchar(225) NOT NULL,
  `grade1` varchar(225) NOT NULL,
  `course2` varchar(225) NOT NULL,
  `score2` varchar(225) NOT NULL,
  `unit2` varchar(225) NOT NULL,
  `grade2` varchar(225) NOT NULL,
  `course3` varchar(225) NOT NULL,
  `score3` varchar(225) NOT NULL,
  `unit3` varchar(225) NOT NULL,
  `grade3` varchar(225) NOT NULL,
  `course4` varchar(225) NOT NULL,
  `score4` varchar(225) NOT NULL,
  `unit4` varchar(225) NOT NULL,
  `grade4` varchar(225) NOT NULL,
  `course5` varchar(225) NOT NULL,
  `score5` varchar(225) NOT NULL,
  `unit5` varchar(225) NOT NULL,
  `grade5` varchar(225) NOT NULL,
  `course6` varchar(225) NOT NULL,
  `score6` varchar(225) NOT NULL,
  `unit6` varchar(225) NOT NULL,
  `grade6` varchar(225) NOT NULL,
  `course7` varchar(225) NOT NULL,
  `score7` varchar(225) NOT NULL,
  `unit7` varchar(225) NOT NULL,
  `grade7` varchar(225) NOT NULL,
  `course8` varchar(225) NOT NULL,
  `score8` varchar(225) NOT NULL,
  `unit8` varchar(225) NOT NULL,
  `grade8` varchar(225) NOT NULL,
  `course9` varchar(225) NOT NULL,
  `score9` varchar(225) NOT NULL,
  `unit9` varchar(225) NOT NULL,
  `grade9` varchar(225) NOT NULL,
  `course10` varchar(225) NOT NULL,
  `score10` varchar(225) NOT NULL,
  `unit10` varchar(225) NOT NULL,
  `grade10` varchar(225) NOT NULL,
  `course11` varchar(225) NOT NULL,
  `score11` varchar(225) NOT NULL,
  `unit11` varchar(225) NOT NULL,
  `grade11` varchar(225) NOT NULL,
  `course12` varchar(225) NOT NULL,
  `score12` varchar(225) NOT NULL,
  `unit12` varchar(225) NOT NULL,
  `grade12` varchar(225) NOT NULL,
  `course13` varchar(225) NOT NULL,
  `score13` varchar(225) NOT NULL,
  `unit13` varchar(225) NOT NULL,
  `grade13` varchar(225) NOT NULL,
  `course14` varchar(225) NOT NULL,
  `score14` varchar(225) NOT NULL,
  `unit14` varchar(225) NOT NULL,
  `grade14` varchar(225) NOT NULL,
  `course15` varchar(225) NOT NULL,
  `score15` varchar(225) NOT NULL,
  `unit15` varchar(225) NOT NULL,
  `grade15` varchar(225) NOT NULL,
  `course16` varchar(225) NOT NULL,
  `score16` varchar(225) NOT NULL,
  `unit16` varchar(225) NOT NULL,
  `grade16` varchar(225) NOT NULL,
  `course17` varchar(225) NOT NULL,
  `score17` varchar(225) NOT NULL,
  `unit17` varchar(225) NOT NULL,
  `grade17` varchar(225) NOT NULL,
  `course18` varchar(225) NOT NULL,
  `score18` varchar(225) NOT NULL,
  `unit18` varchar(225) NOT NULL,
  `grade18` varchar(225) NOT NULL,
  `course19` varchar(225) NOT NULL,
  `score19` varchar(225) NOT NULL,
  `unit19` varchar(225) NOT NULL,
  `grade19` varchar(225) NOT NULL,
  `course20` varchar(225) NOT NULL,
  `score20` varchar(225) NOT NULL,
  `unit20` varchar(225) NOT NULL,
  `grade20` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `firstsemester`
--

INSERT INTO `firstsemester` (`id`, `matnumber`, `course1`, `score1`, `unit1`, `grade1`, `course2`, `score2`, `unit2`, `grade2`, `course3`, `score3`, `unit3`, `grade3`, `course4`, `score4`, `unit4`, `grade4`, `course5`, `score5`, `unit5`, `grade5`, `course6`, `score6`, `unit6`, `grade6`, `course7`, `score7`, `unit7`, `grade7`, `course8`, `score8`, `unit8`, `grade8`, `course9`, `score9`, `unit9`, `grade9`, `course10`, `score10`, `unit10`, `grade10`, `course11`, `score11`, `unit11`, `grade11`, `course12`, `score12`, `unit12`, `grade12`, `course13`, `score13`, `unit13`, `grade13`, `course14`, `score14`, `unit14`, `grade14`, `course15`, `score15`, `unit15`, `grade15`, `course16`, `score16`, `unit16`, `grade16`, `course17`, `score17`, `unit17`, `grade17`, `course18`, `score18`, `unit18`, `grade18`, `course19`, `score19`, `unit19`, `grade19`, `course20`, `score20`, `unit20`, `grade20`) VALUES
(4, '16/38170', 'csc122', '56', '2', 'C', 'maths', '78', '2', 'A', 'stat', '67', '1', 'B', 'eco', '45', '2', 'D', 'csc122', '78', '1', 'A', 'csc122', '56', '4', 'C', 'csc122', '77', '3', 'A', 'csc122', '67', '1', 'B', 'csc122', '56', '2', 'C', 'csc122', '45', '2', 'D', 'csc122', '23', '1', 'F', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '12233', 'MATHS', '67', '2', 'B', 'English', '56', '1', 'C', 'gst', '45', '2', 'D', 'csc122', '78', '2', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '16/35324', 'English', '', '', '', 'MATHS', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '234', 'maths', '23', '2', 'F', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '233', 'MATHS', '22', '2', 'F', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '255', 'MATHS', '56', '2', 'C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '45tyuhj', 'MATHS', '55', '1', 'C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '34454', 'English', '67', '2', 'B', '2', '67', '2', 'B', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, '46t7y8', 'gst', '45', '4', 'D', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `firstsemester2`
--

CREATE TABLE `firstsemester2` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `course1` varchar(225) NOT NULL,
  `score1` varchar(225) NOT NULL,
  `unit1` varchar(225) NOT NULL,
  `grade1` varchar(225) NOT NULL,
  `course2` varchar(225) NOT NULL,
  `score2` varchar(225) NOT NULL,
  `unit2` varchar(225) NOT NULL,
  `grade2` varchar(225) NOT NULL,
  `course3` varchar(225) NOT NULL,
  `score3` varchar(225) NOT NULL,
  `unit3` varchar(225) NOT NULL,
  `grade3` varchar(225) NOT NULL,
  `course4` varchar(225) NOT NULL,
  `score4` varchar(225) NOT NULL,
  `unit4` varchar(225) NOT NULL,
  `grade4` varchar(225) NOT NULL,
  `course5` varchar(225) NOT NULL,
  `score5` varchar(225) NOT NULL,
  `unit5` varchar(225) NOT NULL,
  `grade5` varchar(225) NOT NULL,
  `course6` varchar(225) NOT NULL,
  `score6` varchar(225) NOT NULL,
  `unit6` varchar(225) NOT NULL,
  `grade6` varchar(225) NOT NULL,
  `course7` varchar(225) NOT NULL,
  `score7` varchar(225) NOT NULL,
  `unit7` varchar(225) NOT NULL,
  `grade7` varchar(225) NOT NULL,
  `course8` varchar(225) NOT NULL,
  `score8` varchar(225) NOT NULL,
  `unit8` varchar(225) NOT NULL,
  `grade8` varchar(225) NOT NULL,
  `course9` varchar(225) NOT NULL,
  `score9` varchar(225) NOT NULL,
  `unit9` varchar(225) NOT NULL,
  `grade9` varchar(225) NOT NULL,
  `course10` varchar(225) NOT NULL,
  `score10` varchar(225) NOT NULL,
  `unit10` varchar(225) NOT NULL,
  `grade10` varchar(225) NOT NULL,
  `course11` varchar(225) NOT NULL,
  `score11` varchar(225) NOT NULL,
  `unit11` varchar(225) NOT NULL,
  `grade11` varchar(225) NOT NULL,
  `course12` varchar(225) NOT NULL,
  `score12` varchar(225) NOT NULL,
  `unit12` varchar(225) NOT NULL,
  `grade12` varchar(225) NOT NULL,
  `course13` varchar(225) NOT NULL,
  `score13` varchar(225) NOT NULL,
  `unit13` varchar(225) NOT NULL,
  `grade13` varchar(225) NOT NULL,
  `course14` varchar(225) NOT NULL,
  `score14` varchar(225) NOT NULL,
  `unit14` varchar(225) NOT NULL,
  `grade14` varchar(225) NOT NULL,
  `course15` varchar(225) NOT NULL,
  `score15` varchar(225) NOT NULL,
  `unit15` varchar(225) NOT NULL,
  `grade15` varchar(225) NOT NULL,
  `course16` varchar(225) NOT NULL,
  `score16` varchar(225) NOT NULL,
  `unit16` varchar(225) NOT NULL,
  `grade16` varchar(225) NOT NULL,
  `course17` varchar(225) NOT NULL,
  `score17` varchar(225) NOT NULL,
  `unit17` varchar(225) NOT NULL,
  `grade17` varchar(225) NOT NULL,
  `course18` varchar(225) NOT NULL,
  `score18` varchar(225) NOT NULL,
  `unit18` varchar(225) NOT NULL,
  `grade18` varchar(225) NOT NULL,
  `course19` varchar(225) NOT NULL,
  `score19` varchar(225) NOT NULL,
  `unit19` varchar(225) NOT NULL,
  `grade19` varchar(225) NOT NULL,
  `course20` varchar(225) NOT NULL,
  `score20` varchar(225) NOT NULL,
  `unit20` varchar(225) NOT NULL,
  `grade20` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `firstsemester2`
--

INSERT INTO `firstsemester2` (`id`, `matnumber`, `course1`, `score1`, `unit1`, `grade1`, `course2`, `score2`, `unit2`, `grade2`, `course3`, `score3`, `unit3`, `grade3`, `course4`, `score4`, `unit4`, `grade4`, `course5`, `score5`, `unit5`, `grade5`, `course6`, `score6`, `unit6`, `grade6`, `course7`, `score7`, `unit7`, `grade7`, `course8`, `score8`, `unit8`, `grade8`, `course9`, `score9`, `unit9`, `grade9`, `course10`, `score10`, `unit10`, `grade10`, `course11`, `score11`, `unit11`, `grade11`, `course12`, `score12`, `unit12`, `grade12`, `course13`, `score13`, `unit13`, `grade13`, `course14`, `score14`, `unit14`, `grade14`, `course15`, `score15`, `unit15`, `grade15`, `course16`, `score16`, `unit16`, `grade16`, `course17`, `score17`, `unit17`, `grade17`, `course18`, `score18`, `unit18`, `grade18`, `course19`, `score19`, `unit19`, `grade19`, `course20`, `score20`, `unit20`, `grade20`) VALUES
(1, '16/38170', 'MATHS', '56', '2', 'C', 'English', '74', '2', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '9875', 'maths', '56', '3', 'C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '3234', 'gst', '67', '4', 'B', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '6457t', 'MATHS', '45', '2', 'D', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '6786', '1', '45', '1', 'D', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '67878', 'MATHS', '67', '1', 'B', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '5756', 'MATHS', '90', '3', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '5688', 'gst', '56', '2', 'C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '4455', 'gst', '45', '2', 'D', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '6788', '2', '45', '2', 'D', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '7654', 'gst', '32', '2', 'F', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `firstsemester3`
--

CREATE TABLE `firstsemester3` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `course1` varchar(225) NOT NULL,
  `score1` varchar(225) NOT NULL,
  `unit1` varchar(225) NOT NULL,
  `grade1` varchar(225) NOT NULL,
  `course2` varchar(225) NOT NULL,
  `score2` varchar(225) NOT NULL,
  `unit2` varchar(225) NOT NULL,
  `grade2` varchar(225) NOT NULL,
  `course3` varchar(225) NOT NULL,
  `score3` varchar(225) NOT NULL,
  `unit3` varchar(225) NOT NULL,
  `grade3` varchar(225) NOT NULL,
  `course4` varchar(225) NOT NULL,
  `score4` varchar(225) NOT NULL,
  `unit4` varchar(225) NOT NULL,
  `grade4` varchar(225) NOT NULL,
  `course5` varchar(225) NOT NULL,
  `score5` varchar(225) NOT NULL,
  `unit5` varchar(225) NOT NULL,
  `grade5` varchar(225) NOT NULL,
  `course6` varchar(225) NOT NULL,
  `score6` varchar(225) NOT NULL,
  `unit6` varchar(225) NOT NULL,
  `grade6` varchar(225) NOT NULL,
  `course7` varchar(225) NOT NULL,
  `score7` varchar(225) NOT NULL,
  `unit7` varchar(225) NOT NULL,
  `grade7` varchar(225) NOT NULL,
  `course8` varchar(225) NOT NULL,
  `score8` varchar(225) NOT NULL,
  `unit8` varchar(225) NOT NULL,
  `grade8` varchar(225) NOT NULL,
  `course9` varchar(225) NOT NULL,
  `score9` varchar(225) NOT NULL,
  `unit9` varchar(225) NOT NULL,
  `grade9` varchar(225) NOT NULL,
  `course10` varchar(225) NOT NULL,
  `score10` varchar(225) NOT NULL,
  `unit10` varchar(225) NOT NULL,
  `grade10` varchar(225) NOT NULL,
  `course11` varchar(225) NOT NULL,
  `score11` varchar(225) NOT NULL,
  `unit11` varchar(225) NOT NULL,
  `grade11` varchar(225) NOT NULL,
  `course12` varchar(225) NOT NULL,
  `score12` varchar(225) NOT NULL,
  `unit12` varchar(225) NOT NULL,
  `grade12` varchar(225) NOT NULL,
  `course13` varchar(225) NOT NULL,
  `score13` varchar(225) NOT NULL,
  `unit13` varchar(225) NOT NULL,
  `grade13` varchar(225) NOT NULL,
  `course14` varchar(225) NOT NULL,
  `score14` varchar(225) NOT NULL,
  `unit14` varchar(225) NOT NULL,
  `grade14` varchar(225) NOT NULL,
  `course15` varchar(225) NOT NULL,
  `score15` varchar(225) NOT NULL,
  `unit15` varchar(225) NOT NULL,
  `grade15` varchar(225) NOT NULL,
  `course16` varchar(225) NOT NULL,
  `score16` varchar(225) NOT NULL,
  `unit16` varchar(225) NOT NULL,
  `grade16` varchar(225) NOT NULL,
  `course17` varchar(225) NOT NULL,
  `score17` varchar(225) NOT NULL,
  `unit17` varchar(225) NOT NULL,
  `grade17` varchar(225) NOT NULL,
  `course18` varchar(225) NOT NULL,
  `score18` varchar(225) NOT NULL,
  `unit18` varchar(225) NOT NULL,
  `grade18` varchar(225) NOT NULL,
  `course19` varchar(225) NOT NULL,
  `score19` varchar(225) NOT NULL,
  `unit19` varchar(225) NOT NULL,
  `grade19` varchar(225) NOT NULL,
  `course20` varchar(225) NOT NULL,
  `score20` varchar(225) NOT NULL,
  `unit20` varchar(225) NOT NULL,
  `grade20` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `firstsemester3`
--

INSERT INTO `firstsemester3` (`id`, `matnumber`, `course1`, `score1`, `unit1`, `grade1`, `course2`, `score2`, `unit2`, `grade2`, `course3`, `score3`, `unit3`, `grade3`, `course4`, `score4`, `unit4`, `grade4`, `course5`, `score5`, `unit5`, `grade5`, `course6`, `score6`, `unit6`, `grade6`, `course7`, `score7`, `unit7`, `grade7`, `course8`, `score8`, `unit8`, `grade8`, `course9`, `score9`, `unit9`, `grade9`, `course10`, `score10`, `unit10`, `grade10`, `course11`, `score11`, `unit11`, `grade11`, `course12`, `score12`, `unit12`, `grade12`, `course13`, `score13`, `unit13`, `grade13`, `course14`, `score14`, `unit14`, `grade14`, `course15`, `score15`, `unit15`, `grade15`, `course16`, `score16`, `unit16`, `grade16`, `course17`, `score17`, `unit17`, `grade17`, `course18`, `score18`, `unit18`, `grade18`, `course19`, `score19`, `unit19`, `grade19`, `course20`, `score20`, `unit20`, `grade20`) VALUES
(1, '16/38170', 'eee', '44', '3', 'F', 'MATHS', '55', '3', 'C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'tyuiuo', 'MATHS', '45', '4', 'D', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '443rg', 'gst', '45', '2', 'D', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '5rr55', 'MATHS', '67', '2', 'B', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '5556y', 'gst', '45', '2', 'D', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '44refdca', 'English', '88', '3', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `firstsemester4`
--

CREATE TABLE `firstsemester4` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `course1` varchar(225) NOT NULL,
  `score1` varchar(225) NOT NULL,
  `unit1` varchar(225) NOT NULL,
  `grade1` varchar(225) NOT NULL,
  `course2` varchar(225) NOT NULL,
  `score2` varchar(225) NOT NULL,
  `unit2` varchar(225) NOT NULL,
  `grade2` varchar(225) NOT NULL,
  `course3` varchar(225) NOT NULL,
  `score3` varchar(225) NOT NULL,
  `unit3` varchar(225) NOT NULL,
  `grade3` varchar(225) NOT NULL,
  `course4` varchar(225) NOT NULL,
  `score4` varchar(225) NOT NULL,
  `unit4` varchar(225) NOT NULL,
  `grade4` varchar(225) NOT NULL,
  `course5` varchar(225) NOT NULL,
  `score5` varchar(225) NOT NULL,
  `unit5` varchar(225) NOT NULL,
  `grade5` varchar(225) NOT NULL,
  `course6` varchar(225) NOT NULL,
  `score6` varchar(225) NOT NULL,
  `unit6` varchar(225) NOT NULL,
  `grade6` varchar(225) NOT NULL,
  `course7` varchar(225) NOT NULL,
  `score7` varchar(225) NOT NULL,
  `unit7` varchar(225) NOT NULL,
  `grade7` varchar(225) NOT NULL,
  `course8` varchar(225) NOT NULL,
  `score8` varchar(225) NOT NULL,
  `unit8` varchar(225) NOT NULL,
  `grade8` varchar(225) NOT NULL,
  `course9` varchar(225) NOT NULL,
  `score9` varchar(225) NOT NULL,
  `unit9` varchar(225) NOT NULL,
  `grade9` varchar(225) NOT NULL,
  `course10` varchar(225) NOT NULL,
  `score10` varchar(225) NOT NULL,
  `unit10` varchar(225) NOT NULL,
  `grade10` varchar(225) NOT NULL,
  `course11` varchar(225) NOT NULL,
  `score11` varchar(225) NOT NULL,
  `unit11` varchar(225) NOT NULL,
  `grade11` varchar(225) NOT NULL,
  `course12` varchar(225) NOT NULL,
  `score12` varchar(225) NOT NULL,
  `unit12` varchar(225) NOT NULL,
  `grade12` varchar(225) NOT NULL,
  `course13` varchar(225) NOT NULL,
  `score13` varchar(225) NOT NULL,
  `unit13` varchar(225) NOT NULL,
  `grade13` varchar(225) NOT NULL,
  `course14` varchar(225) NOT NULL,
  `score14` varchar(225) NOT NULL,
  `unit14` varchar(225) NOT NULL,
  `grade14` varchar(225) NOT NULL,
  `course15` varchar(225) NOT NULL,
  `score15` varchar(225) NOT NULL,
  `unit15` varchar(225) NOT NULL,
  `grade15` varchar(225) NOT NULL,
  `course16` varchar(225) NOT NULL,
  `score16` varchar(225) NOT NULL,
  `unit16` varchar(225) NOT NULL,
  `grade16` varchar(225) NOT NULL,
  `course17` varchar(225) NOT NULL,
  `score17` varchar(225) NOT NULL,
  `unit17` varchar(225) NOT NULL,
  `grade17` varchar(225) NOT NULL,
  `course18` varchar(225) NOT NULL,
  `score18` varchar(225) NOT NULL,
  `unit18` varchar(225) NOT NULL,
  `grade18` varchar(225) NOT NULL,
  `course19` varchar(225) NOT NULL,
  `score19` varchar(225) NOT NULL,
  `unit19` varchar(225) NOT NULL,
  `grade19` varchar(225) NOT NULL,
  `course20` varchar(225) NOT NULL,
  `score20` varchar(225) NOT NULL,
  `unit20` varchar(225) NOT NULL,
  `grade20` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `firstsemester4`
--

INSERT INTO `firstsemester4` (`id`, `matnumber`, `course1`, `score1`, `unit1`, `grade1`, `course2`, `score2`, `unit2`, `grade2`, `course3`, `score3`, `unit3`, `grade3`, `course4`, `score4`, `unit4`, `grade4`, `course5`, `score5`, `unit5`, `grade5`, `course6`, `score6`, `unit6`, `grade6`, `course7`, `score7`, `unit7`, `grade7`, `course8`, `score8`, `unit8`, `grade8`, `course9`, `score9`, `unit9`, `grade9`, `course10`, `score10`, `unit10`, `grade10`, `course11`, `score11`, `unit11`, `grade11`, `course12`, `score12`, `unit12`, `grade12`, `course13`, `score13`, `unit13`, `grade13`, `course14`, `score14`, `unit14`, `grade14`, `course15`, `score15`, `unit15`, `grade15`, `course16`, `score16`, `unit16`, `grade16`, `course17`, `score17`, `unit17`, `grade17`, `course18`, `score18`, `unit18`, `grade18`, `course19`, `score19`, `unit19`, `grade19`, `course20`, `score20`, `unit20`, `grade20`) VALUES
(1, '16/38171', 'csc122', '67', '2', 'B', 'maths', '54', '1', 'C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '45rfffd', 'MATHS', '56', '3', 'C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '567ftgyh', 'English', '55', '1', 'C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '7ujh', 'English', '56', '1', 'C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '45678', 'English', '45', '3', 'D', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '7654f', 'English', '67', '1', 'B', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `firstsemester5`
--

CREATE TABLE `firstsemester5` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `course1` varchar(225) NOT NULL,
  `score1` varchar(225) NOT NULL,
  `unit1` varchar(225) NOT NULL,
  `grade1` varchar(225) NOT NULL,
  `course2` varchar(225) NOT NULL,
  `score2` varchar(225) NOT NULL,
  `unit2` varchar(225) NOT NULL,
  `grade2` varchar(225) NOT NULL,
  `course3` varchar(225) NOT NULL,
  `score3` varchar(225) NOT NULL,
  `unit3` varchar(225) NOT NULL,
  `grade3` varchar(225) NOT NULL,
  `course4` varchar(225) NOT NULL,
  `score4` varchar(225) NOT NULL,
  `unit4` varchar(225) NOT NULL,
  `grade4` varchar(225) NOT NULL,
  `course5` varchar(225) NOT NULL,
  `score5` varchar(225) NOT NULL,
  `unit5` varchar(225) NOT NULL,
  `grade5` varchar(225) NOT NULL,
  `course6` varchar(225) NOT NULL,
  `score6` varchar(225) NOT NULL,
  `unit6` varchar(225) NOT NULL,
  `grade6` varchar(225) NOT NULL,
  `course7` varchar(225) NOT NULL,
  `score7` varchar(225) NOT NULL,
  `unit7` varchar(225) NOT NULL,
  `grade7` varchar(225) NOT NULL,
  `course8` varchar(225) NOT NULL,
  `score8` varchar(225) NOT NULL,
  `unit8` varchar(225) NOT NULL,
  `grade8` varchar(225) NOT NULL,
  `course9` varchar(225) NOT NULL,
  `score9` varchar(225) NOT NULL,
  `unit9` varchar(225) NOT NULL,
  `grade9` varchar(225) NOT NULL,
  `course10` varchar(225) NOT NULL,
  `score10` varchar(225) NOT NULL,
  `unit10` varchar(225) NOT NULL,
  `grade10` varchar(225) NOT NULL,
  `course11` varchar(225) NOT NULL,
  `score11` varchar(225) NOT NULL,
  `unit11` varchar(225) NOT NULL,
  `grade11` varchar(225) NOT NULL,
  `course12` varchar(225) NOT NULL,
  `score12` varchar(225) NOT NULL,
  `unit12` varchar(225) NOT NULL,
  `grade12` varchar(225) NOT NULL,
  `course13` varchar(225) NOT NULL,
  `score13` varchar(225) NOT NULL,
  `unit13` varchar(225) NOT NULL,
  `grade13` varchar(225) NOT NULL,
  `course14` varchar(225) NOT NULL,
  `score14` varchar(225) NOT NULL,
  `unit14` varchar(225) NOT NULL,
  `grade14` varchar(225) NOT NULL,
  `course15` varchar(225) NOT NULL,
  `score15` varchar(225) NOT NULL,
  `unit15` varchar(225) NOT NULL,
  `grade15` varchar(225) NOT NULL,
  `course16` varchar(225) NOT NULL,
  `score16` varchar(225) NOT NULL,
  `unit16` varchar(225) NOT NULL,
  `grade16` varchar(225) NOT NULL,
  `course17` varchar(225) NOT NULL,
  `score17` varchar(225) NOT NULL,
  `unit17` varchar(225) NOT NULL,
  `grade17` varchar(225) NOT NULL,
  `course18` varchar(225) NOT NULL,
  `score18` varchar(225) NOT NULL,
  `unit18` varchar(225) NOT NULL,
  `grade18` varchar(225) NOT NULL,
  `course19` varchar(225) NOT NULL,
  `score19` varchar(225) NOT NULL,
  `unit19` varchar(225) NOT NULL,
  `grade19` varchar(225) NOT NULL,
  `course20` varchar(225) NOT NULL,
  `score20` varchar(225) NOT NULL,
  `unit20` varchar(225) NOT NULL,
  `grade20` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `secondsemester`
--

CREATE TABLE `secondsemester` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `course1` varchar(225) NOT NULL,
  `score1` varchar(225) NOT NULL,
  `unit1` varchar(225) NOT NULL,
  `grade1` varchar(225) NOT NULL,
  `course2` varchar(225) NOT NULL,
  `score2` varchar(225) NOT NULL,
  `unit2` varchar(225) NOT NULL,
  `grade2` varchar(225) NOT NULL,
  `course3` varchar(225) NOT NULL,
  `score3` varchar(225) NOT NULL,
  `unit3` varchar(225) NOT NULL,
  `grade3` varchar(225) NOT NULL,
  `course4` varchar(225) NOT NULL,
  `score4` varchar(225) NOT NULL,
  `unit4` varchar(225) NOT NULL,
  `grade4` varchar(225) NOT NULL,
  `course5` varchar(225) NOT NULL,
  `score5` varchar(225) NOT NULL,
  `unit5` varchar(225) NOT NULL,
  `grade5` varchar(225) NOT NULL,
  `course6` varchar(225) NOT NULL,
  `score6` varchar(225) NOT NULL,
  `unit6` varchar(225) NOT NULL,
  `grade6` varchar(225) NOT NULL,
  `course7` varchar(225) NOT NULL,
  `score7` varchar(225) NOT NULL,
  `unit7` varchar(225) NOT NULL,
  `grade7` varchar(225) NOT NULL,
  `course8` varchar(225) NOT NULL,
  `score8` varchar(225) NOT NULL,
  `unit8` varchar(225) NOT NULL,
  `grade8` varchar(225) NOT NULL,
  `course9` varchar(225) NOT NULL,
  `score9` varchar(225) NOT NULL,
  `unit9` varchar(225) NOT NULL,
  `grade9` varchar(225) NOT NULL,
  `course10` varchar(225) NOT NULL,
  `score10` varchar(225) NOT NULL,
  `unit10` varchar(225) NOT NULL,
  `grade10` varchar(225) NOT NULL,
  `course11` varchar(225) NOT NULL,
  `score11` varchar(225) NOT NULL,
  `unit11` varchar(225) NOT NULL,
  `grade11` varchar(225) NOT NULL,
  `course12` varchar(225) NOT NULL,
  `score12` varchar(225) NOT NULL,
  `unit12` varchar(225) NOT NULL,
  `grade12` varchar(225) NOT NULL,
  `course13` varchar(225) NOT NULL,
  `score13` varchar(225) NOT NULL,
  `unit13` varchar(225) NOT NULL,
  `grade13` varchar(225) NOT NULL,
  `course14` varchar(225) NOT NULL,
  `score14` varchar(225) NOT NULL,
  `unit14` varchar(225) NOT NULL,
  `grade14` varchar(225) NOT NULL,
  `course15` varchar(225) NOT NULL,
  `score15` varchar(225) NOT NULL,
  `unit15` varchar(225) NOT NULL,
  `grade15` varchar(225) NOT NULL,
  `course16` varchar(225) NOT NULL,
  `score16` varchar(225) NOT NULL,
  `unit16` varchar(225) NOT NULL,
  `grade16` varchar(225) NOT NULL,
  `course17` varchar(225) NOT NULL,
  `score17` varchar(225) NOT NULL,
  `unit17` varchar(225) NOT NULL,
  `grade17` varchar(225) NOT NULL,
  `course18` varchar(225) NOT NULL,
  `score18` varchar(225) NOT NULL,
  `unit18` varchar(225) NOT NULL,
  `grade18` varchar(225) NOT NULL,
  `course19` varchar(225) NOT NULL,
  `score19` varchar(225) NOT NULL,
  `unit19` varchar(225) NOT NULL,
  `grade19` varchar(225) NOT NULL,
  `course20` varchar(225) NOT NULL,
  `score20` varchar(225) NOT NULL,
  `unit20` varchar(225) NOT NULL,
  `grade20` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secondsemester`
--

INSERT INTO `secondsemester` (`id`, `matnumber`, `course1`, `score1`, `unit1`, `grade1`, `course2`, `score2`, `unit2`, `grade2`, `course3`, `score3`, `unit3`, `grade3`, `course4`, `score4`, `unit4`, `grade4`, `course5`, `score5`, `unit5`, `grade5`, `course6`, `score6`, `unit6`, `grade6`, `course7`, `score7`, `unit7`, `grade7`, `course8`, `score8`, `unit8`, `grade8`, `course9`, `score9`, `unit9`, `grade9`, `course10`, `score10`, `unit10`, `grade10`, `course11`, `score11`, `unit11`, `grade11`, `course12`, `score12`, `unit12`, `grade12`, `course13`, `score13`, `unit13`, `grade13`, `course14`, `score14`, `unit14`, `grade14`, `course15`, `score15`, `unit15`, `grade15`, `course16`, `score16`, `unit16`, `grade16`, `course17`, `score17`, `unit17`, `grade17`, `course18`, `score18`, `unit18`, `grade18`, `course19`, `score19`, `unit19`, `grade19`, `course20`, `score20`, `unit20`, `grade20`) VALUES
(1, '16/38170', 'MATHS', '45', '5', 'D', 'English', '89', '9', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '12233', 'gst', '67', '3', 'B', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '56789', 'MATHS', '56', '2', 'C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '5678', 'English', '34', '2', 'F', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '8765', 'English', '26', '2', 'F', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '987656y', 'MATHS', '56', '2', 'C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '5432', 'gst', '45', '2', 'D', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '4532', 'maths', '66', '3', 'B', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '8778', 'csc122', '56', '3', 'C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '7868', '2', '56', '2', 'C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, '6758', 'English', '45', '5', 'D', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `secondsemester2`
--

CREATE TABLE `secondsemester2` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `course1` varchar(225) NOT NULL,
  `score1` varchar(225) NOT NULL,
  `unit1` varchar(225) NOT NULL,
  `grade1` varchar(225) NOT NULL,
  `course2` varchar(225) NOT NULL,
  `score2` varchar(225) NOT NULL,
  `unit2` varchar(225) NOT NULL,
  `grade2` varchar(225) NOT NULL,
  `course3` varchar(225) NOT NULL,
  `score3` varchar(225) NOT NULL,
  `unit3` varchar(225) NOT NULL,
  `grade3` varchar(225) NOT NULL,
  `course4` varchar(225) NOT NULL,
  `score4` varchar(225) NOT NULL,
  `unit4` varchar(225) NOT NULL,
  `grade4` varchar(225) NOT NULL,
  `course5` varchar(225) NOT NULL,
  `score5` varchar(225) NOT NULL,
  `unit5` varchar(225) NOT NULL,
  `grade5` varchar(225) NOT NULL,
  `course6` varchar(225) NOT NULL,
  `score6` varchar(225) NOT NULL,
  `unit6` varchar(225) NOT NULL,
  `grade6` varchar(225) NOT NULL,
  `course7` varchar(225) NOT NULL,
  `score7` varchar(225) NOT NULL,
  `unit7` varchar(225) NOT NULL,
  `grade7` varchar(225) NOT NULL,
  `course8` varchar(225) NOT NULL,
  `score8` varchar(225) NOT NULL,
  `unit8` varchar(225) NOT NULL,
  `grade8` varchar(225) NOT NULL,
  `course9` varchar(225) NOT NULL,
  `score9` varchar(225) NOT NULL,
  `unit9` varchar(225) NOT NULL,
  `grade9` varchar(225) NOT NULL,
  `course10` varchar(225) NOT NULL,
  `score10` varchar(225) NOT NULL,
  `unit10` varchar(225) NOT NULL,
  `grade10` varchar(225) NOT NULL,
  `course11` varchar(225) NOT NULL,
  `score11` varchar(225) NOT NULL,
  `unit11` varchar(225) NOT NULL,
  `grade11` varchar(225) NOT NULL,
  `course12` varchar(225) NOT NULL,
  `score12` varchar(225) NOT NULL,
  `unit12` varchar(225) NOT NULL,
  `grade12` varchar(225) NOT NULL,
  `course13` varchar(225) NOT NULL,
  `score13` varchar(225) NOT NULL,
  `unit13` varchar(225) NOT NULL,
  `grade13` varchar(225) NOT NULL,
  `course14` varchar(225) NOT NULL,
  `score14` varchar(225) NOT NULL,
  `unit14` varchar(225) NOT NULL,
  `grade14` varchar(225) NOT NULL,
  `course15` varchar(225) NOT NULL,
  `score15` varchar(225) NOT NULL,
  `unit15` varchar(225) NOT NULL,
  `grade15` varchar(225) NOT NULL,
  `course16` varchar(225) NOT NULL,
  `score16` varchar(225) NOT NULL,
  `unit16` varchar(225) NOT NULL,
  `grade16` varchar(225) NOT NULL,
  `course17` varchar(225) NOT NULL,
  `score17` varchar(225) NOT NULL,
  `unit17` varchar(225) NOT NULL,
  `grade17` varchar(225) NOT NULL,
  `course18` varchar(225) NOT NULL,
  `score18` varchar(225) NOT NULL,
  `unit18` varchar(225) NOT NULL,
  `grade18` varchar(225) NOT NULL,
  `course19` varchar(225) NOT NULL,
  `score19` varchar(225) NOT NULL,
  `unit19` varchar(225) NOT NULL,
  `grade19` varchar(225) NOT NULL,
  `course20` varchar(225) NOT NULL,
  `score20` varchar(225) NOT NULL,
  `unit20` varchar(225) NOT NULL,
  `grade20` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secondsemester2`
--

INSERT INTO `secondsemester2` (`id`, `matnumber`, `course1`, `score1`, `unit1`, `grade1`, `course2`, `score2`, `unit2`, `grade2`, `course3`, `score3`, `unit3`, `grade3`, `course4`, `score4`, `unit4`, `grade4`, `course5`, `score5`, `unit5`, `grade5`, `course6`, `score6`, `unit6`, `grade6`, `course7`, `score7`, `unit7`, `grade7`, `course8`, `score8`, `unit8`, `grade8`, `course9`, `score9`, `unit9`, `grade9`, `course10`, `score10`, `unit10`, `grade10`, `course11`, `score11`, `unit11`, `grade11`, `course12`, `score12`, `unit12`, `grade12`, `course13`, `score13`, `unit13`, `grade13`, `course14`, `score14`, `unit14`, `grade14`, `course15`, `score15`, `unit15`, `grade15`, `course16`, `score16`, `unit16`, `grade16`, `course17`, `score17`, `unit17`, `grade17`, `course18`, `score18`, `unit18`, `grade18`, `course19`, `score19`, `unit19`, `grade19`, `course20`, `score20`, `unit20`, `grade20`) VALUES
(1, '16/38170', 'gst', '45', '1', 'D', 'csc122', '47', '3', 'D', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '5w6rgs', 'gst', '67', '2', 'B', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'fga56', 'English', '89', '1', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '5t5555', 'maths', '78', '2', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '5556tt', 'gst', '67', '2', 'B', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '678hj', 'English', '56', '2', 'C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `secondsemester3`
--

CREATE TABLE `secondsemester3` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `course1` varchar(225) NOT NULL,
  `score1` varchar(225) NOT NULL,
  `unit1` varchar(225) NOT NULL,
  `grade1` varchar(225) NOT NULL,
  `course2` varchar(225) NOT NULL,
  `score2` varchar(225) NOT NULL,
  `unit2` varchar(225) NOT NULL,
  `grade2` varchar(225) NOT NULL,
  `course3` varchar(225) NOT NULL,
  `score3` varchar(225) NOT NULL,
  `unit3` varchar(225) NOT NULL,
  `grade3` varchar(225) NOT NULL,
  `course4` varchar(225) NOT NULL,
  `score4` varchar(225) NOT NULL,
  `unit4` varchar(225) NOT NULL,
  `grade4` varchar(225) NOT NULL,
  `course5` varchar(225) NOT NULL,
  `score5` varchar(225) NOT NULL,
  `unit5` varchar(225) NOT NULL,
  `grade5` varchar(225) NOT NULL,
  `course6` varchar(225) NOT NULL,
  `score6` varchar(225) NOT NULL,
  `unit6` varchar(225) NOT NULL,
  `grade6` varchar(225) NOT NULL,
  `course7` varchar(225) NOT NULL,
  `score7` varchar(225) NOT NULL,
  `unit7` varchar(225) NOT NULL,
  `grade7` varchar(225) NOT NULL,
  `course8` varchar(225) NOT NULL,
  `score8` varchar(225) NOT NULL,
  `unit8` varchar(225) NOT NULL,
  `grade8` varchar(225) NOT NULL,
  `course9` varchar(225) NOT NULL,
  `score9` varchar(225) NOT NULL,
  `unit9` varchar(225) NOT NULL,
  `grade9` varchar(225) NOT NULL,
  `course10` varchar(225) NOT NULL,
  `score10` varchar(225) NOT NULL,
  `unit10` varchar(225) NOT NULL,
  `grade10` varchar(225) NOT NULL,
  `course11` varchar(225) NOT NULL,
  `score11` varchar(225) NOT NULL,
  `unit11` varchar(225) NOT NULL,
  `grade11` varchar(225) NOT NULL,
  `course12` varchar(225) NOT NULL,
  `score12` varchar(225) NOT NULL,
  `unit12` varchar(225) NOT NULL,
  `grade12` varchar(225) NOT NULL,
  `course13` varchar(225) NOT NULL,
  `score13` varchar(225) NOT NULL,
  `unit13` varchar(225) NOT NULL,
  `grade13` varchar(225) NOT NULL,
  `course14` varchar(225) NOT NULL,
  `score14` varchar(225) NOT NULL,
  `unit14` varchar(225) NOT NULL,
  `grade14` varchar(225) NOT NULL,
  `course15` varchar(225) NOT NULL,
  `score15` varchar(225) NOT NULL,
  `unit15` varchar(225) NOT NULL,
  `grade15` varchar(225) NOT NULL,
  `course16` varchar(225) NOT NULL,
  `score16` varchar(225) NOT NULL,
  `unit16` varchar(225) NOT NULL,
  `grade16` varchar(225) NOT NULL,
  `course17` varchar(225) NOT NULL,
  `score17` varchar(225) NOT NULL,
  `unit17` varchar(225) NOT NULL,
  `grade17` varchar(225) NOT NULL,
  `course18` varchar(225) NOT NULL,
  `score18` varchar(225) NOT NULL,
  `unit18` varchar(225) NOT NULL,
  `grade18` varchar(225) NOT NULL,
  `course19` varchar(225) NOT NULL,
  `score19` varchar(225) NOT NULL,
  `unit19` varchar(225) NOT NULL,
  `grade19` varchar(225) NOT NULL,
  `course20` varchar(225) NOT NULL,
  `score20` varchar(225) NOT NULL,
  `unit20` varchar(225) NOT NULL,
  `grade20` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secondsemester3`
--

INSERT INTO `secondsemester3` (`id`, `matnumber`, `course1`, `score1`, `unit1`, `grade1`, `course2`, `score2`, `unit2`, `grade2`, `course3`, `score3`, `unit3`, `grade3`, `course4`, `score4`, `unit4`, `grade4`, `course5`, `score5`, `unit5`, `grade5`, `course6`, `score6`, `unit6`, `grade6`, `course7`, `score7`, `unit7`, `grade7`, `course8`, `score8`, `unit8`, `grade8`, `course9`, `score9`, `unit9`, `grade9`, `course10`, `score10`, `unit10`, `grade10`, `course11`, `score11`, `unit11`, `grade11`, `course12`, `score12`, `unit12`, `grade12`, `course13`, `score13`, `unit13`, `grade13`, `course14`, `score14`, `unit14`, `grade14`, `course15`, `score15`, `unit15`, `grade15`, `course16`, `score16`, `unit16`, `grade16`, `course17`, `score17`, `unit17`, `grade17`, `course18`, `score18`, `unit18`, `grade18`, `course19`, `score19`, `unit19`, `grade19`, `course20`, `score20`, `unit20`, `grade20`) VALUES
(1, '56y8uio', 'gst', '67', '2', 'B', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '456879uij', 'gst', '67', '2', 'B', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '567i6yui', 'MATHS', '65', '1', 'B', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '56578ouhnj', 'English', '45', '6', 'D', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'dfgh67', 'English', '78', '3', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'tyiuojbh', 'English', '56', '1', 'C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `secondsemester4`
--

CREATE TABLE `secondsemester4` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `course1` varchar(225) NOT NULL,
  `score1` varchar(225) NOT NULL,
  `unit1` varchar(225) NOT NULL,
  `grade1` varchar(225) NOT NULL,
  `course2` varchar(225) NOT NULL,
  `score2` varchar(225) NOT NULL,
  `unit2` varchar(225) NOT NULL,
  `grade2` varchar(225) NOT NULL,
  `course3` varchar(225) NOT NULL,
  `score3` varchar(225) NOT NULL,
  `unit3` varchar(225) NOT NULL,
  `grade3` varchar(225) NOT NULL,
  `course4` varchar(225) NOT NULL,
  `score4` varchar(225) NOT NULL,
  `unit4` varchar(225) NOT NULL,
  `grade4` varchar(225) NOT NULL,
  `course5` varchar(225) NOT NULL,
  `score5` varchar(225) NOT NULL,
  `unit5` varchar(225) NOT NULL,
  `grade5` varchar(225) NOT NULL,
  `course6` varchar(225) NOT NULL,
  `score6` varchar(225) NOT NULL,
  `unit6` varchar(225) NOT NULL,
  `grade6` varchar(225) NOT NULL,
  `course7` varchar(225) NOT NULL,
  `score7` varchar(225) NOT NULL,
  `unit7` varchar(225) NOT NULL,
  `grade7` varchar(225) NOT NULL,
  `course8` varchar(225) NOT NULL,
  `score8` varchar(225) NOT NULL,
  `unit8` varchar(225) NOT NULL,
  `grade8` varchar(225) NOT NULL,
  `course9` varchar(225) NOT NULL,
  `score9` varchar(225) NOT NULL,
  `unit9` varchar(225) NOT NULL,
  `grade9` varchar(225) NOT NULL,
  `course10` varchar(225) NOT NULL,
  `score10` varchar(225) NOT NULL,
  `unit10` varchar(225) NOT NULL,
  `grade10` varchar(225) NOT NULL,
  `course11` varchar(225) NOT NULL,
  `score11` varchar(225) NOT NULL,
  `unit11` varchar(225) NOT NULL,
  `grade11` varchar(225) NOT NULL,
  `course12` varchar(225) NOT NULL,
  `score12` varchar(225) NOT NULL,
  `unit12` varchar(225) NOT NULL,
  `grade12` varchar(225) NOT NULL,
  `course13` varchar(225) NOT NULL,
  `score13` varchar(225) NOT NULL,
  `unit13` varchar(225) NOT NULL,
  `grade13` varchar(225) NOT NULL,
  `course14` varchar(225) NOT NULL,
  `score14` varchar(225) NOT NULL,
  `unit14` varchar(225) NOT NULL,
  `grade14` varchar(225) NOT NULL,
  `course15` varchar(225) NOT NULL,
  `score15` varchar(225) NOT NULL,
  `unit15` varchar(225) NOT NULL,
  `grade15` varchar(225) NOT NULL,
  `course16` varchar(225) NOT NULL,
  `score16` varchar(225) NOT NULL,
  `unit16` varchar(225) NOT NULL,
  `grade16` varchar(225) NOT NULL,
  `course17` varchar(225) NOT NULL,
  `score17` varchar(225) NOT NULL,
  `unit17` varchar(225) NOT NULL,
  `grade17` varchar(225) NOT NULL,
  `course18` varchar(225) NOT NULL,
  `score18` varchar(225) NOT NULL,
  `unit18` varchar(225) NOT NULL,
  `grade18` varchar(225) NOT NULL,
  `course19` varchar(225) NOT NULL,
  `score19` varchar(225) NOT NULL,
  `unit19` varchar(225) NOT NULL,
  `grade19` varchar(225) NOT NULL,
  `course20` varchar(225) NOT NULL,
  `score20` varchar(225) NOT NULL,
  `unit20` varchar(225) NOT NULL,
  `grade20` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `secondsemester4`
--

INSERT INTO `secondsemester4` (`id`, `matnumber`, `course1`, `score1`, `unit1`, `grade1`, `course2`, `score2`, `unit2`, `grade2`, `course3`, `score3`, `unit3`, `grade3`, `course4`, `score4`, `unit4`, `grade4`, `course5`, `score5`, `unit5`, `grade5`, `course6`, `score6`, `unit6`, `grade6`, `course7`, `score7`, `unit7`, `grade7`, `course8`, `score8`, `unit8`, `grade8`, `course9`, `score9`, `unit9`, `grade9`, `course10`, `score10`, `unit10`, `grade10`, `course11`, `score11`, `unit11`, `grade11`, `course12`, `score12`, `unit12`, `grade12`, `course13`, `score13`, `unit13`, `grade13`, `course14`, `score14`, `unit14`, `grade14`, `course15`, `score15`, `unit15`, `grade15`, `course16`, `score16`, `unit16`, `grade16`, `course17`, `score17`, `unit17`, `grade17`, `course18`, `score18`, `unit18`, `grade18`, `course19`, `score19`, `unit19`, `grade19`, `course20`, `score20`, `unit20`, `grade20`) VALUES
(1, '456rftg', 'maths', '78', '2', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '56789iuj', '67', '56', '3', 'C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '67gjjd', 'gst', '88', '2', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '55trtgt', 'MATHS', '56', '4', 'C', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '4567fghj', 'English', '78', '2', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `secondsemester5`
--

CREATE TABLE `secondsemester5` (
  `id` int(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `course1` varchar(225) NOT NULL,
  `score1` varchar(225) NOT NULL,
  `unit1` varchar(225) NOT NULL,
  `grade1` varchar(225) NOT NULL,
  `course2` varchar(225) NOT NULL,
  `score2` varchar(225) NOT NULL,
  `unit2` varchar(225) NOT NULL,
  `grade2` varchar(225) NOT NULL,
  `course3` varchar(225) NOT NULL,
  `score3` varchar(225) NOT NULL,
  `unit3` varchar(225) NOT NULL,
  `grade3` varchar(225) NOT NULL,
  `course4` varchar(225) NOT NULL,
  `score4` varchar(225) NOT NULL,
  `unit4` varchar(225) NOT NULL,
  `grade4` varchar(225) NOT NULL,
  `course5` varchar(225) NOT NULL,
  `score5` varchar(225) NOT NULL,
  `unit5` varchar(225) NOT NULL,
  `grade5` varchar(225) NOT NULL,
  `course6` varchar(225) NOT NULL,
  `score6` varchar(225) NOT NULL,
  `unit6` varchar(225) NOT NULL,
  `grade6` varchar(225) NOT NULL,
  `course7` varchar(225) NOT NULL,
  `score7` varchar(225) NOT NULL,
  `unit7` varchar(225) NOT NULL,
  `grade7` varchar(225) NOT NULL,
  `course8` varchar(225) NOT NULL,
  `score8` varchar(225) NOT NULL,
  `unit8` varchar(225) NOT NULL,
  `grade8` varchar(225) NOT NULL,
  `course9` varchar(225) NOT NULL,
  `score9` varchar(225) NOT NULL,
  `unit9` varchar(225) NOT NULL,
  `grade9` varchar(225) NOT NULL,
  `course10` varchar(225) NOT NULL,
  `score10` varchar(225) NOT NULL,
  `unit10` varchar(225) NOT NULL,
  `grade10` varchar(225) NOT NULL,
  `course11` varchar(225) NOT NULL,
  `score11` varchar(225) NOT NULL,
  `unit11` varchar(225) NOT NULL,
  `grade11` varchar(225) NOT NULL,
  `course12` varchar(225) NOT NULL,
  `score12` varchar(225) NOT NULL,
  `unit12` varchar(225) NOT NULL,
  `grade12` varchar(225) NOT NULL,
  `course13` varchar(225) NOT NULL,
  `score13` varchar(225) NOT NULL,
  `unit13` varchar(225) NOT NULL,
  `grade13` varchar(225) NOT NULL,
  `course14` varchar(225) NOT NULL,
  `score14` varchar(225) NOT NULL,
  `unit14` varchar(225) NOT NULL,
  `grade14` varchar(225) NOT NULL,
  `course15` varchar(225) NOT NULL,
  `score15` varchar(225) NOT NULL,
  `unit15` varchar(225) NOT NULL,
  `grade15` varchar(225) NOT NULL,
  `course16` varchar(225) NOT NULL,
  `score16` varchar(225) NOT NULL,
  `unit16` varchar(225) NOT NULL,
  `grade16` varchar(225) NOT NULL,
  `course17` varchar(225) NOT NULL,
  `score17` varchar(225) NOT NULL,
  `unit17` varchar(225) NOT NULL,
  `grade17` varchar(225) NOT NULL,
  `course18` varchar(225) NOT NULL,
  `score18` varchar(225) NOT NULL,
  `unit18` varchar(225) NOT NULL,
  `grade18` varchar(225) NOT NULL,
  `course19` varchar(225) NOT NULL,
  `score19` varchar(225) NOT NULL,
  `unit19` varchar(225) NOT NULL,
  `grade19` varchar(225) NOT NULL,
  `course20` varchar(225) NOT NULL,
  `score20` varchar(225) NOT NULL,
  `unit20` varchar(225) NOT NULL,
  `grade20` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(225) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `institution` varchar(225) NOT NULL,
  `department` varchar(225) NOT NULL,
  `matnumber` varchar(225) NOT NULL,
  `year` varchar(225) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `institution`, `department`, `matnumber`, `year`, `time`, `password`) VALUES
(37, 'Amadi Austin Chukwuemeka', 'rexsteroxy22@gmail.com', 'Imo state university owerri', 'Computer science', '16/38170', '2016', '2019-02-01 10:41:14', '$2y$10$0xXK5wlEK7lcZgtjkDBCvOr6QWLB3g9ZoG9oKT9K93LkVp6JW8IyK'),
(38, 'Emeto Winner Uzoma', 'emeto@gmail.com', 'imsu', 'computer science', '16/35466', '2016', '2019-02-01 10:43:42', '$2y$10$d2BndCnkWW7U89Zx4IzhzuQmud2WvWqCrGNr0Y7lZ0rbDUd8Xr2B.'),
(39, 'Akuneho', 'aku@gmail.com', 'imsu', 'computer', '1222', '2017', '2019-02-01 15:20:58', '$2y$10$Zn/moNMB0aeWVc0r4.b6jui4FQxXG9qN6PTt7Y4SPvkRKaRc9aW1y'),
(40, 'vivian', 'vivian@gmail.com', 'imsu', 'comouter\\', '22333', '2017', '2019-02-01 15:22:05', '$2y$10$2zp7GWpsGKdliLtRR7jxbeCFvXyz1X8U7Hc9A4Vbmi36.Roybvd1S'),
(41, 'Emmanuel', 'nuel@gmai.com', 'imsu', 'computer science', '5667', '2009', '2019-02-01 15:23:14', '$2y$10$C3JSUAWiF4S/szdbneAPAOXm/hwD4eEYJqf3A45vK1/3ilvQ84Se6'),
(42, 'junk', 'rexsteroxy22@gmail.com', 'imsu', 'computer science', '56789', '2009', '2019-02-01 15:24:37', '$2y$10$5iuRxY6bokN0qJTkpvLgT.vMqO4u.vIK6sneXYGj2KZ.56cAzirAC'),
(43, 'junk', 'junk@gmail.com', 'futo s', 'comouter\\', '1234', '2009', '2019-02-01 15:25:31', '$2y$10$L0QLoGcmwxRjrA11/rT32utTaRX.ZtyEUlVfOiVn5gGCvYh9CDR7C'),
(44, 'Judith', 'rexsteroxy22@gmail.com', 'Imo state university owerri', 'microbiologyd', '456789098', '2009', '2019-02-01 15:26:15', '$2y$10$7GJySrwVLUSFET1IMslSHODIKdWkLqaZE0puVg.Mv3g8P9sYaI5ey'),
(45, 'sandra', 'sandra@gmail.com', 'Imo state university owerri', 'Accountancy', '34455', '2009', '2019-02-01 15:27:53', '$2y$10$fz9k7.e7Nz5TAFS7WE8xuO1ZJHdbwK8VWZj6DAVC7sey6VyTIcNG6'),
(46, 'Amadi Austin Chukwuemeka', 'rexsteroxy22@gmail.com', 'Imo state university owerri', 'computer science', '87564', '2009', '2019-02-01 15:29:02', '$2y$10$Rmd60hzO/5Z2PjpdVQYWe.nWqWwFSyOXa3IRP6hQTBS35OzsSVqf6'),
(47, 'Amadi Austin Chukwuemeka', 'rexsteroxy22@gmail.com', 'Imo state university owerri', 'computer', '95678457494', '2009', '2019-02-01 15:29:32', '$2y$10$HCFQsulq.lfFrD2LPlyFhOC0Sw5u/8CLAPW5HYW.mz9YbdvDWCX/y'),
(48, 'Amadi Austin Chukwuemeka', 'rexsteroxy22@gmail.com', 'futo s', 'microbiologyd', '23333', '2009', '2019-02-01 15:30:20', '$2y$10$5sRJXYKRIl0M3QobMO/Pd.AlaZRIBHa6glEyuMXm/bTk7O.zb92fq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `firstsemester`
--
ALTER TABLE `firstsemester`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `firstsemester2`
--
ALTER TABLE `firstsemester2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `firstsemester3`
--
ALTER TABLE `firstsemester3`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `firstsemester4`
--
ALTER TABLE `firstsemester4`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `firstsemester5`
--
ALTER TABLE `firstsemester5`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `secondsemester`
--
ALTER TABLE `secondsemester`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `secondsemester2`
--
ALTER TABLE `secondsemester2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `secondsemester3`
--
ALTER TABLE `secondsemester3`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `secondsemester4`
--
ALTER TABLE `secondsemester4`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `secondsemester5`
--
ALTER TABLE `secondsemester5`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matnumber` (`matnumber`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `year` (`year`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `firstsemester`
--
ALTER TABLE `firstsemester`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `firstsemester2`
--
ALTER TABLE `firstsemester2`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `firstsemester3`
--
ALTER TABLE `firstsemester3`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `firstsemester4`
--
ALTER TABLE `firstsemester4`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `firstsemester5`
--
ALTER TABLE `firstsemester5`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `secondsemester`
--
ALTER TABLE `secondsemester`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `secondsemester2`
--
ALTER TABLE `secondsemester2`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `secondsemester3`
--
ALTER TABLE `secondsemester3`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `secondsemester4`
--
ALTER TABLE `secondsemester4`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `secondsemester5`
--
ALTER TABLE `secondsemester5`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
