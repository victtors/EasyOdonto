-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Nov-2018 às 16:20
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

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
  `data` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `consultas`
--

INSERT INTO `consultas` (`id`, `paciente_id`, `dentista_id`, `data`, `created_at`, `updated_at`) VALUES
(5, 7, 3, '2018-11-26 10:00:00', '2018-11-27 00:49:45', '2018-11-27 00:49:45'),
(6, 3, 17, '2018-11-26 10:00:00', '2018-11-27 00:49:59', '2018-11-27 00:50:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dentes`
--

CREATE TABLE `dentes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
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
(4, 'Incisivo lateral superior', 22, NULL, NULL),
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
(25, 'Pré molar inferior', 44, NULL, NULL);

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
(6, '2018_10_15_013346_create_tratamentos_table', 2),
(7, '2018_10_29_015346_create_column_ativo_funcionarios', 2),
(8, '2018_10_29_015919_create_column_ativo_servicos', 2),
(9, '2018_11_23_105021_alter_table_users', 3);

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
(2, 'Demóstenes Nascimento', '213.123.232-13', '1960-02-12', 'masculino', 'Av. Brasil', 'Rio Branco', 'AC', 'brasileiro', 'Jogador', '(99)99999-99', 'demostevetv5@gmail.com', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', '3', '2', '2', '3', '2018-11-24 03:30:35', '2018-11-24 03:30:35'),
(3, 'Neymar', '123.456.678-89', '1998-02-02', 'masculino', 'do ney', 'rio branco', 'acre', 'brasileiro', 'estudante', '(78)34973-4392', 'ncjkanjan@njfasnfjaj', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', '3', '2', '2', '2', '2018-11-24 20:15:54', '2018-11-24 20:15:54'),
(4, 'leonardo', '123.456.778-88', '9920-02-09', 'masculino', 'rua alguma coisa', 'rio branco', 'acre', 'brasileiro', 'estudante', '(12)31423-4324', 'xzczczxc@gmail.com', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Sim', 'Sim', 'Não', 'Não', 'Não', '3', 'mais3', '2', '0', '2018-11-24 20:29:23', '2018-11-24 20:29:23'),
(6, 'BOLSONAROMITO', '123.224.324-23', '1998-02-02', 'masculino', 'asasdsdasddsadsa', 'saddas', 'asdas', 'brasileiro', 'dasdas', '(32)32432-4234', 'fsdfdsfdsdfds', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', '0', '2', '3', '3', '2018-11-24 21:20:44', '2018-11-24 21:21:07'),
(7, 'Paulo Henrique', '123.456.789-00', '1990-03-31', 'masculino', 'Av. Brasil', 'Rio Branco', 'AC', 'brasileiro', 'Estagiárioooo', '(99)99999-9999', 'ney@bola.com', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Sim', 'Sim', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', 'Não', '0', '0', '1', '1', '2018-11-27 00:49:24', '2018-11-27 00:49:24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ativo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `nome`, `created_at`, `updated_at`, `ativo`) VALUES
(1, 'Canal', NULL, NULL, 1),
(5, 'Restauração', '2018-11-27 00:46:30', '2018-11-27 00:46:30', 1);

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
(1, NULL, 2, 3, NULL, '2018-11-13 01:03:27', '2018-11-13 01:03:27'),
(2, NULL, 21, NULL, NULL, '2018-11-13 01:05:11', '2018-11-13 01:05:11'),
(3, NULL, 2, 3, 2, '2018-11-24 20:18:06', '2018-11-24 20:18:06'),
(4, NULL, 5, NULL, 3, '2018-11-24 20:19:19', '2018-11-24 20:19:19'),
(5, 1, 3, NULL, 4, '2018-11-24 20:31:28', '2018-11-24 20:31:28'),
(6, 5, 14, 3, 7, '2018-11-27 00:51:45', '2018-11-27 00:51:45');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `ativo` tinyint(4) NOT NULL,
  `cargo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `usuario`, `cpf`, `tipo`, `password`, `remember_token`, `created_at`, `updated_at`, `ativo`, `cargo`, `cro`) VALUES
(1, 'João Víctor', 'joao', '023.164.152-45', 'ADM', '$2y$10$3mPDyrK1/8mkyakubDDGLe.lCjYs3TYO6NVSjV6.4dlOZYcL7eW8u', 'XwYvhZUaMyEdteYrv08LQBpnauIii3vBoos3mvYJd448fmQ4T3lPH23sIBrz', NULL, '2018-11-13 03:33:57', 1, NULL, NULL),
(2, 'Debora', 'debora', '12345678900', 'A', '$2y$10$yjr29z2yaj.6DOYXLtRi..LAz1qrZsnab94cxsytRrgUuYub6b2F.', 'MMJmAtzsnKkji2NiB6HdXqZMOXjwMrhEiJKAmvgR1mWH2OfcLN0VlWaDiykm', '2018-11-10 00:51:23', '2018-11-27 00:00:17', 1, NULL, NULL),
(3, 'William', 'william', '12345678901', 'D', '$2y$10$3BQIRliNnDRW9KJiql2PzOKwvEz6rs5Eej9TqmrKa7OGZozNh0Bsi', 'tWEc0StYmkNx74rlIzldgZhmUmzxStHwzutQKvvVBu2AHl2kzUEAGwIIdmG7', '2018-11-10 01:01:35', '2018-11-27 00:00:30', 1, 'Cirurgião', '10071'),
(17, 'Tiago Nolasco', 'titico', '467.777.878-78', 'D', '$2y$10$aUKdlu9ysvKSebRXaO2VW.anKZllXxeayEG0wL1ZR4a9fciz0m206', NULL, '2018-11-27 00:47:41', '2018-11-27 00:47:41', 1, 'Cirurgião', '1071');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `consultas_paciente_id_foreign` (`paciente_id`),
  ADD KEY `consultas_dentista_id_foreign` (`dentista_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dentes`
--
ALTER TABLE `dentes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tratamentos`
--
ALTER TABLE `tratamentos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `consultas_dentista_id_foreign` FOREIGN KEY (`dentista_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `consultas_paciente_id_foreign` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`id`);

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
