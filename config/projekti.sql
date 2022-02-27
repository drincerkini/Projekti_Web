-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 10:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekti`
--

-- --------------------------------------------------------

--
-- Table structure for table `kidsproducts`
--

CREATE TABLE `kidsproducts` (
  `pid` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kidsproducts`
--

INSERT INTO `kidsproducts` (`pid`, `image`, `description`, `price`) VALUES
(2, 'kid-2.png', 'Jakne per Femije', 60),
(3, 'kid-3.png', 'Trenerka per Femije', 55),
(4, 'kid-6.png', 'Maice per Femije', 25),
(5, 'kid-13.png', 'Jakne per Femije', 45),
(6, 'kid-5.png', 'Bluze per Femije', 35),
(7, 'kid-15.png', 'Jakne per Femije', 65),
(8, 'kid-13.png', 'Jakne per Femije', 45),
(9, 'kid-4.png', 'Bluze per Femije', 40);

-- --------------------------------------------------------

--
-- Table structure for table `mainproducts`
--

CREATE TABLE `mainproducts` (
  `pid` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mainproducts`
--

INSERT INTO `mainproducts` (`pid`, `image`, `description`, `price`) VALUES
(1, 'adidas-1.png', 'Trenerka per Femra', 90),
(2, 'gallery-1.jpg', 'Maice per Meshkuj', 20),
(3, 'nike-6.png', 'Duks per Meshkuj', 50),
(4, 'nike-1.png', 'Fustan per Femra', 70),
(5, 'men-1.png', 'Trenerka per Meshkuj', 90),
(6, 'nike-3.png', 'Duks per Meshkuj', 85),
(7, 'nike-2.png', 'Fustan per Femra', 55),
(8, 'nike-8.png', 'Jakne per Femra', 110);

-- --------------------------------------------------------

--
-- Table structure for table `produkti`
--

CREATE TABLE `produkti` (
  `pid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `descritpion` varchar(255) DEFAULT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produkti`
--

INSERT INTO `produkti` (`pid`, `image`, `descritpion`, `price`) VALUES
(11, 'nike-14.png', 'Jakne per Meshkuj', 115),
(12, 'nike-15.png', 'Duks per Meshkuj', 75),
(13, 'nike-12.png', 'Duks per Meshkuj', 79),
(14, 'nike-13.png', 'Duks per Meshkuj', 120),
(16, 'nike-17.png', 'Trenerka per Meshkuj', 99),
(17, 'nike-18.png', 'Kemish per Meshkuj', 35),
(18, 'nike-16.png', 'Jelek per Meshkuj', 45),
(19, 'nike-19.png', 'Kemish per Meshkuj', 35);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `surname`, `email`, `password`, `role`) VALUES
(1, 'drin', 'cerkini', 'dcerkini02@gmial.com', 'HelloWorld', 'admin'),
(2, 'hellow', 'halo', 'halo@hellow.com', 'HelloeHelo', 'user'),
(20, 'der', 'dei', 'ded@die.com', 'derafaas', 'user'),
(23, 'fatlind', 'Bytyqi', 'fb2131@google.com', 'fatlind', 'admin'),
(34, 'filan', 'fisteku', 'filanfisteku@gmail.com', 'Filanfisteku', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `womenproducts`
--

CREATE TABLE `womenproducts` (
  `pid` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `womenproducts`
--

INSERT INTO `womenproducts` (`pid`, `image`, `description`, `price`) VALUES
(1, 'women-18.png', 'Maice per Femra', '35.0'),
(2, 'women-19.png', 'Fustan per Femra', '85.00'),
(3, 'women-21.png', 'Bluze per Femra', '45.00'),
(4, 'women-12.png', 'Duks per Femra', '50.00'),
(5, 'women-23.png', 'Duks per Femra', '65.00'),
(6, 'women-22.png', 'Duks per Femra', '69.00'),
(7, 'women-16.png', 'Xhaket per Femra', '70.00'),
(8, 'women-15.png', 'Bluze per Femra', '45.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kidsproducts`
--
ALTER TABLE `kidsproducts`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `mainproducts`
--
ALTER TABLE `mainproducts`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `produkti`
--
ALTER TABLE `produkti`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `womenproducts`
--
ALTER TABLE `womenproducts`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kidsproducts`
--
ALTER TABLE `kidsproducts`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mainproducts`
--
ALTER TABLE `mainproducts`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produkti`
--
ALTER TABLE `produkti`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `womenproducts`
--
ALTER TABLE `womenproducts`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
