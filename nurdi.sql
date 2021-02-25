-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2021 at 06:48 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nurdi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`, `profil`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
(15, 'ad', '#008000', '2021-02-08 11:00:00', '2021-02-08 19:00:00'),
(16, 'qwe', '#0071c5', '2021-02-09 00:00:00', '2021-02-10 00:00:00'),
(17, 'qwe', '#FFD700', '2021-02-08 00:00:00', '2021-02-09 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `kode_mk` varchar(35) NOT NULL,
  `mk` varchar(288) NOT NULL,
  `sks` int(15) NOT NULL,
  `smt` int(15) NOT NULL,
  `kelas` varchar(55) NOT NULL,
  `jadwal` varchar(288) NOT NULL,
  `ruang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `kode_mk`, `mk`, `sks`, `smt`, `kelas`, `jadwal`, `ruang`) VALUES
(111, '203204-20D', 'Aplikasi Automasi Perkantoran', 2, 2, 'I', 'Selasa, 14:40-16:20', 'K1 - Lab Kom 5'),
(112, '203201-20S', 'English For Daily Conversation', 2, 2, 'F', 'Kamis, 07:00-08:40', 'K1 - D.0.2'),
(113, '203209-20', 'Metodologi Desain Perangkat Lunak', 3, 2, 'H', 'Selasa, 09:40-12:10', 'K1 - E.0.1'),
(114, '203208-20', 'Pemrograman Berorientasi Objek Praktik', 2, 2, 'III', 'Rabu, 14:40-18:10', 'K1 - Lab Kom 3'),
(115, '203207-20', 'Rekayasa Web Praktik', 2, 2, 'IV', 'Rabu, 10:40-14:30', 'K1 - Lab Kom 11'),
(116, '203210-20', 'Sistem Cerdas', 3, 2, 'B', 'Selasa, 07:00-09:30', 'E.3.1'),
(117, '203205-20', 'Sistem Komputer', 3, 2, 'C', 'Kamis, 12:50-15:20', 'H.31'),
(118, '203206-20', 'Rekayasa Web', 3, 2, 'H', 'Kamis, 09:40-12:10', 'K1 - F.04');

-- --------------------------------------------------------

--
-- Table structure for table `shelli_events`
--

CREATE TABLE `shelli_events` (
  `id` int(11) NOT NULL,
  `title` varchar(288) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shelli_events`
--
ALTER TABLE `shelli_events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `shelli_events`
--
ALTER TABLE `shelli_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
