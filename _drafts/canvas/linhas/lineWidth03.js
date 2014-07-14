// O tamanho menor que 1 funciona:
// ... mas repare que sem o `beginPath` o esquema não funciona

context.beginPath();
context.moveTo(60, 50);
context.lineTo(200, 50);
context.lineWidth = 0.1;
context.stroke();

context.beginPath();
context.moveTo(60, 60);
context.lineTo(200, 60);
context.lineWidth = 0.3;
context.stroke();

context.beginPath();
context.moveTo(60, 70);
context.lineTo(200, 70);
context.lineWidth = 0.5;
context.stroke();

context.beginPath();
context.moveTo(60, 80);
context.lineTo(200, 80);
context.lineWidth = 1;
context.stroke();