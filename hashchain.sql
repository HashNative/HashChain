-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 04:19 AM
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
  `Id` int(11) NOT NULL,
  `Barcode` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barcodeprint`
--

INSERT INTO `barcodeprint` (`Id`, `Barcode`, `Price`, `Quantity`) VALUES
(1, 'Section 1', 50, 5),
(2, 'Section 2', 100, 5);

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
-- Table structure for table `finished_goods`
--

CREATE TABLE `finished_goods` (
  `id` int(11) NOT NULL,
  `Stock_target` varchar(255) NOT NULL,
  `Barcode` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Unit_Price` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finished_goods`
--

INSERT INTO `finished_goods` (`id`, `Stock_target`, `Barcode`, `Quantity`, `Unit_Price`, `Total`) VALUES
(1, 'Agent', 'code 1', 0, 0, 0),
(2, 'Retailers', 'code 2', 5, 20, 100);

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
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `id` int(11) NOT NULL,
  `Barcode` varchar(255) NOT NULL,
  `Unit_Cost` varchar(255) NOT NULL,
  `Transfer_to_section` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Cost` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`id`, `Barcode`, `Unit_Cost`, `Transfer_to_section`, `Quantity`, `Cost`) VALUES
(2710, 'code 1', 'Item 4', 'Department 4', 50, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `viewattendance`
--

CREATE TABLE `viewattendance` (
  `id` int(11) NOT NULL,
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
  `id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Barcode` varchar(255) NOT NULL,
  `Item` int(11) NOT NULL,
  `Section` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `viewfinalgood`
--

INSERT INTO `viewfinalgood` (`id`, `Date`, `Barcode`, `Item`, `Section`, `Quantity`) VALUES
(1, '2019-01-31', 'Code 1', 1, 'Section 1', 5),
(2, '2019-04-01', 'Code 2', 2, 'Section 2', 50);

-- --------------------------------------------------------

--
-- Table structure for table `viewmainstock`
--

CREATE TABLE `viewmainstock` (
  `id` int(11) NOT NULL,
  `Barcode` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Unit` int(11) NOT NULL,
  `Unit Price` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `viewmainstock`
--

INSERT INTO `viewmainstock` (`id`, `Barcode`, `Name`, `Type`, `Quantity`, `Unit`, `Unit Price`, `Total`) VALUES
(1, 'Section 1', 'aa', 'Type 1', 5, 10, 20, 100),
(2, 'Section 2', 'bb', 'Type 2', 2, 4, 30, 60);

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
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `creatematerial`
--
ALTER TABLE `creatematerial`
  ADD PRIMARY KEY (`Barcode`);

--
-- Indexes for table `finished_goods`
--
ALTER TABLE `finished_goods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viewattendance`
--
ALTER TABLE `viewattendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viewfinalgood`
--
ALTER TABLE `viewfinalgood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `viewmainstock`
--
ALTER TABLE `viewmainstock`
  ADD PRIMARY KEY (`id`);

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
--
-- AUTO_INCREMENT for table `barcodeprint`
--
ALTER TABLE `barcodeprint`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `finished_goods`
--
ALTER TABLE `finished_goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2721;
--
-- AUTO_INCREMENT for table `viewattendance`
--
ALTER TABLE `viewattendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `viewfinalgood`
--
ALTER TABLE `viewfinalgood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `viewmainstock`
--
ALTER TABLE `viewmainstock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
