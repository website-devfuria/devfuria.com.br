---
title:       JavaScript - Remove Child (DOM)
description: Referência prática da função removeChild()
---

O método `removeChild()` remove um nó da árvore de documentos ([DOM](/javascript/dom/)). Contudo, tome cuidado: esse
método não é chamado no nó a ser removido, mas no pai desse nó (conforme implica a parte "child" de seu nome). Chame o
método a partir do nó pai e passe como argumento o nó filho que deve ser removido. 

Para remover o nó `n` do documento:

    n.parentNode.removeChild(n);

Ou para ficar mais claro...

    var parent = n.parentNode;
    parent.removeChild(n);

Vejamos um exemplo, imagine que você queira remover o item "outro item" da lista abaixo.

```html
<ul>
    <li>mais um itens<li>
    <li>mais um itens<li>
    <li>outro item<li>
    <li>mais um itens<li>
</ul>
```

O código abaixo se encarrega de excluir o item desejado.

```javascript
// Obtendo referências
var lista = document.getElementsByTagName('ul')[0];
var itens = lista.getElementsByTagName('li');

// Removendo determinado elemento
lista.removeChild(itens[2])
```

O código acima, se executado uma única vez, removerá o item de índice 2 (`outro item`) e teremos o seguinte HTML:

```html
<ul>
    <li>mais um itens<li>
    <li>mais um itens<li>
    <li>mais um itens<li>
</ul>
```
