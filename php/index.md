---
title:       PHP
description: Aprenda PHP de verdade!
---

<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Course",
  "name": "Curso prático da linguagem de programação PHP",
  "description": "Aprenda PHP de verdade!",
  "provider": {
    "@type": "Organization",
    "name": "Devfuria",
    "sameAs": "http://www.facebook.com/devfuria/"
  }
}
</script>

### Comece por aqui...

<div class="list-group">
    <a href="/php/o-que-e-php/" class="list-group-item">O que é PHP</a>
    <a href="/php/instalando-o-ambiente/" class="list-group-item">Instalar o ambiente LAMP</a>
    <a href="/php/phptherightway/" class="list-group-item">Boas práticas em PHP - The right way</a>
    <a href="/php/debugando/" class="list-group-item">Debugando código em PHP</a>
    <a href="/php/como-funcionam-os-metodos-get-e-post/" class="list-group-item">Como funcionam os métodos GET e POST</a>
</div>



### Formulários

Aprenda a trabalhar com cada controle de um [formulário web](/php/forms/).

{% include get-serie.html page_serie="Formulários Web" %} 
{% include menus.html %} 



### OOP - Programação Orientada a Objetos

Veremos como PHP implementa o OOP, saiba que cada linguagem pode implementar o paradigma de forma variada. O PHP 
implementou (descentemente) OOP a partir da versão 5.

<div class="list-group">
    <a href="/php/oop-primeiro-contato/" class="list-group-item">Programação Orientada a Objetos e PHP - primeiro contato</a>
    <a href="/php/oop-visibilidade/" class="list-group-item">Visibilidade das propriedades</a>
</div>



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



### Slim a micro framework for PHP

Slim é um framework para PHP que ajuda quando sua necessidade maior for criar API`s REST.

Leia mais sobre [Slim um micro framework para PHP](/php/php-slim-framework/).



### Twig - template engine

O Twig é um sistema de templates para PHP.

Leia mais sobre [Twig](/php/twig/).



### Expressões Regulares

Em PHP temos os dois mudos: PCRE e POSIX. As funções da versão POSIX estão depreciadas na versão 5.3 do PHP. A versão 
PREC é a mais atual. Em PHP, as expressão regulares devem ser tratadas como strings entre aspas, exemplo:

    '/sua expressão regular/'

As funções POSIX são derivadas de `ereg()`, já as funções do PREC são derivadas de `preg_macth()`.


{% include get-serie.html page_serie="PHP e Expressão Regular" %} 
{% include menus.html %} 

- - -

Veja também

- [Manual PHP - PCRE](http://www.php.net/manual/pt_BR/book.pcre.php "link-externo")
- [Manual PHP - POSIX](http://www.php.net/manual/en/reference.pcre.pattern.posix.php "link-externo")
