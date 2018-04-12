-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Abr-2018 às 00:35
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cinemas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ator`
--

CREATE TABLE IF NOT EXISTS `ator` (
  `idelenco` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `nacionalidade` varchar(20) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  PRIMARY KEY (`idelenco`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cep`
--

CREATE TABLE IF NOT EXISTS `cep` (
  `idendereco` int(11) NOT NULL AUTO_INCREMENT,
  `rua` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idendereco`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cinema`
--

CREATE TABLE IF NOT EXISTS `cinema` (
  `idcinema` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `lotacao` varchar(45) DEFAULT NULL,
  `cep_idendereco` int(11) NOT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcinema`),
  KEY `fk_cinema_cep_idx` (`cep_idendereco`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `diretor`
--

CREATE TABLE IF NOT EXISTS `diretor` (
  `iddiretor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `nacionalidade` varchar(20) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  PRIMARY KEY (`iddiretor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE IF NOT EXISTS `filme` (
  `idfilme` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) DEFAULT NULL,
  `duracao` varchar(45) DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `sinopse` varchar(1000) DEFAULT NULL,
  `classificacao` varchar(45) DEFAULT NULL,
  `nacionalidade` varchar(45) DEFAULT NULL,
  `ator_idelenco` int(11) NOT NULL,
  `diretor_iddiretor` int(11) NOT NULL,
  PRIMARY KEY (`idfilme`),
  KEY `fk_filme_ator1_idx` (`ator_idelenco`),
  KEY `fk_filme_diretor1_idx` (`diretor_iddiretor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala`
--

CREATE TABLE IF NOT EXISTS `sala` (
  `idsala` int(11) NOT NULL AUTO_INCREMENT,
  `filme_idfilme` int(11) NOT NULL,
  `cinema_idcinema` int(11) NOT NULL,
  `numero` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idsala`,`filme_idfilme`,`cinema_idcinema`),
  KEY `fk_filme_has_cinema_cinema1_idx` (`cinema_idcinema`),
  KEY `fk_filme_has_cinema_filme1_idx` (`filme_idfilme`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cinema`
--
ALTER TABLE `cinema`
  ADD CONSTRAINT `fk_cinema_cep` FOREIGN KEY (`cep_idendereco`) REFERENCES `cep` (`idendereco`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `filme`
--
ALTER TABLE `filme`
  ADD CONSTRAINT `fk_filme_ator1` FOREIGN KEY (`ator_idelenco`) REFERENCES `ator` (`idelenco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_filme_diretor1` FOREIGN KEY (`diretor_iddiretor`) REFERENCES `diretor` (`iddiretor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `sala`
--
ALTER TABLE `sala`
  ADD CONSTRAINT `fk_filme_has_cinema_filme1` FOREIGN KEY (`filme_idfilme`) REFERENCES `filme` (`idfilme`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_filme_has_cinema_cinema1` FOREIGN KEY (`cinema_idcinema`) REFERENCES `cinema` (`idcinema`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
