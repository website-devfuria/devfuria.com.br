// recursivo
#include<stdio.h>
int rem, sum;

int calsum(int n) {
    if (n != 0) {
        rem = n % 10;
        sum = sum + rem;
        calsum(n / 10);
    }
    return sum;
}