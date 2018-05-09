--subconsultas --consulta dentro de uma consulta
--não é recomendado que faça
--
SELECT usuarios_aula01.nome, (select faixas.titulo from faixas where faixas.id = usuarios_aula01.faixa_salarial) as faixa FROM usuarios_aula01;

--Filtrando pelo titulo

SELECT usuarios_aula01.nome FROM usuarios_aula01 WHERE (select faixas.titulo from faixas where faixas.id = usuarios_aula01.faixa_salarial) = '0 - 1000';

--forma correta de fazer

SELECT usuarios_aula01.nome FROM usuarios_aula01 LEFT JOIN faixas ON faixas.id = usuarios_aula01.faixa_salarial WHERE faixas.titulo = '0 - 1000';
