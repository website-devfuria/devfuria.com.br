function calcFactorial(factorialNumber)
{
   var factorialResult = 1;
   for (; factorialNumber > 0; factorialNumber--)
   {
      factorialResult = factorialResult * factorialNumber;
   }

   return factorialResult;
}