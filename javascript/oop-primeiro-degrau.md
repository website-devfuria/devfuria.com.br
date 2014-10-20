---
layout:      grid12-article
title:       OOP - primeiro degrau
description: Introduziremos conceito intuitivo de programação orientação a objeto em JavaScript.
---

Neste artigo introduziremos o conceito intuitivo de programação orientação a objeto em JavaScript.

O mundo OOP em JavaScript é um pouco diferente, o caminho é tortuoso e se você acha que ter os conceitos de OOP irá 
ajudar, ledo engando. "Instanciar uma classe não" tem o mesmo significado em JS.

Por enquanto, vamos entender que um objeto possui __propriedades (variáveis)__ e __métodos (funções)__ como em qualquer 
outra linguagem e que definimos ele através das chaves `{ }`.

Objeto vazio (e solto):

{% highlight javascript %}
{}
{% endhighlight %}

Objeto vazio atribuído a uma variável qualquer:

{% highlight javascript %}
var foo = {};
{% endhighlight %}

Objeto com algumas propriedades:


{% highlight javascript %}
var personagem = {
    nome: "Zé Colméia",
    peso: "gordinho",
    tipo: "bicho"
};
{% endhighlight %}

Agora podemos referenciar as propriedades:

{% highlight javascript %}
console.log(personagem.nome);
// saída: "Zé Colméia"
{% endhighlight %}

Acrescentando um método:

{% highlight javascript %}
var personagem = {
    nome: "Zé Colméia",
    peso: "gordinho",
    tipo: "bicho",
    chamarCatatau: function() {
        // código para chamar o colega Catatau
    }
};
{% endhighlight %}

Executando esse método:

{% highlight javascript %}
personagem.chamarCatatau();
{% endhighlight %}

Preciso que você faça um esforço mental para entender e decorar o seguinte esquema:

{% highlight javascript %}
var objeto = {
    propriedade: "podemos iniciar a variável com algum valor",
    metodo: function() {
        // código
        // código
        // código
    },
    outroMetodo: function() {
        // código
        // código
        // código
    }
};

{% endhighlight %}

Repare que tanto as propriedades quanto os métodos:

- são separados por virgula.
- utilizam os dois pontos como separador "nome: valor"


Em JS invocamos os atributos e métodos através do "ponto" . conforme esquema a seguir:

    # armazenando um valor
    objeto.propriedade = 123;

    # buscando o valor
    document.write( objeto.propriedade );

    # executando um método (uma função)
    objeto.metodo();

<hr>
Fonte:
- [Manual do JS (MDN) - Introduzindo a Orientação a Objetos](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Introduction_to_Object-Oriented_JavaScript "link-externo")



Exemplo - classe triangulo
---

Abaixo temos o esqueleto de um objeto em JS (repare que trocamos o termo classe por objeto).

    var objeto = {}

As propriedades e métodos são separados pela vírgula:

{% highlight javascript %}
    var objeto = {
        a: 0,
        b: 0,
        c: 0,
        metodo: function() {

        }
    }
{% endhighlight %}

Dentro dos métodos, as variáveis, ou melhor, as propriedades são referenciadas pela palavra chave `this`:


{% highlight javascript %}
    var objeto = {
        a: 0,
        b: 0,
        c: 0,
        metodo: function() {
            console.log( this.a );
            console.log( this.b );
            console.log( this.c );
        }
    }
{% endhighlight %}


O código abaixo representa um triângulo e possui apenas um método: `validarForma()`.

{% highlight javascript %}
var Triangulo = {
    a: 0,
    b: 0,
    c: 0,
    validarForma: function() {
        if (this.a < (this.b + this.c)) {
            if (this.b < (this.a + this.c)) {
                if (this.c < (this.a + this.b)) {
                    return true;
                }
            }
        } else {
            return false;
        }
    }
};
{% endhighlight %}






