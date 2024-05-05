-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2024 at 06:08 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adarumah`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorits`
--

CREATE TABLE `favorits` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `post_id` int NOT NULL,
  `added_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `photos` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` varchar(300) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `price`, `address`, `photos`, `description`) VALUES
(70, 1, 'rerum aut voluptatem', 114552014, '9602 Ondricka Loaf Apt. 682', NULL, NULL),
(71, 16, 'ipsam quam corrupti', 894641871, '28111 Parisian Wall Suite 250', NULL, NULL),
(72, 20, 'kursi roda 4', 590434869, '469 Wilmer Well Suite 462', NULL, NULL),
(73, 7, 'deserunt ut omnis', 951483836, '203 Von Centers Apt. 220', NULL, NULL),
(74, 13, 'qui rerum ea', 363014849, '9332 Genoveva Locks', NULL, NULL),
(75, 5, 'kursi sofa ruang tamu', 292394642, '7850 Vilma Ridges', NULL, NULL),
(76, 19, 'quis placeat omnis', 753150397, '595 Marcellus Glen', NULL, NULL),
(77, 8, 'minima atque temporibus', 633664241, '6207 Rocky Drives', NULL, NULL),
(78, 9, 'iusto aut sequi', 370108761, '44560 Alford Island Suite 892', NULL, NULL),
(79, 20, 'vel exercitationem id', 542009240, '77689 Padberg Path Apt. 919', NULL, NULL),
(80, 15, 'eius harum qui', 774768966, '76723 Labadie Highway', NULL, NULL),
(81, 16, 'deleniti sit ad', 456106215, '265 Flatley Valleys Apt. 048', NULL, NULL),
(82, 6, 'id sunt alias', 733848209, '459 Bartell Rest', NULL, NULL),
(83, 12, 'aliquam iusto magnam', 165985453, '7877 Leta Meadows Apt. 303', NULL, NULL),
(84, 17, 'dolorem dolore consequatur', 995427348, '8829 Davonte Vista Apt. 196', NULL, NULL),
(85, 11, 'repellendus ipsum sunt', 896581344, '128 Raquel Divide Suite 583', NULL, NULL),
(86, 9, 'nesciunt velit rerum', 891877500, '96241 Howe Centers Suite 798', NULL, NULL),
(87, 20, 'est omnis sed', 903815839, '474 Skiles Bridge', NULL, NULL),
(88, 19, 'et maiores eum', 564388055, '3010 Lorna Lane Suite 224', NULL, NULL),
(89, 7, 'consequatur a in', 143645933, '61256 Block Route', NULL, NULL),
(90, 19, 'id nam ut', 19872301, '33492 Keeling Drive', NULL, NULL),
(91, 9, 'molestiae ut dolor', 615964449, '165 Boyer Circles', NULL, NULL),
(92, 15, 'consequuntur at expedita', 622488361, '292 Arely Court', NULL, NULL),
(93, 12, 'non dignissimos exercitationem', 736078146, '39275 Elfrieda Viaduct Apt. 824', NULL, NULL),
(94, 12, 'numquam voluptates blanditiis', 539399712, '14972 McKenzie Way', NULL, NULL),
(95, 12, 'consequuntur sit occaecati', 894960092, '4221 John Causeway Apt. 728', NULL, NULL),
(96, 7, 'possimus veritatis voluptates', 906248904, '8894 Ruecker Flat Suite 198', NULL, NULL),
(97, 12, 'corporis suscipit aut', 930262339, '771 Kiley Causeway', NULL, NULL),
(98, 11, 'sunt occaecati explicabo', 249915945, '8173 Malachi Greens', NULL, NULL),
(99, 14, 'quos iste quibusdam', 239078341, '35093 Laurie Spurs Apt. 730', NULL, NULL),
(100, 9, 'sed omnis et', 571957182, '13652 Kuhn Manors', NULL, NULL),
(101, 17, 'aut sed corporis', 321466476, '36107 Letitia Stream Suite 382', NULL, NULL),
(102, 20, 'vel tenetur quaerat', 123232496, '484 Muller Circle', NULL, NULL),
(103, 10, 'laborum consequatur in', 885874822, '737 Mikel Mills', NULL, NULL),
(104, 18, 'qui magni rerum', 693970212, '41209 Lebsack Garden Apt. 618', NULL, NULL),
(105, 19, 'aliquam omnis assumenda', 470455596, '723 Tremblay Via Suite 315', NULL, NULL),
(106, 9, 'sapiente autem et', 592904914, '452 Eda Underpass', NULL, NULL),
(107, 7, 'ab vel rerum', 798378967, '73472 Hellen Turnpike Apt. 895', NULL, NULL),
(108, 13, 'enim sed nemo', 15154191, '2536 Heller Place Suite 641', NULL, NULL),
(109, 15, 'est modi fugit', 883660237, '147 Weber Bridge Suite 534', NULL, NULL),
(110, 10, 'incidunt eos ut', 159653667, '436 Raymond Valley Suite 307', NULL, NULL),
(111, 7, 'cum dicta itaque', 540643587, '2441 Cristopher Parks', NULL, NULL),
(112, 13, 'unde quis rerum', 136377572, '57844 Johnson Island Suite 005', NULL, NULL),
(113, 9, 'et voluptas qui', 586718550, '420 Elvie Divide', NULL, NULL),
(114, 13, 'velit corrupti aut', 406309653, '2750 Crooks Mews', NULL, NULL),
(115, 7, 'cumque et voluptatem', 310498034, '932 Rodolfo Crossing Suite 716', NULL, NULL),
(116, 11, 'aut magnam rerum', 843351984, '39294 Ramona Vista', NULL, NULL),
(117, 6, 'soluta quo inventore', 997972117, '956 Shields Port Apt. 793', NULL, NULL),
(118, 5, 'unde aliquid omnis', 102207823, '578 Kira Knolls', NULL, NULL),
(119, 14, 'labore quis quibusdam', 408620492, '759 Kara Gardens', NULL, NULL),
(120, 9, 'ea repudiandae deserunt', 436025290, '629 Leffler Station', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `post_id` int NOT NULL,
  `rating` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `telepon` varchar(13) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `telepon`, `alamat`) VALUES
(1, 'admin1@gmail.com', 'admin', 'admin', '0812', 'bumi pertiwi'),
(2, 'rcruickshank@yahoo.com', '89846', 'Prof. Keegan Turner I', NULL, NULL),
(3, 'frami.saige@gmail.com', '20941', 'Ms. Queenie Konopelski IV', NULL, NULL),
(4, 'kali.franecki@yahoo.com', '34294', 'Lonny Barton', NULL, NULL),
(5, 'chadrick.fahey@yahoo.com', '38809', 'Lyric Von', NULL, NULL),
(6, 'ward.sipes@yahoo.com', '48521', 'Miles Armstrong', NULL, NULL),
(7, 'irma41@yahoo.com', '50870', 'Sherman Zemlak', NULL, NULL),
(8, 'lind.elva@gmail.com', '40755', 'Hailey Greenfelder', NULL, NULL),
(9, 'treva17@gmail.com', '90460', 'Miss Katlyn Fisher I', NULL, NULL),
(10, 'akoch@gmail.com', '88729', 'Tremaine Parisian', NULL, NULL),
(11, 'clovis59@hotmail.com', '56834', 'Prof. Arely Kunde DDS', NULL, NULL),
(12, 'stephan05@hotmail.com', '95557', 'Dr. Isabelle Heller', NULL, NULL),
(13, 'emelia.fritsch@gmail.com', '19318', 'Noemie Smith', NULL, NULL),
(14, 'hleuschke@yahoo.com', '12270', 'Jeanne Blick', NULL, NULL),
(15, 'mcdermott.emily@hotmail.com', '88951', 'Dr. Carmella Bechtelar IV', NULL, NULL),
(16, 'maybelle.kessler@hotmail.com', '61178', 'Murphy Bartell', NULL, NULL),
(17, 'yvette79@yahoo.com', '8440', 'Jazmin Rice', NULL, NULL),
(18, 'delaney25@yahoo.com', '16631', 'Prof. Xavier Leuschke', NULL, NULL),
(19, 'paucek.name@gmail.com', '98887', 'Rosie Krajcik', NULL, NULL),
(20, 'jalen.herman@hotmail.com', '47497', 'Karlee Nikolaus', NULL, NULL),
(21, 'tgreenfelder@hotmail.com', '78762', 'Kacie Larkin', NULL, NULL),
(22, 'kimberly.koss@hotmail.com', '65482', 'Dr. Russ Muller', NULL, NULL),
(23, 'randi65@yahoo.com', '86331', 'Daphne Wisozk DVM', NULL, NULL),
(24, 'schuster.raven@gmail.com', '13947', 'Meda Johnston', NULL, NULL),
(25, 'kayla.boyle@yahoo.com', '21221', 'Mr. Hayden Gutmann I', NULL, NULL),
(26, 'cremin.baylee@yahoo.com', '99401', 'Crystal Lesch V', NULL, NULL),
(27, 'stoltenberg.lynn@gmail.com', '34655', 'Avis Bartoletti I', NULL, NULL),
(28, 'qweimann@hotmail.com', '82244', 'Guido DuBuque IV', NULL, NULL),
(29, 'margarett67@gmail.com', '94409', 'Lucile Hodkiewicz', NULL, NULL),
(30, 'plabadie@yahoo.com', '32484', 'Ashton Hammes', NULL, NULL),
(31, 'agustina86@hotmail.com', '26162', 'Mr. Edwardo Volkman IV', NULL, NULL),
(32, 'umurray@yahoo.com', '24037', 'Bridget Corwin', NULL, NULL),
(33, 'hill.bart@yahoo.com', '43485', 'Prof. Eden Champlin DVM', NULL, NULL),
(34, 'bayer.lacey@hotmail.com', '21750', 'Aurelie Turner', NULL, NULL),
(35, 'zweissnat@yahoo.com', '12551', 'Dr. Rashad Littel II', NULL, NULL),
(36, 'idella.moore@yahoo.com', '30876', 'Keeley Raynor', NULL, NULL),
(37, 'lisa19@hotmail.com', '45603', 'Dr. Darrick Monahan PhD', NULL, NULL),
(38, 'xschaefer@yahoo.com', '57378', 'Maryam Stracke', NULL, NULL),
(39, 'baylee.schinner@gmail.com', '11795', 'Leopold Keebler', NULL, NULL),
(40, 'eda.reilly@hotmail.com', '82387', 'Mr. Judge Schmeler', NULL, NULL),
(41, 'meda.watsica@hotmail.com', '79548', 'Oleta Mills', NULL, NULL),
(42, 'admin2@gmail.com', 'admin', 'admin2', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorits`
--
ALTER TABLE `favorits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favorits`
--
ALTER TABLE `favorits`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorits`
--
ALTER TABLE `favorits`
  ADD CONSTRAINT `favorits_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `favorits_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ratings_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
