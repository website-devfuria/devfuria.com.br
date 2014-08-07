/*
 * David Geary
 * http://corehtml5canvas.com/code-live/ch02/example-2.13/example.html
 */
function drawGrid(context, color, stepx, stepy) {
    context.beginPath();
    context.strokeStyle = color;
    context.lineWidth = 0.5;

    for (var i = stepx + 0.5; i < context.canvas.width; i += stepx) {
        context.moveTo(i, 0);
        context.lineTo(i, context.canvas.height);
        context.stroke();
    }

    for (var i = stepy + 0.5; i < context.canvas.height; i += stepy) {
        context.moveTo(0, i);
        context.lineTo(context.canvas.width, i);
        context.stroke();
    }
}
// Initialization................................................
//drawGrid(context, 'lightgray', 10, 10);