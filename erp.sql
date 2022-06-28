-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 01:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
  `ID` int(30) NOT NULL,
  `nama_supplier` varchar(30) DEFAULT NULL,
  `kategori_produk` varchar(30) DEFAULT NULL,
  `nama_produk` varchar(30) DEFAULT NULL,
  `panjang_produk` double DEFAULT NULL,
  `berat_produk` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`ID`, `nama_supplier`, `kategori_produk`, `nama_produk`, `panjang_produk`, `berat_produk`) VALUES
(21, 'Alen', 'Kain', 'Flanel Kuning', 500, 12),
(22, 'Chris', 'Kain', 'Flanel Merah', 300, 10),
(39, 'Brandon', 'Kain', 'Katun Merah', 300, 10);

-- --------------------------------------------------------

--
-- Table structure for table `payrolls`
--

CREATE TABLE `payrolls` (
  `ID` int(200) NOT NULL,
  `nama_supplier` varchar(200) DEFAULT NULL,
  `kategori_produk` varchar(200) DEFAULT NULL,
  `nama_produk` varchar(200) DEFAULT NULL,
  `panjang_produk` int(20) DEFAULT NULL,
  `berat_produk` int(20) DEFAULT NULL,
  `nama_penjahit` varchar(50) DEFAULT NULL,
  `bagian_jahit` varchar(50) DEFAULT NULL,
  `jumlah` int(50) DEFAULT NULL,
  `harga_per_bagian` int(50) DEFAULT NULL,
  `harga_total` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payrolls`
--

INSERT INTO `payrolls` (`ID`, `nama_supplier`, `kategori_produk`, `nama_produk`, `panjang_produk`, `berat_produk`, `nama_penjahit`, `bagian_jahit`, `jumlah`, `harga_per_bagian`, `harga_total`) VALUES
(13, 'Eric', 'Kain', 'Katun Putih', 500, 30, 'Amir Amir', 'Lengan', 50, 5000, 250000),
(18, 'Rizky', 'Kain', 'Flanel Hijau', 200, 15, 'Budi Budi', 'Kantong', 70, 1000, 70000),
(25, 'Brandon', 'Kain', 'Flanel Biru', 500, 12, 'Riri', 'Kantong', 100, 2000, 200000),
(26, 'Dimas', 'Kain', 'Katun Hitam', 400, 25, 'Yuyu', 'Kerah', 200, 2500, 500000),
(27, 'Dimas', 'Kain', 'Katun Merah', 500, 10, 'Yuyu', 'Kerah', 60, 1000, 60000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `no_hp`, `email`, `password`, `role`, `salary`, `updated_at`, `created_at`) VALUES
(13, 'Eric', 'Pranoto', '081234567899', 'eric@gmail.com', '$2y$10$h.byqHCc2r6clvtZxet9j.wVsmXEMANpdwCQl69aMCzogin/kzXFa', 'superadmin', 0, '2022-05-26', '2022-05-26'),
(15, 'Ali', 'Baba', '088888888888', 'ali@gmail.com', '$2y$10$A7ftYCrMuDcP1Hcf6GFwselsidcFXvDa2J/cHkziXNMf3d5PolFsy', 'tukang_potong', 0, '2022-06-01', '2022-06-01'),
(16, 'Baba', 'Rafi', '081111111111', 'baba@gmail.com', '$2y$10$3AF5MKU3s1D7BAIVe44RM.6puI10UzNHcEy50uIt1RPDyypo2JUPe', 'supervisor_pabrik', 0, '2022-06-01', '2022-06-01'),
(17, 'Rafi', 'Ahmad', '082222222222', 'rafi@gmail.com', '$2y$10$pauCbMJsRBmLVMOSIZmEDeVTuP6prhd7aC6jrr0Jj9cBvoXmF3eu.', 'accounting', 0, '2022-06-01', '2022-06-01'),
(24, 'Beni', 'Beno', '081234567890', 'beni@gmail.com', '$2y$10$isMbbrMF.4xbl94YJv0u1upnV/GHfRHeJ8hmrBZCDtFQCgh1bsKqG', 'tukang_potong', 3000000, '2022-06-13', '2022-06-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payrolls`
--
ALTER TABLE `payrolls`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `payrolls`
--
ALTER TABLE `payrolls`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
