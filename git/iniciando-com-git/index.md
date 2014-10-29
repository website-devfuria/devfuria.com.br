---
layout:      grid12-article
title:       Iniciando com o git
description: 
---

Esta é uma introdução prática ao Git e GitHub, indicado para quem está dando os primeiros passos com o Git.

[Git]( "link-externo") é um sistema distribuído de controle de versão de código.

[GitHub]( "link-externo") é o local onde você hospeda o seu git na web. Você não está preso ao GitHub, existe um 
infinidade de outros "hopedeiros", alguns pagos outros gratuitos. O GitHub é gratuíto para projetos abertos e pago para 
projetos privados.

Antes de iniciar com o git, seria bom se você entendesse o conceito de __versionamento de código__, mas talvez você 
esteja justamente experimentando o Git para poder entender o que é versionamento, então vamos lá...


### Criando um repositório local

Antes de criar o repositório você deve criar um pasta para ele, obviamente.

Para criar uma nova pasta no Linux executamos `mkdir nome-da-pasta`.

Você entra nela, ou melhor, vai até ela `cd nome-da-pasta`.

Agora é só criar o repositório

    git init

Para testar, pergunte ao git sobre o status do repositório `git status`.

O resultado deve ser parecido com isto...

    # On branch master
    #
    # Initial commit
    #
    nothing to commit (create/copy files and use "git add" to track)

"Nada para comitar"... bom, então vamos inserir um arquivo e "comitar".


### Adicionado e comitando

Considerando que você já criou o seu repositório git e está na pasta do repositório.

Você deve criar um arquivo qualquer, utilize seu editor de texto ou então utilize o comando seguinte.

    touch readme.md

O comando touch é um utilitário do Linux.

Antes de comitar, devemos adicionar, a sequencia é sempre esta:

- Adicionar (`add`)
- Comitar (`commit -m "mensagem"`)

Veja os comandos:

    git add readme.md
    git commit -m "my first commit"


### Criando um repositório no GitHub

Primeiro, crie um conta no GitHub. 

Utilize um nome de guerra que transmita seriedade, ele será visto por todos inclusive
seu futuro empregador.

Agora procure o ícone com um sinal de mais(+) chamado "Create new...".

Defina um nome para seu novo repositório.

Por enquanto, ignore as outras opções. Depois, com calma, você mesmo aprenderá sobre elas.

Como seu repositório está vazio, o GitHub lhe dará algumas dicas, sua tela deve parecer-se com esta:

![](create-new.png)

Apenas anote a URL exibida no campo __HTTP__, vamos precisar dela daqui a pouco.

Agora, temos um repositório no GitHub e um localmente, então vamos conectá-los.


### Conectando ambos os repositórios

O seu QG (quartel general) é o seu repositório local. A partir dele, você enviará ou receberá informações do repositório
na web (no GitHub).

Para "conectar" os repositórios executamos o comando abaixo.

    git remote add origin https://github.com/flaviomicheletti/foo.git

Onde __origin__ signifca um apelido para seu repositório, poderia ser qualquer outro nome.

E no lugar da minha URL você deve utilizar a sua URL, eu avisei que precisaríamos dela!

Para testar, execute `git remote -v`, sua tela deve ser parecida com a seguinte:

    origin	https://github.com/flaviomicheletti/foo.git (fetch)
    origin	https://github.com/flaviomicheletti/foo.git (push)




### Sincronizando o repositório no GitHub

Você já criou um repositório local e outro no GitHub.

Já adicionou alguns arquivos e "comitou" algumas modificações (localmente).

Ambos o repositório estão conectados.

Agora só falta enviar as informações do repositório local para o repositório na web (no GitHub):

    git push origin master

Lembrando que __origin__ é o apelido para seu repositório na web e __master__ é o seu branch principal.


### Fechando a conta

Se tudo deu certo, acesse novamente (ou atualize) a página de seu repositório, você deve estar vendo algo parecido
com a figura abaixo.

![](repo.png)
