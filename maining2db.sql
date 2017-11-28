-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 27 2017 г., 22:18
-- Версия сервера: 5.5.48
-- Версия PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `maining2db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1511799328),
('m171127_160705_create_user_table', 1511799332),
('m171127_161147_create_score_table', 1511799332),
('m171127_161203_create_scoreoutput_table', 1511799332);

-- --------------------------------------------------------

--
-- Структура таблицы `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `score` double DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `score`
--

INSERT INTO `score` (`id`, `user_id`, `score`) VALUES
(1, 1, 1000);

-- --------------------------------------------------------

--
-- Структура таблицы `scoreoutput`
--

CREATE TABLE IF NOT EXISTS `scoreoutput` (
  `id` int(11) NOT NULL,
  `scoreid` int(11) DEFAULT NULL,
  `dateoutput` datetime DEFAULT NULL,
  `scoresum` double DEFAULT NULL,
  `scoreorg` varchar(255) DEFAULT NULL,
  `scorenumber` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `scoreoutput`
--

INSERT INTO `scoreoutput` (`id`, `scoreid`, `dateoutput`, `scoresum`, `scoreorg`, `scorenumber`) VALUES
(1, 1, '2017-11-27 21:11:34', 100, 'Киви', '11111111111111111111'),
(2, 1, '2017-11-27 22:17:19', 150, 'Яндекс', '22222222222222222222');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `status`) VALUES
(1, 'user1', 'user1', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `scoreoutput`
--
ALTER TABLE `scoreoutput`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `score`
--
ALTER TABLE `score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `scoreoutput`
--
ALTER TABLE `scoreoutput`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
