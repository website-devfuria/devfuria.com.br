---
layout:      grid93-article
title:       Manipulando radios buttons com JavaScript
description: Nesta matéria vamos aprender como trabalhar com radios buttons através do JavaScript
menu:        javascript-forms
---

O __input radio__ é um controle de opções, é uma única escolha entre as opções possíveis.

Veja a imagem abaixo com um exemplo simples de formulário web com radios buttons.

![imagem ilustrando radios buttons](form-radios-button.png "imagem ilustrando radios buttons")

Agora veja o código HTML:

```html
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Form de exemplo com radios</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="form-action.php" method="post">
            <p>
                <input type="radio" name="band-rock" value="beatles"/>The Beatles
                <input type="radio" name="band-rock" value="led-zeppelin"/> Led Zeppelin
                <input type="radio" name="band-rock" value="pink-floyd"/>Pink Floy
            </p>
            <p>
                <input type="button" id="btnSubmit" value="Submit me!" />
                <input type="button" id="btnLoad" value="Load!" />
            </p>
        </form>
        <script type="text/javascript" src="radios-v1.0.js"></script>
    </body>
</html>
```


Se uma radio é uma opção entre pelo menos duas, sabemos que nunca teremos uma única rádio apenas.

Podemos ter 2 ou mais radios, em nosso exemplo temos 3 radios.

Essas radios são radios afins, quer dizer, de um mesmo grupo.

Como explicitamos isso para o HTML? Utilizando a propriedade `name` com o mesmo valor ("band-rock").

Ao invés de utilizar a função [getElementById()](/javascript/refs/getelementbyid/) precisaremos de uma função que traga
os elementos pela propriedade `name`.

    getElementsByName("valor-da-propriedade-name");

O resultado desta [função](/javascript/refs/funcoes) é um conjunto de elemento, ou seja, um 
[array](/javascript/refs/arrays/) de radios buttons.

Já está conseguindo visualizar a solução do problema?

Precisamos percorrer esse conjunto de radios e em cada radio perguntar se está ou não "checado". Se estiver checado, então nos avise.

Passando à limpo a idéia:

1. Pegue os radios buttons do mesmo grupo
2. Percorrer conjunto de radios (laço)...
3. Em cada iteração dizer se está ou não "checado"

Ops! Nosso problema acaba de virar solução, o código completo você confere abaixo:

```javascript
/**
 * Botão Submit
 */
document.getElementById("btnSubmit").onclick = function() {
    var radios = document.getElementsByName("band-rock");
    for (var i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            console.log("Escolheu: " + radios[i].value);
        }
    }
};

/**
 * Botão Load
 */
document.getElementById("btnLoad").onclick = function() {
    var radios = document.getElementsByName("band-rock");

    for (var i = 0; i < radios.length; i++) {
        if (radios[i].value === "led-zeppelin") {
            radios[i].checked = true;
        }
    }
};
```


### Explicando o código do botão "Submit"

Sabemos que a propriedade `checked` do elemento nos indicará se ele está ou não "checkado". Então `if (cadaRadio.checked)`
resolve nosso problema, porém não podemos nos esquecer que a variável `radios` é uma coleção ou melhor, um `array`. E 
como tal, cada elemento deve ser acessado através de seu índice, exemplo: radios[0], radios[1], etc...

Resumindo, nosso `if` ficará assim

    if (radios[i].checked)

Que é a mesmíssima coisa que:

    if (radios[i].checked == true)

Se o elemento estiver checado poderemos mostrar o valor do "radio", que tal?

    console.log("Escolheu: " + radios[i].value);


### Explicando o código do botão "Load"

O botão "Load" será encubido de carregar, ou melhor, assinalar uma radio qualquer.

Vamos colocar um valor arbitrário, por exemplo "led-zeppelin".

    if (radios[i].value === "led-zeppelin")

Se o valor que desejamos assinalar em nossa radio button for, por exemplo, "led-zeppelin", então nosso código ficará 
como segue:

    if (radios[i].value === "led-zeppelin") {
        radios[i].checked = true;
    }

Na prática, sabemos que a string "led-zeppelin" deveria ser substituída por uma variável e essa variável deveria ser
carregada com dados vindo do banco de dados ou de qualquer outra fonte de dados mas, para simplificar nossa vida, 
vamos utilizar o valor arbitrário.