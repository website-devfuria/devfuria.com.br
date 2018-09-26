---
title:       Instalando o última versão do Firefox
description: Como instalar ou atualizar o Firefox para a versão mais recente
capitulo:    linux-instalando-browser
---


Instalando Firefox no Debian (Wheezy) sem um Gerenciador de Aplicativos
---

Segundo o manual da MDN...

Muitas distribuições do Linux incluem o __Firefox__ como navegador padrão, e muitas têm um gerenciador de aplicativos
(apt-get, yum, etc...) que pode facilmente auxiliá-lo a instalar o __Firefox__. O gerenciador de aplicativos irá:

- Certificar que você possui todas as bibliotecas necessárias para rodar o __Firefox__.
- Instalar o Firefox de um modo que funciona melhor com sua distribuição do Linux.
- Criar atalhos para iniciar o Firefox.
- Disponibilizar o Firefox para todos os usuários do seu computador.
- Habilitar a remoção do Firefox como qualquer outro aplicativo.

O gerenciador de aplicativos também possui alguns pontos negativos:

- Pode não obter a ultima versão do Firefox.
- Pode obter uma versão sem a marca Firefox.


Antes de instalar o __Firefox__, certifique-se que o seu computador possua as bibliotecas necessárias Instaladas.
Bibliotecas faltando podem causar o não funcionamento ou funcionamento incorreto do __Firefox__.

Em meu caso, eu já possuía o Firefox instalado via __apt-get__(gerenciador de aplicativos), quer dizer que eu não
precisei instalar as bibliotecas, pois elas já tinham sido instaladas.

Se é a primeira vez que você vai instalar, então atente para os
[requisitos](https://www.mozilla.org/en-US/firefox/20.0/system-requirements/).

O arquivo de instalação fornecido pelo Mozilla em formato `.tar.bz2` não contém o código fonte, mas sim os arquivos
binários já compilados. Portanto, você pode simplesmente desempacotar e rodar os arquivos. Não é necessário compilar o
programa através do código fonte.

As seguintes instruções instalarão o __Firefox__ em sua pasta "Home", e somente o usuário atual poderá rodar a aplicação.

### Passo a passo de como instalar o Firefox

1. Baixe o Firefox através da [página de download](https://www.mozilla.org/en-US/firefox/new/?icn=tabz) do Firefox, para a sua pasta "Home".
2. Abra o terminal e siga para o diretório home: `cd ~`
3. Extraia o conteúdo do arquivo baixado: `tar xvjf firefox-*.tar.bz2`
4. Feche todas as janelas do Firefox se tiver alguma aberta.
5. Para iniciar o Firefox, execute o script firefox presente na pasta firefox: `~/firefox/firefox`

Se você tentar iniciar o Firefox através de um Terminal com o comando `firefox` ele irá tentar iniciar a versão instalada
pelo gerenciador de arquivos ou dirá que o programa não está instalado.

Atente para o comando correto `~/firefox/firefox`, caso você se já encontre na pasta certa (`~/firefox`) então
digite apenas `./firefox`.

Para corrigir o menu do Debian, pois ele ainda aponta para a versão antiga, utilize a interface do sistema:

    aplications -> accessories -> mainMenu


- - -
Fonte:
- [support.mozilla.org/pt-BR/instalando-o-firefox-no-linux](https://support.mozilla.org/pt-BR/kb/instalando-o-firefox-no-linux)



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

- - -
Fonte:
- [http://linuxconfig.org/easy-way-to-install-firefox-browser-on-debian-7-wheezy](http://linuxconfig.org/easy-way-to-install-firefox-browser-on-debian-7-wheezy)



Instalando o Firefox manualmente (CentOS)
---

Baixe a última versão do __Firefox__ através do link oficial

[http://www.getfirefox.com/](http://www.getfirefox.com/)

No linux os downloads são salvos na pasta `/home/seu-usuario/Downloads`, vamos
utilizar esta pasta tranquilamente, pois depois iremos apagar nossos vestígios.

Dê [permissão de execução](/linux/como-dar-permissao-de-execucao) e. em seguida, extraia o arquivo:

    tar xjf firefox-*.tar.bz2

Feche todas as instâncias (janelas) do __Firefox__ que estivem abertas.

Você já pode rodar o aplicativo clicando 2x sobre `~/firefox/firefox`. Mas não faça isso, pois essa primeira execução
irá configurar a instalação paenas para seu usuário.

Agora movemos o __Firefox__ para a pasta `/opt`:
(você deve ser root para executar este comando ou digitar `sudo` antes de tudo)

    mv /firefox /opt

Para iniciar o __Firefox__ via terminal, precisaremos criar um link simbólico dessa forma:

    ln -s /opt/firefox/firefox /usr/bin/firefox

Mas pense um pouco: "já existe uma versão instalada com esse link definido" então é melhor desinstalar a versão atual:

    yum remove firefox

Feche todas a isntâncias do __Firefox__ e digite no terminal `firefox`.

Se não funcionar, reinicie o sistema e, novamente, digite no terminal `firefox`.

- - -
Fonte
- [https://support.mozilla.org/pt-BR/kb/instalando-o-firefox-no-linux](https://support.mozilla.org/pt-BR/kb/instalando-o-firefox-no-linux)




Instalando o Firefox via repositório (CentOS)
---

Se você prefere instalar o __Firefox__ via repositório tente os passos abaixo:

    wget Uvh http://download.fedoraproject.org/pub/epel/6/i386/epel-release-6-8.noarch.rpm
    rpm -Uvh epel-release-6-8.noarch.rpm

    wget http://rpms.famillecollet.com/enterprise/remi-release-6.rpm
    rpm -Uvh remi-release-6.rpm

    yum --enablerepo=remi list firefox
    yum --enablerepo=remi install firefox

- - -
Fonte
- [http://www.tecmint.com/install-firefox-in-rhelcentos-6-3-fedora-17-16/](http://www.tecmint.com/install-firefox-in-rhelcentos-6-3-fedora-17-16/)



Atualizando o Firefox para a última versão (CentOS)
---

Adicionar os seguintes repositórios:

    rpm -Uvh http://download.fedoraproject.org/pub/epel/6/i386/epel-release-6-8.noarch.rpm
    rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-6.rpm

O comando seguinte mostra na tela o pacote que poderá ser atualizado

    yum --enablerepo=remi list firefox


Atualize...

    yum update firefox


- - -
Fonte
- [http://www.if-not-true-then-false.com/2011/install-firefox-on-fedora-centos-red-hat-rhel/](http://www.if-not-true-then-false.com/2011/install-firefox-on-fedora-centos-red-hat-rhel/)