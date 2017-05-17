-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 mei 2017 om 13:40
-- Serverversie: 10.0.17-MariaDB
-- PHP-versie: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twitter`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `follows`
--

CREATE TABLE `follows` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `follows_user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `follows`
--

INSERT INTO `follows` (`id`, `user_id`, `follows_user_id`, `created_at`, `updated_at`) VALUES
(3, '1', '3', '2017-05-15 21:00:12', '2017-05-15 21:00:12'),
(4, '1', '2', '2017-05-15 21:27:19', '2017-05-15 21:27:19');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 2),
(3, '2017_05_10_171329_create_tweets_table', 2),
(4, '2017_05_10_171911_create_follows_table', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tweets`
--

CREATE TABLE `tweets` (
  `id` int(10) UNSIGNED NOT NULL,
  `tweet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `tweets`
--

INSERT INTO `tweets` (`id`, `tweet`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Tweede tweet', '1', '2017-05-10 17:23:48', '2017-05-10 17:23:48'),
(3, 'Test', '1', '2017-05-11 09:56:09', '2017-05-11 09:56:09'),
(4, 'Ik ben Robin', '2', '2017-05-11 10:19:58', '2017-05-11 10:19:58'),
(6, 'nieuwe tweet', '1', '2017-05-15 18:00:42', '2017-05-15 18:00:42'),
(7, 'Dit is de eerste tweet van Henkie', '3', '2017-05-15 20:50:29', '2017-05-15 20:50:29'),
(8, 'Hallo Twitter, ik ben Kees', '4', '2017-05-17 09:20:48', '2017-05-17 09:20:48'),
(9, 'Ik ben nieuw op twitter', '4', '2017-05-17 09:20:56', '2017-05-17 09:20:56');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sten Jansen', 'stenjansen@gmail.com', '$2y$10$otCJECUm7pZZ.v0Zggird.uOjTAf8voBguEIFp.Gsto2WxdUke60m', 'N292hhKwK5Uo9lNHfQiF5LomxMR5HzN7OCriuZKyeEHtuQmkar7CSaoZq8ec', '2017-05-10 15:03:00', '2017-05-10 15:03:00'),
(2, 'Robin Dirks', 'rdirks@hotmail.com', '$2y$10$MtG1aR/m.y3LJUog4Aq9hOWaBvD/jCLTH39otPVGN0orrD2VQNX9.', NULL, '2017-05-11 10:19:46', '2017-05-11 10:19:46'),
(3, 'Henk Henken', 'henkie@henk.nl', '$2y$10$eUZD.2ZycWezu3nXyd1.GueMPoCRyonz5dQOjsuJnGIBmHnqs13Ty', 'DG5br6ebyuMk6FEjErYzI3053Yw8OvofmjqyJFhrMeh0KLXwlDGNl8YMsROW', '2017-05-15 20:36:44', '2017-05-15 20:36:44'),
(4, 'Kees Keesie', 'kees@kees.nl', '$2y$10$Fh7pBh1waySA6KVrSIdk2OFhur7t0S.UTssvIicColBDgbmyjpjRe', NULL, '2017-05-17 09:20:25', '2017-05-17 09:20:25');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `follows`
--
ALTER TABLE `follows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `tweets`
--
ALTER TABLE `tweets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
