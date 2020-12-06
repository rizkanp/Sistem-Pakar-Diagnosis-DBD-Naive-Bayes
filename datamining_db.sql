-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 03:12 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `datamining_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `indikasi` text NOT NULL,
  `ya` text NOT NULL,
  `tidak` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`indikasi`, `ya`, `tidak`) VALUES
('suhu tubuh tinggi', '0,75', '0,33'),
('suhu tubuh rendah', '0', '0,50'),
('suhu tubuh normal', '0,25', '0,16'),
('tekanan darah tinggi', '0.25', '0,33'),
('tekanan darah rendah', '0,75', '0,16'),
('tekanan darah normal', '0', '0,33'),
('bintik merah banyak', '0,75', '0,16'),
('bintik merah sedikit', '0,25', '0,50'),
('bintik merah tidak ada', '0', '0,33'),
('musim hujan', '0,25', '0,50'),
('musim kemarau', '0', '0,33'),
('musim pancaroba', '0,75', '0,16'),
('total', '0,40', '0,60');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
  `No` int(5) NOT NULL AUTO_INCREMENT,
  `suhu_tubuh` text NOT NULL,
  `bintik_merah` text NOT NULL,
  `musim` text NOT NULL,
  `tekanan_darah` text NOT NULL,
  `terkena_dbd` text NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`No`, `suhu_tubuh`, `bintik_merah`, `musim`, `tekanan_darah`, `terkena_dbd`) VALUES
(1, 'Tinggi', 'Banyak', 'Pancaroba', 'Rendah', 'YA'),
(2, 'Tinggi', 'Sedikit', 'Hujan', 'Normal', 'TIDAK'),
(3, 'Rendah', 'Sedikit', 'Hujan', 'Tinggi', 'TIDAK'),
(4, 'Normal', 'Tidak Ada', 'Kemarau', 'Tinggi', 'TIDAK'),
(5, 'Rendah', 'Banyak', 'Hujan', 'Rendah', 'TIDAK'),
(6, 'Tinggi', 'Sedikit', 'Hujan', 'Tinggi', 'YA'),
(7, 'Normal', 'Banyak', 'Pancaroba', 'Rendah', 'YA'),
(8, 'Tinggi', 'Sedikit', 'Kemarau', 'Normal', 'TIDAK'),
(9, 'Tinggi', 'Banyak', 'Pancaroba', 'Rendah', 'YA'),
(10, 'Rendah', 'Tidak Ada', 'Pancaroba', 'Normal', 'TIDAK');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
