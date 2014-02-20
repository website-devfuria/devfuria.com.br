<?php

/**
 * Clase com funcções auxiliares
 */
class Aux {

    static function getAncora($url, $secao) {
        $href = LINKS_PATH . $url;
        $title = $secao[LINKS_PATH . $url];
        $link = LINKS_PATH . $url;
        echo "<a href=\"$href\" title=\"$title\">$link</a>";
    }

}
