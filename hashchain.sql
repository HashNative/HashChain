-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 07:08 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hashchain`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Presented` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barcodeprint`
--

CREATE TABLE `barcodeprint` (
  `Barcode` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `checkdailywage`
--

CREATE TABLE `checkdailywage` (
  `Name` varchar(255) NOT NULL,
  `Wage` int(11) NOT NULL,
  `O/T` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `creatematerial`
--

CREATE TABLE `creatematerial` (
  `Barcode` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Unit` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dailycostreport`
--

CREATE TABLE `dailycostreport` (
  `Barcode` varchar(255) NOT NULL,
  `Material` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Cost` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dailytransferreport`
--

CREATE TABLE `dailytransferreport` (
  `Date` date NOT NULL,
  `Section` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Barcode` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Cost` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dailywagerecord`
--

CREATE TABLE `dailywagerecord` (
  `Name` varchar(255) NOT NULL,
  `Basic Salary` int(11) NOT NULL,
  `Attendance Allowance` int(11) NOT NULL,
  `O/T` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `monthlycostreport`
--

CREATE TABLE `monthlycostreport` (
  `Date` date NOT NULL,
  `Barcode` varchar(255) NOT NULL,
  `Material` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Cost` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `monthlysalarycontrol`
--

CREATE TABLE `monthlysalarycontrol` (
  `Name` varchar(255) NOT NULL,
  `Basic Salary` int(11) NOT NULL,
  `Attendance Allowance` int(11) NOT NULL,
  `O/T` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `Barcode` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Unit Price` int(11) NOT NULL,
  `Initial Quantity` int(11) NOT NULL,
  `Available Quantity` int(11) NOT NULL,
  `Unit` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registersalary`
--

CREATE TABLE `registersalary` (
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Section` varchar(255) NOT NULL,
  `Basic Salary` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salaryreport`
--

CREATE TABLE `salaryreport` (
  `Name` varchar(255) NOT NULL,
  `Basic` int(11) NOT NULL,
  `Attendance Allowance` int(11) NOT NULL,
  `O/T` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `viewattendance`
--

CREATE TABLE `viewattendance` (
  `Name` varchar(255) NOT NULL,
  `Start Time` time NOT NULL,
  `End Time` time NOT NULL,
  `Net Hours` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `viewcashstock`
--

CREATE TABLE `viewcashstock` (
  `Barcode` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Unit` int(11) NOT NULL,
  `Unit Price` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `viewcompanystock`
--

CREATE TABLE `viewcompanystock` (
  `Barcode` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Unit` int(11) NOT NULL,
  `Unit Price` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `viewdetailedmaterials`
--

CREATE TABLE `viewdetailedmaterials` (
  `Barcode` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Unit` int(11) NOT NULL,
  `Unit Price` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `viewfinalgood`
--

CREATE TABLE `viewfinalgood` (
  `Date` date NOT NULL,
  `Barcode` varchar(255) NOT NULL,
  `Item` int(11) NOT NULL,
  `Section` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `viewmainstock`
--

CREATE TABLE `viewmainstock` (
  `Barcode` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Unit` int(11) NOT NULL,
  `Unit Price` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `viewmaterial`
--

CREATE TABLE `viewmaterial` (
  `Barcode` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Unit` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `viewpurchasedmaterial`
--

CREATE TABLE `viewpurchasedmaterial` (
  `Date` date NOT NULL,
  `Purchase Order No` varchar(255) NOT NULL,
  `Barcode` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Unit` int(11) NOT NULL,
  `Unit Price` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `viewstaff`
--

CREATE TABLE `viewstaff` (
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Section` varchar(255) NOT NULL,
  `Basic Salary` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `viewstock`
--

CREATE TABLE `viewstock` (
  `Barcode` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Available Quantity` int(11) NOT NULL,
  `Unit` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `viewtransferedmaterials`
--

CREATE TABLE `viewtransferedmaterials` (
  `Date` date NOT NULL,
  `Section` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Barcode` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Cost` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `barcodeprint`
--
ALTER TABLE `barcodeprint`
  ADD PRIMARY KEY (`Barcode`);

--
-- Indexes for table `creatematerial`
--
ALTER TABLE `creatematerial`
  ADD PRIMARY KEY (`Barcode`);

--
-- Indexes for table `viewpurchasedmaterial`
--
ALTER TABLE `viewpurchasedmaterial`
  ADD PRIMARY KEY (`Purchase Order No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
