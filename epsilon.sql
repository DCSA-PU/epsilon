-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2017 at 10:31 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epsilon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) NOT NULL,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `clg_usr` varchar(12) NOT NULL,
  `clg_pswd` varchar(50) NOT NULL,
  `id` int(3) NOT NULL,
  `phone` int(10) NOT NULL,
  `alt_phone` int(10) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `team_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`clg_usr`, `clg_pswd`, `id`, `phone`, `alt_phone`, `email`, `team_name`) VALUES
('abc78', '53d6cdb2e5c5a70d15995b2ac2f1af1b', 2, 2147483647, 0, 'vkvd@gmail.com', 'MARSHMALLOW'),
('dcsa1234', 'd41d8cd98f00b204e9800998ecf8427e', 1, 4, 0, 'dcsa@puchd.ac.in', 'def');

-- --------------------------------------------------------

--
-- Table structure for table `colleges_name`
--

CREATE TABLE `colleges_name` (
  `clg_name` varchar(50) NOT NULL,
  `id` int(3) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colleges_name`
--

INSERT INTO `colleges_name` (`clg_name`, `id`, `status`) VALUES
('DCSA', 1, 0),
('CHITKARA UNIVERSITY', 2, 1),
('GCG42', 3, 0),
('CHANDIGARH UNIVERSITY', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `coordinators`
--

CREATE TABLE `coordinators` (
  `cor_id` int(11) NOT NULL,
  `cor_name` varchar(30) NOT NULL,
  `cor_phone` varchar(12) NOT NULL,
  `cor_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coordinators`
--

INSERT INTO `coordinators` (`cor_id`, `cor_name`, `cor_phone`, `cor_email`) VALUES
(1, 'Akshay Kapoor', '8699934202', 'akshay.kapoor392@gmail.com'),
(2, 'Gurkiran Kaur', '8699901213', 'rubalpartal20@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `images` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL,
  `max` int(1) NOT NULL,
  `instructions` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `images`, `description`, `max`, `instructions`) VALUES
(1, 'CODIFICA', 'codifica.jpg', '1.	Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>2.	Lorem Ipsum has been the industry''s standard dummy text ever since3.the 1500s, when an unknown printer took a galley of type and scrambled', 2, 'it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged'),
(2, 'WEB SPACE', 'webspace.jpg', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. ', 2, 'it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by'),
(3, 'BUGGER OFF', 'buggeroff1.jpg', '', 2, ''),
(4, 'QUERY MINER', 'queryminer.jpg', '', 2, ''),
(5, 'TECH MAZE', 'techmaze.png', '', 4, ''),
(6, 'E-KALA', 'ekala2.jpg', '', 2, ''),
(7, 'BECH DE', 'admad2.jpg', '', 6, ''),
(8, 'PASTE THE WASTE', 'waste1.jpg', '', 2, ''),
(9, 'GENIUS HUNT', 'geniushunt.jpg', '', 4, ''),
(10, 'SHAKE THAT BOOTY', 'dance1.jpg', '', 6, ''),
(11, 'WAR OF WORDS', 'warofwords.jpg', '', 2, ''),
(12, 'LIGHTS CAMERA ACTION', 'mm1.jpg', '', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `feedback` varchar(800) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`, `email`) VALUES
(1, 'Abc', ',mvmgkg', 'dm@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `students_data`
--

CREATE TABLE `students_data` (
  `s_name` varchar(30) NOT NULL,
  `s_id` int(11) NOT NULL,
  `s_phn` varchar(12) NOT NULL,
  `s_email` varchar(30) NOT NULL,
  `e_id` int(3) NOT NULL,
  `c_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_data`
--

INSERT INTO `students_data` (`s_name`, `s_id`, `s_phn`, `s_email`, `e_id`, `c_id`) VALUES
('xbdndg', 5, '49839', 'dfhdgj@gmail.com', 2, 1),
('abcchgg', 6, '84789', 'km.sd@gmail.com', 2, 1),
('hg', 7, '9586086', 'fjwe@gmail.com', 5, 1),
('hg', 11, '9586086', 'fjwe@gmail.com', 5, 1),
('fgll', 12, '974975', 'jljlvj@gmail.com', 5, 2),
('vkjrlk', 13, '9903285', 'jbkdjbk@gmail.com', 5, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`clg_usr`),
  ADD UNIQUE KEY `name` (`id`);

--
-- Indexes for table `colleges_name`
--
ALTER TABLE `colleges_name`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_3` (`id`);

--
-- Indexes for table `coordinators`
--
ALTER TABLE `coordinators`
  ADD PRIMARY KEY (`cor_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_data`
--
ALTER TABLE `students_data`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `colleges_name`
--
ALTER TABLE `colleges_name`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `coordinators`
--
ALTER TABLE `coordinators`
  MODIFY `cor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `students_data`
--
ALTER TABLE `students_data`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
