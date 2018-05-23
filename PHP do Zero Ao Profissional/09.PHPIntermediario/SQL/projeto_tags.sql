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


-- Copiando estrutura do banco de dados para projeto_tags
CREATE DATABASE IF NOT EXISTS `projeto_tags` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projeto_tags`;

-- Copiando estrutura para tabela projeto_tags.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL DEFAULT '0',
  `caracteristicas` varchar(200) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela projeto_tags.usuarios: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nome`, `caracteristicas`) VALUES
	(1, 'William Rolim', 'Estudioso, Esforçado,Orador, Responsavel, Pontual, Culto'),
	(2, 'Rodrigo Rolim', 'Gamemaniaco, Legal, Juvenal, Introvertido, Calmo'),
	(3, 'Amanda Novaz', 'Sexy, Provocativa, Inquieta, Moralista, Juvenal'),
	(4, 'Yoda Wars', 'Cinefolo, Ator, Mestre, Professor, Doutor'),
	(5, 'Michel Temer', 'Corrupto, Ladrão, Mafioso, Mentiroso, Assassino'),
	(6, 'GenricALL', 'Gamemaniaco, Legal, Juvenal, Introvertido, Calmo'),
	(7, 'Clone', 'Gamemaniaco, Legal, Juvenal, Introvertido, Calmo'),
	(8, 'Gemeo', ' Doutor, Calmo, Esforçado, Mestre, Professor');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
