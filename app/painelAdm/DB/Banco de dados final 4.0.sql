-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para projetointegradorfinal
CREATE DATABASE IF NOT EXISTS `projetointegradorfinal` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `projetointegradorfinal`;

-- Copiando estrutura para tabela projetointegradorfinal.contato
CREATE TABLE IF NOT EXISTS `contato` (
  `id_contato` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mensagem` varchar(50) DEFAULT NULL,
  `datacriaçao` datetime DEFAULT CURRENT_TIMESTAMP,
  `dataatualizaçao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_contato`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.contato: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;

-- Copiando estrutura para tabela projetointegradorfinal.especialidades
CREATE TABLE IF NOT EXISTS `especialidades` (
  `id_espec` int(11) NOT NULL AUTO_INCREMENT,
  `especialidade` varchar(50) NOT NULL DEFAULT '0',
  `dataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_espec`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.especialidades: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `especialidades` DISABLE KEYS */;
REPLACE INTO `especialidades` (`id_espec`, `especialidade`, `dataCriacao`, `dataAtualizacao`) VALUES
	(17, 'Cardiologista', '2020-12-15 15:40:32', '2020-12-15 15:40:32'),
	(18, 'Psicologo', '2020-12-15 15:40:55', '2020-12-15 15:40:55'),
	(19, 'Dentista', '2020-12-15 15:41:20', '2020-12-15 15:41:20');
/*!40000 ALTER TABLE `especialidades` ENABLE KEYS */;

-- Copiando estrutura para tabela projetointegradorfinal.eventos
CREATE TABLE IF NOT EXISTS `eventos` (
  `id_eventos` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `start` varchar(50) DEFAULT NULL,
  `medico` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_eventos`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.eventos: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
REPLACE INTO `eventos` (`id_eventos`, `title`, `start`, `medico`) VALUES
	(13, '   Felipe da Silva', '2020-12-11', 'Dentista / Luiz Fernando Meneses');
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;

-- Copiando estrutura para tabela projetointegradorfinal.pacientes
CREATE TABLE IF NOT EXISTS `pacientes` (
  `id_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `rg` varchar(50) NOT NULL DEFAULT '0',
  `cpf` varchar(50) NOT NULL DEFAULT '0',
  `data1` varchar(50) DEFAULT NULL,
  `medico` varchar(50) DEFAULT NULL,
  `dataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_paciente`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.pacientes: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
REPLACE INTO `pacientes` (`id_paciente`, `nome`, `rg`, `cpf`, `data1`, `medico`, `dataCriacao`, `dataAtualizacao`) VALUES
	(50, 'Felipe da Silva', '3.124.324', '234.234.234-23', '2020-12-09', NULL, '2020-12-15 15:42:56', '2020-12-15 15:42:56');
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;

-- Copiando estrutura para tabela projetointegradorfinal.profissionais
CREATE TABLE IF NOT EXISTS `profissionais` (
  `id_profi` int(11) NOT NULL AUTO_INCREMENT,
  `nomemedico` varchar(50) NOT NULL DEFAULT '0',
  `rg` varchar(15) NOT NULL DEFAULT '0',
  `cpf` varchar(15) NOT NULL DEFAULT '0',
  `especialidade` varchar(50) DEFAULT NULL,
  `dataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_profi`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.profissionais: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `profissionais` DISABLE KEYS */;
REPLACE INTO `profissionais` (`id_profi`, `nomemedico`, `rg`, `cpf`, `especialidade`, `dataCriacao`, `dataAtualizacao`) VALUES
	(23, 'Luiz Fernando Meneses', '1.123.145', '132.121.236-35', 'Dentista', '2020-12-15 15:42:21', '2020-12-15 15:42:21');
/*!40000 ALTER TABLE `profissionais` ENABLE KEYS */;

-- Copiando estrutura para tabela projetointegradorfinal.recepcionistas
CREATE TABLE IF NOT EXISTS `recepcionistas` (
  `id_recep` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT '0',
  `senha` varchar(100) DEFAULT '0',
  `dataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_recep`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.recepcionistas: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `recepcionistas` DISABLE KEYS */;
REPLACE INTO `recepcionistas` (`id_recep`, `nome`, `senha`, `dataCriacao`, `dataAtualizacao`) VALUES
	(57, 'senac1', '$2y$10$Iky7tlQdS84MEx.Xp9NgSOcIYlDlJGy0kOc8a2pMQKCbroGL5dYfq', '2020-12-15 15:39:13', '2020-12-15 15:39:13');
/*!40000 ALTER TABLE `recepcionistas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
