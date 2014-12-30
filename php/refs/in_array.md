---
layout:      grid93-article
title:       PHP - Função in_array()
description: Referência prática da função in_array - PHP
menu:        php-refs
---


A função __array_pop()__ checa se um valor existe em um array.

    bool in_array ( mixed $needle , array $haystack [, bool $strict ] )


- `$needle` -  O valor procurado, se for uma string, a comparação é feita diferenciando caracteres maiúsculos e minúsculos.
- `$haystack` - O array.
- `$strict` -  Se for `TRUE` então a função também irá checar os tipos, equivalente a `===`.


Exemplos
---

Utilização simples:

```php
<?php
$haystack = array(100, 200, 300, 400); 
echo in_array(200, $haystack) ? 'true' : 'false' ;   // 'true'
echo in_array(900, $haystack) ? 'true' : 'false' ;   // 'false'
```


Ilustrando o terceiro parâmetro:

```php
<?php
$haystack = array(100, 200, 300, 400); 
echo in_array("200", $haystack) ? 'true' : 'false' ;   // 'false'
```


Quando `$neddle` também é um array:

```php
<?php
$haystack = array(
    array(100, 200),
    array(300, 400),
    500
);
echo in_array(array(100, 200), $haystack) ? 'true' : 'false' ;   // 'true'
echo in_array(array(600, 700), $haystack) ? 'true' : 'false' ;   // 'false'
echo in_array(500, $arr) ? 'true' : 'false' ;               // 'true'
```


<hr>
Fonte
- [Manual do PHP - in-array](http://www.php.net/manual/pt_BR/function.in-array.php "link-externo")

