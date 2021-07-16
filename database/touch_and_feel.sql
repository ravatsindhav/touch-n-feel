-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 11:25 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `touch_and_feel`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `name` mediumtext NOT NULL,
  `detail` mediumtext NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `detail`, `is_deleted`) VALUES
(1, 'First Category', 'first', 0),
(2, 'Second', 'this is second Category', 0),
(3, 'Test', 'This is test', 0),
(4, 'Test 2', 'dsfsdfsdfsdf', 0),
(5, 'Test 3', 'dsfsdfsdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(255) NOT NULL,
  `name` mediumtext NOT NULL,
  `detail` mediumtext NOT NULL,
  `image` mediumtext NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `detail`, `image`, `is_deleted`) VALUES
(1, 'Aditya Birla 1', 'sdjsdafhsdfsfsdfsdfsfsdfsdfsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsdsd 2', '../img/client/1626330766_pexels-rahul-695644.jpg', 0),
(2, 'gh', 'sadas', '../img/client/1625917497_astronomy-3069225.jpg', 0),
(3, 'Aditya Birlafghgf', 'thfghgf', '../img/client/1625918717_IMG_20201214_092543_966.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(10000) NOT NULL,
  `subject` mediumtext NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Ravat Sindhav', 'ravat.s@gurukul.org', 'sadasd', 'asdasd'),
(2, 'Ravat Sindhav', 'ravat.s@gurukul.org', 'abcd', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(200) NOT NULL,
  `name` varchar(10000) NOT NULL,
  `detail` mediumtext NOT NULL,
  `category_id` int(200) NOT NULL,
  `image` mediumtext NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `detail`, `category_id`, `image`, `is_deleted`) VALUES
(5, 'Test', 'sfsdfsfsfsffsfsddf $ sddfxsffsd xsdfsdf', 1, '../img/product/1626265403_pexels-markus-spiske-1679719.jpg', 0),
(6, 'Test as', 'sdfsdf $ sfsdf sdff', 1, '../img/product/1625334731_48214776-Jai-Shri-Krishna-Lord-krishna-wallpapers-Lord-krishna.jpg', 0),
(7, 'Test vdfsfs', 'sdfsdfsdf', 2, '../img/product/1625334798_7da0135f30e1e5c00da21c8af82d61b5.jpg', 0),
(8, 'Rushabh Thumar', 'High definition (HD) resolutions like 2 / 3 / 4/ 5 / 8 / 12 and higher Megapixels $\r\nAdvance high compression technology like H.265, H.265+, H.264, H.264+, etc.$\r\nIR Night vision capability$\r\nFixed and Motorized zoom lens$\r\nFixed and Motorized zoom lens$\r\nFixed and Motorized zoom lens$Fixed and Motorized zoom lens$\r\nFixed and Motorized zoom lens$\r\nFixed and Motorized zoom lens$', 1, '../img/product/1625479666_Shree-Krishna-Arjun-On-Rath-Picture-for-Facebook.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` mediumtext NOT NULL,
  `email` mediumtext NOT NULL,
  `password` mediumtext NOT NULL,
  `otp` bigint(255) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `otp`, `is_deleted`) VALUES
(1, 'Ravat Sindhav', 'ravat.s@gurukul.org', '95d253405d1ee8589c53590ea2b21466', 276188, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
