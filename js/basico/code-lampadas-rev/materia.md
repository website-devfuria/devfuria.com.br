Code - A lâmpada (revisada)
=========================

Estou insistindo neste pequeno trecho de código com o intuito de facilitar o aprendizado. Se você já lêu a
matéria introdutória e a matéria anterior, então já conhece o código e terá menos trabalho para entender a matéria atual.
Acredito que este "menos trabalho" lhe ajudará em muito pois você focará os assuntos novos e não o código em si.

Abaixo segue o código que vamos trabalhar:

<div class="code">
<h6>JS</h6>
<pre>
var element = document.getElementById('myimage');
element.onclick = function() {
    if (element.src.match("bulbon")) {
        element.src = "../../imagens/pic_bulboff.gif";
    } else {
        element.src = "../../imagens/pic_bulbon.gif";
    }
};

<em>console.log("comunicação estabelecida");</em>
</pre>
</div>