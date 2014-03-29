document.getElementById("btnCarregar").onclick = function() {
    var comboPais = document.getElementById("cboPais"),
            opt0 = document.createElement("option"),
            opt1 = document.createElement("option"),
            opt2 = document.createElement("option"),
            opt3 = document.createElement("option");

    opt0.value = "0";
    opt0.text = "";

    opt1.value = "scs";
    opt1.text = "São Caetano do Sul";

    opt2.value = "sa";
    opt2.text = "Santo André";

    opt3.value = "sbc";
    opt3.text = "São Bernardo do Campo";

    comboPais.add(opt0, comboPais.options[0]);
    comboPais.add(opt1, comboPais.options[1]);
    comboPais.add(opt2, comboPais.options[2]);
    comboPais.add(opt3, comboPais.options[3]);
};
document.getElementById("btnInfo").onclick = function() {
    var comboPais = document.getElementById("cboPais");
    console.log("O indice é: " + comboPais.selectedIndex);
    console.log("O texto é: " + comboPais.options[comboPais.selectedIndex].text);
    console.log("A chave é: " + comboPais.options[comboPais.selectedIndex].value);
};
document.getElementById("btnAleatoriamente").onclick = function() {
    var comboPais = document.getElementById("cboPais");
    comboPais.selectedIndex = Math.floor(Math.random() * comboPais.length);
};
document.getElementById("btnRemoverItem").onclick = function() {
    var comboPais = document.getElementById("cboPais");
    comboPais.remove(0);
};
document.getElementById("btnRemoverTodos").onclick = function() {
    var comboPais = document.getElementById("cboPais");
    while (comboPais.length) {
        comboPais.remove(0);
    }
//    var comboPais = document.getElementById("cboPais");
//    for (i = 0; i < comboPais.length; i = i + 1) {
//        comboPais.remove(0);
//    }
};