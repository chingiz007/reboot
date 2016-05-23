-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 23 2016 г., 09:17
-- Версия сервера: 10.1.8-MariaDB
-- Версия PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `extreme_users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `extreme_users`
--

CREATE TABLE `extreme_users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `repeat_password` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `extreme_users`
--

INSERT INTO `extreme_users` (`id`, `username`, `password`, `repeat_password`, `Email`) VALUES
(2, 'chingiz', 'qwe', 'qwe', 'chinga_dancer@mail.ru'),
(3, 'chingiz', 'qw', 'qw', 'chinga_dancer@mail.ru'),
(4, 'qwe', 'as', 'as', 'zx'),
(5, 'will_smith', 'focus', 'focus', 'smith_01'),
(6, 'will_smith', '88', '88', 'smith_01'),
(7, 'asd', '777', '777', 'zxc'),
(8, 'chingiz', 'qwerty', 'qwerty', 'chinga_dancer@mail.ru');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `extreme_users`
--
ALTER TABLE `extreme_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `extreme_users`
--
ALTER TABLE `extreme_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
