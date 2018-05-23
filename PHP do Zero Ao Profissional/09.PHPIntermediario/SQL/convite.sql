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


-- Copiando estrutura do banco de dados para convite
CREATE DATABASE IF NOT EXISTS `convite` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `convite`;

-- Copiando estrutura para tabela convite.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `codigo` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela convite.usuarios: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `email`, `senha`, `codigo`) VALUES
	(1, 'williamrolim@hotmail.com', '38851536d87701d2191990e24a7f8d4e', 'caa9c8f8620cbb30679026bb6427e11f'),
	(2, 'ivanira@gmail.com', 'efadb0ddbc3baa9dbdeb4fa497f70c03', '0ef4355061c51f7f8411e0bdb8ed2468'),
	(3, 'rodrigorolim@yahoo.com', '3ae1ad9aeba0580df576a69fbc5f6f96', '212cf9049081eea606843e4527e5ec0c'),
	(4, 'mariela@ig.com.br', '677719a3120ba47f992975895bddd3c4', 'de2d4dba9ca94e7cd4fc69c426449b11'),
	(5, 'yoda@starwars.com', '8ff953dd97c4405234a04291dee39e0b', 'a23d5f95a8ca55ee3a738faf10a6061d');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
