-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2019 at 01:57 AM
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
(30, 25, 5, '2019-09-9', '3000', 'i take your farm for 4 months.', 1, '13/09/2019 10:23:13', 1),
(38, 26, 3, '2019-09-20', '4000', 'i take your farm for 6 months.', 1, '12/09/2019 02:41:16', 1),
(41, 28, 7, '2019-08-22', '4000', 'i take your farm for 7 months.', 1, '22/08/2019 03:52:26', 1),
(44, 29, 8, '2019-08-1', '2000', 'i take your farm for 9 months.', 2, '20/09/2019 04:39:59', 1),
(65, 31, 4, '2019-09-07', '4000', '5 months.', 1, '07/09/2019 04:29:15', 1),
(66, 30, 3, '2019-09-08', '4000', '5 months.', 1, '12/09/2019 02:41:16', 1),
(68, 22, 3, '2019-09-11', '4000', '6 months.', 0, '12/09/2019 02:41:16', 1),
(71, 32, 5, '2019-09-13', '4000', '6 months.', 1, '13/09/2019 10:23:13', 1),
(72, 33, 10, '2019-09-13', '2000', '5 months', 1, '20/09/2019 04:49:48', 1),
(73, 34, 10, '2019-09-20', '2000', '6 months', 1, '20/09/2019 04:50:20', 1),
(74, 35, 10, '2019-09-25', '4000', '5 months.', 2, '20/09/2019 04:32:00', 1),
(75, 38, 12, '2019-09-27', '4000', '5 months.', 1, '20/09/2019 03:53:45', 1);

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
(3, 'agrotech', 'meet ladani', 'ahmedabad', '22.533714', '72.980864', 'gidc ahmedabad 380061.', '9714535587', 'tankdarhit437@student.aau.in', 'meet123', 'meet@105'),
(4, 'parle', 'bhavy chaudhary', 'anand', '72.94509975128176', '22.552671207134907', 'gidc anand 38001.', '7203928176', 'bhavychaudhary5@student.aau.in', 'bhavy', 'bhavy@921'),
(5, 'lays', 'ruchitsoni', 'anand', '22.50662020123215', '73.00986362827621', 'gidc anand.', '7203928174', 'ruching.soni@student.aau.in', 'ruching', 'ruching@23'),
(6, 'ifield', 'darshan patel', 'morbi', '22.825060839267266', '70.8473594194586', 'gidc morbi.', '9714535587', 'darshanpatidar62@student.aau.in', 'darsh12', 'darsh@11'),
(7, 'pepsico', 'bhavik prajapati', 'surendranagar', '22.896711441676032', '71.23488035733885', 'gidc surendranagar.', '7203928178', 'bhavikprajapti@gmail.com', 'bhavik', 'bhavik@132'),
(8, 'kush proteins', 'mihir bhai', 'anand', '22.550447312111263', '72.94253108693238', 'gidc anand 388110.', '7203928176', 'mihir888@student.aau.in', 'mihir', 'mihir@124'),
(9, 'balaji', 'ronak bhai', 'ahmedabad', '22.549817566056813', '72.94561473541262', 'gidc ahmedanbad.', '8128752632', 'ronakpatel@gmail.com', 'ronak', 'ronak@467'),
(10, 'CottonServo', 'Sandip Rathwa', 'Modasa', '23.48079821967908', '73.3265222953562', 'GIDC, Modasa', '7800361232', 'rathvasandip147@student.aau.in ', 'Cotton', 'Cotton'),
(11, 'Trinity Goodies', 'Darshit Tank', 'anand', '22.559335574635533', '72.92449723421612', 'Vallabh Vidhyanagar anand 388110.', '9825743215', 'tankdarhit437@student.aau.in', 'darsh', 'darsh@4648'),
(12, 'cottonservo', 'prabhas patel', 'chennai', '21.090257777732763', '72.8105336909855', 'gidc chennai 380061.', '8855454545', 'tankdarhit437@student.aau.in', 'prabhas', 'prabhas');

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
(44, 10, 35, '166867.32', '', '');

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
  `unitprice` varchar(20) NOT NULL,
  `totalprice` varchar(20) NOT NULL,
  `respondstatus` int(11) NOT NULL,
  `em_notification` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extramaterial`
--

INSERT INTO `extramaterial` (`em_id`, `f_id`, `c_id`, `date`, `materialtype`, `materialname`, `quantity`, `unitprice`, `totalprice`, `respondstatus`, `em_notification`) VALUES
(32, 35, 10, '2019-09-30', 'Pesticides', 'ammonium sulphate', '5', '1200', '6000', 2, 1),
(33, 38, 12, '2019-09-20', 'Fertilizers', 'urea', '5', '1000', '5000', 1, 1),
(34, 38, 12, '2019-09-27', 'Pesticides', 'ammonium sulphate', '4', '1000', '4000', 2, 1);

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
  `status` int(11) NOT NULL DEFAULT 0,
  `fa_notification` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`f_id`, `fname`, `city`, `latitude`, `longitude`, `farmarea`, `surveyno`, `mobno`, `cropname`, `harvestingprice`, `uname`, `password`, `status`, `fa_notification`) VALUES
(20, 'mahendra bhai', 'ahmedabad', '22.533679', '72.970042', '12', '112', '7203928172', 'tomato', '1100', 'dars', 'dars@12', 1, 0),
(22, 'nilay', 'ahmedabad', '22.34344334', '72.45454454', '12', '112', '8787877555', 'wheat', '2000', 'nilay', 'nilay@21', 1, 0),
(23, 'nigam', 'surat', '22.5454545', '72.45454454', '11', '111', '8787877555', 'paddy', '2000', 'nigam', 'nigam@19', 0, 0),
(24, 'virat chaudhari', 'anand', '22.552829741019803', '72.95402614288332', '14', '114', '7203928174', 'wheat', '1500', 'virat12', 'vir#427', 2, 0),
(25, 'rupesh patel', 'anand', '22.57058273294789', '72.94733760548706', '15', '115', '7203928184', 'wheat', '1500', 'rupu', 'rupu@19', 1, 0),
(26, 'kanjibhai', 'morbi', '22.8976767767', '71.2384545454545', '12', '114', '9203928178', 'tomato', '1500', 'sap12', 'sap@13', 0, 0),
(28, 'Ravi Ramani', 'surendranagar', '22.69287592655818', '71.58342372767561', '12', '114', '9714535587', 'wheat', '1500', 'ravi', 'ravi@35', 0, 0),
(29, 'vinod bhai', 'anand', '22.54871275634866', '72.94364688588257', '12', '112', '8203928176', 'wheat', '1500', 'vinod', 'vinod@08', 2, 0),
(30, 'sihvam', 'ahmedabad', '23.04108288344875', '72.51624881674172', '12', '104', '9087132121', 'potato', '2000', 'shivam', 'shivam@12', 1, 0),
(31, 'chirag patel', 'anand', '22.551482197191607', '72.94664470367434', '15', '110', '9871235460', 'potato', '2000', 'chirag', 'chirag@32', 2, 0),
(32, 'mahesh bhai', 'anand', '22.55473213342903', '72.98977462463381', '15', '110', '9871235460', 'potato', '2000', 'mahesh', 'mahesh@123', 1, 0),
(33, 'BhavyaKumar Chaudhary', 'Modasa', '23.46505539379237', '73.29784053147091', '10', '204613', '9099672610', 'Cotton', '3000', 'bholo', 'bholo', 2, 1),
(34, 'Ramsinghbhai', 'Modasa', '23.45962373724487', '73.31981442095844', '20', '414513', '7475794510', 'Wheat', '2000', 'Rambhai', 'Rambhai', 2, 1),
(35, 'abhishek sharma', 'modasa', '23.47151346080514', '73.38061402913456', '15', '11011', '9871235455', 'potato', '2200', 'abhi', 'abhi@123', 2, 1),
(36, 'Nilesh bhai Patel', 'anand', '22.50675363838195', '73.00312942708638', '15', '413212', '7800361212', 'tomato', '2200', 'nilesh', 'nilesh@123', 0, 0),
(38, 'karan', 'chennai', '8.305873202962628', '77.6255363122118', '15', '413221', '7800361212', 'tomato', '2000', 'karan', 'karan', 1, 1);

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
(24, 35, 10, '2019-09-19', '120000', 0, '');

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
  `updated_at` varchar(20) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ma_notification` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rawmaterial`
--

INSERT INTO `rawmaterial` (`rm_id`, `c_id`, `f_id`, `materialtype`, `materialname`, `quantity`, `unitprice`, `totprice`, `status`, `created_at`, `updated_at`, `ma_notification`) VALUES
(70, 10, 35, 'Seed', 'potato seed', '5', '1200', '6000', 1, '19/09/2019 03:21:31', '19/09/2019 03:23:27', 1),
(71, 10, 35, 'Fertilizers', 'urea', '6', '1300', '7800', 1, '19/09/2019 03:21:54', '19/09/2019 03:23:28', 1),
(72, 10, 33, 'Fertilizers', 'ammonium sulphate', '5', '1300', '6500', 1, '19/09/2019 03:22:09', '19/09/2019 03:22:53', 1),
(73, 10, 33, 'Seed', 'wheat seed', '5', '1200', '6000', 1, '19/09/2019 03:22:34', '19/09/2019 03:22:54', 1),
(74, 12, 38, 'Seed', 'tomato seed', '5', '1000', '5000', 1, '19/09/2019 11:09:23', '20/09/2019 03:00:53', 1),
(75, 10, 33, 'Fertilizers', 'urea', '6', '1000', '6000', 2, '20/09/2019 04:16:36', '0000-00-00 00:00:00', 1),
(76, 10, 33, 'Seed', 'tomato seed', '5', '1200', '6000', 2, '20/09/2019 04:16:51', '0000-00-00 00:00:00', 1),
(77, 10, 33, 'Seed', 'potato seed', '6', '1200', '7200', 1, '20/09/2019 04:51:04', '20/09/2019 04:52:38', 1),
(78, 10, 33, 'Fertilizers', 'ammonium sulphate', '6', '1300', '7800', 1, '20/09/2019 04:51:18', '20/09/2019 04:52:40', 1),
(79, 10, 34, 'Seed', 'tomato seed', '5', '1000', '5000', 1, '20/09/2019 04:51:31', '20/09/2019 04:52:59', 1),
(80, 10, 34, 'Pesticides', 'ammonium sulphate', '6', '1300', '7800', 1, '20/09/2019 04:51:56', '20/09/2019 04:53:00', 1),
(81, 10, 34, 'Fertilizers', 'urea', '5', '1000', '5000', 1, '20/09/2019 04:52:15', '20/09/2019 04:53:01', 1);

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
(23, 35, 10, '30', '19/09/2019 03:26:24');

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
(27, 26, 3, '183.16', '12', '2197.92'),
(28, 35, 10, '5.61', '12', '67.32000000000001'),
(29, 38, 12, '1512.51', '15', '22687.65'),
(30, 34, 10, '2.45', '12', '29.400000000000002');

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
  ADD PRIMARY KEY (`ta_id`),
  ADD KEY `f_id` (`f_id`),
  ADD KEY `c_id` (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acceptreq`
--
ALTER TABLE `acceptreq`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `companyaccount`
--
ALTER TABLE `companyaccount`
  MODIFY `ca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `extramaterial`
--
ALTER TABLE `extramaterial`
  MODIFY `em_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `farmsalary`
--
ALTER TABLE `farmsalary`
  MODIFY `fa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `labourcharge`
--
ALTER TABLE `labourcharge`
  MODIFY `la_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rawmaterial`
--
ALTER TABLE `rawmaterial`
  MODIFY `rm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `totalproduction`
--
ALTER TABLE `totalproduction`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `transportcharges`
--
ALTER TABLE `transportcharges`
  MODIFY `ta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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

--
-- Constraints for table `transportcharges`
--
ALTER TABLE `transportcharges`
  ADD CONSTRAINT `transportcharges_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `farmer` (`f_id`),
  ADD CONSTRAINT `transportcharges_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `company` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
