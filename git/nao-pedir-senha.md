---
layout:      materia
title:       Para não ter que ficar redigitando a senha
description: Aprenda a configurar o git para não pedir senha
---


Crie um arquivo de texto na pasta `/home/seu-usuario` com o seguite nome:

    .netrc


Insira no arquivo

    machine github.com login seu-login-no-github password sua-senha-no-github


### Serve também para os repositórios no __google-code__

    machine code.google.com login seu-login-no-github password sua-senha-no-github
