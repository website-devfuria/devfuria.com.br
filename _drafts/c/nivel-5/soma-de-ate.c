// to calculate sum of numbers 1 to N using recursion

// recursividade
#include<stdio.h>
#include<conio.h>
int add(int);
//-------------------------------------

void main() {
    int i, num;
    int sum;
    clrscr();
    printf("Input a number : ");
    scanf("%d", &num);
    sum = add(num);
    printf("nSum of Number From 1 to %d :%d", num, sum);
}
//---------------------------------------

int add(int m) {
    int sum;
    if (m == 1)
        return (1);
    else
        sum = m + add(m - 1);
    return (sum);
}
/*
Output:

Input a number : 5
        Sum of Number From 1 to 5 : 15
 */

