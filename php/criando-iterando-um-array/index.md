---
title:       Criando e iterando um array em PHP
description: Aprenda como criar e iterar arrays em php com foreach e while
---

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "http://www.devfuria.com.br/php/criando-iterando-um-array/"
  },
  "headline": "Criando e iterando um array em PHP",
  "datePublished": "2015-02-05T08:00:00+08:00",
  "dateModified": "2015-02-05T09:20:00+08:00",
  "author": {
    "@type": "Person",
    "name": "Flávio Alexandre Micheletti"
  },
   "publisher": {
    "@type": "Organization",
    "name": "Devfuria",
    "logo": {
      "@type": "ImageObject",
      "url": "http://devfuria.com.br/assets/images/favicon.png",
      "width": 140,
      "height": 140
    }
  },
  "description": "Aprenda como criar e iterar arrays em php com foreach e while"
}
</script>

> Um array no PHP é atualmente um mapa ordenado. Um mapa é um tipo que relaciona valores para chaves. Este tipo é
> otimizado de várias maneiras, então você pode usá-lo como um array real, ou uma lista (vetor), hashtable (que é uma
> implementação de mapa), dicionário, coleção, pilha, fila e provavelmente mais. Como você pode ter outro array PHP como
>um valor, você pode facilmente simular árvores.
>
> <small>[Fonte: Manual do PHP - arrays](http://php.net/manual/pt_BR/language.types.array.php "link-externo")</small>

Um array em PHP é equivalente ao conceito de __vetor__ normalmente ensinado nas faculdades.

O conceito de __matriz__ é equivalente a um array multidimensional, ou seja, um array composto de outros array's.

O índice do primeiro valor é zero.

![Figura ilustrando as chaves de um array](indice-zero.jpeg "Figura ilustrando as chaves de um array")

Neste artigo veremos...

- Criar um array
- Criar um array dinâmicamente
- Especificando as chaves de um array
- Array numérico
- Array associativo
- Iterando um array com foreach
- Iterando um array com while
- Curso em vídeo de PHP – 18 – Vetores e Matrizes (Parte 1)


Criar um array
---


Criando um array vazio.

    # antigamente
    $arr = array();

    # PHP7
    $arr = [];

Se executarmos `var_dump($arr)` veremos que o array está vazio.

![figura ilustrando resultado de um array](array00.png "figura ilustrando resultado de um array")

Criando um array com valores conhecidos

    $arr = array(10, 11, 12, 13);

Resultado

![figura ilustrando resultado de um array](array01.png "figura ilustrando resultado de um array")

Outro exemplo.

    $arr = array("melancia", "banana", "laranjas", "abacates");

Se você for criar um array muito grande, então poderemos quebrar a linha, veja exemplo:

    # antigamente
    $arr = array(
        "melancia",
        "banana",
        "laranjas",
        "abacates"
    );

    # PHP 7
    $arr = [
        "melancia",
        "banana",
        "laranjas",
        "abacates"
    ];

Eu gosto muito de usar dessa forma.


Criar um array dinâmicamente
---

Essa é uma forma interessante, simplesmente vamos atribuindo valores ao array.

    $arr = [];
    $arr[] = 10;
    $arr[] = 11;
    $arr[] = 12;
    $arr[] = 13;

A função interna do PHP `array_push` ilustrada abaixo faz exatamente o mesmo que o código acima.

    $arr = [];
    array_push($arr, 10);
    array_push($arr, 11);
    array_push($arr, 12);
    array_push($arr, 13);




Especificando as chaves de um array
---

Podemos especificar as chaves do array no momento da criação.

    $arr = [
        "nome"   => "Paulo Silva",
        "rua"    => "Rua 25 de Março",
        "bairro" => "Centro",
        "cidade" => "São Paulo"
    ];

O array acima é ilustrado abaixo.

![figura ilustrando resultado de um array](array02.png "figura ilustrando resultado de um array")


Outro exemplo

    $arr = [
        100 => "Primeiro item",
        101 => "Segundo item",
        102 => "Terceiro item",
        103 => "Quarto item"
    ];

Resultado:

![figura ilustrando resultado de um array](array03.png "figura ilustrando resultado de um array")



Array numérico
---

Um array é dito numérico quando as chaves (key) são inteiros.

    $arr = [
        0 => "vermelha",
        1 => "doce",
        2 => "redonda",
        3 => "maçã"
    ];



Array associativo
---

Um array é dito associativo quando as chaves (key) são strings.

    $arr = [
        "cor" => "vermelha",
        "sabor" => "doce",
        "formato" => "redonda",
        "nome" => "maçã"
    ];

Também dá para fazer o array misto (associativo e numérico)



Iterando um array com foreach
---

Tomando o último array como exemplo:

    $arr = [
        "cor"     => "vermelha",
        "sabor"   => "doce",
        "formato" => "redonda",
        "nome"    => "maçã"
    ];

Para percorrer(iterar) esse array e imprimir os resultado usamos o laço `foreach`.

Mostrando só valor __foreach (array_expression as $value)__:

    foreach($arr as $valor) {
        var_dump($valor);
    }

Resultado:

![figura ilustrando resultado de um array](array04.png "figura ilustrando resultado de um array")

Mostrando o valor e a chave __foreach (array_expression as $key => $value)__:

    foreach($arr as $chave => $valor) {
        var_dump($chave. " - " . $valor);
    }

Resultado:

![figura ilustrando resultado de um array](array05.png "figura ilustrando resultado de um array")

Fonte: [Manual do PHP - foreach](http://www.php.net/manual/pt_BR/control-structures.foreach.php "link-externo")




Iterando um array com while
---

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


Fonte: [Manual do PHP - while](http://www.php.net/manual/pt_BR/control-structures.while.php "link-externo")


Curso em vídeo de PHP – 18 – Vetores e Matrizes (Parte 1)
---

Vídeo aula do professor Gustavo Guanabara sobre Vetores e Matrizes em PHP.

<iframe width="560" height="315" src="//www.youtube.com/embed/g8Gr2NIMxQQ" frameborder="0" allowfullscreen></iframe>

Fonte: [Curso em video - php-iniciante](http://www.cursoemvideo.com/course/curso-php-iniciante/ "link-externo")