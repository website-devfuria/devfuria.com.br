// Uso básico de `beginPath` e `closePath`
// a ordem é importante
// o caminho (path) está entre as chamadas das funções `beginPath` e `closePath`

context.beginPath();
context.moveTo(30, 120);
context.lineTo(45, 60);
context.lineTo(60, 120);
context.closePath();

context.stroke();

// sem o `beginPath` o `closePath` incrivelmente funciona