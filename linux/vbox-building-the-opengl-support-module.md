---
layout: materia
title:  Resolvendo o erro "Building the OpenGL support module"
---


Ao instalar o __Guest Additions__ para __Virtual Box__ no Linux, as vezes, pode aparecer o erro __"Building the OpenGL support module"__.

Para resolver precisaremos criar alguns linsk simbólicos, veja:

Criar alguns links simbólicos para a seguinte pasta `/kernels/versao-do-seu-kernel`.

Para descobrir a versão de seu kernel, execute

    # uname -r.

Mas não precisa anotar, podemos fazer isso de forma mais direta, veja:

    # cd /usr/src/kernels/$(uname -r)/include/drm

Agora é só criar os links:

    # ln -s /usr/include/drm/drm.h drm.h  
    # ln -s /usr/include/drm/drm_sarea.h drm_sarea.h  
    # ln -s /usr/include/drm/drm_mode.h drm_mode.h  
    # ln -s /usr/include/drm/drm_fourcc.h drm_fourcc.h


Agora tente reinstalar o __GuestAdditions__.

- [Resolvendo o erro "headers for the current running kernel were not found"](/linux/vbox-headers-for-the-current-running-kernel-were-not-found/ "Resolvendo o erro 'headers for the current running kernel were not found'")
- [Como instalar o GuestAdditions (CentOS)](/linux/vbox-guest-additions/ "Como instalar o GuestAdditions via console (CentOS)")