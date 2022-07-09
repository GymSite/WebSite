-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 02:47 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bashghah`
--

-- --------------------------------------------------------

--
-- Table structure for table `badan`
--

CREATE TABLE `badan` (
  `name` int(10) NOT NULL,
  `kodmeli` int(11) NOT NULL,
  `shomare` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `box`
--

CREATE TABLE `box` (
  `name` varchar(11) COLLATE utf8mb4_persian_ci NOT NULL,
  `kodmeli` int(11) NOT NULL,
  `shomare` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `box`
--

INSERT INTO `box` (`name`, `kodmeli`, `shomare`) VALUES
('0', 651521, 235165216),
('محدثه شیراز', 2561652, 265165),
('', 0, 0),
('', 0, 0),
('', 0, 0),
('', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shena`
--

CREATE TABLE `shena` (
  `name` varchar(10) COLLATE utf8mb4_persian_ci NOT NULL,
  `kodmeli` int(11) NOT NULL,
  `shomare` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `shena`
--

INSERT INTO `shena` (`name`, `kodmeli`, `shomare`) VALUES
('', 0, 0),
('', 0, 0),
('', 0, 0),
('محدثه', 2112, 21121),
('محدثه', 2112, 21121);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
