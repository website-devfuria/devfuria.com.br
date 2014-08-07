// O fill funciona assim (aonde é esperado):
context.beginPath();
context.moveTo(30, 120);
context.lineTo(45, 60);
context.lineTo(60, 120);
context.closePath();
context.fill(); // <---antes do `stroke` e depois dos `paths`
context.stroke();


// ...mas também funciona nesta posição:
/*
context.beginPath();
context.moveTo(30, 120);
context.lineTo(45, 60);
context.lineTo(60, 120);
context.fill(); // <--- dentro do caminho (path)
context.closePath();
context.stroke();
*/


// ...e também nesta:
/*
context.beginPath();
context.moveTo(30, 120);
context.lineTo(45, 60);
context.lineTo(60, 120);
context.closePath();
context.stroke();
context.fill(); // <--- depois de tudo
*/
