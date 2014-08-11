//http://pontov.com.br/site/index.php/cpp/46-conceitos-basicos/83-strings-em-c
#include <stdio.h>
 
int contaChar(const char *str)
{
    int i = 0;
 
    for(;str[i] != 0; ++i);
 
    return i;
}
 
int main(int, char **)
{
    char ola[] = "ola";
 
    printf("A string %s possui %d caracteres\n", ola, contaChar(ola));
 
    return 0;
}