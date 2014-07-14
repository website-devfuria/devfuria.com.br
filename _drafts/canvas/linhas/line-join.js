context.beginPath();
context.lineWidth = 25;

context.moveTo(50, 20);
context.lineTo(150, 20);
context.lineTo(150, 120);
context.lineJoin = "bevel";
context.stroke();

context.beginPath();
context.moveTo(50, 140);
context.lineTo(150, 140);
context.lineTo(150, 260);
context.lineJoin = "round";
context.stroke();

context.beginPath();
context.moveTo(50, 280);
context.lineTo(150, 280);
context.lineTo(150, 400);
context.lineJoin = "miter";
context.stroke();