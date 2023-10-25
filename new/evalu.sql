-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 09:38 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evalu`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Id` text NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Id`, `Name`, `Password`) VALUES
('f101', 'Gandhiraja', '101'),
('f102', 'Kangaiammal', '102'),
('f103', 'Senthamarai', '103'),
('f104', 'Rajalakshmi', '104'),
('f105', 'Druga', '105');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `paper_name` varchar(30) NOT NULL,
  `regno` text NOT NULL,
  `total_mark` int(10) NOT NULL,
  `obtained_mark` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE `papers` (
  `paper_code` text NOT NULL,
  `paper_name` text NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`paper_code`, `paper_name`, `path`) VALUES
('s34', 'suma', 'C:/xampp/htdocs/xampp/new/pdf/aruncv.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `name` varchar(20) NOT NULL,
  `regno` text NOT NULL,
  `class` text NOT NULL,
  `subject` text NOT NULL,
  `path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `regno`, `class`, `subject`, `path`) VALUES
('sarankumar M', '22PCA242515', 'II-MCA', 'Data Science Uing R', 'C:/xampp/htdocs/evaluvation/pdf/aruncv.pdf'),
('tamil', '22pca242513', 'I-MCA', 'Operation Research', 'C:/xampp/htdocs/evaluvation/pdf/aruncv.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `course_code` text NOT NULL,
  `paper_name` text NOT NULL,
  `class` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`course_code`, `paper_name`, `class`) VALUES
('21PCA01', 'Discrete Steuctures', 'I-MCA'),
('21PCA02', 'Data Structures and Alogritham', 'I-MCA'),
('21PCA03', 'RDBMS', 'I-MCA'),
('21PCA04', 'Programing in Python', 'I-MCA'),
('21PCAMC', 'Advanced Operating systems', 'I-MCA'),
('21RAC01', 'Intellectual property Rights', 'I-MCA'),
('21PCA05', 'Computer Oriented Numerical and Statistical Methods', 'I-MCA'),
('21PCA06', 'Computer architecture', 'I-MCA'),
('21PCA07', 'programing in java', 'I-MCA'),
('21PCA08', 'Open Source Software', 'I-MCA'),
('21PCAME', 'Social Network Mining and Analysis ', 'I-MCA'),
('21RAC02', 'Research Writing', 'I-MCA'),
('21PCA09', 'Operation Research', 'II-MCA'),
('21PCA10', 'Programming in .NET', 'II-MCA'),
('21PCA11', 'Cloud Computing ang Big Data', 'II-MCA'),
('21PCAMK', 'Data Science Uing R', 'II-MCA'),
('21PCACN', 'Management Information System', 'II-MCA'),
('21RAC03', 'Research and Publication Ethics', 'II-MCA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
