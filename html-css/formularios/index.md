---
layout:      materia
title:       HTML - Formulários e controles (inputs e labels)
description: 
---


Um formulário na web normalmente é chato de se preencher, só que ele é a alma dos aplicativos web, pois é através de seus
campos que o usuário faz a inserção dos dados e, dessa forma, interaje com o sistema.

Um formulário pode (e deve) conter elementos que formam um par `nome=valor`.

Por exemplo, um __campo de entrada de texto__ (uma text box) chama-se `pais` e o seu valor é o texto `Brasil`. Quando
esse formulário submeter seus dados para o servidor, ele poderá trabalhar com a variável `pais` e seu valor será `Brasil`.

Esse negócio é tão simples que fica até difícil de explicar, rs.

Veja o famoso formulário do Facebook. Vamos analisar apenas a "tarja azul". Temos os campos `login`, `senha` e uma chekbox
 "mantanha-me conectado".


!["falhou"](form-facebook.png)

Quando o usuário preencher os dados e clicar no botão "Entrar" o servidor poderá trabalhar com os seguintes dados:

    login=email@digitado
    senha=1234
    manter=false

Essa questão da interação __formulário/servidor__ nós veremos em outro momento, ok? Aqui, no curso de HTML e CSS vamos 
nos deter apenas em seu layout e estrutura.