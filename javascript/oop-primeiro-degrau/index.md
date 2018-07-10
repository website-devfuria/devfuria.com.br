---
title:       OOP - primeiro degrau
description: Introduziremos conceito intuitivo de Programação Orientada a Objetos em JavaScript
capitulo:    "javascript-artigos"
ordem:       8
---

Neste artigo introduziremos o conceito intuitivo de programação orientação a objeto em JavaScript.

O mundo OOP em JavaScript é um pouco diferente, o caminho é tortuoso e se você acha que ter os conceitos de OOP irá
ajudar, ledo engando. "Instanciar uma classe não" tem o mesmo significado em JS.

Por enquanto, vamos entender que um objeto possui __propriedades (variáveis)__ e __métodos (funções)__ como em qualquer
outra linguagem e que definimos ele através das chaves `{ }`.

Objeto vazio (e solto):

```javascript
{}
```

Objeto vazio atribuído a uma variável qualquer:

```javascript
var foo = {};
```

Objeto com algumas propriedades:


```javascript
var personagem = {
    nome: "Zé Colméia",
    peso: "gordinho",
    tipo: "bicho"
};
```

Agora podemos referenciar as propriedades:

```javascript
console.log(personagem.nome);
// saída: "Zé Colméia"
```

Acrescentando um método:

```javascript
var personagem = {
    nome: "Zé Colméia",
    peso: "gordinho",
    tipo: "bicho",
    chamarCatatau: function() {
        // código para chamar o colega Catatau
    }
};
```

Executando esse método:

```javascript
personagem.chamarCatatau();
```

Preciso que você faça um esforço mental para entender e decorar o seguinte esquema:

```javascript
var objeto = {
    propriedade: "podemos iniciar a variável com algum valor",
    metodo: function() {
        // código
        // código
        // código
    },
    outroMetodo: function() {
        // código
        // código
        // código
    }
};

```

Repare que tanto as propriedades quanto os métodos:

- são separados por vírgula.
- utilizam os dois pontos como separador "nome: valor"


Em JS invocamos os atributos e métodos através do "ponto" `.` conforme esquema a seguir:

    # armazenando um valor
    objeto.propriedade = 123;

    # buscando o valor
    document.write( objeto.propriedade );

    # executando um método (uma função)
    objeto.metodo();

- - -
Fonte:
- [Manual do JS (MDN) - Introduzindo a Orientação a Objetos](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Introduction_to_Object-Oriented_JavaScript)



Exemplo - classe triangulo
---

Abaixo temos o esqueleto de um objeto em JS (repare que trocamos o termo classe por objeto).

    var objeto = {}

As propriedades e métodos são separados pela vírgula:

Dentro dos métodos, as variáveis, ou melhor, as propriedades são referenciadas pela palavra chave `this`:

O código abaixo representa um triângulo e possui apenas um método: `validarForma()`.

```javascript
var Triangulo = {
    a: 0,
    b: 0,
    c: 0,
    validarForma: function() {
        if (this.a < (this.b + this.c)) {
            if (this.b < (this.a + this.c)) {
                if (this.c < (this.a + this.b)) {
                    return true;
                }
            }
        }
        return false;
    }
};
```






