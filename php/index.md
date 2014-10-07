---
layout:      grid12-index
title:       PHP
description: Aprenda PHP de verdade!
---

PHP é uma linguagem de programação para uso geral.

Inicialmente, projetada por [Rasmus Lerdorf](http://pt.wikipedia.org/wiki/Rasmus_Lerdorf "link-externo") na década de 
1990, tinha como objetivo principal contar as visitas que eram realizadas em seu currículo on-line. Normalmente, utilizada
para construir aplicações web. Entende-se por aplicações web (às vezes abreviado para “webapp” ou simplesmente “app´s”)
programas ou softwares escritos para rodarem na plataforma web, no modelo 
[cliente/servidor](https://www.google.com.br/search?q=cliente/servidor&num=100&client=ubuntu&hs=i0C&channel=fs&tbm=isch&tbo=u&source=univ&sa=X&ei=UY0xVM6QOMr9yQSN1IC4Cw&ved=0CCkQsAQ&biw=1366&bih=570 "link-externo").

Leia mais sobre [o que é PHP](/php/o-que-e-php/).



### Instalando o ambiente

Para começar a programar em PHP é necessário ter o "ambiente" corretamente instalado e configurado, seja em LAMP ou em 
WAMP. A instalação pode ser uma tarefa simples e básica, se a configuração não for item de preocupação. Mas saber 
configurar o ambiente de desenvolvimento é obrigação do programador. Inicialmente, poderá ser utilizada a configuração 
básica (de fábrica), mas em breve será preciso dominar a configuração dos componentes.

Leia mais sobre como [instalar o ambiente LAMP](/php/instalando-o-ambiente/).



### Boas práticas em PHP

> A questão é que o PHP é fácil demais. O que incentiva a implementar suas idéias, retornando, assim, bons resultados. 
> Algumas dessas facilidades são a possibilidade de digitar grande parte de seu código diretamente em suas páginas da Web,
> adicionar funções úteis (como um código de acesso a banco de dados) a arquivos, incluindo-as de página em página e, antes
> de se dar conta, você já tem um aplicativo Web em execução (Matt Zandstra).

Leia mais sobre [PHP The Right Way](/php/phptherightway/).


### Debugando

Debugar é um esforço para encontrar determinado ponto (às vezes vários pontos) "defeituoso" no código para que seja corrigido.
Ao sentar-se na frente do computador para codificar (seja lá o que for) o desenvolvedor estabelece, ou deveria estabelecer,
 uma conversa com o computador e seu código fonte. O primeiro passo para quem precisa "investigar" o que o computador 
está executando.

Leia mais sobre [como debugar em PHP](/php/debugando/).


### Artigos

<div class="list-group">
    <a href="/php/arrays-vetores-matrizes/" class="list-group-item">Criando e iterando um array em PHP</a>
    <a href="/php/arrays-funcoes-basicas/" class="list-group-item">Funções básicas de arrays</a>
    <a href="/php/recebendo-dados-via-get-post/" class="list-group-item">Recebendo dados via GET e POST</a>
    <a href="/php/textbox-password-textarea/" class="list-group-item">Descobrindo os controles text, password e textarea</a>
    <a href="/php/checkbox/" class="list-group-item">Manipulando check boxes</a>
    <a href="/php/radio-button/" class="list-group-item">Manipulando radio button</a>
    <a href="/php/combobox/" class="list-group-item">Manipulando combobox</a>
    <a href="/php/select-multiple/" class="list-group-item">Manipulando listbox</a>
</div>


### Expressões Regulares

Em PHP temos os dois mudos: PCRE e POSIX. As funções da versão POSIX estão depreciadas na versão 5.3 do PHP. A versão 
PREC é a mais atual. Em PHP, as expressão regulares devem ser tratadas como strings entre aspas, exemplo:

    '/sua expressão regular/'

As funções POSIX são derivadas de `ereg()`, já as funções do PREC são derivadas de `preg_macth()`.

{% include /menus/php-regex.html %}

<hr/>
Veja também

- [Manual PHP - PCRE](http://www.php.net/manual/pt_BR/book.pcre.php "link-externo")
- [Manual PHP - POSIX](http://www.php.net/manual/en/reference.pcre.pattern.posix.php "link-externo")
