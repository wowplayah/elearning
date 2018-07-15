-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2017 at 04:05 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhouse`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectProperty` ()  NO SQL
SELECT 
a.property_name,
b.type_name,
a.property_description,
a.property_address,
a.property_region,
c.status_name,
a.property_price,
a.property_picture,
d.agent_fullname
FROM property_tb a 
JOIN type_tb b ON a.property_type_id=b.type_id
JOIN status_tb c ON a.property_status_id=c.status_id
JOIN agent_tb d ON a.property_agent_id=d.agent_id
ORDER BY a.property_id DESC$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `agent_tb`
--

CREATE TABLE `agent_tb` (
  `agent_id` int(11) NOT NULL,
  `agent_username` varchar(100) NOT NULL,
  `agent_email` varchar(250) NOT NULL,
  `agent_password` varchar(100) NOT NULL,
  `agent_fullname` varchar(200) NOT NULL,
  `agent_corporation` varchar(200) NOT NULL,
  `agent_address` text NOT NULL,
  `agent_phone` varchar(15) NOT NULL,
  `agent_description` text NOT NULL,
  `agent_region` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent_tb`
--

INSERT INTO `agent_tb` (`agent_id`, `agent_username`, `agent_email`, `agent_password`, `agent_fullname`, `agent_corporation`, `agent_address`, `agent_phone`, `agent_description`, `agent_region`) VALUES
(1, 'samantha', 'samanthashrek@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Samantha', 'Lippo Group', 'Tangerang, Banten', '081212120000', 'nothing', 'Lippo Village, Lippo Karawaci');

-- --------------------------------------------------------

--
-- Table structure for table `member_tb`
--

CREATE TABLE `member_tb` (
  `member_id` int(11) NOT NULL,
  `member_username` varchar(100) NOT NULL,
  `member_email` varchar(250) NOT NULL,
  `member_password` varchar(100) NOT NULL,
  `member_fullname` varchar(250) NOT NULL,
  `member_phone` varchar(15) NOT NULL,
  `member_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_tb`
--

INSERT INTO `member_tb` (`member_id`, `member_username`, `member_email`, `member_password`, `member_fullname`, `member_phone`, `member_address`) VALUES
(1, 'melindha', 'mameloops@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Melindha Handini', '081288889900', 'Tangerang, Banten');

-- --------------------------------------------------------

--
-- Table structure for table `property_tb`
--

CREATE TABLE `property_tb` (
  `property_id` int(11) NOT NULL,
  `property_type_id` int(11) NOT NULL,
  `property_name` varchar(250) NOT NULL,
  `property_address` text NOT NULL,
  `property_region` varchar(250) NOT NULL,
  `property_description` text NOT NULL,
  `property_status_id` int(11) NOT NULL,
  `property_picture` text NOT NULL,
  `property_price` bigint(20) NOT NULL,
  `property_agent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_tb`
--

INSERT INTO `property_tb` (`property_id`, `property_type_id`, `property_name`, `property_address`, `property_region`, `property_description`, `property_status_id`, `property_picture`, `property_price`, `property_agent_id`) VALUES
(1, 1, 'U-Residance', 'Lippo Karawaci, Kec Kelapa Dua, Kab. Tangerang, Banten.', 'Lippo Karawaci', 'Bathroom 1\nBedroom 1\nSmall kitchen', 1, 'uresidance.jpg', 450000000, 1),
(2, 2, 'Perumahan Taman Permata', 'Lippo Village Taman Ubud, Lippo Karawaci, Kec Kelapa Dua, Kab. Tangerang, Banten.', 'Lippo Karawaci', 'Kamar 3\nWc 1\nTrategis', 2, 'tmnpermata.jpg', 1200000000, 1),
(3, 1, 'Amartapura Apartment', 'Lippo Karawaci, Kec Kelapa Dua, Kab. Tangerang, Banten.', 'Lippo Karawaci', '4 Kamar, 1 Dapur', 1, 'amartapura.jpg', 1950000000, 1),
(4, 4, 'Kondominium Golf Karawaci', 'Jl. Boulevard Palem Raya, Klp. Dua, Tangerang, Banten ', 'Lippo Karawaci', 'Kamar kondominium 3 tidur ', 2, 'kongolfkrw.jpg', 870000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status_tb`
--

CREATE TABLE `status_tb` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_tb`
--

INSERT INTO `status_tb` (`status_id`, `status_name`) VALUES
(1, 'Rent'),
(2, 'Sell');

-- --------------------------------------------------------

--
-- Table structure for table `type_tb`
--

CREATE TABLE `type_tb` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_tb`
--

INSERT INTO `type_tb` (`type_id`, `type_name`) VALUES
(1, 'Apartment'),
(2, 'House'),
(3, 'Flats'),
(4, 'Condominium');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent_tb`
--
ALTER TABLE `agent_tb`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `member_tb`
--
ALTER TABLE `member_tb`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `property_tb`
--
ALTER TABLE `property_tb`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `status_tb`
--
ALTER TABLE `status_tb`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `type_tb`
--
ALTER TABLE `type_tb`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent_tb`
--
ALTER TABLE `agent_tb`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `member_tb`
--
ALTER TABLE `member_tb`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `property_tb`
--
ALTER TABLE `property_tb`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `status_tb`
--
ALTER TABLE `status_tb`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `type_tb`
--
ALTER TABLE `type_tb`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
