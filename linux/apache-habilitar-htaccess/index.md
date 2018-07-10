---
title:       Aprenda a habilitar arquivos .htaccess no Apache
description: Aprenda como habilitar a utilização de arquivos .htaccess no servidor web Apache
capitulo:    linux-instalando-apache
---

Os arquivos `.htaccess` foram, inicialmente, planejado para controlar o acesso, ele ainda faz isso muito bem, mas ele
é largamente utilizado para redirecionamentos.

Você precisa encontrar o arquivo de configuração do Apache...

    #
    # Família hedhat
    #
    /etc/httpd/conf/httpd.conf

    #
    # família Debian
    #
    /etc/apache2/apache2.conf

Pode haver variações, por exemplo, na minha instalação do Debian 8 o arquivo chamava-se `000-default.conf`.

Dentro do arquivo procure pela diretiva `<Directory "/var/www/html">` e altere o trecho...

    AllowOverride None

para...

    AllowOverride All

Reinicie o Apache!

Habilitar o `.htaccess` é na verdade habilitar o módulo __mod_rewrite__, então veja o artigo correto sobre
[como habilitar mod_rewrite no Apache](/linux/apache-habilitar-mod_rewrite-no-apache-mod/).
