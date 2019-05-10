-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2017 at 09:45 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `biblio`
--

CREATE TABLE `biblio` (
  `book_id` int(3) DEFAULT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biblio`
--

INSERT INTO `biblio` (`book_id`, `name`) VALUES
(1, 'biblio algorithmikis 1'),
(1, 'biblio algorithmikis 2'),
(1, 'biblio algorithmikis 3'),
(3, 'biblio algorithmoi kai poliplokotita 1'),
(3, 'biblio algorithmoi kai poliplokotita 2'),
(3, 'biblio algorithmoi kai poliplokotita 3'),
(3, 'biblio arxitektonikhs 1'),
(3, 'biblio arxitektonikhs 2'),
(3, 'biblio arxitektonikhs 3'),
(3, 'biblio baseis1 dedomenon 1'),
(3, 'biblio baseis1 dedomenon 2'),
(3, 'biblio baseis1 dedomenon 3'),
(2, 'biblio cpp 1'),
(2, 'biblio cpp 2'),
(2, 'biblio cpp 3'),
(2, 'biblio diakritwn 1'),
(2, 'biblio diakritwn 2'),
(2, 'biblio diakritwn 3'),
(3, 'biblio diktuwn 1'),
(3, 'biblio diktuwn 2'),
(3, 'biblio diktuwn 3'),
(2, 'biblio domwn 1'),
(2, 'biblio domwn 2'),
(2, 'biblio domwn 3'),
(1, 'biblio eisagoghs 1'),
(1, 'biblio eisagoghs 2'),
(1, 'biblio eisagoghs 3'),
(1, 'biblio grammikhs 1'),
(1, 'biblio grammikhs 2'),
(1, 'biblio grammikhs 3'),
(3, 'biblio leitourgikwn 1'),
(3, 'biblio leitourgikwn 2'),
(3, 'biblio leitourgikwn 3'),
(1, 'biblio mathimatikwn 1'),
(1, 'biblio mathimatikwn 2'),
(1, 'biblio mathimatikwn 3'),
(3, 'biblio pliroforiakwn susthmaton 1'),
(3, 'biblio pliroforiakwn susthmaton 2'),
(3, 'biblio pliroforiakwn susthmaton 3'),
(1, 'biblio programmatismou 1'),
(1, 'biblio programmatismou 2'),
(1, 'biblio programmatismou 3'),
(2, 'biblio psifiakis 1'),
(2, 'biblio psifiakis 2'),
(2, 'biblio psifiakis 3'),
(2, 'biblio statistikhs 1'),
(2, 'biblio statistikhs 2'),
(2, 'biblio statistikhs 3');

-- --------------------------------------------------------

--
-- Table structure for table `biblio_foit`
--

CREATE TABLE `biblio_foit` (
  `kodikos` varchar(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foithths`
--

CREATE TABLE `foithths` (
  `username` varchar(8) DEFAULT NULL,
  `kodikos` varchar(20) NOT NULL,
  `onoma` varchar(15) DEFAULT NULL,
  `epitheto` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `eksamino` int(2) DEFAULT NULL,
  `pontoi` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foithths`
--

INSERT INTO `foithths` (`username`, `kodikos`, `onoma`, `epitheto`, `email`, `eksamino`, `pontoi`) VALUES
('', '', 'gggg', 'gggg', 'citymenidi@gmail.com', 2, 0),
('0', '11', 'giannis', 'frag', 'citymenidi@gmail.com', 2, 0),
('123', '123', 'kostas', 'papadopoulos', 'kostas@gmail.com', 4, 0),
('cs141039', 'as', 'xristina', 'papadopoulou', 'xristin@gmail.com', 1, 0),
('cs141029', 'maria', 'maria', 'xristopoulou', 'maria@gmail.com', 5, 0),
('1234', 'qq', 'as', 'papadopo0los', 'gia@gmail.com', 5, 0),
('cs141039', 'sa', 'gggg', 'gggg', 'citymenidi@gmail.com', 2, 0),
('cs131', 'saa', 'kostas', 'papadopoulos', 'vi@gmail.com', 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mathima`
--

CREATE TABLE `mathima` (
  `onoma` varchar(100) NOT NULL,
  `semester_id` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mathima`
--

INSERT INTO `mathima` (`onoma`, `semester_id`) VALUES
('algorithmiki', 1),
('algorithmoi kai poluplokothta', 3),
('allhlepidrash', 5),
('anakthsh pliroforias', 6),
('analush kai sxediash pliroforiakon systhmaton', 5),
('ari8mitiki analush kai efargmoges', 7),
('arxitektoniki upologistwn', 3),
('asfaleia sthn texnologia ths pliroforias', 6),
('baseis dedomenon 1', 3),
('baseis dedomenon 2', 4),
('cpp', 2),
('diakrita mathimatika', 2),
('diktiakos programmatismos', 5),
('diktua ipologistwn', 4),
('diktua kinhtwn epikoinwniwn', 7),
('diktua ypologistwn', 3),
('domes dedomenon', 2),
('efuh susthmata', 7),
('eisagogi', 1),
('eisagogi ston parallilo upologismo', 5),
('eksoriksi dedomenon', 7),
('epeksergasia eikonas', 6),
('epixeirhsiakh ereuna', 7),
('grafika ipologistwn', 7),
('gramiki', 1),
('hlektroniko emporio', 7),
('ipologistika systhmata', 5),
('JAVA', 4),
('katanemhmena susthmata', 6),
('leitourgika systhmata 1', 3),
('leitourgika systhmata 2', 4),
('mathimatika', 1),
('metaglotistes', 5),
('neuronika diktia', 6),
('pliroforiaka susthmata', 3),
('poiothta kai aksiopistia', 5),
('programmatismos', 1),
('proigmenh arxitektoniki upologiston', 6),
('psifiakes epikoinonies', 6),
('psifiaki sxediasi', 2),
('shmata kai systhmata', 5),
('statistiki', 2),
('sxediasmos kai anapthksi pliroforiakon sustumaton', 6),
('sxediasmos psifiakon susthmatwn', 4),
('texnhth noimosunh', 6),
('texniki ths ekfrashs', 7),
('texnologia logismikou', 4),
('texnologia polimeson', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biblio`
--
ALTER TABLE `biblio`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `biblio_foit`
--
ALTER TABLE `biblio_foit`
  ADD PRIMARY KEY (`kodikos`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `foithths`
--
ALTER TABLE `foithths`
  ADD PRIMARY KEY (`kodikos`);

--
-- Indexes for table `mathima`
--
ALTER TABLE `mathima`
  ADD PRIMARY KEY (`onoma`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biblio_foit`
--
ALTER TABLE `biblio_foit`
  ADD CONSTRAINT `biblio_foit_ibfk_1` FOREIGN KEY (`kodikos`) REFERENCES `foithths` (`kodikos`),
  ADD CONSTRAINT `biblio_foit_ibfk_2` FOREIGN KEY (`name`) REFERENCES `biblio` (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
