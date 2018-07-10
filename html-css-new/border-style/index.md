---
layout:      basico3
title:       border style
description:
capitulo:    "html-estilos-basicos"
ordem:       0
---


<style>
.my-divs {
  margin: 1em 1em;
  width: 320px;
  height: 100px;
}
.my-divs pre {
  border: none;
  background-color: transparent;
}
</style>


Os valores para a propriedade `border-style` são:

    none | hidden | dotted | dashed | solid | double | groove | ridge | inset | outset

Nós podemos definir as bordas através do atalho `border: [size, style, color]`, exemplo:

    border: 1px solid tomato

Podemos aplicar um estilo para cada lado individualmente...

    border-top-style:    [style]
    border-right-style:  [style]
    border-bottom-style: [style]
    border-left-style:   [style]

...ou utlizar os atalhos:

    /* vertical | horizontal */
    border-style: dotted solid;

    /* top | horizontal | bottom */
    border-style: hidden double dashed;

    /* top | right | bottom | left */
    border-style: none solid dotted dashed;



## Exemplos

O valor `tomato` refere-se a cor (não confunda).

Eu colori as duas primeiras caixas para você perceber que são realmente uma caixa.

<div class="d-flex p-2 flex-wrap">
    <div style="border: 1px none tomato; background-color: tomato" class="my-divs">
        <pre><code>border: 1px none tomato</code></pre>
    </div>
    <div style="border: 1px hidden tomato; background-color: tomato" class="my-divs">
        <pre><code>border: 1px hidden tomato</code></pre>
    </div>
    <div style="border: 1px dotted tomato" class="my-divs">
        <pre><code>border: 1px dotted tomato</code></pre>
    </div>
    <div style="border: 1px dashed tomato" class="my-divs">
        <pre><code>border: 1px dashed tomato</code></pre>
    </div>
    <div style="border: 1px solid tomato" class="my-divs">
        <pre><code>border: 1px solid tomato</code></pre>
    </div>
    <div style="border: 10px double tomato" class="my-divs">
        <pre><code>border: 10px double tomato</code></pre>
    </div>
    <div style="border: 10px groove tomato" class="my-divs">
        <pre><code>border: 10px groove tomato</code></pre>
    </div>
    <div style="border: 10px ridge tomato" class="my-divs">
        <pre><code>border: 10px ridge tomato</code></pre>
    </div>
    <div style="border: 10px inset tomato" class="my-divs">
        <pre><code>border: 10px inset tomato</code></pre>
    </div>
    <div style="border: 10px outset tomato" class="my-divs">
        <pre><code>border: 10px outset tomato</code></pre>
    </div>
    <div style="border: 3px ridge tomato; border-style: solid dashed;" class="my-divs">
        <pre><code>border: 3px ridge tomato;
border-style: solid dashed;
</code></pre>
    </div>
    <div style="border: 3px solid tomato; border-style: none solid dotted dashed;" class="my-divs">
        <pre><code>border: 3px solid tomato;
border-style: none solid dotted dashed;
</code></pre>
    </div>
</div>


## Fonte

[developer.mozilla.org/pt-BR/docs/Web/CSS/border-style](https://developer.mozilla.org/pt-BR/docs/Web/CSS/border-style)

