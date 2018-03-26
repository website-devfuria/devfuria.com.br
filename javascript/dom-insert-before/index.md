---
title:       JavaScript - Insert Before (DOM)
description: Referência prática da função insertBefore()
capitulo:    "js-dom"
ordem:       13
---


A função `insertBefore()` recebe dois argumentos. O primeiro é o nó a ser inserido. O segundo argumento é o nó antes do
qual esse nó vai ser inserido. Esse método é chamado no nó que vai ser o pai do novo nó e o segundo argumento deve ser
filho desse nó pai. Se você passar `null` como segundo argumento, `insertBefore()` se comporta como `appendChild()` e
insere no final.

Vamos imaginar que temos uma lista conforme o HTML seguinte.

```html
<ul>
    <li>3</li>
    <li>4</li>
    <li>5</li>
</ul>
```

Queremos inserir os itens 0 (Zero), 1 e 2 antes, obviamente, do item 3. Mas antes, temos que preparar o código, veja
abaixo.


```javascript
//
// Uma simples função para criar os elementos
//
function criaUmElemento(tag, txt){
    var elem  = document.createElement(tag);
    var texto = document.createTextNode(txt);
    elem.appendChild(texto);
    return elem;
}

//
// Criando os elementos
//
var liZero = criaUmElemento('li', 0);
var liUm   = criaUmElemento('li', 1);
var liDois = criaUmElemento('li', 2);

//
// Recuperando a lista
//
var lista = document.getElementsByTagName('ul')[0];

//
// Recuperando os itens
//
var itens = document.getElementsByTagName('li');
```

No código acima, criamos uma função auxiliar para nos ajudar a criar cada novo item de nossa lista, o que fizemos logo
em seguida.

Recuperamos a lista através da função `getElementsByTagName()`. Como tal função retorna um array de elementos,
tivemos que acessar o índice `[0]`.

Também recuperamos os itens da lista, na verdade recuperamos todos os itens da página (então tome cuidado)

Agora, podemos inserir os itens da forma que quisermos, vamos aos exemplos.




### Exemplo 1

```javascript
lista.insertBefore(liDois, itens[0]);
lista.insertBefore(liUm, itens[0]);
lista.insertBefore(liZero, itens[0]);
```

O código acima resulta em...

```html
<ul>
    <li>0</li>
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
</ul>
```



### Exemplo 2

Neste exemplo estamos testando o segundo parâmetro como `null`.

Repare que eu mudei a ordem dos elementos inseridos.


```javascript

lista.insertBefore(liZero, null);
lista.insertBefore(liUm, null);
lista.insertBefore(liDois, null);
```

O código acima resulta em...

```html
<ul>
    <li>3</li>
    <li>4</li>
    <li>5</li>
    <li>0</li>
    <li>1</li>
    <li>2</li>
</ul>
```



### Exemplo 3

Este exemplo é só para ver se você está prestando atenção!

Partiremos do nosso html inicial.

```html
<ul>
    <li>3</li>
    <li>4</li>
    <li>5</li>
</ul>
```

O código abaixo insere o elemento zero no índice um (entre o 3 e 4).

```javascript
lista.insertBefore(liZero, itens[1]);
```

Resultado:

```html
<ul>
    <li>3</li>
    <li>0</li>
    <li>4</li>
    <li>5</li>
</ul>
```

Considerando o HTML gerado acima, o código abaixo irá inserir o elemento um no índice três (entre o 4 e 5).

```javascript
lista.insertBefore(liUm, itens[3]);
```

Resultado:

```html
<ul>
    <li>3</li>
    <li>0</li>
    <li>4</li>
    <li>1</li>
    <li>5</li>
</ul>
```

Considerando o HTML que acabamos de gerar, o código abaixo irá inserir o elemento doi no índice 5 (após o elemento 5).

```javascript
lista.insertBefore(liDois, itens[5]);
```

Resultado:

```html
<ul>
    <li>3</li>
    <li>0</li>
    <li>4</li>
    <li>1</li>
    <li>5</li>
    <li>2</li>
</ul>
```

