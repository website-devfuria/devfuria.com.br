---
layout:      php
title:       PHP - Expressões Condicionais - if else
description: Referência prática sobre Expressões Condicionais (f else) - PHP
---


As instruções condicionais alteram o fluxo de controle de seu programa.

Elas dizem se devem ir para a "direita" ou para a "esquerda"

A instrução condicional mais comum é o `if`.

    if (expressão-condicional) {
        ... executar código
        ... executar código
        ... executar código
    }

Logo após a palavra `if` temos a expressão condicional entre parênteses `if (expressão-condicional) {`

O bloco __if__ só será executado se a expressão for verdadeira ou, em outras palavras, retornar `true`.



### Condicionais aninhados

Quando temos um __if__ dentro do outro.

    if ($a) {
        if ($b) {
            if ($c) {
                ... código
            }
        }
    }

O código abaixo é equivalente:

    if ($a && $b && $c) {
        ... código
    }



### Simplificando a expressão - TRUE

Os códigos abaixo são equivalentes

```php
<?php
// true completo
if ($variavel == true) {
    ... executar código
}
```

```php
<?php
// true simplificado
if ($variavel) {
    ... executar código
}

```



### Simplificando a expressão - FALSE

Da mesma forma, os código abaixo também são equivalentes

```php
<?php
// false completo
if ($variavel == false) {
    ... executar código
}
```

```php
<?php
// false simplificado
if ( ! $variavel) {
    ... executar código
}
```

Há programadores que detestam a versão simplificada, eu gosto!

É só uma questão de estilo.


### else if

O bloco __else__ não precisa ser executado sempre que a expressão no bloco __if__ for __false__.

O bloco __else__ poderá conter um expressão também.

No exemplo abaixo, se o __if__ for falso e o __else__ verdadeiro então o bloco __else__ será executado

```php
<?php
if (expressão-condicional) {
    ... executar código
    ... executar código
    ... executar código
} else if (expressão-condicional) {
    ... executar código
    ... executar código
    ... executar código
}
```

Abaixo vemos o código equivalente:

```php
<?php
if (expressão-condicional) {
    ... executar código
    ... executar código
    ... executar código
} else {
    if (expressão-condicional) {
        ... executar código
        ... executar código
        ... executar código
    }
}
```



## if - else if - else

Uma outra variação seria incluir um terceiro bloco __else__.


```php
<?php
if (expressão-condicional) {
    ... executar código
    ... executar código
    ... executar código
} else if (expressão-condicional) {
    ... executar código
    ... executar código
    ... executar código
} else
    ... executar código
    ... executar código
    ... executar código
}
```

Neste caso, o bloco `else` apenas seria executado se o bloco `if` e bloco `else if` fossem `false`.