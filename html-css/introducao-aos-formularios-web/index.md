---
title:       Introdução aos formulários web
description: O formulário pega os dados digitado pelo usuário, associa cada dado a um nome de campo e os envia ao servidor. Lá no outro lado (no servidor), um linguagem de servidor recebe os dados e faz alguma coisa com eles, seguindo a lógica do script criado pelo programador.
capitulo:    "html-formularios"
ordem:       1
---

Este artigo é uma rápida introdução aos fomulários web, nele veremos como os formulários web funcionam e também um
pequeno exemplo de estilização (CSS)

Um __formulário web__ é a porta de entrada dos dados de sua aplicação.

É nele que seu usuário faz a entrada de dados.

Abaixo, temos um exemplo de formulário.

```html
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Nosso singelo formulário </title>
    </head>
    <body>
        <form action="script-para-onde-envio-os-dados.php" method="post">
            <p>
                Name:  <input type="text" name="username" value="João da Silva" />
            </p>
            <p>
                Email: <input type="text" name="email"  value="joao@dasilva.com" />
            </p>
            <p>
                <input type="submit" value="Submit me!" />
            </p>
        </form>
    </body>
</html>
```



## Como os formulários web funcionam?

O formulário "pega" os dados digitado pelo usuário, associa cada dado a um nome de campo e os envia ao servidor.
Lá no outro lado (no servidor), um linguagem de servidor recebe os dados e faz alguma coisa com eles, seguindo a lógica
do script criado pelo programador.

A tag `form` é o início do formulário.

```html
<form>

</form>
```

Dentro das tags `form` colocamos os controles (inputs), labels e alguns botões.

Um formulário na web normalmente é chato de se preencher, só que ele é a alma dos aplicativos web, pois é através de seus
campos que o usuário faz a inserção dos dados e, dessa forma, interage com o sistema.

Um formulário pode (e deve) conter elementos que formam um par `nome=valor`.

Por exemplo, um __campo de entrada de texto__ (uma text box) chama-se `pais` e o seu valor é o texto `Brasil`. Quando
esse formulário submeter seus dados para o servidor, ele poderá trabalhar com a variável `pais` e seu valor será `Brasil`.

Esse negócio é tão simples que fica até difícil de explicar, rs.

Veja o famoso formulário horizontal do Facebook. Vamos analisar apenas a "tarja azul", temos os campos `login`, `senha`
e uma chekbox "mantanha-me conectado".

!["formulário web de exemplo"](form-facebook.png "formulário web de exemplo")

Quando o usuário preencher os dados e clicar no botão "Entrar" o servidor poderá trabalhar com os seguintes dados:

    login=email@digitado
    senha=1234
    manter=false

Essa questão da interação __formulário/servidor__  é assunto para as linguagens de servidores. Aqui, no curso de HTML e
CSS vamos nos deter apenas em seu layout e estrutura.



## Controles básicos (input)

A tag `input` compõem a maioria dos controles básicos.

```html
<input type="" name=""/>
```

A propriedade `name` será associada ao valor do campo.

Se o propriedade `name` for, por exemplo, "idade" e o valor digitado pelo usuário for `36` os dados para o servidor serão:

```html
idade=36
```

Alterando-se a propriedade `type` podemos obter os seguintes controles:

- Textbox (input type="text")
- Campos de senha (input type="password")
- Caixa de checagem (input type="checkbox")
- Botões de opção (input type="radio")
- Botões (button, submit e reset)
- Enviando arquivos (input type="file")


## Controles básicos (não input)

Nesta categoria encontram-se os controles "combo box", "list box" e "text box multiline":

- Caixa de seleção (combo box)
- Caixa de multipla seleção (list box)
- Text box multiline (text area)


## Fonte:

- [My first HTML form (MDN) - Exemplo básico de formulário web](https://developer.mozilla.org/en-US/docs/Web/Guide/HTML/Forms/My_first_HTML_form)
