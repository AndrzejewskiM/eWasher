-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Cze 2022, 19:48
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ewasher`
--

DELIMITER $$
--
-- Procedury
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `perm_for_user` (IN `user` INT)  NO SQL select `ewasher`.`permisions`.`name_permisions` AS `perm`, permisions.action_permissions as 'action' from `ewasher`.`permisions` where `ewasher`.`permisions`.`id_permisions` in (select `ewasher`.`roles_permisions`.`id_permision` from `ewasher`.`roles_permisions` where `ewasher`.`roles_permisions`.`id_role` in (select `ewasher`.`worker`.`id_role` from `ewasher`.`worker` where (`ewasher`.`worker`.`id_worker` = user)))$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `calendar_events`
--

CREATE TABLE `calendar_events` (
  `id_calendar` int(11) NOT NULL,
  `title_calendar` varchar(500) CHARACTER SET utf8 NOT NULL,
  `start_calendar` datetime NOT NULL,
  `end_calendar` datetime NOT NULL,
  `description_calendar` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `color_calendar` varchar(10) CHARACTER SET utf8 NOT NULL,
  `id_worker_calendar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `calendar_events`
--

INSERT INTO `calendar_events` (`id_calendar`, `title_calendar`, `start_calendar`, `end_calendar`, `description_calendar`, `color_calendar`, `id_worker_calendar`) VALUES
(3, 'Odebranie Dywanów Test', '2019-01-19 18:55:00', '2019-01-19 18:55:00', 'Odebranie Dywanów od Klienta', '', 3),
(4, 'Testowy', '2019-01-15 05:05:00', '2019-01-19 01:25:00', 'Testowy', '#FF0000', 2),
(7, 'Test', '2019-01-19 00:00:00', '2019-01-19 00:00:00', 'Klient: Ewa Andrzejewska', '#FF00FF', 8),
(8, 'Odebranie Dywanów', '2019-01-22 00:00:00', '2019-01-22 11:00:00', 'Odebranie', '#008000', 8),
(9, 'Odebranie Dywanów', '2019-02-11 14:00:00', '2019-02-11 14:05:00', 'Podmiejska 29/14', '#FF0000', 8),
(10, 'Odebranie Dywanów', '2019-02-11 14:30:00', '2019-02-11 14:40:00', 'Staszica', '#008000', 8);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `name_customer` varchar(50) CHARACTER SET utf8 NOT NULL,
  `surname_customer` varchar(50) CHARACTER SET utf8 NOT NULL,
  `phone_customer` varchar(15) CHARACTER SET utf8 NOT NULL,
  `street_customer` varchar(50) CHARACTER SET utf8 NOT NULL,
  `city_customer` varchar(50) CHARACTER SET utf8 NOT NULL,
  `post_code_customer` varchar(6) CHARACTER SET utf8 NOT NULL,
  `description_customer` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `customer`
--

INSERT INTO `customer` (`id_customer`, `name_customer`, `surname_customer`, `phone_customer`, `street_customer`, `city_customer`, `post_code_customer`, `description_customer`) VALUES
(1, 'Anna', 'Nowak', '123456789', 'Podmiejska XX/XX', 'Kalisz', '62-800', 'Dojazd do ulicy Żabia'),
(2, 'Michał', 'Andrzejewski', '500260812', 'Podmiejska 29/14', 'Kalisz', '62-800', 'Testowy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ordering`
--

CREATE TABLE `ordering` (
  `id_ordering` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `number_ordering` varchar(11) CHARACTER SET utf8 NOT NULL,
  `creation_date` date NOT NULL,
  `date_of_receipt` date DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `description_ordering` varchar(200) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `ordering`
--

INSERT INTO `ordering` (`id_ordering`, `client_id`, `status_id`, `number_ordering`, `creation_date`, `date_of_receipt`, `delivery_date`, `description_ordering`) VALUES
(109, 1, 3, '2022/06/1', '2022-06-02', '2022-06-01', '2022-06-03', 'Test');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ordering_product`
--

CREATE TABLE `ordering_product` (
  `id_ordering_product` int(11) NOT NULL,
  `id_ordering` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `size_ordering_product` double NOT NULL,
  `price_ordering_product` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `ordering_product`
--

INSERT INTO `ordering_product` (`id_ordering_product`, `id_ordering`, `id_product`, `size_ordering_product`, `price_ordering_product`) VALUES
(1, 109, 2, 6, 93);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `order_status`
--

CREATE TABLE `order_status` (
  `id_order_status` int(11) NOT NULL,
  `name_order_status` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `order_status`
--

INSERT INTO `order_status` (`id_order_status`, `name_order_status`) VALUES
(1, 'Wykonane'),
(2, 'Anulowane'),
(3, 'W trakcie');

-- --------------------------------------------------------

--
-- Zastąpiona struktura widoku `perm`
-- (Zobacz poniżej rzeczywisty widok)
--
CREATE TABLE `perm` (
`perm` varchar(255)
);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `permisions`
--

CREATE TABLE `permisions` (
  `id_permisions` int(11) NOT NULL,
  `name_permisions` varchar(255) CHARACTER SET utf8 NOT NULL,
  `action_permissions` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `permisions`
--

INSERT INTO `permisions` (`id_permisions`, `name_permisions`, `action_permissions`) VALUES
(1, 'Customer', NULL),
(3, 'Order', NULL),
(4, 'Worker', NULL),
(5, 'Calendar', NULL),
(6, 'Main', NULL),
(7, 'Ordering_Product', NULL),
(8, 'priceList', NULL),
(9, 'OrderStatus', NULL),
(10, 'Permission', NULL),
(11, 'Role', NULL),
(12, 'Customer', 'index');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type_product` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description_product` varchar(200) CHARACTER SET utf8 NOT NULL,
  `price_for_meter` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `type_product`, `description_product`, `price_for_meter`) VALUES
(1, 'Wełniane', 'Dywan', 'Dywan Wełniany', 10),
(2, 'Sztuczne', 'Dywan', 'Dywan Sztuczny', 9),
(3, 'SHAGGI', 'Dywan', 'Dywan SHAGGI', 13),
(4, 'Wełniane chińskie', 'Dywan', 'Dywany wełniane chińskie grube', 11),
(5, 'Dywaniki poniżej 1m^2', 'Dywan/Dywanik', 'Dywan/Dywanik poniżej jednego metra kwadratowego', 8);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `name_roles` varchar(127) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `roles`
--

INSERT INTO `roles` (`id_roles`, `name_roles`) VALUES
(1, 'root'),
(24, 'Pracownik'),
(25, 'test');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles_permisions`
--

CREATE TABLE `roles_permisions` (
  `id_roles_permisions` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_permision` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `roles_permisions`
--

INSERT INTO `roles_permisions` (`id_roles_permisions`, `id_role`, `id_permision`) VALUES
(1, 1, 1),
(2, 1, 3),
(3, 1, 4),
(6, 1, 6),
(7, 1, 7),
(8, 1, 5),
(9, 1, 10),
(10, 1, 11),
(11, 1, 9),
(12, 1, 8),
(13, 24, 1),
(14, 24, 3),
(15, 24, 5),
(16, 24, 6),
(17, 24, 7),
(18, 25, 1),
(19, 25, 3),
(20, 25, 4),
(21, 26, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `worker`
--

CREATE TABLE `worker` (
  `id_worker` int(11) NOT NULL,
  `login` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `name_worker` varchar(50) CHARACTER SET utf8 NOT NULL,
  `surname_worker` varchar(50) CHARACTER SET utf8 NOT NULL,
  `phone_worker` varchar(15) CHARACTER SET utf8 NOT NULL,
  `id_role` int(11) NOT NULL,
  `is_Active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `worker`
--

INSERT INTO `worker` (`id_worker`, `login`, `password`, `name_worker`, `surname_worker`, `phone_worker`, `id_role`, `is_Active`) VALUES
(8, 'Administrator', '21232f297a57a5a743894a0e4a801fc3', 'Michał', 'Andrzejewski', '500260812', 1, 1),
(9, 'pracownik.testowy', '62f6cda862d6b9fb4ea79150178a5a4a', 'Adam', 'Małysz', '123456789', 24, 1);

-- --------------------------------------------------------

--
-- Struktura widoku `perm`
--
DROP TABLE IF EXISTS `perm`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `perm`  AS SELECT `permisions`.`name_permisions` AS `perm` FROM `permisions` WHERE `permisions`.`id_permisions` in (select `roles_permisions`.`id_permision` from `roles_permisions` where `roles_permisions`.`id_role` in (select `worker`.`id_role` from `worker` where `worker`.`id_worker` = 2))  ;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `calendar_events`
--
ALTER TABLE `calendar_events`
  ADD PRIMARY KEY (`id_calendar`);

--
-- Indeksy dla tabeli `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeksy dla tabeli `ordering`
--
ALTER TABLE `ordering`
  ADD PRIMARY KEY (`id_ordering`),
  ADD KEY `id_client` (`client_id`),
  ADD KEY `id_status` (`status_id`);

--
-- Indeksy dla tabeli `ordering_product`
--
ALTER TABLE `ordering_product`
  ADD PRIMARY KEY (`id_ordering_product`),
  ADD KEY `ordering` (`id_ordering`),
  ADD KEY `product` (`id_product`);

--
-- Indeksy dla tabeli `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id_order_status`);

--
-- Indeksy dla tabeli `permisions`
--
ALTER TABLE `permisions`
  ADD PRIMARY KEY (`id_permisions`);

--
-- Indeksy dla tabeli `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indeksy dla tabeli `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indeksy dla tabeli `roles_permisions`
--
ALTER TABLE `roles_permisions`
  ADD PRIMARY KEY (`id_roles_permisions`),
  ADD KEY `roles_permisions_role` (`id_role`),
  ADD KEY `roles_permisions_permision` (`id_permision`);

--
-- Indeksy dla tabeli `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`id_worker`),
  ADD KEY `role_user_id` (`id_role`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `calendar_events`
--
ALTER TABLE `calendar_events`
  MODIFY `id_calendar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `ordering`
--
ALTER TABLE `ordering`
  MODIFY `id_ordering` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT dla tabeli `ordering_product`
--
ALTER TABLE `ordering_product`
  MODIFY `id_ordering_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id_order_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `permisions`
--
ALTER TABLE `permisions`
  MODIFY `id_permisions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `roles`
--
ALTER TABLE `roles`
  MODIFY `id_roles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT dla tabeli `roles_permisions`
--
ALTER TABLE `roles_permisions`
  MODIFY `id_roles_permisions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `worker`
--
ALTER TABLE `worker`
  MODIFY `id_worker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `ordering`
--
ALTER TABLE `ordering`
  ADD CONSTRAINT `id_client` FOREIGN KEY (`client_id`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `id_status` FOREIGN KEY (`status_id`) REFERENCES `order_status` (`id_order_status`);

--
-- Ograniczenia dla tabeli `ordering_product`
--
ALTER TABLE `ordering_product`
  ADD CONSTRAINT `ordering` FOREIGN KEY (`id_ordering`) REFERENCES `ordering` (`id_ordering`),
  ADD CONSTRAINT `product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Ograniczenia dla tabeli `worker`
--
ALTER TABLE `worker`
  ADD CONSTRAINT `role_user_id` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id_roles`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
