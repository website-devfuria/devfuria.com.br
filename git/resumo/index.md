---
title:       Resumo dos principais comandos do Git
description: 
capitulo:    git-intro
ordem:        3
---

Para inicializar um repositório:

    git init


Para obter o status do repositório:

    git status

Para adicionar e commitar:

    git add .
    git commit -m "mensagem"


Remotos
---

Para puxar (trazer) o histórico do servidor remoto:

    git pull origin nome-do-branch

Para empurrar (enviar) o histórico do servidor remoto:

    git push origin nome-do-branch


Branchs
---

Para listar branchs

    git branch

Para trocar, alternar de branch:

    git checkout nome-do-branch

Para criar um branch e selecioná-lo:

    git branch nome-do-branch
    git checkout nome-do-branch

Para criar um branch e selecioná-lo em apenas um passo (atalho):

    git checkout -b new-issue

Para deletar um branch local:

    git branch -d nome-do-branch

Para deletar um branch remoto

    git push origin :nome-do-branch


Merge
---

Para fazer um merge

    git merge nome-do-branch

