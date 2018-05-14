---
title:       Instalando o Python 3 (junto com o Python 2)
description: Aprenda com esta receita como instalar o Python 3 sem afetar o Linux
capitulo:    linux-instalando-python
---

Esta é uma receita de instalação do Python 3 no Linux. A questão é que o Linux já vem com o Python instalado e, muito
provavelmente, é a versão 2x.

O cuidado que você deve ter ao instalar o __Python 3__ é não interferir com o __Python 2__,
pois sua distribuição Linux depende de muito código em Python 2x, então teremos em nossa máquina as duas versões.

Para descobrir qual é a sua versão do Python execute `python --version`.

Após seguir esta receita, teremos Python 2 e 3 instalados na máquina e você poderá executar o Python 2.X através do
comando `python` e o Python 3 através do comando `python3`.




Preparando o terreno
---

Primeiro vamos atualizar o sistema.

	yum -y update

Instalamos as dependências.

	yum groupinstall -y 'development tools'
	yum install -y openssl-devel sqlite-devel bzip2-devel xz-libs


Instalando
---

Procure no site oficial a versão deseja do Python, escolha aqui sua versão
[https://www.python.org/ftp/python/](https://www.python.org/ftp/python/)

Neste exemplo utilizarei a versão 3.4.2, __nos comandos abaixo troque [`3.4.2`] pela versão na qual você está instalando__.

Agora, vamos até a pasta `/opt`.

	cd /opt

Baixe os fontes.

	wget https://www.python.org/ftp/python/3.4.2/Python-3.4.2.tar.xz

Descompacte.

	xz -d Python-3.4.2.tar.xz

Extraia.

	tar -xvf Python-3.4.2.tar

Entre na pasta `/Python-3.4.2`

	cd Python-3.4.2/

Compile.

	./configure
	make
	make altinstall

Se você utilizar o __comando `make install` ele irá sobrescrever sua versão do Python__ e muito provavelmente
quebrará o seu sistema operacional (Linux). Então atente para o comando correto `make altinstall`.





Testando
---

A versão de Python que acompanha sua distribuição Linux deve estar neste local `/usr/bin/python`.

Execute `ls -l /usr/bin/python*` para checar visualmente.

Ao executar `/usr/bin/python --version` ou simplesmente `python --version` obtemos o mesmo resultado.

Se você seguiu a receita de instalação com sucesso, então teremos o Python 3 instalado neste local `/usr/local/bin/`.

Execute `ls -l /usr/local/bin/python*` para ver aonde foi instalado o Python 3.

No meu caso, o Python 3 foi instalado em `/usr/local/bin/python3.4`, então para testar posso executar
`/usr/local/bin/python3.4 --version`.



Finalizando
---

Não queremos digitar `/usr/local/bin/python3.4` sempre que precisarmos executar o Python 3, então é melhor criarmos um
link simbólico.

	ln -s /usr/local/bin/python3.4 /usr/bin/python3

Agora podemos utilizar o atalho `python3`.

Experimente...

    python --version
    python3 --version


Leia também
---

Aprenda a programar em nossa seção sobre a [linguagem Python](/python/).