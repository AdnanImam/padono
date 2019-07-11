-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2019 at 06:41 PM
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
  `plant_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `name`, `product_type`, `manufacturer`, `description`, `start_operation`, `operation_hours_day`, `operation_hours_month`, `operation_hours_year`, `plant_id`, `user_id`, `created_at`) VALUES
(3, 'Mesin', '3 SPINDLE 5 AXIS\"F\"', 'ABB METALLUGRY AB', 'Cool', '2019-07-03', 2, 12, 23, 3, 11, '2019-07-02 21:12:11'),
(4, 'Hulk Laser', 'HS 75R', 'HUFFMAN', 'fds', '2019-07-16', 2, 32, 22, 3, 11, '2019-07-02 22:47:57'),
(5, 'Molding', 'QFC 1.2 X 2-1400', 'CINCINNATI MILACRON', 'Test', '2019-07-10', 2, 24, 200, 4, 11, '2019-07-07 13:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `master_data`
--

CREATE TABLE `master_data` (
  `id` int(11) NOT NULL,
  `failure_start` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `start_repair` timestamp NULL DEFAULT NULL,
  `repair_finish` timestamp NULL DEFAULT NULL,
  `ttr` float DEFAULT NULL,
  `ttf` float DEFAULT NULL,
  `dt` float DEFAULT NULL,
  `subsystem_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_data`
--

INSERT INTO `master_data` (`id`, `failure_start`, `start_repair`, `repair_finish`, `ttr`, `ttf`, `dt`, `subsystem_id`, `user_id`) VALUES
(11, '2019-07-10 14:19:55', '2016-05-30 07:06:00', '2016-05-30 07:57:00', 0.51, 0, 6.22, 10, 11),
(12, '2019-07-10 14:19:55', '2017-02-06 06:30:00', '2017-02-06 08:00:00', 1.3, 6.22, 6.19, 10, 11),
(13, '2019-07-10 14:19:55', '2017-02-08 04:30:00', '2017-02-08 07:00:00', 2.3, 6.19, 7.19, 10, 11),
(14, '2019-07-10 14:19:55', '2017-02-12 02:00:00', '2017-02-12 03:00:00', 1, 7.19, 11.19, 10, 11),
(15, '2019-07-10 14:19:55', '2017-03-04 06:40:00', '2017-03-04 07:30:00', 0.5, 11.19, 6.49, 10, 11),
(16, '2019-07-10 14:19:55', '2017-03-04 06:30:00', '2017-03-04 07:30:00', 1, 6.49, 6.49, 10, 11),
(17, '2019-07-10 14:19:55', '2017-07-19 19:00:00', '2017-07-19 20:00:00', 1, 6.49, 18.19, 10, 11),
(18, '2019-07-10 14:19:55', '2018-01-21 04:00:00', '2018-01-21 08:15:00', 4.15, 18.19, 6.4, 10, 11),
(19, '2019-07-10 14:19:55', '2018-02-21 14:00:00', '2018-02-21 15:00:00', 1, 6.4, 23.19, 10, 11),
(20, '2019-07-10 14:19:55', '2018-03-01 07:15:00', '2018-03-01 07:45:00', 0.3, 23.19, 6.34, 10, 11),
(21, '2019-07-10 14:19:55', '2018-03-08 09:45:00', '2018-03-10 13:00:00', 3.15, 6.34, 1.19, 10, 11),
(22, '2019-07-10 14:19:55', '2018-03-21 21:10:00', '2018-03-21 23:15:00', 2.5, 1.19, 15.4, 10, 11),
(23, '2019-07-10 14:19:55', '2018-04-11 03:10:00', '2018-04-11 04:00:00', 0.5, 15.4, 10.19, 10, 11),
(24, '2019-07-10 14:19:55', '2018-05-09 22:30:00', '2018-05-10 00:00:00', 1.3, 10.19, 14.19, 10, 11),
(25, '2019-07-10 14:19:55', '2018-08-07 08:30:00', '2018-08-07 08:45:00', 0.15, 14.19, 5.34, 10, 11),
(26, '2019-07-10 14:19:55', '2018-09-14 22:00:00', '2018-09-14 23:15:00', 1.15, 5.34, 15.4, 10, 11),
(27, '2019-07-10 14:19:55', '2018-10-01 05:00:00', '2018-10-01 06:00:00', 1, 15.4, 8.19, 10, 11),
(96, '2019-07-11 15:44:39', '2016-05-30 07:06:00', '2016-05-30 08:57:00', 1.51, 0, 6.47, 11, 11),
(97, '2019-07-11 15:44:39', '2017-02-06 06:30:00', '2017-02-06 10:00:00', 3.3, 6.47, 5.44, 11, 11),
(98, '2019-07-11 15:44:39', '2017-02-08 04:30:00', '2017-02-08 08:00:00', 3.3, 5.44, 7.44, 11, 11),
(99, '2019-07-11 15:44:39', '2017-02-12 02:00:00', '2017-02-12 05:00:00', 3, 7.44, 10.44, 11, 11),
(100, '2019-07-11 15:44:39', '2017-03-04 06:40:00', '2017-03-04 07:30:00', 0.5, 10.44, 8.14, 11, 11),
(101, '2019-07-11 15:44:39', '2017-03-04 06:30:00', '2017-03-04 07:30:00', 1, 8.14, 8.14, 11, 11),
(102, '2019-07-11 15:44:39', '2017-07-19 19:00:00', '2017-07-19 20:00:00', 1, 8.14, 19.44, 11, 11),
(103, '2019-07-11 15:44:39', '2018-01-21 04:00:00', '2018-01-21 08:15:00', 4.15, 19.44, 7.29, 11, 11),
(104, '2019-07-11 15:44:39', '2018-02-21 14:00:00', '2018-02-21 15:00:00', 1, 7.29, 0.44, 11, 11),
(105, '2019-07-11 15:44:39', '2018-03-01 07:15:00', '2018-03-01 07:45:00', 0.3, 0.44, 7.59, 11, 11),
(106, '2019-07-11 15:44:39', '2018-03-08 09:45:00', '2018-03-10 13:00:00', 3.15, 7.59, 2.44, 11, 11),
(107, '2019-07-11 15:44:39', '2018-03-21 21:10:00', '2018-03-21 23:15:00', 2.5, 2.44, 16.29, 11, 11),
(108, '2019-07-11 15:44:39', '2018-04-11 03:10:00', '2018-04-11 04:00:00', 0.5, 16.29, 11.44, 11, 11),
(109, '2019-07-11 15:44:39', '2018-05-09 22:30:00', '2018-05-10 00:00:00', 1.3, 11.44, 15.44, 11, 11),
(110, '2019-07-11 15:44:39', '2018-08-07 08:30:00', '2018-08-07 08:45:00', 0.15, 15.44, 6.59, 11, 11),
(111, '2019-07-11 15:44:39', '2018-09-14 22:00:00', '2018-09-14 23:15:00', 1.15, 6.59, 16.29, 11, 11),
(112, '2019-07-11 15:44:39', '2018-10-01 05:00:00', '2018-10-01 06:00:00', 1, 16.29, 9.44, 11, 11);

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `id` int(10) UNSIGNED NOT NULL,
  `plant` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`id`, `plant`, `description`, `user_id`, `created_at`) VALUES
(3, 'PLANT-I', 'Maintenance', 11, '2019-07-02 20:47:20'),
(4, 'PT. Dirgantara INDONESIA', 'description...', 11, '2019-07-07 13:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `subsystems`
--

CREATE TABLE `subsystems` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `mttr` float DEFAULT NULL,
  `mttf` float DEFAULT NULL,
  `mdt` float DEFAULT NULL,
  `failure_rate` float DEFAULT NULL,
  `corrective_lost_time` float DEFAULT NULL,
  `downtime_lost_time` float DEFAULT NULL,
  `corrective_lpc` float DEFAULT NULL,
  `corrective_ec` float DEFAULT NULL,
  `corrective_lmc` float DEFAULT NULL,
  `corrective_cour` float DEFAULT NULL,
  `downtime_lpc` float DEFAULT NULL,
  `downtime_ec` float DEFAULT NULL,
  `downtime_lmc` float DEFAULT NULL,
  `downtime_cour` float DEFAULT NULL,
  `asset_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subsystems`
--

INSERT INTO `subsystems` (`id`, `name`, `description`, `mttr`, `mttf`, `mdt`, `failure_rate`, `corrective_lost_time`, `downtime_lost_time`, `corrective_lpc`, `corrective_ec`, `corrective_lmc`, `corrective_cour`, `downtime_lpc`, `downtime_ec`, `downtime_lmc`, `downtime_cour`, `asset_id`, `user_id`, `created_at`) VALUES
(5, 'Piringan', 'Piringan P567F', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 11, '2019-07-02 23:34:02'),
(6, 'Roda', 'Roda R456', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 11, '2019-07-02 23:39:44'),
(7, 'Conveyor', 'Conve FB167', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 11, '2019-07-02 23:39:44'),
(8, 'Centerplate', 'Center FG679', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 11, '2019-07-02 23:34:02'),
(10, 'Conveyor', 'conveyor', 1.23262, 8.96875, 8.84409, 0.111498, 2.46524, 17.6882, 2958290, 98609.6, 34371.1, 3091270, 21225800, 707527, 246614, 22180000, 5, 11, '2019-07-07 13:34:31'),
(11, 'Centerplate', 'Centerplate', 1.58585, 8.81629, 9.33882, 0.113426, 7.92925, 46.6941, 9515100, 317170, 110552, 9942820, 56032900, 1867760, 651024, 58551700, 5, 11, '2019-07-11 15:23:09');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master_data`
--
ALTER TABLE `master_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `plant`
--
ALTER TABLE `plant`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subsystems`
--
ALTER TABLE `subsystems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
