---
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



### Entendendo o HTTP

Introdução prática e descomplicada sobre o protocolo HTTP onde nosso objetivo é entender os métodos GET e POST.

Leia mais sobre [como funcionam os métodos GET e POST](/php/como-funcionam-os-metodos-get-e-post/).



### OOP - Programação Orientada a Objetos

Veremos como PHP implementa o OOP, saiba que cada linguagem pode implementar o paradigma de forma variada. O PHP 
implementou (descentemente) OOP a partir da versão 5.

<div class="list-group">
    <a href="/php/oop-primeiro-contato/" class="list-group-item">Programação Orientada a Objetos e PHP - primeiro contato</a>
    <a href="/php/oop-visibilidade/" class="list-group-item">Visibilidade das propriedades</a>
</div>


### Slim a micro framework for PHP

Slim é um framework para PHP que ajuda quando sua necessidade maior for criar API`s REST.

Leia mais sobre [Slim um micro framework para PHP](/php/php-slim-framework/).



### Twig - template engine

O Twig é um sistema de templates para PHP.

Leia mais sobre [Twig](/php/twig/).


### Formulários

Aprenda a trabalhar com cada controle de um [formulário web](/php/forms/).

{% include get-serie.html page_serie="Formulários Web" %} 
{% include menus.html %} 



### Artigos de referência

Uma referência prática, direta e abrangente sobre a linguagem.

<div class="list-group">
    <a href="/php/refs/if-else/" class="list-group-item">Expressões Condicionais - if else</a>
    <a href="/php/refs/funcoes/" class="list-group-item">Funções</a>
    <a href="/php/refs/require/" class="list-group-item">require(), require_once, include() e include_once()</a>
    <a href="/php/refs/array_pop/" class="list-group-item">Função array_pop()</a>
    <a href="/php/refs/in_array/" class="list-group-item">Função in_array()</a>
</div>



### Arrays

Aprenda a trabalhar com arrays em PHP com esta série de artigos.

<div class="list-group">
    <a href="/php/criando-iterando-um-array/" class="list-group-item">Criando e iterando um array em PHP</a>
    <a href="/php/arrays-funcoes-basicas/" class="list-group-item">Funções básicas de arrays</a>
</div>



### Expressões Regulares

Em PHP temos os dois mudos: PCRE e POSIX. As funções da versão POSIX estão depreciadas na versão 5.3 do PHP. A versão 
PREC é a mais atual. Em PHP, as expressão regulares devem ser tratadas como strings entre aspas, exemplo:

    '/sua expressão regular/'

As funções POSIX são derivadas de `ereg()`, já as funções do PREC são derivadas de `preg_macth()`.


{% include get-serie.html page_serie="PHP e Expressão Regular" %} 
{% include menus.html %} 

<hr/>
Veja também

- [Manual PHP - PCRE](http://www.php.net/manual/pt_BR/book.pcre.php "link-externo")
- [Manual PHP - POSIX](http://www.php.net/manual/en/reference.pcre.pattern.posix.php "link-externo")
