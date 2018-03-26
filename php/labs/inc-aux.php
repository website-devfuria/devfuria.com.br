<?php

#
# ajuda a exibir informações em ambientes
#
function debug($var) {
    echo "<pre><code>";
    print_r($var);
    echo "</pre></code>";
}
