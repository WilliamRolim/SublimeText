var v = 0;
var d = 0;
var e = 0;

function jogar(){
	var r = 0;
	var x1 = Math.floor(Math.random() * 10);
	var x2 = Math.floor(Math.random() * 10);
	var x3 = Math.floor(Math.random() * 10);
	document.getElementById("n1").innerHTML = x1;
	document.getElementById("n2").innerHTML = x2;
	document.getElementById("n3").innerHTML = x3;

	if ((x1 == x2 && x1 != x3) || (x1 == x3 && x1 != x2) || (x2 == x3 && x2 != x1)) {
		r = 2;
		e++;
	} else
	if (x1 == x2 && x1 == x3) {
		r = 3;
		v++;
	} else {
		r = 0;
		d++;
	}
	
	switch (r){
		case 0:
			document.getElementById("resultado").innerHTML = "VOCÊ PERDEU";
			document.getElementById("resultado").style.background  = "#FF0000";
			document.getElementById("placar").innerHTML  = ("VITORIAS = "+v+" <br> NA TRAVE = "+e+" <br> DERROTAS = "+d);
			break;
		
		case 2:
			document.getElementById("resultado").innerHTML = "BATEU NA TRAVE";
			document.getElementById("resultado").style.background  = "#FFFF00";
			document.getElementById("placar").innerHTML  = "VITORIAS = "+v+" <br> NA TRAVE = "+e+" <br> DERROTAS = "+d;
			break;
		
		case 3:
			document.getElementById("resultado").innerHTML = "VOCE GANHOU!!!!!!!!";
			document.getElementById("resultado").style.background  = "#00FF00";
			document.getElementById("placar").innerHTML  = "VITORIAS = "+v+" <br> NA TRAVE = "+e+" <br> DERROTAS = "+d;
			break;
	}
}
function limpar(){
	v = 0;
 	d = 0;
	e = 0;
	document.getElementById("n1").innerHTML="";
	document.getElementById("n2").innerHTML="";
	document.getElementById("n3").innerHTML="";
}