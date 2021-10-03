-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2018 at 07:52 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chatid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `chatroomid` int(11) NOT NULL,
  `message` varchar(200) NOT NULL,
  `chat_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chatid`, `userid`, `chatroomid`, `message`, `chat_date`) VALUES
(1, 1, 3, 'hi', '2018-06-15 09:31:27'),
(2, 1, 1, 'hi', '2018-06-15 09:31:52'),
(3, 4, 3, 'hi admin', '2018-06-15 09:36:00'),
(4, 4, 2, 'hi', '2018-06-15 09:36:31'),
(5, 1, 4, 'hi', '2018-06-15 09:56:22'),
(6, 4, 4, 'hello', '2018-06-15 09:57:44'),
(7, 1, 4, 'hey', '2018-06-15 09:58:34'),
(8, 5, 4, 'Nice to meet you', '2018-06-18 10:04:27'),
(9, 4, 4, 'hi', '2018-06-19 15:21:19'),
(10, 8, 4, 'I love you so much thae', '2018-06-19 15:22:39'),
(11, 4, 2, 'hi', '2018-06-22 09:33:30'),
(12, 11, 2, 'Nice to meet you', '2018-06-22 10:16:40'),
(13, 13, 2, 'hi', '2018-06-28 15:33:52');

-- --------------------------------------------------------

--
-- Table structure for table `chatroom`
--

CREATE TABLE `chatroom` (
  `chatroomid` int(11) NOT NULL,
  `chat_name` varchar(60) NOT NULL,
  `date_created` datetime NOT NULL,
  `chat_password` varchar(30) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatroom`
--

INSERT INTO `chatroom` (`chatroomid`, `chat_name`, `date_created`, `chat_password`, `userid`) VALUES
(1, 'My First Chat Room', '2017-09-11 13:20:18', 'leeann', 2),
(2, 'Free Entrance :)', '2017-09-11 13:20:51', '', 3),
(3, 'Admin Chat Room', '2017-09-11 13:21:24', 'admin', 1),
(4, 'user chat room', '2018-06-15 09:55:26', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat_member`
--

CREATE TABLE `chat_member` (
  `chat_memberid` int(11) NOT NULL,
  `chatroomid` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_member`
--

INSERT INTO `chat_member` (`chat_memberid`, `chatroomid`, `userid`) VALUES
(1, 1, 2),
(2, 2, 3),
(3, 3, 1),
(4, 3, 3),
(8, 4, 1),
(9, 4, 2),
(10, 4, 3),
(14, 3, 6),
(15, 4, 8),
(16, 2, 4),
(17, 4, 5),
(20, 2, 11),
(21, 2, 13);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `uname` varchar(60) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `access` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `uname`, `photo`, `access`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'upload/FB_IMG_1529398944972_1529637716.jpg', 1),
(2, 'lee', '7e0d7f8a5d96c24ffcc840f31bce72b2', 'lee', '', 2),
(3, 'julyn', 'bf70c261981e1708530982d56d2e8e01', 'julyn', '', 2),
(4, 'thae', '81dc9bdb52d04dc20036dbd8313ed055', 'thae', '', 2),
(5, 'eiphyu', '6bc19c4e48c29158a3c5e7bf3f6aabdb', 'eiphyu', 'upload/B612_20171028_102904_1530176835.jpg', 2),
(8, 'makyi', 'cfa5301358b9fcbe7aa45b1ceea088c6', 'myakyi', '', 2),
(9, 'kaykay', '33df7ba22aa58faccd5fe8cac6fdb135', 'kaykay', '', 2),
(10, 'mgmg', 'daa4bf1b4d0978fa034ada89161a23c4', 'Admin', '', 1),
(11, 'thuzar', '71d3654f8922dcc7f2e4bf8ac8bb2ff7', 'Thuzar', 'upload/C360_2017-05-27-16-22-28-425_1529639175.jpg', 2),
(12, 'hninyu', '8ca20b3c1d2cd6d3586c33148584b539', 'HninYu', '', 2),
(13, 'pannei', '6cfb357d839bb5689b30c56c18efb78f', 'Pann Ei', 'upload/B612_20170728_110824_1530176623.jpg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chatid`);

--
-- Indexes for table `chatroom`
--
ALTER TABLE `chatroom`
  ADD PRIMARY KEY (`chatroomid`);

--
-- Indexes for table `chat_member`
--
ALTER TABLE `chat_member`
  ADD PRIMARY KEY (`chat_memberid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `chatroom`
--
ALTER TABLE `chatroom`
  MODIFY `chatroomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `chat_member`
--
ALTER TABLE `chat_member`
  MODIFY `chat_memberid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
