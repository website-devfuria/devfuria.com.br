---
title:       Code - Somando (refatorado)
capitulo:    "js-artigos"
ordem:       4
---

Este artigo é rápido! Vou mostrar como ficou o código [Code - Somando](/javascript/code-somando/) refatorado.

Se você não leu os 2 artigos anteriores aconselho a ler. Se não, pode ser que não faça muito sentido este artigo para
você.

Na primeira versão do código tínhamos o problema das variáveis globais, o que eu fiz foi criar um container  `app = {}`
para acomodar a variável `num` e as funções `add()` e `sub()`.

Conteúdo do arquivo `tests.js`:

```javascript
QUnit.test( "Testando add()", function( assert ) {
  app.add();
  assert.equal(app.num, 1, "add() 1 vez, num deve ser igual a 1");

  app.add();
  assert.equal(app.num, 2, "add() 2 vezes, num deve ser igual a 2");

  app.add();
  assert.equal(app.num, 3, "add() 3 vezes, num deve ser igual a 3");
});

QUnit.test( "Testando sub()", function( assert ) {
  app.num = 0;
  app.sub();
  assert.equal(app.num, -1, "sub() 1 vez, num deve ser igual a -1");

  app.sub();
  assert.equal(app.num, -2, "sub() 2 vez, num deve ser igual a -2");
});
```

Conteúdo do arquivo `index.js`:

```javascript
var app = {
    num: 0,
    add: function() {
        this.num++;
        this.mostrar(this.num);
    },
    sub: function() {
        this.num--;
        this.mostrar(this.num);
    },
    mostrar: function(valor) {
        var element = document.getElementById("resultado");
        if (element) {
            element.innerHTML = valor;
        }
    }
}
```
