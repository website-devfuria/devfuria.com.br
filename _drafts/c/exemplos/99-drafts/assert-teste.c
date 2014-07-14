#include <stdio.h>
#include <assert.h>
 
int test_assert ( int x )
{
   assert( x <= 4 );
   return x;
}
 
int main ( void ) 
{
  int i;
 
    for (i=0; i<=9; i++){
        test_assert( i );
        printf("i = %d\n", i);
    }
 
  return 0;
}
