---
title:       Dicas de configuração do Git
description: Algumas dicas que facilitam a utilização do Git em noss dia a dia
capitulo:    git-artigos
orem:        1
---


## Configure sua identidade

A primeira coisa que você deve fazer quando instalar o Git é definir o seu nome de usuário e endereço de e-mail. Isso é
importante porque todos os commits no Git utilizam essas informações, e está imutavelmente anexado nos commits que você
realiza.

    git config --global user.name "Seu nome para exibição"
    git config --global user.email "seu-email@email.com"

Para ver suas configurações execute `git config --list`.

- - -
Fontes
- [Pro Git  Configuração Inicial do Git](http://git-scm.com/book/pt-br/v1/Primeiros-passos-Configura%C3%A7%C3%A3o-Inicial-do-Git)
- [](http://git-scm.com/book/pt-br/v1/Customizando-o-Git-Configura%C3%A7%C3%A3o-do-Git)




## Colorir as linhas

Para melhorar a visualização do git no terminal podemos colorir as linhas com o comando abaixo.

    git config --global color.ui auto
    git config --global color.diff auto
    git config --global color.status auto
    git config --global color.branch auto



## Um log mais decente

Para ver um log mais "humano", utilize o comando abaixo:

    git log --pretty=format:"%h %ad | %s%d [%an]" --graph --date=short

Para você não ter que digitar tudo isso ai acima sempre que quizer ver o log, experimento criar um atalho:

    git config --global alias.seu-atalho 'log --pretty=format:"%h %ad | %s%d [%an]" --graph --date=short'

Digite `git seu-atalho` para ver o resultado.


- - -
Fontes:


- [Pro Git - Visualizando o Histórico de Commits](http://git-scm.com/book/pt-br/v1/Git-Essencial-Visualizando-o-Hist%C3%B3rico-de-Commits)
- [git-scm.com/docs/git-log](http://git-scm.com/docs/git-log)
