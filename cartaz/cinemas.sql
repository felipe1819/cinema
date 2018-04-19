-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Abr-2018 às 01:00
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `ator`
--

INSERT INTO `ator` (`idelenco`, `nome`, `nacionalidade`, `nascimento`) VALUES
(1, 'jaja', 'japao', '2018-04-14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cep`
--

CREATE TABLE IF NOT EXISTS `cep` (
  `idendereco` int(11) NOT NULL,
  `rua` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idendereco`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cep`
--

INSERT INTO `cep` (`idendereco`, `rua`, `bairro`, `cidade`, `estado`) VALUES
(20765000, 'Av. Pastor Martin Luther King Junior', 'Del Castilho', 'Rio de Janeiro', 'Rio de Janeiro'),
(21230500, 'R. Itapera', 'Irajá', 'Rio de Janeiro', 'Rio de Janeiro'),
(21670900, 'Av. Brasil', 'Guadalupe', 'Rio de Janeiro', 'Rio de Janeiro'),
(22250040, 'Praia de Botafogo', 'Botafogo', 'Rio de Janeiro', 'Rio de Janeiro'),
(22640102, 'Av. das Américas', 'Barra da Tijuca', 'Rio de Janeiro', 'Rio de Janeiro'),
(22640904, 'Shopping Downtown', 'Av. das Américas', 'Rio de Janeiro', 'Rio de Janeiro'),
(22775040, 'Shopping Metropolitano Barra', 'Barra da Tijuca', 'Rio de Janeiro', 'Rio de Janeiro'),
(22790702, 'Américas Shopping', 'Av. das Américas', 'Recreio dos Bandeirantes', 'Rio de Janeiro'),
(25071202, 'Shopping Unigranrio', 'Duque de Caxias', 'Rio de Janeiro', 'Rio de Janeiro'),
(25085008, 'Rod. Washington Luíz ,2895', 'Parque Duque', 'Duque de Caxias ', 'Rio de Janeiro'),
(25575825, 'Shopping Grande Rio ', 'Parque Barreto', 'São João de Meriti', 'Rio de Janeiro');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `cinema`
--

INSERT INTO `cinema` (`idcinema`, `nome`, `lotacao`, `cep_idendereco`, `numero`, `complemento`) VALUES
(6, 'Caxias Shopping', '30', 25085008, '2895', 'Rod. Washington LuÃ­z'),
(7, 'Nova America', '30', 20765000, '126', 'Pastor Martin Luther King Junior'),
(8, 'Jardim Guadalupe', '30', 21670900, '22155', 'Av. Brasil'),
(9, 'Via Brasil', '30', 21230500, '500', 'Av. Brasil'),
(10, 'Barra Shopping', '35', 22640102, '4666', 'Av. das AmÃ©ricas'),
(11, 'Botafogo Praia Shopping', '32', 22250040, '400', 'Praia Shopping'),
(12, 'Shopping Metropolitano Barra', '30', 22775040, '1300', 'Barra da Tijuca'),
(13, 'AmÃ©ricas Shopping', '36', 22790702, '15500', 'Av. das AmÃ©ricas'),
(14, 'Shopping Grande Rio', '39', 25575825, '111', 'SÃ£o JoÃ£o de Meriti'),
(15, 'Shopping Downtown ', '40', 22640904, '500', 'Av. das AmÃ©ricas'),
(16, 'Shopping Unigranrio', '50', 25071202, '1216', 'Duque de Caxias');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `diretor`
--

INSERT INTO `diretor` (`iddiretor`, `nome`, `nacionalidade`, `nascimento`) VALUES
(1, 'jojo', 'china', '2018-04-04');

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
  `imagem` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idfilme`),
  KEY `fk_filme_ator1_idx` (`ator_idelenco`),
  KEY `fk_filme_diretor1_idx` (`diretor_iddiretor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`idfilme`, `titulo`, `duracao`, `genero`, `sinopse`, `classificacao`, `nacionalidade`, `ator_idelenco`, `diretor_iddiretor`, `imagem`) VALUES
(4, 'Com Amor, Simon', '140 minutos', 'Drama', 'O adolescente Simon Spier (Nick Robinson) estÃ¡ em pÃ¢nico. Ele Ã© homossexual e precisa tomar coragem para se assumir diante de seus colegas de classe. Isso porque um deles chantageia Simon, que vÃª o e-mail que escreveu para o crush cair em mÃ£os erradas.', '12 Anos', 'Estados Unidos', 1, 1, 'https://cinemobits.com.br/system/img/sinopses/cartazes/5669/ed1f596b8f6445a93754861ad4b2f457ca5cc409/original.jpg?1523331010_138'),
(5, 'Jogador nÂº 1', '140 minutos', 'Aventura', 'No ano de 2044, as pessoas se conectam a um mundo virtual chamado Oasis. Quando seu criador morre, as pessoas descobrem que ele deixou escondido uma sÃ©rie de pistas que levam a toda sua riqueza. Muitas pessoas tentaram sem sucesso, pois a dificuldade Ã© o fato das pistas serem baseadas na cultura pop do passado. Mas para o jovem Wade Watts (Tye Sheridan) isso Ã© vantagem.', '12 anos', 'Estados Unidos', 1, 1, 'https://cinemobits.com.br/system/img/sinopses/cartazes/5699/4dd130026bd0013ef9ab906e788e10bb724bb8a8/original.jpg?1522294216_138'),
(6, 'Nada A Perder', '140 minutos', 'Biografia', 'Cinebiografia conta a histÃ³ria do bispo Edir Macedo. Ele prega nas ruas e se torna uma ameaÃ§a, sendo preso em 1992. Ele Ã© o fundador da Igreja Universal do Reino de Deus. Trinta e cinco anos depois, sua igreja chega a alcanÃ§ar 200 paÃ­ses. Macedo tambÃ©m revela seu tino para o lado empresarial, se tornando dono da rede de televisÃ£o RecordTV.', '12 Anos', 'Brasileiro', 1, 1, 'https://cinemobits.com.br/system/img/sinopses/cartazes/5697/551729e9c8a6143d94d8058699dc42b03bdc1d8a/original.jpg?1522294216_138'),
(7, 'Os farofeiros', '99 Minutos', 'ComÃ©dia', 'Quatro famÃ­lias de classe mÃ©dia baixa desejam passar as fÃ©rias na praia. EntÃ£o elas juntam um dinheiro suado para alugar uma casa. No entanto, o pessoal entra numa grande cilada e as fÃ©rias caminham para irem por Ã¡gua abaixo ao descobrirem que a tal casa nÃ£o Ã© nada do que eles pensavam.', '12 Anos', 'Brasileiro', 1, 1, 'https://cinemobits.com.br/system/img/sinopses/cartazes/5639/7f734589ffba58854571fd64950a8028f7670a27/original.jpg?1519929013_138'),
(9, 'Pedro Coelho', '95 Minutos', 'AnimaÃ§Ã£o', 'Peter Rabbit tem a permissÃ£o de sua mÃ£e para passear pela floresta, mas o proÃ­be de entrar na casa do Sr. McGregor (Domhnall Gleeson). Mas, Peter Ã© muito travesso e nÃ£o resiste, indo lÃ¡ na ausÃªncia do dono da propriedade, deixando-o furioso.', 'Livre', 'Estados Unidos', 1, 1, 'https://cinemobits.com.br/system/img/sinopses/cartazes/5670/1bdf3e40511f51d3c896bf5d9cc50723b1289499/original.jpg?1521516619_138'),
(11, 'Pantera Negra', '134 Minutos', 'AÃ§Ã£o', 'T''Challa (Chadwick Boseman), prÃ­ncipe de Wakanda, perdeu o pai num ataque nos Estados Unidos. Ele buscou vinganÃ§a, se transformando no Pantera Negra e se tornando aliado do Homem de Ferro para enfrentar a equipe de CapitÃ£o AmÃ©rica na Guerra Civil. Agora, T''Challa retorna Ã  sua terra natal, quando precisa voltar a usar seu uniforme de Pantera Negra para enfrentar um antigo inimigo, que pode destruir Wakanda.', '14 Anos', 'Estados Unidos', 1, 1, 'https://cinemobits.com.br/system/img/sinopses/cartazes/5614/6e29ab98d78c1e934fa11ed5fcfb7df4b83e5c1b/original.jpg?1518665413_138'),
(12, 'Rampage - DestruiÃ§Ã£o Total', '107 Minutos', 'AÃ§Ã£o', 'O primatÃ³logo Davis Okoye (Dwayne Johnson) acompamnha o nascimento do gorila George e cria um forte laÃ§o com ele. No entanto, o primata Ã© capturado para um experimento, que o transforma num ser violento. Outros animais tambÃ©m foram usados no experimento. Agora, Okoye e uma engenheira genÃ©tica (Naomie Harris) tentam encontrar um antÃ­doto para reverter essa situaÃ§Ã£o e interromper a onda de destruiÃ§Ã£o causada pelos animais.', '12 Anos', 'Estados Unidos', 1, 1, 'https://cinemobits.com.br/system/img/sinopses/cartazes/5740/474fe45e7ade62c39dc1ba8915e0d2e3221f34cc/original.jpg?1523525410_138'),
(13, 'Um Lugar Silencioso', '95 Minutos', 'Terror', 'Um casal (interpretado por John Krasinski e Emily Blunt) tem dois filhos e eles vivem numa casa isolada. A famÃ­lia precisa se manter em silÃªncio total e se comunica por meio da linguagem de sinais. Ao menor sinal de barulho, uma ameaÃ§a que ronda a casa pode atacar.', '14 Anos', 'Estados Unidos', 1, 1, 'https://cinemobits.com.br/system/img/sinopses/cartazes/5720/de4051be4d14029fbfda26461d1dd15cb2b0d712/original.jpg?1522920618_138');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala/sessao`
--

CREATE TABLE IF NOT EXISTS `sala/sessao` (
  `idsala` int(11) NOT NULL AUTO_INCREMENT,
  `filme_idfilme` int(11) NOT NULL,
  `cinema_idcinema` int(11) NOT NULL,
  `hora_i_f` varchar(45) DEFAULT NULL COMMENT 'hora de inico e fim',
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
-- Limitadores para a tabela `sala/sessao`
--
ALTER TABLE `sala/sessao`
  ADD CONSTRAINT `fk_filme_has_cinema_cinema1` FOREIGN KEY (`cinema_idcinema`) REFERENCES `cinema` (`idcinema`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_filme_has_cinema_filme1` FOREIGN KEY (`filme_idfilme`) REFERENCES `filme` (`idfilme`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
