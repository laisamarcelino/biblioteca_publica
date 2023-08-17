-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: mysql669.umbler.com
-- Generation Time: 06-Fev-2021 às 23:33
-- Versão do servidor: 5.6.40
-- PHP Version: 5.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `id_adm` int(11) NOT NULL,
  `adm` int(11) DEFAULT NULL,
  `senha` char(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id_adm`, `adm`, `senha`) VALUES
(1, 1010, '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrar_fila`
--

CREATE TABLE IF NOT EXISTS `entrar_fila` (
  `id_fila` int(11) NOT NULL,
  `id_codigo` int(11) DEFAULT NULL,
  `id_livro` int(11) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `entrar_fila`
--

INSERT INTO `entrar_fila` (`id_fila`, `id_codigo`, `id_livro`, `data_inicio`) VALUES
(2, 2, 7, NULL),
(3, 3, 7, NULL),
(4, 3, 6, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jornais`
--

CREATE TABLE IF NOT EXISTS `jornais` (
  `id_jornal` int(11) NOT NULL,
  `pdf` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `data_jornal` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `jornais`
--

INSERT INTO `jornais` (`id_jornal`, `pdf`, `data_jornal`) VALUES
(1, 'images/uploads/1612495405601cba2d7a550.pdf', '03/06/2009');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE IF NOT EXISTS `livros` (
  `id_livro` int(11) NOT NULL,
  `etiqueta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `area_conhecimento` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `autor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `editora` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `edicao` int(11) DEFAULT NULL,
  `isbn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero_pag` int(11) DEFAULT NULL,
  `tradutor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_publicacao` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `local_publicacao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qtd` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id_livro`, `etiqueta`, `area_conhecimento`, `titulo`, `autor`, `editora`, `edicao`, `isbn`, `numero_pag`, `tradutor`, `data_publicacao`, `local_publicacao`, `qtd`) VALUES
(2, '123456', 'exatas', 'Teoria de tudo', 'Albert Einsten', 'saraiva', 1, '3549973', 500, 'alguem', '2015', 'sao paulo', 0),
(4, '123456', 'Biologicas', 'Genetica', 'mendel', 'saraiva', 1, '3549973', 500, 'alguem', '1990', 'sao paulo', 0),
(5, '456789', 'ação', 'vingadores', 'stan lee', 'editora', 1, '455668', 344, 'sdsds', '2020', 'sao paulo', 0),
(6, '123456', 'humanas', 'capitalismo', 'Max Weber', 'editora', 2, '455668', 988, 'alguem', '2015', 'rio de janeiro', 0),
(7, '456789', 'Infantil / Drama', 'extraordinario', 'stan lee', 'saraiva', 2, '3549973', 122, 'sdsds', '2015', 'sao paulo', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `presencial`
--

CREATE TABLE IF NOT EXISTS `presencial` (
  `id_presencial` int(11) NOT NULL,
  `id_adm` int(11) DEFAULT NULL,
  `id_codigo` int(11) DEFAULT NULL,
  `identificacao` int(11) DEFAULT NULL,
  `id_livro` int(11) DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_reserva` date DEFAULT NULL,
  `data_entrega` date DEFAULT NULL,
  `limite` int(11) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `presencial`
--

INSERT INTO `presencial` (`id_presencial`, `id_adm`, `id_codigo`, `identificacao`, `id_livro`, `nome`, `data_reserva`, `data_entrega`, `limite`) VALUES
(2, 1, 1, 12, 4, 'Lucas', '2021-02-05', '2021-02-12', 0),
(4, 1, 2, 1, 2, 'Geissi', '2021-02-05', '2021-02-12', 1),
(5, 1, 2, 1, 6, 'Geissi', '2021-02-05', '2021-02-12', 1),
(6, 1, 2, 1, 7, 'Geissi', '2021-02-06', '2021-02-13', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `renovar`
--

CREATE TABLE IF NOT EXISTS `renovar` (
  `id_renovar` int(11) NOT NULL,
  `id_presencial` int(11) DEFAULT NULL,
  `id_codigo` int(11) DEFAULT NULL,
  `id_livro` int(11) DEFAULT NULL,
  `data_renovacao` date DEFAULT NULL,
  `data_entrega` date DEFAULT NULL,
  `limite` int(11) DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `renovar`
--

INSERT INTO `renovar` (`id_renovar`, `id_presencial`, `id_codigo`, `id_livro`, `data_renovacao`, `data_entrega`, `limite`) VALUES
(2, 2, 1, 4, '2021-02-05', '2021-02-12', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservar`
--

CREATE TABLE IF NOT EXISTS `reservar` (
  `id_reserva` int(11) NOT NULL,
  `id_codigo` int(11) NOT NULL,
  `id_livro` int(11) NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `reservar`
--

INSERT INTO `reservar` (`id_reserva`, `id_codigo`, `id_livro`, `data`) VALUES
(7, 2, 5, '2021-02-05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_codigo` int(11) NOT NULL,
  `identificacao` int(11) DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nascimento` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpf` varchar(14) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fone_contato` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome_responsavel` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contato_responsavel` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rua` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `complemento` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cep` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` char(32) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_codigo`, `identificacao`, `nome`, `nascimento`, `cpf`, `email`, `fone_contato`, `nome_responsavel`, `contato_responsavel`, `rua`, `bairro`, `numero`, `complemento`, `cep`, `senha`) VALUES
(1, 12, 'Lucas', '02/05/2003', '1601097777', 'lucas@gmail', '91919292', 'alguem', '98989898', 'Rua João de Deus', 'Santo Antônio', 296, 'PRÓXIMO À CEMIG', '39440000', '202cb962ac59075b964b07152d234b70'),
(2, 1, 'Geissi', '24/05/2003', '23454678903', 'geissi@gmail', '98989898', 'alguem', '9456321251', 'rua 14', 'Esplanada', 101, 'adsasd', '39440000', '202cb962ac59075b964b07152d234b70'),
(3, 321, 'Laisa', '15/02/2003', '23454678903', 'laisa@gmail', '91919191', 'alguem', '98989898', 'rua 14', 'Padre Eustáquio', 779, 'perto da escola', '3040400', '202cb962ac59075b964b07152d234b70'),
(4, 9090, 'Edio Jr', '24/05/2003', '4132546978', 'edio@gmail', '91919292', 'alguem', '9456321251', 'rua 1', 'ceramica', 101, 'adsasd', '39490020', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id_adm`);

--
-- Indexes for table `entrar_fila`
--
ALTER TABLE `entrar_fila`
  ADD PRIMARY KEY (`id_fila`),
  ADD KEY `entrar_fila_ibfk_1` (`id_codigo`),
  ADD KEY `entrar_fila_ibfk_2` (`id_livro`);

--
-- Indexes for table `jornais`
--
ALTER TABLE `jornais`
  ADD PRIMARY KEY (`id_jornal`);

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id_livro`);

--
-- Indexes for table `presencial`
--
ALTER TABLE `presencial`
  ADD PRIMARY KEY (`id_presencial`),
  ADD KEY `fk_id_codigo1` (`id_codigo`),
  ADD KEY `fk_id_adm1` (`id_adm`),
  ADD KEY `fk_id_livro1` (`id_livro`);

--
-- Indexes for table `renovar`
--
ALTER TABLE `renovar`
  ADD PRIMARY KEY (`id_renovar`),
  ADD KEY `renovar_ibfk_1` (`id_presencial`),
  ADD KEY `renovar_ibfk_2` (`id_codigo`),
  ADD KEY `renovar_ibfk_3` (`id_livro`);

--
-- Indexes for table `reservar`
--
ALTER TABLE `reservar`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `fk_id_codigo` (`id_codigo`),
  ADD KEY `fk_id_livro` (`id_livro`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `id_adm` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `entrar_fila`
--
ALTER TABLE `entrar_fila`
  MODIFY `id_fila` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jornais`
--
ALTER TABLE `jornais`
  MODIFY `id_jornal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `id_livro` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `presencial`
--
ALTER TABLE `presencial`
  MODIFY `id_presencial` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `renovar`
--
ALTER TABLE `renovar`
  MODIFY `id_renovar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reservar`
--
ALTER TABLE `reservar`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_codigo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `entrar_fila`
--
ALTER TABLE `entrar_fila`
  ADD CONSTRAINT `entrar_fila_ibfk_1` FOREIGN KEY (`id_codigo`) REFERENCES `usuarios` (`id_codigo`),
  ADD CONSTRAINT `entrar_fila_ibfk_2` FOREIGN KEY (`id_livro`) REFERENCES `livros` (`id_livro`);

--
-- Limitadores para a tabela `presencial`
--
ALTER TABLE `presencial`
  ADD CONSTRAINT `fk_id_adm1` FOREIGN KEY (`id_adm`) REFERENCES `adm` (`id_adm`),
  ADD CONSTRAINT `fk_id_codigo1` FOREIGN KEY (`id_codigo`) REFERENCES `usuarios` (`id_codigo`),
  ADD CONSTRAINT `fk_id_livro1` FOREIGN KEY (`id_livro`) REFERENCES `livros` (`id_livro`);

--
-- Limitadores para a tabela `renovar`
--
ALTER TABLE `renovar`
  ADD CONSTRAINT `renovar_ibfk_1` FOREIGN KEY (`id_presencial`) REFERENCES `presencial` (`id_presencial`),
  ADD CONSTRAINT `renovar_ibfk_2` FOREIGN KEY (`id_codigo`) REFERENCES `usuarios` (`id_codigo`),
  ADD CONSTRAINT `renovar_ibfk_3` FOREIGN KEY (`id_livro`) REFERENCES `livros` (`id_livro`);

--
-- Limitadores para a tabela `reservar`
--
ALTER TABLE `reservar`
  ADD CONSTRAINT `fk_id_codigo` FOREIGN KEY (`id_codigo`) REFERENCES `usuarios` (`id_codigo`),
  ADD CONSTRAINT `fk_id_livro` FOREIGN KEY (`id_livro`) REFERENCES `livros` (`id_livro`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
