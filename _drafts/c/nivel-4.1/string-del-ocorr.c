#include<stdio.h>
#include<conio.h>
#include<string.h>

void del(char str[], char ch);

void main() {
    char str[10];
    char ch;
    clrscr();
    printf("nEnter the string : ");
    gets(str);
    printf("nEnter character which you want to delete : ");
    scanf("%ch", &ch);
    del(str, ch);
    getch();
}

void del(char str[], char ch) {
    int i, j = 0;
    int size;
    char ch1;
    char str1[10];

    size = strlen(str);

    for (i = 0; i < size; i++) {
        if (str[i] != ch) {
            ch1 = str[i];
            str1[j] = ch1;
            j++;
        }
    }
    str1[j] = '';

    printf("ncorrected string is : %s", str1);
}
