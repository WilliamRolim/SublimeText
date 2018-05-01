/*var resposta = confirm ("Deseja Excluir?");

console.log(resposta);*/
/*
var a = 10;
var b = 30;
var resposta = a + b;

alert(resposta);
*/

function somar (a, b){
   	return a + b;
}

console.log(somar(10,20));

document.getElementById("btn-calcular").onclick = function(){

var valorA = document.getElementById("v1").value;
var valorb = document.getElementById("v2").value;

alert(parseInt(valorA) + parseInt(valorb));


}