-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 11:20 PM
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
(79, 42, 14, '2019-10-09', '3000', '5 months.', 1, '22/10/2019 04:41:16', 1),
(88, 47, 14, '2019-10-16', '3000', '5 months.', 1, '16/10/2019 03:04:12', 1),
(89, 48, 14, '2019-10-25', '3000', '6 months.', 1, '16/10/2019 03:04:54', 1),
(90, 41, 14, '2019-11-05', '4000', '4 months', 1, '05/11/2019 03:52:38', 1);

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
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `c_id` int(11) NOT NULL,
  `cityname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`c_id`, `cityname`) VALUES
(1, 'anand'),
(2, 'ahmedabad'),
(3, 'baroda'),
(4, 'gandhinagr'),
(5, 'arvalli'),
(6, 'surendranagr'),
(7, 'rajkot'),
(8, 'junagadh'),
(9, 'porbandar'),
(10, 'amreli'),
(11, 'kutch'),
(12, 'sabarkatha'),
(13, 'banaskatha'),
(14, 'patan'),
(15, 'mehsana'),
(16, 'godhra'),
(17, 'surat'),
(18, 'navsari'),
(19, 'morbi'),
(20, 'botad'),
(21, 'bahvnagar'),
(22, 'jamnagar'),
(23, 'kheda'),
(24, 'valsad'),
(25, 'dang'),
(26, 'narmada'),
(27, 'bharuch'),
(28, 'dahod'),
(29, 'girsomnath'),
(30, 'mahisagr'),
(31, 'tapi'),
(32, 'devbhumi dwarka'),
(33, 'panchmahal');

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
(14, 'Trinity Goodies', 'prabhas patel', '2', '22.93207646213821', '72.6931185232736', 'gidc ahmedabad 380061.', '9871235460', 'tankdarshit437@gmail.com', 'prabhas', 'prabhas@123'),
(17, 'cottonservo', 'nigam patel', '2', '22.534500290369316', '72.9690348481713', 'gidc ahmedabad 380061.', '9825743215', 'tankdarshit437@gmail.com', 'nigam', 'nigam@12'),
(20, 'parle', 'meet ladani', '3', '22.536561488008623', '72.99159356709106', 'gggggg', '9897667676', 'tankdarshit7@gmail.com', 'meet_12', 'Meet@1234'),
(23, 'tomato', 'meet ladani', '1', '22.54060451708078', '72.98584291096313', 'fdfs', '9871235454', 'bhavychaudhary5@student.aau.in', 'nigam-12787', 'Nigam@12'),
(24, 'tomato', 'prabhas patel', '2', '22.53576872332703', '72.98807450886352', 'gtfg', '9871235460', 'tankdarshit43@gmail.com', 'nigam78', 'Nigam@123'),
(25, 'tomato', 'Darshit', '2', '22.533469680011855', '72.98695870991332', 'fgsdsd', '9871235460', 'meetladani12@student.aau.in', 'nigam-12', 'Nigam@123'),
(28, 'tomato', 'nigam patel', '2', '22.534896676920233', '72.99082109089477', 'dsdsds', '9871235434', 'tankdarshit437@gmail.com', 'nigam-123', 'Ngam!12@'),
(30, 'balaji', 'ravi ramani', '7', '22.53418318030932', '72.98086473103149', 'gidc rajkot 3899112', '9871235412', 'tankdarhit437@student.aau.in', 'ravi-12', 'Ravi@123'),
(31, 'cottonservo', 'meet ladani', '9', '22.533073289364776', '72.977174011427', 'porbandar 38000212', '9871235122', 'ruching.soni@student.aau.in', 'meet-123', 'Meet@123');

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
(45, 14, 41, '93795.08', '', '');

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
(50, 41, 14, '2019-10-04', 'Seed', 'wheat seed', '3', '1200', '3600', 1, 1),
(51, 41, 14, '2019-10-04', 'Fertilizers', 'Urea Super Granulated', '3', '1200', '3600', 1, 1),
(52, 41, 14, '2019-10-15', 'Fertilizers', 'ammonium sulphate', '3', '1200', '3600', 1, 1),
(53, 41, 14, '2019-10-19', 'Pesticides', 'Urea Super Granulated', '4', '1200', '4800', 1, 1),
(54, 41, 14, '2019-10-19', 'Fertilizers', 'ammonium sulphate', '4', '1000', '4000', 1, 1),
(55, 47, 14, '2019-10-19', 'Fertilizers', 'urea', '4', '1200', '4800', 1, 1),
(56, 47, 14, '2019-10-19', 'Pesticides', 'Urea Super Granulated', '4', '1200', '4800', 1, 1),
(57, 41, 14, '2019-11-17', 'Seed', 'ammonium sulphate', '4', '1200', '4800', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `f_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `taluka` varchar(20) NOT NULL,
  `village` varchar(20) NOT NULL,
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

INSERT INTO `farmer` (`f_id`, `fname`, `city`, `taluka`, `village`, `latitude`, `longitude`, `farmarea`, `surveyno`, `mobno`, `cropname`, `harvestingprice`, `uname`, `password`, `status`, `fa_notification`) VALUES
(41, 'darshit tank', '2', '4', '6', '22.55084805436544', '72.94397054128649', '3', '440/4', '7800361212', 'potato', '2000', 'darsh', '1234', 1, 1),
(42, 'rupesh patel', '2', '1', '4', '22.55156146483995', '72.94491467885973', '4', '452/1', '9871235460', 'tomato', '2000', 'rupu', 'rupu@1234', 0, 1),
(46, 'Nilesh bhai Patel', '2', '4', '5', '22.55378094050359', '72.94283999018671', '15', '452/2', '9825743215', 'tomato', '2000', 'nilesh_12', 'Nilesh@123', 0, 1),
(47, 'chirag patel', '2', '3', '2', '23.029827960341244', '72.54543347234278', '3', '452/12', '9871235412', 'tomato', '2000', 'chirag_12', 'Chirag@12', 0, 1),
(48, 'nilay bhatt', '2', '4', '5', '22.99632058765904', '72.63991098419388', '3', '321/12', '9871235212', 'potato', '3000', 'nilay-12', 'Nilay@12', 0, 1),
(49, 'vinod gelot', '1', '2', '8', '22.553622407711725', '72.9447282653332', '3', '342/1', '8998454554', 'potato', '2000', 'vinod-12', 'Vinod@123', 0, 0),
(50, 'virat chaudhary', '1', '1', '3', '22.553146808243095', '72.94567240290644', '2', '452/1', '9871235454', 'potato', '2000', 'virat-12', 'Virat@12', 0, 0);

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
  `updated_at` varchar(20) NOT NULL,
  `f_notification` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmsalary`
--

INSERT INTO `farmsalary` (`fa_id`, `f_id`, `c_id`, `date`, `totincome`, `status`, `updated_at`, `f_notification`) VALUES
(26, 41, 14, '2019-10-18', '36000', 1, '06/11/2019 03:46:11', 1);

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
(92, 14, 41, 'Fertilizers', 'urea', '3', '1200', '3600', 1, '09/10/2019 09:57:59', '05/11/2019 03:40:53', 1),
(93, 14, 41, 'Pesticides', 'Urea Super Granulated', '3', '1000', '3000', 1, '09/10/2019 09:58:16', '05/11/2019 03:40:54', 1),
(94, 14, 41, 'Seed', 'tomato seed', '3', '1300', '3900', 1, '09/10/2019 09:58:37', '05/11/2019 03:40:55', 1),
(95, 14, 42, 'Seed', 'tomato seed', '3', '1200', '3600', 1, '09/10/2019 10:48:35', '09/10/2019 10:50:24', 1),
(96, 14, 42, 'Fertilizers', 'urea', '3', '1000', '3000', 1, '09/10/2019 10:48:48', '09/10/2019 10:50:25', 1),
(97, 14, 41, 'Pesticides', 'Urea Super Granulated', '3', '1200', '3600', 2, '09/10/2019 10:49:03', '0000-00-00 00:00:00', 1),
(98, 14, 41, 'Fertilizers', 'ammonium sulphate', '2', '1000', '2000', 2, '09/10/2019 10:49:19', '0000-00-00 00:00:00', 1),
(99, 14, 41, 'Seed', 'tomato seed', '5', '1200', '6000', 1, '15/10/2019 04:23:54', '15/10/2019 04:25:41', 1),
(100, 14, 41, 'Fertilizers', 'ammonium sulphate', '5', '1200', '6000', 1, '15/10/2019 04:24:06', '15/10/2019 04:25:43', 1),
(101, 14, 41, 'Pesticides', 'wheat seed', '3', '1300', '3900', 1, '15/10/2019 04:24:19', '15/10/2019 04:25:44', 1),
(102, 14, 41, 'Fertilizers', 'Urea Super Granulated', '4', '1200', '4800', 1, '18/10/2019 10:53:00', '18/10/2019 10:53:59', 1),
(103, 14, 41, 'Pesticides', 'ammonium sulphate', '3', '1200', '3600', 1, '18/10/2019 10:53:16', '18/10/2019 10:54:01', 1),
(104, 14, 47, 'Fertilizers', 'urea', '5', '1200', '6000', 1, '18/10/2019 10:53:40', '18/10/2019 10:55:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `taluka`
--

CREATE TABLE `taluka` (
  `t_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `talukaname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taluka`
--

INSERT INTO `taluka` (`t_id`, `c_id`, `talukaname`) VALUES
(1, 1, 'borsad'),
(2, 1, 'petlad'),
(3, 2, 'bavla'),
(4, 2, 'dhandhuka'),
(5, 3, 'savli'),
(6, 3, 'sinor'),
(7, 4, 'kalol'),
(8, 4, 'mansa'),
(11, 6, 'dhagndhra'),
(12, 6, 'mooli'),
(13, 5, 'modasa'),
(14, 5, 'malpur'),
(16, 2, 'daskori'),
(17, 2, 'sanand'),
(18, 2, 'dholka'),
(19, 2, 'viramgam'),
(20, 2, 'mandal'),
(21, 2, 'detroj-rampara'),
(22, 2, 'dholera'),
(23, 2, 'dhaskoi'),
(24, 1, 'khabhat'),
(25, 1, 'umreth'),
(27, 1, 'anklav'),
(28, 1, 'tarapur'),
(29, 3, 'waghodiya'),
(30, 3, 'dabhoi'),
(31, 3, 'padra'),
(32, 3, 'karjan'),
(33, 3, 'deser'),
(34, 4, 'dehgam'),
(35, 5, 'modasa'),
(36, 5, 'meghraj'),
(37, 5, 'dhansura'),
(38, 5, 'bhiloda'),
(39, 5, 'bayad'),
(40, 6, 'halvad'),
(41, 6, 'dassada'),
(42, 6, 'lakhtar'),
(43, 6, 'limbdi'),
(44, 6, 'chuda'),
(45, 6, 'sayla'),
(46, 6, 'chotila'),
(47, 7, 'jasdan'),
(48, 7, 'dhoraji'),
(49, 7, 'gondal'),
(50, 7, 'lodhika'),
(51, 8, 'manavadr'),
(52, 7, 'jetpur');

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
(25, 41, 14, '12', '05/10/2019 11:46:12'),
(26, 47, 14, '20', '21/10/2019 10:14:32'),
(27, 41, 14, '20', '23/10/2019 05:21:22');

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
(33, 42, 14, '49.57', '15', '743.55'),
(34, 41, 14, '49.59', '12', '595.08'),
(35, 47, 14, '18.62', '15', '279.3');

-- --------------------------------------------------------

--
-- Table structure for table `villages`
--

CREATE TABLE `villages` (
  `v_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `villagename` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `villages`
--

INSERT INTO `villages` (`v_id`, `t_id`, `villagename`) VALUES
(1, 3, 'bagodara'),
(2, 3, 'amipura'),
(3, 1, 'saijpur'),
(4, 1, 'pamol'),
(5, 4, 'adval'),
(6, 4, 'ambli'),
(7, 2, 'ardi'),
(8, 2, 'amod'),
(9, 11, 'devcharadi'),
(10, 11, 'dholi'),
(11, 7, 'pratappura'),
(12, 7, 'adhana'),
(13, 14, 'ambava'),
(14, 14, 'aniyor'),
(15, 8, 'ajol'),
(16, 8, 'amarpura'),
(17, 13, 'imbhoi'),
(18, 13, 'sardoi'),
(19, 12, 'bhet'),
(20, 12, 'chanpar'),
(21, 5, 'alindra'),
(22, 5, 'Ankaliya'),
(23, 6, 'Achisara'),
(24, 6, 'Anandi'),
(26, 48, 'ratanpar'),
(27, 11, 'Bharad'),
(28, 11, 'Bavali');

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
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`c_id`);

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
-- Indexes for table `rawmaterial`
--
ALTER TABLE `rawmaterial`
  ADD PRIMARY KEY (`rm_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `taluka`
--
ALTER TABLE `taluka`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `c_id` (`c_id`);

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
-- Indexes for table `villages`
--
ALTER TABLE `villages`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `t_id` (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acceptreq`
--
ALTER TABLE `acceptreq`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `companyaccount`
--
ALTER TABLE `companyaccount`
  MODIFY `ca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `extramaterial`
--
ALTER TABLE `extramaterial`
  MODIFY `em_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `farmsalary`
--
ALTER TABLE `farmsalary`
  MODIFY `fa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `rawmaterial`
--
ALTER TABLE `rawmaterial`
  MODIFY `rm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `taluka`
--
ALTER TABLE `taluka`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `totalproduction`
--
ALTER TABLE `totalproduction`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `transportcharges`
--
ALTER TABLE `transportcharges`
  MODIFY `ta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `villages`
--
ALTER TABLE `villages`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
-- Constraints for table `rawmaterial`
--
ALTER TABLE `rawmaterial`
  ADD CONSTRAINT `rawmaterial_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `farmer` (`f_id`);

--
-- Constraints for table `taluka`
--
ALTER TABLE `taluka`
  ADD CONSTRAINT `taluka_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `city` (`c_id`);

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

--
-- Constraints for table `villages`
--
ALTER TABLE `villages`
  ADD CONSTRAINT `villages_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `taluka` (`t_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
