-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 14 2023 г., 05:39
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `ID` int(11) NOT NULL,
  `Name_P` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Text_P` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Images_P` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`ID`, `Name_P`, `Text_P`, `Images_P`) VALUES
(1, 'Название первой записи', 'Текст первой записи', NULL),
(2, 'Название второй записи', 'Текст второй записи', NULL),
(3, 'Название третей записи', 'Текст третей записи', NULL),
(4, 'Название четвертой записи', 'текст четвертой записи', NULL),
(5, 'Название пятой записи', 'Текст пятой записи', NULL),
(6, 'Название шестой записи', 'Текст шестой записи', NULL),
(7, 'Название седьмой записи', 'Текст седьмой записи', NULL),
(8, 'Название восьмой записи', 'Текст восьмой записи', NULL),
(9, 'Название девятой записи', 'Текст девятой записи', NULL),
(10, 'Название десятой записи', 'Текст десятой записи', NULL),
(11, 'Название одиннадцатой записи', 'Текст одиннадцатой записи', NULL),
(12, 'Название двенадцатой записи', 'Текст двенадцатой записи', NULL),
(13, 'Название тринадцатой записи', 'Текст тринадцатой записи', NULL),
(14, 'Название четырнадцатой записи', 'Текст четырнадцатой записи', NULL),
(15, 'Название пятнадцатой записи', 'Текст пятнадцатой записи', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
