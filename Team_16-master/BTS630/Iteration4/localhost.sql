-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 01, 2019 at 08:07 PM
-- Server version: 5.6.34-log
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
-- Database: `cellmate`
--
CREATE DATABASE IF NOT EXISTS `cellmate` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cellmate`;

-- --------------------------------------------------------

--
-- Table structure for table `dailysale`
--

CREATE TABLE `dailysale` (
  `id` int(11) NOT NULL,
  `dateEntered` datetime DEFAULT CURRENT_TIMESTAMP,
  `Bill100` varchar(11) NOT NULL,
  `Bill50` varchar(11) NOT NULL,
  `Bill20` varchar(11) NOT NULL,
  `Bill10` varchar(11) NOT NULL,
  `Bill5` varchar(11) NOT NULL,
  `toonie` varchar(11) NOT NULL,
  `loonie` varchar(11) NOT NULL,
  `quarters` varchar(11) NOT NULL,
  `dimes` varchar(11) NOT NULL,
  `nickles` varchar(11) NOT NULL,
  `totalDebit` varchar(11) NOT NULL,
  `pettyCashFWD` varchar(11) NOT NULL,
  `pettyCash` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dailysale`
--

INSERT INTO `dailysale` (`id`, `dateEntered`, `Bill100`, `Bill50`, `Bill20`, `Bill10`, `Bill5`, `toonie`, `loonie`, `quarters`, `dimes`, `nickles`, `totalDebit`, `pettyCashFWD`, `pettyCash`) VALUES
(1, '2018-10-17 00:00:00', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', ''),
(2, '2018-10-18 09:42:17', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2.0', '0', ''),
(3, '2018-10-18 11:56:30', '5', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1.00', '0', ''),
(4, '2018-10-18 11:56:47', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3.00', '0', ''),
(5, '2018-10-18 11:57:38', '1', '2', '3', '4', '3', '2', '1', '2', '3', '4', '3.00', '0', ''),
(6, '2018-10-18 12:12:33', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7.00', '0', ''),
(7, '2018-10-18 13:49:14', '1', '2', '3', '1', '5', '6', '1', '3', '6', '1', '45.00', '0', ''),
(8, '2018-11-07 19:30:17', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1.00', '0', ''),
(9, '2018-11-07 19:32:10', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2.00', '0', ''),
(10, '2018-11-07 19:41:35', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3.00', '0', ''),
(11, '2018-11-07 19:42:10', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4.00', '0', ''),
(12, '2018-11-07 21:32:20', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5.00', '50', ''),
(13, '2018-11-07 21:32:36', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6.00', '60', ''),
(14, '2018-11-07 21:37:10', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6.00', '1130.4', ''),
(16, '2018-11-15 09:48:53', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4.00', '753.6', '1130.4'),
(17, '2018-11-15 10:24:39', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7.00', '1318.8', '753.6'),
(18, '2018-11-15 11:23:32', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3.00', '1507.2', '1318.8'),
(19, '2018-11-15 13:50:11', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2.0', '376.8', '1507.2'),
(20, '2018-11-15 13:56:09', '2', '2', '3', '2', '2', '2', '2', '2', '2', '2', '2.00', '396.8', '376.8'),
(21, '2018-12-05 14:48:04', '1', '2', '2', '0.00', '1', '2', '2', '2', '2', '2', '2.00', '396.8', '396.8'),
(22, '2019-01-28 22:18:47', '1', '2', '2', '0.00', '1', '2', '2', '2', '2', '2', '2.00', '251.8', '396.8'),
(23, '2019-01-28 22:25:30', '0.00', '2', '2', '0.00', '1', '2', '2', '2', '2', '2', '0.00', '251.8', '251.8'),
(24, '2019-01-29 22:53:05', '1', '2', '2', '0.00', '1', '2', '2', '2', '2', '2', '0.00', '251.8', '251.8'),
(25, '2019-01-29 22:55:20', '2', '2', '2', '0.00', '1', '2', '2', '2', '2', '2', '0.00', '351.8', '251.8'),
(26, '2019-01-29 23:02:42', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3.00', '351.8', '351.8'),
(27, '2019-01-30 00:23:50', '2', '2', '2', '0.00', '1', '2', '2', '2', '2', '2', '0', '351.8', '351.8'),
(28, '2019-01-30 00:31:36', '2', '2', '2', '0.00', '1', '2', '2', '2', '2', '2', '0', '351.8', '351.8'),
(29, '2019-01-30 00:33:13', '2', '2', '2', '0.00', '1', '2', '2', '2', '2', '2', '0', '351.8', '351.8'),
(35, '2019-01-30 16:06:06', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3.00', '565.2', '351.8'),
(37, '2019-01-30 16:08:13', '4', '3', '3', '3', '3', '3', '3', '3', '3', '3', '5.00', '665.2', '565.2'),
(38, '2019-01-30 16:09:09', '4', '4', '3', '3', '3', '3', '3', '3', '3', '3', '0.00', '715.2', '665.2'),
(39, '2019-01-30 17:14:26', '4', '4', '3', '3', '3', '3', '3', '3', '3', '3', '0', '715.2', '715.2'),
(40, '2019-01-31 00:56:40', '4', '4', '4', '3', '3', '3', '3', '3', '3', '3', '0.00', '735.2', '715.2'),
(42, '2019-01-31 01:29:47', '4', '4', '4', '3', '3', '3', '3', '3', '3', '3', '0', '735.2', '735.2'),
(43, '2019-01-31 12:43:14', '4', '4', '4', '2', '3', '3', '3', '3', '3', '3', '0.00', '725.2', '735.2'),
(44, '2019-01-31 23:57:33', '4', '4', '4', '2', '3', '3', '3', '3', '3', '3', '0', '725.2', '725.2'),
(49, '2019-02-20 18:22:29', '4', '4', '4', '2', '3', '3', '3', '3', '3', '3', '0', '725.2', '725.2'),
(50, '2019-02-20 18:36:50', '5', '4', '4', '2', '3', '3', '3', '3', '3', '3', '3.00', '825.2', '725.2'),
(51, '2019-02-21 12:48:31', '6', '4', '4', '2', '3', '3', '3', '3', '3', '3', '10.00', '925.2', '825.2'),
(52, '2019-02-21 12:49:51', '6', '4', '4', '2', '3', '3', '3', '3', '3', '3', '0', '925.2', '925.2'),
(53, '2019-03-28 08:45:19', '6', '6', '4', '2', '3', '3', '3', '3', '3', '3', '100.00', '1025.2', '925.2'),
(54, '2019-03-28 08:47:11', '6', '6', '6', '3', '3', '3', '3', '3', '3', '3', '300.00', '1075.2', '1025.2'),
(55, '2019-03-28 08:49:40', '7', '7', '7', '3', '3', '3', '3', '3', '3', '3', '450.00', '1245.2', '1075.2'),
(56, '2019-03-28 08:50:18', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '100.00', '1318.8', '1245.2'),
(57, '2019-03-28 08:51:38', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '0.00', '1507.2', '1318.8'),
(58, '2019-03-28 08:52:36', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '0', '1507.2', '1507.2'),
(59, '2019-03-28 12:42:11', '9', '8', '8', '8', '8', '8', '8', '8', '8', '8', '200.00', '1607.2', '1507.2'),
(60, '2019-03-31 20:09:11', '9', '8', '8', '10', '8', '8', '8', '8', '8', '8', '0.00', '1627.2', '1607.2');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `dateEntered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `expenseAmount` varchar(11) NOT NULL,
  `expenseComment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `dateEntered`, `expenseAmount`, `expenseComment`) VALUES
(1, '2018-11-15 13:16:47', '10.00', 'test:?'),
(2, '2018-11-15 13:27:04', '11.00', ''),
(3, '2018-11-15 13:27:49', '3.00', ''),
(4, '2018-11-15 13:29:14', 'xgntntm', ''),
(5, '2018-11-15 13:30:28', '44.00', 'rbrntdnytd'),
(6, '2018-12-04 18:30:27', '10.00', 'Insert expense comment test 2'),
(7, '2018-12-04 19:24:01', '5.00', 'test 2 add second in same day'),
(9, '2018-12-05 14:58:33', '20.00', 'strip deleted test 2 '),
(10, '2018-12-05 15:00:11', '5.00', 'adding value after '),
(11, '2018-12-06 13:51:38', '10.00', 'ice cream'),
(12, '2019-01-28 22:27:23', '10.00', 'find error - will increase sale by 10 dollars'),
(13, '2019-01-28 22:29:05', '5.00', 'add 5 - input worked now testing expense addition with value set'),
(17, '2019-01-31 12:45:13', '10.00', 'barb took the money');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `role`) VALUES
(2, 'shathu', '$2y$10$rpFrICnivstZkmICCyAaDeB51HsaZFy4ARPjD0/9OCktVfanHUemq', '2018-09-20 18:07:18', 'Manager'),
(3, 'ahmed', '$2y$10$r8u.htNVvSHKTPHdKdjSf.ucHn1zBJiFox4Vhzwq6x31t3tMEwi1m', '2018-09-20 18:09:36', 'Manager'),
(4, 'barb', '$2y$10$iq5fR6XMaJPgdx3FGEq2RuLwjVtAiFmMnGrlqiL7SqAttmfLxfltK', '2018-09-25 19:37:58', 'Manager'),
(5, 'john', '$2y$10$cVYAkV2NwIZjgwpzkg19X.Vp0NGORgz/5EJhwvm5GcSQFNVb1P5Zi', '2018-09-27 13:44:05', 'Employee'),
(6, 'mary', '$2y$10$d0YgtDwjJvWuB.UGSigqfeJP5t822KOllk1JceDrXcQ765xz4dury', '2018-09-27 13:45:52', 'Employee'),
(24, 'Paul', '$2y$10$s99hL4Z6ib61MDa1XVY2xu3toUkFi3JJJtpyYZSD1cSq9c9e8Ttz6', '2018-10-18 13:44:59', 'Employee'),
(25, 'Palenik', '$2y$10$a3FdlaSR30eCDIMBgv30yuBSoD5UtQN34r/0IDRWfuNu4fwYnqYgW', '2018-10-18 13:50:35', 'Manager'),
(26, 'message', '$2y$10$1KGOCFg.AdJAzbREdya0HeIM1vhLeZPwpfaaxL8EURPj8esuaUzW6', '2018-11-07 19:34:44', 'Employee'),
(27, 'message2', '$2y$10$Rugf49o.UaXo4pUcHxjXYuM8iqCVBJZDhtxpOEf3Hga9QRpDAyfKC', '2018-11-07 19:39:46', 'Employee'),
(28, 'Asif', '$2y$10$dY95raZhXn/7omjl9LxvdOQnnVwY0ThzfOMOuSkdLILL2AKtxDcOS', '2018-11-16 11:58:19', 'Owner');

-- --------------------------------------------------------

--
-- Table structure for table `wage`
--

CREATE TABLE `wage` (
  `id` int(11) NOT NULL,
  `dateEntered` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `wageAmount` varchar(11) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `wageComment` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wage`
--

INSERT INTO `wage` (`id`, `dateEntered`, `wageAmount`, `wageComment`) VALUES
(2, '2018-12-05 17:20:50', '110.00', '100 new table struct'),
(3, '2018-12-06 13:58:13', '5.00', 'extra pay'),
(4, '2019-01-28 22:30:32', '100.00', 'hundred for salary reducing hundred bill denomination from 1 to 0 '),
(6, '2019-01-31 12:46:59', '100.00', 'ahmed pay');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dailysale`
--
ALTER TABLE `dailysale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `wage`
--
ALTER TABLE `wage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dailysale`
--
ALTER TABLE `dailysale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `wage`
--
ALTER TABLE `wage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
