// Parece que o padrão da largura da linha é 1

context.beginPath();
context.moveTo(60, 50);
context.lineTo(200, 50);
context.stroke();

context.beginPath();
context.moveTo(60, 60);
context.lineTo(200, 60);
context.lineWidth = 1;
context.stroke();