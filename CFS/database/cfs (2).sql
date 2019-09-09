-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2019 at 12:57 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cfs`
--

-- --------------------------------------------------------

--
-- Table structure for table `acceptreq`
--

CREATE TABLE `acceptreq` (
  `ac_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `sdate` varchar(10) NOT NULL,
  `preagreedprice` varchar(20) NOT NULL,
  `message` varchar(30) NOT NULL,
  `respondstatus` int(11) NOT NULL DEFAULT 0,
  `updated_at` varchar(20) NOT NULL,
  `notification` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acceptreq`
--

INSERT INTO `acceptreq` (`ac_id`, `f_id`, `c_id`, `sdate`, `preagreedprice`, `message`, `respondstatus`, `updated_at`, `notification`) VALUES
(27, 24, 4, '2019-10-1', '5000', 'i take your farm for 4 months.', 1, '07/09/2019 04:29:15', 1),
(30, 25, 5, '2019-09-9', '3000', 'i take your farm for 4 months.', 1, '05/09/2019 10:51:37', 1),
(31, 21, 1, '2019-09-5', '2000', 'i take your farm for 6 months.', 1, '07/09/2019 02:40:03', 1),
(38, 26, 3, '2019-09-20', '4000', 'i take your farm for 6 months.', 1, '08/09/2019 02:49:54', 1),
(41, 28, 7, '2019-08-22', '4000', 'i take your farm for 7 months.', 1, '22/08/2019 03:52:26', 1),
(44, 29, 8, '2019-08-1', '2000', 'i take your farm for 9 months.', 1, '22/08/2019 03:52:47', 1),
(65, 31, 4, '2019-09-07', '4000', '5 months.', 1, '07/09/2019 04:29:15', 1),
(66, 30, 3, '2019-09-08', '4000', '5 months.', 1, '08/09/2019 02:49:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `Uname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `Uname`, `password`) VALUES
(1, 'admin', 'admin4648');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `c_id` int(11) NOT NULL,
  `companyname` varchar(30) NOT NULL,
  `companysname` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `mobno` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`c_id`, `companyname`, `companysname`, `city`, `latitude`, `longitude`, `address`, `mobno`, `email`, `username`, `password`) VALUES
(1, 'balaji', 'pankaj bhai', 'ahmedabad', '22.552750474100126', '72.94501392059328', 'gidc ahmedabad.', '7203928174', 'pankajmakadiya1998@student.aau.in', 'pankaj', 'pm@1245'),
(3, 'agrotech', 'meet ladani', 'ahmedabad', '22.533714', '72.980864', 'gidc porbandar 380051.', '9714535587', 'meetladani12@student.aau.in', 'meet123', 'meet@105'),
(4, 'parle', 'bhavy chaudhary', 'anand', '72.94509975128176', '22.552671207134907', 'gidc anand 38001.', '7203928176', 'bhavychaudhary5@student.aau.in', 'bhavy', 'bhavy@921'),
(5, 'lays', 'ruchitsoni', 'anand', '22.50662020123215', '73.00986362827621', 'gidc anand.', '7203928174', 'ruching.soni@student.aau.in', 'ruching', 'ruching@23'),
(6, 'ifield', 'darshan patel', 'morbi', '22.825060839267266', '70.8473594194586', 'gidc morbi.', '9714535587', 'darshanpatidar62@student.aau.in', 'darsh12', 'darsh@11'),
(7, 'pepsico', 'bhavik prajapati', 'surendranagar', '22.896711441676032', '71.23488035733885', 'gidc surendranagar.', '7203928178', 'bhavikprajapti@gmail.com', 'bhavik', 'bhavik@132'),
(8, 'kush proteins', 'mihir bhai', 'anand', '22.550447312111263', '72.94253108693238', 'gidc morbi.', '7203928176', 'mihir888@student.aau.in', 'mihir', 'mihir@124'),
(9, 'balaji', 'ronak bhai', 'ahmedabad', '22.549817566056813', '72.94561473541262', 'gidc ahmedanbad.', '8128752632', 'ronakpatel@gmail.com', 'ronak', 'ronak@467');

-- --------------------------------------------------------

--
-- Table structure for table `companyaccount`
--

CREATE TABLE `companyaccount` (
  `ca_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `total` varchar(30) NOT NULL,
  `profit` varchar(20) NOT NULL,
  `loss` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companyaccount`
--

INSERT INTO `companyaccount` (`ca_id`, `c_id`, `f_id`, `total`, `profit`, `loss`) VALUES
(4, 1, 22, '90666.24', '', ''),
(5, 3, 21, '58195', '', ''),
(7, 1, 23, '75604.44', '', ''),
(8, 3, 20, '38145.32', '', ''),
(11, 5, 25, '93814.96', '', ''),
(14, 5, 25, '93814.96', '', '36.04'),
(16, 1, 22, '41.51', '', ''),
(17, 1, 23, '105604.44', '', '24.25'),
(18, 1, 22, '41.51', '', ''),
(19, 1, 22, '41.51', '', ''),
(20, 1, 22, '41.51', '', ''),
(21, 1, 23, '105604.44', '', '24.25'),
(22, 1, 22, '41.51', '', ''),
(23, 1, 22, '41.51', '', ''),
(26, 1, 22, '70666.24', '41.51', ''),
(27, 1, 23, '105604.44', '', '24.25'),
(28, 6, 26, '60489.6', '', '33.87'),
(32, 3, 26, '60489.6', '', ''),
(33, 3, 23, '113604.44', '', ''),
(34, 3, 26, '109289.6', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `extramaterial`
--

CREATE TABLE `extramaterial` (
  `em_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `materialtype` varchar(40) NOT NULL,
  `materialname` varchar(40) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `respondstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extramaterial`
--

INSERT INTO `extramaterial` (`em_id`, `f_id`, `c_id`, `date`, `materialtype`, `materialname`, `quantity`, `respondstatus`) VALUES
(4, 22, 1, '2019-08-02', 'Fertilizers', 'amonium sulphate', '3', 2),
(5, 21, 3, '2019-08-02', 'Fertilizers', 'urea', '3', 1),
(6, 25, 5, '2019-08-09', 'Fertilizers', 'urea', '3', 0),
(10, 21, 1, '2019-09-07', 'Fertilizers', 'urea', '5', 1),
(11, 21, 1, '2019-09-07', 'Fertilizers', 'urea', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `f_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `farmarea` varchar(10) NOT NULL,
  `surveyno` varchar(10) NOT NULL,
  `mobno` varchar(10) NOT NULL,
  `cropname` varchar(30) NOT NULL,
  `harvestingprice` varchar(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`f_id`, `fname`, `city`, `latitude`, `longitude`, `farmarea`, `surveyno`, `mobno`, `cropname`, `harvestingprice`, `uname`, `password`, `status`) VALUES
(20, 'mahendra bhai', 'ahmedabad', '22.533679', '72.970042', '12', '112', '7203928172', 'tomato', '1100', 'dars', 'dars@12', 0),
(21, 'darshit', 'ahmedabad', '22.55275047', '72.94501392', '12', '112', '9714565632', 'tomato', '1200', 'darsh', 'darsh@34', 0),
(22, 'nilay', 'ahmedabad', '22.34344334', '72.45454454', '12', '112', '8787877555', 'wheat', '2000', 'nilay', 'nilay@21', 0),
(23, 'nigam', 'surat', '22.5454545', '72.45454454', '11', '111', '8787877555', 'paddy', '2000', 'nigam', 'nigam@19', 0),
(24, 'virat chaudhari', 'anand', '22.552829741019803', '72.95402614288332', '14', '114', '7203928174', 'wheat', '1500', 'virat12', 'vir#427', 0),
(25, 'rupesh patel', 'anand', '22.57058273294789', '72.94733760548706', '15', '115', '7203928184', 'wheat', '1500', 'rupu', 'rupu@19', 0),
(26, 'kanjibhai', 'morbi', '22.89400831320966', '71.23844316265581', '12', '114', '9203928178', 'tomato', '1500', 'sap12', 'sap@13', 0),
(28, 'Ravi Ramani', 'surendranagar', '22.69287592655818', '71.58342372767561', '12', '114', '9714535587', 'wheat', '1500', 'ravi', 'ravi@35', 0),
(29, 'vinod bhai', 'anand', '22.54871275634866', '72.94364688588257', '12', '112', '8203928176', 'wheat', '1500', 'vinod', 'vinod@08', 0),
(30, 'sihvam', 'ahmedabad', '23.04108288344875', '72.51624881674172', '12', '104', '9087132121', 'potato', '2000', 'shivam', 'shivam@12', 1),
(31, 'chirag patel', 'anand', '22.551482197191607', '72.94664470367434', '15', '110', '9871235460', 'potato', '2000', 'chirag', 'chirag@32', 0);

-- --------------------------------------------------------

--
-- Table structure for table `farmsalary`
--

CREATE TABLE `farmsalary` (
  `fa_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `totincome` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `updated_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmsalary`
--

INSERT INTO `farmsalary` (`fa_id`, `f_id`, `c_id`, `date`, `totincome`, `status`, `updated_at`) VALUES
(6, 25, 5, '2019-08-09', '60000', 1, '09/08/2019 12:04:30'),
(7, 22, 1, '2019-08-14', '40000', 1, '22/08/2019 09:57:00'),
(8, 26, 6, '2019-08-16', '40000', 2, '08/09/2019 03:09:54'),
(9, 22, 1, '2019-08-16', '40000', 1, '22/08/2019 09:57:00'),
(10, 22, 1, '2019-08-16', '80000', 1, '22/08/2019 09:57:00'),
(11, 28, 7, '2019-08-16', '160000', 1, '05/09/2019 09:50:31'),
(12, 22, 1, '2019-08-20', '80000', 1, '22/08/2019 09:57:00'),
(13, 21, 3, '2019-09-03', '48000', 1, '07/09/2019 02:51:55'),
(15, 26, 3, '2019-09-05', '40000', 2, '08/09/2019 03:09:54'),
(16, 21, 1, '2019-09-07', '40000', 1, '07/09/2019 02:51:55'),
(17, 26, 3, '2019-09-07', '40000', 2, '08/09/2019 03:09:54'),
(18, 26, 3, '2019-09-07', '80000', 2, '08/09/2019 03:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `labourcharge`
--

CREATE TABLE `labourcharge` (
  `la_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `nolabour` varchar(20) NOT NULL,
  `labourcharge` varchar(20) NOT NULL,
  `totcharge` varchar(20) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labourcharge`
--

INSERT INTO `labourcharge` (`la_id`, `f_id`, `c_id`, `date`, `nolabour`, `labourcharge`, `totcharge`, `status`) VALUES
(1, 21, 3, '2019-08-03', '5', '300', '1500', 0),
(2, 25, 5, '2019-08-09', '5', '300', '1500', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rawmaterial`
--

CREATE TABLE `rawmaterial` (
  `rm_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `materialtype` varchar(40) NOT NULL,
  `materialname` varchar(40) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `unitprice` varchar(20) NOT NULL,
  `totprice` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` varchar(20) NOT NULL DEFAULT '',
  `updated_at` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rawmaterial`
--

INSERT INTO `rawmaterial` (`rm_id`, `c_id`, `f_id`, `materialtype`, `materialname`, `quantity`, `unitprice`, `totprice`, `status`, `created_at`, `updated_at`) VALUES
(23, 1, 20, 'Pesticides', 'amonium sulphate', '2', '1000', '2000', 1, '2019-08-03 12:43:35', '03/08/2019 12:51:12'),
(24, 1, 23, 'Fertilizers', 'amonium sulphate', '3', '1000', '3000', 1, '2019-08-03 12:43:35', '13/08/2019 04:56:41'),
(31, 1, 22, 'Fertilizers', 'urea', '3', '2000', '6000', 1, '2019-08-03 12:43:35', '03/08/2019 12:51:12'),
(32, 3, 21, 'Fertilizers', 'urea', '3', '2000', '6000', 1, '2019-08-03 12:43:35', '07/09/2019 03:20:36'),
(33, 3, 21, 'Pesticides', 'amonium sulphate', '2', '2000', '4000', 2, '2019-08-03 12:43:35', '06/09/2019 03:45:46'),
(41, 4, 24, 'Fertilizers', 'urea', '3', '1000', '3000', 1, '05/08/2019 06:12:51', '06/09/2019 04:38:45'),
(44, 5, 25, 'Pesticides', 'amonium sulphate', '4', '800', '3200', 0, '09/08/2019 11:56:37', '05/09/2019 11:06:18'),
(49, 3, 21, 'Fertilizers', 'urea', '3', '1200', '3600', 1, '03/09/2019 10:56:41', '03/09/2019 10:57:07'),
(50, 1, 30, 'Fertilizers', 'urea', '3', '1200', '3600', 1, '04/09/2019 03:44:19', '04/09/2019 03:45:05'),
(51, 3, 26, 'Seed', 'urea', '4', '1200', '4800', 1, '07/09/2019 11:57:19', '07/09/2019 11:58:02'),
(52, 3, 26, 'Pesticides', 'ammonium sulphate', '5', '1200', '6000', 1, '07/09/2019 11:57:42', '07/09/2019 11:58:03');

-- --------------------------------------------------------

--
-- Table structure for table `totalproduction`
--

CREATE TABLE `totalproduction` (
  `pro_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `totalproduction` varchar(20) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `totalproduction`
--

INSERT INTO `totalproduction` (`pro_id`, `f_id`, `c_id`, `totalproduction`, `created_at`) VALUES
(3, 20, 3, '10', '08/08/2019 04:33:16'),
(4, 23, 1, '20', '08/08/2019 06:09:38'),
(5, 25, 5, '20', '09/08/2019 11:59:18'),
(6, 25, 5, '10', '09/08/2019 12:08:45'),
(8, 22, 1, '40', '16/08/2019 11:28:45'),
(9, 28, 7, '40', '16/08/2019 05:29:57'),
(13, 30, 1, '16', '04/09/2019 03:45:15'),
(14, 25, 5, '30', '05/09/2019 11:12:32'),
(15, 24, 4, '30', '06/09/2019 04:38:53'),
(16, 21, 1, '20', '07/09/2019 02:50:37'),
(17, 26, 3, '20', '07/09/2019 11:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `transportcharges`
--

CREATE TABLE `transportcharges` (
  `ta_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `distance` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `totaltransportprice` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportcharges`
--

INSERT INTO `transportcharges` (`ta_id`, `f_id`, `c_id`, `distance`, `price`, `totaltransportprice`) VALUES
(2, 21, 3, '4.25', '12', '51'),
(3, 22, 1, '55.52', '12', '666.24'),
(4, 23, 1, '50.37', '12', '604.4399999999999'),
(5, 24, 4, '6378.46', '12', '76541.52'),
(6, 20, 3, '1.11', '12', '13.32'),
(7, 23, 1, '50.37', '12', '604.4399999999999'),
(8, 25, 5, '9.58', '12', '114.96000000000001'),
(9, 26, 6, '40.8', '12', '489.59999999999997'),
(10, 22, 1, '55.52', '12', '666.24'),
(11, 28, 7, '42.31', '12', '507.72'),
(12, 28, 7, '42.31', '12', '507.72'),
(13, 23, 3, '54.07', '12', '648.84'),
(14, 21, 3, '4.25', '12', '51'),
(15, 21, 3, '4.25', '12', '51'),
(16, 30, 1, '69.86', '12', '838.3199999999999'),
(17, 26, 3, '183.16', '12', '2197.92');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acceptreq`
--
ALTER TABLE `acceptreq`
  ADD PRIMARY KEY (`ac_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `companyaccount`
--
ALTER TABLE `companyaccount`
  ADD PRIMARY KEY (`ca_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `extramaterial`
--
ALTER TABLE `extramaterial`
  ADD PRIMARY KEY (`em_id`),
  ADD KEY `f_id` (`f_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `farmsalary`
--
ALTER TABLE `farmsalary`
  ADD PRIMARY KEY (`fa_id`),
  ADD KEY `f_id` (`f_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `labourcharge`
--
ALTER TABLE `labourcharge`
  ADD PRIMARY KEY (`la_id`),
  ADD KEY `f_id` (`f_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `rawmaterial`
--
ALTER TABLE `rawmaterial`
  ADD PRIMARY KEY (`rm_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `totalproduction`
--
ALTER TABLE `totalproduction`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `f_id` (`f_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `transportcharges`
--
ALTER TABLE `transportcharges`
  ADD PRIMARY KEY (`ta_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acceptreq`
--
ALTER TABLE `acceptreq`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `companyaccount`
--
ALTER TABLE `companyaccount`
  MODIFY `ca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `extramaterial`
--
ALTER TABLE `extramaterial`
  MODIFY `em_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `farmsalary`
--
ALTER TABLE `farmsalary`
  MODIFY `fa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `labourcharge`
--
ALTER TABLE `labourcharge`
  MODIFY `la_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rawmaterial`
--
ALTER TABLE `rawmaterial`
  MODIFY `rm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `totalproduction`
--
ALTER TABLE `totalproduction`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transportcharges`
--
ALTER TABLE `transportcharges`
  MODIFY `ta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acceptreq`
--
ALTER TABLE `acceptreq`
  ADD CONSTRAINT `acceptreq_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `farmer` (`f_id`),
  ADD CONSTRAINT `acceptreq_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `company` (`c_id`);

--
-- Constraints for table `companyaccount`
--
ALTER TABLE `companyaccount`
  ADD CONSTRAINT `companyaccount_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `company` (`c_id`),
  ADD CONSTRAINT `companyaccount_ibfk_2` FOREIGN KEY (`f_id`) REFERENCES `farmer` (`f_id`);

--
-- Constraints for table `extramaterial`
--
ALTER TABLE `extramaterial`
  ADD CONSTRAINT `extramaterial_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `farmer` (`f_id`),
  ADD CONSTRAINT `extramaterial_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `company` (`c_id`);

--
-- Constraints for table `farmsalary`
--
ALTER TABLE `farmsalary`
  ADD CONSTRAINT `farmsalary_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `farmer` (`f_id`),
  ADD CONSTRAINT `farmsalary_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `company` (`c_id`);

--
-- Constraints for table `labourcharge`
--
ALTER TABLE `labourcharge`
  ADD CONSTRAINT `labourcharge_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `farmer` (`f_id`),
  ADD CONSTRAINT `labourcharge_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `company` (`c_id`);

--
-- Constraints for table `rawmaterial`
--
ALTER TABLE `rawmaterial`
  ADD CONSTRAINT `rawmaterial_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `farmer` (`f_id`);

--
-- Constraints for table `totalproduction`
--
ALTER TABLE `totalproduction`
  ADD CONSTRAINT `totalproduction_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `farmer` (`f_id`),
  ADD CONSTRAINT `totalproduction_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `company` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;