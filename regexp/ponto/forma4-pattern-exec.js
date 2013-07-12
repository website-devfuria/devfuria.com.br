var string = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.",
    pattern = /ca.a/g,
    resultado;

// Executa nossa expressão
var i = 0;
while(resultado = pattern.exec(string)){
    console.log("casou", resultado);
}