---
title:       Instalando o Virtualenv (python)  no Linux
description: Aprenda como instalar o Virtualenv (python) no Linux
capitulo:    linux-instalando-python
---

O __Virtualenv__ é um simulador de ambiente para [Python](/python/), com ele é possível instalar em determinado diretório
os pacotes com as versões necessários para o seu projeto sem interferir no seu sistema operacional e também nos demais
projetos.

Para instalar o Virtualenv com Python 2:

	pip install virtualenv

Para instalar o Virtualenv com Python 3:

	pip3 install virtualenv

Obviamente que você deve checar se os links apontam para as versões corretas, tente:

    python --version
    python3 --version

Leia este artigo para [instalar o Python 3](/linux/instalando-python/).

Leia a [documentação oficial](https://virtualenv.pypa.io/en/latest/virtualenv.html) para outras formas de
instalação.

Verifique se instalou corretamente

	virtualenv --version

Leia mais sobre o funcionamento do virtualenv no artigo [virtualenv](/python/virtualenv/).
