var string = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.",
    pattern = /ca.a/,
    resultado;

// Executa nossa expressão
resultado = pattern.test(string);

if (resultado) {
    console.log("casou", resultado);
} else {
    console.log("não casou", resultado);
}