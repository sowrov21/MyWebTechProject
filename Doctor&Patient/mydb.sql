-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 07:10 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood` varchar(10) DEFAULT NULL,
  `dob` varchar(20) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `name`, `gender`, `blood`, `dob`, `password`, `phone`, `email`, `address`, `image`) VALUES
('nazmul1', 'hasan md nazmul ', 'Male', 'B+', '1998-01-01 ', '12345', '1234567 ', 'nazmul@gmail.com', 'comilla ', 'uploaded/'),
('sowrov', 'Minhazur', 'Male', 'A+', '1998-01-01 ', '12121', '23243243', 'minhaz@gmail.com', 'dhaka', NULL),
('zami22', 'al zami', 'Male', 'A-', '1999-04-28', '258', '123456', 'a@a.com', 'rajshahi', 'Profile_Picture/20200131_141405.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `p_username` varchar(100) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `slot` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`p_username`, `d_name`, `category`, `date`, `slot`) VALUES
('patient1', 'pran gopal', 'Surgery', '2020-05-22', '10AM-12PM'),
('patient1', 'Tamim Iqbal', 'Diabetologist', '2020-05-13', '4PM-6PM'),
('sadman12', 'Sakib AL Hasan', 'Medicine', '2020-05-27', '12PM-2PM'),
('patient1', 'MUshfiqur Rahman', 'Medicine', '2020-05-30', '4PM-6PM'),
('patient1', 'Sakib AL Hasan', 'Medicine', '2020-05-03', '12PM-2PM');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `degree` varchar(200) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `regno` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` int(11) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `blood` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`username`, `name`, `dept`, `degree`, `speciality`, `designation`, `regno`, `gender`, `email`, `phone`, `dob`, `blood`, `password`, `address`, `image`) VALUES
('pran21', 'pran gopal    ', 'surgery', 'MBBS    ', 'Y', 'N', ' A-23748784   ', 'Male', 'example@mail.com', 1866106809, '1990-02-09    ', 'AB+', '12345', 'chandpur', '../admin/doctor_crude/Profile_Picture/captain.jpg'),
('Robi200', 'robiul islam', 'Medicine', 'MBBS', 'Medicine', 'professor', '1234554f', 'male', 'a@a.com', 1245, '2020-03-03', 'A+', '12345', '12345', ''),
('rrrgrrr', 'rrrr    ', 'Cardiology', 'rrr    ', 'Surgery', 'Professor', 'r333    ', 'Male', 'e@a.org', 12345, '2020-05-22    ', 'AB+', '12345', 'dddd', 'Profile_Picture/485165_PR_130_SI_24_06_14_255-m-1.png'),
('zami22', 'ngbvhDFYU', 'A', 'ddd', 'Surgery', 'Professor', 'ddd', 'Male', 'd@q.com', 12345, '2020-05-23', 'AB+', '12345', 'dffff', 'Profile_Picture/IMG_20200209_101313.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `profession` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `profession`) VALUES
('mehedi1', '12121', 'patient'),
('mushfiq15', '123456', 'doctor'),
('nazmul1', '12345', 'admin'),
('patient1', '12345', 'patient'),
('pran21', '12345', 'doctor'),
('sadman12', '12345', 'patient'),
('sakib75', '147258', 'doctor'),
('sowrov', '12121', 'admin'),
('tamim29', '123456', 'doctor'),
('zami22', '258', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `username` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`username`, `name`, `gender`, `dob`, `blood`, `email`, `phone`, `password`, `address`, `image`, `status`) VALUES
('mehedi1', 'Mehedi Hasan', 'Male', '1995-8-5', 'B+', 'mehedi@gmail.com', '1234567 ', '12121', 'Rajshahi', '', 'inactive'),
('patient1', 'sakib', 'male', '2000-02-20', 'b+', 'example@mail.com', '12345678', '12345', 'sylhet', '', 'active'),
('sadman12', 'Sadman Sakib', 'Male', '1999-1-1', 'O+', 'sadman@gmail.com', '1234567 ', '12345', 'Rangpur', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `p_name` varchar(100) NOT NULL,
  `d_name` varchar(100) NOT NULL,
  `medicine` varchar(100) NOT NULL,
  `dosages` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `instruction` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`p_name`, `d_name`, `medicine`, `dosages`, `unit`, `instruction`, `day`, `date`) VALUES
('patient1 ', 'dr. sazzad', 'dd', '1+1+1', '2pc', 'Before Food', '123', '2020-05-05'),
('patient1 ', 'dr. sazzad', 'dd', '1+1+1', '2pc', 'Before Food', '123', '2020-05-05'),
('patient1 ', 'dr. sazzad', 'dd', '1+1+1', '2pc', 'Before Food', '123', '2020-05-05'),
('patient1 ', 'dr. sazzad', 'civit', '1+0+1', '1pc', 'Before Food', '34', '2020-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `d_username` varchar(100) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `chember` varchar(500) NOT NULL,
  `slot` varchar(100) NOT NULL,
  `room` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`d_username`, `d_name`, `chember`, `slot`, `room`) VALUES
('pran21 ', 'pran gopal', 'bogra', '10AM-12PM,8PM-10PM', 12),
('tamim29 ', 'Tamim Iqbal', 'Chittagong', '12PM-2PM,4PM-6PM', 123),
('sakib75 ', 'Sakib AL Hasan', 'Magura', '12PM-2PM,8PM-10PM', 1212),
('mushfiq15 ', 'Mushfiqur Rahman', 'bogra', '4PM-6PM,6PM-8PM', 22),
('tamim29 ', 'Tamim Iqbal', 'dhaka', '6PM-8PM,8PM-10PM', 123);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `username` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`username`, `name`, `gender`, `dob`, `blood`, `email`, `phone`, `password`, `address`, `image`) VALUES
('staff1', 'solim sarkar', 'male', '2006-04-03', 'a-', 'email@m.com', '0123456789', '12345', 'rangpur', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
