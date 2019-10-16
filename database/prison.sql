-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2019 at 10:06 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prison`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintbl`
--

CREATE TABLE `admintbl` (
  `id` int(11) NOT NULL,
  `admin_user` text NOT NULL,
  `admin_pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintbl`
--

INSERT INTO `admintbl` (`id`, `admin_user`, `admin_pass`) VALUES
(1, 'admin', 'admin'),
(2, 'lydia', 'lydia');

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE `announce` (
  `recipient` text NOT NULL,
  `national_id` varchar(12) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`recipient`, `national_id`, `subject`, `message`) VALUES
('Belinda', '671236545B27', 'Trial', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE `court` (
  `national_id` varchar(12) NOT NULL,
  `file_num` varchar(10) NOT NULL,
  `trial_date` date NOT NULL,
  `sentence` varchar(50) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`national_id`, `file_num`, `trial_date`, `sentence`, `location`) VALUES
('671236548A28', 'F1223', '2019-10-18', '3 years prison', 'Marondera'),
('671236548A67', 'F1234', '2019-10-09', '10 years prison', 'Musharukwa'),
('677836545B27', 'F54321', '2019-10-04', '3 years prison', 'Zimuche');

-- --------------------------------------------------------

--
-- Table structure for table `officers`
--

CREATE TABLE `officers` (
  `national_id` varchar(12) NOT NULL,
  `full_name` text NOT NULL,
  `address` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(1) NOT NULL,
  `number` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officers`
--

INSERT INTO `officers` (`national_id`, `full_name`, `address`, `DOB`, `gender`, `number`, `experience`) VALUES
('688236548A28', 'Gilbert Nightray', 'Nightray Mansion', '2019-10-02', 'M', '12345678', '10 years'),
('691234567X45', 'Lydia Chimheno', 'On planet earth as well', '1990-02-16', 'F', '+263772123123', '1 month');

-- --------------------------------------------------------

--
-- Table structure for table `prisoners`
--

CREATE TABLE `prisoners` (
  `national_id` varchar(13) NOT NULL,
  `full_name` text NOT NULL,
  `DOB` date NOT NULL,
  `datein` date NOT NULL,
  `dateout` date NOT NULL,
  `address` varchar(30) NOT NULL,
  `country` text NOT NULL,
  `gender` text NOT NULL,
  `marital_status` text NOT NULL,
  `offence` text NOT NULL,
  `sentence` varchar(30) NOT NULL,
  `file_num` varchar(10) NOT NULL,
  `prison` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prisoners`
--

INSERT INTO `prisoners` (`national_id`, `full_name`, `DOB`, `datein`, `dateout`, `address`, `country`, `gender`, `marital_status`, `offence`, `sentence`, `file_num`, `prison`) VALUES
('631234567A28', 'Tawanda Motsi', '1998-03-10', '2019-10-01', '2021-12-15', '5 harare drive, greendale', 'Zimbabwe', 'M', 'Single', 'Theft', '2 years in prison', '', 'Chikurubi'),
('651234567B21', 'Cuthbert Shumba', '1990-07-18', '2019-10-02', '2029-10-02', 'On planet earth', 'Mozambique', 'M', 'Single', 'Attempted murder', '10 years', 'F8902', 'Support'),
('671236548A28', 'Ashley Nhema', '1960-03-03', '2019-10-01', '2022-10-01', 'who knows', 'Zimbabwe', 'F', 'Divorced', 'Abuse', '3 years prison', '12345', 'Chikurubi'),
('671236548A67', 'Nyasha Moyo', '1992-01-01', '2019-10-08', '2030-06-06', 'szrfuylkhjbknjk', 'Zambia', 'M', 'Divorced', 'Attempted Murder', '10 years prison', 'F1234', 'Musharukwa');

-- --------------------------------------------------------

--
-- Table structure for table `prisontbl`
--

CREATE TABLE `prisontbl` (
  `pno` varchar(12) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `opendate` date NOT NULL,
  `in_charge` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `capacity` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prisontbl`
--

INSERT INTO `prisontbl` (`pno`, `pname`, `location`, `opendate`, `in_charge`, `contact`, `capacity`) VALUES
('123456', 'Pandora', 'Bindura', '1998-10-02', 'Belinda', '0771231234', 1000),
('132456567', 'Abyss', 'Sabrie', '1985-08-16', 'Baskerville', '+263779876543', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `prisontrans`
--

CREATE TABLE `prisontrans` (
  `national_id` varchar(12) NOT NULL,
  `file_num` varchar(10) NOT NULL,
  `from_prison` varchar(15) NOT NULL,
  `to_prison` varchar(15) NOT NULL,
  `transfer_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prisontrans`
--

INSERT INTO `prisontrans` (`national_id`, `file_num`, `from_prison`, `to_prison`, `transfer_date`) VALUES
('671236548A28', 'F1234', 'Marondera', 'Chikurubi', '2019-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `visitortbl`
--

CREATE TABLE `visitortbl` (
  `national_id` varchar(12) NOT NULL,
  `full_name` text NOT NULL,
  `visit_date` date NOT NULL,
  `timein` varchar(6) NOT NULL,
  `timeout` varchar(6) NOT NULL,
  `relationship` text NOT NULL,
  `number` varchar(20) NOT NULL,
  `prisoner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitortbl`
--

INSERT INTO `visitortbl` (`national_id`, `full_name`, `visit_date`, `timein`, `timeout`, `relationship`, `number`, `prisoner`) VALUES
('671236545B27', 'Admire Nyoni', '2019-10-08', '19:30:', '20:00:', 'Father', '+263772123123', 'Sharyl Nyoni'),
('691234567G43', 'Brian Mustau', '2019-10-10', '14:15', '', 'Cousin Brother', '+263772123123', 'Ashley Nyoni');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintbl`
--
ALTER TABLE `admintbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
  ADD PRIMARY KEY (`national_id`);

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`national_id`);

--
-- Indexes for table `officers`
--
ALTER TABLE `officers`
  ADD PRIMARY KEY (`national_id`);

--
-- Indexes for table `prisoners`
--
ALTER TABLE `prisoners`
  ADD PRIMARY KEY (`national_id`);

--
-- Indexes for table `prisontbl`
--
ALTER TABLE `prisontbl`
  ADD PRIMARY KEY (`pno`);

--
-- Indexes for table `prisontrans`
--
ALTER TABLE `prisontrans`
  ADD PRIMARY KEY (`national_id`);

--
-- Indexes for table `visitortbl`
--
ALTER TABLE `visitortbl`
  ADD PRIMARY KEY (`national_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
