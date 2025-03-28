-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/03/2025 às 19:11
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `autogestor`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permissao_do_usuario` varchar(255) DEFAULT NULL,
  `acesso_usuario` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `permissao_do_usuario`, `acesso_usuario`) VALUES
(1, 'pablo', 'pabloedug7@gmail.com', NULL, '$2y$12$28Nsq0dg/oK.pTwnBEiYsOjs0Y1C35rOqKZ/BbGlRHnTo12yG3llm', NULL, '2025-03-26 20:15:06', '2025-03-28 00:43:04', 'Administrador', 'total'),
(20, 'Jose', 'jose@gmail.com', NULL, '$2y$12$srN88s93j3wWu2EBFgmvJ.Yz88/z90ZgJEs3B1HsvJ3EnDlglKg9O', NULL, '2025-03-27 22:10:24', '2025-03-28 20:42:30', 'Comum', 'produtos'),
(23, 'joao', 'joao@gmail.com', NULL, '$2y$12$ia2Gq/ihdAem25wz087wfeEwOvf1IINu2WrDiE7EiIM5SP2aiXvN.', NULL, '2025-03-28 00:15:33', '2025-03-28 20:28:03', 'Comum', 'categorias'),
(24, 'maria', 'maria@gmail.com', NULL, '$2y$12$3paeEXt.rWkbQLlHDLzn7eSSuff4pjbAi9lo47/me/wOr9kfqw.Tm', NULL, '2025-03-28 00:31:40', '2025-03-28 20:42:41', 'Comum', 'marcas'),
(26, 'abc', 'abc@abc', NULL, '$2y$12$zX2epYn4eceCvVq9l4EhsulaUfvliPTWQ3./biYBqh2qDj01hv/I2', NULL, '2025-03-28 20:14:34', '2025-03-28 20:42:13', 'Comum', 'total'),
(27, 'admin', 'admin@admin', NULL, '$2y$12$1zYmorLWbL2KaJ0uB9wHMeJSTYpGVPy6L2LgOu3XGRQ/x5gOrcOZi', NULL, '2025-03-28 20:16:54', '2025-03-28 21:02:41', 'Administrador', 'total'),
(28, 'superadmin', 'superadmin@superadmin', NULL, '$2y$12$0hsEoS1HN/hJBOAP9UgL4eJNSWnSyw6t1U85hYlbKnjGwyUT/bE8G', NULL, '2025-03-28 20:17:18', '2025-03-28 20:36:41', 'Administrador', 'total');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
