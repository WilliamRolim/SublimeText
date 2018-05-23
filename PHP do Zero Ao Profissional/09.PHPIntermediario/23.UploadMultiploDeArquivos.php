<pre><!-- pre faz com que o Texto fique literal se tem quebra de linha vai ter quebra de linha na exibição tbém --> 
<?php
print_r($_FILES);
if (isset($_FILES['arquivo'])){
	if (count($_FILES['arquivo']['tmp_name']) > 0){// + de 1 foto foi enviada

		for ($q=0;$q<count($_FILES['arquivo']['tmp_name']);$q++){
			#loop com a quantidade de arquivos
			$nomedoarquivo = md5($_FILES['arquivo']['tmp_name'][$q].time().rand(0,999).'.jpg');//[$q] é um array
			move_uploaded_file($_FILES['arquivo']['tmp_name'][$q],'22arquivos/'.$nomedoarquivo);
		}
	}
	//Envio de um único arquivo
	#$nome = $_FILES['arquivo']['name'];//arquivo.jpg
//Envio de multiplos arquivo
	#$nome = $_FILES['arquivo']['name'];//name = Array

	//Envio de multiplos arquivos

}
?>
</pre>

<form method="POST" enctype="multipart/form-data">
	<br><br><strong>Arquivo:</strong><br><br>
	<!-- multiple enviar varios arquivos -->
	<!-- arquivos[] ARRAY -->
	<input type="file" name="arquivo[]" multiple><br><br>
	<input type="submit" name="Enviar Arquivos">

</form>