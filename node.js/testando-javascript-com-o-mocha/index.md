---
title:       Testando JavaScript com o Mocha
description: Aprenda neste artigo como testar JavaScript com o Mocha
capitulo:    "node-unit-tests"
ordem:       3
---

O [Mocha](http://mochajs.org/) é um framework de testes unitários simples e bastante prático.

Você poderá testar ele no lado do servidor com o __Node__ ou no lado do cliente, em seu navegador.



Instalando o Mocha
---

Para instalar o __Mocha__ é preciso ter o [Node.js](/node.js/) instalado, se for o caso leia o artigo
["Como instalar o Node"](/linux/instalando-nodejs/)  na seção __Linux - Cookbook__.

Você também precisará [instalar o NPM](/linux/instalando-npm/).

Tendo o __Node__ e o __NPM__ instalados, execute no terminal o comando abaixo.

    npm install -g mocha


Para testar a instalação, simplesmente execute no terminal `mocha -V`, este comando irá mostrar a versão instalada,
a minha foi `2.0.1`.



Primeiro exemplo com o Mocha
---


Imaginando que sua aplicação está na pasta `foo/` e que ela já existe, vamos até sua pasta.

    cd /foo

Por padrão, o __Mocha__ irá buscar os testes na pasta `/test`, então vamos criar a pasta em nosso projeto.

    mkdir test

Nossa estrutura (imaginária) ficou assim...

    /foo                // pasta raíz de seu projeto
        /test           // pasta no qual o Mocha vai procurar executar os testes
            test1.js
            test2.js    // seus testes
            test3.js
        program1.js
        program2.js     // seus scripts
        program3.js

Crie um arquivo __JavaScript__ com um nome qualquer (eu utilizei `primeiro-teste.js`) e insira o conteúdo abaixo.

Obviamente, salve o arquivo dentro da pasta `test`, ficará assim `/foo/test/primeiro-teste.js` .

```javascript
var assert = require('assert');
 
describe('Alguns testes de exemplo', function(){

    it('2 + 2 deve ser igual a 4', function(){
        assert.equal(4, 2 + 2);
    });

    it('2 * 2 deve ser igual a 8 (nota 0 em matemática)', function(){
        assert.equal(8, 2 * 2);
    });

}); 
```

No terminal, tenha a certeza de estar na pasta `/foo`, digite `pwd` para descobrir.

    pwd
    /home/voce/projetos/foo

Execute o __Mocha__...

    mocha

Sua tela deve ser parecida com a minha:

    Alguns testes de exemplo
      ✓ 2 + 2 deve ser igual a 4 
      1) 2 * 2 deve ser igual a 8 (nota 0 em matemática)


    1 passing (7ms)
    1 failing

    1) Alguns testes de exemplo 2 * 2 deve ser igual a 8 (nota 0 em matemática):
       AssertionError: 8 == 4
        at Context.<anonymous> (/home/flavio/projetos/foo/test/primeiro-teste.js:9:11)
        at callFn (/home/flavio/.nvm/v0.10.29/lib/node_modules/mocha/lib/runnable.js:250:21)
        at Test.Runnable.run (/home/flavio/.nvm/v0.10.29/lib/node_modules/mocha/lib/runnable.js:243:7)
        at Runner.runTest (/home/flavio/.nvm/v0.10.29/lib/node_modules/mocha/lib/runner.js:373:10)
        at /home/flavio/.nvm/v0.10.29/lib/node_modules/mocha/lib/runner.js:451:12
        at next (/home/flavio/.nvm/v0.10.29/lib/node_modules/mocha/lib/runner.js:298:14)
        at /home/flavio/.nvm/v0.10.29/lib/node_modules/mocha/lib/runner.js:308:7
        at next (/home/flavio/.nvm/v0.10.29/lib/node_modules/mocha/lib/runner.js:246:23)
        at Object._onImmediate (/home/flavio/.nvm/v0.10.29/lib/node_modules/mocha/lib/runner.js:275:5)
        at processImmediate [as _immediateCallback] (timers.js:336:15)

- - -
Fonte: -[www.marcioalthmann.net](http://www.marcioalthmann.net/2014/01/tdd-e-node-js-introducao-ao-mocha/)



Segundo exemplo com o Mocha
---

Este exemplo é o mesmo apresentado na documentação.

```javascript
var assert = require("assert")

describe('Array', function(){

  describe('#indexOf()', function(){

    it('should return -1 when the value is not present', function(){
      assert.equal(-1, [1,2,3].indexOf(5));
      assert.equal(-1, [1,2,3].indexOf(0));
    })

  })

})
```



Mocha no navegador
---

Para rodar o __Mocha__ no navegador você precisará referenciar a biblioteca __Chai__ além da própria __Mocha__.

Para tal, eu utilizei o recurso CDN, veja onde conseguir os links CDN.

- [CDN mocha](http://pt.cdnjs.com/libraries/mocha#)
- [CDN chai](http://pt.cdnjs.com/libraries/chai)

O exemplo abaixo pode ser considerado como "template".

```javascript
mocha.setup('bdd')
expect = chai.expect

/**
 * Aqui devem entrar seus testes!
 */

mocha.run();
```


Abaixo veja um exemplo completo. Se preferir, pode rodar a [demo](http://mochajs.org/example/tests.html).


```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Mocha</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/mocha/2.0.1/mocha.css">
  </head>
  <body>

    <div id="mocha"></div>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/mocha/2.0.1/mocha.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/chai/1.10.0/chai.js"></script>

    <script>
    mocha.setup('bdd')
    expect = chai.expect

      /**
       * Estes são os seus testes!
       *
       * eles devem estar em um arquivo separado,
       * eu coloquei aqui para facilitar as coisas.
       */
       describe('Array', function(){
        describe('.push()', function(){
          it('should append a value', function(){
            var arr = [];
            arr.push('foo');
            arr.push('bar');
            expect(arr[0]).to.equal('foo');
            expect(arr[1]).to.equal('bar');
          })

          it('should return the length', function(){
            var arr = [];
            var n = arr.push('foo');
            expect(n).to.equal(1);
            var n = arr.push('bar');
            expect(n).to.equal(2);
          })

          describe('with many arguments', function(){
            it('should add the values', function(){
              var arr = [];
              arr.push('foo', 'bar');
              expect(arr[0]).to.equal('foo');
              expect(arr[1]).to.equal('bar');
            })
          })
        })

        describe('.unshift()', function(){
          it('should prepend a value', function(){
            var arr = [1,2,3];
            arr.unshift('foo');
            expect(arr[0]).to.equal('foo');
            expect(arr[1]).to.equal(1);
          })

          it('should return the length', function(){
            var arr = [];
            var n = arr.unshift('foo');
            expect(n).to.equal(1);
            var n = arr.unshift('bar');
            expect(n).to.equal(2);
          })

          describe('with many arguments', function(){
            it('should add the values', function(){
              var arr = [];
              arr.unshift('foo', 'bar');
              expect(arr[0]).to.equal('foo');
              expect(arr[1]).to.equal('bar');
            })
          })
        })

        describe('.pop()', function(){
          it('should remove and return the last value', function(){
            var arr = [1,2,3];
            expect(arr.pop()).to.equal(3);
            expect(arr.pop()).to.equal(2);
            expect(arr).to.have.length(1);
          })
        })

        describe('.shift()', function(){
          it('should remove and return the first value', function(){
            var arr = [1,2,3];
            expect(arr.shift()).to.equal(1);
            expect(arr.shift()).to.equal(2);
            expect(arr).to.have.length(1);
          })
        })
      })
      /** aqui terminam os seus testes */

      mocha.run();
    </script>
  </body>
</html>
```





Asserções
---

O __Mocha__ permite utilizar um dos frameworks de asserção listados abaixo.

- [Should.js](https://github.com/visionmedia/should.js)
- [Expect.js](https://github.com/LearnBoost/expect.js)
- [Chai.js](http://chaijs.com/)
- [Better-Assert.js](https://github.com/visionmedia/better-assert)

Isso é bom pois permite flexibilidade.

Por outro lado, é ruim porque você terá que aprender pelo menos um desses frameworks além do __Mocha__.



Projetos (de exemplo) testados com Mocha
---

O projeto que me chamou atenção por ser simples foi o [Numeral.js](http://numeraljs.com/), veja o projeto
do [Numerals.js no GitHUb](https://github.com/adamwdraper/Numeral-js).

Abaixo, vemos outros exemplos que constam na documentação.

- [Express](https://github.com/visionmedia/express/tree/master/test)
- [Connect](https://github.com/senchalabs/connect/tree/master/test)
- [SuperAgent](https://github.com/visionmedia/superagent/tree/master/test/node)
- [WebSocket.io](https://github.com/LearnBoost/websocket.io/tree/master/test)
- [O próprio Mocha](https://github.com/mochajs/mocha/tree/master/test)


Onde buscar mais informações
---

- [Mocha Wiki](https://github.com/mochajs/mocha/wiki)
- [Google Group](http://groups.google.com/group/mochajs)

- - -
Site oficial [http://mochajs.org](http://mochajs.org/)