---
title:       Instalando o Django (python)
description: Aprenda como instalar o Django no Linux
capitulo:    linux-instalando-python
---


O que é __django__ ?


> Django é um framework, construído usando a linguagem [Python](/python/).
>
> Framework é uma caixa de ferramentas. Mas não é apenas isso, o Django é uma caixa de ferramentas com um manual dentro,
> e as ferramentas combinam muito bem umas com as outras. Você usa as ferramentas que quiser, e se você quiser substituir
> uma delas por outra, isso é perfeitamente possível.
>
> Já o Python é uma linguagem de programação, trata-se de uma tecnologia que lê o código que você escreveu numa sintaxe
> conhecida e dá vida àquilo.
> (http://www.aprendendodjango.com/)


Existem mais do que uma única forma de instalar o __Django__. Consulte o site oficial para ver outras opções de instalação.

Antes de começar, você deverá decidir qual versão instalar:

- Para [Python 2](/linux/instalando-python) instale Django __1.6__
- Para [Python 3](/linux/instalando-python) instale Django __1.7__




## Instalando o Django através do pip

Obviamente que você deverá ter o [pip](/linux/instalando-pip/ "Aprenda a instalar o pip") instalado.

Após isso você poderá instalar o __Django__ da seguinte forma.

    pip install Django==1.7.1

Note que os números 1.7.1. eram a versão mais atual enquanto eu escrevia este artigo. Você deve saber qual a versão
mais atual para poder alterar esses números de acordo. Acesse a página de download...

[https://www.djangoproject.com/download/](https://www.djangoproject.com/download/)

No canto direito da tela, procure por __Latest release__ e você descobrirá qual é a versão mais atual vigente.


Para saber qual a sua versão instalado do Django

Acesse o terminal do [Python](/linux/instalando-python)	digitando simplesmente `python`.

Agora digite:

    import django
    django.VERSION


Similarmente, você poderá digitar (sem entrar no console do python, ou seja, no console do Linux):

    python -c "import django; print(django.get_version())"


## Fontes:

- [Site oficial: https://www.djangoproject.com/](https://www.djangoproject.com/)
- [http://docs.djangobrasil.org/index.html](http://docs.djangobrasil.org/index.html)


## Leia também

Aprenda a programar em nossa seção sobre a [linguagem Python](/python/).