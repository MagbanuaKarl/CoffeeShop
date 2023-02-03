-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 09:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `MENU_ID` int(3) NOT NULL,
  `NAME` varchar(155) NOT NULL,
  `PRICE` int(5) NOT NULL,
  `CLASSIFICATION` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`MENU_ID`, `NAME`, `PRICE`, `CLASSIFICATION`) VALUES
(969, 'Hot Mocha', 99, 'Bread'),
(102, 'Ice Dark Choco', 144, 'Cold Drink'),
(103, 'Mug', 200, 'Merchandise'),
(104, 'Spanish Bread', 70, 'Bread');

-- --------------------------------------------------------

--
-- Table structure for table `supplies`
--

CREATE TABLE `supplies` (
  `EQUIPMENT_ID` varchar(3) DEFAULT NULL,
  `EQUIPMENT` varchar(255) NOT NULL,
  `NUM_EQUIPMENT` varchar(3) DEFAULT NULL,
  `COST` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplies`
--

INSERT INTO `supplies` (`EQUIPMENT_ID`, `EQUIPMENT`, `NUM_EQUIPMENT`, `COST`) VALUES
('858', 'Freezers', '212', 11000),
('112', 'Table', '10', 2500),
('113', 'Chairs', '20', 200);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(3) NOT NULL,
  `USER_NAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `USER_NAME`, `PASSWORD`) VALUES
(0, 'sample', '$2y$10$3ojU.6cWJWopfgu1Gx5rR.V2dqs2Dxts8V.q5Lz2M/7n8DaiZ.oSi');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `USER_ID` int(11) NOT NULL,
  `USER_NAME` varchar(50) NOT NULL,
  `FIRST_NAME` varchar(50) NOT NULL,
  `LAST_NAME` varchar(50) NOT NULL,
  `TYPE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`USER_ID`, `USER_NAME`, `FIRST_NAME`, `LAST_NAME`, `TYPE`) VALUES
(111, 'karlcaniel    ', 'Karl Caniel', 'Magbanua', 'Manager'),
(112, 'GeganteCarl', 'Carl', 'Gegante', 'Baker'),
(113, 'sherwinD  ', 'Sherwin', 'Duenas', 'Barista');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
