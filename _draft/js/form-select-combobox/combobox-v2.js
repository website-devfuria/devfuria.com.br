var myApp = {
    comboPais: document.getElementById("cboPais"),
    btnCarregar: document.getElementById("btnCarregar"),
    btnInfo: document.getElementById("btnInfo"),
    btnAleatoriamente: document.getElementById("btnAleatoriamente"),
    btnRemoverItem: document.getElementById("btnRemoverItem"),
    btnRemoverTodos: document.getElementById("btnRemoverTodos"),
    init: function() {
        var me = this;

        this.btnCarregar.onclick = function() {
            var opt0 = document.createElement("option"),
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

            me.comboPais.add(opt0, me.comboPais.options[0]);
            me.comboPais.add(opt1, me.comboPais.options[1]);
            me.comboPais.add(opt2, me.comboPais.options[2]);
            me.comboPais.add(opt3, me.comboPais.options[3]);
        };
        this.btnInfo.onclick = function() {
            console.log("O indice é: " + me.comboPais.selectedIndex);
            console.log("O texto é: " + me.comboPais.options[me.comboPais.selectedIndex].text);
            console.log("A chave é: " + me.comboPais.options[me.comboPais.selectedIndex].value);
        };
        this.btnAleatoriamente.onclick = function() {
            me.comboPais.selectedIndex = Math.floor(Math.random() * me.comboPais.length);
        };
        this.btnRemoverItem.onclick = function() {
            me.comboPais.remove(0);
        };
        this.btnRemoverTodos.onclick = function() {
            while (me.comboPais.length) {
                me.comboPais.remove(0);
            }
        };
    }
}.init();