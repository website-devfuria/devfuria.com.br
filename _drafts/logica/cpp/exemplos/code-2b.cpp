// g++ foo.cpp -o executavel.run
#include <iostream>
//using namespace std;

class Rectangle {
    int width, height;
public:
    Rectangle (int,int);
    void setValues(int, int);
    
    int area() {
        return width * height;
    }
};

Rectangle::Rectangle(int a, int b) {
    width = a;
    height = b;
}

void Rectangle::setValues(int x, int y) {
    width = x;
    height = y;
}

int main() {
    Rectangle rect(3, 4);
    rect.setValues(3, 4);
    cout << "area: " << rect.area();
    return 0;
}