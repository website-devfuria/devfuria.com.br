---
layout:      basico3
title:       Introdução a Tipografia (para a Web)
description:
capitulo:    "html-tipografia"
ordem:       1
disqus:      true
---

Tipografia é um assunto obrigatório para designers, porém opcional para desenvolvedores.

Eu preparei este curso pensando na base, ou seja, tanto deseigners como programadores irão ter que enfrentar o tema.

Óbviamente, quando digo "tipografia", não me refiro a parte conceitual da tipografia, aquela que todo designer conheçe
muito bem. Por tanto, não serei eu (desenvolverdor) que irei ensinar "Padre a rezar missa". Neste artigo, falarei sobre
tipografia no tocante ao Desenvolvimento Web, ou seja, tipografia para Web.

Podemos definir a fonte do documento através da propriedade `font-family`, exemplo:

```css
body {
    font-family: Verdana;
}
```

Como o nome da propriedade sugere, podemos indicar não uma única fonte (como no exemplo) mas uma família de fontes.

E porque haveremos de querer definir uma família de fontes?

Porque a disponibilidade de fontes depende 1) do sistema operacional, ou melhor, das fontes que foram instaladas no
sistema operacional de cada usuário e 2) das fontes intaladas em seu navegador. Portanto, não há garantia de que as
fontes que você escolheu para seu documento sejam visualizadas pelo seu usuário final.

Outra razão é que as fontes realmente podem ser agrupadas por famílias.

Abre linha...

Eu demorei para aprender/entender essa questão sobre isso e apanhei bastante. Estou muito feliz de poder passar esse
conhecimento para frente e espero que este artigo não lhe deixe nenhuma dúvida sobre o assunto.

...fecha linha.

Eu nunca imaginei que as fontes fossem semelhantes, e elas são mesmo. Por exemplo, a conhecida "Arial" é muito parecida
com a também conhecida "Verdana", veja exemplo:

<p style="font-family: Arial">Este parágrafo é Arial.</p>

<p style="font-family: Verdana">Este parágrafo é Arial.</p>

São iguais ? Não, são semelhantes, parecidas.


## Quem vem primeiro ?

Se você definir uma família de fontes, a primeira fonte a ser utilizada será a da extrema esquerda, por exemplo:

```css
body {
    font-family: "Verdana, Arial, sans-serif";
}
```

No exemplo acima, o navegador tentará usar primeiro a fonte Verdana. Estando ausente, tentará a Arial. Caso a Arial
também não exista, o navegador irá usar sua última opção sans-serif.

Mas e sem nem a última existir ? Aí é que está, existe uma estratégia!

Devemos começar pela __fonte desejada__, depois utilizamos as chamadas __fontes seguras__ e por último usamos as fontes
__fontes genéricas__, ilustrando:

```css
body {
    font-family: "fonte-desejada, fonte-segura, fonte-genérica";
}
```


## Fontes Genéricas

O navegador vem com um conjunto de fontes instaladas, um pequeno conjunto definido pelo W3C.

- serif
- sans-serif
- monospace
- cursive
- fantasy

Veja o artigo [Font Family genéricas](../font-family-genericas/) para você perceber a diferênça entre os cincos tipos
básicos de fontes. Na verdade não são tipos, são famílias.


## Fontes Seguras

As fontes seguras são assim denominadas pois são o conjunto de fontes mais encontradas nos sistemas operacionais.

- Arial
- Arial Black
- Comic Sans
- Courier New
- Georgia
- Impact
- Times New Roman
- Trebuchet MS
- Verdana

Ainda sim é um conjunto bem limitado opções.

Veja o artigo [Font Family seguras](../font-family-seguras/) para você visualizar as diferençãs entre as fontes.


## Fontes Desejadas (a cereja do bolo)


