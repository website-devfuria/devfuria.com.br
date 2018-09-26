---
title:       Instalando o Kino no Fedora
description: Aprenda como instalar o Kino no Fedora
capitulo:    linux-instalando-audio-som
---

Adicione os repositórios abaixo:

    su -c 'rpm -Uvh http://download1.rpmfusion.org/free/fedora/rpmfusion-free-release-stable.noarch.rpm'
    su -c 'rpm -Uvh http://download1.rpmfusion.org/nonfree/fedora/rpmfusion-nonfree-release-stable.noarch.rpm'
    su -c 'rpm -Uvh http://rpm.livna.org/livna-release.rpm'

Instale as dependências

    yum install mjpegtools mjpegtools-devel
    yum install libquicktime

Baixar o RPM (kino-1.3.4-1.el6.rf.x86_64.rpm), procure pela versão mais atual.

	http://pkgs.repoforge.org/kino/

Instale via _rpm__:

    rpm -ivh kino-1.3.4-1.el6.rf.x86_64.rpm


### Veja mais informações em

- [http://fedorasolved.org/post-install-solutions/yum-config](http://fedorasolved.org/post-install-solutions/yum-config)
- [http://ccrma.stanford.edu/planetccrma/software/libraries.html](http://ccrma.stanford.edu/planetccrma/software/libraries.html)

