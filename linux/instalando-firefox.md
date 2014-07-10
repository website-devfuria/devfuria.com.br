---
layout: materia
title: Instalando o última versão do Firefox
---


Baixe a última versão do Firefox através do link oficial

[http://www.getfirefox.com/](http://www.getfirefox.com/ "link-externo")

No linux os donwloads são salvos na pasta `/home/seu-usuario/Downloads`, vamos
utilizar esta pasta tranquilamente, pois depois iremos apagar nossos vestígios.

Dê permissão de execussão ao arquivo:

    chmod 777 firefox-*.tar.bz2

Extraia o arquivo:

    tar xjf firefox-*.tar.bz2

Feche todas as instâncias (janelas) do Firefox que estivem abertas.

Você já pode rodar o aplicativo clicando 2x sobre:

    ~/firefox/firefox

Vamos começar a limpar os vestígios, mova o Firefox para a pasta `/opt`:
(você deve ser root para executar este comando ou digitar `sudo` antes de tudo)

    mv /firefox /opt

Não sei se é muito útil, mas se quiser iniciar o Firefox via terminal, precisaremos
criar um link simbólico dessa forma:

    ln -s /opt/firefox/firefox /usr/bin/firefox



<hr>
Fonte
- [https://support.mozilla.org/pt-BR/kb/instalando-o-firefox-no-linux](https://support.mozilla.org/pt-BR/kb/instalando-o-firefox-no-linux "link-externo")



Instalando o Firefox via repositório (CentOS)
---


Se você prefere instalar o Firefox via repositório tente os passos abaixo:

    # wget Uvh http://download.fedoraproject.org/pub/epel/6/i386/epel-release-6-8.noarch.rpm
    # rpm -Uvh epel-release-6-8.noarch.rpm

    # wget http://rpms.famillecollet.com/enterprise/remi-release-6.rpm
    # rpm -Uvh remi-release-6.rpm

    # yum --enablerepo=remi list firefox
    # yum --enablerepo=remi install firefox

<hr>
Fonte
- [http://www.tecmint.com/install-firefox-in-rhelcentos-6-3-fedora-17-16/](http://www.tecmint.com/install-firefox-in-rhelcentos-6-3-fedora-17-16/ "link-exerno")



Atualizando o FIrefox para a última versão (CentOS)
---

Adicionar os seguites repositórios:

    # rpm -Uvh http://download.fedoraproject.org/pub/epel/6/i386/epel-release-6-8.noarch.rpm
    # rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-6.rpm

O comando seguite mostra na tela o pacote que poderá ser atualizado

    # yum --enablerepo=remi list firefox


Atualize...

    # yum update firefox


<hr>
Fonte
- [http://www.if-not-true-then-false.com/2011/install-firefox-on-fedora-centos-red-hat-rhel/](http://www.if-not-true-then-false.com/2011/install-firefox-on-fedora-centos-red-hat-rhel/ "link-externo")
