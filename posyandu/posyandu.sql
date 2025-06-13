-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2025 at 06:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(9, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `agenda_balita`
--

CREATE TABLE `agenda_balita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agenda_balita`
--

INSERT INTO `agenda_balita` (`id`, `judul`, `tanggal`, `waktu`, `lokasi`, `deskripsi`) VALUES
(1, 'Pemeriksaan Kesehatan Bulanan', '2025-05-01', '08.00 - 10.00 WIB', 'Posyandu Melati RW 03', 'Pemeriksaan rutin balita oleh bidan puskesmas termasuk penimbangan berat badan, pengukuran tinggi, dan pengecekan kondisi umum anak.'),
(2, 'Imunisasi DPT & Polio', '2025-05-07', '09:00 - 11:00 WIB', 'Balai Warga RW 05', 'Pemberian imunisasi DPT dan Polio untuk balita usia 2-4 bulan sesuai jadwal dari Dinas Kesehatan.'),
(3, 'Pemberian Makanan Tambahan (PMT)', '2025-06-01', '08:30 - 10:00 WIB', 'Posyandu Kenanga RW 07', 'Pembagian makanan sehat seperti bubur kacang hijau dan telur rebus untuk balita setelah kegiatan posyandu.'),
(4, 'Penyuluhan Gizi untuk Ibu Balita', '2025-06-22', '10:00 - 11:30 WIB', ' Aula Kelurahan Sukamaju', 'Edukasi mengenai gizi seimbang, ASI eksklusif, MPASI, dan pentingnya konsumsi buah dan sayur untuk pertumbuhan anak.');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal_kirim` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `email`, `telepon`, `pesan`, `tanggal_kirim`) VALUES
(1, 'nayzila', '087851287741', 'nayzila@gmail.com', 'kapan jadwal imunisasi ', '2025-06-10 12:45:15'),
(2, 'ahmad ', '089876543123', 'ahmadyahabibi@gmail.', 'kapan buka bozzzz', '2025-06-10 12:57:38'),
(3, 'nayzila ', '087851287741', 'nayzila@gmail.com', 'kapan jadwal imunisasi ', '2025-06-11 03:07:14'),
(5, 'andre', '087612345667', 'andre123@gmail.com', 'halo bozzzzzzzzzzzz', '2025-06-11 03:59:24'),
(6, 'nayzila ', '089876543123', 'nayzila@gmail.com', 'haloooooo', '2025-06-12 11:44:02'),
(7, 'zilll', '087851287741', 'nayzila@gmail.com', 'loro ati ', '2025-06-12 12:07:20'),
(8, 'zilll', '087851287741', 'nayzila@gmail.com', 'loro ati ', '2025-06-12 12:44:51'),
(9, 'zilll', '087851287741', 'nayzila@gmail.com', 'loro ati ', '2025-06-12 12:44:54'),
(10, 'zilll', '087851287741', 'nayzila@gmail.com', 'loro ati ', '2025-06-12 12:45:01'),
(13, 'hrfhgf', '0854347', 'ahmadyahabibi@gmail.', 'vcvcgf', '2025-06-12 15:08:33'),
(14, 'nayzila ', '0987', 'ahmadyahabibi@gmail.', 'jknjj', '2025-06-13 15:52:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agenda_balita`
--
ALTER TABLE `agenda_balita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `agenda_balita`
--
ALTER TABLE `agenda_balita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
