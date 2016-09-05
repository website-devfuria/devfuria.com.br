---
title:       Aprenda a habilitar arquivos .htaccess no Apache
---

Os arquivos `.htaccess` foram, inicialmente, planejado para controlar o acesso, ele ainda faz isso muito bem, mas ele
é largamente utilizado para redirecionamentos.

Você terá que procurar o arquivo de configuração do Apache, nas distribuiçõe derivadas do HadHat(CentOS, Fedora, etc..)
o local costuma ser este aqui...

    /etc/httpd/conf/httpd.conf

Dentro do arquivo procure pela diretiva `<Directory "/var/www/html">` e altere o trecho...

    AllowOverride None

para...

    AllowOverride All

Reinicie o Apache!

Habilitar o .htaccess é na verdade habilitar o módulo __mod_rewrite__, então veja o artigo correto sobre
[como habilitar mod_rewrite no Apache](/linux/apache-habilitar-mod_rewrite-no-apache-mod/).
