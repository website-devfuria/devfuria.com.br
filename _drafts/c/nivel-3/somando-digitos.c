//
// http://www.programmingsimplified.com/c/program/c-program-add-number-digits
#include <stdio.h>

int main() {
    int n, sum = 0, remainder;

    printf("Enter an integer\n");
    scanf("%d", &n);

    while (n != 0) {
        remainder = n % 10;
        sum = sum + remainder;
        n = n / 10;
    }

    printf("Sum of digits of entered number = %d\n", sum);

    return 0;
}

#include<stdio.h>

void main() {
    int number = 12354;
    int sum = 0;
    for (; number > 0; sum += number % 10, number /= 10);
    printf("nSum of the Digits : %d", sum);
}// output 15