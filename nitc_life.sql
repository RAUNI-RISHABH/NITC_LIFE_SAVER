-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2017 at 08:34 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nitc_life`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `donorid` int(11) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `middlename` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `age` int(2) NOT NULL,
  `mobile` int(10) NOT NULL,
  `bloodtype` varchar(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `c_password` varchar(15) NOT NULL,
  `security` varchar(100) NOT NULL,
  `answer` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`donorid`, `firstname`, `middlename`, `lastname`, `age`, `mobile`, `bloodtype`, `email`, `address`, `password`, `c_password`, `security`, `answer`) VALUES
(6, 'gaurav', 'kumar', 'sharma', 21, 2147483647, 'B-', 'sgaurav@gmail.com', 'piska more', 'mishraji', 'mishraji', 'What is the name of your favorite childhood friend?', 'nilesh'),
(7, 'om', 'prakash', 'kumar', 22, 2147483647, 'A+', 'oprakash337@gmail.com', 'radha nagar', 'brother', 'brother', 'What street did you live on in third grade?', 'koi nhi'),
(8, 'navin', '', 'kumar', 21, 1231231231, 'A+', 'navin@gmail.com', 'navin house ', '9905023750', '9905023750', 'What is the first primary school?', 'ghantaa'),
(9, 'suraj', 'kumar', 'sah', 19, 1234567890, 'A+', 'suraj@gmail.com', 'kamre', 'asdfgh', 'asdfgh', 'What is the middle name of your oldest child?', 'acha'),
(10, 'rohit', 'kumar', 'singh', 23, 123987, 'A+', 'roh@gmail.com', 'nayatoli', 'qwerty', 'qwerty', 'What was the last name of your third grade teacher?', 'yesboss'),
(11, 'kohli', '', 'virat', 22, 1231234561, 'A+', 'asd@gmail.com', 'asfff', 'sahakash', 'sahakash', 'What street did you live on in third grade?', 'asdd'),
(12, 'rauniyar', '', 'prakash', 54, 45631278, 'A+', 'rauni@gmail.com', 'metro', 'pandra', 'pandra', 'What was your childhood nickname?', 'vicky'),
(13, 'nandu', '', 'agarwal', 21, 2147483647, 'A+', 'nandu@gmail.com', 'stanna', 'qwerty', 'qwerty', 'What street did you live on in third grade?', 'kali'),
(14, 'punit', '', 'minz', 23, 895672341, 'A+', 'punu@gmail.com', 'kanke', 'piska', 'piska', 'What was the last name of your third grade teacher?', 'john');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`donorid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `donorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
