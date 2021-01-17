-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Дек 23 2020 г., 01:58
-- Версия сервера: 5.5.62-log
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
-- База данных: `mysite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `id_post` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `data` date NOT NULL,
  `title` varchar(80) DEFAULT NULL,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`id_post`, `id_user`, `data`, `title`, `text`) VALUES
(1, 1, '0000-00-00', '$title', '$text'),
(3, 1, '0000-00-00', 'тема 1', 'текст текст текст'),
(4, 2, '0000-00-00', 'тема 2', 'текст текст текст'),
(5, 3, '0000-00-00', 'тема 3', 'текст текст текст текст'),
(6, 3, '0000-00-00', 'тема 4', 'текст текст текст текст');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `name` varchar(12) NOT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `avatar` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `name`, `surname`, `city`, `email`, `password`, `avatar`) VALUES
(1, 'tatyana', 'vasilkovskaya', 'odessa', '$email', '$password', '<img src=\"./image/ekr_icons/tv.gif\"</img>'),
(2, 'olga', 'aleshina', NULL, NULL, 'qwerty', NULL),
(3, 'vasya', 'pupkin', 'kiev', 'sdfsf@fdgfg.com', 'qwerty', '3.jpg'),
(4, 'ivan', 'petrov', 'kharkov', 'sfd@fgf.com', 'qwerty', NULL),
(6, '$name', '$name_2', '$city', '$email', '$password', NULL),
(7, 'natalya', 'utesova', 'ivano-frankovsk', 'fdf@gnf.com', 'asdfg', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`),
  ADD KEY `id_user_3` (`id_user`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
