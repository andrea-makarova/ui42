-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 07, 2022 at 06:23 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ui42-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE `hobbies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_fk` bigint(20) UNSIGNED NOT NULL,
  `hobby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone_number` int(8) NOT NULL,
  `position` varchar(50) NOT NULL,
  `employment_type` varchar(20) NOT NULL,
  `first_login` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `image`, `phone_number`, `position`, `employment_type`, `first_login`) VALUES
(42, 'Jozef Makara', 'jozef@gmail.com', '$2y$10$MhHvEAId2VjXr2W0geWBnubvIKpJ05uPcqE470XCauOQfGZ/fPzTG', '161d6105046659.png', 69423087, 'PM oddelenie', 'Employee', 'yes'),
(43, 'Andrea Makarová', 'andreamakarova@ui42.com', '$2y$10$eZEaj0AZeVirVOBGkTkZL.7wI90E8GC3dmYnNLGAQ2YaAUJODbW02', '161d61152a264c.png', 46270319, 'Ekonomické oddelenie', 'Self-employed', 'not'),
(44, 'František Kocúr', 'kocur@gmail.com', '$2y$10$eebQMfKAnWDaNJfD5/7eouYoqG82gZrrCn7XhahGpJLBnjQOEii0G', '161d6124612730.png', 39502817, 'DEV oddelenie', 'Employee', 'not'),
(45, 'Martin Makara', 'makara@gmail.com', '$2y$10$X6LkbBl7xbTWQ5cXmKQQRuzi8vPMVysvBnuVczkWW6Qun4vwNd.pm', '161d612f3a9971.png', 82610539, 'Ekonomické oddelenie', 'Employee', 'not'),
(46, 'Beáta Makarová', 'bmakarova@gmail.com', '$2y$10$c0/4/SNRi8.skGftVlzMge9A/9TO6wMe2DC8fYy0zi4TpCBAzAzK.', '161d6e9282507a.png', 56174208, 'Performance marketing', 'Self-employed', 'not'),
(47, 'Admin ', 'admin@admin.com', '$2y$10$ydAJGK6PYwVxVFz6zRCCyO0gmjm0SdOCPFjc2dNtMengEKmJ1ge1q', '161d75a125f3c8.png', 46158720, 'Key Accounts', 'Employee', 'not');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `user_fk` (`user_fk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hobbies`
--
ALTER TABLE `hobbies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hobbies`
--
ALTER TABLE `hobbies`
  ADD CONSTRAINT `delete_hobbys` FOREIGN KEY (`user_fk`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
