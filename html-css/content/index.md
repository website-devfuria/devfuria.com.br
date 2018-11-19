---
layout:      basico3
title:       content
description:
capitulo:    "html-estilos-basicos"
ordem:       0
---

Já pensou em criar conteúdo através do CSS ?

Bom, não é algo para usar e abusar, acho que deve ser usado com bom senso.

A propriedade CSS `content` é usada para gerar conteúdo em um elemento qualquer. Ela terá efeito nos pseudoelementos
`::before` e `::after` .

Onde usar ? Se você tiver um pouco de imaginação, poderá utilizar de forma bem criativa. Veja alguns exemplos...



## Testando

Este primeiro exemplo é para vermos a propriedade funcionando. Eu criei uma classe CSS `.teste` e apliquei aos parágrafos
dessa forma `<p class="teste">`.

```css
<p class="teste">Primeiro parágrafo</p>
<p class="teste">Segundo parágrafo</p>
<p class="teste">Terceiro parágrafo</p>
.teste::before {
  content: "«";
  color: blue;
}
.teste::after {
  content: "»";
  color: red;
}
```

O código acima gerará o seguinte resultado:

<p class="teste">Primeiro parágrafo</p>
<p class="teste">Segundo parágrafo</p>
<p class="teste">Terceiro parágrafo</p>
<style>
.teste::before {
  content: "«";
  color: blue;
}
.teste::after {
  content: "»";
  color: red;
}
</style>



## Exemplo 1

Imagine que você queira colocar o símbolo "aspas" em cada citação de seu artigo.

O código abaixo...

```html
<p>
    According to the Mozilla Manifesto, <q>Individuals must have the ability to shape the Internet and their own experiences on the Internet.</q>
    Therefore, we can infer that contributing to the open web can protect our own individual experiences on it.
</p>
<style>
q {
  color: blue;
}
q::before {
  content: open-quote;
}
q::after {
  content: close-quote;
}
</style>
```

...gerará o seguinte resultado:

<p>
    According to the Mozilla Manifesto, <q>Individuals must have the ability to shape the Internet and their own experiences on the Internet.</q>
    Therefore, we can infer that contributing to the open web can protect our own individual experiences on it.
</p>
<style>
q {
  color: blue;
}
q::before {
  content: open-quote;
}
q::after {
  content: close-quote;
}
</style>



## Exemplo 2

Agora imagine que você precisa destacar determinados itens dentro de uma lista. Tudo bem que você poderia fazer isso
mudando a cor e espessura, mas e se você quizesse incluir um pequeno conteúdo ? É o caso deste exemplo.

O código abaixo...

```html
<ol>
  <li>Political Thriller</li>
  <li class="new-entry">Halloween Stories</li>
  <li>My Biography</li>
  <li class="new-entry">Vampire Romance</li>
</ol>
<style>
.new-entry::after {
  content: " Novo!";
  /* O espaço no início cria uma separação
     entre o conteúdo adicionado e o resto do conteúdo. */
  color: red;
}
</style>
```

...gerará o seguinte resultado:

<ol>
  <li>Political Thriller</li>
  <li class="new-entry">Halloween Stories</li>
  <li>My Biography</li>
  <li class="new-entry">Vampire Romance</li>
</ol>
<style>
.new-entry::after {
  content: " Novo!";  /*  */
  color: red;
}
</style>



## Exemplo 3

Este exemplo é bem legal só que ele usa um pouco de JavaScript (há uma seção aqui no Devfuria falando apenas sobre JS).

O JS é utilizado para fazer "um toogle"(alternar) na classe `.done`, ao clicar na item da lista a classe é  inserida ou
retirada. No instante que insere a classe `.done` a classe `.done::before` é acionada.

Veja aqui o [exemplo-03](exemplo-03.html) funcionando.



## Seu exemplo

Você conheçe algum bom exemplo de uso desta propriedade ?

Quer compartilhar com a gente ?

Crie uma issue no [repositório deste projeto](https://github.com/flaviomicheletti/devfuria-html-css) lá no GitHub.



## Links

Dê uma olhada na documentação da Mozilla, lá você encontrará outros detalhes não comentados aqui.

https://developer.mozilla.org/pt-BR/docs/Web/CSS/content




