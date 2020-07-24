-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2019 at 01:59 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prisonpro`
--
create database `prisonpro`;
use `prisonpro`;
-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `Admin_Id` int(11) NOT NULL,
  `Admin_Name` varchar(20) NOT NULL,
  `Admin_Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`Admin_Id`, `Admin_Name`, `Admin_Password`) VALUES
(1, 'john', 'john'),
(2, 'admin', 'admin'),
(4, 'Admin', '12345'),
(5, 'Admin', '12345'),
(7, 'Admin', '22');

-- --------------------------------------------------------

--
-- Table structure for table `capacity`
--

CREATE TABLE `capacity` (
  `id` int(23) NOT NULL,
  `number` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capacity`
--

INSERT INTO `capacity` (`id`, `number`) VALUES
(1, '500 inmates'),
(2, '750 inmates '),
(3, '1000 inmates'),
(4, '1500  inmates'),
(5, '2500 inmates'),
(6, '3000 inmates and above');

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE `court` (
  `National_id` varchar(15) NOT NULL,
  `Judge` varchar(30) NOT NULL,
  `Dateoftrial` varchar(30) NOT NULL,
  `Sentence` varchar(40) NOT NULL,
  `court_name` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`National_id`, `Judge`, `Dateoftrial`, `Sentence`, `court_name`, `id`) VALUES
('121', 'Barr. Mami', '2019-04-29', 'One Month', '', 5077),
('None', 'Barr. Pekes', '2019-04-08', 'One Month', '', 427428);

-- --------------------------------------------------------

--
-- Table structure for table `discharge`
--

CREATE TABLE `discharge` (
  `id` varchar(15) NOT NULL,
  `File_num` varchar(15) NOT NULL,
  `Full_Name` varchar(30) NOT NULL,
  `DOB` varchar(25) NOT NULL,
  `datein` varchar(25) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `state` varchar(30) NOT NULL,
  `lga` varchar(30) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Education` varchar(25) NOT NULL,
  `Marital` varchar(15) NOT NULL,
  `Offence` varchar(30) NOT NULL,
  `Sentence` varchar(30) NOT NULL,
  `prison` varchar(30) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discharge`
--

INSERT INTO `discharge` (`id`, `File_num`, `Full_Name`, `DOB`, `datein`, `Address`, `state`, `lga`, `Gender`, `Education`, `Marital`, `Offence`, `Sentence`, `prison`, `picture`) VALUES
('381212', '20', 'Chief Joyce ', '2018-11-07', '2018-11-07', 'GCC BOKKOS', 'Kano State', 'Bokkos', 'Male', 'education', 'Divorced', 'Killing', 'One Year', 'jos prison, K BOkkos', 'IMG_20171110_141414_2.jpg'),
('42267836', '20', 'Mark', '2018-11-07', '2018-11-07', 'Jos', 'kebbi state', 'Bokkos', 'Male', 'Ph.D', 'Divorced', 'Killing', 'One Year', 'jos prison, BOkkos', 'IMG_20171110_141029_1.jpg'),
('427428', '5654', 'Fidelis Matthew', '2018-10-01', '2018-11-10', 'Bauchi', 'Bauchi state', 'Gadau', 'Male', 'education', 'Divorced', 'Dating', 'Two days', 'Bauchi Central Prison, B Gadau', 'IMG_20180120_150259.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `qualification` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `qualification`) VALUES
(1, '0 Level'),
(2, 'Certificate'),
(3, 'Diploma'),
(4, 'B.Sc/B.A/HND'),
(5, 'PGD'),
(6, 'Master'),
(7, 'Ph.D');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `year` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `year`) VALUES
(1, '1-6 Months'),
(2, '1-2 years'),
(3, '3-4 years'),
(4, '5-7 years'),
(5, '7 years and above');

-- --------------------------------------------------------

--
-- Table structure for table `newprison`
--

CREATE TABLE `newprison` (
  `pno` int(11) NOT NULL,
  `pname` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `lga` varchar(25) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `capacity` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newprison`
--

INSERT INTO `newprison` (`pno`, `pname`, `state`, `lga`, `contact`, `capacity`) VALUES
(11, 'Bot', 'Jagawa', 'mana', '00000', '20 Inmates'),
(211, 'Mushu', 'Rivers state', 'BOkkos', '09073816267', '50 Inmates'),
(1222, 'jos prison', 'Kaduna state', 'BOkkos', '08141557353', '500 inmates'),
(7876, 'Bauchi Central Prison', 'Bauchi state', 'Gadau', '08141557353', '500 Inmates');

-- --------------------------------------------------------

--
-- Table structure for table `officerdetails`
--

CREATE TABLE `officerdetails` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `lga` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dateofbirth` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `telephone` varchar(11) NOT NULL,
  `education` varchar(30) NOT NULL,
  `experience` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officerdetails`
--

INSERT INTO `officerdetails` (`id`, `fullname`, `state`, `lga`, `address`, `dateofbirth`, `gender`, `telephone`, `education`, `experience`) VALUES
(22000, 'Solomon', 'Benue State', 'Otukpo', 'Bot, Jagawa, mana', '1971-09-12', 'Male', '09071958207', 'Bsc/B.A', '5 Years');

-- --------------------------------------------------------

--
-- Table structure for table `officer_transfer`
--

CREATE TABLE `officer_transfer` (
  `National_id` int(11) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `Telephone` varchar(15) NOT NULL,
  `From_prison` varchar(500) NOT NULL,
  `To_prison` varchar(500) NOT NULL,
  `Dateoftransfer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `officer_transfer`
--

INSERT INTO `officer_transfer` (`National_id`, `Fullname`, `Telephone`, `From_prison`, `To_prison`, `Dateoftransfer`) VALUES
(2122, 'JOHN DIMAS', '08141557353', 'JOS', 'TARABA', '12-12-2018');

-- --------------------------------------------------------

--
-- Table structure for table `prisonwarder_tbl`
--

CREATE TABLE `prisonwarder_tbl` (
  `Station_id` int(11) NOT NULL,
  `Station_Name` varchar(500) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prisonwarder_tbl`
--

INSERT INTO `prisonwarder_tbl` (`Station_id`, `Station_Name`, `UserName`, `Password`) VALUES
(1, 'Bukuru prison', 'warder', '2222');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL DEFAULT '0',
  `File_num` varchar(8) NOT NULL,
  `Full_Name` varchar(50) NOT NULL,
  `DOB` varchar(30) NOT NULL,
  `datein` varchar(12) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `state` varchar(50) NOT NULL,
  `lga` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Education` varchar(50) NOT NULL,
  `Marital` varchar(20) NOT NULL,
  `Offence` varchar(90) NOT NULL,
  `Sentence` varchar(500) NOT NULL,
  `prison` varchar(500) NOT NULL,
  `picture` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `File_num`, `Full_Name`, `DOB`, `datein`, `Address`, `state`, `lga`, `Gender`, `Education`, `Marital`, `Offence`, `Sentence`, `prison`, `picture`) VALUES
(5077, '20', 'Mark Joyce', '2018-11-07', '2018-11-07', 'GCC BOKKOS', 'Kano State', 'Bokkos', 'Male', 'Ph.D', 'Divorced', 'Killing', 'One Year', 'jos prison, BOkkos', 'IMG_20171110_141414_2.jpg'),
(427428, '5654', 'Fidelis Joseph', '2018-10-01', '2018-11-10', 'wuse', 'Ekiti State', 'Ado Ekiti', 'Male', 'education', 'Divorced', 'Dating', 'Two days', 'Mushu, B BOkkos', 'IMG_20180120_150259.jpg'),
(746929, '1010', 'MAKOPSON', '2019-04-06', '2019-04-06', 'JOS', 'FCT Abuja', 'BOKKOS', 'Male', 'B.Sc', 'Married', 'Kdnapping', 'One Month', 'Bauchi Central Prison, Gadau', 'IMG_20180405_093927.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sentence`
--

CREATE TABLE `sentence` (
  `id` int(11) NOT NULL,
  `sentence` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sentence`
--

INSERT INTO `sentence` (`id`, `sentence`) VALUES
(1, '1-3 Months'),
(2, '3-6 Months'),
(3, '1-2 years'),
(4, '3 years'),
(5, '4 years'),
(6, '5 years'),
(7, '7 years'),
(8, '10 years & above'),
(9, 'Life imprisonment');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'Abia state'),
(2, 'Adamawa state'),
(3, 'uyo state'),
(4, 'Anambra state'),
(5, 'Bauchi state'),
(6, 'Bayelsa state'),
(7, 'Plateau state'),
(8, 'Gombe'),
(9, 'Kogi state'),
(10, 'Nassarawa state'),
(11, 'Benue State'),
(12, 'kebbi state'),
(13, 'kwara sate'),
(14, 'Kaduna state'),
(15, 'Sokoto state'),
(16, 'cross-river state'),
(17, 'Rivers state'),
(18, 'Imo sate'),
(19, 'Ekiti state'),
(20, 'Lagos state'),
(21, 'Osun state'),
(22, 'Ogun state'),
(23, 'Ondo state'),
(24, 'Borno state'),
(25, 'Yobe state'),
(26, 'Kano State'),
(27, 'Jagawa'),
(28, 'Taraba state'),
(29, 'Katsina state'),
(30, 'Zamfara state'),
(31, 'FCT Abuja'),
(32, 'Enugu state');

-- --------------------------------------------------------

--
-- Table structure for table `Transfer_inmate`
--

CREATE TABLE `Transfer_inmate` (
  `National_id` int(11) NOT NULL,
  `File_num` varchar(50) NOT NULL,
  `Full_Name` varchar(50) NOT NULL,
  `From_prison` varchar(500) NOT NULL,
  `To_prison` varchar(500) NOT NULL,
  `Dateoftransfer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Transfer_inmate`
--

INSERT INTO `Transfer_inmate` (`National_id`, `File_num`, `Full_Name`, `From_prison`, `To_prison`, `Dateoftransfer`) VALUES
(427428, '5654', 'Fidelis Matthew', 'Bauchi Central Prison, B Gadau', 'Bauchi Central Prison', '02/11/12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(11) NOT NULL,
  `Station_Name` varchar(50) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `Station_Name`, `UserName`, `Password`) VALUES
(1, '', 'user', '12345'),
(3, 'Kaduna', 'User', '77777'),
(4, 'Kaduna', 'User', '99999'),
(7, 'PLASU', 'Yes', '1'),
(8, 'B/LADI ', 'Dung', 'Dung11');

-- --------------------------------------------------------

--
-- Table structure for table `visit`
--

CREATE TABLE `visit` (
  `id` int(11) NOT NULL,
  `prisoner` varchar(40) NOT NULL,
  `relationship` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visit`
--

INSERT INTO `visit` (`id`, `prisoner`, `relationship`) VALUES
(11, 'Chief Joyce Bit.,Daniel', 'Parent,Relative'),
(21, 'Chief Ephraim', 'Wife,Daughter'),
(22, 'Mark', 'Relative'),
(25, 'DIMAS', 'Parent,Relative'),
(221, 'Fidelis Matthew,Mark Joyce', 'Parent,Husband');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `dateofvisit` varchar(25) NOT NULL,
  `timein` varchar(40) NOT NULL,
  `timeout` varchar(30) NOT NULL,
  `telephone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `fullname`, `address`, `dateofvisit`, `timein`, `timeout`, `telephone`) VALUES
(11, 'Mark Ray', 'Mushu', '2018-11-09', '14:00:00.000000', '01:00:00.000000', '09071958207'),
(21, 'Mark John', 'Plasu Bokkos', '2018-11-08', '17:02:00.000000', '18:00:00.000000', '08164612561'),
(22, 'Dennis', 'Jos South', '2018-11-09', '10:52:00.000000', '12:00:00.000000', '08032598306'),
(25, 'DAN', 'Jos', '2018-11-09', '10:52:00.000000', '12:00:00.000000', '08141557353'),
(221, 'mami', 'Mushu, Bokkos', '2019-02-25', '10:51', '12:00', '08038380235'),
(2214, 'JOHN DIMAS', 'PLASU', '2019-04-06', '11:11', '13:02', '08141557353');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`Admin_Id`);

--
-- Indexes for table `capacity`
--
ALTER TABLE `capacity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discharge`
--
ALTER TABLE `discharge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newprison`
--
ALTER TABLE `newprison`
  ADD PRIMARY KEY (`pno`);

--
-- Indexes for table `officerdetails`
--
ALTER TABLE `officerdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `visit`
--
ALTER TABLE `visit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `capacity`
--
ALTER TABLE `capacity`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `court`
--
ALTER TABLE `court`
  ADD CONSTRAINT `court_ibfk_1` FOREIGN KEY (`id`) REFERENCES `registration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visit`
--
ALTER TABLE `visit`
  ADD CONSTRAINT `visit_ibfk_1` FOREIGN KEY (`id`) REFERENCES `visitor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
