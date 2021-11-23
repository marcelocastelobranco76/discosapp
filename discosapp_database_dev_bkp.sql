-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 23-Nov-2021 às 18:56
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `discosapp_database_dev`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `discos`
--

CREATE TABLE `discos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artista` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano_edicao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pais` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formato` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `especificacoes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `discos`
--

INSERT INTO `discos` (`id`, `titulo`, `artista`, `ano`, `ano_edicao`, `selo`, `pais`, `formato`, `tipo`, `especificacoes`, `created_at`, `updated_at`) VALUES
(1, 'Rubber Soul', 'THE BEATLES', '1965', '1965', 'PARLOPHONE', 'INGLATERRA', 'LP.CD', 'ÁLBUM', 'Rubber Soul é o sexto álbum lançado pelo grupo de rock The Beatles. Foi gravado em pouco mais de um mês e lançado em 3 de dezembro de 1965, sendo produzido por George Martin. É citado por muitos críticos de música como o álbum em que os Beatles começaram a tornar seu som mais eclético e sofisticado. Este álbum está na lista dos 200 álbuns definitivos no Rock and Roll Hall of Fame.[1]\r\n\r\nNaquela altura, depois de amenizada a força primitiva do Rock, com a explosão do folk rock e da surf music, cada grupo passou a utilizar-se de todas as potencialidades que os estúdios de gravação podiam oferecer. Os próprios Beatles superaram sua fase adolescente, passando pelas brincadeiras colocadas em filmes por Richard Lester, até o profundo universo poético que começaram a desenvolver com o álbum Rubber Soul. Realizaram então verdadeiras \"rupturas\", como a letra surrealista e o uso do sitar em \"Norwegian Wood\", o lirismo de \"In My Life\" e \"Michelle\", a solidão pungente de \"Nowhere Man\", enfim, Rubber Soul foi considerado o mais inovador álbum de rock lançado até então.', '2021-11-19 22:41:58', '2021-11-19 22:41:58'),
(3, 'DISCO 1', 'ARTISTA 1', '2019', '2019', 'SELO 1', 'BRASIL', 'LP', 'AO VIVO', 'ESPECIFICAÇÕES DA EDIÇÃO 1.', '2021-11-22 21:03:14', '2021-11-22 21:03:14'),
(4, 'DISCO 2', 'ARTISTA 2', '2019', '2019', 'SELO 2', 'BRASIL', 'LP', 'AO VIVO', 'ESPECIFICAÇÕES DA EDIÇÃO 2', '2021-11-22 21:04:59', '2021-11-22 21:04:59'),
(5, 'DISCO 2', 'ARTISTA 2', '2019', '2019', 'SELO 2', 'BRASIL', 'LP', 'AO VIVO', 'ESPECIFICAÇÕES DA EDIÇÃO 2', '2021-11-22 21:12:50', '2021-11-22 21:12:50'),
(6, 'DISCO 3', 'ARTISTA 3', '1970', '1971', 'SELO 3', 'BRASIL', 'CD.LP', 'COLETÂNEA', 'TESTE 3', '2021-11-22 21:18:58', '2021-11-22 21:18:58');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_20_180838_create_discos_table', 1),
(6, '2021_10_20_185200_criar_tabela_user_disco', 1),
(7, '2021_10_20_185606_create_user_discos_table', 1),
(8, '2021_10_20_201033_add_isadmin_to_users_table', 1),
(9, '2021_10_22_185732_add_otherfields_to_discos_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isadmin` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `isadmin`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN', 'admin@discoapp.com', NULL, '$2y$10$YHLLht4YTx2j5TlDFikPEOpoP8RL89RQpzWDNKZb6wxL703EAqlZS', NULL, 1, '2021-11-19 22:22:39', '2021-11-19 22:22:39'),
(2, 'User 1', 'user1@domain.com', NULL, '$2y$10$HMv4J1qgYOJBaKXObpevGOTj3Otw2GBPHqDuB7Tc3bNk227QSyELi', NULL, 0, '2021-11-22 20:58:03', '2021-11-22 20:58:03'),
(3, 'User 2', 'user2@domain.com', NULL, '$2y$10$ZXJXV2ERmsUPMREpkmcE5O8hpTyGj50uiDSNI09ceEyXG0VTKUxKu', NULL, 0, '2021-11-22 20:59:59', '2021-11-22 20:59:59');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_disco`
--

CREATE TABLE `user_disco` (
  `user_id` int(11) NOT NULL,
  `disco_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `user_disco`
--

INSERT INTO `user_disco` (`user_id`, `disco_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_discos`
--

CREATE TABLE `user_discos` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `disco_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `user_discos`
--

INSERT INTO `user_discos` (`id`, `user_id`, `disco_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 1, NULL, NULL),
(3, 3, 5, '2021-11-22 21:12:50', '2021-11-22 21:12:50'),
(4, 3, 6, '2021-11-22 21:18:58', '2021-11-22 21:18:58');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `discos`
--
ALTER TABLE `discos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices para tabela `user_discos`
--
ALTER TABLE `user_discos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `discos`
--
ALTER TABLE `discos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `user_discos`
--
ALTER TABLE `user_discos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
