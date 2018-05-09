SELECT usuarios_aula01.nome, faixas.titulo FROM usuarios_aula01 INNER JOIN faixas ON faixas.id = usuarios_aula01.faixa_salarial;
-- Duas tabelas ao mesmo tempo
-- nome da tabela + campos dessa tabela INNER JOIN outra tabela que vc quer fazer relação - ON LIGAÇÃO ENTRE OS CAMPOS de tabelas distintas 

SELECT usuarios_aula01.nome, faixas.titulo FROM usuarios_aula01 LEFT JOIN faixas ON faixas.id = usuarios_aula01.faixa_salarial;
--LEFT JOIN Retornar todos os resultadas da tabela de esquerda,  usuarios_aula01 tabela da esquerda faixas tabela da direita
--LEFT JOIN PRIORIZA OS RESULTADOS DA ESQUERDA

SELECT usuarios_aula01.nome, faixas.titulo FROM usuarios_aula01 RIGHT JOIN faixas ON faixas.id = usuarios_aula01.faixa_salarial;
--RIGHT JOIN Resultados da tabela da direita
----RIGHT JOIN POUCO UTILIZADO

SELECT usuarios_aula01.id, usuarios_aula01.nome, usuarios_aula01.email, usuarios_aula01.data_nascimento, faixas.titulo as faixas FROM usuarios_aula01 LEFT JOIN faixas ON faixas.id = usuarios_aula01.faixa_salarial;
