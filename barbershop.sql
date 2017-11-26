-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 Agu 2017 pada 11.21
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barbershop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `id_antrian` varchar(24) NOT NULL,
  `tanggal` date NOT NULL,
  `id_barberman` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `id_rambut` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `antrian`
--

INSERT INTO `antrian` (`id_antrian`, `tanggal`, `id_barberman`, `id_paket`, `id_rambut`, `status`) VALUES
('170803001', '2017-08-03', 6, 3, 5, 2),
('170803002', '2017-08-03', 7, 6, 3, 2),
('170803003', '2017-08-03', 3, 4, 10, 2),
('170803004', '2017-08-03', 5, 8, 12, 3),
('170803005', '2017-08-03', 5, 3, 4, 2),
('170803006', '2017-08-03', 4, 2, 3, 1),
('170803007', '2017-08-03', 7, 5, 5, 3),
('170803008', '2017-08-03', 6, 6, 6, 2),
('170803009', '2017-08-03', 7, 6, 9, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barberman`
--

CREATE TABLE `barberman` (
  `id_barberman` int(11) NOT NULL,
  `nama_barber` varchar(50) NOT NULL,
  `foto_barber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barberman`
--

INSERT INTO `barberman` (`id_barberman`, `nama_barber`, `foto_barber`) VALUES
(3, 'Enceng', 'file_1501665345.jpg'),
(4, 'Ujang', 'file_1501665358.jpg'),
(5, 'Tatang', 'file_1501665380.jpg'),
(6, 'Rohman', 'file_1501665394.jpg'),
(7, 'Encus', 'file_1501665406.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `deskripsi_paket` text NOT NULL,
  `harga_paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `deskripsi_paket`, `harga_paket`) VALUES
(2, 'Cukur Normal', 'Rambut hanya dicukur sesuai model', 2000),
(3, 'Cuci rambut', 'Rambut dicuci setelah dicukur', 10000),
(4, 'Hairstyling', 'Rambut diberi pomade setelah dicukur', 10000),
(5, 'Pijat kepala', 'Melakukan pijat relaksasi pada kepala', 12000),
(6, 'Hairtonic', 'Memberi vitamin pada rambut', 15000),
(7, 'Colouring', 'Semir rambut', 10000),
(8, 'Hair Tattoo', 'Memberi ukiran pada rambut', 25000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rambut`
--

CREATE TABLE `rambut` (
  `id_rambut` int(11) NOT NULL,
  `nama_rambut` varchar(50) NOT NULL,
  `deskripsi_rambut` text NOT NULL,
  `harga_rambut` int(11) NOT NULL,
  `gambar_rambut` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rambut`
--

INSERT INTO `rambut` (`id_rambut`, `nama_rambut`, `deskripsi_rambut`, `harga_rambut`, `gambar_rambut`) VALUES
(2, 'Man Bun', 'Gaya rambut Man Bun', 15000, 'file_1501663006.jpg'),
(3, 'Mohawk', 'Gaya rambut Mohawk', 15000, 'file_1501663151.jpg'),
(4, 'Pompaodu', 'Gaya rambut Pompadou', 15000, 'file_1501663193.jpg'),
(5, 'Slicked Back', 'Gaya rambut Slicked Back', 15000, 'file_1501663248.jpg'),
(6, 'Fringe', 'Gaya rambut Fringe', 15000, 'file_1501663272.jpg'),
(7, 'Under Cut', 'Gaya rambut Under Cut', 15000, 'file_1501663321.png'),
(8, 'Top Knot', 'Gaya rambut Top Knot', 15000, 'file_1501663349.jpg'),
(9, 'Buzz Cut', 'Gaya rambut Buzz Cut', 15000, 'file_1501663376.jpg'),
(10, 'Faux Hawk', 'Gaya rambut Faux hawk', 15000, 'file_1501663411.jpg'),
(11, 'Quiff', 'Gaya rambut Quiff', 15000, 'file_1501663449.jpg'),
(12, 'Spiky', 'Gaya rambut spiky', 15000, 'file_1501663473.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barberman`
--
ALTER TABLE `barberman`
  ADD PRIMARY KEY (`id_barberman`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `rambut`
--
ALTER TABLE `rambut`
  ADD PRIMARY KEY (`id_rambut`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `barberman`
--
ALTER TABLE `barberman`
  MODIFY `id_barberman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `rambut`
--
ALTER TABLE `rambut`
  MODIFY `id_rambut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
