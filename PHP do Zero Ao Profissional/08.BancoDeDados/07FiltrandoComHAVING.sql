SELECT * FROM usuarios_aula01 HAVING id = '6';
--alias ou aliases (no plurar) mudar essa informação no retorno (pesquisa)
--ex:data de nascimento - formata-la
SELECT (id+10) as soma FROM usuarios_aula01;
--crio uma coluna temporaria;

SELECT *, (id + 10) as soma FROM usuarios_aula01;
--CRIO um novo campo e soma, quando crio um novo campo tenho
--que filtrar ele com o HAVING

SELECT *, (id+10) as soma FROM usuarios_aula01 WHERE soma <15;
--se USAR O WHERE vai aparecer um erro , pois a variavel soma não existe na tabela
--temporaria criada

SELECT *, (id+10) as soma FROM usuarios_aula01 HAVING soma <15;
--HAVING PROCESSA TODOS OS RESULTADOS depois ele FILTRA.

--WHERE SÓ PROCESSA AQUELE FILTRO ESPECIFICO

--HAVING FILTRA APÓS O RESULTADO (POS CONSULTA);
--O ideal é usar o HAVING conjunto com WHERE
