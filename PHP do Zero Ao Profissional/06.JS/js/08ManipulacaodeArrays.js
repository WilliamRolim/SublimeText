function manipulacaoArrays(){
	var lista = ["Arroz", "Mamão", "Feijão", "Queijo", "Abobrinha" , 40];
	var texto = document.getElementById("produto").value;
	//buscar valor
	var pesquisar = document.getElementById("pesquisar").value;
	if (lista.indexOf(pesquisar) >-1){//-1 se der de 0 em diante
		alert ("Tem na Lista");
	}else{
		alert("não tem na lista");
	}
	alert("Conteudo do array:\n " +lista);
	alert("Utilizando o indexOf (buscando componente na posicao do array):  " + 
		lista.indexOf(texto));
//join : Transformar array em uma string com todos os valores do array----
//Todos os elementos separados por virgula lista.join(",") 
	alert("Utilizando o join:" + lista.join(","));
	alert("Utilizando o join:" + lista.join("/"));
	//remover o ultimo elemento do array
	alert ("Removendo  o ultimo elemento do array usando pop() " + lista.pop());
	alert(lista);
	//Removendo o primeiro elemento
	alert ("Removendo o primeiro elemento  do array usando shift()" + lista.shift())
	alert(lista);

	//push() Adicionar elemento no vetor de array (vetor)
	alert ("push()Adicionar elemento no vetor de array (vetor)" + lista.push("Adicionando com o push"));

	alert (lista);




}