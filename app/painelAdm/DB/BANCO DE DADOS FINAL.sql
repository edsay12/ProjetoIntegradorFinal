-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
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
  PRIMARY KEY (`id_contato`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.contato: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
REPLACE INTO `contato` (`id_contato`, `nome`, `email`, `mensagem`) VALUES
	(2, 'asdasd', 'asdasdasd', 'asdasdasda'),
	(3, 'asdasdasd', 'asdasdasdas', 'dasdasdasdas');
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;

-- Copiando estrutura para tabela projetointegradorfinal.especialidades
CREATE TABLE IF NOT EXISTS `especialidades` (
  `id_espec` int(11) NOT NULL AUTO_INCREMENT,
  `especialidade` varchar(50) NOT NULL DEFAULT '0',
  `dataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_espec`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.especialidades: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `especialidades` DISABLE KEYS */;
REPLACE INTO `especialidades` (`id_espec`, `especialidade`, `dataCriacao`, `dataAtualizacao`) VALUES
	(5, 'psicologo', '2020-12-09 17:13:53', '2020-12-09 17:13:53'),
	(6, 'odontologia', '2020-12-10 13:52:15', '2020-12-10 13:52:15'),
	(7, 'professor regi', '2020-12-10 15:47:30', '2020-12-10 15:47:30');
/*!40000 ALTER TABLE `especialidades` ENABLE KEYS */;

-- Copiando estrutura para tabela projetointegradorfinal.eventos
CREATE TABLE IF NOT EXISTS `eventos` (
  `title` varchar(50) DEFAULT NULL,
  `start` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.eventos: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
REPLACE INTO `eventos` (`title`, `start`) VALUES
	('Edvan ', '2020-12-31'),
	('lucia de alencar silva', '2020-12-22'),
	('   3123123123', '2020-12-23'),
	('   Edvan Da Silva Araujo', '2020-12-06'),
	('   Edvan Da Silva Araujo2', '2020-12-16');
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;

-- Copiando estrutura para tabela projetointegradorfinal.pacientes
CREATE TABLE IF NOT EXISTS `pacientes` (
  `id_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `rg` varchar(50) NOT NULL DEFAULT '0',
  `cpf` varchar(50) NOT NULL DEFAULT '0',
  `data1` varchar(50) NOT NULL DEFAULT '0',
  `medico` varchar(50) DEFAULT NULL,
  `dataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_paciente`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.pacientes: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
REPLACE INTO `pacientes` (`id_paciente`, `nome`, `rg`, `cpf`, `data1`, `medico`, `dataCriacao`, `dataAtualizacao`) VALUES
	(58, 'Edvan Da Silva Araujo2', '3.242.34', '134.898.074-56', '2020-12-16', 'fonoaldiologo / lucia de alencar silva', '2020-12-10 22:33:30', '2020-12-10 22:33:30'),
	(61, 'Edvan Da Silva Araujo', '1.231.231', '312.312.31', '', 'cardiologista / lucia de alencar silva araujo', '2020-12-11 07:44:02', '2020-12-11 07:44:02');
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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.profissionais: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `profissionais` DISABLE KEYS */;
REPLACE INTO `profissionais` (`id_profi`, `nomemedico`, `rg`, `cpf`, `especialidade`, `dataCriacao`, `dataAtualizacao`) VALUES
	(26, 'rodrigo lima dos santos', '1.231.231', '312.312.312-31', 'jujutsu', '2020-12-11 21:50:04', '2020-12-11 21:50:04');
/*!40000 ALTER TABLE `profissionais` ENABLE KEYS */;

-- Copiando estrutura para tabela projetointegradorfinal.recepcionistas
CREATE TABLE IF NOT EXISTS `recepcionistas` (
  `id_recep` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT '0',
  `senha` varchar(50) DEFAULT '0',
  `dataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_recep`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.recepcionistas: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `recepcionistas` DISABLE KEYS */;
REPLACE INTO `recepcionistas` (`id_recep`, `nome`, `senha`, `dataCriacao`, `dataAtualizacao`) VALUES
	(1, 'juliana abreu', '123456', '2020-12-11 20:55:26', '2020-12-11 20:55:26');
/*!40000 ALTER TABLE `recepcionistas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
