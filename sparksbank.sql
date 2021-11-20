-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 20:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparksbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--
INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES 
('1', 'Bhavi', 'Aarush', '400', '2021-11-19 16:08:38.000000'), 
('2', 'Rohini', 'Tej', '300', '2021-11-08 20:38:38');
('3', 'Bhavi', 'Nisha', '450', '2021-10-11 20:40:17'), 
('4', 'Suman', 'Nisha', '220', '2021-10-22 20:40:17');
('5', 'Suman', 'Sanjay', '300', '2021-11-01 20:41:58'), 
('6', 'Rohini', 'Anuj', '500', '2021-11-15 20:41:58');
('7', 'Varun', 'Sanjay', '200', '2021-10-31 20:43:23'), 
('8', 'Varun', 'Anuj', '450', '2021-10-07 19:43:23');
('9', 'Bhavi', 'Tej', '330', '2021-10-18 19:45:50'), 
('10', 'Varun', 'Aarush', '510', '2021-09-30 21:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES 
('388', 'Aarush', 'aaru12@gmail.com', '48000'), 
('207', 'Anuj', 'anuj01@gmail.com', '56600'), 
('135', 'Bhavi', 'bhavi67@gmail.com', '94920'), 
('259', 'Nisha', 'nisha44@gmail.com', '43480');
('441', 'Rohini', 'rohi007@gmail.com', '80000'), 
('950', 'Sanjay', 'sanju71@gmail.com', '65000');
('611', 'Suman', 'singh@gmail.com', '79500'), 
('659', 'Tina', 'tinav5@gmail.com', '60000');
('775', 'Tej', 'tejas@gmail.com', '56000'), 
('123', 'Varun', 'varun88@gmail.com', '87000');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--f
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;