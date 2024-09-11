-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 07:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rwoni`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', '2017-01-24 16:21:18', '05-10-2019 03:26:39 PM');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `message` varchar(300) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donater`
--

CREATE TABLE `donater` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donater`
--

INSERT INTO `donater` (`id`, `name`, `email`, `address`, `contactno`, `password`, `regDate`, `updationDate`) VALUES
(5, 'Doner 2', 'doner2@gmail.com', '', 4526317899, 'c908a95cd06e83fcd08218023d5301ba', '2019-09-29 15:55:51', NULL),
(10, 'donor 1', 'donor1@gmail.com', '', 1234567897, 'cc03e747a6afbbcbf8be7668acfebee5', '2021-10-29 10:58:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `Donation_name` varchar(255) DEFAULT NULL,
  `Food_type` varchar(200) DEFAULT NULL,
  `Food_Quntity` varchar(110) DEFAULT NULL,
  `Food_Hr` varchar(200) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `Special_note` varchar(200) NOT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `dis_area` int(11) DEFAULT NULL,
  `vname` int(11) DEFAULT NULL,
  `orderStatus` int(3) NOT NULL,
  `dis_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `userId`, `Donation_name`, `Food_type`, `Food_Quntity`, `Food_Hr`, `Location`, `Special_note`, `orderDate`, `dis_area`, `vname`, `orderStatus`, `dis_date`) VALUES
(28, 10, 'food', 'Veg', '5 Kg', '4 hour', 'Testing Donation collection address goes here', 'If you wanna add some special note', '2021-10-30 10:59:59', 9, 3, 3, '2021-11-02 15:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `donation_area`
--

CREATE TABLE `donation_area` (
  `id` int(11) NOT NULL,
  `donation_dis_area` varchar(255) DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation_area`
--

INSERT INTO `donation_area` (`id`, `donation_dis_area`, `Description`, `creationDate`, `updationDate`) VALUES
(9, 'Clg Road', '1500', '2020-01-25 06:04:48', NULL),
(10, 'xyz road', '1000 people', '2021-10-30 07:05:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleryimages`
--

CREATE TABLE `galleryimages` (
  `id` int(11) NOT NULL,
  `images` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleryimages`
--

INSERT INTO `galleryimages` (`id`, `images`, `Description`) VALUES
(1, '7.jpg', 'Food Wastage'),
(2, 'back.png', 'Food Wastage'),
(3, 'banImages.jpg', '<br>');

-- --------------------------------------------------------

--
-- Table structure for table `money_donation`
--

CREATE TABLE `money_donation` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `Special_note` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `money_donation`
--

INSERT INTO `money_donation` (`id`, `userId`, `amount`, `Special_note`, `date`) VALUES
(2, 10, '500', 'donate to needy people', '2021-10-29 11:00:35'),
(3, 10, '100', 'animal center', '2021-12-07 06:16:01');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contactno` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `name`, `email`, `contactno`, `address`, `password`, `regdate`) VALUES
(3, 'Volunteer 1', 'volunteer1@gmail.com', '1234567891', '', 'cc03e747a6afbbcbf8be7668acfebee5', '2021-10-29 10:42:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donater`
--
ALTER TABLE `donater`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation_area`
--
ALTER TABLE `donation_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleryimages`
--
ALTER TABLE `galleryimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `money_donation`
--
ALTER TABLE `money_donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donater`
--
ALTER TABLE `donater`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `donation_area`
--
ALTER TABLE `donation_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `galleryimages`
--
ALTER TABLE `galleryimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `money_donation`
--
ALTER TABLE `money_donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
