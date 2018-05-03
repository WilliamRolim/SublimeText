function adicionarIngrediente(){
	var ing = document.getElementById("ingrediente").value;

	var listaHtml = document.getElementById("lista").innerHTML;//pego todo conteudo
	//do elemento atual

	//adicionando conteudo na lista

	listaHtml = listaHtml + "<li>" + ing + "</li>";//adiciono mais conteudo a ele

	document.getElementById("lista").innerHTML = listaHtml;

}