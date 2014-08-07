

#include <stdio.h>
 
int main()
{
  int c, n, fact = 1;
 
  printf("Enter a number to calculate it's factorial\n");
  scanf("%d", &n);
 
  for (c = 1; c <= n; c++)
    fact = fact * c;
 
  printf("Factorial of %d = %d\n", n, fact);
 
  return 0;
}



#include <stdio.h>
 
long factorial(int);
 
int main()
{
  int number;
  long fact = 1;
 
  printf("Enter a number to calculate it's factorial\n");
  scanf("%d", &number);
 
  printf("%d! = %ld\n", number, factorial(number));
 
  return 0;
}
 
long factorial(int n)
{
  int c;
  long result = 1;
 
  for (c = 1; c <= n; c++)
    result = result * c;
 
  return result;
}



#include<stdio.h>
 
long factorial(int);
 
int main()
{
  int n;
  long f;
 
  printf("Enter an integer to find factorial\n");
  scanf("%d", &n); 
 
  if (n < 0)
    printf("Negative integers are not allowed.\n");
  else
  {
    f = factorial(n);
    printf("%d! = %ld\n", n, f);
  }
 
  return 0;
}
 
long factorial(int n)
{
  if (n == 0)
    return 1;
  else
    return(n * factorial(n-1));
}