-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Out-2021 às 17:00
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vacinaagora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendacad`
--
-- Erro ao ler a estrutura para a tabela vacinaagora.agendacad: #1030 - Obteve erro 194 &quot;Tablespace is missing for a table&quot; no manipulador de tabelas InnoDB
-- Erro ao ler dados para tabela vacinaagora.agendacad: #1064 - Você tem um erro de sintaxe no seu SQL próximo a 'FROM `vacinaagora`.`agendacad`' na linha 1

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadfunc`
--

CREATE TABLE `cadfunc` (
  `idFunc` int(11) NOT NULL,
  `nomeFunc` varchar(50) CHARACTER SET utf8 NOT NULL,
  `funcaoFunc` varchar(30) CHARACTER SET utf8 NOT NULL,
  `localFunc` varchar(20) CHARACTER SET utf8 NOT NULL,
  `loginFunc` varchar(12) CHARACTER SET utf8 NOT NULL,
  `senhaFunc` varchar(8) CHARACTER SET utf8 NOT NULL,
  `confsenhaFunc` varchar(8) CHARACTER SET utf8 NOT NULL,
  `niveis_acesso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadfunc`
--

INSERT INTO `cadfunc` (`idFunc`, `nomeFunc`, `funcaoFunc`, `localFunc`, `loginFunc`, `senhaFunc`, `confsenhaFunc`, `niveis_acesso_id`) VALUES
(1, 'Alberto', 'Atendente', 'upa', '123', '12345678', '12345678', 1),
(2, 'Bruno', 'Enfermeiro', 'upa', '321', '87654321', '87654321', 2),
(3, '11', '1', '1', '11111111', '11111111', '11111111', 1),
(4, '22', '2', '2', '22222222', '22222222', '22222222', 2),
(5, '3', '1', '1', '33333333', '33333333', '33333333', 2),
(6, '4', '2', '3', '44444444', '44444444', '44444444', 2),
(7, '5', '1', '1', '55555555', '55555555', '55555555', 2),
(8, '6', '2', '3', '666', '66666666', '66666666', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcaovacina`
--

CREATE TABLE `funcaovacina` (
  `id` int(11) NOT NULL,
  `funcao` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcaovacina`
--

INSERT INTO `funcaovacina` (`id`, `funcao`) VALUES
(1, 'Enfermeira'),
(2, 'Atendente'),
(3, 'Supervisor'),
(4, 'Admnistrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `localvacina`
--

CREATE TABLE `localvacina` (
  `id` int(11) NOT NULL,
  `localVacina` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `localvacina`
--

INSERT INTO `localvacina` (`id`, `localVacina`) VALUES
(1, 'Drive Trhu estadio Campanella'),
(2, 'Drive Trhu Garagem Municipal'),
(3, 'Drive Thru Teatro Paulo Machado de Carvalho'),
(4, 'USCA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarioniveisacessoid`
--

CREATE TABLE `usuarioniveisacessoid` (
  `id` int(1) NOT NULL,
  `nivel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarioniveisacessoid`
--

INSERT INTO `usuarioniveisacessoid` (`id`, `nivel`) VALUES
(1, 'Administrador'),
(2, 'Atendente');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadfunc`
--
ALTER TABLE `cadfunc`
  ADD PRIMARY KEY (`idFunc`);

--
-- Índices para tabela `funcaovacina`
--
ALTER TABLE `funcaovacina`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `localvacina`
--
ALTER TABLE `localvacina`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarioniveisacessoid`
--
ALTER TABLE `usuarioniveisacessoid`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadfunc`
--
ALTER TABLE `cadfunc`
  MODIFY `idFunc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `funcaovacina`
--
ALTER TABLE `funcaovacina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `localvacina`
--
ALTER TABLE `localvacina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarioniveisacessoid`
--
ALTER TABLE `usuarioniveisacessoid`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
