// g++ foo.cpp -o executavel.run
#include <iostream>
#include <assert.h>
using namespace std;

class Calc {
public:
    int dobro(int num) {
        return num * 2;
    }
};

void testDobro() {
    Calc c;
    assert(10 == c.dobro(5));
}

int main() {
    testDobro();
    return 0;
}

