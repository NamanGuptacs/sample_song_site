-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2017 at 05:31 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsong`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `Id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`Id`, `Username`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `song_title` varchar(50) NOT NULL,
  `song_movie` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `size` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `song_title`, `song_movie`, `category`, `file`, `type`, `size`) VALUES
(4, 'Robot', 'Robot track', 'english', '24831-22r2-d2-13964.mp3', 'audio/mp3', 147956),
(5, 'Horse', 'Horse', 'Bollywood', '37185-68652-horse.ogg', 'audio/ogg', 13889),
(6, 'Dheere Dheere Se By Honey Singh', 'Honey Singh Album', 'Bollywood', '70459-dheere-dheere-yo-yo-honey-singh-ringtone-141', 'audio/mp3', 462492),
(7, 'iPhone', 'iPhone', 'english', '69051-download-marimba-iphone-ringtone-22627.mp3', 'audio/mp3', 249520),
(8, 'Jodha Akbar', 'Jodha Akbar', 'Bollywood', '86480-jodha-akbar-zee-tv-ishq-hai-woh-ehsaas-bg-62', 'audio/mp3', 378671),
(9, 'Khamoshiyan', 'Khamoshiyan', 'Bollywood', '54252-khamoshiyandjmazainforingtone-8249.mp3', 'audio/mp3', 544991),
(10, 'Let it snow', 'Let it snow', 'english', '85338-let-it-snow-8177.mp3', 'audio/mp3', 1045106),
(11, 'Na sochu phir bhi', 'Na socha phir bhi', 'romantic', '93740-na-sochu-phir-bhi-tera-chehra-song-aur-pyaar', 'audio/mp3', 501133),
(12, 'Guitar', 'Guitar', 'english', '86082-pookkale-guitar-7730.mp3', 'audio/mp3', 459336),
(13, 'Tujhe me rab dikhta hai', 'Rab ne bana de jodi', 'romantic', '66470-tujh-mein-rab-dikhta-hai-ii-18969.mp3', 'audio/mp3', 1629621),
(14, 'South ', 'South', 'Bollywood', '62026-vijayakumar001-871.mp3', 'audio/mp3', 420049);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
