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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.especialidades: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `especialidades` DISABLE KEYS */;
/*!40000 ALTER TABLE `especialidades` ENABLE KEYS */;

-- Copiando estrutura para tabela projetointegradorfinal.pacientes
CREATE TABLE IF NOT EXISTS `pacientes` (
  `id_paciente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `rg` varchar(50) NOT NULL DEFAULT '0',
  `cpf` varchar(50) NOT NULL DEFAULT '0',
  `dataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_paciente`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.pacientes: ~23 rows (aproximadamente)
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
REPLACE INTO `pacientes` (`id_paciente`, `nome`, `rg`, `cpf`, `dataCriacao`, `dataAtualizacao`) VALUES
	(1, '', '', '', '2020-12-09 14:45:48', '2020-12-09 14:45:48'),
	(24, 'edsay', '1.111.111', '111.111.111-11', '2020-12-09 16:23:35', '2020-12-09 16:23:35'),
	(25, 'edsay', '1.111.111', '111.111.111-11', '2020-12-09 16:27:20', '2020-12-09 16:27:20'),
	(26, 'edsay', '1.111.111', '111.111.111-11', '2020-12-09 16:27:36', '2020-12-09 16:27:36'),
	(27, 'edsay', '1.111.111', '111.111.111-11', '2020-12-09 16:27:48', '2020-12-09 16:27:48'),
	(28, 'edsay', '1.111.111', '111.111.111-11', '2020-12-09 16:28:18', '2020-12-09 16:28:18'),
	(29, 'edsay', '1.111.111', '111.111.111-11', '2020-12-09 16:28:33', '2020-12-09 16:28:33'),
	(30, 'edsay', '1.111.111', '111.111.111-11', '2020-12-09 16:29:19', '2020-12-09 16:29:19'),
	(31, 'edsay', '1.111.111', '111.111.111-11', '2020-12-09 16:29:29', '2020-12-09 16:29:29'),
	(32, 'edsay', '1.111.111', '111.111.111-11', '2020-12-09 16:30:03', '2020-12-09 16:30:03'),
	(33, 'joaquin', '7.784.548', '549.519.519-51', '2020-12-09 16:30:17', '2020-12-09 16:30:17'),
	(34, 'asdasda', '1.213.123', '123.123.123-12', '2020-12-09 16:30:31', '2020-12-09 16:30:31'),
	(35, 'asdasda', '1.213.123', '123.123.123-12', '2020-12-09 16:30:54', '2020-12-09 16:30:54'),
	(36, 'd', '1.213.123', '231.231.231-23', '2020-12-09 16:31:27', '2020-12-09 16:31:27'),
	(37, 'd', '1.213.123', '231.231.231-23', '2020-12-09 16:31:56', '2020-12-09 16:31:56'),
	(38, 'd', '1.213.123', '231.231.231-23', '2020-12-09 16:32:25', '2020-12-09 16:32:25'),
	(39, 'd', '1.213.123', '231.231.231-23', '2020-12-09 16:33:06', '2020-12-09 16:33:06'),
	(40, 'd', '1.213.123', '231.231.231-23', '2020-12-09 16:33:23', '2020-12-09 16:33:23'),
	(41, 'evan123', '1.231.231', '312.312.312-31', '2020-12-09 16:35:23', '2020-12-09 16:35:23');
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;

-- Copiando estrutura para tabela projetointegradorfinal.profissionais
CREATE TABLE IF NOT EXISTS `profissionais` (
  `id_profi` int(11) NOT NULL AUTO_INCREMENT,
  `nomemedico` varchar(50) NOT NULL DEFAULT '0',
  `rg` varchar(15) NOT NULL DEFAULT '0',
  `cpf` varchar(15) NOT NULL DEFAULT '0',
  `espec` varchar(50) DEFAULT NULL,
  `dataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_profi`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.profissionais: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `profissionais` DISABLE KEYS */;
REPLACE INTO `profissionais` (`id_profi`, `nomemedico`, `rg`, `cpf`, `espec`, `dataCriacao`, `dataAtualizacao`) VALUES
	(2, '21312', '1.231.231', '123.123.1', NULL, '2020-12-09 15:44:33', '2020-12-09 15:44:33'),
	(3, '21312', '1.231.231', '123.123.1', NULL, '2020-12-09 15:47:00', '2020-12-09 15:47:00'),
	(4, '12312312', '3.123.123', '123.123.123-1', NULL, '2020-12-09 15:47:12', '2020-12-09 15:47:12'),
	(5, 'edsay', '4.444.444', '444.444.444-44', NULL, '2020-12-09 15:56:08', '2020-12-09 15:56:08'),
	(6, 'edsay', '4.444.444', '444.444.444-44', NULL, '2020-12-09 15:57:20', '2020-12-09 15:57:20'),
	(7, 'edsay', '1.111.111', '111.111.111-11', NULL, '2020-12-09 16:05:17', '2020-12-09 16:05:17'),
	(8, '12312312', '1.231.231', '123.123.123-13', NULL, '2020-12-09 16:11:16', '2020-12-09 16:11:16'),
	(9, '12312312', '1.231.231', '123.123.123-13', NULL, '2020-12-09 16:12:04', '2020-12-09 16:12:04'),
	(10, '12312312', '1.231.231', '123.123.123-1', NULL, '2020-12-09 16:12:15', '2020-12-09 16:12:15'),
	(11, '', '1.111.111', '111.111.111-11', NULL, '2020-12-09 16:19:35', '2020-12-09 16:19:35'),
	(12, '', '1.111.111', '111.111.111-11', NULL, '2020-12-09 16:20:42', '2020-12-09 16:20:42'),
	(13, '', '1.111.111', '111.111.111-11', NULL, '2020-12-09 16:21:21', '2020-12-09 16:21:21');
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
