// butt line cap (first line)
context.lineWidth = 25;
context.strokeStyle = '#ff0000';

context.beginPath();
context.moveTo(20, 20);
context.lineTo(20, 100);
context.lineCap = 'butt';
context.stroke();

// round line cap (second line)
context.beginPath();
context.moveTo(80, 20);
context.lineTo(80, 100);
context.lineCap = 'round';
context.stroke();

// square line cap (third line)
context.beginPath();
context.moveTo(120, 20);
context.lineTo(120, 100);
context.lineCap = 'square';
context.stroke();

//www.w3resource.com/html5-canvas/html5-canvas-lines.php#sthash.FhoYUxbY.dpuf