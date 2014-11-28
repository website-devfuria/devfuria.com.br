---
layout:      grid93-article
title:       Introdução ao HTML 
description: 
menu:        html-artigos-intro
---

Tim Berners-Lee, a culpa é toda dele. No começo dos anos 90, o dito cujo, inventou o HTML (HyperText Markup Language) 
que significa __Linguagem de Marcação de Hipertexto__. Ele queria facilitar a comunicação de suas pesquisas com seus 
colegas e acabou resolvendo o problema de todo mundo, nascia a web.

![Foto de Tim Berners Lee](tim-berners-lee.jpg "Foto de Tim Berners Lee")

A idéia era simples e genial, era possível criar e disponibilizar um arquivo de texto simples com conteúdo HTML, via rede,
para outro computador. No computador de destino, um software chamado __web-browser__ (navegador web) era encarregado de exibir
o conteúdo HTML. Não podemos esquecer de mencionar o __protocolo HTTP__ (Hypertext Transfer Protocol, 
Protocolo de Transferência de Hipertexto) que também é invenção de Lee e é peça primordial da web.

A web teve um crescimento rápido. Nessa época, "nosso bebê", já tinha pernas e músculos bem desenvolvidos e dava seus 
primeiros passos. Não demorou muito para surgirem empresas interessadas na tecnologia, como foi o caso da __Netscape__. 
Ela estava interessada no navegador web e criou um com o mesmo nome da empresa. A __Microsof__, apesar de atrasada, também
queria sua fatia do mercado e lançou e destemido (ou talvez temido) __Internet Explore, vulgo IE__.

Essa passagem histórica ficou connhecida como "a guerra dos navegadores", procure na web por esse termo. Nas Faculdades 
de tecnologia é muito comum exibirem um filme que deve ter o mesmo nome (não lembro bem). Vale apena assitir.

![](war.jpeg)

Essa fase definiu o que conhecemos hoje por __Cross-browser__, que nada mais é do que a habilidade de construir um site
com suporte a vários navegadores, falaremos dele em breve, apenas adianto que dá para perder alguns cabelos.

![](cross-browser-testing.png)



HTML não é linguagem de programação mas sim uma linguagem de marcação.

Essa "marcação" consiste em determinar o que é cada parte do conteúdo. Um HTML dirá quais são os parágrafos, os títulos, as imagens,
as tabelas, as listas, etc...

HTML, como dito, marca o conteúdo, ele faz isso através de suas etiquetas, ou melhor, através de suas tag's.

Um arquivo HTML é composto de enúmeras tags.

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




Quem define a especificação do HTML e CSS?
---

O [W3C](http://www.w3.org/ "link-externo") é um consórcio que regulamenta as especificações tanto do __HTML__ como do __CSS__,
é a __fonte oficial__ do HTML e CSS.

É possível encontrar as traduções das especificações para a língua portuguesa: 

- [Recomendações do W3C XHTML 1 - Tradução do Majour](http://www.maujor.com/w3c/xhtml10_2ed.html "link-externo")
- [Recomendações do W3C CSS nível 1 - Tradução do Majour](http://www.maujor.com/tutorialcss1/css1tut.shtml "link-externo")

Dois pequenos alertas:

1. Estudar pela especificação é mais difícil (e mais chato também) e 
2. Nem todos os navegadores implementam as especificações em sua totalidade, isso significa que a especificação diz uma 
coisa e seu navegador comporta-se de outro, restando para o programador e/ou designer "se virar" para encontrar um solução.


HTML,   DHTML , XHTML, HTML5... no final das contas é tudo HTML!
---

No início era apenas __HTML__, depois veio __DHTML__ (o "d" era de Dynamic), depois o __XHTML__ e hoje temos o [HTML5](html-css/html5/).
Sim, são coisas distintas umas das outras, mas em sua essência não passam de mero HTML.

Por simplificação, utilizaremos o termo HTML de forma gernérica e quando for necessário ser mais específico utilizaremos
o termo correto.

O [HTML5](/html-css/html5/) é a versão mais atual do HTML. O grupo [WHATWG](http://www.whatwg.org/ "link-externo") não 
teve a mesma pasciência que o pesoal da [W3C](http://www.w3.org/ "link-externo") e saiu na frente com as especificações.
A nova versão excluíu alguns elementos já defazados, inseriu alguns outros mais "semânticos" e trouxe novidades como 
videos, armazenamento local, canvas(uma prancheta para você desenhar via código), geo-location, web off-line, campos 
com autofoco, placeholders e muito mais. Se você é novato em HTML talvez não tenha entendido nada do que listamos sobre
o HTML5, mas fique tranquilo(a), veremos HTML juntamente com o HTML5.

A imagem abaixo é velha, mas serve para der uma visão panorâmica da evolução do HTML:

![Gráfico ilustrando a evolução do HTML](timeline.jpg "Gráfico ilustrando a evolução do HTML")



Veja a próxima matéria
---

- [Criando seu primeiro HTML](/html-css/primeiro-html/)