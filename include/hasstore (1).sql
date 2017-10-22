-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2017 at 02:39 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hasstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `pid` int(5) NOT NULL,
  `ipadd` varchar(100) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`pid`, `ipadd`, `qty`) VALUES
(2, '', 1),
(5, 'def@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

CREATE TABLE `cust` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cart_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust`
--

INSERT INTO `cust` (`id`, `name`, `address`, `email`, `password`, `cart_id`) VALUES
(1, 'def', 'adfrasdf\r\nsdfsdf\r\neafasdf\r\nefa', 'def@gmail.com', '$2y$10$scDV.eL7XkRBAvps4cY.6OHlmnsfi6Y7cS4bbMbIrD04Spi0dmC2W', 0);

-- --------------------------------------------------------

--
-- Table structure for table `maincateg`
--

CREATE TABLE `maincateg` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maincateg`
--

INSERT INTO `maincateg` (`id`, `name`) VALUES
(2, 'Computers'),
(3, 'IT'),
(4, 'EXTC'),
(5, 'Mechanical');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `year` int(5) NOT NULL,
  `semester` int(5) NOT NULL,
  `department` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `cost` int(5) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `imgurl` varchar(100) NOT NULL,
  `edition` int(5) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Main Products Tabke';

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `year`, `semester`, `department`, `university`, `subject`, `name`, `author`, `cost`, `publisher`, `imgurl`, `edition`, `description`) VALUES
(1, 3, 5, 'Computer', 'mu', 'Computer Networks', 'Computer Networks\r\n', 'tenanbaum\r\n', 1000, 'Pearson', 'DSC02822.jpg', 3, ''),
(2, 3, 5, 'Computer', 'mu', 'Computer Networks', 'Computer Networks', 'J.S.Katre\r\n', 400, 'Techmax', 'download.jpg', 0, ''),
(3, 3, 5, 'Computer', 'mu', 'Computer Networks', 'Computer Networks', 'V.S.Bagat', 450, 'Technical', '1.jpg', 0, ''),
(4, 3, 5, 'Computer', 'mu', 'Operating System', 'Operating System\r\n', 'I.A.Dhotre', 390, 'Technical', '2.jpg', 0, ''),
(5, 3, 5, 'Computer', 'mu', 'Web Technology', 'Web Technology', 'Jeffrey-C-Jackson', 800, 'Pearson', 'web-technologies-a-computer-science-perspective-original-imadbn6fthdnvhpy.jpeg', 0, 'we56');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `name`) VALUES
(1, 'Semester 3'),
(2, 'Semester 4'),
(3, 'Semester 5'),
(4, 'Semester 6'),
(5, 'Semester 7'),
(6, 'Semester 8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cust`
--
ALTER TABLE `cust`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `maincateg`
--
ALTER TABLE `maincateg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cust`
--
ALTER TABLE `cust`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maincateg`
--
ALTER TABLE `maincateg`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
