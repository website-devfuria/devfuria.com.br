#include<stdio.h>

int main() {
    int num, i, count = 0;
    
    printf("nEnter a number:");
    scanf("%d", &num);
    
    for (i = 2; i <= num / 2; i++) {
        if (num % i == 0) {
            count++;
            break;
        }
    }
    
    if (count == 0)
        printf("%d is a prime number", num);
    else
        printf("%d is not a prime number", num);
    return 0;
    
}






#include<stdio.h>
 
int check_prime(int);
 
main()
{
   int n, result;
 
   printf("Enter an integer to check whether it is prime or not.\n");
   scanf("%d",&n);
 
   result = check_prime(n);
 
   if ( result == 1 )
      printf("%d is prime.\n", n);
   else
      printf("%d is not prime.\n", n);
 
   return 0;
}
 
int check_prime(int a)
{
   int c;
 
   for ( c = 2 ; c <= a - 1 ; c++ )
   { 
      if ( a%c == 0 )
	 return 0;
   }
   if ( c == a )
      return 1;
}