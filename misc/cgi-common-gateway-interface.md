---
layout:      grid12-article
title:       CGI Servindo páginas web (html)
description: 
---

__CGI__ é um acrónimo para a expressão inglesa __Common Gateway Interface__. Consiste numa importante tecnologia que 
permite gerar páginas dinâmicas, permitindo a um navegador passar parâmetros para um programa alojado num servidor web.
Assim, designam-se por __scripts CGI__ os pequenos programas (veja exemplos ao longo da matéria) que interpretam esses
parâmetros e geram a página depois de os processar. (wikipedia)


Configurando o Apache (virtual hosts)
---

Esta é a parte que irá te dar mais trabalho, a não ser que você seja ninja com o Apache. Neste exemplo eu utilizo o
__Debian 7 (wheezy)__ como desktop. Futuramente, eu pretendo acrescentar a esta matéria como configurar no Centos (família
HedHat). Por enquanto, posso deixar a dica para o pessoal do HedHat: faça as alterações no arquivo `httpd.conf`.

Continuando, nosso objetivo é acessar via navegador o script CGI e este, por sua vez, devolver um trecho de HTML. Digitaremos 
`http://localhost/cgi-bin/foo.py` no navegador e como resultado veremos o mencionado HTML. Estou usando um arquivo Python
como exemplo, mas você poderá escolher entre shel script, perl ou c++.

Para tal, devemos salvar os scripts CGI na pasta `/usr/lib/cgi-bin/`, essa é uma configuração meio que padrão. A questão
mais importante é NÂO deixar seus scripts no document root, depois com mais experiência você poderá escolher outra pasta
para armazenar seus scripts CGI.

Em nosso exemplo, precisamos ensinar ao Apache como ele deve redirecionar `http://localhost/cgi-bin/foo.py` para
`/usr/lib/cgi-bin/foo.py`.

Pelo terminal, como root (ou sudo) vamos até a pasta do Apache `cd /etc/apache2/sites-available/`, é nesta pasta que
o Apache guarda as informações de Virtual Hosts. Na minha máquina possuo alguns Virtual Hosts, na sua talvez não tenha
nenhum, mas o que estamos procurando é o "host" principal o "default". No meu caso, é o arquivo denominado simplesmente
`default`, sem extensão. Abaixo, eu copiei (na íntegra) o arquivo da minha máquina `/etc/apache2/sites-available/default`.

{% highlight linux-config linenos %}
<VirtualHost *:80>
        ServerAdmin webmaster@localhost

        DocumentRoot /var/www
        <Directory />
                Options FollowSymLinks
                AllowOverride AuthConfig
        </Directory>
        <Directory /var/www/>
                Options Indexes FollowSymLinks MultiViews
                AllowOverride AuthConfig
                Order allow,deny
                allow from all
        </Directory>

        ScriptAlias /cgi-bin/ /usr/lib/cgi-bin/
        <Directory "/usr/lib/cgi-bin">
                AllowOverride None
                Options +ExecCGI -MultiViews +SymLinksIfOwnerMatch
                AddHandler cgi-script .pl .py .bin .sh
                Order allow,deny
                Allow from all
        </Directory>

        ErrorLog ${APACHE_LOG_DIR}/error.log

        # Possible values include: debug, info, notice, warn, error, crit,
        # alert, emerg.
        LogLevel warn

        CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

{% endhighlight %}

Você deve atentar apenas o trecho entre as linhas 16 e 23, é ele quem faz a coisa toda funcionar.

Na linha 16 temos a diretiva `ScriptAlias`, ela define um diretório para o Apache onde serão armazenados os scripts CGI.
Todos os arquivos que estiverem neste diretório serão interpretados pelo Apache como programas CGI, assim ele tentará 
executá-los. Adicione ou descomente a seguinte linha no seu arquivo 

    ScriptAlias /cgi-bin/ /usr/lib/cgi-bin/ 

Logo abaixo da diretiva, você deve especificar um diretório particular e dar permissão para a execução de CGIs.

    <Directory "/usr/lib/cgi-bin">
        Options +ExecCGI
    </Directory>

O trecho acima permite a execução de CGIs, repare que em meu arquivo a linha `Options +ExecCGI` vem seguido de 
` -MultiViews +SymLinksIfOwnerMatch`.

Agora você precisa avisar o Apache que tipo de arquivos CGIs ele poderá executar, para isso adicionamos:

    AddHandler cgi-script .pl .py .bin .sh

As demais diretivas são mais conhecidas e não estão diretamente relacionadas ao nosso objetivo (executar scripts CGI),
você pode procurar pela internet a respeito delas.

Salve seu arquivo e reinicie o Apache `/etc/apache2/conf.d/apache2 restart`.

Se você não encontrou problemas até aqui, então chegou a hora da diversão.

Crie seu script CGI (veja os exemplos abaixo) e tente acessá-lo via browser.



### Exemplo CGI - Python

Antes de executar, teste se você possui o Python instalado e se o arquivo está funcionando.

Para saber se o Python está instalado digite no terminal `python --version`.

Para executar o arquivo digite `python foo.py`.

É preciso dar permissão de execução no arquivo, execute `chmod 775 foo.py`.

{% highlight python %}
#!/usr/bin/python

print 'Content-type: text/html'
print
print '<html>'
print '<head><title>CGI - python</title></head>'
print '<body><h1>CGI - python</h1>Seu CGI esta funcionando</body>'
print '</html>'
{% endhighlight %}


### Exemplo CGI - Perl

Antes de executar, teste se você possui o Perl instalado e se o arquivo está funcionando.

Para saber se o Python está instalado digite no terminal `perl --version`.

Para executar o arquivo digite `perl foo.pl`.

É preciso dar permissão de execução no arquivo, execute `chmod 775 foo.pl`.

{% highlight perl %}
#! /usr/bin/perl

print "Content-type: text/html\n\n";
print "<html>";
print "<head><title>CGI - perl</title></head>";
print "<body><h1>CGI - perl</h1>Seu CGI esta funcionando</body>";
print "</html>";
{% endhighlight %}


### Exemplo CGI - Shel script

Antes de executar, teste o arquivo digitando no terminal `./foo.sh`.

É preciso dar permissão de execução no arquivo, execute `chmod 775 foo.sh`.

{% highlight sh %}
#! /bin/sh

echo 'Content-type: text/html\n\n'
echo '<html>'
echo '<head><title>CGI - shel script</title></head>'
echo '<body><h1>CGI - shel script</h1>Seu CGI esta funcionando</body>'
echo '</html>'
{% endhighlight %}



### Exemplo CGI - C++

Em c++ precisamos compilar o arquivo, mas antes precisamos saber se temos o compilador c++, para isso execute
no terminal  `g++ --version`. Imaginando que você salvou o código no arquivo denominado `foo.cpp` devemos compilar
com o seguinte comando:

    g++ foo.cpp -o foo.bin

Para testar, execute no teminal `./foo.bin`.

{% highlight cpp %}
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
{% endhighlight %}



Palavra final
---

E aí funcionou? Espero que sim!

O motivador para eu escrever este artigo é que o conteúdo que temos na Internet sobre CGI  (enquanto escrevo) são
hora vagos, hora incompletos e muitas vezes não tem nem pé nem cabeça. Então, espero que meu artigo realmente tenha lhe
ajudado, mas ajudado efetivamente.

Se você quiser me ajudar a melhorar este artigo, me dê o seu feedback. Me diga (deixe um comentário) se te ajudou ou 
não, que informação faltou ou que informação poderia completar o artigo. Fique à vontade para se expressar.

Agradeço desde já!


<hr>
Fontes:

- [http://pt.wikipedia.org/wiki/CGI](http://pt.wikipedia.org/wiki/CGI "link-externo")
- [http://www.cgi101.com/](http://www.cgi101.com/ "link-externo")
- [http://httpd.apache.org/docs/2.2/howto/cgi.html](http://httpd.apache.org/docs/2.2/howto/cgi.html "link-externo")
- [http://thobias.org/doc/cgi_shell.html](http://thobias.org/doc/cgi_shell.html "link-externo")