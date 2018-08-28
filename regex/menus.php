<?php


$menu = [];

#
#
#
$menu['er-intro'] = [
    "/regex/expressoes-regulares/"             => "Introdução a Expressões Regulares",
    "/regex/metacaracteres/"                   => "Apresentação dos Metacaracteres",
    "/regex/cheat-sheet-matacaracteres/"       => "Cheat sheet sobre Metacaracteres",
    "/regex/exemplos-de-expressoes-regulares/" => "Exemplos de Expressões Regulares"
];

#
#
#
$menu['er-metacaracteres'] = [
    "/regex/metacaractere-ponto/"            => "Metacaractere ponto .",
    "/regex/metacaractere-lista/"            => "Metacaractere lista [ ]",
    "/regex/metacaractere-lista-negada/"     => "Metacaractere lista negada [^]",
    "/regex/metacaractere-opcional/"         => "Metacaractere opcional ?",
    "/regex/metacaractere-asterisco/"        => "Metacaractere asterisco *",
    "/regex/metacaractere-mais/"             => "Metacaractere mais +",
    "/regex/metacaractere-chaves/"           => "Metacaractere chaves { }",
    "/regex/metacaractere-circunflexo/"      => "Metacaractere circunflexo ^",
    "/regex/metacaractere-cifrao/"           => "Metacaractere cifrão $",
    "/regex/metacaractere-borda/"            => "Metacaractere borda \b",
    "/regex/metacaractere-escape/"           => "Metacaractere escape \\",
    "/regex/metacaractere-ou/"               => "Metacaractere ou |",
    "/regex/metacaractere-grupo/"            => "Metacaractere grupo ()",
    "/regex/metacaractere-retrorreferencia/" => "Metacaractere retrorreferência \\1 ... \9"
];

#
# lembra de mudar também na seção javascript
#
$menu['javascript-regex'] = [
    "/javascript/pattern-test/" => "JavaScript  pattern.test()",
    "/javascript/pattern-exec/" => "pattern.exec()",
    "/javascript/string-match/" => "string.match()",
    "/javascript/regexp/"       => "RegExp()",
    "/javascript/referencia-pratica-sobre-a-opcao-global-g/" => "Referência prática sobre a opção global g (expressões regulares)",
];

#
# lembra de mudar também na seção php
#
$menu['php-regex'] = [
    "/php/o-basico-sobre-a-funcao-preg-match/"     => "O básico sobre a função preg match",
    "/php/o-basico-sobre-a-funcao-preg-match-all/" => "O básico sobre a função preg_match_all",
    "/php/referencia-da-funcao-preg-match-all/"    => "Referência da função preg_match_all"
];

return $menu;