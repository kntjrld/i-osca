-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 07:07 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iosca`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities`
--

CREATE TABLE `tbl_activities` (
  `id` int(11) NOT NULL,
  `fd_date` varchar(250) NOT NULL,
  `fx_user` varchar(250) NOT NULL,
  `fx_action` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_activities`
--

INSERT INTO `tbl_activities` (`id`, `fd_date`, `fx_user`, `fx_action`) VALUES
(1, 'Nov 27, 2022 - 06:49 pm', 'staff4', 'Logged in system'),
(2, 'Nov 27, 2022 - 06:49 pm', 'administrator', 'Logged in system'),
(3, 'Nov 27, 2022 - 07:06 pm', 'administrator', 'Logged in system'),
(4, 'Nov 27, 2022 - 07:07 pm', 'administrator', 'Updated a record with a senior id #0123-213-000'),
(5, 'Nov 27, 2022 - 07:38 pm', 'administrator', 'Logged in system'),
(6, 'Nov 27, 2022 - 07:45 pm', 'administrator', 'Logged in system'),
(7, 'Nov 27, 2022 - 07:46 pm', 'administrator', 'Logged in system'),
(8, 'Nov 27, 2022 - 07:54 pm', 'administrator', 'Logged in system'),
(9, 'Nov 27, 2022 - 09:04 pm', 'administrator', 'Logged in system'),
(10, 'Nov 27, 2022 - 11:37 pm', 'administrator', 'Logged in system'),
(11, 'Nov 28, 2022 - 09:01 am', 'administrator', 'Logged in system'),
(12, 'Nov 28, 2022 - 09:03 am', 'staff4', 'Logged in system'),
(13, 'Nov 29, 2022 - 07:40 am', 'administrator', 'Logged in system'),
(14, 'Nov 29, 2022 - 07:41 am', 'administrator', 'Logged in system'),
(15, 'Nov 29, 2022 - 07:58 am', 'administrator', 'Logged in system'),
(16, 'Nov 29, 2022 - 08:21 am', 'administrator', 'Logged in system'),
(17, 'Nov 29, 2022 - 08:50 am', 'administrator', 'Logged in system'),
(18, 'Nov 29, 2022 - 08:51 am', 'administrator', 'Accepted a application id #52525556485056101555'),
(19, 'Nov 29, 2022 - 08:51 am', 'administrator', 'Accepted a application id #10054971009949505252'),
(20, 'Nov 29, 2022 - 08:51 am', 'staff4', 'Logged in system'),
(21, 'Nov 29, 2022 - 08:54 am', 'staff4', 'Logged in system'),
(22, 'Nov 29, 2022 - 08:55 am', 'staff4', 'Deleted a record with a senior id #3823-000-1311'),
(23, 'Nov 29, 2022 - 08:56 am', 'staff4', 'Deleted a record with a senior id #2132-1231-129-000'),
(24, 'Nov 29, 2022 - 08:57 am', 'administrator', 'Logged in system'),
(25, 'Nov 29, 2022 - 08:57 am', 'administrator', 'Accepted a application id #10054971009949505252'),
(26, 'Nov 29, 2022 - 08:58 am', 'administrator', 'Logged in system'),
(27, 'Nov 29, 2022 - 08:59 am', 'administrator', 'Logged in system'),
(28, 'Nov 29, 2022 - 09:12 am', 'administrator', 'Logged in system'),
(29, 'Nov 29, 2022 - 09:23 am', 'administrator', 'Logged in system'),
(30, 'Nov 29, 2022 - 09:53 am', 'administrator', 'Logged in system'),
(31, 'Nov 29, 2022 - 09:54 am', 'administrator', 'Removed staff1'),
(32, 'Nov 29, 2022 - 12:34 pm', 'administrator', 'Logged in system'),
(33, 'Nov 29, 2022 - 12:37 pm', 'administrator', 'Rejected a application with id #50529899501015349102'),
(34, 'Nov 29, 2022 - 12:41 pm', 'staff4', 'Logged in system'),
(35, 'Nov 29, 2022 - 12:41 pm', 'staff4', 'Attempted to access private page'),
(36, 'Nov 29, 2022 - 12:41 pm', 'administrator', 'Logged in system'),
(37, 'Nov 29, 2022 - 12:53 pm', 'administrator', 'Logged in system'),
(38, 'Nov 29, 2022 - 12:54 pm', 'staff4', 'Logged in system'),
(39, 'Nov 29, 2022 - 03:40 pm', 'administrator', 'Logged in system'),
(40, 'Nov 29, 2022 - 06:34 pm', 'administrator', 'Logged in system'),
(41, 'Nov 29, 2022 - 06:36 pm', 'staff4', 'Logged in system'),
(42, 'Nov 30, 2022 - 03:06 pm', 'administrator', 'Logged in system'),
(43, 'Nov 30, 2022 - 03:40 pm', 'staff4', 'Logged in system'),
(44, 'Dec 01, 2022 - 11:35 am', 'administrator', 'Logged in system'),
(45, 'Dec 01, 2022 - 11:37 am', 'administrator', 'Added a record with a senior id #929-218-000'),
(46, 'Dec 01, 2022 - 11:40 am', 'administrator', 'Added a record with a senior id #9821-218'),
(47, 'Dec 01, 2022 - 11:42 am', 'administrator', 'Logged in system'),
(48, 'Dec 01, 2022 - 12:16 pm', 'administrator', 'Logged in system'),
(49, 'Dec 01, 2022 - 02:08 pm', 'administrator', 'Logged in system'),
(50, 'Dec 01, 2022 - 02:12 pm', 'staff4', 'Logged in system'),
(51, 'Dec 01, 2022 - 02:12 pm', 'staff4', 'Export records to excel'),
(52, 'Dec 01, 2022 - 02:14 pm', 'administrator', 'Logged in system'),
(53, 'Dec 01, 2022 - 03:05 pm', 'staff4', 'Logged in system'),
(54, 'Dec 01, 2022 - 03:05 pm', 'administrator', 'Logged in system'),
(55, 'Dec 01, 2022 - 03:08 pm', 'staff4', 'Logged in system'),
(56, 'Dec 01, 2022 - 03:09 pm', 'administrator', 'Logged in system'),
(57, 'Dec 01, 2022 - 03:10 pm', 'administrator', 'Removed staff3'),
(58, 'Dec 01, 2022 - 05:05 pm', 'administrator', 'Logged in system'),
(59, 'Dec 01, 2022 - 05:46 pm', 'administrator', 'Logged in system'),
(60, 'Dec 01, 2022 - 06:50 pm', 'staff4', 'Logged in system'),
(61, 'Dec 01, 2022 - 07:02 pm', 'staff4', 'Rejected a application with id #51101559953975710148'),
(62, 'Dec 01, 2022 - 07:13 pm', 'administrator', 'Logged in system'),
(63, 'Dec 01, 2022 - 07:13 pm', 'staff1', 'Logged in system'),
(64, 'Dec 01, 2022 - 07:24 pm', 'staff1', 'Rejected a application with id #'),
(65, 'Dec 01, 2022 - 07:28 pm', 'staff1', 'Rejected a application with id #'),
(66, 'Dec 01, 2022 - 07:31 pm', 'administrator', 'Logged in system'),
(67, 'Dec 01, 2022 - 07:32 pm', 'staff1', 'Logged in system'),
(68, 'Dec 01, 2022 - 07:32 pm', 'staff1', 'Rejected a application with id #'),
(69, 'Dec 01, 2022 - 07:33 pm', 'staff1', 'Rejected a application with id #'),
(70, 'Dec 01, 2022 - 07:42 pm', 'administrator', 'Logged in system'),
(71, 'Dec 01, 2022 - 08:05 pm', 'administrator', 'Rejected a application with uid #52525556485056101555'),
(72, 'Dec 01, 2022 - 08:11 pm', 'staff1', 'Logged in system'),
(73, 'Dec 01, 2022 - 08:11 pm', 'staff1', 'Accepted a application id #98539849505251499750'),
(74, 'Dec 01, 2022 - 08:12 pm', 'staff1', 'Accepted a application id #48102531025298495452'),
(75, 'Dec 01, 2022 - 08:12 pm', 'administrator', 'Logged in system'),
(76, 'Dec 01, 2022 - 08:19 pm', 'staff1', 'Logged in system'),
(77, 'Dec 01, 2022 - 08:19 pm', 'staff1', 'Accepted a application id #98102991004910051100'),
(78, 'Dec 01, 2022 - 08:19 pm', 'administrator', 'Logged in system'),
(79, 'Dec 02, 2022 - 07:15 am', 'administrator', 'Logged in system'),
(80, 'Dec 02, 2022 - 07:23 am', 'staff1', 'Logged in system'),
(81, 'Dec 02, 2022 - 07:35 am', 'administrator', 'Logged in system'),
(82, 'Dec 02, 2022 - 07:53 am', 'staff1', 'Logged in system'),
(83, 'Dec 02, 2022 - 07:55 am', 'administrator', 'Logged in system'),
(84, 'Dec 02, 2022 - 08:02 am', 'administrator', 'Export records to excel'),
(85, 'Dec 02, 2022 - 08:23 am', 'administrator', 'Updated a record with a senior id #57481015352101539999'),
(86, 'Dec 02, 2022 - 08:25 am', 'administrator', 'Updated a record with a senior id #57481015352101539999'),
(87, 'Dec 02, 2022 - 08:38 am', 'administrator', 'Updated a record with a senior id #10051531019957535610'),
(88, 'Dec 02, 2022 - 08:39 am', 'administrator', 'Updated a record with a senior id #10051531019957535610'),
(89, 'Dec 02, 2022 - 08:39 am', 'administrator', 'Updated a record with a senior id #10054971009949505252'),
(90, 'Dec 02, 2022 - 08:47 am', 'administrator', 'Updated a record with a senior id #10010056102495148575'),
(91, 'Dec 02, 2022 - 09:15 am', 'staff1', 'Logged in system'),
(92, 'Dec 02, 2022 - 09:26 am', 'administrator', 'Logged in system'),
(93, 'Dec 02, 2022 - 09:32 am', 'administrator', 'Export records to excel'),
(94, 'Dec 02, 2022 - 10:31 am', 'administrator', 'Added a record with a senior id #52485454102985450495'),
(95, 'Dec 02, 2022 - 10:41 am', 'administrator', 'Export records to excel'),
(96, 'Dec 02, 2022 - 10:49 am', 'administrator', 'Export records to excel'),
(97, 'Dec 02, 2022 - 10:54 am', 'administrator', 'Logged in system'),
(98, 'Dec 02, 2022 - 12:44 pm', 'staff1', 'Logged in system'),
(99, 'Dec 02, 2022 - 12:53 pm', 'administrator', 'Logged in system'),
(100, 'Dec 02, 2022 - 02:28 pm', 'administrator', 'Updated a record with a senior id #10010252495450499799'),
(101, 'Dec 02, 2022 - 02:37 pm', 'administrator', 'Updated a record with a senior id #10010252495450499799'),
(102, 'Dec 02, 2022 - 02:37 pm', 'administrator', 'Updated a record with a senior id #10010252495450499799'),
(103, 'Dec 02, 2022 - 02:40 pm', 'administrator', 'Updated a record with a senior id #10054971009949505252'),
(104, 'Dec 02, 2022 - 02:51 pm', 'staff1', 'Logged in system'),
(105, 'Dec 02, 2022 - 02:51 pm', 'staff1', 'Accepted a application id #54515451535549545610'),
(106, 'Dec 02, 2022 - 02:51 pm', 'administrator', 'Logged in system'),
(107, 'Dec 02, 2022 - 02:59 pm', 'administrator', 'Accepted a application uid #54515451535549545610'),
(108, 'Dec 02, 2022 - 03:04 pm', 'administrator', 'Logged in system'),
(109, 'Dec 02, 2022 - 03:07 pm', 'staff1', 'Logged in system'),
(110, 'Dec 02, 2022 - 03:08 pm', 'administrator', 'Logged in system'),
(111, 'Dec 02, 2022 - 03:11 pm', 'administrator', 'Logged in system'),
(112, 'Dec 02, 2022 - 03:27 pm', 'administrator', 'Updated a record with a senior id #99102101985554541025'),
(113, 'Dec 02, 2022 - 03:28 pm', 'administrator', 'Updated a record with a senior id #99102101985554541025'),
(114, 'Dec 02, 2022 - 04:01 pm', 'staff1', 'Logged in system'),
(115, 'Dec 02, 2022 - 04:27 pm', 'staff1', 'Rejected a application with id #55564848495757499753'),
(116, 'Dec 02, 2022 - 04:35 pm', 'staff1', 'Accepted a application id #48100995548515797535'),
(117, 'Dec 02, 2022 - 04:35 pm', 'administrator', 'Logged in system'),
(118, 'Dec 02, 2022 - 04:51 pm', 'administrator', 'Accepted a application id #55564848495757499753'),
(119, 'Dec 02, 2022 - 04:54 pm', 'administrator', 'Updated a record with a account id #10010056102495148575'),
(120, 'Dec 02, 2022 - 04:54 pm', 'administrator', 'Logged in system'),
(121, 'Dec 02, 2022 - 04:55 pm', 'staff1', 'Logged in system'),
(122, 'Dec 02, 2022 - 04:55 pm', 'administrator', 'Logged in system'),
(123, 'Dec 02, 2022 - 05:03 pm', 'administrator', 'Added a record with a account id #50504851485751509899'),
(124, 'Dec 02, 2022 - 05:22 pm', 'administrator', 'Export records to excel'),
(125, 'Dec 02, 2022 - 05:35 pm', 'administrator', 'Updated a record with a account id #10010056102495148575'),
(126, 'Dec 02, 2022 - 05:36 pm', 'administrator', 'Updated a record with a account id #97569798559955525555'),
(127, 'Dec 02, 2022 - 07:52 pm', 'staff1', 'Logged in system'),
(128, 'Dec 02, 2022 - 07:52 pm', 'administrator', 'Logged in system'),
(129, 'Dec 02, 2022 - 08:34 pm', 'administrator', 'Logged in system'),
(130, 'Dec 03, 2022 - 06:42 am', 'administrator', 'Logged in system'),
(131, 'Dec 03, 2022 - 06:58 am', 'administrator', 'Updated a record with a account id #54515451535549545610'),
(132, 'Dec 03, 2022 - 07:14 am', 'administrator', 'Updated a record with a account id #10151539857511015651'),
(133, 'Dec 03, 2022 - 07:14 am', 'administrator', 'Updated a record with a account id #10151539857511015651'),
(134, 'Dec 03, 2022 - 07:15 am', 'administrator', 'Updated a record with a account id #10151539857511015651'),
(135, 'Dec 03, 2022 - 07:17 am', 'administrator', 'Updated a record with a account id #10151539857511015651'),
(136, 'Dec 03, 2022 - 07:17 am', 'administrator', 'Updated a record with a account id #10151539857511015651'),
(137, 'Dec 03, 2022 - 07:46 am', 'administrator', 'Export records to excel'),
(138, 'Dec 03, 2022 - 10:08 am', 'staff1', 'Logged in system'),
(139, 'Dec 03, 2022 - 10:08 am', 'administrator', 'Logged in system'),
(140, 'Dec 03, 2022 - 12:06 pm', 'staff1', 'Logged in system'),
(141, 'Dec 03, 2022 - 12:06 pm', 'administrator', 'Logged in system'),
(142, 'Dec 03, 2022 - 12:18 pm', 'staff1', 'Logged in system'),
(143, 'Dec 03, 2022 - 12:18 pm', 'administrator', 'Logged in system'),
(144, 'Dec 03, 2022 - 12:28 pm', 'staff1', 'Logged in system'),
(145, 'Dec 03, 2022 - 12:38 pm', 'administrator', 'Logged in system'),
(146, 'Dec 03, 2022 - 12:44 pm', 'staff1', 'Logged in system'),
(147, 'Dec 03, 2022 - 12:45 pm', 'staff1', 'Logged in system'),
(148, 'Dec 03, 2022 - 12:49 pm', 'administrator', 'Logged in system'),
(149, 'Dec 03, 2022 - 12:49 pm', 'staff1', 'Logged in system'),
(150, 'Dec 03, 2022 - 12:51 pm', 'staff1', 'Updated a record with a account id #55574910154561015010'),
(151, 'Dec 03, 2022 - 12:52 pm', 'staff1', 'Updated a record with a account id #50504851485751509899'),
(152, 'Dec 03, 2022 - 01:03 pm', 'staff1', 'Updated a record with a account id #54515451535549545610'),
(153, 'Dec 03, 2022 - 01:07 pm', 'administrator', 'Logged in system'),
(154, 'Dec 03, 2022 - 01:07 pm', 'staff1', 'Logged in system'),
(155, 'Dec 03, 2022 - 01:21 pm', 'staff4', 'Logged in system'),
(156, 'Dec 03, 2022 - 01:22 pm', 'administrator', 'Logged in system'),
(157, 'Dec 03, 2022 - 01:22 pm', 'staff1', 'Logged in system'),
(158, 'Dec 03, 2022 - 01:23 pm', 'administrator', 'Logged in system'),
(159, 'Dec 03, 2022 - 01:38 pm', 'staff1', 'Logged in system'),
(160, 'Dec 03, 2022 - 01:39 pm', 'staff1', 'Updated a record with a account id #55574910154561015010'),
(161, 'Dec 03, 2022 - 01:40 pm', 'staff1', 'Updated a record with a account id #55564848495757499753'),
(162, 'Dec 03, 2022 - 01:40 pm', 'administrator', 'Logged in system'),
(163, 'Dec 03, 2022 - 01:41 pm', 'staff1', 'Logged in system'),
(164, 'Dec 03, 2022 - 02:12 pm', 'administrator', 'Logged in system'),
(165, 'Dec 03, 2022 - 02:23 pm', 'staff1', 'Logged in system'),
(166, 'Dec 03, 2022 - 02:33 pm', 'administrator', 'Logged in system'),
(167, 'Dec 03, 2022 - 02:35 pm', 'administrator', 'Export records to excel'),
(168, 'Dec 03, 2022 - 02:37 pm', 'staff1', 'Logged in system'),
(169, 'Dec 03, 2022 - 02:38 pm', 'administrator', 'Logged in system'),
(170, 'Dec 03, 2022 - 03:00 pm', 'administrator', 'Updated a record with a account id #99555599515451975753'),
(171, 'Dec 03, 2022 - 03:01 pm', 'administrator', 'Updated a record with a account id #97515656559899499957'),
(172, 'Dec 03, 2022 - 04:07 pm', 'administrator', 'Logged in system'),
(173, 'Dec 03, 2022 - 04:07 pm', 'staff1', 'Logged in system'),
(174, 'Dec 03, 2022 - 04:10 pm', 'staff1', 'Logged in system'),
(175, 'Dec 03, 2022 - 04:10 pm', 'administrator', 'Logged in system'),
(176, 'Dec 03, 2022 - 04:30 pm', 'staff4', 'Logged in system'),
(177, 'Dec 03, 2022 - 04:31 pm', 'administrator', 'Logged in system'),
(178, 'Dec 03, 2022 - 04:35 pm', 'staff1', 'Logged in system'),
(179, 'Dec 03, 2022 - 04:37 pm', 'staff1', 'Logged in system'),
(180, 'Dec 03, 2022 - 04:39 pm', 'administrator', 'Logged in system'),
(181, 'Dec 03, 2022 - 04:39 pm', 'staff1', 'Logged in system'),
(182, 'Dec 03, 2022 - 04:46 pm', 'administrator', 'Logged in system'),
(183, 'Dec 03, 2022 - 04:47 pm', 'staff1', 'Logged in system'),
(184, 'Dec 03, 2022 - 04:52 pm', 'administrator', 'Logged in system'),
(185, 'Dec 03, 2022 - 04:54 pm', 'staff1', 'Logged in system'),
(186, 'Dec 03, 2022 - 04:54 pm', 'staff1', 'Logged in system'),
(187, 'Dec 03, 2022 - 04:56 pm', 'administrator', 'Logged in system'),
(188, 'Dec 03, 2022 - 05:00 pm', 'staff1', 'Logged in system'),
(189, 'Dec 03, 2022 - 05:01 pm', 'administrator', 'Logged in system'),
(190, 'Dec 03, 2022 - 05:07 pm', 'staff1', 'Logged in system'),
(191, 'Dec 03, 2022 - 05:21 pm', 'administrator', 'Logged in system'),
(192, 'Dec 03, 2022 - 05:42 pm', 'staff1', 'Logged in system'),
(193, 'Dec 03, 2022 - 05:45 pm', 'administrator', 'Logged in system'),
(194, 'Dec 03, 2022 - 05:59 pm', 'administrator', 'Logged in system'),
(195, 'Dec 03, 2022 - 06:01 pm', 'staff1', 'Logged in system'),
(196, 'Dec 03, 2022 - 06:05 pm', 'administrator', 'Logged in system'),
(197, 'Dec 03, 2022 - 06:07 pm', 'staff1', 'Logged in system'),
(198, 'Dec 03, 2022 - 06:19 pm', 'administrator', 'Logged in system'),
(199, 'Dec 03, 2022 - 06:43 pm', 'staff1', 'Logged in system'),
(200, 'Dec 03, 2022 - 06:43 pm', 'administrator', 'Logged in system'),
(201, 'Dec 03, 2022 - 06:49 pm', 'staff1', 'Logged in system'),
(202, 'Dec 03, 2022 - 06:56 pm', 'staff1', 'Updated a record with a account id #48100100555210148102'),
(203, 'Dec 03, 2022 - 06:56 pm', 'staff1', 'Updated a record with a account id #48100100555210148102'),
(204, 'Dec 03, 2022 - 06:56 pm', 'staff1', 'Updated a record with a account id #10151539857511015651'),
(205, 'Dec 03, 2022 - 06:56 pm', 'administrator', 'Logged in system'),
(206, 'Dec 03, 2022 - 06:57 pm', 'administrator', 'Updated a record with a account id #10010056102495148575'),
(207, 'Dec 03, 2022 - 06:57 pm', 'administrator', 'Updated a record with a account id #10010056102495148575'),
(208, 'Dec 03, 2022 - 06:57 pm', 'administrator', 'Updated a record with a account id #10010056102495148575'),
(209, 'Dec 03, 2022 - 06:58 pm', 'administrator', 'Updated a record with a account id #10010056102495148575'),
(210, 'Dec 03, 2022 - 06:58 pm', 'administrator', 'Updated a record with a account id #10010056102495148575'),
(211, 'Dec 03, 2022 - 07:12 pm', 'administrator', 'Updated a record with a account id #10010056102495148575'),
(212, 'Dec 03, 2022 - 07:21 pm', 'administrator', 'Updated a record with a account id #10010056102495148575'),
(213, 'Dec 03, 2022 - 07:23 pm', 'administrator', 'Updated a record with a account id #10010056102495148575'),
(214, 'Dec 03, 2022 - 07:23 pm', 'administrator', 'Updated a record with a account id #10010056102495148575'),
(215, 'Dec 03, 2022 - 07:25 pm', 'administrator', 'Updated a record with a account id #10010056102495148575'),
(216, 'Dec 03, 2022 - 07:28 pm', 'administrator', 'Updated a record with a account id #97569798559955525555'),
(217, 'Dec 03, 2022 - 07:30 pm', 'administrator', 'Updated a record with a account id #53515451555652101531'),
(218, 'Dec 03, 2022 - 08:10 pm', 'staff1', 'Logged in system'),
(219, 'Dec 03, 2022 - 08:10 pm', 'administrator', 'Logged in system'),
(220, 'Dec 03, 2022 - 08:35 pm', 'staff1', 'Logged in system'),
(221, 'Dec 03, 2022 - 08:36 pm', 'administrator', 'Logged in system'),
(222, 'Dec 03, 2022 - 08:41 pm', 'staff1', 'Logged in system'),
(223, 'Dec 03, 2022 - 08:43 pm', 'administrator', 'Logged in system'),
(224, 'Dec 03, 2022 - 08:47 pm', 'staff1', 'Logged in system'),
(225, 'Dec 03, 2022 - 08:49 pm', 'administrator', 'Logged in system'),
(226, 'Dec 03, 2022 - 08:52 pm', 'staff1', 'Logged in system'),
(227, 'Dec 03, 2022 - 09:02 pm', 'administrator', 'Logged in system'),
(228, 'Dec 03, 2022 - 09:03 pm', 'administrator', 'Logged in system'),
(229, 'Dec 03, 2022 - 09:27 pm', 'administrator', 'Logged in system'),
(230, 'Dec 03, 2022 - 09:34 pm', 'staff1', 'Logged in system'),
(231, 'Dec 03, 2022 - 09:36 pm', 'administrator', 'Logged in system'),
(232, 'Dec 03, 2022 - 09:39 pm', 'staff1', 'Logged in system'),
(233, 'Dec 03, 2022 - 09:39 pm', 'administrator', 'Logged in system'),
(234, 'Dec 03, 2022 - 09:51 pm', 'staff1', 'Logged in system'),
(235, 'Dec 03, 2022 - 09:53 pm', 'administrator', 'Logged in system'),
(236, 'Dec 04, 2022 - 07:14 am', 'administrator', 'Logged in system'),
(237, 'Dec 04, 2022 - 07:28 am', 'staff1', 'Logged in system'),
(238, 'Dec 04, 2022 - 07:29 am', 'administrator', 'Logged in system'),
(239, 'Dec 04, 2022 - 07:33 am', 'staff1', 'Logged in system'),
(240, 'Dec 04, 2022 - 07:34 am', 'administrator', 'Logged in system'),
(241, 'Dec 04, 2022 - 07:36 am', 'staff1', 'Logged in system'),
(242, 'Dec 04, 2022 - 07:36 am', 'administrator', 'Logged in system'),
(243, 'Dec 04, 2022 - 07:55 am', 'staff1', 'Logged in system'),
(244, 'Dec 04, 2022 - 07:57 am', 'administrator', 'Logged in system'),
(245, 'Dec 04, 2022 - 09:17 am', 'administrator', 'Added a record with a account id #99995798975697981005'),
(246, 'Dec 04, 2022 - 09:19 am', 'administrator', 'Added a record with a account id #50102534899101100485'),
(247, 'Dec 04, 2022 - 09:46 am', 'staff1', 'Logged in system'),
(248, 'Dec 04, 2022 - 09:46 am', 'administrator', 'Logged in system'),
(249, 'Dec 04, 2022 - 10:09 am', 'staff1', 'Logged in system'),
(250, 'Dec 04, 2022 - 10:15 am', 'administrator', 'Logged in system'),
(251, 'Dec 04, 2022 - 10:33 am', 'staff1', 'Logged in system'),
(252, 'Dec 04, 2022 - 10:51 am', 'administrator', 'Logged in system'),
(253, 'Dec 04, 2022 - 10:51 am', 'administrator', 'Updated a record with a account id #10051531019957535610'),
(254, 'Dec 04, 2022 - 11:06 am', 'administrator', 'Updated a record with a account id #10010056102495148575'),
(255, 'Dec 04, 2022 - 11:07 am', 'administrator', 'Updated a record with a account id #55574910154561015010'),
(256, 'Dec 04, 2022 - 11:08 am', 'administrator', 'Added a record with a account id #53995554101979750491'),
(257, 'Dec 04, 2022 - 11:10 am', 'administrator', 'Updated a record with a account id #10010056102495148575'),
(258, 'Dec 04, 2022 - 11:12 am', 'staff1', 'Logged in system'),
(259, 'Dec 04, 2022 - 11:12 am', 'staff4', 'Logged in system'),
(260, 'Dec 04, 2022 - 11:12 am', 'administrator', 'Logged in system'),
(261, 'Dec 04, 2022 - 11:13 am', 'staff2', 'Logged in system'),
(262, 'Dec 04, 2022 - 11:13 am', 'administrator', 'Logged in system'),
(263, 'Dec 04, 2022 - 11:13 am', 'staff3', 'Logged in system'),
(264, 'Dec 04, 2022 - 11:14 am', 'staff3', 'Rejected a application with id #10249975554101539856'),
(265, 'Dec 04, 2022 - 11:18 am', 'administrator', 'Logged in system'),
(266, 'Dec 04, 2022 - 11:18 am', 'administrator', 'Accepted a application id #48100995548515797535'),
(267, 'Dec 04, 2022 - 11:31 am', 'administrator', 'Logged in system'),
(268, 'Dec 04, 2022 - 11:32 am', 'administrator', 'Logged in system'),
(269, 'Dec 04, 2022 - 11:33 am', 'staff1', 'Logged in system'),
(270, 'Dec 04, 2022 - 11:42 am', 'staff3', 'Logged in system'),
(271, 'Dec 04, 2022 - 11:44 am', 'administrator', 'Logged in system'),
(272, 'Dec 04, 2022 - 11:44 am', 'administrator', 'Accepted a application id #54541015010048995449'),
(273, 'Dec 04, 2022 - 11:56 am', 'administrator', 'Logged in system'),
(274, 'Dec 04, 2022 - 11:59 am', 'administrator', 'Logged in system'),
(275, 'Dec 04, 2022 - 11:59 am', 'administrator', 'Logged in system'),
(276, 'Dec 04, 2022 - 12:00 pm', 'administrator', 'Removed staff9'),
(277, 'Dec 04, 2022 - 12:00 pm', 'administrator', 'Logged in system'),
(278, 'Dec 04, 2022 - 12:01 pm', 'staff9', 'Logged in system'),
(279, 'Dec 04, 2022 - 12:01 pm', 'staff9', 'Accepted a application id #97559757555455101515'),
(280, 'Dec 04, 2022 - 12:01 pm', 'staff9', 'Accepted a application id #57555155531005610250'),
(281, 'Dec 04, 2022 - 12:01 pm', 'staff9', 'Accepted a application id #48101579750995456514'),
(282, 'Dec 04, 2022 - 12:01 pm', 'staff9', 'Accepted a application id #10253515049515797985'),
(283, 'Dec 04, 2022 - 12:01 pm', 'administrator', 'Logged in system'),
(284, 'Dec 04, 2022 - 12:01 pm', 'administrator', 'Accepted a application id #97559757555455101515'),
(285, 'Dec 04, 2022 - 12:05 pm', 'administrator', 'Accepted a application id #57555155531005610250'),
(286, 'Dec 04, 2022 - 12:05 pm', 'administrator', 'Accepted a application id #48101579750995456514'),
(287, 'Dec 04, 2022 - 12:05 pm', 'administrator', 'Accepted a application id #10253515049515797985'),
(288, 'Dec 04, 2022 - 12:10 pm', 'administrator', 'Logged in system'),
(289, 'Dec 04, 2022 - 12:15 pm', 'administrator', 'Logged in system'),
(290, 'Dec 04, 2022 - 12:16 pm', 'staff9', 'Logged in system'),
(291, 'Dec 04, 2022 - 12:17 pm', 'administrator', 'Logged in system'),
(292, 'Dec 04, 2022 - 12:18 pm', 'staff1', 'Logged in system'),
(293, 'Dec 04, 2022 - 01:02 pm', 'administrator', 'Logged in system'),
(294, 'Dec 04, 2022 - 01:14 pm', 'staff1', 'Logged in system'),
(295, 'Dec 04, 2022 - 01:40 pm', 'administrator', 'Logged in system'),
(296, 'Dec 04, 2022 - 02:04 pm', 'administrator', 'Remove a record with a account id #10151539857511015651');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_records`
--

CREATE TABLE `tbl_records` (
  `id` int(11) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `fx_id` varchar(50) NOT NULL,
  `fx_firstname` varchar(50) NOT NULL,
  `fx_lastname` varchar(50) NOT NULL,
  `fx_middlename` varchar(50) NOT NULL,
  `fx_contact` varchar(150) NOT NULL,
  `fd_birthdate` date NOT NULL,
  `fx_gender` varchar(50) NOT NULL,
  `fx_barangay` varchar(150) NOT NULL,
  `fn_age` int(3) NOT NULL,
  `fn_pension` bigint(50) NOT NULL,
  `fn_status` varchar(50) NOT NULL,
  `life_status` varchar(150) NOT NULL,
  `fd_pension` date NOT NULL,
  `account_status` varchar(150) NOT NULL,
  `fx_pwd` varchar(50) NOT NULL,
  `fd_started` date NOT NULL,
  `fx_remarks` varchar(150) NOT NULL,
  `fd_remarks` date NOT NULL,
  `fx_remove` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_records`
--

INSERT INTO `tbl_records` (`id`, `uid`, `fx_id`, `fx_firstname`, `fx_lastname`, `fx_middlename`, `fx_contact`, `fd_birthdate`, `fx_gender`, `fx_barangay`, `fn_age`, `fn_pension`, `fn_status`, `life_status`, `fd_pension`, `account_status`, `fx_pwd`, `fd_started`, `fx_remarks`, `fd_remarks`, `fx_remove`) VALUES
(71, '10010056102495148575', '04921', 'MARIA LUZ', 'BAJA', 'P', 'maria@io.com', '1954-09-13', 'Male', 'Barangay 2', 68, 5000, 'Pending', 'alive', '0000-00-00', 'active', 'Yes', '2022-09-15', '', '0000-00-00', 'No'),
(78, '97569798559955525555', '0831', 'IAN', 'DEL MUNDO', 'P', '09739291019', '2000-09-01', 'Male', 'Barangay 4', 61, 5000, 'Received', 'alive', '2022-11-28', 'inactive', 'Yes', '2022-12-02', '', '0000-00-00', 'No'),
(79, '53515451555652101531', '0322', 'MADIE', 'GARCIA', 'O', 'mdi@io.com', '1974-01-20', 'Female', 'Payompon', 87, 9000, 'Pending', 'dead', '0000-00-00', 'active', 'No', '2022-08-04', '', '0000-00-00', 'No'),
(86, '54535550525456511021', '0832', 'FRANCISCO', 'TORRENTE', 'B', 'ftorrente@icloud.com', '1955-10-08', 'Female', 'Tayamaan', 90, 5000, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2022-09-13', '', '0000-00-00', 'No'),
(88, '99102101985554541025', '0941', 'JUNE', 'DEL GIL', 'P', 'june@io.com', '1988-12-18', 'Male', 'Barangay 6', 99, 6500, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2022-10-01', '', '0000-00-00', 'No'),
(96, '49102544957525799985', '0483', 'ROSARIO', 'DEL GACO', 'O', 'rdelgco@gmail.com', '1986-12-29', 'Female', 'Fatima', 76, 7000, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2022-02-09', '', '0000-00-00', 'No'),
(130, '99555599515451975753', '0301', 'ALVIN', 'DELA FUENTE', 'L', '0930-211-12', '2000-10-29', 'Female', 'Barangay 3', 67, 5000, 'Pending', 'dead', '0000-00-00', 'active', 'No', '2022-10-10', '', '0000-00-00', 'No'),
(135, '10051531019957535610', '0231', 'MARIA ', 'ISABLE', 'A', 'MN-199-1', '1922-12-19', 'Female', 'Barangay 5', 99, 5000, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2022-07-19', '', '0000-00-00', 'No'),
(140, '99481001025553574910', '02314', 'ANDREA', 'BELUGA', 'A', '0902-29-21', '1942-10-29', 'Female', 'Barangay 8', 69, 9000, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2022-10-19', '', '0000-00-00', 'No'),
(141, '48100100555210148102', '0248', 'JUAN', 'OLIVIA', 'J', '98-281-128', '1942-09-28', 'Male', 'Barangay 1', 90, 8000, 'Received', 'dead', '2022-12-04', 'active', 'No', '2022-09-10', '', '0000-00-00', 'No'),
(142, '51102565451535197101', '02318', 'NIMEI', 'LODIA', 'D', '099213-31-1', '1941-12-02', 'Female', 'Balansay', 98, 8001, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2022-11-12', '', '0000-00-00', 'No'),
(148, '97100534850102565497', '0842', 'SARA', 'MILES', 'S', '+639759271928', '1949-10-07', 'Female', 'Barangay 7', 61, 1000, 'Pending', 'dead', '0000-00-00', 'active', 'No', '2022-04-22', '', '0000-00-00', 'No'),
(149, '53545198994899545697', '08321', 'ALAN', 'TORRES', 'J', 'alant@gmail.com', '1989-09-19', 'Male', 'Barangay 7', 96, 9029, 'Pending', 'dead', '0000-00-00', 'active', 'No', '2022-12-01', '', '0000-00-00', 'No'),
(150, '98565148515110110056', '07320', 'TASHA', 'ADKINS', 'M', 'tasha@gmail.com', '1978-12-18', 'Female', 'Barangay 7', 68, 2900, 'Received', 'alive', '0000-00-00', 'active', 'No', '2022-05-01', '', '0000-00-00', 'No'),
(151, '48102545653504910099', '0312', 'CASEY', 'MCKENZIE', 'K', 'casey@gmail.com', '1970-12-18', 'Female', 'San Luis (Ligang)', 67, 8900, 'Pending', 'alive', '0000-00-00', 'active', 'Yes', '2022-02-02', '', '0000-00-00', 'No'),
(152, '48504956485710199100', '0290', 'WILLIE', 'GIBSON', 'D', '09988301820', '1900-12-19', 'Male', 'Talabaan', 90, 8000, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2022-11-10', '', '0000-00-00', 'No'),
(153, '54501025357545252100', '0283', 'RON', 'MORENO', 'J', '09038291791', '1980-08-09', 'Male', 'Tangkalan', 89, 9000, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2021-01-09', '', '0000-00-00', 'No'),
(154, '50485454495410156485', '02839', 'TERRANCE', 'HUNTER', 'K', '09381028101', '1999-10-10', 'Male', 'Barangay 2', 70, 9000, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2021-04-09', '', '0000-00-00', 'No'),
(157, '50495550991019999485', '0839', 'TOM', 'GIL', 'K', 'tomgil@gmail.com', '1948-12-29', 'Male', 'Barangay 4', 89, 9301, 'Received', 'alive', '2022-12-01', 'active', 'No', '2021-03-19', '', '0000-00-00', 'No'),
(158, '10199541025750975056', '0218', 'ANDIE', 'KATE', 'K', 'andiekate@github.io', '1928-09-01', 'Female', 'Barangay 4', 68, 10000, 'Received', 'dead', '0000-00-00', 'active', 'No', '2021-02-19', '', '0000-00-00', 'No'),
(165, '53999797545055975550', '843-21', 'JOAN', 'ABC', 'A', '09403-21-12', '1900-12-19', 'Female', 'Fatima', 68, 9403, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2021-05-29', '', '0000-00-00', 'No'),
(167, '57505755555110251102', '023144', 'AXANSN', 'ANSD', 'A', '029-1231', '2000-10-19', 'Female', 'Barangay 6', 90, 9000, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2021-06-22', '', '0000-00-00', 'No'),
(169, '55539810151494898534', '02319', 'XXX', 'XX', 'X', 'xx-xx-xxxx', '1990-12-19', 'Female', 'Talabaan', 90, 9000, 'Received', 'alive', '2022-11-11', 'active', 'No', '2021-07-24', '', '0000-00-00', 'No'),
(170, '97515656559899499957', '102193123', 'XXXX', 'XXX', 'X', '09758291719', '1899-12-18', 'Male', 'Barangay 3', 90, 0, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2021-10-09', '', '0000-00-00', 'No'),
(171, '10010252495450499799', '921-291-99', 'VIVIAN', 'DEL MUNDO', 'D', '09539282910', '1922-10-19', 'Female', 'Payompon', 90, 0, 'Pending', 'alive', '0000-00-00', 'inactive', 'No', '2021-09-09', '', '0000-00-00', 'No'),
(172, '56555610148579753102', '9238-23281', 'AAA AAN', 'AAAAAA', 'A', '09742818282', '1929-12-21', 'Female', 'Barangay 4', 90, 1500, 'Received', 'alive', '2022-11-27', 'active', 'No', '2021-08-09', '', '0000-00-00', 'No'),
(173, '10151539857511015651', '312-239-139-21290', 'ADADJADN', 'SADNAJSD', 'K', 'adasda@gmail.com', '1922-12-19', 'Female', 'Barangay 1', 68, 4000, 'Received', 'alive', '2022-12-04', 'active', 'No', '2021-11-09', '', '0000-00-00', 'Yes'),
(174, '55574910154561015010', '123121-31312', 'NJDNA', 'DSA', 'M', 'sd12@gmail.com', '1923-12-12', 'Male', 'Barangay 1', 63, 4000, 'Received', 'alive', '2022-12-04', 'active', 'No', '2021-12-09', '', '0000-00-00', 'No'),
(175, '57481015352101539999', '0123-213-000', 'ASDUW', 'SAD', 'A', '092382819189', '1923-12-19', 'Female', 'Barangay 1', 64, 1000, 'Pending', 'dead', '0000-00-00', 'inactive', 'No', '2022-03-09', '', '0000-00-00', 'No'),
(178, '10054971009949505252', '2132-1231', 'ASDADJ', 'AJDAJSD', 'J', '09302819281', '1999-12-12', 'Male', 'Barangay 4', 62, 0, 'Pending', 'alive', '0000-00-00', 'inactive', 'No', '2022-03-09', '', '0000-00-00', 'No'),
(180, '56995410010299100544', '9821-218', 'TEST', 'ID', 'D', '092018201819', '1988-12-19', 'Female', 'Barangay 1', 90, 0, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2022-07-09', '', '0000-00-00', 'No'),
(181, '52485454102985450495', '01238-12318', 'TEST', 'RECORD', 'D', '09573038208', '1988-12-19', 'Female', 'Barangay 1', 63, 9000, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2022-05-09', '', '0000-00-00', 'No'),
(182, '54515451535549545610', '923-231', 'DASDJ', 'AJDS', 'A', '0923182918', '1977-10-19', 'Male', 'Barangay 1', 72, 0, 'Pending', 'dead', '0000-00-00', 'active', 'No', '2019-02-10', '', '0000-00-00', 'No'),
(183, '55564848495757499753', '20291-1200-21', 'HT', 'ML', 'J', '08739271927', '1988-12-19', 'Female', 'Barangay 1', 67, 0, 'Pending', 'dead', '0000-00-00', 'active', 'Yes', '2020-12-10', '', '0000-00-00', 'No'),
(184, '50504851485751509899', '0213-213', 'JQUERY', 'HTML', 'D', '09348210281', '1955-12-01', 'Female', 'Barangay 1', 78, 1000, 'Received', 'dead', '2022-12-03', 'active', 'No', '2022-06-19', '', '0000-00-00', 'No'),
(185, '99995798975697981005', '9123-1203-210', 'TEST ', 'ARRAY ', 'DT', '092381018102', '1977-12-12', 'Female', 'Barangay 2', 78, 90, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2017-12-18', '', '0000-00-00', 'No'),
(186, '50102534899101100485', '2391231-213', 'NDSA', 'ADAS', 'A', '092138129119', '1920-12-12', 'Female', 'Barangay 2', 90, 0, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2016-12-19', '', '0000-00-00', 'No'),
(187, '53995554101979750491', '120312-1322', 'JADA', 'AJSD', 'D', '012932819189', '1922-12-18', 'Male', 'Barangay 2', 78, 5000, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2020-12-18', '', '0000-00-00', 'No'),
(188, '48100995548515797535', '2193-21', 'JONNA', 'NATHALIA', 'K', '093810271080', '1955-12-19', 'Female', 'Barangay 1', 77, 0, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2019-03-04', '', '0000-00-00', 'No'),
(189, '54541015010048995449', '023-123-000', 'TEST', 'NAME', 'X', '0945-212-1291', '1892-09-09', 'Male', 'Barangay 3', 90, 0, 'Pending', 'alive', '2022-12-04', 'active', 'No', '2019-01-02', '', '0000-00-00', 'No'),
(190, '97559757555455101515', '37230-n3nj210-3', 'SDANAQ', 'WIQK', 'K', '9729171917', '1988-12-18', 'Female', 'Balansay', 91, 0, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2022-12-04', '', '0000-00-00', 'No'),
(191, '57555155531005610250', '713-213-12', 'TEST', 'CLIPS', 'J', '09239172918', '1922-12-01', 'Female', 'Balansay', 78, 0, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2022-12-04', '', '0000-00-00', 'No'),
(192, '48101579750995456514', '734-3bd92-2', 'JASN', 'SSAD', 'D', '09382917191', '1922-10-19', 'Male', 'Balansay', 62, 0, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2022-12-04', '', '0000-00-00', 'No'),
(193, '10253515049515797985', '9231013-231', 'TEST', 'REDIRECTS', 'K', '09381921781', '1920-12-19', 'Male', 'Balansay', 67, 0, 'Pending', 'alive', '0000-00-00', 'active', 'No', '2022-12-04', '', '0000-00-00', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `id` int(11) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `fx_idnumber` varchar(150) NOT NULL,
  `fx_idpresented` varchar(150) NOT NULL,
  `fx_firstname` varchar(150) NOT NULL,
  `fx_lastname` varchar(150) NOT NULL,
  `fx_initial` varchar(150) NOT NULL,
  `fx_gender` varchar(50) NOT NULL,
  `fd_birthdate` date NOT NULL,
  `fx_barangay` varchar(150) NOT NULL,
  `fx_contact` varchar(150) NOT NULL,
  `fn_age` int(150) NOT NULL,
  `fl_idpresented` varchar(250) CHARACTER SET latin1 NOT NULL,
  `fl_form` varchar(250) CHARACTER SET latin1 NOT NULL,
  `fd_application` varchar(150) NOT NULL,
  `fx_pwd` varchar(50) NOT NULL,
  `fx_remarks` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`id`, `uid`, `fx_idnumber`, `fx_idpresented`, `fx_firstname`, `fx_lastname`, `fx_initial`, `fx_gender`, `fd_birthdate`, `fx_barangay`, `fx_contact`, `fn_age`, `fl_idpresented`, `fl_form`, `fd_application`, `fx_pwd`, `fx_remarks`) VALUES
(39, '51100981019751100985', '03123-1231', 'Birth Certificate', 'JUAN ', 'GOLEM', 'J', 'Female', '1999-12-18', 'Barangay 7', 'absckansdj@gmail.com', 68, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 26, 2022', 'Yes', ''),
(47, '50101481015451575751', '2831-000-1-23', 'Government-issued ID', 'ASDNAJS', 'AS', 'D', 'Female', '1933-12-28', 'Barangay 5', 'ad@gmail.com', 78, 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'Nov 27, 2022', 'Yes', ''),
(55, '10148101102511019998', 'k04234-3242-jdsn', 'Baptismal Certificate', 'TEST', 'CLIPBOARD', 'C', 'Female', '1900-12-19', 'Balansay', '09281018191', 61, 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'Nov 27, 2022', 'No', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_regstatus`
--

CREATE TABLE `tbl_regstatus` (
  `id` int(11) NOT NULL,
  `uid` varchar(150) NOT NULL,
  `fx_idnumber` varchar(150) NOT NULL,
  `fx_idpresented` varchar(150) NOT NULL,
  `fx_firstname` varchar(150) NOT NULL,
  `fx_lastname` varchar(150) NOT NULL,
  `fx_initial` varchar(150) NOT NULL,
  `fx_gender` varchar(50) NOT NULL,
  `fd_birthdate` date NOT NULL,
  `fx_barangay` varchar(150) NOT NULL,
  `fx_contact` varchar(150) NOT NULL,
  `fn_age` int(150) NOT NULL,
  `fx_pwd` varchar(50) NOT NULL,
  `fl_idpresented` varchar(150) NOT NULL,
  `fl_form` varchar(150) NOT NULL,
  `fd_application` varchar(150) NOT NULL,
  `fx_statusbycluster` varchar(150) NOT NULL,
  `fd_acceptedbycluster` varchar(150) NOT NULL,
  `fd_acceptedbyadmin` varchar(150) NOT NULL,
  `fx_statusbyadmin` varchar(150) NOT NULL,
  `fx_remarks` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_regstatus`
--

INSERT INTO `tbl_regstatus` (`id`, `uid`, `fx_idnumber`, `fx_idpresented`, `fx_firstname`, `fx_lastname`, `fx_initial`, `fx_gender`, `fd_birthdate`, `fx_barangay`, `fx_contact`, `fn_age`, `fx_pwd`, `fl_idpresented`, `fl_form`, `fd_application`, `fx_statusbycluster`, `fd_acceptedbycluster`, `fd_acceptedbyadmin`, `fx_statusbyadmin`, `fx_remarks`) VALUES
(7, '2312398921', '102193123', 'Comelec ID', 'XXXX', 'XXX', 'X', 'Male', '1899-12-18', 'Barangay 3', '09758291719', 90, 'No', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 23, 2022', 'accepted', 'NOV, 24, 2022', 'Nov 26, 2022', 'accepted', ''),
(8, '54541015010048995449', '023-123-000', 'Birth Certificate', 'TEST', 'NAME', 'X', 'Male', '1892-09-09', 'Barangay 3', '0945-212-1291', 90, 'No', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 23, 2022', 'accepted', 'NOV, 24, 2022', 'Dec 04, 2022', 'accepted', ''),
(9, '21873213922', '921-291-99', 'Drivers License', 'VIVIAN', 'DEL MUNDO', 'D', 'Female', '1922-10-19', 'Payompon', '09539282910', 90, 'No', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'Nov 24, 2022', 'accepted', 'NOV, 24, 2022', 'Nov 26, 2022', 'accepted', ''),
(14, '231239892183', '9238-23281', 'Baptismal Certificate', 'AAA AAN', 'AAAAAA', 'A', 'Female', '1929-12-21', 'Barangay 4', '09742818282', 90, 'No', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 24, 2022', 'accepted', 'NOV, 24, 2022', 'Nov 26, 2022', 'accepted', ''),
(15, '50529899501015349102', '203-1231-000', 'Barangay Clearance', 'TEST ', 'REGISTRATION', 'II', 'Male', '1999-12-19', 'Barangay 4', '09849282018', 90, 'No', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 24, 2022', 'accepted', 'Nov 24, 2022', 'Nov 29, 2022', 'rejected', ''),
(16, '49551005448561015598', '923-129-2', 'Passport', 'TOM', 'CRUZ', 'J', 'Male', '1933-12-18', 'Barangay 4', '09640262819', 90, 'No', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 25, 2022', 'rejected', 'Nov 26, 2022', 'N/A', 'N/A', ''),
(17, '10054971009949505252', '2132-1231-129-000', 'Passport', 'ASDADJ', 'AJDAJSD', 'J', 'Male', '1999-12-12', 'Barangay 4', '09302819281', 62, 'No', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 26, 2022', 'accepted', 'Nov 26, 2022', 'Nov 29, 2022', 'accepted', ''),
(18, '52525556485056101555', '3823-000-1311', 'Comelec ID', 'ASDND', 'ABSD', 'A', 'Female', '1988-12-19', 'Barangay 4', '09237193810', 70, 'No', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 26, 2022', 'accepted', 'Nov 26, 2022', 'Dec 01, 2022', 'rejected', 'remarks by admin'),
(19, '10299575355494897575', '312-239-139-2', 'NBI Clearance', 'ADADJADN', 'SADNAJSD', 'K', 'Female', '1922-12-19', 'Barangay 1', 'adasda@gmail.com', 68, 'No', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 26, 2022', 'accepted', 'Nov 27, 2022', 'Nov 27, 2022', 'accepted', ''),
(20, '51525556100555751515', '123121-31312', 'Comelec ID', 'NJDNA', 'DSA', 'M', 'Male', '1923-12-12', 'Barangay 1', 'sd12@gmail.com', 61, 'No', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 26, 2022', 'accepted', 'Nov 27, 2022', 'Nov 27, 2022', 'accepted', ''),
(21, '50995651100100571024', '0123-213-000', 'Senior ID', 'ASDUW', 'SAD', 'A', 'Female', '1923-12-19', 'Barangay 1', '092382819189', 64, 'No', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 26, 2022', 'accepted', 'Nov 27, 2022', 'Nov 27, 2022', 'accepted', ''),
(26, '50505256489752102985', '13-2392-311', 'Drivers License', 'HJKLYUIO', 'GHJKL', 'S', 'Female', '1978-12-29', 'Barangay 1', '09238939281', 67, 'No', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'Nov 27, 2022', 'rejected', 'Dec 01, 2022', 'N/A', 'N/A', 'test remarks'),
(27, '98539849505251499750', '2131-1312-311', 'Birth Certificate', 'ASKD', 'ASDKAKSD', 'L', 'Male', '1966-12-01', 'Barangay 1', '092139128391', 74, 'No', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 26, 2022', 'accepted', 'Dec 01, 2022', 'Dec 01, 2022', 'accepted', 'test remarkssss'),
(28, '48102531025298495452', 'dja2u-12jh11', 'Birth Certificate', 'DNA', 'KAS', 'S', 'Female', '2000-11-19', 'Barangay 1', '09291820180', 99, 'No', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 27, 2022', 'accepted', 'Dec 01, 2022', 'Dec 01, 2022', 'accepted', ''),
(29, '98102991004910051100', '8231o-213', 'Barangay Clearance', 'TEST', 'COPY', 'A', 'Female', '1922-01-01', 'Barangay 1', '09281917291', 69, 'No', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 27, 2022', 'accepted', 'Dec 01, 2022', 'Dec 01, 2022', 'accepted', 'test'),
(30, '54515451535549545610', '923-231-12-000', 'Senior ID', 'DASDJ', 'AJDS', 'A', 'Male', '1977-10-19', 'Barangay 1', '0923182918', 72, 'No', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 26, 2022', 'accepted', 'Dec 02, 2022', 'Dec 02, 2022', 'accepted', ''),
(31, '55564848495757499753', '20291-1200-21', 'Passport', 'HT', 'ML', 'J', 'Female', '1988-12-19', 'Barangay 1', '08739271927', 67, 'Yes', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Dec 02, 2022', 'accepted', 'Dec 02, 2022', 'Dec 02, 2022', 'accepted', ''),
(32, '48100995548515797535', '2193-21', 'Comelec ID', 'JONNA', 'NATHALIA', 'K', 'Female', '1955-12-19', 'Barangay 1', '093810271080', 77, 'No', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Dec 02, 2022', 'accepted', 'Dec 02, 2022', 'Dec 04, 2022', 'accepted', ''),
(33, '10249975554101539856', '932-123-10-0', 'Baptismal Certificate', 'KDSAKD', 'DNJSADN', 'D', 'Male', '1922-12-11', 'Barangay 3', '09392719189', 69, 'Yes', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 27, 2022', 'rejected', 'Dec 04, 2022', 'N/A', 'N/A', 'test remarks'),
(34, '97559757555455101515', '37230-n3nj210-3', 'Barangay Clearance', 'SDANAQ', 'WIQK', 'K', 'Female', '1988-12-18', 'Balansay', '9729171917', 91, 'No', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 29, 2022', 'accepted', 'Dec 04, 2022', 'Dec 04, 2022', 'accepted', ''),
(35, '57555155531005610250', '713-213-12', 'Baptismal Certificate', 'TEST', 'CLIPS', 'J', 'Female', '1922-12-01', 'Balansay', '09239172918', 78, 'No', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 27, 2022', 'accepted', 'Dec 04, 2022', 'Dec 04, 2022', 'accepted', ''),
(36, '48101579750995456514', '734-3bd92-2', 'Baptismal Certificate', 'JASN', 'SSAD', 'D', 'Male', '1922-10-19', 'Balansay', '09382917191', 62, 'No', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 27, 2022', 'accepted', 'Dec 04, 2022', 'Dec 04, 2022', 'accepted', ''),
(37, '10253515049515797985', '9231013-231', 'Baptismal Certificate', 'TEST', 'REDIRECTS', 'K', 'Male', '1920-12-19', 'Balansay', '09381921781', 67, 'No', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 27, 2022', 'accepted', 'Dec 04, 2022', 'Dec 04, 2022', 'accepted', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fm_img` varchar(150) CHARACTER SET latin1 NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_num` varchar(150) NOT NULL,
  `fx_street` varchar(150) NOT NULL,
  `fx_municipality` varchar(150) NOT NULL,
  `user_level` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `role_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fm_img`, `user_name`, `full_name`, `email`, `contact_num`, `fx_street`, `fx_municipality`, `user_level`, `password`, `role_description`) VALUES
(2, 'user.png', 'administrator', 'Joe Doe', 'administrator@artsy.com', '09753929181', '', 'Mamburao', 'admin', '$2y$10$r.gsLBV39faSKoWdrbxhAO0kgjAMpxD.53aEhsWtib1k9zlOtjBsW', 'Admin is responsible for all action including deleting records, adding and                                         removing user                                         from the system.'),
(62, 'user.png', 'staff4', 'Test name', 'testemail@gmail.com', 'N/A', 'Barangay 4', 'Mamburao', 'staff', '$2y$10$AL6iNska0fCq6Qgv0jRg1OmcuZlErJK8tEzAgyt.Xkjoi2nC0OTRK', 'Staff is responsible for monitoring records but some action is prohibited.Staff can add and update record but deleting will shows in activity log which is controlled by admin.'),
(63, 'user.png', 'staff1', 'N/A', 'N/A', 'N/A', 'Barangay 1', 'N/A', 'staff', '$2y$10$nxclr.YSeMz5wG57lzYt7.kJaWD7yiD4ajzMQYkKIlBvSs3uR6WLa', 'Staff is responsible for monitoring records but some action is prohibited.Staff can add and update record but deleting will shows in activity log which is controlled by admin.'),
(67, 'user.png', 'staff14', 'N/A', 'N/A', 'N/A', 'Tangkalan', 'N/A', 'staff', '$2y$10$pv0msA7DneHU9YgoYkhkVuLTKoWBPppblD2yja.7HlvJexK7jInmq', 'Staff is responsible for monitoring records but some action is prohibited.Staff can add and update record but deleting will shows in activity log which is controlled by admin.'),
(69, 'user.png', 'staff2', 'N/A', 'N/A', 'N/A', 'Barangay 2', 'N/A', 'staff', '$2y$10$KeXJvkIoVcz0P6.0RVxqoOQVxUZPvVq4aNYC16xiWum81G6oS2q4C', 'Staff is responsible for monitoring records but some action is prohibited.Staff can add and update record but deleting will shows in activity log which is controlled by admin.'),
(70, 'user.png', 'staff3', 'N/A', 'N/A', 'N/A', 'Barangay 3', 'N/A', 'staff', '$2y$10$eBPGupEgq0Z5wfCsAcA9fO7rJT1190l8GKXyZ.6DNLvUCldNOJFbi', 'Staff is responsible for monitoring records but some action is prohibited.Staff can add and update record but deleting will shows in activity log which is controlled by admin.'),
(71, 'user.png', 'staff9', 'N/A', 'N/A', 'N/A', 'Balansay', 'N/A', 'staff', '$2y$10$hrLrTW3jODWJ4PgKlt6SWOg9m5ccwtUaJ1cux/OVYznXmp4cXeDoG', 'Staff is responsible for monitoring records but some action is prohibited.Staff can add and update record but deleting will shows in activity log which is controlled by admin.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_activities`
--
ALTER TABLE `tbl_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_records`
--
ALTER TABLE `tbl_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_regstatus`
--
ALTER TABLE `tbl_regstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_activities`
--
ALTER TABLE `tbl_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;

--
-- AUTO_INCREMENT for table `tbl_records`
--
ALTER TABLE `tbl_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_regstatus`
--
ALTER TABLE `tbl_regstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
