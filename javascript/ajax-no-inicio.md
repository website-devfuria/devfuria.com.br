---
title:       Como era utilizado o Ajax no começo
description: Este artigo apresenta a sintaxe de como era utilizado o objeto XMLHttpdRequest no início.
---

Este artigo apresenta a sintaxe de como era utilizado o objeto __XMLHttpRequest__ no início da utilização da técnica __AJAX__.

A primeira forma de utilização do objeto __XMLHttpRequest__ incluía o manipulador de evento `onreadystatechange`. Na [especifiação
do objeto](https://xhr.spec.whatwg.org/ "link-externo") data em dezembro de 2014 o evento `onreadystatechange` ainda 
é suportado, quer dizer que ele não saiu de uso. Porém, a especificação apresenta novas formas de lidar com o objeto 
(veja a matéria [Ajax - Introdução](/javascript/ajax/)).

Vamos focar nossa atenção para o evento `onreadystatechange`. Ele é acionado a cada alteração da propriedade 
`readyState`, ou seja, a cada troca de valor dessa propriedade o evento `onreadystatechange` é executado. 

```javascript
var xhr = new XMLHttpRequest();

xhr.open("GET", "foo.txt", true);
xhr.send();

xhr.onreadystatechange = function () {
  if(this.readyState == this.DONE) {
    // success!
    if(this.status == 200) {
      console.log(this.responseText)
      return;
    }
    // something went wrong
    else {
      console.log(this.status)
    }
  }

}
```


A propriedade `readyState` pode ter um dos valores abaixo:

- `0` UNSENT
- `1` OPENED
- `2` HEADERS_RECEIVED
- `3` LOADING
- `4` DONE

Ao utilização do objeto __XMLHttpdRequest__ implica em passar passar por esses estados. Por curiosidade você poderá
executar o seguinte código.

```javascript
...
...
...
xhr.onreadystatechange = function () {
    console.log(this.readyState);
}
```

A resposta do servidor estará pronta quando `readyState` for igual a `1`, podemos fazer isso:

```javascript
xhr.onreadystatechange = function () {
  if(this.readyState == 1) {
  }
}
```

Mas preferimos utilizar as contantes do objeto __XMLHttpRequest__.

```javascript
xhr.onreadystatechange = function () {
  if(this.readyState == this.DONE) {
  }
}
```


Após observar que a requisição está pronta para uso, devemos saber qual foi o 
[código de resposta do HTTP](https://developer.mozilla.org/en-US/docs/Web/HTTP/Response_codes "link-externo"). Fazemos
isso checando o valor da proprieda `status`.

```javascript
xhr.onreadystatechange = function () {
  if(this.readyState == this.DONE) {
    if(this.status == 200) {
    }
  }
}
```

A partir deste ponto, podemos obter os dados em dois formatos: __texto plano__ e __XML__. As propriedades para acessar
os dados são, respectivamente, `responseText` e `responseXML`.

<hr>
Fonte [MDN - Começando com Ajax](https://developer.mozilla.org/pt-BR/docs/Ajax/Getting_Started "link-externo")


Veja também
---

- [Introdução ao Ajax](/javascript/ajax/)
- [Aprenda a utilizar Ajax com PHP e jQuery](/javascript/ajax-php-jquery/)
