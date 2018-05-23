<meta charset="utf-8">
<?php
echo "</br><strong>MD5 padrão de criptografia irreversivel não tenho como reverter e transcrever novamente como meu nome</strong></br>";
$nome = "William";
$nome2 = md5($nome);

echo "Nome Original: ".$nome;
echo "<br>Nome Criptografado MD5: " . $nome2;
#quando digito a senha em um site ela é criptogafada e inserida no banco de dados com padrão md5 (codigo criptografado)
echo "</br><strong>base64_encode pode ser revertido</strong></br>";
$nome3 = base64_encode($nome);
echo "Nome Original: ".$nome;
echo "<br>Nome Criptografado base64_encode: " .$nome3;

$codigo = "V2lsbGlhbQ==";
echo "<br><br>Descriptografando o texto na base64_encode, texto original é..: " . base64_decode($codigo);
?>