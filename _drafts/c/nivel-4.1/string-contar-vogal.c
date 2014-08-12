// http://www.ime.usp.br/~pf/algoritmos/aulas/string.html
int contaVogais( char s[]) {
   int numVogais, i;
   char *vogais;
   vogais = "aeiouAEIOU";
   numVogais = 0;
   for (i = 0; s[i] != '\0'; ++i) {
      char ch; 
      int j;
      ch = s[i]; 
      for (j = 0; vogais[j] != '\0'; ++j) {
         if (vogais[j] == ch) {
            numVogais += 1;
            break;
         }
      }
   }
   return numVogais;
}