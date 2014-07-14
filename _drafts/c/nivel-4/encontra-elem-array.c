#include<stdio.h>
#include<conio.h>

void main() {
    int a[30], x, n, i;
    /*
     a - for storing of data
     x - element to be searched
     n - no of elements in the array
     i - scanning of the array
     */
    printf("nEnter no of elements :");
    scanf("%d", &n);
    /* Reading values into Array */

    printf("nEnter the values :");
    for (i = 0; i < n; i++)
        scanf("%d", &a[i]);

    /* read the element to be searched */

    printf("nEnter the elements to be searched");
    scanf("%d", &x);

    /* search the element */

    i = 0; /* search starts from the zeroth location */
    while (i < n && x != a[i])
        i++;

    /* search until the element is not found i.e. x!=a[i]
    search until the element could still be found i.e. i 〈 n */

    if (i < n) /* Element is found */
        printf("found at the location =%d", i + 1);
    else
        printf("n not found");

    getch();
}