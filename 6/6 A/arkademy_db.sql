-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 12:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arkademy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_category`
--

CREATE TABLE `tabel_category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_category`
--

INSERT INTO `tabel_category` (`id`, `name`) VALUES
(1, 'Food'),
(2, 'Drink');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_product`
--

CREATE TABLE `tabel_product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(12) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_cashier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_product`
--

INSERT INTO `tabel_product` (`id`, `name`, `price`, `id_category`, `id_cashier`) VALUES
(1, 'Latte', '10000', 2, 1),
(2, 'Cake', '20000', 1, 2),
(3, 'Taro', '15000', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `table_cashier`
--

CREATE TABLE `table_cashier` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_cashier`
--

INSERT INTO `table_cashier` (`id`, `name`) VALUES
(1, 'Pevita Pearce'),
(2, 'Raisa Andriana'),
(3, 'Andi Irsandi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_category`
--
ALTER TABLE `tabel_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_product`
--
ALTER TABLE `tabel_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_cashier` (`id_cashier`);

--
-- Indexes for table `table_cashier`
--
ALTER TABLE `table_cashier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_category`
--
ALTER TABLE `tabel_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_product`
--
ALTER TABLE `tabel_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_cashier`
--
ALTER TABLE `table_cashier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_product`
--
ALTER TABLE `tabel_product`
  ADD CONSTRAINT `tabel_product_ibfk_1` FOREIGN KEY (`id_cashier`) REFERENCES `table_cashier` (`id`),
  ADD CONSTRAINT `tabel_product_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `tabel_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
