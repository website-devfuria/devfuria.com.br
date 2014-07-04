#include <iostream>
using namespace std;

class Rectangle {
    int width, height;
public:
    void setValues(int, int);

    int area() {
        return width * height;
    }
};

void Rectangle::setValues(int x, int y) {
    width = x;
    height = y;
}

int main() {
    Rectangle rect;
    rect.setValues(3, 4);
    cout << "area: " << rect.area();
    return 0;
}