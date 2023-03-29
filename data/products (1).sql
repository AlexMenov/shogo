-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 29 2023 г., 18:42
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `products`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `articul` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `currency_id` int(10) UNSIGNED DEFAULT NULL,
  `price_old` decimal(10,2) NOT NULL,
  `notice` text,
  `content` text,
  `visible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `position`, `url`, `name`, `articul`, `price`, `currency_id`, `price_old`, `notice`, `content`, `visible`) VALUES
(67, 12080653, 'https://images.biggeek.ru/1/435/6229/16137-69682375.jpg', 'Google Pixel 6 Pro', 'GP6-PRO', '77990.00', 643, '84990.00', '', 'Смартфон Google Pixel 6 Pro с диагональю экрана 6.7 дюйма, 12 ГБ оперативной памяти и 256 ГБ встроенной памяти.', 1),
(82, 13289404, 'https://bookonlime.ru/sites/default/files/node/product-pdf/fizvys.jpg', 'Физика высоких энергий', 'FVE-246', '1099.00', 643, '750.00', 'Новинка', 'Описание книги 4', 1),
(73, 26029133, 'https://www.notebookcheck-ru.com/uploads/tx_nbc2/ThinkPad_X1_Carbon_G9_Black_05.jpg', 'Lenovo ThinkPad X1 Carbon', 'LTP-X1C', '119990.00', 643, '129990.00', '', 'Ноутбук с экраном 14 дюймов, процессором Intel Core i5 и 512 ГБ SSD', 1),
(65, 26727897, 'https://orderit.ru/data/big/iphone-13-pro-silver_5.png', 'Apple iPhone 13 Pro', 'IP13-PRO', '89990.00', 643, '99990.00', '', 'Смартфон Apple iPhone 13 Pro с диагональю экрана 6.1 дюйма, 6 ГБ оперативной памяти и 128 ГБ встроенной памяти.', 1),
(91, 30080963, 'https://www.moscowbooks.ru/image/book/729/orig/i729635.jpg?cu=20210917174544', 'Дюна', 'FB-DUN-003', '799.00', 643, '899.00', 'Скидка -11%', 'Описание книги', 1),
(92, 40525982, 'https://basket-01.wb.ru/vol21/part2150/2150021/images/big/1.jpg', 'Марсианин', 'FB-MRS-004', '699.00', 643, '799.00', 'Скидка -13%', 'Описание книги', 1),
(94, 43008161, 'https://www.androidauthority.com/wp-content/uploads/2021/06/Huawei-P50-Pro-black-2048w-1152h.jpg', 'HUAWEI P50 Pro', 'HUAWEI P50 Pro', '27500.00', 643, '30000.00', 'no', 'Смартфон Huawei Mate 50 Pro 8+256GB Silver (DCO-LX9) подходит для повседневного применения и обеспечивает высокое быстродействие. Модель поддерживает высокую скорость мобильного интернета, а встроенный модуль NFC служит для бесконтактной оплаты покупок. ', 1),
(84, 45042179, 'https://img4.labirint.ru/rc/41a0fc6a3af7ebddc96e5f700e5d65d9/363x561q80/books20/192406/cover.jpg?1612437912', 'Гордость и предубеждение', 'GB-PRD-01', '550.00', 643, '650.00', '', 'Роман знаменитой английской писательницы Джейн Остин', 1),
(86, 45791346, 'https://main-cdn.sbermegamarket.ru/big1/hlr-system/1725198/100022947088b0.jpg', 'Ромео и Джульетта', 'RD-01', '350.00', 643, '400.00', '', 'Трагедия Уильяма Шекспира', 1),
(88, 47444749, 'https://img3.labirint.ru/rc/1927058a57537edd854803f93079075d/363x561q80/books67/668307/cover.jpg?1618673120', 'Мастер и Маргарита', 'MIM-01', '600.00', 643, '750.00', '', 'Роман Михаила Булгакова', 1),
(85, 54665857, 'https://www.moscowbooks.ru/image/book/415/orig/i415823.jpg?cu=20180101000000', 'Анна Каренина', 'AK-01', '450.00', 643, '550.00', '', 'Роман Льва Толстого', 1),
(90, 58337253, 'https://img3.labirint.ru/rc/38fe45d40d55ae0636988742be62ffe0/363x561q80/books48/475199/cover.jpg?1612679124', 'Автостопом по галактике', 'FB-HG-002', '499.00', 643, '800.00', '', 'Описание книги', 1),
(77, 58979251, 'https://rostov.store123.ru/upload/iblock/c4d/c4d5d680d2d5ff68782bb3b6d1464e3c.jpg', 'Наушники JBL Quantum 800', 'JBLQ-800', '17990.00', 643, '20990.00', '', 'Описание товара', 1),
(81, 60768949, 'https://img1.labirint.ru/rcimg/8d030fe95516d64fd640990b1d60a440/960x540/books70/696855/ph_001.jpg?1564205066', 'История науки', 'IN-789', '899.00', 643, '1099.00', '', 'Описание книги 3', 1),
(64, 64839232, 'https://avatars.mds.yandex.net/get-mpic/4380539/img_id7341649431705533527.jpeg/orig', 'Samsung Galaxy S21', 'SMG-S21', '59990.00', 643, '69990.00', '', 'Смартфон Samsung Galaxy S21 с диагональю экрана 6.2 дюйма, 8 ГБ оперативной памяти и 128 ГБ встроенной памяти.', 1),
(71, 69176343, 'https://www.notebookcheck-ru.com/uploads/tx_nbc2/G14-White-53_05.jpg', 'ASUS ROG Zephyrus G14', 'ARZ-G14', '149990.00', 643, '159990.00', '', 'Ноутбук для игр с экраном 14 дюймов, процессором AMD Ryzen 9 и NVIDIA GeForce RTX 3060', 1),
(89, 69318717, 'https://img3.labirint.ru/rc/6bb8355884baec99d811ed3a6c5c73a9/363x561q80/books53/522189/cover.jpg?1455276422', 'Фундамент', 'FB-FND-001', '599.00', 643, '799.00', 'Скидка -25%', 'Книга о фундаменте', 1),
(72, 70005763, 'https://www.notebookcheck-ru.com/uploads/tx_nbc2/spectreteaser.png', 'HP Spectre x360', 'HPS-X360', '129990.00', 643, '139990.00', '', 'Ультрабук с экраном 13.3 дюйма, процессором Intel Core i7 и 1 ТБ SSD', 1),
(78, 70155046, 'https://avatars.mds.yandex.net/get-mpic/1923211/img_id2024942926140111203.png/orig', 'Наушники AKG K371-BT', 'AKGK371-BT', '17990.00', 643, '20000.00', '', 'Описание товара', 1),
(83, 74234566, 'https://img4.labirint.ru/rc/d2512f824052881e74c84438490df278/363x561q80/books57/563782/cover.jpg?1563960431', 'История математики', 'IM-369', '799.00', 643, '750.00', 'Лучшая цена', 'Описание книги 5', 1),
(69, 74761981, 'https://avatars.mds.yandex.net/get-mpic/5032583/img_id3683841579270874537.jpeg/orig', 'Apple MacBook Pro 16', 'MBP-16', '199990.00', 643, '219990.00', '', 'Ноутбук с экраном 16 дюймов, процессором Intel Core i9 и 1 ТБ SSD', 1),
(75, 77116204, 'https://img.mvideo.ru/Pdb/50052461b.jpg', 'Наушники Bose QuietComfort 35', 'BOQC-35', '27990.00', 643, '32990.00', '', 'Описание товара', 1),
(74, 79259153, 'https://avatars.mds.yandex.net/get-mpic/4386141/img_id3192445659604357803.jpeg/orig', 'Наушники Sony WH-1000XM4', 'SOWH-1000X', '31990.00', 643, '36990.00', '', 'Описание товара', 1),
(80, 80687443, 'https://img3.labirint.ru/rc/71ebeecd32635811ba6ec3e999d8cbce/363x561q80/books84/839049/cover.jpg?1641889545', 'Введение в генетику', 'VG-456', '599.00', 643, '699.00', '', 'Описание книги 2', 1),
(76, 85516979, 'https://avatars.mds.yandex.net/get-mpic/4397006/img_id2430757499298577499.jpeg/orig', 'Наушники Sennheiser Momentum', 'SEM-MOM', '35990.00', 643, '40990.00', '', 'Описание товара', 1),
(87, 85821615, 'https://cv4.litres.ru/pub/c/cover_max1500/66691848.jpg', 'Война и мир', 'VIM-01', '700.00', 643, '850.00', '', 'Роман Льва Толстого', 1),
(68, 87062493, 'https://avatars.mds.yandex.net/get-mpic/5173149/img_id6291729731868926805.png/orig', 'Xiaomi Mi 12 Ultra', 'XMI12-ULT', '79990.00', 643, '89990.00', '', 'Смартфон Xiaomi Mi 12 Ultra с диагональю экрана 6.7 дюйма, 12 ГБ оперативной памяти и 256 ГБ встроенной памяти.', 1),
(66, 87961664, 'https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/71V13OxJg-S._SL1500_.jpg', 'OnePlus 9 Pro', 'OP9-PRO', '67990.00', 643, '75990.00', '', 'Смартфон OnePlus 9 Pro с диагональю экрана 6.7 дюйма, 12 ГБ оперативной памяти и 256 ГБ встроенной памяти.', 1),
(93, 91185585, 'https://cv2.litres.ru/pub/c/cover_200/126828.jpg', 'Измененный углерод', 'FB-ALT-005', '899.00', 643, '900.00', '', 'Описание книги', 1),
(79, 93783832, 'https://img2.labirint.ru/rcimg/6916281973a772173f5b1e316f1e2015/960x540/books72/719288/ph_001.jpg?1642091102', 'Космические явления', 'KJ-123', '799.00', 643, '999.00', '', 'Описание книги 1', 1),
(70, 95665203, 'https://www.notebookcheck-ru.com/uploads/tx_nbc2/xps_13_plus_9320.jpg', 'Dell XPS 13', 'DXPS-13', '89990.00', 643, '99990.00', '', 'Ультрабук с экраном 13 дюймов, процессором Intel Core i7 и 512 ГБ SSD', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product_assignment`
--

CREATE TABLE `product_assignment` (
  `id` int(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_assignment`
--

INSERT INTO `product_assignment` (`id`, `product_id`, `section_id`, `type_id`, `visible`) VALUES
(72, 12080653, 1, 1, 1),
(87, 13289404, 2, 4, 1),
(78, 26029133, 1, 2, 1),
(70, 26727897, 1, 1, 1),
(96, 30080963, 2, 6, 1),
(97, 40525982, 2, 6, 1),
(89, 45042179, 2, 5, 1),
(91, 45791346, 2, 5, 1),
(93, 47444749, 2, 5, 1),
(90, 54665857, 2, 5, 1),
(95, 58337253, 2, 6, 1),
(82, 58979251, 1, 3, 1),
(86, 60768949, 2, 4, 1),
(69, 64839232, 1, 1, 1),
(76, 69176343, 1, 2, 1),
(94, 69318717, 2, 6, 1),
(77, 70005763, 1, 2, 1),
(83, 70155046, 1, 3, 1),
(88, 74234566, 2, 4, 1),
(74, 74761981, 1, 2, 1),
(80, 77116204, 1, 3, 1),
(79, 79259153, 1, 3, 1),
(85, 80687443, 2, 4, 1),
(81, 85516979, 1, 3, 1),
(92, 85821615, 2, 5, 1),
(73, 87062493, 1, 1, 1),
(71, 87961664, 1, 1, 1),
(98, 91185585, 2, 6, 1),
(84, 93783832, 2, 4, 1),
(75, 95665203, 1, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product_param_name`
--

CREATE TABLE `product_param_name` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` int(11) DEFAULT '0',
  `visible` tinyint(1) NOT NULL,
  `name` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_param_name`
--

INSERT INTO `product_param_name` (`id`, `position`, `visible`, `name`) VALUES
(3, 1, 1, 'color'),
(4, 2, 1, 'storage'),
(5, 3, 1, 'time'),
(6, 4, 1, 'version');

-- --------------------------------------------------------

--
-- Структура таблицы `product_param_value`
--

CREATE TABLE `product_param_value` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_param_name_position` int(2) NOT NULL,
  `product_param_variant_position` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_param_value`
--

INSERT INTO `product_param_value` (`id`, `product_id`, `product_param_name_position`, `product_param_variant_position`) VALUES
(1, 64839232, 1, 1),
(2, 64839232, 1, 3),
(3, 64839232, 1, 2),
(4, 64839232, 2, 5),
(5, 64839232, 2, 6),
(6, 64839232, 2, 7),
(7, 26727897, 1, 1),
(8, 26727897, 1, 3),
(9, 26727897, 1, 2),
(10, 26727897, 2, 5),
(11, 26727897, 2, 6),
(12, 26727897, 2, 7),
(13, 87961664, 1, 1),
(14, 87961664, 1, 3),
(15, 87961664, 2, 5),
(16, 87961664, 2, 7),
(17, 12080653, 1, 3),
(18, 12080653, 1, 2),
(19, 12080653, 2, 6),
(20, 12080653, 2, 7),
(21, 87062493, 1, 1),
(22, 87062493, 1, 2),
(23, 87062493, 2, 5),
(24, 87062493, 2, 6),
(25, 74761981, 1, 1),
(26, 74761981, 1, 2),
(27, 74761981, 2, 8),
(28, 95665203, 1, 1),
(29, 95665203, 1, 2),
(30, 95665203, 1, 4),
(31, 95665203, 2, 8),
(32, 69176343, 1, 1),
(33, 69176343, 1, 2),
(34, 69176343, 1, 4),
(35, 69176343, 2, 8),
(36, 70005763, 1, 4),
(37, 70005763, 2, 8),
(38, 26029133, 1, 2),
(39, 26029133, 1, 4),
(40, 26029133, 2, 8),
(41, 79259153, 1, 1),
(42, 79259153, 1, 2),
(43, 79259153, 1, 4),
(44, 79259153, 3, 10),
(45, 79259153, 3, 11),
(46, 77116204, 1, 1),
(47, 77116204, 1, 2),
(48, 77116204, 1, 4),
(49, 77116204, 3, 10),
(50, 77116204, 3, 11),
(51, 85516979, 1, 1),
(52, 85516979, 1, 2),
(53, 85516979, 1, 4),
(54, 85516979, 3, 10),
(55, 85516979, 3, 11),
(56, 58979251, 1, 1),
(57, 58979251, 1, 2),
(58, 58979251, 1, 4),
(59, 58979251, 3, 10),
(60, 58979251, 3, 11),
(61, 70155046, 1, 1),
(62, 70155046, 1, 2),
(63, 70155046, 1, 4),
(64, 70155046, 3, 10),
(65, 70155046, 3, 11),
(66, 93783832, 4, 12),
(67, 80687443, 4, 12),
(68, 60768949, 4, 12),
(69, 13289404, 4, 12),
(70, 74234566, 4, 12),
(71, 45042179, 4, 12),
(72, 54665857, 4, 12),
(73, 45791346, 4, 12),
(74, 85821615, 4, 12),
(75, 47444749, 4, 12),
(76, 69318717, 4, 12),
(77, 58337253, 4, 12),
(78, 30080963, 4, 12),
(79, 40525982, 4, 12),
(80, 91185585, 4, 12);

-- --------------------------------------------------------

--
-- Структура таблицы `product_param_variant`
--

CREATE TABLE `product_param_variant` (
  `id` int(10) UNSIGNED NOT NULL,
  `param_id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `position` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_param_variant`
--

INSERT INTO `product_param_variant` (`id`, `param_id`, `name`, `position`) VALUES
(1, 1, 'red', 1),
(2, 2, 'blue', 1),
(3, 3, 'green', 1),
(4, 4, 'black', 1),
(5, 5, '64 GB', 2),
(6, 6, '128 GB', 2),
(7, 7, '256 GB', 2),
(8, 8, '1000 HDD', 2),
(9, 9, '1000 HDD', 2),
(10, 10, '4 hours', 3),
(11, 11, '6 hours', 3),
(12, 12, 'book', 4),
(13, 13, 'book', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `product_section`
--

CREATE TABLE `product_section` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` int(11) DEFAULT '0',
  `url` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `notice` text,
  `visible` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_section`
--

INSERT INTO `product_section` (`id`, `position`, `url`, `name`, `notice`, `visible`) VALUES
(1, 1, 'electronics', 'electronics', 'electronics', 1),
(2, 2, 'books', 'books', 'books', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product_type`
--

CREATE TABLE `product_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` int(11) DEFAULT '0',
  `url` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `notice` text,
  `visible` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_type`
--

INSERT INTO `product_type` (`id`, `position`, `url`, `name`, `notice`, `visible`) VALUES
(1, 1, 'smartphones', 'smartphones', 'smartphones', 1),
(2, 1, 'laptops', 'laptops', 'laptops', 1),
(3, 1, 'headphones', 'headphones', 'headphones', 1),
(4, 2, 'sience', 'sience', 'sience', 1),
(5, 2, 'romance', 'romance', 'romance_books', 1),
(6, 2, 'fantasy', 'fantasy', 'fantasy_books', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_login`, `user_password`) VALUES
(1, 123456789, 'menovlex@mail.ru', 'menovlex123456');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`position`),
  ADD UNIQUE KEY `url` (`url`),
  ADD KEY `currency_id` (`currency_id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `product_assignment`
--
ALTER TABLE `product_assignment`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `section_id` (`section_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `visible` (`visible`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `product_param_name`
--
ALTER TABLE `product_param_name`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_param_value`
--
ALTER TABLE `product_param_value`
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `product_param_variant`
--
ALTER TABLE `product_param_variant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `value` (`param_id`,`name`(64)),
  ADD KEY `param_id` (`param_id`);

--
-- Индексы таблицы `product_section`
--
ALTER TABLE `product_section`
  ADD PRIMARY KEY (`id`),
  ADD KEY `url` (`url`);

--
-- Индексы таблицы `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `url` (`url`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT для таблицы `product_assignment`
--
ALTER TABLE `product_assignment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT для таблицы `product_param_name`
--
ALTER TABLE `product_param_name`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `product_param_value`
--
ALTER TABLE `product_param_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT для таблицы `product_param_variant`
--
ALTER TABLE `product_param_variant`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `product_section`
--
ALTER TABLE `product_section`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `product_assignment`
--
ALTER TABLE `product_assignment`
  ADD CONSTRAINT `product_assignment_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`position`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
