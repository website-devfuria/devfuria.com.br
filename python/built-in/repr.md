---
title:       Python - Função interna repr()
description: Exemplos práticos sobre a função interna repr()
---

Eita função que causa uma dúvida da peste!

Rsss... acho que a confusão se dá, principalmente, porque ela desempenha um papel diferente entre as versões 2 e 3 do
Python, apesar de funcionar da mesma forma em ambas as versões.

Na versão 2 você poderia converter um objeto para sua representação explícita utilizando-se do sinal de crave.

    $ python2
    >>> `sorted`
    '<built-in function sorted>'

Mas isso ofusca a leitura do código e foi retirado da versão 3.

    $ python3
    >>> `sorted`
      File "<stdin>", line 1
        `sorted`
        ^
    SyntaxError: invalid syntax

Foi retirado da versão 3 porque a função `repr()` pode fazer o que o fazia a expressão delimitada pelo sinal de crave.
[Fonte: python3porting.com](http://python3porting.com/differences.html#repr-as-backticks "link-externo")

Legal, agora temos o significado e um exemplo do que faz a função interna __repr__, mas as coisas ainda não estão claras.

Já o livro [Dive Into Python 3](http://www.diveintopython3.net/special-method-names.html#basics "link-externo") nos diz 
que ela "é a representação oficial como uma string [...] por convenção, o método __repr__ deve retornar um string que 
seja uma expressão Python válida." O que será que ele quis dizer com "oficial"?

O trecho extraido do livro Dive Into é o apêndice B que, por sua vez, é referenciado no capítulo 7 "Classes & Iterators" 
e nos remete as questões de programação orientada a objetos. Nesse ponto, o autor do 
[deste artigo](http://pythoncentral.io/what-is-the-difference-between-__str__-and-__repr__-in-python/  "link-externo")
traz uma dica...

+ Implemente __repr__ para cada classe que você criar.
+ Implemente __str__ para as classes que você acha que a legibilidade é mais importante do que a não-ambiguidade.

A documentação oficial diz o seguinte...

> Return a string containing a printable representation of an object

O tutorial que acompanha a documentação também ajuda a elucidar...

> A função `str()` serve para produzir representações de valores que sejam legíveis para as pessoas, enquanto `repr()`
> é para gerar representações que o interpretador Python consegue ler (caso não exista uma forma de representar o valor,
> a representação devolvida por `repr()` produz um SyntaxError [N.d.T. `repr()` procura gerar representações fiéis; 
> quando isso é inviável, é melhor encontrar um erro do que obter um objeto diferente do original]). Para objetos que 
> não têm uma representação adequada para consumo humano, `str()` devolve o mesmo valor que `repr()`. Muitos valores, 
> tal como inteiros e estruturas como listas e dicionários, têm a mesma representação usando ambas funções. Strings e 
> números de ponto flutuante, em particular, têm duas representações distintas.
>
> [Fonte](http://turing.com.br/pydoc/2.7/tutorial/inputoutput.html): Documentação Pyton traduzida pela turing.com.br 

{% include /alertas/python-built-in-index.html %}
