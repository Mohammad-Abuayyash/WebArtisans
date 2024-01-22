-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2024 at 08:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webartisans`
--

-- --------------------------------------------------------

--
-- Table structure for table `teammessages`
--

CREATE TABLE `teammessages` (
  `first_name` text NOT NULL,
  `last_name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `team_member` text NOT NULL,
  `message` text NOT NULL,
  `msg_date` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teammessages`
--

INSERT INTO `teammessages` (`first_name`, `last_name`, `email`, `team_member`, `message`, `msg_date`) VALUES
('Kareem', 'Abdullah', 'ka2005@gmail.com', 'mohammad', 'He gives the best designs', '2024-01-12'),
('abdullah', 'abuayyash', 'abd@gmail.com', 'Mohammad', 'worst designer ever', '2024-01-12 03:19:55'),
('Omar', 'Ahmad', 'omAh@yahool.com', 'mohammad', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem eget ipsum lobortis ultricies. Nulla eget mauris mauris. Ut eget tortor ac erat convallis maximus quis eu velit.', '2024-01-12'),
('laila', 'samer', 'laila@hotmail.com', 'Mohammad', 'insert any dummpy text here so it will display', '2024-01-12 07:11:44'),
('Samar', '', 'sam@yahoo.sa', 'Team', 'hello', '2024-01-12 07:16:12'),
('Mohammad', 'Abuayyash', 'abuayyash@hotmail.com', 'Team', 'The best team ever to collaborate with.', '2024-01-18 20:03:31'),
('Abdelrahman', '', 'abd@2020Gmail.com', 'Abdelrahman', '\"Believe in yourself and all that you are. Remember that there is something inside you that is greater than any obstacle. Embrace the challenges ahead, for they will only make you stronger. Your journey is uniquely yours, and every step you take is a triumph. Keep shining bright, and know that you are capable of achieving amazing things. The world is a better place with you in it!\" ', '2024-01-18 21:09:08'),
('Saif', 'Omar', 'saif@2020Gmail.com', 'Abdelrahman', '\"Believe in yourself and all that you are. Remember that there is something inside you that is greater than any obstacle. Embrace the challenges ahead, for they will only make you stronger. Your journey is uniquely yours, and every step you take is a triumph. Keep shining bright, and know that you are capable of achieving amazing things. The world is a better place with you in it!\" ', '2024-01-18 21:15:02'),
('Ahlam', '', 'ah@20Gmail.com', 'Lama', 'Best web developer ever', '2024-01-18 21:22:46'),
('Laila', 'Kareem', 'li_1@gmail.com', 'Lama', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem eget ipsum lobortis ultricies.', '2024-01-21 17:15:39'),
('abdullah', 'Abuayyash', 'laila@hotmail.com', 'Omar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in sem eget ipsum lobortis ultricies.', '2024-01-21 22:35:32');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
