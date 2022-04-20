-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 07:39 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `union`
--

-- --------------------------------------------------------

--
-- Table structure for table `trade`
--

CREATE TABLE `trade` (
  `id` int(50) NOT NULL,
  `t_date` varchar(15) NOT NULL,
  `t_licence_no` varchar(30) NOT NULL,
  `t_licence_day` varchar(15) NOT NULL,
  `t_renewal_y` varchar(15) NOT NULL,
  `t_renewal_d` varchar(15) NOT NULL,
  `t_word` varchar(10) NOT NULL,
  `t_village` varchar(100) NOT NULL,
  `t_holding` varchar(20) NOT NULL,
  `t_business_name` varchar(200) NOT NULL,
  `t_business_type` varchar(200) NOT NULL,
  `t_owner` varchar(100) NOT NULL,
  `t_owner_dad` varchar(100) NOT NULL,
  `t_owner_mom` varchar(100) NOT NULL,
  `t_owner_adr` varchar(200) NOT NULL,
  `t_owner_adr_pr` varchar(200) NOT NULL,
  `t_owner_adr_perm` varchar(200) NOT NULL,
  `t_valid` varchar(50) NOT NULL,
  `t_nid` varchar(20) NOT NULL,
  `t_mobile` varchar(15) NOT NULL,
  `t_trade_fee` int(20) NOT NULL,
  `t_back_fee` int(20) NOT NULL,
  `t_income_tax` int(20) NOT NULL,
  `t_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trade`
--

INSERT INTO `trade` (`id`, `t_date`, `t_licence_no`, `t_licence_day`, `t_renewal_y`, `t_renewal_d`, `t_word`, `t_village`, `t_holding`, `t_business_name`, `t_business_type`, `t_owner`, `t_owner_dad`, `t_owner_mom`, `t_owner_adr`, `t_owner_adr_pr`, `t_owner_adr_perm`, `t_valid`, `t_nid`, `t_mobile`, `t_trade_fee`, `t_back_fee`, `t_income_tax`, `t_img`) VALUES
(1, '৩০-১২-২০২০', '১৪৫৫৫', '৩০-১২-২০২০', '৩০-১২-২০২০', '৩০-১২-২০২০', '৫', 'বাউরঘড়িয়া', '৫২৫৬৪', 'রফিক এন্টারপ্রাইজ', 'মুদি', 'আব্দুর রহমান', 'ফরিদ মিয়া', 'খুশবা বেগম', 'নতুনবাজার', 'বাউরঘড়িয়া', 'বাউরঘড়িয়া', '২০২২', '2147483647', '2147483647', 0, 0, 0, '2018-03-02-12-00-19-979.jpg'),
(2, '৩০-১২-২০২০', '১৪৫৫৫', '৩০-১২-২০২০', '৩০-১২-২০২০', '৩০-১২-২০২০', '৫', 'বাউরঘড়িয়া', '৫২৫৬৪', 'রফিক এন্টারপ্রাইজ', 'মুদি', 'আব্দুর রহমান', 'ফরিদ মিয়া', 'খুশবা বেগম', 'নতুনবাজার', 'বাউরঘড়িয়া', 'বাউরঘড়িয়া', '২০২২', '2147483647', '2147483647', 0, 0, 0, '2018-03-02-12-00-19-979.jpg'),
(3, '৩০-১২-২০২০', '১৪৫৫৫', '৩০-১২-২০২০', '৩০-১২-২০২০', '৩০-১২-২০২০', '৮', 'বাউরঘড়িয়া', '৫২৫৬৪', 'রফিক এন্টারপ্রাইজ', 'মুদি', 'আব্দুর রহমান', 'ফরিদ মিয়া', 'খুশবা বেগম', 'নতুনবাজার', 'বাউরঘড়িয়া', 'বাউরঘড়িয়া', '২০২২', '2147483647', '2147483647', 0, 0, 0, 'IMG_2017.jpg'),
(4, '৩০-১২-২০২০', '১৪৫৫৫', '৩০-১২-২০২০', '৩০-১২-২০২০', '৩০-১২-২০২০', '৭', 'বাউরঘড়িয়া', '৫২৫৬৪', 'রফিক এন্টারপ্রাইজ', 'মুদি', 'আব্দুর রহমান', 'ফরিদ মিয়া', 'খুশবা বেগম', 'নতুনবাজার', 'বাউরঘড়িয়া', 'বাউরঘড়িয়া', '২০২২', '2147483647', '2147483647', 0, 0, 0, 'IMG_2017.jpg'),
(5, '৩০-১২-২০২০', '১৪৫৫৫', '৩০-১২-২০২০', '৩০-১২-২০২০', '৩০-১২-২০২০', '২', 'বাউরঘড়িয়া', '৫২৫৬৪', 'রফিক এন্টারপ্রাইজ', 'মুদি', 'আব্দুর রহমান', 'ফরিদ মিয়া', 'খুশবা বেগম', 'নতুনবাজার', 'বাউরঘড়িয়া', 'বাউরঘড়িয়া', '২০২২', '2147483647', '2147483647', 20, 30, 40, '2018-03-05-19-02-42-410.jpg'),
(6, '৩০-১২-২০২০', '১৪৫৫৫', '৩০-১২-২০২০', '৩০-১২-২০২০', '৩০-১২-২০২০', '২', 'বাউরঘড়িয়া', '৫২৫৬৪', 'রফিক এন্টারপ্রাইজ', 'মুদি', 'আব্দুর রহমান', 'ফরিদ মিয়া', 'খুশবা বেগম', 'নতুনবাজার', 'বাউরঘড়িয়া', 'বাউরঘড়িয়া', '২০২২', '2147483647', '2147483647', 20, 30, 40, '2018-06-23-16-54-56-795.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trade`
--
ALTER TABLE `trade`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trade`
--
ALTER TABLE `trade`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
