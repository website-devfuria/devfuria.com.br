---
title:       Iniciando em JavaScript
description: Este é um pequeno artigo sobre como iniciar sua experiência com a linguagem JavaScript, veremos exemplos tanto no lado do servidor como no lado do cliente.
capitulo:    "js-comecar"
ordem:       2
author:      Flávio Micheletti
date:        Junho/2012
---

Este é um pequeno artigo, bastante prático e direto, sobre como iniciar sua experiência com a linguagem __JavaScript__.
O objeto é você entrar rapidamente em ação, veremos como iniciar em JavaScript tanto no lado do servidor como no lado
do cliente.

Pressuponho que você saiba [o que é JavaScript](/javascript/o-que-e-javascript/).


Iniciando em JavaScript no lado do servidor (Node.js)
---

Você precisa ter o [Node.js](/javascript/node.js/) instalado, se estiver no Linux veja esta matéria ["Instalando o Node.js"](/linux/instalando-nodejs/).

No terminal, digite `node -v` para saber qual a versão instalada.

Digite apenas `node` para iniciar o terminal interativo [(REPEL)](http://nodejs.org/api/repl.html "link-externo"), seu 
prompt mudará para o sinal de maior `>`.

    $ node -v
    v0.10.29
    $ node
    > 

Agora você tem o JavaScript nas pontas dos dedos, vamos experimentar...

    var foo = "Eu sou javascript";
    foo
    'Eu sou javascript'

Repare que não precisamos utilizar `console.log(foo)` para ver o valor de `foo`, mas se fosse o caso, então...

    var foo = "Eu sou javascript";
    console.log(foo);
    Eu sou javascript

Digite CTRL + C duas vezes para sair.

Outra maneira é criar um arquivo de texto simple com a extensão `.js`, por exemplo, `script.js` e inserir nosso exemplo
nele. Neste caso, vamos precisar do `console.log`.

    // arquivo script.js
    var foo = "Eu sou javascript";
    console.log(foo);

No terminal execute o arquivo dessa forma `node script.js`


Iniciando em JavaScript no lado do cliente (navegador)
---

### Como executar o JavaScript

Você pode executar JavaScript do lado do cliente (__front end__) em um navegador web, dê preferência ao 
[Firefox](https://www.mozilla.org/pt-BR/firefox/new/ "link-externo") ou ao
[Google Chrome](https://www.google.com.br/chrome/browser/desktop/index.html "link-externo").

Crie um arquivo de texto simples, salve com o nome `index.html` e insira nele o seguinte código:

```javascript
var foo = "Eu sou javascript";
alert(foo);
```

Abra o arquivo em um navegador qualquer.


### Cada um no seu quadrado (separando as obrigações)

Antes de começar a escrever em JavaScript é bom saber separar as obrigações de seu código.

O __JavaScript__ será encarregado do comportamento da página, da interação com o usuário, dos eventos possíveis (click, 
duplo click, teclado, movimentação do mouse, e etc...), de tudo aquilo que pode beneficiar a interface do sistema.

O __CSS__ se encarrega-rá da apresentação da página. Pensou em estilizar, formatar, desenhar, cuidar da aparência, 
layout, conteudos, fontes, bordas, espaçamento, disposição dos elementos ...pensou em CSS. Ele cuidará da embalagem, da
roupagem que sua página web irá vestir.

Sobrou para o __HTML__ deixar claro qual é o conteúdo. HTML marca o conteúdo, em outras palavras: "tudo que é necessário
para ler e entender o conteúdo de sua página web. O código HTML deve fazer o máximo para transmitir o significado
(ou semântica) do conteúdo". O HTML descreve o conteúdo da página, a isso chamamos de __marcação semântica__.

Organizando o raciocínio, temos:

- conteúdo (HTML),
- apresentação (CSS)
- comportamento (JavaScript).




### Aonde colocar o Javascript ?

O ideal é escrevermos o código JavaScript em um arquivo texto com extensão `.js` e incluí-lo no arquivo HTML dessa forma:

```html
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Hello, World!</title>
        <meta charset="utf-8">
        <script type="text/javascript" src="codigo.js"></script>
    </head>
    <body>
        ...
    </body>
</html>
```

As abordagem acima sofre de um pequeno inconveniente: a ordem em que o arquivo é lido e executado pelo browser. Os 
navegadores executam arquivos JavaScript assim que o código é baixado e depois continua a reenderizar o HTML restante. 
Isso significa que se o seu código depender do HTML, e acredite vai depender, ele não conseguirá executar corretamente.

Atualmente há algumas saídas para este problema, a abordagem mais utilizada é a boa e velha dica: coloque o script no 
final do HTML !!!, pronto resolvido. Isso garante que seu JavaScript será executado após todo o HTML ter sido carregado
 e de quebra sua página obtém um ganho de performance. Em outra matéria, falarei mais sobre essa questão. Por hora,
vejamos como ficou nosso HTML:


```html
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Hello, World!</title>
        <meta charset="utf-8">
    </head>
    <body>
        ...
    <script type="text/javascript" src="codigo.js"></script>
    </body>
</html>
```

Colocamos o código JavaScript no final do HTML.


Leia em seguida
---

Que tal dar um olhada na [sintaxe de JavaScript](/javascript/sintaxe-basica/)?

