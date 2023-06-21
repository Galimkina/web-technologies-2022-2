-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 21 2023 г., 10:12
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lessons21`
--

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `price`, `description`, `image`) VALUES
(1, 'Пицца баварская', 350, 'Отведав Баварскую пиццу, вы на миг перенесетесь в этот мир вкусного пива, аттракционов и баварских сосисок, известных всему миру. Хрустящие маринованные огурчики и лук, горчичный соус и сыр «Моцарелла», и главный компонент – сосиски с сыром, от вкуса которых просто захватывает дух', 'баварская.webp'),
(2, 'Пицца маргарита', 450, 'Классическая итальянская пицца. Мягкое внутри и хрустящее снаружи тесто, сочетание расплавленного сыра и помидоров, пикантный аромат базилика сделали это блюдо любимым во всем мире', 'маргарита.webp'),
(3, 'Пицца пепперони', 500, 'Пицца \"Пепперони\" покоряет удивительным, пикантным вкусом. Нежное дрожжевое тесто идеально сочетается с кисло-сладким томатным соусом, ароматными травами, тягучим солоноватым сыром и тонкими ломтиками острой колбасы, задающей тон всей вкусовой палитре', 'пепперони.webp');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT '',
  `feedback` text,
  `catalogId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`, `catalogId`) VALUES
(1, 'Taliana81', 'Сочная и немного пряная. Пикантная колбаска очень вкусная. Моцарелла слегка тянется. В целом пицца очень гармоничная по вкусу. Корочка хрустящая, но не жесткая. Дети не оставляют корочку, съедают всё до конца.\nПицца всегда приезжает горячей, ни разу не было, чтобы приехала уже остывшей.\nМне еще нравится особенный подход к клиентам в этой компании. Два или уже три года, как заказываем пиццу и всё всегда было отлично. \nПродолжим заказывать пиццу и дальше. Дети считают ее самой вкусной из всех что они пробовали именно в нашем городе.', 3),
(2, 'dimidrol', 'Продолжая тему вкусной пиццы, решил написать еще об одной пицце, которая мне очень нравится. Это пицца До До \"Маргарита. Вкусное тонкое тесто, много сыра, качественная пицца. Советую и Вам попробовать, если Вы любитель пиццы. Мои дочки тоже оценили этот вкус.', 2),
(3, 'Владимир', 'Мы с женой очень довольны, остренько, вкусно. Из всех перепробованных пицц эта самая лучшая.', 1),
(4, 'Anna18', 'Самая вкусная пицца', 3),
(5, 'Ирина', 'Очень вкусная пицца!', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
