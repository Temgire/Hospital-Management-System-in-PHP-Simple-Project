-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 12:04 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `sym` varchar(450) NOT NULL,
  `date` varchar(45) NOT NULL,
  `time` varchar(45) NOT NULL,
  `pat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `user`, `sym`, `date`, `time`, `pat`) VALUES
(7, 'zopekundan@gmail.com', 'cold, Feaver', '2022-05-19', '23:45', 'Temgire Dinesh'),
(8, 'temgiredinesh2003@gmail.com', 'Cold and Fever', '2022-05-21', '22:09', 'Zope Kundan'),
(9, 'dineshtem@gmail.com', 'cold', '2022-05-25', '17:26', 'Swarup'),
(10, 'hbp123@gmail.com', 'Fever', '2022-05-19', '15:27', 'HBP'),
(11, 'prasad@gmail.com', '1. Fever\r\n2. Cough\r\n3. Headache\r\n4. Cold\r\n5. Corona symptoms\r\n', '2022-05-23', '16:38', 'Prasad Manjare'),
(12, 'prasad@gmail.com', 'Cold', '2022-05-23', '16:51', 'Temgire Dinesh'),
(13, 'temgire@gmail.com', 'Cold ', '2022-05-24', '12:48', 'Zope Kundan Dilip');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `mail`, `pwd`) VALUES
(4, 'zopekundan@gmail.com', 'Zope'),
(5, 'temgiredinesh2003@gmail.com', 'Minato'),
(6, 'dineshtem@gmail.com', 'Hello@123'),
(7, 'hbp123@gmail.com', 'Hello@123'),
(8, 'prasad@gmail.com', 'Prasad'),
(9, 'temgire@gmail.com', 'Dinesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
