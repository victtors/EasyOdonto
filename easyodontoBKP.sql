-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Out-2018 às 15:54
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easyodonto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultas`
--

CREATE TABLE `consultas` (
  `id` int(10) UNSIGNED NOT NULL,
  `paciente_id` int(10) UNSIGNED NOT NULL,
  `dentista_id` int(10) UNSIGNED NOT NULL,
  `dente_id` int(10) UNSIGNED DEFAULT NULL,
  `servico_id` int(10) UNSIGNED DEFAULT NULL,
  `data` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `consultas`
--

INSERT INTO `consultas` (`id`, `paciente_id`, `dentista_id`, `dente_id`, `servico_id`, `data`, `created_at`, `updated_at`) VALUES
(22, 4, 12, NULL, NULL, '2018-10-14 09:00:00', '2018-10-20 20:14:24', '2018-10-20 20:44:27'),
(24, 6, 12, NULL, NULL, '2018-10-21 08:00:00', '2018-10-26 03:22:17', '2018-10-26 03:22:17'),
(26, 4, 12, NULL, NULL, '2018-10-29 05:00:00', '2018-10-29 03:46:01', '2018-10-29 03:46:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dentes`
--

CREATE TABLE `dentes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `dentes`
--

INSERT INTO `dentes` (`id`, `nome`, `numero`, `created_at`, `updated_at`) VALUES
(1, 'Incisivo central superior', 11, NULL, NULL),
(2, 'Incisivo central superior', 21, NULL, NULL),
(3, 'Incisivo lateral superior', 12, NULL, NULL),
(4, 'Incisivo lateral superior\r\n', 22, NULL, NULL),
(5, 'Canino superior', 13, NULL, NULL),
(6, 'Canino superior', 23, NULL, NULL),
(7, 'Pré molar superior', 14, NULL, NULL),
(8, 'Pré molar superior', 15, NULL, NULL),
(9, 'Pré molar superior', 24, NULL, NULL),
(10, 'Pré molar superior', 25, NULL, NULL),
(11, 'Molar superior', 16, NULL, NULL),
(12, 'Molar superior', 17, NULL, NULL),
(13, 'Molar superior', 18, NULL, NULL),
(14, 'Molar superior', 26, NULL, NULL),
(15, 'Molar superior', 27, NULL, NULL),
(16, 'Molar superior', 28, NULL, NULL),
(17, 'Incisivo central inferior', 31, NULL, NULL),
(18, 'Incisivo central inferior', 41, NULL, NULL),
(19, 'Incisivo lateral inferior', 32, NULL, NULL),
(20, 'Incisivo lateral inferior', 42, NULL, NULL),
(21, 'Canino inferior', 33, NULL, NULL),
(22, 'Canino inferior', 43, NULL, NULL),
(23, 'Pré molar inferior', 34, NULL, NULL),
(24, 'Pré molar inferior', 35, NULL, NULL),
(25, 'Pré molar inferior', 44, NULL, NULL),
(26, 'Pré molar inferior', 45, NULL, NULL),
(27, 'Molar inferior', 36, NULL, NULL),
(28, 'Molar inferior', 37, NULL, NULL),
(29, 'Molar inferior', 37, NULL, NULL),
(30, 'Molar inferior', 38, NULL, NULL),
(31, 'Molar inferior', 46, NULL, NULL),
(32, 'Molar inferior', 47, NULL, NULL),
(33, 'Molar inferior', 48, NULL, NULL),
(35, 'Todos', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2018_09_09_042946_create_pacientes_table', 1),
(3, '2018_09_30_211235_create_dentes_table', 1),
(4, '2018_09_30_225250_create_servicos_table', 1),
(5, '2018_09_30_210114_create_consulta', 2),
(6, '2018_10_15_013346_create_tratamentos_table', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nacionalidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profissao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contato` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tratamentoMedico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tomandoRemedio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estaGravida` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suspendeuRemedio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alergia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sensivelMetalouLatex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diabetico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sujeitoAInfeccoes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `epilepsia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desmaiaTonturas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pressaoIrregular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formigamentoExtremidades` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sangraMuito` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuma` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foiOperado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doencaGrave` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `problemasCardiacos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `respiraBemPeloNariz` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dificuldadeAbrirBoca` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doresNaFace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rangeOsDentes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emamastigaBemAlimentosil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `retencaoDeComida` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mascarChiclete` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tomarCafe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comerForaDeHora` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gengivaDolorida` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instrucaoDeHigieneBucal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `escovarOsDentes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fioDental` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vaiAoDentista` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tratamentoOdontológico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `nome`, `cpf`, `data_nascimento`, `genero`, `endereco`, `cidade`, `estado`, `nacionalidade`, `profissao`, `contato`, `email`, `tratamentoMedico`, `tomandoRemedio`, `estaGravida`, `suspendeuRemedio`, `alergia`, `sensivelMetalouLatex`, `diabetico`, `sujeitoAInfeccoes`, `epilepsia`, `desmaiaTonturas`, `pressaoIrregular`, `formigamentoExtremidades`, `sangraMuito`, `fuma`, `foiOperado`, `doencaGrave`, `problemasCardiacos`, `respiraBemPeloNariz`, `dificuldadeAbrirBoca`, `doresNaFace`, `rangeOsDentes`, `emamastigaBemAlimentosil`, `retencaoDeComida`, `mascarChiclete`, `tomarCafe`, `comerForaDeHora`, `gengivaDolorida`, `instrucaoDeHigieneBucal`, `escovarOsDentes`, `fioDental`, `vaiAoDentista`, `tratamentoOdontológico`, `created_at`, `updated_at`) VALUES
(4, 'Juan Carlos Justiniano Coelho', '55664830204', '1997-10-20', 'masculino', 'Travessa esmeralda, 248 - Nova Esperança', 'Rio Branco', 'Acre', 'Brasil', 'Estagiárioooo', '68 9614-2774', 'juancarlos@gmail.com', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Sim', 'Sim', 'Sim', '3', '0', '1 vez por ano', '2 meses atrás', '2018-10-20 19:03:12', '2018-10-20 19:03:40'),
(6, 'Neymar', '12345678905', '1995-11-17', 'masculino', 'Av. Brasil, Quadra 1 Casa 01A', 'Rio Branco', 'Acre', 'Brasil', 'Jogado', '68 99229-5059', 'ney@bola.com', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Sim', 'Sim', 'Sim', '3', '2', '2 vezes ao ano', '6 meses atrás', '2018-10-20 19:30:55', '2018-10-20 19:30:55'),
(7, 'Paulo Henriqueeeee', '12345678908', '1996-11-11', 'masculino', 'Av. Brasil, Quadra 1 Casa 01A', 'Rio Branco', 'AC', 'Brasil', 'T.I', '68 99229-5059', 'j.v.silva.n@gmail.com', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Sim', 'Sim', 'Sim', '3', '2', 'uma vez ao ano', '5 meses atrás', '2018-10-20 21:25:50', '2018-10-20 21:26:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `nome`, `created_at`, `updated_at`) VALUES
(9, 'Restauração', '2018-10-20 18:59:13', '2018-10-20 18:59:13'),
(10, 'Canal', '2018-10-20 18:59:41', '2018-10-20 18:59:41'),
(13, 'Extração', '2018-10-26 03:18:17', '2018-10-26 03:18:17'),
(14, 'Clareamento', '2018-10-27 20:15:05', '2018-10-27 20:15:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tratamentos`
--

CREATE TABLE `tratamentos` (
  `id` int(10) UNSIGNED NOT NULL,
  `servico_id` int(10) UNSIGNED DEFAULT NULL,
  `dente_id` int(10) UNSIGNED DEFAULT NULL,
  `dentista_id` int(10) UNSIGNED DEFAULT NULL,
  `paciente_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tratamentos`
--

INSERT INTO `tratamentos` (`id`, `servico_id`, `dente_id`, `dentista_id`, `paciente_id`, `created_at`, `updated_at`) VALUES
(1, 10, 5, 12, 4, '2018-10-20 19:12:48', '2018-10-20 19:12:48'),
(2, 9, 1, 12, 4, '2018-10-20 19:13:39', '2018-10-20 19:13:39'),
(4, 13, 5, 12, 6, '2018-10-26 03:23:05', '2018-10-26 03:23:05'),
(5, 14, 35, 12, 4, '2018-10-27 20:19:32', '2018-10-27 20:19:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` enum('A','D','ADM') COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `usuario`, `cpf`, `tipo`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'João Víctor', 'joao', '023.163.152-45', 'ADM', '$2y$10$OmVDEf8VqSF.LVBjMmfbQ.1d/unt0lPzUu9V2P6gD4QRiyh5cKcDy', '9sLx92FgxRzFSGcUztVSUq23BnuWzzfqBQj6fooTfmw08WtQylQOvZrLGiaZ', '2018-10-01 16:37:19', '2018-10-20 18:52:18'),
(11, 'Debora', 'debora', '12345678901', 'A', '$2y$10$SWwFhhuLQ0ZdC3X5o4Fyn.WU1PxX5vdhDITMNCqspDNTc84FkBieq', 'MR7YNl0UF8Kxl8OpyMd4L0q6Ee46Hx69gbYqeCFOAav5LSINwpQFMpmRGLBU', '2018-10-20 18:54:47', '2018-10-20 18:55:36'),
(12, 'William Maffi', 'william', '03185849213', 'D', '$2y$10$O.vgOwpUY1tQEY7gZ0dwwuBcEpAynBjI2omVtk01/IOvP1qeGvsqi', 'FQcZ9uBklb0dbsRyp73PzONrULSCW0K7i7YNA9goifu58Kl4ayRtBQEGjy8j', '2018-10-20 18:56:56', '2018-10-20 18:57:14'),
(13, 'Tiago Nolasco', 'nolasco', '03283343241', 'D', '$2y$10$i5XXt.mi6o9MNr2T9Rhp9.Cxq7eYANMWdqFE3Z4IqosTHQ/WhwBaq', NULL, '2018-10-20 18:57:52', '2018-10-20 18:58:01'),
(16, 'Teste', 'teste', '12345678907', 'D', '$2y$10$F1Ttf6CNkQGCXJi0Re4ZH.BjYJXVZ2YVcr421eW2Ho7RT3Jv/814K', NULL, '2018-10-20 21:23:44', '2018-10-20 21:23:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `consultas_paciente_id_foreign` (`paciente_id`),
  ADD KEY `consultas_dentista_id_foreign` (`dentista_id`),
  ADD KEY `consultas_dente_id_foreign` (`dente_id`),
  ADD KEY `consultas_servico_id_foreign` (`servico_id`);

--
-- Indexes for table `dentes`
--
ALTER TABLE `dentes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pacientes_cpf_unique` (`cpf`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tratamentos`
--
ALTER TABLE `tratamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tratamentos_servico_id_foreign` (`servico_id`),
  ADD KEY `tratamentos_dente_id_foreign` (`dente_id`),
  ADD KEY `tratamentos_dentista_id_foreign` (`dentista_id`),
  ADD KEY `tratamentos_paciente_id_foreign` (`paciente_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_usuario_unique` (`usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `dentes`
--
ALTER TABLE `dentes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tratamentos`
--
ALTER TABLE `tratamentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `consultas_dente_id_foreign` FOREIGN KEY (`dente_id`) REFERENCES `dentes` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `consultas_dentista_id_foreign` FOREIGN KEY (`dentista_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `consultas_paciente_id_foreign` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`id`),
  ADD CONSTRAINT `consultas_servico_id_foreign` FOREIGN KEY (`servico_id`) REFERENCES `servicos` (`id`) ON DELETE SET NULL;

--
-- Limitadores para a tabela `tratamentos`
--
ALTER TABLE `tratamentos`
  ADD CONSTRAINT `tratamentos_dente_id_foreign` FOREIGN KEY (`dente_id`) REFERENCES `dentes` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `tratamentos_dentista_id_foreign` FOREIGN KEY (`dentista_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `tratamentos_paciente_id_foreign` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `tratamentos_servico_id_foreign` FOREIGN KEY (`servico_id`) REFERENCES `servicos` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
