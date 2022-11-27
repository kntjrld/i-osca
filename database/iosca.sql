-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 12:10 PM
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
(4, 'Nov 27, 2022 - 07:07 pm', 'administrator', 'Updated a record with a senior id #0123-213-000');

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
  `life_status` varchar(150) NOT NULL,
  `fd_pension` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_records`
--

INSERT INTO `tbl_records` (`id`, `fx_id`, `fx_firstname`, `fx_lastname`, `fx_middlename`, `fx_contact`, `fd_birthdate`, `fx_gender`, `fx_barangay`, `fn_age`, `fn_pension`, `fn_status`, `life_status`, `fd_pension`) VALUES
(71, '0492', 'MARIA LUZ', 'BAJA', 'P', 'maria@io.com', '1954-09-13', 'Male', 'Barangay 2', 50, 5000, 'Pending', 'alive', '0000-00-00'),
(78, '0831', 'IAN', 'DEL MUNDO', 'P', '09739291019', '2000-09-01', 'Male', 'Barangay 4', 61, 5000, 'Received', 'alive', '2022-11-28'),
(79, '0322', 'MADIE', 'GARCIA', 'O', 'mdi@io.com', '1974-01-20', 'Female', 'Payompon', 87, 9000, 'Pending', 'alive', '0000-00-00'),
(86, '0832', 'FRANCISCO', 'TORRENTE', 'B', 'ftorrente@icloud.com', '1955-10-08', 'Female', 'Tayamaan', 90, 5000, 'Pending', 'alive', '0000-00-00'),
(88, '0941', 'JUNE', 'DEL GIL', 'P', 'june@io.com', '0000-00-00', 'Male', 'Barangay 6', 99, 6500, 'Pending', 'alive', '0000-00-00'),
(96, '0483', 'ROSARIO', 'DEL GACO', 'O', 'rdelgco@gmail.com', '1986-12-29', 'Female', 'Fatima', 76, 7000, 'Pending', 'alive', '0000-00-00'),
(130, '0301', 'ALVIN', 'DELA FUENTE', 'L', '0930-211-12', '2000-10-29', 'Female', 'Barangay 3', 67, 5000, 'Pending', 'alive', '0000-00-00'),
(135, '0231', 'MARIA ', 'ISABLE', 'A', 'MN-199-1', '1922-12-19', 'Female', 'Barangay 5', 99, 5000, 'Pending', 'alive', '0000-00-00'),
(140, '02314', 'ANDREA', 'BELUGA', 'A', '0902-29-21', '1942-10-29', 'Female', 'Barangay 8', 69, 9000, 'Pending', 'alive', '0000-00-00'),
(141, '0248', 'JUAN', 'OLIVIA', 'J', '98-281-128', '1942-09-28', 'Male', 'Barangay 1', 90, 8000, 'Pending', 'dead', '0000-00-00'),
(142, '02318', 'NIMEI', 'LODIA', 'D', '099213-31-1', '1941-12-02', 'Female', 'Balansay', 98, 8001, 'Pending', 'alive', '0000-00-00'),
(148, '0842', 'SARA', 'MILES', 'S', '+639759271928', '1949-10-07', 'Female', 'Barangay 7', 61, 1000, 'Pending', 'dead', '0000-00-00'),
(149, '08321', 'ALAN', 'TORRES', 'J', 'alant@gmail.com', '1989-09-19', 'Male', 'Barangay 7', 96, 9029, 'Pending', 'dead', '0000-00-00'),
(150, '07320', 'TASHA', 'ADKINS', 'M', 'tasha@gmail.com', '1978-12-18', 'Female', 'Barangay 7', 68, 2900, 'Received', 'alive', '0000-00-00'),
(151, '0312', 'CASEY', 'MCKENZIE', 'K', 'casey@gmail.com', '1970-12-18', 'Female', 'San Luis (Ligang)', 67, 8900, 'Pending', 'alive', '0000-00-00'),
(152, '0290', 'WILLIE', 'GIBSON', 'D', '09988301820', '1900-12-19', 'Male', 'Talabaan', 90, 8000, 'Pending', 'alive', '0000-00-00'),
(153, '0283', 'RON', 'MORENO', 'J', '09038291791', '1980-08-09', 'Male', 'Tangkalan', 89, 9000, 'Pending', 'alive', '0000-00-00'),
(154, '02839', 'TERRANCE', 'HUNTER', 'K', '09381028101', '1999-10-10', 'Male', 'Barangay 2', 70, 9000, 'Pending', 'alive', '0000-00-00'),
(157, '0839', 'TOM', 'GIL', 'K', 'tomgil@gmail.com', '1948-12-29', 'Male', 'Barangay 4', 89, 9301, 'Pending', 'alive', '0000-00-00'),
(158, '0218', 'ANDIE', 'KATE', 'K', 'andiekate@github.io', '1928-09-01', 'Female', 'Barangay 4', 68, 10000, 'Received', 'dead', '0000-00-00'),
(165, '843-21', 'JOAN', 'ABC', 'A', '09403-21-12', '1900-12-19', 'Female', 'Fatima', 68, 9403, 'Pending', 'alive', '0000-00-00'),
(167, '023144', 'AXANSN', 'ANSD', 'A', '029-1231', '2000-10-19', 'Female', 'Barangay 6', 90, 9000, 'Pending', 'alive', '0000-00-00'),
(169, '02319', 'XXX', 'XX', 'X', 'xx-xx-xxxx', '1990-12-19', 'Female', 'Talabaan', 90, 9000, 'Received', 'alive', '0000-00-00'),
(170, '102193123', 'XXXX', 'XXX', 'X', '09758291719', '1899-12-18', 'Male', 'Barangay 3', 90, 0, 'Pending', 'alive', '0000-00-00'),
(171, '921-291-99', 'VIVIAN', 'DEL MUNDO', 'D', '09539282910', '1922-10-19', 'Female', 'Payompon', 90, 0, 'Pending', 'alive', '0000-00-00'),
(172, '9238-23281', 'AAA AAN', 'AAAAAA', 'A', '09742818282', '1929-12-21', 'Female', 'Barangay 4', 90, 1500, 'Pending', 'alive', '2022-11-27'),
(173, '312-239-139-2', 'ADADJADN', 'SADNAJSD', 'K', 'adasda@gmail.com', '1922-12-19', 'Female', 'Barangay 1', 68, 0, 'Pending', 'alive', '0000-00-00'),
(174, '123121-31312', 'NJDNA', 'DSA', 'M', 'sd12@gmail.com', '1923-12-12', 'Male', 'Barangay 1', 61, 0, 'Pending', 'alive', '0000-00-00'),
(175, '0123-213-000', 'ASDUW', 'SAD', 'A', '092382819189', '1923-12-19', 'Female', 'Barangay 1', 64, 1000, 'Pending', 'alive', '0000-00-00');

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
(39, '51100981019751100985', '03123-1231', 'Birth Certificate', 'JUAN ', 'GOLEM', 'J', 'Female', '1999-12-18', 'Barangay 7', 'absckansdj@gmail.com', 68, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 26, 2022'),
(44, '54515451535549545610', '923-231-12-000', 'Senior ID', 'DASDJ', 'AJDS', 'A', 'Male', '1977-10-19', 'Barangay 1', '0923182918', 72, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 26, 2022'),
(45, '98539849505251499750', '2131-1312-311', 'Birth Certificate', 'ASKD', 'ASDKAKSD', 'L', 'Male', '1966-12-01', 'Barangay 1', '092139128391', 74, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 26, 2022'),
(47, '50101481015451575751', '2831-000-1-23', 'Government-issued ID', 'ASDNAJS', 'AS', 'D', 'Female', '1933-12-28', 'Barangay 5', 'ad@gmail.com', 78, 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'Nov 27, 2022'),
(48, '50505256489752102985', '13-2392-311', 'Drivers License', 'HJKLYUIO', 'GHJKL', 'S', 'Female', '1978-12-29', 'Barangay 1', '09238939281', 67, 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'Nov 27, 2022'),
(49, '10249975554101539856', '932-123-10-0', 'Baptismal Certificate', 'KDSAKD', 'DNJSADN', 'D', 'Male', '1922-12-11', 'Barangay 3', '09392719189', 69, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 27, 2022'),
(50, '48101579750995456514', '734-3bd92-2', 'Baptismal Certificate', 'JASN', 'SSAD', 'D', 'Male', '1922-10-19', 'Balansay', '09382917191', 62, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 27, 2022'),
(51, '48102531025298495452', 'dja2u-12jh11', 'Birth Certificate', 'DNA', 'KAS', 'S', 'Female', '2000-11-19', 'Barangay 1', '09291820180', 99, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 27, 2022'),
(55, '10148101102511019998', 'k04234-3242-jdsn', 'Baptismal Certificate', 'TEST', 'CLIPBOARD', 'C', 'Female', '1900-12-19', 'Balansay', '09281018191', 61, 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'Nov 27, 2022'),
(56, '57555155531005610250', '713-213-12', 'Baptismal Certificate', 'TEST', 'CLIPS', 'J', 'Female', '1922-12-01', 'Balansay', '09239172918', 78, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 27, 2022'),
(57, '98102991004910051100', '8231o-213', 'Barangay Clearance', 'TEST', 'COPY', 'A', 'Female', '1922-01-01', 'Barangay 1', '09281917291', 69, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 27, 2022');

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
  `fx_statusbycluster` varchar(150) NOT NULL,
  `fd_acceptedbycluster` varchar(150) NOT NULL,
  `fd_acceptedbyadmin` varchar(150) NOT NULL,
  `fx_statusbyadmin` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_regstatus`
--

INSERT INTO `tbl_regstatus` (`id`, `uid`, `fx_idnumber`, `fx_idpresented`, `fx_firstname`, `fx_lastname`, `fx_initial`, `fx_gender`, `fd_birthdate`, `fx_barangay`, `fx_contact`, `fn_age`, `fl_idpresented`, `fl_form`, `fd_application`, `fx_statusbycluster`, `fd_acceptedbycluster`, `fd_acceptedbyadmin`, `fx_statusbyadmin`) VALUES
(7, '2312398921', '102193123', 'Comelec ID', 'XXXX', 'XXX', 'X', 'Male', '1899-12-18', 'Barangay 3', '09758291719', 90, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 23, 2022', 'accepted', 'NOV, 24, 2022', 'Nov 26, 2022', 'accepted'),
(8, '23721390102', '023-123-000', 'Birth Certificate', 'TEST', 'NAME', 'X', 'Male', '1892-09-09', 'Barangay 3', '0945-212-1291', 90, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 23, 2022', 'accepted', 'NOV, 24, 2022', 'Nov 26, 2022', 'rejected'),
(9, '21873213922', '921-291-99', 'Drivers License', 'VIVIAN', 'DEL MUNDO', 'D', 'Female', '1922-10-19', 'Payompon', '09539282910', 90, 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'Nov 24, 2022', 'accepted', 'NOV, 24, 2022', 'Nov 26, 2022', 'accepted'),
(14, '231239892183', '9238-23281', 'Baptismal Certificate', 'AAA AAN', 'AAAAAA', 'A', 'Female', '1929-12-21', 'Barangay 4', '09742818282', 90, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 24, 2022', 'accepted', 'NOV, 24, 2022', 'Nov 26, 2022', 'accepted'),
(15, '50529899501015349102', '203-1231-000', 'Barangay Clearance', 'TEST ', 'REGISTRATION', 'II', 'Male', '1999-12-19', 'Barangay 4', '09849282018', 90, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 24, 2022', 'accepted', 'Nov 24, 2022', 'Under review', 'Under review'),
(16, '49551005448561015598', '923-129-2', 'Passport', 'TOM', 'CRUZ', 'J', 'Male', '1933-12-18', 'Barangay 4', '09640262819', 90, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 25, 2022', 'rejected', 'Nov 26, 2022', 'N/A', 'N/A'),
(17, '10054971009949505252', '2132-1231-129-000', 'Passport', 'ASDADJ', 'AJDAJSD', 'J', 'Male', '1999-12-12', 'Barangay 4', '09302819281', 62, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 26, 2022', 'accepted', 'Nov 26, 2022', 'Under review', 'Under review'),
(18, '52525556485056101555', '3823-000-1311', 'Comelec ID', 'ASDND', 'ABSD', 'A', 'Female', '1988-12-19', 'Barangay 4', '09237193810', 70, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 26, 2022', 'accepted', 'Nov 26, 2022', 'Under review', 'Under review'),
(19, '10299575355494897575', '312-239-139-2', 'NBI Clearance', 'ADADJADN', 'SADNAJSD', 'K', 'Female', '1922-12-19', 'Barangay 1', 'adasda@gmail.com', 68, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 26, 2022', 'accepted', 'Nov 27, 2022', 'Nov 27, 2022', 'accepted'),
(20, '51525556100555751515', '123121-31312', 'Comelec ID', 'NJDNA', 'DSA', 'M', 'Male', '1923-12-12', 'Barangay 1', 'sd12@gmail.com', 61, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 26, 2022', 'accepted', 'Nov 27, 2022', 'Nov 27, 2022', 'accepted'),
(21, '50995651100100571024', '0123-213-000', 'Senior ID', 'ASDUW', 'SAD', 'A', 'Female', '1923-12-19', 'Barangay 1', '092382819189', 64, 'New-Registration-Form-Senrion-Citizen-ID-FILLABLE.pdf', 'SOCIAL-PENSION-INTAKE-FORM-FILLABLE.pdf', 'Nov 26, 2022', 'accepted', 'Nov 27, 2022', 'Nov 27, 2022', 'accepted');

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
(62, 'user.png', 'staff4', 'Test name', 'testemail@gmail.com', 'N/A', 'Barangay 4', 'N/A', 'staff', '$2y$10$AL6iNska0fCq6Qgv0jRg1OmcuZlErJK8tEzAgyt.Xkjoi2nC0OTRK', 'Staff is responsible for monitoring records but some action is prohibited.Staff can add and update record but deleting will shows in activity log which is controlled by admin.'),
(63, 'user.png', 'staff1', 'N/A', 'N/A', 'N/A', 'Barangay 1', 'N/A', 'staff', '$2y$10$Cla7lLdpljlJR5hR0lFWj.H6RPqvqGtl6G1z5/fI8iqVLwJ4lBnnC', 'Staff is responsible for monitoring records but some action is prohibited.Staff can add and update record but deleting will shows in activity log which is controlled by admin.'),
(65, 'user.png', 'staff9', 'N/A', 'N/A', 'N/A', 'Balansay', 'N/A', 'staff', '$2y$10$v2kR6lWzBj9sOtPe2l1A1.hF2jYkUUWcepWlg92XtnvK.BqgXBJM2', 'Staff is responsible for monitoring records but some action is prohibited.Staff can add and update record but deleting will shows in activity log which is controlled by admin.'),
(66, 'user.png', 'staff3', 'N/A', 'N/A', 'N/A', 'Barangay 3', 'N/A', 'staff', '$2y$10$w8hsL2nc7Zm8ham8qIxHD./HX0OtrWeL.2tcW5dMfqBq8dZ3R6Y9K', 'Staff is responsible for monitoring records but some action is prohibited.Staff can add and update record but deleting will shows in activity log which is controlled by admin.'),
(67, 'user.png', 'staff14', 'N/A', 'N/A', 'N/A', 'Tangkalan', 'N/A', 'staff', '$2y$10$pv0msA7DneHU9YgoYkhkVuLTKoWBPppblD2yja.7HlvJexK7jInmq', 'Staff is responsible for monitoring records but some action is prohibited.Staff can add and update record but deleting will shows in activity log which is controlled by admin.');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_records`
--
ALTER TABLE `tbl_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_regstatus`
--
ALTER TABLE `tbl_regstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
