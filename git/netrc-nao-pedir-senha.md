---
layout:      grid12-article
title:       Configurando o git com o arquivo .netrc
description: Aprenda a configurar o git para não pedir senha com o arquivo netrc
---

Essa matéria mata "dois coelhos com uma cajada só":

- Como configurar os repositórios no [google code](https://code.google.com/ "link-externo") e também
- Como configurar o [GitHub](https://github.com/ "link-externo") para não ficar pedindo senha a cada push/pull

Crie um arquivo oculto (inicia-se com ponto) na pasta `/home/seu-usuario` com o seguinte nome:

    .netrc


Para configurar o __GitHub__:

    machine github.com login seu-login-no-github password sua-senha-no-github


Para configurar  no __google-code__:

    machine code.google.com login seu-login-no-google-code password sua-senha-no-google-code



### Entendendo melhor o arquivo .netrc

O conteúdo é auto explicativo, mas em todo caso vamos lá...

    machine  servidor.git        // endereço do servidor git
    login    seu-login           // login
    password sua-senha           // senha


