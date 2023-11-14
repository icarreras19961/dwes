-------------------Clients----------------------------------
CREATE TABLE 034_clients (
  client_id int PRIMARY KEY AUTO_INCREMENT, AUTO_INCREMENT=27,
  client_name varchar(255) DEFAULT NULL,
  client_surname varchar(255) DEFAULT NULL,
  role enum('user','admin','anonimo') NOT NULL DEFAULT 'user',
  client_DNI varchar(255) DEFAULT NULL,
  client_password varchar(11) NOT NULL,
  client_email varchar(255) NOT NULL,
  client_phone varchar(10) DEFAULT NULL,
  credit_card varchar(32) DEFAULT NULL,
  client_country varchar(255) DEFAULT NULL,
  client_birth date NOT NULL
)

INSERT INTO 034_clients (client_id, client_name, client_surname, role, client_DNI, client_password, client_email, client_phone, credit_card, client_country, client_birth) VALUES
(1, 'Ivan', 'Carreras', 'admin', '41609268Z', '1234', 'ivan@gmail.com', '68555076', '9874 5632 1321 4567', 'Spain', '0000-00-00'),
(2, 'dwesteacherenrique', 'Vizcaino', 'admin', '11111111A', 'Enrique', 'dwesteacherenrique', '111111111', '1111 1111 1111 1111', 'Spain', '0000-00-00'),
(3, 'Sidney', 'Silva', 'user', '22222222B', '0', 'sidney@gmail.com', '222222222', '2222 2222 2222 2222', 'Brasil', '0000-00-00'),
(4, 'Maria', 'Zapato', 'user', '33333333C', '0', 'maria@gmail.com', '333333333', '3333 3333 3333 3333', 'Francia', '0000-00-00'),
(5, 'Sergi', 'Camps', 'user', '41609988K', '0', 'sergi@gmail.com', '68555076', '4444 4444 4444 4444', 'Spain', '0000-00-00'),
(6, 'Nerea', 'Perez', 'user', '555555555D', '0', 'nerea@gmail.com', '5555555555', '5555 5555 5555 5555', 'Spain', '0000-00-00'),
(7, 'Pilar', 'Perez', 'user', '666666666E', '0', 'pilar@gmail.com', '666666666', '6666 6666 6666 6666', 'Spain', '0000-00-00'),
(8, 'Antonio', 'Carreras', 'user', '777777777F', '0', 'toni@gmail.com', '777777777', '7777 7777 7777 7777', 'Spain', '0000-00-00'),
(9, 'Nacho', 'Carreras', 'user', '88888888G', '0', 'nacho@gmail.com', '888888888', '8888 8888 8888 8888', 'Italy', '0000-00-00'),
(10, 'Silvia', 'Perez', 'user', '999999999H', '0', 'silvia@gmail.com', '999999999', '9999 9999 9999 9999', 'Spain', '0000-00-00'),
(11, 'Kaladin', 'Lirin', 'user', '101010101I', '0', 'kaladin@gmail.com', '101010101', '1010 1010 1010 1010', 'Alezkar', '0000-00-00'),
(12, 'Joan', 'Saura', 'user', '111111111J', '0', 'joan@gmail.com', '1111111110', '1111 1111 1111 1110', 'Spain', '0000-00-00'),
(13, 'Francisco', 'Dominguez', 'user', '12121212K', '0', 'francisco@gmail.com', '121212121', '1212 1212 1212 1212', 'England', '0000-00-00'),
(14, 'Ester', 'Fernandez', 'user', '131313131L', '0', 'Ester@gmail.com', '1313131313', '1313 1313 1313 1313', 'Italy', '0000-00-00'),
(15, 'Jordi', 'Muñoz', 'user', '141414141M', '0', 'jordi@gmail.com', '141414141', '1414 1414 1414 1414', 'France', '0000-00-00'),
(16, 'Alex', 'Pons', 'user', '151515151N', '0', 'alex@gmail.com', '151515151', '1515 1515 1515 1515', 'France', '0000-00-00'),
(17, 'Pilar', 'Perez', 'user', '161616161O', '0', 'pilarP@gmail.com', '161616161', '1616 1616 1616 1616', 'England', '0000-00-00'),
(18, 'Manolo', 'Perez', 'user', '171717171P', '0', 'manolo@gmail.com', '171717171', '1717 1717 1717 1717', 'Italy', '0000-00-00'),
(19, 'Carol', 'Petrus', 'user', '181818181Q', '0', 'carol@gmail.com', '181818181', '1818 1818 1818 1818', 'Italy', '0000-00-00'),
(20, 'Angus', 'Pelegrin', 'user', '191919191R', '0', 'angus@gmail.com', '191919191', '1919 1919 1919 1919', 'Spain', '0000-00-00'),
(21, 'Jaume', 'Pelegrin', 'user', '202020202S', '0', 'jaume@gmail.com', '202020202', '2020 2020 2020 2020', 'Spain', '0000-00-00'),
(26, 'paco', '', 'user', '', '', '', '', NULL, NULL, '0000-00-00');


-------------------------Receipt---------------------------------
CREATE TABLE 034_receipt (
  receipt_id int PRIMARY KEY AUTO_INCREMENT, AUTO_INCREMENT=15,
  reservation_id int(11) DEFAULT NULL,
  id_client_master int(11) NOT NULL,
  id_clients longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(id_clients)),
  check_in date DEFAULT NULL,
  check_out date DEFAULT NULL,
  room_id int(11) DEFAULT NULL,
  Type enum('All','Half','just-room') DEFAULT NULL,
  services longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(services)),
  initial_price decimal(10,3) DEFAULT NULL,
   FOREIGN KEY(id_client_master) REFERENCES 034_clients(client_id),
  FOREIGN KEY(room_id) REFERENCES 034_rooms(room_id)
)

INSERT INTO 034_receipt (receipt_id, reservation_id, id_client_master, id_clients, check_in, check_out, room_id, Type, services, initial_price) VALUES
(1, 72, 18, NULL, '2023-06-01', '2023-06-04', 2, 'All', '{\n    \"Services\": {\n        \"Gym\": {\n            \"price\": 25\n        },\n        \"Spa\": {\n            \"price\":40\n        },\n        \"Bar\":{\n            \"price\":50\n        },\n        \"Wifi\":{\n            \"price\":5\n        },\n        \"Disco\":{\n            \"price\":70\n        },\n        \"Arcade\":{\n            \"price\":30\n        }\n    }\n}', 684.000),
(2, 79, 21, NULL, '2023-06-01', '2023-06-03', 9, 'just-room', '{\n    \"Services\": {\n        \"Gym\": {\n            \"price\": 25\n        },\n        \"Spa\": {\n            \"price\":40\n        },\n        \"Bar\":{\n            \"price\":50\n        },\n        \n        \"Disco\":{\n            \"price\":70\n        },\n        \"Arcade\":{\n            \"price\":30\n        }\n    }\n}', 831.000);

------------------------reservation------------------------------
CREATE TABLE 034_reservations (
  reservation_id int PRIMARY KEY AUTO_INCREMENT, AUTO_INCREMENT=88,
  id_client_master int(11) NOT NULL,
  id_clients longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(id_clients)),
  check_in date DEFAULT NULL,
  check_out date DEFAULT NULL,
  room_id int(11) DEFAULT NULL,
  services longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(services)),
  initial_price decimal(10,3) DEFAULT NULL,
  type_of_reservation enum('All','Half','just-room') DEFAULT NULL,
  FOREIGN KEY(id_client_master) REFERENCES  034_clients (client_id),
    FOREIGN KEY(room_id) REFERENCES 034_rooms(room_id)
)
INSERT INTO 034_reservations (reservation_id, id_client_master, id_clients, check_in, check_out, room_id, services, initial_price, type_of_reservation) VALUES
(73, 4, NULL, '2023-06-11', '2023-06-18', 3, '{\n    \"Services\": {\n        \"Gym\": {\n            \"price\": 25\n        },\n        \"Bar\":{\n            \"price\":50\n        },\n        \"Disco\":{\n            \"price\":70\n        }\n    }\n}', 261.000, 'All'),
(76, 10, NULL, '2023-06-07', '2023-06-13', 6, '{\n    \"Services\": {\n        \"Gym\": {\n            \"price\": 25\n        },\n        \"Bar\":{\n            \"price\":50\n        },\n        \"Disco\":{\n            \"price\":70\n        }\n    }\n}', 588.000, 'just-room'),
(77, 1, NULL, '2023-06-10', '2023-06-13', 7, '{\n    \"Services\": {\n        \"Gym\": {\n            \"price\": 25\n        },\n        \"Wifi\":{\n            \"price\":5\n        },\n        \n        \"Arcade\":{\n            \"price\":30\n        }\n    }\n}', 358.000, 'All'),
(78, 5, NULL, '2023-06-11', '2023-06-17', 8, '{\n    \"Services\": {\n        \"Gym\": {\n            \"price\": 25\n        },\n        \"Wifi\":{\n            \"price\":5\n        },\n        \n        \"Arcade\":{\n            \"price\":30\n        }\n    }\n}', 789.000, 'just-room'),
(80, 18, NULL, '2023-06-10', '2023-06-11', 10, '{\n    \"Services\": {\n        \"Gym\": {\n            \"price\": 25\n        },\n        \"Spa\": {\n            \"price\":40\n        },\n        \"Bar\":{\n            \"price\":50\n        },\n        \"Wifi\":{\n            \"price\":5\n        },\n        \"Disco\":{\n            \"price\":70\n        },\n        \"Arcade\":{\n            \"price\":30\n        }\n    }\n}', 448.000, 'just-room'),
(81, 4, NULL, '2023-06-08', '2023-06-12', 11, '{\n    \"Services\": {\n        \"Gym\": {\n            \"price\": 25\n        },\n        \"Wifi\":{\n            \"price\":5\n        },\n        \n        \"Arcade\":{\n            \"price\":30\n        }\n    }\n}', 507.000, 'just-room'),
(82, 18, NULL, '2023-06-12', '2023-06-19', 12, NULL, 213.000, 'All'),
(83, 1, NULL, '2023-11-03', '2023-11-11', 2, NULL, 200.000, NULL),
(84, 1, NULL, '2023-11-03', '2023-11-09', 1, NULL, 200.000, NULL),
(85, 1, NULL, '2023-11-08', '2023-11-09', 4, NULL, 120.000, NULL),
(86, 1, NULL, '2023-11-16', '2023-11-17', 3, NULL, 250.000, NULL),
(87, 1, NULL, '2023-11-09', '2023-11-15', 3, NULL, 250.000, NULL);

----------------------rooms---------------------------
CREATE TABLE 034_rooms (
  room_id int PRIMARY KEY AUTO_INCREMENT,AUTO_INCREMENT=51,
  type_of_reservation enum('All','Half','just-room') DEFAULT NULL,
  status enum('check_in','check_out','Ready','Booked') DEFAULT NULL,
  room_img varchar(255) NOT NULL DEFAULT 'room_1'
)

INSERT INTO 034_rooms (room_id, type_of_reservation, `status`, room_img) VALUES
(1, 'Half', 'check_in', 'room_2'),
(2, 'All', 'Ready', 'room_2'),
(3, 'All', 'check_in', 'room_1'),
(4, 'just-room', 'check_in', 'room_3'),
(5, 'just-room', 'check_in', 'room_3'),
(6, 'just-room', 'check_in', 'room_3'),
(7, 'All', 'check_in', 'room_1'),
(8, 'just-room', 'check_in', 'room_3'),
(9, 'Half', 'Ready', 'room_2'),
(10, 'just-room', 'check_in', 'room_3'),
(11, 'just-room', 'check_in', 'room_3'),
(12, 'All', 'check_in', 'room_1'),
(13, 'Half', 'Ready', 'room_1'),
(14, 'just-room', 'Ready', 'room_1'),
(15, 'All', 'Ready', 'room_1'),
(16, 'Half', 'Ready', 'room_1'),
(17, 'Half', 'Ready', 'room_1'),
(18, 'All', 'Ready', 'room_1'),
(19, 'Half', 'Ready', 'room_1'),
(20, 'just-room', 'Ready', 'room_1'),
(21, 'just-room', 'Ready', 'room_1'),
(22, 'Half', 'Ready', 'room_1'),
(23, 'All', 'Ready', 'room_1'),
(24, 'All', 'Ready', 'room_1'),
(25, 'All', 'Ready', 'room_1'),
(26, 'Half', 'Ready', 'room_2'),
(27, 'All', 'Booked', 'room_1'),
(28, 'All', 'Ready', 'room_1'),
(29, 'All', 'Ready', 'room_1'),
(30, 'Half', 'Ready', 'room_2'),
(31, 'All', 'Ready', 'room_1'),
(32, 'All', 'Ready', 'room_1'),
(39, 'Half', 'Ready', 'room_2'),
(40, 'just-room', 'Ready', 'room_3'),
(41, 'All', 'Ready', 'room_1'),
(42, 'All', 'Ready', 'room_1'),
(43, 'just-room', 'Ready', 'room_3'),
(44, 'Half', 'Ready', 'room_2'),
(45, 'just-room', 'Ready', 'room_3'),
(46, 'All', 'Ready', 'room_1'),
(47, 'Half', 'Ready', 'room_2'),
(48, 'just-room', 'Ready', 'room_3'),
(49, 'Half', 'Ready', 'room_2');