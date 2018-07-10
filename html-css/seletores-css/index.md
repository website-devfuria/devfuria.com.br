---
title:       Seletores CSS 
description: 
capitulo:    html-css-intro
orem:        6
---

Um documento HTML bem estruturado fornece a estrutura à qual seus estilos são aplicados. Para poder estilizar um
determinado elemento HTML utilizando CSS, você precisa ter uma maneira de selecionar esses elementos. Na CSS a parte
de uma regra de estilo que faz isso é chamada de __seletor__.

### Seletor tipo (tags)

É o seletor mais abrangente da CSS, ele casa com todos os elementos encontrados, exemplo:

```css
h1 {
    font-size: 20px;
}
p {
    font-size: 10px;
}
```

Os estilos acima irão refletir em todos o elementos `p` e `h1` da página.



### Agrupamento de seletores

Para aplicar uma regra CSS comum a vários seletores você pode agrupá-los.

Abaixo vemos algumas regras em comum.

```css
h1 {color: red;}
h2 {color: red;}
p {color: red;}
```

Aqui elas foram agrupadas.

```css
h1, h2, p {color: red;}
```


### Seletor de classe

Podemos aplicar o seletor ao atributo `class` de qualquer elemento HTML. Se a intenção é aplicar a mesma regra CSS a 
diferentes elementos, você pode utilizar um __seletor de classe__, segue exemplo:

```html
<p class="diferente">Este parágrafo sairá diferente por causa da estilização</p>
```

A CSS deve começar com um `.` (ponto) imediatamente seguido pelo nome da classe, veja:

```css
.diferente { 
    color: black;
}
```

O uso do seletor de classe possibilita estilos diferentes para o mesmo tipo de elemento, exemplo:

```css
p {
    margin: 10px;
}
p.destaque { 
    font-weight: bold;
}
p.discreto { 
    color: gray;
}
```

É permitido declarar mais de um nome para a classe do mesmo elemento separando os nome por espaço, exemplo:

```html
<p class="destaque discreto">Este parágrafo sofrerá estilização de duas regras CSS</p>
```


### Seletor id

O identificador `id` pode ser aplicado a maioria dos elementos HTML só que ele deve ser único em sua página.

```html
<div id="main">...</div>
```

A CSS deve ser precedidada pelo sinal `#` e imediatamente seguida pelo nome, veja:

```css
#main {
    ...
    ...
    ...
}
```