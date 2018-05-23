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


-- Copiando estrutura do banco de dados para projeto_ordenarvintecinco
CREATE DATABASE IF NOT EXISTS `projeto_ordenarvintecinco` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_ordenarvintecinco`;

-- Copiando estrutura para tabela projeto_ordenarvintecinco.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL DEFAULT '0',
  `idade` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_ordenarvintecinco.usuarios: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nome`, `idade`) VALUES
	(1, 'William Rolim', 37),
	(2, 'Amanda Nogueira ', 20),
	(3, 'Rodrigo Rolim', 28),
	(4, 'Yolle Ramos', 32),
	(5, 'Marisa Fernandez', 99),
	(6, 'Theodore Franklin', 102),
	(7, 'Sebastian Neves', 59),
	(8, 'Allas Mundi', 74),
	(9, 'Camillo Camille', 17),
	(10, 'Fausto Silva', 89),
	(11, 'Tabatha Figueira', 16);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
