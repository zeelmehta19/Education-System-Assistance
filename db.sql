-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2020 at 01:52 AM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `RBPROJECT`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `login`, `password`) VALUES
(1, 'admin', 'zeel');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `name` text NOT NULL,
  `comment` text NOT NULL,
  `post_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`name`, `comment`, `post_time`) VALUES
('aqb.ans', 'heyy', '2020-03-05 13:06:11'),
('aqb.ans', 'hiii', '2020-03-05 13:06:18'),
('Admin', 'hello', '2020-03-05 13:06:46'),
('Admin', 'poiuytrew', '2020-03-05 13:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `monthly-payment`
--

CREATE TABLE `monthly-payment` (
  `paymentid` int(11) NOT NULL,
  `month` text NOT NULL,
  `year` text NOT NULL,
  `totallec` int(11) NOT NULL,
  `teacher` text NOT NULL,
  `amt` int(11) NOT NULL,
  `paid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monthly-payment`
--

INSERT INTO `monthly-payment` (`paymentid`, `month`, `year`, `totallec`, `teacher`, `amt`, `paid`) VALUES
(1, 'March', '2020', 6, 'check', 2400, 'YES'),
(2, 'January', '2020', 0, 'check', 0, 'YES'),
(3, 'March', '2020', 6, 'Rohit', 6000, 'YES'),
(4, 'January', '2020', 11, 'Rohit', 11000, 'YES'),
(5, 'January', '2020', 0, 'check', 0, 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `scic` int(11) NOT NULL,
  `day` text NOT NULL,
  `date` date NOT NULL,
  `teacher` text NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`scic`, `day`, `date`, `teacher`, `time`) VALUES
(1, 'Monday', '2020-03-09', 'check', 0),
(2, 'Friday', '2020-03-17', 'check', 0),
(3, 'Monday', '2020-03-19', 'check', 0),
(4, 'Wednesday', '2020-03-13', 'check', 3),
(5, 'Thursday', '2020-03-01', 'Rohit', 0),
(6, 'Monday', '2020-03-02', 'Rohit', 0),
(7, 'Monday', '2020-01-09', 'Rohit', 0),
(8, 'Monday', '2020-01-11', 'Rohit', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student-details`
--

CREATE TABLE `student-details` (
  `studentid` int(11) NOT NULL,
  `fn` text NOT NULL,
  `mn` text NOT NULL,
  `ln` text NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `classXI` int(11) NOT NULL,
  `classXII` int(11) NOT NULL,
  `classent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student-details`
--

INSERT INTO `student-details` (`studentid`, `fn`, `mn`, `ln`, `dateofbirth`, `gender`, `email`, `phone`, `address`, `classXI`, `classXII`, `classent`) VALUES
(1, 'aqb', 'sad', 'ans', '2020-03-05', 'Male', 'zeelmehta19.zm@gmail.com', '9090909090', 'gfahdgaiwu', 1, 0, 0),
(2, 'Zeel', 'ashj', 'sdfgh', '2020-03-09', 'female', 'zeelmehta19.zm@gmail.com', '1234567890', 'fhl,mnbvcxswetyuikjhb', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `studentid` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`studentid`, `username`, `password`, `email`) VALUES
(1, 'aqb.ans', 'aqb0503', 'zeelmehta19.zm@gmail.com'),
(2, 'zeel.sdfgh', 'zeel0903', 'zeelmehta19.zm@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teacherdemo`
--

CREATE TABLE `teacherdemo` (
  `teacherid` int(11) NOT NULL,
  `demodate` date NOT NULL,
  `demotopic` text NOT NULL,
  `demosub` text NOT NULL,
  `att1` text NOT NULL,
  `att2` text NOT NULL,
  `att3` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherdemo`
--

INSERT INTO `teacherdemo` (`teacherid`, `demodate`, `demotopic`, `demosub`, `att1`, `att2`, `att3`, `feedback`) VALUES
(1, '2020-03-13', 'Science', 'Phy', 'mummy', 'pappa', 'Tinu', 'nice'),
(2, '2020-03-04', 'dfa', 'at', 'RB', '', '', 'qwertyuioplkjhgfdsazxcbnm');

-- --------------------------------------------------------

--
-- Table structure for table `teacherdetails`
--

CREATE TABLE `teacherdetails` (
  `teacherid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `dateofbirth` date NOT NULL,
  `address` text NOT NULL,
  `experience` int(11) NOT NULL,
  `firstlecdate` date NOT NULL,
  `allotment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherdetails`
--

INSERT INTO `teacherdetails` (`teacherid`, `name`, `surname`, `email`, `phone`, `dateofbirth`, `address`, `experience`, `firstlecdate`, `allotment`) VALUES
(1, 'check', 'check2', 'zeelmehta19.zm@gmail.com', '9090909090', '2020-03-05', 'check', 1, '2020-03-06', 'XI PCB'),
(2, 'Rohit', 'Barve', 'rohitbarve14dec@gmail.com', '8898138232', '2020-03-02', 'qwyuiopljhgfdsazxcbnm', 10, '2020-03-03', 'NEET');

-- --------------------------------------------------------

--
-- Table structure for table `teacherexpertise`
--

CREATE TABLE `teacherexpertise` (
  `teacherid` int(11) NOT NULL,
  `eleventh` int(11) NOT NULL,
  `twelveth` int(11) NOT NULL,
  `phy` int(11) NOT NULL,
  `chem` int(11) NOT NULL,
  `maths` int(11) NOT NULL,
  `entrance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherexpertise`
--

INSERT INTO `teacherexpertise` (`teacherid`, `eleventh`, `twelveth`, `phy`, `chem`, `maths`, `entrance`) VALUES
(1, 1, 0, 0, 0, 0, 0),
(2, 0, 0, 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacherlogin`
--

CREATE TABLE `teacherlogin` (
  `teacherid` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherlogin`
--

INSERT INTO `teacherlogin` (`teacherid`, `username`, `password`, `email`) VALUES
(1, 'check.check2', 'Q3ljYb1a', 'zeelmehta19.zm@gmail.com'),
(2, 'rohit.barve', 'mypzQg5M', 'rohitbarve14dec@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teacherpayment`
--

CREATE TABLE `teacherpayment` (
  `teacherid` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `occ` text NOT NULL,
  `classes` text NOT NULL,
  `accno` varchar(50) NOT NULL,
  `ifsc` varchar(50) NOT NULL,
  `bankname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherpayment`
--

INSERT INTO `teacherpayment` (`teacherid`, `rate`, `occ`, `classes`, `accno`, `ifsc`, `bankname`) VALUES
(1, 400, 'job', 'hby', '4744', '7747', 'SBI'),
(2, 1000, 'job', '', '1111', '1111', 'SBI');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `tid` int(11) NOT NULL,
  `date` date NOT NULL,
  `from-mor` text NOT NULL,
  `to-mor` text NOT NULL,
  `teacher-mor` text NOT NULL,
  `class-mor` text NOT NULL,
  `from-eve` text NOT NULL,
  `to-eve` text NOT NULL,
  `teacher-eve` text NOT NULL,
  `class-eve` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`tid`, `date`, `from-mor`, `to-mor`, `teacher-mor`, `class-mor`, `from-eve`, `to-eve`, `teacher-eve`, `class-eve`) VALUES
(1, '2020-03-06', '06:15', '07:15', 'Rohit', 'XII', '18:15', '19:15', 'Rohit', 'XIi');

-- --------------------------------------------------------

--
-- Table structure for table `visitor-details`
--

CREATE TABLE `visitor-details` (
  `visitorid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `enquiry` text NOT NULL,
  `classXI` int(11) NOT NULL,
  `classXII` int(11) NOT NULL,
  `classent` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `monthly-payment`
--
ALTER TABLE `monthly-payment`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`scic`);

--
-- Indexes for table `student-details`
--
ALTER TABLE `student-details`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `studentlogin`
--
ALTER TABLE `studentlogin`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `teacherdemo`
--
ALTER TABLE `teacherdemo`
  ADD PRIMARY KEY (`teacherid`);

--
-- Indexes for table `teacherdetails`
--
ALTER TABLE `teacherdetails`
  ADD PRIMARY KEY (`teacherid`);

--
-- Indexes for table `teacherexpertise`
--
ALTER TABLE `teacherexpertise`
  ADD PRIMARY KEY (`teacherid`);

--
-- Indexes for table `teacherlogin`
--
ALTER TABLE `teacherlogin`
  ADD PRIMARY KEY (`teacherid`);

--
-- Indexes for table `teacherpayment`
--
ALTER TABLE `teacherpayment`
  ADD PRIMARY KEY (`teacherid`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `visitor-details`
--
ALTER TABLE `visitor-details`
  ADD PRIMARY KEY (`visitorid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `monthly-payment`
--
ALTER TABLE `monthly-payment`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `scic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `student-details`
--
ALTER TABLE `student-details`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `studentlogin`
--
ALTER TABLE `studentlogin`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teacherdemo`
--
ALTER TABLE `teacherdemo`
  MODIFY `teacherid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teacherdetails`
--
ALTER TABLE `teacherdetails`
  MODIFY `teacherid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teacherexpertise`
--
ALTER TABLE `teacherexpertise`
  MODIFY `teacherid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teacherlogin`
--
ALTER TABLE `teacherlogin`
  MODIFY `teacherid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teacherpayment`
--
ALTER TABLE `teacherpayment`
  MODIFY `teacherid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `visitor-details`
--
ALTER TABLE `visitor-details`
  MODIFY `visitorid` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
