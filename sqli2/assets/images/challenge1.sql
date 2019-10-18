-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2019 at 06:01 AM
-- Server version: 10.1.41-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.22-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `challenge1`
--

-- --------------------------------------------------------

--
-- Table structure for table `chall2_cartoon`
--

CREATE TABLE `chall2_cartoon` (
  `id` int(11) NOT NULL,
  `id_categories` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chall2_cartoon`
--

INSERT INTO `chall2_cartoon` (`id`, `id_categories`, `name`, `link`) VALUES
(1, 1, 'Naruto', 'assets/images/naruto.png'),
(2, 1, 'Itachi', 'assets/images/itachi.png'),
(3, 1, 'Hinata', 'assets/images/hinata.png'),
(4, 2, 'Kirigaya Kazuto', 'assets/images/kirito.png'),
(5, 2, 'Asuna', 'assets/images/asuna.png'),
(6, 2, 'Klein', 'assets/images/klein.png');

-- --------------------------------------------------------

--
-- Table structure for table `chall2_categories`
--

CREATE TABLE `chall2_categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chall2_categories`
--

INSERT INTO `chall2_categories` (`id`, `categories`) VALUES
(1, 'naruto'),
(2, 'sword art online');

-- --------------------------------------------------------

--
-- Table structure for table `challenge1`
--

CREATE TABLE `challenge1` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `decs` text,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `challenge1`
--

INSERT INTO `challenge1` (`id`, `judul`, `decs`, `created_at`) VALUES
(1, 'uwu', 'uwu still uwu', '2019-09-22 05:42:22'),
(2, 'uwu2', 'uwu2 still uwu2', '2019-09-22 05:42:22'),
(3, 'anone anone', 'anone ne onee-chan ,', '2019-09-22 05:42:22');

-- --------------------------------------------------------

--
-- Table structure for table `solver`
--

CREATE TABLE `solver` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chall2_cartoon`
--
ALTER TABLE `chall2_cartoon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_chall2_cartoon_categories` (`id_categories`);

--
-- Indexes for table `chall2_categories`
--
ALTER TABLE `chall2_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `challenge1`
--
ALTER TABLE `challenge1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solver`
--
ALTER TABLE `solver`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chall2_cartoon`
--
ALTER TABLE `chall2_cartoon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chall2_categories`
--
ALTER TABLE `chall2_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `challenge1`
--
ALTER TABLE `challenge1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `solver`
--
ALTER TABLE `solver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chall2_cartoon`
--
ALTER TABLE `chall2_cartoon`
  ADD CONSTRAINT `fk_chall2_cartoon_categories` FOREIGN KEY (`id_categories`) REFERENCES `chall2_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
