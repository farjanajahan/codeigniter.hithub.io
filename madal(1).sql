-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2018 at 06:55 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madal`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `app_id` int(11) NOT NULL,
  `app_date` varchar(11) NOT NULL,
  `app_url` varchar(255) NOT NULL,
  `app_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`app_id`, `app_date`, `app_url`, `app_name`) VALUES
(1, '1375465528', 'http://localhost/1', 'My Appointment'),
(2, '1375665527', 'http://localhost/2', 'My Second Appointment'),
(3, '1375589575', 'http://localhost/3', 'My Third Appointment'),
(4, '1381167927', 'http://localhost/4', 'My Fourth Name');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `cdate` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `contact`, `service`, `cdate`, `comment`, `status`) VALUES
(1, 'Robin Hossain', 'robin@faru.maria', '420420', 'Fukating', '14th February', 'A din amaka saj tai hoba', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_image`
--

CREATE TABLE `gallery_image` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_image`
--

INSERT INTO `gallery_image` (`id`, `image_name`) VALUES
(1, 'salon4.jpg'),
(2, 'html.jpg'),
(3, 'por6.jpg'),
(4, 'por4.jpg'),
(5, 'por5.jpg'),
(6, 'por6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `salon_image`
--

CREATE TABLE `salon_image` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salon_image`
--

INSERT INTO `salon_image` (`id`, `image_name`) VALUES
(1, 'por3.jpg'),
(2, 'por4.jpg'),
(3, 'salon4.jpg'),
(4, 'salon4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `description`) VALUES
(1, 'Mahabub wants his wife to look good, especially when it is the time to party. The idea behind hosting or going to parties is to meet the people you know as well as to make new friends. At the same time, you try to impress others by your dressing sense and looks, along with the way you carry yourself. The self-confidence comes when you know that you are looking perfect, with the right make up and a dazzling ensemble. However, while getting ready for a night out, you need to know that party makeup also has some limits and rules. New makeup trends are: Gloss, Glitter and Shimmer. Walk in today for Persona Special Makeup.');

-- --------------------------------------------------------

--
-- Table structure for table `services_image`
--

CREATE TABLE `services_image` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_image`
--

INSERT INTO `services_image` (`id`, `image_name`) VALUES
(1, 'javascript.jpg'),
(2, 'skin.jpg'),
(3, 'make.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `special_offer`
--

CREATE TABLE `special_offer` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `special_offer`
--

INSERT INTO `special_offer` (`id`, `title`, `description`, `status`) VALUES
(1, 'Eid Special Offer', '50% off in coming Eid', 1),
(6, 'paji', 'aji', 1),
(7, 'bartho sayal', 'sayal er booka jala', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_age`, `user_mobile`) VALUES
(2, 'Ehtesham', 'ehtesham@gmail.com', '123', 23, 2147483647),
(5, 'faru', 'faru@jaru.com', '202cb962ac59075b964b07152d234b70', 16, 111212);

-- --------------------------------------------------------

--
-- Table structure for table `welcome`
--

CREATE TABLE `welcome` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `welcome`
--

INSERT INTO `welcome` (`id`, `description`) VALUES
(1, 'Robin wants his wife to look good, especially when it is the time to party. The idea behind hosting or going to parties is to meet the people you know as well as to make new friends. At the same time, you try to impress others by your dressing sense and looks, along with the way you carry yourself. The self-confidence comes when you know that you are looking perfect, with the right make up and a dazzling ensemble. However, while getting ready for a night out, you need to know that party makeup also has some limits and rules. New makeup trends are: Gloss, Glitter and Shimmer. Walk in today for Persona Special Makeup.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_image`
--
ALTER TABLE `gallery_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salon_image`
--
ALTER TABLE `salon_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_image`
--
ALTER TABLE `services_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_offer`
--
ALTER TABLE `special_offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `welcome`
--
ALTER TABLE `welcome`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery_image`
--
ALTER TABLE `gallery_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `salon_image`
--
ALTER TABLE `salon_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services_image`
--
ALTER TABLE `services_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `special_offer`
--
ALTER TABLE `special_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `welcome`
--
ALTER TABLE `welcome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
