DROP TABLES paginas, categorias, secoes;

CREATE TABLE IF NOT EXISTS `secoes` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `href` varchar(255) NOT NULL,
  `label` varchar(50) NOT NULL,
  `ativo` tinyint(4) NOT NULL DEFAULT '1',
  `ordem` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo` (`codigo`,`href`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `secoes` (`id`, `codigo`, `href`, `label`, `ativo`, `ordem`) VALUES
(1, 'html-css', 'html-css', 'HTML & CSS', 1, 1),
(2, 'logica', 'logica-de-programacao', 'Lógica de Programação', 1, 2),
(3, 'js', 'js', 'Javascript', 1, 3),
(4, 'php', 'php', 'PHP', 1, 4),
(5, 'mysql', 'mysql-sql', 'MySql & SQL', 1, 5),
(6, 'regexp', 'regexp', 'RegExp', 1, 6);

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `label` varchar(150) NOT NULL,
  `ativo` tinyint(2) NOT NULL,
  `ordem` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `categorias` (`id`, `codigo`, `label`, `ativo`, `ordem`) VALUES
(3, 'canvas', 'Canvas', 1, 3),
(1, 'curso', 'Cursos', 1, 1),
(2, 'receitas-tuto-guia', 'Receitas, Tutoriais e Guia de Referência', 1, 2);

CREATE TABLE IF NOT EXISTS `paginas` (
  `ordem` int(11) NOT NULL,
  `url` varchar(255) NOT NULL DEFAULT '',
  `urlLabel` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `metaTitle` varchar(255) DEFAULT NULL,
  `metaDescr` varchar(255) DEFAULT NULL,
  `secao` varchar(50) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `nivel` varchar(13) NOT NULL DEFAULT 'basico',
  `status` varchar(20) NOT NULL DEFAULT 'draft',
  `dtCriacao` date DEFAULT NULL,
  `dtAtualizacao` date DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`url`),
  KEY `secao` (`secao`),
  KEY `categoria` (`categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `paginas` (`ordem`, `url`, `urlLabel`, `titulo`, `descricao`, `metaTitle`, `metaDescr`, `secao`, `categoria`, `nivel`, `status`, `dtCriacao`, `dtAtualizacao`, `autor`) VALUES
(3, '/html-css/basico/css-intro/', 'Primeiro contato com CSS', 'Primeiro contato com CSS', NULL, 'O básico do CSS', 'Aprendendo o básico do CSS, como unir o CSS ao documento HTML e cores em CSS.', 'html-css', 'curso', 'basico', 'on', '2013-01-23', '2013-12-13', NULL),
(4, '/html-css/basico/elementos-inline-block-level/', 'Elementos in-line e elementos block-level', 'Elementos in-line e elementos block-level', NULL, 'Elementos in-line e elementos block-level', 'O objetivo da matéria é entender as diferenças entre os dois tipos', 'html-css', 'curso', 'basico', 'on', '2013-01-23', '2013-02-11', NULL),
(6, '/html-css/basico/formularios-web/', 'Formulários Web e seus controles ', 'Formulários Web e seus controles', NULL, 'Formulários Web e seus controles', 'Matéria demonstrando os controles básicos de HTML: input, select, textarea, etc...', 'html-css', 'curso', 'basico', 'on', '2014-01-06', '2014-01-06', NULL),
(2, '/html-css/basico/html-intro/', 'Primeiro contato com HTML', 'Primeiro contato com HTML', NULL, 'Tags básicas de HTML', 'Aprendendo as tags básicas de HTML (âncoras, listas, tabelas, formulários, div e span)', 'html-css', 'curso', 'basico', 'on', '2013-01-23', '2013-12-13', NULL),
(1, '/html-css/basico/onde-tudo-comecou/', 'Onde tudo começou', 'Onde tudo começou', NULL, 'Introdução ao HTML e ao CSS', 'Aprenda sobre: tags básicas de HTML, corpo de HTML, CSS, seletores, propriedades e ferramentas que ajudam no desenvolvimento', 'html-css', 'curso', 'basico', 'on', '2013-01-23', '2014-02-14', NULL),
(5, '/html-css/basico/primeiro-html/', 'Criando nosso primeiro HTML [com vídeo]', 'Criando nosso primeiro HTML', NULL, 'Crie seu primeiro HTML', 'Aprenda a cirar um HTML de ótima qualidade, usaremos como base o HTML do site www.csszengarden.com', 'html-css', 'curso', 'basico', 'on', '2013-04-12', '2013-04-12', NULL),
(9, '/js/basico/checkbox-checked/', 'Manipulando check boxes', 'Manipulando check boxes com JavaScript', NULL, 'Javascript - Ler valores dos checkbox que estiverem checkados', 'Controle de checkbox em javascript, verificar se os CheckBox foram marcados.', 'js', 'curso', 'basico', 'on', '2014-02-21', '2014-02-21', NULL),
(7, '/js/basico/code-lampadas-refatorando/', 'Code - A Lâmpada (refatorando)', 'Code - A lâmpada (refatorando)', NULL, 'Refatorando o código da matéria ''Code - A lâmpada''', 'Matéria onde mostramos a prática de organizar e refatorar o código JS.', 'js', 'curso', 'basico', 'on', '2013-07-08', '2014-02-07', NULL),
(4, '/js/basico/code-lampadas/', 'Code - A Lâmpada', 'Code - A lâmpada', NULL, 'Aprenda javascript com este exemplo de código: a lâmpada', 'Aprendendo código escrito em javascript que ascende e apaga uma lâmpa! Princípio de animações com JS.', 'js', 'curso', 'basico', 'on', '2013-04-10', '2013-04-30', NULL),
(3, '/js/basico/debugando/', 'Debugando (depurando) [com vídeo]', 'Debugando (depurando) JS', NULL, 'Debugando com Javascript', 'Aprenda a debugar seus scripts em Javascript, este é o primeiro passo na depuração de código.', 'js', 'curso', 'basico', 'on', '2013-04-10', '2013-04-30', NULL),
(10, '/js/basico/input-radio-button/', 'Manipulando radios buttons', 'Manipulando radios buttons com JavaScript', NULL, 'JavaScript e Radio Buttons', 'Agrupar radios com o mesmo nome e descobrir se está checked', 'js', 'curso', 'basico', 'on', '2014-03-13', '2014-03-13', NULL),
(1, '/js/basico/intro/', 'Introdução', 'Introdução ao Javascript', NULL, 'Javascript: Introdução a linguagem de programação Javascript', 'Uma introdução ao Javascript, acompanha 2 script para quebrar o gelo.', 'js', 'curso', 'basico', 'on', '2012-10-08', '2012-11-08', NULL),
(5, '/js/basico/oop-primeiro-degrau/', 'OOP - primeiro degrau', 'OOP - primeiro degrau', NULL, 'JavaScript OOP - Conceitos básicos', 'Introduziremos conceito intuitivo de programação orientadação a objeto, propriedades e métodos.', 'js', 'curso', 'basico', 'on', '2013-07-08', '2014-02-07', NULL),
(2, '/js/basico/preparando-o-terreno/', 'Preparando o terreno', 'Preparando o terreno', NULL, 'Antes de programar em JS veja esta matéria', 'Veremos onde colocar o JS,  OOP, FIREBUG,  a questão da segurança e separações de interesses (separation of concerns).', 'js', 'curso', 'basico', 'on', '2012-10-08', '2012-11-08', NULL),
(6, '/js/basico/refatoracao-codigo-limpo/', 'Refatoração e código limpo', 'Refatoração e código limpo', NULL, 'Refatoração e código limpo', 'Dandos os primeiros passos na refatoração de código. Aprenda a codificar de forma mais coesa.', 'js', 'curso', 'basico', 'on', '2013-07-08', '2014-02-07', NULL),
(11, '/js/basico/select-combobox/', 'Manipulando combobox (select)', 'Manipulando combobox (select) com Javascript', NULL, 'Manipulando combobox (select) com Javascript', 'Aprenda a carregar, deletar e colher informações de uma combobox com Javascript', 'js', 'curso', 'basico', 'on', '2014-03-30', '2014-03-30', NULL),
(8, '/js/basico/textbox-password-textarea/', 'Descobrindo os controles text, password e textarea', 'Descobrindo os controles text, password e textarea', NULL, 'Javascript - input type text input type password textarea', 'Aprendendo como os campos textbox, password e textarea funcionam com o Javascript.', 'js', 'curso', 'basico', 'on', '2014-02-21', '2014-02-21', NULL),
(1, '/js/math-random-numero-randomico-em-javascript/', 'Como gerar números aleatórios em Javascript', 'Como gerar números aleatórios em Javascript', NULL, 'Geração de números aleatórios Javascript | Math.random()', 'Várias receitas para gerar números aleatórios em Javascript!', 'js', 'receitas-tuto-guia', 'basico', 'on', '2014-03-06', '2014-03-06', NULL),
(2, '/js/window-object-global/', 'Objeto Window, Global e WindowProxy', 'O objeto <code>window</code> e o epaço global em Javascript!', NULL, 'Explorando o objeto window em Javascript | window object', 'Neste guia veremos os objetos window, global e WindowProxy. Além de como (não) poluir o espaço global.', 'js', 'receitas-tuto-guia', 'basico', 'on', '2014-03-29', '2014-03-29', NULL),
(9, '/logica-de-programacao/basico/code-triangulo-tdd/', 'Code - Triângulo + TDD', 'Code - Triângulo com TDD', NULL, 'TDD passo a passo', 'Matéria que demonstra a técnica do TDD. Lógica de programação alida ao TDD.', 'logica', 'curso', 'basico', 'on', '2014-01-30', '2014-01-30', NULL),
(6, '/logica-de-programacao/basico/code-triangulo/', 'Code - Triângulo', 'Code - Triângulo', NULL, 'Exemplo de código que utiliza funções', 'Matéria introdutória ilustrando a sintaxe básica do último exercício de lógica: é triângulo', 'logica', 'curso', 'basico', 'on', '2014-01-09', '2014-01-09', NULL),
(4, '/logica-de-programacao/basico/exercicios-expressoes-condicionais/', 'Exercícios de lógica de programação (expressões condicionais)', '5 Exercícios de lógica de programação', NULL, 'Exercícios de lógica de programação envolvendo expressões condicionais', 'Exercícos resolvidos de lógica de programação (sobre expressões condicionais)', 'logica', 'curso', 'basico', 'on', '2013-12-20', '2013-12-20', NULL),
(2, '/logica-de-programacao/basico/exercicios-operadores-atribuicao/', 'Exercícios de lógica de programação (operadores de atribuição)', '10 Exercícios de lógica de programação ', NULL, 'Exercícios de lógica de programação envolvendo operadores de atribuição', 'Exercícos de lógica de programação com respostas (sobre operadores de atribuição)', 'logica', 'curso', 'basico', 'on', '2013-06-05', '2013-08-11', NULL),
(5, '/logica-de-programacao/basico/funcoes-procedimentos/', 'Funções', 'Funções', NULL, 'Apendendo o básico sobre funções', 'Como criar e utilizar funcções em PHP e Javascript, máteria de nível básico introduzindo uso de funções', 'logica', 'curso', 'basico', 'on', '2014-01-09', '2014-01-09', NULL),
(3, '/logica-de-programacao/basico/if-else/', 'Expressões Condicionais (if-else)', 'Expressões Condicionais', NULL, 'Conceitos e exemplos do if-else para PHP', 'Aprenda sobre a tomada de decisões no PHP com as estruturas de controle if, else e elseif.', 'logica', 'curso', 'basico', 'on', '2013-12-20', '2013-12-20', NULL),
(1, '/logica-de-programacao/basico/intro/', 'Introdução a Lógica de Progamação', 'Introdução a Lógica de Programação', NULL, 'Matéria introdutória sobre Lógica de Programação', 'Matéria que introduz o curso de Lógica de Programação aqui no devfuria.com.br', 'logica', 'curso', 'basico', 'on', '2013-12-20', '2012-07-25', NULL),
(7, '/logica-de-programacao/basico/oop-programacao-orientada-a-objetos/', 'Vamos de OOP?', 'Vamos de OOP?', NULL, 'Matéria introdutória sobre OOP e Lógica de Programação', 'Matéria que introduz o conceito e prática de OOP para que possamos utilizar a lógica aliada a orientação a objetos. ', 'logica', 'curso', 'basico', 'on', '2014-01-16', '2014-01-16', NULL),
(8, '/logica-de-programacao/basico/tdd-test-driven-development/', 'Vamos de TDD?', 'Vamos de TDD?', NULL, 'Matéria introdutória sobre TDD e Lógica de Programação', 'Matéria que introduz o conceito e prática de TDD', 'logica', 'curso', 'basico', 'on', '2013-12-19', '2013-12-19', NULL),
(3, '/mysql-sql/basico/criando-base-tabela/', 'Criando e populando uma tabela', 'Criando e populando uma tabela', NULL, 'Matéria onde criaremos nossa primeira tabela no MySql', 'Aprenda a criar uma tabela no MySql e também veja um pouco sobre os comandos TRUNCATE, DROP TABLE e LOAD LOCAL DATA', 'mysql', 'curso', 'basico', 'on', '2014-01-10', '2014-01-10', NULL),
(4, '/mysql-sql/basico/crud/', 'Entendendo o que é CRUD', 'Entendendo o que é CRUD', NULL, 'CRUD SQL', 'Aprenda a fazer um CRUD (create, read, update, delete) com os comandos SQL', 'mysql', 'curso', 'basico', 'on', '2014-01-27', '2014-01-27', NULL),
(1, '/mysql-sql/basico/intro/', 'Banco de dados prá que?', 'Banco de dados prá que?', NULL, 'Matéria introdutória sobre SQL e Mysql', 'Aprenda os conceitos intuitivo de banco de dados, faremos a instalação do mysql e testes via console.', 'mysql', 'curso', 'basico', 'on', '2013-06-05', '2013-09-11', NULL),
(2, '/mysql-sql/basico/primeiros-passos-mysql/', 'Primeiros passos com MySql', 'Primeiro passos com Mysql', NULL, 'Matéria pós-introdutória sobre SQL e Mysql', 'Aprenderemos a interpretar erros, show databases, use, outros comandos básicos, use e case insensitive.', 'mysql', 'curso', 'basico', 'on', '2013-12-13', '2013-12-13', NULL),
(5, '/php/basico/arrays-vetores-matrizes/', 'Arrays (criando, iterando, funções, explode, implode)', 'Arrays', NULL, 'Arrays em PHP', 'Aprenda o básico de arrays em PHP, veremos como criar, iterar(foreach e while) e funções internas como ', 'php', 'curso', 'basico', 'on', '2014-01-31', '2014-01-31', NULL),
(3, '/php/basico/boas-praticas/', 'Antes de enfiar o pé na jáca (boas práticas)', 'Antes de enfiar o pé na jaca', NULL, 'Boas práticas para quem está começando em PHP ', 'Boas práticas, essenciais, e que não podem faltar em seu repertório como programador.Veremos 4 conceitos básicos: endentação, nomeação, comentários e estilos.', 'php', 'curso', 'basico', 'on', '2012-06-05', '2012-09-11', NULL),
(10, '/php/basico/checkbox-checked/', 'Manipulando check boxes', 'Manipulando check boxes com PHP', NULL, 'PHP - input type check checkbox', 'Controle de checkbox em PHP, verificar se os CheckBox foram marcados.', 'php', 'curso', 'basico', 'on', '2014-02-27', '2014-02-27', NULL),
(12, '/php/basico/combobox-input-form-select/', 'Manipulando combobox', 'Manipulando combobox com PHP', 'Aprenda a manipular o controle combobox', 'PHP - trabalhando com combobox', 'Aprenda nasta matéria como carregar e receber os dados de uma combobox.', 'php', 'curso', 'basico', 'draft', '2014-03-28', '2014-03-28', NULL),
(4, '/php/basico/debugando/', 'Debugando (depurando)', 'Debugando (depurando)', NULL, 'Debugando seus scripts em PHP', 'Aprenda a debugar o código PHP utilizando var_dump() e x-debug. São formas rudimentares de debugação, porém sempre presente no dia a dia do programador.', 'php', 'curso', 'basico', 'on', '2013-04-10', '2013-04-10', NULL),
(7, '/php/basico/enviando-dados-via-get-post/', 'Enviando dados para o script', 'Enviando dados para o script', NULL, 'Enviando dados via GET e POST', 'Estamos no navegador (cliente) criando dois tipos de requisições GET e POST', 'php', 'curso', 'basico', 'on', '2014-01-30', '2014-01-30', NULL),
(11, '/php/basico/input-radio-button/', 'Manipulando radio buttons', 'Manipulando radio button com PHP', NULL, 'PHP -radio button', 'Tutorial de como trabalhar com radio buttons em formulários web.', 'php', 'curso', 'basico', 'on', '2014-03-14', '2014-03-14', NULL),
(2, '/php/basico/instalando-o-ambiente/', 'Instalando o ambiente no estilo NEXT, NEXT, NEXT', 'Instalando o Ambiente no estilo NEXT, NEXT, NEXT.', NULL, 'Levantando um ambiente de programação (PHP)', 'Aprenda a levantar seu ambiente de programação de forma descomplicada e sem sustos', 'php', 'curso', 'basico', 'on', '2012-06-05', '2012-09-11', NULL),
(6, '/php/basico/metodo-http-get-post/', 'Como funcionam os métodos GET e POST', 'Como funcionam os métodos GET e POST', NULL, 'Como funcionam os métodos GET e POST', 'Introdução prática e descomplicada sobre o protocolo HTTP. Nosso objetivo é entender os métodos GET e POST.', 'php', 'curso', 'basico', 'on', '2014-01-31', '2014-01-31', NULL),
(8, '/php/basico/recebendo-dados-via-get-post/', 'Recebendo dados', 'Recebendo dados via GET POST', NULL, 'Recebendo dados via GET e POST', 'Matéria de php sobre as variáveis globais $_GET e $_POST.', 'php', 'curso', 'basico', 'on', '2014-01-30', '2014-01-30', NULL),
(9, '/php/basico/textbox-password-textarea/', 'Descobrindo os controles text, password e textarea', 'Descobrindo os controles text, password e textarea', NULL, 'PHP - input type text input type password textarea', 'Manipulando checkbox com PHP. Aprenda a marcar, gravar e exbibir os valores de uma checkbox.', 'php', 'curso', 'basico', 'on', '2014-02-20', '2014-02-20', NULL),
(1, '/php/basico/um-bom-comeco/', 'Um bom começo', 'Um bom começo', 'Introdução a linguagem PHP e ao desenvolvimento web.', 'Começando com PHP', 'Tenha um primeiro contato com a linguagem PHP, esta matéria é para quem nunca viu PHP ou para que não sabe nada sobre PHP', 'php', 'curso', 'basico', 'on', '2012-06-05', '2012-09-11', NULL),
(1, '/regexp/basico/intro/', 'Introdução', 'O básico das Expressões Regulares', NULL, 'Introdução aos conceitos intuitivo de ER.', 'Aprenda o básico das Expressões Regulares para PHP e JS', 'regexp', 'curso', 'basico', 'on', '2013-07-22', '2013-07-22', NULL),
(6, '/regexp/basico/new-regexp/', 'new RegExp() ', 'new RegExp()', NULL, 'Compilando Expressões Regulares', 'Essa matéria, curtinha diga-se de passagem, mostra como compilar uma ER.', 'regexp', 'curso', 'basico', 'on', '2013-07-22', '2013-07-22', NULL),
(5, '/regexp/basico/pattern-exec/', 'pattern.exec() ', 'pattern.exec()', NULL, 'pattern.exec()', 'Dissecando a função pattern.exec() do JS. O método exec() executa uma pesquisa para um resultado em uma seqüência especificada. Retorna uma matriz de resultados, ou nulo.', 'regexp', 'curso', 'basico', 'on', '2013-07-22', '2013-07-22', NULL),
(4, '/regexp/basico/pattern-test/', 'pattern.test() ', 'pattern.test()', NULL, 'pattern.test()', 'Dissecando a função pattern.test() do JS, ele retorna true se  encontrar uma correspondência, caso contrário, retorna false.', 'regexp', 'curso', 'basico', 'on', '2013-07-22', '2013-07-22', NULL),
(7, '/regexp/basico/ponto/', 'ponto', 'O ponto .', NULL, '. (ponto) nas expressões regulares', 'Matéria que traz várias imagens (todas de autoria do Aurélio Marinho) ilustrando o uso do ', 'regexp', 'curso', 'basico', 'on', '2013-07-22', '2013-07-22', NULL),
(2, '/regexp/basico/preg-match/', 'preg_match()', 'preg&#95;match()', NULL, 'preg_match()', 'Dissecando a função preg_match() do PHP, método para expressão regular segundo o PCRE', 'regexp', 'curso', 'basico', 'on', '2013-07-22', '2013-07-22', NULL),
(3, '/regexp/basico/string-match/', 'string.match()', 'string.match()', NULL, 'string.match()', 'Dissecando a função string.match() do JS, método de expressão regular.', 'regexp', 'curso', 'basico', 'on', '2013-07-22', '2013-07-22', NULL),
(9, '/regexp/basico/varios-resultados-match-test-exec/', 'Vários resultados - match(), test() e exec()', 'Vários resultados - match(), test() e exec()', NULL, 'match(), test() e exec()', 'Dissecando as funções match(), test() e exec() do JS', 'regexp', 'curso', 'basico', 'on', '2013-07-22', '2013-07-22', NULL),
(8, '/regexp/basico/varios-resultados-preg-match-all/', 'Vários resultados - preg_match_all()', 'Vários resultados - preg&#95;match&#95;all()', NULL, 'PHP preg match all, preg-match-all, preg_math_all()', 'Dissecando a função preg_math_all() do PHP, ela retonar um ou mais resultados.', 'regexp', 'curso', 'basico', 'on', '2013-07-22', '2014-01-30', NULL);

ALTER TABLE `paginas`
  ADD CONSTRAINT `paginas_ibfk_1` FOREIGN KEY (`secao`) REFERENCES `secoes` (`codigo`),
  ADD CONSTRAINT `paginas_ibfk_2` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`codigo`);