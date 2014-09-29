---
layout:      grid12-article
title:       Dicas de configuração do git
description: Algumas dicas que facilitam a utilização do git em noss dia a dia
---

### Colorir as linhas

    git config --global color.ui auto
    
    
### Um log mais decente

Para ver um log mais "humano", utilize o comando abaixo:

    git log --pretty=format:"%h %ad | %s%d [%an]" --graph --date=short

Para você não ter que digitar tudo isso ai acima sempre que quizer ver o log, experimento criar um atalho:

    git config --global alias.seu-atalho 'log --pretty=format:"%h %ad | %s%d [%an]" --graph --date=short'

Digite `git seu-atalho` para ver o resultado.


### Configurando seu usuário ao fazer commit's

    git config --global user.email "you@example.com"
    git config --global user.name "Your Name"


### Configurar atalho para "push"

    git config --global push.default matching
    git config --global push.default simple
    