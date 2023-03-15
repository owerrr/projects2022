-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Mar 2023, 21:18
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ads`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` mediumtext DEFAULT NULL,
  `create_date` datetime DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `ads`
--

INSERT INTO `ads` (`id`, `title`, `content`, `create_date`, `user_id`) VALUES
(11, 'dfhfdhggg fg h', 'jakas tam wiadomosc', '2023-03-05 21:58:05', 1),
(13, 'jaksi tam postdgdfgdf dfhdfhdfhf ghjs', 'jakas tam wiadomosc', '2023-03-05 21:58:05', 1),
(14, 'jaksi ta postdgdfgdf dfhdfhdfhfcdfvb', 'jakas tam wiadomosc', '2023-03-05 21:58:05', 2),
(15, 'jaksi tam postdgdfgdf dfhdfhdfhf', 'jakas tam wiadomosc', '2023-03-05 21:58:05', 2),
(16, 'jaksi tam postdgdfgdf dfhdfhdfhf', 'jakas tam wiadomosc', '2023-03-05 21:58:05', 1),
(17, 'aha test', 'jakas tam wiadomosc', '2023-03-05 22:03:33', 1),
(18, 'jakas nazwa', 'opis testwoy dodawanie', '2023-03-06 15:35:36', 2),
(19, 'fghfghfgh', 'fhfghf', '2023-03-06 15:39:06', 2),
(20, 'ghjgh', 'jghjghj', '2023-03-06 15:39:11', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Jasonj', 'admin@gmail.com', '$2y$10$reOd26W1DnqdWNwILizi/exuLeWP22V76HBLSHdhjYi4HKcwVIuTm'),
(2, 'user', 'user@gmail.com', '$2y$10$reOd26W1DnqdWNwILizi/exuLeWP22V76HBLSHdhjYi4HKcwVIuTm');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
