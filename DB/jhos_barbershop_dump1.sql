-- MySQL dump 10.13  Distrib 8.4.11, for Linux (x86_64)
--
-- Host: localhost    Database: jhos_barbershop
-- ------------------------------------------------------
-- Server version	8.4.11

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL,
  PRIMARY KEY (`key`),
  KEY `cache_locks_expiration_index` (`expiration`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`),
  KEY `failed_jobs_connection_queue_failed_at_index` (`connection`,`queue`,`failed_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` smallint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2026_09_09_192641_create_tbl_banner_table',1),(5,'2026_09_09_192641_create_tbl_categoria_table',1),(6,'2026_09_09_192641_create_tbl_cliente_table',1),(7,'2026_09_09_192641_create_tbl_contato_table',1),(8,'2026_09_09_192641_create_tbl_depoimento_table',1),(9,'2026_09_09_192641_create_tbl_galeria_table',1),(10,'2026_09_09_192641_create_tbl_horarios_table',1),(11,'2026_09_09_192641_create_tbl_itens_venda_table',1),(12,'2026_09_09_192641_create_tbl_linha_tempo_table',1),(13,'2026_09_09_192641_create_tbl_news_table',1),(14,'2026_09_09_192641_create_tbl_produto_table',1),(15,'2026_09_09_192641_create_tbl_usuarios_table',1),(16,'2026_09_09_192641_create_tbl_usuarios_venda_table',1),(17,'2026_09_09_192641_create_tbl_venda_table',1),(18,'2026_09_09_192642_add_foreign_keys_to_tbl_depoimento_table',1),(19,'2026_09_09_192642_add_foreign_keys_to_tbl_itens_venda_table',1),(20,'2026_09_09_192642_add_foreign_keys_to_tbl_produto_table',1),(21,'2026_09_09_192642_add_foreign_keys_to_tbl_usuarios_venda_table',1),(22,'2026_09_09_192642_add_foreign_keys_to_tbl_venda_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('McsKConoQwvVIHjo1zIkLE4ZinlejLVSjTtKMv9h',NULL,'172.18.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:156.0) Gecko/20100101 Firefox/156.0','eyJfdG9rZW4iOiJSNmZVYmtZa3ZlMnpoQnNRdWY0bGt6czNxdGh2aGhRT2YyUWJlcVByIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAxXC9wcm9kdXRvXC9jYXRlZ29yaWFcLzUiLCJyb3V0ZSI6InByb2R1dG8uY2F0ZWdvcmlhIn0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=',1790296238);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_agendamento`
--

DROP TABLE IF EXISTS `tbl_agendamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_agendamento` (
  `id_agendamento` int NOT NULL AUTO_INCREMENT,
  `tutorial_agendamento` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imagem_agendamento` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `link_agendamento` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_agendamento` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_agendamento` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_agendamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_agendamento`
--

LOCK TABLES `tbl_agendamento` WRITE;
/*!40000 ALTER TABLE `tbl_agendamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_agendamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_banner`
--

DROP TABLE IF EXISTS `tbl_banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_banner` (
  `id_banner` int NOT NULL AUTO_INCREMENT,
  `titulo_banner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imagem_banner` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_banner` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_banner` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_banner` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_banner`
--

LOCK TABLES `tbl_banner` WRITE;
/*!40000 ALTER TABLE `tbl_banner` DISABLE KEYS */;
INSERT INTO `tbl_banner` VALUES (1,'Banner salão','banner/Banner1_Jho.png','INATIVO','2026-09-20 19:21:50','2026-09-20 20:51:42'),(2,'Banner teste','banner/Banner_teste.jpg','ATIVO','2026-09-20 20:50:24','2026-09-20 20:51:38'),(3,'Banner salão correto','banner/banner_definitivo_jho.png','ATIVO','2026-09-20 20:52:34','2026-09-20 20:55:36'),(4,'Banner cliente fazendo a barba','banner/banner_definitivo_jho2.png','ATIVO','2026-09-20 20:52:40','2026-09-20 20:54:22');
/*!40000 ALTER TABLE `tbl_banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_categoria`
--

DROP TABLE IF EXISTS `tbl_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_categoria` (
  `id_categoria` int NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_categoria` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_categoria` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_categoria` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_categoria`
--

LOCK TABLES `tbl_categoria` WRITE;
/*!40000 ALTER TABLE `tbl_categoria` DISABLE KEYS */;
INSERT INTO `tbl_categoria` VALUES (1,'Pomadas','ATIVO','2026-09-24 20:53:15','2026-09-24 20:53:15'),(2,'Gels','ATIVO','2026-09-24 20:53:43','2026-09-24 20:53:43'),(3,'Shampoos','ATIVO','2026-09-24 20:54:05','2026-09-24 20:54:05'),(4,'Condicionadores','INATIVO','2026-09-24 20:54:16','2026-09-25 00:17:15'),(5,'Balms','ATIVO','2026-09-24 20:54:24','2026-09-24 20:54:24');
/*!40000 ALTER TABLE `tbl_categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cliente`
--

DROP TABLE IF EXISTS `tbl_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_cliente` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_cliente` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `senha_cliente` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto_cliente` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_cliente` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_cliente` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_cliente` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cliente`),
  UNIQUE KEY `email_cliente` (`email_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cliente`
--

LOCK TABLES `tbl_cliente` WRITE;
/*!40000 ALTER TABLE `tbl_cliente` DISABLE KEYS */;
INSERT INTO `tbl_cliente` VALUES (1,'Diego Souza','diego@gmail.com','senha123','diego_souza.png','ATIVO','2026-09-21 18:11:59','2026-09-21 18:11:59'),(2,'Amanda Rodrigues','amanda@gmail.com','senha123','amanda_rodrigues.png','ATIVO','2026-09-21 18:13:03','2026-09-21 18:24:22'),(3,'Pedro Santos','pedro@gmail.com','senha123','pedro_santos.png','INATIV0','2026-09-21 18:14:54','2026-09-21 18:28:37'),(4,'Eduardo Cardoso','eduardo@gmail.com','senha123','eduardo_cardoso.png','ATIVO','2026-09-21 18:15:51','2026-09-21 18:26:15'),(5,'Carlos Alves','carlos@gmail.com','senha123','carlos_alves.png','ATIVO','2026-09-21 18:18:05','2026-09-21 18:26:40');
/*!40000 ALTER TABLE `tbl_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_contato`
--

DROP TABLE IF EXISTS `tbl_contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_contato` (
  `id_contato` int NOT NULL AUTO_INCREMENT,
  `nome_contato` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_contato` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telefone_contato` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `assunto_contato` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mensagem_contato` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_contato` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_contato` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_contato` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_contato`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_contato`
--

LOCK TABLES `tbl_contato` WRITE;
/*!40000 ALTER TABLE `tbl_contato` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_depoimento`
--

DROP TABLE IF EXISTS `tbl_depoimento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_depoimento` (
  `id_depoimento` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int DEFAULT NULL,
  `descricao_depoimento` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nota_depoimento` int NOT NULL,
  `servico_depoimento` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `link_depoimento` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_depoimento` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_depoimento` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_depoimento` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_depoimento`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_depoimento`
--

LOCK TABLES `tbl_depoimento` WRITE;
/*!40000 ALTER TABLE `tbl_depoimento` DISABLE KEYS */;
INSERT INTO `tbl_depoimento` VALUES (1,1,'Atendimento muito bom e satisfatório.',5,'Corte de cabelo',' ','APROVADO','2026-09-23 17:59:37','2026-09-23 18:29:40'),(2,2,'Excelente profissional. O melhor cabeleleiro da região, super indico. ',5,'Corte de cabelo','','PENDENTE','2026-09-23 18:02:57','2026-09-23 18:29:42');
/*!40000 ALTER TABLE `tbl_depoimento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_empresa`
--

DROP TABLE IF EXISTS `tbl_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_empresa` (
  `id_empresa` int NOT NULL AUTO_INCREMENT,
  `telefone_empresa` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `endereco_empresa` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_empresa` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `redes_sociais_empresa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `whatsapp_empresa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `facebook_empresa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `instagram_empresa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_empresa_info` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_empresa_info` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_empresa_info` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_empresa`
--

LOCK TABLES `tbl_empresa` WRITE;
/*!40000 ALTER TABLE `tbl_empresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_galeria`
--

DROP TABLE IF EXISTS `tbl_galeria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_galeria` (
  `id_galeria` int NOT NULL AUTO_INCREMENT,
  `nome_galeria` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imagem_galeria` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_galeria` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_galeria` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_galeria` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_galeria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_galeria`
--

LOCK TABLES `tbl_galeria` WRITE;
/*!40000 ALTER TABLE `tbl_galeria` DISABLE KEYS */;
INSERT INTO `tbl_galeria` VALUES (1,'Corte cliente','galeria/foto_galeria1.png','INATIVO','2026-09-20 21:17:52','2026-09-22 19:08:57'),(2,'Corte cliente 2','galeria/foto_galeria2.png','ATIVO','2026-09-20 22:00:05','2026-09-20 22:00:52'),(3,'Corte cliente 3','galeria/foto_galeria3.png','ATIVO','2026-09-20 22:00:15','2026-09-20 22:00:44'),(4,'Corte cliente 4','galeria/foto_galeria4.png','ATIVO','2026-09-20 22:01:18','2026-09-20 22:01:18'),(5,'Corte cliente 5','galeria/foto_galeria5.png','ATIVO','2026-09-20 22:01:26','2026-09-20 22:01:26');
/*!40000 ALTER TABLE `tbl_galeria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_historia_jho`
--

DROP TABLE IF EXISTS `tbl_historia_jho`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_historia_jho` (
  `id_historia_jho` int NOT NULL AUTO_INCREMENT,
  `imagem_historia_jho` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sobre_historia_jho` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_historia_jho` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_historia_jho` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_historia_jho` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_historia_jho`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_historia_jho`
--

LOCK TABLES `tbl_historia_jho` WRITE;
/*!40000 ALTER TABLE `tbl_historia_jho` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_historia_jho` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_horario_e_local`
--

DROP TABLE IF EXISTS `tbl_horario_e_local`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_horario_e_local` (
  `id_horario_e_local` int NOT NULL AUTO_INCREMENT,
  `dia_horario_e_local` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hora_abertura_horario_e_local` time DEFAULT NULL,
  `hora_fechamento_horario_e_local` time DEFAULT NULL,
  `localizacao_maps_horario_e_local` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_horario_e_local` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_depoimento` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_horario_e_local`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_horario_e_local`
--

LOCK TABLES `tbl_horario_e_local` WRITE;
/*!40000 ALTER TABLE `tbl_horario_e_local` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_horario_e_local` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_itens_venda`
--

DROP TABLE IF EXISTS `tbl_itens_venda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_itens_venda` (
  `id_itens_venda` int NOT NULL AUTO_INCREMENT,
  `id_venda` int NOT NULL,
  `id_produto` int NOT NULL,
  `qtde_itens_venda` double(6,2) NOT NULL,
  `valor_unit_itens_venda` double(6,2) NOT NULL,
  `subtotal_itens_venda` double(6,2) NOT NULL,
  `status_itens_venda` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'CONFIRMADO',
  `data_criacao_itens_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_itens_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_itens_venda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_itens_venda`
--

LOCK TABLES `tbl_itens_venda` WRITE;
/*!40000 ALTER TABLE `tbl_itens_venda` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_itens_venda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_produto`
--

DROP TABLE IF EXISTS `tbl_produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_produto` (
  `id_produto` int NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_categoria` int NOT NULL,
  `imagem_produto` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `preco_produto` double(6,2) DEFAULT NULL,
  `descricao_produto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_produto` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_produto` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_produto` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_produto`
--

LOCK TABLES `tbl_produto` WRITE;
/*!40000 ALTER TABLE `tbl_produto` DISABLE KEYS */;
INSERT INTO `tbl_produto` VALUES (1,'Pomada Matte',1,'produto/pomada_matte.png',29.90,'Insira descrição aqui','ATIVO','2026-09-24 21:06:53','2026-09-24 21:06:53'),(2,'Gel Cola - Fox for men',2,'produto/gel_cola.png',49.90,'Insira descrição util','ATIVO','2026-09-25 00:14:04','2026-09-25 00:14:04'),(3,'Shampoo 4 em 1 - Fox for men',3,'produto/shampoo_4_em_1.png',59.90,'Insira descrição incrivel','ATIVO','2026-09-25 00:15:52','2026-09-25 00:15:52'),(4,'Balm para barba - Fox for men',5,'produto/balm_para_barba.png',35.90,'Insira descrição mirabolante','ATIVO','2026-09-25 00:19:12','2026-09-25 00:19:12');
/*!40000 ALTER TABLE `tbl_produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_servicos`
--

DROP TABLE IF EXISTS `tbl_servicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_servicos` (
  `id_servicos` int NOT NULL AUTO_INCREMENT,
  `nome_servicos` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `descricao_servicos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `valor_servicos` double(6,2) NOT NULL,
  `imagem_servicos` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_servicos` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_servicos` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_servicos` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_servicos`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_servicos`
--

LOCK TABLES `tbl_servicos` WRITE;
/*!40000 ALTER TABLE `tbl_servicos` DISABLE KEYS */;
INSERT INTO `tbl_servicos` VALUES (1,'Corte Social Sem Tesoura',' Corte social é um corte de cabelo masculino clássico, caracterizado por ser curto nas laterais e mais longo no topo.',35.00,'corte_social.png','ATIVO','2026-09-24 17:23:03','2026-09-24 17:23:03'),(2,'Corte Degradê','Corte Degradê é um corte de cabelo masculino que consiste em uma transição suave entre diferentes comprimentos, criando um visual moderno e estilizado.',40.00,'corte_degrade.png','ATIVO','2026-09-24 17:25:35','2026-09-24 17:25:35'),(3,' Corte 1 de Altura + Pezinho','Corte 1 de Altura + Pezinho é um serviço que consiste em cortar o cabelo em uma única altura e finalizar com um pezinho estilizado.',25.00,'corte1_altura_pezinho.png','ATIVO','2026-09-24 17:27:18','2026-09-24 17:27:18'),(4,'Corte + Penteado','Corte + Penteado é um serviço completo que consiste em modelar e definir o cabelo com um processo de penteado, criando um visual mais delineado e estilizado.',55.00,'corte_penteado.png','ATIVO','2026-09-24 17:29:41','2026-09-24 17:29:41'),(5,'Corte + Barba + Sobrancelha','Corte + Barba + Sobrancelha é um serviço completo que consiste em modelar e definir o cabelo com um processo de barba e sobrancelha, criando um visual mais delineado e estilizado.',80.00,'corte_barba_sobrancelha.png','ATIVO','2026-09-24 17:30:49','2026-09-24 17:30:49'),(6,'Corte + Barba','Corte + Barba é um serviço completo que consiste em modelar e definir o cabelo com um processo de barba, criando um visual mais delineado e estilizado.',70.00,'corte_barba.png','ATIVO','2026-09-24 17:33:53','2026-09-24 17:33:53'),(7,'Corte + Sobrancelha','Corte + Sobrancelha é um serviço completo que consiste em modelar e definir o cabelo com um processo de sobrancelha, criando um visual mais delineado e estilizado.',50.00,'corte_sobrancelha.png','ATIVO','2026-09-24 17:34:50','2026-09-24 17:34:50'),(8,'Corte + Alisamento','Corte + Alisamento é um serviço completo que consiste em modelar e definir o cabelo com um processo de alisamento, criando um visual mais suave e moderno.',70.00,'corte_alisamento.png','ATIVO','2026-09-24 17:35:56','2026-09-24 17:35:56'),(9,'Corte + Barboterapia','Corte + Barboterapia é um serviço completo que consiste em modelar e definir o cabelo com um processo de barboterapia, criando um visual mais hidratado e saudável.',70.00,'corte_barboterapia.png','ATIVO','2026-09-24 17:36:30','2026-09-24 17:36:30'),(10,'Corte Infantil','Corte infantil é um corte de cabelo para crianças, caracterizado por ser simples e adequado para o estilo de vida ativo.',40.00,'corte_infantil.png','ATIVO','2026-09-24 17:38:08','2026-09-24 17:38:08'),(11,'Corte + Alisamento + Penteado','O corte + alisamento + penteado é um serviço completo que consiste em modelar e definir o cabelo com um processo de alisamento, criando um visual mais suave e moderno.',90.00,'corte_alisamento_penteado.png','ATIVO','2026-09-24 17:39:30','2026-09-24 17:39:30'),(12,'Corte + Progressiva','O corte + progressiva é um serviço completo que consiste em modelar e definir o cabelo com um processo de clareamento, criando um visual mais iluminado e moderno.',110.00,'corte_progressiva.png','ATIVO','2026-09-24 17:40:16','2026-09-24 17:40:16'),(13,'Corte + Barba + Sobrancelha + Penteado','O corte + barba + sobrancelha + penteado é um serviço completo que consiste em modelar e definir o cabelo, a barba e as sobrancelhas, criando um visual harmonioso e atraente',100.00,'corte_barba_sobrancelha_penteado.png','ATIVO','2026-09-24 17:41:24','2026-09-24 17:41:24'),(14,'Design Pezinho','O design de pezinho é um serviço que consiste em modelar e definir o cabelo na região da testa, criando um visual harmonioso e atraente.',15.00,'design_pezinho.png','ATIVO','2026-09-24 17:42:18','2026-09-24 17:42:43'),(15,'Progressiva','A progressiva é um processo de clareamento do cabelo que resulta em um visual mais iluminado e moderno.',80.00,'progressiva.png','ATIVO','2026-09-24 17:43:42','2026-09-24 17:43:42'),(16,' Reflexo / Luzes',' O reflexo / luzes é um serviço que consiste em adicionar tons claros ao cabelo, criando um visual mais iluminado e moderno.',70.00,'reflexo_luzes.png','ATIVO','2026-09-24 17:44:31','2026-09-24 17:44:31'),(17,'  Design de Barba','  O design de barba é um serviço que consiste em modelar e definir a barba, criando um visual harmonioso e atraente.',30.00,'design_barba.png','ATIVO','2026-09-24 17:45:34','2026-09-24 17:45:34'),(18,'Design de Sobrancelha','O design de sobrancelha é um serviço que consiste em modelar e definir as sobrancelhas, criando um visual harmonioso e atraente.',15.00,'design_sobrancelha.png','ATIVO','2026-09-24 17:46:30','2026-09-24 17:46:30'),(19,'Platinado global + Corte','O platino global + corte é um serviço que combina o processo de clareamento completo do cabelo com um corte personalizado, resultando em um visual moderno e elegante.',150.00,'platinado_corte.png','ATIVO','2026-09-24 17:47:39','2026-09-24 17:47:39'),(20,'Penteado',' O penteado é um serviço que consiste em pentear o cabelo de forma elegante e organizada, criando diferentes estilos e aparências.',25.00,'penteado.png','ATIVO','2026-09-24 17:48:42','2026-09-24 17:48:42'),(21,'Alisamento + Hidratação',' O alisamento + hidratação é um serviço que suaviza os fios e restaura a saúde e o brilho do cabelo.',45.00,'alisamento_hidratacao.png','ATIVO','2026-09-24 17:49:55','2026-09-24 17:49:55'),(22,'Corte + Alisamento + Hidratação','O corte + alisamento + hidratação é um serviço completo que combina um corte de cabelo personalizado, seguido por um processo de alisamento para suavizar os fios e uma hidratação profunda para restaurar a saúde e o brilho do cabelo.',80.00,'corte_alisamento_hidratacao.png','ATIVO','2026-09-24 17:51:06','2026-09-24 17:51:06');
/*!40000 ALTER TABLE `tbl_servicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nome_usuarios` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_usuarios` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `senha_usuarios` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto_usuarios` varchar(65) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nivel_usuarios` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status_usuarios` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_usuarios` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_usuarios` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email_usuarios` (`email_usuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuarios`
--

LOCK TABLES `tbl_usuarios` WRITE;
/*!40000 ALTER TABLE `tbl_usuarios` DISABLE KEYS */;
INSERT INTO `tbl_usuarios` VALUES (4,'Administrador','admin@jhobarbershop.com','$2y$12$/SYpl95.rdYrmsNVv.hpO.bkaI2qrcShFBqpgLBcb4yFx2E0Fab6C','kevelly_cavalcanti.jpg','ADMINISTRADOR','ATIVO','2026-09-22 20:02:35','2026-09-22 20:02:35');
/*!40000 ALTER TABLE `tbl_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_venda`
--

DROP TABLE IF EXISTS `tbl_venda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_venda` (
  `id_venda` int NOT NULL AUTO_INCREMENT,
  `data_hora_venda` datetime NOT NULL,
  `valor_total_venda` double(10,2) NOT NULL,
  `forma_pagamento_venda` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_cliente` int NOT NULL,
  `status_venda` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'EM ANDAMENTO',
  `observacao_venda` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `data_criacao_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_atualizacao_venda` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_venda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_venda`
--

LOCK TABLES `tbl_venda` WRITE;
/*!40000 ALTER TABLE `tbl_venda` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_venda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-09-25  0:35:49
