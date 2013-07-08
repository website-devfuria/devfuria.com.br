var element = document.getElementById('myimage');
element.onclick = function() {
    if (element.src.match("bulbon")) {
        element.src = "../../imagens/pic_bulboff.gif";
    } else {
        element.src = "../../imagens/pic_bulbon.gif";
    }
};
