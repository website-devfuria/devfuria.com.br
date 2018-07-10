---
layout:      artigo
title:       CGI Servindo páginas web (html)
description: Este artigo é um exemplo de utilização de scripts CGI sendo servidos pelo Apache
---

Este artigo é um exemplo de utilização de scripts CGI sendo servidos pelo Apache. Irei mostrar como configurar o Apache
para executar os scripts CGI. Os scripts podem estar escritos em qualquer linguagem, neste artigo veremos exemplos de
CGI em Python, Pearl, C e em Shel Script.

Eu utilizo o __Debian 7 (wheezy)__ como desktop. Futuramente, eu pretendo acrescentar a esta matéria como configurar no
CentOS (família HedHat).


### O que é CGI ?

__CGI__ é um acrónimo para a expressão inglesa __Common Gateway Interface__. Consiste numa importante tecnologia que
permite gerar páginas dinâmicas, permitindo a um navegador passar parâmetros para um programa alojado em um servidor web.
Assim, designam-se por __scripts CGI__ os pequenos programas (veja exemplos ao longo da matéria) que interpretam esses
parâmetros e geram a página depois de os processar. (wikipedia)



Configurando o Apache (virtual hosts)
---

Esta é a parte que irá te dar mais trabalho, a não ser que você seja ninja com o Apache.

Nosso objetivo é acessar via navegador o script CGI e este, por sua vez, devolver um trecho de HTML.

Vamos utilizar um domínio fictício de exemplo, iremos digitar `www.foo.local` no navegador e esperaremos receber o
resultado de nosso script CGI.



### Redirecionando

Primeiro, devemos fazer o redirecionamento de `www.foo.local` para `localhost`, utilizaremos o arquivo `/etc/hosts` para
tal. Acesse seu arquivo hosts no enderço `etc/hosts` (voce precisará ser root) e inclua a seguinte linha:

    127.0.0.1 www.foo.local

Salve o arquivo e experimente acessar a URL `www.foo.local`, ela deve ter o mesmo resultado de `localhost`.

Leio o artigo [Arquivo hosts (/etc/hosts)](/misc/arquivo-hosts/) para saber mais.



### Virtual Host

Com o redirecionamento funcionado, vamos criar uma Virtual Host simples.

Crie um arquivo denominado `foo` na pasta `/etc/apache2/sites-available/` com o seguinte conteúdo:

```linux-config
<VirtualHost *:80>
    ServerName www.foo.local
    DocumentRoot /pasta/de/projetos/foo
</VirtualHost>
```

Habilite seu Virtual Host com o comando `a2ensite`, vá até a pasta `/etc/apache2/sites-available/` e execute:

    a2ensite foo

Agora, precisaremos reiniciar o Apache `service apache2 reload`.

Antes de testar com um script CGI, que tal testar com um simples HTML?

Você pode utilizar o HTML abaixo.

```html
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Criando Virtual Host</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Ok, sua Virtual Host foi configurada corretamente!</p>
    </body>
</html>
```

Crie um arquivo chamado `index.html` na pasta `/pasta/de/projetos/foo` e insira o código acima.

Tente acessar o endereço `www.foo.local`, ele deve mostrar o conteúdo do arquivo HTML que acabamos de criar.

Se precisar saber mais sobre Virtual Host, leia a matéria [Apache - Configurando Virtual Hosts](/misc/apache-virtual-host/).



### Virtual Host + CGI

Agora vem a configuração para os script CGI.

Altere o arquivo `foo` para o exemplo abaixo e reinicie o Apache.

Estamos considerando que os scripts em CGI estão armazenados na pasta `/pasta/de/projetos/foo/cgi-bin/` e que para
acessá-los via browser você terá que usar a URL `http://www.foo.local/cgi-bin/nome-do-arquivo-cgi`, por exemplo.

```linux-config
<VirtualHost *:80>
    ServerName www.foo.local
    DocumentRoot /pasta/de/projetos/foo

    ScriptAlias /cgi-bin /pasta/de/projetos/foo/cgi-bin/
    <Directory "/pasta/de/projetos/foo/cgi-bin">
        AllowOverride None
        Options +ExecCGI -MultiViews +SymLinksIfOwnerMatch
        AddHandler cgi-script .pl .py .bin .sh
        Order allow,deny
        Allow from all
    </Directory>

</VirtualHost>
```

Explicando...

A diretiva `ScriptAlias` define um diretório para o Apache onde serão armazenados os scripts CGI. Todos os arquivos que
estiverem neste diretório serão interpretados pelo Apache como programas CGI, assim ele tentará executá-los. Como no
exemplo, vamos digitar `www.foo.local/cgi-bin/` e vermos os resultados dos scripts CGI.

Logo abaixo da diretiva, você deve especificar um diretório particular e dar permissão para a execução de CGIs.

    <Directory "/pasta/de/projetos/foo/cgi-bin">
        Options +ExecCGI -MultiViews +SymLinksIfOwnerMatch
    </Directory>

Agora, você precisa avisar o Apache que tipo de arquivos CGIs ele poderá executar, para isso adicionamos:

    AddHandler cgi-script .pl .py .bin .sh

As demais diretivas são mais conhecidas e não estão diretamente relacionadas ao nosso objetivo (executar scripts CGI),
você pode procurar pela internet a respeito delas.

Salve seu arquivo e reinicie o Apache.

Se você não encontrou problemas até aqui, então chegou a hora da diversão.

Crie seu script CGI (veja os exemplos abaixo) e tente acessá-lo via browser.




Exemplos de arquivos CGI em diversas linguagens
---


### Exemplo CGI - Python

Antes de executar, teste se você possui o Python instalado e se o arquivo está funcionando.

Para saber se o Python está instalado digite no terminal `python --version`.

Crie o arquivo em seu editor preferido, salve com o nome `foo.py` e insira o conteúdo abaixo.

Teste o arquivo no terminal antes de tentar acessar via browser executando `python foo.py`.

É preciso dar permissão de execução no arquivo, execute `chmod 775 foo.py`.

```python
#!/usr/bin/python

print 'Content-type: text/html'
print
print '<html>'
print '<head><title>CGI - python</title></head>'
print '<body><h1>CGI - python</h1>Seu CGI esta funcionando</body>'
print '</html>'
```


### Exemplo CGI - Perl

Antes de executar, teste se você possui o Perl instalado e se o arquivo está funcionando.

Para saber se o Python está instalado digite no terminal `perl --version`.

Crie o arquivo em seu editor preferido, salve com o nome `foo.pl` e insira o conteúdo abaixo.

Teste o arquivo no terminal antes de tentar acessar via browser executando `perl foo.pl`.

É preciso dar permissão de execução no arquivo, execute `chmod 775 foo.pl`.

```perl
#! /usr/bin/perl

print "Content-type: text/html\n\n";
print "<html>";
print "<head><title>CGI - perl</title></head>";
print "<body><h1>CGI - perl</h1>Seu CGI esta funcionando</body>";
print "</html>";
```


### Exemplo CGI - Shel script


Crie o arquivo em seu editor preferido, salve com o nome `foo.sh` e insira o conteúdo abaixo.

Teste o arquivo no terminal antes de tentar acessar via browser executando `./foo.sh`.

É preciso dar permissão de execução no arquivo, execute `chmod 775 foo.sh`.

```sh
#! /bin/sh

echo 'Content-type: text/html\n\n'
echo '<html>'
echo '<head><title>CGI - shel script</title></head>'
echo '<body><h1>CGI - shel script</h1>Seu CGI esta funcionando</body>'
echo '</html>'
```



### Exemplo CGI - C++

Em c++ precisamos compilar o arquivo, mas antes precisamos saber se temos o compilador c++, para isso execute
no terminal  `g++ --version`. Imaginando que você salvou o código no arquivo denominado `foo.cpp` devemos compilar
com o seguinte comando:

    g++ foo.cpp -o foo.bin

Para testar, execute no teminal `./foo.bin`.

```cpp
#include <iostream>

using namespace std;

int main(int argc, char** argv) {
    cout << "Content-type: text/html" << endl << endl;
    cout << "<html>" << endl;
    cout << "<head><title>CGI - c++</title></head>" << endl;
    cout << "<body><h1>CGI - c++</h1>Seu CGI esta funcionando</body>" << endl;
    cout << "</html>" << endl;

    return 0;
}
```



Palavra final
---

E aí funcionou? Espero que sim!

O motivador para eu escrever este artigo é que o conteúdo que temos na Internet sobre CGI  (enquanto escrevo) são
hora vagos, hora incompletos e muitas vezes não tem nem pé nem cabeça. Então, espero que meu artigo realmente tenha lhe
ajudado, mas ajudado efetivamente.

Se você quiser me ajudar a melhorar este artigo, me dê o seu feedback. Me diga (deixe um comentário) se te ajudou ou
não, que informação faltou ou que informação poderia completar o artigo. Fique à vontade para se expressar.

Agradeço desde já!


- - -
Fontes:

- [http://pt.wikipedia.org/wiki/CGI](http://pt.wikipedia.org/wiki/CGI)
- [http://www.cgi101.com/](http://www.cgi101.com/)
- [http://httpd.apache.org/docs/2.2/howto/cgi.html](http://httpd.apache.org/docs/2.2/howto/cgi.html)
- [http://thobias.org/doc/cgi_shell.html](http://thobias.org/doc/cgi_shell.html)