-- phpMyAdmin SQL Dump

-- version 5.2.1

-- https://www.phpmyadmin.net/

--

-- Host: localhost:3306

-- Tempo de geração: 06/09/2023 às 11:13

-- Versão do servidor: 10.3.39-MariaDB

-- Versão do PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */

;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */

;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */

;

/*!40101 SET NAMES utf8mb4 */

;

--

-- Banco de dados: `bloominprojetos_planeta_epis`

--

-- --------------------------------------------------------

--

-- Estrutura para tabela `category`

--

CREATE TABLE
    `category` (
        `id` int(15) NOT NULL,
        `father_id` int(15) DEFAULT 0,
        `name` text NOT NULL,
        `sub_name` text DEFAULT NULL,
        `url` text DEFAULT NULL,
        `description` text DEFAULT NULL,
        `card_description` text DEFAULT NULL,
        `cover` varchar(255) DEFAULT NULL,
        `pdf` varchar(255) DEFAULT NULL,
        `gallery_id` int(15) DEFAULT NULL,
        `status` varchar(255) DEFAULT 'post',
        `created_at` timestamp NULL DEFAULT current_timestamp(),
        `updated_at` timestamp NULL DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- Estrutura para tabela `tags`

--

CREATE TABLE
    `tags` (
        `id` int(15) NOT NULL,
        `tag_name` text NOT NULL,
        `tag_cod` varchar(255) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- Estrutura para tabela `gallery`

--

CREATE TABLE
    `gallery` (
        `id` int(11) NOT NULL,
        `product_id` int(15) DEFAULT NULL,
        `category_id` int(15) DEFAULT NULL,
        `name` varchar(255) NOT NULL,
        `created_at` timestamp NULL DEFAULT current_timestamp(),
        `updated_at` timestamp NULL DEFAULT current_timestamp()
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- Estrutura para tabela `products`

--

CREATE TABLE
    `products` (
        `id` int(15) NOT NULL,
        `name` varchar(255) NOT NULL,
        `content` text NOT NULL,
        `adictional_info` text DEFAULT NULL,
        `tags` varchar(255) DEFAULT NULL,
        `url` varchar(255) DEFAULT NULL,
        `pdf` varchar(255) DEFAULT NULL,
        `cover` varchar(255) DEFAULT NULL,
        `category_id` varchar(255) DEFAULT '0',
        `status` varchar(255) DEFAULT 'post',
        `created_at` timestamp NULL DEFAULT current_timestamp(),
        `updated_at` timestamp NULL DEFAULT current_timestamp()
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- Estrutura para tabela `users`

--

CREATE TABLE
    `users` (
        `id` int(15) NOT NULL,
        `name` varchar(255) NOT NULL,
        `email` varchar(255) NOT NULL,
        `password` varchar(255) NOT NULL,
        `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
        `updated_at` timestamp NULL DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

    --
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'master@bloomin.com.br', '$2y$10$98qfeYVIcSq3z6M/uDl8x.CnusGLXhuZNiDD2vSrUsXySPt6mo2YC', '2023-04-27 15:21:05', NULL);

--

-- Índices de tabela `category`

--

ALTER TABLE `category` ADD PRIMARY KEY (`id`);

--

-- Índices de tabela `tags`

--

ALTER TABLE `tags` ADD PRIMARY KEY (`id`);

--

-- Índices de tabela `gallery`

--

ALTER TABLE `gallery` ADD PRIMARY KEY (`id`);

--

-- Índices de tabela `products`

--

ALTER TABLE `products` ADD PRIMARY KEY (`id`);


--

-- Índices de tabela `users`

--

ALTER TABLE `users` ADD PRIMARY KEY (`id`);

--

-- AUTO_INCREMENT para tabelas despejadas

--

--

-- AUTO_INCREMENT de tabela `category`

--

ALTER TABLE
    `category` MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 1;

--

-- AUTO_INCREMENT de tabela `tags`

--

ALTER TABLE
    `tags` MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 1;

--

-- AUTO_INCREMENT de tabela `gallery`

--

ALTER TABLE
    `gallery` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 1;

--

-- AUTO_INCREMENT de tabela `products`

--

ALTER TABLE
    `products` MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 1;

-- AUTO_INCREMENT de tabela `users`

--

ALTER TABLE
    `users` MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */

;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */

;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */

;