-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 08:26 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barbershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `ID_B` int(11) NOT NULL,
  `Name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Email_B` varchar(30) CHARACTER SET latin1 NOT NULL,
  `PhoneNumber` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Barber` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`ID_B`, `Name`, `Email_B`, `PhoneNumber`, `Barber`, `Date`) VALUES
(11, 's', 'a@b', '012-3456789', 'maynpower', '2022-12-03'),
(12, 'ahmad', 'ahmad@gmail.com', '012-3456789', 'brochol', '2022-11-23'),
(13, 'ahmad', 'ahmad@gmail.com', '012-3456789', 'brochol', '2022-11-23'),
(16, 'haikalaisy', 'haikalaisy@gmail.com', '012-54789587', 'captain', '2022-11-23'),
(25, 'ahmad', 'a@b', '012-54789587', 'maynpower', '2022-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Finishing Spray', '<h3>Features for Hair</h3>\r\n<ul>\r\n<li>Toughness</li>\r\n<li>Long Lasting,\r\n</ul>', '25.00', '0.00', 10, '1.webp', '2019-03-13 17:55:22'),
(2, 'Hair Cool Mud', '<h3>Features for Hair</h3>\r\n<ul>\r\n<li>Texture Improved</li>\r\n<li>Volume Improved</li>\r\n\r\n</ul>', '40.00', '0.00', 34, '2.webp', '2019-03-13 18:52:49'),
(3, 'Hair Serum', '<h3>Features for Hair</h3>\r\n<ul>\r\n<li>Soften</li>\r\n<li>Treatment</li>\r\n<li>Fragrance</li>\r\n<li>Protect</li>\r\n</ul>', '25.00', '0.00', 7, '3.webp', '2019-03-13 17:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Email` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Address` varchar(300) CHARACTER SET latin1 NOT NULL,
  `City` varchar(30) CHARACTER SET latin1 NOT NULL,
  `State` varchar(30) CHARACTER SET latin1 NOT NULL,
  `PostalCode` int(10) NOT NULL,
  `NameCard` varchar(30) CHARACTER SET latin1 NOT NULL,
  `Bank` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`ID`, `FullName`, `Email`, `Address`, `City`, `State`, `PostalCode`, `NameCard`, `Bank`) VALUES
(1, 'Aisy Haikal', 'aisy123@gmail.com', '123-jj-aa', 'KL', 'WP', 55100, 'AISY HAIKAL', 'maybank');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`ID_B`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `ID_B` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
