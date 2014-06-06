---
layout: materia
title: Exemplo básico de refatoração em Javascript 
---


Quando escrevemos um código e, posteriomente, voltamos para ajustar algumas coisas, estamos praticando o refactoring.
Quero dizer, estamos refatorando o código.

O conceito intuitivo da palavra traz consigo a idéia de que "refatorar" é 
simplificar uma expressão.

Não é isso o que vem a sua mente ?

OK, mas simplificar o que exatamente? E de que forma?

Existem manuais completos dizendo como, quando e porque refatorar o seu código fonte.

Mas, respondendo a pergunta, vamos alterar o código sim, mas no sentido de alcançarmos mais clareza.

De fato, não vamos utilizar nenhuma metodologia para isso, ou seja, vamos aplicar arte pura. Meu objetivo é plantar na 
sua mente uma semente chamada "organização, limpeza e clareza".

E o que vamos fazer aqui é mais uma reconstrução do que uma refatoração.

Vamos refatora, ou melhor, reconstruir o código abaixo.


{% highlight javascript %}
var element = document.getElementById('myimage');
element.onclick = function() {
    if (element.src.match("bulbon")) {
        element.src = "fig-off.gif";
    } else {
        element.src = "fig-on.gif";
    }
};
{% endhighlight %}

Para ver um demo acesse link.

Se você não entende o código, então veja este artigo link.

Se voce quizer baixar os arquivos acesse o repositorio no git link.

Continuando...

Sabemos que o código acima tem a seguinte lógica:

{% highlight php %}
se (lampada estiver ligada) entao
    apagar lampada
senao
    acender lampada
{% endhighlight %}

Mas o código não reflete bem a intenção.

O código que mais se aproxima do nosso objetivo seria o mostrado abaixo:

{% highlight javascript %}
if (lampada.ligada) {
    lampada.apagar();
} else {
    lampada.acender();
}
{% endhighlight %}

Agora sim temos um código mais significativo, o que vc acha?

Mas ele não vai funcionar desse jeito, ele precisa de mais algumas coisas. Então vamos construir essas "coisas".

Vamos começar criando o objeto.

{% highlight javascript %}
var lampada = {

}
{% endhighlight %}

Adicionamos a propriedade `ligada`

{% highlight javascript %}
var lampada = {
    ligada: false

}
{% endhighlight %}

E os métodos que apagam e acendem.

{% highlight javascript %}
var lampada = {
    ligada: false,
    acender: function() {

    },
    apagar: function() {

    }
}
{% endhighlight %}


Ambos os método devem alterar a propriedade `scr` do elemento html `img`, então deve ser algo parecido com isso:

{% highlight javascript %}
var lampada = {
    ligada: false,
    acender: function() {
        elemento.src = "lampada-on.gif";
    },
    apagar: function() {
        elemento.src = "lampada-on.gif";
    }
}
{% endhighlight %}

Mas aí precisaremos de mais uma propriedade: `elemento`.

Corrigindo nosso código:

{% highlight javascript %}
var lampada = {
    ligada: false,
    elemento: document.getElementById('myimage'),
    acender: function() {
        lampada.elemento.src = "lampada-on.gif";
    },
    apagar: function() {
        lampada.elemento.src = "lampada-off.gif";
    }
};
{% endhighlight %}

Ao chamar o método `acender()`, por exemplo, precisaremos alterar o estado da lampada para `true`. O inverso também
é verdadeiroo.
 
Atualizando o código.

{% highlight javascript %}
var lampada = {
    ligada: false,
    elemento: document.getElementById('myimage'),
    acender: function() {
        lampada.elemento.src = "lampada-on.gif";
        lampada.ligada = true;
    },
    apagar: function() {
        lampada.elemento.src = "lampada-off.gif";
        lampada.ligada = false;
    }
};
{% endhighlight %}

Legal, agora podemos anexar o método inicial...

{% highlight javascript %}
if (lampada.ligada) {
    lampada.apagar();
} else {
    lampada.acender();
}
{% endhighlight %}

... ao evento `clik` da tag `img`, veja:

{% highlight javascript %}
lampada.elemento.onclick = function() {
    if (lampada.ligada) {
        lampada.apagar();
    } else {
        lampada.acender();
    }
};
{% endhighlight %}

O código completo você confere a seguir:

{% highlight javascript %}
var lampada = {
    ligada: false,
    elemento: document.getElementById('myimage'),
    acender: function() {
        lampada.elemento.src = "lampada-on.gif";
        lampada.ligada = true;
    },
    apagar: function() {
        lampada.elemento.src = "lampada-off.gif";
        lampada.ligada = false;
    }
};
lampada.elemento.onclick = function() {
    if (lampada.ligada) {
        lampada.apagar();
    } else {
        lampada.acender();
    }
};
{% endhighlight %}

