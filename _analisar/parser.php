<?php

/**
 * Função utilizada para ler os dados de cada matéria.
 * Ela carrega e retorna o objeto "Materia()"
 *
 * @param type $url
 * @param type $labelLink
 * @return \Materia
 */
function parsearArquivo($url, $labelLink) {

    $materia = new Materia();
    $materia->url = $url;
    $materia->labelLink = $labelLink;


    # Código (é a URL só a parte depois do domínio)
    $codigoTemp = explode("www.devfuria.com.br", $materia->url);
    $materia->codigo = $codigoTemp[1];
    unset($codigoTemp);


    # demais dados...
    $html = file_get_html($materia->url);


    # título da página
    foreach ($html->find('title') as $element) {
        $materia->paginaTitulo = $element->plaintext;
    }

    # descrição da página
    $metaDescription = $html->find('meta[name=description]');
    $materia->paginaDescricao = $metaDescription[0]->content;

    # título da matéria
    $titulo = array();
    foreach ($html->find('h1') as $element) {
        $titulo[] = $element->plaintext;
    }
    $materia->titulo = $titulo[0];

    # data alteração
    $dtTemp = $html->find('span.label-success');
    $materia->dtAtualizacao = trim($dtTemp[0]->plaintext);


    # data criação
    $dtTemp = $html->find('span.label-info');
    $materia->dtCriacao = trim($dtTemp[0]->plaintext);
    unset($dtTemp);

    return $materia;
}


/**
 * Buscar os links
 */
//foreach ($html->find('a') as $element) {
////	echo $element->href . '<br>';
//    var_dump($element->plaintext);
//}
