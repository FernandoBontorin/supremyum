-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.28
-- Versão do PHP: 5.3.18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aldeias`
--

CREATE TABLE IF NOT EXISTS `aldeias` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `dono` varchar(80) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `clan` text NOT NULL,
  `povo` int(15) NOT NULL,
  `pop` int(10) unsigned NOT NULL DEFAULT '5',
  `popdisponivel` varchar(50) NOT NULL DEFAULT '5',
  `pontosdeprevisao` int(10) unsigned NOT NULL,
  `madeira` float(12,5) NOT NULL DEFAULT '500.00000',
  `ouro` float(12,5) NOT NULL DEFAULT '500.00000',
  `ferro` float(12,5) NOT NULL DEFAULT '500.00000',
  `comida` float(12,5) NOT NULL DEFAULT '700.00000',
  `capacidade` int(10) unsigned NOT NULL DEFAULT '1000',
  `capacidadecomida` int(10) NOT NULL DEFAULT '1100',
  `lealdade` int(6) unsigned NOT NULL DEFAULT '100',
  `x` int(10) NOT NULL,
  `y` int(11) NOT NULL,
  `nivelfundacao` int(11) NOT NULL DEFAULT '1',
  `nivelmadeira` int(11) NOT NULL DEFAULT '1',
  `madeirahora` int(11) NOT NULL,
  `ourohora` int(11) NOT NULL,
  `ferrohora` int(11) NOT NULL,
  `comidahora` int(11) NOT NULL,
  `nivelouro` int(11) NOT NULL DEFAULT '1',
  `nivelferro` int(11) NOT NULL DEFAULT '1',
  `nivelcomida` int(11) NOT NULL DEFAULT '1',
  `xy` text NOT NULL,
  `reg` int(5) NOT NULL,
  `eda` varchar(50) NOT NULL DEFAULT '0',
  `edb` varchar(50) NOT NULL DEFAULT '0',
  `edc` varchar(50) NOT NULL DEFAULT '0',
  `edd` varchar(50) NOT NULL DEFAULT '0',
  `ede` varchar(50) NOT NULL DEFAULT '0',
  `edf` varchar(50) NOT NULL DEFAULT '0',
  `edg` varchar(50) NOT NULL DEFAULT '0',
  `edh` varchar(50) NOT NULL DEFAULT 'ed1',
  `edi` varchar(50) NOT NULL DEFAULT '0',
  `edj` varchar(50) NOT NULL DEFAULT '0',
  `edk` varchar(50) NOT NULL DEFAULT '0',
  `edl` varchar(50) NOT NULL DEFAULT '0',
  `edm` varchar(50) NOT NULL DEFAULT '0',
  `edn` varchar(50) NOT NULL DEFAULT '0',
  `edo` varchar(50) NOT NULL DEFAULT '0',
  `edp` varchar(50) NOT NULL DEFAULT '0',
  `edq` varchar(50) NOT NULL DEFAULT '0',
  `edr` varchar(50) NOT NULL DEFAULT '0',
  `eds` varchar(50) NOT NULL DEFAULT '0',
  `edt` varchar(50) NOT NULL DEFAULT '0',
  `madeiratempodestino` varchar(99) NOT NULL DEFAULT '0',
  `madeiratrabalhadores` varchar(9999) NOT NULL DEFAULT '0',
  `ourotempodestino` varchar(99) NOT NULL DEFAULT '0',
  `ourotrabalhadores` varchar(9999) NOT NULL DEFAULT '0',
  `ferrotempodestino` varchar(99) NOT NULL DEFAULT '0',
  `ferrotrabalhadores` varchar(9999) NOT NULL DEFAULT '0',
  `comidatempodestino` varchar(99) NOT NULL DEFAULT '0',
  `comidatrabalhadores` varchar(9999) NOT NULL DEFAULT '0',
  `edanv` varchar(50) NOT NULL DEFAULT '0',
  `edbnv` varchar(50) NOT NULL DEFAULT '0',
  `edcnv` varchar(50) NOT NULL DEFAULT '0',
  `galpaonv` varchar(50) NOT NULL DEFAULT '0',
  `galpaotempodestino` varchar(999) NOT NULL DEFAULT '0',
  `galpaotrabalhadores` varchar(999) NOT NULL DEFAULT '0',
  `edenv` varchar(50) NOT NULL DEFAULT '0',
  `edfnv` varchar(50) NOT NULL DEFAULT '0',
  `edgnv` varchar(50) NOT NULL DEFAULT '0',
  `edcentralnv` int(11) NOT NULL DEFAULT '1',
  `edcentraltempodestino` varchar(99) NOT NULL DEFAULT '0',
  `edcentraltrabalhadores` varchar(9999) NOT NULL DEFAULT '0',
  `armazemnv` varchar(50) NOT NULL DEFAULT '0',
  `armazemtempodestino` varchar(50) NOT NULL DEFAULT '0',
  `armazemtrabalhadores` varchar(50) NOT NULL DEFAULT '0',
  `edjnv` varchar(50) NOT NULL DEFAULT '0',
  `edknv` varchar(50) NOT NULL DEFAULT '0',
  `quartelnv` varchar(50) NOT NULL DEFAULT '0',
  `quarteltempodestino` varchar(99) NOT NULL DEFAULT '0',
  `quarteltrabalhadores` varchar(99) NOT NULL DEFAULT '0',
  `edmnv` varchar(50) NOT NULL DEFAULT '0',
  `ednnv` varchar(50) NOT NULL DEFAULT '0',
  `cpmnv` varchar(50) NOT NULL DEFAULT '0',
  `cpmtempodestino` int(99) NOT NULL DEFAULT '0',
  `cpmtrabalhadores` int(99) NOT NULL DEFAULT '0',
  `edpnv` varchar(50) NOT NULL DEFAULT '0',
  `edqnv` varchar(50) NOT NULL DEFAULT '0',
  `edrnv` varchar(50) NOT NULL DEFAULT '0',
  `estabulonv` varchar(50) NOT NULL DEFAULT '0',
  `estabulotempodestino` int(99) NOT NULL DEFAULT '0',
  `estabulotrabalhadores` int(99) NOT NULL DEFAULT '0',
  `edtnv` varchar(50) NOT NULL DEFAULT '0',
  `quartelvalid` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `aldeias`
--

INSERT INTO `aldeias` (`ID`, `dono`, `nome`, `clan`, `povo`, `pop`, `popdisponivel`, `pontosdeprevisao`, `madeira`, `ouro`, `ferro`, `comida`, `capacidade`, `capacidadecomida`, `lealdade`, `x`, `y`, `nivelfundacao`, `nivelmadeira`, `madeirahora`, `ourohora`, `ferrohora`, `comidahora`, `nivelouro`, `nivelferro`, `nivelcomida`, `xy`, `reg`, `eda`, `edb`, `edc`, `edd`, `ede`, `edf`, `edg`, `edh`, `edi`, `edj`, `edk`, `edl`, `edm`, `edn`, `edo`, `edp`, `edq`, `edr`, `eds`, `edt`, `madeiratempodestino`, `madeiratrabalhadores`, `ourotempodestino`, `ourotrabalhadores`, `ferrotempodestino`, `ferrotrabalhadores`, `comidatempodestino`, `comidatrabalhadores`, `edanv`, `edbnv`, `edcnv`, `galpaonv`, `galpaotempodestino`, `galpaotrabalhadores`, `edenv`, `edfnv`, `edgnv`, `edcentralnv`, `edcentraltempodestino`, `edcentraltrabalhadores`, `armazemnv`, `armazemtempodestino`, `armazemtrabalhadores`, `edjnv`, `edknv`, `quartelnv`, `quarteltempodestino`, `quarteltrabalhadores`, `edmnv`, `ednnv`, `cpmnv`, `cpmtempodestino`, `cpmtrabalhadores`, `edpnv`, `edqnv`, `edrnv`, `estabulonv`, `estabulotempodestino`, `estabulotrabalhadores`, `edtnv`, `quartelvalid`) VALUES
(4, 'aff', 'gfdsh', '', 1, 5, '5', 0, 500.14822, 500.14822, 500.14822, 700.14819, 1000, 1100, 100, 3, 0, 1, 1, 2, 2, 2, 2, 1, 1, 1, '30', 1, '0', '0', '0', '0', '0', '0', '0', 'ed1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, '0', '0', '0', '0', 0, 0, '0', 1),
(5, 'lok', 'hgsh', '', 1, 5, '5', 0, 500.39944, 500.39944, 500.39944, 700.39941, 1000, 1100, 100, -4, 4, 1, 1, 2, 2, 2, 2, 1, 1, 1, '-44', 2, '0', '0', '0', '0', '0', '0', '0', 'ed1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, '0', '0', '0', '0', 0, 0, '0', 1),
(6, 'shadowbr', 'jhgd', 'TST', 1, 26, '24', 0, 1000.00000, 1000.00000, 1000.00000, 1100.00000, 1000, 1100, 100, 5, 3, 1, 20, 800, 2, 2, 8, 1, 1, 2, '53', 1, '0', '0', '0', '0', '0', '0', '0', 'ed1', '0', '0', '0', 'quartel', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1364511308', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', 0, 0, '0', '0', '0', '0', 0, 0, '0', 1),
(7, 'kk', 'fdasg', '', 1, 5, '5', 0, 1000.00000, 1000.00000, 1000.00000, 1100.00000, 1000, 1100, 100, 5, -2, 1, 1, 2, 2, 2, 2, 1, 1, 1, '5-2', 4, '0', '0', '0', '0', '0', '0', '0', 'ed1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, '0', '0', '0', '0', 0, 0, '0', 1),
(8, 'fulano1', 'dad', '', 10, 12, '12', 0, 500.62274, 500.27274, 500.27274, 700.27271, 1000, 1100, 100, -5, -1, 1, 8, 128, 2, 2, 2, 1, 1, 1, '-5-1', 3, '0', '0', '0', '0', '0', '0', '0', 'ed1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, '0', '0', '0', '0', 0, 0, '0', 1),
(9, 'fulano2', '001 - Dominator', '', 9, 5, '5', 0, 500.06110, 500.06110, 500.06110, 700.06110, 1000, 1100, 100, -4, -3, 1, 1, 2, 2, 2, 2, 1, 1, 1, '-4-3', 3, '0', '0', '0', '0', '0', '0', '0', 'ed1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, '0', '0', '0', '0', 0, 0, '0', 1),
(10, 'fulano3', '001 - DominatorLOL', '', 14, 5, '5', 0, 500.35052, 500.35052, 500.35052, 700.35052, 1000, 1100, 100, 4, -1, 1, 1, 2, 2, 2, 2, 1, 1, 1, '4-1', 4, '0', '0', '0', '0', '0', '0', '0', 'ed1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, '0', '0', '0', '0', 0, 0, '0', 1),
(11, 'fulano4', '01 - LOL', '', 15, 5, '5', 0, 506.02094, 506.02094, 506.02094, 706.02081, 1000, 1100, 100, 2, -1, 1, 1, 2, 2, 2, 2, 1, 1, 1, '2-1', 4, '0', '0', '0', '0', '0', '0', '0', 'ed1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, '0', '0', '0', '0', 0, 0, '0', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ataques`
--

CREATE TABLE IF NOT EXISTS `ataques` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `remetente` varchar(10) NOT NULL,
  `destino` varchar(10) NOT NULL,
  `povorem` int(10) NOT NULL,
  `povodest` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `tempo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `config`
--

INSERT INTO `config` (`tempo`, `time`) VALUES
('2013-03-31 17:18:00', 1364750280);

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_usuarios`
--

CREATE TABLE IF NOT EXISTS `dados_usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Login` varchar(50) NOT NULL,
  `Senha` char(15) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Pergunta` varchar(200) NOT NULL,
  `Resposta` varchar(200) NOT NULL,
  `online` int(1) NOT NULL,
  `povo` int(50) NOT NULL,
  `vilas` int(11) NOT NULL DEFAULT '0',
  `gold` int(11) NOT NULL DEFAULT '0',
  `pop` int(200) NOT NULL,
  `clan` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `dados_usuarios`
--

INSERT INTO `dados_usuarios` (`ID`, `Login`, `Senha`, `Email`, `Pergunta`, `Resposta`, `online`, `povo`, `vilas`, `gold`, `pop`, `clan`) VALUES
(1, 'Admin', '123890q', 'admin@admin', 'admin', 'admin', 0, 999, 0, 0, 1, 'ADM'),
(7, 'aff', 'aa', 'aa', 'aa', 'aa', 0, 1, 1, 0, 5, ''),
(8, 'lok', 'aa', 'aa', 'aa', 'aa', 0, 1, 1, 0, 5, ''),
(9, 'ShaDoWBR', '123890q', 'aa', 'aa', 'aa', 0, 1, 1, 0, 26, 'TST'),
(10, 'kk', 'kk', 'kk', 'kk', 'kk', 0, 1, 1, 0, 5, ''),
(11, 'fulano1', 'aa', 'aa', 'aa', 'aa', 0, 10, 1, 0, 12, ''),
(12, 'fulano2', 'aa', 'aa', 'aa', 'aa', 0, 9, 1, 0, 5, ''),
(13, 'fulano3', 'aa', 'aa', 'aa', 'aa', 0, 14, 1, 0, 5, ''),
(14, 'fulano4', 'aa', 'aa', 'aa', 'aa', 0, 15, 1, 0, 5, ''),
(15, 'fulano5', 'aa', 'aa', 'aa', 'aa', 0, 2, 0, 0, 0, ''),
(16, 'fulano6', 'aa', 'aa', 'aa', 'aa', 0, 7, 0, 0, 0, ''),
(17, 'fulano7', 'aa', 'aa', 'aa', 'aa', 0, 5, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fila`
--

CREATE TABLE IF NOT EXISTS `fila` (
  `aldeiaid` int(11) NOT NULL,
  `dono` varchar(90) NOT NULL,
  `algo` int(11) NOT NULL,
  `t11` int(90) NOT NULL,
  `t11timecmc` int(90) NOT NULL DEFAULT '0',
  `t11timefim` int(90) NOT NULL DEFAULT '0',
  `t12` int(11) NOT NULL,
  `t12timecmc` int(90) NOT NULL DEFAULT '0',
  `t12timefim` int(90) NOT NULL DEFAULT '0',
  `t13` int(11) NOT NULL,
  `t13timecmc` int(90) NOT NULL DEFAULT '0',
  `t13timefim` int(90) NOT NULL DEFAULT '0',
  `t14` int(11) NOT NULL,
  `t14timecmc` int(90) NOT NULL DEFAULT '0',
  `t14timefim` int(90) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fila`
--

INSERT INTO `fila` (`aldeiaid`, `dono`, `algo`, `t11`, `t11timecmc`, `t11timefim`, `t12`, `t12timecmc`, `t12timefim`, `t13`, `t13timecmc`, `t13timefim`, `t14`, `t14timecmc`, `t14timefim`) VALUES
(4, 'aff', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'lok', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'shadowbr', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'kk', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'fulano1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'fulano2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'fulano3', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'fulano4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mapaview`
--

CREATE TABLE IF NOT EXISTS `mapaview` (
  `id` int(90) NOT NULL AUTO_INCREMENT,
  `dono` varchar(90) NOT NULL,
  `x` int(90) NOT NULL,
  `y` int(90) NOT NULL,
  `var1` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `mapaview`
--

INSERT INTO `mapaview` (`id`, `dono`, `x`, `y`, `var1`) VALUES
(1, '0', 3, 0, 0),
(2, '0', -4, 4, 0),
(3, 'shadowbr', 5, 3, 0),
(4, 'kk', 5, -2, 0),
(5, 'fulano1', -1, 3, 0),
(6, 'fulano2', -4, -3, 0),
(7, 'fulano3', 4, -1, 0),
(8, 'fulano4', 2, -1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE IF NOT EXISTS `mensagens` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `remetente` varchar(50) NOT NULL,
  `destino` text NOT NULL,
  `assunto` text NOT NULL,
  `mensagem` text NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste`
--

CREATE TABLE IF NOT EXISTS `teste` (
  `aa` int(11) NOT NULL,
  `lol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `teste`
--

INSERT INTO `teste` (`aa`, `lol`) VALUES
(10, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tropas`
--

CREATE TABLE IF NOT EXISTS `tropas` (
  `IDaldeia` varchar(20) NOT NULL,
  `dono` varchar(90) NOT NULL,
  `t11` int(40) NOT NULL,
  `t12` int(40) NOT NULL,
  `t13` int(40) NOT NULL,
  `t14` int(40) NOT NULL,
  `t15` int(40) NOT NULL,
  `t16` int(40) NOT NULL,
  `t17` int(40) NOT NULL,
  `t18` int(40) NOT NULL,
  `t19` int(40) NOT NULL,
  `t21` int(40) NOT NULL,
  `t22` int(40) NOT NULL,
  `t23` int(40) NOT NULL,
  `t24` int(40) NOT NULL,
  `t25` int(40) NOT NULL,
  `t26` int(40) NOT NULL,
  `t27` int(40) NOT NULL,
  `t28` int(40) NOT NULL,
  `t29` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tropas`
--

INSERT INTO `tropas` (`IDaldeia`, `dono`, `t11`, `t12`, `t13`, `t14`, `t15`, `t16`, `t17`, `t18`, `t19`, `t21`, `t22`, `t23`, `t24`, `t25`, `t26`, `t27`, `t28`, `t29`) VALUES
('4', 'aff', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('5', 'lok', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('6', 'shadowbr', 2, 3, 1, 6, 5, 7, 8, 7, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('7', 'kk', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('8', 'fulano1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('9', 'fulano2', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('10', 'fulano3', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('11', 'fulano4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
