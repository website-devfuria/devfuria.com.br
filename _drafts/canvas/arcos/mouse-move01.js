var ctx, canvas;
var mouseX, mouseY;
canvas = document.getElementById("myCanvas");
ctx = canvas.getContext("2d");
setInterval(draw, 10);
canvas.addEventListener("mousemove", checkMouse);
function draw() {
    ctx.strokeStyle = "rgba(255,0,0,0.1)";
    ctx.lineWidth = 5;
    ctx.beginPath();
    var startAngle = Math.random() * Math.PI * 2;
    var endAngle = startAngle + Math.PI / 4;
    ctx.arc(mouseX, mouseY, 50, startAngle, endAngle, false);
    ctx.stroke();
}
;
function checkMouse(myEvent) {
    mouseX = myEvent.pageX - canvas.offsetLeft;
    mouseY = myEvent.pageY - canvas.offsetTop;
    document.getElementById("pixelX").innerHTML = "x:" + mouseX;
    document.getElementById("pixelY").innerHTML = "y:" + mouseY;
}
;