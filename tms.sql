-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2019 at 06:34 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', '2019-03-16 12:33:03');

-- --------------------------------------------------------

--
-- Table structure for table `datamhs`
--

CREATE TABLE `datamhs` (
  `id_mhs` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `ttl` varchar(150) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tinggi` varchar(11) NOT NULL,
  `hobi` varchar(255) NOT NULL,
  `cita` mediumtext NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datamhs`
--

INSERT INTO `datamhs` (`id_mhs`, `nim`, `nama`, `ttl`, `alamat`, `tinggi`, `hobi`, `cita`, `image`) VALUES
(1, 171401003, 'Nurul Azizah Daulay', '17-05-1999', 'Medan', '170', 'Olaharaga', 'Dokter', 'nurul.jpg'),
(2, 171401009, 'M.Fadhli Ibrahim Srg', '18-07-1999', 'Medan', '163', 'Olahraga', 'Pengusaha sukses', 'bilal.jpg'),
(3, 171401012, 'Bagus Setiawan', '15-02-2001', 'Medan', '160', 'Olahraga', 'Pengusaha Sukses', 'weli.jpg'),
(4, 171401015, 'Ghina Handayani', '14-06-1999', 'Medan', '166', 'Bernyanyi', 'Pengusaha Sukses', 'gina.jpg'),
(5, 171401018, 'Weliansyah Arundani', '11-03-1999', 'Medan', '173', 'Olaharaga', 'Pengusaha Sukses', 'weli.jpg'),
(6, 171401021, 'Sylvia Alvieonita AP', '19-09-1999', 'Indonesia', '165', 'Olahraga', 'Pengusaha Sukses', 'silvia.jpg\r\n'),
(7, 171401024, 'Alfian Azhari', '14-02-1999', 'Medan', '168', 'Olahraga', 'Pengusaha Sukses', 'alfian.jpg'),
(8, 171401027, 'Shabrina Junita Tambunan', '13-06-1999', 'Medan', '170', 'Menggambar', 'Pengusaha Sukses', 'nita.jpg'),
(9, 171401030, 'Surya Andika', '17-08-1999', 'Medan', '173', 'Olahraga', 'Pengusaha Sukses', 'surya.jpg'),
(10, 171401033, 'Zidane Fathurrahman', '18-06-1999', 'Medan', '174', 'Olahraga', 'Pengusaha Sukses', 'zidan.jpg'),
(11, 171401039, 'M.Yulfah Reza', '17-05-1999', 'Kisaran', '178', 'Olaharaga', 'Pengusaha Sukses', 'reza.jpg'),
(12, 171401045, 'Rizky Ayu Azhari', '18-08-1999', 'Medan', '157', 'Olaharaga', 'Pengusaha Sukses', 'rizki.jpg'),
(13, 171401048, 'Try Jaka Gunawan', '17-04-2000', 'Medan', '169', 'Olahraga', 'Pengusaha Sukses', 'jaka.jpg'),
(14, 171401054, 'Bilal Tampubolon', '18-08-1999', 'Medan', '169', 'Olahraga', 'Pengusaha Sukses', 'bilal.jpg'),
(15, 171401057, 'Albert', '17-08-1999', 'Medan', '180', 'Olahraga', 'Pengusaha Sukses', 'albert.jpg'),
(16, 171401060, 'Ros Indah Mawarini', '18-08-1999', 'Medan', '163', 'Membaca', 'Pengusaha Sukses', 'rini.jpg'),
(17, 171401063, 'Yuni Lestari', '18-08-1999', 'Medan', '163', 'Menulis', 'Pengusaha Sukses', 'yuni.jpg'),
(18, 171401066, 'Charlie', '18-08-1999', 'Medan', '163', 'Menulis', 'Pengusaha Sukses', 'charli.jpg'),
(19, 171401069, 'Maria Novaliani', '17-05-1999', 'Medan', '165', 'Melukis', 'Pelukis', 'maria.jpg'),
(20, 171401072, 'Aisyah Fajarini Sinaga', '18-08-1999', 'Medan', '163', 'Menulis', 'Pengusaha Sukses', 'aisyah.jpg'),
(21, 171401075, 'Anne Aisya Gebriella', '18-08-1999', 'Medan', '163', 'Menulis', 'Animator', 'anne.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datamhs`
--
ALTER TABLE `datamhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
