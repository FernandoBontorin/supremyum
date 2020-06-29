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
-- Banco de Dados: `supremyum`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aldeias`
--

CREATE TABLE IF NOT EXISTS `aldeias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dono` varchar(80) NOT NULL,
  `nome` varchar(50) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `tempo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE IF NOT EXISTS `mensagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `remetente` varchar(50) NOT NULL,
  `destino` text NOT NULL,
  `assunto` text NOT NULL,
  `mensagem` text NOT NULL,
  KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
