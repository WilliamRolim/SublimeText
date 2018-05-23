<meta charset="utf-8">
<?php
#GERANDO UMA SESSÃO
#se fechar o navegador agora, não vai estar logado, vc vai ter que digitar seu usuario e senha novamente, isso impede se vc entrar em um computador publico e guardar seus dados
#abrindo uma sessão com o usuario e o servidor
#ideal começar a session_star() primeira linha de codigo
session_start();
#ARMAZENDO DADOS NA MINHA SESSÃO SESSION (ARRAY)
#$_SESSION["teste"] = "William Rolim";

#echo "Sessão foi feita...."

echo "Meu nome é..: " .$_SESSION["teste"];
#enquanto estiver com o navegador aberto a informação estara salva entre mim e o servidor -- ISSO É UMA SESSÃO

#CRIANDO COOKIE = SALVO NO NAVEGADOR DO USUARIO
#QUERO QUE O USUARIO QUE ENTRE NO MEU SITE FIQUE COM A SENHA LOGADA - USO O COOKIE
#primeiro parametro a chave do meu cookie (identificação dele) = meu teste
#segundo parametro valor
#terceiro parametro tempo de vida do cookie no navegador do usuario --data e hora q ele irá expirar
#time pegar a data atual e horario + 3600 segundos (1 hora) - data de espiração

#setcookie("meuteste", "Beltrano de tal", time() + 3600);

#echo "<br>Cookie acessado com sucesso";

#ACESSANDO O COOKIE

echo "<br>Meu cookie é de: " .$_COOKIE["meuteste"];
?>