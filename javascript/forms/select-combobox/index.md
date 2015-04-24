---
layout:      grid93-article
title:       Manipulando combobox (select) com JavaScript
description: Aprendendo como manipular combobox em JavaScript, o controle __select (combobox)__ é uma caixa de seleção, o usuário poderá escolher uma entre as demais opções da lista.
menu:        javascript-forms
---

O controle __select (combobox)__ é uma caixa de seleção, o usuário poderá escolher uma entre as demais opções da lista.

Vamos criar uma combo "cidades" com alguns nomes de cidades.

Nossa combo se parecerá como a da figura abaixo:

![Imagem ilustrando uma combobox](input-form-select.png "Imagem ilustrando uma combobox")

Eu vou utilizar 4 elementos: 3 cidades e 1 opção em branco (nulo, ""), o HTML da combo será como o seguinte: 

```html
<select id="cboCidades">
    <option value=""></option>
    <option value="scs">São Caetano do Sul</option>
    <option value="sa">Santo André</option>
    <option value="sbc">São Bernardo do Campo</option>
</select>
```

A propriedade `id` da combo será `cboCidades`, logo poderemos encontrar o controle da seguinte forma:

    var comboCidades = document.getElementById("cboCidades");

A variável `comboCidades` possui a combobox, então podemos acessar algumas propriedades como, por exemplo, `selectedIndex`
que contém um valor inteiro com o índice do item (option) selecionado.

Explicando melhor, cada tag `option` possui um índice, em nosso exemplo temos o seguinte:

<table>
    <thead>
        <tr>
            <th>índice</th>
            <th>option</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>0</td>
            <td>&lt;option value=""&gt;&lt;/option&gt;</td>
        </tr>
        <tr>
            <td>1</td>
            <td>&lt;option value="scs"&gt;São Caetano do Sul&lt;/option&gt;</td>
        </tr>
        <tr>
            <td>2</td>
            <td>&lt;option value="sa"&gt;Santo André&lt;/option&gt;</td>
        </tr>
        <tr>
            <td>3</td>
            <td>&lt;option value="sbc"&gt;São Bernardo do Campo&lt;/option&gt;</td>
        </tr>
    </tbody>
</table>

Outra propriedade muito útil é a __length__, ela representa o total de elementos de uma combo.

Se a combo não tiver elementos, o valor de length será 0.

Sabendo o total de elementos, podemos __percorrer a coleção options__  através em um laço for.

    for (i = 0; i < comboCidades.length; i = i + 1) {
        console.log(comboCidades.options[i]);
    }




Carregando a combobox
---

Para carregar a combo vamos utilizar o botão `btnCarregar`, adicione ao seu HTML:

    <input type="button" id="btnCarregar" value="Carregar combobox" />

Temos que criar cada __option__ na mão, na unha mesmo.

A idéa é criar um elemento HTML com JavaScript, utilizaremos a função
[document.createElement('tag')](/javascript/dom-create-element/).

Armazenamos em uma variável qualquer, por exemplo `elem` e então definimos 2 propriedades: __text__ e __value__.

    var elem = document.createElement('tag')
    elem.value = "scs";
    elem.text  = "São Caetano do Sul";

Uma vez criado os elementos, basta adicioná-los a nossa combobox, fazemos isso através do método `add(elem, elem[]`.

- O primeiro parâmetro é fácil, é o elemento que acabamos de criar.

- O segundo também, ele diz onde (em que índice) será inserido o elemento.

Resumindo, é isto aqui:

    var elem = document.createElement('tag')
    elem.value = "scs";
    elem.text  = "São Caetano do Sul";
    comboCidades.add(elem, comboCidades.options[0]);

Então teremos que repetir o trecho acima para cada option, veja:

```javascript
document.getElementById("btnCarregar").onclick = function() {
    var comboCidades = document.getElementById("cboCidades");

    var opt0 = document.createElement("option");
    opt0.value = "0";
    opt0.text = "";
    comboCidades.add(opt0, comboCidades.options[0]);

    var opt1 = document.createElement("option");
    opt1.value = "scs";
    opt1.text = "São Caetano do Sul";
    comboCidades.add(opt1, comboCidades.options[1]);

    var opt2 = document.createElement("option");
    opt2.value = "sa";
    opt2.text = "Santo André";
    comboCidades.add(opt2, comboCidades.options[2]);

    var opt3 = document.createElement("option");
    opt3.value = "sbc";
    opt3.text = "São Bernardo do Campo";
    comboCidades.add(opt3, comboCidades.options[3]);

};
```




Descobrindo o valor selecionado
---


Quando o usuário clicar em uma opção da combobox, o seguinte código mostrará qual é o índice escolhido:

    console.log(comboCidades.selectedIndex);

Além disso, cada __option__ possui pelo menos 2 propriedades interessantes: text e value:

- text é a "label"', o texto entre as tags &lt;options&gt;&lt;/options&gt;.

    comboCidades.options[comboCidades.selectedIndex].text;

- value é a "chave", o valor da propriedade `value`.

    comboCidades.options[comboCidades.selectedIndex].value;

Agora podemos criar um botão em nosso HTML para dispararmos uma função que nos dirá os informações da combobox.

Ao HTML adicionamos:

    <input type="button" id="btnInfo" value="Valor selecionado" />

E nosso código JavaScript será:

```javascript
document.getElementById("btnInfo").onclick = function() {
    var comboCidades = document.getElementById("cboCidades");
    console.log("O indice é: " + comboCidades.selectedIndex);
    console.log("O texto é: " + comboCidades.options[comboCidades.selectedIndex].text);
    console.log("A chave é: " + comboCidades.options[comboCidades.selectedIndex].value);
};
```

Pronto! com as informações da combobox em mãos você poderá tomar qualquer direção: enviar os dados via Ajax,
exibir outros dados, etc...

	

Selecionando um valor para a combobox
---

Agora precisamos selecionar uma valor para a nossa combo. Fazemos isso através da propriedade __selectedIndex__, pois
ela é leitura e escrita.

Em outra palavras, podemos atribuir o índice que desejamos que fique selecionado:

    comboCidades.selectedIndex = 2; // atribuindo um índice qualquer

Mais fácil impossível, então vamos complicar um pouquinho.

Vamos atribuir um valor randômico. Precisaremos da propriedade __length__ em conjunto com as funções `Math.random()` e
`Math.floor()`.

O código abaixo retornará um inteiro randômico entre 0 e o máximo da combobox.

    Math.floor(Math.random() * comboCidades.length)

Juntando tudo:

    comboCidades.selectedIndex = Math.floor(Math.random() * comboCidades.length);

Vamos colocar nosso código em um botão chamado `btnAleatoriamente` e atribuir a função.

document.getElementById("btnAleatoriamente").onclick = function() {
    var comboCidades = document.getElementById("cboCidades");
    comboCidades.selectedIndex = Math.floor(Math.random() * comboCidades.length);
};

Não se esqueça de criar o botão no arquivo HTML.

Não se assuste com o código acima! Se precisar, veja a matéria 
[como gerar números aleatórios em Javascript](/javascript/numeros-aleatorios/)/




Removendo elementos da combobox
---

O método [remove(indice)](/javascript/dom-remove-child/) remove o elemento.

```javascript
document.getElementById("btnRemoverItem").onclick = function() {
    var comboCidades = document.getElementById("cboCidades");
    comboCidades.remove(0);
};
```

O método acima está removendo sempre o elemento de índice 0 (zero), em outras palavras, ele está removendo o primeiro item. 




Removendo todos os itens
---

Para remover todos os itens basta percorrer a coleção options e aplicar a função [remove(indice)](/javascript/dom-remove-child/).

Eu mostrei como percorrer a coleção lá no começo do artigo, veja:

    for (i = 0; i < comboCidades.length; i = i + 1) {
        comboCidades.options[i];
    }

É só trocar o [i] por remove(i)

    for (i = 0; i < comboCidades.length; i = i + 1) {
        comboCidades.remove(i);
    }

Mas aqui tem uma pegadinha e seu código não funcionará.

Ao remover o elemento, o índice da combobox (a propriedade comboCidades.length) se refaz e bagunça tudo.

Solução, optei por remover um índice fixo, no caso o índice 0 (zero).

Dessa forma, o laço itera a coleção da combobox e retira sempre o primeiro option seja ele qual for.

    for (i = 0; i < comboCidades.length; i = i + 1) {
        comboCidades.remove(0);
    }

Mas esse 0 (zero) fixo me fez lembrar que não preciso do iterador `i` e consequentemete, não preciso do laço for, então
utilizei um laço while:

```javascript
document.getElementById("btnRemoverTodos").onclick = function () {
    var comboCidades = document.getElementById("cboCidades");
    while (comboCidades.length) {
        comboCidades.remove(0);
    }
};
```



Experimente o resultado final
---

<p data-height="311" data-theme-id="2897" data-slug-hash="BdHDG" data-default-tab="result" class='codepen'>See the Pen 
<a href='http://codepen.io/flaviomicheletti/pen/BdHDG/'>Exemlo de combobox</a>
by Flávio Micheletti (<a href='http://codepen.io/flaviomicheletti'>@flaviomicheletti</a>) on <a href='http://codepen.io'>CodePen</a>.</p>
<script async src="//codepen.io/assets/embed/ei.js"></script>