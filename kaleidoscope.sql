-- phpMyAdmin SQL Dump
-- version 4.2.12
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 04 2015 г., 16:15
-- Версия сервера: 5.5.40-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `kaleidoscope`
--

-- --------------------------------------------------------

--
-- Структура таблицы `action`
--

CREATE TABLE IF NOT EXISTS `action` (
`id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `date` date DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `pos` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `action_product`
--

CREATE TABLE IF NOT EXISTS `action_product` (
`id` int(11) NOT NULL,
  `action_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `number` int(11) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `pos` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `number`, `description`, `image`, `active`, `pos`, `category_id`) VALUES
(1, '2', 2, '2', '', 0, 2, NULL),
(2, '2', 2, '2', '', 0, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `group_param`
--

CREATE TABLE IF NOT EXISTS `group_param` (
`id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
('m000000_000000_base', 1432562118),
('m150525_135340_init', 1432730166);

-- --------------------------------------------------------

--
-- Структура таблицы `param`
--

CREATE TABLE IF NOT EXISTS `param` (
`id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `pos` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `group_param_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `photo_product`
--

CREATE TABLE IF NOT EXISTS `photo_product` (
`id` int(11) NOT NULL,
  `pos` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `price_new` int(11) DEFAULT NULL,
  `description` text,
  `latest` tinyint(1) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `pos` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `action`
--
ALTER TABLE `action`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `action_product`
--
ALTER TABLE `action_product`
 ADD PRIMARY KEY (`id`), ADD KEY `action_product_action_id_FK` (`action_id`), ADD KEY `action_product_product_id_FK` (`product_id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`), ADD KEY `category_category_id_FK` (`category_id`);

--
-- Индексы таблицы `group_param`
--
ALTER TABLE `group_param`
 ADD PRIMARY KEY (`id`), ADD KEY `group_param_category_id_FK` (`category_id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `param`
--
ALTER TABLE `param`
 ADD PRIMARY KEY (`id`), ADD KEY `param_group_param_id_FK` (`group_param_id`);

--
-- Индексы таблицы `photo_product`
--
ALTER TABLE `photo_product`
 ADD PRIMARY KEY (`id`), ADD KEY `photo_product_product_id_FK` (`product_id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`id`), ADD KEY `product_category_id_FK` (`category_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `action`
--
ALTER TABLE `action`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `action_product`
--
ALTER TABLE `action_product`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `group_param`
--
ALTER TABLE `group_param`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `param`
--
ALTER TABLE `param`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `photo_product`
--
ALTER TABLE `photo_product`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `action_product`
--
ALTER TABLE `action_product`
ADD CONSTRAINT `action_product_action_id_FK` FOREIGN KEY (`action_id`) REFERENCES `action` (`id`),
ADD CONSTRAINT `action_product_product_id_FK` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Ограничения внешнего ключа таблицы `category`
--
ALTER TABLE `category`
ADD CONSTRAINT `category_category_id_FK` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Ограничения внешнего ключа таблицы `group_param`
--
ALTER TABLE `group_param`
ADD CONSTRAINT `group_param_category_id_FK` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Ограничения внешнего ключа таблицы `param`
--
ALTER TABLE `param`
ADD CONSTRAINT `param_group_param_id_FK` FOREIGN KEY (`group_param_id`) REFERENCES `group_param` (`id`);

--
-- Ограничения внешнего ключа таблицы `photo_product`
--
ALTER TABLE `photo_product`
ADD CONSTRAINT `photo_product_product_id_FK` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
ADD CONSTRAINT `product_category_id_FK` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
