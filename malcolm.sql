-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 30, 2024 at 04:16 PM
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
-- Database: `malcolm`
--

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `prefer_location` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `plan` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiries`
--

INSERT INTO `inquiries` (`id`, `full_name`, `email`, `address`, `contact_no`, `prefer_location`, `date`, `plan`, `message`, `submitted_at`) VALUES
(1, 'ishara udaraka', 'ishara@yahoo.com', '330/2 gonahena,kadawatha', '0756381168', 'galle', '2024-11-07', 'Basic', 'please give me more details', '2024-03-30 10:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'shanika', 'shanika@gmail.com', 'packages full details', 'please give more details about that'),
(2, 'shanika', 'shani@gmail.com', 'wedding', 'price packages give me plz'),
(3, 'shanika', 'shani@gmail.com', 'wedding', 'price packages give me plz'),
(4, 'shanika', 'shani@gmail.com', 'wedding', 'price packages give me plz'),
(5, 'shanika', 'shani@gmail.com', 'wedding', 'price packages give me plz'),
(6, 'shanika', 'shani@gmail.com', 'wedding', 'price packages give me plz'),
(7, 'shanika', 'shani@gmail.com', 'wedding', 'price packages give me plz');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `basic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `category` enum('wedding','nature','birthdays','other') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `image_name`, `file_path`, `category`) VALUES
(2, 'couple', 'uploads/6607cd0c2a712-wedding-11.jpg', 'wedding'),
(6, 'wedding', 'uploads/660829c97a34c-image-6.jpg', 'wedding'),
(7, 'girl', 'uploads/660829dc6f722-client-2.jpg', 'other'),
(8, 'camera', 'uploads/660829f7cedd4-image-8.jpg', 'other'),
(9, '1', 'uploads/66082a8a75d81-gallery6.jpg', 'other'),
(10, '2', 'uploads/66082acab9af3-hatchlings-384896_1920.jpg', 'nature'),
(11, '3', 'uploads/66082aed124c7-IMG-20230828-WA0034.jpg', 'wedding'),
(12, '4', 'uploads/66082b057ebf5-IMG-20230828-WA0054.jpg', 'nature'),
(13, '6', 'uploads/66082b484e57f-IMG-20230828-WA0147.jpg', 'other');

-- --------------------------------------------------------

--
-- Table structure for table `register_db`
--

CREATE TABLE `register_db` (
  `email` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_db`
--

INSERT INTO `register_db` (`email`, `password`) VALUES
('[value-1]', '[value-2'),
('sureka@gmail.com', '123'),
('user@example.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `usertb`
--

CREATE TABLE `usertb` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertb`
--

INSERT INTO `usertb` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'shanika', 'shani@gmail.com', '$2y$10$.NMnuNqUQdHpmvHmigQ6.u02HfweRQZynjiV.0HHGEz/FE9a.OgQa', 'user'),
(3, 'sureka', 'sureka@gmail.com', '$2y$10$0tPKR.3vHlRnVAjK0RP5vO6bk1pveOEnxRQF6ibhDMUc/0GXKtMPS', 'admin'),
(8, 'dinithi', 'dini@yahoo.com', '$2y$10$Stt6Ewl/bNaRMuv/KO3pa.7xTOqLAvwRO5jnfJ51BGr6yKazFQ.vG', 'user'),
(9, 'sampath', 'sampath@epic.net', '$2y$10$ILOiMYww7MTxsdya3E7zEeXRv11ZAMfo3zxsrLzUY7Fbd606aVqaK', 'admin'),
(10, 'ishara', 'ishara@yahoo.com', '$2y$10$pKEG0aWWtZ6ve4JkiZ1N/OVioeK0pe82VMt7vls.gh94QSgkXqLau', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertb`
--
ALTER TABLE `usertb`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `usertb`
--
ALTER TABLE `usertb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
