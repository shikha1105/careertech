-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 01:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agri`
--

-- --------------------------------------------------------

--
-- Table structure for table `register1`
--

CREATE TABLE `register1` (
  `id` int(11) NOT NULL,
  `user_id` varchar(25) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register1`
--

INSERT INTO `register1` (`id`, `user_id`, `mail`, `password`) VALUES
(1, 'a', 'a@a.com', 'a'),
(3, 'as', 'abc@gmailcom', 'sada'),
(4, 'assda', 'abcasd@gmailcom', 'sada'),
(6, 'aczxcz', 'abc6@gmailcom', 'dwwrwer'),
(7, 'aczxczf', 'abc6j@gmailcom', 'dwwrwer'),
(9, 'adwa', 'rwrqwrq@ggsg.hfhf', 'rwrwerw'),
(11, 'adwad', 'rwrqwrq@ggsg.ahfhf', 'rwrwerw'),
(12, 'rwrwr', 'wrw@tertw.rege', 'wafa'),
(14, 'ffasfa', 'abc10@gmailcom', 'dada'),
(16, 'ryry', 'yrtyr@yyy.com', 'fewfwsf'),
(17, 'eqe3123', 'abc11eqwe@gmailcom', 'eqweqe'),
(18, 'shikha11', 'shikha@gmail.com', '123'),
(19, 'b', 'b@b.com', 'b'),
(20, 'c', 'c@c.com', 'c'),
(21, 'd', 'd@d.com', 'd'),
(23, 'aefewfwe', 'abc4@gmailcom', 'fweewf'),
(24, 'rajesh', 'r@r.com', 'r'),
(25, 'z', 'z@z.com', 'z'),
(31, 'asdfs', 'abcasdasd@gmailcom', 'a'),
(34, 'asasdfs', 'abc6fdsf@gmailcom', 'asasdsfsf'),
(35, 'poiuyt', 'poiu@kjh.com', 'oiu'),
(37, 'dsdada', 'abcvvvvvvvvv@gmailcom', 'asdad'),
(38, 'vbv', 'cvbc@nvbn.com', 'fldsf'),
(39, 'shikha', 'yadavshikha505@gmail.com', 'shikha'),
(40, 'amy', 'amy@gmail.com', 'amy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register1`
--
ALTER TABLE `register1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register1`
--
ALTER TABLE `register1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
