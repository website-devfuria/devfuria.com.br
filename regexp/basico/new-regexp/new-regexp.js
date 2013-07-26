var string = "Casa com a palavra exemplo",
    regexp = "exemplo",    
    pattern,
    resultado;


// Executa nossa expressão
pattern = new RegExp(regexp);
resultado = pattern.test(string);
console.log(pattern, resultado);


// Executa nossa expressão
pattern = new RegExp(regexp);
resultado = pattern.exec(string);
console.log(pattern, resultado);


// Executa nossa expressão
pattern = new RegExp(regexp);
resultado = string.match(pattern);
console.log(pattern, resultado);