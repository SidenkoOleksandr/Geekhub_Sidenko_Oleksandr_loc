-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 04 2019 г., 15:24
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `userdatabase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `passwordRepeat` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `firstName` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `lastName` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `age` int(3) UNSIGNED NOT NULL,
  `gender` varchar(6) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `passwordRepeat`, `firstName`, `lastName`, `age`, `gender`) VALUES
(29, 'WGR', 'sidoj85@gmail.com', 'erb', '', 'Alexander', 'Sidenko', 3, 'female'),
(30, 'WGR', 'sidoj85@gmail.com', 'erb', '', 'Alexander', 'Sidenko', 3, 'female'),
(31, 'donr', 'sidoj85@gmail.com', '1111', '', 'Alexander', 'Sidenko', 22, 'male'),
(32, 'donr', 'sidoj85@gmail.com', '1111', '', 'Alexander', 'Sidenko', 22, 'male');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
