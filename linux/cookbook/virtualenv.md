---
layout:      grid12-article
title:       Instalando o VirtualEnv (python) no Linux
description: Aprenda como instalar o virtualenv (python) no Linux
---

O VirtualEnv é um simulador de ambiente para Python, com ele é possível instalar em determinado diretório os pacotes
com as verssões necessários para o seu projeto sem interferir no seu sistema operacional e também nos demais projetos.

Para instalar o VirtualEnv com Python 2:

	pip install virtualenv

Para instalar o VirtualEnv com Python 3:

	pip3 install virtualenv

Obviamente que você deve checar se os links apontam para as versões corretas, tente:

    python --version
    python3 --version

Leia este artigo para [instalar o Python 3](/linux/cookbook/python/).

Leia a [documentação oficial](https://virtualenv.pypa.io/en/latest/virtualenv.html "links-externo") para outras forma de instalação.

Verifique se instalou corretamente

	virtualenv --version


Iniciando
---

Na pasta de seu projeto execute `virtualenv env`.

Por exemplo, se a pasta para seu projeto for `projeto01`:

	mkdir -p /projetos/projeto01/
	cd /projetos/projeto01/
	virtualenv env

Ative o VirtualEnv.

	source env/bin/activate