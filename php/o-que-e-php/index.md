---
layout:      grid12-index
title:       O que é php?
description: Artigo introdutório sobre PHP
---

PHP é uma linguagem de programação para uso geral.

Inicialmente, projetada por [Rasmus Lerdorf](http://pt.wikipedia.org/wiki/Rasmus_Lerdorf "link-externo") na década de 
1990, tinha como objetivo principal contar as visitas que eram realizadas em seu currículo on-line. Normalmente, utilizada
para construir aplicações web. Entende-se por aplicações web (às vezes abreviado para “webapp” ou simplesmente “app´s”)
programas ou softwares escritos para rodarem na plataforma web, no modelo 
[cliente/servidor](https://www.google.com.br/search?q=cliente/servidor&num=100&client=ubuntu&hs=i0C&channel=fs&tbm=isch&tbo=u&source=univ&sa=X&ei=UY0xVM6QOMr9yQSN1IC4Cw&ved=0CCkQsAQ&biw=1366&bih=570 "link-externo").

É uma "linguagem de programação do lado do servidor", esse termo é uma forma genérica de se referir a linguagem de 
programação que está rodando "lá" no lado do servidor. No caso, estamos considerando a linguagem 
[PHP](http://php.net/manual/pt_BR/index.php "link-externo"), mas poderia ser qualquer outra, como por exemplo, 
[Python](https://www.python.org/ "link-externo"), 
[Pearl](http://perl.org.br/ "link-externo"), 
[Ruby](http://rubyonrails.org/ "link-externo"), 
[Java(JSP)](http://www.oracle.com/br/technologies/java/overview/index.html "link-externo"), 
[CGI](http://en.wikipedia.org/wiki/Common_Gateway_Interface "link-externo"), 
ASP pura, 
[ASP.net](http://msdn.microsoft.com/en-us/library/ms524929%28v=vs.90%29.aspx "link-externo"), etc...

PHP é uma linguagem de programação interpretada, isto é, seu código fonte não é compilado e executado, mas sim 
interpretado e executado. 

O código fonte produzido pelo programador é armazenado em um arquivo de texto simples chamado 
de script, normalmente salvo com a extensão `.php`, exemplo: `formulario-clientes.php`. Esse script é interpretado e 
executado pelo módulo PHP (no dia-a-dia os profissionais dizem apenas “executado”). 

O módulo roda sobre o servidor web denominado [Apache](http://www.apache.org/ "link-externo"). O banco de dados 
[MySql](http://www.mysql.com/ "link-externo"),  largamente utilizado com a linguagem PHP, é considerado o par perfeito, 
o casamento do ano, porém é possível utilizar outros banco de dados com a linguagem PHP, como por exemplo, 
[Postgress](http://www.postgresql.org/ "link-externo"), 
[Oracle](http://www.oracle.com/br/products/database/overview/index. "link-externo"),
[MongoDB](http://www.mongodb.org/ "link-externo"),
[SqlLite](http://www.sqlite.org/ "link-externo"), etc...

O cliente é o computador que consome serviços do servidor, normalmente um
usuário atrás do navegador web, ele clica em um link que aponta para um srcipt php, o servidor __Apache__ escuta a 
“requisição” e aciona o módulo PHP (__mod_php__). Este por sua vez interpreta o código armazenado no servidor (o script)
e, se for o caso, através da extensão __php5-mysql__ aciona o banco de dados __Mysql__ recuperando algum tipo de informação.
Essa informação será embebida por código HTML e devolvida de volta ao navegador do cliente gerando, assim, a página HTML
resultante. A arquitetura é ilustrada pela figura abaixo:

![Imagem ilustrando o funcionamento do PHP](morimoto-apache1.png "Esquema da arquitetura na qual, comumente, é executado os script em PHP.")

Difícil? Não precisa esquentar a cabeça com isso, para começar é melhor botar a mão na massa

Por enquanto fique apenas com isso: no servidor, o PHP irá compor o HTML de resposta, conforme a imagem abaixo.

![Imagem ilustrando de uma forma mais simples o funcionamento do php](php-architect.gif)




Exemplos
---

Podemos alterar o título e conteúdo de uma página conforme o valor nossas variáveis.

{% highlight php %}
<?php
/**
 * Este arquivo parece ser um HTML mas na verdade é um script php
 * seu nome é "nossa-view.php"
 */
?>
<html>
    <head>
        <title><?php echo $title?></title>
    </head>
    <body>
        <?php echo $content?>
    </body>
</html>
{% endhighlight %}

No exemplo acima, você deve estar se perguntando "de onde vem as variáveis `$title` e `$content`?".

Obviamente, elas devem ser "preparadas" antes do código HTML. Um script anterior pode fazer isso: 

{% highlight php %}
<?php
$title   = "Um título qualquer";
$content = "o conteúdo de nossa página HTML";

require "nossa-view.php";
{% endhighlight %}

Outro exemplo seria o carregamento de um [formulário web](/html-css/formularios-web) com valores vindos do banco de dados,
veja o código:


{% highlight php %}
<?php
/**
 * Aqui teríamos algum código para
 * recuperar de uma fonte de dados
 * as informações do formulário.
 *
 * Utilizaremos o código abaixo, apenas como fins ilustrativo,
 * imaginando que ele vem de alguma fonte.
 */
$author = "Tom Jobim";
$email  = "tom@jobim.com";
$pass   = "1234";
$text   = "algum texto";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Simple Form</title>
    </head>
    <body>
        <form id="comments_form" action="#" method="post">
            <fieldset>
                <legend>Your Contact Details</legend>
                <p>
                    <label for="author">Name: <em class="required">(Required)/em></label>
                    <input name="author" id="author" type="text" value="<?php echo $author; ?>" />
                </p>

                <p>
                    <label for="email">Email Address:</label>
                    <input name="email" id="email" type="text" value="<?php echo $email; ?>" />
                </p>

                <p>
                    <label for="pass">Password:</label>
                    <input name="pass" id="pass" type="password" value="<?php echo $pass; ?>" />
                </p>
            </fieldset>

            <fieldset>
                <legend>Comments</legend>
                <p>
                    <label for="text">Message: <em class="required">(Required)</em></label>
                    <textarea name="text" id="text" cols="20" rows="10"><?php echo $text; ?></textarea>
                </p>
            </fieldset>
        </form>
    </body>
</html>
{% endhighlight %}

Abaixo temos um exemplo mais sofisticado! 

Estamos nos conectando com o banco de dados através da classe `PDO` e iteramos os resultados através do `foreach`:

{% highlight php %}
<?php

// Dados de conexão
$host = "yourHost";
$user = "yourUser";
$pass = "yourPass";
$db   = "yourDB";

// Efetuando a conexão
$dbh   = new PDO("pgsql:host=$host;port=5432;dbname=$db;user=$user;password=$pass");

// Sua consulta SQL
$query = "SELECT * FROM sua-tabela";

/**
 * Aqui começa nossa visão (view)
 */
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
    </head>
    <body>
        <?php foreach ($dbh->query($query) as $row): ?>
            <th>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2]; ?></td>
            </th>
        <?php endforeach;?>
    </body>
</html>
{% endhighlight %}
