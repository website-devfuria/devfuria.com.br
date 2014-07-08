#include<stdio.h>
#include<conio.h>

main() {
    int a[20], i, j, k, n;
    clrscr();

    printf("nEnter array size : ");
    scanf("%d", &n);

    printf("nAccept Numbers : ", n);
    for (i = 0; i < n; i++)
        scanf("%d", &a[i]);

    clrscr();

    printf("nOriginal array is : ");
    for (i = 0; i < n; i++)
        printf(" %d", a[i]);

    printf("nUpdated array is  : ");
    for (i = 0; i < n; i++) {
        for (j = i + 1; j < n;) {
            if (a[j] == a[i]) {
                for (k = j; k < n; k++)
                    a[k] = a[k + 1];
                n--;
            } else
                j++;
        }
    }

    for (i = 0; i < n; i++)
        printf("%d ", a[i]);
    getch();
}
