-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 12:17 PM
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
(1, 'Nov 21, 2022 - 05:39 pm', 'administrator', 'Removed RWakQw3vyQ'),
(2, 'Nov 21, 2022 - 05:40 pm', 'administrator', 'Logged in system'),
(3, 'Nov 21, 2022 - 05:40 pm', 'administrator', 'Export records to excel'),
(4, 'Nov 21, 2022 - 05:50 pm', 'administrator', 'Logged in system'),
(5, 'Nov 22, 2022 - 08:33 am', 'administrator', 'Logged in system'),
(6, 'Nov 22, 2022 - 08:34 am', 'administrator', 'Deleted a record with a senior id #0230'),
(7, 'Nov 22, 2022 - 09:08 am', 'staff', 'Logged in system'),
(8, 'Nov 22, 2022 - 09:08 am', 'administrator', 'Logged in system'),
(9, 'Nov 22, 2022 - 10:24 am', 'administrator', 'Logged in system'),
(10, 'Nov 22, 2022 - 02:29 pm', 'administrator', 'Updated a record with a senior id #0218'),
(11, 'Nov 22, 2022 - 02:30 pm', 'administrator', 'Updated a record with a senior id #0218'),
(12, 'Nov 22, 2022 - 02:30 pm', 'administrator', 'Updated a record with a senior id #0283'),
(13, 'Nov 22, 2022 - 03:32 pm', 'staff', 'Logged in system'),
(14, 'Nov 22, 2022 - 03:36 pm', 'administrator', 'Logged in system'),
(15, 'Nov 22, 2022 - 03:41 pm', 'administrator', 'Logged in system'),
(16, 'Nov 22, 2022 - 03:49 pm', 'administrator', 'Logged in system'),
(17, 'Nov 22, 2022 - 05:23 pm', 'administrator', 'Logged in system'),
(18, 'Nov 22, 2022 - 06:40 pm', 'administrator', 'Logged in system'),
(19, 'Nov 23, 2022 - 11:25 am', 'administrator', 'Logged in system'),
(20, 'Nov 23, 2022 - 12:08 pm', 'administrator', 'Logged in system'),
(21, 'Nov 23, 2022 - 12:48 pm', 'administrator', 'Logged in system'),
(22, 'Nov 23, 2022 - 01:22 pm', 'administrator', 'Logged in system'),
(23, 'Nov 23, 2022 - 02:08 pm', 'administrator', 'Added a record with a senior id #02319'),
(24, 'Nov 23, 2022 - 03:24 pm', 'administrator', 'Logged in system'),
(25, 'Nov 23, 2022 - 03:36 pm', 'administrator', 'Logged in system'),
(26, 'Nov 23, 2022 - 03:48 pm', 'administrator', 'Logged in system'),
(27, 'Nov 23, 2022 - 03:58 pm', 'administrator', 'Updated a record with a senior id #0218'),
(28, 'Nov 23, 2022 - 04:42 pm', 'administrator', 'Logged in system'),
(29, 'Nov 23, 2022 - 05:06 pm', 'administrator', 'Logged in system'),
(30, 'Nov 23, 2022 - 05:39 pm', 'administrator', 'Logged in system'),
(31, 'Nov 23, 2022 - 08:48 pm', 'administrator', 'Logged in system'),
(32, 'Nov 24, 2022 - 07:45 am', 'administrator', 'Logged in system'),
(33, 'Nov 24, 2022 - 09:06 am', 'staff', 'Logged in system'),
(34, 'Nov 24, 2022 - 09:06 am', 'administrator', 'Logged in system'),
(35, 'Nov 24, 2022 - 03:19 pm', 'staff', 'Logged in system'),
(36, 'Nov 24, 2022 - 03:38 pm', 'administrator', 'Logged in system'),
(37, 'Nov 24, 2022 - 04:17 pm', 'administrator', 'Removed staff11'),
(38, 'Nov 24, 2022 - 04:18 pm', 'staff7', 'Logged in system'),
(39, 'Nov 24, 2022 - 04:19 pm', 'administrator', 'Logged in system'),
(40, 'Nov 24, 2022 - 04:38 pm', 'staff7', 'Logged in system'),
(41, 'Nov 24, 2022 - 04:39 pm', 'staff4', 'Logged in system'),
(42, 'Nov 24, 2022 - 04:40 pm', 'administrator', 'Removed staff4'),
(43, 'Nov 24, 2022 - 04:40 pm', 'staff4', 'Logged in system'),
(44, 'Nov 24, 2022 - 04:41 pm', 'administrator', 'Logged in system'),
(45, 'Nov 24, 2022 - 04:44 pm', 'staff4', 'Logged in system'),
(46, 'Nov 24, 2022 - 07:21 pm', 'staff4', 'Logged in system'),
(47, 'Nov 24, 2022 - 07:26 pm', 'administrator', 'Logged in system'),
(48, 'Nov 25, 2022 - 07:13 am', 'administrator', 'Logged in system'),
(49, 'Nov 25, 2022 - 07:16 am', 'staff4', 'Logged in system'),
(50, 'Nov 25, 2022 - 07:17 am', 'administrator', 'Logged in system'),
(51, 'Nov 25, 2022 - 07:20 am', 'administrator', 'Logged in system'),
(52, 'Nov 25, 2022 - 07:20 am', 'staff4', 'Logged in system'),
(53, 'Nov 25, 2022 - 07:20 am', 'administrator', 'Logged in system'),
(54, 'Nov 25, 2022 - 07:54 am', 'staff4', 'Logged in system'),
(55, 'Nov 25, 2022 - 07:55 am', 'administrator', 'Logged in system'),
(56, 'Nov 25, 2022 - 07:55 am', 'administrator', 'Logged in system'),
(57, 'Nov 25, 2022 - 07:55 am', 'staff4', 'Logged in system'),
(58, 'Nov 25, 2022 - 07:55 am', 'administrator', 'Logged in system'),
(59, 'Nov 25, 2022 - 07:59 am', 'staff4', 'Logged in system'),
(60, 'Nov 25, 2022 - 08:05 am', 'administrator', 'Logged in system'),
(61, 'Nov 25, 2022 - 08:05 am', 'staff4', 'Logged in system'),
(62, 'Nov 25, 2022 - 08:07 am', 'administrator', 'Logged in system'),
(63, 'Nov 25, 2022 - 08:07 am', 'staff4', 'Logged in system'),
(64, 'Nov 25, 2022 - 08:30 am', 'administrator', 'Logged in system'),
(65, 'Nov 25, 2022 - 08:30 am', 'staff4', 'Logged in system'),
(66, 'Nov 25, 2022 - 08:31 am', 'administrator', 'Logged in system'),
(67, 'Nov 25, 2022 - 08:31 am', 'administrator', 'Logged in system'),
(68, 'Nov 25, 2022 - 08:31 am', 'administrator', 'Logged in system'),
(69, 'Nov 25, 2022 - 08:32 am', 'staff4', 'Logged in system'),
(70, 'Nov 25, 2022 - 08:44 am', 'administrator', 'Logged in system'),
(71, 'Nov 25, 2022 - 08:45 am', 'staff4', 'Logged in system'),
(72, 'Nov 25, 2022 - 09:38 am', 'administrator', 'Logged in system'),
(73, 'Nov 25, 2022 - 09:39 am', 'staff4', 'Logged in system'),
(74, 'Nov 25, 2022 - 09:44 am', 'administrator', 'Logged in system'),
(75, 'Nov 25, 2022 - 09:45 am', 'staff4', 'Logged in system'),
(76, 'Nov 25, 2022 - 10:24 am', 'administrator', 'Logged in system'),
(77, 'Nov 25, 2022 - 10:24 am', 'staff4', 'Logged in system'),
(78, 'Nov 25, 2022 - 10:26 am', 'administrator', 'Logged in system'),
(79, 'Nov 25, 2022 - 10:26 am', 'administrator', 'Logged in system'),
(80, 'Nov 25, 2022 - 10:27 am', 'staff4', 'Logged in system'),
(81, 'Nov 25, 2022 - 10:33 am', 'administrator', 'Logged in system'),
(82, 'Nov 25, 2022 - 10:40 am', 'staff7', 'Logged in system'),
(83, 'Nov 25, 2022 - 10:42 am', 'staff4', 'Logged in system'),
(84, 'Nov 25, 2022 - 10:53 am', 'staff4', 'Updated a record with a senior id #0831'),
(85, 'Nov 25, 2022 - 11:10 am', 'staff4', 'Updated a record with a senior id #0218'),
(86, 'Nov 25, 2022 - 11:10 am', 'staff4', 'Updated a record with a senior id #0218'),
(87, 'Nov 25, 2022 - 11:33 am', 'administrator', 'Logged in system'),
(88, 'Nov 25, 2022 - 11:33 am', 'staff7', 'Logged in system'),
(89, 'Nov 25, 2022 - 11:34 am', 'staff7', 'Updated a record with a senior id #0842'),
(90, 'Nov 25, 2022 - 11:42 am', 'staff7', 'Updated a record with a senior id #0842'),
(91, 'Nov 25, 2022 - 11:42 am', 'staff7', 'Updated a record with a senior id #0842'),
(92, 'Nov 25, 2022 - 11:49 am', 'administrator', 'Updated a record with a senior id #0218'),
(93, 'Nov 25, 2022 - 11:57 am', 'staff7', 'Updated a record with a senior id #0842'),
(94, 'Nov 25, 2022 - 12:13 pm', 'staff7', 'Updated a record with a senior id #0842'),
(95, 'Nov 25, 2022 - 12:13 pm', 'staff7', 'Updated a record with a senior id #07320'),
(96, 'Nov 25, 2022 - 12:14 pm', 'staff7', 'Updated a record with a senior id #0842'),
(97, 'Nov 25, 2022 - 12:14 pm', 'staff7', 'Updated a record with a senior id #0842'),
(98, 'Nov 25, 2022 - 12:14 pm', 'staff7', 'Updated a record with a senior id #08321'),
(99, 'Nov 25, 2022 - 12:16 pm', 'staff7', 'Updated a record with a senior id #0842'),
(100, 'Nov 25, 2022 - 02:24 pm', 'administrator', 'Logged in system'),
(101, 'Nov 25, 2022 - 02:25 pm', 'administrator', 'Logged in system'),
(102, 'Nov 25, 2022 - 02:25 pm', 'administrator', 'Logged in system'),
(103, 'Nov 25, 2022 - 02:30 pm', 'administrator', 'Logged in system'),
(104, 'Nov 25, 2022 - 02:31 pm', 'staff4', 'Logged in system'),
(105, 'Nov 25, 2022 - 02:34 pm', 'administrator', 'Logged in system'),
(106, 'Nov 25, 2022 - 02:34 pm', 'staff4', 'Logged in system'),
(107, 'Nov 25, 2022 - 02:37 pm', 'administrator', 'Logged in system'),
(108, 'Nov 25, 2022 - 02:42 pm', 'staff4', 'Logged in system'),
(109, 'Nov 25, 2022 - 02:44 pm', 'administrator', 'Logged in system'),
(110, 'Nov 25, 2022 - 03:08 pm', 'administrator', 'Logged in system'),
(111, 'Nov 25, 2022 - 03:15 pm', 'staff1', 'Logged in system'),
(112, 'Nov 25, 2022 - 03:18 pm', 'staff4', 'Logged in system'),
(113, 'Nov 25, 2022 - 03:22 pm', 'administrator', 'Logged in system'),
(114, 'Nov 25, 2022 - 03:23 pm', 'administrator', 'Logged in system'),
(115, 'Nov 25, 2022 - 03:24 pm', 'administrator', 'Logged in system'),
(116, 'Nov 25, 2022 - 03:25 pm', 'administrator', 'Logged in system'),
(117, 'Nov 25, 2022 - 03:25 pm', 'staff1', 'Logged in system'),
(118, 'Nov 25, 2022 - 03:26 pm', 'staff4', 'Logged in system'),
(119, 'Nov 25, 2022 - 03:28 pm', 'administrator', 'Logged in system'),
(120, 'Nov 25, 2022 - 03:37 pm', 'administrator', 'Logged in system'),
(121, 'Nov 25, 2022 - 03:37 pm', 'staff1', 'Logged in system'),
(122, 'Nov 25, 2022 - 03:37 pm', 'staff4', 'Logged in system'),
(123, 'Nov 25, 2022 - 03:38 pm', 'administrator', 'Logged in system'),
(124, 'Nov 25, 2022 - 03:41 pm', 'staff4', 'Logged in system'),
(125, 'Nov 25, 2022 - 03:41 pm', 'administrator', 'Logged in system'),
(126, 'Nov 25, 2022 - 03:43 pm', 'staff4', 'Logged in system'),
(127, 'Nov 25, 2022 - 03:43 pm', 'administrator', 'Logged in system'),
(128, 'Nov 25, 2022 - 03:47 pm', 'administrator', 'Logged in system'),
(129, 'Nov 25, 2022 - 03:53 pm', 'administrator', 'Logged in system'),
(130, 'Nov 25, 2022 - 03:56 pm', 'administrator', 'Logged in system'),
(131, 'Nov 25, 2022 - 03:57 pm', 'staff4', 'Logged in system'),
(132, 'Nov 25, 2022 - 03:57 pm', 'administrator', 'Logged in system'),
(133, 'Nov 25, 2022 - 04:08 pm', 'staff7', 'Logged in system'),
(134, 'Nov 25, 2022 - 04:09 pm', 'staff7', 'Updated a record with a senior id #07320'),
(135, 'Nov 25, 2022 - 04:09 pm', 'administrator', 'Logged in system'),
(136, 'Nov 25, 2022 - 04:09 pm', 'staff7', 'Logged in system'),
(137, 'Nov 25, 2022 - 04:10 pm', 'administrator', 'Logged in system'),
(138, 'Nov 25, 2022 - 04:30 pm', 'administrator', 'Updated a record with a senior id #0218'),
(139, 'Nov 25, 2022 - 04:30 pm', 'administrator', 'Updated a record with a senior id #02318'),
(140, 'Nov 25, 2022 - 04:30 pm', 'administrator', 'Updated a record with a senior id #02319'),
(141, 'Nov 25, 2022 - 05:46 pm', 'staff4', 'Logged in system'),
(142, 'Nov 25, 2022 - 05:46 pm', 'administrator', 'Logged in system'),
(143, 'Nov 25, 2022 - 06:20 pm', 'staff4', 'Logged in system'),
(144, 'Nov 25, 2022 - 06:20 pm', 'administrator', 'Logged in system'),
(145, 'Nov 25, 2022 - 06:35 pm', 'administrator', 'Updated a record with a senior id #02839'),
(146, 'Nov 25, 2022 - 06:35 pm', 'administrator', 'Updated a record with a senior id #02839'),
(147, 'Nov 25, 2022 - 06:37 pm', 'administrator', 'Updated a record with a senior id #0248'),
(148, 'Nov 25, 2022 - 06:44 pm', 'administrator', 'Updated a record with a senior id #0301'),
(149, 'Nov 25, 2022 - 06:45 pm', 'administrator', 'Updated a record with a senior id #0301'),
(150, 'Nov 25, 2022 - 06:48 pm', 'administrator', 'Updated a record with a senior id #0218'),
(151, 'Nov 25, 2022 - 06:50 pm', 'administrator', 'Updated a record with a senior id #0301'),
(152, 'Nov 25, 2022 - 06:50 pm', 'administrator', 'Updated a record with a senior id #0218'),
(153, 'Nov 25, 2022 - 06:51 pm', 'staff4', 'Logged in system'),
(154, 'Nov 25, 2022 - 06:52 pm', 'administrator', 'Logged in system'),
(155, 'Nov 25, 2022 - 07:02 pm', 'administrator', 'Updated a record with a senior id #843-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_records`
--

CREATE TABLE `tbl_records` (
  `id` int(11) NOT NULL,
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
  `life_status` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_records`
--

INSERT INTO `tbl_records` (`id`, `fx_id`, `fx_firstname`, `fx_lastname`, `fx_middlename`, `fx_contact`, `fd_birthdate`, `fx_gender`, `fx_barangay`, `fn_age`, `fn_pension`, `fn_status`, `life_status`) VALUES
(71, '0492', 'MARIA LUZ', 'BAJA', 'P', 'maria@io.com', '1954-09-13', 'Male', 'Barangay 2', 50, 5000, 'Pending', 'alive'),
(78, '0831', 'IAN', 'DEL MUNDO', 'P', '09739291019', '2000-09-01', 'Male', 'Barangay 4', 61, 0, 'Pending', 'alive'),
(79, '0322', 'MADIE', 'GARCIA', 'O', 'mdi@io.com', '1974-01-20', 'Female', 'Payompon', 87, 9000, 'Pending', 'alive'),
(86, '0832', 'FRANCISCO', 'TORRENTE', 'B', 'ftorrente@icloud.com', '1955-10-08', 'Female', 'Tayamaan', 90, 5000, 'Pending', 'alive'),
(88, '0941', 'JUNE', 'DEL GIL', 'P', 'june@io.com', '0000-00-00', 'Male', 'Barangay 6', 99, 6500, 'Pending', 'alive'),
(96, '0483', 'ROSARIO', 'DEL GACO', 'O', 'rdelgco@gmail.com', '1986-12-29', 'Female', 'Fatima', 76, 7000, 'Pending', 'alive'),
(130, '0301', 'ALVIN', 'DELA FUENTE', 'L', '0930-211-12', '2000-10-29', 'Female', 'Barangay 3', 67, 5000, 'Pending', 'alive'),
(135, '0231', 'MARIA ', 'ISABLE', 'A', 'MN-199-1', '1922-12-19', 'Female', 'Barangay 5', 99, 5000, 'Pending', 'alive'),
(140, '02314', 'ANDREA', 'BELUGA', 'A', '0902-29-21', '1942-10-29', 'Female', 'Barangay 8', 69, 9000, 'Pending', 'alive'),
(141, '0248', 'JUAN', 'OLIVIA', 'J', '98-281-128', '1942-09-28', 'Male', 'Barangay 1', 90, 8000, 'Pending', 'dead'),
(142, '02318', 'NIMEI', 'LODIA', 'D', '099213-31-1', '1941-12-02', 'Female', 'Balansay', 98, 8001, 'Pending', 'alive'),
(148, '0842', 'SARA', 'MILES', 'S', '+639759271928', '1949-10-07', 'Female', 'Barangay 7', 61, 1000, 'Pending', 'dead'),
(149, '08321', 'ALAN', 'TORRES', 'J', 'alant@gmail.com', '1989-09-19', 'Male', 'Barangay 7', 96, 9029, 'Pending', 'dead'),
(150, '07320', 'TASHA', 'ADKINS', 'M', 'tasha@gmail.com', '1978-12-18', 'Female', 'Barangay 7', 68, 2900, 'Received', 'alive'),
(151, '0312', 'CASEY', 'MCKENZIE', 'K', 'casey@gmail.com', '1970-12-18', 'Female', 'San Luis (Ligang)', 67, 8900, 'Pending', 'alive'),
(152, '0290', 'WILLIE', 'GIBSON', 'D', '09988301820', '1900-12-19', 'Male', 'Talabaan', 90, 8000, 'Pending', 'alive'),
(153, '0283', 'RON', 'MORENO', 'J', '09038291791', '1980-08-09', 'Male', 'Tangkalan', 89, 9000, 'Pending', 'alive'),
(154, '02839', 'TERRANCE', 'HUNTER', 'K', '09381028101', '1999-10-10', 'Male', 'Barangay 2', 70, 9000, 'Pending', 'alive'),
(157, '0839', 'TOM', 'GIL', 'K', 'tomgil@gmail.com', '1948-12-29', 'Male', 'Barangay 4', 89, 9301, 'Pending', 'alive'),
(158, '0218', 'ANDIE', 'KATE', 'K', 'andiekate@github.io', '1928-09-01', 'Female', 'Barangay 4', 68, 10000, 'Received', 'dead'),
(165, '843-21', 'JOAN', 'ABC', 'A', '09403-21-12', '1900-12-19', 'Female', 'Fatima', 68, 9403, 'Pending', 'alive'),
(167, '023144', 'AXANSN', 'ANSD', 'A', '029-1231', '2000-10-19', 'Female', 'Barangay 6', 90, 9000, 'Pending', 'alive'),
(169, '02319', 'XXX', 'XX', 'X', 'xx-xx-xxxx', '1990-12-19', 'Female', 'Talabaan', 90, 9000, 'Received', 'alive');

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
  `fd_application` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`id`, `uid`, `fx_idnumber`, `fx_idpresented`, `fx_firstname`, `fx_lastname`, `fx_initial`, `fx_gender`, `fd_birthdate`, `fx_barangay`, `fx_contact`, `fn_age`, `fl_idpresented`, `fl_form`, `fd_application`) VALUES
(38, '49551005448561015598', '923-129-2', 'Passport', 'TOM', 'CRUZ', 'J', 'Male', '1933-12-18', 'Barangay 1', '09640262819', 90, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 25, 2022');

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
  `fl_idpresented` varchar(150) NOT NULL,
  `fl_form` varchar(150) NOT NULL,
  `fd_application` varchar(150) NOT NULL,
  `fx_status` varchar(150) NOT NULL,
  `fd_acceptedbycluster` varchar(150) NOT NULL,
  `fd_acceptedbyadmin` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_regstatus`
--

INSERT INTO `tbl_regstatus` (`id`, `uid`, `fx_idnumber`, `fx_idpresented`, `fx_firstname`, `fx_lastname`, `fx_initial`, `fx_gender`, `fd_birthdate`, `fx_barangay`, `fx_contact`, `fn_age`, `fl_idpresented`, `fl_form`, `fd_application`, `fx_status`, `fd_acceptedbycluster`, `fd_acceptedbyadmin`) VALUES
(7, '2312398921', '102193123', 'Comelec ID', 'XXXX', 'XXX', 'X', 'Male', '1899-12-18', 'Barangay 3', '09758291719', 90, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 23, 2022', 'accepted', 'NOV, 24, 2022', ''),
(8, '23721390102', '023-123-000', 'Birth Certificate', 'TEST', 'NAME', 'X', 'Male', '1892-09-09', 'Barangay 3', '0945-212-1291', 90, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 23, 2022', 'accepted', 'NOV, 24, 2022', ''),
(9, '21873213922', '921-291-99', 'Drivers License', 'VIVIAN', 'DEL MUNDO', 'D', 'Female', '1922-10-19', 'Payompon', '09539282910', 90, 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'Nov 24, 2022', 'accepted', 'NOV, 24, 2022', ''),
(14, '231239892183', '9238-23281', 'Baptismal Certificate', 'AAA AAN', 'AAAAAA', 'A', 'Female', '1929-12-21', 'Barangay 4', '09742818282', 90, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 24, 2022', 'accepted', 'NOV, 24, 2022', ''),
(15, '50529899501015349102', '203-1231-000', 'Barangay Clearance', 'TEST ', 'REGISTRATION', 'II', 'Male', '1999-12-19', 'Barangay 4', '09849282018', 90, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 24, 2022', 'rejected', 'Nov 24, 2022', '');

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
(2, 'user.png', 'administrator', 'Joe Doe', 'administrator@artsy.com', '09753929181', '---', 'Mamburao', 'admin', '$2y$10$r.gsLBV39faSKoWdrbxhAO0kgjAMpxD.53aEhsWtib1k9zlOtjBsW', 'Admin is responsible for all action including deleting records, adding and                                         removing user                                         from the system.'),
(61, 'user.png', 'staff7', 'N/A', 'N/A', 'N/A', 'Barangay 7', 'N/A', 'staff', '$2y$10$QL9hvt1t9XBcl.Hf53s4Ne9j1QP7YHzYPv9ueq7WiK2amvZ9XiS62', 'Staff is responsible for monitoring records but some action is prohibited.Staff can add and update record but deleting will shows in activity log which is controlled by admin.'),
(62, 'user.png', 'staff4', 'N/A', 'N/A', 'N/A', 'Barangay 4', 'N/A', 'staff', '$2y$10$AL6iNska0fCq6Qgv0jRg1OmcuZlErJK8tEzAgyt.Xkjoi2nC0OTRK', 'Staff is responsible for monitoring records but some action is prohibited.Staff can add and update record but deleting will shows in activity log which is controlled by admin.'),
(63, 'user.png', 'staff1', 'N/A', 'N/A', 'N/A', 'Barangay 1', 'N/A', 'staff', '$2y$10$xKinHNn4YI4I6EncjeR2Juxcrdm.fOFUnFLcsh06FL5OQSnKPBBDW', 'Staff is responsible for monitoring records but some action is prohibited.Staff can add and update record but deleting will shows in activity log which is controlled by admin.');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `tbl_records`
--
ALTER TABLE `tbl_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_regstatus`
--
ALTER TABLE `tbl_regstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
