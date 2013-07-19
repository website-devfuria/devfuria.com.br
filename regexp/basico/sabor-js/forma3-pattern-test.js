var string = "casa, castanha, carpinteiro, cana de açucar, cama, casar, cavalo.",
    pattern,
    resultado;

// Executa nossa expressão
pattern = new RegExp("ca.a");
resultado = pattern.test(string);

if (resultado) {
    console.log("casou", resultado);
} else {
    console.log("não casou", resultado);
}