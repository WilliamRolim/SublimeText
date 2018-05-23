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


-- Copiando estrutura do banco de dados para marketing_multinivel
CREATE DATABASE IF NOT EXISTS `marketing_multinivel` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `marketing_multinivel`;

-- Copiando estrutura para tabela marketing_multinivel.patentes
CREATE TABLE IF NOT EXISTS `patentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `minimo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela marketing_multinivel.patentes: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `patentes` DISABLE KEYS */;
INSERT INTO `patentes` (`id`, `nome`, `minimo`) VALUES
	(1, 'Iniciante', 0),
	(2, 'Junior', 1),
	(3, 'Diretor', 3),
	(4, 'Diretor Sênior', 5),
	(5, 'Executivo', 10);
/*!40000 ALTER TABLE `patentes` ENABLE KEYS */;

-- Copiando estrutura para tabela marketing_multinivel.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_pai` int(11) DEFAULT NULL,
  `patente` int(11) NOT NULL DEFAULT '1',
  `nome` varchar(100) NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL DEFAULT '0',
  `senha` varchar(32) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela marketing_multinivel.usuarios: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `id_pai`, `patente`, `nome`, `email`, `senha`) VALUES
	(1, NULL, 4, 'Sistema', 'sistema@gmail.com', '698dc19d489c4e4db73e28a713eab07b'),
	(2, 1, 1, 'Fulano', 'fulano@gmail.com', 'fbad19c19e9c4baff8b963e8fc6f794b'),
	(3, 1, 4, 'cicrano', 'cicrano@gmail.com', 'b7f267b6c483a81d77427378c470ca82'),
	(4, 3, 3, 'Paulo', 'paulo@gmail.com', '6ee236e4d0ab7380bb1bee87b8f0dce5'),
	(5, 3, 1, 'Pedro', 'pedro@gmail.com', 'c3b7f393410fe6185ba5d966a213a38f'),
	(6, 4, 2, 'JoÃ£o', 'joao@gmail.com', 'e52d270281261b738fcd413c72d8ad4c'),
	(7, 6, 2, 'Pedrinho', 'pedrinho@gmail.com', 'a9d0cf0bd640913b43b0b2d3b917765f'),
	(8, 7, 1, 'Roberto', 'roberto@gmail.com', '5f177272b67a69c573dc1de61c853157');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
