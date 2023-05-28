-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2023 at 03:27 PM
-- Server version: 8.0.33-0ubuntu0.20.04.2
-- PHP Version: 7.4.3-4ubuntu2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abit.wp`
--

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `active` varchar(20) NOT NULL,
  `create_by` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `name`, `title`, `description`, `content`, `thumbnail`, `active`, `create_by`) VALUES
(3, 'Sawyer Carrillo', 'Cumque soluta earum ', 'Omnis vel qui sit e', 'Reiciendis quis fugi', '1.jpeg', '1', 0),
(5, 'Nolan Dickson', 'Voluptas quisquam et', 'Sed dolore distincti', 'Commodi amet minima', '1.jpeg', '1', 0),
(7, 'Xavier Sparks', 'Quaerat ea alias min', 'Aut commodi voluptas', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '1.jpeg', '0', 0),
(8, 'Howard House', 'Voluptatibus consequ', 'Commodi aliquid id u', 'Qui molestias id qu', '1.jpeg', '1', 0),
(12, 'Nyssa Skinner', 'Pariatur Quae ea ac', 'Ea accusamus tempori', 'Sequi eum id et cor', '1.jpeg', '1', 0),
(13, 'Leilani Roberson', 'Eum lorem voluptatem', 'Consequat Cumque ve', 'Velit ea exercitatio', '1.jpeg', '1', 33);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `status`, `password`) VALUES
(32, 'Steven Keith', 'luxuzyfy@mailinator.com', '1', 'f3ed11bbdb94fd9ebdefbaf646ab94d3'),
(33, 'admin', 'admin@admin.com', '2', '827ccb0eea8a706c4c34a16891f84e7b'),
(34, 'editor', 'editor@editor.com', '1', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
