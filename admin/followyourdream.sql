-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 12 2016 г., 10:07
-- Версия сервера: 5.5.45
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `followyourdream`
--

-- --------------------------------------------------------

--
-- Структура таблицы `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `calendarMonthId` varchar(255) NOT NULL,
  `calendarNameMonth` varchar(255) NOT NULL,
  `calendarBgImg` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `calendar`
--

INSERT INTO `calendar` (`id`, `calendarMonthId`, `calendarNameMonth`, `calendarBgImg`) VALUES
(1, 'jan', 'Январь 2017', 'img/uploads/581f256871884.jpg'),
(2, 'jan', 'Февраль 2017', 'img/uploads/581f256871e6d.jpg'),
(3, 'jan', 'Март 2017', 'img/uploads/581f25687223e.jpg'),
(4, 'jan', 'Апрель 2017', 'img/uploads/581f256872639.jpg'),
(5, 'jan', 'Май 2017', 'img/uploads/581f256872b50.jpg'),
(6, 'jan', 'Июнь 2017', 'img/uploads/581f256872fc8.jpg'),
(7, 'jan', 'Июль 2017', 'img/uploads/581f256873377.jpg'),
(8, 'jan', 'Август 2017', 'img/uploads/581f256873779.jpg'),
(9, 'jan', 'Сентябрь 2017', 'img/uploads/581f256873bee.jpg'),
(10, 'jan', 'Октябрь 2017', 'img/uploads/581f25687403d.jpg'),
(11, 'jan', 'Ноябрь 2017', 'img/uploads/581f256874388.jpg'),
(12, 'jan', 'Декабрь 2017', 'img/uploads/581f2568746f0.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `indexAboutComunity`
--

CREATE TABLE IF NOT EXISTS `indexAboutComunity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aboutComunityHeaderText` varchar(255) NOT NULL,
  `aboutComunitySubHeaderText` text NOT NULL,
  `aboutComunityYellowText` varchar(255) NOT NULL,
  `aboutComunityImgSrc` varchar(255) NOT NULL,
  `aboutComunityImgHeader` varchar(255) NOT NULL,
  `aboutComunityImgText` text NOT NULL,
  `aboutComunityImgYellowText` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `indexAboutComunity`
--

INSERT INTO `indexAboutComunity` (`id`, `aboutComunityHeaderText`, `aboutComunitySubHeaderText`, `aboutComunityYellowText`, `aboutComunityImgSrc`, `aboutComunityImgHeader`, `aboutComunityImgText`, `aboutComunityImgYellowText`) VALUES
(1, 'О СООБЩЕСТВЕ', '#FOLLOW YOUR DREAM - открытое travel-сообщество для всех, кто влюблен в жизнь, в приключения и путешествия. Мы выбираем самые необыкновенные места планеты, собираем самую веселую компанию и отправляемся в самые крутые путешествия в вашей жизни. Для нас нет границ и возраста. Мы не заставим Вас слушать монотонные экскурсии или скучать на пляже. Все наши путешествия насыщены впечатлениями, яркими эмоциями, незабываемыми приключениями и при этом абсолютно доступны. Жизнь слишком коротка, что бы тратить ее на глупости!', '#Живи_так_как_ты_хочешь', 'img/uploads/581f11dde1f45.png', 'Путешествия', 'Экспедиции, приключения и яхтенные регаты в самые редкие, необыкновенные и интересные места планеты', ''),
(2, '', '', '', 'img/uploads/581f11dde24a6.png', 'Идея', 'Жизнь ОФИГЕННАЯ штука и она одна! Мечтай, путешествуй, вдохновляйся, действуй и наслаждайся каждым моментом', '#Живи_так_как_ты_хочешь'),
(3, '', '', '', 'img/uploads/581f11dde2847.png', 'общение', 'Искреннее общение и настоящие друзья по всему миру! Нас уже больше 8000 участников! Присоединяйся и наполни свою жизнь приключениями!', ''),
(4, '', '', '', 'img/uploads/581f11dde2bb5.png', 'Доступность', 'Мы уверены, что даже самые крутые путешествия не должны стоить дорого! Наши приключения уникальны и при этом абсолютно доступны!', '');

-- --------------------------------------------------------

--
-- Структура таблицы `indexFooter`
--

CREATE TABLE IF NOT EXISTS `indexFooter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `indexFooterSotialViber` varchar(255) NOT NULL,
  `indexFooterSotialSkype` varchar(255) NOT NULL,
  `indexFooterSotialEmail` varchar(255) NOT NULL,
  `indexFooterLogoLink` varchar(255) NOT NULL,
  `indexFooterBgImg` varchar(255) NOT NULL,
  `indexFooterButtonText` varchar(255) NOT NULL,
  `indexFooterSotialFb` varchar(255) NOT NULL,
  `indexFooterSotialIn` varchar(255) NOT NULL,
  `indexFooterPhone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `indexFooter`
--

INSERT INTO `indexFooter` (`id`, `indexFooterSotialViber`, `indexFooterSotialSkype`, `indexFooterSotialEmail`, `indexFooterLogoLink`, `indexFooterBgImg`, `indexFooterButtonText`, `indexFooterSotialFb`, `indexFooterSotialIn`, `indexFooterPhone`) VALUES
(1, '+380 67 850 21 07', 'anna_skibun', 'info@dreamlifeexpeditions.com', 'img/uploads/581f1e3fd86c5.png', 'img/uploads/581f1e3fd8adc.jpg', 'Присоединиться к сообществу', 'https://www.facebook.com/FollowYourDREAM2015', 'https://www.instagram.com/follow_your_dream_kiev', '+380 67 850 21 07'),
(2, '', '', '', '', '', '', '', '', '+380 44 360 53 28'),
(3, '', '', '', 'img/uploads/580b949dbbb52.png', '', '', '', '', '+380 44 360 53 28');

-- --------------------------------------------------------

--
-- Структура таблицы `indexHeader`
--

CREATE TABLE IF NOT EXISTS `indexHeader` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `headerLogoLink` varchar(255) NOT NULL,
  `headerLinkFb` varchar(255) NOT NULL,
  `headerLinkIn` varchar(255) NOT NULL,
  `headerTitle` varchar(255) NOT NULL,
  `headerDescription` text NOT NULL,
  `headerSmallText` text NOT NULL,
  `headerButtonText` varchar(255) NOT NULL,
  `headerCarouselSrc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `indexHeader`
--

INSERT INTO `indexHeader` (`id`, `headerLogoLink`, `headerLinkFb`, `headerLinkIn`, `headerTitle`, `headerDescription`, `headerSmallText`, `headerButtonText`, `headerCarouselSrc`) VALUES
(1, 'img/uploads/581eff80d7b2f.png', 'https://www.facebook.com/FollowYourDREAM2015', 'https://www.instagram.com/follow_your_dream_kiev', 'Follow your dream. Твоё travel-сообщество.', '#FOLLOW YOUR DREAM - открытое travel-сообщество для всех, кто влюблен в жизнь, в приключения и путешествия. Мы выбираем самые необыкновенные места планеты, собираем самую веселую компанию и отправляемся в самые крутые путешествия в вашей жизни', 'Твое travel - сообщество необыкновенных путешествий', 'ПРИСОЕДИНЯЙСЯ', 'img/uploads/581f0273811b4.jpg,img/uploads/581f0273814a6.jpg,img/uploads/581f0273816c6.jpg,img/uploads/581f027381917.jpg,');

-- --------------------------------------------------------

--
-- Структура таблицы `indexOurTravel`
--

CREATE TABLE IF NOT EXISTS `indexOurTravel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ourtravelHeaderText` varchar(255) NOT NULL,
  `ourtravelSubHeaderText` text NOT NULL,
  `ourtravelBlockImgSrc` varchar(255) NOT NULL,
  `ourtravelBlockImgTitle` varchar(255) NOT NULL,
  `ourtravelBlockImgLink` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `indexOurTravel`
--

INSERT INTO `indexOurTravel` (`id`, `ourtravelHeaderText`, `ourtravelSubHeaderText`, `ourtravelBlockImgSrc`, `ourtravelBlockImgTitle`, `ourtravelBlockImgLink`) VALUES
(1, 'НАШИ ПУТЕШЕСТВИЯ', 'ВЫБЕРИ ПРИКЛЮЧЕНИЕ, КОТОРОЕ ТЕБЕ ПО ДУШЕ', 'img/uploads/581f09f2c0efa.jpg', 'АРКТИКА', 'arctic.php'),
(2, '', '', 'img/uploads/581f09f2c1679.jpg', 'ЯХТИНГ', 'yachting.php'),
(3, '', '', 'img/uploads/581f09f2c1bb0.jpg', 'приключения', 'adventure.php'),
(4, '', '', 'img/uploads/581f09f2c208a.jpg', 'dream bus', 'dreambus.php'),
(5, '', '', 'img/uploads/581f0a288dc4a.jpg', 'календарь путешествий', 'calendar.php');

-- --------------------------------------------------------

--
-- Структура таблицы `indexOurVideo`
--

CREATE TABLE IF NOT EXISTS `indexOurVideo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ourVideoHeaderText` varchar(255) NOT NULL,
  `ourVideoBgImg` varchar(255) NOT NULL,
  `ourVideoImgLink` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `indexOurVideo`
--

INSERT INTO `indexOurVideo` (`id`, `ourVideoHeaderText`, `ourVideoBgImg`, `ourVideoImgLink`) VALUES
(1, 'НАШИ ВИДЕО', 'img/uploads/581f1cd4482cd.jpg', 'https://www.youtube.com/watch?v=HVoSC5ubrg4d'),
(2, '', 'img/uploads/581f1cd44874a.jpg', 'https://www.youtube.com/watch?v=HVoSC5ubrg4'),
(3, '', 'img/uploads/581f1cd448af5.jpg', 'https://www.youtube.com/watch?v=HVoSC5ubrg4');

-- --------------------------------------------------------

--
-- Структура таблицы `indexReviews`
--

CREATE TABLE IF NOT EXISTS `indexReviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reviewsHeaderText` varchar(255) NOT NULL,
  `reviewsImgSrc` varchar(255) NOT NULL,
  `reviewsReviewName` varchar(255) NOT NULL,
  `reviewsReviewText` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `indexReviews`
--

INSERT INTO `indexReviews` (`id`, `reviewsHeaderText`, `reviewsImgSrc`, `reviewsReviewName`, `reviewsReviewText`) VALUES
(1, 'НАШИ ОТЗЫВЫ', 'img/uploads/581f1baaf05b8.png', 'Вольдемар Яковенко', 'Анна и Влад, спасибо огромное за путешествие. Все было классно!  Спасибо  всем новым друзьям, с вами было очень здорово)). Давайте не сидеть дома и снова куда-нибудь махнем)!'),
(2, '', 'img/uploads/581f1baaf0bad.png', 'Анастасия Власенко', 'Я уже скучаю по всем. Предлагаю быть на связи и снова выбраться в какое-нибудь путешествие. Ребята-организаторы, держите нас  в курсе всех намечающихся интересных поездок. По возможности будем присоединяться! Спасибо))'),
(3, '', 'img/uploads/581f1baaf0f9c.png', 'Анна Скибун', '...проспала 18 часов, съела почти целиком торт с кремом и никак не могу вернуться в реальность. Такое впечатление, что на Шпицбергене я прожила новую совсем другую жизнь.. Не плохую или хорошую, а просто совсем другую.. Полный разрыв шаблона.. С ног на голову или наоборот..                   <br>Сегодня прочитала, что все люди приходят в нашу жизнь неслучайно - или когда они нам нужны или когда им нужны мы.. Так и есть..                   <br>Спасибо каждому с кем я приехала в Арктику и всем тем, кого я там встретила..                   <br>Путешествие как путь к себе.. настоящей.                   !'),
(4, '', 'img/uploads/581f1baaf1390.png', 'Олег Стороженко', 'Еще раз спасибо организаторам, сами мы бы вряд ли выбрались бы в такую даль!'),
(5, '', 'img/uploads/581f1baaf1754.png', 'Галина Казимирова', '.Всім дякую за чудово проведенний час. Без вас, друзі, ця поїздка не була би такою чудовою!'),
(6, '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `indexUpcomingEvents`
--

CREATE TABLE IF NOT EXISTS `indexUpcomingEvents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `upcomingEventsHeaderText` varchar(255) NOT NULL,
  `upcomingEventsTextButton` varchar(255) NOT NULL,
  `upcomingEventsBlockImgSrc` varchar(255) NOT NULL,
  `upcomingEventsBlockImgCheckpoint` varchar(255) NOT NULL,
  `upcomingEventsBlockImgDate` varchar(255) NOT NULL,
  `upcomingEventsBlockImgPrice` varchar(255) NOT NULL,
  `upcomingEventsBlockImgLink` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `indexUpcomingEvents`
--

INSERT INTO `indexUpcomingEvents` (`id`, `upcomingEventsHeaderText`, `upcomingEventsTextButton`, `upcomingEventsBlockImgSrc`, `upcomingEventsBlockImgCheckpoint`, `upcomingEventsBlockImgDate`, `upcomingEventsBlockImgPrice`, `upcomingEventsBlockImgLink`) VALUES
(1, 'БЛИЖАЙШИЕ ПУТЕШЕСТВИЯ И ЭКСПЕДИЦИИ', 'Никакого спама. Только интересная информация о новых маршрутах, невероятных экспедициях и путешествиях.', 'img/uploads/581f18dfbb034.jpg', 'ТАЙЛАНД + ЗАТЕРЯНЫЕ МИРЫ КАМБОДЖИ', '2-14 ЯНВАРЯ 2017', '1799 ЕВРО', 'calendar.php#tay-kambodga'),
(2, '', '', 'img/uploads/581f18dfbb658.jpg', 'ШПИЦБЕРГЕН – В ПОИСКАХ СЕВЕРНОГО СИЯНИЯ', '11-17 ФЕВРАЛЯ 2017', '1780 ЕВРО', 'calendar.php#shpicbergen-severnoe'),
(3, '', '', 'img/uploads/581f18dfbbabe.jpg', 'МАРОККО – ОКЕАН, ПУСТЫНЯ ГОБИ И АТЛАССКИЕ ГОРЫ', '20-31 МАРТА 2017', '1450 ЕВРО', 'calendar.php#ekspidiciya-marokko'),
(4, '', '', 'img/uploads/581f18dfbbea5.jpg', 'ГРЕЦИЯ – ИОНИЧЕСКИЕ ОСТРОВА И СРЕДИЗЕМНОМОРСКАЯ КУХНЯ', '28 АПРЕЛЯ – 6 МАЯ 2017', '950 ЕВРО', 'calendar.php#greece-modal'),
(5, '', '', 'img/uploads/581f18dfbc245.jpg', 'ИСЛАНДИЯ ДЖИППИНГ – ВСЕ САМОЕ ГРАНДИОЗНОЕ В ОДНОМ ПУТЕШЕСТВИИ', '14 - 21 МАЯ 2017', '1650 ЕВРО', 'calendar.php#islandiya-in-gip'),
(6, '', '', 'img/uploads/581f18dfc5afa.jpg', 'ГРЕНЛАНДИЯ – MUST-HAVE 2017. ПРИКЛЮЧЕНИЕ ВСЕЙ ЖИЗНИ!', '27 ИЮНЯ - 04 ИЮЛЯ 2017', '2050 ЕВРО', 'calendar.php#grenlandiya-must-have');

-- --------------------------------------------------------

--
-- Структура таблицы `indexWithUs`
--

CREATE TABLE IF NOT EXISTS `indexWithUs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `withUsHeaderText` varchar(255) NOT NULL,
  `withUsBgImg` varchar(255) NOT NULL,
  `withUsTextarea` text NOT NULL,
  `withUsUnderText` varchar(255) NOT NULL,
  `withUsUnderTextButton` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `indexWithUs`
--

INSERT INTO `indexWithUs` (`id`, `withUsHeaderText`, `withUsBgImg`, `withUsTextarea`, `withUsUnderText`, `withUsUnderTextButton`) VALUES
(1, 'с нами вас ждут', 'img/uploads/581f165e4767b.png', '<p>\r\n                      </p><ul>\r\n                        <li>Веселые встречи, уникальные путешествия, приключения и тусовки!</li>\r\n                        <li>Уникальные арктические экспедиции – Гренландия, Шпицберген, Северный Полюс и Антарктика</li>\r\n                        <li>Приключения на краю света – Мадагаскар, Галапагосские острова, Антарктида и только самые впечатляющие места планеты</li>\r\n                        <li>Яхтенные флотилии в Италии, Греции, на Мальдивских островах – лучшие маршруты, комфортабельные  парусные яхты/катамараны и самые веселые Party на пляже</li>\r\n                        <li>DREAM Bus - легендарные FreeLifestyle  уикэнды  за звездами, MOREм,  и запахом трав… Для всех, кто в теме))</li>\r\n                      </ul>\r\n                    <p></p>', 'НЕ ПРЕДАВАЙ СВОИ МЕЧТЫ И РАЗРЕШИ СЕБЕ ЖИТЬ ТАК, КАК ХОЧЕШЬ ИМЕННО ТЫ! ПРИСОЕДИНЯЙСЯ!', 'присоединяйся');

-- --------------------------------------------------------

--
-- Структура таблицы `modal`
--

CREATE TABLE IF NOT EXISTS `modal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `generalId` text NOT NULL,
  `generalMonth` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `modal`
--

INSERT INTO `modal` (`id`, `generalId`, `generalMonth`) VALUES
(1, '#tay-kambodga', 'jan'),
(2, '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `modalData`
--

CREATE TABLE IF NOT EXISTS `modalData` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `generalId` varchar(255) NOT NULL,
  `generalMonth` varchar(255) NOT NULL,
  `bgImg` varchar(255) NOT NULL,
  `header` varchar(255) NOT NULL,
  `subHeader` varchar(255) NOT NULL,
  `infoDate` varchar(255) NOT NULL,
  `infoImportant` varchar(255) NOT NULL,
  `infoPrice` varchar(255) NOT NULL,
  `listMain` text NOT NULL,
  `textOverForm` text NOT NULL,
  `textUnderForm` text NOT NULL,
  `howJoin` text NOT NULL,
  `org1` text NOT NULL,
  `org2` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `modalData`
--

INSERT INTO `modalData` (`id`, `generalId`, `generalMonth`, `bgImg`, `header`, `subHeader`, `infoDate`, `infoImportant`, `infoPrice`, `listMain`, `textOverForm`, `textUnderForm`, `howJoin`, `org1`, `org2`) VALUES
(1, 'tay-kambodga', 'feb', 'img/uploads/581edf9a5ca5d.jpg', 'Тай + Камбоджа', 'Дальше только СЕВЕРНЫЙ ПОЛЮС!11', '05 - 11 ИЮНЯ 201711', 'Размер группы до 30 человек.Осталось 4 места.11', '11 2090 евро/чел (включая все трансферы и внутренние перелеты) ВАЖНО: в программенет никаких скрытых платежей - во время путешествия включено ВСЁ, кромесувениров и некоторых обедов/ужинов на ваш вкус.', '<h3 class="center first">11 В самый неизведанный туристами регион</h3>\r\n<ul class="arctic-body-shpitsberg-ul">\r\n<li>Мы летим за Полярный Круг!</li>\r\n<li>ШПИЦБЕРГЕН &ndash; это завораживающий океан, ЛЕДНИКИ и АЙСБЕРГИ, БЕЛЫЕ МЕДВЕДИ, арктические МОРЖИ, трофи на снегоходах и в собачьих упряжках, СЕВЕРНОЕ СИЯНИЕ, КИТЫ, невероятные арктические пейзажи и даже цветы!</li>\r\n<li>Ни одна турфирма не предложит вам такого НАСЫЩЕННОГО ВПЕЧАТЛЕНИЯМИ экспедиционного тура по такой НИЗКОЙ ЦЕНЕ</li>\r\n<li>9 уникальных АРКТИЧЕСКИХ ПРИКЛЮЧЕНИЙ, комфортное проживание, продуманная логистика (маршрут) &ndash; ВСЕГО за 1780 евро!!! (туры тур операторов стартуют от 3000 евро). И все потому что, мы создаем свои экспедиции сами! Круче и дешевле &ndash; просто не существует!</li>\r\n<li>Мы поможем с визой при необходимости (Норвегия, Шенген)</li>\r\n<li>С нами ОЧЕНЬ весело и легко, так как собирается только положительная и искренняя компания &ndash;присоединяйся!</li>\r\n</ul>\r\n<p class="title22gray">ШПИЦБЕРГЕН с нами &ndash; это ЛУЧШЕЕ ПУТЕШЕСТВИЕ в твоей ЖИЗНИ &ndash; звони и регистрируйся! <br /> <br /> <a href="tel: 0678502107">+38 (067) 850 21 07</a></p>', '<section class="modal-body__travel-program">\r\n<div class="section_header">11Программа</div>\r\n<h2 class="travel-program__h2-first">Даже если вы никогда не мечтали попасть на ШПИЦБЕРГЕН - рискните и это будет одним из самых запоминающихся и НЕОБЫЧНЫХ ПУТЕШЕСТВИЙ в вашей жизни!</h2>\r\n<img src="/img/2.png" />\r\n<h4>День 1 / 10 августа</h4>\r\n<p>Сбор в аэропорту Борисполь группы, которая летит из Киева. С остальными участниками мы встречаемся в Осло. Отправляемся в самое непредсказуемое приключение в своей жизни, в страну вечных льдов и белых медведей, за Полярный Круг!</p>\r\n<p>Перелет на Шпицберген через Осло. Прогулка по Осло между перелетами.</p>\r\n<img src="/img/program/0.png" />\r\n<div class="clearfix">&nbsp;</div>\r\n<p>Осло - самый древний город северной Европы основанный в 1048 году, находится целиком в окружении лесов, горных вершин и холмов.</p>\r\n<p>В Осло сосредоточены главные культурные достопримечательности страны и самые необычные музеи. Футуристическое здание Норвежской оперы спускается прямо во фьорд, а любоваться красотами природы можно просто прогуливаясь по крыше оперного театра, как это любят делать местные жители, а значит сможем и мы!</p>\r\n<p>21.30 Вылет в Лонгйир &ndash; столицу архипелага ШПИЦБЕРГЕН.</p>\r\n<img src="/img/program/3.jpg" />\r\n<p>Еще только подлетая к Лонгйиру - самому северном в мире городу, расположенному в высоких широтах норвежской части Арктики, перед нами откроются суровые и прекрасные пейзажи полярного архипелага. Населенный пункт назван в честь американского предпринимателя Джона Манро Лонгйира (1860&mdash;1922), который основал город.</p>\r\n<p>За пределы города выходить без сопровождения и оружия опасно, ведь БЕЛЫХ МЕДВЕДЕЙ на архипелаге в три! раза больше чем людей.</p>\r\n<img src="/img/program/4.jpg" />\r\n<div class="clearfix">&nbsp;</div>\r\n<p>00:30 Прибытие в Лонгйир и поселение в отель (двухместные номера с удобставами на этаже или поселение в отеле со всеми удобствами)</p>\r\n<h4>День 2 / 11 августа</h4>\r\n<p>Завтрак подается в четырех звездочном отеле (ОЧЕНЬ разнообразный и вкусный) и ПРИКЛЮЧЕНИЯ начинаются!</p>\r\n<p>Нас ожидает КВАДРО-трофи в невероятную Арктику.</p>\r\n<p>Квадроциклы Am Outlander ATV самый удобный транспорт для летних приключений в дикую природу Шпицбергена. Мы обязательно увидим северных оленей в долине Адвентдален, а так же лис и возможно встретим царя Арктики &ndash; БЕЛОГО МЕДВЕДЯ.</p>\r\n<img src="/img/program/den2-1.jpg" />\r\n<p>На вершине горных хребтов находится Кьелл Хенриксен &ndash; одна из самых больших обсерваторий в мире для исследования СЕВЕРНОГО СИЯНИЯ. Здесь мы остановимся, чтобы насладиться удивительным видом Адвентдален. На нашем пути вниз мы посетим Trappers станцию Basecamp в Bolterdalen. Там мы выпьем вкуснейшего кофе и отведаем печенья с ягодами, а так же пожарим зефир на костре. И все это за Полярным Кругом!</p>\r\n<img src="/img/program/den2-2.jpg" />\r\n<div class="clearfix">&nbsp;</div>\r\n<p>Вся специальная экипировка выдается на месте.</p>\r\n<h4>День 3 / 12 августа</h4>\r\n<p>Если вы никогда не мечтали увидеть МОРЖЕЙ, КИТОВ, белых МЕДВЕДЕЙ и их детенышей, а так же морских КОТИКОВ - пора начинать! Потому, что - то, что вы увидите в этот день &ndash; ни с чем не сравнится! В этот день мы совершим выход в море на специальной закрытой лодке в поисках этих уникальных животных и проведем день среди гигантских айсбергов и паковых льдов.</p>\r\n<img src="/img/program/7.jpg" />\r\n<p>Увидим, как откалываются айсберги от высоченных белых стен и с леденящим треском падают в океан! Только ради ТАКИХ ВПЕЧАТЛЕНИЙ стоит ехать за Полярный Круг! А если нам повезет &ndash; мы отснимем САМЫЕ КРУТЫЕ ФОТО в вашей жизни!</p>\r\n<img src="/img/program/den3-1.jpg" />\r\n<p>Если повезет с погодой &ndash; мы совершим уникальную высадку на одном из островов архипелага (Принц Карл), что бы понаблюдать за лежбищем арктических МОРЖЕЙ. Они проводят в этом районе большую часть времени и любят &laquo;загорать&raquo; на пляже. Так же нас ждет арктический ланч и много ОБАЛДЕННЫХ ФОТО!</p>\r\n<img src="/img/program/den3-2.jpg" />\r\n<div class="clearfix">&nbsp;</div>\r\n<h4>День 4 / 13 августа</h4>\r\n<p>Просто фантастические впечатления ждут нас в этот день &ndash; мы совершим переход в СОБАЧЬИХ УПРЯЖКАХ на колесах!! Такого вы еще точно не пробовали!</p>\r\n<img src="/img/program/den4-4.jpg" />\r\n<p>В каждую упряжку запрягают по 6-8 собак специальной породы. Хаски выносливые и веселые, они точно знают маршрут и способны добраться домой даже если вы потеряетесь. Сначала мы поднимемся круто в горы. Потом пронесемся по</p>\r\n<img src="/img/program/den4-3.jpg" />\r\n<p>арктической пустыне и остановимся для ланча и фото на самой высокой точке ферда - около 2100 футов над уровнем моря. Этот ПОТРЯСАЮЩИЙ ВИД на горную арктическую долину и Северный Ледовитый океан будет одним из самых захватывающих в ВАШЕЙ ЖИЗНИ!</p>\r\n<h4>День 5 / 14 августа</h4>\r\n<p>Это день &ndash; приключения на выбор. Согласно нашей сегодняшней программы вы можете отправиться на велосипедах в несложное, но очень красивое путешествие к птичьей долине или совершить пешую прогулку с гидом по Лонгийру, посетить арктический музей поваляться с интересной книгой на оленьих шкурах с видом на заснеженные горы.</p>\r\n<img class="pb10" src="/img/program/den5-1.jpg" /> <img src="/img/program/den5-2.jpg" />\r\n<p>В этот день вы можете так же отдохнуть или совершить дополнительное приключение (факультативно), которое мы забронируем специально для вас:</p>\r\n<p>1. Экспедиционный выезд на небольшом ледоколе к заброшенному городу Пирамиден или Баренцбург (по пути можно встретить КИТОВ и морских котиков)</p>\r\n<p>2. Экскурсия в заброшенную угольную шахту</p>\r\n<p>3. Пешее путешествие к всемирному хранилищу семян (Ноев ковчег)</p>\r\n<p>4. Лакшери путешествие с ночевкой на Ист Ферде</p>\r\n<img src="/img/program/den5-6.jpg" />\r\n<h4>День 6 / 15 августа</h4>\r\n<p>Согласно рейтингам National Geografic - природа &ndash; долины и горы Шпицбергена входят в пятерку самых впечатляющих в мире!</p>\r\n<p>Острова этого архипелага &ndash; одно из немногих мест на земле, сохранивших первозданную природу. Это суровый, но красивый пейзаж: острые высокие горы, длинные хребты, изумительно чистые прозрачные и бурные речки, мрачное темное море с величественными белыми айсбергами, заснеженные равнины, ледяные просторы Арктики.</p>\r\n<img src="/img/program/13.jpg" />\r\n<p>Мы совершим незабываемый трекинг по молчаливым сопкам, вдоль рек и долин, увидим уникальную флору и фауну островов. Возможно, даже встретим царя Арктики &ndash; БЕЛОГО МЕДВЕДЯ, а так же получим археологическое свидетельство того, что раньше на этих &laquo;землях&raquo; были субтропические леса!</p>\r\n<img src="/img/program/11.jpg" />\r\n<p>Для нашей безопасности трекинг будет проходить в сопровождении гида со специальной винтовкой и спасательным сигналом, который используются для отпугивания диких животных при их агрессивном поведении.</p>\r\n<h4>День 7 / 16 августа</h4>\r\n<p>Нереальный арктический каякинг)). Эмоции зашкаливают! ЮХУУУУУУУ! Жизнь - офигенная штука, как не крути)))).</p>\r\n<img src="/img/program/den7-1.jpg" />\r\n<p>5 часов экстремального приключения с высадкой на другой стороне ферда, наблюдением за дикой природой и настоящий туристический ланч! Вы просто не можете это пропустить!</p>\r\n<img class="pb10" src="/img/program/den7-3.jpg" /> <img src="/img/program/den7-4.jpg" />\r\n<h4>День 8 / 18 августа</h4>\r\n<p>После отдыха и вылетаем в Осло. Шпицберген &ndash; самый быстрый способ заболеть Арктикой, поэтому обещаем вернуться, но уже за Северным Сиянием!</p>\r\n<p>В 5:55 приземляемся в аэропорту Осло.</p>\r\n</section>', '<div class="container">\r\n<div class="section_header">11 Где будем жить</div>\r\n<p class="title22gray">Отель Хоген пансион <br /> (двухместные номера удобства на 2 номера)</p>\r\n<div id="links" class="tour_section__links">\r\n<div class="col-xs-12 col-sm-4 gallery_preview" data-gallery="stay_gallery"><img src="/img/live/live1-1.jpg" /></div>\r\n<div class="col-xs-12 col-sm-4 gallery_preview" data-gallery="stay_gallery"><img src="/img/live/live1-2.jpg" /></div>\r\n<div class="col-xs-12 col-sm-4 gallery_preview" data-gallery="stay_gallery"><img src="/img/live/live1-3.jpg" /></div>\r\n</div>\r\n</div>\r\n<div class="container p30_0">\r\n<p class="title22gray">Дополнительные варианты проживания (бронируются отдельно): <br /> Отель Хотел энд Лодж со всеми удобствами</p>\r\n<div id="links" class="tour_section__links">\r\n<div class="col-xs-12 col-sm-4 gallery_preview" data-gallery="stay_gallery"><img src="/img/live/1.1.jpg" /></div>\r\n<div class="col-xs-12 col-sm-4 gallery_preview" data-gallery="stay_gallery"><img src="/img/live/1.2.jpg" /></div>\r\n<div class="col-xs-12 col-sm-4 gallery_preview" data-gallery="stay_gallery"><img src="/img/live/1.3.jpg" /></div>\r\n</div>\r\n</div>\r\n<div class="container">\r\n<p class="title22gray">Уникальный исторический отель комфорт класса (общая ванная комната)</p>\r\n<div id="links" class="tour_section__links">\r\n<div class="col-xs-12 col-sm-4 gallery_preview" data-gallery="stay_gallery"><img src="/img/live/2.1.jpg" /></div>\r\n<div class="col-xs-12 col-sm-4 gallery_preview" data-gallery="stay_gallery"><img src="/img/live/2.2.jpg" /></div>\r\n<div class="col-xs-12 col-sm-4 gallery_preview" data-gallery="stay_gallery"><img src="/img/live/2.3.jpg" /></div>\r\n</div>\r\n</div>', '<div class="row m0_10">\r\n<div class="col-sm-6 col-xs-12">\r\n<h4 class="block_title"><img src="/img/trip/check_circle.png" />&nbsp;11В стоимость включено:</h4>\r\n<ul class="tour_included">\r\n<li>Трансфер из/в аэропорт в Лонгйире</li>\r\n<li>Проживание на Шпицбергене 6 ночей</li>\r\n<li>Питание &ndash; завтраки + ланчи (перекусы) во время приключений</li>\r\n<li>Приключение на квадроциках + ланч-перекус + экипировка</li>\r\n<li>Приключение На собачьих упряжках за полярным солнцем + ланч-перекус</li>\r\n<li>Морское приключение с высадкой на островах к лежбищу моржей, киты, котики +ланч-перекус</li>\r\n<li>Захватывающий трекинг в дикую природу Шпицбергена + ланч-перекус</li>\r\n<li>Арктический каякинг</li>\r\n<li>Сопровождение русскоязычным и англоязычным гидами</li>\r\n<li>Фирменная ветровка или другой подарок</li>\r\n</ul>\r\n</div>\r\n<div class="col-sm-6 col-xs-12">\r\n<h4 class="block_title"><img src="/img/trip/plus_circle.png" /> Дополнительные расходы:</h4>\r\n<ul class="tour_features">\r\n<li>Виза (Норвегия/шенген). Поможем с визой.</li>\r\n<li>Перелет Киев-Осло-Киев от 200 евро; Перелет Осло-Лонгйир-Осло 250 евро (выкупленный блок)</li>\r\n<li>Дополнительные услуги не включенные в программу</li>\r\n</ul>\r\n</div>\r\n</div>', 'img/uploads/581edfd9d1583.png|Анна Скибун11|Организатор1|anna.skibun21|anna.skibun214|email4124|phone4214', 'img/uploads/581edffdca162.png|Анна Скибун11asdf|Организатор1|anna.skibun124|anna.skibun124|email124|phone123'),
(3, 'testafda', 'jun', '', 'asdfasf', '', '', '', '', '', '', '', '', '||||||', '||||||'),
(4, 'tsedcvasdf', 'may', '', 'sadfafsd', '', '', '', '', '', '', '<p>asdf</p>', '<p>asdfafsd</p>', '||||||', '||||||');

-- --------------------------------------------------------

--
-- Структура таблицы `nav`
--

CREATE TABLE IF NOT EXISTS `nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(255) NOT NULL,
  `anchor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `tmpCarousel`
--

CREATE TABLE IF NOT EXISTS `tmpCarousel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `generalId` varchar(255) NOT NULL,
  `tmpCarouselSrc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `tmpCarousel`
--

INSERT INTO `tmpCarousel` (`id`, `generalId`, `tmpCarouselSrc`) VALUES
(1, 'yachting', 'img/uploads/5826ac50c5290.jpg,img/uploads/5826ac50c57cb.jpg,img/uploads/5826ac50c5c8a.jpg,img/uploads/5826ac50c6160.jpg,img/uploads/5826ac50c6709.jpg,img/uploads/5826ac50c6ca9.jpg,img/uploads/5826ac50c715e.jpg,img/uploads/5826ac50c767a.jpg,'),
(2, 'adventure', 'img/uploads/5826ac50c5290.jpg,img/uploads/5826ac50c57cb.jpg,img/uploads/5826ac50c5c8a.jpg,img/uploads/5826ac50c6160.jpg,img/uploads/5826ac50c6709.jpg,img/uploads/5826ac50c6ca9.jpg,img/uploads/5826ac50c715e.jpg,img/uploads/5826ac50c767a.jpg,'),
(3, 'arctic', 'img/uploads/5826b1b226d7f.jpg,img/uploads/5826b1b226f82.jpg,img/uploads/5826b1b227184.jpg,img/uploads/5826b1b22732d.jpg,img/uploads/5826b1b2274f0.jpg,img/uploads/5826b1b227699.jpg,img/uploads/5826b1b2277fa.jpg,img/uploads/5826b1b227963.jpg,'),
(4, 'dreambus', 'img/uploads/5826ac50c5290.jpg,img/uploads/5826ac50c57cb.jpg,img/uploads/5826ac50c5c8a.jpg,img/uploads/5826ac50c6160.jpg,img/uploads/5826ac50c6709.jpg,img/uploads/5826ac50c6ca9.jpg,img/uploads/5826ac50c715e.jpg,img/uploads/5826ac50c767a.jpg,');

-- --------------------------------------------------------

--
-- Структура таблицы `tmpHeader`
--

CREATE TABLE IF NOT EXISTS `tmpHeader` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tmpGeneralId` varchar(255) NOT NULL,
  `tmpHeaderText` varchar(255) NOT NULL,
  `tmpSubHeaderText` varchar(255) NOT NULL,
  `tmpBtnText` varchar(255) NOT NULL,
  `tmpHeaderBgUrl` varchar(255) NOT NULL,
  `tmpMetaTitle` varchar(255) NOT NULL,
  `tmpMetaDescription` varchar(255) NOT NULL,
  `tmpContent` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `tmpHeader`
--

INSERT INTO `tmpHeader` (`id`, `tmpGeneralId`, `tmpHeaderText`, `tmpSubHeaderText`, `tmpBtnText`, `tmpHeaderBgUrl`, `tmpMetaTitle`, `tmpMetaDescription`, `tmpContent`) VALUES
(1, 'yachting', 'ПУТЕШЕСТВИЯ НА ЯХТАХ', 'Проведи бесподобную неделю  на белоснежной яхте!', 'присоединяйся', 'img/uploads/5826b49b5f85f.jpg', 'Follow your dream. Твоё travel-сообщество.', 'Follow your dream. Твоё travel-сообщество.', '<h3 class="red center first">Путешествие на ЯХТЕ &ndash; это мечта в чистом виде! <br />Welcome to paradise!</h3>\n<p>Ведь только для вас - нетронутые бирюзовые бухты, километры песчаных пляжей, бесподобные рассветы, ужины на палубе с видом на закат, вечеринки под звездами, уникальные достопримечательности, свежие морепродукты, восхитительный загар, новые друзья, знакомства и положительные эмоции, которых нам так не хватает в повседневной жизни!</p>\n<p>&nbsp;</p>\n<p>Путешествие на яхте &ndash; это бесконечная свобода ощущений, передвижения и такая доступная роскошь, которую можно позволить себе уже прямо сейчас, не откладывая свою ЖИЗНЬ &laquo;на потом&raquo;. Неделя незабываемых впечатлений обойдется вам дешевле, чем отдых в среднем отеле в Турции.</p>\n<p>&nbsp;</p>\n<p>Да, и всего за 7 дней можно увидеть в десятки раз больше, чем лежа на пляже.</p>\n<p>&nbsp;</p>\n<p>Каждый день &ndash; новый город или остров!, которые пленят своей красотой и самобытностью. У вас будет и время и возможность почувствовать страну изнутри, рассмотреть самые укромные уголки, насладиться великолепной кухней и окунуться с головой в местный колорит. Представьте, как здорово, после прихода в бухту, взять на прокат мопед или малолитражку и целый день колесить по небольшим деревенькам и городкам.</p>\n<p>Кто в команде? Это по-хорошему &laquo;голодные&raquo; люди, которые стремятся что-то узнать, почувствовать новую страну, а не просто провести время в очередном All Inclusive.</p>\n<p>Путешествие на яхте &ndash; это романтика и настоящее приключение по вашим правилам)) в комфортных условиях практически пятизвездочного отеля на воде. И безусловно лучший выбор для недельного отпуска, когда хочется и моря и пляжа и приключений и активного отдыха, и ужина с бокалом белого под звездами с видом на ТОЛЬКО ВАШЕ МОРЕ!</p>\n<p class="center">Присоединяйтесь к нашим флотилиям в Италии, Греции, Испании, Хорватии, на Канарских и Сейшельских островах!</p>\n<p class="yellow center">ЖИЗНЬ ОДНА, и она прекрасна! Если не сейчас наслаждаться ею, то когда?</p>\n<div class="arctic-body-shpitsberg">\n<h3 class="heading">КАНАРЫ &ndash; контрастный архипелаг 7 островов</h3>\n<h4 class="under-h3">Потрясающие контрасты пейзажей</h4>\n<img class="arctic-body-img" src="/img/yachting/sotavento-beach-fuerteventura.jpg" alt="" />\n<p>Канары &ndash; это в первую очередь просто потрясающий контраст семи островов этого небольшого архипелага, расположенного возле западных берегов Африки.</p>\n<br />\n<p>Когда мы впервые попали на Канары &ndash; были мягко говоря в &laquo;шоке&raquo; в хорошем смысле. Мы обошли на яхтах весь архипелаг, высаживаясь на каждом из островов. И каждый раз мы попадали в абсолютно разный &laquo;пейзаж&raquo;.</p>\n<p>Тенерифе &ndash; остров с местами буйной растительностью и просто ГИГАНТСКИМИ КАКТУСАМИ, из плодов которых получается, кстати, очень вкусный джем)). Восхождение на ВУЛКАН Тейде &ndash; одно из самых ярких впечатлений высадки.</p>\n<img class="arctic-body-img" src="/img/yachting/canary.jpg" alt="" />\n<p>Фуэрта вентура &ndash; это просто рай для серферов и кайтеров, которые съезжаются на остров со всего мира. Тут вас ждут абсолютно пустынные песчаные долины, острые, почти безжизненные горы и просто ошеломляющей синевы ОКЕАН. Да, и дикие козы)), которые бегают по долинам в большом количестве.</p>\n<p>Ланцароте - остров вулканов, лунного пейзажа, черного песка! и очень вкусного инжира, который местные жители выращивают прямо на лавовых полях!</p>\n<p>Острова Ла Гомера, Йерро, Ла-пальма и Гран Канария &ndash; это пышная растительность, банановые плантации и маленькие рыбацкие деревушки, разбросанные на бескрайних пляжах.</p>\n<p class="center">Яхтинг на Канарах - вам обязательно запомнится, а впечатлений хватит на жизнь вперед!</p>\n<p class="yellow center">Присоединяйтесь к нашим ближайшим флотилиям на Канарских островах! Будет круто!</p>\n</div>\n<div class="arctic-body-grenland">\n<h3 class="heading">Бесподобная ИТАЛИЯ</h3>\n<h4 class="under-h3" style="font-style: italic;">Dolce vita и любовь с первого взгляда</h4>\n<img class="arctic-body-img" src="/img/yachting/2-amalfi-and-naples.jpg" alt="" />\n<p>ИТАЛИЯ - это не просто место на карте. Это - МЕЧТА!</p>\n<br />\n<p>Мечта, которая пахнет морем, азалиями, домашним мороженым, теплым солнцем, радостью и ... приключениями)).</p>\n<p>Мечта, которая готова стать РЕАЛЬНОСТЬЮ.</p>\n<p>А теперь представьте себя на БЕЛОСНЕЖНОЙ ЯХТЕ (в купальнике последней модели:), а еще лучше на гигантском парусном катамаране - бирюзовые бухты островов, скалы и апельсиновые рощи, уютные городки, вечерние прогулки и ОЧЕНЬ вкусная еда.</p>\n<p>7 НЕЗАБЫВАЕМЫХ ДНЕЙ, наполненных морскими приключениями, новыми знакомствами и драйвом.&nbsp; Не об этом ли вы мечтали в душном мегаполисе?</p>\n<img class="arctic-body-img" src="/img/yachting/argentous_corfu_41.jpg" alt="" />\n<p>Италия &ndash; страна четырех морей (Лигурийского,&nbsp;Тирренского,&nbsp;Ионического&nbsp;и&nbsp;Адриатического), порясающей красоты островов и вулканов, бесподобной кухни.</p>\n<p class="center">Чего стоят только сами названия &ndash; Капри, Сицилия, Сардиния&hellip; Рай для путешественников и мечтателей!</p>\n<p class="yellow center">В наших флотилиях по Италии &ndash; только самые красивые и потрясающие места и только самая веселая и искренняя компания!</p>\n</div>\n<div class="arctic-body-iceland">\n<h3 class="heading">Бело-синяя ГРЕЦИЯ</h3>\n<h4 class="under-h3">Бирюзовые бухты моря, белоснежные пляжи и бесподобные скалы</h4>\n<img class="arctic-body-img" src="/img/yachting/look.jpg" alt="" />\n<p>Греция &ndash; это не только античная культура, фантастические мифы, потрясающей чистоты море, скальные гроты, белоснежные пляжи, необыкновенно вкусная средиземноморская кухня, это еще и страна более 2000 островов! Только представьте, какой потрясающий яхтинг вас ожидает именно здесь!</p>\n<br />\n<p>В этой стране надо просто РАССЛАБИТЬСЯ и НАСЛАЖДАТЬСЯ: едой и вином, морем и полуденным зноем, общением с местными жителями и природой, древностями и тишиной, дискотеками и весельем. Всем и сразу&nbsp;&mdash; по-другому здесь все равно не получится.</p>\n<img class="arctic-body-img" src="/img/yachting/447abed6c755f5fdc9b2e1b63c7f8dc1.jpg" alt="" />\n<p>Наши флотилии как правило стартуют из Афин, приключения в Ионическом море - на Лефкасе или Корфу. Идеальная длительность путешествия на яхте в Греции &ndash; 7 дней. За неделю можно успеть добраться практически в любой уголок моря и вернуться обратно другим маршрутом. Так что яркие впечатления вам точно обеспечены!</p>\n<p class="center">И как бонус &ndash; чрезвычайно низкие цены на авиаперелет. Не упустите свой шанс!</p>\n<p class="yellow center">Присоединяйтесь к самому теплому приключению на яхтах в Греции!</p>\n</div>\n<div class="arctic-body-iceland">\n<h3 class="heading">Сейшелы</h3>\n<h4 class="under-h3">Необитаемые острова, пальмы и бесконечный океан</h4>\n<img class="arctic-body-img" src="/img/yachting/6484163.jpg" alt="" />\n<p>Сейшелы &ndash; это просто настоящий рай &ndash; Баунти, все как в самых красивых рекламах, проспектах и фильмах. Прекрасные белоснежные пляжи, пальмы, необитаемые острова, прозрачная голубая вода лагун и многообразный подводный мир. Попав один раз сюда &ndash; вы просто не захотите возвращаться)).</p>\n<br />\n<p>Яхтинг на Сейшелах &ndash; это вообще отдельная и очень роскошная история, но при этом абсолютно доступная. Здесь наши флотилии состоят исключительно из белоснежных парусных катамаранов повышенной комфортности, что сделает ваш отдых еще более приятным.</p>\n<img class="arctic-body-img" src="/img/yachting/IMG_Tilda.jpg" alt="" />\n<p>Нас ожидают &ndash; мили океанских приключений, десятки необитаемых островов, потрясающие высадки, морские деликатесы и бесподобные вечеринки с факелами на пляже!</p>\n<p>Райский отдых теперь ближе, чем когда-либо. Поспеши забронировать место в команде на нашу следующую флотилию на Сейшельские Острова!</p>\n</div>\n<div class="arctic-how">&nbsp;</div>'),
(2, 'adventure', 'ПРИКЛЮЧЕНИЯ', 'Отправься в самые необыкновенные места нашей планеты!', 'присоединяйся', 'img/uploads/5826a23437ce9.png', 'Страница приключений', 'Описание страницы приключений', '<h3 class="red center first">Путешествия, которые заставят тебя заново влюбиться в жизнь!</h3>\r\n<p>Если вы мечтаете о восхождении на вулканы, о рассвете в джунглях, о путешествиях в самые необыкновенные места планеты &ndash; то нам однозначно по пути! Походить по небу в Боливии, обнять баобаб на Мадагаскаре, проехать по заснеженной долине на верблюде в Монголии, познать Бога в Тибете или в одном из ашрамов Индии, промчаться на джипах по оранжевым барханам Сахары в Морокко. И это только тысячная доля того, что нам предстоит с вами увидеть.</p>\r\n<p><br /><img class="arctic-body-img" src="/img/adventure/2.png" alt="" /><br /><br /></p>\r\n<p>Наши экспедиции мы разрабатываем сами, заранее продумываем все нюансы маршрута и логистику таким образом, что бы вы не просто отметили точку на карте, а максимально погрузились в страну по которой путешествуете. Ведь проще показать основные туристические достопримечательности и &laquo;незаморачиваться&raquo; поиском необычных и уникальных мест. Но наши экспедиции не похожи на обычные путешествия. Драйв, местный колорит и необыкновенно веселая компания!</p>\r\n<p>&nbsp;</p>\r\n<p>Путешествия и экспедиции в самые отдаленные и интересные места нашей планеты &ndash; наполнят вашу жизнь приключениями и смыслом.</p>\r\n<p><br /><br /><img class="arctic-body-img" src="/img/adventure/3.png" alt="" /><br /><br /></p>\r\n<p>Мы не прибегаем к помощи посредников и сами формируем цену экспедиций, именно поэтому стоимость наших путешествий абсолютно доступна, а ваши впечатления уникальны.</p>\r\n<p>&nbsp;</p>\r\n<p>С нами путешествуют участники разных возрастов. Это увлеченные путешествиями люди, которые любят жизнь во всех ее проявления, ведь нет предела желанию видеть самые бесподобные места планеты.</p>\r\n<p><br /><br /><img class="arctic-body-img" src="/img/adventure/4.png" alt="" /><br /><br /></p>\r\n<p>Наши экспедиции &ndash; это возможность за небольшой промежуток времени увидеть максимум самых впечатляющих мест, поучаствовать в максимальном количестве активных приключений и попробовать самые необычные блюда местной кухни.</p>\r\n<p>&nbsp;</p>\r\n<p>Для участия в наших экспедициях не нужна специальная физическая подготовка; у нас нет возрастных и других ограничений. С нами путешествуют участники из разных стран мира.</p>\r\n<p>&nbsp;</p>\r\n<p>Длительность наших экспедиций 8 - 14 дней. Участников в экспедиционной команде от 10 до 20 человек. Для участия в экспедициях вам не понадобится специальное снаряжение, все что нужно мы вам предоставим на месте во время приключений.</p>\r\n<p><br /><br /><img class="arctic-body-img" src="/img/adventure/5.png" alt="" /><br /><br /></p>\r\n<p>Мы часто откладываем ЖИЗНЬ на ПОТОМ, а когда настанет это "потом" не знаем сами. Долго думаем и в конце концов не решаемся... ХВАТИТ ДУМАТЬ - жизнь прекрасна и удивительна!</p>\r\n<p>&nbsp;</p>\r\n<p>ПРИСОЕДИНЯЙТЕСЬ к необыкновенным экспедициям и ПРИКЛЮЧЕНИЯМ, где вы обязательно найдете ДРУЗЕЙ и единомышленников, встяхнетесь и вернете ощущение радости и наполненности в свою жизнь!</p>'),
(3, 'arctic', 'ARCTIC EXPEDITIONS', 'Отправься в самое необычное  <br> путешествие в своей жизни!', 'присоединяйся', 'img/uploads/5826ae6ad2cc1.jpg', 'Follow your dream. Твоё travel-сообщество.', 'Follow your dream. Твоё travel-сообщество.', '<h3 class="red center first">Арктика &ndash; это самое необычное путешествие в вашей жизни и невероятные северные красоты!</h3>\r\n<p>Почему Арктика? Гигантские айсберги, паковые льды, ледяные пещеры и водопады, лавовые поля, гейзеры, киты, моржи, белые медведи, олени и северное сияние, белые ночи - ваши самые яркие впечатления.</p>\r\n<p>Шпицберген, Гренландия, Исландия &ndash; тройка must-have арктических направлений. Арктические туры безумно дорогие (чек путешествия в турфирмах стартует от 3000 евро), но мы смогли сделать наши экспедиции доступными (от 1450 евро), так как мы создаем их сами, прорабатываем все нюансы путешествия, готовим маршруты сотрудничая с местными лицензионными гидами.</p>\r\n<p>Наши экспедиции &ndash; это возможность за небольшой промежуток времени увидеть максимум самых впечатляющих мест, поучаствовать в максимальном количестве активных приключений, попробовать самые необычные блюда местной арктической кухни и все это в максимально возможных, как для Арктики, комфортных условиях (проживание в местном отеле).</p>\r\n<p>У нас для вас хорошая новость)) - мы не ночуем в палатках и не носим рюкзаки; для участия в наших арктических экспедициях не нужна специальная физическая подготовка; у нас нет возрастных и других ограничений. С нами путешествуют участники из разных стран мира.</p>\r\n<p>Длительность наших экспедиций 8 - 10 дней. Участников в экспедиционной команде от 10 до 20 человек. Для участия в экспедициях вам не понадобится специальное снаряжение, все что нужно мы вам предоставим на месте во время приключений.</p>\r\n<p>Мы часто откладываем ЖИЗНЬ на ПОТОМ, а когда настанет это "потом" не знаем сами. Долго думаем и в конце концов не решаемся... ХВАТИТ ДУМАТЬ - жизнь прекрасна и удивительна!</p>\r\n<p>ПРИСОЕДИНЯЙТЕСЬ к необыкновенным арктическим ПРИКЛЮЧЕНИЯМ, где вы обязательно найдете ДРУЗЕЙ и единомышленников, встяхнетесь и вернете ощущение радости и наполненности в свою жизнь!</p>\r\n<p class="center">Присоединяйтесь! Жизнь невероятна и Арктика, тому яркое подтверждение!</p>\r\n<p class="yellow center">Follow Your Dream и # Живи так, как ты хочешь!</p>\r\n<div class="arctic-body-shpitsberg">\r\n<h3 class="heading">ШПИЦБЕРГЕН</h3>\r\n<h4 class="under-h3">Дальше только Северный Полюс!</h4>\r\n<img class="arctic-body-img" src="/img/arctic/8.jpg" alt="" />\r\n<p>Шпицберген - уникальный полярный архипелаг, за ним только бесконечные льды и Северный Полюс!</p>\r\n<p>Тут на самом Краю Света вы откроете для себя не только необыкновенный мир уникальной северной природы, но и обретете внутреннюю свободу и множество новых друзей, ведь на Шпицберген слетаются путешественники со всей планеты (мы гарантируем интернациональные посиделки с вином и вкусным ужином в большой гостинной отеля).</p>\r\n<p>Шпицберген - это БЕЛЫЕ МЕДВЕДИ (которых там в 3!! раза больше чем людей), МОРЖИ, КИТЫ, уникальная арктическая природа, паковые льды, олени и звенящая тишина крайнего севера!</p>\r\n<p>Все экспедиции на Северный Полюс начинаются именно отсюда, так как до Точки Мира всего 1 час лета! Шпицберген &ndash; одно из лучших мест на планете для наблюдения за Северным Сиянием и место базировки &laquo;Хранилища судного дня&raquo; (все семена планеты хранятся именно тут).</p>\r\n<img class="arctic-body-img" src="/img/arctic/13.jpg" alt="" />\r\n<h3>На Шпицбергене вас ждут захватывающие приключения:</h3>\r\n<ul class="arctic-body-shpitsberg-ul">\r\n<li>морское сафари к лежбищам моржей</li>\r\n<li>сафари на снегоходах и квадроциклах</li>\r\n<li>путешествие по арктической долине в собачьих упряжках</li>\r\n<li>ледяные пещеры и Северное Сияние</li>\r\n<li>гигантские айсберги и паковые льды</li>\r\n<li>арктический трекинг и каякинг</li>\r\n<li>возможность увидеть китов, белых медведей, северных оленей, моржей, морских котиков в естественной среде обитания.</li>\r\n</ul>\r\n</div>\r\n<div class="arctic-body-grenland">\r\n<h3 class="heading">ГРЕНЛАНДИЯ</h3>\r\n<h4 class="under-h3">Грандиозные айсберги и киты!</h4>\r\n<img class="arctic-body-img" src="/img/arctic/4.jpg" alt="" />\r\n<p>ГРЕНЛАНДИЯ - must have 2017 в вашем списке невероятных приключений года, а может быть и всей жизни!Гигантские айсберги (невероятных форм и размеров), киты, которых можно будет увидеть совсем близко, уникальная северная флора и фауна. ТАКОГО - вы не увидите нигде!Гренландия - это просто невероятно!</p>\r\n<p>Мы часто отклыдываем ЖИЗНЬ на ПОТОМ, а когда настанет это "потом" не знаем сами. Долго думаем и вконце концов не решаемся... ХВАТИТ ДУМАТЬ - жизнь прекрасна и удивительна! ПРИСОЕДИНЯЙТЕСЬ к необыкновенному и веселому ПРИКЛЮЧЕНИЮ, где вы обязательно найдете ДРУЗЕЙ и единомышленников, встяхнетесь и вернете ощущение радости и наполненности в свою жизнь! <img class="arctic-body-img" src="/img/arctic/5.jpg" alt="" /></p>\r\n<p>Гренландия &ndash; настоящая мекка любителей Севера и путешественников со всего мира. Не упустите возможность увидеть эти потрясающие красоты своими глазами.</p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<div class="arctic-body-iceland">\r\n<h3 class="heading">ИСЛАНДИЯ</h3>\r\n<h4 class="under-h3">Потрясающие вулканы, гейзеры, водопады и льды!</h4>\r\n<p>Исландия &ndash; это потрясающий контраст впечатлений: невероятные гейзеры, ледяные лагуны, вулканы, сотни водопадов и потрясающие закаты.</p>\r\n<p>Контрастная и суровая природа этой страны каким-то чудом осталась почти или полностью нетронутой. Кажется, что время здесь остановилось, а по земле никогда не ступала нога человека. Вот почему Исландия &mdash; это настоящая мечта фотографов и путешественников, которых влечет шанс запечатлеть первозданную, мистическую силу и красоту северной природы. Да и таких захватывающих пейжазей, пожалуй, не встретишь больше на Земле.</p>\r\n<img class="arctic-body-img" src="/img/arctic/9.jpg" alt="" />\r\n<p>Наши экспедиции в Исландию &ndash; это &laquo;выжимка&raquo; самых красивых туристических мест, а так же самые неожиданные и нетуристические достопримечательности, о которых не прочтешь в модных путеводителях.</p>\r\n<p>Ну и конечно &ndash; самая положительная компания увлеченных путешественников, которые разделят вашу страсть к приключениям.</p>\r\n<p class="center">Присоединяйтесь!</p>\r\n<img class="arctic-body-img" src="/img/arctic/10.jpg" alt="" /></div>\r\n<div class="arctic-how">&nbsp;</div>'),
(4, 'dreambus', 'ПУТЕШЕСТВИЯ НА ЯХТАХ', 'Проведи бесподобную неделю  на белоснежной яхте!', 'присоединяйся', 'img/uploads/5826b49b5f85f.jpg', 'Follow your dream. Твоё travel-сообщество.', 'Follow your dream. Твоё travel-сообщество.', '<h3 class="red center first">Путешествие на ЯХТЕ &ndash; это мечта в чистом виде! <br />Welcome to paradise!</h3>\n<p>Ведь только для вас - нетронутые бирюзовые бухты, километры песчаных пляжей, бесподобные рассветы, ужины на палубе с видом на закат, вечеринки под звездами, уникальные достопримечательности, свежие морепродукты, восхитительный загар, новые друзья, знакомства и положительные эмоции, которых нам так не хватает в повседневной жизни!</p>\n<p>&nbsp;</p>\n<p>Путешествие на яхте &ndash; это бесконечная свобода ощущений, передвижения и такая доступная роскошь, которую можно позволить себе уже прямо сейчас, не откладывая свою ЖИЗНЬ &laquo;на потом&raquo;. Неделя незабываемых впечатлений обойдется вам дешевле, чем отдых в среднем отеле в Турции.</p>\n<p>&nbsp;</p>\n<p>Да, и всего за 7 дней можно увидеть в десятки раз больше, чем лежа на пляже.</p>\n<p>&nbsp;</p>\n<p>Каждый день &ndash; новый город или остров!, которые пленят своей красотой и самобытностью. У вас будет и время и возможность почувствовать страну изнутри, рассмотреть самые укромные уголки, насладиться великолепной кухней и окунуться с головой в местный колорит. Представьте, как здорово, после прихода в бухту, взять на прокат мопед или малолитражку и целый день колесить по небольшим деревенькам и городкам.</p>\n<p>Кто в команде? Это по-хорошему &laquo;голодные&raquo; люди, которые стремятся что-то узнать, почувствовать новую страну, а не просто провести время в очередном All Inclusive.</p>\n<p>Путешествие на яхте &ndash; это романтика и настоящее приключение по вашим правилам)) в комфортных условиях практически пятизвездочного отеля на воде. И безусловно лучший выбор для недельного отпуска, когда хочется и моря и пляжа и приключений и активного отдыха, и ужина с бокалом белого под звездами с видом на ТОЛЬКО ВАШЕ МОРЕ!</p>\n<p class="center">Присоединяйтесь к нашим флотилиям в Италии, Греции, Испании, Хорватии, на Канарских и Сейшельских островах!</p>\n<p class="yellow center">ЖИЗНЬ ОДНА, и она прекрасна! Если не сейчас наслаждаться ею, то когда?</p>\n<div class="arctic-body-shpitsberg">\n<h3 class="heading">КАНАРЫ &ndash; контрастный архипелаг 7 островов</h3>\n<h4 class="under-h3">Потрясающие контрасты пейзажей</h4>\n<img class="arctic-body-img" src="/img/yachting/sotavento-beach-fuerteventura.jpg" alt="" />\n<p>Канары &ndash; это в первую очередь просто потрясающий контраст семи островов этого небольшого архипелага, расположенного возле западных берегов Африки.</p>\n<br />\n<p>Когда мы впервые попали на Канары &ndash; были мягко говоря в &laquo;шоке&raquo; в хорошем смысле. Мы обошли на яхтах весь архипелаг, высаживаясь на каждом из островов. И каждый раз мы попадали в абсолютно разный &laquo;пейзаж&raquo;.</p>\n<p>Тенерифе &ndash; остров с местами буйной растительностью и просто ГИГАНТСКИМИ КАКТУСАМИ, из плодов которых получается, кстати, очень вкусный джем)). Восхождение на ВУЛКАН Тейде &ndash; одно из самых ярких впечатлений высадки.</p>\n<img class="arctic-body-img" src="/img/yachting/canary.jpg" alt="" />\n<p>Фуэрта вентура &ndash; это просто рай для серферов и кайтеров, которые съезжаются на остров со всего мира. Тут вас ждут абсолютно пустынные песчаные долины, острые, почти безжизненные горы и просто ошеломляющей синевы ОКЕАН. Да, и дикие козы)), которые бегают по долинам в большом количестве.</p>\n<p>Ланцароте - остров вулканов, лунного пейзажа, черного песка! и очень вкусного инжира, который местные жители выращивают прямо на лавовых полях!</p>\n<p>Острова Ла Гомера, Йерро, Ла-пальма и Гран Канария &ndash; это пышная растительность, банановые плантации и маленькие рыбацкие деревушки, разбросанные на бескрайних пляжах.</p>\n<p class="center">Яхтинг на Канарах - вам обязательно запомнится, а впечатлений хватит на жизнь вперед!</p>\n<p class="yellow center">Присоединяйтесь к нашим ближайшим флотилиям на Канарских островах! Будет круто!</p>\n</div>\n<div class="arctic-body-grenland">\n<h3 class="heading">Бесподобная ИТАЛИЯ</h3>\n<h4 class="under-h3" style="font-style: italic;">Dolce vita и любовь с первого взгляда</h4>\n<img class="arctic-body-img" src="/img/yachting/2-amalfi-and-naples.jpg" alt="" />\n<p>ИТАЛИЯ - это не просто место на карте. Это - МЕЧТА!</p>\n<br />\n<p>Мечта, которая пахнет морем, азалиями, домашним мороженым, теплым солнцем, радостью и ... приключениями)).</p>\n<p>Мечта, которая готова стать РЕАЛЬНОСТЬЮ.</p>\n<p>А теперь представьте себя на БЕЛОСНЕЖНОЙ ЯХТЕ (в купальнике последней модели:), а еще лучше на гигантском парусном катамаране - бирюзовые бухты островов, скалы и апельсиновые рощи, уютные городки, вечерние прогулки и ОЧЕНЬ вкусная еда.</p>\n<p>7 НЕЗАБЫВАЕМЫХ ДНЕЙ, наполненных морскими приключениями, новыми знакомствами и драйвом.&nbsp; Не об этом ли вы мечтали в душном мегаполисе?</p>\n<img class="arctic-body-img" src="/img/yachting/argentous_corfu_41.jpg" alt="" />\n<p>Италия &ndash; страна четырех морей (Лигурийского,&nbsp;Тирренского,&nbsp;Ионического&nbsp;и&nbsp;Адриатического), порясающей красоты островов и вулканов, бесподобной кухни.</p>\n<p class="center">Чего стоят только сами названия &ndash; Капри, Сицилия, Сардиния&hellip; Рай для путешественников и мечтателей!</p>\n<p class="yellow center">В наших флотилиях по Италии &ndash; только самые красивые и потрясающие места и только самая веселая и искренняя компания!</p>\n</div>\n<div class="arctic-body-iceland">\n<h3 class="heading">Бело-синяя ГРЕЦИЯ</h3>\n<h4 class="under-h3">Бирюзовые бухты моря, белоснежные пляжи и бесподобные скалы</h4>\n<img class="arctic-body-img" src="/img/yachting/look.jpg" alt="" />\n<p>Греция &ndash; это не только античная культура, фантастические мифы, потрясающей чистоты море, скальные гроты, белоснежные пляжи, необыкновенно вкусная средиземноморская кухня, это еще и страна более 2000 островов! Только представьте, какой потрясающий яхтинг вас ожидает именно здесь!</p>\n<br />\n<p>В этой стране надо просто РАССЛАБИТЬСЯ и НАСЛАЖДАТЬСЯ: едой и вином, морем и полуденным зноем, общением с местными жителями и природой, древностями и тишиной, дискотеками и весельем. Всем и сразу&nbsp;&mdash; по-другому здесь все равно не получится.</p>\n<img class="arctic-body-img" src="/img/yachting/447abed6c755f5fdc9b2e1b63c7f8dc1.jpg" alt="" />\n<p>Наши флотилии как правило стартуют из Афин, приключения в Ионическом море - на Лефкасе или Корфу. Идеальная длительность путешествия на яхте в Греции &ndash; 7 дней. За неделю можно успеть добраться практически в любой уголок моря и вернуться обратно другим маршрутом. Так что яркие впечатления вам точно обеспечены!</p>\n<p class="center">И как бонус &ndash; чрезвычайно низкие цены на авиаперелет. Не упустите свой шанс!</p>\n<p class="yellow center">Присоединяйтесь к самому теплому приключению на яхтах в Греции!</p>\n</div>\n<div class="arctic-body-iceland">\n<h3 class="heading">Сейшелы</h3>\n<h4 class="under-h3">Необитаемые острова, пальмы и бесконечный океан</h4>\n<img class="arctic-body-img" src="/img/yachting/6484163.jpg" alt="" />\n<p>Сейшелы &ndash; это просто настоящий рай &ndash; Баунти, все как в самых красивых рекламах, проспектах и фильмах. Прекрасные белоснежные пляжи, пальмы, необитаемые острова, прозрачная голубая вода лагун и многообразный подводный мир. Попав один раз сюда &ndash; вы просто не захотите возвращаться)).</p>\n<br />\n<p>Яхтинг на Сейшелах &ndash; это вообще отдельная и очень роскошная история, но при этом абсолютно доступная. Здесь наши флотилии состоят исключительно из белоснежных парусных катамаранов повышенной комфортности, что сделает ваш отдых еще более приятным.</p>\n<img class="arctic-body-img" src="/img/yachting/IMG_Tilda.jpg" alt="" />\n<p>Нас ожидают &ndash; мили океанских приключений, десятки необитаемых островов, потрясающие высадки, морские деликатесы и бесподобные вечеринки с факелами на пляже!</p>\n<p>Райский отдых теперь ближе, чем когда-либо. Поспеши забронировать место в команде на нашу следующую флотилию на Сейшельские Острова!</p>\n</div>\n<div class="arctic-how">&nbsp;</div>');

-- --------------------------------------------------------

--
-- Структура таблицы `tmpHowJoin`
--

CREATE TABLE IF NOT EXISTS `tmpHowJoin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tmpGeneralId` varchar(255) NOT NULL,
  `tmpJoinLeftHeader` varchar(255) NOT NULL,
  `tmpJoinLeftImgSrc` varchar(255) NOT NULL,
  `tmpJoinLeftText` text NOT NULL,
  `tmpJoinRightHeader` varchar(255) NOT NULL,
  `tmpJoinRightImgSrc` varchar(255) NOT NULL,
  `tmpJoinRightText` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `tmpHowJoin`
--

INSERT INTO `tmpHowJoin` (`id`, `tmpGeneralId`, `tmpJoinLeftHeader`, `tmpJoinLeftImgSrc`, `tmpJoinLeftText`, `tmpJoinRightHeader`, `tmpJoinRightImgSrc`, `tmpJoinRightText`) VALUES
(1, 'yachting', 'Как присоединиться', 'img/uploads/5826b49b698fe.png', 'Выбирайте направление в Календаре путешествий или в Ближайших экспедициях. Отправляйте заявку на участие и мы вам перезвоним для уточнения всех деталей или кликате на скайп или вайбер колл внизу страницы и совершите бесплатный звонок из любой точки мира.  Мы рады каждому из вас! Честно))', 'Как формируется команда', 'img/uploads/5826b49b69c4f.png', 'Наши участники – это увлеченные путешествиями люди, которые любят жизнь во всех ее проявлениях. С нами путешествуют участники от 7 до 69 лет, ведь нет предела желанию видеть самые бесподобные места планеты в компании интересных и искренних людей.  Жизнь – необыкновенное приключение! Присоединяйтесь!'),
(2, 'adventure', 'Как присоединиться', 'img/uploads/5826a66a8faba.png', 'Выбирайте направление в Календаре путешествий или в Ближайших экспедициях. Отправляйте заявку на участие и мы вам перезвоним для уточнения всех деталей или кликате на скайп или вайбер колл внизу страницы и совершите бесплатный звонок из любой точки мира.  Мы рады каждому из вас! Честно))', 'Как формируется команда', 'img/uploads/5826a66a8fed8.png', 'Наши участники – это увлеченные путешествиями люди, которые любят жизнь во всех ее проявлениях. С нами путешествуют участники от 7 до 69 лет, ведь нет предела желанию видеть самые бесподобные места планеты в компании интересных и искренних людей.  Жизнь – необыкновенное приключение! Присоединяйтесь!'),
(3, 'arctic', 'Как присоединиться', 'img/uploads/5826b1374edfd.png', 'Выбирайте направление в Календаре путешествий или в Ближайших экспедициях. Отправляйте заявку на участие и мы вам перезвоним для уточнения всех деталей или кликате на скайп или вайбер колл внизу страницы и совершите бесплатный звонок из любой точки мира.  Мы рады каждому из вас! Честно))', 'Как формируется команда', 'img/uploads/5826b1374f2a5.png', 'Наши участники – это увлеченные путешествиями люди, которые любят жизнь во всех ее проявлениях. С нами путешествуют участники от 7 до 69 лет, ведь нет предела желанию видеть самые бесподобные места планеты в компании интересных и искренних людей.  Жизнь – необыкновенное приключение! Присоединяйтесь!'),
(4, 'dreambus', 'Как присоединиться', 'img/uploads/5826b49b698fe.png', 'Выбирайте направление в Календаре путешествий или в Ближайших экспедициях. Отправляйте заявку на участие и мы вам перезвоним для уточнения всех деталей или кликате на скайп или вайбер колл внизу страницы и совершите бесплатный звонок из любой точки мира.  Мы рады каждому из вас! Честно))', 'Как формируется команда', 'img/uploads/5826b49b69c4f.png', 'Наши участники – это увлеченные путешествиями люди, которые любят жизнь во всех ее проявлениях. С нами путешествуют участники от 7 до 69 лет, ведь нет предела желанию видеть самые бесподобные места планеты в компании интересных и искренних людей.  Жизнь – необыкновенное приключение! Присоединяйтесь!');

-- --------------------------------------------------------

--
-- Структура таблицы `tmpUpcoming`
--

CREATE TABLE IF NOT EXISTS `tmpUpcoming` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tmpGeneralId` varchar(255) NOT NULL,
  `tmpImgSrc` varchar(255) NOT NULL,
  `tmpCheckpoint` varchar(255) NOT NULL,
  `tmpDate` varchar(255) NOT NULL,
  `tmpPrice` varchar(255) NOT NULL,
  `tmpLink` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `tmpUpcoming`
--

INSERT INTO `tmpUpcoming` (`id`, `tmpGeneralId`, `tmpImgSrc`, `tmpCheckpoint`, `tmpDate`, `tmpPrice`, `tmpLink`) VALUES
(1, 'yachting', 'img/uploads/5826b49b6a32b.jpg', 'ГРЕЦИЯ – ИОНИЧЕСКИЕ ОСТРОВА И СРЕДИЗЕМНОМОРСКАЯ КУХНЯ', '28 АПРЕЛЯ – 6 МАЯ 2017', '950 ЕВРО', '#'),
(2, 'yachting', 'img/uploads/5826b49b6a71d.jpg', 'СЕЙШЕЛЫ - МОРЕ И УДОВОЛЬСТВИЯ И ВЕСЕЛЬЯ', '04.07-12.07.2017', '1450 EURO', '#'),
(3, 'yachting', 'img/uploads/5826b49b6aac6.jpg', 'ИБИЦА НА МАЙСКИЕ 2017 ОТДЫХ С ХОРОШИМИ ЛЮДЬМИ', '01.05-08.05.2017', '1450 EURO', '#'),
(4, 'adventure', 'img/uploads/5826a88a2e6b2.jpg', 'ТАЙЛАНД + ЗАТЕРЯНЫЕ МИРЫ КАМБОДЖИ', '2-14 ЯНВАРЯ 2017', '1799 ЕВРО', '#'),
(5, 'adventure', 'img/uploads/5826a88a33690.jpg', 'МАРОККО – ОКЕАН, ПУСТЫНЯ ГОБИ И АТЛАССКИЕ ГОРЫ', '20-31 МАРТА 2017', '1450 ЕВРО', '#'),
(6, 'adventure', 'img/uploads/5826a88a33bb7.jpg', 'ИСЛАНДИЯ ДЖИППИНГ – ВСЕ САМОЕ ГРАНДИОЗНОЕ В ОДНОМ ПУТЕШЕСТВИИ', '14 - 21 МАЯ 2017', '1650 ЕВРО', '#'),
(7, 'arctic', 'img/uploads/5826b13757f24.jpg', 'ШПИЦБЕРГЕН – В ПОИСКАХ СЕВЕРНОГО СИЯНИЯ', '11-17 ФЕВРАЛЯ 2017', '1780 ЕВРО', '#'),
(8, 'arctic', 'img/uploads/5826b13758461.jpg', 'ИСЛАНДИЯ ДЖИППИНГ – ВСЕ САМОЕ ГРАНДИОЗНОЕ В ОДНОМ ПУТЕШЕСТВИИ', '14 - 21 МАЯ 2017', '1650 ЕВРО', '#'),
(9, 'arctic', 'img/uploads/5826b13758a09.jpg', 'ГРЕНЛАНДИЯ – MUST-HAVE 2017. ПРИКЛЮЧЕНИЕ ВСЕЙ ЖИЗНИ!', '27 ИЮНЯ - 04 ИЮЛЯ 2017', '2050 ЕВРО', '#'),
(10, 'dreambus', 'img/uploads/5826b13758461.jpg', 'ШПИЦБЕРГЕН – В ПОИСКАХ СЕВЕРНОГО СИЯНИЯ', '27 ИЮНЯ - 04 ИЮЛЯ 2017', '2050 ЕВРО', '#'),
(11, 'dreambus', 'img/uploads/5826b13758461.jpg', 'ШПИЦБЕРГЕН – В ПОИСКАХ СЕВЕРНОГО СИЯНИЯ', '27 ИЮНЯ - 04 ИЮЛЯ 2017', '2050 ЕВРО', '#'),
(12, 'dreambus', 'img/uploads/5826b13758461.jpg', 'ШПИЦБЕРГЕН – В ПОИСКАХ СЕВЕРНОГО СИЯНИЯ', '27 ИЮНЯ - 04 ИЮЛЯ 2017', '2050 ЕВРО', '#');

-- --------------------------------------------------------

--
-- Структура таблицы `tmpUpcomingCalendar`
--

CREATE TABLE IF NOT EXISTS `tmpUpcomingCalendar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `generalId` varchar(255) NOT NULL,
  `tmpCalendarBgImg` varchar(255) NOT NULL,
  `tmpCalendarTitle` varchar(255) NOT NULL,
  `tmpCalendarLink` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `tmpUpcomingCalendar`
--

INSERT INTO `tmpUpcomingCalendar` (`id`, `generalId`, `tmpCalendarBgImg`, `tmpCalendarTitle`, `tmpCalendarLink`) VALUES
(1, 'yachting', 'img/uploads/5826b49b6af03.jpg', 'календарь путешествий', 'calendar.php'),
(2, 'adventure', 'img/uploads/5826aa4835923.jpg', 'календарь путешествий', 'calendar.php'),
(3, 'arctic', 'img/uploads/5826b13758f1f.jpg', 'календарь путешествий', 'calendar.php'),
(4, 'dreambus', 'img/uploads/5826b13758f1f.jpg', 'календарь путешествий', 'calendar.php');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES
(1, 'adminOfSite', 'info@dreamlifeexpedition.com', 'GL2FHwZeSV');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
