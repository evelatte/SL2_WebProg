-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 03:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasikeuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nik` varchar(16) NOT NULL,
  `namadepan` varchar(20) NOT NULL,
  `namatengah` varchar(20) NOT NULL,
  `namabelakang` varchar(20) NOT NULL,
  `tempatlahir` varchar(20) NOT NULL,
  `tgllahir` date NOT NULL,
  `warganegara` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `kodepos` varchar(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fotodir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nik`, `namadepan`, `namatengah`, `namabelakang`, `tempatlahir`, `tgllahir`, `warganegara`, `email`, `nohp`, `alamat`, `kodepos`, `username`, `password`, `fotodir`) VALUES
('1111111111111111', 'Eveline', 'Line', 'Lucky', 'Medan', '2003-05-14', 'Indonesia', 'linlucky196@gmail.com', '081211233455', 'Medan', '23456', 'Eve', '12345678', 'image/bee-on-daisy.jpg'),
('1234567890123456', 'Line', 'Lucky', 'Eve', 'Surabaya', '2000-02-16', 'Indonesia', 'a@gmail.com', '081388900588', 'Bandung', '12345', 'Lucky', '09876543', 'image/yoda.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
