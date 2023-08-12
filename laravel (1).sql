-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 12 2023 г., 23:25
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
-- База данных: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_08_08_143856_create_users_table', 1),
(3, '2023_08_08_145706_add_admin_field_to_users_table', 1),
(4, '2023_08_11_114505_create_quizzes_table', 1),
(5, '2023_08_11_114630_create_questions_table', 1),
(6, '2023_08_11_115710_create_options_table', 1),
(7, '2023_08_11_115843_create_quiz_results_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `options`
--

CREATE TABLE `options` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `question_id` bigint UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `options`
--

INSERT INTO `options` (`id`, `created_at`, `updated_at`, `question_id`, `text`, `is_correct`) VALUES
(33, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 9, 'true', 0),
(34, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 9, '0', 1),
(35, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 9, 'false', 0),
(36, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 9, '1', 0),
(37, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 10, 'нет', 1),
(38, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 10, 'да', 0),
(39, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 11, '$x == 5', 0),
(40, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 11, '$x => 5', 0),
(41, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 11, '$x === 5', 0),
(42, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 11, '$x = 5', 1),
(43, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 12, 'да, без каких либо ошибок', 0),
(44, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 12, 'нет, выведет ошибку и завершится', 1),
(45, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 12, 'да, но выведет ошибку', 0),
(46, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 13, 'for', 0),
(47, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 13, 'isset', 1),
(48, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 13, 'while', 0),
(49, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 13, 'foreach', 0),
(50, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 14, 'boolean', 0),
(51, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 14, 'int', 1),
(52, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 14, 'string', 0),
(53, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 14, 'float', 0),
(54, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 15, '7', 0),
(55, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 15, '4', 1),
(56, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 15, '5', 0),
(57, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 15, '6', 0),
(58, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 16, 'if', 0),
(59, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 16, 'switch', 0),
(60, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 16, '===', 1),
(61, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 17, '7', 0),
(62, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 17, '3', 0),
(63, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 17, '2', 1),
(64, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 17, '4', 0),
(65, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 18, '$a = array();', 0),
(66, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 18, '$a = null;', 0),
(67, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 18, '$a = [];', 1),
(68, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 18, '$a = new Array();', 0),
(69, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 19, '0', 0),
(70, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 19, '1', 0),
(71, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 19, '5', 0),
(72, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 19, '2', 1),
(73, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 20, 'array_merge', 0),
(74, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 20, 'file_get_contents', 0),
(75, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 20, 'print_r', 1),
(76, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 21, '6', 0),
(77, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 21, '4', 0),
(78, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 21, '5', 1),
(79, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 21, '7', 0),
(80, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 22, 'интерпретируемым', 1),
(81, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 22, 'компилируемым', 0),
(82, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 23, 'да, но выведет ошибку', 0),
(83, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 23, 'да, без каких либо ошибок', 1),
(84, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 23, 'нет, выведет ошибку и завершится', 0),
(85, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 24, '-2', 0),
(86, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 24, '4', 0),
(87, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 24, '2', 1),
(88, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 24, '0', 0),
(89, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 25, 'символ доллара', 0),
(90, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 25, 'символ запятой', 1),
(91, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 25, 'символ точки', 0),
(92, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 26, 'setcookie', 0),
(93, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 26, 'readcookie', 1),
(94, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 26, 'deletecookie', 0),
(95, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 26, 'getcookie', 0),
(96, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 27, 'переводит цикл на следующую итерацию, обрывая выполнение текущей', 0),
(97, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 27, 'останавливает работу цикла', 1),
(98, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 28, 'да', 1),
(99, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 28, 'нет', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quiz_id` bigint UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `created_at`, `updated_at`, `quiz_id`, `text`) VALUES
(9, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 2, 'Что будет в переменной $result после выполнения кода $result = (true xor true)?'),
(10, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 2, 'Возможно ли на PHP писать рекурсивные функции?'),
(11, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 2, 'Как присвоить переменной значение?'),
(12, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 2, 'Продолжит ли код выполнение после выражения require 1.php; если файл 1.php не будет найден?'),
(13, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 2, 'Какая из этих конструкций не относится к циклам?'),
(14, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 2, 'Какой тип значения будет в переменной $a после выполнения кода $a = \'123\';?'),
(15, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 2, 'Что будет в переменной $result после выполнения кода $i = 5; $result = ++$i;?'),
(16, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 2, 'Какой из этих операторов не относится к группе условных?'),
(17, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 2, 'Что будет в переменной $result после выполнения кода $result = require 1.php, если в 1.php написан код <?php return 7 % 4;?'),
(18, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 2, 'Как нужно создавать новый массив?'),
(19, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 2, 'Что будет в переменной $x после выполнения кода $x = 5; $x % 2;?'),
(20, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 2, 'С помощью какой функции можно прочитать файл?'),
(21, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 2, 'Что будет в переменной $result после выполнения кода $i = 5; $result = $i++;?'),
(22, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 2, 'Каким является язык PHP?'),
(23, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 2, 'Продолжит ли код выполнение после выражения include 1.php; если файл 1.php не будет найден?'),
(24, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 2, 'Что будет в переменной $x после выполнения кода $x = 2; $x -= 2;?'),
(25, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 2, 'С помощью какого символа в PHP можно склеить 2 строки в одну?'),
(26, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 2, 'С помощью какой функции можно удалить Cookie?'),
(27, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 2, 'Что делает оператор break при вызове внутри цикла?'),
(28, '2023-08-12 12:38:03', '2023-08-12 12:38:03', 2, 'Можно ли встраивать PHP-код в HTML-код?');

-- --------------------------------------------------------

--
-- Структура таблицы `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `quizzes`
--

INSERT INTO `quizzes` (`id`, `created_at`, `updated_at`, `user_id`, `title`, `description`) VALUES
(2, '2023-08-12 12:16:23', '2023-08-12 12:16:23', 2, 'Что такое PHP', '<div>PHP (рекурсивный акроним словосочетания PHP: Hypertext Preprocessor) - это распространённый язык программирования общего назначения с открытым исходным кодом. PHP специально сконструирован для веб-разработок и его код может внедряться непосредственно в HTML.<br><br></div><div>Простой ответ, но что он может означать? Вот пример кода:<br><br></div><div><br><br></div><div><strong>Пример #1 Пример программирования на PHP<br></strong><br></div><div>&lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>&lt;head&gt;<br>&lt;title&gt;Пример&lt;/title&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;?php<br>&nbsp; &nbsp; &nbsp; &nbsp; echo \"Привет, я - скрипт PHP!\";<br>&nbsp; &nbsp; &nbsp; &nbsp; ?&gt;<br><br>&lt;/body&gt;<br>&lt;/html&gt;</div><div>Вместо рутинного вывода HTML-кода командами языка (как это происходит, например, в Perl или C), скрипт PHP содержит HTML с встроенным кодом (в нашем случае, это вывод текста \"Привет, я - скрипт PHP!\"). Код PHP отделяется специальными <a href=\"https://www.php.net/manual/ru/language.basic-syntax.phpmode.php\">начальным и конечным тегами &lt;?php и ?&gt;</a>, которые позволяют \"переключаться\" в \"PHP-режим\" и выходить из него.<br><br></div><div>PHP отличается от JavaScript тем, что PHP-скрипты выполняются на сервере и генерируют HTML, который посылается клиенту. Если бы у вас на сервере был размещён скрипт, подобный вышеприведённому, клиент получил бы только результат его выполнения, но не смог бы выяснить, какой именно код его произвёл. Вы даже можете настроить свой сервер таким образом, чтобы обычные HTML-файлы обрабатывались процессором PHP, так что клиенты даже не смогут узнать, получают ли они обычный HTML-файл или результат выполнения скрипта.<br><br></div><div>PHP крайне прост для освоения, но вместе с тем способен удовлетворить запросы профессиональных программистов. Не пугайтесь длинного списка возможностей PHP. Вы можете быстро начать, и уже в течение нескольких часов сможете создавать простые PHP-скрипты.<br><br></div><div>Хотя PHP, главным образом, предназначен для работы в среде веб-серверов, область его применения не ограничивается только этим. Читайте дальше и не пропустите главу <a href=\"https://www.php.net/manual/ru/intro-whatcando.php\">Возможности PHP</a> либо, начните непосредственно с <a href=\"https://www.php.net/manual/ru/tutorial.php\">Вводного руководства</a>, если вас интересует исключительно веб-программирование.<br><br></div>');

-- --------------------------------------------------------

--
-- Структура таблицы `quiz_results`
--

CREATE TABLE `quiz_results` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `quiz_id` bigint UNSIGNED NOT NULL,
  `score` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `quiz_results`
--

INSERT INTO `quiz_results` (`id`, `created_at`, `updated_at`, `user_id`, `quiz_id`, `score`) VALUES
(27, '2023-08-12 13:47:20', '2023-08-12 13:47:20', 2, 2, 45),
(28, '2023-08-12 14:39:45', '2023-08-12 14:39:45', 3, 2, 20),
(29, '2023-08-12 17:25:26', '2023-08-12 17:25:26', 4, 2, 30);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `name`, `email`, `avatar`, `active`, `admin`, `password`, `remember_token`) VALUES
(1, '2023-08-12 06:19:50', '2023-08-12 06:19:50', 'Roary Allen', 'heqeroqyko@mailinator.com', NULL, 1, 0, '$2y$10$vix3ZoP1Fsrq1QGc6vg6Ru4Fv.4CEzcT5DDTBuNJEP3oTl7VdOsgK', NULL),
(2, '2023-08-12 11:32:27', '2023-08-12 11:32:27', 'Admin', 'Admin@pvl.ru', NULL, 1, 1, '$2y$10$wbRVeWnLJ.o4V27eiXTLWuwy/tVPBwqF7C.2tOH5dp1iH.twXDr5q', NULL),
(3, '2023-08-12 13:51:29', '2023-08-12 13:51:29', 'User', 'user@pvl.kz', NULL, 1, 0, '$2y$10$PDOfZIxMz6WcSGilN0ddseqvmc8/smaBnceOTu2QoPnyrBzpZYgb.', NULL),
(4, '2023-08-12 17:25:15', '2023-08-12 17:25:15', 'Bert Tyson', 'fufa@mailinator.com', NULL, 1, 0, '$2y$10$dSkJnH7CTnziQq4.Vb6u.Ozb8hpk/9JGBMMe1sCxRn2I9n6hZcA0y', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_question_id_foreign` (`question_id`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_quiz_id_foreign` (`quiz_id`);

--
-- Индексы таблицы `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizzes_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `quiz_results`
--
ALTER TABLE `quiz_results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quiz_results_user_id_foreign` (`user_id`),
  ADD KEY `quiz_results_quiz_id_foreign` (`quiz_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `quiz_results`
--
ALTER TABLE `quiz_results`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Ограничения внешнего ключа таблицы `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`);

--
-- Ограничения внешнего ключа таблицы `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `quiz_results`
--
ALTER TABLE `quiz_results`
  ADD CONSTRAINT `quiz_results_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`),
  ADD CONSTRAINT `quiz_results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
