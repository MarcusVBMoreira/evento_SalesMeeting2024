-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/12/2023 às 01:58
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `evento`
--
CREATE DATABASE IF NOT EXISTS `evento` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `evento`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `sobre` varchar(5000) NOT NULL,
  `pais` varchar(255) NOT NULL,
  `endereco` varchar(2000) NOT NULL,
  `imagem` varchar(220) NOT NULL DEFAULT 'perfil.png',
  `tamanho_chinelo` varchar(255) NOT NULL,
  `tamanho_camiseta` varchar(255) NOT NULL,
  `tipo_documento` varchar(255) NOT NULL,
  `tamanho_calca` varchar(255) NOT NULL,
  `musica` varchar(255) NOT NULL,
  `data_nascimento` date NOT NULL,
  `idiomas` varchar(255) NOT NULL,
  `signo` varchar(255) NOT NULL,
  `formacao` varchar(255) NOT NULL,
  `pets` varchar(255) NOT NULL,
  `restricao` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `fuma` varchar(255) NOT NULL,
  `interesses` varchar(500) NOT NULL,
  `alergia` varchar(500) NOT NULL,
  `contry` varchar(255) NOT NULL DEFAULT 'paises'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `email`, `senha`, `cpf`, `cargo`, `sobre`, `pais`, `endereco`, `imagem`, `tamanho_chinelo`, `tamanho_camiseta`, `tipo_documento`, `tamanho_calca`, `musica`, `data_nascimento`, `idiomas`, `signo`, `formacao`, `pets`, `restricao`, `linkedin`, `fuma`, `interesses`, `alergia`, `contry`) VALUES
(10, 'Guillermo Amezcua\r\n', 'will_amezcua@baxter.com', 'will_amezcua_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'EUA'),
(11, 'Alexandre Alves Peixoto\r\n', 'alexandre_peixoto@baxter.com', 'alexandre_peixoto_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(12, 'Daniela dos Santos Rollo', 'daniela_rollo@baxter.com', 'daniela_rollo_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(13, 'Marcio Olimpio', 'marcio_olimpio@baxter.com', 'marcio_olimpio_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(14, 'Celia Regina Rossini', 'celia_rossini@baxter.com', 'celia_rossini_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(15, 'Daniele Rodrigues Lima', 'daniele_lima@baxter.com', 'daniele_lima_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(16, 'Jessica Elisa Kosarevitz', 'jessica_kosarevitz@baxter.com', 'jessica_kosarevitz_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(17, 'Reisila Simone Tonaco', 'reisila_tonaco@baxter.com', 'reisila_tonaco_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(18, 'Talitha Bordini de Mello', 'talitha_bordini@baxter.com', 'talitha_bordini_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(19, 'Cleiton Luiz dos Reis', 'cleiton_reis@baxter.com', 'cleiton_reis_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(20, 'Jose Haroldo Pedroso', 'haroldo_pedroso@baxter.com', 'haroldo_pedroso_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(21, 'Erika Mota', 'erika_mota@baxter.com', 'erika_mota_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(22, 'Duarte Machado', 'duarte_machado@baxter.com', 'duarte_machado_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(23, 'Adriana Prestes', 'adriana_prestes@baxter.com', 'adriana_prestes_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(24, 'Amanda Talita Oliveira', 'amanda_oliveira@baxter.com', 'amanda_oliveira_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(25, 'Juliana Morettim', 'juliana_morettim@baxter.com', 'juliana_morettim_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(26, 'Mariana Grassi', 'mariana_grassi@baxter.com', 'mariana_grassi_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(27, 'Marinez Simão', 'marinez_simao@baxter.com', 'marinez_simao_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(28, 'Regina Fortes', 'regina_fortes@baxter.com', 'regina_fortes_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(29, 'Grasiele Damasceno', 'grasiele_damasceno@baxter.com', 'grasiele_damasceno_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(30, 'Marcos Barbosa Alves', 'marcos_alves@baxter.com', 'marcos_alves_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(31, 'Jacqueline Leiva', 'jacqueline_leiva@baxter.com', 'jacqueline_leiva_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'chile'),
(32, 'Fabiola Victoria Barros', 'fabiola_victoria_barros@baxter.com', 'fabiola_victoria_barros_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'chile'),
(33, 'Richard Poblete', 'richard_poblete@baxter.com', 'richard_poblete_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'chile'),
(34, 'Elizabeth Labbe', 'elizabeth_labbe@baxter.com', 'elizabeth_labbe_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'chile'),
(35, 'Roxana Maizares', 'roxana_maizares@baxter.com', 'roxana_maizares_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'chile'),
(36, 'Jennifer Hernandez', 'jenniffer_hernandez@baxter.com', 'jenniffer_hernandez_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'chile'),
(37, 'Antonio Mardones', 'antonio_mardones@baxter.com', 'antonio_mardones_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'chile'),
(38, 'Ricardo San Martin', 'ricardo_san_martin@baxter.com', 'ricardo_san_martin_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'chile'),
(39, 'Adriana Otalora', 'adriana_otalora@baxter.com', 'adriana_otalora_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'colombia'),
(40, 'Amelida Rincon Silva', 'amelida_rincon@baxter.com', 'amelida_rincon_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'colombia'),
(41, 'Angelica Villegas', 'angelica_villegas@baxter.com', 'angelica_villegas_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'colombia'),
(42, 'Greicy Perez', 'greicy_perez@baxter.com', 'greicy_perez_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'colombia'),
(43, 'Pedro Llanos', 'pedro_llanos@baxter.com', 'pedro_llanos_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'colombia'),
(44, 'Liz Johana Garzon', 'liz_garzon@baxter.com', 'liz_garzon_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'colombia'),
(45, 'Maria Adelaida Zapata', 'maria_zapata@baxter.com', 'maria_zapata_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'colombia'),
(46, 'Rina Patricia Gamarra', 'rina_patricia_gamarra@baxter.com', 'rina_patricia_gamarra_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'colombia'),
(47, 'Wilber Escobar', 'wilber_escobar@baxter.com', 'wilber_escobar_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'colombia'),
(48, 'Maria Ruiz', 'maria_ruiz@baxter.com', 'maria_ruiz_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'colombia'),
(49, 'Maria R Martinez', 'maria_r_martinez@baxter.com', 'maria_r_martinez_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'colombia'),
(50, 'Jairo Jacob Cueva', 'jairo_jacob_cueva@baxter.com', 'jairo_jacob_cueva_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'equador'),
(51, 'Fernanda Parra Vallejo', 'diana_fernanda_parra@baxter.com', 'diana_fernanda_parra_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'equador'),
(52, 'Patricia Funari', 'patricia_funari@baxter.com', 'patricia_funari_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(53, 'Franci Julliet Rodriguez', 'franci_julliet_rodriguez@baxter.com', 'franci_julliet_rodriguez_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'colombia'),
(54, 'Gustavo Rincon', 'gustavo_rincon@baxter.com', 'gustavo_rincon_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'colombia'),
(55, 'Natalia Spitia', 'natalia_espitia@baxter.com', 'natalia_espitia_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'colombia'),
(56, 'Daiane Bortone', 'daiane_bortone@baxter.com', 'daiane_bortone_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(57, 'Mariana Bizerra Moreira', 'mariana_bizerra_moreira@baxter.com', 'mariana_bizerra_moreira_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(58, 'Patricia Cadecaro', 'patricia_cadecaro@baxter.com', 'patricia_cadecaro_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(59, 'Fernanda Peitl de Matos', 'fernanda_matos@baxter.com', 'fernanda_matos_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(60, 'Larissa Ribeiro', 'larissa_santos@baxter.com', 'larissa_santos_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(61, 'Diana Segura', 'diana_marcela_segura@baxter.com', 'diana_marcela_segura_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'colombia'),
(62, 'Nicole Gutierrez Caceres', 'nicole_gutierrez_caceres@baxter.com', 'nicole_gutierrez_caceres_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'chile'),
(63, 'Jessika Barros', 'jessika_barros@baxter.com', 'jessika_barros_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(64, 'Isabel Cristina Saravia', 'isabel_saravia@baxter.com', 'isabel_saravia_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'colombia'),
(65, 'Geovana Basso', 'geovana_basso@baxter.com', 'geovana_basso_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(66, 'Paulo Ricardo Lins', 'paulo_lins@baxter.com', 'paulo_lins_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(67, 'Fernanda Souza Carrara Baffi', 'fernanda_carrara@baxter.com', 'fernanda_carrara_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(68, 'Karina Gomes Liberatori', 'karina_liberatori@baxter.com', 'karina_liberatori_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(69, 'Jose Olvera', 'jose_olvera@baxter.com', 'jose_olvera_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'mexico'),
(70, 'Luis Perez - TBD', 'luis_perez@baxter.com', 'luis_perez_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'mexico'),
(71, 'Eric Oliveira', 'eric_oliveira@baxter.com', 'eric_oliveira_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(72, 'Jose Antonio Ocampo', 'jose_antonio_ocampo@baxter.com', 'jose_antonio_ocampo_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'mexico'),
(73, 'Jessica Becerra', 'jessica_becerra@baxter.com', 'jessica_becerra_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'colombia'),
(74, 'Genio Moreira', 'genio_moreira@baxter.com', 'genio_moreira_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(75, 'Juan Pablo Martinez\r\n', 'juan_martinez@baxter.com', 'juan_martinez_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'colombia'),
(76, 'Ana Lucero Diaz', 'ana_lucero_diaz@baxter.com', 'ana_lucero_diaz_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'colombia'),
(77, 'Andrea Rodrigues', 'andreia_telles@baxter.com', 'andreia_telles_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(78, 'Diego Moscogliato', 'diego_zappitelli_moscogliato@baxter.com', 'diego_zappitelli_moscogliato_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(79, 'Nicolas Diaz', 'nicolas_diaz@baxter.com', 'nicolas_diaz_2024', '', '', '', '', '', 'perfil.png', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'colombia'),
(80, 'Alan Branco', 'alan_branco@baxter.com', 'alan_branco_2024', '', '', '', '', '', 'perfil.png\r\n', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', 'brasil'),
(82, 'Teste', 'teste@email.com', '1234', '123', 'Desenvolvedor Front-End', 'Gosto de games', 'Brasil', '12312', 'perfil.png', '39', 'M', 'Citizenship card', 'M', 'Deixa escondido, Virtux', '2023-11-30', 'Portuguese and English', 'Leon', 'TI', 'Gato', 'None', 'adasd', 'No', 'Games, Filmes, Séries, jogos de tabuleiro.', 'No', 'paises');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
