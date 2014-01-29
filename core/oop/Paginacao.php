<?php

/**
 * Classe que acompanha a view "paginacao.php"
 */
class Paginacao {

    public $anterior;
    public $proxima;
    public $link_ativo;

    function __construct() {
        $this->anterior = array(
            "href" => "",
            "titulo" => ""
        );
        $this->proxima = array(
            "href" => "",
            "titulo" => ""
        );
    }

    /**
     * O desafio desta função é descobrir o item anterior e próximo de um array quando o valor bater.
     * 
     * <code>else if (strstr($href, $this->link_ativo)) {</code>
     * nos diz se bateu ou não
     * 
     * Obs:
     * se $this->link_ativo for o primeiro então
     *      anterior = ''
     * se $this->link_ativo for o primeiro então
     *      proximo = ''
     * 
     * genial!!!
     * 
     * @param type $arrLinksDaSecao Array com os links da seçã exemplo:
     * $arrLinksDaSecao[href-completo] = "titulo"
     * $arrLinksDaSecao[href-completo] = "titulo"
     * $arrLinksDaSecao[href-completo] = "titulo"
     */
    function descobrirAnteriorProxima($arrLinksDaSecao) {
        if (!$this->link_ativo) {
            return false;
        }

        $flag_ja_preenchemos_anterior = false;
        $flag_ja_preenchemos_proxima = false;

        foreach ($arrLinksDaSecao as $href => $titulo) {
            # $flag_ja_preenchemos_anterior == true siginifica que já bateu e
            # é hora de anotar a proxima ...
            if ($flag_ja_preenchemos_anterior) {
                #.. mas só se ela ainda não estivar anotada
                if (!$flag_ja_preenchemos_proxima) {
                    $this->proxima['href'] = $href;
                    $this->proxima['titulo'] = $titulo;
                    # (quando anotar a proxima indicamos na flag)
                    $flag_ja_preenchemos_proxima = true;
                }
            }
            # bateu? sim? então...
            else if (strstr($href, $this->link_ativo)) {
                # ... anota que a anterior já foi armazenada
                $flag_ja_preenchemos_anterior = true;
            }
            # não é a próxima!
            # não bateu!
            # então só pode ser a anterior, anotamos...
            else {
                # .. mas somente se ainda não tiver sido anotada
                if (!$flag_ja_preenchemos_anterior) {
                    $this->anterior['href'] = $href;
                    $this->anterior['titulo'] = $titulo;
                }
            }
        }
    }

}

?>