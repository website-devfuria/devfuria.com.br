---
title:       Expressões Condicionais
description: Referência prática sobre Expressões Condicionais
capitulo:    "php-conhecendo-o-inimigo"
ordem:       1
---


As instruções condicionais alteram o fluxo de controle de seu programa.

Elas dizem para seu código ir para a "direita" ou para a "esquerda"

A instrução condicional mais comum é o `if`.

    if (expressão-condicional) {
        ... executar codigo
        ... executar codigo
        ... executar codigo
    }

Logo após a palavra `if` temos a expressão condicional entre parênteses `if (expressão-condicional) {`

O bloco __if__ só será executado se a expressão for verdadeira ou, em outras palavras, retornar `true`.



### Condicionais aninhados

Quando temos um __if__ dentro do outro.

    if ($a) {
        if ($b) {
            if ($c) {
                ... codigo
            }
        }
    }

O código abaixo é equivalente:

    if ($a && $b && $c) {
        ... codigo
    }



### Simplificando a expressão - TRUE

Os códigos abaixo são equivalentes

```php
<?php
// true completo
if ($variavel == true) {
    ... executar codigo
}
```

```php
<?php
// true simplificado
if ($variavel) {
    ... executar codigo
}

```



### Simplificando a expressão - FALSE

Da mesma forma, os código abaixo também são equivalentes

```php
<?php
// false completo
if ($variavel == false) {
    ... executar codigo
}
```

```php
<?php
// false simplificado
if ( !$variavel ) {
    ... executar codigo
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
if (expressao-condicional) {
    ... executar codigo
    ... executar codigo
    ... executar codigo
} else if (expressao-condicional) {
    ... executar codigo
    ... executar codigo
    ... executar codigo
}
```

Abaixo vemos o código equivalente:

```php
<?php
if (expressao-condicional) {
    ... executar codigo
    ... executar codigo
    ... executar codigo
} else {
    if (expressao-condicional) {
        ... executar codigo
        ... executar codigo
        ... executar codigo
    }
}
```



## if - else if - else

Uma outra variação seria incluir um terceiro bloco __else__.


```php
<?php
if (expressao-condicional) {
    ... executar codigo
    ... executar codigo
    ... executar codigo
} else if (expressao-condicional) {
    ... executar codigo
    ... executar codigo
    ... executar codigo
} else
    ... executar codigo
    ... executar codigo
    ... executar codigo
}
```

Neste caso, o bloco `else` apenas seria executado se o bloco `if` e bloco `else if` fossem `false`.