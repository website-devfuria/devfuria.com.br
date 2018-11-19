---
layout:      basico3
title:       Posicionamento Fixo
description:
capitulo:    "html-divs"
ordem:       0
---

Sabe aqueles elementos que ao rolar a página eles se mantém fixo na tela ?

São os posicinados fixadamente.

    position: fixed;

Um elemento fixo (fixed) é posicionado relativamente ao "viewport", isso significa que ele sempre ficará no mesmo lugar
mesmo que haja rolagem na página. Assim como o relative, as propriedades `top`, `right`, `bottom` e `left` também são
utilizadas.

Para esses elementos as propriedades `top`, `right`, `bottom` e `left` são importantes pois são elas que irão definar a
localização do referido elemento;


## Primeiro Exemplo

No primeiro exemplo eu utilizo divs nos 4 quantos da página e uma no centro.

    <div class="top-left">top-left</div>
    <div class="top-right">top-right</div>
    <div class="center">center</div>
    <div class="bottom-left">bottom-left</div>
    <div class="bottom-right">bottom-right</div>

Veja aqui o [primeiro exemplo](01.html)!


## Segundo Exemplo

O segundo exemplo é semelhante ao primeiro, eu inseri algum conteúdo para você poder rolar a página.

Abra o [segundo exemplo](02.html) e role a página!

Experimente também redimencionar o tamanho da janela do seu navegador para ver o comportamento.


## Terceiro Exemplo

O terceiro exemplo é de um rodapé fixo. Imagine que você queria deixar uma "barra" no final da págia (no rodapé) que,
ao rolar a página, ele se mantenha fixo.

Veja aqui o [terceiro exemplo](03.html)!



