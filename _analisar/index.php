<?php

/**
 *
 * Percorre as matérias (Arquivos físicos)
 * Lê os dados e monta um array com objetos "materia"
 * Insere os dados no DB
 *
 * Veja mais info no readme.md
 *
 */

# Ajuda com as datas
require "FuncAuxDatas.php";


# Este é o cara que lê o arquivo e nos permite fazer o parser
require "simple_html_dom.php";

# Este é o cara que efetua o parse e retorna um objeto
require "parser.php";

# Conecta ao banco(devfuria_folia).
# Podemos criar ou limpar a tabela.
require "conecta-db.php";
limparBase();
//criarTableMaterias();
# boot do site
require "../core/boot.php";


/**
 * Percorre os arquivos físicos do site através da url (completa) e
 * devolve um objeto matéria com os dados.
 */
function retArrayMateriasPorSecao($secao) {
    $materias = array();
    $id = 1;
    foreach ($GLOBALS['core']->links[$secao] as $urlCompleta => $linkLabel) {
        # Faz o parse da matéria pelo arquivo físico e
        # retorna um objeto "materia" com os dados
        $matTemp = parsearArquivo($urlCompleta, $linkLabel);
        $matTemp->id = $id;
        $matTemp->secao = $secao;

        $materias[] = $matTemp;
        $id++;
    }

    return $materias;
}

/**
 * Montar um array com todas as matérias
 */
$materias = array_merge(
    retArrayMateriasPorSecao(Core::SECAO_JS),
    retArrayMateriasPorSecao(Core::SECAO_PHP),
    retArrayMateriasPorSecao(Core::SECAO_LOG),
    retArrayMateriasPorSecao(Core::SECAO_MYSQL),
    retArrayMateriasPorSecao(Core::SECAO_ER),
    retArrayMateriasPorSecao(Core::SECAO_HTML)
);
//var_dump($materias); die();


/**
 * Percorre as matérias e insere no DB
 */
foreach ($materias as $materia) {

    $sql = "INSERT INTO materias VALUES("
            . "\"" . $materia->id . "\", "
            . "\"" . $materia->secao . "\", "
            . "\"" . $materia->codigo . "\", "
            . "\"" . $materia->url . "\", "
            . "\"" . $materia->labelLink . "\", "
            . "\"" . $materia->titulo . "\", "
            . "\"" . addslashes($materia->paginaTitulo) . "\", "
            . "\"" . addslashes($materia->paginaDescricao) . "\", "
            . "\"" . $materia->autor . "\", "
            . "\"" . FuncAuxDatas::data_converte_para_mysql($materia->dtCriacao) . "\", "
            . "\"" . FuncAuxDatas::data_converte_para_mysql($materia->dtAtualizacao) . "\" "
            . ")";
    var_dump($sql);
    $pdo->exec($sql);
}