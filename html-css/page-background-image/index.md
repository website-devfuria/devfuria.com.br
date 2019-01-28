---
title:       Page Background Image
description:
capitulo:    "html-layout"
ordem:       3
---

<img src="china.jpg" alt="" style="width: 15em; height: 15em; margin-top: 2px"/>
<img src="word.jpg" alt="" style="width: 15em; height: 15em; margin-top: 2px"/>
<img src="jardim.jpg" alt="" style="width: 15em; height: 15em; margin-top: 2px"/>

Está vendo as imagens acima ? Sim, claro que sim!

Vamos experimentar algumas técnicas para fazer um site com "Page Background Image".

A primeira imagem eu estou chamando de china, pois eu me baseei [neste site](http://ringvemedia.com/). Se você
for até lá, vai reparar que o site ainda utiliza tabelas para fazer o layout.  A segunda imagem é do Microsoft Word
e a terceira é um jardim (parece a borda de um papel de carta).

Cada imagem tem um tamanho diferente, veja:

- [china.jpg](china.jpg) 1024 x 683
- [word.jpg](word.jpg) 1280 x 720
- [jardim.jpg](jardim.jpg) 3146 x 4444

Utilizando as 3 imagens, nós poderemos ver como se comporta cada técnica em situações diferentes.



## 1 técnica

    body {
        background: url(china.jpg) no-repeat center center fixed;
        background-size: cover;
    }

O valor `cover` da propriedade `background-size` resolve bem o nosso problema.

Veja como se comportou cada imagem:

- [01-china](01-china.html)
- [01-word](01-word.html)
- [01-jardim](01-jardim.html)

Você precisa aumentar e diminuir o tamanho da tela de seu navegador.



## 2 Técnica

    body, html {
        height: 100%;
        margin: 0;
    }
    .bg {
        height: 100%;
        background: url(china.jpg) no-repeat center center fixed;
        background-size: cover;
    }

A segunda técnica é semelhante a primeira, na verdade ela chega no mesmo resultado.

Só que incluimos um elemento HTML:

    <div class="bg"></div>

Veja como se comportou cada imagem:

- [02-china](02-china.html)
- [02-word](02-word.html)
- [02-jardim](02-jardim.html)



## 3 Técnica

    body {
        background-image: url("china.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        height: 100vh;
    }

A terceira técnica deixa de utilizar o `background-size: cover` para trabalhar com um tamanho 100%, ela influencia na
proporção da tela (aspect ratio).

Veja como se comportou cada imagem:

- [03-china](03-china.html)
- [03-word](03-word.html)
- [03-jardim](03-jardim.html)



## 4 Técnica

A quarta técnica é bem interessante pois ela mantém a imagem com um tamanho fixo, sem influenciar na proporção.

    img {
        position: fixed;
        top: 0;
        left: 0;

        min-width: 100%;
        min-height: 100%;
    }

Apenas uma imagem funcionou bem, descubra qual foi...

- [04-china](04-china.html)
- [04-word](04-word.html)
- [04-jardim](04-jardim.html)


## 5 Técnica

    body {
        margin: 0;
        position: fixed;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
    }
    img {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        min-width: 50%;
        min-height: 50%;
    }

Essa caiu bem para a imagem china.jpg, mas para as demais não deu muito certo. Essa técnica também foi a mais verbosa,
eu acho que ela serve mais como fins didáticos do que para um fim prático.

Faça um esforço para entender a "lógica" dessa técnica. Como disse, não sei se vale apena para aplicação, mas com o
objetivo de aprendizado é um verdadeiro desafio. Veja os exemplos:

- [05-china](05-china.html)
- [05-word](05-word.html)
- [05-jardim](05-jardim.html)


## Curiosidade

Nesta altura voce deve estar se perguntando "Como ficariam as 3 imagens no esquema original?". Bom, aqui vai os 3
exemplos baseado no original layout com tabelas...


- [china original](original/)
- [word original](original/word.html)
- [jardim original](original/jardim.html)


## Inspiração e conclusão

Eu estava lendo [este artigo](https://css-tricks.com/perfect-full-page-background-image/) que inclusive me serviu de
referência. Depois de ler o artigo, fiquei imaginando como se comportariam as técnicas com outras perspectivas (outras imagens).


## Sua vez

1. Que tal colecionarmos alguns exemplos de sites que utilizam Page Background Image ?
   Coloque o link nos comentários.
2. Conhece mais alguma técnica digna de nota ? Manda aí!
