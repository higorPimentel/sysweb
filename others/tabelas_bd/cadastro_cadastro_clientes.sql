-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: cadastro
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.38-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cadastro_clientes`
--

DROP TABLE IF EXISTS `cadastro_clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cadastro_clientes` (
  `id_cad_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_cadastro` varchar(8) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `rg` varchar(18) DEFAULT NULL,
  `cpf` varchar(18) DEFAULT NULL,
  `outros_doc` varchar(18) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `dt_nascm` varchar(10) DEFAULT NULL,
  `responsavel` varchar(50) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `razao_social` varchar(80) DEFAULT NULL,
  `cnpj` varchar(20) DEFAULT NULL,
  `inscricao_estadual` varchar(15) DEFAULT NULL,
  `cep_cliente` varchar(11) DEFAULT NULL,
  `rua_cliente` varchar(30) DEFAULT NULL,
  `num_cliente` int(10) DEFAULT NULL,
  `complemento_cliente` varchar(30) DEFAULT NULL,
  `bairro_cliente` varchar(30) DEFAULT NULL,
  `uf_cliente` char(2) DEFAULT NULL,
  `cidade_cliente` varchar(40) DEFAULT NULL,
  `email_cliente` varchar(40) DEFAULT NULL,
  `email_nf_cliente` varchar(40) DEFAULT NULL,
  `cep_cobranca` varchar(11) DEFAULT NULL,
  `rua_cobranca` varchar(30) DEFAULT NULL,
  `num_cobranca` int(10) DEFAULT NULL,
  `complemento_cobranca` varchar(30) DEFAULT NULL,
  `bairro_cobranca` varchar(30) DEFAULT NULL,
  `uf_cobranca` char(2) DEFAULT NULL,
  `cidade_cobranca` varchar(40) DEFAULT NULL,
  `email_cobranca` varchar(40) DEFAULT NULL,
  `email_nf_cobranca` varchar(40) DEFAULT NULL,
  `dt_cadastro` varchar(10) DEFAULT NULL,
  `responsavel_cadastro` varchar(50) DEFAULT NULL,
  `dt_alteracao` varchar(10) DEFAULT NULL,
  `responsavel_alteracao` varchar(50) DEFAULT NULL,
  `observacao` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_cad_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro_clientes`
--

LOCK TABLES `cadastro_clientes` WRITE;
/*!40000 ALTER TABLE `cadastro_clientes` DISABLE KEYS */;
INSERT INTO `cadastro_clientes` VALUES (1,'JURIDICA','HIGOR DA SILVA PIMENTEL','49.021.693-6','425.803.448-70','45784512547','M','18/10/1993','HIGOR','(19)3922-6243','(19)99589-1586','EMPRESA FICTICIA LTDA','99.000.000/0001-85','49857444574','13180-616','RUA TORRES',134,'COMPLEMENTO','SAO JUDAS TADEU','SP','CAMPINAS','higorpimentel@hotmail.com','nf@hotmail.com','13180-616','RUA TORRES',134,'COMPLEMENTO','SAO JUDAS TADEU','SP','CAMPINAS','higorpimentel@hotmail.com','nf@hotmail.com','18/10/2020','higor cadastrou','30/08/2020','bruna alteraou','sem observações'),(2,'FISICA','prÃ³ximo','PRÃ“XIMO','PRÃ“XIMO','1','M','1','1','1','1','1','1','1','1','1',1,'1','1','0','','1','1','1','1',1,'1','1','0','','1','1','1','1','1','1','1'),(3,'FISICA','prÃ³ximo','PRÃ“XIMO','1','1','M','1','1','1','1','1','1','1','1','1',1,'1','1','0','','1','1','1','1',1,'1','1','0','','1','1','1','1','1','1','1'),(4,'FISICA','prÃ³ximo','1','1','1','M','1','1','1','1','1','1','1','1','1',1,'1','1','0','','1','1','1','1',1,'1','1','0','','1','1','1','1','1','1',''),(5,'FISICA','prÃ³xiimo','1','1','1','M','1','1','1','1','1','1','1','1','1',1,'1','1','0','','1','1','1','1',1,'1','1','0','','1','1','1','1','1','1','1'),(6,'FISICA','prÃ³ximo','1','1','1','M','1','1','1','1','1','1','1','1','1',1,'1','1','0','','1','1','1','1',1,'1','1','0','','1','1','1','1','1','1','1'),(7,'FISICA','prÃ³ximo','4','4','4','M','4','4','4','4','4','4','4','4','4',4,'4','4','0','','4','4','4','4',4,'4','4','0','','4','4','4','4','4','4','4'),(8,'FISICA','higor','','','','M','','','','','','','','','',0,'','','0','','','','','',0,'','','0','','','','','','','',''),(9,'FISICA','prÃ³ximo','','','','M','','','','','','','','','',0,'','','0','','','','','',0,'','','0','','','','','','','',''),(10,'FISICA','proximo','','','','M','','','','','','','','','',0,'','','0','','','','','',0,'','','0','','','','','','','',''),(11,'FISICA','Ã³','','','','M','','','','','','','','','',0,'','','0','','','','','',0,'','','0','','','','','','','',''),(12,'FISICA','Ã£Â³','','','','M','','','','','','','','','',0,'','','0','','','','','',0,'','','0','','','','','','','',''),(13,'FISICA','Ã£','','','','M','','','','','','','','','',0,'','','0','','','','','',0,'','','0','','','','','','','',''),(14,'FISICA','local','','','','M','','','','','','','','','',0,'','','0','','','','','',0,'','','0','','','','','','','',''),(15,'FISICA','informaÃ§Ã£o','','','','M','','','','','','','','','',0,'','','0','','','','','',0,'','','0','','','','','','','',''),(16,'FISICA','informaÃ§Ã£o','','','','M','','','','','','','','','',0,'','','0','','','','','',0,'','','0','','','','','','','',''),(17,'FISICA','ola','','','','M','','','','','','','','','',0,'','','0','','','','','',0,'','','0','','','','','','','',''),(18,'FISICA','aaaaaaa','','','','M','','','','','','','','','',0,'','','0','','','','','',0,'','','0','','','','','','','','');
/*!40000 ALTER TABLE `cadastro_clientes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-05-05 19:33:19
