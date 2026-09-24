-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Tempo de geração: 24/09/2026 às 19:28
-- Versão do servidor: 8.4.11
-- Versão do PHP: 8.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jhos_barbershop`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` smallint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_09_09_192641_create_tbl_banner_table', 1),
(5, '2026_09_09_192641_create_tbl_categoria_table', 1),
(6, '2026_09_09_192641_create_tbl_cliente_table', 1),
(7, '2026_09_09_192641_create_tbl_contato_table', 1),
(8, '2026_09_09_192641_create_tbl_depoimento_table', 1),
(9, '2026_09_09_192641_create_tbl_galeria_table', 1),
(10, '2026_09_09_192641_create_tbl_horarios_table', 1),
(11, '2026_09_09_192641_create_tbl_itens_venda_table', 1),
(12, '2026_09_09_192641_create_tbl_linha_tempo_table', 1),
(13, '2026_09_09_192641_create_tbl_news_table', 1),
(14, '2026_09_09_192641_create_tbl_produto_table', 1),
(15, '2026_09_09_192641_create_tbl_usuarios_table', 1),
(16, '2026_09_09_192641_create_tbl_usuarios_venda_table', 1),
(17, '2026_09_09_192641_create_tbl_venda_table', 1),
(18, '2026_09_09_192642_add_foreign_keys_to_tbl_depoimento_table', 1),
(19, '2026_09_09_192642_add_foreign_keys_to_tbl_itens_venda_table', 1),
(20, '2026_09_09_192642_add_foreign_keys_to_tbl_produto_table', 1),
(21, '2026_09_09_192642_add_foreign_keys_to_tbl_usuarios_venda_table', 1),
(22, '2026_09_09_192642_add_foreign_keys_to_tbl_venda_table', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('60wREphFyhlj9LQqBPE8MBoxR3xVpczffRYlFonq', NULL, '172.18.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/153.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJVa2pGN1RFWVl4U2VuR0pFaVlWZWp1SlIweHBzeGpyTnp3aHRUWEpCIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAxXC9hZG1pblwvZ2FsZXJpYSIsInJvdXRlIjoiYWRtaW4uZ2FsZXJpYS5pbmRleCJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1790277293);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_agendamento`
--

CREATE TABLE `tbl_agendamento` (
  `id_agendamento` int NOT NULL,
  `tutorial_agendamento` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imagem_agendamento` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `link_agendamento` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_agendamento` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_agendamento` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id_banner` int NOT NULL,
  `titulo_banner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imagem_banner` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_banner` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_banner` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_banner` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_banner`
--

INSERT INTO `tbl_banner` (`id_banner`, `titulo_banner`, `imagem_banner`, `status_banner`, `data_criacao_banner`, `data_atualizacao_banner`) VALUES
(1, 'Banner salão', 'banner/Banner1_Jho.png', 'INATIVO', '2026-09-20 19:21:50', '2026-09-20 20:51:42'),
(2, 'Banner teste', 'banner/Banner_teste.jpg', 'ATIVO', '2026-09-20 20:50:24', '2026-09-20 20:51:38'),
(3, 'Banner salão correto', 'banner/banner_definitivo_jho.png', 'ATIVO', '2026-09-20 20:52:34', '2026-09-20 20:55:36'),
(4, 'Banner cliente fazendo a barba', 'banner/banner_definitivo_jho2.png', 'ATIVO', '2026-09-20 20:52:40', '2026-09-20 20:54:22');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_categoria`
--

CREATE TABLE `tbl_categoria` (
  `id_categoria` int NOT NULL,
  `nome_categoria` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imagem_categoria` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_categoria` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_categoria` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_categoria` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_cliente`
--

CREATE TABLE `tbl_cliente` (
  `id_cliente` int NOT NULL,
  `nome_cliente` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_cliente` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `senha_cliente` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto_cliente` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_cliente` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_cliente` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_cliente` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_cliente`
--

INSERT INTO `tbl_cliente` (`id_cliente`, `nome_cliente`, `email_cliente`, `senha_cliente`, `foto_cliente`, `status_cliente`, `data_criacao_cliente`, `data_atualizacao_cliente`) VALUES
(1, 'Diego Souza', 'diego@gmail.com', 'senha123', 'diego_souza.png', 'ATIVO', '2026-09-21 18:11:59', '2026-09-21 18:11:59'),
(2, 'Amanda Rodrigues', 'amanda@gmail.com', 'senha123', 'amanda_rodrigues.png', 'ATIVO', '2026-09-21 18:13:03', '2026-09-21 18:24:22'),
(3, 'Pedro Santos', 'pedro@gmail.com', 'senha123', 'pedro_santos.png', 'INATIV0', '2026-09-21 18:14:54', '2026-09-21 18:28:37'),
(4, 'Eduardo Cardoso', 'eduardo@gmail.com', 'senha123', 'eduardo_cardoso.png', 'ATIVO', '2026-09-21 18:15:51', '2026-09-21 18:26:15'),
(5, 'Carlos Alves', 'carlos@gmail.com', 'senha123', 'carlos_alves.png', 'ATIVO', '2026-09-21 18:18:05', '2026-09-21 18:26:40');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_contato`
--

CREATE TABLE `tbl_contato` (
  `id_contato` int NOT NULL,
  `nome_contato` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_contato` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telefone_contato` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `assunto_contato` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mensagem_contato` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_contato` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_contato` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_contato` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_depoimento`
--

CREATE TABLE `tbl_depoimento` (
  `id_depoimento` int NOT NULL,
  `id_cliente` int DEFAULT NULL,
  `descricao_depoimento` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nota_depoimento` int NOT NULL,
  `servico_depoimento` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link_depoimento` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_depoimento` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_depoimento` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_depoimento` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_depoimento`
--

INSERT INTO `tbl_depoimento` (`id_depoimento`, `id_cliente`, `descricao_depoimento`, `nota_depoimento`, `servico_depoimento`, `link_depoimento`, `status_depoimento`, `data_criacao_depoimento`, `data_atualizacao_depoimento`) VALUES
(1, 1, 'Atendimento muito bom e satisfatório.', 5, 'Corte de cabelo', ' ', 'APROVADO', '2026-09-23 17:59:37', '2026-09-23 18:29:40'),
(2, 2, 'Excelente profissional. O melhor cabeleleiro da região, super indico. ', 5, 'Corte de cabelo', '', 'PENDENTE', '2026-09-23 18:02:57', '2026-09-23 18:29:42');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_empresa`
--

CREATE TABLE `tbl_empresa` (
  `id_empresa` int NOT NULL,
  `telefone_empresa` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `endereco_empresa` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_empresa` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `redes_sociais_empresa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `whatsapp_empresa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `facebook_empresa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `instagram_empresa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_empresa_info` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_empresa_info` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_empresa_info` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_galeria`
--

CREATE TABLE `tbl_galeria` (
  `id_galeria` int NOT NULL,
  `nome_galeria` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imagem_galeria` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_galeria` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_galeria` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_galeria` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_galeria`
--

INSERT INTO `tbl_galeria` (`id_galeria`, `nome_galeria`, `imagem_galeria`, `status_galeria`, `data_criacao_galeria`, `data_atualizacao_galeria`) VALUES
(1, 'Corte cliente', 'galeria/foto_galeria1.png', 'INATIVO', '2026-09-20 21:17:52', '2026-09-22 19:08:57'),
(2, 'Corte cliente 2', 'galeria/foto_galeria2.png', 'ATIVO', '2026-09-20 22:00:05', '2026-09-20 22:00:52'),
(3, 'Corte cliente 3', 'galeria/foto_galeria3.png', 'ATIVO', '2026-09-20 22:00:15', '2026-09-20 22:00:44'),
(4, 'Corte cliente 4', 'galeria/foto_galeria4.png', 'ATIVO', '2026-09-20 22:01:18', '2026-09-20 22:01:18'),
(5, 'Corte cliente 5', 'galeria/foto_galeria5.png', 'ATIVO', '2026-09-20 22:01:26', '2026-09-20 22:01:26');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_historia_jho`
--

CREATE TABLE `tbl_historia_jho` (
  `id_historia_jho` int NOT NULL,
  `imagem_historia_jho` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sobre_historia_jho` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_historia_jho` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_historia_jho` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_historia_jho` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_horario_e_local`
--

CREATE TABLE `tbl_horario_e_local` (
  `id_horario_e_local` int NOT NULL,
  `dia_horario_e_local` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hora_abertura_horario_e_local` time DEFAULT NULL,
  `hora_fechamento_horario_e_local` time DEFAULT NULL,
  `localizacao_maps_horario_e_local` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_horario_e_local` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_depoimento` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_itens_venda`
--

CREATE TABLE `tbl_itens_venda` (
  `id_itens_venda` int NOT NULL,
  `id_venda` int NOT NULL,
  `id_produto` int NOT NULL,
  `qtde_itens_venda` double(6,2) NOT NULL,
  `valor_unit_itens_venda` double(6,2) NOT NULL,
  `subtotal_itens_venda` double(6,2) NOT NULL,
  `status_itens_venda` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'CONFIRMADO',
  `data_criacao_itens_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_itens_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_produto`
--

CREATE TABLE `tbl_produto` (
  `id_produto` int NOT NULL,
  `nome_produto` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_categoria` int NOT NULL,
  `imagem_produto` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `preco_produto` double(6,2) DEFAULT NULL,
  `descricao_produto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_produto` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_produto` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_produto` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_servicos`
--

CREATE TABLE `tbl_servicos` (
  `id_servicos` int NOT NULL,
  `nome_servicos` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descricao_servicos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `valor_servicos` double(6,2) NOT NULL,
  `imagem_servicos` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_servicos` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_servicos` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_servicos` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_servicos`
--

INSERT INTO `tbl_servicos` (`id_servicos`, `nome_servicos`, `descricao_servicos`, `valor_servicos`, `imagem_servicos`, `status_servicos`, `data_criacao_servicos`, `data_atualizacao_servicos`) VALUES
(1, 'Corte Social Sem Tesoura', ' Corte social é um corte de cabelo masculino clássico, caracterizado por ser curto nas laterais e mais longo no topo.', 35.00, 'corte_social.png', 'ATIVO', '2026-09-24 17:23:03', '2026-09-24 17:23:03'),
(2, 'Corte Degradê', 'Corte Degradê é um corte de cabelo masculino que consiste em uma transição suave entre diferentes comprimentos, criando um visual moderno e estilizado.', 40.00, 'corte_degrade.png', 'ATIVO', '2026-09-24 17:25:35', '2026-09-24 17:25:35'),
(3, ' Corte 1 de Altura + Pezinho', 'Corte 1 de Altura + Pezinho é um serviço que consiste em cortar o cabelo em uma única altura e finalizar com um pezinho estilizado.', 25.00, 'corte1_altura_pezinho.png', 'ATIVO', '2026-09-24 17:27:18', '2026-09-24 17:27:18'),
(4, 'Corte + Penteado', 'Corte + Penteado é um serviço completo que consiste em modelar e definir o cabelo com um processo de penteado, criando um visual mais delineado e estilizado.', 55.00, 'corte_penteado.png', 'ATIVO', '2026-09-24 17:29:41', '2026-09-24 17:29:41'),
(5, 'Corte + Barba + Sobrancelha', 'Corte + Barba + Sobrancelha é um serviço completo que consiste em modelar e definir o cabelo com um processo de barba e sobrancelha, criando um visual mais delineado e estilizado.', 80.00, 'corte_barba_sobrancelha.png', 'ATIVO', '2026-09-24 17:30:49', '2026-09-24 17:30:49'),
(6, 'Corte + Barba', 'Corte + Barba é um serviço completo que consiste em modelar e definir o cabelo com um processo de barba, criando um visual mais delineado e estilizado.', 70.00, 'corte_barba.png', 'ATIVO', '2026-09-24 17:33:53', '2026-09-24 17:33:53'),
(7, 'Corte + Sobrancelha', 'Corte + Sobrancelha é um serviço completo que consiste em modelar e definir o cabelo com um processo de sobrancelha, criando um visual mais delineado e estilizado.', 50.00, 'corte_sobrancelha.png', 'ATIVO', '2026-09-24 17:34:50', '2026-09-24 17:34:50'),
(8, 'Corte + Alisamento', 'Corte + Alisamento é um serviço completo que consiste em modelar e definir o cabelo com um processo de alisamento, criando um visual mais suave e moderno.', 70.00, 'corte_alisamento.png', 'ATIVO', '2026-09-24 17:35:56', '2026-09-24 17:35:56'),
(9, 'Corte + Barboterapia', 'Corte + Barboterapia é um serviço completo que consiste em modelar e definir o cabelo com um processo de barboterapia, criando um visual mais hidratado e saudável.', 70.00, 'corte_barboterapia.png', 'ATIVO', '2026-09-24 17:36:30', '2026-09-24 17:36:30'),
(10, 'Corte Infantil', 'Corte infantil é um corte de cabelo para crianças, caracterizado por ser simples e adequado para o estilo de vida ativo.', 40.00, 'corte_infantil.png', 'ATIVO', '2026-09-24 17:38:08', '2026-09-24 17:38:08'),
(11, 'Corte + Alisamento + Penteado', 'O corte + alisamento + penteado é um serviço completo que consiste em modelar e definir o cabelo com um processo de alisamento, criando um visual mais suave e moderno.', 90.00, 'corte_alisamento_penteado.png', 'ATIVO', '2026-09-24 17:39:30', '2026-09-24 17:39:30'),
(12, 'Corte + Progressiva', 'O corte + progressiva é um serviço completo que consiste em modelar e definir o cabelo com um processo de clareamento, criando um visual mais iluminado e moderno.', 110.00, 'corte_progressiva.png', 'ATIVO', '2026-09-24 17:40:16', '2026-09-24 17:40:16'),
(13, 'Corte + Barba + Sobrancelha + Penteado', 'O corte + barba + sobrancelha + penteado é um serviço completo que consiste em modelar e definir o cabelo, a barba e as sobrancelhas, criando um visual harmonioso e atraente', 100.00, 'corte_barba_sobrancelha_penteado.png', 'ATIVO', '2026-09-24 17:41:24', '2026-09-24 17:41:24'),
(14, 'Design Pezinho', 'O design de pezinho é um serviço que consiste em modelar e definir o cabelo na região da testa, criando um visual harmonioso e atraente.', 15.00, 'design_pezinho.png', 'ATIVO', '2026-09-24 17:42:18', '2026-09-24 17:42:43'),
(15, 'Progressiva', 'A progressiva é um processo de clareamento do cabelo que resulta em um visual mais iluminado e moderno.', 80.00, 'progressiva.png', 'ATIVO', '2026-09-24 17:43:42', '2026-09-24 17:43:42'),
(16, ' Reflexo / Luzes', ' O reflexo / luzes é um serviço que consiste em adicionar tons claros ao cabelo, criando um visual mais iluminado e moderno.', 70.00, 'reflexo_luzes.png', 'ATIVO', '2026-09-24 17:44:31', '2026-09-24 17:44:31'),
(17, '  Design de Barba', '  O design de barba é um serviço que consiste em modelar e definir a barba, criando um visual harmonioso e atraente.', 30.00, 'design_barba.png', 'ATIVO', '2026-09-24 17:45:34', '2026-09-24 17:45:34'),
(18, 'Design de Sobrancelha', 'O design de sobrancelha é um serviço que consiste em modelar e definir as sobrancelhas, criando um visual harmonioso e atraente.', 15.00, 'design_sobrancelha.png', 'ATIVO', '2026-09-24 17:46:30', '2026-09-24 17:46:30'),
(19, 'Platinado global + Corte', 'O platino global + corte é um serviço que combina o processo de clareamento completo do cabelo com um corte personalizado, resultando em um visual moderno e elegante.', 150.00, 'platinado_corte.png', 'ATIVO', '2026-09-24 17:47:39', '2026-09-24 17:47:39'),
(20, 'Penteado', ' O penteado é um serviço que consiste em pentear o cabelo de forma elegante e organizada, criando diferentes estilos e aparências.', 25.00, 'penteado.png', 'ATIVO', '2026-09-24 17:48:42', '2026-09-24 17:48:42'),
(21, 'Alisamento + Hidratação', ' O alisamento + hidratação é um serviço que suaviza os fios e restaura a saúde e o brilho do cabelo.', 45.00, 'alisamento_hidratacao.png', 'ATIVO', '2026-09-24 17:49:55', '2026-09-24 17:49:55'),
(22, 'Corte + Alisamento + Hidratação', 'O corte + alisamento + hidratação é um serviço completo que combina um corte de cabelo personalizado, seguido por um processo de alisamento para suavizar os fios e uma hidratação profunda para restaurar a saúde e o brilho do cabelo.', 80.00, 'corte_alisamento_hidratacao.png', 'ATIVO', '2026-09-24 17:51:06', '2026-09-24 17:51:06');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id_usuario` int NOT NULL,
  `nome_usuarios` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_usuarios` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `senha_usuarios` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto_usuarios` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nivel_usuarios` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_usuarios` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_usuarios` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_usuarios` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id_usuario`, `nome_usuarios`, `email_usuarios`, `senha_usuarios`, `foto_usuarios`, `nivel_usuarios`, `status_usuarios`, `data_criacao_usuarios`, `data_atualizacao_usuarios`) VALUES
(4, 'Administrador', 'admin@jhobarbershop.com', '$2y$12$/SYpl95.rdYrmsNVv.hpO.bkaI2qrcShFBqpgLBcb4yFx2E0Fab6C', 'kevelly_cavalcanti.jpg', 'ADMINISTRADOR', 'ATIVO', '2026-09-22 20:02:35', '2026-09-22 20:02:35');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbl_venda`
--

CREATE TABLE `tbl_venda` (
  `id_venda` int NOT NULL,
  `data_hora_venda` datetime NOT NULL,
  `valor_total_venda` double(10,2) NOT NULL,
  `forma_pagamento_venda` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_cliente` int NOT NULL,
  `status_venda` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'EM ANDAMENTO',
  `observacao_venda` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Índices de tabela `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Índices de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  ADD KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`);

--
-- Índices de tabela `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Índices de tabela `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Índices de tabela `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Índices de tabela `tbl_agendamento`
--
ALTER TABLE `tbl_agendamento`
  ADD PRIMARY KEY (`id_agendamento`);

--
-- Índices de tabela `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Índices de tabela `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `email_cliente` (`email_cliente`);

--
-- Índices de tabela `tbl_contato`
--
ALTER TABLE `tbl_contato`
  ADD PRIMARY KEY (`id_contato`);

--
-- Índices de tabela `tbl_depoimento`
--
ALTER TABLE `tbl_depoimento`
  ADD PRIMARY KEY (`id_depoimento`);

--
-- Índices de tabela `tbl_empresa`
--
ALTER TABLE `tbl_empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Índices de tabela `tbl_galeria`
--
ALTER TABLE `tbl_galeria`
  ADD PRIMARY KEY (`id_galeria`);

--
-- Índices de tabela `tbl_historia_jho`
--
ALTER TABLE `tbl_historia_jho`
  ADD PRIMARY KEY (`id_historia_jho`);

--
-- Índices de tabela `tbl_horario_e_local`
--
ALTER TABLE `tbl_horario_e_local`
  ADD PRIMARY KEY (`id_horario_e_local`);

--
-- Índices de tabela `tbl_itens_venda`
--
ALTER TABLE `tbl_itens_venda`
  ADD PRIMARY KEY (`id_itens_venda`);

--
-- Índices de tabela `tbl_produto`
--
ALTER TABLE `tbl_produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices de tabela `tbl_servicos`
--
ALTER TABLE `tbl_servicos`
  ADD PRIMARY KEY (`id_servicos`);

--
-- Índices de tabela `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email_usuarios` (`email_usuarios`);

--
-- Índices de tabela `tbl_venda`
--
ALTER TABLE `tbl_venda`
  ADD PRIMARY KEY (`id_venda`);

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
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `tbl_agendamento`
--
ALTER TABLE `tbl_agendamento`
  MODIFY `id_agendamento` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id_banner` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `id_categoria` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  MODIFY `id_cliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbl_contato`
--
ALTER TABLE `tbl_contato`
  MODIFY `id_contato` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_depoimento`
--
ALTER TABLE `tbl_depoimento`
  MODIFY `id_depoimento` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbl_empresa`
--
ALTER TABLE `tbl_empresa`
  MODIFY `id_empresa` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_galeria`
--
ALTER TABLE `tbl_galeria`
  MODIFY `id_galeria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbl_historia_jho`
--
ALTER TABLE `tbl_historia_jho`
  MODIFY `id_historia_jho` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_horario_e_local`
--
ALTER TABLE `tbl_horario_e_local`
  MODIFY `id_horario_e_local` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_itens_venda`
--
ALTER TABLE `tbl_itens_venda`
  MODIFY `id_itens_venda` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_produto`
--
ALTER TABLE `tbl_produto`
  MODIFY `id_produto` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_servicos`
--
ALTER TABLE `tbl_servicos`
  MODIFY `id_servicos` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tbl_venda`
--
ALTER TABLE `tbl_venda`
  MODIFY `id_venda` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
