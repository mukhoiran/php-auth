-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2019 at 07:11 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(3, 'anam', '$2y$10$jqJeSRqCYH8B6y3O8Aqd2uAfAM.wLRMPowUeBItmWbe72aHSu1Lv6', 1),
(4, 'alex', '$2y$10$RwiXKCMcxm//uAT850MrceKNydtdCjn5NRGh0YHFN7rthA1/Jj2C.', 0),
(5, 'heri', '$2y$10$C1aKTO9JeBEU3PxtOljryub6rNohATbaTt36xIfvfB3Pgx.6OMOEq', 0),
(6, 'andre', '$2y$10$VGZBWVbYyC9P65B1RrthEuQQasJwSYvkzWF9q4at3cFDrBuK07OUG', 0),
(7, 'test', '$2y$10$uOZxE26aYf57R6Qq4ZxX6utqrAwDJmXnSztttij9.hHYObc/mlhAS', 0),
(8, 'halo', '$2y$10$W5eY8P6LxB2rA/f5ug8ff.rPqwOmawH4KhPNki7w4ZQ0NKchd8d3S', 0),
(9, 'agus', '$2y$10$ayOlPQfWK570EibtS9NHju0dQk.YGtdXxfI3OqDYWmfY/dyT6NQve', 0),
(10, 'asas', '$2y$10$KHYvCzeBj5bznJous5HlVObiOIWCzfY9GdkXtus5ktyUU2EjzPPK.', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
