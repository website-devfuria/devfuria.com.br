#include <iostream>
#include <assert.h>
using namespace std;

class Calc {
public:
    int antecessor(int num) {
        return num - 1;
    }
    int sucessor(int num) {
        return num + 1;
    }
};

void testAntecessor() {
    Calc c;
    assert(9 == c.antecessor(10));
}
void testSucessor() {
    Calc c;
    assert(11 == c.sucessor(10));
}

int main() {
    testAntecessor();
    testSucessor();
    return 0;
}

