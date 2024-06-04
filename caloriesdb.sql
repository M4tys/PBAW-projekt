-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Cze 04, 2024 at 10:26 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caloriesdb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dish`
--

CREATE TABLE `dish` (
  `idDish` int(11) NOT NULL,
  `dishName` varchar(45) NOT NULL,
  `totalCalories` float NOT NULL DEFAULT 0,
  `totalCarbohydrates` float NOT NULL DEFAULT 0,
  `totalProteins` float NOT NULL DEFAULT 0,
  `totalFats` float NOT NULL DEFAULT 0,
  `idUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `dish`
--

INSERT INTO `dish` (`idDish`, `dishName`, `totalCalories`, `totalCarbohydrates`, `totalProteins`, `totalFats`, `idUser`) VALUES
(2, 'Danie', 146.68, 9.04, 20.07, 7.56, 2),
(4, 'asdasd', 0, 0, 0, 0, 2),
(12, 'Zupa', 6.33, 1.395, 0.165, 0.0225, 3),
(13, 'Zupa123', 0, 0, 0, 0, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dishproducts`
--

CREATE TABLE `dishproducts` (
  `idDish` int(11) NOT NULL,
  `idProduct` int(11) NOT NULL,
  `quantity` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `dishproducts`
--

INSERT INTO `dishproducts` (`idDish`, `idProduct`, `quantity`) VALUES
(12, 27, 15),
(2, 21, 10),
(2, 9, 50),
(2, 26, 100);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product`
--

CREATE TABLE `product` (
  `idProduct` int(11) NOT NULL,
  `productName` varchar(45) NOT NULL,
  `calories` float NOT NULL DEFAULT 0,
  `carbohydrates` float NOT NULL DEFAULT 0,
  `proteins` float NOT NULL DEFAULT 0,
  `fats` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idProduct`, `productName`, `calories`, `carbohydrates`, `proteins`, `fats`) VALUES
(1, 'Chleb pszenny', 256.8, 56, 6.8, 1.4),
(2, 'Czekolada biała', 408.4, 56, 7.7, 38.4),
(6, 'Brokuły', 34.4, 5.2, 3, 0.4),
(9, 'Ziemniaki', 78.4, 17.5, 2, 0.1),
(15, 'Flaki', 38, 2.5, 5, 2),
(16, 'Makaron', 129.2, 26.5, 5.3, 0.5),
(19, 'Pomidor', 20.8, 4.1, 0.9, 0.2),
(20, 'Banan', 96.4, 22.8, 1.1, 0.2),
(21, 'Ogórek', 14.8, 2.9, 0.7, 0.1),
(22, 'Sałata', 15.2, 2.2, 1.3, 0.3),
(23, 'Kurczak (pierś bez skóry)', 102, 0, 21.8, 3.7),
(24, 'Kiwi', 65.2, 14.7, 1.1, 0.5),
(25, 'Koperek', 46.4, 7, 3.5, 1.1),
(26, 'Mięso mielone drobiowe (kurczak, indyk)', 106, 0, 19, 7.5),
(27, 'Cebula', 42.2, 9.3, 1.1, 0.15),
(28, 'Marchew (zasmażana)', 67.2, 11.8, 1, 4),
(29, 'Jajko kurze', 91.2, 0.6, 12.5, 9.7),
(30, 'Ptasie mleczko', 322.4, 56.2, 2.6, 21.8),
(31, 'Kiełbasa śląska', 136, 0, 17.9, 16.1),
(32, 'Mięso mielone wieprzowe', 164, 0, 21, 20),
(33, 'Oscypek', 236, 0, 29, 30),
(34, 'Kalafior', 30.4, 5, 2.4, 0.2),
(35, 'Ser Feta', 158.4, 4.1, 14.2, 21.3),
(48, 'kkk', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE `role` (
  `idRole` int(11) NOT NULL,
  `roleName` varchar(45) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 1,
  `creationDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`idRole`, `roleName`, `isActive`, `creationDate`) VALUES
(1, 'admin', 1, '2024-05-16 20:15:42'),
(2, 'dietician', 1, '2024-05-16 20:16:45'),
(3, 'user', 1, '2024-05-16 20:16:45');

--
-- Wyzwalacze `role`
--
DELIMITER $$
CREATE TRIGGER `set_creation_date` BEFORE INSERT ON `role` FOR EACH ROW BEGIN
    SET NEW.creationDate = NOW();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `login` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` longtext NOT NULL,
  `userName` varchar(45) NOT NULL,
  `creationDate` datetime NOT NULL,
  `editDate` datetime DEFAULT NULL,
  `editedBy` int(11) DEFAULT NULL,
  `deactivateDate` datetime DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `login`, `password`, `userName`, `creationDate`, `editDate`, `editedBy`, `deactivateDate`, `isActive`) VALUES
(1, 'admin', '$2y$10$sEaYY2rpngzBRciJpnksueN.VzyIZb1r4Lev9N7wkXZL9rBPVc1pi', 'Administrator', '2024-05-17 23:26:22', NULL, NULL, NULL, 1),
(2, 'user', '$2y$10$9YkihbpZ7OBUAPZsUBQoNOd/V7hP.TWYmkx1i.G0riyqGEja4s3IS', 'Użytkownik1', '2024-05-17 23:38:16', '2024-06-04 07:01:26', 1, NULL, 1),
(3, 'dietician', '$2y$10$jTtROJ84NZ4DoiUrhq2P1eNZv0cB/oYebesgcx7Tf9wPJOFJ0lJ4q', 'Dietetyk', '2024-05-17 23:38:45', '2024-06-04 07:05:50', 1, NULL, 1),
(14, 'anna.nowak', '$2y$10$CpFYO2p97wLE6C4pl4wBt.r19W.LH7h0WDBGYFWXcVcI/qiTfwjVy', 'Anna Nowak', '2024-06-03 19:43:54', '2024-06-04 07:12:13', 17, '2024-06-04 07:12:13', 0),
(15, 'maria.wojcik', '$2y$10$lJe9My/4XAj2gNNTh/QgY.PccRTuRheEAzJj9Nf2/3WaXRD1PDlKm', 'Maria Wojcik', '2024-06-03 19:44:19', NULL, NULL, NULL, 1),
(16, 'piotr.wisniewski', '$2y$10$N.sB0jfz.wWCSHefBQpcKu7RAbuYi90xXy9u1nUdioV1f/a/DWK1a', 'Pioter', '2024-06-03 19:44:48', '2024-06-03 21:15:57', 17, NULL, 1),
(17, 'Konrad', '$2y$10$fBFa2HrlMUJwhKnjKyaAqOUl4xZolFjrZ.RkIkAG4xE6QTSPz./my', 'Konrad', '2024-06-03 19:48:44', '2024-06-03 20:03:23', 1, NULL, 1),
(22, 'taachii', '$2y$10$Gy9fGUHjaqdmReCW/RfSvun6kUJbyYLLs9qHhwsTpxlsPcYMNIp2y', 'taachii', '2024-06-04 08:55:57', '2024-06-04 09:00:42', NULL, '2024-06-04 09:00:42', 0);

--
-- Wyzwalacze `user`
--
DELIMITER $$
CREATE TRIGGER `before_insert_trigger` BEFORE INSERT ON `user` FOR EACH ROW SET NEW.creationDate = NOW()
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_user_update` BEFORE UPDATE ON `user` FOR EACH ROW BEGIN
    SET NEW.editDate = NOW();
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_deactivate_date` BEFORE UPDATE ON `user` FOR EACH ROW BEGIN
    -- Sprawdza, czy kolumna isActive została zmieniona z 1 na 0
    IF OLD.isActive = 1 AND NEW.isActive = 0 THEN
        -- Ustawia aktualną datę w kolumnie deactivateDate
        SET NEW.deactivateDate = NOW();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `userroles`
--

CREATE TABLE `userroles` (
  `idUser` int(11) NOT NULL,
  `idRole` int(11) NOT NULL,
  `assignDate` datetime NOT NULL,
  `removeDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `userroles`
--

INSERT INTO `userroles` (`idUser`, `idRole`, `assignDate`, `removeDate`) VALUES
(1, 1, '2024-05-17 23:27:20', NULL),
(2, 3, '2024-05-17 23:38:16', '2024-06-03 19:51:21'),
(3, 2, '2024-05-17 23:38:45', '2024-06-03 19:50:37'),
(14, 3, '2024-06-03 19:43:54', '2024-06-03 19:45:28'),
(15, 3, '2024-06-03 19:44:19', NULL),
(16, 2, '2024-06-03 19:44:48', NULL),
(14, 2, '2024-06-03 19:45:28', NULL),
(17, 3, '2024-06-03 19:48:44', '2024-06-03 19:49:58'),
(17, 2, '2024-06-03 19:49:58', '2024-06-03 19:51:34'),
(3, 3, '2024-06-03 19:50:37', '2024-06-03 19:50:42'),
(3, 2, '2024-06-03 19:50:42', NULL),
(2, 2, '2024-06-03 19:51:21', '2024-06-04 07:01:26'),
(17, 3, '2024-06-03 19:51:34', '2024-06-03 20:03:23'),
(17, 1, '2024-06-03 20:03:23', NULL),
(2, 3, '2024-06-04 07:01:26', NULL),
(22, 3, '2024-06-04 08:55:57', NULL);

--
-- Wyzwalacze `userroles`
--
DELIMITER $$
CREATE TRIGGER `add_assign_date` BEFORE INSERT ON `userroles` FOR EACH ROW BEGIN
    SET NEW.assignDate = NOW();
END
$$
DELIMITER ;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`idDish`),
  ADD KEY `idUser` (`idUser`) USING BTREE;

--
-- Indeksy dla tabeli `dishproducts`
--
ALTER TABLE `dishproducts`
  ADD KEY `idDish` (`idDish`),
  ADD KEY `idProduct` (`idProduct`);

--
-- Indeksy dla tabeli `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idProduct`);

--
-- Indeksy dla tabeli `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `editedBy` (`editedBy`);

--
-- Indeksy dla tabeli `userroles`
--
ALTER TABLE `userroles`
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idRole` (`idRole`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dish`
--
ALTER TABLE `dish`
  MODIFY `idDish` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dish`
--
ALTER TABLE `dish`
  ADD CONSTRAINT `dish_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE;

--
-- Constraints for table `dishproducts`
--
ALTER TABLE `dishproducts`
  ADD CONSTRAINT `dishproducts_ibfk_1` FOREIGN KEY (`idDish`) REFERENCES `dish` (`idDish`) ON DELETE CASCADE,
  ADD CONSTRAINT `dishproducts_ibfk_2` FOREIGN KEY (`idProduct`) REFERENCES `product` (`idProduct`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`editedBy`) REFERENCES `user` (`idUser`) ON DELETE CASCADE;

--
-- Constraints for table `userroles`
--
ALTER TABLE `userroles`
  ADD CONSTRAINT `userroles_ibfk_1` FOREIGN KEY (`idRole`) REFERENCES `role` (`idRole`) ON DELETE CASCADE,
  ADD CONSTRAINT `userroles_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
