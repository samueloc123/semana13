-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 01:20 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `semana13`
--

-- --------------------------------------------------------

--
-- Table structure for table `actividad`
--

CREATE TABLE `actividad` (
  `ID` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `nota1` decimal(64,0) NOT NULL,
  `nota2` decimal(64,0) NOT NULL,
  `nota3` decimal(64,0) NOT NULL,
  `promedio` decimal(64,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actividad`
--

INSERT INTO `actividad` (`ID`, `nombre`, `nota1`, `nota2`, `nota3`, `promedio`) VALUES
(1, 'Mariana', '3', '2', '1', '2'),
(2, 'Samuel', '5', '4', '4', '4'),
(3, 'Sara Perez', '3', '5', '2', '0'),
(4, 'Adriana', '5', '2', '3', '0'),
(9, 'Federico', '5', '4', '7', '5'),
(10, 'David', '1', '4', '4', '3'),
(11, 'Melisa', '5', '5', '5', '0'),
(12, 'Ricardo', '2', '1', '3', '0'),
(13, 'Catalina', '1', '5', '2', '3'),
(14, 'Patricia', '5', '5', '5', '5'),
(15, 'Sara S', '4', '4', '5', '0'),
(16, 'Felipe', '5', '5', '5', '0'),
(19, 'Diana', '3', '4', '6', '0'),
(22, 'Carlos', '2', '2', '2', '0'),
(23, 'Susana', '3', '3', '4', '0'),
(29, 'David', '3', '3', '3', '0'),
(30, 'Scarlett', '5', '5', '5', '0'),
(42, 'Marta', '1', '5', '3', '3'),
(44, 'Monica', '4', '2', '5', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actividad`
--
ALTER TABLE `actividad`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
