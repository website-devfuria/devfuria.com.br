---
layout:      grid93-article
title:       Área quadrada e área cúbica "
description: Exercício de lógica de programação resolvido cujo objetivo é, com o auxílio de classes, encontrar a área quadra e cúbica.
menu:        logica-exerc-oop-00
---

{% include /menus/logica-paraquedas.html %}

Exercício de lógica de programação
---

Seu objetivo é construir uma classe denominada `Area` que calcule tanto a área quadrada (primeiro método) como a
área cúbica (segundo método).



Linguagem C
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
// Início od programa
//
int main() {
    testAreaQuadrada();
    testAreaCubica();
    return 0;
}
```

### Solução na linguagem C

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
// Início od programa
//
int main() {
    testAreaQuadrada();
    testAreaCubica();
    return 0;
}
```

