-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 03:14 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblogin_padono`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `start_operation` date NOT NULL,
  `operation_hours_day` int(11) NOT NULL,
  `operation_hours_month` int(11) NOT NULL,
  `operation_hours_year` int(11) NOT NULL,
  `plant_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `name`, `product_type`, `manufacturer`, `description`, `start_operation`, `operation_hours_day`, `operation_hours_month`, `operation_hours_year`, `plant_id`, `user_id`, `created_at`) VALUES
(3, 'Mesin', '3 SPINDLE 5 AXIS\"F\"', 'ABB METALLUGRY AB', 'Cool', '2019-07-03', 2, 12, 23, 0000000003, 11, '2019-07-02 21:12:11'),
(4, 'Hulk Laser', 'HS 75R', 'HUFFMAN', 'fds', '2019-07-16', 2, 32, 22, 0000000003, 11, '2019-07-02 22:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `master_data`
--

CREATE TABLE `master_data` (
  `id` int(11) NOT NULL,
  `failure_start` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `start_repair` timestamp NULL DEFAULT NULL,
  `repair_finish` timestamp NULL DEFAULT NULL,
  `subsystem_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `plant` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`id`, `plant`, `description`, `user_id`, `created_at`) VALUES
(0000000003, 'PLANT-I', 'Maintenance', 11, '2019-07-02 20:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `subsystems`
--

CREATE TABLE `subsystems` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `asset_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subsystems`
--

INSERT INTO `subsystems` (`id`, `name`, `description`, `asset_id`, `user_id`, `created_at`) VALUES
(5, 'Piringan', 'Piringan P567F', 4, 11, '2019-07-02 23:34:02'),
(6, 'Roda', 'Roda R456', 3, 11, '2019-07-02 23:39:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `address` text,
  `company` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `is_complete_profile` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `address`, `company`, `position`, `photo`, `is_complete_profile`) VALUES
(1, 'Hari Nugroho', 'harinugroho0025@gmail.com', 'harinugroho', 'f67ba9d9c9f5c873281c18b95b23d896', '', '', '', NULL, 0),
(11, 'Rafli Syam', 'nocturaf@gmail.com', 'nocturaf', '5f4dcc3b5aa765d61d8327deb882cf99', 'Jl. Adhiyaksa Barat 3', 'PT. Shirobyte', 'Web Developer', 'nocturaf_1562036518.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_data`
--
ALTER TABLE `master_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subsystems`
--
ALTER TABLE `subsystems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_data`
--
ALTER TABLE `master_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subsystems`
--
ALTER TABLE `subsystems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
