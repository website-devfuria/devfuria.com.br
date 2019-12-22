---
title:       Shoudjs
description: Pequena referência ao framework de asserção Shouldjs
capitulo:    "node-unit-tests"
ordem:       5
---

O __Shouldjs__ é um framework de asserção para testes unitários (framework-agnostic assertion library), quer dizer, não
é um framework de teste e sim de asserção. Sozinho ele não terá muita utilidade, mas aliando a um framwwork de teste,
como por exemplo o [Mocha](/node.js/mocha-teste-seu-javascript/), ele se torna um grande aliado para a 
escrita de testes.


Podemos instalar ele através do __npm__:

    $ npm install should --save-dev

Experimentando pelo terminal...

    $ node
    var should = require('should');
    (5).should.be.exactly(5).and.be.a.Number;


Asserções
---

Booleanas...

    true.should.be.ok;
    false.should.not.be.ok;
    true.should.be.true;
    '1'.should.not.be.true;
    false.should.be.false;
    ''.should.not.be.false;


Arrays...

    [].should.be.empty;
    [1,2,3].should.eql([1,2,3]);
    [1, 2, 3].should.have.length(3);
    [1,2,3].should.containEql(1);
    [].should.be.an.instanceOf(Array); 


Strings...

    ''.should.be.empty;
    'foobar'.should.endWith('bar');
    'foobar'.should.not.endWith('foo');
    'test'.should.equal('test');


Números...

    (4).should.equal(4);
    (10).should.be.above(5);
    (15).should.be.within(10, 15);
    (10).should.not.be.below(5);


Undefined e Infinity...

    (undefined + 0).should.be.NaN;
    (1/0).should.be.Infinity;


Testando JSON...

    ({ foo: 'bar' }).should.eql({ foo: 'bar' });
    ({}).should.be.an.Object;
    var jsonVar = {a:1, b:2}; 
    jsonVar.should.have.property('a');
    var obj = { foo: 'bar', baz: 'raz' }; 
    (obj).should.containEql({ foo: 'bar', baz: 'raz' });
    obj.should.have.keys('foo', 'baz');
    obj.should.have.keys(['foo', 'baz']);


Site Oficial:
---

- [shouldjs.github.io](http://shouldjs.github.io/)
- [github.com/shouldjs/should.js](https://github.com/shouldjs/should.js)
- [npmjs.com/package/should](https://www.npmjs.com/package/should)
