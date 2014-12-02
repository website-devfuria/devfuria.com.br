---
layout:      grid12-article
title:       PHP e OOP - primeiro contato
description: Introdução a programação orientada a objetos na linguagem PHP
---


O OOP (Object Oriented Programming) ou Programação Orientada a Objeto remonta a época da linguagem Smalltalk.

O objetivo era (e ainda é) auxiliar a codificação da seguinte forma:

- Com objetos, o código fonte tende a ficar mais legível para humanos.
- A reusabilidade é bem e facilmente explorada através dos seguintes conceitos:
  - Abstração
  - Polimorfismo
  - Herança
  - Encapsulamneto
  - ... entre outros.

Quando você for programar orientado a objeto deve ter em mente essas duas coisas: __legibilidadede código__ e __reusabilidade__.

Quando esses dois itens são alcançados, podemos arriscar dizer que nossa programação está no caminho certo da OOP.

Nesta matéria veremos na prática como funcionam: classe, instância, objetos, métodos (funções) e propriedades (variáveis).

Para complementar seus estudos aconselho que o leitor procure por um terceira linguagem, de preferência uma que seja 
fortemente tipada (pois PHP é fracamente tipada). Essa questão da tipagem também muda tudo, Java e C# são duas boas 
opções, ambas fortemente tipadas. Você verá como é bom respirar outros "ares".

Dito isso, podemos concluir que aprender OOP em uma única linguagem não é aprender OOP de fato.


Exemplos
---

O código abaixo é denominado "código cliente", pois é ele quem faz uso da classe `Triangulo`.

O [require](/php/refs/require/) é para incluir um arquivo, no caso o arquivos que contém a classe.


{% highlight php %}
<?php
// script-cliente.php
require "Triangulo.php";

$triangulo = new Triangulo();               # instanciamos
$triangulo->a = 3;                          # atribuímos valor
$triangulo->b = 4;                          # idem
$triangulo->c = 5;                          # idem
var_dump(  $triangulo->validarForma()  );   # executamos um método
{% endhighlight %}

A linha abaixo tira uma cópia (instância) da classe `Triangulo` e armazena na variável `$triangulo`.

    $triangulo = new Triangulo();

Agora a variável `$triangulo` é um objeto.

Podemos invocar os atributos e métodos através da "seta" `->` conforme esquema a seguir:

{% highlight php %}
<?php
# armazenando um valor
$objeto->propriedade = 123;

# buscando o valor
echo $objeto->propriedade;

# executando um método (uma função)
$objeto->metodo();
Criando a classe servidora
O código abaixo é o esqueleto de uma classe qualquer

class Triangulo {
    # sua propriedades

    # seus métodos
}
{% endhighlight %}

As propriedades ficam no topo da classe e são precedidas por sua [visibilidade](/php/oop-visibilidade/):

- public
- protected
- private

{% highlight php %}
<?php
class Triangulo {

    # sua propriedades
    public $a;
    public $b;
    public $c;

    # seus métodos
}
{% endhighlight %}


Os métodos são o equivalente as funções e, como as propriedades, também possuem visibilidade, veja:

{% highlight php %}
<?php
class Triangulo {

    # suas propriedades
    public $a;
    public $b;
    public $c;

    # seus métodos
    public function validarForma() {
        ...
        ...
        ...
    }
}
{% endhighlight %}

Dentro dos métodos, as variáveis, ou melhor, as propriedades são referenciadas pela palavra chave `$this`:

{% highlight php %}
<?php
class Triangulo {

    # sua propriedades
    public $a;
    public $b;
    public $c;

    # seus métodos
    public function validarForma() {
        echo $this->a;
        echo $this->b;
        echo $this->c;
    }
}
{% endhighlight %}

Eis o código completo:


{% highlight php %}
<?php
// Triangulo.php

class Triangulo {

    public $a;
    public $b;
    public $c;

    /**
     * Função que valida se a forma é realmente um triângulo
     * fundamentado na afirmação de que "cada lado deve ser menor
     * que a soma dos outros 2 lados".
     */
    public function validarForma() {
        if ($this->a < ($this->b + $this->c)) {
            if ($this->b < ($this->a + $this->c)) {
                if ($this->c < ($this->a + $this->b)) {
                    return true;
                }
            }
        } else {
            return false;
        }
    }
}
{% endhighlight %}

Olhando para a classe podemos afirmar que classe é um conjunto de métodos e propriedades.

<hr>
Fonte:
- [Manual do PHP Introduzindo a Orientação a Objetos](http://www.php.net/manual/pt_BR/language.oop5.basic.php "link-externo")