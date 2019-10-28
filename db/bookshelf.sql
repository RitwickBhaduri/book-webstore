-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2019 at 04:10 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshelf`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `id` int(12) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `dop` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `b_img` varchar(200) NOT NULL,
  `doa` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pdf` varchar(60) NOT NULL,
  `add_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`id`, `bname`, `aname`, `publisher`, `description`, `dop`, `type`, `b_img`, `doa`, `pdf`, `add_by`) VALUES
(2, 'cs', 'ads', 'bfr', 'qerlkdvmopernl;mv', '2019-01-18', 'Educational', 'lib5.jpg', '2019-01-01 13:35:06', '', ''),
(3, 'Letus C', 'Avijit Sahoo', 'good publisher', 'C porgraming book', '2019-05-02', 'Educational', '', '2019-01-01 13:50:33', '', ''),
(4, 'physics', 'sharma', 'dc', 'science', '2019-01-01', 'Educational', '', '2019-01-03 02:35:19', '', 'ritwickbhaduri7@gmail.com'),
(5, 'sfdsf', '', '', '', '0000-00-00', 'Select Type', '', '2019-01-03 02:46:15', '', 'ritwickbhaduri7@gmail.com'),
(6, 'dgfdh', '', '', '', '0000-00-00', 'Select Type', 'WhatsApp Image 2018-09-25 at 1.05.48 AM(1).jpeg', '2019-01-03 02:47:18', '', 'ritwickbhaduri7@gmail.com'),
(7, 'reyter', '', '', '', '0000-00-00', 'Select Type', 'php code.png', '2019-01-03 02:51:09', '', 'ritwickbhaduri7@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_members`
--

CREATE TABLE `tbl_members` (
  `id` int(12) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `desc` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(300) NOT NULL,
  `prof` varchar(50) NOT NULL,
  `lang` varchar(50) NOT NULL,
  `web` varchar(200) NOT NULL,
  `img_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_members`
--

INSERT INTO `tbl_members` (`id`, `fname`, `lname`, `email`, `phone`, `pass`, `desc`, `dob`, `address`, `prof`, `lang`, `web`, `img_url`) VALUES
(4, 'Ritwick', 'Bhaduri', 'ritwickbhaduri7@gmail.com', '9163925128', '1111', 'dbftbhrgfbdfvfwes', '2019-01-10', 'kolkata', 'student', 'English', '', 'TigerHawks Black.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_members`
--
ALTER TABLE `tbl_members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_members`
--
ALTER TABLE `tbl_members`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
