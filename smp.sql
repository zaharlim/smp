-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 06, 2015 at 01:46 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smp`
--

-- --------------------------------------------------------

--
-- Table structure for table `temuduga`
--

CREATE TABLE IF NOT EXISTS `temuduga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status_mohon` int(1) NOT NULL DEFAULT '0',
  `no_kp` varchar(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tarikh_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `umur` int(3) NOT NULL,
  `jantina` varchar(1) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `bangsa` varchar(10) NOT NULL,
  `oku` int(11) NOT NULL,
  `oku_info` varchar(20) NOT NULL,
  `kursus` varchar(100) NOT NULL,
  `pusat_temuduga` varchar(50) NOT NULL,
  `kampus` varchar(50) NOT NULL,
  `tahun_spm` int(11) NOT NULL,
  `spm_bm` varchar(1) NOT NULL,
  `kelayakan_tinggi` varchar(50) NOT NULL,
  `sijil` varchar(100) NOT NULL,
  `tempat_pengajian` varchar(100) NOT NULL,
  `alamat_tetap` varchar(100) NOT NULL,
  `alamat_surat` varchar(100) NOT NULL,
  `tel_rumah` varchar(15) NOT NULL,
  `tel_pejabat` varchar(15) NOT NULL,
  `tel_bimbit` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tarikh` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `temuduga`
--

INSERT INTO `temuduga` (`id`, `status_mohon`, `no_kp`, `nama`, `tarikh_lahir`, `tempat_lahir`, `umur`, `jantina`, `agama`, `status`, `bangsa`, `oku`, `oku_info`, `kursus`, `pusat_temuduga`, `kampus`, `tahun_spm`, `spm_bm`, `kelayakan_tinggi`, `sijil`, `tempat_pengajian`, `alamat_tetap`, `alamat_surat`, `tel_rumah`, `tel_pejabat`, `tel_bimbit`, `email`, `tarikh`) VALUES
(1, 0, '111111111111', '', '0000-00-00', '', 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '2015-08-06 01:39:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
