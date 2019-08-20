-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2019 at 08:04 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `nat_id` varchar(20) DEFAULT NULL,
  `mobile` varchar(13) DEFAULT NULL,
  `tel` varchar(13) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `property` varchar(20) DEFAULT NULL,
  `los` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `fname`, `mname`, `lname`, `dob`, `address`, `gender`, `nat_id`, `mobile`, `tel`, `email`, `property`, `los`) VALUES
(4, ' Robby ', 'Jnr', ' Malunga ', '1998-05-10', ' waterfalls ', 'mr', 'LL02120', '263785035711', '0290087', '', 'rented', '2'),
(5, ' Primrose ', '', ' Dahwa ', '1998-03-10', ' kwekwe ', 'ms', '5636365', '263785035711', '0290087', '', 'owned', '1'),
(6, ' Robby ', 'Jnr', ' Malungaa ', '2001-01-01', ' waterfalls ', 'other', 'LL02120', '263785035711', '0290087', '', 'owned', '4');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(11) NOT NULL,
  `assetName` varchar(60) DEFAULT NULL,
  `serialNo` varchar(50) DEFAULT NULL,
  `value` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `assetName`, `serialNo`, `value`) VALUES
(3, 'car', '568h', 40000),
(4, 'dress', '568h', 40000),
(5, 'house', '', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `bankingdetails`
--

CREATE TABLE `bankingdetails` (
  `id` int(11) NOT NULL,
  `bankName` varchar(60) DEFAULT NULL,
  `branch` varchar(20) DEFAULT NULL,
  `accNum` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankingdetails`
--

INSERT INTO `bankingdetails` (`id`, `bankName`, `branch`, `accNum`) VALUES
(3, 'SMB', 'Kariga', '0298764578'),
(4, 'SMB', 'Kariga', '0298764578'),
(5, 'SMB', 'Kariga', '0298764578');

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE `employment` (
  `id` int(11) NOT NULL,
  `empName` varchar(20) DEFAULT NULL,
  `empAddress` varchar(20) DEFAULT NULL,
  `empCell` varchar(13) DEFAULT NULL,
  `jobTitle` varchar(20) DEFAULT NULL,
  `grossSalary` double DEFAULT NULL,
  `dateEmployed` date DEFAULT NULL,
  `empEmail` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employment`
--

INSERT INTO `employment` (`id`, `empName`, `empAddress`, `empCell`, `jobTitle`, `grossSalary`, `dateEmployed`, `empEmail`) VALUES
(3, 'Success', '5 steppes', '0772491647', 'System Administrator', 200, '2019-08-01', 'malinga@gmail.com'),
(4, 'Success', 'steppes', '0772491647', 'System Administrator', 200, '2019-01-01', 'malinga@gmail.com'),
(5, 'Success', 'steppes', '0772491647', 'System Administrator', 200, '2019-01-01', 'malinga@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `financialinfo`
--

CREATE TABLE `financialinfo` (
  `id` int(11) NOT NULL,
  `loanAmnt` double DEFAULT NULL,
  `repaymentSource` varchar(50) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `lender` varchar(60) DEFAULT NULL,
  `outstandingAmnt` double DEFAULT NULL,
  `installment` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financialinfo`
--

INSERT INTO `financialinfo` (`id`, `loanAmnt`, `repaymentSource`, `purpose`, `lender`, `outstandingAmnt`, `installment`) VALUES
(3, 1000, 'salary', 'fees', 'N/A', 0, 0),
(4, 1000, 'salary', 'fees', 'N/A', 0, 0),
(5, 1000, 'salary', 'fees', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bankingdetails`
--
ALTER TABLE `bankingdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employment`
--
ALTER TABLE `employment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financialinfo`
--
ALTER TABLE `financialinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bankingdetails`
--
ALTER TABLE `bankingdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employment`
--
ALTER TABLE `employment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `financialinfo`
--
ALTER TABLE `financialinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
