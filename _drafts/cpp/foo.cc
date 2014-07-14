// g++ foo.cpp -o executavel.run
#include <iostream>
#include <assert.h>

class Area {
public:
    int lado1, lado2, lado3;
    
    int quadrada() {
        return lado1 * lado2;
    }
    int cubica() {
        return lado1 * lado2 * lado3;
    }
};

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

int main() {
    testAreaQuadrada();
    testAreaCubica();
    return 0;
}