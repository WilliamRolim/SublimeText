var c = document.getElementById("canvas");
var ctx = c.getContext("2d");
ctx.moveTo(100,100);//Linha superior
ctx.lineTo(300,100);

ctx.moveTo(100,300);//linha inferior
ctx.lineTo(300,300);

ctx.moveTo(100,100);//esquerda
ctx.lineTo(100,300);

ctx.moveTo(300,100);//direita
ctx.lineTo(300,300);

ctx.moveTo(100,100);
ctx.lineTo(300,300);

ctx.moveTo(100,300);
ctx.lineTo(300,100);

ctx.stroke();