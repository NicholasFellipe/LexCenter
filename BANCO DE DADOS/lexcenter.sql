-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 30-Jul-2019 às 21:46
-- Versão do servidor: 5.7.23-23
-- versão do PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agnald39_lexcenter`
--
CREATE DATABASE IF NOT EXISTS `agnald39_lexcenter` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `agnald39_lexcenter`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `as_banner`
--

DROP TABLE IF EXISTS `as_banner`;
CREATE TABLE `as_banner` (
  `ban_id` int(11) NOT NULL,
  `ban_nomeconcurso` varchar(80) DEFAULT NULL,
  `ban_descricao` varchar(80) DEFAULT NULL,
  `ban_img` varchar(80) DEFAULT NULL,
  `ban_linkcurso` varchar(180) DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=2048 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `as_banner`
--

INSERT INTO `as_banner` (`ban_id`, `ban_nomeconcurso`, `ban_descricao`, `ban_img`, `ban_linkcurso`) VALUES
(1, 'Seja bem-vindo!', 'Lex Center Educacional', '190729113651logo.png.png', 'https://lexcenter.com.br/categorias/11/blog-do-concurseiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `as_categorias`
--

DROP TABLE IF EXISTS `as_categorias`;
CREATE TABLE `as_categorias` (
  `cate_id` int(11) NOT NULL,
  `cate_nome` varchar(80) DEFAULT NULL,
  `cate_img` varchar(80) DEFAULT NULL,
  `cate_slug` varchar(80) DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=4096 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `as_categorias`
--

INSERT INTO `as_categorias` (`cate_id`, `cate_nome`, `cate_img`, `cate_slug`) VALUES
(6, 'Provas Anteriores', 'prova.jpg', 'provas-anteriores'),
(7, 'Alunos Aprovados', 'alunos.jpg', 'alunos-aprovados'),
(10, 'Preparatório Lex Center', 'concursos.jpg', 'preparatorio-lex-center'),
(11, 'Blog do Concurseiro', 'blog.jpg', 'blog-do-concurseiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `as_clientes`
--

DROP TABLE IF EXISTS `as_clientes`;
CREATE TABLE `as_clientes` (
  `cli_id` int(10) UNSIGNED NOT NULL,
  `cli_usuario` varchar(80) DEFAULT 'DESATIVADO',
  `cli_nome` varchar(80) DEFAULT NULL,
  `cli_sobrenome` varchar(80) DEFAULT NULL,
  `cli_fone` varchar(14) DEFAULT NULL,
  `cli_celular` varchar(15) DEFAULT NULL,
  `cli_email` varchar(120) DEFAULT NULL,
  `cli_pass` varchar(128) DEFAULT NULL,
  `cli_data_nasc` date DEFAULT NULL,
  `cli_data_cad` date DEFAULT NULL,
  `cli_hora_cad` time DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=2048 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `as_clientes`
--

INSERT INTO `as_clientes` (`cli_id`, `cli_usuario`, `cli_nome`, `cli_sobrenome`, `cli_fone`, `cli_celular`, `cli_email`, `cli_pass`, `cli_data_nasc`, `cli_data_cad`, `cli_hora_cad`) VALUES
(14, 'ATIVADO', 'Nicholas', 'Pereira', '21030354', '12997284072', 'nicholasfelliperp@gmail.com', '4a6882b610da2ce805307b29f397c7f9912c0c2cd7eb70765267398da7ff909eee05a6cf146b9b4dc7b4e800246963ba1494a741d8dce25dfd76e59cf65a7c50', '1996-03-28', '2019-06-13', '15:31:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `as_concursos`
--

DROP TABLE IF EXISTS `as_concursos`;
CREATE TABLE `as_concursos` (
  `con_id` int(11) NOT NULL,
  `con_categoria` int(11) DEFAULT NULL,
  `con_nome` varchar(100) DEFAULT NULL,
  `con_desc_pequena` text,
  `con_desc` text,
  `con_img` varchar(60) DEFAULT NULL,
  `con_tempocurso` varchar(30) DEFAULT NULL,
  `con_disciplinas` varchar(20) DEFAULT NULL,
  `con_aprovacaotaxa` varchar(10) DEFAULT NULL,
  `con_dataini` date DEFAULT NULL,
  `con_datafim` date DEFAULT NULL,
  `con_datapostagem` date DEFAULT NULL,
  `con_arquivo` varchar(400) DEFAULT NULL,
  `con_slug` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=682 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `as_concursos`
--

INSERT INTO `as_concursos` (`con_id`, `con_categoria`, `con_nome`, `con_desc_pequena`, `con_desc`, `con_img`, `con_tempocurso`, `con_disciplinas`, `con_aprovacaotaxa`, `con_dataini`, `con_datafim`, `con_datapostagem`, `con_arquivo`, `con_slug`) VALUES
(58, 6, 'Provas Anteriores PC SP 2018', 'Policia Civil 2018 Agente de Telecomunicações', '<p>Prova anterior da PC SP 2018 de agente de telecomunica&ccedil;&otilde;es, bons estudos!!</p>', '190729114134policia-civil-de-sao-paulo-edital.jpg.jpg', '2 Meses', '10', '60', '0000-00-00', '0000-00-00', '2019-07-29', '190729114043policia-civil-de-sao-paulo-edital.jpg.jpg', 'provas-anteriores-pc-sp-2018'),
(61, 10, 'Prefeitura de Guaratinguetá/SP 2019', 'Mais de 250 vagas', '<p>Prefeitura de Guaratinguet&aacute;/SP</p>\r\n<p>N&iacute;veis Fundamental, M&eacute;dio, M&eacute;dio/T&eacute;cnico e Superior</p>\r\n<p>V&aacute;rios Cargos</p>\r\n<p>Aulas de segunda a sexta</p>', '190729111317guara.jpg.jpg', '2 Meses', '03', '--', '2019-08-14', '2020-01-10', '2019-07-29', NULL, 'prefeitura-de-guaratingueta-sp-2019');

-- --------------------------------------------------------

--
-- Estrutura da tabela `as_depoimentoaprovados`
--

DROP TABLE IF EXISTS `as_depoimentoaprovados`;
CREATE TABLE `as_depoimentoaprovados` (
  `dep_id` int(11) NOT NULL,
  `dep_nomealuno` varchar(80) DEFAULT NULL,
  `dep_concurso` varchar(80) DEFAULT NULL,
  `dep_img` varchar(80) DEFAULT NULL,
  `dep_depoimento` text
) ENGINE=InnoDB AVG_ROW_LENGTH=2048 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `as_inscricoes`
--

DROP TABLE IF EXISTS `as_inscricoes`;
CREATE TABLE `as_inscricoes` (
  `ins_id` int(11) NOT NULL,
  `ins_nome` varchar(80) DEFAULT NULL,
  `ins_img` varchar(300) DEFAULT NULL,
  `ins_dataini` date DEFAULT NULL,
  `ins_datafim` date DEFAULT NULL,
  `ins_linkinscricao` varchar(400) DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=2048 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `as_inscricoes`
--

INSERT INTO `as_inscricoes` (`ins_id`, `ins_nome`, `ins_img`, `ins_dataini`, `ins_datafim`, `ins_linkinscricao`) VALUES
(20, 'Prefeitura de Guaratinguetá mais de 250 vagas', '190726222814logomarca-final-prefeitura-2017-2020-2-1024.jpg', '2019-08-08', '2019-09-16', 'http://guaratingueta.sp.gov.br/prefeitura-abre-concurso-publico-e-processo-selet');

-- --------------------------------------------------------

--
-- Estrutura da tabela `as_materiadodia`
--

DROP TABLE IF EXISTS `as_materiadodia`;
CREATE TABLE `as_materiadodia` (
  `mat_id` int(11) NOT NULL,
  `mat_nome` varchar(100) DEFAULT NULL,
  `mat_disciplina` varchar(80) DEFAULT NULL,
  `mat_descricao` text,
  `mat_arquivo` varchar(400) DEFAULT NULL,
  `mat_data` date DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=2048 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `as_materiadodia`
--

INSERT INTO `as_materiadodia` (`mat_id`, `mat_nome`, `mat_disciplina`, `mat_descricao`, `mat_arquivo`, `mat_data`) VALUES
(1, 'Aula 102', 'Informatica', '<p>Material da primeira aula de Informatica</p>', '190729110003mapa-da-prova-por-temas-2018.pdf.pdf', '2019-07-10'),
(2, 'Aula 6', 'Informatica', '<p>Material de informatica, contem alguns exercicos!!!</p>', '190723224956hackerboxes-0020-summer-camp-guide.pdf.pdf', '2019-07-22'),
(4, 'Aula 2', 'Portugues', '<p>gfa</p>', '190724115632criminologia.pdf.pdf', '2019-07-15'),
(5, 'Aula 001', 'Portugues', '<p>teste</p>', '190724115754curso-67017-questoes-prova-oral-02-07-inves.pdf', '2019-07-21'),
(6, 'Aula 0002', 'Calculo', '<p>teste</p>', '190724115953tipologia-textual.pdf.pdf', '2019-07-12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `as_professores`
--

DROP TABLE IF EXISTS `as_professores`;
CREATE TABLE `as_professores` (
  `prof_id` int(11) NOT NULL,
  `prof_nome` varchar(80) DEFAULT NULL,
  `prof_img` varchar(80) DEFAULT NULL,
  `prof_disciplina` varchar(80) DEFAULT NULL,
  `prof_facebook` varchar(300) DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=2048 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `as_professores`
--

INSERT INTO `as_professores` (`prof_id`, `prof_nome`, `prof_img`, `prof_disciplina`, `prof_facebook`) VALUES
(6, 'Nicholas Fellipe', '19072220135423405829-1107473792718358-90908910244891761.jpg', 'Professor de Informática', 'https://www.facebook.com/NicholasFellipe');

-- --------------------------------------------------------

--
-- Estrutura da tabela `as_user`
--

DROP TABLE IF EXISTS `as_user`;
CREATE TABLE `as_user` (
  `user_id` int(11) NOT NULL,
  `user_nome` varchar(30) DEFAULT NULL,
  `user_email` varchar(60) DEFAULT NULL,
  `user_pw` varchar(128) DEFAULT NULL
) ENGINE=InnoDB AVG_ROW_LENGTH=16384 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `as_user`
--

INSERT INTO `as_user` (`user_id`, `user_nome`, `user_email`, `user_pw`) VALUES
(1, 'Adriano', 'admin@teste.com', '202cb962ac59075b964b07152d234b70'),
(2, 'nic', 'nic@gmail.com', '9580b90b39df16fb93f2282a6bbac4f5afe47f349e22f71c5650b8c54571fb09587181541a4a51f4c5018604bc93e9f44232370d0d4cac18c04274a6b6e3cdc0'),
(3, 'Nicholas', 'nicholasfelliperp@gmail.com', '9580b90b39df16fb93f2282a6bbac4f5afe47f349e22f71c5650b8c54571fb09587181541a4a51f4c5018604bc93e9f44232370d0d4cac18c04274a6b6e3cdc0'),
(4, 'Adriano', 'nicholasfelliperp@gmail.com', ''),
(5, 'Adriano', 'nicholasfelliperp@gmail.com', ''),
(6, 'Jorge', 'naoresponda@lexcenter.com.br', '37efaf13fced93ecda01fabcc4ee14eda41f0bb95f169ff0d64bb1f27b984fe6462f387265a30c26b241339a680330b2e2b3cda75bd28619473c55890fc53a9d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `as_banner`
--
ALTER TABLE `as_banner`
  ADD PRIMARY KEY (`ban_id`);

--
-- Indexes for table `as_categorias`
--
ALTER TABLE `as_categorias`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `as_clientes`
--
ALTER TABLE `as_clientes`
  ADD PRIMARY KEY (`cli_id`);

--
-- Indexes for table `as_concursos`
--
ALTER TABLE `as_concursos`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `as_depoimentoaprovados`
--
ALTER TABLE `as_depoimentoaprovados`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `as_inscricoes`
--
ALTER TABLE `as_inscricoes`
  ADD PRIMARY KEY (`ins_id`);

--
-- Indexes for table `as_materiadodia`
--
ALTER TABLE `as_materiadodia`
  ADD PRIMARY KEY (`mat_id`);

--
-- Indexes for table `as_professores`
--
ALTER TABLE `as_professores`
  ADD PRIMARY KEY (`prof_id`);

--
-- Indexes for table `as_user`
--
ALTER TABLE `as_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `as_banner`
--
ALTER TABLE `as_banner`
  MODIFY `ban_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `as_categorias`
--
ALTER TABLE `as_categorias`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `as_clientes`
--
ALTER TABLE `as_clientes`
  MODIFY `cli_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `as_concursos`
--
ALTER TABLE `as_concursos`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `as_depoimentoaprovados`
--
ALTER TABLE `as_depoimentoaprovados`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `as_inscricoes`
--
ALTER TABLE `as_inscricoes`
  MODIFY `ins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `as_materiadodia`
--
ALTER TABLE `as_materiadodia`
  MODIFY `mat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `as_professores`
--
ALTER TABLE `as_professores`
  MODIFY `prof_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `as_user`
--
ALTER TABLE `as_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
