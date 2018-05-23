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


-- Copiando estrutura do banco de dados para 00teste
CREATE DATABASE IF NOT EXISTS `00teste` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `00teste`;

-- Copiando estrutura para função 00teste.CONTAR
DELIMITER //
CREATE DEFINER=`root`@`localhost` FUNCTION `CONTAR`(`nome` VARCHAR(100)) RETURNS int(10)
BEGIN 
  	DECLARE qt INT(10);
  	SET qt = LENGTH(nome); 
  	RETURN qt;
  END//
DELIMITER ;

-- Copiando estrutura para tabela 00teste.faixas
CREATE TABLE IF NOT EXISTS `faixas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 00teste.faixas: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `faixas` DISABLE KEYS */;
INSERT INTO `faixas` (`id`, `titulo`) VALUES
	(1, '0 - 1000'),
	(2, '1001 - 5000'),
	(3, '5001 - 30000'),
	(4, '30001 - 100000');
/*!40000 ALTER TABLE `faixas` ENABLE KEYS */;

-- Copiando estrutura para função 00teste.SOMAR
DELIMITER //
CREATE DEFINER=`root`@`localhost` FUNCTION `SOMAR`(x INT(10), y INT(10)) RETURNS int(10)
BEGIN
 DECLARE r INT(10);
 SET r = x+y;
 return r;
END//
DELIMITER ;

-- Copiando estrutura para view 00teste.usuariosprimeirafaixa
-- Criando tabela temporária para evitar erros de dependência de VIEW
CREATE TABLE `usuariosprimeirafaixa` (
	`id` INT(10) NOT NULL,
	`faixa_salarial` TINYINT(1) NOT NULL,
	`nome` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`email` VARCHAR(30) NOT NULL COLLATE 'latin1_swedish_ci',
	`senha` VARCHAR(10) NOT NULL COLLATE 'latin1_swedish_ci',
	`data_nascimento` DATE NULL
) ENGINE=MyISAM;

-- Copiando estrutura para tabela 00teste.usuarios_aula01
CREATE TABLE IF NOT EXISTS `usuarios_aula01` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `faixa_salarial` tinyint(1) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela 00teste.usuarios_aula01: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios_aula01` DISABLE KEYS */;
INSERT INTO `usuarios_aula01` (`id`, `faixa_salarial`, `nome`, `email`, `senha`, `data_nascimento`) VALUES
	(1, 1, 'William Rolim De Santana', 'williamrolimads@gmail.com', '999', '2018-05-01'),
	(2, 1, 'Amanda Nogueira', 'amandinha@gmail.com', '123456', '2018-05-06'),
	(4, 4, 'fulano berreta', 'Cicrano@gmail.com', '4i93894', '2010-10-21'),
	(6, 6, 'Joema', 'brasileira@gmail.com', '1@23', '1983-03-12'),
	(7, 7, 'Joana Dark', 'joana@yahoo.com', 'bolinha', '1949-12-11'),
	(8, 10, 'Ghost', 'ghost@hotmail.com', 'you', '1999-10-06');
/*!40000 ALTER TABLE `usuarios_aula01` ENABLE KEYS */;

-- Copiando estrutura para view 00teste.usuariosprimeirafaixa
-- Removendo tabela temporária e criando a estrutura VIEW final
DROP TABLE IF EXISTS `usuariosprimeirafaixa`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usuariosprimeirafaixa` AS SELECT * FROM usuarios_aula01 WHERE faixa_salarial = '1' ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
