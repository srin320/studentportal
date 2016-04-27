-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2016 at 09:02 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL,
  `registration_no` bigint(50) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `tenth_per` varchar(255) NOT NULL,
  `twelve_per` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `valid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `hobbies` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `registration_no`, `fname`, `mname`, `lname`, `mobile`, `email`, `username`, `password`, `roll`, `dob`, `age`, `addr`, `tenth_per`, `twelve_per`, `program`, `dept`, `sem`, `gender`, `type`, `valid`, `image`, `hobbies`) VALUES
(1, 20130564, 'Srinath', '', 'Sheet', '9046962544', 'srinathsheet@gmail.com', 'Srin320', '123456789', '13/IT/40', '1994-07-31', '22 Years 4 Months 20 Days ', 'Torapara Nivedita Pally, P.O- Midnapore, Dist.- Paschim Medinipur, Pin - 721101 ,West Bengal', '84%', '85%', 'B.Tech', 'Information Technology', 'Sixth Semester', 'Male', 'a', 0, 'graduated.jpg', ''),
(2, 20130600, 'Ranganath', '', 'Kundu', '7031569874', 'ranganath0600@gmail.com', 'Ranga0600', '123456789', '13/IT/46', '1995-02-26', '21 Years 1 Months 15 Days ', 'Durgapur', '90%', '95%', 'B.Tech', 'Information Technology', 'Sixth Semester', 'Male', 'a', 0, 'yonetici-ekrani.jpg', ''),
(3, 20130490, 'Subhranil', 'Kumar', 'Chanda', '9045682145', 'subhranil@gmail.com', 'Subhra120', '123456', '13/IT/35', '1995-08-25', '21 Years 5 Months 14 Days ', 'kolkata', '90%', '95%', 'B.Tech', 'Information Technology', 'Sixth Semester', 'Male', 'a', 1, 'AddUser.png', ''),
(4, 20130565, 'Pratim', '', 'Sarkar', '9856478954', 'pratim@gmail.com', 'Pratim007', '12345', '13/IT/33', '1995-08-25', '21 Years 5 Months 14 Days ', 'Raigaunj', '89%', '88%', 'B.Tech', 'Information Technology', 'Sixth Semester', 'Male', 'a', 1, '1.jpg', ''),
(5, 20130552, 'Mohit ', 'Kumar ', 'Shaw', '8905645789', 'mohit@gmail.com', 'Mohit303', '12345', '13/IT/28', '1995-02-02', '21 Years 1 Months 9 Days ', 'Kolkata', '90%', '94%', 'B.Tech', 'Information Technology', 'Sixth Semester', 'Male', 'a', 1, 'user.png', ''),
(6, 20130444, 'Debottam', 'Kumar', 'Dutta', '9474023658', 'debottam@gmail.com', 'Debottam304', '12345', '13/MME/20', '1994-07-31', '21 Years 7 Months 6 Days ', 'Durgapur', '86%', '88%', 'B.Tech', 'Metallurgical And Materials Engineering', 'Sixth Semester', 'Male', 'a', 1, 'love-quotes-14_20140405T105132-272.jpg', ''),
(7, 20130666, 'Riki', '', 'Mondal', '9932564789', 'rikimondal@gmail.com', 'Riki304', '12345', '13/IT/17', '1994-05-22', '22 Years 2 Months 11 Days ', 'Kharagpur', '80%', '89%', 'B.Tech', 'Information Technology', 'Sixth Semester', 'Male', 'd', 1, 'cute-kitten-501_20140405T105132-318.jpg', ''),
(11, 20130569, 'Susunata', '', 'Paul', '8659464646', 'susnata@gmail.com', 'Susnata304', '12345', '13/IT/37', '1995-07-25', '21 Years 4 Months 13 Days ', 'Krishnanagar', '87%', '89%', 'B.Tech', 'Information Technology', 'Sixth Semester', 'Male', 'a', 1, 'received_814273658656176.jpeg', 'Music,Sports,'),
(15, 20130549, 'Subhrajyoti', '', 'Karmakar', '9474555555', 'subhrajyoti@gmail.com', 'Subhrajyoti212', '12345', '13/CE/45', '08/25/1995', '21 Years 5 Months 10 Days ', 'Raigaunj', '89%', '90%', 'B.Tech', 'Civil Engineering', 'Sixth Semester', 'Male', 'a', 1, 'Screenshot (7).png', 'Music,Reading,Art,Drama,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
