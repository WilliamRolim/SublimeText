function verificar(){
	var n1 = document.getElementById("n1").innerHTML;//article ou div innerHtml
	var n2 = document.getElementById("n2").value;//campo normal usa value

	if (n1 == n2){
		alert("Você ACERTOU o número")
	}else {
		alert ("Você ERROU!!!!")
	}
	resetar();
}

function resetar(){
	document.getElementById("n2").value = "";
	var r=Math.floor (Math.random()*100);//* 100 gerar número de 0 a 100
	document.getElementById("n1").innerHTML = r;
}