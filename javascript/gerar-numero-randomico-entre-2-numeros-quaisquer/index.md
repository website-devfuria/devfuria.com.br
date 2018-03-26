---
title:       Um número randômico entre 2 números quaisquer
description: Aprenda com este artigo a criar uma função para gerar um número randômico entre 2 números quaisquer
capitulo:    "js-random"
ordem:       2
---

Este artigo ensina passo a passo como criar uma função em JavaScript que retorna um número aleatório entre 2 números quaisquer.

Se estava procurando apenas pela função (pronta para uso) acesse o este artigo
[função para gerar número randômico](/javascript/funcao-gerar-aleatorios-entre-2-numeros/ "Função para gerar um número randômico entre 2 números quaisquer").

Vamos imaginar que queiramos gerar números aleatórios entre 3 e 5 (range 3, 4 e 5).

Para gerarmos números aleatórios inteiros, devemos utilizar a função `Math.floor` que arredonda para baixo o ponto flutuante.

```javascript
Math.floor(Math.random());
```


O código acima gera sempre o valor 0, então para obter números aleatórios até o limite máximo de 5, por exemplo, devemos
multiplicar pelo número desejado (no caso 5).

```javascript
Math.floor(Math.random() * 5);
```


O código acima irá gerar 0, 1, 2, 3 e 4

Para incluir o número 5 (nosso limite maximo) nos resultados precisamos somar com 1.

```javascript
Math.floor(Math.random() * (5 + 1));
```


O código acima irá gerar 0, 1, 2, 3, 4 e 5

Agora podemos estabelecer um limite mínimo, por exemplo, 3.

Então precisaremos somar 3 no resultado final (cuidado! eu disse somar no resultado final).

```javascript
Math.floor(Math.random() * (5 + 1) + 3);
```


O código acima irá gerar 3, 4, 5, 6, 7 e 8

Conseguimos um limite mínimo (3), mas estoramos o limite máximo (5). Podemos resolver isso subtraindo o valor mínimo (3)
do valor máximo (5).

```javascript
Math.floor(Math.random() * (5 - 3 + 1) + 3);
```


O código acima irá gerar 3, 4 e 5

Mas queremos transformar isso em uma função reutilizá-vel, então podemos substituir o valor 5 pela variável `max` e o 
valor 3 pela variável `min`.

```javascript
Math.floor(Math.random() * (max - min + 1) + min);
```


Agora é só criar a função...

```javascript
function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
```

- - -
Fonte: [MDN - Math.random()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Math/random "link-externo")