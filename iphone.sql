-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 03:47 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iphone`
--

-- --------------------------------------------------------

--
-- Table structure for table `beli`
--

CREATE TABLE `beli` (
  `idbeli` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `idhp` int(11) NOT NULL,
  `nobeli` varchar(11) NOT NULL,
  `tgl` date NOT NULL,
  `berapa` int(11) NOT NULL,
  `total` float NOT NULL,
  `bukti` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beli`
--

INSERT INTO `beli` (`idbeli`, `id`, `idhp`, `nobeli`, `tgl`, `berapa`, `total`, `bukti`, `status`) VALUES
(4, 2, 3, '202101181', '2021-01-18', 3, 22500000, 'images/SETRIKA UAP.webp', 'Dikonfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `datahp`
--

CREATE TABLE `datahp` (
  `idhp` int(11) NOT NULL,
  `nama` varchar(222) NOT NULL,
  `foto` text NOT NULL,
  `rilis` date NOT NULL,
  `layar` varchar(222) NOT NULL,
  `chipset` varchar(222) NOT NULL,
  `ram` varchar(222) NOT NULL,
  `internal` varchar(222) NOT NULL,
  `eksternal` varchar(222) NOT NULL,
  `kamera` varchar(222) NOT NULL,
  `baterai` varchar(222) NOT NULL,
  `harga` float NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datahp`
--

INSERT INTO `datahp` (`idhp`, `nama`, `foto`, `rilis`, `layar`, `chipset`, `ram`, `internal`, `eksternal`, `kamera`, `baterai`, `harga`, `jumlah`) VALUES
(1, 'Apple iPhone 12 Pro Max', 'images/iphone-12-60-hz-240x180.jpg', '2020-11-20', 'Super Retina XDR OLED 6,7 inci', 'Apple A14 Bionic', '6 GB', '128/256/512 GB', '-', 'Kamera Belakang 12 MP + 12 MP + 12 MP + TOF, Kamera Depan 12 MP + SL 3D', 'Non-removable Li-Ion 3687 mAh', 9000000, 10),
(2, 'Apple iPhone 12 Mini', 'images/BlackBerry-Aurora-1-240x180.jpg', '2021-01-22', 'Super Retina XDR OLED 5,4 inci', 'Apple A14 Bionic', '4 GB', '64/128/256 GB', '-', 'Kamera Belakang 12 MP + 12 MP, Kamera Depan 12 MP + SL 3D', 'Non-removable Li-Ion 2227 mAh', 7900000, 8),
(3, 'iPhone SE 2020', 'images/infinix-note-8-ram-dan-memori-internal-2-240x180.jpg', '2019-09-20', 'Retina IPS LCD 4.7 inches', 'Apple A13 Bionic (7 nm+)', '3 GB', '64/128/256 GB', '-', 'Kamera Belakang 12 MP, Kamera Depan 7 MP', 'Non-removable Li-Ion 1821 mAh', 7500000, 7),
(4, 'Apple iPhone 13 Level X', 'images/advan-g5-elite-desain-bodi-240x180.jpg', '2020-12-31', 'Super Retina XDR OLED 7,0 inci', 'Apple B24 Bionic', '12 GB', '128/256/512 GB', '-', 'Kamera Belakang 22 MP + 12 MP, Kamera Depan 12 MP + SL 3D', 'Non-removable Li-Ion 7887 mAh', 8990000, 55);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `level` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'tes', 'tes', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`idbeli`),
  ADD KEY `id` (`id`),
  ADD KEY `idhp` (`idhp`);

--
-- Indexes for table `datahp`
--
ALTER TABLE `datahp`
  ADD PRIMARY KEY (`idhp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beli`
--
ALTER TABLE `beli`
  MODIFY `idbeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `datahp`
--
ALTER TABLE `datahp`
  MODIFY `idhp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
