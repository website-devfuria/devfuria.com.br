context.beginPath();
context.lineWidth = 5;
context.beginPath();
context.moveTo(100, 20);

// line 1
context.lineTo(200, 160);
context.strokeStyle = 'red';
context.stroke();

// quadratic curve
context.beginPath();
context.moveTo(200,160);
context.quadraticCurveTo(230, 200, 260, 100);
context.strokeStyle = 'blue';
context.stroke();

// bezier curve
context.beginPath();
context.moveTo(260,100);
context.bezierCurveTo(290, -40, 300, 190, 400, 150);
context.strokeStyle = 'green';
context.stroke();
context.closePath();

//
// http://www.w3resource.com/html5-canvas/html5-canvas-path.php#sthash.FPMEq1uw.afFo0Xtm.dpuf
