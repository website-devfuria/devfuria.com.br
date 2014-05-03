--
-- Atualizações
--

/*
DELETE FROM `devfuria_fulia`.`paginas` WHERE url = "/php/basico/arrays-vetores-matrizes/";

INSERT INTO `devfuria_fulia`.`paginas`
(`ordem`, `url`, `urlLabel`, `titulo`, `descricao`, `metaTitle`, `metaDescr`, `secao`, `subSecao`, `nivel`, `status`, `dtCriacao`, `dtAtualizacao`, `autor`)
VALUES ('2', '/php/arrays-funcoes-basicas/', 'Funções básicas de arrays', 'Funções básicas de arrays', NULL, 'Funções básicas de arrays', 'implode, explode, count, in_array, unset, array_unshift, array_shift e array_pop', 'php', 'rtg', 'basico', 'done', '2014-01-31', '2014-01-31', NULL);

INSERT INTO `devfuria_fulia`.`paginas`
(`ordem`, `url`, `urlLabel`, `titulo`, `descricao`, `metaTitle`, `metaDescr`, `secao`, `subSecao`, `nivel`, `status`, `dtCriacao`, `dtAtualizacao`, `autor`) 
VALUES (1, '/php/arrays-vetores-matrizes/', 'Criando e iterando um array em PHP', 'Criando e iterando um array em PHP', '', 'Criando e iterando um array em PHP', 'Aprenda como criar e iterar arrays em php com foreach e while', 'php', 'rtg', 'basico', 'done', '2014-01-31', '2014-01-31', NULL);


INSERT INTO `devfuria_fulia`.`paginas`
(`ordem`, `url`, `urlLabel`, `titulo`, `descricao`, `metaTitle`, `metaDescr`, `secao`, `subSecao`, `nivel`, `status`, `dtCriacao`, `dtAtualizacao`, `autor`)
VALUES ('6', '/js/canvas/paths/', 'Paths (caminhos)', 'Paths (caminhos)', NULL, 'CANVAS - Paths (caminhos)', 'O básico sobre paths e subpaths', 'js', 'canvas', 'basico', 'done', '2014-04-23', '2014-04-23', NULL);

INSERT INTO `devfuria_fulia`.`paginas`
(`ordem`, `url`, `urlLabel`, `titulo`, `descricao`, `metaTitle`, `metaDescr`, `secao`, `subSecao`, `nivel`, `status`, `dtCriacao`, `dtAtualizacao`, `autor`)
VALUES ('5', '/js/canvas/lineCap-butt-round-square/', 'Limite das linhas', 'Limite das linhas <code>lineCap</code>', NULL, 'Canvas - Entendendo o método lineCap()', 'Método lineCap (butt, round, square)', 'js', 'canvas', 'basico', 'done', '2014-04-23', '2014-04-23', NULL);

UPDATE `devfuria_fulia`.`paginas`
SET `metaDescr` = 'Método lineJoin (miter, round, bevel)'
WHERE `paginas`.`url` = '/js/canvas/lineJoin-miter-round-bevel/';

UPDATE `devfuria_fulia`.`paginas`
SET `metaDescr` = 'Método lineJoin(''miter, round, bevel'')'
WHERE `paginas`.`url` = '/js/canvas/lineJoin-miter-round-bevel/';

UPDATE `devfuria_fulia`.`paginas`
SET `ordem` = '3'
WHERE `paginas`.`url` = '/js/canvas/line-width/';

UPDATE `devfuria_fulia`.`paginas`
SET `ordem` = '4'
WHERE `paginas`.`url` = '/js/canvas/lineJoin-miter-round-bevel/';

UPDATE `devfuria_fulia`.`paginas`
SET `metaDescr` = 'Aprenda o básico de arrays em PHP, veremos como criar, iterar(foreach e while) e funções internas.'
WHERE `paginas`.`url` = '/php/basico/arrays-vetores-matrizes/';

UPDATE `devfuria_fulia`.`paginas`
SET `metaDescr` = 'Veremos 4 conceitos básicos: endentação, nomeação, comentários e estilos. Boas práticas essenciais e que não podem faltar em seu repertório como programador.'
WHERE `paginas`.`url` = '/php/basico/boas-praticas/';

UPDATE `devfuria_fulia`.`paginas`
SET `metaDescr` = 'Exercícios de lógica de programação com respostas (sobre operadores de atribuição)'
WHERE `paginas`.`url` = '/logica-de-programacao/basico/exercicios-operadores-atribuicao/';

UPDATE `devfuria_fulia`.`paginas`
SET `metaDescr` = 'Introduziremos o conceito intuitivo de programação orientada a objetos, propriedades e métodos.'
WHERE `paginas`.`url` = '/js/basico/oop-primeiro-degrau/';
*/


-- regexp

/*
UPDATE `devfuria_fulia`.`paginas` SET 
`url` = '/regexp/basico/match-test-exec/',
`titulo` = 'match(), test() e exec()'
WHERE `paginas`.`url` = '/regexp/basico/varios-resultados-match-test-exec/';

UPDATE `devfuria_fulia`.`paginas` SET
`url` = '/regexp/basico/preg-match-all/',
`metaTitle` = 'O básico sobre a função preg math all'
WHERE `paginas`.`url` = '/regexp/basico/varios-resultados-preg-match-all/';

INSERT INTO `devfuria_fulia`.`paginas`
(`ordem`, `url`, `urlLabel`, `titulo`, `descricao`, `metaTitle`, `metaDescr`, `secao`, `subSecao`, `nivel`, `status`, `dtCriacao`, `dtAtualizacao`, `autor`)
VALUES ('3', '/php/preg-match-all/', 'Referência da função preg_match_all()', 'preg_math_all()', NULL, 'PHP preg match all, preg-match-all, preg_math_all()', 'O que você precisa saber sobre a função preg_match_all()', 'php', 'rtg', 'basico', 'done', '2014-04-25', '2014-04-25', NULL);


-- 29/04/2014
INSERT INTO `devfuria_fulia`.`paginas` 
(`ordem`, `url`, `urlLabel`, `titulo`, `descricao`, `metaTitle`, `metaDescr`, `secao`, `subSecao`, `nivel`, `status`, `dtCriacao`, `dtAtualizacao`, `autor`)
VALUES ('7', '/js/canvas/canvas-linhas-rando-coloridas/', 'Canvas - linhas randômicas coloridas', 'Canvas - linhas randômicas coloridas', NULL, 'Canvas (HTML5) - linhas randômicas coloridas', 'Exemplo básico porém interessante do Canvas (HTML5)', 'js', 'canvas', 'basico', 'done', '2014-04-29', '2014-04-29', NULL);
*/

UPDATE `devfuria_fulia`.`paginas`
SET `metaTitle` = 'O que você precisa saber sobre a função Math.random de JavaScript'
WHERE `paginas`.`url` = '/js/math-random-numero-randomico-em-javascript/';


