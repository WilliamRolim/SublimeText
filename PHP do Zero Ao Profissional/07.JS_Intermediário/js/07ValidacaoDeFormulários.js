function validar(){
	var valor = document.getElementById("numero").value;

	if (valor.length > 2){
		alert("Você digitou um número que tem mais de 2 algorismos")
		//se tiver mais que 2 algorismos o formulario não seja enviado
		return false;
	}else{
		return true;
	}
}