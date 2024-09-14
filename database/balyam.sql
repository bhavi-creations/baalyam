-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2024 at 08:51 AM
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
-- Database: `tripuraskin`
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
(8, '\"Summer Skin Care: Your Guide to Radiant Skin in the Heat\"', '<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">As the sun shines brighter and temperatures rise, it&#39;s essential to adapt your skincare routine to protect your skin from the harsh effects of summer. At Tripura Skin and Cosmetology Clinic, we understand the importance of maintaining healthy and glowing skin year-round. In this blog post, we&#39;ll share expert tips and highlight our services to help you achieve radiant skin this summer.</span></p><h1><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Hydration is Key</span></h1><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">The scorching summer sun can leave your skin dehydrated, leading to dullness and dryness. Ensure you drink plenty of water throughout the day to keep your skin hydrated from within.</span></p><h1><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">SPF Protection</span></h1><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Shield your skin from harmful UV rays by applying a broad-spectrum sunscreen with SPF 30 or higher daily, even on cloudy days. Our clinic offers a range of sunscreen products tailored to different skin types to provide optimal protection.</span></p><h1><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Hair Care in the Sun</span></h1><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Don&#39;t forget to protect your hair from sun damage by wearing a hat or using a UV-protective hair serum. Our hair care services include treatments to repair sun-damaged hair and keep your locks healthy and vibrant.</span></p><h1><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Combat Pigmentation</span></h1><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Excessive sun exposure can exacerbate pigmentation issues such as sunspots and melasma. Our pigmentation treatments target these concerns, helping you achieve an even and radiant complexion.</span></p><h1><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Age Control Solutions</span></h1><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Minimize the signs of aging caused by sun exposure with our age control treatments. From anti-aging serums to rejuvenating facials, we offer personalized solutions to address your specific skin concerns.</span></p><h1><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Say Goodbye to Dark Circles</span></h1><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Lack of sleep and sun exposure can contribute to dark circles under the eyes. Our clinic offers advanced treatments such as under-eye fillers and laser therapy to reduce dark circles and restore a youthful appearance.</span></p><h1><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Banish Acne and Scars</span></h1><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Keep acne at bay with our acne control treatments, which target acne-causing bacteria and reduce inflammation. Additionally, our acne scar treatments help fade scars and improve skin texture, giving you smooth and clear skin.</span></p><h1><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Glowing Skin Secrets</span></h1><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Achieve a radiant complexion with our glowing skin treatments, including chemical peels, microdermabrasion, and laser facials. These treatments exfoliate dead skin cells and stimulate collagen production for healthy and luminous skin.</span></p><h1><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Conclusion</span></h1><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">This summer, prioritize your skin&#39;s health and beauty with our expert tips and professional services at Tripura Skin and Cosmetology Clinic. Whether you&#39;re dealing with pigmentation issues, acne, or simply want to maintain a glowing complexion, we&#39;re here to help you look and feel your best all season long.</span></p><p></p>', '[\"66e52d84915e0_1726295428.png\",\"66e52d8491792_1726295428.png\",\"66e52d849189f_1726295428.png\",\"66e52d84919de_1726295428.png\"]', '66e52d84913e4_1726295428.mp4', '2024-09-14 06:30:28'),
(9, 'Beat the Heat: Summer Skin Care Tips for Glowing Skin', '<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">With the summer heat in full swing, it&#39;s time to revamp your skincare routine to keep your skin looking fresh and radiant. At Tripura Skin and Cosmetology Clinic, we specialize in providing personalized skincare solutions to address your unique needs. In this blog post, we&#39;ll share expert tips to help you maintain glowing skin all summer long, incorporating our range of services for optimal results.</span></p><h1><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Cleanse and Exfoliate</span></h1><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Start your summer skincare routine with a gentle cleanser to remove sweat, oil, and impurities that can clog pores and lead to breakouts. Incorporate exfoliation into your routine to slough off dead skin cells and reveal a brighter complexion. Our clinic offers professional exfoliating treatments to achieve smoother and more radiant skin.</span></p><h1><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Lightweight Moisturization</span></h1><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Opt for lightweight, non-comedogenic moisturizers to hydrate your skin without feeling heavy or greasy in the summer heat. Our moisturizing treatments are specially formulated to nourish and hydrate your skin, leaving it soft and supple.</span></p><h1><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Targeted Treatments for Sun Damage</span></h1><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">If you&#39;ve spent too much time in the sun, our clinic offers specialized treatments to repair and reverse sun damage. From antioxidant-rich serums to laser therapy, we have solutions to combat sunspots, fine lines, and other signs of sun damage.</span></p><h1><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Sun Protection Beyond SPF</span></h1><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">While sunscreen is essential, additional sun protection measures can help safeguard your skin from UV damage. Wear protective clothing, seek shade during peak sun hours, and don&#39;t forget to reapply sunscreen every two hours. Our clinic offers sun protection products and expert advice to keep your skin safe in the sun.</span></p><h1><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Cooling Treatments for Sunburn Relief</span></h1><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">If you do end up with a sunburn, soothe your skin with cooling treatments such as aloe vera gel or hydrating masks. Our clinic also offers calming treatments to reduce inflammation and redness caused by sunburn, helping your skin recover more quickly.</span></p><p></p>', '[\"66e52dc05d43a_1726295488.png\",\"66e52dc05d52e_1726295488.png\",\"66e52dc05d88e_1726295488.png\",\"66e52dc05d9a5_1726295488.png\"]', '66e52dc05d2aa_1726295488.mp4', '2024-09-14 06:31:28'),
(10, 'Summer Skin SOS: Solutions for Common Skin Concerns', '<p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">While summer brings warmth and sunshine, it can also bring about a host of skin concerns due to increased heat, humidity, and sun exposure. At Tripura Skin and Cosmetology Clinic, we understand the challenges of summer skincare and offer a range of solutions to address common concerns. In this blog post, we&#39;ll discuss some of the most prevalent summer skin issues and how our clinic can help you achieve healthier, happier skin.</span></p><h1><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Combatting Excessive Sweating</span></h1><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">With rising temperatures, many people experience excessive sweating, which can lead to discomfort and even skin irritation. Our clinic offers solutions such as botulinum toxin injections to reduce sweat production and keep you feeling fresh and confident throughout the summer months.</span></p><h1><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Treating Sunburn and Sun Damage</span></h1><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Despite our best efforts, sunburns can still occur, leaving the skin red, tender, and prone to peeling. Our clinic provides soothing treatments and skincare products to alleviate sunburn symptoms and promote healing. Additionally, we offer advanced therapies to address sun damage and minimize its long-term effects on the skin.</span></p><h1><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Preventing and Treating Heat Rash</span></h1><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Heat rash, also known as prickly heat, is a common summer skin condition caused by blocked sweat ducts. Our clinic offers gentle exfoliation treatments and soothing skincare products to prevent and alleviate heat rash, allowing your skin to breathe and stay comfortable in the heat.</span></p><h1><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Managing Oily Skin and Acne Breakouts</span></h1><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Hot and humid weather can exacerbate oily skin and lead to an increase in acne breakouts. Our clinic provides personalized skincare regimens and professional treatments to regulate oil production, unclog pores, and combat acne, leaving your skin clear and blemish-free.</span></p><h1><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Hydrating Dry and Dehydrated Skin</span></h1><p><span style=\"background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);\">Despite the heat, many people experience dry or dehydrated skin during the summer months due to factors such as air conditioning and sun exposure. Our clinic offers hydrating facials, moisturizing treatments, and skincare products to replenish lost moisture and restore balance to the skin.</span></p><p></p>', '[\"66e52de5976ed_1726295525.png\",\"66e52de5977d7_1726295525.png\",\"66e52de5978ae_1726295525.png\",\"66e52de59797d_1726295525.png\"]', '66e52de59756e_1726295525.mp4', '2024-09-14 06:32:05');

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
