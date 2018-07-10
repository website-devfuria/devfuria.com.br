---
title:       Manipulando radio button com PHP
description: 'Veremos como enviar e receber dados através do controle radio button (input type="radio")'
capitulo:    "php-formularios"
ordem:       3
---

Radio buttons são controles de opção.

Abaixo vemos o formulário web no qual trabalharemos.

!["Imagem ilustrando o controle radio button"](form-radios-button.png "Imagem ilustrando o controle radio button")

Crie o arquivo `form.php` com o conteúdo abaixo:

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
                <input type="button" value="Submit me!" />
            </p>
        </form>
        <script type="text/javascript" src="radios.js"></script>
    </body>
</html>
```

Repare que a propriedade `name` é idêntica para os três inputs.

Talvez você queira saber mais sobre o controle, então veja na seção HTML a matéria 
[Botões de opção (input type=radio)](/html-css/formularios/radio-buttons/).




Recebendo o formulário web
---

O controle __radio button__ quando clicado, quero dizer, se pelo menos uma opção foi escolhida, envia uma __string__
com o valor da propriedade `value`.

O __radio__, igualmente como o controle checkbox, não envia nada quando o controle não é clicado.

Ele poderia enviar o __par/valor__ sem o valor, exemplo: `$_POST['bandRock'] = ""`, mas como não é isso o que acontece
precisaremos testar os dados com `isset()`;

```php
if (isset($_POST['band-rock'])) {
    var_dump("escolheu " . $_POST['band-rock']);
} else {
    var_dump("não escolheu nenhuma banda de rock");
}
```

Encurtando o código, o arquivo `form-action.php` deve ser:

```php
<?php

$_POST['band-rock'] = ( isset($_POST['band-rock']) ) ? $_POST['band-rock'] : null;

# Visualizando os dados
var_dump($_POST);

# Apartir deste ponto, entra em cena a lógica de seu programa.
# Em outras palavras, é o que faremos com os dados recebidos.
```



Carregando o formulário web
---

Em algum momento iremos precisar carregar o formulário com os dados do sistema.

A propriedade `checked` assinala a opção escolhida.

A minha estratégia é perguntar para a variável `$bandRock` se o valor que ela contém é igual a `"The Beatles"`, 
`"Led Zeppelin"` ou `"Pink Floy"` e assinalar o __input__ que satisfazer a condição. 

Altere o arquivo `form.php` conforme o conteúdo abaixo:

```php
<?php
#
# Aqui teríamos algum código para recuperar de uma fonte de dados
# as informações do formulário.
#
# Utilizaremos o código abaixo, apenas como fins ilustrativo,
# imaginando que ele vem de alguma fonte.
#
$bandRock = "pink-floyd";

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Form de exemplo com radios</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="form-action.php" method="post">

            <p>

                <input type="radio"
                       name="band-rock"
                       value="beatles"
                       <?php echo ($bandRock == "beatles") ? "checked" : null; ?>/>The Beatles


                <input type="radio"
                       name="band-rock"
                       value="led-zeppelin"
                       <?php echo ($bandRock == "led-zeppelin") ? "checked" : null; ?>/>Led Zeppelin


                <input type="radio"
                       name="band-rock"
                       value="pink-floyd"
                       <?php echo ($bandRock == "pink-floyd") ? "checked" : null; ?>/>Pink Floy
            </p>

            <p>
                <input type="submit" id="btnSubmit" value="Submit me!" />
            </p>

        </form>
    </body>
</html>
```

A linha estava comprida e dificultava a leitura do código, então eu formatei o HTML de um jeito "maroto" só para o 
código ficar mais legível, mas __não tome isso como um estilo__, ok? 


Veja aqui um [lab](/php/labs/radio/form.php) utilizando Bootstrap4.

