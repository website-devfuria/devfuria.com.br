---
title:       Manipulando combobox com PHP
description: Veremos como enviar e receber dados através do controle combobox (input-form-select)
capitulo:    "php-formularios"
ordem:       4
---


Combobox é o controle HTML `select`.

Também conhecido como __caixa de seleção__ ou __caixa de opções__.

O usuário é deve fazer uma única escolha entre os itens disponíveis.

Abaixo vemos o formulário web no qual trabalharemos.

!["Figura ilustrando o controle combobox"](input-form-select-02.png "Figura ilustrando o controle combobox")

```html
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Formulário: combobox</title>
        <meta charset="utf-8">
    </head>
    <body>

        <form action="form-action.php" method="post">
            <p>
                <select name="cidades">
                    <option value=""></option>
                    <option value="scs">São Caetano do Sul</option>
                    <option value="sa">Santo André</option>
                    <option value="sbc">São Bernardo do Campo</option>
                </select>
                <input type="submit" value="Submit me!" />
            </p>
        </form>

    </body>
</html>

```

Os itens são representados pela tag `option`, cada item é uma `option`.

Na combo acima temos 4 `options`:

1. String de comprimento zero
2. São Caetano do Sul
3. Santo André
4. São Bernardo do Campo

O valor da propriedade `value` da `option` é muito importante pois é ele quem será enviado para o servidor.

A propriedade `value` é atrelada a propriedade `name` da tag `select`.

Se o usuário selecionar o item "Santo André" o seguinte par nome-valor será enviado para o servidor:

    cidades=sa

Talvez queira ver na seção HTML a matéria [Caixa de seleção (combo box)](/html-css/formularios/combobox/).




Recebendo o formulário web
---

O controle `select` enviará um array vazio caso não haja nenhuma tag `option`.

Você já viu alguém fazer uma combo sem nenhuma `option`?

Se isso acontecer, saiba que um array vazio (array empty) é considerado como `false`.

```php
# afirmação: array() é igual a false
# prova:
(array() == false) # retorna true
```

Outro cenário é quando temos option's mas o usuário escolhe a primeira opção.

Em nosso exemplo, é aquela opção acima de "São Caetano do Sul" a __string de comprimento zero__.

```html
<select name="cidades">
    <option value=""></option>
    <option value="scs">São Caetano do Sul</option>
    <option value="sa">Santo André</option>
    <option value="sbc">São Bernardo do Campo</option>
</select>
```

A string `""` é considerada como `false`.

```php
# afirmação: "" é igual a false
# prova:
("" == false) # retorna true
```



### Organizando o raciocínio

Podemos fazer um único teste para os 2 casos apresentados? Sim podemos.

```php
/**
 * Caso 1 $foo = array()
 * Caso 2 $foo = ""
 * Para ambos os casos, cairemos sempre no bloco else
 */
if ($foo == true) {
    echo "executando bloco if";
} else {
    echo "executando bloco else";
}
```

Agora ficou fácil, trocamos nossa variável `$foo` pelo array global `$_POST`.

```php
if ($_POST['cidades'] == true) {
    echo "executando bloco if";
} else {
    echo "executando bloco else";
}
```

Pequena simplificação...

```php
if ($_POST['cidades']) {
    echo "executando bloco if";
} else {
    echo "executando bloco else";
}
```

Dentro dos blocos `if {} else {}` introduziremos código para fazer alguma coisa com o valor da combobox. Normalmente 
persistimos em um banco de dados, mas por hora não veremos esse código. Apenas alterei o texto para dar uma idéia melhor...

```php
if ($_POST['cidades']) {
    echo "armazenar '{$_POST['cidades']}'";
} else {
    echo "não armazenar nada!";
}
```



### Quando nem o controle select é enviado

Há ainda um caso no qual o controle `select` nem chega a ser ser enviado, é o caso dele simplesmente não existir
(não há a tag `<select></select>`).

Se isto acontecer o seu script irá lançar um erro, pois estamos acessando a chave cidades do array `$_POST` sem antes 
checar se a chave existe.

A solução é perguntar se `$_POST['cidades']` está "setada", caso não esteja, atribuiremos `null`.

```php
$_POST['cidades'] = isset($_POST['cidades']) ? $_POST['cidades'] : null;
```
    

Juntando tudo temos o resultado final:

```php
<?php
// Arquivo "form-action.php"

# Inicializando a variável $_POST['cidades']
$_POST['cidades'] = isset($_POST['cidades']) ? $_POST['cidades'] : null;

# Caso o valor de $_POST seja verdadeiro (diferente de "" ou null)
# executaremso o bloco if
if ($_POST['cidades']) {
    echo "armazenar '{$_POST['cidades']}'";
} else {
    echo "não armazenar nada!";
}
```




Carregando o formulário web
---

Carregar o formulário é mais divertido do que recebê-lo, você verá.

O que compõe uma combobox são suas tags `option,` logo precisamos "printar" as options.

Temos "n" options, logo teremos que percorrer um laço de repetição e observar cada um dos valores de um array.

Sendo mais prático, os valores da combobox ficarão contidos em um array como o exemplo seguinte

```php
$arrCombo = array(
    "scs" => "São Caetano do Sul",
    "sa"  => "Santo André",
    "sbc" => "São Bernardo do Campo"
);
```

Em outro momento, aprenderemos como carregar esse array a partir do banco de dados.

Por enquanto vamos aprender como percorrer o array.

```php
foreach ($arrCombo as $key => $value) {
    echo "<option value=\"$key\">$value</option>";
}
```

Agora basta juntar os código acima com nosso HTML, veja o resultado:

```php
<?php
$arrCombo = array(
    "scs" => "São Caetano do Sul",
    "sa"  => "Santo André",
    "sbc" => "São Bernardo do Campo"
);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Formulário: combobox</title>
        <meta charset="utf-8">
    </head>
    <body>

        <form action="form-action.php" method="post">
            <p>
                <select name="cidades">
                    <option></option>
                    <?php foreach ($arrCombo as $key => $value): ?>
                        <?php echo "<option value=\"$key\" >$value</option>"; ?>
                    <?php endforeach; ?>
                </select>
                <input type="submit" value="Submit me!" />
            </p>
        </form>

    </body>
</html>
```



### Carregando com um valor pré-determinado (selecionado)

Você vai precisar abrir o formulário com um valor selecionado.

Para determinar um valor carregado, usamos a propriedade HTML `selected="selected"` na tag `option` para indicar qual a
é a opção selecionada.

Então, se dissermos que o valor deve ser `"sbc"` precisaremos, ao percorre o laço, checar se a chave (`$key`) é igual ao
valor selecionado.

```php
$arrCombo = array(
    "scs" => "São Caetano do Sul",
    "sa"  => "Santo André",
    "sbc" => "São Bernardo do Campo"
);
$valor_selecionado = "sbc";
foreach ($arrCombo as $key => $value) {
    $selected = ($valor_selecionado == $key) ? "selected=\"selected\"" : null;
    echo "<option value=\"$key\" $selected >$value</option>";
}
```

Juntando tudo no formulário HTML temos...


```php
<?php
$arrCombo = array(
    "scs" => "São Caetano do Sul",
    "sa" => "Santo André",
    "sbc" => "São Bernardo do Campo"
);
$valor_selecionado = "sbc";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Formulário: combobox</title>
        <meta charset="utf-8">
    </head>
    <body>

        <form action="form-action.php" method="post">
            <p>
                <select name="cidades">
                    <option></option>
                    <?php foreach ($arrCombo as $key => $value): ?>
                        <?php $selected = ($valor_selecionado == $key) ?
                                          "selected=\"selected\"" :
                                          null; ?>
                        <?php echo "<option value=\"$key\"  $selected>$value</option>"; ?>
                    <?php endforeach; ?>
                </select>
                <input type="submit" value="Submit me!" />
            </p>
        </form>

    </body>
</html>
```



### Promovendo a reusabilidade utilizando-se de uma função

Imagine que você tem milhões de combobox em seu sistema e agora precisa fazer um pequena alteração (uma alteração 
qualquer). Você terá que correr atrás das milhões de combo e mudar uma a uma. Falei em milhões, mas mesmo que fossem 
apenas 2 já seria torturante.

A solução é correr na frente e não atrás (momento filosófico), então que tal utilizar uma função para "printar" a combo?

Que tal uma função que aceite 2 parâmetros. O primeiro será nosso array de dados (`$arrDados`) e o segundo será o valor
selecionado (`$valorSelecionado`).

```php
function combobox($arrDados, $valorSelecionado = null) {
    echo "<option></option>";
    foreach ($arrDados as $key => $value) {
        $selected = ($valorSelecionado == $key) ? "selected=\"selected\"" : null;
        echo "<option value=\"$key\" $selected >$value</option>";
    }
}
```

Nosso código ficaria assim...


```php
<?php

#
# Função que ajuda a desenhar o controle HTML select
#
function combobox($arrDados, $valorSelecionado = null) {
    echo "<option></option>";
    foreach ($arrDados as $key => $value) {
        $selected = ($valorSelecionado == $key) ? "selected=\"selected\"" : null;
        echo "<option value=\"$key\" $selected >$value</option>";
    }
}

#
# Array com os dados de nossa combo
#
$arrCombo = array(
    "scs" => "São Caetano do Sul",
    "sa"  => "Santo André",
    "sbc" => "São Bernardo do Campo"
);

#
# Deveríamos carregar esta informação a partir de uma fonte de dados
#
$valor_selecionado = "sbc";

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Formulário: combobox</title>
        <meta charset="utf-8">
    </head>
    <body>

        <form action="form-action.php" method="post">
            <p>
                <select name="cidades">
                    <?php combobox($arrCombo, $valor_selecionado); ?>
                </select>
                <input type="submit" value="Submit me!" />
            </p>
        </form>

    </body>
</html>
```

Veja aqui um [lab](/php/labs/combobox/form.php) utilizando Bootstrap4.