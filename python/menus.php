<?php


$menu = [];

#
#
#
$menu['python-basico'] = [
    "/python/strings/"                  => "O básico sobre strings",
    "/python/saidas-output/"            => "O básico sobre saídas (output)",
    "/python/estruturas-condicionais/"  => "O básico sobre estrutura condicionais",
    "/python/lacos-de-repeticao/"       => "O básico sobre laços de repetição",
    "/python/functions/"                => "O básico de funções",
    "/python/listas/"                   => "O básico de listas",
    "/python/dicionarios-dictionaries/" => "O básico sobre dicionários",
    "/python/sequencias-fatiamento/"    => "Operadores e fatiamento de sequências",
    "/python/erros-excecoes/"           => "Erros e exceções"
];

#
#
#
$menu['python-google'] = [
    "/python/google-exercises-string1/"        => "Basic Python Exercises - strings 1",
    "/python/google-exercises-string2/"        => "Basic Python Exercises - strings 2",
    "/python/google-exercises-list1/"          => "Basic Python Exercises - list 1",
    "/python/google-exercises-list2/"          => "Basic Python Exercises - list 2",
    "/python/google-exercises-wordcount/"      => "Basic Python Exercises - word count",
    "/python/google-exercises-hello-sys-argv/" => "Basic Python Exercises - sys.argv"
];


#
#
#
$menu['python-artigos'] = [
    "/python/convertendo-listas/"                        => "Convertendo listas em strings",
    "/python/manipulando-arquivos-de-texto/"             => "Manipulando arquivos de texto em Python",
    "/python/receitas-para-manipular-arquivos-de-texto/" => "Receitas para manipular arquivos de texto em Python",
    "/python/regex/"                                     => "Python - Expressões Regulares",
    "/python/programacao-orientada-objetos/"             => "Programação Orientada a Objetos em Python",
    "/python/tdd-primeiros-passos-com-testes-unitarios/" => "Primeiros passos com testes unitários em Python",
    "/python/codificacao-de-caracteres/"                 => "Codificando caracteres no início do script Python",
    "/python/entenda-__name__-__main__/"                 => 'Entenda o __name__ == "__main__"',
    "/python/imports/"                                   => "Importando módulos no Python (imports)",
    "/python/modulos-pacotes/"                           => "Módulos e Pacotes em Python",
    "/python/virtualenv/"                                => "Virtualenv",
    "/python/yield/"                                     => "Python - yield",
    "/python/sys-argv/"                                  => "Python - sys.argv",
    "/python/os/"                                        => "Python - os",
    "/python/os-path/"                                   => "Python - os.path",
    "/python/django-error-loading-mysqldb/"              => "Django Error loading MySQLdb module: No module named MySQLdb",
];

#
#
#
$menu['python-built-in'] = [
    "/python/built-in/"      => "Funções internas (bulti in functions)",
    "/python/built-in-enumerate/" => "Python - Função interna enumarate()",
    "/python/built-in-list"       => "Função interna list()",
    "/python/built-in-repr/"      => "Função interna repr()",
    "/python/built-in-zip/"       => "Função interna zip()",
];

return $menu;