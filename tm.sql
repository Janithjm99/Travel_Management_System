-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 07:57 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tm`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `name` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `ncard` int(100) NOT NULL,
  `exmonth` date NOT NULL,
  `zcode` int(100) NOT NULL,
  `exyear` date NOT NULL,
  `cvv` int(10) NOT NULL,
  `amount` int(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `placed_on` date NOT NULL,
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(4, 2, 'janih madu', 'janithmadusankajm99@gmail.com', '1233456789', 'sdcfegvg ');

-- --------------------------------------------------------

--
-- Table structure for table `place1`
--

CREATE TABLE `place1` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `ardate` date NOT NULL,
  `ledate` date NOT NULL,
  `under` int(20) NOT NULL,
  `above` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `price1` int(20) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `place1`
--

INSERT INTO `place1` (`id`, `name`, `code`, `ardate`, `ledate`, `under`, `above`, `price`, `price1`, `details`, `image`) VALUES
(1, 'Ella', 'T01', '2025-07-28', '2025-07-31', 2, 2, 10000, 9000, 'Ella, in Sri Lanka, is a captivating town nestled in misty mountains. It boasts lush greenery, cascading waterfalls like Ravana Falls, and iconic spots like the Nine Arch Bridge. Hikers adore Little Adam\'s Peak for its panoramic views, while the town offers cozy cafes and a laid-back vibe, making it a must-visit for nature lovers and adventurers alike.', '800x750-4.jpg'),
(2, 'Sigiriya', 'T02', '2025-07-29', '2025-08-01', 3, 2, 12000, 11000, 'Sigiriya in Sri Lanka is a UNESCO World Heritage Site, famous for its ancient rock fortress adorned with frescoes and surrounded by lush gardens. The summit offers panoramic views and a glimpse into the island\'s rich history, making it a top destination for history buffs and nature enthusiasts.', '800x750-sigiriya-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(3, 'admin admin', 'admin@gmail.com', 'e6e061838856bf47e1de730719fb2609', 'admin'),
(4, 'Jan Mad', 'user1@gmail.com', 'ba5ef51294fea5cb4eadea5306f3ca3b', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place1`
--
ALTER TABLE `place1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `place1`
--
ALTER TABLE `place1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
