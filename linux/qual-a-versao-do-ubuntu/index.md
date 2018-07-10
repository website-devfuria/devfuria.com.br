---
title:       Qual é a versão do Ubuntu?
description: Artigo que mostra como identificar a versão do Ubuntu em modo texto  (pelo terminal)
capitulo:    linux-artigos
ordem:
---

As vezes precisamos saber qual a versão correta instalada na máquina, para isso podemos contar com dois rápidos comandos.

O mais simples é o comando `lsb_release -a`, não precisa ser root para executá-lo.

O resultado é semelhante ao exibido abaixo.

    No LSB modules are available.
    Distributor ID:	Ubuntu
    Description:	Ubuntu 15.04
    Release:	15.04
    Codename:	vivid

Outra forma é o olharmos o conteúdo do arquivo `/etc/lsb-release`, para isso utilizarmos o
[utilitário cat](/linux/utilitario-cat/) que exibe o conteúdo do arquivo.

    cat /etc/lsb-release

O resultado é semelhante ao exibido abaixo.

    DISTRIB_ID=Ubuntu
    DISTRIB_RELEASE=15.04
    DISTRIB_CODENAME=vivid
    DISTRIB_DESCRIPTION="Ubuntu 15.04"

