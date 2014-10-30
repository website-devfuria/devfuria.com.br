---
layout:      grid12-article
title:       Git a tarde
description: Essa é uma história fictícia para demonstrar como é o dia dia de quem utiliza o Git
---

O fluxo de trabalho é o mais simples, a equipe é pequena e todos possuem permissão de leitura e escrita no repositório
central.


De tarde
---


    git branch
    # branch outra-issue-qualquer

trocar para master

    git checkout master
    git pull origin master

criar branch

    git branch new-issue
    git branch
    git checkout new-issue

atalho

    git checkout -b new-issue

    git add .
    git commit -m ""

corrigir bug em master

    git checkout master

ciclo

    git add .
    git commit -m ""

voltar para minha issue

    git checkout new-issue
    git merge master

ao terminá-la, disponibilizar para os outros

    git push origin new-issue


conflito???
    



Revendo os comandos
---



E assim termina uma tarde com o Git. 



Leia também
---

Lei o artigo anterior [Git de manhã](/git/git-de-manha/)