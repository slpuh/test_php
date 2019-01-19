-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Янв 19 2019 г., 15:26
-- Версия сервера: 5.7.24-0ubuntu0.18.04.1
-- Версия PHP: 7.2.14-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `traffic_count`
--

-- --------------------------------------------------------

--
-- Структура таблицы `traffic`
--

CREATE TABLE `traffic` (
  `period` date NOT NULL,
  `code` varchar(10) CHARACTER SET utf8 NOT NULL,
  `raw_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `traffic`
--

INSERT INTO `traffic` (`period`, `code`, `raw_count`) VALUES
('2019-01-18', 'kkkk', 32),
('2019-01-18', 'bbbb', 17),
('2019-01-18', 'aaaa', 6),
('2019-01-19', 'kkkk', 14),
('2019-01-19', 'aaaa', 10),
('2019-01-19', 'bbbb', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
