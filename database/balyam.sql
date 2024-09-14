-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2024 at 02:22 PM
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
-- Database: `balyam`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` longtext NOT NULL,
  `photos` text NOT NULL,
  `video` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `photos`, `video`, `time`) VALUES
(11, 'Chairperson\'s Message', '<p><span style=\"background-color: rgb(240, 255, 255); color: var(--second-text-color, #737373);\">I present myself before you as a proud Guide &amp;a proud parent. Home prepares the child for future battles of life. Parental love and affection act as a protective shield while proper guidance and school provides the ammunition. A child&#39;s success or failure in life depends largely upon these vital determinants.</span></p><p><span style=\"background-color: rgb(240, 255, 255); color: var(--second-text-color, #737373);\">Most of the values and behaviour patterns are initiated at home &amp; the school environment merely establishes them firmly and permanently. Whenever I walk through the nearby forest nursery and look at the little saplings growing safely under big shady trees, I am reminded of my nursery schools. The &#39;Young saplings&#39; if provided fertile soil and favourable environment, can grow into tall, strong, verdant tress. An unfavourable climate turns them into warped, dead wood.</span></p><p><span style=\"background-color: rgb(240, 255, 255); color: var(--second-text-color, #737373);\">Schools with comfortable buildings, plenty of educational and recreational facilities delight all children. In addition to providing children with opportunities for all round development, they also imbibe them with a sense of belonging and pride. Our company Punch line is &quot;The Stamp of Quality &amp; Professionalism&quot; and each person in our organization ensure to deliver their best and in turn makes each of our parent believe in our punch line.</span></p><p><span style=\"background-color: rgb(240, 255, 255); color: var(--second-text-color, #737373);\">An education of the highest quality is the greatest gift that parents can give to their children. The next global generation will need an exceptional academic and intellectual creativity to take on a position of leadership and address the many challenges that face our world.</span></p><p><span style=\"background-color: rgb(240, 255, 255); color: var(--second-text-color, #737373);\">I feel that the best and the only solution is Balyam - The School with an innovative child. Hope so everything is Fine.</span></p><p><span style=\"background-color: rgb(240, 255, 255); color: var(--second-text-color, #737373);\">Thank you</span></p><p><span style=\"background-color: rgb(240, 255, 255); color: var(--second-text-color, #737373);\">Yours Subhash G</span></p><p></p>', '[\"66e5646804265_1726309480.jpg\",\"66e56468045e3_1726309480.jpg\",\"66e5646804842_1726309480.jpg\",\"66e56468049de_1726309480.webp\"]', '66e5646803feb_1726309480.mp4', '2024-09-14 10:24:40'),
(12, 'What Baalyam Provides for a kid ?', '<p><span style=\"background-color: rgb(254, 240, 255); color: var(--second-text-color, #737373);\">Baalyam Preschool is committed to providing a safe and nurturing environment for your child&#39;s early education journey. Our campus is designed to be conducive to learning, with stringent security measures in place.</span></p><p><span style=\"background-color: rgb(254, 240, 255); color: var(--second-text-color, #737373);\">We prioritize hygiene and maintain personalized health charts for each child. With our innovative educational approach, we foster a dynamic learning experience that encourages creativity and exploration.</span></p><p></p>', '[\"66e5648a6918c_1726309514.jpg\",\"66e5648a694fb_1726309514.jpg\",\"66e5648a697c8_1726309514.jpg\",\"66e5648a699fb_1726309514.webp\"]', '66e5648a68f52_1726309514.mp4', '2024-09-14 10:25:14'),
(13, 'What is Baalyam', '<p><span style=\"background-color: rgb(240, 255, 255); color: var(--second-text-color, #737373);\">&quot;Welcome to Baalyam Day Care, where we prioritize your child&#39;s holistic development from the very beginning. Our day care program aligns with the NEP 2020 guidelines, ensuring that your child receives the nurturing care and stimulation needed for optimal growth.</span></p><p><span style=\"background-color: rgb(240, 255, 255); color: var(--second-text-color, #737373);\">With a focus on cognitive, physical, and socio-emotional development, we provide a safe, supportive environment where children can thrive and explore. Trust Baalyam Preschool to be your child&#39;s home away from home, offering a blend of care and learning that sets the foundation for a bright future.&quot;</span></p><p><span style=\"background-color: rgb(255, 240, 250); color: rgb(51, 51, 51);\">We prioritise cognitive, physical, and socio-emotional development in a safe and supportive environment. Here, your child can thrive and explore, laying the groundwork for a bright future.At Baalyam Day Care, we provide a safe, nurturing environment where your child feels at home. Our holistic approach fosters cognitive, physical, and socio-emotional growth through carefully crafted activities, guided by our qualified and compassionate staff.</span><span style=\"background-color: rgb(240, 255, 255); color: rgb(51, 51, 51);\">Ready to enroll your child in Baalyam Day Care? Click below to get started. Our enrollment process is simple and straightforward, designed to accommodate your busy schedule. We look forward to welcoming your child into our nurturing community, where they&#39;ll thrive in a supportive environment tailored to their needs.</span></p>', '[\"66e564c51f045_1726309573.jpg\",\"66e564c51f1e7_1726309573.jpg\",\"66e564c51f352_1726309573.jpg\",\"66e564c51f4e9_1726309573.webp\"]', '66e564c51ee70_1726309573.mp4', '2024-09-14 10:26:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`) VALUES
(4, 'askoncologist', 'oncologist', 'askoncologist.@gmail.com', 'd54858f91c9a89ef37862262e543ffc2', '2024-06-17 09:54:17'),
(5, 'dhanwin', 'dhanwin', 'dhanwin@gmail.com', 'b34078f2746e9a27f8ef8e6244bf6e6a', '2024-09-12 09:19:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`first_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
