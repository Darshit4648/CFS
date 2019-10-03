-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2019 at 01:55 AM
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
(78, 41, 14, '2019-10-04', '3000', '5 months.', 1, '04/10/2019 04:07:24', 1);

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
(6, 'surendranagr');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `c_id` int(11) NOT NULL,
  `companyname` varchar(30) NOT NULL,
  `companysname` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `taluka` varchar(20) NOT NULL,
  `village` varchar(20) NOT NULL,
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

INSERT INTO `company` (`c_id`, `companyname`, `companysname`, `city`, `taluka`, `village`, `latitude`, `longitude`, `address`, `mobno`, `email`, `username`, `password`) VALUES
(14, 'Trinity Goodies', 'prabhas patel', '2', '3', '1', '22.93207646213821', '72.6931185232736', 'gidc ahmedabad 380061.', '9871235460', 'tankdarhit437@student.aau.in', 'prabhas', '1234');

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
(41, 'darshit tank', '2', '4', '6', '22.55084805436544', '72.94397054128649', '3', '452/4', '7800361212', 'potato', '2000', 'darsh', '1234', 1, 1),
(42, 'rupesh patel', '1', '1', '4', '22.55156146483995', '72.94491467885973', '4', '452/4', '9871235460', 'tomato', '2000', 'rupu', '1212', 0, 0);

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
(14, 5, 'malpur');

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
(24, 6, 'Anandi');

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
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `companyaccount`
--
ALTER TABLE `companyaccount`
  MODIFY `ca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `extramaterial`
--
ALTER TABLE `extramaterial`
  MODIFY `em_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `farmsalary`
--
ALTER TABLE `farmsalary`
  MODIFY `fa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `labourcharge`
--
ALTER TABLE `labourcharge`
  MODIFY `la_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rawmaterial`
--
ALTER TABLE `rawmaterial`
  MODIFY `rm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `taluka`
--
ALTER TABLE `taluka`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `totalproduction`
--
ALTER TABLE `totalproduction`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `transportcharges`
--
ALTER TABLE `transportcharges`
  MODIFY `ta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `villages`
--
ALTER TABLE `villages`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
