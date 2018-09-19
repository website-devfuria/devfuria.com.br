---
title:       Como é trabalhar com Git - parte 1
description: Essa é uma história fictícia para demonstrar como é o dia dia de quem utiliza o Git
capitulo:    git-intro
ordem:        1
---

Essa é uma história fictícia para demonstrar como é o dia dia de quem utiliza o Git.

O fluxo de trabalho é o mais simples, a equipe é pequena, todos possuem permissão de leitura e escrita no repositório
central.

Trabalhar com o Git é ter o terminal sempre por perto, abro o terminal e vou até minha pasta de projeto.

A primeira coisa que me pergunto é "será que estou no branch correto para trabalhar?".

    git status

Após executar `git status` e descubro qual branch está ativo, é o `issue53`. OK, ainda trabalho no mesmo branch do dia
anterior.

Segundo o tradutor do Google, __issue__ é um substativo que pode significar: questão, edição, entrega, produção em
dado momento.

Essa última é "matadora" __produção em dado momento__, perfeito!

Não fui eu quem criou a issue, então questionei meu colega do porquê do nome, ele me disse que prefere identificar suas
issues pelo id. Se eu abrir o projeto no GitHub e procurar na seção "issues", encontrarei a referida issue além de
informações detalhadas sobre o que se trata. O mais legal é dá para fazer comentários como se fosse um post e, dessa
forma, manter uma documentação muita rica sobre o processo.

Continuando meu trabalho, o comando `git status` não apenas me indica em qual branch estou trabalhando mas também trás
informações sobre minha árvore de trabalho, os arquivos propriamente dito. Ele me diz o que está selecionado para ser
"comitado". Já haviam 2 arquivos selecionados, mas faltava selecionar o terceiro arquivo.

    git add arquivo3

O `git add` é assim, ele seleciona arquivos e pastas para serem monitorados pelo Git, mas eles (os arquivos e minhas
alterações) somente entrarão para a o histórico (uma linha do tempo) após eu efetuar o "commit".

Cada __commit__ é realizado localmente, quer dizer, ninguém saberá sobre minhas alterações até que eu as publique no
repositório remoto. Esse é um dos pontos fortes sobre o Git que a comunidade adora destacar. Lá vou eu realizar um commit.

    git commit -m "minha mensagem"`

Quando eu comecei no Git, meus commits eram grandes,
haviam muita coisa neles. Depois, fui aprendendo que menor é melhor, o menor commit possível é uma única linha em um
único arquivo. Acredite, isso é muito bom, mas nem sempre precisa ser assim. Veja repositórios de outras pessoas para
saber como elas separam seus próprios commits.

O ciclo se repetiu ao longo daquela manhã, desenvolvia em passos pequenos, adicionava e "comitava" na mesma medida. A
sequência de comandos abaixo...

    git add .
    git commit -m "mensagem do commit"

... rapidamente torna-se algo trivial.

Certo tempo depois, meu trabalho estava completo, porém meu colega trabalhava mo mesmo branch e eu achei melhor atualizar
o meu branch com as alterações que ele já havia publicado.

    git pull origin issue53

__Pull__ é de puxar e __origin__ é o apelido em minha máquina que aponta para nosso repositório remoto. O comando poderia ser
traduzido da seguinte forma: *puxe do repositório chamado origin as alterações da issue53*. Pronto, meu repositório local
agora continha minhas alterações mais as alterações do meu colega. Após realizar os testes (ohhh o mundo podia ser perfeito!)
eu resolvi publicar minhas alterações para que meu colega também pudesse ver o meu trabalho.

    git push origin issue53

Este é o inverso do comando anterior, ele diz: *empurre minhas alterações para o repositório origin no branch denominado issue53*.

Com o tempo, os comandos `git pull` e `git push`, também se tonaram corriqueiros, primeiro eu atualizo localmente
puxando (pull) as informações, depois eu empurro (push) minhas alterações para o repositório remoto.

Agora era só fazer um __merge__ com o branch principal (master). Fizemos isso na intercafe do GitHub, pois lá fica
registrado cada __pull request__. Na aba "Pull requests" há um botão verde chamado "New pull request". Localmente, na minha
máquina, se meu branch atual fosse o __master__, seria o mesmo que fazer `git merge issue53`, traduzindo *atualize o branch
master com as novidades do brach issue53*.

![](../new-pull-request.png)

Não precisávamos mais do branch issue53, então deletei ele na minha máquina.

    git branch -d issue53

Mas também preciso deletar ele do repositório remoto.

    git push origin :issue53

Estranho esse comando? Também acho, mas para decorá-lo é fácil, mentalmente, troque o sinal `:` por `del`.


Revendo os comandos
---

Qual é o status de seu branch?

    git status                       // para mostrar o status do repositório

Ao desenvolver, nós adicionamos e "comitamos":

    git add .                        // selecionar arquivos para, posteriormente, serem comitados
    git commit -m "mensagem"         // comitar arquivos selecionados


Para disponibilizar nossas alterações e também atualizar nosso branch:

    git pull origin nome-do-branch   // puxar alterações do repositório remoto
    git push origin nome-do-branch   // empurrar alterações para o repositório remoto

Para deletar branchs locais e remotos:

    git branch -d nome-do-branch     // deletar branch local
    git push origin :nome-do-branch  // deletar branch remoto



Continuação
---

Lei o artigo seguinte [Como é trabalhar com Git - parte 2](/git/como-e-trabalhar-com-git-2/)