---
title:       O objeto window e  o espaço global em Javascript!
description: Referência prática do objeto global - JavaScript
menu:        javascript-refs
---

O objeto `window` é o principal objeto de Javascript, é nele onde as coisas começam... principalmente a 
__"poluição do espaço global"__

Mas para entender esse negócio de espaço global precisamos entender tanto o __objeto global__ como o __objeto window__.

Este artigo é 90% baseado no livro __"JavaScript: O guia definitivo" de David Flanegan__. Os 10% de minha contribuição são (além dessas palavras introdutórias) o trabalho de compilar o assunto (que está todo fragmentado no livro, obviamente, pois trata-se de um guia) e o exemplo final de como poluir o espaço global.

Obrigado David Flanagan!!!



O objeto global
---

> O __objeto global__ é um objeto normal de Javascript que tem um objetivo muito importante: as propriedades desse
> objeto são os símbolos definidos globalmente que estão disponíveis para um programa Javascript. Quando o interpretador
> Javascript começa (ou quando um navegador Web carrega uma nova página), ele cria um novo objeto global e dá a ele um 
> conjunto inicial de propriedades que define:
> 
> - propriedades globais, como `undefined`, `Infinity`, `NaN` e etc..
> - funções globais, como `isNaN()`, `parseInt()` e etc...
> - funções construtoras, como `Date()`, `RegExp()`, `String()`, `Object()`, `Array()` e etc...
> - objetos globais, como `Math`, `JSON` e etc..
> 
> O objeto global é um objeto predefinido que serve como espaço reservado para as propriedades e funções globais de Javascript.
> Todos os outros objetos, funções e propriedades são acessíveis por intermédio do objeto global. __O objeto global não é uma
> propriedade de nenhum outro objeto; portanto, não tem nome. O título desta referência foi escolhido simplesmente por
> conveniência organizacional e não indica que o objeto se chama "Global"__. Em código Javascript de nível superior, você 
> pode se referir ao objeto global com a palavra-chave `this`.
> 
> O objeto global é simplesmente um objeto e não uma classe. Não existe uma construtora Global() e não há como instanciar
> um novo objeto global.
> 
> Quando o Javascript é incorporada em um ambiente específico, o objeto global normalmente recebe propriedades adicionais
> especiais desse ambiente. Na verdade, o tipo do objeto global não é especificado pelo padrão ECMAScript e...
> 
> Em Javascript do lado do cliente, o objeto global é um objeto `window` e representa a janela do navegador Web dentro da
> qual o código Javascript está sendo executado.
> 
> Fonte: David Flanagan em seu livro "JavaScript: O guia definitivo"




O objeto window
---

> O __objeto Window__ é o principal ponto de entrada para todos os recursos e APIs de Javascript do lado do cliente. Ele
> representa uma janela ou quadro de navegador Web e pode ser referenciado através do identificador `window`. Em Javascript
> do lado do cliente, o objeto Window também é o objeto Global. Isso significa que o objeto Window está no topo do encadeamento
> de escopo e que suas propriedades e métodos são efetivamente variáveis globais e funções globais.
> 
> O objeto Window representa uma janela, guia ou quadro do navegador.
> 
> Fonte: David Flanagan em seu livro "JavaScript: O guia definitivo"

![Figura window object](window-object.png "O objeto window está no topo do encadeamento!")

[Fonte da imagem](http://www.cs.ucc.ie/~gavin/javascript/05_JS4.html "link-externo")


O objeto window referencia propriedades impportantes, tal como `document` que representa o conteúdo (documento) exibido
na tela. Referencia a propriedade `location` que se refere ao objeto __Location__ especificando o URL atualmente exibido na
janela e permite que um script carregue um novo URL na janela (redirecionamentos). (Flanagan)

O objeto window também referencia outro objeto muito utilizado que é o `screen`, com ele podemos acessar propriedades 
com informações sobre a tela:

- `screen.top`
- `screen.left`
- `screen.height`
- `screen.width`


O objeto window possui o `handler onload`, um dos mais importantes mecanismo de tratamento de evento. Ele é disparado 
quando o conteúdo do documento exibido na janela está estável e pronto para ser manipulado. (Flanagan)

```javascript
window.onload = function() {
    //código executado após carregamento da página
}
```



Poluindo o espaço global (no caso o window)
---

Há diversas formas de poluir o espaço global: utilzar variáveis sem a palavra `var`, criar funções sem utilizar-se de um
"objeto container" e etc..

Para entender melhor o que é poluir o espaço global, olhe para o código abaixo:


```javascript
// Criamos uma variável gobal
suasVariaveis = 123;

// Agora ela faz parte do objeto window e
// está poluindo o escopo global(window)
console.log(window.suasVariaveis); // 123
```

Por isso que vários autores de Javascript pregam a utilização de um "objeto container", exemplo:

```javascript
// Criando o objeto
objContainer = {}

// Ele também polui o espaço global...
console.log(window.objContainer); // Object { }

// ...mas sua variáveis (propriedades) não poluem,
// pois estão contidas dentro do objeto
objContainer.outraVariavel = 456;

// Prova:
console.log(window.outraVariavel); // undefined
console.log(window.objContainer.outraVariavel); // 456
```





