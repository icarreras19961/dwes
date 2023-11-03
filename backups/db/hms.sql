-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 03-11-2023 a les 19:43:04
-- Versió del servidor: 10.4.28-MariaDB
-- Versió de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `hms`
--

DELIMITER $$
--
-- Procediments
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `check_outer` ()   BEGIN

INSERT INTO 
receipt(reservation_id,id_client_master,check_in,check_out,initial_price,room_id,type,services)

SELECT reservation_id,id_client_master,check_in,check_out,initial_price,room_id,type_of_reservation,services
FROM reservations
WHERE check_out <= CURRENT_DATE;

UPDATE room
	SET `status` = 'check_out',type_of_reservation = "NULL"
WHERE room_id IN(SELECT room_id
FROM reservations
WHERE check_out <= CURRENT_DATE);

DELETE FROM reservations
WHERE check_out <= CURRENT_DATE;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `cleaner` ()   BEGIN

UPDATE room
	SET `status` = 'Ready'
WHERE `status`= 'check_out';

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertReceipt` (IN `var_reservation_id` INT, IN `var_client_id` INT, IN `var_check_in` DATE, IN `var_check_out` DATE, IN `var_initial_price` INT, IN `var_room_id` INT, IN `var_type` INT)   BEGIN
        INSERT INTO  	receipt(receipt_id,reservation_id,id_client_master,check_in,check_out,initial_price,room_id,type)
        VALUES
        (DEFAULT,var_reservation_id,var_client_id,var_check_in,var_check_out,var_initial_price,var_room_id,var_type);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertReservation` (IN `var_client_id` INT, IN `var_check_in` DATE, IN `var_check_out` DATE, IN `var_initial_price` INT, IN `var_room_id` INT, IN `var_type` INT)   BEGIN
        INSERT INTO  	reservations(reservation_id,id_client_master,check_in,check_out,initial_price,room_id,type_of_reservation)
        VALUES
        (DEFAULT,var_client_id,var_check_in,var_check_out,var_initial_price,var_room_id,var_type);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertReservationRandom` ()   BEGIN
DECLARE var_date_in DATE;
DECLARE var_date_out DATE;
DECLARE var_client_id int;
DECLARE var_price int;
DECLARE var_room_id int;
DECLARE var_type int;

SELECT DATE_ADD(CURRENT_DATE, INTERVAL 1+RAND()*7 DAY) INTO var_date_in;
SELECT DATE_ADD(var_date_in, INTERVAL 1+RAND()*7 DAY) INTO var_date_out;
SELECT FLOOR(RAND()*(25-1+1))+1 INTO var_client_id;
SELECT FLOOR(200+RAND()*(500 - 200)) INTO var_price;
SELECT checkAvailability() INTO var_room_id;
SELECT FLOOR(1+RAND()*(3)) INTO var_type;
UPDATE room
	SET `status` = 'check_in'
WHERE var_room_id = room_id;
UPDATE room
	SET `type_of_reservation` = var_type
WHERE var_room_id = room_id;

CALL insertReservation(var_client_id,var_date_in,var_date_out,var_price,var_room_id,var_type);
END$$

--
-- Funcions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `checkAvailability` () RETURNS INT(11)  BEGIN
DECLARE var_room_id INT;

SELECT room_id
FROM room
WHERE `status` = 'Ready'
LIMIT 1 INTO var_room_id;

RETURN var_room_id;
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `euroToDolars` (`euros` DECIMAL(10,2)) RETURNS DECIMAL(10,2)  BEGIN
RETURN (SELECT euros*1.0776);
END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `type_multiplaier` (`var_type` ENUM('All','Half','just-room')) RETURNS INT(11)  BEGIN
DECLARE multiplicador int;
IF var_type = 'All' THEN
	SET multiplicador = 1;
ELSEIF var_type = 'Half' THEN
   SET multiplicador = 2;
ELSEIF var_type = 'just-room' THEN
    SET multiplicador = 3;
END IF;
RETURN multiplicador;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de la taula `034_clients`
--

CREATE TABLE `034_clients` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(255) DEFAULT NULL,
  `role` varchar(200) NOT NULL,
  `client_surname` varchar(255) DEFAULT NULL,
  `client_DNI` varchar(255) DEFAULT NULL,
  `client_password` varchar(11) NOT NULL,
  `client_email` varchar(255) NOT NULL,
  `client_phone` varchar(10) DEFAULT NULL,
  `credit_card` varchar(32) DEFAULT NULL,
  `client_country` varchar(255) DEFAULT NULL,
  `client_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Bolcament de dades per a la taula `034_clients`
--

INSERT INTO `034_clients` (`client_id`, `client_name`, `role`, `client_surname`, `client_DNI`, `client_password`, `client_email`, `client_phone`, `credit_card`, `client_country`, `client_birth`) VALUES
(1, 'Ivan', '', 'Carreras', '41609268Z', '1234', 'ivan@gmail.com', '68555076', '9874 5632 1321 4567', 'Spain', '0000-00-00'),
(2, 'Enrique', '', 'Vizcaino', '11111111A', '0', 'enrique@gmail.com', '111111111', '1111 1111 1111 1111', 'Spain', '0000-00-00'),
(3, 'Sidney', '', 'Silva', '22222222B', '0', 'sidney@gmail.com', '222222222', '2222 2222 2222 2222', 'Brasil', '0000-00-00'),
(4, 'Maria', '', 'Zapato', '33333333C', '0', 'maria@gmail.com', '333333333', '3333 3333 3333 3333', 'Francia', '0000-00-00'),
(5, 'Sergi', '', 'Camps', '41609988K', '0', 'sergi@gmail.com', '68555076', '4444 4444 4444 4444', 'Spain', '0000-00-00'),
(6, 'Nerea', '', 'Perez', '555555555D', '0', 'nerea@gmail.com', '5555555555', '5555 5555 5555 5555', 'Spain', '0000-00-00'),
(7, 'Pilar', '', 'Perez', '666666666E', '0', 'pilar@gmail.com', '666666666', '6666 6666 6666 6666', 'Spain', '0000-00-00'),
(8, 'Antonio', '', 'Carreras', '777777777F', '0', 'toni@gmail.com', '777777777', '7777 7777 7777 7777', 'Spain', '0000-00-00'),
(9, 'Nacho', '', 'Carreras', '88888888G', '0', 'nacho@gmail.com', '888888888', '8888 8888 8888 8888', 'Italy', '0000-00-00'),
(10, 'Silvia', '', 'Perez', '999999999H', '0', 'silvia@gmail.com', '999999999', '9999 9999 9999 9999', 'Spain', '0000-00-00'),
(11, 'Kaladin', '', 'Lirin', '101010101I', '0', 'kaladin@gmail.com', '101010101', '1010 1010 1010 1010', 'Alezkar', '0000-00-00'),
(12, 'Joan', '', 'Saura', '111111111J', '0', 'joan@gmail.com', '1111111110', '1111 1111 1111 1110', 'Spain', '0000-00-00'),
(13, 'Francisco', '', 'Dominguez', '12121212K', '0', 'francisco@gmail.com', '121212121', '1212 1212 1212 1212', 'England', '0000-00-00'),
(14, 'Ester', '', 'Fernandez', '131313131L', '0', 'Ester@gmail.com', '1313131313', '1313 1313 1313 1313', 'Italy', '0000-00-00'),
(15, 'Jordi', '', 'Muñoz', '141414141M', '0', 'jordi@gmail.com', '141414141', '1414 1414 1414 1414', 'France', '0000-00-00'),
(16, 'Alex', '', 'Pons', '151515151N', '0', 'alex@gmail.com', '151515151', '1515 1515 1515 1515', 'France', '0000-00-00'),
(17, 'Pilar', '', 'Perez', '161616161O', '0', 'pilarP@gmail.com', '161616161', '1616 1616 1616 1616', 'England', '0000-00-00'),
(18, 'Manolo', '', 'Perez', '171717171P', '0', 'manolo@gmail.com', '171717171', '1717 1717 1717 1717', 'Italy', '0000-00-00'),
(19, 'Carol', '', 'Petrus', '181818181Q', '0', 'carol@gmail.com', '181818181', '1818 1818 1818 1818', 'Italy', '0000-00-00'),
(20, 'Angus', '', 'Pelegrin', '191919191R', '0', 'angus@gmail.com', '191919191', '1919 1919 1919 1919', 'Spain', '0000-00-00'),
(21, 'Jaume', '', 'Pelegrin', '202020202S', '0', 'jaume@gmail.com', '202020202', '2020 2020 2020 2020', 'Spain', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de la taula `034_receipt`
--

CREATE TABLE `034_receipt` (
  `receipt_id` int(11) NOT NULL,
  `reservation_id` int(11) DEFAULT NULL,
  `id_client_master` int(11) NOT NULL,
  `id_clients` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`id_clients`)),
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `Type` enum('All','Half','just-room') DEFAULT NULL,
  `services` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`services`)),
  `initial_price` decimal(10,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Bolcament de dades per a la taula `034_receipt`
--

INSERT INTO `034_receipt` (`receipt_id`, `reservation_id`, `id_client_master`, `id_clients`, `check_in`, `check_out`, `room_id`, `Type`, `services`, `initial_price`) VALUES
(1, 72, 18, NULL, '2023-06-01', '2023-06-04', 2, 'All', '{\n    \"Services\": {\n        \"Gym\": {\n            \"price\": 25\n        },\n        \"Spa\": {\n            \"price\":40\n        },\n        \"Bar\":{\n            \"price\":50\n        },\n        \"Wifi\":{\n            \"price\":5\n        },\n        \"Disco\":{\n            \"price\":70\n        },\n        \"Arcade\":{\n            \"price\":30\n        }\n    }\n}', 684.000),
(2, 79, 21, NULL, '2023-06-01', '2023-06-03', 9, 'just-room', '{\n    \"Services\": {\n        \"Gym\": {\n            \"price\": 25\n        },\n        \"Spa\": {\n            \"price\":40\n        },\n        \"Bar\":{\n            \"price\":50\n        },\n        \n        \"Disco\":{\n            \"price\":70\n        },\n        \"Arcade\":{\n            \"price\":30\n        }\n    }\n}', 831.000);

-- --------------------------------------------------------

--
-- Estructura de la taula `034_reservations`
--

CREATE TABLE `034_reservations` (
  `reservation_id` int(11) NOT NULL,
  `id_client_master` int(11) NOT NULL,
  `id_clients` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`id_clients`)),
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `services` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`services`)),
  `initial_price` decimal(10,3) DEFAULT NULL,
  `type_of_reservation` enum('All','Half','just-room') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Bolcament de dades per a la taula `034_reservations`
--

INSERT INTO `034_reservations` (`reservation_id`, `id_client_master`, `id_clients`, `check_in`, `check_out`, `room_id`, `services`, `initial_price`, `type_of_reservation`) VALUES
(73, 4, NULL, '2023-06-11', '2023-06-18', 3, '{\n    \"Services\": {\n        \"Gym\": {\n            \"price\": 25\n        },\n        \"Bar\":{\n            \"price\":50\n        },\n        \"Disco\":{\n            \"price\":70\n        }\n    }\n}', 261.000, 'All'),
(76, 10, NULL, '2023-06-07', '2023-06-13', 6, '{\n    \"Services\": {\n        \"Gym\": {\n            \"price\": 25\n        },\n        \"Bar\":{\n            \"price\":50\n        },\n        \"Disco\":{\n            \"price\":70\n        }\n    }\n}', 588.000, 'just-room'),
(77, 1, NULL, '2023-06-10', '2023-06-13', 7, '{\n    \"Services\": {\n        \"Gym\": {\n            \"price\": 25\n        },\n        \"Wifi\":{\n            \"price\":5\n        },\n        \n        \"Arcade\":{\n            \"price\":30\n        }\n    }\n}', 358.000, 'All'),
(78, 5, NULL, '2023-06-11', '2023-06-17', 8, '{\n    \"Services\": {\n        \"Gym\": {\n            \"price\": 25\n        },\n        \"Wifi\":{\n            \"price\":5\n        },\n        \n        \"Arcade\":{\n            \"price\":30\n        }\n    }\n}', 789.000, 'just-room'),
(80, 18, NULL, '2023-06-10', '2023-06-11', 10, '{\n    \"Services\": {\n        \"Gym\": {\n            \"price\": 25\n        },\n        \"Spa\": {\n            \"price\":40\n        },\n        \"Bar\":{\n            \"price\":50\n        },\n        \"Wifi\":{\n            \"price\":5\n        },\n        \"Disco\":{\n            \"price\":70\n        },\n        \"Arcade\":{\n            \"price\":30\n        }\n    }\n}', 448.000, 'just-room'),
(81, 4, NULL, '2023-06-08', '2023-06-12', 11, '{\n    \"Services\": {\n        \"Gym\": {\n            \"price\": 25\n        },\n        \"Wifi\":{\n            \"price\":5\n        },\n        \n        \"Arcade\":{\n            \"price\":30\n        }\n    }\n}', 507.000, 'just-room'),
(82, 18, NULL, '2023-06-12', '2023-06-19', 12, NULL, 213.000, 'All'),
(83, 1, NULL, '2023-11-03', '2023-11-11', 2, NULL, 200.000, NULL),
(84, 1, NULL, '2023-11-03', '2023-11-09', 1, NULL, 200.000, NULL),
(85, 1, NULL, '2023-11-08', '2023-11-09', 4, NULL, 120.000, NULL);

-- --------------------------------------------------------

--
-- Estructura de la taula `034_rooms`
--

CREATE TABLE `034_rooms` (
  `room_id` int(11) NOT NULL,
  `type_of_reservation` enum('All','Half','just-room') DEFAULT NULL,
  `status` enum('check_in','check_out','Ready','Booked') DEFAULT NULL,
  `room_img` varchar(255) NOT NULL DEFAULT 'room_1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Bolcament de dades per a la taula `034_rooms`
--

INSERT INTO `034_rooms` (`room_id`, `type_of_reservation`, `status`, `room_img`) VALUES
(1, 'Half', 'check_in', 'room_1'),
(2, 'Half', 'Ready', 'room_1'),
(3, 'All', 'check_in', 'room_1'),
(4, 'just-room', 'check_in', 'room_1'),
(5, 'just-room', 'check_in', 'room_1'),
(6, 'just-room', 'check_in', 'room_1'),
(7, 'All', 'check_in', 'room_1'),
(8, 'just-room', 'check_in', 'room_1'),
(9, '', 'Ready', 'room_1'),
(10, 'just-room', 'check_in', 'room_1'),
(11, 'just-room', 'check_in', 'room_1'),
(12, 'All', 'check_in', 'room_1'),
(13, NULL, 'Ready', ''),
(14, NULL, 'Ready', ''),
(15, NULL, 'Ready', ''),
(16, NULL, 'Ready', ''),
(17, NULL, 'Ready', ''),
(18, NULL, 'Ready', ''),
(19, NULL, 'Ready', ''),
(20, NULL, 'Ready', ''),
(21, NULL, 'Ready', ''),
(22, NULL, 'Ready', ''),
(23, NULL, 'Ready', ''),
(24, 'All', 'Ready', ''),
(25, 'All', 'Ready', ''),
(26, 'Half', 'Ready', ''),
(27, 'All', 'Booked', ''),
(28, 'All', 'Ready', ''),
(29, 'All', 'Ready', ''),
(30, 'Half', 'Ready', ''),
(31, 'All', 'Ready', ''),
(32, 'All', 'Ready', ''),
(33, 'All', 'Ready', ''),
(34, 'All', 'Ready', ''),
(35, 'All', 'Ready', 'room_1');

-- --------------------------------------------------------

--
-- Estructura de suport per a vistes `receipt_view`
-- (mireu a sota per a la visualització real)
--
CREATE TABLE `receipt_view` (
);

-- --------------------------------------------------------

--
-- Estructura per a vista `receipt_view`
--
DROP TABLE IF EXISTS `receipt_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `receipt_view`  AS SELECT `rece`.`receipt_id` AS `receipt_id`, `rece`.`reservation_id` AS `reservation_id`, `cl`.`client_id` AS `client_id`, concat(`cl`.`client_name`,' ',`cl`.`client_surname`) AS `client_fullName`, `cl`.`client_DNI` AS `client_DNI`, `cl`.`client_email` AS `client_email`, `cl`.`client_phone` AS `client_phone`, `cl`.`credit_card` AS `credit_card`, `cl`.`client_country` AS `client_country`, `rece`.`check_in` AS `check_in`, `rece`.`check_out` AS `check_out`, to_days(`rece`.`check_out`) - to_days(`rece`.`check_in`) AS `Days_in_hotel`, `rece`.`Type` AS `type`, `rece`.`room_id` AS `room_id`, json_value(json_extract(`rece`.`services`,'$.Services.Gym'),'$.price') AS `Gym`, json_value(json_extract(`rece`.`services`,'$.Services.Spa'),'$.price') AS `Spa`, json_value(json_extract(`rece`.`services`,'$.Services.Bar'),'$.price') AS `Bar`, json_value(json_extract(`rece`.`services`,'$.Services.Wifi'),'$.price') AS `Wifi`, json_value(json_extract(`rece`.`services`,'$.Services.Disco'),'$.price') AS `Disco`, json_value(json_extract(`rece`.`services`,'$.Services.Arcade'),'$.price') AS `Arcade`, `rece`.`initial_price` AS `initial_price`, ifnull(json_value(json_extract(`rece`.`services`,'$.Services.Gym'),'$.price'),0) + ifnull(json_value(json_extract(`rece`.`services`,'$.Services.Spa'),'$.price'),0) + ifnull(json_value(json_extract(`rece`.`services`,'$.Services.Bar'),'$.price'),0) + ifnull(json_value(json_extract(`rece`.`services`,'$.Services.Wifi'),'$.price'),0) + ifnull(json_value(json_extract(`rece`.`services`,'$.Services.Disco'),'$.price'),0) + ifnull(json_value(json_extract(`rece`.`services`,'$.Services.Arcade'),'$.price'),0) * `type_multiplaier`(`rece`.`Type`) + ifnull(`rece`.`initial_price`,0) AS `total_price` FROM (`receipt` `rece` join `clients` `cl` on(`cl`.`client_id` = `rece`.`id_client_master`)) ;

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `034_clients`
--
ALTER TABLE `034_clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Índexs per a la taula `034_receipt`
--
ALTER TABLE `034_receipt`
  ADD PRIMARY KEY (`receipt_id`),
  ADD KEY `id_client_master` (`id_client_master`),
  ADD KEY `room_id` (`room_id`);

--
-- Índexs per a la taula `034_reservations`
--
ALTER TABLE `034_reservations`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `id_client_master` (`id_client_master`),
  ADD KEY `room_id` (`room_id`);

--
-- Índexs per a la taula `034_rooms`
--
ALTER TABLE `034_rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `034_clients`
--
ALTER TABLE `034_clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT per la taula `034_receipt`
--
ALTER TABLE `034_receipt`
  MODIFY `receipt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT per la taula `034_reservations`
--
ALTER TABLE `034_reservations`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT per la taula `034_rooms`
--
ALTER TABLE `034_rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Restriccions per a les taules bolcades
--

--
-- Restriccions per a la taula `034_receipt`
--
ALTER TABLE `034_receipt`
  ADD CONSTRAINT `034_receipt_ibfk_1` FOREIGN KEY (`id_client_master`) REFERENCES `034_clients` (`client_id`),
  ADD CONSTRAINT `034_receipt_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `034_rooms` (`room_id`);

--
-- Restriccions per a la taula `034_reservations`
--
ALTER TABLE `034_reservations`
  ADD CONSTRAINT `034_reservations_ibfk_1` FOREIGN KEY (`id_client_master`) REFERENCES `034_clients` (`client_id`),
  ADD CONSTRAINT `034_reservations_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `034_rooms` (`room_id`);

DELIMITER $$
--
-- Esdeveniments
--
CREATE DEFINER=`root`@`localhost` EVENT `clientsMind` ON SCHEDULE EVERY 2 SECOND STARTS '2023-05-31 20:14:46' ON COMPLETION NOT PRESERVE ENABLE DO CALL insertReservationRandom()$$

CREATE DEFINER=`root`@`localhost` EVENT `event_Check_outer` ON SCHEDULE EVERY 1 HOUR STARTS '2023-06-07 19:40:09' ON COMPLETION NOT PRESERVE ENABLE DO CALL check_outer()$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
