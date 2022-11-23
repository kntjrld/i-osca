-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 10:00 AM
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
(28, 'Nov 23, 2022 - 04:42 pm', 'administrator', 'Logged in system');

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
  `fn_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_records`
--

INSERT INTO `tbl_records` (`id`, `fx_id`, `fx_firstname`, `fx_lastname`, `fx_middlename`, `fx_contact`, `fd_birthdate`, `fx_gender`, `fx_barangay`, `fn_age`, `fn_pension`, `fn_status`) VALUES
(71, '0492', 'MARIA LUZ', 'BAJA', 'P', 'maria@io.com', '1954-09-13', 'Male', 'Barangay 2', 50, 5000, 'Received'),
(78, '0831', 'IAN', 'DEL MUNDO', 'P', '09739291019', '2000-09-01', 'Male', 'Barangay 4', 23, 6500, 'Pending'),
(79, '0322', 'MADIE', 'GARCIA', 'O', 'mdi@io.com', '1974-01-20', 'Female', 'Payompon', 87, 9000, 'Received'),
(86, '0832', 'FRANCISCO', 'TORRENTE', 'B', 'ftorrente@icloud.com', '1955-10-08', 'Female', 'Tayamaan', 90, 5000, 'Received'),
(88, '0941', 'JUNE', 'DEL GIL', 'P', 'june@io.com', '0000-00-00', 'Male', 'Barangay 6', 99, 6500, 'Pending'),
(96, '0483', 'ROSARIO', 'DEL GACO', 'O', 'rdelgco@gmail.com', '1986-12-29', 'Female', 'Fatima', 76, 7000, 'Pending'),
(130, '0301', 'ALVIN', 'DELA FUENTE', 'L', '0930-211-12', '2000-10-29', 'Female', 'Barangay 3', 99, 5000, 'Received'),
(135, '0231', 'MARIA ', 'ISABLE', 'A', 'MN-199-1', '1922-12-19', 'Female', 'Barangay 5', 99, 5000, 'Pending'),
(140, '02314', 'ANDREA', 'BELUGA', 'A', '0902-29-21', '1942-10-29', 'Female', 'Barangay 8', 69, 9000, 'Pending'),
(141, '0248', 'JUAN', 'OLIVIA', 'J', '98-281-128', '1942-09-28', 'Male', 'Barangay 1', 90, 8000, 'Received'),
(142, '02318', 'NIMEI', 'LODIA', 'D', '099213-31-1', '1941-12-02', 'Female', 'Balansay', 98, 8001, 'Pending'),
(148, '0842', 'SARA', 'MILES', 'S', '+639759271928', '1949-10-07', 'Female', 'Barangay 7', 98, 9000, 'Pending'),
(149, '08321', 'ALAN', 'TORRES', 'J', 'alant@gmail.com', '1989-09-19', 'Male', 'Barangay 7', 96, 9029, 'Pending'),
(150, '07320', 'TASHA', 'ADKINS', 'M', 'tasha@gmail.com', '1978-12-18', 'Female', 'Barangay 7', 90, 2900, 'Pending'),
(151, '0312', 'CASEY', 'MCKENZIE', 'K', 'casey@gmail.com', '1970-12-18', 'Female', 'San Luis (Ligang)', 67, 8900, 'Pending'),
(152, '0290', 'WILLIE', 'GIBSON', 'D', '09988301820', '1900-12-19', 'Male', 'Talabaan', 90, 8000, 'Pending'),
(153, '0283', 'RON', 'MORENO', 'J', '09038291791', '1980-08-09', 'Male', 'Tangkalan', 89, 9000, 'Pending'),
(154, '02839', 'TERRANCE', 'HUNTER', 'K', '09381028101', '1999-10-10', 'Male', 'Barangay 4', 70, 9000, 'Pending'),
(157, '0839', 'TOM', 'GIL', 'K', 'tomgil@gmail.com', '1948-12-29', 'Male', 'Barangay 4', 89, 9301, 'Pending'),
(158, '0218', 'ANDIE', 'KATE', 'K', 'andiekate@github.io', '1928-09-01', 'Female', 'Barangay 4', 89, 0, 'Pending'),
(165, '843-21', 'JOAN', 'ABC', 'A', '09403-21-12', '1900-12-19', 'Female', 'Fatima', 90, 9403, 'Pending'),
(167, '023144', 'AXANSN', 'ANSD', 'A', '029-1231', '2000-10-19', 'Female', 'Barangay 6', 90, 9000, 'Pending'),
(169, '02319', 'XXX', 'XX', 'X', 'xx-xx-xxxx', '1990-12-19', 'Female', 'Talabaan', 90, 9000, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `id` int(11) NOT NULL,
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

INSERT INTO `tbl_register` (`id`, `fx_idnumber`, `fx_idpresented`, `fx_firstname`, `fx_lastname`, `fx_initial`, `fx_gender`, `fd_birthdate`, `fx_barangay`, `fx_contact`, `fn_age`, `fl_idpresented`, `fl_form`, `fd_application`) VALUES
(32, '102193123', 'Comelec ID', 'XXXX', 'XXX', 'X', 'Male', '1899-12-18', 'Barangay 3', '09758291719', 90, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 23, 2022'),
(33, '023-123-000', 'Birth Certificate', 'TEST', 'NAME', 'X', 'Male', '1892-09-09', 'Barangay 3', '0945-212-1291', 90, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 23, 2022');

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
(1, 'male.png', 'staff', 'xyz xyz ', 'kntjrld@gmail.io', '09759285618', 'Payompon', 'Victoria', 'staff', '$2y$10$51KwvF1O6N4s6ZzkWsnQCeOHJnfkuLlP7tfn7GoHAjbO9448jpRaG', 'Staff is responsible for monitoring records but some action is prohibited.Staff can add and update record but deleting will shows in activity log which is controlled by admin.'),
(2, 'user.png', 'administrator', 'Juan Dela cruz', 'administrator@artsy.com', '09753929181', 'Payompon', 'Mamburao', 'admin', '$2y$10$NBjcEJFFRtBGBoJIlB/Wa.RBYDu8HM1.4/RxC/wtafDOM9wS18JbG', 'Admin is responsible for all action including deleting records, adding and                                         removing user                                         from the system.');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_records`
--
ALTER TABLE `tbl_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
