-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 24, 2020 at 06:41 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Futsaloka`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `jam` time NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `jam`, `tarif`) VALUES
(1, '06:00:00', 60000),
(2, '07:00:00', 60000),
(3, '08:00:00', 60000),
(4, '09:00:00', 60000),
(5, '10:00:00', 60000),
(6, '11:00:00', 60000),
(7, '12:00:00', 60000),
(8, '13:00:00', 60000),
(9, '14:00:00', 60000),
(10, '15:00:00', 70000),
(11, '16:00:00', 75000),
(12, '17:00:00', 90000),
(13, '18:00:00', 90000),
(14, '19:00:00', 100000),
(15, '20:00:00', 100000),
(16, '21:00:00', 100000),
(17, '22:00:00', 80000),
(18, '23:00:00', 80000);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pemesan` varchar(250) NOT NULL,
  `hp_pemesan` varchar(15) NOT NULL,
  `tanggal_main` date NOT NULL,
  `tanggal_pesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_jadwal`, `id_user`, `nama_pemesan`, `hp_pemesan`, `tanggal_main`, `tanggal_pesan`) VALUES
(1, 2, 2, 'Andri Nur H', '087838698443', '2020-04-02', '2020-04-01'),
(2, 6, 3, 'Bagus', '0833323232', '2020-04-15', '2020-04-14'),
(3, 7, 1, 'Aji Saka', '0876464737', '2020-04-24', '2020-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `waktu_konfirmasi` date NOT NULL,
  `konfirmasi` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pemesanan`, `waktu_konfirmasi`, `konfirmasi`) VALUES
(1, 1, '2020-04-01', 1),
(2, 2, '2020-04-14', 1),
(3, 3, '2020-04-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `level` varchar(50) NOT NULL,
  `user_created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `name`, `password`, `email`, `level`, `user_created`) VALUES
(1, 'ajisaka', 'Aji Saka', '$2y$10$9oA3OfYKwpFAKMAEgGR1jeM/RiYnSKwq3xqf67AzWUQ3dW5TTXfWi', 'ajisaka@gmail.com', 'user', '2020-04-22'),
(2, 'andrinur13', 'Andri Nur Hidayatuloh', '$2y$10$u7IMF9110Q1SdITEA1pxo.Vz226o83juy0zhq5briNPA1yQdTfKZy', 'andribis13@gmail.com', 'user', '2020-04-22'),
(3, 'bagus31', 'Bagus', '$2y$10$OqFIUi2ojc0F1pNn9wD0l.e2MsMyOvc6eWeBrEsAn/G4SfWx40HSa', 'bagus31@gmail.com', 'user', '2020-04-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
