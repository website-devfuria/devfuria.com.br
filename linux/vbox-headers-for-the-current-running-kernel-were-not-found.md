---
layout: materia
title:  Resolvendo o erro "headers for the current running kernel were not found"
description: fix error "headers for the current running kernel were not found"
---

Ao instalar o __Guest Additions__ para __Virtual Box__ no Linux, as vezes, nos esquecemos de instalar os headers do kernel.


CentOS
---

Se apareceu o erro abaixo

    The headers for the current running kernel were not found. If the following
	module compilation fails then this could be the reason.
	The missing package can be probably installed with
	yum install kernel-devel-2.6.32-358.el6.x86_64

Atualize seu sistema

    # yum update

E instale o kernel-devel

    # yum install kernel-devel

Aproveite para instalar o gcc

Agora tente reinstalar o __GuestAdditions__.


Veja também
---

- [Resolvendo o erro "Building the OpenGL support module"](/linux/vbox-building-the-opengl-support-module/ "Resolvendo o erro 'Building the OpenGL support module'")
- [Como instalar o GuestAdditions (CentOS)](/linux/vbox-guest-additions/ "Como instalar o GuestAdditions via console (CentOS)")