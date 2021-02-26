-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26.02.2021 klo 18:18
-- Palvelimen versio: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koe`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `tilaajat`
--

CREATE TABLE `tilaajat` (
  `id` int(11) NOT NULL,
  `nimi` varchar(30) NOT NULL,
  `sposti` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vedos taulusta `tilaajat`
--

INSERT INTO `tilaajat` (`id`, `nimi`, `sposti`) VALUES
(1, 'ewe', 'e@iki.fi'),
(2, 'dad', 'dsa@dws.fi'),
(3, 'dadrr', 'dswwa@dws.fi'),
(4, 'dadrr', '//dswddwa@dws.fi'),
(5, 'dadrr///', '//dsjwddwa@dws.fi'),
(6, 'dadrr///', '//dsjwddffwa@dws.fi'),
(7, 'dadrr///', '//dsjwddffwa@dws.fiddd33'),
(8, 'ddf', '//dd@ee.fo'),
(9, 'Antti', 'antti@gmail.com'),
(10, 'Antti', 'andtti@gmail.com'),
(11, 'dddd', 'das@fi.fi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tilaajat`
--
ALTER TABLE `tilaajat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tilaajat`
--
ALTER TABLE `tilaajat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
