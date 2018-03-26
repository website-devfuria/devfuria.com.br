---
title:       Configurando o Git com o arquivo .netrc
description: Aprenda a configurar o Git para não pedir senha com o arquivo netrc
capitulo:    git-artigos
ordem:        2
---
---

Essa matéria "mata dois coelhos com uma cajada só":

- Como configurar os repositórios no [google code](https://code.google.com/) e também
- Como configurar o [GitHub](https://github.com/) para não ficar pedindo senha a cada push/pull



## Configurando

Crie um arquivo oculto na pasta `/home/seu-usuario` com o seguinte nome:

    .netrc

Arquivos ocultos, no Linux, iniciam-se com o sinal `.`(ponto).

Repare que não é na pasta `home/`, nem na pasta `home/seu-usuario/documents`, mas sim na pasta `home/seu-usuario/`.

Se for configurar o __GitHub__, insira no arquivo o seguinte conteúdo:

    machine github.com login seu-login-no-github password sua-senha-no-github


Se for configurar o __google-code__ insira o seguinte conteúdo:

    machine code.google.com login seu-login-no-google-code password sua-senha-no-google-code



## Testando

Para __testar__ se está funcionando, basta "comitar" algumas alterações e aplicar um __push__, exemplo:

    git add .
    git commit -m "minhas alterações"
    git push origin master

Se deu certo, o Git não pediu a senha para realizar o push.



## Entendendo melhor o arquivo .netrc

O conteúdo é auto explicativo, mas em todo caso vamos lá...

Quebrando o comando em algumas linhas temos:

    machine  endereço-do-servidor  // servidor
    login    seu-login             // login
    password sua-senha             // senha

Agora em um linha só:

    machine endereço-do-servidor login seu-login password sua-senha

