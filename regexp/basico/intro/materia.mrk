Introdução
==========

Expressões Regulares é uma técnica para procurar, de forma bem específica, um texto abrangente.

OK, essa não é a definição formal de Expressões Regulares (ER), é uma variação da resposta encontrada por Aurélio Marinho
para a seguinte pergunta:

#### Para que servem ?

> Basicamente, servem para você dizer algo abrangente de forma específica.
<small>Expressões Regulares, Uma Abordagem divertida (Aurélio Marinho, pag 36 da 3 edição).</small>

Elas servem para muita coisas e podem salver sua pele, se souber usá-las.



### Sobre o curso

Eu preparei (e ainda estou preparando) este curso sobre ER's para ser bem básico, o intuito é que você leia a matéria
e entenda (e também decore) sobre cada aspecto comentado.

Mas para facilitar ainda mais o seu aprendizado (o meu também foi mais fácil dessa forma) aconselho a utilizar alguns
software online apenas para testar as ER's, ou seja, ao invés de você partir direto para o código fonte, parta primeiro
para esses softwares, assim você terá a oportunidade de conferir sua ER antes de ficar quebrando a cabeça no código
fonte, algumas ferramentas interessantes:


[http://regexpal.com/](http://regexpal.com/)

[http://regex.larsolavtorvik.com/](http://regex.larsolavtorvik.com/)

[http://www.debuggex.com/](http://www.debuggex.com/)

[http://www.regexplanet.com/](http://www.regexplanet.com/)


Irei utilizar as duas linguagens que também possuem seus cursos aqui no site: PHP e Javascript.

Conforme vamos evoluíndo com as ER's, vamos evoluindo com as linguagens.



### Primeiro Exemplo

Temos a string original:

    "Casa com a palavra exemplo"

E queremos encontrar a string:
    
    "exemplo"

Veja como fica nos testadores:

<div class="imagem">
    <img src="exemplo-regexp.png" alt="Exemplo no testador regexpal" />
    <p>http://regexpal.com/</p>
</div>

<br /><br /><br />
<div class="imagem">
    <img src="exemplo-larsolav.png" alt="Exemplo no testador de Larsolav" />
    <p>http://regex.larsolavtorvik.com/</p>
</div>

Os testadores ajudam muito, principalmente no começo, aprenda a utilizá-los, é divertido!


### PHP e os dois mudos: PCRE e POSIX

As funções da versão POSIX estão depreciadas na versão 5.3 do PHP.

A versão PREC é a mais atual.

Segundo o Marinho, as funções PCRE são mais rápidas que as POSIX e para funcionarem o PHP deverá ser compilado com 
suporte a bilioteca PCRE.

Em PHP as ER's devem ser tratadas como strings entre aspas, exemplo:

    '/sua expressão regular/'


As funções POSIX são derivdas de *ereg()*;

As funções do PREC são derivadas de *preg_macth()*;

Veja mais informações na documentação oficial:

[Sobre a PCRE](http://www.php.net/manual/en/book.pcre.php "PCRE")

[Sobre A POSIX](http://www.php.net/manual/en/reference.pcre.pattern.posix.php "POSIX")




### Javascript

Em JS temos 3 funções para tratarmos as ER's:

    test()
    exec()
    match()

E também temos o construtuor

    RegExp();

Em JS (diferentemente de PHP) as ER's devem ser embebidas por barras, sem aspas, exemplo:

    /sua expressão regular/


Veja mais informações na documentação oficial:

[https://developer.mozilla.org/pt-BR/docs/JavaScript/Guide/Regular_Expressions](https://developer.mozilla.org/pt-BR/docs/JavaScript/Guide/Regular_Expressions)



Nas próximas matérias veremos como ficará nosso singelo "primeiro exemplo" nas duas linguagens. Até lá.

*Seja bem vindo ao curso!*


Leituras adicionais sugeridas
-----------------------------

<dl id="leitura_adcionais">
    <dt>Livros</dt>
        <dd><em>Expressões Regulares, Uma abordagem divertida</em>, nesse livro Aurélio Marinho Jargas dá um show de
        didádica simples e objetiva. E, como o título promete, muito divertida também. Esse aqui é um ótimo começo e
        não é sugerida mas sim obrigatório. Veja mais informações no site oficial:
        <a href="http://www.piazinho.com.br/" >http://www.piazinho.com.br/</a>
        </dd>
        <dd><em>Expressões Regulares Cookbook</em> Ótimo livro, não é tão fácil começar por ele, mas é muito bom, o que
        mais gostei é que os autores tratam os diversos sabores das ER.
        <a href="http://novatec.com.br/livros/regexpcookbook/" >http://novatec.com.br/livros/regexpcookbook/</a>
        </dd>
        <dd><em>Dominando Expressões Regulares</em> Confesso qua ainda não li este livro, mas gostei muito do capítulo
        de amostra, será minha proxima aquisição.
        <a href="http://www.altabooks.com.br/dominando-expressoes-regulares.html" >http://www.altabooks.com.br/dominando-expressoes-regulares.html</a>
        </dd>
        <dd><em>Mastering Regular Expressions </em> A bíblia das ER, também não li, dúvido muito que eu lei um dia. Meu
        objetivo é trafegar tranquilamente pelas ER e não domniná-las, se este for o seu caso, compre e leia o livro.
        <a href="http://regex.info/book.html" >http://regex.info/book.html</a>
        </dd>
    <dt>Internet</dt>
        <dd>Primeia edição do livro do Marinho disponível para leitura online:
        <a href="http://aurelio.net/regex/guia/" >http://aurelio.net/regex/guia/</a>
        </dd>
        <dd>Links e outras dicas do Marinho (só dá ele).
        <a href="http://aurelio.net/regex/#links" >http://aurelio.net/regex/#links</a>
        </dd>
</dl>

