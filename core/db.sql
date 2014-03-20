DROP TABLE paginas;
CREATE TABLE IF NOT EXISTS `paginas` (
  `ordem` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `urlLabel` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `metaTitle` varchar(255) DEFAULT NULL,
  `metaDescr` varchar(255) DEFAULT NULL,
  `secao` varchar(50) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'draft',
  `dtCriacao` date DEFAULT NULL,
  `dtAtualizacao` date DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  KEY `secao` (`secao`),
  KEY `categoria` (`categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `paginas` (`ordem`, `secao`, `categoria`, `status`, `url`, `urlLabel`, `titulo`, `metaTitle`, `metaDescr`, `autor`, `dtCriacao`, `dtAtualizacao`) VALUES
(3, 'html-css', 'curso', 'on', '/html-css/basico/css-intro/', 'Primeiro contato com CSS', 'Primeiro contato com CSS', 'O básico do CSS', 'Aprendendo o básico do CSS, como unir o CSS ao documento HTML e cores em CSS.', '', '2013-01-23', '2013-12-13'),
(4, 'html-css', 'curso', 'on', '/html-css/basico/elementos-inline-block-level/', 'Elementos in-line e elementos block-level', 'Elementos in-line e elementos block-level', 'Elementos in-line e elementos block-level', 'O objetivo da matéria é entender as diferenças entre os dois tipos', '', '2013-01-23', '2013-02-11'),
(6, 'html-css', 'curso', 'on', '/html-css/basico/formularios-web/', 'Formulários Web e seus controles ', 'Formulários Web e seus controles', 'Formulários Web e seus controles', 'Matéria demonstrando os controles básicos de HTML: input, select, textarea, etc...', '', '2014-01-06', '2014-01-06'),
(2, 'html-css', 'curso', 'on', '/html-css/basico/html-intro/', 'Primeiro contato com HTML', 'Primeiro contato com HTML', 'Tags básicas de HTML', 'Aprendendo as tags básicas de HTML (âncoras, listas, tabelas, formulários, div e span)', '', '2013-01-23', '2013-12-13'),
(1, 'html-css', 'curso', 'on', '/html-css/basico/onde-tudo-comecou/', 'Onde tudo começou', 'Onde tudo começou', 'Introdução ao HTML e ao CSS', 'Aprenda sobre: tags básicas de HTML, corpo de HTML, CSS, seletores, propriedades e ferramentas que ajudam no desenvolvimento', '', '2013-01-23', '2014-02-14'),
(5, 'html-css', 'curso', 'on', '/html-css/basico/primeiro-html/', 'Criando nosso primeiro HTML [com vídeo]', 'Criando nosso primeiro HTML', 'Crie seu primeiro HTML', 'Aprenda a cirar um HTML de ótima qualidade, usaremos como base o HTML do site www.csszengarden.com', '', '2013-04-12', '2013-04-12'),
(9, 'js', 'curso', 'on', '/js/basico/checkbox-checked/', 'Manipulando check boxes', 'Manipulando check boxes com JavaScript', 'Javascript - Ler valores dos checkbox que estiverem checkados', 'Controle de checkbox em javascript, verificar se os CheckBox foram marcados.', '', '2014-02-21', '2014-02-21'),
(7, 'js', 'curso', 'on', '/js/basico/code-lampadas-refatorando/', 'Code - A Lâmpada (refatorando)', 'Code - A lâmpada (refatorando)', 'Refatorando o código da matéria "Code - A lâmpada"', 'Matéria onde mostramos a prática de organizar e refatorar o código JS.', '', '2013-07-08', '2014-02-07'),
(4, 'js', 'curso', 'on', '/js/basico/code-lampadas/', 'Code - A Lâmpada', 'Code - A lâmpada', 'Aprenda javascript com este exemplo de código: a lâmpada', 'Aprendendo código escrito em javascript que ascende e apaga uma lâmpa! Princípio de animações com JS.', '', '2013-04-10', '2013-04-30'),
(3, 'js', 'curso', 'on', '/js/basico/debugando/', 'Debugando (depurando) [com vídeo]', 'Debugando (depurando) JS', 'Debugando com Javascript', 'Aprenda a debugar seus scripts em Javascript, este é o primeiro passo na depurarção de código.', '', '2013-04-10', '2013-04-30'),
(1, 'js', 'curso', 'on', '/js/basico/intro/', 'Introdução', 'Introdução ao Javascript', 'Javascript: Introdução a linguagem de programação Javascript', 'Uma introdução ao Javascript. Acompanha 2 script para quebrar o gelo', '', '2012-10-08', '2012-11-08'),
(5, 'js', 'curso', 'on', '/js/basico/oop-primeiro-degrau/', 'OOP - primeiro degrau', 'OOP - primeiro degrau', 'OOP', 'Introduziremos conceito intuitivo de programação orientadação a objeto, propriedades e métodos.', '', '2013-07-08', '2014-02-07'),
(2, 'js', 'curso', 'on', '/js/basico/preparando-o-terreno/', 'Preparando o terreno', 'Preparando o terreno', 'Antes de programar em JS veja esta matéria', 'Veremos Separações de Interesses (separation of concerns), onde colocar o JS e uma rápida pincelada em OOP, FIREBUG e a questão da segurança!.', '', '2012-10-08', '2012-11-08'),
(6, 'js', 'curso', 'on', '/js/basico/refatoracao-codigo-limpo/', 'Refatoração e código limpo', 'Refatoração e código limpo', 'Refatoração e código limpo', 'Dandos os primeiros passos na refatoração de código. Aprenda a codificar de forma mais coesa.', '', '2013-07-08', '2014-02-07'),
(8, 'js', 'curso', 'on', '/js/basico/textbox-password-textarea/', 'Descobrindo os controles text, password e textarea', 'Descobrindo os controles text, password e textarea', 'Javascript - input type text input type password textarea', 'Aprendendo como os campos textbox, password e textarea funcionam com o Javascript.', '', '2014-02-21', '2014-02-21'),
(9, 'logica', 'curso', 'on', '/logica-de-programacao/basico/code-triangulo-tdd/', 'Code - Triângulo + TDD', 'Code - Triângulo com TDD', 'TDD passo a passo', 'Matéria que demonstra a técnica do TDD. Lógica de programação alida ao TDD.', '', '2014-01-30', '2014-01-30'),
(6, 'logica', 'curso', 'on', '/logica-de-programacao/basico/code-triangulo/', 'Code - Triângulo', 'Code - Triângulo', 'Exemplo de código que utiliza funções', 'Matéria introdutória ilustrando a sintaxe básica do último exercício de lógica: é triângulo', '', '2014-01-09', '2014-01-09'),
(4, 'logica', 'curso', 'on', '/logica-de-programacao/basico/exercicios-expressoes-condicionais/', 'Exercícios de lógica de programação (expressões condicionais)', '5 Exercícios de lógica de programação', 'Exercícios de lógica de programação envolvendo expressões condicionais', 'Exercícos resolvidos de lógica de programação (sobre expressões condicionais)', '', '2013-12-20', '2013-12-20'),
(2, 'logica', 'curso', 'on', '/logica-de-programacao/basico/exercicios-operadores-atribuicao/', 'Exercícios de lógica de programação (operadores de atribuição)', '10 Exercícios de lógica de programação ', 'Exercícios de lógica de programação envolvendo operadores de atribuição', 'Exercícos de lógica de programação com respostas (sobre operadores de atribuição)', '', '2013-06-05', '2013-08-11'),
(5, 'logica', 'curso', 'on', '/logica-de-programacao/basico/funcoes-procedimentos/', 'Funções', 'Funções', 'Apendendo o básico sobre funções', 'Como criar e utilizar funcções em PHP e Javascript, máteria de nível básico introduzindo uso de funções', '', '2014-01-09', '2014-01-09'),
(3, 'logica', 'curso', 'on', '/logica-de-programacao/basico/if-else/', 'Expressões Condicionais (if-else)', 'Expressões Condicionais', 'Conceitos e exemplos do if-else para PHP', 'Aprenda sobre a tomada de decisões no PHP com as estruturas de controle if, else e elseif.', '', '2013-12-20', '2013-12-20'),
(1, 'logica', 'curso', 'on', '/logica-de-programacao/basico/intro/', 'Introdução a Lógica de Progamação', 'Introdução a Lógica de Programação', 'Matéria introdutória sobre Lógica de Programação', 'Matéria que introduz o curso de Lógica de Programação aqui no devfuria.com.br', '', '2013-12-20', '2012-07-25'),
(7, 'logica', 'curso', 'on', '/logica-de-programacao/basico/oop-programacao-orientada-a-objetos/', 'Vamos de OOP?', 'Vamos de OOP?', 'Matéria introdutória sobre OOP e Lógica de Programação', 'Matéria que introduz o conceito e prática de OOP para que possamos utilizar a lógica aliada a orientação a objetos. ', '', '2014-01-16', '2014-01-16'),
(8, 'logica', 'curso', 'on', '/logica-de-programacao/basico/tdd-test-driven-development/', 'Vamos de TDD?', 'Vamos de TDD?', 'Matéria introdutória sobre TDD e Lógica de Programação', 'Matéria que introduz o conceito e prática de TDD', '', '2013-12-19', '2013-12-19'),
(3, 'mysql', 'curso', 'on', '/mysql-sql/basico/criando-base-tabela/', 'Criando e populando uma tabela', 'Criando e populando uma tabela', 'Matéria onde criaremos nossa primeira tabela no MySql', 'Aprenda a criar uma tabela no MySql e também veja um pouco sobre os comandos TRUNCATE, DROP TABLE e LOAD LOCAL DATA', '', '2014-01-10', '2014-01-10'),
(4, 'mysql', 'curso', 'on', '/mysql-sql/basico/crud/', 'Entendendo o que é CRUD', 'Entendendo o que é CRUD', 'CRUD SQL', 'Aprenda a fazer um CRUD (create, read, update, delete) com os comandos SQL', '', '2014-01-27', '2014-01-27'),
(1, 'mysql', 'curso', 'on', '/mysql-sql/basico/intro/', 'Banco de dados prá que?', 'Banco de dados prá que?', 'Matéria introdutória sobre SQL e Mysql', 'Aprenda os conceitos intuitivo de banco de dados, faremos a instalação do mysql e testes via console.', '', '2013-06-05', '2013-09-11'),
(2, 'mysql', 'curso', 'on', '/mysql-sql/basico/primeiros-passos-mysql/', 'Primeiros passos com MySql', 'Primeiro passos com Mysql', 'Matéria pós-introdutória sobre SQL e Mysql', 'Aprenderemos a interpretar erros, show databases, use, outros comandos básicos, use e case insensitive.', '', '2013-12-13', '2013-12-13'),
(5, 'php', 'curso', 'on', '/php/basico/arrays-vetores-matrizes/', 'Arrays (criando, iterando, funções, explode, implode)', 'Arrays', 'Arrays em PHP', 'Aprenda o básico de arrays em PHP, veremos como criar, iterar(foreach e while) e funções internas como ', '', '2014-01-31', '2014-01-31'),
(3, 'php', 'curso', 'on', '/php/basico/boas-praticas/', 'Antes de enfiar o pé na jáca (boas práticas)', 'Antes de enfiar o pé na jaca', 'Boas práticas para quem está começando em PHP ', 'Boas práticas, essenciais, e que não podem faltar em seu repertório como programador.Veremos 4 conceitos básicos: endentação, nomeação, comentários e estilos.', '', '2012-06-05', '2012-09-11'),
(10, 'php', 'curso', 'on', '/php/basico/checkbox-checked/', 'Manipulando check boxes', 'Manipulando check boxes com PHP', 'PHP - input type check checkbox', 'Controle de checkbox em PHP, verificar se os CheckBox foram marcados.', '', '2014-02-27', '2014-02-27'),
(4, 'php', 'curso', 'on', '/php/basico/debugando/', 'Debugando (depurando)', 'Debugando (depurando)', 'Debugando seus scripts em PHP', 'Aprenda a debugar o código PHP utilizando var_dump() e x-debug. São formas rudimentares de debugação, porém sempre presente no dia a dia do programador.', '', '2013-04-10', '2013-04-10'),
(7, 'php', 'curso', 'on', '/php/basico/enviando-dados-via-get-post/', 'Enviando dados para o script', 'Enviando dados para o script', 'Enviando dados via GET e POST', 'Estamos no navegador (cliente) criando dois tipos de requisições GET e POST', '', '2014-01-30', '2014-01-30'),
(2, 'php', 'curso', 'on', '/php/basico/instalando-o-ambiente/', 'Instalando o ambiente no estilo NEXT, NEXT, NEXT', 'Instalando o Ambiente no estilo NEXT, NEXT, NEXT.', 'Levantando um ambiente de programação (PHP)', 'Aprenda a levantar seu ambiente de programação de forma descomplicada e sem sustos', '', '2012-06-05', '2012-09-11'),
(6, 'php', 'curso', 'on', '/php/basico/metodo-http-get-post/', 'Como funcionam os métodos GET e POST', 'Como funcionam os métodos GET e POST', 'Como funcionam os métodos GET e POST', 'Introdução prática e descomplicada sobre o protocolo HTTP. Nosso objetivo é entender os métodos GET e POST.', '', '2014-01-31', '2014-01-31'),
(8, 'php', 'curso', 'on', '/php/basico/recebendo-dados-via-get-post/', 'Recebendo dados', 'Recebendo dados via GET POST', 'Recebendo dados via GET e POST', 'Matéria de php sobre as variáveis globais $_GET e $_POST.', '', '2014-01-30', '2014-01-30'),
(9, 'php', 'curso', 'on', '/php/basico/textbox-password-textarea/', 'Descobrindo os controles text, password e textarea', 'Descobrindo os controles text, password e textarea', 'PHP - input type text input type password textarea', 'Manipulando checkbox com PHP. Aprenda a marcar, gravar e exbibir os valores de uma checkbox.', '', '2014-02-20', '2014-02-20'),
(1, 'php', 'curso', 'on', '/php/basico/um-bom-comeco/', 'Um bom começo', 'Um bom começo', 'Começando com PHP', 'Tenha um primeiro contato com a linguagem PHP, esta matéria é para quem nunca viu PHP ou para que não sabe nada sobre PHP', '', '2012-06-05', '2012-09-11'),
(1, 'regexp', 'curso', 'on', '/regexp/basico/intro/', 'Introdução', 'O básico das Expressões Regulares', 'Introdução aos conceitos intuitivo de ER.', 'Aprenda o básico das Expressões Regulares para PHP e JS', '', '2013-07-22', '2013-07-22'),
(6, 'regexp', 'curso', 'on', '/regexp/basico/new-regexp/', 'new RegExp() ', 'new RegExp()', 'Compilando Expressões Regulares', 'Essa matéria, curtinha diga-se de passagem, mostra como compilar uma ER.', '', '2013-07-22', '2013-07-22'),
(5, 'regexp', 'curso', 'on', '/regexp/basico/pattern-exec/', 'pattern.exec() ', 'pattern.exec()', 'pattern.exec()', 'Dissecando a função pattern.exec() do JS. O método exec() executa uma pesquisa para um resultado em uma seqüência especificada. Retorna uma matriz de resultados, ou nulo.', '', '2013-07-22', '2013-07-22'),
(4, 'regexp', 'curso', 'on', '/regexp/basico/pattern-test/', 'pattern.test() ', 'pattern.test()', 'pattern.test()', 'Dissecando a função pattern.test() do JS, ele retorna true se  encontrar uma correspondência, caso contrário, retorna false.', '', '2013-07-22', '2013-07-22'),
(7, 'regexp', 'curso', 'on', '/regexp/basico/ponto/', 'ponto', 'O ponto .', '. (ponto) nas expressões regulares', 'Matéria que traz várias imagens (todas de autoria do Aurélio Marinho) ilustrando o uso do ', '', '2013-07-22', '2013-07-22'),
(2, 'regexp', 'curso', 'on', '/regexp/basico/preg-match/', 'preg_match()', 'preg&#95;match()', 'preg_match()', 'Dissecando a função preg_match() do PHP, método para expressão regular segundo o PCRE', '', '2013-07-22', '2013-07-22'),
(3, 'regexp', 'curso', 'on', '/regexp/basico/string-match/', 'string.match()', 'string.match()', 'string.match()', 'Dissecando a função string.match() do JS, método de expressão regular.', '', '2013-07-22', '2013-07-22'),
(9, 'regexp', 'curso', 'on', '/regexp/basico/varios-resultados-match-test-exec/', 'Vários resultados - match(), test() e exec()', 'Vários resultados - match(), test() e exec()', 'match(), test() e exec()', 'Dissecando as funções match(), test() e exec() do JS', '', '2013-07-22', '2013-07-22'),
(8, 'regexp', 'curso', 'on', '/regexp/basico/varios-resultados-preg-match-all/', 'Vários resultados - preg_match_all()', 'Vários resultados - preg&#95;match&#95;all()', 'PHP preg match all, preg-match-all, preg_math_all()', 'Dissecando a função preg_math_all() do PHP, ela retonar um ou mais resultados.', '', '2013-07-22', '2014-01-30'),
(1, 'js', 'receitas-tuto-guia', 'on', '/js/math-random-numero-randomico-em-javascript/', 'Como gerar números aleatórios em Javascript', 'Como gerar números aleatórios em Javascript', 'Geração de números aleatórios Javascript | Math.random()', NULL, NULL, '2014-03-06', '2014-03-06'),
(10, 'js', 'curso', 'on', '/js/basico/input-radio-button/', 'Manipulando radios buttons', 'Manipulando radios buttons com JavaScript', 'JavaScript e Radio Buttons', 'Agrupar radios com o mesmo nome e descobrir se está checked', NULL, '2014-03-13', '2014-03-13'),
(11, 'php', 'curso', 'on', '/php/basico/input-radio-button/', 'Manipulando radio buttons', 'Manipulando radio button com PHP', 'PHP -radio button', 'Tutorial de como trabalhar com radio buttons em formulários web.', NULL, '2014-03-14', '2014-03-14'),
(2, 'js', 'receitas-tuto-guia', 'on', '/js/window-object/', 'Explorando o objeto window em Javascript!', 'Explorando o objeto <code>window</code> em Javascript!', 'Explorando o objeto window em Javascript | window object', 'Nesta receita veremos as propriedades, métodos e eventos do objeto principal e que possue hierarquia mais alta na linguagem Javascript: window!', NULL, '2014-03-17', '2014-03-17');
ALTER TABLE `paginas`
  ADD CONSTRAINT `paginas_ibfk_1` FOREIGN KEY (`secao`) REFERENCES `secoes` (`codigo`),
  ADD CONSTRAINT `paginas_ibfk_2` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`codigo`);




CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `label` varchar(150) NOT NULL,
  `ativo` tinyint(2) NOT NULL,
  `ordem` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
INSERT INTO `categorias` (`id`, `codigo`, `label`, `ativo`, `ordem`) VALUES
(1, 'curso', 'Cursos', 1, 1),
(2, 'receitas-tuto-guia', 'Receitas, Tutoriais e Guia de Referência', 1, 2);
ALTER TABLE `paginas`
ADD FOREIGN KEY ( `categoria` ) REFERENCES `devfuria_fulia`.`categorias` (`codigo`) ON DELETE RESTRICT ON UPDATE RESTRICT;
