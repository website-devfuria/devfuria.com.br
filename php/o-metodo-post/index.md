---
title:       O método POST
description: Uma introdução básica de como funciona o método POST na linguagem PHP
capitulo:    "php-http"
ordem:       2
---

O método POST é bem parecido com o método GET visto no artigo anterior. Para quem está acompanhando esta série de artigos
não terá grandes problemas para entender o presente artigo. Se acaso você tenha chegado aqui diretamente (sem ter passado
pelos demais artigos) eu convido você a ler o artigo anterior.

O primeiro mito em relação aos métodos POST e GET é que __o POST é mais seguro que o método GET__. Não, ambos são 
inseguros, pois expõem os dados da requisição. A tendência em achar que o POST é mais seguro é porque ele envia os valores
no corpo da mensagem HTTP e não na URL, como é no caso do GET. Mas isso não o torna mais seguro, sequer o torna seguro.

No artigo posterior a este nos veremos com mais detalhes o que é uma mensagem HTTP e você entederá o que é "corpo da 
mensagem". Por enquanto vamos nos ater ao básico do método POST. 

Como eu estava falando, ambos os métodos são parecidos. Se enviarmos um par "nome=valor" para seu script PHP ele (o
script) poderá trabalhar internamente com os valores enviados. A superglobal para o método POST chama-se...

    $_POST

Ela também é um array e poderá ser manipulada diretamente (vide artigo anterior).

Se enviarmos `nome=valor` para o servidor o seu script poderá fazer...

```php
<?php
var_dump($_POST['nome']);
```

A dificuldade agora é __como realizar a requisição com o verbo POST ?__

No verbo GET bastava passar o par "nome=valor" junto a URL, exemplo `index.php?nome=valor` e também vimos algumas 
estratégias no uso de variáveis com links (âncoras HTML), mas... e agora, como  simular uma requisição POST ?

Você terá que utilizar um software específico para seu objetivo.

Normalmente esses softwares são pequenos plugins dentro dos navegadores e são de fácil instalação. No Firefox há vários
plugins e no Google Chrome também. Com eles você descobrirá que poderá criar outras requisições além do POST. No começo
a gente fica meio perdido na utilização de um desses softwares.

Este artigo será curto mas o exercício que eu estou proprondo a você é grande. E consiste em buscar um software de sua
preferência para poder realizar requisições do tipo POST. Após ter instalado no seu navegador o plugin, o segundo passo
e criar a requisição POST. Envie alguma variáveis para um script qualquer e observe o processo funcionando.

Esses plugins o ajudarão a debugar seus scripts, mas eles não fazem parte de seu sistema. Em outras palavras, quero dizer
que no seu sistema você realizará requisições POST através de formulários web, também é possível fazer isso com JavaScript.

Abaixo vemos a tela do plugin HTTPrequester para Firefox.

![](httprequester.PNG)

Abaixo vemos a tela do plugin Postman para Google Chrome.

![](postman.PNG)


## Requisição POST através de formulários

Um formulário web pode realizar a requisição POST e essa é a forma mais "natural" encontrada na maioria dos sitemas.

Se você não entende nada de formulários web e tão pouco HTML, sinal vermleho! Para tudo e vai lá dar uma olha nessa coisas.

Caso você não tenha medo de HTML (rsss), seguimos...

```html
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
```

Repare na propriedade `method`! É ela quem definirá o verbo, mas não se empolgue pois ela só aceita dois valores: `post` e `get`.

A propriedade `action` aponta para o seu script de destino, para onde o formulário deve enviar os dados.

Agora você deve estar se perguntando: "Como o formulário vai gerar os pares 'chave=valor'? " Boa pergunta! O processo 
ocorre todo no lado do cliente, ou seja, no Front End. O formulário faz isso através das propriedades `name` e `value` 
de cada controle (input, textarea, etc...).

Um exemplo, o par "chave=valor" gerado pelo controle abaixo será `username=João da Silva`.

    <input type="text" name="username" value="João da Silva" />

Agora é a sua vez, me diga qual será o par "chave=valor" gerado pelo HTML abaixo ?

    <input type="text" name="email"  value="joao@dasilva.com" />

Descobriu ? Não vou falar não, faça o teste. Vamos partir para os exercícios.


## Exercícios

1. Crie uma requisição POST através de um software qualquer próprio para isso.
2. Crie uma requisição POST através de um formulário web.
3. Tenha a certeza de ter entendido como se forma os pares chave=valor no formulário web.
