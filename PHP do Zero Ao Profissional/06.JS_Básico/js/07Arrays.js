function vetor(){
	var lista = ["Arroz", "Mamão", "Feijão", "Queijo", "Abobrinha" , 40];
	String text = " ";
	var listaHtml = document.getElementById("lista").innerHTML;
	var i;
	for (i = 0; i < lista.length; i++) { 
		text += lista[i] ;
	}
//pego todo conteudo
	//do elemento atual

	//adicionando conteudo na lista

	listaHtml = listaHtml  + text ;//adiciono mais conteudo a ele

	document.getElementById("lista").innerHTML = listaHtml;
}