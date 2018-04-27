-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 09:24 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `superheroes`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `reg_name` varchar(25) NOT NULL,
  `superpower` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `singup_date` date NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `num_posts` int(11) NOT NULL,
  `num_likes` int(11) NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `friend_array` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `reg_name`, `superpower`, `email`, `password`, `singup_date`, `profile_pic`, `num_posts`, `num_likes`, `user_closed`, `friend_array`) VALUES
(1, 'ironman', 'Stupid flying style.', 'iron@ironman.com', 'ironman', '2018-04-18', 'whatever', 5, 5, 'no', ''),
(3, 'Spiderman', 'Knitts spiderweb', 'Spider@spiderman.com', '9f05aa4202e4ce8d6a72511dc735cce9', '2018-04-27', 'assets/images/profile_pics/defaults/head_red.png', 0, 0, 'no', ','),
(4, 'Hulk', 'Muscle mountain', 'Hulk@hulk.com', '1d2cb4b8c108bd9bbb66c19a4b2e1249', '2018-04-27', 'assets/images/profile_pics/defaults/head_red.png', 0, 0, 'no', ','),
(5, 'Spavn', 'Most effective assassin', 'Spavn@spavn.com', '9fbd761ec16eb28501709943b3a08de2', '2018-04-27', 'assets/images/profile_pics/defaults/head_red.png', 0, 0, 'no', ','),
(6, 'Wonderwoman', 'Fighting skills', 'Wonder@woman.com', '03e5bf83eef4b1d1dbb3c566bdef703f', '2018-04-27', 'assets/images/profile_pics/defaults/head_red.png', 0, 0, 'no', ',');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
