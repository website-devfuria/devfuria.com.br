#include <iostream>
#include <assert.h>
using namespace std;

class Juros {
public:
    float capital, taxa;
    int periodo;

    // J = c . i . n
    int simples() {
        return capital * taxa * periodo;
    }
};

void testJurosSimples() {

    Juros juros;

    juros.capital = 16000;
    juros.taxa = 0.04;
    juros.periodo = 4;

    assert(2560 == juros.simples());
}

int main() {
    testJurosSimples();
    return 0;
}