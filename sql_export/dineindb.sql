-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:55 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dineindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredients` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allergens` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nutritional_facts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_halal` tinyint(1) NOT NULL,
  `is_vegan` tinyint(1) NOT NULL,
  `is_glutenfree` tinyint(1) NOT NULL,
  `price` double(8,2) NOT NULL,
  `is_available` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `category_id`, `name`, `image`, `description`, `ingredients`, `allergens`, `nutritional_facts`, `is_halal`, `is_vegan`, `is_glutenfree`, `price`, `is_available`, `created_at`, `updated_at`) VALUES
(1, 3, 'Chicken and Rice with White Yogurt Sauce - A Family Feast', '/images/dishes/HalalChickenWhiteRice.jpg', 'A tasty mediterranean dish compiled with steamed rice, flamed chicken and garnished with white sauce.', 'Chicken Thighs, Coriender, Garlic, Lettuce, Onion, Hot Sauce, Lemon Juice, Mayonnaise, Basmati Rice, Cumin ground', 'Contains wheat(bread), Cumin ground', 'Calories: 1130cal, Protein: 3.1g, Fat: 60g, Carbs: 45g, Cholestrol: 5mg', 1, 0, 0, 1639.00, 1, '2020-04-20 13:14:19', '2020-04-20 13:14:19'),
(2, 2, 'One Pot Cheesy Taco Orzot', '/images/dishes/CheezyTacoOrzo.jpg', 'Orzo is small cut pasta that tastes heavenly in big entrees packed with a lot of proteins and variety of veggies swirled up in a lot of cheese.', 'Onion, Garlic, Orzo, Broth, Hot Sauce, Cheese, Veggies, Seasoning, Taco Sauce', 'Olives, Garlic, Seasoning', 'Calories: 950cal, Protein: 4.1g, Fat: 70g, Carbs: 48g, Cholestrol: 6mg', 0, 0, 1, 1369.00, 1, '2020-04-20 13:14:19', '2020-04-20 13:14:19'),
(3, 3, 'Roasted Garlic Butter Parmesan Potatoes', '/images/dishes/GarlicParmesanPotatoes.jpg', 'These epic roasted potatoes with garlic butter parmesan are crispy and golden on the outside and fluffy on the inside.', 'Red Potatoes, Olive Oil, Garlic, Black Petter, Italian Seasoning, Un-salted Butter, Parsley, Bacon', 'Potatoes, Olive Oil', 'Calories: 750cal, Protein: 3.2g, Fat: 50g, Carbs: 26g, Cholestrol: 3mg', 0, 1, 1, 1369.00, 1, '2020-04-20 13:14:19', '2020-04-20 13:14:19'),
(4, 3, 'Lentil Dal and Rice', '/images/dishes/LentilDaalRice.jpg', 'A spicy and nutritious lentil curry served with rice and corriender.', 'Lentils, Coconut Milk, Lemon Juice, Curry Powder, Tamarind, Curry Paste', 'Tamrind, Seasoning', 'Calories: 650cal, Protein: 3.8g, Fat: 50g, Carbs: 26g, Cholestrol: 3mg', 0, 1, 0, 1599.00, 1, '2020-04-20 13:14:19', '2020-04-20 13:14:19'),
(5, 4, 'Pumpkin Pie', '/images/dishes/PumpkinPie.jpg', 'A sweet gluten-free pumpkin pie made with almond crust and coconut cream based pumpkin custard.', 'Pumpkin Puree, Eggs, Maple Syrup, Almond Flour, Baking Soda, Vanilla, Coconut Oil and Cream', 'Coconut, Pumpkin', 'Calories: 900cal, Protein: 2g, Fat: 53g, Carbs: 15g, Cholestrol: 10mg', 0, 0, 1, 899.00, 1, '2020-04-20 13:14:19', '2020-04-20 13:14:19'),
(6, 3, 'Garlic Butter Shrimp', '/images/dishes/GarlicButterShrimp.jpg', 'Creamy fresh shrimps seasoned with Garlic and Herbs and some italian seasonings.', 'Shrimp, Garlic, Lemon, Parsley, Italian Seasoning, Pepper, Salt, Butter', 'Parsley, Shrimp, Pepper', 'Calories: 950cal, Protein: 6g, Fat: 35g, Carbs: 26g, Cholestrol: 5mg', 0, 0, 1, 1369.00, 1, '2020-04-20 13:14:19', '2020-04-20 13:14:19'),
(7, 1, 'Crunchy Taco Cups', '/images/dishes/TacoCups.jpg', 'Crunchy Tacos Made With Italian Herbs and Seasonings and baked tomatoes, in a muffin tin.', 'Meat, Diced Tomatoes, Taco seasoning, Wonton Wrappers, Chedder Cheese', '', 'Calories: 850cal, Protein: 4g, Fat: 25g, Carbs: 26g, Cholestrol: 5mg', 0, 0, 0, 1129.00, 1, '2020-04-20 13:14:19', '2020-04-20 13:14:19'),
(8, 1, 'Mediterranean Nachos', '/images/dishes/MediterraneanNachos.jpg', 'Tangy and Tasty Vegetarian Appetizer with Crispy Pita Bread and Hummus.', 'Banana Peppers, Chick Peas, Cucumber, Dill, Onion, Hummus, Kalamatta Olives, Greek Yoghurt', 'Chick Peas, Dill, Kalamatta Olives', 'Calories: 557cal, Protein: 2g, Fat: 10g, Carbs: 7g, Cholestrol: 5mg', 0, 1, 0, 1129.00, 1, '2020-04-20 13:14:19', '2020-04-20 13:14:19'),
(9, 1, 'Mini Quiches', '/images/dishes/MiniQuiches.jpg', 'Salty mini quiches garnished with onions, ham and grated cheese.', 'Ham, Onion, Eggs, Puff Pastry, Grated Cheese, Cream', 'Eggs, Onion, Cheese', 'Calories: 950cal, Protein: 6g, Fat: 12g, Carbs: 7g, Cholestrol: 15mg', 0, 1, 0, 1128.00, 1, '2020-04-20 13:14:19', '2020-04-20 13:14:19'),
(10, 5, 'Fresh Peach Margaritas', '/images/dishes/PeachMargaritas.jpg', 'Fresh peach margaritas with cool peach slices and a shot of tequila.', 'Lime, Peaches, Lime Juice, Orange Juice, Tequila', '', 'Calories: 300cal, Protein: 0g, Fat: 0g, Carbs: 0g, Cholestrol: 0mg', 0, 0, 0, 1128.00, 1, '2020-04-20 13:14:19', '2020-04-20 13:14:19'),
(11, 1, 'Avocado Spinach Salad', '/images/dishes/AvocadoSpinachSalad.jpg', 'Fruitful Avocados with a sharp bite of red onions', 'Spinach leaves, Avocados, Red Onion', 'Onions', 'Calories: 50cal, Protein: 0g, Fat: 0g, Carbs: 0g, Cholestrol: 1mg', 0, 0, 0, 899.00, 1, '2020-04-20 13:21:43', '2020-04-20 13:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `dish_categories`
--

CREATE TABLE `dish_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dish_categories`
--

INSERT INTO `dish_categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'appetizer', '2020-04-20 13:14:18', '2020-04-20 13:14:18'),
(2, 'breakfast', '2020-04-20 13:14:18', '2020-04-20 13:14:18'),
(3, 'main_course', '2020-04-20 13:14:18', '2020-04-20 13:14:18'),
(4, 'dessert', '2020-04-20 13:14:18', '2020-04-20 13:14:18'),
(5, 'beverages', '2020-04-20 13:14:18', '2020-04-20 13:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_04_10_200009_create_roles_table', 1),
(4, '2020_04_18_205344_create_dishes_table', 1),
(5, '2020_04_18_211403_create_dish_categories_table', 1),
(6, '2020_04_18_213617_create_userpreferences_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-04-20 13:14:18', '2020-04-20 13:14:18'),
(2, 'author', '2020-04-20 13:14:18', '2020-04-20 13:14:18'),
(3, 'user', '2020-04-20 13:14:18', '2020-04-20 13:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` bigint(20) NOT NULL DEFAULT 3,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test Admin', 'admin@test.com', NULL, '$2y$10$Coj39NqpDcMqVtaEDDn3BuvhvMPNjHP2KZq784lNVYLAb0Yehht9i', 1, NULL, '2020-04-20 13:14:18', '2020-04-20 13:18:06'),
(2, 'User', 'user@test.com', NULL, '$2y$10$y3DztfAu4NlmOijxh0FBEuM1bcSeUxjHjw4lE9vQ3oxOquyV20wGy', 3, NULL, '2020-04-20 13:14:18', '2020-04-20 13:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `user_preferences`
--

CREATE TABLE `user_preferences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `is_halal` tinyint(1) NOT NULL,
  `is_vegan` tinyint(1) NOT NULL,
  `is_glutenfree` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dish_categories`
--
ALTER TABLE `dish_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_preferences`
--
ALTER TABLE `user_preferences`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dish_categories`
--
ALTER TABLE `dish_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_preferences`
--
ALTER TABLE `user_preferences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
