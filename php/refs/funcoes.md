---
layout:      php
title:       PHP - Funcões
description: Referência prática sobre Funcões - PHP
---

### O que são funções?

Funções são uma seção nomeada de código, um pequeno (normalmente pequeno) trecho de código que pode ser chamado de
diversos ponto do código.

Quando o programador precisar executar um mesmo código (mesmo que ligeiramente diferente) várias vezes ele, então, 
poderá utilizar-se de funções.

As funções introduzem o conceito de reusabilidade, ou seja, "escrever código para depois".

Tendo a reusabilidade e a não repetição de código (DRY - Don't repeat yourself) como objetivos, teremos ainda que tomar
todo cuidado para evitarmos, principalmente:

- Funções grandes demais, inchadas, com mais de uma responsabilidade.
- Funções pouco generalista, ou seja, muito especialista.
- Funções com muito parâmetros (considere OOP como alternativa).
- Funções que sejam difícil de testar.


Eis a sintaxe básica de uma função que não retorna valor, mais conhecida como procedimento :


    function foo() {
        # código
        # código
        # código
        # código
    }

O __return__ faz com que algum valor seja retornado e interrompe o funcionamento da função.

    function foo() {
        # código
        # código
        # código
        return "alguma coisa";
    }

Uma função pode aceitar parâmetros (dados para serem trabalhos dentro da função).


Temos os parâmetros opcionais (ou não), os valores padrões e se os dados são passados por "valor" ou por "referência", 
por hora deixaremos esses assuntos para outra matéria.

Abaixo conferimos um exemplo de função que soma dois números.

```php
<?php
function somarDoisNumeros($parametro1, $parametro2) {
    $soma = $parametro1 + $parametro2;
    return $soma;
}

echo somarDoisNumeros(5, 3);
// print 8
echo somarDoisNumeros(2, 4);
// print 6
```