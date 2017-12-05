-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 07:10 AM
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
-- Database: `Game`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `id_user` varchar(8) NOT NULL,
  `id_game` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id_game` varchar(8) NOT NULL,
  `game_name` varchar(50) NOT NULL,
  `Publisher` varchar(30) NOT NULL,
  `Genre` varchar(50) NOT NULL,
  `Rating` varchar(20) NOT NULL,
  `Score` float NOT NULL,
  `Content1` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id_game`, `game_name`, `Publisher`, `Genre`, `Rating`, `Score`, `Content1`) VALUES
('P3010001', 'Persona 5', 'Atlus', 'RPG', '18+', 8.7, ''),
('PC020001', 'The Witcher 3', 'GATAU', 'Adventure', '18+', 8, '');

-- --------------------------------------------------------

--
-- Table structure for table `platform`
--

CREATE TABLE `platform` (
  `id_platform` varchar(4) NOT NULL,
  `platform_name` varchar(20) NOT NULL,
  `company` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `platform`
--

INSERT INTO `platform` (`id_platform`, `platform_name`, `company`) VALUES
('P300', 'Playstation 3', 'Sony'),
('PC00', 'Personal Computer', 'Windows');

-- --------------------------------------------------------

--
-- Table structure for table `played on`
--

CREATE TABLE `played on` (
  `id_game` varchar(8) NOT NULL,
  `id_platform` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(12) NOT NULL,
  `User_Name` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `User_Name`, `Email`, `Password`) VALUES
('ID00001', 'daffaalief', 'daffaaliefr@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access`
--
ALTER TABLE `access`
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_game` (`id_game`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id_game`);

--
-- Indexes for table `platform`
--
ALTER TABLE `platform`
  ADD PRIMARY KEY (`id_platform`);

--
-- Indexes for table `played on`
--
ALTER TABLE `played on`
  ADD UNIQUE KEY `id_game` (`id_game`),
  ADD UNIQUE KEY `id_platform` (`id_platform`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `User_Name` (`User_Name`),
  ADD UNIQUE KEY `Email` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
