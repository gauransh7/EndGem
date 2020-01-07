-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 01:12 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `img`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `branch_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `status`, `branch_name`) VALUES
(0, 1, 'common subjects'),
(1, 1, 'Architecture'),
(2, 1, 'Biotechnology'),
(3, 1, 'Chemical '),
(4, 1, 'Polymer Science'),
(5, 1, 'Civil '),
(6, 1, 'Electrical'),
(7, 1, 'Electronics & Communication'),
(8, 1, 'Computer Science '),
(9, 1, 'Mechanical'),
(10, 1, 'Production & Industrial'),
(11, 1, ' Metallurgical & Materials'),
(12, 1, 'Engineering Physics');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `post_title` varchar(50) NOT NULL,
  `post_dis` text NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `downloads` int(11) NOT NULL,
  `user_enrol` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_title`, `post_dis`, `content`, `status`, `created`, `downloads`, `user_enrol`, `branch_id`, `type_id`, `sub_id`) VALUES
(17, 'Quantum Chemistry', '<p>Quantum Chemistry notes</p>\r\n', 'phy..pdf', 1, '2019-12-28 15:19:25', 3, 19112029, 3, 83, 4),
(19, 'Quantum Chemistry', '<p>Quantum Chemistry notes</p>\r\n', 'phy..pdf', 1, '2019-12-28 16:29:01', 3, 19112029, 3, 4, 83),
(20, 'introduction', '<p>Introduction to chemical engineering pdf .</p>\r\n', '1. introduction to chemical engg.pdf', 1, '2020-01-04 07:44:19', 4, 90909009, 3, 1, 84),
(21, 'Classes and Objects', '<p>Classes and Objects</p>\r\n', 'L23_L24_Class-Projects.pdf', 1, '2020-01-04 21:33:17', 4, 19000000, 3, 1, 85),
(22, 'Class const keyword and composition', '<p>Class const keyword and composition.</p>\r\n', 'L25_Class-const keyword and composition.pptx', 1, '2020-01-04 21:35:14', 4, 19000000, 3, 1, 85),
(23, 'Class static and friend members', '<p>Class static and friend members.</p>\r\n', 'L26_Class-static and friend members.pdf', 1, '2020-01-04 21:35:59', 0, 19000000, 3, 1, 85),
(24, 'Class operator overloading', '<p>Class operator overloading.</p>\r\n', 'L27_Class-operator overloading.pdf', 1, '2020-01-04 21:36:39', 0, 19000000, 3, 1, 85),
(25, 'L28_Class-conversion constructor and explicit keyw', '<p>L28_Class-conversion constructor and explicit keyword.</p>\r\n', 'L28_Class-conversion constructor and explicit keyword.pdf', 1, '2020-01-04 21:37:21', 0, 19000000, 3, 1, 84),
(26, 'L29_Class-Virtual-functions', '<p>L29_Class-Virtual-functions</p>\r\n', 'L29_Class-Virtual-functions.pdf', 1, '2020-01-04 21:37:52', 0, 19000000, 3, 1, 85),
(27, 'Control_Structures', '<p>Control_Structures</p>\r\n', 'lectut_CHN-103_pdf_L07_L08_Control_Structures.pdf', 1, '2020-01-04 21:38:30', 0, 19000000, 3, 1, 85),
(28, 'Arrays_and_Pointers', '<p>Arrays_and_Pointers.</p>\r\n', 'lectut_CHN-103_pdf_L11_Arrays_and_Pointers.pdf', 1, '2020-01-04 21:39:05', 0, 19000000, 3, 1, 85),
(29, 'Finctions', '<p>Functions</p>\r\n', 'lectut_CHN-103_pdf_L17_Functions.pdf', 1, '2020-01-04 21:39:38', 0, 19000000, 3, 1, 85),
(30, 'typedef__enum_and_struct', '<p>typedef__enum_and_struct</p>\r\n', 'lectut_CHN-103_pdf_L18_typedef__enum_and_struct (1).pdf', 1, '2020-01-04 21:40:13', 0, 19000000, 3, 1, 85),
(31, 'struct_bitfields__union_and_class', '<p>struct_bitfields__union_and_class</p>\r\n', 'lectut_CHN-103_pdf_L19_struct_bitfields__union_and_class.pdf', 1, '2020-01-04 21:40:46', 4, 19000000, 3, 1, 85),
(32, 'introduction 2', '', '2.Intro to ChE.pdf', 1, '2020-01-07 06:22:00', 0, 0, 3, 1, 84),
(33, 'introduction 2', '<p>..</p>\r\n', '2.Intro to ChE.pdf', 1, '2020-01-07 06:23:59', 0, 19000000, 3, 1, 84),
(34, 'fluid flow', '', 'Fuid flow.pptx', 1, '2020-01-07 15:47:20', 0, 19112060, 3, 1, 84);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `sub_code` varchar(10) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `branch_id`, `sub_code`, `sub_name`, `sem`) VALUES
(1, 7, 'PHN-005', 'Electrodynamics and ', 1),
(2, 7, 'PHN-005', 'Introduction to Elec', 1),
(3, 7, 'CSN-103', 'Fundamentals of Obje', 1),
(4, 7, 'PHN-006', 'Quantum Mechanics an', 2),
(5, 7, 'CSN-102', 'Data Structures', 2),
(6, 7, 'ECN-104', 'Digital Logic Design', 2),
(7, 7, 'ECN-142', 'Semiconductor Device', 2),
(8, 7, 'EEN-112', 'Electrical Science', 2),
(9, 8, 'PHN-005', 'Electrodynamics and ', 1),
(10, 8, 'CSN-101', 'Introduction to Comp', 1),
(11, 8, 'CSN-103', 'Fundamentals of Obje', 1),
(12, 8, 'MAN-010', 'Optimization Techniq', 2),
(13, 8, 'PHN-006', 'Quantum Mechanics an', 2),
(14, 8, 'ECN-104', 'Digital Logic Design', 2),
(15, 8, 'CSN-106', 'Discrete Structures', 2),
(16, 8, 'CSN-102', 'Data Structures', 2),
(17, 8, 'ECN-102', 'Fundamentals of  Ele', 2),
(18, 9, 'PHN-001', 'Mechanics', 1),
(19, 9, 'MIN-101A', 'Introduction to Mech', 1),
(20, 9, 'MIN-103', 'Programming and Data', 1),
(21, 9, 'MAN-004', 'Numerical Methods', 2),
(22, 9, 'PHN-008', 'Electromagnetic Theo', 2),
(23, 9, 'MIN-104', 'Manufacturing Techno', 2),
(24, 9, 'MIN-106', 'Engineering Thermody', 2),
(25, 9, 'MIN-108', 'Mechanical Engineeri', 2),
(26, 9, 'MTN-106', 'Material Science', 2),
(27, 10, 'PHN-001', 'Mechanics', 1),
(28, 10, 'MIN-101B', 'Introduction to Prod', 1),
(29, 10, 'MIN-103', 'Programming and Data', 1),
(30, 10, 'MAN-006', 'Probability and Stat', 2),
(31, 10, 'PHN-008', 'Electromagnetic Theo', 2),
(32, 10, 'MIN-104', 'Manufacturing Techno', 2),
(33, 10, 'MIN-108', 'Engineering drawing', 2),
(34, 10, 'MIN-118', 'Fluid Mechanics', 2),
(35, 10, 'MTN-106', 'Material Science', 2),
(45, 11, 'PHN-007', 'Modern Physics', 1),
(46, 11, 'MTN-101', 'Introduction to Metallurgical and Materials Engine', 1),
(47, 11, 'MTN-103', 'Computer Programming', 1),
(48, 11, 'CYN-006', 'General Chemistry-II', 2),
(49, 11, 'MAN-002', 'Mathematical Methods', 2),
(50, 11, 'MTN-102', 'Metallurgical Thermodynamics and Kinetics', 2),
(51, 11, 'MTN-104', 'Structural Metallurgy', 2),
(52, 11, 'MTN-110', 'Metallography Lab', 2),
(53, 11, 'MIN-108', 'Mechanical Engineering Drawing', 2),
(54, 12, 'PHN-101', 'Introduction to Engineering Physic', 1),
(55, 12, 'PHN-103', 'Computer Programmin', 1),
(56, 12, 'CYN-001', 'Physical Chemistry', 1),
(57, 12, 'MAN-010', 'Optimization Techniques', 2),
(58, 12, 'PHN-008', 'Electromagnetic Theory ', 2),
(59, 12, 'PHN-102', 'Analog Electronics ', 2),
(60, 12, 'PHN-104', 'Mechanics and Relativity', 2),
(61, 12, 'EEN-112', 'Electrical Science', 2),
(62, 12, 'CYN-002', 'Organic and Inorganic Chemistr', 2),
(63, 1, 'ARN-101 I', 'Introduction to Architecture', 1),
(64, 1, 'ARN-103', 'Visual Art I', 1),
(65, 1, 'ARN-105', 'Architectural Graphics I', 1),
(66, 1, 'ARN-107', 'Basic Design and Creative Workshop I', 1),
(67, 1, 'ARN-102', 'Architectural Design I', 2),
(68, 1, 'ARN-104', 'Introduction to Building Materials and Constructio', 2),
(69, 1, 'ARN-106', 'Architectural Graphics II', 2),
(70, 1, 'ARN-108', 'Climatology in Architecture', 2),
(71, 1, 'ARN-110', 'Visual Art & Creative Workshop II', 2),
(72, 1, 'ARN-112', 'Computer Systems and Programming', 2),
(73, 1, 'CEN-192', 'Geomatics Techniques for Architects', 2),
(74, 2, 'PHN-007', 'Modern Physics', 1),
(75, 2, 'BTN-101', 'Introduction to Biotechnology', 1),
(76, 2, 'BTN-103', 'Computer Programming', 1),
(77, 2, 'MAN- 002', 'Mathematical Methods', 2),
(78, 2, 'BTN-102', 'Process Calculations', 2),
(79, 2, 'BTN-104', 'Cell Biology', 2),
(80, 2, 'BTN-106', 'Biochemistry', 2),
(81, 2, 'CYN-002', 'Organic and Inorganic Chemistry', 2),
(82, 2, 'MIN-102', 'Basic Manufacturing Processes', 2),
(83, 3, 'CYN-001', 'Physical Chemistry', 1),
(84, 3, 'CHN-101', 'Introduction to Chemical Engineering', 1),
(85, 3, 'CHN-103', 'Computer Programming and Numerical Methods', 1),
(86, 3, 'CYN-002', 'Organic and Inorganic Chemistry', 2),
(87, 3, 'MAN-002', 'Mathematical Methods', 2),
(88, 3, 'CHN-102', 'Material and Energy Balance', 2),
(89, 3, 'CHN-104', 'Fluid Dynamics', 2),
(90, 3, 'CHN-106', 'Thermodynamics and Chemical Kinetics', 2),
(91, 3, 'EEN-112', 'Electrical Science', 2),
(92, 4, 'PEN-101', 'Introduction to Polymer Science and Engineering', 1),
(93, 4, 'CYN-009', 'Polymer Chemistry', 1),
(94, 4, 'PEN-103', 'Computer Programming and Numerical Methods', 1),
(95, 4, 'MAN-002', 'Mathematical Methods', 2),
(96, 4, 'CHN-102', 'Material and Energy Balance', 2),
(97, 4, 'CHN-106', 'Thermodynamics and Chemical Kinetics', 2),
(98, 4, 'PEN-102', 'Properties of Polymers', 2),
(99, 4, 'CYN-011', 'Polymer Characterization', 2),
(100, 4, 'EEN-112', 'Electrical Science', 2),
(101, 4, 'CYN-013', 'Polymer Chemistry Lab', 2),
(102, 5, 'PHN-001', 'Mechanics', 1),
(103, 5, 'CEN-101', 'Introduction to Civil Engineering', 1),
(104, 5, 'CEN-103', 'Numerical Methods and Computer Programming', 1),
(105, 5, 'CYN-008', 'General Chemistry - III', 2),
(106, 5, 'MAN-006', 'Probability and Statistics', 2),
(107, 5, 'CEN-102', 'Solid Mechanics', 2),
(108, 5, 'CEN-104', 'Water Supply Engineering', 2),
(109, 5, 'CEN-106', 'Geomatics Engineering – I', 2),
(110, 5, 'CEN-108', 'Fluid Mechanics5', 2),
(111, 6, 'PHN-003', 'Electromagnetic Field Theory', 1),
(112, 6, 'EEN-101', 'Introduction to Electrical Engineering', 1),
(113, 6, 'EEN-103', 'Programming in C++', 1),
(114, 6, 'MAN-002', 'Mathematics-II ', 2),
(115, 6, 'PHN-004', 'Modern Physics', 2),
(116, 6, 'MIN-106', 'Engineering Thermodynamics', 2),
(117, 6, 'EEN-102', 'Network Theory', 2),
(118, 6, 'EEN-104', 'Electrical Measurement and Measuring Instruments', 2),
(119, 6, 'EEN-106', 'Analog Electronics', 2);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`, `status`) VALUES
(1, 'Slides', 1),
(2, 'Assignments', 1),
(3, 'PYQP', 1),
(4, 'Notes', 1),
(5, 'Others', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_name` varchar(50) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `posts` int(11) NOT NULL,
  `user_enrol` int(8) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `branch_id`, `created`, `status`, `posts`, `user_enrol`, `password`) VALUES
('0', 3, '2019-12-28 16:28:12', 1, 0, 19112029, 'trial'),
('0', 6, '2019-12-28 16:32:22', 1, 0, 19112020, 'trial'),
('0', 3, '2019-12-28 16:34:37', 1, 0, 19112046, 'trial'),
('0', 2, '2019-12-28 16:36:14', 1, 0, 19112021, 'trial'),
('0', 2, '2019-12-28 16:36:46', 1, 0, 19112021, 'trial'),
('0', 1, '2019-12-28 16:40:07', 1, 0, 19112280, 'trial'),
('0', 1, '2019-12-28 16:40:50', 1, 0, 19112280, 'trial'),
('0', 1, '2019-12-28 16:41:19', 1, 0, 19111200, 'trial'),
('0', 2, '2019-12-28 16:48:58', 1, 0, 19112227, 'trial'),
('0', 2, '2019-12-28 16:51:32', 1, 0, 19112227, 'trial'),
('0', 2, '2019-12-28 16:51:38', 1, 0, 19112227, 'trial'),
('0', 2, '2019-12-28 16:52:19', 1, 0, 19112227, 'trial'),
('0', 10, '2019-12-30 04:09:03', 1, 0, 19111111, 'trial'),
('0', 9, '2019-12-30 18:30:44', 1, 0, 19112034, 'trial'),
('0', 7, '2019-12-30 18:34:15', 1, 0, 19113434, 'trial'),
('0', 7, '2019-12-30 18:36:06', 1, 0, 19113434, 'trial'),
('0', 7, '2019-12-30 18:41:41', 1, 0, 19122222, 'trial'),
('0', 7, '2019-12-30 18:41:44', 1, 0, 19122222, 'trial'),
('0', 7, '2019-12-30 18:41:45', 1, 0, 19122222, 'trial'),
('0', 7, '2019-12-30 18:41:45', 1, 0, 19122222, 'trial'),
('0', 7, '2019-12-30 18:41:45', 1, 0, 19122222, 'trial'),
('0', 7, '2019-12-30 18:41:45', 1, 0, 19122222, 'trial'),
('0', 7, '2019-12-30 18:41:45', 1, 0, 19122222, 'trial'),
('0', 7, '2019-12-30 18:41:46', 1, 0, 19122222, 'trial'),
('0', 7, '2019-12-30 18:41:46', 1, 0, 19122222, 'trial'),
('0', 7, '2019-12-30 18:41:46', 1, 0, 19122222, 'trial'),
('0', 7, '2019-12-30 18:41:48', 1, 0, 19122222, 'trial'),
('0', 7, '2019-12-30 18:41:49', 1, 0, 19122222, 'trial'),
('0', 7, '2019-12-30 18:41:49', 1, 0, 19122222, 'trial'),
('0', 7, '2019-12-30 18:42:05', 1, 0, 19122222, 'trial'),
('0', 6, '2019-12-31 07:14:35', 1, 0, 19111111, 'tr'),
('0', 6, '2019-12-31 07:14:37', 1, 0, 19111111, 'tr'),
('0', 6, '2019-12-31 07:14:38', 1, 0, 19111111, 'tr'),
('0', 6, '2019-12-31 07:14:38', 1, 0, 19111111, 'tr'),
('0', 6, '2019-12-31 07:14:38', 1, 0, 19111111, 'tr'),
('0', 6, '2019-12-31 07:14:39', 1, 0, 19111111, 'tr'),
('0', 6, '2019-12-31 07:14:39', 1, 0, 19111111, 'tr'),
('0', 6, '2019-12-31 07:14:39', 1, 0, 19111111, 'tr'),
('0', 6, '2019-12-31 07:14:41', 1, 0, 19111111, 'tr'),
('0', 6, '2019-12-31 07:14:41', 1, 0, 19111111, 'tr'),
('0', 6, '2019-12-31 07:14:41', 1, 0, 19111111, 'tr'),
('0', 6, '2019-12-31 07:14:41', 1, 0, 19111111, 'tr'),
('0', 6, '2019-12-31 07:14:42', 1, 0, 19111111, 'tr'),
('0', 6, '2019-12-31 07:14:42', 1, 0, 19111111, 'tr'),
('0', 6, '2019-12-31 07:14:42', 1, 0, 19111111, 'tr'),
('0', 6, '2019-12-31 07:14:44', 1, 0, 19111111, 'tr'),
('0', 6, '2019-12-31 07:14:45', 1, 0, 19111111, 'tr'),
('0', 6, '2019-12-31 07:14:49', 1, 0, 19111111, 'tr'),
('0', 6, '2019-12-31 07:14:59', 1, 0, 19111111, 'trialk'),
('0', 6, '2019-12-31 07:15:00', 1, 0, 19111111, 'trialk'),
('0', 6, '2019-12-31 07:15:00', 1, 0, 19111111, 'trialk'),
('0', 6, '2019-12-31 07:22:22', 1, 0, 19113434, 'prakhar'),
('0', 1, '2019-12-31 07:24:01', 1, 0, 89898989, 'jayesh'),
('0', 6, '2019-12-31 07:27:45', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:47', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:48', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:48', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:48', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:48', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:49', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:49', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:49', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:51', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:51', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:51', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:55', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:55', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:56', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:56', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:56', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:56', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:56', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:57', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:57', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:57', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:57', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:27:58', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:28:16', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:28:16', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:28:17', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:28:17', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:28:17', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:28:18', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:28:18', 1, 0, 23232323, 'kartik'),
('0', 6, '2019-12-31 07:28:18', 1, 0, 23232323, 'kartik'),
('0', 4, '2019-12-31 07:28:59', 1, 0, 23222222, 'kartik'),
('0', 4, '2019-12-31 07:29:00', 1, 0, 23222222, 'kartik'),
('0', 4, '2019-12-31 07:29:00', 1, 0, 23222222, 'kartik'),
('0', 4, '2019-12-31 07:29:00', 1, 0, 23222222, 'kartik'),
('0', 4, '2019-12-31 07:29:00', 1, 0, 23222222, 'kartik'),
('0', 4, '2019-12-31 07:29:01', 1, 0, 23222222, 'kartik'),
('0', 4, '2019-12-31 07:29:01', 1, 0, 23222222, 'kartik'),
('0', 4, '2019-12-31 07:29:01', 1, 0, 23222222, 'kartik'),
('0', 4, '2019-12-31 07:29:01', 1, 0, 23222222, 'kartik'),
('0', 4, '2019-12-31 07:29:01', 1, 0, 23222222, 'kartik'),
('0', 4, '2019-12-31 07:29:02', 1, 0, 23222222, 'kartik'),
('0', 7, '2019-12-31 07:30:43', 1, 0, 34343434, 'kartik'),
('mrinal', 3, '2020-01-02 16:00:46', 1, 0, 19112046, 'trial'),
('ankit', 3, '2020-01-02 16:01:24', 1, 0, 19112016, 'trial'),
('harsh', 9, '2020-01-03 07:35:47', 1, 0, 19000000, 'trial'),
('manish', 5, '2020-01-04 05:27:34', 1, 0, 19898989, 'trial'),
('jatin', 5, '2020-01-04 07:39:17', 1, 0, 90909009, 'trial'),
('dhruv', 3, '2020-01-07 15:46:06', 1, 0, 19112060, 'trial');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
