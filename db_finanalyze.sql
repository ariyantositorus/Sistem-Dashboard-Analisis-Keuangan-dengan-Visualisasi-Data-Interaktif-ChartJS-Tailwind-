-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 18, 2025 at 10:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_finanalyze`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` enum('pendapatan','pengeluaran') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `jenis`) VALUES
(1, 'Penjualan', 'pendapatan'),
(2, 'Jasa', 'pendapatan'),
(3, 'Lainnya', 'pendapatan'),
(4, 'Pembelian Stok (HPP)', 'pengeluaran'),
(5, 'Gaji & Tenaga Kerja', 'pengeluaran'),
(6, 'Marketing & Iklan', 'pengeluaran'),
(7, 'Operasional & Platform', 'pengeluaran'),
(8, 'Lainnya', 'pengeluaran');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `sub_kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `tanggal`, `deskripsi`, `jumlah`, `kategori`, `sub_kategori`) VALUES
(2, '2025-09-02', 'Beli 100 kaos polos dari supplier', -5000000, 'Pengeluaran', 'Pembelian Stok (HPP)'),
(3, '2025-09-05', 'Gaji admin packing & sosmed', -2500000, 'Pengeluaran', 'Gaji & Tenaga Kerja'),
(4, '2025-09-10', 'Top-up Iklan Facebook/IG', -750000, 'Pengeluaran', 'Marketing & Iklan'),
(5, '2025-09-15', 'Penjualan 20 kaos (Tokopedia)', 3000000, 'Pendapatan', 'Penjualan'),
(6, '2025-09-20', 'Beli kardus, lakban, & stiker', -450000, 'Pengeluaran', 'Operasional & Platform'),
(7, '2025-11-01', 'Bayar tagihan WiFi & Listrik', -500000, 'Pengeluaran', 'Operasional & Platform'),
(8, '2025-10-05', 'Gaji admin packing & sosmed', -2500000, 'Pengeluaran', 'Gaji & Tenaga Kerja'),
(9, '2025-10-10', 'Beli 100 kemeja flanel (Stok baru)', -8000000, 'Pengeluaran', 'Pembelian Stok (HPP)'),
(10, '2025-10-12', 'Bayar endorse selebgram A', -1500000, 'Pengeluaran', 'Marketing & Iklan'),
(11, '2025-10-15', 'Jasa sablon custom 1 lusin', 750000, 'Pendapatan', 'Jasa'),
(12, '2025-10-28', 'Penjualan 40 kaos & 10 kemeja', 10000000, 'Pendapatan', 'Penjualan'),
(13, '2025-11-05', 'Gaji admin packing & sosmed', -2500000, 'Pengeluaran', 'Gaji & Tenaga Kerja'),
(14, '2025-11-11', 'Penjualan Flash Sale 11.11 (Shopee)', 18000000, 'Pendapatan', 'Penjualan'),
(15, '2025-11-12', 'Biaya admin & layanan Shopee 11.11', -1250000, 'Pengeluaran', 'Operasional & Platform'),
(16, '2025-11-15', 'Biaya admin transfer bank', -6500, 'Pengeluaran', 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`) VALUES
(2, 'admin', '$2y$10$8hYSAOF4rbUZGKvC/oX4qOQK/A46FGirQZ71Y342ZsptlPzyu9KWC', 'Admin FinAnalyze');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
