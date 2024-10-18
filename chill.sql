-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 10:49 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chill`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `m_id` int(10) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_rating` varchar(10) NOT NULL,
  `m_year` int(11) NOT NULL,
  `m_duration` varchar(20) NOT NULL,
  `m_banner` varchar(50) NOT NULL,
  `m_genre` varchar(100) NOT NULL,
  `m_price` int(11) NOT NULL,
  `m_description` varchar(1000) NOT NULL,
  `m_trailer` varchar(200) NOT NULL,
  `m_path` varchar(50) NOT NULL,
  `m_file` varchar(20) NOT NULL,
  `m_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`m_id`, `m_name`, `m_rating`, `m_year`, `m_duration`, `m_banner`, `m_genre`, `m_price`, `m_description`, `m_trailer`, `m_path`, `m_file`, `m_date`) VALUES
(11, 'Hawa', '7.7', 2022, '150', 'banners/Hawa.jpg', 'Drama, Mystery', 300, 'Hawa is a 2022 Bangladeshi mystery-drama film written and directed by Mejbaur Rahman Sumon. The film was produced by Sun Music and Motion Pictures Limited. The film stars Chanchal Chowdhury, Nazifa Tushi, Sariful Razz, Sumon Anowar, Shohel Mondol, Nasir Uddin Khan and Rizvi Rizu among others.', 'https://www.youtube.com/embed/K9W52rpdlLQ?si=vppDG5vUWYxODtbo', 'uploads/Hawa.mp4', 'Hawa.mp4', '2023-08-24'),
(12, 'Black Clover: Sword of the Wizard King', '7.4', 2023, '132', 'banners/Black_Clover_Sword_of_The_Wizard_King.jpg', 'Animation, Action, Adventure', 700, 'In a world where magic is everything, Asta, a boy who was born with no magic, aims to become the Wizard King, to overcome adversity, prove his power, and keep his oath with his friends.', 'https://www.youtube.com/embed/PrgxJ1_sUcs?si=Y_rXVbWeulQ8CG99', 'uploads/Black Clover Sword of the Wizard King.mp4', 'Black Clover Sword o', '2023-08-24'),
(13, 'Spider-Man: Across the Spider-Verse', '8.8', 2023, '132', 'banners/spiderman.jpg', 'Animation, Action, Adventure', 900, 'Miles Morales embarks on a thrilling adventure through the multiverse and joins forces with Gwen Stacy and Spider-People to fight a supervillain.', 'https://www.youtube.com/embed/shW9i6k8cB0?si=m-VtScV8Ur0tiXQX', 'uploads/Spider-Man.Across.the.Spider-Verse.mp4', 'Spider-Man.Across.th', '2023-08-24'),
(14, 'Black Adam', '6.3', 2022, '120', 'banners/Black Adam.jpg', 'Action, Adventure, Fantasy', 400, 'Nearly 5,000 years after he was bestowed with the almighty powers of the Egyptian gods--and imprisoned just as quickly--Black Adam is freed from his earthly tomb, ready to unleash his unique form of justice on the modern world.', 'https://www.youtube.com/embed/mkomfZHG5q4?si=qlU_Eyb5P0rIBXAL', 'uploads/Black.Adam.mp4', 'Black.Adam.mp4', '2023-08-25'),
(17, 'Oppenheimer', '8.6', 2023, '120', 'banners/Oppenheimer.jpg', 'Drama', 1200, 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.', 'https://www.youtube.com/embed/bK6ldnjE3Y0?si=kOjz3taSwhcKP50v', 'uploads/Oppenheimer _ Opening Look.mp4', 'Oppenheimer _ Openin', '2023-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`p_id`, `m_id`, `u_id`, `amount`) VALUES
(1, 12, 1, 700),
(4, 13, 1, 900),
(5, 11, 1, 400);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `u_id` int(10) NOT NULL,
  `u_name` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `Category` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`u_id`, `u_name`, `password`, `email`, `Category`) VALUES
(1, 'zidan', 'zidan', 'zidan@gmail.com', 'user'),
(2, 'admin', 'admin', 'admin@gmail.com', 'admin'),
(4, 'Zin', 'zin', 'zin@gmail.com', 'user'),
(6, 'DaZin', 'dazin', 'dazin@gmail.com', 'user'),
(7, 'mansora', 'mansora', 'mansora@gmail.com', 'user'),
(9, 'sami', 'sami', 'sami@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
