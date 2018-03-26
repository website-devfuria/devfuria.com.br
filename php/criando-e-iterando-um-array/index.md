---
title:       Criando e iterando um array
description: Aprenda como criar e iterar arrays em php com foreach e while
capitulo:    "php-conhecendo-o-inimigo"
ordem:       2
---

Array é uma estrutura que relaciona valores e chaves, é uma lista de valores armazenados na memória.

Um array em PHP é equivalente ao conceito de __vetor__ normalmente ensinado nas faculdades. Outro conceito que se asemelha
é o conceito de __matriz__, equivale a um array multidimensional (um array composto de outros array's).

É equivalente a um dicionário em Python, mas também podemos dizer que se aproxima das listas de Python.

O índice do primeiro valor é zero.

![Figura ilustrando as chaves de um array](indice-zero.jpeg "Figura ilustrando as chaves de um array")

Neste artigo veremos como...

- Criar um array
- Criar um array dinâmicamente
- Especificando as chaves de um array
- Array numérico
- Array associativo
- Iterando um array com foreach
- Iterando um array com while


## Criar um array

Criando um array vazio.

    $arr = array();

Se executarmos `var_dump($arr)`, veremos que o array está vazio.

![figura ilustrando resultado de um array](array00.png "figura ilustrando resultado de um array")

Criando um array com valores conhecidos

    $arr = array(10, 11, 12, 13);

Resultado.

![figura ilustrando resultado de um array](array01.png "figura ilustrando resultado de um array")

Outro exemplo.

    $arr = array("melancia", "banana", "laranjas", "abacates");

Quando o array acima cresce e fica grande demais para caber em 120 colunas temos como opção a forma abaixo.

    $arr = array(
        "melancia",
        "banana",
        "laranjas",
        "abacates"
    );



## Criar um array dinâmicamente

Essa é uma forma interessante, simplesmente vamos atribuindo valores ao array.

    $arr = array();
    $arr[] = 10;
    $arr[] = 11;
    $arr[] = 12;
    $arr[] = 13;

A função interna do PHP `array_push` ilustrada abaixo faz exatamente o mesmo que o código acima.

    $arr = array();
    array_push($arr, 10);
    array_push($arr, 11);
    array_push($arr, 12);
    array_push($arr, 13);



## Especificando as chaves de um array

Podemos especificar as chaves do array no momento da criação.

    $arr = array(
        "nome" => "Paulo Silva",
        "rua" => "Rua 25 de Março",
        "bairro" => "Centro",
        "cidade" => "São Paulo"
    );

O array acima é ilustrado abaixo.

![figura ilustrando resultado de um array](array02.png "figura ilustrando resultado de um array")


Outro exemplo

    $arr = array(
        100 => "Primeiro item",
        101 => "Segundo item",
        102 => "Terceiro item",
        103 => "Quarto item"
    );

Resultado:

![figura ilustrando resultado de um array](array03.png "figura ilustrando resultado de um array")



## Array numérico

Um array é dito numérico quando as chaves (key) são inteiros.

    $arr = array(
        0 => "vermelha",
        1 => "doce",
        2 => "redonda",
        3 => "maçã"
    );



## Array associativo

Um array é dito associativo quando as chaves (key) são strings.

    $arr = array(
        "cor" => "vermelha",
        "sabor" => "doce",
        "formato" => "redonda",
        "nome" => "maçã"
    );

Também dá para fazer o array misto (associativo e numérico)



## Iterando um array com foreach

Tomando o último array como exemplo:

    $arr = array(
        "cor" => "vermelha",
        "sabor" => "doce",
        "formato" => "redonda",
        "nome" => "maçã"
    );

Para percorrer(iterar) esse array e imprimir os resultado usamos o laço `foreach`.

Mostrando só valor:

    foreach($arr as $valor) {
        var_dump($valor);
    }

Resultado:

![figura ilustrando resultado de um array](array04.png "figura ilustrando resultado de um array")

Mostrando o valor e a chave:

    foreach($arr as $chave => $valor) {
        var_dump($chave. " - " . $valor);
    }

Resultado:

![figura ilustrando resultado de um array](array05.png "figura ilustrando resultado de um array")

Fonte: [Manual do PHP - foreach](http://www.php.net/manual/pt_BR/control-structures.foreach.php)



## Iterando um array com while

Tanto...

    while ($cad_pos = current($arr)) {
        $key = key($arr);
        var_dump("$key - " . $posicoes[$key]);
        next($arr);
    }

...quanto:

    while ($cad_pos = current($arr)) {
        $key = key($arr);
        var_dump("$key - " . $cad_pos);
        next($arr);
    }

Chegam no mesmo resultado:

![figura ilustrando resultado de um array](array05.png "figura ilustrando resultado de um array")


## Fonte

- [Manual do PHP - while](http://www.php.net/manual/pt_BR/control-structures.while.php)


