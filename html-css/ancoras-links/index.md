---
layout:      basico3
title:       Âncoras (links)
description:
capitulo:    "html-elementos-basicos"
ordem:       3
---

Links e âncoras são as mesmas coisas, ok ? É mais comum falarmos "clica no link" do que "clica na âncora", mas ambos
estão corretos.

O elemento da âncora é ilustrado abaixo.

    <a href="alvo">label</a>

Onde __alvo__ será na verdade o destino do link e __label__ será o texto exibido no documento.

Vou mostrar um <a href="../ancoras-links/">link real</a> gerado pelo código abaixo...

```html
<a href="../ancoras-links/">link real</a>
```

Esse link não faz muita coisa, pois ao clicar nele somos remetidos para a mesma página.

A propriedade `href` é o caminho da imagem, você precisa entender bem sobre caminho absoluto, caminho relativo e etc...



## Texto alternativo (alt)

A propriedade `alt` é importante porque quando o caminho da imagem não é encontrado o texto alternativo será exibido.

Também ajuda na acessibilidade, pois os softwares leitores de tela irão ler o atributo.

Além disso, o SEO considera esse atributo para "descobrir" o conteúdo da imagem.

Não falei que ela era importante ? Nunca se esqueça dela, ok?



## Abrindo o link em nova aba

Para abrir o link em nova aba basta utilizar o atributo/valor `target="_blank"`.

```html
<a href="../ancoras-links/" target="_blank" >link real</a>
```

O valor `_blank` sempre criar uma aba nova. Caso voce queira (re)utilizar a mesma aba, então poderá usar um nome qualquer
como valor (por exemplo target="minha-tab-01") e o  navegador irá abrir os links sempre na mesma aba, conforme o nome
que você deu a ela.



## Imagens como links

Podemos colocar uma imagem como label e toda a área da imagem será clicável.

```html
<a href="../ancoras-links/">
    <img src="/path/to/imgs/imagem.jpg" />
</a>
```


## Pseudoclasses para links


- :link    = quando o link ainda não foi visitado
- :visited = quando o link já foi visitado
- :hover   = quando o ponteiro do mouse passa sobre sua área
- :active  = quanto o link é ativado (ao clicar do mouse)

O mais comum é desativar o sublinhado e reativá-los quando o mouse é posicionado sobre eles, veja a CSS:

```css
a:link, a:visited {text-decoration: none}
a:hover, a:active {text-decoration: underline}
```



## SEO, por favor, desconsidere meu link

O SEO considera todos os seus links.

Quando você quiser que ele desconsidere um link, poderá utilizar o atributo/valor `rel="nofollow"`.

```html
<a href="../ancoras-links/" rel="nofollow" >link real</a>
```

A prorpiedade `rel` é abreviação para "relationship", ela descreve o relacionamento entre o documento e destino (href)


## Um cardápio (menu) de links

Desculpe o trocadilho do título acima, rsss!

Os links, com o apoio das listas, servem para a criação de menus.

```html
<ul>
    <li> <a href="/">Home</a> </li>
    <li> <a href="/news">News</a> </li>
    <li> <a href="/legal">Legal</a> </li>
</ul>
```


## Um link que envia email

Quase ia me esquecendo...

Antigamente se usava muito, hoje em dia não se usa tanto.

Eu sempre desencorajo o uso, minha humilde opnião. Mas não custa aprendermos.

Clique no <a href="mailto:fulano@example.com?subject=Vai corinthians!">link</a> e descubra o que ele faz.

    <a href="mailto:fulano@example.com?subject=Vai corinthians!">link</a>
