<?php

/**
 * Arquivo Bootstrap
 */
/**
 *
 */
session_start();


/**
 * Timezone
 */
date_default_timezone_set('America/Sao_Paulo');

/**
 *
 */
define('DF', true);
//define('GANALYTICS_ON', true); // liga
define('GANALYTICS_ON', false); // desliga



/**
 * Root
 */
//define('ROOT_PATH', "http://www.devfuria.com.br");
define('ROOT_PATH', "http://localhost/devfuria/www.devfuria.com.br");


/**
 * Caminho relativo da raiz do sistema
 */
define('BASE_PATH', dirname(__FILE__));


/**
 * Caminho absoluto para links e imagens
 */
# www.devefuria.com.br
define('LINKS_PATH', ROOT_PATH);



/**
 * Pasta das views
 */
define('VIEWS_PATH', "/views/");


/**
 * Pasta dos componetes (referente as views)
 */
//define('VIEWS_COMP_PATH', "/views/comp/");


/**
 *  Domínio, (não mais) utilizado nos title das páginas
 */
define('DOMINIO', "www.devfuria.com.br");



/**
 * Classes diversas
 */
require (BASE_PATH . "/oop/Core.php");
require (BASE_PATH . "/oop/Head.php");
require (BASE_PATH . "/oop/NavTop.php");
require (BASE_PATH . "/oop/ListaSecao.php");
require (BASE_PATH . "/oop/Paginacao.php");
require (BASE_PATH . "/oop/Materia.php");
require (BASE_PATH . "/oop/Aux.php");


/**
 * Variáveis do sistema
 */
$core = new Core();
$core->secoes = array(
    "js" => "Javascript",
    "php" => "PHP",
    "html-css" => "HTML & CSS",
    "logica-de-programacao" => "Lógica de Programação",
    "mysql-sql" => "MySql & SQL",
    "regexp" => "RegExp"
);
$core->links[Core::SECAO_JS] = array(
    LINKS_PATH . "/js/basico/intro/" => "Introdução",
    LINKS_PATH . "/js/basico/preparando-o-terreno/" => "Preparando o terreno",
    LINKS_PATH . "/js/basico/debugando/" => "Debugando (depurando) [com vídeo]",
    LINKS_PATH . "/js/basico/code-lampadas/" => "Code - A Lâmpada",
    LINKS_PATH . "/js/basico/oop-primeiro-degrau/" => "OOP - primeiro degrau",
    LINKS_PATH . "/js/basico/refatoracao-codigo-limpo/" => "Refatoração e código limpo",
    LINKS_PATH . "/js/basico/code-lampadas-refatorando/" => "Code - A Lâmpada (refatorando)",
    LINKS_PATH . "/js/basico/textbox-password-textarea/" => "Descobrindo os controles text, password e textarea",
    LINKS_PATH . "/js/basico/checkbox-checked/" => "Manipulando check boxes"
);
$core->links[Core::SECAO_PHP] = array(
    LINKS_PATH . "/php/basico/um-bom-comeco/" => "Um bom começo",
    LINKS_PATH . "/php/basico/instalando-o-ambiente/" => "Instalando o ambiente no estilo NEXT, NEXT, NEXT",
    LINKS_PATH . "/php/basico/boas-praticas/" => "Antes de enfiar o pé na jáca (boas práticas)",
    LINKS_PATH . "/php/basico/debugando/" => "Debugando (depurando)",
    LINKS_PATH . "/php/basico/arrays-vetores-matrizes/" => "Arrays (criando, iterando, funções, explode, implode)",
    LINKS_PATH . "/php/basico/metodo-http-get-post/" => "Como funcionam os métodos GET e POST",
    LINKS_PATH . "/php/basico/enviando-dados-via-get-post/" => "Enviando dados para o script",
    LINKS_PATH . "/php/basico/recebendo-dados-via-get-post/" => "Recebendo dados",
    LINKS_PATH . "/php/basico/textbox-password-textarea/" => "Descobrindo os controles text, password e textarea",
    LINKS_PATH . "/php/basico/checkbox-checked/" => "Manipulando check boxes"
);
$core->links[Core::SECAO_LOG] = array(
    LINKS_PATH . "/logica-de-programacao/basico/intro/" => "Introdução a Lógica de Progamação",
    LINKS_PATH . "/logica-de-programacao/basico/exercicios-operadores-atribuicao/" => "Exercícios de lógica de programação (operadores de atribuição)",
    LINKS_PATH . "/logica-de-programacao/basico/if-else/" => "Expressões Condicionais (if-else)",
    LINKS_PATH . "/logica-de-programacao/basico/exercicios-expressoes-condicionais/" => "Exercícios de lógica de programação (expressões condicionais)",
    LINKS_PATH . "/logica-de-programacao/basico/funcoes-procedimentos/" => "Funções",
    LINKS_PATH . "/logica-de-programacao/basico/code-triangulo/" => "Code - Triângulo",
    LINKS_PATH . "/logica-de-programacao/basico/oop-programacao-orientada-a-objetos/" => "Vamos de OOP?",
    LINKS_PATH . "/logica-de-programacao/basico/tdd-test-driven-development/" => "Vamos de TDD?",
    LINKS_PATH . "/logica-de-programacao/basico/code-triangulo-tdd/" => "Code - Triângulo + TDD",
);
$core->links[Core::SECAO_HTML] = array(
    LINKS_PATH . "/html-css/basico/onde-tudo-comecou/" => "Onde tudo começou",
    LINKS_PATH . "/html-css/basico/html-intro/" => "Primeiro contato com HTML",
    LINKS_PATH . "/html-css/basico/css-intro/" => "Primeiro contato com CSS",
    LINKS_PATH . "/html-css/basico/elementos-inline-block-level/" => "Elementos in-line e elementos block-level",
    LINKS_PATH . "/html-css/basico/primeiro-html/" => "Criando nosso primeiro HTML [com vídeo]",
    LINKS_PATH . "/html-css/basico/formularios-web/" => "Formulários Web e seus controles ",
);
$core->links[Core::SECAO_MYSQL] = array(
    LINKS_PATH . "/mysql-sql/basico/intro/" => "Banco de dados prá que?",
    LINKS_PATH . "/mysql-sql/basico/primeiros-passos-mysql/" => "Primeiros passos com MySql",
    LINKS_PATH . "/mysql-sql/basico/criando-base-tabela/" => "Criando e populando uma tabela",
    LINKS_PATH . "/mysql-sql/basico/crud/" => "Entendendo o que é CRUD",
);
$core->links[Core::SECAO_ER] = array(
    LINKS_PATH . "/regexp/basico/intro/" => "Introdução",
    LINKS_PATH . "/regexp/basico/preg-match/" => "preg_match()",
    LINKS_PATH . "/regexp/basico/string-match/" => "string.match()",
    LINKS_PATH . "/regexp/basico/pattern-test/" => "pattern.test() ",
    LINKS_PATH . "/regexp/basico/pattern-exec/" => "pattern.exec() ",
    LINKS_PATH . "/regexp/basico/new-regexp/" => "new RegExp() ",
    LINKS_PATH . "/regexp/basico/ponto/" => "ponto",
    LINKS_PATH . "/regexp/basico/varios-resultados-preg-match-all/" => "Vários resultados - preg_match_all()",
    LINKS_PATH . "/regexp/basico/varios-resultados-match-test-exec/" => "Vários resultados - match(), test() e exec()",
);