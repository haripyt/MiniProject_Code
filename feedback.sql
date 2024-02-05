-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 09:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shreechoco`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `sub`, `msg`) VALUES
('Hari Haran', 'harihere21@gmail.com', 'hi', 'we are happy with the product '),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('Hari Haran', 'harihere21@gmail.com', 'hi', 'ertert'),
('Hari Haran', 'harihere21@gmail.com', 'hi', 'ertert'),
('', '', '', ''),
('Hari Haran', 'harihere21@gmail.com', 'hi', '5455645'),
('Hari Haran', 'harihere21@gmail.com', 'hi', '5455645'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('Hari Haran', 'harihere21@gmail.com', 'hi', '12323'),
('Hari Haran', 'harihere21@gmail.com', '', '143'),
('Hari Haran', 'harihere21@gmail.com', '', '143'),
('Hari Haran', 'harihere21@gmail.com', '', '143'),
('Hari Haran', 'harihere21@gmail.com', 'hi', 'e4324234'),
('Hari Haran', 'harihere21@gmail.com', 'hi', '123'),
('Hari Haran', 'harihere21@gmail.com', 'hi', 'happy with the product'),
('Hari Haran', 'harihere21@gmail.com', 'hi', 'rer'),
('Hari Haran', 'harihere21@gmail.com', '', 'eree');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
