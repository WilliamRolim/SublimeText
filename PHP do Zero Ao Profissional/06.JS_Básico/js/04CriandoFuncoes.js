function trocarSection(){
	var area = document.getElementById("area");
	//vai selecionar minha section e colocar na variavel area
	var texto = prompt ("Qual seu nome?");

	area.innerHTML = texto;
	//innerHTML substitui o que tem dentro pelo conteudo ------------
	//Substituir a area do html pelo texto digitado via prompt usuario

}
function trocarSection2(nome, idade){// Via parametro guarda william na variavel nome
	var area = document.getElementById("area2");
	//vai selecionar minha section e colocar na variavel area
	var texto = prompt ("Qual seu sobrenome?");

	area.innerHTML = nome + " " + texto + " tem " + idade + " anos";
	//Substituir a area do html pelo texto digitado via prompt usuario
	
}