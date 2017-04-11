-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2016 at 03:01 PM
-- Server version: 5.6.29
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `searchengine`
--

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `url` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `title`, `description`, `url`) VALUES
(1, 'Apple', 'The home of the Macbook Pro.', 'http://www.apple.com'),
(2, 'Amazon Prime', 'Get what you need fast.', 'https://www.amazon.com/prime'),
(3, 'Amazon UK', 'Amazon, but in the UK', 'http://www.amazon.com/uk'),
(4, 'Apple Products on Amazon', 'Apple on Amazon.', 'http://www.amazon.com/products/apple');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
