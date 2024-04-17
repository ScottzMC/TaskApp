-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 07:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taskapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `priority` enum('low','medium','high','') NOT NULL,
  `due_date` date NOT NULL,
  `completed` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `completed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `priority`, `due_date`, `completed`, `created_at`, `updated_at`, `completed_at`) VALUES
(1, 'Task 1', 'Description for the Task 1', 'medium', '2024-04-15', 0, '2024-04-15 21:09:07', '2024-04-17 13:06:01', '2024-04-15 21:09:07'),
(2, 'Task 2', 'Description for Task 2', 'high', '2024-04-14', 1, '2024-04-15 21:09:07', '2024-04-15 21:09:07', '2024-04-15 21:09:07'),
(4, 'Task 4', 'Description for Task 4', 'high', '2024-04-15', 1, '2024-04-15 21:09:07', '2024-04-15 21:09:07', '2024-04-15 21:09:07'),
(5, 'Task 5', 'Description for Task 5', 'high', '2024-04-14', 1, '2024-04-15 21:09:07', '2024-04-16 13:13:38', '2024-04-16 13:13:38'),
(9, 'Task 12', 'This is for task 12', 'high', '2024-04-24', 1, '2024-04-17 12:13:31', '2024-04-17 12:40:28', '2024-04-17 12:40:28'),
(10, 'Task 2', 'Another task 2', 'low', '2024-04-16', 0, '2024-04-17 14:11:30', '2024-04-17 14:11:30', '2024-04-17 15:11:30'),
(11, 'Task 3', 'This is task 3', 'medium', '2024-04-17', 0, '2024-04-17 16:36:10', '2024-04-17 16:36:10', '2024-04-17 17:36:10'),
(12, 'Task 4', 'This is task 4', 'high', '2024-04-17', 0, '2024-04-17 16:36:27', '2024-04-17 16:36:27', '2024-04-17 17:36:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
