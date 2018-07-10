---
title:       Funcões
description: "As funções introduzem o conceito de reusabilidade, significa 'escrever código para depois'."
capitulo:    "php-conhecendo-o-inimigo"
ordem:       3
---


### O que são funções?

Funções são uma seção nomeada de código, um pequeno (normalmente pequeno) trecho de código que pode ser chamado de
diversos ponto do código.

Quando o programador precisar executar um mesmo código várias vezes, ele poderá utilizar-se de funções.

As funções introduzem o conceito de reusabilidade, ou seja, "escrever código para depois".

Tendo a reusabilidade e a não repetição de código (DRY - Don't repeat yourself) como objetivos, teremos ainda que tomar
todo cuidado para evitarmos, principalmente:

- Funções grandes demais, inchadas, com mais de uma responsabilidade.
- Funções pouco generalista, ou seja, muito especialista.
- Funções com muito parâmetros (considere OOP como alternativa).
- Funções que sejam difícil de testar.

Estabeleça isso como uma regra, toda vez que criar um função olha para ela e pergunte-se: ela está grande demais ?
Ela é pouco generalista, ou seja, muito especializada e, por tanto, pouco reaproveitável ? Ela possui muitos parâmetros ?
Você consegue escrever um teste fcacilmente para sua função?

Eis a sintaxe básica de uma função que não retorna valor, mais conhecida como procedimento :


    function foo() {
        # código
        # código
        # código
        # código
    }

O __return__ faz com que algum valor seja retornado e interrompe o funcionamento da função. Teoricamente, uma função
sempre deve retornar algo.

    function foo() {
        # código
        # código
        # código
        return "alguma coisa";
    }

Uma função pode aceitar parâmetros (dados para serem trabalhos dentro da função).

Abaixo conferimos um exemplo de função que soma dois números.

```php
<?php

#
# uma função qualquer
#
function somarDoisNumeros($parametro1, $parametro2) {
    $soma = $parametro1 + $parametro2;
    return $soma;
}

echo somarDoisNumeros(5, 3);
// print 8

echo somarDoisNumeros(2, 4);
// print 6
```

Repare que o nome da função segue o estilo __camel case__, mas podemos usar o estilo __underscore case__ conforme
demosntrado abaixo.

```php
<?php

function somar_dois_numeros($parametro1, $parametro2) {
    $soma = $parametro1 + $parametro2;
    return $soma;
}

echo somar_dois_numeros(5, 3);
echo somar_dois_numeros(2, 4);
```

## Parâmetros opcionais (ou valores padrão?)


Temos os parâmetros opcionais. Veja no exemplo abaixo que o terceiro parâmetro é opcional, ele pode ou não ser enviado.

```php
<?php

#
# função com parâmetro opcional
#
function test($a, $b, $c = 0) {
    echo "$a-$b-$c";
}

test(1, 2);
test(1, 2, 3);
```

Você não precisa se preocupar com o terceiro parâmetro porque ele, além de ser opcional, também é o valor padrão, quero
dizer que quando não passamos um valor para `$c` o valor padrão (neste caso `0`) será utilizado.

Dito de outra forma, o parametro não é opcional, opcional é o valor que você vai fornecer para a função, caso você não 
informe, será considerado o valor padrão.



## Parâmetros por valor e por referência 

Temos também os dados que são passados por "valor" ou por "referência".

Abaixo um  exemplo de parâmetro passado por valor.

```php
<?php

$meu_a = 456;

#
# por valor
#
function alterar($a) {
    $a = 123;
}

alterar($meu_a);
echo $meu_a; // o que será que ele exibirá aqui ?
```

Abaixo um  exemplo de parâmetro passado por referência.

```php
<?php

$meu_a = 456;

#
# por referência
#
function alterar(&$a) {
    $a = 123;
}

alterar($meu_a);
echo $meu_a; // e agora, o que será que ele exibirá aqui ?
```

## Exercícios

1. Crie um script com a função `somar_dois_numeros` e veja ela funcionar com várias entradas (valores) diferentes.
2. Crie um função qualquer com pelo menos um parâmetro opcional.
3. Crie um função qualquer com pelo menos um valor padrão.
4. Explique para sí mesmo (como se estivese dando uma aula) as diferênças e semelhanças entre parâmetro opcional e valor padrão.
5. Sobre os parâmetros passados por referência e por valor, me diga qual é o resultado do código utilizado neste artigo
   (utilize os comentários)
