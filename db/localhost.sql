-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 17, 2020 at 07:25 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_helpdesk`
--
CREATE DATABASE IF NOT EXISTS `homehelper` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `homehelper`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_case`
--

CREATE TABLE `tbl_case` (
  `id` int(11) NOT NULL,
  `case_type` varchar(100) NOT NULL,
  `case_detail` text NOT NULL,
  `case_loc` varchar(200) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_email` varchar(50) NOT NULL,
  `p_img` varchar(50) NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_case`
--
ALTER TABLE `tbl_case`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_case`
--
ALTER TABLE `tbl_case`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
