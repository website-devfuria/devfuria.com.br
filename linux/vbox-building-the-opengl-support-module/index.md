---
title:       Resolvendo o erro "Building the OpenGL support module"
description: Matéria que ajuda a resolver erros na instalação do virtualbox
capitulo:    linux-virtualbox
ordem:       4
---


Ao instalar o __Guest Additions__ para __Virtual Box__ no Linux, as vezes, pode aparecer o erro __"Building the OpenGL support module"__.

Para resolver precisaremos criar alguns linsk simbólicos para a seguinte pasta `/usr/src/kernels/versao-do-seu-kernel/include/drm`.

Para descobrir a versão de seu kernel, execute

    uname -r.

Mas não precisa anotar, podemos fazer isso de forma mais direta, veja:

    cd /usr/src/kernels/$(uname -r)/include/drm

Agora é só criar os links:

    ln -s /usr/include/drm/drm.h drm.h
    ln -s /usr/include/drm/drm_sarea.h drm_sarea.h
    ln -s /usr/include/drm/drm_mode.h drm_mode.h
    ln -s /usr/include/drm/drm_fourcc.h drm_fourcc.h


Agora tente reinstalar o __GuestAdditions__.
