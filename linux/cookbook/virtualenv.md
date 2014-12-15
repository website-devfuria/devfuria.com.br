---
layout:      grid12-article
title:       Instalando o virtualenv (python) no Linux
description: Aprenda como instalar o virtualenv (python) no Linux
---

O __virtualenv__ é um simulador de ambiente para [Python](/python/), com ele é possível instalar em determinado diretório
os pacotes com as versões necessários para o seu projeto sem interferir no seu sistema operacional e também nos demais
projetos.

Para instalar o VirtualEnv com Python 2:

	pip install virtualenv

Para instalar o VirtualEnv com Python 3:

	pip3 install virtualenv

Obviamente que você deve checar se os links apontam para as versões corretas, tente:

    python --version
    python3 --version

Leia este artigo para [instalar o Python 3](/linux/cookbook/python/).

Leia a [documentação oficial](https://virtualenv.pypa.io/en/latest/virtualenv.html "link-externo") para outras formas de
instalação.

Verifique se instalou corretamente

	virtualenv --version


Iniciando
---


Se você já possui uma pasta para o projeto, por exemplo `foo`, execute:

    cd /path/para/seus/projetos/foo
    virutalenv

Se você ainda não possui uma pasta para o projeto, execute

    cd /path/para/seus/projetos/
    virutalenv foo

Ele criará a pasta `foo` para você.

Em ambos os casos chegaremos no mesmo resultado e você verá em sua tela algo semelhante a isto:

    Using base prefix '/usr/local'
    New python executable in foo/bin/python3.4
    Also creating executable in foo/bin/python
    Installing setuptools, pip...done.

Seguindo o exemplo acima, o __virtualenv__...

- criou um atalho para o [Python](/python/), toda vez que você digitar `python` ele executará `foo/bin/python3.4`
- instalou o __setuptools__ e
- instalou o __pip__.

Neste momento, você desejará instalar aplicativos e outras bibliotecas para seu projeto. Para tal, você deve ativar
o __virtualenv__, execute:

	source /bin/activate

O seu __bash__ foi modificado, antes do comando era...

    [voce@localhost foo]$ 

...e depois do comando:

    (foo)[voce@localhost foo]$ 

Agora, você pode instalar o que você precisar para seu projeto e tudo ficará restrito ao seu diretório e não interferirá
em outros projetos, muito menos em seu desktop.

Quando terminar poderá digitar

    deactivated

Toda vez que quiser rodar seu projeto, o __virtualenv__ deve estar habilitado.