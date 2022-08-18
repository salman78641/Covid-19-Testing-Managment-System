-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 07:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msrclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` varchar(16) NOT NULL,
  `fullname` varchar(111) NOT NULL,
  `pass` varchar(111) NOT NULL,
  `conpass` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `pass`, `conpass`) VALUES
('0', 'Muhammad Salman Razzaq', '123', '123'),
('0012', 'Muhammad Salman Razzaq', '123', '123'),
('00123242', 'Muhammad Salman Razzaq', '123', '123'),
('1', '', '', ''),
('111', 'DROP DATABASE', 'fsc', 'random'),
('123', 'Muhammad Salman Razzaq', '123', '123'),
('1232', 'Muhammad Salman Razzaq', '123', '123'),
('1234', 'Muhammad Salman Razzaq', '123', '123'),
('123456', 'Muhammad Salman Razzaq', '123', '123'),
('13', 'Muhammad Salman Razzaq', '123', '123'),
('145', 'Muhammad Salman Razzaq', '123', '123'),
('1451', 'Muhammad Salman Razzaq', '123', '123'),
('19', 'Muhammad Salman Razzaq', '123', '123'),
('2', 'Muhammad Salman Razzaq', '123', '123'),
('221', 'Muhammad Salman Razzaq', '123', '123'),
('222', 'Muhammad Salman Razzaq', '123', '123'),
('2342', 'Muhammad Salman Razzaq', 'fo-dfash', 'fo-dfash'),
('26', 'Muhammad Salman Razzaq', '123', '123'),
('264', 'Muhammad Salman Razzaq', '123', '123'),
('26411', 'Muhammad Salman Razzaq', '123', '123'),
('3', 'Muhammad Salman Razzaq', '123', '123'),
('31', 'Muhammad Salman Razzaq', 'fsc', 'fsc'),
('313', 'Muhammad Salman Razzaq', 'fsc', 'fsc'),
('314', 'DROP DATABASE', 'fsc', 'fsc'),
('34', 'Muhammad Salman Razzaq', '123', '123'),
('345645', 'Muhammad Salman Razzaq', '123', '123'),
('36', 'Muhammad Salman Razzaq', 'random', 'random'),
('4', 'Muhammad Salman Razzaq', 'fsc', 'fsc'),
('43535', 'Muhammad Salman Razzaq', 'random', 'random'),
('44', 'Muhammad Salman Razzaq', '123', '123'),
('5', 'Muhammad Salman Razzaq', '123', '123'),
('53434643353', 'Muhammad Salman Razzaq', '123', '123'),
('53434643353232', 'fgd', 'fo-bsf', 'fo-bsf'),
('5343464335352345', 'Muhammad Salman Razzaq', '123', '123'),
('6', '', '', ''),
('7', 'Muhammad Salman Razzaq', '123', '123'),
('78641', 'Muhammad Salman Razzaq', '123', '123'),
('8', 'Muhammad Salman Razzaq', '123', '123'),
('9', 'Muhammad Salman Razzaq', '123', '123'),
('Last Name ', 'Last Name ', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `booknow`
--

CREATE TABLE `booknow` (
  `testtype` varchar(167) NOT NULL DEFAULT 'Not Selected',
  `fname` varchar(111) NOT NULL,
  `mname` varchar(111) NOT NULL,
  `lname` varchar(111) NOT NULL,
  `Gender` varchar(111) NOT NULL,
  `dob` varchar(111) NOT NULL,
  `id` varchar(111) NOT NULL,
  `add1` varchar(111) NOT NULL,
  `add2` varchar(111) NOT NULL,
  `city` varchar(1111) NOT NULL,
  `state` varchar(111) NOT NULL,
  `ZIP` varchar(111) NOT NULL,
  `phone` varchar(1111) NOT NULL,
  `Exphone` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `card` varchar(111) NOT NULL,
  `CardOwnName` varchar(111) NOT NULL,
  `cardnum` int(111) NOT NULL,
  `expdate` date NOT NULL,
  `result` varchar(16) NOT NULL DEFAULT 'Pending',
  `file` varchar(199) NOT NULL,
  `timestampp` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booknow`
--

INSERT INTO `booknow` (`testtype`, `fname`, `mname`, `lname`, `Gender`, `dob`, `id`, `add1`, `add2`, `city`, `state`, `ZIP`, `phone`, `Exphone`, `email`, `card`, `CardOwnName`, `cardnum`, `expdate`, `result`, `file`, `timestampp`) VALUES
('RT-PCR Testing', 'First Name', 'Middle Name', 'Last Name', 'Male', '2022-05-11', '53434643353', 'Rehan Bilal City Qasim Bella ', 'Address Line 2', 'Multan City', 'State', '66000', '54345347654745753574747456475463563', 'Postal Address', '1may2022@gmail.com', 'Union Pay', 'dfbs', 634542, '2022-05-28', 'Pending', 'new text document.txt', '2022-05-01'),
('Rapid Antigen Testing', 'Muhammad', 'Salman', 'Razzaq', 'Male', '2022-05-17', '53434643353', 'Rehan Bilal City Qasim Bella ', 'Address Line 2', 'Address Line 2', 'Punjab', '66000', '54345347654745753574747456475463563', 'Postal Address', '29may2022@gmail.com', 'Union Pay', 'Muhammad Salman Razzaq', 54643, '2022-05-17', 'Pending', '16 best freelance websites to find work in 2022.mhtml', '2022-05-01'),
('RT-PCR Testing', 'Muhammad', 'Salman', 'Razzaq', 'Male', '2022-05-17', '53434643353', 'Rehan Bilal City Qasim Bella ', 'Address Line 2', 'Address Line 2', 'Punjab', '66000', '54345347654745753574747456475463563', 'Postal Address', '78641@gmail.com', 'Union Pay', 'Muhammad Salman Razzaq', 54643, '2022-05-17', 'Pending', 'new text document.txt', '2022-05-31'),
('RT-PCR Testing', 'Muhammad', 'Salman', 'Razzaq', 'Male', '2022-05-17', '53434643353', 'Rehan Bilal City Qasim Bella ', 'Address Line 2', 'Address Line 2', 'Punjab', '66000', '54345347654745753574747456475463563', 'Postal Address', '786@gmail.com', 'Union Pay', 'Muhammad Salman Razzaq', 54643, '2022-05-17', 'Pending', 'new text document.txt', '2022-05-19'),
('RT-PCR Testing', 'Muhammad', 'Salman', 'Razzaq', 'Male', '2022-05-17', '53434643353', 'Rehan Bilal City Qasim Bella ', 'Address Line 2', 'Address Line 2', 'Punjab', '66000', '54345347654745753574747456475463563', 'Postal Address', 'Date19m564564ay2754645435346022@gmail.com', 'Union Pay', 'Muhammad Salman Razzaq', 54643, '2022-05-17', 'Pending', 'new text document.txt', '2022-05-19'),
('RT-PCR Testing', 'Muhammad', 'Salman', 'Razzaq', 'Male', '2022-05-17', '53434643353', 'Rehan Bilal City Qasim Bella ', 'Address Line 2', 'Address Line 2', 'Punjab', '66000', '54345347654745753574747456475463563', 'Postal Address', 'Date19may2022@gmail.com', 'Union Pay', 'Muhammad Salman Razzaq', 54643, '2022-05-17', 'Pending', 'new text document.txt', '2022-05-19'),
('RT-PCR Testing', 'Muhammad', 'Salman', 'Razzaq', 'Male', '2022-05-17', '53434643353', 'Rehan Bilal City Qasim Bella ', 'Address Line 2', 'Address Line 2', 'Punjab', '66000', '54345347654745753574747456475463563', 'Postal Address', 'Date19may2754645435346022@gmail.com', 'Union Pay', 'Muhammad Salman Razzaq', 54643, '2022-05-17', 'Pending', 'new text document.txt', '2022-05-19'),
('Rapid Antigen Testing', 'Muhammad', 'Salman', 'Razzaq', 'Male', '2022-05-17', '53434643353', 'Rehan Bilal City Qasim Bella ', 'Address Line 2', 'Address Line 2', 'Punjab', '66000', '54345347654745753574747456475463563', 'Postal Address', 'Date29may2022@gmail.com', 'Union Pay', 'Muhammad Salman Razzaq', 54643, '2022-05-17', 'Pending', 'new text document.txt', '2022-05-19'),
('RT-PCR Testing', 'Muhammad', 'Salman', 'Razzaq', 'Male', '2022-05-17', '53434643353', 'Rehan Bilal City Qasim Bella ', 'Address Line 2', 'Address Line 2', 'Punjab', '66000', '54345347654745753574747456475463563', 'Postal Address', 'Date645645619m564564ay2754645435346022@gmail.com', 'Union Pay', 'Muhammad Salman Razzaq', 54643, '2022-05-17', 'Pending', 'new text document.txt', '2022-05-19'),
('RT-PCR Testing', 'Muhammad', 'Salman', 'Razzaq', 'Male', '2022-05-23', '3530271567869', 'Rehan Bilal City Qasim Bella ', 'Multan Cantt', 'Multan City', 'State', 'Postal Address', '03065418497', '031863333090', 'gcgfgdfssdsgrrrsdfsdgfgddfdgdfgfgggfdfgdfg@gmail.com', 'Union Pay', 'Muhammad Salman Razzaq', 6546464, '2022-05-22', 'Pending', 'new text document.txt', '2022-05-29'),
('Rapid Antigen Testing', ' ', ' ', ' ', 'Male', '2022-05-24', '  ', '  ', '  ', '  ', '  ', '  ', ' ', ' ', 'razzaqsalman654654340@gmail.com', 'Union Pay', '  ', 0, '2022-05-25', 'Pending', 'my medical history.txt', '2022-05-29'),
('RT-PCR Testing', '  ', '  ', '  ', 'Male', '2022-05-24', ' ', '   ', '  ', '  ', '  ', '  ', ' ', ' ', 'razzaqsalman6546565644340@gmail.com', 'Union Pay', '  ', 0, '2022-05-25', 'Pending', 'my medical history.txt', '2017-03-03'),
('Rapid Antigen Testing', '  ', '  ', '  ', 'Male', '2022-05-24', ' ', '   ', '  ', '  ', '  ', '  ', ' ', ' ', 'razzaqsalman6546565644345640@gmail.com', 'Union Pay', '  ', 0, '2022-05-25', 'Pending', 'my medical history.txt', '2017-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `covidphy`
--

CREATE TABLE `covidphy` (
  `fullname` varchar(16) NOT NULL,
  `email` varchar(147) NOT NULL,
  `address` varchar(123) NOT NULL,
  `qualification` varchar(23) NOT NULL DEFAULT 'NO DATA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covidphy`
--

INSERT INTO `covidphy` (`fullname`, `email`, `address`, `qualification`) VALUES
('Muhammad Salman ', 'salmanrazzaqkhabfgdfghase@gmail.com', 'fdgfda', 'gadgsda');

-- --------------------------------------------------------

--
-- Table structure for table `gt`
--

CREATE TABLE `gt` (
  `fullname` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `mobilenumber` varchar(11) NOT NULL,
  `message` varchar(1111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gt`
--

INSERT INTO `gt` (`fullname`, `email`, `mobilenumber`, `message`) VALUES
('Msr', 'razzaqsalman605634@gmail.com', '5465463', '5345354'),
('Muhammad Salman Razzaq', 'razzaqsalman6056@gmail.com', '5465463', 'retfewshfco'),
('Muhammad Salman Razzaq', 'razzaqsalman60@gmail.com', '5465463', 'fdgdfg'),
('Muhammad Salman Razzaq', 'salmanrazzaq450@gmail.com', '5465463', 'fasfa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booknow`
--
ALTER TABLE `booknow`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `covidphy`
--
ALTER TABLE `covidphy`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `gt`
--
ALTER TABLE `gt`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
