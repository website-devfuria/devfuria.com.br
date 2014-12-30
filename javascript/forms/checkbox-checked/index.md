---
layout:      grid93-article
title:       Manipulando checkboxes com JavaScript
description: Aprendendo como manipular um checkbox em JavaScript
menu:        javascript-forms
---

Nesta matéria vamos aprender como trabalhar com checkboxes através do JavaScript.

Checkbox é um controle com dois estados: ligado ou desligado.

Veja a imagem abaixo com um exemplo simples de formulário web com checkboxes.

![imagem ilustrando checkboxes](form-checkboxes.png "imagem ilustrando checkboxes")

Agora veja o código HTML:

```html
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Exemplo de código Javascript - www.devfuria.com.br</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="form-action.php" method="post">
            <p>
                <input type="checkbox" id="chkBike" value="on">I have a bike
            </p>
            <p>
                <input type="checkbox" id="chkCar" value="on">I have a car
            </p>
            <p>
                <input type="button" id="btnSubmit" value="Submit me!" />
                <input type="button" id="btnLoad" value="Load!" />
            </p>
        </form>
        <script type="text/javascript" src="checkboxes-v1.0.js"></script>
    </body>
</html>
```

Nossos objetivos serão:

1. Programar o evento do botão "Submit me!" para que ele descubra se as duas checkboxes (bike e car) estão desligadas ou não e...

2. Programar o botão "Load" para carregar [aleatóriamente] as checkboxes simulando, dessa forma, o carregamento de um
formulário com dados de verdade.

O código completo você confere abaixo:

```javascript
var chkBike = document.getElementById("chkBike");
var chkCar = document.getElementById("chkCar");

document.getElementById("btnSubmit").onclick = function () {
    if (chkBike.checked) {
        console.log("escolheu 'bike'");
    } else {
        console.log("não escolheu 'bike'");
    }

    if (chkCar.checked) {
        console.log("escolheu 'car'");
    } else {
        console.log("não escolheu 'car'");
    }
};

document.getElementById("btnLoad").onclick = function () {
    if (Math.floor(Math.random() * 2)) {
        chkBike.checked = true;
    } else {
        chkBike.checked = false;
    }

    if (Math.floor(Math.random() * 2)) {
        chkCar.checked = true;
    } else {
        chkCar.checked = false;
    }
};
```

Há um elemento estranho aí, veja:

    Math.floor(Math.random() * 2)

Como estamos simulando o carregamento do formulário, eu precisava de um valor randômico.

Se o seu código funcionou, clique várias vezes no botão "Load", ele anotará aleatóriamente as combobox, certo?

As checkboxes trabalham com 2 valores, ligado e desligado, ou seja, 0 e 1 e eu precisava de __uma função que me retorna-se
aleatóriamente os valores 0 e 1__. É exatamente isso que temos na expressão misteriosa rsss.

Leia a matéria [Como gerar números aleatórios em Javascript](/javascript/numeros-aleatorios/) para saber como gerar números aleatórios.