-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 09:19 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `lender_user`
--

CREATE TABLE `lender_user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lender_user`
--

INSERT INTO `lender_user` (`id`, `firstname`, `lastname`, `email`, `phone`, `username`, `password`, `usertype`) VALUES
(1, 'yeabsra', 'habtu', 'yeabsrahabtu@gmail.com', 938333383, 'lender', '0910670022', 'lender'),
(2, 'a', 'a', 'yeabsrahabtu@gmail.com', 9090909, 'a', '090909', 'lender');

-- --------------------------------------------------------

--
-- Table structure for table `lesser_user`
--

CREATE TABLE `lesser_user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesser_user`
--

INSERT INTO `lesser_user` (`id`, `firstname`, `lastname`, `email`, `phone`, `username`, `password`, `usertype`) VALUES
(1, 'yeabsra', 'habtu', 'yabaimable@gmail.com', 910670022, 'aimable', '0910670022', 'lesser');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `country` text NOT NULL,
  `city` text NOT NULL,
  `subcity` text NOT NULL,
  `contact` int(20) NOT NULL,
  `rent_type` varchar(255) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `ward` int(100) NOT NULL,
  `tole` varchar(100) NOT NULL,
  `total_room` int(50) NOT NULL,
  `living_room` int(50) NOT NULL,
  `bed_room` int(50) NOT NULL,
  `kitchen` int(50) NOT NULL,
  `bathroom` int(50) NOT NULL,
  `square_meter` int(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `upload_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `country`, `city`, `subcity`, `contact`, `rent_type`, `property_type`, `price`, `ward`, `tole`, `total_room`, `living_room`, `bed_room`, `kitchen`, `bathroom`, `square_meter`, `description`, `image1`, `image2`, `image3`, `image4`, `image5`, `upload_by`) VALUES
(1, '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 12, '', '', '', '', '', '', ''),
(2, '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 34, '', 'house.jpg', '', '', '', '', ''),
(3, '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 34, '', '', 'images/carousel.png', '', '', '', 'lender'),
(4, '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 67, '', 'images/', 'images/house.jpg', 'images/', 'images/', 'images/', 'lender'),
(6, '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 45, '', 'images/', 'images/carousel.png', 'images/', 'images/', 'images/', 'lender'),
(7, '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 34, '', 'images/', 'images/', 'images/', 'images/', 'images/', 'lender'),
(8, '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 45, 56, '', 'images/', 'images/', 'images/', 'images/', 'images/', 'lender'),
(9, '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 56, '', 'images/', 'images/', 'images/', 'images/', 'images/', 'lender'),
(10, '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 45, '', 'images/', 'images/', 'images/', 'images/', 'images/', 'lender'),
(11, '', '', '', 0, '', '', 0, 0, '', 0, 0, 0, 0, 0, 34, '', 'images/', 'images/', 'images/', 'images/', 'images/', 'a'),
(12, 'ethiopia', 'addisababa', 'arada', 910670033, 'Room', 'vila', 12000, 12, '23er', 4, 1, 1, 1, 1, 1200, 'hey ', 'images/house.jpg', 'images/logo.png', 'images/carousel.png', 'images/', 'images/', 'lender'),
(13, 'Ethiopia', 'Addis Ababa', 'Arada', 910670033, 'Full House Rent', 'Apartement', 7890, 89, '56fgt7', 8, 2, 4, 1, 2, 456, 'there are different things that are exist around the place like school nearly 10m to east an another thing are there', 'images/', 'images/logo.png', 'images/', 'images/', 'images/', 'lender');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lender_user`
--
ALTER TABLE `lender_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesser_user`
--
ALTER TABLE `lesser_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lender_user`
--
ALTER TABLE `lender_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lesser_user`
--
ALTER TABLE `lesser_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
