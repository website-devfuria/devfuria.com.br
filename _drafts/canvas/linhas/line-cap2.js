context.strokeStyle = '#09f';
context.beginPath();
context.moveTo(10, 10);
context.lineTo(140, 10);
context.moveTo(10, 140);
context.lineTo(140, 140);
context.stroke();

context.beginPath();
context.moveTo(25, 10);
context.lineTo(25, 140);
context.lineCap = 'butt';
context.lineWidth = 15;
context.strokeStyle = 'black';
context.stroke();

context.beginPath();
context.moveTo(75, 10);
context.lineTo(75, 140);
context.lineCap = 'round';
context.lineWidth = 15;
context.strokeStyle = 'black';
context.stroke();

context.beginPath();
context.moveTo(130, 10);
context.lineTo(130, 140);
context.lineCap = 'square';
context.lineWidth = 15;
context.strokeStyle = 'black';
context.stroke();