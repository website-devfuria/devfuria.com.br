--
-- Estrutura da tabela `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(6) NOT NULL,
  `complemento` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `estado` text COLLATE utf8_unicode_ci NOT NULL,
  `cep` int(7) NOT NULL,
  `ddd` int(2) NOT NULL,
  `telefone` int(9) NOT NULL,
  `rg` text COLLATE utf8_unicode_ci NOT NULL,
  `cpf` int(11) NOT NULL,
  `curso` set('OPBV','DSLR','EDBV','BPAV') COLLATE utf8_unicode_ci DEFAULT '',
  `checkbox` tinyint(4) NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) COMMENT 'Usuário nº',
  FULLTEXT KEY `nome` (`nome`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;