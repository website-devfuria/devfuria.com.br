---
layout:      materia
title:       Introdução ao HTML
description: Artigo introduzindo o assunto HTML e HTML5
---

HTML, originalmente, marca o conteúdo. Ele faz isso através de suas etiquetas, ou melhor, através de suas tag's.

Por excemplo, a tag `p` define um parágrafo. Vejamos algumas tag's bem conhecidas:

- `html` - define o próprio documento HTML.
- `head` - define o cabeçalho do documento.
- `titlte` - define o título.
- `body` - define o corpo.
- `h2` - definie o primeiro título(o mais importante).
- `h2` - definie o segudo título, e assim até o h6.
- `a` - define uma âncora, quero dizer, o famoso link.
- `img` - define uma imagem

As tag's devem ser abraçadas pelos sinais de maior e menor, dessa forma: `<nome da tag>`

Toda tag aberta deve ser fechada.

A barra para direita indica qual é a tag de fechamento, exemplo: `<p>aqui é um parágrafo</p>`.

Abaixo conferimos um arquivo HTML na sua essência:

{% highlight html %}
<html>
    <head>
        <title>Título da página</title>
    </head>
    <body>

        Aqui vai a marcação HTML que fará sua página ser entendida pelo browser
        e, consequentemente, ser reenderizada pelo mesmo.

    </body>
</html>
{% endhighlight %}

Eu coloquei o HTML dessa forma para que você perceba o esquema: cabeçalho (head) e corpo (body).

Me lembrei do Joel Santana na propaganda do Head & Shoulders, aqui é Head & Body:

![](html-head-body.jpg)

O conteúdo que vai dentro da tag body é reenderizado pelo browser. É o conteúdo de seu site/sistema.



HTML válido
---


{% highlight html %}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
    <head>
        <title>Título da página</title>
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    </head>
    <body>

    </body>
</html>
{% endhighlight %}

O HTML acima é um __XHTML__ válido porque ele atende aos requesitos básicos para poder ser considerado válido.

Quem define os requesitos é o grupo W3C e o grupo WHATWG. O W3C disponibiliza até um [validador online](http://validator.w3.org/ "link-externo")
para efetuar a validação dos HTML.

Nós estamos falando de XHTML, que é uma versão anterior ao HTML5. O XHTML é interessante principalmente por que estamos
aprendendo HTML.

Atualmente (jan/2014) ninguém inicia o desenvolvimento de uma aplicação web com XHTML, utilizamos o HTML5. Por isso se 
você encontrar arquivos XHTML aqui no site é porque ele tem um fim didático.


Abaixo vemos um __HTML__ 5 também válido.

{% highlight html %}
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Título da página</title>
        <meta charset="utf-8">
    </head>
    <body>

    </body>
</html>
{% endhighlight %}

