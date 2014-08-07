#include <iostream>

using namespace std;

class Box {
public:
    double length;
    double breadth;
    double height;
    double volume;
};

int main() {
    Box box1;

    box1.height  = 5.0;
    box1.length  = 6.0;
    box1.breadth = 7.0;
    
    // computing volume
    box1.volume = box1.height * box1.length * box1.breadth;
    
    // see volume
    cout << "Volume of box1 : " << box1.volume << endl;

    return 0;
}