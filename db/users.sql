-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 08:34 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`) VALUES
(1, '', 'Jelani Curtis', ''),
(2, '', 'Piper Larsen', ''),
(3, '', 'Jane Hendrix', ''),
(4, '', 'Dieter Ruiz', ''),
(5, '', 'Dora Barry', ''),
(6, '', 'Ria Trujillo', ''),
(7, '', 'Kaitlin Cox', ''),
(8, '', 'Oleg Shelton', ''),
(9, '', 'Alexandra Mullen', ''),
(10, '', 'Hakeem Yang', ''),
(11, '', 'Claudia Gilmore', ''),
(12, '', 'Molly Ruiz', ''),
(13, '', 'Abigail Lambert', ''),
(14, '', 'Branden Solis', ''),
(15, '', 'Gannon Dean', ''),
(16, '', 'Jescie Munoz', ''),
(17, '', 'Sonia Russell', ''),
(18, '', 'Oliver Murphy', ''),
(19, '', 'Alfonso Caldwell', ''),
(20, '', 'Summer Kinney', ''),
(21, '', 'Joseph Curry', ''),
(22, '', 'Odysseus Berry', ''),
(23, '', 'Macaulay Carter', ''),
(24, '', 'Jared Parks', ''),
(25, '', 'Jillian Patrick', ''),
(26, '', 'Breanna Pratt', ''),
(27, '', 'Josephine Wooten', ''),
(28, '', 'Grady Armstrong', ''),
(29, '', 'Halla Copeland', ''),
(30, '', 'Arthur Wood', ''),
(31, '', 'Alexander White', ''),
(32, '', 'Lance Wong', ''),
(33, '', 'Brendan Massey', ''),
(34, '', 'Jerry Raymond', ''),
(35, '', 'Ava Rivas', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
