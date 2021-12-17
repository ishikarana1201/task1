-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 12:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task1`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `number`, `password`, `profile`, `gender`, `hobby`) VALUES
(1, 'Ishika Rana', 'ishika@gmail.com', '2353465', '$2y$10$EHgICSs3KmSaqvMzcQDthegWEuab1uGrm9vUtWzqvlxKXZZABvRby', '', '', ''),
(2, 'nirali', 'user@user.com', '2353465', '$2y$10$wsRmpnpysUlOH8gcPyMk6uaWgh8L0Nw8I7JTOtE8OTN34xFo2VQVq', '', '', ''),
(4, 'mihir', 'mihir@gmail.com', '909087896', '$2y$10$4seA143X49Yx0bLaBv/mjeWDQHnrqjOJ8iQCjVKV41L/fmLvNz.w6', 'upload/admin.png', '', ''),
(5, 'nirali', 'nirali@gmail.com', '2353465', '$2y$10$InHV5A0xA9oHVA9Cp3xA.u0gRPNX5v9sz2RHzy8SUr5m/Uz76dflu', 'upload/about1.png', '', ''),
(6, 'hem', 'hem@gmail.com', '22222', '$2y$10$tzu74WiytJ/EBoWT1j.puOYt8.7P3rJZOVaTY8xJVcUbQlfX4JH9a', 'upload/5517153.jpg', '', 'Singing'),
(7, 'hem', 'hem@gmail.com', '22222', '$2y$10$tzu74WiytJ/EBoWT1j.puOYt8.7P3rJZOVaTY8xJVcUbQlfX4JH9a', 'upload/5517153.jpg', '', 'dancing'),
(8, 'hem', 'hem1@gmail.com', '22222', '$2y$10$6nO2jlxaIEtZb0iBVaVTK.PpwgbawWPqmKGg4XLqXxW.oqQuowbRS', 'upload/1522666.jpg', '', 'Singing,dancing'),
(9, 'drashti', 'dr@gmail.com', '99999', '$2y$10$TBDDOURI7jSc0XSpTN1GtuyOKu2NuliuUGeoX/6gt.wtxcrhG5PQm', 'upload/5517153.jpg', 'female', 'Singing,drawing'),
(10, 'diya', 'diya@gmail.com', '22222', '$2y$10$l3P15rm6gs3scwnmNBzR9.c4YCJXOcuv4M2KfA1lupSWNS2nfEINC', 'upload/user.jpg', 'female', 'Singing,dancing,drawing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
