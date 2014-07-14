// http://www.html5canvastutorials.com/tutorials/html5-canvas-line-joins/

canvas.width = 410;

context.lineWidth = 25;

context.moveTo(10, 100);
context.lineTo(60, 50);
context.lineTo(110, 100);
context.lineJoin = 'miter';
context.stroke();

context.moveTo(150, 100);
context.lineTo(200, 50);
context.lineTo(250, 100);
context.lineJoin = 'round';
context.stroke();

context.moveTo(300, 100);
context.lineTo(350, 50);
context.lineTo(400, 100);
context.lineJoin = 'bevel';
context.stroke();