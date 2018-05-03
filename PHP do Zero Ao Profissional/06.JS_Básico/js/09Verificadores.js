function verificaUsuario(){
	var nome = document.getElementById("nome").value;
	var senha = document.getElementById("senha").value;

	if (nome == "William" && senha == "teste")
		alert("Usuario logado");
	else
		alert("Usuario Invalido");

	var x = prompt ("Digite o número");
	if (x > 10){
		alert("Maior que 10");
	}else
		alert("Não é maior que 10");
	
}