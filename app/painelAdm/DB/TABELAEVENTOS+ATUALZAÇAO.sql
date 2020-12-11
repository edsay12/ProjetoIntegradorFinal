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

-- Copiando estrutura para tabela projetointegradorfinal.especialidades
CREATE TABLE IF NOT EXISTS `especialidades` (
  `id_espec` int(11) NOT NULL AUTO_INCREMENT,
  `especialidade` varchar(50) NOT NULL DEFAULT '0',
  `dataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_espec`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.especialidades: ~7 rows (aproximadamente)
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
	('ivalo', '2020-12-01'),
	('luiz fernando', '2020-12-02'),
	('tudo', '2020-12-20');
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
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.pacientes: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
REPLACE INTO `pacientes` (`id_paciente`, `nome`, `rg`, `cpf`, `data1`, `medico`, `dataCriacao`, `dataAtualizacao`) VALUES
	(58, 'Edvan Da Silva Araujo2', '3.242.34', '134.898.074-56', '2020-12-16', 'fonoaldiologo / lucia de alencar silva', '2020-12-10 22:33:30', '2020-12-10 22:33:30'),
	(59, 'Edvan Da Silva Araujo2', '3.242.34', '134.898.074-56', '2020-12-08', 'fonoaldiologo / lucia de alencar silva', '2020-12-10 22:44:07', '2020-12-10 22:44:07'),
	(60, '3123123123', '1.231.2', '123.123.123-1', '', 'cardiologista / Edvan Da Silva Araujo', '2020-12-11 07:37:59', '2020-12-11 07:40:30'),
	(61, 'Edvan Da Silva Araujo', '1.231.231', '312.312.31', '', 'cardiologista / lucia de alencar silva araujo', '2020-12-11 07:44:02', '2020-12-11 07:44:02'),
	(62, 'joao vitor farias', '1.231.2', '312.312.3', '', 'cardiologista / lucia de alencar silva araujo', '2020-12-11 07:44:13', '2020-12-11 07:44:27');
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.profissionais: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `profissionais` DISABLE KEYS */;
REPLACE INTO `profissionais` (`id_profi`, `nomemedico`, `rg`, `cpf`, `especialidade`, `dataCriacao`, `dataAtualizacao`) VALUES
	(23, 'lucia de alencar silva araujo', '1.088.989', '231.321.321-32', 'cardiologista', '2020-12-09 20:53:11', '2020-12-11 07:31:06'),
	(24, 'Edvan Da Silva Araujo', '2.123.123', '123.123.123-1', 'cardiologista', '2020-12-10 18:55:27', '2020-12-10 18:55:27'),
	(25, 'severino de lima abreu', '1.231.321', '231.321.231-23', 'matador', '2020-12-11 07:34:00', '2020-12-11 07:42:08');
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
