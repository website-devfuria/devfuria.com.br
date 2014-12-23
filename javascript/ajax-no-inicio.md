---
layout:      grid12-article
title:       Ajax como era utilizado no começo
description: Este artigo apresenta a sintaxe de como era utilizado o objeto __XMLHttpdRequest__ no início.
---

Este artigo apresenta a sintaxe de como era utilizado o objeto __XMLHttpRequest__ no início.

Se você caiu de paraquedas nesta página, não deixe de ver as matérias anteriores relacionados ao final deste artigo.


{% highlight javascript %}
var xhr = new XMLHttpRequest();
xhr.open("GET", "foo.txt", true);
xhr.send();
xhr.onreadystatechange = function () {
  if(this.readyState == this.DONE) {
    // success!
    if(this.status == 200) {
      console.log(this.responseText)
      return;
    }
    // something went wrong
    else {
      console.log(this.status)
    }
  }
}
{% endhighlight %}

Vamos focar nossa atenção para o evento `onreadystatechange`. Ele é acionado a cada alteração da propriedade 
`readyState`, ou seja, a cada troca de valor dessa propriedade o evento `onreadystatechange` é executado. 

A propriedade `readyState` pode ter um dos valores abaixo:

- `0` UNSENT
- `1` OPENED
- `2` HEADERS_RECEIVED
- `3` LOADING
- `4` DONE

Ao utilização do objeto __XMLHttpdRequest__ implica em passar passar por esses estados. Por curiosidade você poderá
executar o seguinte código.

{% highlight javascript %}
...
...
...
xhr.onreadystatechange = function () {
    console.log(this.readyState);
}
{% endhighlight %}

A resposta do servidor estará pronta quando `readyState` for igual a `1`, podemos fazer isso:

{% highlight javascript %}
xhr.onreadystatechange = function () {
  if(this.readyState == 1) {
  }
}
{% endhighlight %}

Mas preferimos utilizar as contantes do objeto __XMLHttpRequest__.

{% highlight javascript %}
xhr.onreadystatechange = function () {
  if(this.readyState == this.DONE) {
  }
}
{% endhighlight %}


Após observar que a requisição está pronta para uso, devemos saber qual foi o 
[código de resposta do HTTP](https://developer.mozilla.org/en-US/docs/Web/HTTP/Response_codes "link-externo"). Fazemos
isso checando o valor da proprieda `status`.

{% highlight javascript %}
xhr.onreadystatechange = function () {
  if(this.readyState == this.DONE) {
    if(this.status == 200) {
    }
  }
}
{% endhighlight %}

A partir deste ponto, podemos obter os dados em dois formatos: __texto plano__ e __XML__. As propriedades para acessar
os dados são, respectivamente, `responseText` e `responseXML`.

<hr>
Fonte [MDN - Começando com Ajax](https://developer.mozilla.org/pt-BR/docs/Ajax/Getting_Started "link-externo")


Veja também
---

- [Ajax - Como deve ser utilizado hoje em dia](/javascript/ajax/)
- [Aprenda a utilizar Ajax com PHP e Jquery](/javascript/ajax-php-jquery/)
