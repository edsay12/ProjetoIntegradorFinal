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

-- Copiando estrutura para tabela projetointegradorfinal.especialidades
CREATE TABLE IF NOT EXISTS `especialidades` (
  `id_espec` int(11) NOT NULL AUTO_INCREMENT,
  `especialidade` varchar(50) NOT NULL DEFAULT '0',
  `dataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_espec`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.especialidades: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `especialidades` DISABLE KEYS */;
REPLACE INTO `especialidades` (`id_espec`, `especialidade`, `dataCriacao`, `dataAtualizacao`) VALUES
	(1, 'matador', '2020-12-09 17:09:22', '2020-12-09 17:09:22'),
	(2, 'matador', '2020-12-09 17:09:49', '2020-12-09 17:09:49'),
	(3, 'matador', '2020-12-09 17:12:00', '2020-12-09 17:12:00'),
	(4, 'cardiologista', '2020-12-09 17:13:45', '2020-12-09 17:13:45'),
	(5, 'psicologo', '2020-12-09 17:13:53', '2020-12-09 17:13:53'),
	(6, 'odontologia', '2020-12-10 13:52:15', '2020-12-10 13:52:15'),
	(7, 'professor regi', '2020-12-10 15:47:30', '2020-12-10 15:47:30');
/*!40000 ALTER TABLE `especialidades` ENABLE KEYS */;

-- Copiando estrutura para tabela projetointegradorfinal.pacientes
CREATE TABLE IF NOT EXISTS `pacientes` (
  `id_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `rg` varchar(50) NOT NULL DEFAULT '0',
  `cpf` varchar(50) NOT NULL DEFAULT '0',
  `medico` varchar(50) DEFAULT NULL,
  `dataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_paciente`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.pacientes: ~19 rows (aproximadamente)
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
REPLACE INTO `pacientes` (`id_paciente`, `nome`, `rg`, `cpf`, `medico`, `dataCriacao`, `dataAtualizacao`) VALUES
	(41, 'julian1', '4.444.442', '444.444.444-42', 'cardiologista / ASDASDA', '2020-12-09 16:35:23', '2020-12-10 16:29:48'),
	(42, 'edsay', '1.231.231', '312.312.312-31', 'cardiologista / ASDASDA', '2020-12-10 13:50:18', '2020-12-10 13:50:18'),
	(43, 'edsay', '1.231.231', '444.444.444-44', 'psicologo / luiioasda', '2020-12-10 13:51:35', '2020-12-10 13:51:35');
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.profissionais: ~18 rows (aproximadamente)
/*!40000 ALTER TABLE `profissionais` DISABLE KEYS */;
REPLACE INTO `profissionais` (`id_profi`, `nomemedico`, `rg`, `cpf`, `especialidade`, `dataCriacao`, `dataAtualizacao`) VALUES
	(18, 'ASDASDA', '1.231.231', '312.312.312-31', 'cardiologista', '2020-12-09 17:22:04', '2020-12-09 17:22:04'),
	(19, 'luiioasda', '1.231.231', '123.123.123-12', 'psicologo', '2020-12-09 17:22:24', '2020-12-09 17:22:24'),
	(20, 'professor', '1.111.111', '111.111.1', 'professor regi', '2020-12-10 15:47:46', '2020-12-10 15:47:46');
/*!40000 ALTER TABLE `profissionais` ENABLE KEYS */;

-- Copiando estrutura para tabela projetointegradorfinal.recepcionistas
CREATE TABLE IF NOT EXISTS `recepcionistas` (
  `id_recep` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT '0',
  `senha` varchar(50) DEFAULT '0',
  `dataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_recep`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.recepcionistas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `recepcionistas` DISABLE KEYS */;
/*!40000 ALTER TABLE `recepcionistas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
