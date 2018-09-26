---
title:       Habilitar mod_rewrite no Apache
description: Aprenda como habilitar o módulo mod_rewrite no servidor Apache
capitulo:    linux-instalando-apache
---

Esta é uma atividade corriqueira e que sempre nos esquecemos de como fazer, então aqui vai a "cola"...

Vou mostrar como fazer isso no servidor Apache em uma máquina Debian/Ubuntu.

Vamos habilitar o módulo de reescrita.

    $ cd /etc/apache2/mods-available
    a2enmod rewrite

Também precisamos fazer uma pequena alteração no arquivo de configuração do Apache, o problema aqui é você encontrar o
dito cujo.

Normalmente ele se encontra neste local...

    #
    Família hedhat
    #
    /etc/httpd/conf/httpd.conf

    #
    família Debian
    #
    /etc/apache2/apache2.conf

Pode haver variações, por exemplo, o arquivo pode chamar-se `000-default.conf`.

Em minha máquina (Ubuntu - Vivid Vervet) o local é este aqui...

    /etc/apache2/apache2.conf

De qualquer forma você deve procurar o trecho abaixo.

    <Directory /var/www/>
            Options Indexes FollowSymLinks
            AllowOverride None # <---- ATENÇÂO
            Require all granted
    </Directory>

E alterar conforme abaixo.

    <Directory /var/www/>
            Options Indexes FollowSymLinks
            AllowOverride All # <---- ATENÇÂO
            Require all granted
    </Directory>

Agora basta [reiniciar o Apache](/linux/apache-como-reiniciar-servidor-apache/).

    /etc/init.d/apache2 restart

Você deve executar o comando acima como root ou utilizar `sudo` no início do comando.


### Atenção a diretiva directory

Aqui vai uma dica, o path (caminho) da diretiva deve apontar para a sua pasta de códigos (sua pasta de projetos),
senão, "a coisa" não vai funcionar.

Isso é válido, principalmente, no caso em que o valor de `DocumentRoot` tenha sido alterado.

Em outras palavras, não adianta o seu `DocumentoRoot` apontar para `/seus/projetos/` e a diretiva `Directory` apontar
para a pasta raíz (`/`), ela deve apontar para `/seus/projetos`.


### Testando

Para testar podemos fazer um redirecionamento simples, bem simples.

Crie o arquivo `.htaccess` na pasta `seu-document-root/old/` e acesse http://localhost/old

    #
    /localhost/old/.htaccess
    #
    Redirect permanent /old http://devfuria.com.br/
