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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.contato: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
REPLACE INTO `contato` (`id_contato`, `nome`, `email`, `mensagem`, `datacriaçao`, `dataatualizaçao`) VALUES
	(3, 'asdasdasd', 'asdasdasdas', 'dasdasdasdas', '2020-12-14 12:55:15', '2020-12-14 12:55:15');
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;

-- Copiando estrutura para tabela projetointegradorfinal.especialidades
CREATE TABLE IF NOT EXISTS `especialidades` (
  `id_espec` int(11) NOT NULL AUTO_INCREMENT,
  `especialidade` varchar(50) NOT NULL DEFAULT '0',
  `dataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_espec`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.especialidades: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `especialidades` DISABLE KEYS */;
REPLACE INTO `especialidades` (`id_espec`, `especialidade`, `dataCriacao`, `dataAtualizacao`) VALUES
	(1, 'matador', '2020-12-09 17:09:22', '2020-12-09 17:09:22'),
	(2, 'matador', '2020-12-09 17:09:49', '2020-12-09 17:09:49'),
	(3, 'matador', '2020-12-09 17:12:00', '2020-12-09 17:12:00'),
	(4, 'cardiologista', '2020-12-09 17:13:45', '2020-12-09 17:13:45'),
	(5, 'psicologo', '2020-12-09 17:13:53', '2020-12-09 17:13:53'),
	(6, 'odontologia', '2020-12-10 13:52:15', '2020-12-10 13:52:15'),
	(7, 'professor regi', '2020-12-10 15:47:30', '2020-12-10 15:47:30'),
	(8, 'dsfsdfs', '2020-12-12 21:08:39', '2020-12-12 21:08:39'),
	(9, 'dentista', '2020-12-11 16:42:21', '2020-12-11 16:42:21'),
	(10, 'dentista', '2020-12-11 16:42:34', '2020-12-11 16:42:34'),
	(11, 'dentista', '2020-12-11 16:43:14', '2020-12-11 16:43:14'),
	(12, 'doutor', '2020-12-11 16:43:53', '2020-12-11 16:43:53'),
	(13, 'doutor', '2020-12-11 16:43:59', '2020-12-11 16:43:59'),
	(14, 'doutor', '2020-12-11 16:57:18', '2020-12-11 16:57:18');
/*!40000 ALTER TABLE `especialidades` ENABLE KEYS */;

-- Copiando estrutura para tabela projetointegradorfinal.eventos
CREATE TABLE IF NOT EXISTS `eventos` (
  `id_eventos` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `start` varchar(50) DEFAULT NULL,
  `medico` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_eventos`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.eventos: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
REPLACE INTO `eventos` (`id_eventos`, `title`, `start`, `medico`) VALUES
	(6, '   42432423423', '2020-12-17', 'psicologo / luiioasda'),
	(7, '   julian', '2020-12-17', 'psicologo / luiioasda'),
	(8, '   aleide', '2020-12-16', 'professor regi / professor');
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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.pacientes: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
REPLACE INTO `pacientes` (`id_paciente`, `nome`, `rg`, `cpf`, `data1`, `medico`, `dataCriacao`, `dataAtualizacao`) VALUES
	(41, 'julian', '4.444.442', '444.444.444-42', NULL, 'professor regi / professor', '2020-12-09 16:35:23', '2020-12-11 13:09:03'),
	(42, 'edsay', '1.231.231', '312.312.312-31', NULL, 'cardiologista / ASDASDA', '2020-12-10 13:50:18', '2020-12-10 13:50:18'),
	(43, 'edsay', '1.231.231', '444.444.444-44', NULL, 'psicologo / luiioasda', '2020-12-10 13:51:35', '2020-12-10 13:51:35'),
	(44, '42432423423', '2.342.342', '342.342.3', '2020-12-22', 'psicologo / luiioasda', '2020-12-11 16:13:59', '2020-12-11 16:13:59'),
	(45, '42432423423', '2.342.342', '342.342.3', '2020-12-22', 'psicologo / luiioasda', '2020-12-11 16:16:52', '2020-12-11 16:16:52'),
	(46, '42432423423', '2.342.342', '342.342.3', '2020-12-22', 'psicologo / luiioasda', '2020-12-11 16:18:06', '2020-12-11 16:18:06'),
	(47, 'aleide', '6.756.765', '756.756.765-76', '2020-12-14', NULL, '2020-12-14 15:09:58', '2020-12-14 15:09:58');
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

-- Copiando dados para a tabela projetointegradorfinal.profissionais: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `profissionais` DISABLE KEYS */;
REPLACE INTO `profissionais` (`id_profi`, `nomemedico`, `rg`, `cpf`, `especialidade`, `dataCriacao`, `dataAtualizacao`) VALUES
	(18, 'ASDASDA1uuuuu', '1.231.231', '312.312.312-31', 'professor regi', '2020-12-09 17:22:04', '2020-12-11 14:43:47'),
	(19, 'luiioasda', '1.231.231', '123.123.123-12', 'psicologo', '2020-12-09 17:22:24', '2020-12-09 17:22:24'),
	(20, 'professor', '1.111.111', '111.111.1', 'professor regi', '2020-12-10 15:47:46', '2020-12-10 15:47:46');
/*!40000 ALTER TABLE `profissionais` ENABLE KEYS */;

-- Copiando estrutura para tabela projetointegradorfinal.recepcionistas
CREATE TABLE IF NOT EXISTS `recepcionistas` (
  `id_recep` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT '0',
  `senha` varchar(100) DEFAULT '0',
  `dataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_recep`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projetointegradorfinal.recepcionistas: ~46 rows (aproximadamente)
/*!40000 ALTER TABLE `recepcionistas` DISABLE KEYS */;
REPLACE INTO `recepcionistas` (`id_recep`, `nome`, `senha`, `dataCriacao`, `dataAtualizacao`) VALUES
	(1, '12121', '21212121', '2020-12-11 13:36:10', '2020-12-11 13:36:10'),
	(2, 'lucia', '123456', '2020-12-11 13:50:38', '2020-12-11 13:50:38'),
	(3, 'lucia', '121231', '2020-12-11 13:51:08', '2020-12-11 13:51:08'),
	(4, 'lucian tenorio', '123456', '2020-12-11 13:57:29', '2020-12-11 13:57:29'),
	(5, 'ÇLUIASD', '121312412312ASDA', '2020-12-11 14:38:22', '2020-12-11 14:38:22'),
	(6, 'luiz', '123456', '2020-12-11 16:40:13', '2020-12-11 16:40:13'),
	(7, 'luiz', '123456', '2020-12-11 16:40:21', '2020-12-11 16:40:21'),
	(8, 'edsay', '123456', '2020-12-14 14:23:20', '2020-12-14 14:23:20'),
	(9, 'edvan', '$2y$10$bxNhpf.rEx59o5PBY4/9E.TDeoS0GZRkN2TwzlJd4k4ti6NPOug12', '2020-12-14 14:28:23', '2020-12-14 14:28:23'),
	(10, '', '$2y$10$8UbryyvCyE0zsf0tmIMHzu1Rq3WYxR27rfStqkSKjgSiAqBNY2O4q', '2020-12-14 14:28:30', '2020-12-14 14:28:30'),
	(11, '', '$2y$10$FBYp1Ryde7eJUfNV/.7HaecltbSypObUUOIXrrp3ece0DKTed4/R6', '2020-12-14 14:29:49', '2020-12-14 14:29:49'),
	(12, 'edvan1', '$2y$10$FVDQ7QgG2GVAeRp/jjZmYeD94wFRZDvk/6.yR.KKTXeUSzg4d0ZMe', '2020-12-14 14:31:28', '2020-12-14 14:31:28'),
	(13, '', '$2y$10$.Ji3lQ4WRyDUFlgeQa0c8.pgf7QGkv9GpJSbQc4juQii8KcZ68Q.q', '2020-12-14 14:31:33', '2020-12-14 14:31:33'),
	(14, 'edvan1', '$2y$10$zJKKhgf7q5AlEuFSkc98tee5iR3xvMuQT2FHaAcRfJ0ptsSHGCsaC', '2020-12-14 14:32:16', '2020-12-14 14:32:16'),
	(15, '', '$2y$10$i7sTY7ylrWM4mEs/ClB/Te5Ls3JKBrltTdJEyCkl9NT1teUQ29a4C', '2020-12-14 14:35:45', '2020-12-14 14:35:45'),
	(16, 'edsay12', '$2y$10$5PEoRX9f/L7TPf5wlNaYUeyriY6R4fI4XnzKx8DtnWog1m4z6aUNm', '2020-12-14 14:49:04', '2020-12-14 14:49:04'),
	(17, 'luizz', '$2y$10$n9hMhq4ohFc4ZRpMU.uTnuAV8m/ORsbwVuJ.955F7ULhslSD1ELce', '2020-12-14 14:50:27', '2020-12-14 14:50:27'),
	(18, 'edsay123', '$2y$10$sz537UZsnHVRosJwo39F9esBPBUBO05VYp7PUNcg3srIyQQLb2qHC', '2020-12-14 14:52:27', '2020-12-14 14:52:27'),
	(19, 'edvanlindo', '$2y$10$gaMLMERq.5DuvXY2GcZhoeNBjHJ3nAmXdC7/hbc0I2Q9tUslGq1G6', '2020-12-14 14:53:48', '2020-12-14 14:53:48'),
	(20, '', '$2y$10$yXcHJZMEndqTlZIZkNK9g.y67JwxIQcT9z34m5CQVqOEQSi0e38xi', '2020-12-14 14:53:55', '2020-12-14 14:53:55'),
	(21, 'aleide', '$2y$10$COXkh5xTIckPzQauBKO6HOHqiB7eMiJLBFbRtaVhsTvm.VQ7MNXyu', '2020-12-14 15:07:25', '2020-12-14 15:07:25'),
	(22, 'aleide', '$2y$10$S4TipJ8AJ/WF7wDDUqAoteWdmN6ordJop3I64/XyjtxnNnQ87mUSq', '2020-12-14 15:07:33', '2020-12-14 15:07:33'),
	(23, 'edvanlindo', '$2y$10$PEDGNZEF9yeW85Bp0Tr/t.e8cPQddWl2Wlza3NZ9Axt56W/AwawgW', '2020-12-14 15:07:53', '2020-12-14 15:07:53'),
	(24, 'aleide2', '$2y$10$UgSPcWa9WNDJ3JdEbk.CV.ZgRdNcTfq.EBjuO.IYZYYVSwchRzoPq', '2020-12-14 15:15:59', '2020-12-14 15:15:59'),
	(25, 'edvan551', '$2y$10$nNDUF8Tiqd9kZeDf5aB2M.sZiaku9GtqVdKZLlVmCdO.mgeUqtnma', '2020-12-14 15:16:15', '2020-12-14 15:16:15'),
	(26, 'edvan1', '$2y$10$l0/nou6rIQlffZEzxV9mYus5zlcmVk6cAElzSxZiOXZxrYEJ9TEXC', '2020-12-14 15:16:21', '2020-12-14 15:16:21'),
	(27, 'edvan2', '$2y$10$TNZ35s7cYXKgm3xLLHZMseZ0dP8h0rKGRB7YB7mSTuqFJ0ZEuiSaq', '2020-12-14 15:16:35', '2020-12-14 15:16:35'),
	(28, 'edvan1', '$2y$10$x1wHKoI1.jYuVrNdvFndCONWmd9Bgmdn2PVBJvGJh7b0KXOoz.Nu.', '2020-12-14 15:16:53', '2020-12-14 15:16:53'),
	(29, 'gato', '$2y$10$Js0ffhj.h/DB.HaOSGVEOO3mSinB8AwRMjFOtz9AEzx.f3ZX5CfsO', '2020-12-14 15:18:00', '2020-12-14 15:18:00'),
	(30, 'gato', '$2y$10$KOpaCqdvTgu1arrv.EqE..G6JQWu5ZnxV2GfbB3dpEYsIYn/UrLtC', '2020-12-14 15:18:12', '2020-12-14 15:18:12'),
	(31, 'dog', '$2y$10$KPcT52AXe5bHu475IcuTIO/UsWoDax2jgRX9VAra8kq31r1MtKVV2', '2020-12-14 15:21:59', '2020-12-14 15:21:59'),
	(32, 'regi', '$2y$10$4AQox08LRBtjDgXWZQA/6emw8V4.eHW/MxYZnPy.f.QLPSgzQA4Li', '2020-12-14 15:27:16', '2020-12-14 15:27:16'),
	(33, 'regi2', '$2y$10$p9qcXGyIu/5OtG2AJthxv.Wiaalu3wIeVon8MIUUHopwef/yWifja', '2020-12-14 15:35:09', '2020-12-14 15:35:09'),
	(34, 'regi2', '$2y$10$.RdS3iO6Y3JDhtXVNKDaj.8kGSt1BdY8cDoBaWJAXRR4c8kRL4Hh6', '2020-12-14 15:36:37', '2020-12-14 15:36:37'),
	(35, 'regi3', '$2y$10$CMoPYMpiF3TWRx28FmQCJ.MlQBi7V4OXZYYDReu5//V7QUTckmGaa', '2020-12-14 15:37:26', '2020-12-14 15:37:26'),
	(36, 'regi4', '$2y$10$.sdIdafUWz5GnE7uwGvtnuArm/CrrqjlIMh8eXJkDWptCgCbvuvti', '2020-12-14 15:41:16', '2020-12-14 15:41:16'),
	(37, 'regi5', '$2y$10$imRY3ID76NypgIMhzNkdN.tFfx8iJisiRqVeGegc9VWxRCJviltxG', '2020-12-14 15:41:42', '2020-12-14 15:41:42'),
	(38, 'regi6', '$2y$10$IXrJBhLcrJkRdzyz7uO7g.iVQB8f7m1vBaiQfuhRw/lekzoBmlRYK', '2020-12-14 15:44:08', '2020-12-14 15:44:08'),
	(39, 'regi7', '$2y$10$J1Ip0TZATaNPud6YIWDTJ.wfw7TiGJorBnHTUvjZOoH6uZGC3Pgly', '2020-12-14 15:45:37', '2020-12-14 15:45:37'),
	(40, 'regi8', '$2y$10$wM9fztTm6HDQb8i5wVw89.cgkURyNvK.GJeSLGykH6EAQXw/q6mXy', '2020-12-14 15:53:07', '2020-12-14 15:53:07'),
	(41, 'regi9', '$2y$10$eh4ujCtvzna3kk63eswDw.pNNgIe8aXVe0vIb8OrL0f3WGHlCey22', '2020-12-14 16:00:22', '2020-12-14 16:00:22'),
	(42, 'regi10', '$2y$10$3Itlq1OwaTlbfQzZfKCQluVPdNjGhG5ifIhHEImKkQKRoj9CNJd02', '2020-12-14 16:03:23', '2020-12-14 16:03:23'),
	(43, 'regi12', '$2y$10$ygk23iKcoAwsbBsCUBWZW.55rpXsWbuLOC3E.OianZgFYZW/cSEB.', '2020-12-14 16:12:15', '2020-12-14 16:12:15'),
	(44, 'regi13', '$2y$10$0xFpj2AH226TkPlinQfr7eiRx/k0hQFsrWuvdxowj4WBge3AdkALK', '2020-12-14 16:15:16', '2020-12-14 16:15:16'),
	(45, 'regi12', '$2y$10$OcGfzoqldtLgvNrGeN.zJ.05KCy5H2FwtfGYZKenmg7Kv37RDHGTe', '2020-12-14 16:16:00', '2020-12-14 16:16:00'),
	(46, 'edvanref', '$2y$10$zpdn/v5HtP3PX2aSVSBDCe54MdGxamV/vwfoaUB6exwC02xMN60SG', '2020-12-14 16:16:24', '2020-12-14 16:16:24');
/*!40000 ALTER TABLE `recepcionistas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
