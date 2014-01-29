<?php

/**
 * Classe que acompanha a view "lista-secao.php"
 */
class ListaSecao {

    public $links;       # links escolhido (Seção)
    public $link_ativo;  # link ativo (matéria

    
    function setLinks($linksTodos, $links_secao) {
        $this->links = $linksTodos[$links_secao];
    }

}

?>
