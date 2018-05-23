<?php
$arquivo = $_FILES['22arquivos']; #files arquivo
#quando o usuario envia o arquivo ele fica armazendo em uma pasta temporaria no servidor, eu recebo o caminho da pasta

#tmp_name= nome do arquivo que está no servidor temporariamente size nome do arquivo em byes
#print_r[$arquivo];
if (isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])){
		#Evitar que o usuario mande arquivo com o mesmo nome e substitua o existente
	#criar um nome aleatorio;
	#md5 crio uma codificação do meu arquivo
	#time tempo atual em milessegundos, a cada milesegundos vai mudar e nunca será o mesmo do que era antes
	#rand concatenando número aleatorio entre 0 a 99 e gerando codigo md5
	$nomedoarquivo = md5(time().rand(0,99)).'.jpg';
	#houve um arquivo q foi enviado
	#criei uma pasta no meu projeto chamada arquivos
	move_uploaded_file($arquivo['tmp_name'], '22arquivos/' .$nomedoarquivo);
	echo "Arquivo enviado com SUCESSO!!!";


}
?>