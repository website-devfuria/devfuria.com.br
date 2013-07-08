var lampada = {
    ligada: false,
    element: document.getElementById('myimage'),
    setEvento: function() {
        lampada.element.onclick = function() {
            if (lampada.ligada) {
                lampada.apagar();
                lampada.ligada = false;
            } else {
                lampada.acender();
                lampada.ligada = true;
            }
        };
    },
    acender: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulbon.gif";
    },
    apagar: function() {
        lampada.element.src = "http://www.devfuria.com.br/js/imagens/pic_bulboff.gif";
    }
};
lampada.setEvento();
