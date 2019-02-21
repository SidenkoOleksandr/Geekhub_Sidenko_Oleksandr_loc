-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2019 at 06:12 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `passwordRepeat` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `firstName` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `lastName` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `age` int(25) NOT NULL,
  `gender` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `passwordRepeat`, `firstName`, `lastName`, `age`, `gender`) VALUES
(1, 'root', 'root@mail.com', '34f32', '34f32', 'Alex', 'Vasnov', 25, 'male'),
(2, 'admin', 'admin@gmail.com', 'ryt545', 'ryt545', 'Dima', 'Fomchik', 42, 'male'),
(3, 'user', 'sall@gmail.com', '3343', '3343', 'Sally', 'Rodg', 19, 'female');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
