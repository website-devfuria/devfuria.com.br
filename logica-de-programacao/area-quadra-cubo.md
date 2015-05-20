---
layout:      grid93-article
title:       Área quadrada e área cúbica "
description: Exercício de lógica de programação resolvido cujo objetivo é, com o auxílio de classes, encontrar a área quadra e cúbica.
menu:        logica-exercicios
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Seu objetivo é construir uma classe denominada `Area` que calcule tanto a área quadrada (primeiro método) como a
área cúbica (segundo método).

Utilize programação orientada a objetos.



Linguagem C++
---

```c
#include <iostream>
#include <assert.h>

//
// Classe Area
//
class Area {
    //
    // seu código
    //
};

//
// Testes unitários...
//
void testAreaQuadrada() {
    Area area;
    
    area.lado1 = 3;
    area.lado2 = 9;
    assert(27 == area.quadrada());
}

void testAreaCubica() {
    Area area;
    
    area.lado1 = 3;
    area.lado2 = 6;
    area.lado3 = 2;
    assert(36 == area.cubica());
}
// .. fim dos testes

//
// Início do programa
//
int main() {
    testAreaQuadrada();
    testAreaCubica();
    return 0;
}
```

### Solução na linguagem C++

```c
#include <iostream>
#include <assert.h>

//
// Classe Area
//
class Area {
public:
    int lado1, lado2, lado3;

    // retorna a área quadrada
    int quadrada() {
        return lado1 * lado2;
    }

    // retorna a área cúbica
    int cubica() {
        return lado1 * lado2 * lado3;
    }
};

//
// Testes unitários...
//
void testAreaQuadrada() {
    Area area;
    
    area.lado1 = 3;
    area.lado2 = 9;
    assert(27 == area.quadrada());
}

void testAreaCubica() {
    Area area;
    
    area.lado1 = 3;
    area.lado2 = 6;
    area.lado3 = 2;
    assert(36 == area.cubica());
}
// .. fim dos testes

//
// Início do programa
//
int main() {
    testAreaQuadrada();
    testAreaCubica();
    return 0;
}
```




Linguagem Python
---

Abaixo nosso código inicial escrito em Python, utilize ele para resolver o problema.

```python
# -*- coding: utf-8 -*-

#
# Classe
#
class Area(object):
    def quadrada(self):
        pass

    def cubica(self):
        pass

#
# Testes
#
area = Area()

# testando a área quadrada
area.lado1 = 3
area.lado2 = 9    
assert 27 == area.quadrada()

# testando a área cúbica
area.lado1 = 3
area.lado2 = 6    
area.lado3 = 2    
assert 36 == area.cubica()
```


### Solução na linguagem Python

```python
#
# Classe
#
class Area(object):
    def quadrada(self):
        return self.lado1 * self.lado2

    def cubica(self):
        return self.lado1 * self.lado2 * self.lado3
```




Linguagem JavaScript
---

Em JavaScript, até especificação ECMAscript 5, não temos classe. Mas as funções podem representar uma classe e mais uma
vez (já fizemos isso no exercício anterior) iremos utilizar uma função como classe.

```javascript
var assert = require('assert');

//
// Classe
//
function Area(){

    //
    // Método
    //
    this.quadrada = function(){
        
        // sua lógica

    }

    //
    // Método
    //
    this.cubica = function(){
        
        // sua lógica

    }

};

try {

    var area = new Area();

    // testando a área quadrada
    area.lado1 = 3;
    area.lado2 = 9;    
    assert.equal(27, area.quadrada());

    // testando a área cúbica
    area.lado1 = 3;
    area.lado2 = 6;    
    area.lado3 = 2;    
    assert.equal(36, area.cubica());

} catch(e) {
    console.log(e);
}
```


### Solução na linguagem JavaScript

```javascript
function Area(){
    this.quadrada = function(){
        return this.lado1 * this.lado2;
    }
    this.cubica = function(){
        return this.lado1 * this.lado2 * this.lado3;
    }
};
```

{% include /menus/logica-feedback.html %}