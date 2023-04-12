-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 07:21 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i-messenger`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_other_user`
--

CREATE TABLE `add_other_user` (
  `sr no` int(5) NOT NULL,
  `user_id` int(4) NOT NULL,
  `other_user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_other_user`
--

INSERT INTO `add_other_user` (`sr no`, `user_id`, `other_user`) VALUES
(1, 1, '3, 7, 5, 6, 2, 12'),
(3, 2, '7, 6, 3, 1, 5, 2'),
(4, 6, '1, 5, 7, 2, 5, 2'),
(5, 7, '1, 3, 5, 2, 2, 2'),
(6, 3, '1, 7, 5, 6, 2, 19'),
(7, 5, '1, 7, 6, 2, 2, 19'),
(13, 12, '1, 5, 2, 7, 2, 19'),
(17, 16, '1, 5, 2, 7, 2, 19'),
(20, 19, '1, 3, 6, 7, 2, 19'),
(28, 29, '1, 5, 3, 28, 2, 19'),
(29, 30, '6, 1, 5, 3, 16, 2');

-- --------------------------------------------------------

--
-- Table structure for table `bca sem 6_tbl`
--

CREATE TABLE `bca sem 6_tbl` (
  `message_id` int(5) NOT NULL,
  `other_user_id` int(5) NOT NULL,
  `msg_format` varchar(10) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `file_path` text DEFAULT NULL,
  `curr_date` date NOT NULL DEFAULT current_timestamp(),
  `curr_time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bca sem 6_tbl`
--

INSERT INTO `bca sem 6_tbl` (`message_id`, `other_user_id`, `msg_format`, `msg`, `file_path`, `curr_date`, `curr_time`) VALUES
(3, 1, 'image', '', 'http://localhost/project/room/group/group_data/file_BCA Sem 6_0.jpg', '2022-02-27', '18:21:53'),
(4, 3, 'text', 'hii', NULL, '2022-03-02', '22:02:26'),
(5, 3, 'text', 'hello', NULL, '2022-03-02', '22:02:30'),
(6, 19, 'text', 'hii', NULL, '2022-03-07', '18:31:37'),
(7, 2, 'text', 'hii', NULL, '2022-03-08', '07:57:04'),
(8, 2, 'text', 'parthiv', NULL, '2022-03-08', '07:57:10'),
(9, 12, 'text', 'hii', NULL, '2022-03-08', '07:58:52'),
(10, 12, 'text', 'I am mitraj', NULL, '2022-03-08', '07:59:03'),
(11, 19, 'text', 'i am jay', NULL, '2022-03-08', '08:05:00'),
(12, 6, 'text', 'hii', NULL, '2022-03-08', '08:09:42'),
(13, 6, 'text', 'i am pritesh', NULL, '2022-03-08', '08:09:45'),
(14, 1, 'pdf', 'Project certificate', 'http://localhost/project/room/group/group_data/file_BCA Sem 6_1.pdf', '2022-03-14', '11:13:40'),
(15, 1, 'audio', 'song', 'http://localhost/project/room/group/group_data/file_BCA Sem 6_2.mp3', '2022-03-14', '11:14:02'),
(16, 1, 'video', '', 'http://localhost/project/room/group/group_data/file_BCA Sem 6_3.mp4', '2022-03-29', '09:53:33');

-- --------------------------------------------------------

--
-- Table structure for table `bca_tbl`
--

CREATE TABLE `bca_tbl` (
  `message_id` int(5) NOT NULL,
  `other_user_id` int(5) NOT NULL,
  `msg_format` varchar(10) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `file_path` text DEFAULT NULL,
  `curr_date` date NOT NULL DEFAULT current_timestamp(),
  `curr_time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bca_tbl`
--

INSERT INTO `bca_tbl` (`message_id`, `other_user_id`, `msg_format`, `msg`, `file_path`, `curr_date`, `curr_time`) VALUES
(1, 1, 'text', 'hii', NULL, '2022-03-06', '21:52:52'),
(3, 1, 'text', 'welcome this group', NULL, '2022-03-06', '21:53:07'),
(5, 1, 'image', 'sweets', 'http://localhost/project/room/group/group_data/file_bca_0.jpg', '2022-03-06', '21:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(6) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `msg_txt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `user_name`, `email`, `msg_txt`) VALUES
(2, 'Mr. Parthiv Patel', 'parthiv@gmail.com', 'This website is very superb\r\n'),
(3, 'Mr. Mohit Patel', 'mohit567@gmail.com', 'excellent.......'),
(4, 'aakash', 'aakash@gmail.com', 'this website is very use ful...'),
(5, 'pal', 'pal@gmail.com', 'excellent'),
(6, 'sanskar', 'sanskar@gmail.com', 'superb...'),
(7, 'bhavesh', 'bhavesh@gmail.com', ' 💙💙💙💙💙💘💘💘💘'),
(8, 'jay', 'jay@gmail.com', '💌💌💌'),
(9, 'sanskar', 'sanskar@gmail.com', '   🗯🗯🗯🗨🗨'),
(10, 'mohit', 'moradiya@gmail.com', 'this website is very usefull'),
(11, 'jay', 'jay@gmail.com', '👩‍👩‍👧👩‍👩‍👧'),
(12, 'aakash', 'aakash@gmail.com', '💘💘'),
(13, 'rahul', 'rahul@gmail.com', '💚💚'),
(14, 'naitik', 'naitik@gmail.com', 'very good...'),
(15, 'jay', 'jay@gmail.com', 'excellent...'),
(16, 'jay', 'jay@gmail.com', 'excellent....'),
(17, 'jay', 'jay@gmail.com', 'superb....');

-- --------------------------------------------------------

--
-- Table structure for table `friends_tbl`
--

CREATE TABLE `friends_tbl` (
  `message_id` int(5) NOT NULL,
  `other_user_id` int(5) NOT NULL,
  `msg_format` varchar(10) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `file_path` text DEFAULT NULL,
  `curr_date` date NOT NULL DEFAULT current_timestamp(),
  `curr_time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends_tbl`
--

INSERT INTO `friends_tbl` (`message_id`, `other_user_id`, `msg_format`, `msg`, `file_path`, `curr_date`, `curr_time`) VALUES
(1, 1, 'text', 'hii', NULL, '2022-04-01', '10:46:40'),
(2, 1, 'text', 'hello friends.....', NULL, '2022-04-01', '10:46:56');

-- --------------------------------------------------------

--
-- Table structure for table `group_info`
--

CREATE TABLE `group_info` (
  `grp_id` int(4) NOT NULL,
  `grp_name` varchar(20) NOT NULL,
  `admin_id` int(4) NOT NULL,
  `member_id` text NOT NULL,
  `profile_img` text NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `group_info`
--

INSERT INTO `group_info` (`grp_id`, `grp_name`, `admin_id`, `member_id`, `profile_img`, `about`) VALUES
(1, 'BCA Sem 6', 1, '2, 3, 5, 6, 7, 12, 16, 19', 'http://localhost/project/room/group/group_profile/BCA Sem 6.jpg', '~ This group only for bca sam 6'),
(5, 'Friends', 1, '1, 2, 3, 5, 6, 7, 12, 16, 19, 28, 29, 30', 'http://localhost/project/room/group/group_profile/Friends.jpg', '“A friend is someone who knows all about you and still loves you.”');

-- --------------------------------------------------------

--
-- Table structure for table `jay_tbl`
--

CREATE TABLE `jay_tbl` (
  `message_id` int(5) NOT NULL,
  `other_user_id` int(5) NOT NULL,
  `msg_type` int(1) DEFAULT NULL,
  `msg_format` varchar(10) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `file_path` text DEFAULT NULL,
  `curr_date` date NOT NULL DEFAULT current_timestamp(),
  `curr_time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jay_tbl`
--

INSERT INTO `jay_tbl` (`message_id`, `other_user_id`, `msg_type`, `msg_format`, `msg`, `status`, `file_path`, `curr_date`, `curr_time`) VALUES
(1, 1, 1, 'text', 'hii', 1, NULL, '2022-02-19', '17:39:20'),
(2, 1, 0, 'text', 'hii', 1, NULL, '2022-02-23', '06:32:38'),
(3, 1, 0, 'text', 'hii', 1, NULL, '2022-03-08', '08:02:08'),
(4, 1, 1, 'text', 'hii', 1, NULL, '2022-03-08', '08:02:16'),
(5, 19, 1, 'text', 'hii', 1, NULL, '2022-03-08', '08:02:34'),
(6, 19, 0, 'text', 'hii', 1, NULL, '2022-03-08', '08:02:34'),
(7, 6, 1, 'text', 'hii', 0, NULL, '2022-03-29', '09:34:52'),
(8, 2, 1, 'text', '...', 0, NULL, '2022-03-29', '09:34:59'),
(9, 3, 0, 'text', 'hii', 0, NULL, '2022-04-01', '10:42:53');

-- --------------------------------------------------------

--
-- Table structure for table `log_data`
--

CREATE TABLE `log_data` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `curr_date` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mitraj_tbl`
--

CREATE TABLE `mitraj_tbl` (
  `message_id` int(11) NOT NULL,
  `other_user_id` int(11) NOT NULL,
  `msg_type` int(11) DEFAULT NULL,
  `msg_format` varchar(10) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `file_path` text NOT NULL,
  `curr_date` date DEFAULT current_timestamp(),
  `curr_time` time DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mitraj_tbl`
--

INSERT INTO `mitraj_tbl` (`message_id`, `other_user_id`, `msg_type`, `msg_format`, `msg`, `status`, `file_path`, `curr_date`, `curr_time`) VALUES
(1, 1, 1, 'text', 'good morning', 1, '', '2022-03-08', '07:58:43'),
(2, 1, 0, 'text', 'hii', 0, '', '2022-03-10', '22:08:10');

-- --------------------------------------------------------

--
-- Table structure for table `mohit_567_tbl`
--

CREATE TABLE `mohit_567_tbl` (
  `message_id` int(11) NOT NULL,
  `other_user_id` int(11) NOT NULL,
  `msg_type` int(11) DEFAULT NULL,
  `msg_format` varchar(10) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `file_path` text NOT NULL,
  `curr_date` date DEFAULT current_timestamp(),
  `curr_time` time DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mohit_567_tbl`
--

INSERT INTO `mohit_567_tbl` (`message_id`, `other_user_id`, `msg_type`, `msg_format`, `msg`, `status`, `file_path`, `curr_date`, `curr_time`) VALUES
(34, 19, 0, 'text', 'hii', 1, '', '2022-02-19', '17:39:20'),
(41, 5, 1, 'text', 'hii', 1, '', '2022-02-21', '16:54:51'),
(42, 5, 1, 'pdf', 'file ', 1, 'file_data/file_1_0.pdf', '2022-02-21', '16:55:10'),
(45, 19, 1, 'text', 'hii', 1, '', '2022-02-23', '06:32:38'),
(46, 7, 1, 'video', 'vedio message', 1, 'file_data/file_1_2.mp4', '2022-02-27', '11:00:51'),
(47, 2, 0, 'text', 'hii', 1, '', '2022-02-27', '17:54:52'),
(48, 2, 0, 'text', 'hello', 1, '', '2022-02-27', '17:55:02'),
(49, 2, 1, 'text', '👩‍👩‍👧👩‍👩‍👧', 1, '', '2022-02-27', '17:58:37'),
(51, 5, 1, 'video', 'video', 1, 'file_data/file_1_2.mp4', '2022-03-02', '21:45:25'),
(53, 5, 1, 'audio', '', 1, 'file_data/file_1_4.mp3', '2022-03-02', '21:47:49'),
(54, 5, 1, 'image', '', 1, 'file_data/file_1_5.jpg', '2022-03-02', '21:48:34'),
(55, 5, 0, 'text', 'hii', 1, '', '2022-03-02', '21:51:34'),
(56, 5, 1, 'text', 'hii', 1, '', '2022-03-02', '21:51:46'),
(57, 5, 0, 'text', 'hello', 1, '', '2022-03-02', '21:51:52'),
(58, 5, 1, 'text', 'hello bhai', 1, '', '2022-03-02', '21:51:59'),
(66, 3, 1, 'text', 'hii\r\n', 1, '', '2022-03-07', '18:26:33'),
(67, 2, 1, 'text', 'hii', 1, '', '2022-03-07', '18:28:38'),
(68, 7, 0, 'text', 'hii', 1, '', '2022-03-08', '07:52:43'),
(69, 2, 0, 'text', 'good morning', 1, '', '2022-03-08', '07:56:29'),
(70, 12, 0, 'text', 'good morning', 1, '', '2022-03-08', '07:58:44'),
(71, 19, 1, 'text', 'hii', 0, '', '2022-03-08', '08:02:08'),
(72, 19, 0, 'text', 'hii', 0, '', '2022-03-08', '08:02:16'),
(73, 2, 1, 'audio', '', 1, 'file_data/file_1_5.mp3', '2022-03-08', '08:13:43'),
(74, 7, 1, 'text', 'hii', 1, '', '2022-03-10', '22:06:35'),
(75, 12, 1, 'text', 'hii', 1, '', '2022-03-10', '22:08:10'),
(77, 3, 1, 'audio', 'music', 1, 'file_data/file_1_6.mp3', '2022-03-21', '15:41:44'),
(79, 2, 1, 'text', 'hii', 1, '', '2022-03-29', '09:31:38'),
(85, 3, 0, 'text', 'hii', 0, '', '2022-04-01', '10:42:30');

-- --------------------------------------------------------

--
-- Table structure for table `naitik_dave_tbl`
--

CREATE TABLE `naitik_dave_tbl` (
  `message_id` int(11) NOT NULL,
  `other_user_id` int(11) NOT NULL,
  `msg_type` int(11) DEFAULT NULL,
  `msg_format` varchar(10) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `file_path` text NOT NULL,
  `curr_date` date DEFAULT current_timestamp(),
  `curr_time` time DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `naitik_dave_tbl`
--

INSERT INTO `naitik_dave_tbl` (`message_id`, `other_user_id`, `msg_type`, `msg_format`, `msg`, `status`, `file_path`, `curr_date`, `curr_time`) VALUES
(11, 1, 0, 'text', 'hii', 1, '', '2022-02-21', '16:58:19'),
(12, 1, 0, 'pdf', ' ', 1, 'file_data/file_1_1.pdf', '2022-02-21', '16:59:25'),
(13, 1, 0, 'audio', ' ', 1, 'file_data/file_1_3.mp3', '2022-02-27', '18:15:05'),
(14, 1, 0, 'audio', ' audio', 1, 'file_data/file_1_3.mp3', '2022-03-02', '21:46:17'),
(15, 1, 1, 'audio', 'audio file', 1, 'file_data/file_3_3.mp3', '2022-03-07', '07:47:43'),
(16, 1, 0, 'text', 'hii\r\n', 1, '', '2022-03-07', '18:26:33'),
(17, 1, 0, 'audio', ' music', 1, 'file_data/file_1_6.mp3', '2022-03-21', '15:41:44'),
(18, 1, 1, 'text', 'hii', 0, '', '2022-04-01', '10:42:30'),
(19, 2, 1, 'text', 'hii', 0, '', '2022-04-01', '10:42:47'),
(20, 19, 1, 'text', 'hii', 0, '', '2022-04-01', '10:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `parthiv_tbl`
--

CREATE TABLE `parthiv_tbl` (
  `message_id` int(11) NOT NULL,
  `other_user_id` int(11) NOT NULL,
  `msg_type` int(11) DEFAULT NULL,
  `msg_format` varchar(10) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `file_path` text NOT NULL,
  `curr_date` date DEFAULT current_timestamp(),
  `curr_time` time DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parthiv_tbl`
--

INSERT INTO `parthiv_tbl` (`message_id`, `other_user_id`, `msg_type`, `msg_format`, `msg`, `status`, `file_path`, `curr_date`, `curr_time`) VALUES
(14, 1, 1, 'text', 'hii', 1, '', '2022-02-27', '17:54:52'),
(15, 1, 1, 'text', 'hello', 1, '', '2022-02-27', '17:55:01'),
(16, 1, 0, 'text', '👩‍👩‍👧👩‍👩‍👧', 1, '', '2022-02-27', '17:58:37'),
(17, 1, 0, 'text', 'hii', 1, '', '2022-03-07', '18:28:38'),
(18, 1, 1, 'text', 'good morning', 1, '', '2022-03-08', '07:56:29'),
(19, 1, 0, 'audio', ' ', 1, 'file_data/file_1_5.mp3', '2022-03-08', '08:13:43'),
(20, 1, 0, 'text', 'hii', 0, '', '2022-03-29', '09:31:39'),
(21, 19, 0, 'text', '...', 0, '', '2022-03-29', '09:34:59'),
(22, 3, 0, 'text', 'hii', 0, '', '2022-04-01', '10:42:47');

-- --------------------------------------------------------

--
-- Table structure for table `parth_tbl`
--

CREATE TABLE `parth_tbl` (
  `message_id` int(5) NOT NULL,
  `other_user_id` int(5) NOT NULL,
  `msg_type` int(1) DEFAULT NULL,
  `msg_format` varchar(10) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `file_path` text DEFAULT NULL,
  `curr_date` date NOT NULL DEFAULT current_timestamp(),
  `curr_time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pritesh_tbl`
--

CREATE TABLE `pritesh_tbl` (
  `message_id` int(11) NOT NULL,
  `other_user_id` int(11) NOT NULL,
  `msg_type` int(11) DEFAULT NULL,
  `msg_format` varchar(10) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `file_path` text NOT NULL,
  `curr_date` date DEFAULT current_timestamp(),
  `curr_time` time DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pritesh_tbl`
--

INSERT INTO `pritesh_tbl` (`message_id`, `other_user_id`, `msg_type`, `msg_format`, `msg`, `status`, `file_path`, `curr_date`, `curr_time`) VALUES
(8, 6, 1, 'text', 'hii', 1, '', '2022-02-13', '22:32:38'),
(9, 6, 0, 'text', 'hii', 1, '', '2022-02-13', '22:32:38'),
(10, 5, 1, 'text', 'hii', 1, '', '2022-02-13', '22:33:01'),
(11, 19, 0, 'text', 'hii', 0, '', '2022-03-29', '09:34:52');

-- --------------------------------------------------------

--
-- Table structure for table `priyank_tbl`
--

CREATE TABLE `priyank_tbl` (
  `message_id` int(11) NOT NULL,
  `other_user_id` int(11) NOT NULL,
  `msg_type` int(11) DEFAULT NULL,
  `msg_format` varchar(10) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `file_path` text NOT NULL,
  `curr_date` date DEFAULT current_timestamp(),
  `curr_time` time DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `priyank_tbl`
--

INSERT INTO `priyank_tbl` (`message_id`, `other_user_id`, `msg_type`, `msg_format`, `msg`, `status`, `file_path`, `curr_date`, `curr_time`) VALUES
(1, 6, 0, 'text', 'hii', 1, '', '2022-02-13', '22:33:01'),
(5, 1, 0, 'text', 'hii', 1, '', '2022-02-21', '16:54:51'),
(6, 1, 0, 'pdf', ' file ', 1, 'file_data/file_1_0.pdf', '2022-02-21', '16:55:10'),
(7, 1, 0, 'video', ' video', 1, 'file_data/file_1_2.mp4', '2022-03-02', '21:45:25'),
(8, 1, 0, 'audio', ' ', 1, 'file_data/file_1_4.mp3', '2022-03-02', '21:47:49'),
(9, 1, 0, 'image', ' ', 1, 'file_data/file_1_5.jpg', '2022-03-02', '21:48:34'),
(10, 1, 1, 'text', 'hii', 1, '', '2022-03-02', '21:51:34'),
(11, 1, 0, 'text', 'hii', 1, '', '2022-03-02', '21:51:47'),
(12, 1, 1, 'text', 'hello', 1, '', '2022-03-02', '21:51:52'),
(13, 1, 0, 'text', 'hello bhai', 1, '', '2022-03-02', '21:51:59');

-- --------------------------------------------------------

--
-- Table structure for table `rohit_tbl`
--

CREATE TABLE `rohit_tbl` (
  `message_id` int(5) NOT NULL,
  `other_user_id` int(5) NOT NULL,
  `msg_type` int(1) DEFAULT NULL,
  `msg_format` varchar(10) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `file_path` text DEFAULT NULL,
  `curr_date` date NOT NULL DEFAULT current_timestamp(),
  `curr_time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shubham_tbl`
--

CREATE TABLE `shubham_tbl` (
  `message_id` int(5) NOT NULL,
  `other_user_id` int(5) NOT NULL,
  `msg_type` int(1) DEFAULT NULL,
  `msg_format` varchar(10) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `file_path` text NOT NULL,
  `curr_date` date NOT NULL DEFAULT current_timestamp(),
  `curr_time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sidharth_tbl`
--

CREATE TABLE `sidharth_tbl` (
  `message_id` int(11) NOT NULL,
  `other_user_id` int(11) NOT NULL,
  `msg_type` int(11) DEFAULT NULL,
  `msg_format` varchar(10) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `file_path` text NOT NULL,
  `curr_date` date DEFAULT current_timestamp(),
  `curr_time` time DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sidharth_tbl`
--

INSERT INTO `sidharth_tbl` (`message_id`, `other_user_id`, `msg_type`, `msg_format`, `msg`, `status`, `file_path`, `curr_date`, `curr_time`) VALUES
(1, 1, 0, 'video', ' vedio message', 1, 'file_data/file_1_2.mp4', '2022-02-27', '11:00:51'),
(2, 1, 1, 'text', 'hii', 1, '', '2022-03-08', '07:52:43'),
(3, 1, 0, 'text', 'hii', 0, '', '2022-03-10', '22:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `story_info`
--

CREATE TABLE `story_info` (
  `story_id` int(4) NOT NULL,
  `user_id` int(4) NOT NULL,
  `file_path` text NOT NULL,
  `story_date` date NOT NULL DEFAULT current_timestamp(),
  `story_time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `story_info`
--

INSERT INTO `story_info` (`story_id`, `user_id`, `file_path`, `story_date`, `story_time`) VALUES
(4, 1, 'all_story/story0.mp4', '2022-02-16', '09:20:50'),
(5, 1, 'all_story/story1.mp4', '2022-02-16', '09:21:06'),
(10, 1, 'all_story/story6.mp4', '2022-02-19', '17:51:40'),
(11, 3, 'all_story/story3.mp4', '2022-02-20', '10:59:37'),
(12, 1, 'all_story/story4.mp4', '2022-02-21', '16:56:51'),
(14, 19, 'all_story/story5.mp4', '2022-03-07', '18:32:48'),
(15, 2, 'all_story/story6.mp4', '2022-03-08', '07:32:36'),
(16, 7, 'all_story/story7.mp4', '2022-03-08', '07:54:24'),
(17, 12, 'all_story/story8.mp4', '2022-03-08', '07:59:20'),
(18, 19, 'all_story/story9.mp4', '2022-03-08', '08:04:29'),
(19, 6, 'all_story/story10.mp4', '2022-03-08', '08:08:33'),
(20, 16, 'all_story/story11.mp4', '2022-03-30', '07:29:58'),
(21, 29, 'all_story/story12.mp4', '2022-03-30', '07:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `tumeet_tbl`
--

CREATE TABLE `tumeet_tbl` (
  `message_id` int(5) NOT NULL,
  `other_user_id` int(5) NOT NULL,
  `msg_type` int(1) DEFAULT NULL,
  `msg_format` varchar(10) DEFAULT NULL,
  `msg` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `file_path` text DEFAULT NULL,
  `curr_date` date NOT NULL DEFAULT current_timestamp(),
  `curr_time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(4) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` text NOT NULL,
  `profile_img` text NOT NULL,
  `about` text NOT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `user_name`, `full_name`, `dob`, `gender`, `email`, `profile_img`, `about`, `password`) VALUES
(1, 'mohit_567', 'Mr. Mohit Patel', '2002-04-22', 'Male', 'mohitmmv567@gmail.com', 'http://localhost/project/room/users/user_profile/mohit_567.jpg', '~ જય શ્રી કૃષ્ણ.', 'mohitpatel'),
(2, 'parthiv', 'Parthiv Patel', '1999-07-13', 'Male', 'parthiv@gmail.com', 'http://localhost/project/room/users/user_profile/parthiv.jpg', '~ રાધે રાધે.', '123456789'),
(3, 'naitik_dave', 'Naitik Dave', '1999-02-20', 'Male', 'naitik@gmail.com', 'http://localhost/project/room/users/user_profile/naitik_dave.jpg', '~ જય શ્રી કૃષ્ણ.', 'naitikdave'),
(5, 'priyank', 'priyank', '2001-05-12', 'Male', 'priyank@gmail.com', 'http://localhost/project/room/users/user_profile/priyank.jpg', 'priyank', '123456789'),
(6, 'pritesh', 'Mr. Pritesh bhatiya', '2001-12-10', 'Male', 'pritesh@gmail.com', 'http://localhost/project/room/users/pritesh.jpg', 'Mr. Pritesh Bhatiya', '1234567890'),
(7, 'sidharth', 'Mr. Sidharth Lakum', '2001-09-22', 'Male', 'sidharth@gmail.com', 'http://localhost/project/room/users/user_profile/sidharth.jpg', '~ જય શ્રી કૃષ્ણ.', '123456789'),
(12, 'mitraj', 'Mr. Mitraj Chavda', '2001-12-23', 'Male', 'mitraj@gmail.com', 'http://localhost/project/room/users/user_profile/mitraj.jpg', '~ mitraj', '123456789'),
(16, 'shubham', 'Mr. Shubham Trivadi', '2003-01-12', 'Male', 'shubham@gmail.com', 'http://localhost/project/room/users/user_profile/shubham.jpg', '~ shubham', '123456789'),
(19, 'jay', 'Mr. dave', '2003-06-19', 'Male', 'jay@gmail.com', 'http://localhost/project/room/users/jay.jpg', '~ જય દવે.    ☃☃', '123456789'),
(28, 'tumeet', 'tumeet patel', '1998-02-12', 'Male', 'tumeet@gmail.com', 'http://localhost/project/room/users/user_profile/tumeet.jpg', 'tumeet', '1234567890'),
(29, 'parth', 'parth patel', '1998-02-04', 'Male', 'parth@gmail.com', 'http://localhost/project/room/users/user_profile/parth.jpg', '~ parth', '123456789'),
(30, 'rohit', 'rohit chavda', '2001-04-12', 'Male', 'rohit@gmail.com', 'http://localhost/project/room/users/user_profile/rohit.jpg', '~ rohit', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_other_user`
--
ALTER TABLE `add_other_user`
  ADD PRIMARY KEY (`sr no`),
  ADD KEY `f6` (`user_id`);

--
-- Indexes for table `bca sem 6_tbl`
--
ALTER TABLE `bca sem 6_tbl`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `other_user_id` (`other_user_id`);

--
-- Indexes for table `bca_tbl`
--
ALTER TABLE `bca_tbl`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `other_user_id` (`other_user_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `friends_tbl`
--
ALTER TABLE `friends_tbl`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `other_user_id` (`other_user_id`);

--
-- Indexes for table `group_info`
--
ALTER TABLE `group_info`
  ADD PRIMARY KEY (`grp_id`),
  ADD KEY `f10` (`admin_id`);

--
-- Indexes for table `jay_tbl`
--
ALTER TABLE `jay_tbl`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `other_user_id` (`other_user_id`);

--
-- Indexes for table `log_data`
--
ALTER TABLE `log_data`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `f11` (`user_id`);

--
-- Indexes for table `mitraj_tbl`
--
ALTER TABLE `mitraj_tbl`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `other_user_id` (`other_user_id`) USING BTREE;

--
-- Indexes for table `mohit_567_tbl`
--
ALTER TABLE `mohit_567_tbl`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `other_user_id` (`other_user_id`) USING BTREE;

--
-- Indexes for table `naitik_dave_tbl`
--
ALTER TABLE `naitik_dave_tbl`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `other_user_id` (`other_user_id`) USING BTREE;

--
-- Indexes for table `parthiv_tbl`
--
ALTER TABLE `parthiv_tbl`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `other_user_id` (`other_user_id`) USING BTREE;

--
-- Indexes for table `parth_tbl`
--
ALTER TABLE `parth_tbl`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `other_user_id` (`other_user_id`);

--
-- Indexes for table `pritesh_tbl`
--
ALTER TABLE `pritesh_tbl`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `other_user_id` (`other_user_id`) USING BTREE;

--
-- Indexes for table `priyank_tbl`
--
ALTER TABLE `priyank_tbl`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `other_user_id` (`other_user_id`) USING BTREE;

--
-- Indexes for table `rohit_tbl`
--
ALTER TABLE `rohit_tbl`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `other_user_id` (`other_user_id`);

--
-- Indexes for table `shubham_tbl`
--
ALTER TABLE `shubham_tbl`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `other_user_id` (`other_user_id`);

--
-- Indexes for table `sidharth_tbl`
--
ALTER TABLE `sidharth_tbl`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `other_user_id` (`other_user_id`) USING BTREE;

--
-- Indexes for table `story_info`
--
ALTER TABLE `story_info`
  ADD PRIMARY KEY (`story_id`),
  ADD KEY `f1` (`user_id`);

--
-- Indexes for table `tumeet_tbl`
--
ALTER TABLE `tumeet_tbl`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `other_user_id` (`other_user_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_other_user`
--
ALTER TABLE `add_other_user`
  MODIFY `sr no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `bca sem 6_tbl`
--
ALTER TABLE `bca sem 6_tbl`
  MODIFY `message_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bca_tbl`
--
ALTER TABLE `bca_tbl`
  MODIFY `message_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `friends_tbl`
--
ALTER TABLE `friends_tbl`
  MODIFY `message_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `group_info`
--
ALTER TABLE `group_info`
  MODIFY `grp_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jay_tbl`
--
ALTER TABLE `jay_tbl`
  MODIFY `message_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `log_data`
--
ALTER TABLE `log_data`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `mitraj_tbl`
--
ALTER TABLE `mitraj_tbl`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mohit_567_tbl`
--
ALTER TABLE `mohit_567_tbl`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `naitik_dave_tbl`
--
ALTER TABLE `naitik_dave_tbl`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `parthiv_tbl`
--
ALTER TABLE `parthiv_tbl`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `parth_tbl`
--
ALTER TABLE `parth_tbl`
  MODIFY `message_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pritesh_tbl`
--
ALTER TABLE `pritesh_tbl`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `priyank_tbl`
--
ALTER TABLE `priyank_tbl`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rohit_tbl`
--
ALTER TABLE `rohit_tbl`
  MODIFY `message_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shubham_tbl`
--
ALTER TABLE `shubham_tbl`
  MODIFY `message_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sidharth_tbl`
--
ALTER TABLE `sidharth_tbl`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `story_info`
--
ALTER TABLE `story_info`
  MODIFY `story_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tumeet_tbl`
--
ALTER TABLE `tumeet_tbl`
  MODIFY `message_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_other_user`
--
ALTER TABLE `add_other_user`
  ADD CONSTRAINT `f6` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `bca sem 6_tbl`
--
ALTER TABLE `bca sem 6_tbl`
  ADD CONSTRAINT `bca sem 6_tbl_ibfk_1` FOREIGN KEY (`other_user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `bca_tbl`
--
ALTER TABLE `bca_tbl`
  ADD CONSTRAINT `bca_tbl_ibfk_1` FOREIGN KEY (`other_user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `friends_tbl`
--
ALTER TABLE `friends_tbl`
  ADD CONSTRAINT `friends_tbl_ibfk_1` FOREIGN KEY (`other_user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `group_info`
--
ALTER TABLE `group_info`
  ADD CONSTRAINT `f10` FOREIGN KEY (`admin_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `jay_tbl`
--
ALTER TABLE `jay_tbl`
  ADD CONSTRAINT `jay_tbl_ibfk_1` FOREIGN KEY (`other_user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `log_data`
--
ALTER TABLE `log_data`
  ADD CONSTRAINT `f11` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `mitraj_tbl`
--
ALTER TABLE `mitraj_tbl`
  ADD CONSTRAINT `mitraj_tbl_ibfk_1` FOREIGN KEY (`other_user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `mohit_567_tbl`
--
ALTER TABLE `mohit_567_tbl`
  ADD CONSTRAINT `mohit_567_tbl_ibfk_1` FOREIGN KEY (`other_user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `naitik_dave_tbl`
--
ALTER TABLE `naitik_dave_tbl`
  ADD CONSTRAINT `naitik_dave_tbl_ibfk_1` FOREIGN KEY (`other_user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `parthiv_tbl`
--
ALTER TABLE `parthiv_tbl`
  ADD CONSTRAINT `parthiv_tbl_ibfk_1` FOREIGN KEY (`other_user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `parth_tbl`
--
ALTER TABLE `parth_tbl`
  ADD CONSTRAINT `parth_tbl_ibfk_1` FOREIGN KEY (`other_user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `pritesh_tbl`
--
ALTER TABLE `pritesh_tbl`
  ADD CONSTRAINT `pritesh_tbl_ibfk_1` FOREIGN KEY (`other_user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `priyank_tbl`
--
ALTER TABLE `priyank_tbl`
  ADD CONSTRAINT `priyank_tbl_ibfk_1` FOREIGN KEY (`other_user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `rohit_tbl`
--
ALTER TABLE `rohit_tbl`
  ADD CONSTRAINT `rohit_tbl_ibfk_1` FOREIGN KEY (`other_user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `shubham_tbl`
--
ALTER TABLE `shubham_tbl`
  ADD CONSTRAINT `shubham_tbl_ibfk_1` FOREIGN KEY (`other_user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `sidharth_tbl`
--
ALTER TABLE `sidharth_tbl`
  ADD CONSTRAINT `sidharth_tbl_ibfk_1` FOREIGN KEY (`other_user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `story_info`
--
ALTER TABLE `story_info`
  ADD CONSTRAINT `f1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `tumeet_tbl`
--
ALTER TABLE `tumeet_tbl`
  ADD CONSTRAINT `tumeet_tbl_ibfk_1` FOREIGN KEY (`other_user_id`) REFERENCES `user_info` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
