-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30-Jun-2017 às 00:17
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gestao_financeira`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agencias`
--

CREATE TABLE IF NOT EXISTS `agencias` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `numero` varchar(15) NOT NULL,
  `id_banco` int(15) NOT NULL,
  `endereco` varchar(70) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `id_estado` int(15) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `agencias`
--

INSERT INTO `agencias` (`id`, `nome`, `numero`, `id_banco`, `endereco`, `cidade`, `id_estado`, `telefone`) VALUES
(1, 'Teste2', '3654654', 1, 'fdvfdvfd', 'fdbfdsbfsd', 1, '89998'),
(3, 'Patrícia Guidetti Gauto', '151', 1, '54', 'teste', 1, '56565656565'),
(4, 'Patrícia Guidetti Gauto', '151', 1, '54', '54', 1, '56565656565'),
(5, 'dfdf', '151', 1, 'teste', 'teste', 1, '56565656565'),
(6, 'Patrícia Guidetti Gauto', '151', 1, 'teste', 'Teste', 1, 'ds654d56s45'),
(7, 'Patrícia Guidetti Gauto', '151', 1, 'teste', 'teste', 1, '56565656565'),
(8, 'Patrícia Guidetti Gauto', '151', 1, 'teste', 'teste', 1, '56565656565'),
(9, 'Patrícia Guidetti Gauto', '151', 1, 'teste', 'teste', 1, '56565656565'),
(10, 'Patrícia Guidetti Gauto', '123456', 1, 'teste', 'teste', 1, '56565656565');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bancos`
--

CREATE TABLE IF NOT EXISTS `bancos` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nome` varchar(35) NOT NULL,
  `numero` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `bancos`
--

INSERT INTO `bancos` (`id`, `nome`, `numero`) VALUES
(1, 'Teste', '151');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `id_tipo_categoria` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `id_tipo_categoria`) VALUES
(4, 'teste receita', 1),
(5, 'teste despesa', 2),
(6, 'teste receita 2', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `data_nasc` date NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `endereco` varchar(70) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `id_estado` int(15) NOT NULL,
  `data_cadastro` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_empresa` int(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `data_nasc`, `cpf`, `telefone`, `endereco`, `cidade`, `id_estado`, `data_cadastro`, `email`, `id_empresa`) VALUES
(4, 'Rafael Italo de Souto França', '1984-07-17', '565456465465', '4654546465', 'Teste', 'Teste', 1, '2017-06-29', 'teste@teste.com', NULL),
(5, 'Patrícia Guidetti Gauto', '0000-00-00', '121212121212', '56565656565', 'teste', 'teste', 1, '2017-06-29', 'patigauto@gmail.com', 1),
(6, 'Patrícia Guidetti Gauto', '1990-01-05', '121212121212', '56565656565', 'teste', 'teste', 1, '2017-06-29', 'pggauto.ti@gmail.com', 1),
(7, 'Patrícia Guidetti Gauto', '2017-06-07', '121212121212', '56565656565', 'KJKLDCJSLKFJDSLK', 'teste', 1, '2017-06-29', 'pggauto.ti@gmail.com', 1),
(8, 'Patrícia Guidetti Gauto', '1990-01-05', '565456465465', '56565656565', '54', 'teste', 1, '2017-06-29', 'patigauto@gmail.com', 2),
(9, 'Teste3', '2017-06-14', '121212121212', 'ds654d56s45', 'teste', 'teste', 1, '2017-06-30', 'teste@teste.com', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas_bancarias`
--

CREATE TABLE IF NOT EXISTS `contas_bancarias` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `numero` int(10) NOT NULL,
  `id_agencia` int(15) NOT NULL,
  `id_banco` int(15) NOT NULL,
  `id_titular` int(15) NOT NULL,
  `id_tipo_pessoa` int(15) NOT NULL,
  `saldo_inicial` decimal(20,2) NOT NULL,
  `saldo` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `contas_bancarias`
--

INSERT INTO `contas_bancarias` (`id`, `nome`, `numero`, `id_agencia`, `id_banco`, `id_titular`, `id_tipo_pessoa`, `saldo_inicial`, `saldo`) VALUES
(1, 'Caixa 2', 151, 1, 1, 4, 1, '102.00', -100),
(2, 'Patrícia Guidetti Gauto', 151, 1, 1, 1, 1, '100.00', 100),
(4, 'Teste', 151, 5, 1, 1, 1, '102.00', 102);

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesas`
--

CREATE TABLE IF NOT EXISTS `despesas` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `motivo` varchar(100) NOT NULL,
  `id_categoria` int(15) NOT NULL,
  `id_conta_bancaria` int(15) NOT NULL,
  `data_entrada` date NOT NULL,
  `data_alteracao` date DEFAULT NULL,
  `id_fornecedor` int(15) DEFAULT NULL,
  `valor` decimal(40,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `despesas`
--

INSERT INTO `despesas` (`id`, `motivo`, `id_categoria`, `id_conta_bancaria`, `data_entrada`, `data_alteracao`, `id_fornecedor`, `valor`) VALUES
(2, 'teste', 5, 1, '2017-06-29', NULL, 1, '100.00'),
(3, 'teste', 5, 1, '2017-06-29', NULL, 1, '100.00'),
(4, 'teste', 5, 2, '2017-06-29', NULL, 1, '100.00'),
(5, 'teste', 5, 1, '2017-06-29', NULL, 1, '10.00'),
(6, 'teste', 5, 1, '2017-06-30', NULL, 1, '100.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nome_fantasia` varchar(50) NOT NULL,
  `razao_social` varchar(50) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `inscricao_estadual` varchar(25) NOT NULL,
  `inscricao_municipal` varchar(25) NOT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `id_tipo_atividade` int(15) DEFAULT NULL,
  `endereco` varchar(70) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `id_estado` int(15) DEFAULT NULL,
  `id_status` int(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`id`, `nome_fantasia`, `razao_social`, `cnpj`, `inscricao_estadual`, `inscricao_municipal`, `telefone`, `id_tipo_atividade`, `endereco`, `cidade`, `id_estado`, `id_status`) VALUES
(8, 'Teste123', 'Teste 13', 'sdad', '24654', '545', 'ds654d56s45', NULL, 'teste', 'teste', NULL, 1),
(9, 'Teste14', 'Teste 13', 'sdad', '24654', 'asdasd', '56565656565', NULL, 'teste', 'teste', NULL, 1),
(10, 'Teste4', 'Teste 13', 'sdad', '24654', '545', '56565656565', NULL, '54', 'teste', NULL, 1),
(11, 'Teste', 'Teste 13', '46545646', '24654', '545', '56565656565', 1, 'teste', 'teste', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `sigla` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`id`, `nome`, `sigla`) VALUES
(1, 'Rio Grando do Sul', 'RS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE IF NOT EXISTS `fornecedores` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nome` varchar(70) NOT NULL,
  `endereco` varchar(70) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `id_estado` int(15) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `data_cadastro` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`id`, `nome`, `endereco`, `cidade`, `id_estado`, `telefone`, `data_cadastro`) VALUES
(1, 'Patrícia Guidetti Gauto', 'teste', 'teste', 1, '56565656565', '2017-06-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

CREATE TABLE IF NOT EXISTS `receitas` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `motivo` varchar(50) NOT NULL,
  `id_categoria` int(15) NOT NULL,
  `id_conta_bancaria` int(15) NOT NULL,
  `id_cliente` int(15) NOT NULL,
  `valor` decimal(40,2) NOT NULL,
  `data_entrada` date NOT NULL,
  `data_alteracao` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`id`, `nome`) VALUES
(1, 'Ativo'),
(2, 'Inativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_atividade`
--

CREATE TABLE IF NOT EXISTS `tipo_atividade` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tipo_atividade`
--

INSERT INTO `tipo_atividade` (`id`, `nome`) VALUES
(1, 'Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_categoria`
--

CREATE TABLE IF NOT EXISTS `tipo_categoria` (
  `id` int(15) NOT NULL DEFAULT '0',
  `nome` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_categoria`
--

INSERT INTO `tipo_categoria` (`id`, `nome`) VALUES
(1, 'Receita'),
(2, 'Despesa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_pessoa`
--

CREATE TABLE IF NOT EXISTS `tipo_pessoa` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `sigla` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tipo_pessoa`
--

INSERT INTO `tipo_pessoa` (`id`, `nome`, `sigla`) VALUES
(1, 'Pessoa Física', 'PF'),
(2, 'Pessoa Jurídica', 'PJ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `data_nasc` date NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `endereco` varchar(70) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `id_estado` int(15) NOT NULL,
  `data_cadastro` date NOT NULL,
  `data_alteracao` date DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `data_nasc`, `cpf`, `telefone`, `endereco`, `cidade`, `id_estado`, `data_cadastro`, `data_alteracao`, `email`, `senha`) VALUES
(1, '5345', '0000-00-00', '64', '654', '65', '', 0, '2017-06-25', NULL, '465', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Patrícia Guidetti Gauto', '0000-00-00', '121212121212', '56565656565', 'teste', 'teste', 1, '2017-06-27', NULL, 'pggauto.ti@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'Patrícia Guidetti Gauto', '1990-01-01', '121212121212', '56565656565', 'Teste', '', 0, '2017-06-29', NULL, 'patigauto@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
