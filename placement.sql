-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 05:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `fname` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rollno` varchar(8) NOT NULL,
  `batchof` int(11) NOT NULL,
  `phone` text NOT NULL,
  `linkedin` text NOT NULL,
  `job` text NOT NULL,
  `company` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`fname`, `password`, `email`, `rollno`, `batchof`, `phone`, `linkedin`, `job`, `company`) VALUES
('alumnus1', '$2y$10$hEvZ6XieWN3ykVzgW1ODVuzK5mBvuvyKM1J4GWRtzv7Mx1UdhaWOa', 'alum1@gmail.com', '1801CS40', 2018, '4281907307', 'alum1link.com', 'Quant analyst', 'comp6'),
('Dev', '$2y$10$AqienNShdlDDGeodZQB0DurnsvmHhzJdEbUt5DaA7b1KB7TKTccaq', 'devendra2211AI13@iitp.ac.in', '2211AI13', 2020, '8923157629', 'demo_linkedin/Dev', 'SDE', 'Microsoft'),
('Devendra Pratap Singh', '$2y$10$QA6oWV9XRYQ.HDsQKobe9OZ303PE8KnNuPB5o2sKqUUAk/MlaJylW', 'devendra_2111ai13@iitp.ac.in', '2101AI16', 2020, '8923157629', 'devendra@linkedin', 'SDE', 'Google');

-- --------------------------------------------------------

--
-- Table structure for table `amazon_53`
--

CREATE TABLE `amazon_53` (
  `rollno` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `announcement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`time`, `announcement`) VALUES
('2023-04-17 22:04:09', 'Hello Students ! Welcome to Our TPC Portal !'),
('2023-04-18 16:04:03', 'hello this is 2nd announcement'),
('2023-04-19 00:26:42', 'HELLO this is a announcement by admin'),
('2023-04-19 11:05:37', 'complan piya kro'),
('2023-04-29 10:48:12', 'demo_announement'),
('2023-05-12 15:52:26', 'yeh nayi announcement hai');

-- --------------------------------------------------------

--
-- Table structure for table `apple_50`
--

CREATE TABLE `apple_50` (
  `rollno` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `apple_51`
--

CREATE TABLE `apple_51` (
  `rollno` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `apple_52`
--

CREATE TABLE `apple_52` (
  `rollno` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comp1_43`
--

CREATE TABLE `comp1_43` (
  `rollno` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comp1_43`
--

INSERT INTO `comp1_43` (`rollno`) VALUES
('2101AI59');

-- --------------------------------------------------------

--
-- Table structure for table `comp1_44`
--

CREATE TABLE `comp1_44` (
  `rollno` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `phone` text NOT NULL,
  `website` text NOT NULL,
  `rep_name` varchar(100) NOT NULL,
  `rep_phone` text NOT NULL,
  `rep_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `email`, `password`, `description`, `phone`, `website`, `rep_name`, `rep_phone`, `rep_email`) VALUES
(7, 'Amazon', 'amazon@gmail.com', '$2y$10$gF4WdXyirEDPJnogb8b0Se2nwmQ/faa1SdI8R4CXABHsUanhxFEmK', 'we provide a to z ', '1234567890', 'amazon.in', 'jeff', '9876543210', 'jeff@amazon.com'),
(10, 'Apple', 'apple@gmail.com', '$2y$10$Kzfc2f7oSga7XGZ.aBoXzuSgx61uTuRjBEK614ZkUruZQ2gcP..s6', 'tera ghar jayega issme', '8211441244', 'apple.in', 'Pure Gold', '8923151624', 'puregold@webdev.com'),
(4, 'Microsoft', 'microsoft@yahoo.com', '$2y$10$iaf8RNSnmXpUjfnZon2Q7Ovnuvqb34Hv8YkNqnH.8Jr25WGrzxDca', 'we are the best12', '8923157629', 'microsoft.in', 'tony kakkar', '999888', 'tony@besura.com'),
(9, 'Netflix', 'netflixandchill@gmail.com', '$2y$10$zony1gHUYPNaE1HoVc6AFOXSc01bg9U5QZzGyuNwyWtWxHLhfbsAe', 'just chill bro', '8923156297', 'netflix.in', 'devendra', '8923157629', 'devendra@gmail.com'),
(8, 'Tesla', 'tesla@gmail.com', '$2y$10$3XO.y/z/3evvGz1B94z9pOJvFyR3n04gCijtgbsEr6p7O7/wNPcYq', 'we will go to mars', '9187623569', 'tesla.in', 'elon musk', '8923157620', 'musk@coconut.com');

-- --------------------------------------------------------

--
-- Table structure for table `company2`
--

CREATE TABLE `company2` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `jobprofile` varchar(100) NOT NULL,
  `jobtype` varchar(100) NOT NULL,
  `salary` int(11) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `class10` decimal(4,2) NOT NULL,
  `class12` decimal(4,2) NOT NULL,
  `sem6` decimal(4,2) NOT NULL,
  `eligible-branch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company2`
--

INSERT INTO `company2` (`id`, `email`, `role_id`, `jobtitle`, `jobprofile`, `jobtype`, `salary`, `skill`, `date`, `class10`, `class12`, `sem6`, `eligible-branch`) VALUES
(9, 'netflixandchill@gmail.com', 43, 'Software Engineer', 'ongoing', 'IT', 950000, 'webdev', '2023-04-30', '65.00', '65.00', '6.50', 11),
(9, 'netflixandchill@gmail.com', 44, 'Product Manager', 'ongoing', 'IT', 1200000, 'webdev,cp,ml', '2023-04-30', '75.00', '70.00', '7.00', 127),
(9, 'netflixandchill@gmail.com', 45, 'Data Scientist', 'ongoing', 'IT', 100000, 'ml', '2023-04-25', '55.00', '75.00', '8.50', 7),
(9, 'netflixandchill@gmail.com', 46, 'Data Scientist ', 'open', 'IT', 1200000, 'ML', '2023-04-30', '85.00', '85.00', '8.50', 3),
(4, 'microsoft@yahoo.com', 48, 'Software Engineer', 'open', 'IT', 1200000, 'WEBDEV', '2023-04-18', '65.00', '75.00', '8.50', 255),
(4, 'microsoft@yahoo.com', 49, 'Product Manager', 'open', 'Finance', 900000, 'management', '2023-04-29', '75.00', '75.00', '7.00', 63),
(10, 'apple@gmail.com', 50, 'Software Engineer', 'ongoing', 'IT', 1200000, 'WEBDEV,CP', '2023-07-13', '75.00', '75.00', '7.50', 255),
(10, 'apple@gmail.com', 51, 'Data Scientist', 'ongoing', 'IT', 1200000, 'ML', '2023-04-23', '80.00', '80.00', '8.00', 2),
(10, 'apple@gmail.com', 52, 'Product Manager', 'open', 'IT', 100000, 'management', '2023-04-28', '50.00', '70.00', '7.00', 143),
(7, 'amazon@gmail.com', 53, 'SDE', 'ongoing', 'IT', 1220000, 'CP', '2023-05-07', '65.00', '65.00', '6.50', 3);

-- --------------------------------------------------------

--
-- Table structure for table `microsoft_42`
--

CREATE TABLE `microsoft_42` (
  `rollno` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `microsoft_42`
--

INSERT INTO `microsoft_42` (`rollno`) VALUES
('2101AI06'),
('2101AI59');

-- --------------------------------------------------------

--
-- Table structure for table `microsoft_47`
--

CREATE TABLE `microsoft_47` (
  `rollno` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `microsoft_48`
--

CREATE TABLE `microsoft_48` (
  `rollno` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `microsoft_49`
--

CREATE TABLE `microsoft_49` (
  `rollno` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `microsoft_49`
--

INSERT INTO `microsoft_49` (`rollno`) VALUES
('2101CB57');

-- --------------------------------------------------------

--
-- Table structure for table `netflix_43`
--

CREATE TABLE `netflix_43` (
  `rollno` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `netflix_44`
--

CREATE TABLE `netflix_44` (
  `rollno` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `netflix_44`
--

INSERT INTO `netflix_44` (`rollno`) VALUES
('2101AI06');

-- --------------------------------------------------------

--
-- Table structure for table `netflix_45`
--

CREATE TABLE `netflix_45` (
  `rollno` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `netflix_46`
--

CREATE TABLE `netflix_46` (
  `rollno` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `netflix_46`
--

INSERT INTO `netflix_46` (`rollno`) VALUES
('2101ai99');

-- --------------------------------------------------------

--
-- Table structure for table `placed`
--

CREATE TABLE `placed` (
  `student_name` varchar(100) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `ctc` int(11) NOT NULL,
  `branch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recruited`
--

CREATE TABLE `recruited` (
  `name` varchar(100) NOT NULL,
  `rollno` char(8) NOT NULL,
  `year` int(11) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `ctc` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `branch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recruited`
--

INSERT INTO `recruited` (`name`, `rollno`, `year`, `job_title`, `ctc`, `student_name`, `branch`) VALUES
('Google', '1234AB12', 2020, 'Software Engineer', 1000000, 'Alice', 4),
('Microsoft', '5678EF34', 2019, 'Data Scientist', 1200000, 'Bob', 16),
('Apple', '9101IJ56', 2021, 'Product Manager', 1500000, 'Charlie', 64),
('Amazon', '2345MN78', 2018, 'Software Engineer', 900000, 'David', 8),
('Facebook', '6789QR90', 2022, 'Data Scientist', 1100000, 'Eve', 32),
('Tesla', '3456UV12', 2017, 'Product Manager', 1400000, 'Frank', 4),
('Netflix', '7890YZ34', 2016, 'Software Engineer', 950000, 'Grace', 16),
('IBM', '1234CD56', 2023, 'Data Scientist', 1300000, 'Henry', 8),
('Intel', '5678FG78', 2022, 'Product Manager', 1200000, 'Isabella', 32),
('Oracle', '9101KL90', 2015, 'Software Engineer', 1100000, 'Jack', 16),
('Cisco', '2345OP12', 2024, 'Data Scientist', 1400000, 'Katherine', 64),
('HP', '6789ST34', 2023, 'Product Manager', 1300000, 'Leo', 8),
('Dell', '3456UV56', 2014, 'Software Engineer', 1500000, 'Lily', 32),
('Intel', '7890YZ78', 2021, 'Data Scientist', 1000000, 'Max', 4),
('Oracle', '1234CD90', 2022, 'Product Manager', 900000, 'Nora', 16),
('Microsoft', '5678EF12', 2023, 'Software Engineer', 1200000, 'Olivia', 8),
('Google', '9101IJ34', 2019, 'Data Scientist', 1100000, 'Parker', 64),
('Tesla', '2345KL56', 2020, 'Product Manager', 1300000, 'Quinn', 32),
('Apple', '6789MN78', 2018, 'Software Engineer', 1400000, 'Riley', 16),
('Amazon', '3456OP90', 2017, 'Data Scientist', 1500000, 'Samuel', 4),
('Netflix', '7890ST12', 2016, 'Product Manager', 1200000, 'Sophia', 64),
('HP', '1234UV34', 2023, 'Software Engineer', 1400000, 'Thomas', 8),
('Dell', '5678YZ56', 2022, 'Data Scientist', 1500000, 'Victoria', 32),
('Intel', '9101CD78', 2015, 'Product Manager', 1100000, 'William', 16),
('Oracle', '2345EF90', 2024, 'Software Engineer', 1000000, 'Xander', 4),
('Microsoft', '6789GH12', 2023, 'Data Scientist', 1200000, 'Yara', 64),
('Google', '3456IJ34', 2019, 'Product Manager', 1300000, 'Zane', 32),
('Apple', '7890KL56', 2020, 'Software Engineer', 1400000, 'Aria', 16),
('Amazon', '1234MN78', 2018, 'Data Scientist', 1500000, 'Benjamin', 8),
('Facebook', '5678OP90', 2017, 'Product Manager', 1200000, 'Chloe', 4),
('Tesla', '9101QR12', 2022, 'Software Engineer', 1100000, 'Daniel', 64),
('Netflix', '2345ST34', 2021, 'Data Scientist', 1000000, 'Ella', 32),
('HP', '6789UV56', 2016, 'Product Manager', 1200000, 'Finn', 16),
('Dell', '1234YZ78', 2023, 'Software Engineer', 1400000, 'Grace', 8),
('IBM', '5678CD90', 2022, 'Data Scientist', 1500000, 'Henry', 4),
('Intel', '9101EF12', 2015, 'Product Manager', 1100000, 'Isabella', 64),
('Oracle', '2345GH34', 2024, 'Software Engineer', 1200000, 'Jack', 32),
('Microsoft', '6789IJ56', 2023, 'Data Scientist', 1300000, 'Katherine', 16),
('Google', '9101KL78', 2019, 'Product Manager', 1400000, 'Leo', 8),
('Apple', '1234MN90', 2020, 'Software Engineer', 1500000, 'Lily', 4),
('Amazon', '5678OP12', 2018, 'Data Scientist', 1200000, 'Max', 64),
('Facebook', '7890QR34', 2017, 'Product Manager', 1000000, 'Nora', 32),
('Tesla', '2345ST56', 2022, 'Software Engineer', 1100000, 'Olivia', 16),
('Netflix', '6789UV78', 2021, 'Data Scientist', 1200000, 'Parker', 8),
('Dell', '1234CD12', 2023, 'Software Engineer', 1400000, 'Quinn', 4),
('IBM', '5678EF34', 2022, 'Data Scientist', 1500000, 'Riley', 64),
('Intel', '9101GH56', 2015, 'Product Manager', 1100000, 'Samuel', 32),
('Oracle', '2345IJ78', 2024, 'Software Engineer', 1200000, 'Sophia', 16),
('Microsoft', '6789KL90', 2023, 'Data Scientist', 1300000, 'Thomas', 8),
('Google', '9101MN12', 2019, 'Product Manager', 1400000, 'Victoria', 64),
('Apple', '1234OP34', 2020, 'Software Engineer', 1500000, 'William', 32),
('Amazon', '5678QR56', 2018, 'Data Scientist', 1200000, 'Xander', 16),
('Facebook', '7890ST78', 2017, 'Product Manager', 1000000, 'Yara', 8),
('Tesla', '2345UV90', 2022, 'Software Engineer', 1100000, 'Zane', 4),
('Netflix', '6789YZ12', 2021, 'Data Scientist', 1200000, 'Aria', 64),
('HP', '9101CD34', 2016, 'Product Manager', 1400000, 'Benjamin', 32),
('Dell', '1234EF56', 2023, 'Software Engineer', 1500000, 'Chloe', 16),
('IBM', '5678GH78', 2022, 'Data Scientist', 1100000, 'Daniel', 8),
('Intel', '9101IJ90', 2015, 'Product Manager', 1200000, 'Ella', 64),
('Oracle', '2345KL12', 2024, 'Software Engineer', 1300000, 'Finn', 32),
('Microsoft', '6789MN34', 2023, 'Data Scientist', 1400000, 'Grace', 16),
('Google', '9101OP56', 2019, 'Product Manager', 1500000, 'Henry', 8),
('Apple', '1234QR78', 2020, 'Software Engineer', 1200000, 'Isabella', 4),
('Amazon', '5678ST90', 2018, 'Data Scientist', 1100000, 'Jack', 64),
('Facebook', '7890UV12', 2017, 'Product Manager', 1000000, 'Katherine', 32),
('Tesla', '2345YZ34', 2022, 'Software Engineer', 1200000, 'Leo', 16),
('Netflix', '6789CD56', 2021, 'Data Scientist', 1300000, 'Lily', 8),
('HP', '9101EF78', 2016, 'Product Manager', 1400000, 'Max', 4),
('Google', '5678IJ12', 2022, 'Data Scientist', 1500000, 'Noah', 64),
('Apple', '9101KL34', 2021, 'Product Manager', 1400000, 'Olivia', 32),
('Amazon', '2345MN56', 2019, 'Software Engineer', 1300000, 'Liam', 16),
('Microsoft', '6789OP78', 2020, 'Data Scientist', 1200000, 'Emma', 8),
('Tesla', '1234QR90', 2018, 'Product Manager', 1100000, 'Aiden', 4),
('Netflix', '5678ST12', 2017, 'Software Engineer', 1000000, 'Sophia', 64),
('HP', '9101UV34', 2022, 'Data Scientist', 1500000, 'Jackson', 32),
('Dell', '2345YZ56', 2021, 'Product Manager', 1400000, 'Ava', 16),
('IBM', '6789CD78', 2019, 'Software Engineer', 1300000, 'Lucas', 8),
('Oracle', '1234EF90', 2020, 'Data Scientist', 1200000, 'Mia', 4),
('Google', '5678GH12', 2018, 'Product Manager', 1100000, 'Benjamin', 64),
('Apple', '9101IJ34', 2017, 'Software Engineer', 1000000, 'Harper', 32),
('Amazon', '2345KL56', 2022, 'Data Scientist', 1500000, 'Ethan', 16),
('Microsoft', '6789MN78', 2021, 'Product Manager', 1400000, 'Amelia', 8),
('Tesla', '1234OP90', 2019, 'Software Engineer', 1300000, 'Oliver', 4),
('Netflix', '5678QR12', 2020, 'Data Scientist', 1200000, 'Sophia', 64),
('HP', '9101ST34', 2018, 'Product Manager', 1100000, 'Lucas', 32),
('Dell', '2345UV56', 2017, 'Software Engineer', 1000000, 'Mia', 16),
('IBM', '6789YZ78', 2022, 'Data Scientist', 1500000, 'Elijah', 8),
('Oracle', '1234CD90', 2021, 'Product Manager', 1400000, 'Ava', 4),
('Google', '5678EF12', 2019, 'Software Engineer', 1300000, 'Harper', 64),
('Apple', '9101GH34', 2020, 'Data Scientist', 1200000, 'Noah', 32),
('Amazon', '2345IJ56', 2018, 'Product Manager', 1100000, 'Olivia', 16),
('Microsoft', '6789KL78', 2017, 'Software Engineer', 1000000, 'Liam', 8),
('Google', '5678IJ12', 2022, 'Data Scientist', 1500000, 'Noah', 64),
('Apple', '9101KL34', 2021, 'Product Manager', 1400000, 'Olivia', 32),
('Amazon', '2345MN56', 2019, 'Software Engineer', 1300000, 'Liam', 16),
('Microsoft', '6789OP78', 2020, 'Data Scientist', 1200000, 'Emma', 8),
('Tesla', '1234QR90', 2018, 'Product Manager', 1100000, 'Aiden', 4),
('Netflix', '5678ST12', 2017, 'Software Engineer', 1000000, 'Sophia', 64),
('HP', '9101UV34', 2022, 'Data Scientist', 1500000, 'Jackson', 32),
('Dell', '2345YZ56', 2021, 'Product Manager', 1400000, 'Ava', 16),
('IBM', '6789CD78', 2019, 'Software Engineer', 1300000, 'Lucas', 8),
('Oracle', '1234EF90', 2020, 'Data Scientist', 1200000, 'Mia', 4),
('Google', '5678GH12', 2018, 'Product Manager', 1100000, 'Benjamin', 128),
('Apple', '9101IJ34', 2017, 'Software Engineer', 1000000, 'Harper', 64),
('Amazon', '2345KL56', 2022, 'Data Scientist', 1500000, 'Ethan', 32),
('Microsoft', '6789MN78', 2021, 'Product Manager', 1400000, 'Amelia', 16),
('Tesla', '1234OP90', 2019, 'Software Engineer', 1300000, 'Oliver', 8),
('Netflix', '5678QR12', 2020, 'Data Scientist', 1200000, 'Sophia', 4),
('HP', '9101ST34', 2018, 'Product Manager', 1100000, 'Lucas', 2),
('Dell', '2345UV56', 2017, 'Software Engineer', 1000000, 'Mia', 1),
('IBM', '6789YZ78', 2022, 'Data Scientist', 1500000, 'Elijah', 64),
('Oracle', '1234CD90', 2021, 'Product Manager', 1400000, 'Ava', 32),
('Google', '5678EF12', 2019, 'Software Engineer', 1300000, 'Harper', 16),
('Apple', '9101GH34', 2020, 'Data Scientist', 1200000, 'Noah', 8),
('Amazon', '2345IJ56', 2018, 'Product Manager', 1100000, 'Olivia', 4),
('Microsoft', '6789KL78', 2017, 'Software Engineer', 1000000, 'Liam', 128),
('Google', '1234AB12', 2020, 'Software Engineer', 1000000, 'Alice', 4),
('Microsoft', '5678EF34', 2019, 'Data Scientist', 1200000, 'Bob', 16),
('Apple', '9101IJ56', 2021, 'Product Manager', 1500000, 'Charlie', 64),
('Amazon', '2345MN78', 2018, 'Software Engineer', 900000, 'David', 8),
('Facebook', '6789QR90', 2022, 'Data Scientist', 1100000, 'Eve', 32),
('Tesla', '3456UV12', 2017, 'Product Manager', 1400000, 'Frank', 4),
('Netflix', '7890YZ34', 2016, 'Software Engineer', 950000, 'Grace', 16),
('IBM', '1234CD56', 2023, 'Data Scientist', 1300000, 'Henry', 8),
('Intel', '5678FG78', 2022, 'Product Manager', 1200000, 'Isabella', 32),
('Oracle', '9101KL90', 2015, 'Software Engineer', 1100000, 'Jack', 16),
('Cisco', '2345OP12', 2024, 'Data Scientist', 1400000, 'Katherine', 64),
('HP', '6789ST34', 2023, 'Product Manager', 1300000, 'Leo', 8),
('Dell', '3456UV56', 2014, 'Software Engineer', 1500000, 'Lily', 32),
('Intel', '7890YZ78', 2021, 'Data Scientist', 1000000, 'Max', 4),
('Oracle', '1234CD90', 2022, 'Product Manager', 900000, 'Nora', 16),
('Microsoft', '5678EF12', 2023, 'Software Engineer', 1200000, 'Olivia', 8),
('Google', '9101IJ34', 2019, 'Data Scientist', 1100000, 'Parker', 64),
('Tesla', '2345KL56', 2020, 'Product Manager', 1300000, 'Quinn', 32),
('Apple', '6789MN78', 2018, 'Software Engineer', 1400000, 'Riley', 16),
('Amazon', '3456OP90', 2017, 'Data Scientist', 1500000, 'Samuel', 4),
('Google', '7890YZ12', 2022, 'Product Manager', 900000, 'Sophia', 128),
('Microsoft', '1234AB34', 2023, 'Software Engineer', 1000000, 'Thomas', 64),
('Apple', '5678EF56', 2015, 'Data Scientist', 1200000, 'Victoria', 32),
('Amazon', '9101IJ78', 2021, 'Product Manager', 1500000, 'William', 16),
('Oracle', '2345MN90', 2019, 'Software Engineer', 900000, 'Xavier', 8),
('Facebook', '6789QR90', 2018, 'Data Scientist', 1100000, 'Yara', 4),
('Tesla', '3456UV12', 2020, 'Product Manager', 1200000, 'Zachary', 64),
('Microsoft', '7890YZ34', 2017, 'Software Engineer', 1300000, 'Alice', 32),
('Amazon', '1234CD56', 2022, 'Data Scientist', 1400000, 'Bob', 16),
('Apple', '5678EF78', 2021, 'Product Manager', 1500000, 'Charlie', 8),
('Oracle', '9101IJ90', 2016, 'Software Engineer', 1000000, 'David', 64),
('Google', '2345KL12', 2015, 'Data Scientist', 1100000, 'Eve', 32),
('IBM', '6789MN34', 2023, 'Product Manager', 1200000, 'Frank', 16),
('Dell', '3456OP56', 2022, 'Software Engineer', 1300000, 'Grace', 4),
('Microsoft', '7890QR78', 2021, 'Data Scientist', 1400000, 'Henry', 8),
('Intel', '1234ST90', 2020, 'Product Manager', 1500000, 'Isabella', 32),
('Apple', '5678UV12', 2019, 'Software Engineer', 900000, 'Jack', 16),
('Oracle', '9101AB34', 2018, 'Data Scientist', 1100000, 'Katherine', 8),
('Amazon', '2345CD56', 2017, 'Product Manager', 1200000, 'Leo', 64),
('Google', '6789EF78', 2016, 'Software Engineer', 1300000, 'Lily', 32),
('IBM', '1234KL90', 2015, 'Data Scientist', 1400000, 'Max', 16),
('Microsoft', '5678MN12', 2023, 'Product Manager', 1500000, 'Nora', 8),
('Apple', '9101OP34', 2022, 'Software Engineer', 1000000, 'Olivia', 32),
('Dell', '2345QR56', 2021, 'Data Scientist', 1100000, 'Parker', 16),
('Intel', '6789ST78', 2019, 'Product Manager', 1200000, 'Quinn', 4),
('Oracle', '3456UV90', 2018, 'Software Engineer', 1300000, 'Riley', 64),
('Microsoft', '7890AB12', 2017, 'Data Scientist', 1400000, 'Samuel', 32),
('Apple', '1234CD34', 2016, 'Product Manager', 1500000, 'Sophia', 16),
('IBM', '5678EF56', 2023, 'Software Engineer', 900000, 'Thomas', 8),
('Amazon', '9101IJ78', 2022, 'Data Scientist', 1000000, 'Victoria', 64),
('Google', '2345KL90', 2021, 'Product Manager', 1100000, 'William', 32),
('Oracle', '6789MN12', 2019, 'Software Engineer', 1200000, 'Xavier', 16),
('Tesla', '3456OP34', 2018, 'Data Scientist', 1300000, 'Yasmine', 8),
('Amazon', '7890QR56', 2017, 'Product Manager', 1400000, 'Zara', 4),
('Microsoft', '1234ST78', 2016, 'Software Engineer', 1500000, 'Aaron', 64),
('Google', '5678UV90', 2023, 'Data Scientist', 1000000, 'Brianna', 32),
('Apple', '9101AB12', 2022, 'Product Manager', 1100000, 'Caleb', 16),
('IBM', '2345CD34', 2021, 'Software Engineer', 1200000, 'Danielle', 8),
('Dell', '6789EF56', 2020, 'Data Scientist', 1300000, 'Ethan', 64),
('Oracle', '3456KL78', 2019, 'Product Manager', 1400000, 'Fiona', 32),
('Microsoft', '7890MN90', 2018, 'Software Engineer', 1500000, 'George', 16),
('Apple', '1234OP12', 2017, 'Data Scientist', 900000, 'Hannah', 8),
('Amazon', '5678QR34', 2016, 'Product Manager', 1000000, 'Isaac', 64),
('Google', '9101ST56', 2023, 'Software Engineer', 1100000, 'Julia', 32),
('IBM', '2345AB78', 2022, 'Data Scientist', 1200000, 'Kaden', 16),
('Oracle', '6789CD90', 2021, 'Product Manager', 1300000, 'Layla', 4),
('Microsoft', '1234EF12', 2019, 'Software Engineer', 1400000, 'Mason', 8),
('Apple', '5678KL34', 2018, 'Data Scientist', 1500000, 'Nathan', 64),
('Dell', '9101MN56', 2017, 'Product Manager', 1000000, 'Oliver', 32),
('Tesla', '2345OP78', 2016, 'Software Engineer', 1100000, 'Penelope', 16),
('Google', '6789QR90', 2023, 'Data Scientist', 1200000, 'Quincy', 8),
('Microsoft', '1234ST12', 2022, 'Product Manager', 1300000, 'Riley', 64),
('Amazon', '5678UV34', 2021, 'Software Engineer', 1400000, 'Samuel', 32),
('IBM', '9101AB56', 2020, 'Data Scientist', 1500000, 'Sophia', 16),
('Apple', '2345CD78', 2019, 'Product Manager', 900000, 'Thomas', 4),
('Oracle', '6789EF90', 2018, 'Software Engineer', 1000000, 'Uma', 8),
('Microsoft', '1234KL12', 2017, 'Data Scientist', 1100000, 'Victor', 64),
('Amazon', '5678MN34', 2016, 'Product Manager', 1200000, 'Willa', 32);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rollno` varchar(8) NOT NULL,
  `age` int(100) NOT NULL,
  `batchyear` int(100) NOT NULL,
  `branch` int(11) NOT NULL,
  `aoi` varchar(100) NOT NULL,
  `class10` decimal(4,2) NOT NULL,
  `class12` decimal(4,2) NOT NULL,
  `sem1` decimal(4,2) DEFAULT NULL,
  `sem2` decimal(4,2) DEFAULT NULL,
  `sem3` decimal(4,2) DEFAULT NULL,
  `sem4` decimal(4,2) DEFAULT NULL,
  `sem5` decimal(4,2) DEFAULT NULL,
  `sem6` decimal(4,2) DEFAULT NULL,
  `sem7` decimal(4,2) DEFAULT NULL,
  `sem8` decimal(4,2) DEFAULT NULL,
  `currentsem` int(11) DEFAULT NULL,
  `cpi` decimal(4,2) DEFAULT NULL,
  `transcript` text NOT NULL,
  `resume` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`username`, `password`, `email`, `rollno`, `age`, `batchyear`, `branch`, `aoi`, `class10`, `class12`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`, `currentsem`, `cpi`, `transcript`, `resume`) VALUES
('Poddar bhaiya', '$2y$10$hjGavzIocQ.o7eRy2PnS5.2TuLYv3GAmU3rDNVXmqlkDK4iSIKMYm', 'poddar@iitp.ac.in', '1991CS05', 20, 2021, 16, 'Webdev', '90.00', '95.00', '9.70', '9.60', '7.80', '8.00', '9.90', '7.30', '0.00', NULL, 7, '8.72', 'transcript_link', 'demo_link1.com'),
('Sahoo', '$2y$10$obU1y.TcNR8NpXO2TEakLuzhuvSNdEr3HC3cy46x/kd7dUbkwHcZG', 'aryan_2101ai06@iitp.ac.in', '2101AI06', 20, 2022, 64, 'AII', '99.99', '99.99', '8.76', '8.20', '8.00', '9.00', '9.00', '9.00', '0.00', '0.00', 7, '8.66', '', ''),
('Devendra Pratap Singh', '$2y$10$5x/TJ33IInFsdRc94dYqdeFvpy/LXrKDIT3UGwbudPTb5//MjbMaW', 'devendra_2101ai13@iitp.ac.in', '2101AI13', 20, 2021, 2, 'CP', '95.00', '96.00', '9.50', '9.50', '8.50', '8.50', '8.40', '8.40', '0.00', NULL, 7, '8.80', 'transcript_link', 'resume_link'),
('MIKASA', '$2y$10$T1e52xagxIBoqkM8wLueTO0db02uaN27Wp1TSLte4Y.fE6tsorLl.', 'pragya@iitp.ac.in', '2101AI23', 20, 2025, 2, 'anime', '99.99', '99.99', '9.70', '9.00', '8.90', '8.50', '0.00', '0.00', '0.00', NULL, 5, '9.03', '', ''),
('adwdaw``11`', '$2y$10$EJtOvfrVoixq1pXFgFeLLu9I6bi.kXlRURxT1wFDXcCa/zriS2es.', 'dev2101ai99@iitp.ac.in', '2101ai99', 20, 2022, 2, 'bjbhjhjbhjhjkjkj', '99.99', '99.99', '8.00', '9.00', '9.00', '9.00', '9.00', '9.00', '0.00', NULL, 7, '8.83', 'transcript.link', 'resume.link'),
('Student_X', '$2y$10$JHU0.Tld.9bDleUl6TuekumemQJzK0wMHQerrN9X1rGWzYVg5ehWu', 'studentx_2101cb57@iitp.ac.in', '2101CB57', 19, 2021, 16, 'competitive programming', '85.00', '90.00', '8.70', '9.00', '9.10', '10.00', '9.10', '9.50', '0.00', NULL, 7, '9.23', 'transcript.link', 'resume.link'),
('Blackswan', '$2y$10$RgLwe4yV39JcTsChE2aP3.UHrOEOr24wLP9HM9G1vG8fHOrGDUbT2', 'pragyaswan@iitp.ac.in', '2101CS01', 18, 2019, 8, 'ml', '99.99', '95.00', '6.50', '6.50', '7.50', '7.50', '9.00', '9.00', '0.00', NULL, 7, '7.67', '', ''),
('Student1', '$2y$10$hPQBVMu7luc5PoHLOFzv7uKXLpGJyL8PzgYcYh6uMrRgKXflXCFBi', 'student1_2101cs59@iitp.ac.in', '2101CS59', 0, 2021, 4, 'cp', '89.00', '92.00', '8.60', '8.90', '9.00', '9.10', '8.40', '0.00', '0.00', NULL, 6, '8.80', 'demo_link.com', 'demo_link1.com'),
('Dev', '$2y$10$DC6eID1eHVDwnofIGUdHXumgWz.2Jzrt0RmicsSjpYN30ibK4CbIW', 'dev_2201ai13@iitp.ac.in', '2201AI13', 20, 2022, 2, 'ml', '99.99', '90.00', '5.50', '6.50', '7.50', '9.00', '9.90', '9.50', '0.00', NULL, 7, '7.98', 'demo_link.com', 'demo_link1.com'),
('Pragya', '$2y$10$inXQn3dj2Erag0mmLmczBeG5bt1/4ObGSTCz.hst2LygS.tdEc.PS', 'blackswan@iitp.ac.in', '2201AI23', 19, 2024, 2, 'CP', '99.99', '99.99', '9.70', '9.50', '9.30', '8.00', '9.00', '9.00', '0.00', NULL, 7, '9.08', 'trans_link', 'res_link'),
('Aditya', '$2y$10$FK1P8LQ0q4rolQFrz5NhfejCxnF07Jyys/8j8NsRrhwfxlRzRPTQW', 'blazingdragon@iitp.ac.in', '2201CS05', 20, 2025, 1, 'CP', '99.99', '96.00', '7.80', '6.40', '9.90', '9.50', '9.20', '8.80', '0.00', NULL, 7, '8.60', 'demo_link.com', 'resume_link'),
('admin', '$2y$10$40EQ9gz.0enFwVvqXT5gO.jNMvnIV9Efqwr.U7klMgTj2g1FEvICK', 'admin@iitp.ac.in', '2222CS22', 0, 0, 1, 'ml', '99.99', '99.99', '9.00', '9.00', '9.00', '9.00', '9.00', '9.00', '0.00', NULL, 7, '9.00', 'demo_link.com', 'demo_link1.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `company2`
--
ALTER TABLE `company2`
  ADD PRIMARY KEY (`role_id`),
  ADD KEY `id_FK_1` (`id`);

--
-- Indexes for table `placed`
--
ALTER TABLE `placed`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`rollno`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `company2`
--
ALTER TABLE `company2`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company2`
--
ALTER TABLE `company2`
  ADD CONSTRAINT `id_FK_1` FOREIGN KEY (`id`) REFERENCES `companies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
