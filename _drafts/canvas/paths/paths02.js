// porque o `beginPath` abaixo...
context.beginPath();
context.moveTo(60, 30);
context.lineTo(240, 30);
context.stroke();

context.beginPath();
context.moveTo(60, 60);
context.lineTo(240, 60);
context.stroke();

context.beginPath();
context.moveTo(60, 90);
context.lineTo(240, 90);
context.stroke();

context.beginPath();
context.moveTo(60, 120);
context.lineTo(240, 120);
context.stroke();

//  ... é desnecessário? veja...
//context.moveTo(60, 30);
//context.lineTo(240, 30);
//context.stroke();
//
//context.moveTo(60, 60);
//context.lineTo(240, 60);
//context.stroke();
//
//context.moveTo(60, 90);
//context.lineTo(240, 90);
//context.stroke();
//
//context.moveTo(60, 120);
//context.lineTo(240, 120);
//context.stroke();

// Há uma diferênça de estilo, porque ?