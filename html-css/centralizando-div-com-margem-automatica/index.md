---
layout:      basico3
title:       Centralizando div com margem automatica
description:
capitulo:    "html-divs-centralizando"
ordem:       1
---

Vamos aprender a centralizar uma div ?

Podemos utilizar a técnica das margens automáticas, basta setar a propriedade `margin-left` e `margin-right` com o valor
`auto`. No exemplo eu utilizei o atalho `margin: 0 auto;`.

O código abaixo...

    <div class="foo">Foo</div>

    div.foo {
        margin: 0 auto;
        ...

...gerará o seguinte resultado:

<div class="foo">Foo</div>

<style>
div.foo {
    margin: 0 auto;
    width: 100px;
    height: 100px;
    line-height: 100px;
    text-align: center;
    background-color: tomato;
}
</style>

