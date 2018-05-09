function addBola(){
	var bola = document.createElement("article");
	bola.setAttribute("class" ,"bola");
	/*criando <article class="bola"></article>*/

	// calcular 2 posições aleatorias para eu mostrar a minha bola
	// para isso gero um número aleatorio.
	var p1 = Math.floor(Math.random() * 500);// largura math floor arredonda para inteiro
	var p2 = Math.floor(Math.random() * 400);//altura

	//inserir nossos valores na article bola
	bola.setAttribute("style","left:" + p1 + "px;top:" +p2 + "px;");
	//criando a ação de click para clicar e a bola estourar
	bola.setAttribute("onclick", "estourar(this)");


	document.body.appendChild(bola); //pegar o conteudo que
	// já está no site e adicionar um elemento novo

}

function estourar (elemento){
	document.body.removeChild(elemento);
}
function iniciar(){
	//setar um time no javascrip para cada tempo ele executar a função bola
setInterval(addBola,1000);
}