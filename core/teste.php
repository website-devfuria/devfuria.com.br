<?php

require "boot.php";



$conteudo = new Conteudo();

# Setando a lista (array) com todas as páginas do site
$model_paginas = new Paginas();
$conteudo->paginas = $conteudo->criaArrayPaginas($model_paginas->getAll());

var_dump($conteudo->paginas);



