--
-- Database: `banco_de_dados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `idIten` int(11) NOT NULL,
  `fabricante` varchar(255) NOT NULL,
  `validade` int(11) NOT NULL,
  `lote` int(11) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel_acessos`
--

CREATE TABLE `nivel_acessos` (
  `idNivel` int(11) NOT NULL,
  `nome_nivel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `nivel_acessos`
--

INSERT INTO `nivel_acessos` (`idNivel`, `nome_nivel`) VALUES
(1, 'Administrador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel_acesso_id` int(11) NOT NULL,
  `create` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nome`, `email`, `login`, `senha`, `nivel_acesso_id`, `create`, `modified`) VALUES
(1, 'Ivan', 'camargo65@gmail.com', 'camargone', '123', 1, '2017-11-20 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`idIten`);

--
-- Indexes for table `nivel_acessos`
--
ALTER TABLE `nivel_acessos`
  ADD PRIMARY KEY (`idNivel`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itens`
--
ALTER TABLE `itens`
  MODIFY `idIten` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nivel_acessos`
--
ALTER TABLE `nivel_acessos`
  MODIFY `idNivel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
