---
title:       PHP - Função array_pop()
description: Referência prática da função array_pop - PHP
menu:        php-refs
---


A função __array_pop()__ retira e retorna o último elemento do array.

    mixed array_pop ( array &$array )


Exemplo:

```php
<?php
$cesta = array("laranja", "banana", "melancia", "morango");
$fruta = array_pop($cesta);
print_r($cesta);
?>
```

O resultado será

    Array
    (
        [0] => laranja
        [1] => banana
        [2] => melancia
    )

Se o array estiver vazio (ou se não for um array), o valor `NULL` é retornado.

Emitirá um erro do tipo Warning quando invocado com um valor não-array.

A função irá "resetar" o ponteiro do array depois do uso.


<hr>
Fonte
- [Manual do PHP - array-pop](http://www.php.net/manual/pt_BR/function.array-pop.php "link-externo")
