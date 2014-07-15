---
layout: materia
title: Instalando o última versão do Firefox
---


Instalando o Firefox manualmente (CentOS)
---

Baixe a última versão do Firefox através do link oficial

[http://www.getfirefox.com/](http://www.getfirefox.com/ "link-externo")

No linux os downloads são salvos na pasta `/home/seu-usuario/Downloads`, vamos
utilizar esta pasta tranquilamente, pois depois iremos apagar nossos vestígios.

Dê permissão de execussão ao arquivo:

    chmod 777 firefox-*.tar.bz2

Extraia o arquivo:

    tar xjf firefox-*.tar.bz2

Feche todas as instâncias (janelas) do Firefox que estivem abertas.

Você já pode rodar o aplicativo clicando 2x sobre `~/firefox/firefox`. Mas não faça isso, pois essa primeira execução 
irá configurar a instalação paenas para seu usuário.

Agora movemos o Firefox para a pasta `/opt`:
(você deve ser root para executar este comando ou digitar `sudo` antes de tudo)

    mv /firefox /opt

Para iniciar o Firefox via terminal, precisaremos criar um link simbólico dessa forma:

    ln -s /opt/firefox/firefox /usr/bin/firefox

Mas pense um pouco: "já existe uma versão instalada com esse link definido" então é melhor desinstalar a versão atual:

    yum remove firefox

Feche todas a isnancias do Firefox e digite no terminal `firefox`.

Se não funcionar, reinicie o sistema e, novamente, digite no terminal `firefox`.

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



Atualizando o Firefox para a última versão (CentOS)
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




Instalando o Firefox via repositório (Debian wheezy)
---

No Debian é preciso adicionar um canal de repositório:

Altere o arquivo `/etc/apt/sources.list`, inclua a seguinte linha:

    deb http://packages.linuxmint.com/ debian main upstream import

Atualizamos o __apt-get__:

    apt-get update

Agora é só instalar:

    apt-get install firefoz

Dica, você não mais precisará do iceweasel, então pode desinstalar:

    apt-get remove iceweasel 

<hr>
Fonte:
- [http://linuxconfig.org/easy-way-to-install-firefox-browser-on-debian-7-wheezy](http://linuxconfig.org/easy-way-to-install-firefox-browser-on-debian-7-wheezy "link-externo")



