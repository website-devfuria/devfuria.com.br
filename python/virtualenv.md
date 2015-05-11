---
layout:      grid93-article
title:       Virtualenv
description: Matéria que mostra como dar os primeiros passos com o Virtualenv um simulador de ambientes para Python
menu:        python-artigos
---

O __Virtualenv__ é um simulador de ambiente para [Python](/python/), com ele é possível instalar em determinado diretório
os pacotes com as versões necessários para o seu projeto sem interferir no seu sistema operacional e também nos demais
projetos.



### Instalando

Para instalar o Virtualenv com Python 2:

	pip install virtualenv

Para instalar o Virtualenv com Python 3:

	pip3 install virtualenv



### Iniciando

Se você já possui uma pasta para o projeto, por exemplo `foo`, execute:

    cd /path/para/seus/projetos/foo
    virtualenv

Se você ainda não possui uma pasta para o projeto, execute

    cd /path/para/seus/projetos/
    virtualenv foo

Ele criará a pasta `foo` para você.

Em ambos os casos chegaremos no mesmo resultado e você verá em sua tela algo semelhante a isto:

    Using base prefix '/usr/local'
    New python executable in foo/bin/python3.4
    Also creating executable in foo/bin/python
    Installing setuptools, pip...done.

Seguindo o exemplo acima, o __Virtualenv__...

- criou um atalho para o Python, toda vez que você digitar `python` ele executará `foo/bin/python3.4`
- instalou o __setuptools__ e
- instalou o __pip__.



### Ativando

Neste momento, você desejará instalar aplicativos e outras bibliotecas para seu projeto. Para tal, você deve ativar
o __Virtualenv__, execute:

    cd /path/para/seus/projetos/foo
	source bin/activate


O seu __bash__ foi modificado, antes do comando era...

    [voce@localhost foo]$ 

...e depois do comando:

    (foo)[voce@localhost foo]$ 



### Desativando

Agora, você pode instalar o que você precisar para seu projeto e tudo ficará restrito ao seu diretório e não interferirá
em outros projetos, muito menos em seu desktop.

Quando terminar poderá digitar

    deactivate

Toda vez que quiser rodar seu projeto, o __Virtualenv__ deve estar habilitado.



Documentação oficial
---

- [Virtualenv](https://virtualenv.pypa.io/en/latest/ "link-externo")

