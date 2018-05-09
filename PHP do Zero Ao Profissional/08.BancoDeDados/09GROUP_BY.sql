--exemplo descobrir quantas pessoas tem em uma faixa salarial

SELECT COUNT(* ) as contagem FROM usuarios_aula01 WHERE faixa_salarial = '1';

--Group BY TODAS AS INFORMAÇÕES COM UMA CONSULTA SÓ
--GROUP BY AGRUPAR POR GRUPOS NO CASO FAIXA SALARIAL e contalos

SELECT COUNT(*) as contagem, faixa_salarial FROM usuarios_aula01 GROUP BY faixa_salarial;
--GROUP BY AGRUPAR e CONTAR;

SELECT * FROM usuarios_aula01 GROUP BY faixa_salarial;
--esse resultado é incosistente , pois só ordena pela primeira faixa e as outras informações
--são desprezadas


