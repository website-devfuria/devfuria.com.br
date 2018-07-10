---
title:       Manipulando checkboxes com PHP
description: "Veremos como enviar e receber dados através do controle checkbox (input type='check')"
capitulo:    "php-formularios"
ordem:       2
---

Checkboxes são controles "booleanos" (modo de dizer), eles ou estão ligados (true) ou estão desligados (false).

Leia mais sobre o [controle checkbox](/html-css/formularios/checkbox/) na seção HTML.

Abaixo vemos o formulário web no qual trabalharemos.

!["Figura ilustrando os controles checkboxes"](form-checkboxes.png "Figura ilustrando os controles checkboxes")

Veja aqui um [lab](/php/labs/checkbox/form.php) utilizando Bootstrap4.

Crie o arquivo `form.php` e insira o seguinte conteúdo:

```html
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Form de exemplo com checkboxes</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="form-action.php" method="post">
            <p>
                <input type="checkbox" name="bike" value="on">I have a bike
            </p>
            <p>
                <input type="checkbox" name="car" value="on">I have a car
            </p>
            <p>
                <input type="submit" value="Submit me!" />
            </p>
        </form>
    </body>
</html>
```

O PHP depende da propriedade `name` já o JS depende da propriedade `id`.

E as duas propriedades podem ser utilizadas juntas?

Sim podem, veja:

    <input type="checkbox" name="" id=""

Elas também podem ser iguais ou diferentes.



Recebendo o formulário web
---

Você deve estar pensando que o __checkbox__ funciona de forma idêntica ao controle __textbox__, mas eles funcionam de 
forma diferente.

O checkbox, quando clicado, enviará o par `nome=valor` para o servidor.

Agora, quando ele não é clicado, ele enviará o quê para o servidor? Isto `name=""` ?

Negativo, ele não envia nada, absolutamente nada. Nenhum par de valor, nenhuma referência vazia, nada!

Estou enfatizando essa discussão pois, o mais óbvio é pensar que o controle enviará `name=on` quando ticado e `name=off`
quando não ticado.

Por alguma razão, quando o controle não é ticado, ele não envia nada, triste isso né?

Mas "nada poderá nos deter", poderemos receber da seguinte forma:


```php
// check BIKE
if (isset($_POST['bike'])) {
    var_dump("escolheu 'bike'");
} else {
    var_dump("não escolheu 'bike'");
}

// check Car
if (isset($_POST['car'])) {
    var_dump("escolheu 'car'");
} else {
    var_dump("não escolheu 'car'");
}
```

Mas ficou um monte de linhas, imagina que você receberá 10 checkbox!

Faça os cálculos. 10 x 5 = 50 linhas... opâ!

Vamos fazer nosso código tomar as __Pílulas Nanicolinas__ e diminuir um pouco esse negócio. O arquivo `form-action.php`
ficará com abaixo:

```php
<?php

$_POST['bike'] = ( isset($_POST['bike']) ) ? true : null;
$_POST['car']  = ( isset($_POST['car']) )  ? true : null;

# Visualizando os dados
var_dump($_POST);

# Apartir deste ponto, entra em cena a lógica de seu programa.
# Em outras palavras, é o que faremos com os dados recebidos.
```

Pronto! Agora sabemos que se a variável `$_POST['bike']` for igual a `true` o usuário selecionou a checkbox. Se ele não
ticar, o valor será `null`.

Repare que não utilizamos o valor da propriedade `value="on"`, pois ela é inútil. Tudo bem, não podemos subestimar a 
criatividade dos programadores de plantão, mas eu acho ela inútil. 




Carregando o formulário web
---

Para carregar as checkboxes do nosso formulário não trabalharemos com a propriedade `value=""` mas sim com a propriedade
`checked`, veja:

    <input type="" name="nome-do-campo" checked />

O correto é utilizar ela dessa forma...

    <input type="" name="nome-do-campo" checked="checked" />

Por enquanto iremos trabalhar com a forma reduzida, só por enquanto.

Retomando, se tivéssemos uma variável, por exemplo, `$bike` com a string `"checked"` atribuída a ela...

    $bike = "checked";

...então poderíamos imprimir isso no controle, dessa forma:

    <input type="checkbox" name="bike" value="on" <?php echo $bike; ?> >

Altere o conteúdo do arquivo `form.php` como se segue:

```php
<?php

/**
 * Aqui teríamos algum código para
 * recuperar de uma fonte de dados
 * as informações do formulário.
 *
 * Utilizaremos o código abaixo, apenas como fins ilustrativo,
 * imaginando que ele vem de alguma fonte.
 */
$bike = (bool) rand(0, 1) ? "checked" : null;
$car  = (bool) rand(0, 1) ? "checked" : null;

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Form de exemplo com checkboxes</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="form-action.php" method="post">
            <p>
                <input type="checkbox" name="bike" value="on" <?php echo $bike; ?> >I have a bike
            </p>
            <p>
                <input type="checkbox" name="car" value="on" <?php echo $car; ?> >I have a car
            </p>
            <p>
                <input type="submit" value="Submit me!" />
            </p>
        </form>
    </body>
</html>
```
