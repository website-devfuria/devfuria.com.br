---
layout:      basico3
title:       Centralizando div com margem negativa
description:
capitulo:    "html-divs-centralizando"
ordem:       2
---

Neste artigo vamos aprender a centralizar uma div utilizando a técnica das margens negativas.

Ela consiste em aplicar um tamanho para nosso elemento e recuar a metáde desse valor.

Exemplo, se seu elemento tiver 200px de comprimento, deveremos recuar 100px.

Vou utilizar uma div com 200px de altura e largura conforme código abaixo.

```css
div.exemplo {
    background-color: tomato;
    width:200px;
    height:200px;
}
```

Veja ela aqui...

<div class="exemplo"></div>
<style>
div.exemplo {
    background-color: tomato;
    width:200px;
    height:200px;
}
</style>



## Passo 1

Vamos usar `50%` nas propriedades `top` e `left` para tentar centralizar uma div no centro da página.

Nossa div ficará com o canto superior esquerdo apontando para o centro da página.

Mas ela ainda não está devidamente centralizada, o que devemos fazer para corrigir?

Você concegue perceber, visualemnte, que ela não está alinhada ?

[exemplo-1](passo-1/)


## Passo 2

Como nossa `div` mede 200px tanto de largura como de comprimento, basta aplicar uma margem negativa com a metade do valor.

```css
width: 200px;
height: 200px;
margin-top: -100px;
margin-left: -100px;
```

[exemplo-2](passo-2/)



## Exercícios

1. Abra em abas separadas o exemplo 1 e 2 e compare os dois resultados, você consegue explicar a diferênça entre eles ?
2. Abra o exemplo 1 em uma aba e faça o com que ele fique igual ao exemplo 2.
3. Abra o exemplo 2 e diminua a tela de seu navegador, a div continua no centro? Porquê ?