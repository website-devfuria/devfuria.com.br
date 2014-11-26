---
layout:      grid12-article
title:       Primeiro HTML 
description: Aprenda com esse artigo a produzir seu primeiro HTML
---

HTML não é linguagem de programação mas sim uma linguagem de marcação.

O próprio acrônimo revela isso, __HyperText Markup Language__ significa Linguagem de Marcação de Hipertexto.

Para criar um HTML você deve abrir um editor de texto simples e inserir o seguinte conteúdo:

{% highlight html %}
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Seu primeiro HTML</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Aqui é onde as coisas acontecem, o corpo de seu HTML</p>
    </body>
</html>
{% endhighlight %}

Salve o arquivo com a extensão `.html` ou `.htm` e abra o arquivo com seu navegador web preferido (espero que não seja
o IE), o resultado deve ser parecido com o abaixo:

![Exemplo de HTML](seu-primeiro-html.png "Exemplo de HTML")



Explicando o código
---

{% highlight html linenos %}
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Seu primeiro HTML</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Aqui é onde as coisas acontecem, o corpo de seu HTML</p>
    </body>
</html>
{% endhighlight %}

Na linha 1 temos o __doc type__, ele defino qual é o tipo de documento, no exemplo ele indica que o documento é do tipo
[HTML5](html-css/html5/). Inclua sempre o [doc type](/html-css/doc-type/) em seus arquivos HTML, em breve voltaremos a 
falar mais sobre esse assunto. Por hora, saiba que ele é muito importante.

Na linha 2 começamos o HTML de fato. Entre as linhas 3 e 6 temos o __cabeçalho__ (head) e entre as linhas 7 e 9 temos
o __corpo__ (body) do HTML.

Me lembrei do Joel Santana na propaganda do Head & Shoulders, aqui é Head & Body:

![](html-head-body.jpg)

O conteúdo que vai dentro da tag body é reenderizado pelo browser. É o conteúdo de seu site/sistema.

Na linha 5 temos o misterioso `meta charset="utf-8"`, ele define qual o __conjunto de caracteres__ sua página está usando.
Este é outro assunto que trataremos em breve.




HTML é composto de tags
---

HTML, como dito, marca o conteúdo. Ele faz isso através de suas etiquetas, ou melhor, através de suas tag's.

Por exemplo, a tag `p` define um parágrafo, vejamos algumas tag's bem conhecidas:

- `html` - define o próprio documento HTML.
- `head` - define o cabeçalho do documento.
- `titlte` - define o título.
- `body` - define o corpo.
- `h1` - define o primeiro título.
- `h2` - define o segundo título.
- `h3` - define o terceiro título e assim até o h6.
- `a` - define uma âncora, quero dizer, o famoso link.
- `img` - define uma imagem

As tag's devem ser abraçadas pelos sinais de maior e menor, dessa forma: `<nome da tag>`

Toda tag aberta deve ser fechada.

A barra para direita indica qual é a tag de fechamento, exemplo: `<p>aqui é um parágrafo</p>`.



HTML,   DHTML , XHTML, HTML5... no final das contas é tudo HTML!
---

No início era apenas __HTML__, depois veio __DHTML__ (o "d" era de Dynamic), depois o __XHTML__ e hoje temos o [HTML5](html-css/html5/).
Sim, são coisas distintas umas das outras, mas em sua essência não passam de mero HTML.

Por simplificação, utilizaremos o termo HTML de forma gernérica e quando for necessário ser mais específico utilizaremos
o termo correto.

O [HTML5](html-css/html5/) é a versão mais atual do HTML. O grupo [WHATWG](http://www.whatwg.org/ "link-externo") não 
teve a mesma pasciência que o pesoal da [W3C](http://www.w3.org/ "link-externo") e saiu na frente com as especificações.
A nova versão excluíu alguns elementos já defazados, inseriu alguns outros mais "semânticos" e trouxe novidades como 
videos, armazenamento local, canvas(uma prancheta para você desenhar via código), geo-location, web off-line, campos 
com autofoco, placeholders e muito mais. Se você é novato em HTML talvez não tenha entendido nada do que listamos sobre
o HTML5, mas fique tranquilo(a), veremos HTML juntamente com o HTML5.

A imagem abaixo é velha, mas serve para der uma visão panorâmica da evolução do HTML:

![Gráfico ilustrando a evolução do HTML](timeline.jpg "Gráfico ilustrando a evolução do HTML")



W3C
---

O [W3C](http://www.w3.org/ "link-externo") é um consórcio que regulamenta as especificações tanto do __HTML__ como do __CSS__,
é a __fonte oficial__ do HTML e CSS.

É possível encontrar as traduções das especificações para a língua portuguesa: 

- [Recomendações do W3C XHTML 1 - Tradução do Majour](http://www.maujor.com/w3c/xhtml10_2ed.html "link-externo")
- [Recomendações do W3C CSS nível 1 - Tradução do Majour](http://www.maujor.com/tutorialcss1/css1tut.shtml "link-externo")

Dois pequenos alertas:

1. Estudar pela especificação é mais difícil (e mais chato também) e 
2. Nem todos os navegadores implementam as especificações em sua totalidade, isso significa que a especificação diz uma 
coisa e seu navegador comporta-se de outro, restando para o programador e/ou desginer "se virar" para encontrar um solução.


