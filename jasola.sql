-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2016 at 12:50 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jasola`
--

-- --------------------------------------------------------

--
-- Table structure for table `emg_list`
--

CREATE TABLE `emg_list` (
  `app_id` int(4) NOT NULL,
  `application` tinyint(2) NOT NULL,
  `mrc_form` tinyint(2) NOT NULL,
  `id_card` tinyint(2) NOT NULL,
  `cghs_card` tinyint(2) NOT NULL,
  `dependent_crt` tinyint(2) DEFAULT NULL,
  `payslip` tinyint(2) NOT NULL,
  `emergency_crt` tinyint(2) DEFAULT NULL,
  `nongov_hosp_reason` tinyint(2) DEFAULT NULL,
  `prescription_slip` tinyint(2) NOT NULL,
  `original_bill` tinyint(2) NOT NULL,
  `medical_bill` tinyint(2) NOT NULL,
  `main_bill_breakup` tinyint(2) NOT NULL,
  `discharge_summary` tinyint(2) NOT NULL,
  `lab_report` tinyint(2) NOT NULL,
  `duplicate_medical` tinyint(2) NOT NULL,
  `late_reason` tinyint(2) DEFAULT NULL,
  `death__legal_certificate` tinyint(2) DEFAULT NULL,
  `photocopy_medical` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `app_id` int(4) NOT NULL,
  `id_no` varchar(7) DEFAULT NULL,
  `applicant_name` varchar(30) DEFAULT NULL,
  `pis` int(9) DEFAULT NULL,
  `rank` varchar(20) DEFAULT NULL,
  `relation` varchar(15) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL,
  `hospital_name` varchar(50) DEFAULT NULL,
  `hospital_address` varchar(100) DEFAULT NULL,
  `police_station_no` int(7) DEFAULT NULL,
  `si_no` varchar(10) DEFAULT NULL,
  `diary_no` varchar(8) DEFAULT NULL,
  `ref_hospital_name` varchar(20) DEFAULT NULL,
  `a_cghs_no` int(7) DEFAULT NULL,
  `a_cghs_exp` date DEFAULT NULL,
  `r_cghs_no` int(7) DEFAULT NULL,
  `r_cghs_exp` date DEFAULT NULL,
  `a_cghs_category` varchar(10) DEFAULT NULL,
  `disease` varchar(20) DEFAULT NULL,
  `application_date` date DEFAULT NULL,
  `amt_asked` float(8,2) DEFAULT NULL,
  `amt_granted` float(8,2) DEFAULT NULL,
  `amt_available` float(8,2) DEFAULT NULL,
  `status` enum('NULL','D_HAND','HAG','I_ADMIN','ACP','PHQ','DCP','FAILED','APPROVED') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`app_id`, `id_no`, `applicant_name`, `pis`, `rank`, `relation`, `pincode`, `startdate`, `enddate`, `hospital_name`, `hospital_address`, `police_station_no`, `si_no`, `diary_no`, `ref_hospital_name`, `a_cghs_no`, `a_cghs_exp`, `r_cghs_no`, `r_cghs_exp`, `a_cghs_category`, `disease`, `application_date`, `amt_asked`, `amt_granted`, `amt_available`, `status`) VALUES
(1, NULL, 'vikas', 123123, '123', '123', 123, '0000-00-00', '0000-00-00', 'arra', 'eratra', 123, '123', '123', 'dfsdfa', 321, '0000-00-00', 56321, '0000-00-00', 'category', 'disease', '0000-00-00', 123.00, 123.00, 123.00, 'APPROVED'),
(2, NULL, 'vinay', 987, 'general', 'self', 110049, '2016-11-08', '0000-00-00', 'dnt knw', 'ina', 456, '564', '564', 'noname', 987456, '0000-00-00', 46, '0000-00-00', 'general', 'disease', '0000-00-00', 987.00, 978.00, 987.00, 'ACP'),
(3, '25', 'ashish', 546, 'general', 'self', 110049, '2016-11-08', '0000-00-00', 'dnt knw', 'ina', 456, '564', '564', 'noname', 987456, '0000-00-00', 46, '0000-00-00', 'general', 'disease', '0000-00-00', 987.00, 978.00, 987.00, 'ACP'),
(4, NULL, 'Ashutosh', 4321, 'hello', 'self', 110049, '0000-00-00', '0000-00-00', 'safdurjung', 'green park', 123, '1231321', '123321', 'hello world', 56215, '0000-00-00', 54354654, '0000-00-00', 'general', 'disease', '0000-00-00', 4564.00, 65464.00, 1231.00, 'ACP'),
(5, NULL, 'ashwani', 987, 'general', 'self', 110049, '2016-11-08', '0000-00-00', 'dnt knw', 'ina', 456, '564', '564', 'noname', 987456, '0000-00-00', 46, '0000-00-00', 'general', 'disease', '0000-00-00', 987.00, 978.00, 987.00, 'ACP');

-- --------------------------------------------------------

--
-- Table structure for table `ref_list`
--

CREATE TABLE `ref_list` (
  `app_id` int(4) NOT NULL,
  `application` tinyint(2) NOT NULL,
  `mrc_form` tinyint(2) NOT NULL,
  `id_card` tinyint(2) NOT NULL,
  `cghs_card` tinyint(2) NOT NULL,
  `dependent_crt` tinyint(2) DEFAULT NULL,
  `payslip` tinyint(2) NOT NULL,
  `referslip_copy` tinyint(2) DEFAULT NULL,
  `permission` tinyint(2) DEFAULT NULL,
  `prescription_slip` tinyint(2) NOT NULL,
  `original_bill` tinyint(2) NOT NULL,
  `medical_bill` tinyint(2) NOT NULL,
  `main_bill_breakup` tinyint(2) NOT NULL,
  `discharge_summary` tinyint(2) NOT NULL,
  `lab_report` tinyint(2) NOT NULL,
  `duplicate_medical` tinyint(2) NOT NULL,
  `late_reason` tinyint(2) DEFAULT NULL,
  `death__legal_certificate` tinyint(2) DEFAULT NULL,
  `photocopy_medical` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '123456789', 'admin'),
(2, 'dealinghand', '123456789', 'dealing'),
(3, 'acp', '123456789', 'acp'),
(4, 'iadmin', '123456789', 'iadmin'),
(5, 'hag', '123456789', 'hag');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emg_list`
--
ALTER TABLE `emg_list`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `app_id` (`app_id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `ref_list`
--
ALTER TABLE `ref_list`
  ADD KEY `app_id` (`app_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `app_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `emg_list`
--
ALTER TABLE `emg_list`
  ADD CONSTRAINT `emg_list_ibfk_1` FOREIGN KEY (`app_id`) REFERENCES `form` (`app_id`);

--
-- Constraints for table `ref_list`
--
ALTER TABLE `ref_list`
  ADD CONSTRAINT `ref_list_ibfk_1` FOREIGN KEY (`app_id`) REFERENCES `form` (`app_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
