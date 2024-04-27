-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 19-Nov-2014 às 19:52
-- Versão do servidor: 5.6.11
-- versão do PHP: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `combustivel`
--
CREATE DATABASE IF NOT EXISTS `combustivel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `combustivel`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `circulacao`
--

CREATE TABLE IF NOT EXISTS `circulacao` (
  `id_circulacao` int(11) NOT NULL AUTO_INCREMENT,
  `id_veiculo_circulacao` int(11) NOT NULL,
  `data_circulacao` date NOT NULL,
  PRIMARY KEY (`id_circulacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `forins`
--

CREATE TABLE IF NOT EXISTS `forins` (
  `id_isumo_forins` int(11) NOT NULL,
  `id_fornecedor_forins` int(11) NOT NULL,
  `data_lan_forins` date NOT NULL,
  PRIMARY KEY (`id_isumo_forins`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE IF NOT EXISTS `fornecedor` (
  `id_fornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `nome_fantasia_fornecedor` varchar(60) NOT NULL,
  `endereco_fornecedor` varchar(60) NOT NULL,
  `cnpj_fornecedor` varchar(15) NOT NULL,
  `bairro_fornecedor` varchar(60) NOT NULL,
  `cidade_fornecedor` varchar(60) NOT NULL,
  `cep_fornecedor` varchar(8) NOT NULL,
  `fone_fornecedor` varchar(10) NOT NULL,
  `celular_fornecedor` varchar(10) NOT NULL,
  `contato_fornecedor` varchar(50) NOT NULL,
  `razao_social_fornecedor` varchar(60) NOT NULL,
  `email_fornecedor` varchar(60) NOT NULL,
  PRIMARY KEY (`id_fornecedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `id_licitacao`
--

CREATE TABLE IF NOT EXISTS `id_licitacao` (
  `id_licitacao` int(11) NOT NULL AUTO_INCREMENT,
  `data_homologacao_licitacao` date NOT NULL,
  `departamento_licitacao` char(3) NOT NULL,
  `id_fornecedor_licitacao` int(11) NOT NULL,
  PRIMARY KEY (`id_licitacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `isumos`
--

CREATE TABLE IF NOT EXISTS `isumos` (
  `id_insumo` int(11) NOT NULL AUTO_INCREMENT,
  `nome_insumo` varchar(60) DEFAULT NULL,
  `insumo_insumo` char(1) DEFAULT NULL,
  `unidade_insumo` varchar(3) NOT NULL,
  `especie_insumo` varchar(15) NOT NULL,
  `tipo_insumo` int(15) NOT NULL,
  `data_bal_insumo` date NOT NULL,
  `quant_bal_insumo` double NOT NULL,
  `data_lan_insumo` date NOT NULL,
  `quant_insumo` double NOT NULL,
  `quant_atual_insumo` double NOT NULL,
  `quant_mini_insumo` double NOT NULL,
  `valor_uni_insumo` decimal(8,2) NOT NULL,
  `motorista_insumo` int(11) NOT NULL,
  PRIMARY KEY (`id_insumo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `isumos`
--

INSERT INTO `isumos` (`id_insumo`, `nome_insumo`, `insumo_insumo`, `unidade_insumo`, `especie_insumo`, `tipo_insumo`, `data_bal_insumo`, `quant_bal_insumo`, `data_lan_insumo`, `quant_insumo`, `quant_atual_insumo`, `quant_mini_insumo`, `valor_uni_insumo`, `motorista_insumo`) VALUES
(1, 'GASOLINA', 'G', 'L', '', 0, '2014-11-10', 0, '2014-11-10', 0, 0, 0, '3.19', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_solicitacoes`
--

CREATE TABLE IF NOT EXISTS `itens_solicitacoes` (
  `id_licitacao_is` int(11) NOT NULL AUTO_INCREMENT,
  `id_insumo_is` char(5) DEFAULT NULL,
  `quantidade_licitada_is` int(11) DEFAULT NULL,
  `data_limite_is` date DEFAULT NULL,
  `data_homologacao_is` date NOT NULL,
  `insumo_is` varchar(30) NOT NULL,
  PRIMARY KEY (`id_licitacao_is`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `licitacoes`
--

CREATE TABLE IF NOT EXISTS `licitacoes` (
  `id_licitacao` int(11) NOT NULL AUTO_INCREMENT,
  `data_homologacao_licitacao` date NOT NULL,
  `departamento_licitacao` char(3) NOT NULL,
  `fornecedor_licitacao` char(5) NOT NULL,
  PRIMARY KEY (`id_licitacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lotacao`
--

CREATE TABLE IF NOT EXISTS `lotacao` (
  `id_lotacao` int(11) NOT NULL AUTO_INCREMENT,
  `nome_lotacao` varchar(60) NOT NULL,
  `gestor_lotacao` varchar(60) NOT NULL,
  `cargo_lotacao` varchar(30) NOT NULL,
  PRIMARY KEY (`id_lotacao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `lotacao`
--

INSERT INTO `lotacao` (`id_lotacao`, `nome_lotacao`, `gestor_lotacao`, `cargo_lotacao`) VALUES
(1, 'IDECC', 'PEDRO', 'GERENTE'),
(2, 'RAYAN CRAVALHO LTDA', 'RAYAN CARVALHO', 'GERENTE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `motorista`
--

CREATE TABLE IF NOT EXISTS `motorista` (
  `id_motorista` int(11) NOT NULL AUTO_INCREMENT,
  `nome_motorista` varchar(60) NOT NULL,
  PRIMARY KEY (`id_motorista`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `movbaixa`
--

CREATE TABLE IF NOT EXISTS `movbaixa` (
  `id_movbaixa` int(11) NOT NULL AUTO_INCREMENT,
  `data_baixa_movbaixa` date NOT NULL,
  `id_veiculo_movbaixa` int(11) NOT NULL,
  `statusid_movbaixa` char(1) NOT NULL,
  `motivo_movbaixa` blob NOT NULL,
  PRIMARY KEY (`id_movbaixa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `movcirculacao`
--

CREATE TABLE IF NOT EXISTS `movcirculacao` (
  `id_movcirculacao` int(11) NOT NULL AUTO_INCREMENT,
  `id_circulacao_movcirculacao` int(11) DEFAULT NULL,
  `id_motorista_movcirculacao` int(11) NOT NULL,
  `data_saida_movcirculacao` date NOT NULL,
  `hora_saida_movcirculacao` time NOT NULL,
  `hodometro_saida_movcirculacao` double NOT NULL,
  `data_chegada_movcirculacao` date NOT NULL,
  `hora_chegada_movcirculacao` time NOT NULL,
  `hodometro_chegada_movcirculacao` double NOT NULL,
  `destino_movcirculacao` blob NOT NULL,
  PRIMARY KEY (`id_movcirculacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimentos`
--

CREATE TABLE IF NOT EXISTS `movimentos` (
  `id_movimentos` int(11) NOT NULL AUTO_INCREMENT,
  `data_movimentos` date NOT NULL,
  `id_fornecedor_movimentos` int(11) NOT NULL,
  `id_veiculo_movimentos` int(11) NOT NULL,
  `id_insumo_movimentos` int(11) NOT NULL,
  `quantidade_movimentos` double NOT NULL,
  `valor_movimentos` double NOT NULL,
  `hodometro_movimentos` double NOT NULL,
  `quilometragem_movimentos` double NOT NULL,
  `obs_movimentos` blob NOT NULL,
  `motorista_movimentos` varchar(50) NOT NULL,
  PRIMARY KEY (`id_movimentos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_s01`
--

CREATE TABLE IF NOT EXISTS `tb_s01` (
  `id_tb_s01` int(11) NOT NULL AUTO_INCREMENT,
  `obs_tb_s01` int(11) NOT NULL,
  `inicio_tb_s01` int(11) NOT NULL,
  `usuario_tb_s01` int(11) NOT NULL,
  PRIMARY KEY (`id_tb_s01`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(60) NOT NULL,
  `orgao_usuario` varchar(60) NOT NULL,
  `endereco_usuario` varchar(60) NOT NULL,
  `bairro_usuario` varchar(60) NOT NULL,
  `cidade_usuario` varchar(60) NOT NULL,
  `cep_usuario` char(8) NOT NULL,
  `uf_usuario` char(2) NOT NULL,
  `telefone_usuario` varchar(10) NOT NULL,
  `fax_usuario` varchar(10) NOT NULL,
  `logo_usuario` blob NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculos`
--

CREATE TABLE IF NOT EXISTS `veiculos` (
  `id_veiculo` int(11) NOT NULL AUTO_INCREMENT,
  `situacao_veiculo` char(1) NOT NULL,
  `tipo_veiculo` varchar(20) NOT NULL,
  `fabricante_veiculo` varchar(20) NOT NULL,
  `modelo_veiculo` varchar(20) NOT NULL,
  `ano_veiculo` smallint(6) NOT NULL,
  `placa_veiculo` varchar(7) NOT NULL,
  `kl_veiculo` double NOT NULL,
  `id_insumo_veiculo` int(11) NOT NULL,
  `proprietario_veiculo` varchar(60) NOT NULL,
  `tanque_veiculo` smallint(6) NOT NULL,
  `id_lotacao_veiculo` int(11) NOT NULL,
  `chassi_veiculo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_veiculo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Extraindo dados da tabela `veiculos`
--

INSERT INTO `veiculos` (`id_veiculo`, `situacao_veiculo`, `tipo_veiculo`, `fabricante_veiculo`, `modelo_veiculo`, `ano_veiculo`, `placa_veiculo`, `kl_veiculo`, `id_insumo_veiculo`, `proprietario_veiculo`, `tanque_veiculo`, `id_lotacao_veiculo`, `chassi_veiculo`) VALUES
(1, '1', 'ford', 'ford', 'ford', 1990, 'kkj0000', 0, 1, 'knkn', 221, 2, 'klngknregbv44'),
(2, '1', 'ford', 'ford', 'ford', 1990, 'kkj0000', 0, 1, 'knkn', 221, 2, 'klngknregbv44'),
(3, '1', 'ford', 'ford', 'ford', 1990, 'kkj0000', 0, 1, 'knkn', 221, 2, 'klngknregbv44'),
(4, '1', 'ford', 'ford', 'ford', 1990, 'kkj0000', 0, 1, 'knkn', 221, 2, 'klngknregbv44'),
(5, '1', 'ford', 'ford', 'ford', 1990, 'kkj0000', 0, 1, 'knkn', 221, 2, 'klngknregbv44'),
(6, '1', 'ford', 'ford', 'ford', 1990, 'kkj0000', 0, 1, 'knkn', 221, 2, 'klngknregbv44'),
(7, '1', 'ford', 'ford', 'ford', 1990, 'kkj0000', 0, 1, 'knkn', 221, 2, 'klngknregbv44'),
(8, '1', 'ford', 'ford', 'ford', 1990, 'kkj0000', 0, 1, 'knkn', 221, 2, 'klngknregbv44'),
(9, '1', 'PASSEIO', 'HONDA', 'FIT', 2006, 'HXG8585', 15, 1, 'RAYAN CARVALHO', 10, 1, 'FFDHFDH545456'),
(10, '1', 'PASSEIO', 'HONDA', 'FIT', 2006, 'ggf2013', 10, 1, 'RAYAN CARVALHO', 10, 2, 'ldjogj212'),
(11, '1', 'PASSEIO', 'HONDA', 'FIT', 2006, 'ggf2013', 10, 1, 'RAYAN CARVALHO', 10, 2, 'ldjogj212'),
(12, '1', 'PASSEIO', 'HONDA', 'FIT', 2006, 'ggf2013', 10, 1, 'RAYAN CARVALHO', 10, 2, 'ldjogj212'),
(13, '1', 'PASSEIO', 'HONDA', 'FIT', 2006, 'ggf2013', 10, 1, 'RAYAN CARVALHO', 10, 2, 'ldjogj212'),
(14, '1', 'PASSEIA', 'GM', 'ASTRA', 2006, 'HXG2015', 10, 1, 'RAYAN', 5, 1, '545GH4RHER'),
(15, '1', 'PASSEIO', 'FIAT', 'PALIO', 0, 'HYG2030', 10, 1, 'FELIX', 10, 1, '11564546546'),
(16, '1', 'CAMINHONETE', 'TOYOTA', 'HILLUX', 0, 'HGY5256', 25, 1, 'TESTE', 20, 1, '6699494494'),
(17, '1', 'CAMINHONETE', 'TOYOTA', 'HILLUX', 0, 'HGY5256', 25, 1, 'TESTE', 20, 1, '6699494494'),
(18, '1', 'CAMINHONETE', 'TOYOTA', 'HILLUX', 0, 'HGY5256', 25, 1, 'TESTE', 20, 1, '6699494494'),
(19, '1', 'AUTOMOVEL', 'FIAT', '500CC', 0, 'GHJ1236', 10, 1, 'RAYAN', 20, 1, '336466'),
(20, '1', 'AUTOMOVEL', 'FIAT', '500CC', 0, 'GHJ1236', 10, 1, 'RAYAN', 20, 1, '336466'),
(21, '1', 'CAMINHONETE', 'TOYOTA', 'HILLUX', 0, 'HGY5256', 25, 1, 'TESTE', 20, 1, '6699494494'),
(22, '1', 'CAMINHONETE', 'TOYOTA', 'HILLUX', 0, 'HGY5256', 25, 1, 'TESTE', 20, 1, '6699494494'),
(23, '1', 'CAMINHONETE', 'TOYOTA', 'HILLUX', 0, 'HGY5256', 25, 1, 'TESTE', 20, 1, '6699494494'),
(24, '1', 'CAMINHONETE', 'TOYOTA', 'HILLUX', 0, 'HGY5256', 25, 1, 'TESTE', 20, 1, '6699494494'),
(25, '1', 'CAMINHONETE', 'TOYOTA', 'HILLUX', 0, 'HGY5256', 25, 1, 'TESTE', 20, 1, '6699494494'),
(26, '1', 'PATROL', 'TONE', 'VIADO', 0, 'HOM2424', 8, 1, 'TONE', 100, 2, '123456789');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
