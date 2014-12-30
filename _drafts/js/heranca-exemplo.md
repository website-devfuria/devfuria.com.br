---
layout: grid12-article
title:  Exemplo simples de herança
---


```javascript
```function Lutador(){
this.attackPlayer = function(){
return true;
}
}

function Habilidades(){
this.esquivaPlayer = function(){
console.log("esquivou");
}
}

//fazendo Lutador herdar de Habilidades
Lutador.prototype = new Habilidades();
lutador1 = new Lutador();

//verificando
console.log(lutador1 instanceof Lutador);
console.log(lutador1 instanceof Habilidades);


http://tableless.com.br/dominando-o-uso-de-prototype-em-javascript/