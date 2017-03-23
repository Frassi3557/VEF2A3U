-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2017 at 11:34 AM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `verkefni-5`
--

-- --------------------------------------------------------

--
-- Table structure for table `myndir`
--

CREATE TABLE `myndir` (
  `mynd_id` int(11) NOT NULL,
  `notandi_id` int(11) DEFAULT NULL,
  `skraarheiti` varchar(120) NOT NULL,
  `myndaheiti` varchar(120) NOT NULL,
  `textalysing` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myndir`
--

INSERT INTO `myndir` (`mynd_id`, `notandi_id`, `skraarheiti`, `myndaheiti`, `textalysing`) VALUES
(1, 1, 'http://i.imgur.com/ouhpkv4.jpg', 'Hallgrímskirkja', 'Mynd af Hallgrímskirkju í snjóstormi'),
(2, 1, 'http://i.imgur.com/Dc3e2Kq.jpg', 'Kyoto', 'Gamalt húsasund í Kyoto, Japan'),
(3, 2, 'https://i.redd.it/9w95oaexxfky.jpg', 'Cherry Bloossoms', 'Krisuberjatré í Kyoto, Japan'),
(4, 2, 'http://i.imgur.com/QTi9nsC.jpg', 'BMW i8', 'Mynd af BMW i8, hybrid bíll');

-- --------------------------------------------------------

--
-- Table structure for table `notandi`
--

CREATE TABLE `notandi` (
  `notandi_id` int(11) NOT NULL,
  `nafn` varchar(150) NOT NULL,
  `netfang` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notandi`
--

INSERT INTO `notandi` (`notandi_id`, `nafn`, `netfang`) VALUES
(1, 'Snorri Freyr', 'freysi_freys@live.com'),
(2, 'testUser', 'whitehouse@whitehouse.gov');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myndir`
--
ALTER TABLE `myndir`
  ADD PRIMARY KEY (`mynd_id`),
  ADD KEY `notandi_id` (`notandi_id`);

--
-- Indexes for table `notandi`
--
ALTER TABLE `notandi`
  ADD PRIMARY KEY (`notandi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myndir`
--
ALTER TABLE `myndir`
  MODIFY `mynd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `notandi`
--
ALTER TABLE `notandi`
  MODIFY `notandi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `myndir`
--
ALTER TABLE `myndir`
  ADD CONSTRAINT `myndir_ibfk_1` FOREIGN KEY (`notandi_id`) REFERENCES `notandi` (`notandi_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
