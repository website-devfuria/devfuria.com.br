// Dados 3 valores quaisquer (a, b e c) representando as medidas dos lados de um triângulo,
// faça um algorítimo para descobrir se formam ou não um triângulo.
// Saiba que para formar um triângulo, o valor de cada lado deve ser menor que a soma dos outros 2 lados

#include <iostream>
#include <assert.h>
using namespace std;

class Triangulo {
public:
    int a, b, c;

    bool ehTriangulo() {
        if (a < (b + c)) {
            if (b < (a + c)) {
                if (c < (a + b)) {
                    return true;
                }
            }
        }
    }
};

void testEhTriangulo() {

    Triangulo tri;
    tri.a = 3;
    tri.b = 4;
    tri.c = 5;
    assert(tri.ehTriangulo());
}

int main() {
    testEhTriangulo();
    return 0;
}