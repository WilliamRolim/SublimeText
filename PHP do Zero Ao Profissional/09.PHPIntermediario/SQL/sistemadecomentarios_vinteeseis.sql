-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.17 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para sistemadecomentarios_vinteeseis
CREATE DATABASE IF NOT EXISTS `sistemadecomentarios_vinteeseis` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sistemadecomentarios_vinteeseis`;

-- Copiando estrutura para tabela sistemadecomentarios_vinteeseis.mensagem
CREATE TABLE IF NOT EXISTS `mensagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_msg` datetime DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `msg` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela sistemadecomentarios_vinteeseis.mensagem: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `mensagem` DISABLE KEYS */;
INSERT INTO `mensagem` (`id`, `data_msg`, `nome`, `msg`) VALUES
	(1, '2018-05-15 09:06:19', 'Tancredo Neves Dead', 'Testando 12345'),
	(2, '2018-05-15 09:06:41', 'Malandro do agreste', 'Matando gueros'),
	(3, '2018-05-15 09:40:05', 'Joana Dark', NULL),
	(4, '2018-05-15 09:42:42', 'Joana Dark', NULL),
	(5, '2018-05-15 09:47:29', 'Error', 'testa');
/*!40000 ALTER TABLE `mensagem` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
