---
title:       Referência da função preg_match_all
description: Uma referência prática da função preg match all
serie:       PHP e Expressão Regular
capitulo:    "php-regex"
ordem:       3
---


```php
$resultado = preg_match_all($pattern, $subject, $matches, $flags, $offset);
```

Explicando...

A função `preg_match_all()` relaciona todas as ocorrências (`$matches`) de um padrão (`$pattern`) em uma string (`$subject`).

A ordem do array resultado (`$matches`) é influenciado pelo 4º parâmetro (`$flags`).

O 5º parâmetro (`$offset`) indica em que posição, na string de pesquisa (`$subject`), a pesquisa deve iniciar.

Fonte: Gilmore (Dominando PHP e MYSQL, pag. 164)


### Protótipo da função

```php
int preg_match_all (
                string $pattern,
                string $subject
                [, array &$matches
                [, int $flags = PREG_PATTERN_ORDER
                [, int $offset = 0 ]]]
            )
```


### Parâmetros

<table>
    <tr>
        <th>pattern</th>
        <td>
            <p>A expressão regular propriamente dita.</p>
            <p>String de padrão de procura.</p>
        </td>
    </tr>
    <tr>
        <th>subject</th>
        <td>
            <p>Texto que será vasculhado por nossa expresão regular.</p>
            <p>String de entrada.</p>
        </td>
    </tr>
    <tr>
        <th>matches (opcional)</th>
        <td>
            <p>Array multidimensional ordenado de acordo com o 4º parâmetro (`$flags`)</p>
            <p>O que nossa expressão regular encontrou.</p>
        </td>
    </tr>
    <tr>
        <th>flags (opcional)</th>
        <td>
            <p>Define a ordem do array resultado (`$matches`), pode ser: `PREG_PATTERN_ORDER` ou `PREG_SET_ORDER`.</p>
            <p>Quando omitido, o valor pardão é `PREG_PATTERN_ORDER`.</p>
        </td>
    </tr>
    <tr>
        <th>offset (opcional)</th>
        <td>
            <p>Indica em que posição, na string de pesquisa (`$subject`), a pesquisa deve iniciar.</p>
        </td>
    </tr>
</table>


Mais sobre o quarto parâmetro (flags)
---

Quando a flag é `PREG_PATTERN_ORDER` temos o seguinte quadro:

`$matches[0]` será um array com todas as ocorrências.

`$matches[1]` será um array com todas as ocorrências que combina com a primeira expressão em parênteses.

Exemplo:

```php
<?php
$pattern = "|<[^>]+>(.*)]+>|U";
$subject = "<b>example: </b><div align=left>this is a test</div>";
preg_match_all($pattern, $subject, $matches, PREG_PATTERN_ORDER);
var_dump($matches);
```

![Figura com o resultado de preg-pattern-order](php-preg-pattern-order.png "preg-pattern-order")

Quando a flag é `PREG_SET_ORDER` temos o seguinte quadro:

`$matches[0]` será um array com elementos realcionados pela primeira expressão regular entre parênteses.

`$matches[1]` será um array com elementos relacionados pela segunda expressão regular entre parênteses.

```php
<?php
$pattern = "|<[^>]+>(.*)]+>|U";
$subject = "<b>example: </b><div align=left>this is a test</div>";
preg_match_all($pattern, $subject, $matches, PREG_SET_ORDER);
var_dump($matches);
```

![Figura com o resultado de preg-set-order](php-preg-set-order.png "preg-set-order")

- - -
Fonte 

- [Manual do PHP - preg_match_all()](http://www.php.net/manual/pt_BR/function.preg-match-all.php)