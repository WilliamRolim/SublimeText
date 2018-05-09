function apertouTecla(event) {/*Event via parametro saber qual tecla foi apertada*/
	console.log("Apertou Alguma Tecla" + event.keyCode);
	/*event.keyCode = Vai dar o numero correspondente a tecla q foi
	pressionada*/
}

function apertouTecla2(event) {
	console.log("Apertou Alguma Tecla onkeyup" + event.keyCode);
}

function apertouTecla3(event) {
	console.log("Apertou Alguma Tecla onkeypress" + event.keyCode);
}

function apertouTecla4(event) {
	if(event.shiftKey == true){
	console.log("Pressionou o shift + uma tecla = event.shiftKey");}
}
/*Shiftkey = Saber que o shift está pressionado + uma tecla.
Essa propriedade somente retorna (true or false)*/

function apertouTecla5(event) {
	console.log("Apertou ctrl " + event.ctrlKey);
}

function apertouTecla6(event) {
	console.log("Apertou ALT " + event.altkey);
}
function apertouTecla7(event) {
	if(event.shiftKey == true && event.keyCode == 69){
	console.log("Pressionou o shift + E");}
}
function apertouTecla8(event) {
	console.log("Apertou META Somente apple " + event.metaKey);
}